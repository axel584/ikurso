import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// CG leçon 6, exercice 4 « Formez des phrases avec les mots suivants » (#945) : d'autres ordres des mots justes
// sont acceptés par la correction automatique (sql/49) ; « ĉiu infanoj » (au lieu de ĉiuj) reste refusé.
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")

test.beforeEach(() => {
  resetTestData()
  sql(`DELETE FROM respondoj WHERE persono_id=${LERNANTO_ID()} AND ekzercero_id BETWEEN 153 AND 157`)
})

const provoj: [number, string, boolean][] = [
  [153, 'En tiu zoo estas multaj bestoj interesaj.', true],
  [154, 'Antaŭ ĉiu kaĝo estos infanoj dum la tagmanĝo.', true],
  [154, 'Estos infanoj dum la tagmanĝo antaŭ ĉiu kaĝo.', true],
  [154, 'Dum la tagmanĝo ĉiu infanoj estos antaŭ la kaĝo.', false],
  [155, 'Ĉu apud la enirejo estis multaj kaĝoj?', true],
  [157, 'Estas ursoj blankaj en arkto.', true],
  [157, 'Ursoj blankaj estas en arkto.', true],
  [157, 'Estas en arkto blankaj ursoj.', true],
]

test('les ordres des mots ajoutés sont acceptés, « ĉiu infanoj » reste refusé', async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec06.php?section=12')
  const alia = page.locator('#res_156')
  for (const [id, frazo, gxusta] of provoj) {
    const kampo = page.locator(`#res_${id}`)
    const atendo = page.waitForResponse(r => r.url().includes('memkorektado.php') && r.url().includes(`ekzercero=${id}`))
    await kampo.fill(frazo)
    await alia.focus()
    await atendo
    if (gxusta) {
      await expect(kampo, frazo).toHaveClass(/(^|\s)valid(\s|$)/)
    } else {
      await expect(kampo, frazo).not.toHaveClass(/(^|\s)valid(\s|$)/)
    }
    expect(sql(`SELECT gxusta FROM respondoj WHERE persono_id=${LERNANTO_ID()} AND ekzercero_id=${id}`), frazo).toBe(gxusta ? '1' : '0')
  }
})
