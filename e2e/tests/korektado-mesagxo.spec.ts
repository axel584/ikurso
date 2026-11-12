import { test, expect, type Page } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Introduction et conclusion d'une correction (korektiLecionon.php) : tout le texte tapé est enregistré.
// Trumbowyg 2.20 ne recopie plus l'éditeur dans le formulaire après une composition de caractère
// sans « compositionend » (touche morte ^ puis o, selon le navigateur) : le message était coupé avant le « ô ».
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
const LECIONO_ID = () => sql("SELECT id FROM lecionoj WHERE kurso='CG' AND numero=1")
const enregistre = (kolono: string) =>
  sql(`SELECT ${kolono} FROM personoj_lecionoj WHERE persono_id=${LERNANTO_ID()} AND leciono_id=${LECIONO_ID()}`)

// l'éditeur est replié sous « Rédiger une introduction » / « Rédiger une conclusion »
async function redaktilo(page: Page, nomo: 'enkonduko' | 'konkludo') {
  await page.getByText(nomo === 'enkonduko' ? 'Rédiger une introduction' : 'Rédiger une conclusion').click()
  const ujo = page.locator('.trumbowyg-box', { has: page.locator(`textarea[name="${nomo}"]`) }).locator('.trumbowyg-editor')
  await expect(ujo).toBeVisible()
  return ujo
}

test.beforeEach(() => {
  resetTestData()
  const lernanto = LERNANTO_ID()
  sql(`DELETE FROM personoj_lecionoj WHERE persono_id=${lernanto}`)
  sql(`INSERT INTO personoj_lecionoj (dato, persono_id, leciono_id) VALUES (NOW(), ${lernanto}, ${LECIONO_ID()})`)
})

async function sendi(page: Page) {
  await page.locator('#registriKorektadon_button').click()
  await page.waitForURL(/vidiLecionon\.php/)
}

test('une très longue introduction et une très longue conclusion sont enregistrées en entier', async ({ page }) => {
  const longa = Array.from({ length: 60 }, (_, i) => `Phrase ${i + 1} : bravo pour les corrélatifs, ĉiuj kaj neniu.`).join(' ')
  await login(page, USERS.korektanto)
  await page.goto(`korektiLecionon.php?numleciono=1&kurso=CG&studanto=${LERNANTO_ID()}`)
  for (const nomo of ['enkonduko', 'konkludo'] as const) {
    await (await redaktilo(page, nomo)).click()
    await page.keyboard.insertText(longa)
  }
  await sendi(page)
  expect(enregistre('enkonduko')).toContain(longa)
  expect(enregistre('konkludo')).toContain(longa)
})

test('le texte tapé après une lettre composée (touche morte) est enregistré', async ({ page }) => {
  // le correcteur reprend une introduction déjà commencée (le formulaire contient déjà du HTML)
  sql(`UPDATE personoj_lecionoj SET enkonduko='<p>Saluton,</p>' WHERE persono_id=${LERNANTO_ID()} AND leciono_id=${LECIONO_ID()}`)
  await login(page, USERS.korektanto)
  await page.goto(`korektiLecionon.php?numleciono=1&kurso=CG&studanto=${LERNANTO_ID()}`)
  const enkonduko = await redaktilo(page, 'enkonduko')
  await enkonduko.click()
  await page.keyboard.type('Il ne faut pas les apprendre, mais plut')
  // touche morte « ^ » : le navigateur commence une composition et ne la termine pas toujours
  await enkonduko.dispatchEvent('compositionstart')
  await page.keyboard.type('ôt les utiliser dans des phrases.')
  // le correcteur replie l'introduction avant d'envoyer
  await page.getByText('Rédiger une introduction').click()
  await sendi(page)
  expect(enregistre('enkonduko')).toContain('mais plutôt les utiliser dans des phrases.')
})
