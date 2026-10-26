import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Page « Le saviez-vous ? » (#891) : tous les numéros sont listés, seuls ceux reçus par mail se relisent.
test.beforeEach(() => {
  resetTestData()
  sql(`UPDATE personoj SET saviezvous_senditaj='[{"numero":1,"dato":"2026-10-19"},{"numero":3,"dato":"2026-10-20"}]' WHERE enirnomo='lernanto1'`)
})

test.describe('Le saviez-vous ?', () => {
  test("l'élève relit les messages reçus, les autres sont grisés", async ({ page }) => {
    await login(page, USERS.lernanto)
    // l'entrée du menu utilisateur, juste sous « Mes données personnelles »
    await expect(page.locator('#uzantomenuo a[href$="personinformoj.php"]').locator('xpath=../following-sibling::li[1]/a'))
      .toHaveAttribute('href', /saviezvous\.php$/)

    await page.goto('saviezvous.php')
    const nbMesagxoj = Number(sql('SELECT COUNT(*) FROM saviezvous'))
    await expect(page.locator('.saviezvous-listo li')).toHaveCount(nbMesagxoj)
    await expect(page.locator('.saviezvous-listo li.ricevita')).toHaveCount(2)
    await expect(page.locator('.saviezvous-listo li.nericevita').first()).toContainText('2.')
    await expect(page.locator('.saviezvous-listo li.nericevita a')).toHaveCount(0)

    await page.locator('.saviezvous-listo li.ricevita a', { hasText: 'Répétition espacée' }).click()
    await expect(page).toHaveURL(/saviezvous\.php\?numero=3$/)
    await expect(page.locator('.saviezvous-mesagxo')).toContainText('Saviez-vous')
    await expect(page.locator('#saviezvous')).toContainText('reçu le 20/10/2026')
  })

  test("un message pas encore reçu ne s'affiche pas, même par son adresse", async ({ page }) => {
    await login(page, USERS.lernanto)
    await page.goto('saviezvous.php?numero=2')
    await expect(page.locator('.saviezvous-mesagxo')).toHaveCount(0)
    await expect(page.locator('#saviezvous')).toContainText('pas encore disponible')
  })

  test('un visiteur non connecté est renvoyé vers la connexion', async ({ page }) => {
    await page.goto('saviezvous.php?numero=1')
    await expect(page).toHaveURL(/erarkodo=8/)
  })
})
