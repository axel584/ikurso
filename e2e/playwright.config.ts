import { defineConfig, devices } from '@playwright/test'

// Les tests tournent uniquement contre l'environnement Docker local.
// Ne jamais pointer BASE_URL vers la prod : les tests créent des comptes,
// envoient des leçons et déclenchent des mails.
const baseURL = process.env.BASE_URL ?? 'http://localhost:8080/'

if (/esperanto-france\.org/.test(baseURL)) {
  throw new Error(`Refus de lancer les tests e2e contre la prod (${baseURL})`)
}

export default defineConfig({
  testDir: './tests',
  // Les tests partagent une seule base : on les lance l'un après l'autre.
  fullyParallel: false,
  workers: 1,
  forbidOnly: !!process.env.CI,
  retries: process.env.CI ? 1 : 0,
  reporter: process.env.CI ? [['list'], ['html', { open: 'never' }]] : 'list',
  use: {
    baseURL,
    locale: 'fr-FR',
    trace: 'retain-on-failure',
    screenshot: 'only-on-failure',
  },
  projects: [
    { name: 'chromium', use: { ...devices['Desktop Chrome'] } },
  ],
})
