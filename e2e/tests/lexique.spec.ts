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
