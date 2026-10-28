import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Page « Modifier le nombre d'élèves » (sxangxiNBlernantoj.php), passée sous Materialize :
// seuls les cours que le correcteur peut corriger sont proposés.
const KOREKTANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='korektanto1'")
const kiom = (kurso: string) => sql(`SELECT kiom_lernantoj FROM korektebla_kurso WHERE korektanto=${KOREKTANTO_ID()} AND kurso='${kurso}'`)

test.beforeEach(() => {
  resetTestData()
  sql(`DELETE FROM korektebla_kurso WHERE korektanto=${KOREKTANTO_ID()} AND kurso='GR'`)
  sql(`INSERT INTO korektebla_kurso (korektanto, kurso, kiom_lernantoj) VALUES (${KOREKTANTO_ID()}, 'GR', 2)`)
})

test('le correcteur modifie le nombre maximum d’élèves de ses cours', async ({ page }) => {
  await login(page, USERS.korektanto)
  await page.goto('sxangxiNBlernantoj.php')
  const linioj = page.locator('form.nblernantoj tbody tr')
  await expect(linioj).toHaveCount(2)
  await expect(page.locator('form.nblernantoj')).not.toContainText('Paŝoj')

  await page.getByLabel('DLEK : Cours en 10 leçons').fill('5')
  await page.getByLabel('Gerda Malaperis').fill('0')
  await page.getByRole('button', { name: 'Valider' }).click()
  await expect(page).toHaveURL(/sxangxiNBlernantoj\.php\?farite=jes/)
  await expect(page.locator('.card-panel')).toContainText('Vos données ont été mises à jour.')
  expect(kiom('CG')).toBe('5')
  expect(kiom('GR')).toBe('0')
  await expect(page.getByLabel('DLEK : Cours en 10 leçons')).toHaveValue('5')
})

test('un élève n’a pas accès à la page', async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('index.php')
  const respondo = await page.request.get('sxangxiNBlernantoj.php', { maxRedirects: 0 })
  expect(respondo.headers()['location']).toContain('erarkodo=4')
})
