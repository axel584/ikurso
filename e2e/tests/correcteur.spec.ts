import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'
import { clearMails } from '../helpers/mailhog'

// L'état de départ (03-create-data-test.sql) ne crée pas de nuna_kurso :
// lernanto1 est un prospect sans correcteur. Ce fichier teste la gestion
// d'un élève déjà rattaché, on crée donc ce rattachement de façon déterministe.
test.beforeAll(() => {
  resetTestData()
  sql(`
    INSERT INTO nuna_kurso (ekdato, lastdato, korektanto, studanto, kurso, nunleciono, stato)
    SELECT CURDATE(), CURDATE(), k.id, e.id, 'CG', 1, 'N'
    FROM personoj k, personoj e
    WHERE k.enirnomo='korektanto1' AND e.enirnomo='lernanto1'
  `)
})
test.beforeEach(() => clearMails())

function getKursId() {
  return sql("SELECT id FROM nuna_kurso ORDER BY id DESC LIMIT 1")
}

test.describe('Correcteur - suivi des élèves', () => {
  test("un élève peut être marqué abandonné puis récupéré", async ({ page }) => {
    const KURSID = getKursId()
    await login(page, USERS.korektanto)
    await page.goto('miajlernantoj.php')

    await expect(page.getByText('lernanto1').first()).toBeVisible()
    expect(sql(`SELECT stato FROM nuna_kurso WHERE id=${KURSID}`)).toBe('N')

    // « A abandonné » : formulaire dont le champ leciono vaut « <id>-H ».
    const formAbandon = page
      .locator('form[action="miajlernantoj2.php"]')
      .filter({ has: page.locator('input[name="leciono"][value$="-H"]') })
    await formAbandon.getByRole('button', { name: 'A abandonné' }).click()
    await expect(page).toHaveURL(/miajlernantoj\.php/)
    expect(sql(`SELECT stato FROM nuna_kurso WHERE id=${KURSID}`)).toBe('H')

    // L'élève passe dans l'onglet « Anciens élèves ».
    await page.goto('miajlernantoj.php?eksaj=jes')
    await expect(page.getByText('lernanto1').first()).toBeVisible()

    // « Récupérer l’élève » repasse le suivi en cours.
    await page.getByRole('button', { name: 'Récupérer l’élève' }).click()
    await expect(page).toHaveURL(/miajlernantoj\.php/)
    expect(sql(`SELECT stato FROM nuna_kurso WHERE id=${KURSID}`)).toBe('K')
  })
})
