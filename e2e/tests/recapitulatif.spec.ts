import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Récapitulatif avant l'envoi de la leçon : un bouton « Modifier » en face de chaque exercice
// mène à l'exercice, dans sa section, pour corriger ses réponses avant l'envoi (#750).
test.beforeEach(() => {
  resetTestData()
})

test('le bouton « Modifier » du récapitulatif mène à l’exercice', async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=6')
  const champ = page.locator('#res_1')
  await champ.fill('La teo estas varma.')
  await champ.blur()
  const lernantoId = sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
  await expect
    .poll(() => sql(`SELECT COUNT(*) FROM respondoj WHERE persono_id=${lernantoId} AND ekzercero_id=1`))
    .not.toBe('0')

  await page.goto('fr/cge/lec01.php?section=13')
  const ekzerco = page.locator('#recapitulatif_qcm .recap-ekzerco').first()
  await expect(ekzerco.getByRole('link', { name: /Modifier/ })).toHaveAttribute('href', 'lec01.php?section=6#ekzerco_1')
  await ekzerco.getByRole('link', { name: /Modifier/ }).click()

  await expect(page).toHaveURL(/lec01\.php\?section=6#ekzerco_1$/)
  await expect(page.locator('#ekzerco_1 #res_1')).toHaveValue('La teo estas varma.')
  await expect(page.locator('#ekzerco_1')).toBeInViewport()
})
