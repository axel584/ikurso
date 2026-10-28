import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Encadré qui invite à réviser les mots ajoutés en terminant une section (#634).
// Leçon 1 du cours en 10 leçons : 5 mots dans la section 2, aucun dans la section 1.
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")

test.beforeEach(() => {
  resetTestData()
  const lernanto = LERNANTO_ID()
  sql(`DELETE FROM personoj_lecioneroj WHERE persono_id=${lernanto}`)
  sql(`DELETE FROM personoj_vortoj WHERE persono_id=${lernanto}`)
})

test('après une section avec des mots, l’encadré invite à les réviser une seule fois', async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=2')
  await expect(page.locator('.novaj-vortoj')).toHaveCount(0)
  await page.locator('#finiLecioneron_button').click()
  await expect(page).toHaveURL(/lec01\.php\?section=3$/)

  const kadro = page.locator('.novaj-vortoj')
  await expect(kadro).toBeVisible()
  await expect(kadro).toContainText('5 nouveaux mots viennent d’être ajoutés à votre vocabulaire')
  await expect(kadro.getByRole('link', { name: '5 mots à réviser...' })).toHaveAttribute('href', /memoriVortojn\.php$/)

  await page.reload()
  await expect(page.locator('.novaj-vortoj')).toHaveCount(0)
  await expect(page.getByRole('link', { name: '5 mots à réviser...' })).toBeVisible()
})

test('après une section sans mots, pas d’encadré', async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=1')
  await page.locator('#finiLecioneron_button').click()
  await expect(page).toHaveURL(/lec01\.php\?section=2$/)
  await expect(page.locator('.novaj-vortoj')).toHaveCount(0)
})
