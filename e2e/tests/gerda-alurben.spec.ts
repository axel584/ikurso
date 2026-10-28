import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Gerda leçon 10, exercice « Plenigu ĉiun truon », phrase 21 (#967) : « alurben » est donné en entier (sql/51),
// il ne reste que deux trous et la réponse attendue n'a pas changé.
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")

test.beforeEach(() => {
  resetTestData()
  sql(`DELETE FROM respondoj WHERE persono_id=${LERNANTO_ID()} AND ekzercero_id=2391`)
})

test('« alurben » est donné dans la phrase et la réponse complète est acceptée', async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('fr/gerda/cxap10.php?section=4')
  const frazo = page.locator('#res_2391')
  await expect(frazo).toContainText('tra la pordo alurben, ŝi sekvas li')
  const truoj = frazo.locator('.frazo-kampo')
  await expect(truoj).toHaveCount(2)
  await truoj.nth(0).fill('adas')
  const atendo = page.waitForResponse(r => r.url().includes('memkorektado.php') && r.url().includes('ekzercero=2391')
    && decodeURIComponent(r.url()).includes('sekvas lin'))
  await truoj.nth(1).fill('n')
  await truoj.nth(1).blur()
  await atendo
  await expect(frazo).toHaveClass(/(^|\s)valid(\s|$)/)
  expect(sql(`SELECT gxusta FROM respondoj WHERE persono_id=${LERNANTO_ID()} AND ekzercero_id=2391`)).toBe('1')
})
