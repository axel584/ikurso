import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Lexique (fr/cge/vocabula.php) : niveau de l'élève sur chaque mot et filtre par niveau (#391).
const VORTO_ID = (eo: string) =>
  sql(`SELECT v.id FROM vortoj v JOIN lecioneroj le ON le.id=v.lecionero_id JOIN lecionoj l ON l.id=le.leciono_id WHERE l.kurso='CG' AND v.eo='${eo}'`)

test.beforeEach(() => {
  resetTestData()
  const lernanto = sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
  // bona : bien connu ; granda : en cours ; domo : à apprendre ; patro : pas encore vu
  for (const [eo, nombrilo] of [['bona', 5], ['granda', 3], ['domo', 1]] as const) {
    sql(`INSERT INTO personoj_vortoj (persono_id, vorto_id, nombrilo, venontaFojo) VALUES (${lernanto}, ${VORTO_ID(eo)}, ${nombrilo}, NOW())`)
  }
})

const vorto = (page, eo: string) => page.locator('#vortlisto p', { has: page.locator('span.eo', { hasText: new RegExp(`^${eo} `) }) })

test("l'élève voit son niveau sur chaque mot et filtre le lexique", async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/vocabula.php')
  await expect(vorto(page, 'bona').locator('.nivelo.konata')).toBeVisible()
  await expect(vorto(page, 'granda').locator('.nivelo.lernata')).toBeVisible()
  await expect(vorto(page, 'domo').locator('.nivelo.lernenda')).toBeVisible()
  await expect(vorto(page, 'patro').locator('.nivelo.nevidita')).toBeVisible()
  // lien de la légende vers la révision, depuis le dossier du cours
  await expect(page.locator('.vortlisto-legendo a', { hasText: 'la révision du vocabulaire' })).toHaveAttribute('href', '../../memoriVortojn.php')

  await page.locator('#vortlisto_nivelo').selectOption('konata', { force: true })
  await expect(vorto(page, 'bona')).toBeVisible()
  await expect(vorto(page, 'granda')).toHaveCount(0)
  await expect(page.locator('#vortlisto .nivelo:not(.konata)')).toHaveCount(0)

  // le filtre se combine avec la recherche
  await page.locator('#vortlisto_nivelo').selectOption('lernata', { force: true })
  await page.locator('#pattern').pressSequentially('gra')
  await expect(page.locator('#vortlisto span.eo')).toHaveCount(1)
  await expect(vorto(page, 'granda')).toBeVisible()
  await page.locator('#pattern').fill('')
  await page.locator('#pattern').pressSequentially('bon')
  await expect(page.locator('#vortlisto')).toContainText('Aucun mot ne correspond')
})

test('un visiteur voit le lexique sans pastille ni filtre', async ({ page }) => {
  await page.goto('fr/cge/vocabula.php')
  await expect(vorto(page, 'bona')).toBeVisible()
  await expect(page.locator('#vortlisto .nivelo')).toHaveCount(0)
  await expect(page.locator('#vortlisto_nivelo')).toHaveCount(0)
})

// Retirer un mot de la révision (#914)
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
const forigita = (eo: string) => sql(`SELECT forigita FROM personoj_vortoj WHERE persono_id=${LERNANTO_ID()} AND vorto_id=${VORTO_ID(eo)}`)

test("la poubelle du lexique retire un mot de la révision, puis l'y remet (#914)", async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/vocabula.php')
  await vorto(page, 'granda').locator('a.forigi_vorton').click()
  await expect(vorto(page, 'granda').locator('.nivelo.forigita')).toBeVisible()
  expect(forigita('granda')).toBe('1')

  await page.locator('#vortlisto_nivelo').selectOption('forigita', { force: true })
  await expect(page.locator('#vortlisto span.eo')).toHaveCount(1)
  await vorto(page, 'granda').locator('a.forigi_vorton[title="Réviser de nouveau ce mot"]').click()
  await expect(page.locator('#vortlisto')).toContainText('Aucun mot ne correspond')
  expect(forigita('granda')).toBe('0')
  // le compteur est gardé : le mot reste « en cours »
  await page.locator('#vortlisto_nivelo').selectOption('lernata', { force: true })
  await expect(vorto(page, 'granda')).toBeVisible()
})

test("un mot pas encore vu, retiré depuis le lexique, n'entre pas dans la révision (#914)", async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/vocabula.php')
  await vorto(page, 'patro').locator('a.forigi_vorton').click()
  await expect(vorto(page, 'patro').locator('.nivelo.forigita')).toBeVisible()
  expect(forigita('patro')).toBe('1')
  await page.goto('memoriVortojn.php')
  expect(sql(`SELECT COUNT(*) FROM personoj_vortoj WHERE persono_id=${LERNANTO_ID()} AND vorto_id=${VORTO_ID('patro')}`)).toBe('1')
  expect(forigita('patro')).toBe('1')
})

test("dans la révision, un mot raté se retire depuis le récapitulatif et n'est plus proposé (#914)", async ({ page }) => {
  const lernanto = LERNANTO_ID()
  // tous les mots des sections vues, à réviser plus tard, sauf domo (maison)
  sql(`INSERT INTO personoj_vortoj (persono_id, vorto_id, nombrilo, venontaFojo)
    SELECT ${lernanto}, v.id, 2, NOW() + INTERVAL 10 DAY FROM vortoj v
    WHERE v.lecionero_id IN (SELECT lecionero_id FROM personoj_lecioneroj WHERE persono_id=${lernanto})
    AND v.id NOT IN (SELECT vorto_id FROM personoj_vortoj WHERE persono_id=${lernanto})`)
  sql(`UPDATE personoj_vortoj SET venontaFojo = IF(vorto_id=${VORTO_ID('domo')}, NOW() - INTERVAL 1 DAY, NOW() + INTERVAL 10 DAY) WHERE persono_id=${lernanto}`)

  await login(page, USERS.lernanto)
  await page.goto('memoriVortojn.php')
  await expect(page.locator('.memorilo_demando:visible h3')).toContainText('maison')
  await page.locator('.memorilo_input:visible').fill('kato')
  // Entrée ne doit pas envoyer le formulaire qui entoure la page (rechargement, récapitulatif perdu)
  await page.locator('.memorilo_input:visible').press('Enter')
  const linio = page.locator('#malbonaj_respondoj li', { hasText: 'maison' })
  // bonne réponse en vert, réponse de l'élève en rouge (#682)
  await expect(linio.locator('.bona')).toHaveText('domo')
  await expect(linio.locator('.malbona')).toHaveText('kato')
  await expect(linio.locator('.bona')).toHaveCSS('color', 'rgb(46, 125, 50)')
  await expect(linio.locator('.malbona')).toHaveCSS('color', 'rgb(198, 40, 40)')
  await linio.locator('a.forigi_vorton').click()
  await expect(linio).toHaveClass(/forigita/)
  expect(forigita('domo')).toBe('1')

  await page.goto('memoriVortojn.php')
  await expect(page.locator('h3', { hasText: 'Aucun mot à réviser' })).toBeVisible()
})

// Prononciation des mots (#712) : fichiers de fr/son/vortoj, dans le lexique et après une réponse de la révision.
// Les sons joués sont notés dans window.sonoj (un fichier déjà joué vient du cache, sans requête).
async function notiSonojn(page) {
  await page.addInitScript(() => {
    const w = window as any
    w.sonoj = []
    const Audio0 = w.Audio
    w.Audio = function (url: string) { w.sonoj.push(url); return new Audio0(url) }
  })
}
const sonoj = (page): Promise<string[]> => page.evaluate(() => (window as any).sonoj)

test('le lexique fait écouter les mots qui ont un enregistrement', async ({ page }) => {
  await notiSonojn(page)
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/vocabula.php')
  const sono = vorto(page, 'patro').locator('a.sono')
  await expect(sono).toHaveAttribute('href', /\/fr\/son\/vortoj\/patro\.mp3$/)
  // pas d'enregistrement pour buseto
  await expect(vorto(page, 'buseto').locator('a.sono')).toHaveCount(0)
  const sxargxo = page.waitForResponse(r => r.url().endsWith('/fr/son/vortoj/patro.mp3'))
  await sono.click()
  expect((await sxargxo).status()).toBeLessThan(400)
  // un clic n'ouvre pas le fichier à la place du lexique
  await expect(page).toHaveURL(/vocabula\.php/)

  // lexique rechargé en AJAX par la recherche : le bouton marche toujours (le fichier vient alors du cache)
  await page.locator('#pattern').pressSequentially('pat')
  await expect(vorto(page, 'patrino')).toBeVisible()
  await expect(vorto(page, 'bona')).toHaveCount(0)
  await vorto(page, 'patrino').locator('a.sono').click()
  expect((await sonoj(page)).at(-1)).toMatch(/\/fr\/son\/vortoj\/patrino\.mp3$/)
  await expect(page).toHaveURL(/vocabula\.php/)
})

test('dans la révision, le mot se fait entendre après la réponse et dans le récapitulatif', async ({ page }) => {
  const lernanto = LERNANTO_ID()
  sql(`INSERT INTO personoj_vortoj (persono_id, vorto_id, nombrilo, venontaFojo)
    SELECT ${lernanto}, v.id, 2, NOW() + INTERVAL 10 DAY FROM vortoj v
    WHERE v.lecionero_id IN (SELECT lecionero_id FROM personoj_lecioneroj WHERE persono_id=${lernanto})
    AND v.id NOT IN (SELECT vorto_id FROM personoj_vortoj WHERE persono_id=${lernanto})`)
  sql(`UPDATE personoj_vortoj SET venontaFojo = IF(vorto_id=${VORTO_ID('domo')}, NOW() - INTERVAL 1 DAY, NOW() + INTERVAL 10 DAY) WHERE persono_id=${lernanto}`)

  await login(page, USERS.lernanto)
  await page.goto('memoriVortojn.php')
  await expect(page.locator('.memorilo_demando:visible h3')).toContainText('maison')
  // la carte ne donne pas la réponse
  await expect(page.locator('.memorilo_demando:visible a.sono')).toHaveCount(0)
  const sxargxo = page.waitForRequest(r => r.url().endsWith('/fr/son/vortoj/domo.mp3'))
  await page.locator('.memorilo_input:visible').fill('kato')
  await page.locator('.memorilo_input:visible').press('Enter')
  await sxargxo
  const linio = page.locator('#malbonaj_respondoj li', { hasText: 'maison' })
  await expect(linio.locator('a.sono')).toHaveAttribute('href', /\/fr\/son\/vortoj\/domo\.mp3$/)
})
