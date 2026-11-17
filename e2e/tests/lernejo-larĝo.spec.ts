import { test, expect } from '@playwright/test'
import { sql } from '../helpers/db'

// Une section avec un tableau plus large qu'un téléphone (corrélatifs de la 2.7) : sur Android, la WebView
// prenait la largeur du tableau et tout le texte de la section sortait de l'écran (signalé par un bêta-testeur).
// Le tableau défile maintenant dans son propre cadre et le texte reste dans la largeur de l'écran.
test.use({ viewport: { width: 360, height: 780 }, isMobile: true, hasTouch: true })

const SEKCIO_2_7 = () => sql(`SELECT le.id FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id WHERE l.kurso = 'CG' AND l.numero = 2 AND le.ordo = 7`)

test('tableau des corrélatifs : il défile seul, le texte reste dans l’écran', async ({ page }) => {
  await page.goto('lernejo/')
  await page.getByText('J’ai déjà un compte').click()
  await page.getByLabel('Identifiant ou adresse e-mail').fill('lernanto1')
  await page.getByLabel('Mot de passe').fill('test')
  await page.getByText('Se connecter').click()
  await expect(page.getByText('DLEK : Cours en 10 leçons')).toBeVisible()
  await page.goto(`lernejo/sekcio/${SEKCIO_2_7()}`)
  const tabelujo = page.locator('.korelativoj .tabelujo')
  await expect(tabelujo).toHaveCount(1)
  const larĝoj = await tabelujo.evaluate((t) => ({
    tabelujo: t.clientWidth,
    tabelo: t.querySelector('table')!.scrollWidth,
    enhavo: t.closest('.ikurso-enhavo')!.clientWidth,
    enhavoRulumo: t.closest('.ikurso-enhavo')!.scrollWidth,
  }))
  expect(larĝoj.tabelo).toBeGreaterThan(larĝoj.tabelujo) // le tableau est plus large : il défile
  expect(larĝoj.tabelujo).toBeLessThanOrEqual(larĝoj.enhavo)
  expect(larĝoj.enhavoRulumo).toBeLessThanOrEqual(larĝoj.enhavo) // rien d'autre ne dépasse
})
