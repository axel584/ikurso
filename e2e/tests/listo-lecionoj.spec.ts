import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Liste des leçons en haut des pages de cours (#909) : en vert les leçons dont toutes les sections sont finies,
// en rose celles envoyées au correcteur alors que des sections ne le sont pas.
const LECIONO_ID = (numero: number) => sql(`SELECT id FROM lecionoj WHERE kurso='CG' AND numero=${numero}`)

test.beforeEach(() => {
  resetTestData()
  const lernanto = sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
  sql(`DELETE FROM personoj_lecioneroj WHERE persono_id=${lernanto}`)
  sql(`DELETE FROM personoj_lecionoj WHERE persono_id=${lernanto}`)
  // leçon 1 : toutes les sections ; leçon 2 : deux sections, mais envoyée ; leçon 4 : une section, pas envoyée
  sql(`INSERT INTO personoj_lecioneroj (dato, persono_id, lecionero_id, ekdato)
    SELECT NOW(), ${lernanto}, id, NOW() FROM lecioneroj WHERE leciono_id=${LECIONO_ID(1)}`)
  sql(`INSERT INTO personoj_lecioneroj (dato, persono_id, lecionero_id, ekdato)
    SELECT NOW(), ${lernanto}, id, NOW() FROM lecioneroj WHERE leciono_id=${LECIONO_ID(2)} AND ordo<=2`)
  sql(`INSERT INTO personoj_lecioneroj (dato, persono_id, lecionero_id, ekdato)
    SELECT NOW(), ${lernanto}, id, NOW() FROM lecioneroj WHERE leciono_id=${LECIONO_ID(4)} AND ordo=1`)
  sql(`INSERT INTO personoj_lecionoj (dato, persono_id, leciono_id) VALUES (NOW(), ${lernanto}, ${LECIONO_ID(2)})`)
})

test("l'élève voit en vert les leçons finies et en rose celles envoyées incomplètes", async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec03.php')
  await expect(page.locator('#lec01')).toHaveClass('farita')
  await expect(page.locator('#lec01')).toHaveAttribute('title', 'Leçon terminée')
  await expect(page.locator('#lec02')).toHaveClass('nekompleta')
  await expect(page.locator('#lec03')).toHaveClass('nova nuna')
  await expect(page.locator('#lec04')).toHaveClass('nova')
  await expect(page.locator('#lec05')).toHaveClass('nova')

  // la leçon affichée garde sa couleur, encadrée
  await page.goto('fr/cge/lec01.php')
  await expect(page.locator('#lec01')).toHaveClass('farita nuna')
})

test('un visiteur voit en vert les leçons avant celle affichée, comme avant', async ({ page }) => {
  await page.goto('fr/cge/lec03.php')
  await expect(page.locator('#lec01')).toHaveClass('farita')
  await expect(page.locator('#lec02')).toHaveClass('farita')
  await expect(page.locator('#lec03')).toHaveClass('nuna')
  await expect(page.locator('#lec04')).toHaveClass('nova')
})
