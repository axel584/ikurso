import { test, expect } from '@playwright/test'

// Données structurées schema.org (JSON-LD) pour les résultats enrichis de Google (#1104).
async function jsonLd(page) {
  const skriptoj = page.locator('script[type="application/ld+json"]')
  if (await skriptoj.count() === 0) return null
  return JSON.parse(await skriptoj.first().textContent())
}

test('la présentation des cours décrit un cours gratuit en ligne', async ({ page }) => {
  for (const [adreso, nomo, lecionoj] of [['fr/cge/intro.php', 'Cours d’espéranto en 10 leçons', 10], ['fr/gerda/', 'Gerda malaperis : cours d’espéranto', 25]] as const) {
    await page.goto(adreso)
    const datumoj = await jsonLd(page)
    expect(datumoj['@type']).toBe('Course')
    expect(datumoj.name).toBe(nomo)
    expect(datumoj.provider.name).toBe('Espéranto-France')
    expect(datumoj.offers.category).toBe('Free')
    expect(datumoj.hasCourseInstance.courseMode).toBe('Online')
    expect(datumoj.hasCourseInstance.courseSchedule.repeatCount).toBe(lecionoj)
  }
})

test('l’accueil décrit l’organisme et le site, les leçons rien', async ({ page }) => {
  await page.goto('')
  const datumoj = await jsonLd(page)
  expect(datumoj['@graph'].map(e => e['@type'])).toEqual(['Organization', 'WebSite'])
  await page.goto('fr/cge/lec01.php')
  expect(await jsonLd(page)).toBeNull()
})
