import { test, expect, type Page } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Réponses aux QCM des pages (api/QcmAPI.php, sql/88) : chaque clic du site et de l'application est enregistré,
// sans l'élève, et la page des statistiques classe les questions de la plus difficile à la plus facile.
const SEKCIO_1_8 = () => sql(`SELECT le.id FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 8`)
const VICOJ = () => sql(`SELECT CONCAT_WS(',', demando, provo, gxusta, fonto) FROM qcm_respondoj ORDER BY id`).split('\n').filter(Boolean)

async function sendi(page: Page, korpo: Record<string, unknown>) {
  return page.request.post('api.php?path=qcm', { data: { fonto: 'retejo', provo: 1, ...korpo } })
}

test.beforeEach(() => {
  resetTestData()
  sql('DELETE FROM qcm_respondoj')
})

test('site, visiteur sans compte : une mauvaise réponse puis la bonne sont enregistrées', async ({ page }) => {
  await page.goto('fr/cge/lec01.php?section=8')
  await expect(page.locator('#carousel_qcm')).toHaveAttribute('data-lecionero', SEKCIO_1_8())
  await page.locator('.qcm_demando:visible .qcm_nok').first().check({ force: true })
  await page.locator('.qcm_demando:visible .qcm_ok').check({ force: true })
  await expect.poll(VICOJ).toEqual(['1,1,0,R', '1,2,1,R'])
  // question suivante : on recommence au premier essai
  await expect(page.locator('.qcm_demando').nth(1)).toBeVisible()
  await page.locator('.qcm_demando:visible .qcm_ok').check({ force: true })
  await expect.poll(VICOJ).toEqual(['1,1,0,R', '1,2,1,R', '2,1,1,R'])
  expect(sql('SELECT COUNT(DISTINCT spuro) FROM qcm_respondoj')).toBe('2')
})

test('application : chaque proposition choisie est enregistrée jusqu’à la bonne', async ({ page }) => {
  await page.goto('lernejo/')
  await page.getByText('J’ai déjà un compte').click()
  await page.getByLabel('Identifiant ou adresse e-mail').fill('lernanto1')
  await page.getByLabel('Mot de passe').fill('test')
  await page.getByText('Se connecter').click()
  await expect(page.getByText('DLEK : Cours en 10 leçons')).toBeVisible()
  await page.goto(`lernejo/sekcio/${SEKCIO_1_8()}`)
  const qcm = page.getByTestId('qcm')
  const proponoj = qcm.getByRole('radio')
  await expect(proponoj.first()).toBeVisible()
  let klakoj = 0
  for (let i = 0; i < (await proponoj.count()); i++) {
    await proponoj.nth(i).click()
    klakoj++
    await page.waitForTimeout(200)
    if (await qcm.getByText(/^Bravo/).isVisible()) break
  }
  const atendataj = Array.from({ length: klakoj }, (_, i) => `1,${i + 1},${i === klakoj - 1 ? 1 : 0},A`)
  await expect.poll(VICOJ).toEqual(atendataj)
})

test('API : réponse jugée par le serveur, valeurs inconnues refusées', async ({ page }) => {
  const id = Number(SEKCIO_1_8())
  const bona = await sendi(page, { lecionero_id: id, demando: 1, propono: 2 })
  expect(await bona.json()).toEqual({ gxusta: true })
  const malbona = await sendi(page, { lecionero_id: id, demando: 1, propono: 1 })
  expect(await malbona.json()).toEqual({ gxusta: false })
  for (const korpo of [
    { lecionero_id: id, demando: 99, propono: 1 },
    { lecionero_id: id, demando: 1, propono: 9 },
    { lecionero_id: id, demando: 1, propono: 1, fonto: 'alia' },
    { lecionero_id: 6, demando: 1, propono: 1 }, // page sans QCM
    { lecionero_id: id, demando: 1, propono: 1, provo: 0 },
  ]) {
    expect((await sendi(page, korpo)).status(), JSON.stringify(korpo)).toBe(400)
  }
  expect(VICOJ()).toEqual(['1,1,1,R', '1,1,0,R'])
  expect((await page.request.get('api.php?path=qcm')).status()).toBe(405)
})

test('statistiques : la question la plus ratée en premier, avec la mauvaise réponse la plus choisie', async ({ page }) => {
  const id = Number(SEKCIO_1_8())
  // question 2 : trois premiers essais faux (deux fois la même proposition) ; question 1 : un seul, juste
  await sendi(page, { lecionero_id: id, demando: 1, propono: 2 })
  for (const propono of [2, 2, 3]) await sendi(page, { lecionero_id: id, demando: 2, propono })
  // ancienne version d'une question : ne compte plus
  sql(`INSERT INTO qcm_respondoj (lecionero_id, demando, spuro, propono, gxusta, provo, fonto) VALUES (${id}, 3, '${'0'.repeat(32)}', 1, 0, 1, 'R')`)
  await login(page, USERS.korektanto)
  await page.goto('statLauxQcm.php')
  await expect(page.getByText('Pas encore assez de réponses.')).toBeVisible()
  await page.goto('statLauxQcm.php?min=1')
  const vicoj = page.locator('table.qcm-stat tbody tr')
  await expect(vicoj).toHaveCount(2)
  await expect(vicoj.first()).toContainText('CG 1.8 – Q2')
  await expect(vicoj.first()).toContainText('(2 fois)')
  await expect(vicoj.first().locator('td').last()).toHaveText('100,0 %')
  await expect(vicoj.nth(1)).toContainText('CG 1.8 – Q1')
  await expect(vicoj.nth(1).locator('td').last()).toHaveText('0,0 %')
  await expect(vicoj.first().getByRole('link')).toHaveAttribute('href', 'fr/cge/lec01.php?section=8')
})
