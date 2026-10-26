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
