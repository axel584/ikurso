import { test, expect } from '@playwright/test'
import { execFileSync } from 'node:child_process'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'
import { clearMails } from '../helpers/mailhog'

// Formulaires des pages (#1098) : pagxkapo.inc.php n'entoure plus chaque page d'un formulaire,
// chaque page garde le sien et l'envoie en POST à sa cible.
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")

test.beforeEach(async () => {
  resetTestData()
  await clearMails()
})

test('les données personnelles se modifient et s’enregistrent', async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('sxangxipersoninformojn.php')
  await page.locator('input[name="urbo"]').fill('Grenoble')
  await page.getByRole('button', { name: 'Enregister les modifications' }).click()
  await expect(page).toHaveURL(/personinformoj\.php\?erarkodo=20/)
  expect(sql(`SELECT urbo FROM personoj WHERE id=${LERNANTO_ID()}`)).toBe('Grenoble')
})

test('le formulaire de contact part en POST, et sans captcha le message est refusé', async ({ page }) => {
  await page.goto('reago.php')
  await page.locator('#demando').selectOption('autre', { force: true })
  await page.locator('#sendinto').fill('visiteur@mailinator.com')
  await page.locator('#temo').fill('Essai de contact')
  await page.locator('#komento').fill('Message de test du formulaire de contact')
  const envoi = page.waitForRequest(r => r.url().includes('reago2.php'))
  await page.locator('#reago input[type=submit]').click()
  const requete = await envoi
  expect(requete.method()).toBe('POST')
  expect(requete.postData()).toContain('temo=Essai+de+contact')
  // la case « Je ne suis pas un robot » ne peut pas être cochée par un test
  await expect(page).toHaveURL(/reago\.php\?erarkodo=25/)
})

test('le lien de désabonnement désabonne, le bouton réabonne', async ({ page }) => {
  const id = LERNANTO_ID()
  const ligilo = execFileSync('docker', ['exec', '-w', '/var/www/html', 'ikurso_php', 'php', '-r',
    `include "config.php"; require "api/AgordojAPI.php"; echo AgordojAPI::malaboniLigilo(${id}, "SAVIEZVOUS");`], { encoding: 'utf8' }).trim()
  await page.goto(ligilo.replace(/^https?:\/\/[^/]+\//, ''))
  await expect(page.getByText('vous ne recevrez plus')).toBeVisible()
  expect(sql(`SELECT rajto FROM personoj_agordoj WHERE persono_id=${id} AND agordo='SAVIEZVOUS'`)).toBe('0')

  await page.getByRole('button', { name: /continuer à les recevoir/ }).click()
  await expect(page.getByText('vous recevrez de nouveau')).toBeVisible()
  expect(sql(`SELECT rajto FROM personoj_agordoj WHERE persono_id=${id} AND agordo='SAVIEZVOUS'`)).toBe('1')
})

for (const [kurso, pagxo] of [['CG', 'fr/cge/konfirmo.php'], ['GR', 'fr/gerda/konfirmo.php'], ['PP', 'eo/ppp/konfirmo.php']]) {
  test(`l'appréciation de la leçon s'enregistre (${kurso})`, async ({ page }) => {
    // 03-create-data-test.sql ne vide pas takso_leciono
    sql(`DELETE FROM takso_leciono WHERE komento='Appréciation ${kurso}'`)
    await login(page, USERS.lernanto)
    await page.goto(`${pagxo}?kazo=2&lec=1`)
    await page.locator('input[name="intereso"][value="4"]').check({ force: true })
    await page.locator('input[name="malfacileco"][value="2"]').check({ force: true })
    await page.locator('textarea[name="komento"]').fill(`Appréciation ${kurso}`)
    // Paŝoj : page en espéranto
    await page.getByRole('button', { name: /Envoyer mon appréciation|Sendi mian takson/ }).click()
    await expect(page).toHaveURL(/erarkodo=14/)
    expect(sql(`SELECT CONCAT(t.intereso, ' ', t.malfacileco, ' ', l.kurso) FROM takso_leciono t JOIN lecionoj l ON l.id=t.leciono_id
      WHERE t.persono_id=${LERNANTO_ID()} AND t.komento='Appréciation ${kurso}'`)).toBe(`4 2 ${kurso}`)
  })
}

test('Entrée dans un champ d’exercice ne recharge pas la page', async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.goto('fr/cge/lec01.php?section=6')
  const kampo = page.locator('#chefa_form').getByRole('textbox').first()
  await kampo.fill('respondo')
  let sxargxoj = 0
  page.on('load', () => sxargxoj++)
  await kampo.press('Enter')
  await page.waitForTimeout(1000)
  expect(sxargxoj).toBe(0)
  await expect(kampo).toHaveValue('respondo')
})

test('la suppression d’un compte ne passe plus par une adresse (GET)', async ({ page }) => {
  sql("INSERT INTO personoj (enirnomo, retadreso, rajtoj, aktivigita, ekdato) VALUES ('e2eforigi', 'e2eforigi@mailinator.com', 'P', 1, NOW())")
  const id = sql("SELECT id FROM personoj WHERE enirnomo='e2eforigi'")
  await login(page, USERS.admin)
  await page.goto(`delete.php?celpersono_id=${id}&validperson=e2eforigi`)
  await expect(page.locator('h1')).toHaveText('Confirmez la suppression')
  expect(sql(`SELECT COUNT(*) FROM personoj WHERE id=${id}`)).toBe('1')
})

test("sans les deux notes, l'appréciation de Paŝoj n'est pas enregistrée", async ({ page }) => {
  sql("DELETE FROM takso_leciono WHERE komento='Sans note PP'")
  await login(page, USERS.lernanto)
  await page.goto('eo/ppp/konfirmo.php?kazo=2&lec=1')
  await expect(page.locator('input[name="intereso"][type="radio"]')).toHaveCount(5)
  await page.evaluate(() => document.querySelectorAll('input[required]').forEach(e => e.removeAttribute('required')))
  await page.locator('textarea[name="komento"]').fill('Sans note PP')
  await page.getByRole('button', { name: 'Sendi mian takson' }).click()
  await expect(page).toHaveURL(/konfirmo\.php/)
  expect(sql("SELECT COUNT(*) FROM takso_leciono WHERE komento='Sans note PP'")).toBe('0')
})
