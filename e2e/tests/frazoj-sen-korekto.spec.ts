import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Phrases libres au milieu d'un exercice corrigé automatiquement (Paŝoj, leçon 1 : « Substantivo de MODERNA »
// a un corrigé type, « Frazo kun la substantivo de MODERNA » n'en a pas) : la phrase n'est pas corrigée
// automatiquement, sa réponse est enregistrée sans être marquée fausse.
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
const gxusta = (ekzercero: number) =>
  sql(`SELECT IFNULL(gxusta, 'NULL') FROM respondoj WHERE persono_id=${LERNANTO_ID()} AND ekzercero_id=${ekzercero}`)

test.beforeEach(() => {
  resetTestData()
  sql(`DELETE FROM respondoj WHERE persono_id=${LERNANTO_ID()} AND ekzercero_id IN (925, 926)`)
})

test('dans un exercice corrigé automatiquement, la phrase libre sans corrigé type n’est pas marquée fausse', async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('eo/ppp/pasxo01.php?section=4')
  const substantivo = page.locator('#res_925')
  const frazo = page.locator('#res_926')
  await expect(substantivo).toHaveClass(/(^|\s)korektebla(\s|$)/)
  await expect(frazo).toHaveClass(/(^|\s)nekorektebla(\s|$)/)

  const respondo = (id: number) => page.waitForResponse(r => r.url().includes('memkorektado.php') && r.url().includes(`ekzercero=${id}`))
  let atendo = respondo(925)
  await substantivo.fill('moderneco')
  await frazo.focus()
  await atendo
  await expect(substantivo).toHaveClass(/(^|\s)valid(\s|$)/)
  expect(gxusta(925)).toBe('1')

  atendo = respondo(926)
  await frazo.fill('La moderneco de la urbo plaĉas al mi.')
  await substantivo.focus()
  await atendo
  await expect(frazo).not.toHaveClass(/(^|\s)valid(\s|$)/)
  expect(gxusta(926)).toBe('NULL')
  expect(sql(`SELECT respondo FROM respondoj WHERE persono_id=${LERNANTO_ID()} AND ekzercero_id=926`)).toBe('La moderneco de la urbo plaĉas al mi.')
})

test('memkorektado.php ne corrige pas une question sans corrigé type, même appelé comme corrigeable', async ({ page }) => {
  await login(page, USERS.lernanto)
  const r = await page.request.get('ajax/memkorektado.php', { params: { ekzercero: '926', respondo: 'Iu frazo.', korekteblaEkzerco: 'true' } })
  expect(await r.json()).toBeNull()
  expect(gxusta(926)).toBe('NULL')
})
