import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData } from '../helpers/db'

// Encadré pour le visiteur qui n'a encore rien fait, souvent arrivé de Google au milieu d'un cours (#1101).
test.beforeEach(() => {
  resetTestData()
})

test('au milieu du cours, le visiteur est invité à commencer à la leçon 1', async ({ page }) => {
  await page.goto('fr/cge/lec01.php?section=5')
  const kadro = page.locator('#vizitanto_avizo')
  await expect(kadro).toContainText('Cette page fait partie d’un cours d’espéranto gratuit en 10 leçons')
  await expect(page.getByText('pas terminé certaines sections')).toHaveCount(0)
  await kadro.getByRole('link', { name: 'Commencer à la leçon 1' }).click()
  await expect(page).toHaveURL(/lec01\.php\?section=1$/)
  // au début du cours : un mot d'accueil, sans bouton
  await expect(page.locator('#vizitanto_avizo')).toContainText('Bienvenue au début du cours')
  await expect(page.locator('#vizitanto_avizo a')).toHaveCount(0)
})

test('Gerda malaperis et Lasu min paroli plu renvoient vers leur début', async ({ page }) => {
  await page.goto('fr/gerda/cxap03.php?section=2')
  await expect(page.locator('#vizitanto_avizo').getByRole('link', { name: 'Commencer au chapitre 1' }))
    .toHaveAttribute('href', 'cxap01.php?section=1')
  await page.goto('fr/gerda/lasu00.php')
  await expect(page.locator('#vizitanto_avizo').getByRole('link', { name: 'Commencer à la leçon 1' }))
    .toHaveAttribute('href', '../cge/lec01.php?section=1')
})

test('l’encadré disparaît dès que le visiteur a commencé (invité) et pour un élève connecté', async ({ page }) => {
  await page.goto('fr/cge/lec01.php?section=1')
  await page.locator('#finiLecioneron_button').click()
  await expect(page).toHaveURL(/lec01\.php\?section=2$/)
  await expect(page.locator('#gasto_avizo')).toBeVisible()
  await expect(page.locator('#vizitanto_avizo')).toHaveCount(0)

  await page.context().clearCookies()
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=5')
  await expect(page.locator('#vizitanto_avizo')).toHaveCount(0)
})
