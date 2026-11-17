import { test, expect } from '@playwright/test'
import { resetTestData, sql } from '../helpers/db'

// Application : en revenant sur une section déjà ouverte (Retour, puis la section dans la liste), les réponses
// données juste avant sont toujours là. L'écran repartait de la copie de la section gardée en mémoire, d'avant
// les réponses : enregistrées sur le serveur, elles semblaient perdues dans l'application.
test('les réponses restent affichées en revenant sur la section', async ({ page }) => {
  resetTestData()
  sql(`DELETE FROM respondoj WHERE persono_id = (SELECT id FROM personoj WHERE enirnomo = 'lernanto1')`)
  await page.goto('lernejo/')
  await page.getByText('J’ai déjà un compte').click()
  await page.getByLabel('Identifiant ou adresse e-mail').fill('lernanto1')
  await page.getByLabel('Mot de passe').fill('test')
  await page.getByText('Se connecter').click()
  await page.getByText('DLEK : Cours en 10 leçons').click()
  await page.getByText(/^1\.6\. /).click()
  for (const [i, teksto] of [[1, 'La teo estas varma.'], [2, 'Ĉu vi ŝatas ĝin?']] as const) {
    const kampo = page.getByLabel(`Réponse ${i}`)
    await kampo.fill(teksto)
    const r = page.waitForResponse((r) => r.url().includes('lernado/respondoj'))
    await kampo.blur()
    await r
  }
  await expect(page.getByTestId('demando-1').getByLabel('Bonne réponse')).toBeVisible()
  await page.getByRole('link', { name: 'Retour, back' }).click()
  await expect(page.getByText('Leçon 1 : Première leçon')).toBeVisible()
  await page.getByText(/^1\.6\. /).click()
  await expect(page.getByLabel('Réponse 1')).toHaveValue('La teo estas varma.')
  await expect(page.getByLabel('Réponse 2')).toHaveValue('Ĉu vi ŝatas ĝin?')
  await expect(page.getByTestId('demando-1').getByLabel('Bonne réponse')).toBeVisible()
})
