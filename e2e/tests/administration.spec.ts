import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'
import { clearMails, waitForMail } from '../helpers/mailhog'

// Gestion des comptes (administri.php) : chaque fonctionnalité garde son script de traitement.
// lernanto1 attend un correcteur pour le cours élémentaire (droit P, cours CG choisi).
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
const KOREKTANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='korektanto1'")

test.beforeEach(async () => {
  resetTestData()
  sql("UPDATE personoj SET kurso='CG' WHERE enirnomo='lernanto1'")
  await clearMails()
})

test.describe('Gestion des comptes', () => {
  test("la fiche d'un élève en attente se modifie et s'enregistre", async ({ page }) => {
    await login(page, USERS.admin)
    await page.goto('administri.php')
    await page.locator('.atendantaj a', { hasText: 'lernanto1' }).click()
    await expect(page).toHaveURL(new RegExp(`celpersono_id=${LERNANTO_ID()}$`))

    await page.locator('#familinomo').fill('Testnomo')
    await page.locator('#urbo').fill('Lyon')
    await page.locator('input[name="saviezvous"]').uncheck({ force: true })
    await page.getByRole('button', { name: 'Enregistrer' }).click()

    await expect(page.locator('.card-panel', { hasText: 'correctement mise à jour' })).toBeVisible()
    await expect(page.locator('#familinomo')).toHaveValue('Testnomo')
    expect(sql(`SELECT CONCAT(familinomo,' ',urbo,' ',kurso) FROM personoj WHERE id=${LERNANTO_ID()}`)).toBe('Testnomo Lyon CG')
    expect(sql(`SELECT rajto FROM personoj_agordoj WHERE persono_id=${LERNANTO_ID()} AND agordo='SAVIEZVOUS'`)).toBe('0')
  })

  test('la recherche mène à la fiche', async ({ page }) => {
    await login(page, USERS.admin)
    await page.goto('administri.php')
    await page.locator('#s_celenirnomo').fill('korekt')
    await page.locator('form[action="sercxi.php"] button[type="submit"]').click()
    await expect(page.locator('h1')).toHaveText('Résultat de la recherche')
    await expect(page.locator('.sercxrezultoj li')).toHaveCount(1)
    await page.locator('.sercxrezultoj a', { hasText: 'korektanto1' }).click()
    await expect(page).toHaveURL(new RegExp(`celpersono_id=${KOREKTANTO_ID()}$`))
  })

  test("un correcteur est attribué à l'élève, qui apparaît dans ses élèves", async ({ page }) => {
    await login(page, USERS.admin)
    await page.goto(`administri.php?celpersono_id=${LERNANTO_ID()}`)
    await expect(page.locator('text=Correcteur idéal : korektanto1')).toBeVisible()
    await page.getByRole('button', { name: 'Attribuer' }).click()

    await expect(page.locator('.card-panel', { hasText: 'correctement mise à jour' })).toBeVisible()
    expect(sql(`SELECT CONCAT(korektanto,' ',kurso,' ',stato) FROM nuna_kurso WHERE studanto=${LERNANTO_ID()}`)).toBe(`${KOREKTANTO_ID()} CG N`)
    expect(sql(`SELECT rajtoj FROM personoj WHERE id=${LERNANTO_ID()}`)).toBe('S')
    await expect(page.locator('table a', { hasText: 'korektanto1' })).toBeVisible()
    await waitForMail('lernanto1@mailinator.com', 'Votre correcteur I-kurso')

    await page.goto(`administri.php?celpersono_id=${KOREKTANTO_ID()}`)
    await expect(page.locator('.lernanto .card-title', { hasText: 'lernanto1' })).toBeVisible()
  })

  test('un commentaire se rajoute et se supprime', async ({ page }) => {
    await login(page, USERS.admin)
    await page.goto(`administri.php?celpersono_id=${LERNANTO_ID()}`)
    await page.locator('#teksto').fill('Commentaire e2e')
    await page.getByRole('button', { name: 'Ajouter' }).click()
    await expect(page.locator('.komentoj li', { hasText: 'Commentaire e2e' })).toBeVisible()

    await page.locator('.komentoj li', { hasText: 'Commentaire e2e' }).locator('a[title="Supprimer ce commentaire"]').click()
    await expect(page.locator('.komentoj li', { hasText: 'Commentaire e2e' })).toHaveCount(0)
    expect(sql(`SELECT COUNT(*) FROM komentoj WHERE teksto='Commentaire e2e'`)).toBe('0')
  })

  test("l'administrateur se connecte comme l'élève", async ({ page }) => {
    await login(page, USERS.admin)
    await page.goto(`administri.php?celpersono_id=${LERNANTO_ID()}`)
    await page.getByRole('link', { name: /Se connecter comme lernanto1/ }).click()
    await expect(page).not.toHaveURL(/administri\.php/)
    await expect(page.locator('#uzantomenuo .uzanto')).toContainText('lernanto1')
  })

  test('la suppression demande de recopier l’identifiant', async ({ page }) => {
    sql("INSERT INTO personoj (enirnomo, retadreso, rajtoj, aktivigita, ekdato) VALUES ('e2eforigi', 'e2eforigi@mailinator.com', 'P', 1, NOW())")
    const id = sql("SELECT id FROM personoj WHERE enirnomo='e2eforigi'")
    await login(page, USERS.admin)
    await page.goto(`administri.php?celpersono_id=${id}`)
    await page.getByRole('button', { name: 'Supprimer' }).click()
    await expect(page.locator('h1')).toHaveText('Confirmez la suppression')
    await page.locator('input[name="validperson"]').fill('e2eforigi')
    await page.getByRole('button', { name: 'Confirmer' }).click()
    await expect(page).toHaveURL(/administri\.php\?validi=jes/)
    expect(sql(`SELECT COUNT(*) FROM personoj WHERE id=${id}`)).toBe('0')
  })

  test("un élève n'a pas accès à la page", async ({ page }) => {
    await login(page, USERS.lernanto)
    await page.goto('administri.php')
    // renvoyé vers l'accueil (erarkodo=4), qui redirige un élève connecté vers sa leçon
    await expect(page).not.toHaveURL(/administri\.php/)
  })
})
