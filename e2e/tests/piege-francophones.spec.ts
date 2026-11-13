import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'

// #1115 : encadrés « Piège pour les francophones » avec des mots enregistrés (sql/73 en 1.1, sql/74 en 4.4).
const PAGXOJ = [
  { leciono: '01', sekcio: 1, unua: 'kanti' },
  { leciono: '04', sekcio: 4, unua: 'familio' },
]

test('site : encadrés « Piège pour les francophones » avec cinq mots enregistrés', async ({ page }) => {
  await login(page, USERS.lernanto)
  for (const p of PAGXOJ) {
    await page.goto(`fr/cge/lec${p.leciono}.php?section=${p.sekcio}`)
    const piege = page.locator('.konsilo').filter({ hasText: 'Piège pour les francophones' })
    await expect(piege).toBeVisible()
    await expect(piege.locator('a.sm2_button')).toHaveCount(5)
    await expect(piege.locator('a.sm2_button').first()).toHaveAttribute('href', new RegExp(`fr/son/vortoj/${p.unua}\\.mp3$`))
  }
})
