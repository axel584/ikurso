import { test, expect } from '@playwright/test'

// Vidéos des leçons hébergées dans videos/ et lues par la balise <video>, à la place des lecteurs YouTube (#1089).
test.use({ viewport: { width: 412, height: 915 } })

test('site : les vidéos des sections 1.8, 4.13 et 9.10 sont des balises <video> du site', async ({ page }) => {
  // [page, fichier, identifiant de l'ancienne vidéo YouTube]
  for (const [pagxo, nomo, youtube] of [
    ['fr/cge/lec01.php?section=8', 'cge-1-8-ekzerco-1', 'pTQEn0-fuQc'],
    ['fr/cge/lec04.php?section=13', 'cge-4-13-himno-la-espero', 'shNsmyrNN2g'],
    ['fr/cge/lec09.php?section=10', 'cge-9-10-gazetoj-tra-la-mondo', 'yVjtft16rNo'],
  ]) {
    await page.goto(pagxo)
    const video = page.locator('video.vidbendo')
    await expect(video).toBeVisible()
    await expect(video.locator('source')).toHaveAttribute('src', new RegExp(`videos/${nomo}\\.mp4$`))
    await expect(video).toHaveAttribute('poster', new RegExp(`videos/${nomo}\\.jpg$`))
    // l'image d'aperçu est dans le dépôt : elle se charge depuis la page
    const afisxo = await video.evaluate((v: HTMLVideoElement) => v.poster)
    expect((await page.request.get(afisxo)).headers()['content-type']).toBe('image/jpeg')
    // la vidéo elle-même est servie, par morceaux (lecture et avance rapide)
    const fonto = await video.locator('source').evaluate((s: HTMLSourceElement) => s.src)
    const peco = await page.request.get(fonto, { headers: { Range: 'bytes=0-99' } })
    expect(peco.status()).toBe(206)
    expect(peco.headers()['content-type']).toBe('video/mp4')
    // le cadre de la page garde sa propre vidéo YouTube : seule celle de la leçon doit avoir disparu
    await expect(page.locator(`iframe[src*="${youtube}"]`)).toHaveCount(0)
  }
  // sous-titres français et espéranto de la 9.10
  await expect(page.locator('video.vidbendo track')).toHaveCount(2)
  await expect(page.locator('video.vidbendo track[srclang="fr"]')).toHaveAttribute('src', /cge-9-10-gazetoj-tra-la-mondo\.fr\.vtt$/)
})

test('application : la vidéo de la section 1.8 est une balise <video> du site', async ({ page }) => {
  await page.goto('lernejo/')
  await page.getByText('Commencer le cours').click()
  await page.getByLabel('Commencer Cours en 10 leçons').click()
  await expect(page.getByRole('heading', { name: /^1\.1\. / })).toBeVisible()
  await page.goto('lernejo/sekcio/253')
  await expect(page.getByRole('heading', { name: /^1\.8\. / })).toBeVisible()
  const video = page.locator('video.vidbendo')
  await expect(video).toBeVisible()
  await expect(video.locator('source')).toHaveAttribute('src', /\/videos\/cge-1-8-ekzerco-1\.mp4$/)
  const afisxo = await video.evaluate((v: HTMLVideoElement) => v.poster)
  expect((await page.request.get(afisxo)).headers()['content-type']).toBe('image/jpeg')
  await expect(page.locator('iframe[src*="youtube"]')).toHaveCount(0)
})
