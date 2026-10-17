import { expect, type Page } from '@playwright/test'

export const USERS = {
  admin: { login: 'administranto', password: 'test' },
  korektanto: { login: 'korektanto1', password: 'test' },
  lernanto: { login: 'lernanto1', password: 'test' },
} as const

// Connexion par la fenêtre « CONNEXION » de l'en-tête, comme un vrai visiteur.
export async function login(page: Page, user: { login: string; password: string }): Promise<void> {
  await page.goto('index.php')
  await page.locator('a[href="#konektigxi"]').first().click()
  await page.locator('#eniri_identigilo').fill(user.login)
  await page.locator('#eniri_pasvorto').fill(user.password)
  await page.locator('#connection_button').click()
  await expect(page).not.toHaveURL(/index\.php$/)
}
