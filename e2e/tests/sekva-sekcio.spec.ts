import { test, expect } from '@playwright/test'
import { finiRetejo } from '../helpers/fini'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Bouton « Terminé ! » (#751) : il mène à la prochaine section pas encore terminée de la leçon.
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
const LECIONO_ID = () => sql("SELECT id FROM lecionoj WHERE kurso='CG' AND numero=1")

function finitaj(ordoj: number[]): void {
  const lernanto = LERNANTO_ID()
  sql(`DELETE FROM personoj_lecioneroj WHERE persono_id=${lernanto}`)
  sql(`INSERT INTO personoj_lecioneroj (dato, persono_id, lecionero_id, ekdato)
    SELECT NOW(), ${lernanto}, id, NOW() FROM lecioneroj WHERE leciono_id=${LECIONO_ID()} AND ordo IN (${ordoj.join(',')})`)
}

test.beforeEach(() => resetTestData())

test('sections 1 et 3 terminées : « Terminé ! » sur la 2 mène à la 4', async ({ page }) => {
  finitaj([1, 3])
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=2')
  await finiRetejo(page)
  await expect(page).toHaveURL(/lec01\.php\?section=4$/)
})

test('toutes les sections suivantes terminées : « Terminé ! » mène à la section suivante', async ({ page }) => {
  finitaj([1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13])
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=2')
  await finiRetejo(page)
  await expect(page).toHaveURL(/lec01\.php\?section=3$/)
})

test('« Enregistrer mes réponses » mène aussi à la prochaine section pas terminée', async ({ page }) => {
  finitaj([1, 2, 3, 4, 5, 7, 8, 9])
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=6')
  const kampoj = page.locator('#chefa_form').getByRole('textbox')
  for (let i = 0; i < await kampoj.count(); i++) await kampoj.nth(i).fill('respondo')
  await page.locator('#registriEkzercaron_button').click()
  await expect(page).toHaveURL(/lec01\.php\?section=10$/)
})

test('section à QCM : « Terminé ! » est là sans faire le QCM, qui reste facultatif (#1109)', async ({ page }) => {
  finitaj([1, 2, 3, 4, 5, 6, 7])
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=8')
  await expect(page.locator('.qcm_demando').first()).toBeVisible()
  await expect(page.locator('#finiLecioneron_button')).toBeVisible()
  // QCM pas fini : confirmation sur la page, puis « Passer à la suite »
  await page.locator('#finiLecioneron_button').click()
  await expect(page.locator('#qcm_konfirmo')).toContainText('Il reste 10 questions au QCM de cette page.')
  await expect(page).toHaveURL(/lec01\.php\?section=8$/)
  await page.locator('#qcm_preterpasi').click()
  await expect(page).toHaveURL(/lec01\.php\?section=9$/)
})

test('QCM pas fini : « Finir le QCM » reste sur la page, le compte suit les bonnes réponses', async ({ page }) => {
  finitaj([1, 2, 3, 4, 5, 6, 7])
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=8')
  await page.locator('.qcm_demando:visible .qcm_ok').click({ force: true })
  await expect(page.locator('.qcm_demando').nth(1)).toBeVisible()
  await page.locator('#finiLecioneron_button').click()
  await expect(page.locator('#qcm_konfirmo')).toContainText('Il reste 9 questions')
  await page.locator('#qcm_fini').click()
  await expect(page.locator('#qcm_konfirmo')).toHaveCount(0)
  await expect(page).toHaveURL(/lec01\.php\?section=8$/)
})

test('QCM fini : « Terminé ! » passe directement à la suite', async ({ page }) => {
  finitaj([1])
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=2')
  const demandoj = await page.locator('.qcm_demando').count()
  for (let i = 0; i < demandoj; i++) {
    await expect(page.locator('.qcm_demando').nth(i)).toBeVisible()
    await page.locator('.qcm_demando').nth(i).locator('.qcm_ok').click({ force: true })
  }
  await expect(page.locator('#recapitulatif_qcm')).toBeVisible()
  await page.locator('#finiLecioneron_button').click()
  await expect(page).toHaveURL(/lec01\.php\?section=3$/)
})
