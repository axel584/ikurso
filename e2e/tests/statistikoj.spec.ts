import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData } from '../helpers/db'

// Statistiques des correcteurs (statLaux*.php), passées sous Materialize (#1075) :
// quatre onglets, réservés aux correcteurs et aux administrateurs.
const ONGLETS = [
  { nomo: 'Par catégorie', url: /statLauxKategorio\.php/, titolo: 'Élèves et correcteurs par cours' },
  { nomo: 'Par mois', url: /statLauxMonato\.php/, titolo: 'Élèves par mois' },
  { nomo: 'Par pays', url: /statLauxLando\.php/, titolo: 'Élèves en cours par pays' },
  { nomo: 'Par cours', url: /statLauxKurso\.php/, titolo: 'Élèves par cours et par leçon' },
]

test.beforeEach(() => {
  resetTestData()
})

test('le correcteur passe d’un onglet à l’autre des statistiques', async ({ page }) => {
  await login(page, USERS.korektanto)
  await page.goto('statLauxKategorio.php')
  await expect(page.locator('table.stat').first()).toContainText('DLEK : Cours en 10 leçons')
  for (const onglet of ONGLETS) {
    await page.locator('.tabs').getByRole('link', { name: onglet.nomo }).click()
    await expect(page).toHaveURL(onglet.url)
    await expect(page.getByRole('heading', { level: 2 }).first()).toHaveText(onglet.titolo)
    await expect(page.locator('.tabs a.active')).toHaveText(onglet.nomo)
  }
})

test('un élève et un visiteur n’ont pas accès aux statistiques', async ({ page }) => {
  const anonima = await page.request.get('statLauxKategorio.php', { maxRedirects: 0 })
  expect(anonima.headers()['location']).toContain('erarkodo=8')
  await login(page, USERS.lernanto)
  await page.goto('index.php')
  for (const pagxo of ['statLauxKategorio.php', 'statLauxMonato.php', 'statLauxLando.php', 'statLauxKurso.php']) {
    const respondo = await page.request.get(pagxo, { maxRedirects: 0 })
    expect(respondo.headers()['location'], pagxo).toContain('erarkodo=4')
  }
})

test('l’ancien guide du correcteur, lié dans les mails envoyés aux correcteurs, mène au nouveau', async ({ page }) => {
  await login(page, USERS.korektanto)
  await page.goto('helppagxo.php?temo=suivi')
  await expect(page).toHaveURL(/gvidilo\.php/)
  await expect(page.getByRole('heading', { level: 1 })).toHaveText('Guide du correcteur')
})
