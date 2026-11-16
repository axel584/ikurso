import { expect, type Page } from '@playwright/test'

// « Terminé ! » d'une section. S'il reste des questions au QCM de la page, une confirmation s'affiche :
// on choisit « Passer à la suite », comme un élève qui ne veut pas faire le QCM (facultatif, #1109).

// site (bouton #finiLecioneron_button)
export async function finiRetejo(page: Page): Promise<void> {
  await expect(page.locator('#finiLecioneron_button')).toBeVisible()
  const qcmEnCours = (await page.locator('.qcm_demando:visible').count()) > 0
  await page.locator('#finiLecioneron_button').click()
  if (qcmEnCours) {
    await expect(page.locator('#qcm_konfirmo')).toBeVisible()
    await page.locator('#qcm_preterpasi').click()
  }
}

// application lernejo (testID « qcm » : QCM en cours, « qcm-resumo » une fois fini)
export async function finiAplikajxo(page: Page): Promise<void> {
  const butono = page.getByText('Terminé !')
  await expect(butono).toBeVisible() // section chargée, QCM compris
  const qcmEnCours = (await page.getByTestId('qcm').count()) > 0
  await butono.click()
  if (qcmEnCours) {
    const konfirmo = page.getByTestId('qcm-konfirmo')
    await expect(konfirmo).toBeVisible()
    await konfirmo.getByRole('button', { name: 'Passer à la suite' }).click()
  }
}
