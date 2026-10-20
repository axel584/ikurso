import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData } from '../helpers/db'

test.beforeAll(() => resetTestData())

test.describe('Connexion', () => {
  test("un élève arrive sur la suite de sa leçon", async ({ page }) => {
    await login(page, USERS.lernanto)
    // lernanto1 a fait toute la leçon 1 sauf la dernière section.
    await expect(page).toHaveURL(/fr\/cge\/lec01\.php/)
  })

  test("un élève peut se connecter avec son adresse e-mail (#516)", async ({ page }) => {
    // la casse de l'adresse ne compte pas
    await login(page, { login: 'Lernanto1@Mailinator.com', password: USERS.lernanto.password })
    await expect(page).toHaveURL(/fr\/cge\/lec01\.php/)
  })

  test('un correcteur arrive sur la liste de ses élèves', async ({ page }) => {
    await login(page, USERS.korektanto)
    await expect(page).toHaveURL(/miajlernantoj\.php/)
  })

  test("un administrateur arrive sur la page d'administration", async ({ page }) => {
    await login(page, USERS.admin)
    await expect(page).toHaveURL(/administri\.php/)
  })

  test('un mauvais mot de passe est refusé', async ({ page }) => {
    await page.goto('index.php')
    await page.locator('a[href="#konektigxi"]').first().click()
    await page.locator('#eniri_identigilo').fill(USERS.lernanto.login)
    await page.locator('#eniri_pasvorto').fill('mauvais')
    await page.locator('#connection_button').click()
    await expect(page.locator('#eniri_pasvorto')).toHaveClass(/invalid/)
    await expect(page).toHaveURL(/index\.php/)
  })

  test('un identifiant inconnu est refusé', async ({ page }) => {
    await page.goto('index.php')
    await page.locator('a[href="#konektigxi"]').first().click()
    await page.locator('#eniri_identigilo').fill('personne_inconnue')
    await page.locator('#eniri_pasvorto').fill('test')
    await page.locator('#connection_button').click()
    await expect(page.locator('#eniri_identigilo')).toHaveClass(/invalid/)
  })

  test('la déconnexion ferme la session', async ({ page }) => {
    await login(page, USERS.korektanto)
    await page.goto('eliri.php')
    await expect(page).toHaveURL(/index\.php/)
    // La page réservée aux correcteurs renvoie vers l'accueil une fois déconnecté.
    await page.goto('miajlernantoj.php')
    await expect(page).toHaveURL(/index\.php\?erarkodo=/)
  })
})
