import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Page de correction (korektiLecionon.php) : le correcteur voit ce que l'élève n'a pas fait (#1022).
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
const LECIONO_ID = () => sql("SELECT id FROM lecionoj WHERE kurso='CG' AND numero=1")
// premier exercice de la leçon 1 (section 6, six phrases à traduire)
const EKZERCO_ID = () => sql(`SELECT e.id FROM ekzercoj e JOIN lecioneroj le ON le.id=e.lecionero_id
  WHERE le.leciono_id=${LECIONO_ID()} ORDER BY le.ordo, e.id LIMIT 1`)
const EKZERCERO_ID = (numero: number) => sql(`SELECT id FROM ekzerceroj WHERE ekzerco_id=${EKZERCO_ID()} AND numero=${numero}`)

test.beforeEach(() => {
  resetTestData()
  const lernanto = LERNANTO_ID()
  sql(`DELETE FROM personoj_lecioneroj WHERE persono_id=${lernanto}`)
  sql(`DELETE FROM personoj_lecionoj WHERE persono_id=${lernanto}`)
  sql(`DELETE FROM respondoj WHERE persono_id=${lernanto}`)
  // toutes les sections sauf la 3 et la 4 ; leçon envoyée
  sql(`INSERT INTO personoj_lecioneroj (dato, persono_id, lecionero_id, ekdato)
    SELECT NOW(), ${lernanto}, id, NOW() FROM lecioneroj WHERE leciono_id=${LECIONO_ID()} AND ordo NOT IN (3, 4)`)
  sql(`INSERT INTO personoj_lecionoj (dato, persono_id, leciono_id) VALUES (NOW(), ${lernanto}, ${LECIONO_ID()})`)
  // premier exercice : réponse à la question 1, réponse vide à la 2, rien pour les autres
  sql(`INSERT INTO respondoj (persono_id, ekzercero_id, respondo, normaligita) VALUES
    (${lernanto}, ${EKZERCERO_ID(1)}, 'La teo estas varma.', 'la teo estas varma'),
    (${lernanto}, ${EKZERCERO_ID(2)}, '', '')`)
})

test("le correcteur voit les sections non terminées et les questions sans réponse", async ({ page }) => {
  await login(page, USERS.korektanto)
  await page.goto(`korektiLecionon.php?numleciono=1&kurso=CG&studanto=${LERNANTO_ID()}`)
  const encadre = page.locator('.mankantaj')
  await expect(encadre).toContainText("L'élève n'a pas tout fait dans cette leçon")
  await expect(encadre.locator('li', { hasText: /^3\. / })).toHaveCount(1)
  await expect(encadre.locator('li', { hasText: /^4\. / })).toHaveCount(1)

  // premier exercice : questions 2 à 6 sans réponse, avec un lien vers l'exercice
  const ekzerco = encadre.locator('li', { has: page.locator(`a[href="#ekzerco${EKZERCO_ID()}"]`) })
  await expect(ekzerco).toContainText('questions 2, 3, 4, 5, 6')
  await ekzerco.locator('a').click()
  await expect(page).toHaveURL(new RegExp(`#ekzerco${EKZERCO_ID()}$`))

  // dans l'exercice, la question sans réponse est affichée à sa place, sans champ de correction
  await expect(page.locator('p.respondo', { hasText: 'La teo estas varma.' })).toHaveCount(1)
  await expect(page.locator('p.respondo.mankanta').first()).toHaveText('pas de réponse')
  // questions 2 à 6 du premier exercice, et toutes celles des exercices suivants
  expect(await page.locator('p.respondo.mankanta').count()).toBeGreaterThanOrEqual(5)
  await expect(page.locator(`textarea[name^=korekto]`)).toHaveCount(0)
})

test("sans rien de manquant, pas d'encadré", async ({ page }) => {
  const lernanto = LERNANTO_ID()
  sql(`INSERT INTO personoj_lecioneroj (dato, persono_id, lecionero_id, ekdato)
    SELECT NOW(), ${lernanto}, id, NOW() FROM lecioneroj WHERE leciono_id=${LECIONO_ID()} AND ordo IN (3, 4)`)
  sql(`DELETE FROM respondoj WHERE persono_id=${lernanto}`)
  sql(`INSERT INTO respondoj (persono_id, ekzercero_id, respondo, normaligita)
    SELECT ${lernanto}, ee.id, 'respondo', 'respondo' FROM ekzerceroj ee JOIN ekzercoj e ON e.id=ee.ekzerco_id
    JOIN lecioneroj le ON le.id=e.lecionero_id WHERE le.leciono_id=${LECIONO_ID()} AND ee.forigita=0`)
  await login(page, USERS.korektanto)
  await page.goto(`korektiLecionon.php?numleciono=1&kurso=CG&studanto=${lernanto}`)
  await expect(page.locator('h2', { hasText: 'Détails de la leçon' })).toBeVisible()
  await expect(page.locator('.mankantaj')).toHaveCount(0)
  await expect(page.locator('p.respondo.mankanta')).toHaveCount(0)
})
