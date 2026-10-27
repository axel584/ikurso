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
  await linio.locator('a.forigi_vorton').click()
  await expect(linio).toHaveClass(/forigita/)
  expect(forigita('domo')).toBe('1')

  await page.goto('memoriVortojn.php')
  await expect(page.locator('h3', { hasText: 'Aucun mot à réviser' })).toBeVisible()
})
