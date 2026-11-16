import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Page 1.6 (premier exercice) : personne n'a encore de correcteur, on dit ce que deviennent les réponses.
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")

test.beforeEach(() => {
  resetTestData()
  sql(`DELETE FROM nuna_kurso WHERE studanto=${LERNANTO_ID()} AND kurso='CG'`)
})

test('visiteur : réponses vérifiées, correcteur avec un compte, sans promesse d’envoi', async ({ page }) => {
  await page.goto('fr/cge/lec01.php?section=6')
  await expect(page.getByText('Vos réponses sont vérifiées automatiquement')).toBeVisible()
  await expect(page.getByText('il faut un compte (gratuit)')).toBeVisible()
  await expect(page.locator('#registriEkzercaron_button')).toHaveAttribute('data-tooltip', 'à la fin de la leçon, vous pourrez les envoyer à un correcteur')
})

test('élève sans correcteur : correcteur à demander à la fin de la leçon', async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=6')
  await expect(page.getByText('vous pourrez demander un correcteur bénévole')).toBeVisible()
  await expect(page.getByText('il faut un compte')).toHaveCount(0)
  await expect(page.getByText('Pour bénéficier de notre service de correction')).toHaveCount(0)
  await expect(page.locator('#registriEkzercaron_button')).toHaveAttribute('data-tooltip', 'à la fin de la leçon, vous pourrez les envoyer à un correcteur')
})

test('élève qui a un correcteur (leçon refaite) : l’envoi lui est promis', async ({ page }) => {
  sql(`INSERT INTO nuna_kurso (ekdato, lastdato, korektanto, studanto, kurso, nunleciono, stato)
    VALUES (NOW(), NOW(), (SELECT id FROM personoj WHERE enirnomo='korektanto1'), ${LERNANTO_ID()}, 'CG', 2, 'K')`)
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=6')
  await expect(page.locator('#registriEkzercaron_button')).toHaveAttribute('data-tooltip', 'elles seront envoyées à mon correcteur à la fin de la leçon')
})
