import { expect, type Page } from '@playwright/test'

export const USERS = {
  admin: { login: 'administranto', password: 'test' },
  korektanto: { login: 'korektanto1', password: 'test' },
  lernanto: { login: 'lernanto1', password: 'test' },
} as const

// Connexion par la fenêtre « CONNEXION » de l'en-tête, comme un vrai visiteur.
export async function login(page: Page, user: { login: string; password: string }): Promise<void> {
  await page.goto('index.php')
  // Plusieurs liens portent href="#konektigxi" (menu desktop, menu mobile) :
  // seul celui réellement affiché peut être cliqué.
  await page.locator('a[href="#konektigxi"]:visible').first().click()
  await page.locator('#eniri_identigilo').fill(user.login)
  await page.locator('#eniri_pasvorto').fill(user.password)
  await page.locator('#connection_button').click()
  // ajax/eniri.php répond en JSON puis le JS redirige : on attend la navigation
  // effective avant de rendre la main, sinon le page.goto suivant est annulé
  // (net::ERR_ABORTED). À la connexion on quitte « / » ou « /index.php ».
  await expect(page).not.toHaveURL(/localhost:8080\/(index\.php)?$/)
  await page.waitForLoadState('load')
}
