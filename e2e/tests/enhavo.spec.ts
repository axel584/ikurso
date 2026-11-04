import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Le contenu des sections du cours en 10 leçons vient de lecioneroj.enhavo (#1087) :
// une modification en base (par exemple depuis redaktilo) se voit tout de suite sur la page.
const SEKCIO = `lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id WHERE l.kurso = 'CG' AND l.numero = 3 AND le.ordo = 4`
const ALDONO = '<p id="testo-1087">Aldonita teksto</p>'

test.beforeEach(() => {
  resetTestData()
})

test('le texte modifié en base s’affiche dans la section', async ({ page }) => {
  sql(`UPDATE ${SEKCIO.replace(' WHERE', ` SET le.enhavo = CONCAT('${ALDONO}', le.enhavo) WHERE`)}`)
  try {
    await page.goto('fr/cge/lec03.php?section=4')
    await expect(page.locator('#leciono-enhavo #testo-1087')).toHaveText('Aldonita teksto')
  } finally {
    sql(`UPDATE ${SEKCIO.replace(' WHERE', ` SET le.enhavo = REPLACE(le.enhavo, '${ALDONO}', '') WHERE`)}`)
  }
  expect(sql(`SELECT COUNT(*) FROM ${SEKCIO} AND le.enhavo LIKE '%testo-1087%'`)).toBe('0')
})

test('les exercices, les images et les sons du contenu sont bien placés', async ({ page }) => {
  await page.goto('fr/cge/lec10.php?section=4')
  await expect(page.locator('#leciono-enhavo fieldset.ekzerco')).toHaveCount(4)
  const bildo = page.locator('#leciono-enhavo img[src$="posxtkarto.jpg"]')
  await expect(bildo).toHaveAttribute('src', '../../fr/cge/bildoj/posxtkarto.jpg')
  expect(await bildo.evaluate((img: HTMLImageElement) => img.naturalWidth)).toBeGreaterThan(0)
  await page.goto('fr/cge/lec07.php?section=6')
  const sono = page.locator('#leciono-enhavo a.sm2_button').first()
  await expect(sono).toHaveAttribute('href', '../../fr/son/frazoj/se-junulo-ne-lernis.mp3')
  expect((await page.request.head('fr/son/frazoj/se-junulo-ne-lernis.mp3')).status()).toBe(200)
})

test('le texte pour le visiteur sans compte ne s’affiche pas pour l’élève connecté', async ({ page }) => {
  const teksto = 'Si vous avez fait les exercices sans compte'
  await page.goto('fr/cge/lec01.php?section=13')
  await expect(page.locator('#leciono-enhavo')).toContainText(teksto)
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=13')
  await expect(page.locator('#leciono-enhavo')).not.toContainText(teksto)
  await expect(page.locator('#leciono-enhavo')).toContainText('Nous espérons que ce premier contact')
})
