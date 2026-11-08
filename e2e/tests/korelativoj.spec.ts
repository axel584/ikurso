import { test, expect } from '@playwright/test'

// Schéma des corrélatifs de la section 5.2 (#1110) : un début + une fin = un corrélatif, et sa traduction.
test.use({ viewport: { width: 412, height: 915 } })

test('le schéma des corrélatifs tient sur un téléphone et change avec le début et la fin choisis', async ({ page }) => {
  await page.goto('fr/cge/lec05.php?section=2')
  const skemo = page.locator('.korelativa-skemo')
  await expect(skemo).toBeVisible()
  await expect(page.locator('img[src$="korelativoj.svg"]')).toHaveCount(0)
  // pas de défilement horizontal
  expect(await page.evaluate(() => document.documentElement.scrollWidth)).toBeLessThanOrEqual(412)

  const komencoj = skemo.locator('.ks-karto[data-komenco]')
  const finoj = skemo.locator('.ks-karto[data-fino]')
  await expect(komencoj).toHaveCount(5)
  await expect(finoj).toHaveCount(9)
  await expect(skemo.locator('.ks-konkludo')).toHaveText('5 débuts × 9 fins = 45 corrélatifs')

  // au départ : ki- + -al = kial
  await expect(skemo.getByRole('button', { name: /^ki- / })).toHaveAttribute('aria-pressed', 'true')
  await expect(skemo.getByRole('button', { name: /^-al / })).toHaveAttribute('aria-pressed', 'true')
  await expect(skemo.locator('.ks-kalkulo')).toHaveText('ki- + -al = kial')
  await expect(skemo.locator('.ks-traduko')).toHaveText('pourquoi')

  await skemo.getByRole('button', { name: /^ti- / }).click()
  await skemo.getByRole('button', { name: /^-am / }).click()
  await expect(skemo.locator('.ks-kalkulo')).toHaveText('ti- + -am = tiam')
  await expect(skemo.locator('.ks-traduko')).toHaveText('alors')
  await expect(skemo.getByRole('button', { name: /^ki- / })).toHaveAttribute('aria-pressed', 'false')
  await expect(skemo.getByRole('button', { name: /^-al / })).toHaveAttribute('aria-pressed', 'false')
  await expect(skemo.locator('[aria-pressed="true"]')).toHaveCount(2)

  await skemo.getByRole('button', { name: /^ĉi- / }).click()
  await expect(skemo.locator('.ks-kalkulo')).toHaveText('ĉi- + -am = ĉiam')
  await expect(skemo.locator('.ks-traduko')).toHaveText('toujours')

  const S = '/tmp/claude-1000/-home-axel-Documents-code-ikurso/9b24ed19-879b-4e82-8fd0-45b6f42a1bdf/scratchpad'
  if (process.env.KAPTI) {
    await skemo.screenshot({ path: `${S}/ks-telefono.png` })
    await page.setViewportSize({ width: 1280, height: 900 })
    await skemo.screenshot({ path: `${S}/ks-komputilo.png` })
  }
})
