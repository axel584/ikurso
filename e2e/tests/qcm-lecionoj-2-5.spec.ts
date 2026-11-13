import { test, expect, type Page } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Leçons 2 à 5 : petits QCM facultatifs avec indices sur les pages où l'on perd le plus d'élèves (#1114, sql/71),
// puis sur les dernières pages de grammaire des leçons 2 et 3 (sql/75).
test.beforeEach(() => resetTestData())

const PAGXOJ: [number, number, number, string | null][] = [
  // leçon, section, nombre de questions, enregistrement de la première question
  [2, 2, 3, null], [2, 4, 3, null], [2, 7, 3, null], [3, 8, 4, 'dudek'], [4, 5, 3, 'lernejo'], [4, 8, 3, null], [5, 2, 3, null],
  [2, 6, 3, 'maljuna'], [3, 1, 3, null], [3, 5, 3, 'sane'], [3, 10, 3, null],
]

test('site : un QCM avec indices sur chaque page visée', async ({ page }) => {
  test.setTimeout(180_000) // 11 pages, une seconde par question
  await login(page, USERS.lernanto)
  for (const [leciono, sekcio, nombro, sono] of PAGXOJ) {
    await page.goto(`fr/cge/lec${String(leciono).padStart(2, '0')}.php?section=${sekcio}`)
    await expect(page.getByText('Petit test')).toBeVisible()
    const demandoj = page.locator('.qcm_demando')
    await expect(demandoj).toHaveCount(nombro)
    await expect(page.locator('#finiLecioneron_button')).toBeVisible()
    if (sono) await expect(demandoj.first().locator('a.sm2_button')).toHaveAttribute('href', new RegExp(`fr/son/vortoj/${sono}\\.mp3$`))
    // chaque mauvaise proposition a son indice
    const malbonaj = demandoj.locator('input.qcm_nok')
    expect(await malbonaj.count()).toBe(await demandoj.locator('input.qcm_nok[data-indico]').count())
    await demandoj.first().locator('input.qcm_nok').first().check({ force: true })
    await expect(page.locator('.toast').filter({ hasText: /^Mauvaise réponse : / }).last()).toBeVisible()
    for (let i = 0; i < nombro; i++) {
      await page.locator('.qcm_demando:visible .qcm_ok').first().check({ force: true })
      if (i < nombro - 1) await expect(demandoj.nth(i)).toBeHidden()
    }
    await expect(page.locator('#recapitulatif_qcm')).toBeVisible()
    // 5.2 : le tableau des corrélatifs est toujours là, au-dessus du QCM
    if (leciono === 5) await expect(page.locator('.korelativa-skemo')).toBeVisible()
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

test('application : QCM de la page 4.5 avec enregistrement et indice', async ({ page }) => {
  await ensaluti(page)
  const id = sql("SELECT le.id FROM lecioneroj le JOIN lecionoj l ON l.id=le.leciono_id WHERE l.kurso='CG' AND l.numero=4 AND le.ordo=5")
  await page.goto(`lernejo/sekcio/${id}`)
  const qcm = page.getByTestId('qcm')
  await expect(qcm).toBeVisible()
  const sono = page.waitForRequest((r) => /\/fr\/son\/vortoj\/lernejo\.mp3$/.test(r.url()))
  await qcm.getByTestId('qcm-sono').click()
  await sono
  await qcm.getByRole('radio').first().click() // « leçon »
  await expect(qcm.getByText('Mauvaise réponse : « leçon » se dit leciono.')).toBeVisible()
})
