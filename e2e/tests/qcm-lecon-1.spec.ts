import { test, expect, type Page } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData } from '../helpers/db'

// Leçon 1 : petits QCM facultatifs à la fin des pages 1.1 à 1.5 (#1114, sql/69). En 1.1, les questions
// « Écoutez… » ont un enregistrement : bouton son du site, bouton « Écouter » dans l'application.
test.beforeEach(() => resetTestData())

test('site : un QCM sur chaque page 1.1 à 1.5, enregistrements en 1.1', async ({ page }) => {
  await login(page, USERS.lernanto)
  for (const sekcio of [1, 2, 3, 4, 5]) {
    await page.goto(`fr/cge/lec01.php?section=${sekcio}`)
    await expect(page.getByText('Petit test')).toBeVisible()
    const demandoj = page.locator('.qcm_demando')
    const nombro = await demandoj.count()
    expect(nombro).toBeGreaterThanOrEqual(2)
    // facultatif : le bouton « Terminé ! » est là sans répondre
    await expect(page.locator('#finiLecioneron_button')).toBeVisible()
    if (sekcio === 1) {
      const sono = demandoj.first().locator('a.sm2_button')
      await expect(sono).toHaveAttribute('href', /fr\/son\/vortoj\/cxokolado\.mp3$/)
    }
    for (let i = 0; i < nombro; i++) {
      await page.locator('.qcm_demando:visible .qcm_ok').first().check({ force: true })
      if (i < nombro - 1) await expect(demandoj.nth(i)).toBeHidden()
    }
    await expect(page.locator('#recapitulatif_qcm')).toBeVisible()
  }
})

async function ensaluti(page: Page) {
  await page.goto('lernejo/')
  await page.getByText('J’ai déjà un compte').click()
  await page.getByLabel('Identifiant ou adresse e-mail').fill('lernanto1')
  await page.getByLabel('Mot de passe').fill('test')
  await page.getByText('Se connecter').click()
  await expect(page.getByText('DLEK : Cours en 10 leçons')).toBeVisible()
}

test('application : bouton « Écouter » dans les questions avec enregistrement', async ({ page }) => {
  await ensaluti(page)
  await page.goto('lernejo/sekcio/1')
  const qcm = page.getByTestId('qcm')
  await expect(qcm).toBeVisible()
  const sono = page.waitForRequest((r) => /\/fr\/son\/vortoj\/cxokolado\.mp3$/.test(r.url()))
  await qcm.getByTestId('qcm-sono').click()
  expect((await sono).url()).toMatch(/^http:\/\/localhost:8080\/fr\/son\/vortoj\/cxokolado\.mp3$/)
  // les questions sans enregistrement n'ont pas de bouton
  await page.goto('lernejo/sekcio/2')
  await expect(page.getByTestId('qcm')).toBeVisible()
  await expect(page.getByTestId('qcm-sono')).toHaveCount(0)
})
