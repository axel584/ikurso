import { test, expect, type Page } from '@playwright/test'
import { resetTestData, sql } from '../helpers/db'
import { clearMails, linkFromMail, waitForMail } from '../helpers/mailhog'

// Mots de passe avec des caractères spéciaux : inscription, activation, puis connexion avec le même mot de passe.
test.beforeAll(() => resetTestData())
test.beforeEach(() => clearMails())

const MOTS_DE_PASSE = {
  arobase: 'mot@passe1',
  diese: 'mot#passe1',
  apostrophe: "mot'passe1",
  guillemet: 'mot"passe1',
  'les quatre': `a@b#c'd"e`,
  'barre oblique inverse': 'mot\\passe1',
}

// empreinte attendue : stripslashes() (inscription, connexion, réinitialisation), puis échappement SQL
function sansBarres(motDePasse: string): string {
  return motDePasse.replace(/\\(.?)/g, '$1').replace(/'/g, "''")
}

async function inscrire(page: Page, login: string, email: string, motDePasse: string): Promise<void> {
  await page.goto('index.php')
  await page.locator('a[data-target="aligxi"]:visible').first().click()
  await page.locator('#aligxi_retadreso').fill(email)
  await page.locator('#aligxi_identigilo').fill(login)
  await page.locator('#aligxi_pasvorto').fill(motDePasse)
  await page.locator('#inscription_button').click()
  await expect(page.locator('#parto2')).toBeVisible()
}

async function connecter(page: Page, login: string, motDePasse: string): Promise<void> {
  await page.goto('index.php')
  await page.locator('a[href="#konektigxi"]:visible').first().click()
  await page.locator('#eniri_identigilo').fill(login)
  await page.locator('#eniri_pasvorto').fill(motDePasse)
  await page.locator('#connection_button').click()
}

for (const [nom, motDePasse] of Object.entries(MOTS_DE_PASSE)) {
  test(`mot de passe avec ${nom} : inscription puis connexion`, async ({ page }) => {
    const login = `e2emdp${Date.now()}`
    const email = `${login}@mailinator.com`
    await inscrire(page, login, email, motDePasse)
    expect(sql(`SELECT pasvorto_md5 = MD5('${sansBarres(motDePasse)}') FROM personoj WHERE enirnomo='${login}'`)).toBe('1')

    const mail = await waitForMail(email, 'Activation de votre compte')
    await page.goto(linkFromMail(mail, 'aktivigi.php'))
    await expect(page).toHaveURL(/personinformoj\.php\?aktivigo=ok/)
    await page.goto('eliri.php')

    await connecter(page, login, motDePasse)
    await expect(page.locator('#eniri_pasvorto')).not.toHaveClass(/invalid/)
    await expect(page).not.toHaveURL(/localhost:8080\/(index\.php)?$/)
    await expect(page.locator('#uzantomenuo .uzanto')).toContainText(login)
  })
}

async function demanderNouveauMotDePasse(page: Page, email: string, motDePasse: string): Promise<void> {
  await page.goto('index.php')
  await page.locator('a[href="#konektigxi"]:visible').first().click()
  await page.locator('#aperigi_novigi_pasvorton_button').click()
  await page.locator('#sendi_novan_pasvorton_retadreso').fill(email)
  await page.locator('#sendi_novan_pasvorton_button').click()
  await expect(page.locator('#sendi_novan_pasvorton_parto2')).not.toHaveClass(/hide/)
  const mail = await waitForMail(email, 'Votre mot de passe')
  await page.goto(linkFromMail(mail, 'index.php'))
  await page.locator('#novigi_pasvorton_pasvorto').fill(motDePasse)
  await page.locator('#novigi_pasvorton_sendi_button').click()
  await expect(page.getByText('Votre mot de passe a bien été réinitialisé')).toBeVisible({ timeout: 10000 })
}

for (const motDePasse of [`a@b#c'd"e`, 'mot\\passe1']) {
test(`mot de passe oublié : nouveau mot de passe ${motDePasse}, puis connexion (#1097)`, async ({ page }) => {
  resetTestData()
  const email = 'lernanto1@mailinator.com'
  await demanderNouveauMotDePasse(page, email, motDePasse)
  expect(sql(`SELECT pasvorto_md5 = MD5('${sansBarres(motDePasse)}') FROM personoj WHERE retadreso='${email}'`)).toBe('1')

  await connecter(page, 'lernanto1', motDePasse)
  await expect(page).not.toHaveURL(/localhost:8080\/(index\.php)?$/)
  await expect(page.locator('#uzantomenuo .uzanto')).toContainText('lernanto1')
})
}

test("adresse e-mail avec un + : inscription, activation, connexion et mot de passe oublié (#1097)", async ({ page }) => {
  const login = `e2eplus${Date.now()}`
  const email = `${login}+ikurso@mailinator.com`
  await inscrire(page, login, email, 'motdepasse')
  expect(sql(`SELECT retadreso FROM personoj WHERE enirnomo='${login}'`)).toBe(email)

  const mail = await waitForMail(email, 'Activation de votre compte')
  await page.goto(linkFromMail(mail, 'aktivigi.php'))
  await expect(page).toHaveURL(/personinformoj\.php\?aktivigo=ok/)
  await page.goto('eliri.php')

  await demanderNouveauMotDePasse(page, email, 'nouveau+mdp')
  await connecter(page, email, 'nouveau+mdp')
  await expect(page.locator('#uzantomenuo .uzanto')).toContainText(login)
})

// Tous les chemins avec une série de caractères spéciaux : page d'inscription aligxi.php, application (inscription,
// connexion), confirmation par mot de passe (changement d'adresse dans l'application). Le # était soupçonné :
// il passe partout ; la barre oblique inverse échouait après une inscription par la page aligxi.php, et dans les
// confirmations par mot de passe (EnirAPI::pasvortoGxustas).
const SPECIAUX = ['mot#passe1', '#debut', 'mot&pa+ss%20e', 'mot passe é€😀', 'mot?pa=ss;e<b>', `a@b#c'd"e`, 'mot\\passe1', 'fin\\']
const API = 'api.php?path='

for (const motDePasse of SPECIAUX) {
  test(`page d'inscription aligxi.php puis connexion site et application : ${motDePasse}`, async ({ page, request }) => {
    const login = `e2epage${Date.now()}`
    const email = `${login}@mailinator.com`
    await page.goto('aligxi.php')
    await page.locator('#aligxi_kurso_retadreso').fill(email)
    await page.locator('#aligxi_kurso_identigilo').fill(login)
    await page.locator('#aligxi_kurso_pasvorto').fill(motDePasse)
    await page.locator('#inscription_kurso_button').click()
    await expect(page.locator('#parto2_kurso')).toBeVisible()
    sql(`UPDATE personoj SET aktivigita=1 WHERE enirnomo='${login}'`)

    await connecter(page, login, motDePasse)
    await expect(page.locator('#uzantomenuo .uzanto')).toContainText(login)
    const r = await request.post(`${API}auth/token`, { data: { identigilo: login, pasvorto: motDePasse } })
    expect(r.status()).toBe(200)
  })

  test(`application : inscription, connexion et confirmation par mot de passe : ${motDePasse}`, async ({ page, request }) => {
    const login = `e2eapp${Date.now()}`
    const email = `${login}@mailinator.com`
    const inscr = await request.post(`${API}auth/register`, { data: { enirnomo: login, pasvorto: motDePasse, retadreso: email } })
    expect(inscr.status()).toBe(201)
    sql(`UPDATE personoj SET aktivigita=1, rajtoj='S' WHERE enirnomo='${login}'`)

    const r = await request.post(`${API}auth/token`, { data: { identigilo: email, pasvorto: motDePasse } })
    expect(r.status()).toBe(200)
    const { access_token } = await r.json()
    const auth = { Authorization: `Bearer ${access_token}` }
    const malbona = await request.post(`${API}lernado/retadreso`, { headers: auth, data: { retadreso: `nova${email}`, pasvorto: 'x' + motDePasse } })
    expect((await malbona.json()).error).toBe('Mot de passe incorrect')
    const bona = await request.post(`${API}lernado/retadreso`, { headers: auth, data: { retadreso: `nova${email}`, pasvorto: motDePasse } })
    expect(bona.status()).toBe(200)

    await connecter(page, login, motDePasse)
    await expect(page.locator('#uzantomenuo .uzanto')).toContainText(login)
  })
}

test('ancien compte de la page aligxi.php avec une barre oblique inverse : la connexion marche', async ({ page, request }) => {
  // empreinte du mot de passe tel quel, sans stripslashes() (avant la correction)
  sql("INSERT INTO personoj (ekdato, enirnomo, retadreso, rajtoj, aktivigita, pasvorto_md5) VALUES (NOW(), 'e2emalnova', 'e2emalnova@mailinator.com', 'P', 1, MD5('mot\\\\passe1'))")
  const r = await request.post(`${API}auth/token`, { data: { identigilo: 'e2emalnova', pasvorto: 'mot\\passe1' } })
  expect(r.status()).toBe(200)
  await connecter(page, 'e2emalnova', 'mot\\passe1')
  await expect(page.locator('#uzantomenuo .uzanto')).toContainText('e2emalnova')
  sql("DELETE FROM personoj WHERE enirnomo='e2emalnova'")
})
