import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Le correcteur arrête ou remet les rappels automatiques d'un de ses élèves depuis « Mes élèves » (#641).
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
const rappel = () => sql(`SELECT rajto FROM personoj_agordoj WHERE persono_id=${LERNANTO_ID()} AND agordo='RAPPEL'`)

test.beforeEach(() => {
  resetTestData()
  sql(`
    INSERT INTO nuna_kurso (ekdato, lastdato, korektanto, studanto, kurso, nunleciono, stato)
    SELECT CURDATE(), CURDATE(), k.id, e.id, 'CG', 1, 'N'
    FROM personoj k, personoj e
    WHERE k.enirnomo='korektanto1' AND e.enirnomo='lernanto1'
  `)
  sql(`INSERT INTO personoj_agordoj (persono_id, agordo, rajto, dato) VALUES (${LERNANTO_ID()}, 'RAPPEL', 1, NOW())
    ON DUPLICATE KEY UPDATE rajto = 1`)
})

test('le correcteur arrête les rappels de son élève', async ({ page }) => {
  await login(page, USERS.korektanto)
  await page.goto('miajlernantoj.php')
  const karto = page.locator('.lernanto', { hasText: 'lernanto1' })
  await expect(karto).toContainText('Reçoit les rappels automatiques')
  await karto.getByRole('button', { name: 'Arrêter les rappels' }).click()
  await expect(page).toHaveURL(/miajlernantoj\.php\?farite=jes/)
  await expect(page.locator('.lernanto', { hasText: 'lernanto1' })).toContainText('Ne reçoit pas les rappels automatiques')
  await expect(page.locator('.lernanto', { hasText: 'lernanto1' }).getByRole('button', { name: 'Arrêter les rappels' })).toHaveCount(0)
  expect(rappel()).toBe('0')
  expect(sql(`SELECT stop_rappel FROM personoj WHERE id=${LERNANTO_ID()}`)).toBe('J')
  expect(sql(`SELECT teksto FROM protokolo WHERE persono_id=${LERNANTO_ID()} AND kategorio='MALABONO' ORDER BY id DESC LIMIT 1`))
    .toContain('ne reçoit plus RAPPEL (correcteur korektanto1)')
})

test('le correcteur remet les rappels après un avertissement', async ({ page }) => {
  sql(`UPDATE personoj_agordoj SET rajto = 0 WHERE persono_id=${LERNANTO_ID()} AND agordo='RAPPEL'`)
  await login(page, USERS.korektanto)
  await page.goto('miajlernantoj.php')
  const karto = page.locator('.lernanto', { hasText: 'lernanto1' })
  await expect(karto).toContainText('Si c’est l’élève qui a retiré les rappels, ne les remettez pas.')
  const remettre = karto.getByRole('button', { name: 'Remettre les rappels' })

  // avertissement refusé : rien ne change
  page.once('dialog', (dialogo) => dialogo.dismiss())
  await remettre.click()
  await expect(page).toHaveURL(/miajlernantoj\.php$/)
  expect(rappel()).toBe('0')

  // avertissement accepté
  let mesagxo = ''
  page.once('dialog', (dialogo) => { mesagxo = dialogo.message(); dialogo.accept() })
  await remettre.click()
  await expect(page).toHaveURL(/miajlernantoj\.php\?farite=jes/)
  expect(mesagxo).toContain('ne les remettez pas')
  expect(rappel()).toBe('1')
  await expect(page.locator('.lernanto', { hasText: 'lernanto1' })).toContainText('Reçoit les rappels automatiques')
  expect(sql(`SELECT teksto FROM protokolo WHERE persono_id=${LERNANTO_ID()} AND kategorio='MALABONO' ORDER BY id DESC LIMIT 1`))
    .toContain('reçoit de nouveau RAPPEL (correcteur korektanto1)')
})

test('un correcteur ne peut pas arrêter les rappels d’un élève qui n’est pas le sien', async ({ page }) => {
  sql(`UPDATE nuna_kurso SET korektanto = (SELECT id FROM personoj WHERE enirnomo='administranto') WHERE studanto=${LERNANTO_ID()}`)
  await login(page, USERS.korektanto)
  await page.goto('miajlernantoj.php')
  const respondo = await page.request.post('sxangxiRememorigojn.php', { form: { studanto: LERNANTO_ID() }, maxRedirects: 0 })
  expect(respondo.headers()['location']).toContain('erarkodo=4')
  expect(rappel()).toBe('1')
})
