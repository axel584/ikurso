import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData } from '../helpers/db'
import { clearMails, linkFromMail, waitForMail } from '../helpers/mailhog'

test.beforeAll(() => resetTestData())
test.beforeEach(() => clearMails())

test.describe('Mot de passe oublié', () => {
  test("demande de réinitialisation par le flux modal", async ({ page }) => {
    const email = 'lernanto1@mailinator.com'

    await page.goto('index.php')
    // Ouvrir la modal de connexion (seul le lien affiché est cliquable)
    await page.locator('a[href="#konektigxi"]:visible').first().click()
    // Ouvrir la demande de nouveau mot de passe
    await page.locator('#aperigi_novigi_pasvorton_button').click()
    await expect(page.locator('#sendi_novan_pasvorton')).toBeVisible()

    // Demander un nouveau mot de passe
    await page.locator('#sendi_novan_pasvorton_retadreso').fill(email)
    await page.locator('#sendi_novan_pasvorton_button').click()

    // Attendre la confirmation dans le modal
    await expect(page.locator('#sendi_novan_pasvorton_parto2')).not.toHaveClass(/hide/)

    // Attendre le mail de réinitialisation
    const mail = await waitForMail(email, 'Votre mot de passe')

    // Ouvrir le lien de réinitialisation
    const lien = linkFromMail(mail, 'index.php')
    // S'assurer qu'on passe bien par le flux novigiPasvorton
    expect(lien).toContain('novigiPasvorton')
    await page.goto(lien)

    // Le modal pour choisir un nouveau mot de passe doit s'ouvrir
    await expect(page.locator('#novigi_pasvorton')).toBeVisible()
    const nouveauMotDePasse = 'nouveaumdp123'
    await page.locator('#novigi_pasvorton_pasvorto').fill(nouveauMotDePasse)
    await page.locator('#novigi_pasvorton_sendi_button').click()

    // Le JS remplace le contenu du modal par un message de confirmation ; la modal reste ouverte
    // (ne pas attendre qu'elle disparaisse).
    await expect(page.getByText('Votre mot de passe a bien été réinitialisé')).toBeVisible({ timeout: 10000 })

    // Se connecter avec le nouveau mot de passe
    await page.goto('index.php')
    await page.locator('a[href="#konektigxi"]:visible').first().click()
    await page.locator('#eniri_identigilo').fill(USERS.lernanto.login)
    await page.locator('#eniri_pasvorto').fill(nouveauMotDePasse)
    await page.locator('#connection_button').click()

    // Connexion réussie
    await expect(page).not.toHaveURL(/index\.php$/)
    await expect(page).toHaveURL(/fr\/cge\/lec01\.php/)
  })
})
