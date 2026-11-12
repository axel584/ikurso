import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Cours élémentaire, section 8.5 réécrite (#1132, sql/68) : « le message à Klara », un verbe par phrase à mettre
// à la bonne forme (corrigé automatiquement), puis trois conseils pour apprendre l'espéranto, corrigés par le correcteur.
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
const SEKCIO = () => sql("SELECT le.id FROM lecioneroj le JOIN lecionoj l ON l.id=le.leciono_id WHERE l.kurso='CG' AND l.numero=8 AND le.ordo=5")
const DEMANDO = (ekzerco: string, numero: number) =>
  sql(`SELECT er.id FROM ekzerceroj er JOIN ekzercoj e ON e.id=er.ekzerco_id WHERE e.lecionero_id=${SEKCIO()} AND e.typo='${ekzerco}' AND er.numero=${numero} AND er.forigita=0`)

test.beforeEach(() => {
  resetTestData()
  sql(`DELETE r FROM respondoj r JOIN ekzerceroj er ON er.id=r.ekzercero_id JOIN ekzercoj e ON e.id=er.ekzerco_id
       WHERE r.persono_id=${LERNANTO_ID()} AND e.lecionero_id=${SEKCIO()}`)
})

async function plenigi(page, id: string, vorto: string) {
  const frazo = page.locator(`#res_${id}`)
  const kampo = frazo.locator('.frazo-kampo')
  await expect(kampo).toHaveCount(1)
  const atendo = page.waitForResponse(r => r.url().includes('memkorektado.php') && r.url().includes(`ekzercero=${id}`))
  await kampo.fill(vorto)
  await kampo.blur()
  await atendo
  return frazo
}

test('le message à Klara : la bonne terminaison est acceptée, une mauvaise est refusée', async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec08.php?section=5')
  await expect(page.getByText('Kara Klara,')).toBeVisible()
  // l'ancien exercice de traduction n'est plus affiché
  await expect(page.getByText('Cet imbécile veut me rencontrer')).toHaveCount(0)

  const donu = await plenigi(page, DEMANDO('plenigu', 5), 'Donu')
  await expect(donu).toHaveClass(/(^|\s)valid(\s|$)/)
  // « vojaĝas » est aussi accepté après « Morgaŭ »
  const vojagxas = await plenigi(page, DEMANDO('plenigu', 2), 'vojaĝas')
  await expect(vojagxas).toHaveClass(/(^|\s)valid(\s|$)/)
  // « restos » au lieu de « restus » : refusé
  const restos = await plenigi(page, DEMANDO('plenigu', 8), 'restos')
  await expect(restos).not.toHaveClass(/(^|\s)valid(\s|$)/)
  expect(sql(`SELECT gxusta FROM respondoj WHERE persono_id=${LERNANTO_ID()} AND ekzercero_id=${DEMANDO('plenigu', 5)}`)).toBe('1')
  expect(sql(`SELECT gxusta FROM respondoj WHERE persono_id=${LERNANTO_ID()} AND ekzercero_id=${DEMANDO('plenigu', 8)}`)).toBe('0')

  // partie libre : une seule zone de texte (trois conseils), sans correction automatique
  await expect(page.locator(`textarea#res_${DEMANDO('verkado-2', 1)}`)).toHaveClass(/nekorektebla/)
  await expect(page.getByText('Se mi havus pli da tempo')).toHaveCount(0)
})
