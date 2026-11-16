import { test, expect, type Page } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'
import { clearMails, linkFromMail, mailsTo, waitForMail } from '../helpers/mailhog'

// Changement d'adresse e-mail par l'élève (#1107) : la nouvelle adresse reste en attente jusqu'au clic sur le lien.
const MALNOVA = 'lernanto1@mailinator.com'
const NOVA = 'e2e-nova-adreso@mailinator.com'
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
const RETADRESO = () => sql(`SELECT retadreso FROM personoj WHERE id=${LERNANTO_ID()}`)

async function peti(page: Page, nova: string, pasvorto = 'test'): Promise<void> {
  await page.goto('personinformoj.php')
  await page.getByRole('link', { name: 'Changer d’adresse e-mail' }).click()
  await page.locator('#nova').fill(nova)
  await page.locator('#pasvorto').fill(pasvorto)
  await page.getByRole('button', { name: 'Envoyer le lien de confirmation' }).click()
}

// connexion par l'adresse e-mail au lieu de l'identifiant
async function ensaluti(page: Page, retadreso: string): Promise<void> {
  await login(page, { login: retadreso, password: 'test' })
  await expect(page.locator('#uzantomenuo .uzanto')).toContainText('lernanto1')
}

test.beforeEach(async () => {
  resetTestData()
  sql(`DELETE FROM personoj WHERE enirnomo='e2ealia'`)
  sql(`DELETE FROM nuna_kurso WHERE studanto=${LERNANTO_ID()}`)
  sql(`DELETE FROM protokolo WHERE kategorio='CHANGEMENT ADRESSE'`)
  await clearMails()
})

test('demande : lien à la nouvelle adresse, information à l’ancienne, rien ne change avant validation', async ({ page, context }) => {
  await login(page, USERS.lernanto)
  await peti(page, NOVA)
  await expect(page).toHaveURL(/personinformoj\.php\?retadreso=petita/)
  await expect(page.locator('.retadreso-atendanta')).toContainText(NOVA)

  const ligilo = await waitForMail(NOVA, 'Confirmez votre nouvelle adresse')
  expect(ligilo.body).toContain('retadreso.php?sxlosilo=')
  const informo = await waitForMail(MALNOVA, 'Demande de changement d')
  expect(informo.body).toContain(NOVA)

  // avant validation : l'adresse du compte et la connexion restent les anciennes
  expect(RETADRESO()).toBe(MALNOVA)
  await context.clearCookies()
  await ensaluti(page, MALNOVA)
})

test('validation par le lien : l’adresse change, on se connecte avec la nouvelle, le correcteur est prévenu', async ({ page, context }) => {
  sql(`INSERT INTO nuna_kurso (ekdato, lastdato, korektanto, studanto, kurso, nunleciono, stato)
    VALUES (NOW(), NOW(), (SELECT id FROM personoj WHERE enirnomo='korektanto1'), ${LERNANTO_ID()}, 'CG', 2, 'K')`)
  await login(page, USERS.lernanto)
  await peti(page, NOVA)
  const mail = await waitForMail(NOVA, 'Confirmez votre nouvelle adresse')

  // le lien s'ouvre sans être connecté (autre appareil)
  await context.clearCookies()
  await page.goto(linkFromMail(mail, 'retadreso.php'))
  await expect(page.locator('.retadreso-validita')).toContainText(NOVA)
  expect(RETADRESO()).toBe(NOVA)
  expect(sql(`SELECT COUNT(*) FROM personoj WHERE id=${LERNANTO_ID()} AND nova_retadreso IS NULL`)).toBe('1')

  const alKorektanto = await waitForMail('korektanto1@mailinator.com', 'Nouvelle adresse de votre élève lernanto1')
  expect(alKorektanto.body).toContain(NOVA)

  await ensaluti(page, NOVA)

  // le lien ne sert qu'une fois
  await page.goto(linkFromMail(mail, 'retadreso.php'))
  await expect(page.locator('.retadreso-eraro')).toContainText('plus valable')
})

test('adresse déjà utilisée par un autre compte : refusée', async ({ page }) => {
  sql(`INSERT INTO personoj (enirnomo, retadreso, rajtoj, aktivigita, ekdato) VALUES ('e2ealia', '${NOVA}', 'S', 1, NOW())`)
  await login(page, USERS.lernanto)
  await peti(page, NOVA.toUpperCase())
  await expect(page.locator('.retadreso-eraro')).toContainText('déjà utilisée')
  expect((await mailsTo(NOVA)).length).toBe(0)
})

test('mauvais mot de passe : refusé', async ({ page }) => {
  await login(page, USERS.lernanto)
  await peti(page, NOVA, 'malgxusta')
  await expect(page.locator('.retadreso-eraro')).toHaveText('Mot de passe incorrect.')
  expect(sql(`SELECT COUNT(*) FROM personoj WHERE id=${LERNANTO_ID()} AND nova_retadreso IS NULL`)).toBe('1')
})

test('lien expiré ou clé invalide', async ({ page }) => {
  await login(page, USERS.lernanto)
  await peti(page, NOVA)
  const mail = await waitForMail(NOVA, 'Confirmez votre nouvelle adresse')
  sql(`UPDATE personoj SET nova_retadreso_dato = NOW() - INTERVAL 8 DAY WHERE id=${LERNANTO_ID()}`)
  await page.goto(linkFromMail(mail, 'retadreso.php'))
  await expect(page.locator('.retadreso-eraro')).toContainText('plus valable')
  expect(RETADRESO()).toBe(MALNOVA)
  await page.goto('retadreso.php?sxlosilo=nevalida')
  await expect(page.locator('.retadreso-eraro')).toContainText('pas valide')
})

test('annulation de la demande, puis renvoi d’une nouvelle', async ({ page }) => {
  await login(page, USERS.lernanto)
  await peti(page, NOVA)
  const mail = await waitForMail(NOVA, 'Confirmez votre nouvelle adresse')
  await page.getByRole('button', { name: 'Annuler' }).click()
  await expect(page).toHaveURL(/retadreso=nuligita/)
  await expect(page.locator('.retadreso-atendanta')).toHaveCount(0)
  await page.goto(linkFromMail(mail, 'retadreso.php'))
  await expect(page.locator('.retadreso-eraro')).toContainText('plus valable')
  expect(RETADRESO()).toBe(MALNOVA)

  await peti(page, NOVA)
  await clearMails()
  await page.getByRole('button', { name: 'Renvoyer le lien' }).click()
  await expect(page).toHaveURL(/retadreso=resendita/)
  await waitForMail(NOVA, 'Confirmez votre nouvelle adresse')
})

test('l’administrateur voit la demande et peut la valider', async ({ page }) => {
  await login(page, USERS.lernanto)
  await peti(page, NOVA)
  await page.context().clearCookies()
  await login(page, USERS.admin)
  await page.goto(`administri.php?celpersono_id=${LERNANTO_ID()}`)
  await expect(page.locator('.retadreso-atendanta')).toContainText(NOVA)
  await page.locator('.retadreso-atendanta').getByRole('button', { name: 'Valider' }).click()
  await expect(page).toHaveURL(/retadreso=validi/)
  expect(RETADRESO()).toBe(NOVA)
})

test('API de l’application : demande puis annulation', async ({ request }) => {
  const ensaluto = await request.post('api.php?path=auth/token', { data: { identigilo: 'lernanto1', pasvorto: 'test' } })
  const at = (await ensaluto.json()).access_token as string
  const kun = { headers: { Authorization: `Bearer ${at}` } }
  const malgxusta = await request.post('api.php?path=lernado/retadreso', { ...kun, data: { retadreso: NOVA, pasvorto: 'x' } })
  expect(malgxusta.status()).toBe(422)
  const peto = await request.post('api.php?path=lernado/retadreso', { ...kun, data: { retadreso: NOVA, pasvorto: 'test' } })
  expect(peto.status()).toBe(200)
  expect(await peto.json()).toMatchObject({ retadreso: MALNOVA, atendanta: { retadreso: NOVA } })
  await waitForMail(NOVA, 'Confirmez votre nouvelle adresse')
  const nuligo = await request.delete('api.php?path=lernado/retadreso', kun)
  expect(await nuligo.json()).toMatchObject({ retadreso: MALNOVA, atendanta: null })
})
