import { test, expect, type Page, type APIRequestContext } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Choix du mode de correction à la fin de la première leçon (#627) : correcteur bénévole, même correcteur qu'au cours
// précédent, correcteur connu, correction automatique (IA) ou sans correcteur ; puis administration et profil.
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
const KOREKTANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='korektanto1'")
const IA_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='ia-korektanto'")
const LECIONO_ID = () => sql("SELECT id FROM lecionoj WHERE kurso='CG' AND numero=1")
const nunaKorektanto = () => sql(`SELECT korektanto FROM nuna_kurso WHERE studanto=${LERNANTO_ID()} AND kurso='CG'`)
const elekto = () => sql(`SELECT CONCAT(elekto, '|', COALESCE(teksto, ''), '|', atendas) FROM korektadaj_elektoj WHERE persono_id=${LERNANTO_ID()} AND kurso='CG'`)
const sendita = () => sql(`SELECT COUNT(*) FROM personoj_lecionoj WHERE persono_id=${LERNANTO_ID()} AND leciono_id=${LECIONO_ID()}`)

test.beforeEach(() => {
  resetTestData()
  // le compte du correcteur IA (sql/62) est effacé par le jeu de test
  sql(`INSERT INTO personoj (ekdato, enirnomo, personnomo, familinomo, retadreso, rajtoj, aktivigita, pasvorto_md5)
    VALUES (NOW(), 'ia-korektanto', 'IA', '', '', 'K', 1, '!')`)
  sql('DELETE FROM korektadaj_elektoj')
  sql('DELETE FROM ia_korektadoj')
  const lernanto = LERNANTO_ID()
  // leçon 1 faite jusqu'à la dernière section (envoi), avec une réponse
  sql(`INSERT INTO personoj_lecioneroj (dato, persono_id, lecionero_id, ekdato)
    SELECT NOW(), ${lernanto}, id, NOW() FROM lecioneroj WHERE leciono_id=${LECIONO_ID()} AND ordo <> 13`)
  sql(`INSERT INTO respondoj (persono_id, ekzercero_id, respondo, normaligita)
    SELECT ${lernanto}, ee.id, 'La teo estas varma.', 'la teo estas varma' FROM ekzerceroj ee JOIN ekzercoj e ON e.id=ee.ekzerco_id
    JOIN lecioneroj le ON le.id=e.lecionero_id WHERE le.leciono_id=${LECIONO_ID()} ORDER BY le.ordo, e.id, ee.numero LIMIT 1`)
})

async function elekti(page: Page, kodo: string, teksto?: string) {
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=13')
  await page.locator(`input[name=korektada_elekto][value=${kodo}]`).check({ force: true })
  if (teksto !== undefined) {
    await page.locator('#konata_korektanto').fill(teksto)
  }
  await page.locator('#petiKorektanton_button').click()
  await page.waitForURL(/konfirmo\.php/)
}

test('les choix proposés, sans « même correcteur » pour un premier cours', async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=13')
  const ebloj = page.locator('input[name=korektada_elekto]')
  expect(await ebloj.evaluateAll((l) => l.map((e) => (e as HTMLInputElement).value))).toEqual(['volontulo', 'konato', 'ia', 'sen'])
  await expect(page.locator('input[name=korektada_elekto][value=volontulo]')).toBeChecked()
  // le champ du correcteur connu n'apparaît qu'avec ce choix
  await expect(page.locator('#konata_korektanto')).toBeHidden()
  await page.locator('input[name=korektada_elekto][value=konato]').check({ force: true })
  await expect(page.locator('#konata_korektanto')).toBeVisible()
  // sans nom, le choix est refusé
  page.once('dialog', (d) => d.accept())
  await page.locator('#petiKorektanton_button').click()
  await expect(page.locator('#petiKorektanton_button')).not.toHaveClass(/disabled/)
  expect(elekto()).toBe('')
})

test('sans correcteur : la leçon est terminée, rien n’est envoyé, le choix revient à la leçon suivante', async ({ page }) => {
  await elekti(page, 'sen')
  await expect(page).toHaveURL(/kazo=5/)
  await expect(page.locator('#leciono-enketo')).toContainText('sans correcteur')
  expect(elekto()).toBe('sen||0')
  expect(nunaKorektanto()).toBe('')
  expect(sendita()).toBe('0')
  // la section d'envoi est terminée
  expect(sql(`SELECT COUNT(*) FROM personoj_lecioneroj pl JOIN lecioneroj le ON le.id=pl.lecionero_id
    WHERE pl.persono_id=${LERNANTO_ID()} AND le.leciono_id=${LECIONO_ID()} AND le.ordo=13`)).toBe('1')
  // profil
  await page.goto('personinformoj.php')
  await expect(page.locator('#korektado')).toContainText('vous suivez ce cours seul')
})

test('correcteur connu retrouvé par son identifiant : attribué tout de suite', async ({ page }) => {
  await elekti(page, 'konato', 'Korektanto1')
  await expect(page).toHaveURL(/kazo=2/)
  expect(nunaKorektanto()).toBe(KOREKTANTO_ID())
  expect(elekto()).toBe('konato|Korektanto1|0')
})

test('correcteur connu introuvable : leçon gardée, administrateur qui fait le lien', async ({ page }) => {
  await elekti(page, 'konato', 'Marie')
  await expect(page).toHaveURL(/kazo=6/)
  expect(elekto()).toBe('konato|Marie|1')
  expect(nunaKorektanto()).toBe('')
  expect(sendita()).toBe('1')
  // la fin de leçon rappelle l'attente, sans nouveau choix
  await page.goto('fr/cge/lec01.php?section=13')
  await expect(page.locator('.korektadaj-elektoj')).toContainText('Marie')
  await expect(page.locator('input[name=korektada_elekto]')).toHaveCount(0)

  await page.context().clearCookies()
  await login(page, USERS.admin)
  await page.goto('administri.php')
  const listo = page.locator('ul.konatoj')
  await expect(listo).toContainText('lernanto1')
  await expect(listo).toContainText('Marie')
  await listo.locator('a', { hasText: 'lernanto1' }).click()
  await expect(page.getByText("Choix de l'élève")).toContainText('à retrouver')
  await page.locator('select[name=korektanto_id]').selectOption(KOREKTANTO_ID(), { force: true })
  await page.locator('form.korektanto-formularo button[type=submit]').click()
  await expect(page).toHaveURL(/validi=jes/)
  expect(nunaKorektanto()).toBe(KOREKTANTO_ID())
  expect(elekto()).toBe('konato|Marie|0')
  await expect(page.locator('ul.konatoj')).toHaveCount(0)
})

test('correction automatique : correcteur IA et leçon mise en file', async ({ page }) => {
  await elekti(page, 'ia')
  await expect(page).toHaveURL(/kazo=4/)
  expect(nunaKorektanto()).toBe(IA_ID())
  expect(elekto()).toBe('ia||0')
  expect(sql(`SELECT stato FROM ia_korektadoj WHERE persono_id=${LERNANTO_ID()} AND leciono_id=${LECIONO_ID()}`)).toBe('atendas')
  // profil : retour à un correcteur bénévole
  await page.goto('personinformoj.php')
  await expect(page.locator('#korektado')).toContainText('correction automatique')
  page.once('dialog', (d) => d.accept())
  await page.getByRole('button', { name: 'Être corrigé par un correcteur bénévole' }).click()
  await expect(page).toHaveURL(/korektado=volontulo/)
  expect(nunaKorektanto()).toBe(KOREKTANTO_ID())
  expect(elekto()).toBe('volontulo||0')
  // et de nouveau vers l'IA : la leçon pas encore corrigée repart en file
  sql('DELETE FROM ia_korektadoj')
  page.once('dialog', (d) => d.accept())
  await page.getByRole('button', { name: 'Passer à la correction automatique' }).click()
  await expect(page).toHaveURL(/korektado=ia/)
  expect(nunaKorektanto()).toBe(IA_ID())
  expect(sql(`SELECT stato FROM ia_korektadoj WHERE persono_id=${LERNANTO_ID()} AND leciono_id=${LECIONO_ID()}`)).toBe('atendas')
})

test('même correcteur qu’au cours précédent, proposé en premier', async ({ page }) => {
  sql(`INSERT INTO nuna_kurso (ekdato, lastdato, korektanto, studanto, kurso, nunleciono, stato)
    VALUES (NOW(), NOW(), ${KOREKTANTO_ID()}, ${LERNANTO_ID()}, 'GR', 3, 'K')`)
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=13')
  const unua = page.locator('input[name=korektada_elekto]').first()
  await expect(unua).toHaveValue('sama')
  await expect(unua).toBeChecked()
  await expect(page.locator('.korektadaj-elektoj')).toContainText('Garder mon correcteur')
  await page.locator('#petiKorektanton_button').click()
  await page.waitForURL(/konfirmo\.php\?kazo=2/)
  expect(nunaKorektanto()).toBe(KOREKTANTO_ID())
  expect(elekto()).toBe('sama||0')
})

// Même choix par l'API de l'application (#627) : choix proposés dans le récapitulatif, envoi avec le choix, changement de mode.
const API = 'api.php?path='
async function jxetono(request: APIRequestContext) {
  const r = await request.post(`${API}auth/token`, { data: { identigilo: 'lernanto1', pasvorto: 'test' } })
  return { headers: { Authorization: `Bearer ${(await r.json()).access_token}` } }
}

test('API : choix proposés, sans correcteur puis correction automatique, puis correcteur bénévole', async ({ request }) => {
  const kun = await jxetono(request)
  const resumo = await (await request.get(`${API}lernado/lecionoj/CG/1/resumo`, kun)).json()
  expect(resumo.korektado).toMatchObject({ korektanto: false, ia: false, elekto: null, atendas: null })
  expect(resumo.korektado.ebloj.map((e: { kodo: string }) => e.kodo)).toEqual(['volontulo', 'konato', 'ia', 'sen'])

  // correcteur connu sans nom : refusé
  expect((await request.post(`${API}lernado/lecionoj/CG/1/sendi`, { ...kun, data: { elekto: 'konato', teksto: ' ' } })).status()).toBe(422)

  expect(await (await request.post(`${API}lernado/lecionoj/CG/1/sendi`, { ...kun, data: { elekto: 'sen' } })).json()).toEqual({ rezulto: 'sen_korektanto' })
  let kursoj = (await (await request.get(`${API}lernado/kursoj`, kun)).json()).kursoj
  expect(kursoj[0]).toMatchObject({ kodo: 'CG', korektanto: null, elekto: 'sen' })
  // sans choix, un nouvel envoi garde « sans correcteur »
  expect(await (await request.post(`${API}lernado/lecionoj/CG/1/sendi`, kun)).json()).toEqual({ rezulto: 'sen_korektanto' })
  expect((await (await request.get(`${API}lernado/lecionoj/CG/1/resumo`, kun)).json()).korektado.elekto).toBe('sen')

  expect(await (await request.post(`${API}lernado/lecionoj/CG/1/sendi`, { ...kun, data: { elekto: 'ia' } })).json()).toEqual({ rezulto: 'sendita_ia' })
  kursoj = (await (await request.get(`${API}lernado/kursoj`, kun)).json()).kursoj
  expect(kursoj[0]).toMatchObject({ kodo: 'CG', korektanto: { ia: true }, elekto: null })
  expect((await (await request.get(`${API}lernado/lecionoj/CG/1/resumo`, kun)).json()).korektado).toMatchObject({ korektanto: true, ia: true, ebloj: [] })

  expect(await (await request.post(`${API}lernado/kursoj/CG/korektado`, { ...kun, data: { al: 'volontulo' } })).json()).toEqual({ rezulto: 'farita' })
  expect(nunaKorektanto()).toBe(KOREKTANTO_ID())
  expect((await request.post(`${API}lernado/kursoj/GR/korektado`, { ...kun, data: { al: 'ia' } })).status()).toBe(409)
})
