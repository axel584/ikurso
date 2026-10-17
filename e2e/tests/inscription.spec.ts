import { test, expect } from '@playwright/test'
import { resetTestData, sql } from '../helpers/db'
import { clearMails, linkFromMail, waitForMail } from '../helpers/mailhog'

test.beforeAll(() => resetTestData())
test.beforeEach(() => clearMails())

// L'inscription vérifie que le domaine a un serveur mail (MX) : on prend un domaine réel.
// Les mails partent vers MailHog, rien n'est réellement envoyé.
function nouvelUtilisateur() {
  const id = `e2e${Date.now()}`
  return { login: id, email: `${id}@mailinator.com`, password: 'motdepasse' }
}

async function ouvrirInscription(page: import('@playwright/test').Page) {
  await page.goto('index.php')
  await page.locator('a[data-target="aligxi"]').first().click()
}

test.describe('Inscription', () => {
  test("un nouveau visiteur s'inscrit, active son compte et peut commencer le cours", async ({ page }) => {
    const user = nouvelUtilisateur()

    await ouvrirInscription(page)
    await page.locator('#aligxi_retadreso').fill(user.email)
    await page.locator('#aligxi_identigilo').fill(user.login)
    await page.locator('#aligxi_pasvorto').fill(user.password)
    await page.locator('#inscription_button').click()
    await expect(page.locator('#parto2')).toBeVisible()

    expect(sql(`SELECT aktivigita FROM personoj WHERE enirnomo='${user.login}'`)).toBe('0')

    const mail = await waitForMail(user.email, 'Activation de votre compte')
    await page.goto(linkFromMail(mail, 'aktivigi.php'))

    await expect(page).toHaveURL(/personinformoj\.php\?aktivigo=ok/)
    await expect(page.locator('#novaUzanto')).toBeVisible()
    expect(sql(`SELECT aktivigita FROM personoj WHERE enirnomo='${user.login}'`)).toBe('1')

    // Depuis son espace, le nouvel élève peut ouvrir la première leçon du cours.
    await page.locator('a[href*="fr/cge/lec01.php"]').first().click()
    await expect(page).toHaveURL(/fr\/cge\/lec01\.php/)
  })

  test("une adresse déjà utilisée est refusée", async ({ page }) => {
    await ouvrirInscription(page)
    await page.locator('#aligxi_retadreso').fill('administranto@mailinator.com')
    await page.locator('#aligxi_identigilo').fill(nouvelUtilisateur().login)
    await page.locator('#aligxi_pasvorto').fill('motdepasse')
    await page.locator('#inscription_button').click()
    await expect(page.locator('#aligxi_retadreso')).toHaveClass(/invalid/)
    await expect(page.locator('#parto2')).toBeHidden()
  })

  test('un identifiant déjà pris est refusé', async ({ page }) => {
    await ouvrirInscription(page)
    await page.locator('#aligxi_retadreso').fill(nouvelUtilisateur().email)
    await page.locator('#aligxi_identigilo').fill('lernanto1')
    await page.locator('#aligxi_pasvorto').fill('motdepasse')
    await page.locator('#inscription_button').click()
    await expect(page.locator('#aligxi_identigilo')).toHaveClass(/invalid/)
  })

  test("un compte non activé ne peut pas se connecter", async ({ page }) => {
    const user = nouvelUtilisateur()
    await ouvrirInscription(page)
    await page.locator('#aligxi_retadreso').fill(user.email)
    await page.locator('#aligxi_identigilo').fill(user.login)
    await page.locator('#aligxi_pasvorto').fill(user.password)
    await page.locator('#inscription_button').click()
    await expect(page.locator('#parto2')).toBeVisible()

    await page.goto('index.php')
    await page.locator('a[href="#konektigxi"]').first().click()
    await page.locator('#eniri_identigilo').fill(user.login)
    await page.locator('#eniri_pasvorto').fill(user.password)
    await page.locator('#connection_button').click()
    await expect(page.locator('#sendi_denove_aktivigilo_button')).toBeVisible()
  })
})
