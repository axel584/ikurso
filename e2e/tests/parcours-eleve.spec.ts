import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'
import { clearMails, waitForMail } from '../helpers/mailhog'

// Parcours principal du site : un élève fait sa leçon, obtient un correcteur,
// le correcteur corrige et l'élève voit la correction.
// Les tests s'enchaînent dans l'ordre et partagent l'état de la base.
test.describe.configure({ mode: 'serial' })

test.beforeAll(async () => {
  resetTestData()
  await clearMails()
})

const LECON_1 = 'fr/cge/lec01.php'
// Classe ajoutée à un champ dont la réponse est juste (à ne pas confondre avec « validate »).
const VALIDE = /(^|\s)valid(\s|$)/
const LERNANTO_ID = sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'") || '3'

test.describe("Leçon 1 du cours élémentaire", () => {
  test('un exercice auto-corrigé valide une bonne réponse et pas une mauvaise', async ({ page }) => {
    await login(page, USERS.lernanto)
    await page.goto(`${LECON_1}?section=6`)

    const bonne = page.locator('#res_1')
    await bonne.fill('La teo estas varma.')
    await bonne.blur()
    await expect(bonne).toHaveClass(VALIDE)

    const mauvaise = page.locator('#res_2')
    await mauvaise.fill('Via biskvito estas varma.')
    await mauvaise.blur()
    await expect(mauvaise).not.toHaveClass(VALIDE)

    // La réponse est enregistrée dès qu'on quitte le champ.
    await expect
      .poll(() => sql(`SELECT respondo FROM respondoj WHERE persono_id=${LERNANTO_ID} AND ekzercero_id=1 ORDER BY id DESC LIMIT 1`))
      .toBe('La teo estas varma.')
  })

  test("le QCM n'avance qu'avec la bonne réponse et se termine", async ({ page }) => {
    await login(page, USERS.lernanto)
    await page.goto(`${LECON_1}?section=8`)

    const questions = page.locator('.qcm_demando')
    const total = await questions.count()
    expect(total).toBeGreaterThan(0)

    // Une mauvaise réponse ne fait pas passer à la question suivante.
    const premiere = questions.first()
    await premiere.locator('.qcm_nok').first().check({ force: true })
    await expect(premiere).toBeVisible()

    for (let i = 0; i < total; i++) {
      await page.locator('.qcm_demando:visible .qcm_ok').first().check({ force: true })
      if (i < total - 1) await expect(questions.nth(i)).toBeHidden()
    }
    await expect(page.locator('#recapitulatif_qcm')).toBeVisible()
  })

  test("l'élève termine sa leçon et reçoit automatiquement un correcteur", async ({ page }) => {
    await login(page, USERS.lernanto)
    await page.goto(`${LECON_1}?section=13`)

    await page.locator('#petiKorektanton_button').click()
    await expect(page).toHaveURL(/konfirmo\.php\?kazo=2&lec=1/)

    expect(sql(`SELECT p.enirnomo FROM nuna_kurso n JOIN personoj p ON p.id=n.korektanto WHERE n.studanto=${LERNANTO_ID}`)).toBe('korektanto1')
    expect(sql(`SELECT rajtoj FROM personoj WHERE id=${LERNANTO_ID}`)).toBe('S')

    await waitForMail('lernanto1@mailinator.com', 'Votre correcteur')
    await waitForMail('korektanto1@mailinator.com', 'Nouvel élève')
  })

  test('le correcteur voit son nouvel élève', async ({ page }) => {
    await login(page, USERS.korektanto)
    await expect(page).toHaveURL(/miajlernantoj\.php/)
    await expect(page.getByText('lernanto1').first()).toBeVisible()
  })

  test("le correcteur corrige la leçon et l'élève reçoit la correction", async ({ page }) => {
    await clearMails()
    await login(page, USERS.korektanto)
    await page.goto(`korektiLecionon.php?numleciono=1&kurso=CG&studanto=${LERNANTO_ID}`)

    const commentaire = 'Bravo pour cette première leçon (e2e)'
    await page.locator('textarea[name=konkludo]').evaluate((el, text) => {
      ;(el as HTMLTextAreaElement).value = text
    }, commentaire)

    // Correction d'une réponse précise.
    const champCorrection = page.locator('textarea[name^=korekto]').first()
    const respondoId = (await champCorrection.getAttribute('name'))!.replace('korekto', '')
    const correction = 'Attention à l’accord (e2e)'
    await champCorrection.evaluate((el, text) => {
      ;(el as HTMLTextAreaElement).value = text
    }, correction)

    await page.locator('#pas_envoi_email').uncheck({ force: true })
    await page.locator('#registriKorektadon_button').click()
    await expect(page).toHaveURL(/vidiLecionon\.php/)

    expect(sql(`SELECT korektita FROM personoj_lecionoj WHERE persono_id=${LERNANTO_ID} AND leciono_id=59`)).toBe('1')
    expect(sql(`SELECT korekto FROM respondoj WHERE id=${respondoId}`)).toBe(correction)
    const mailKorektado = await waitForMail('lernanto1@mailinator.com', 'Votre leçon a été corrigée')
    // l'élève peut écrire à la personne qui a corrigé (#1023)
    expect(mailKorektado.body).toContain('korektanto1@mailinator.com')

    // L'élève voit le commentaire de son correcteur.
    await page.goto('eliri.php')
    await login(page, USERS.lernanto)
    await page.goto('vidiLecionon.php?numleciono=1&kurso=CG')
    await expect(page.getByText(commentaire)).toBeVisible()
  })
})
