import { test, expect, type Page } from '@playwright/test'
import { resetTestData, sql } from '../helpers/db'
import { clearMails, linkFromMail, waitForMail } from '../helpers/mailhog'

// Arrivée dans l'application lernejo sans compte : l'accueil, le choix du cours, le cours en invité,
// puis la création du compte (l'invité devient le compte) ou la connexion (son travail rejoint le compte).
test.use({ viewport: { width: 412, height: 915 } })
test.describe.configure({ mode: 'serial' })

const LERNANTO = "(SELECT id FROM personoj WHERE enirnomo = 'lernanto1')"

test.beforeEach(() => {
  resetTestData()
  sql('DELETE FROM renovigaj_sxlosiloj')
  sql(`DELETE FROM respondoj WHERE persono_id = ${LERNANTO}`)
  sql(`DELETE FROM personoj_lecioneroj WHERE persono_id = ${LERNANTO}`)
})

async function komenciGaste(page: Page) {
  await page.goto('lernejo/')
  await expect(page.getByRole('heading', { name: 'iKurso' })).toBeVisible()
  await page.getByText('Commencer le cours').click()
  await expect(page.getByText('Avez-vous déjà appris l’espéranto ?')).toBeVisible()
  await page.getByLabel('Commencer Cours en 10 leçons').click()
  // le cours s'ouvre directement à sa première section
  await expect(page.getByRole('heading', { name: /^1\.1\. / })).toBeVisible()
  return sql("SELECT MAX(id) FROM personoj WHERE rajtoj = 'G'")
}

async function fini(page: Page, ordo: number) {
  await expect(page.getByRole('heading', { name: new RegExp(`^1\\.${ordo}\\. `) })).toBeVisible()
  await page.getByText('Terminé !').click()
}

async function respondi(page: Page, teksto: string) {
  const kampo = page.getByLabel('Réponse 1')
  await kampo.fill(teksto)
  const registrita = page.waitForResponse((r) => r.url().includes('lernado/respondoj') && r.request().method() === 'POST')
  await kampo.blur()
  expect((await registrita).status()).toBe(200)
}

test('un visiteur commence sans compte, puis crée son compte pour être corrigé', async ({ page }) => {
  await clearMails()
  const gasto = await komenciGaste(page)
  await expect(page.getByTestId('gasto-strio')).toBeVisible()
  expect(sql(`SELECT CONCAT(rajtoj, ' ', aktivigita) FROM personoj WHERE id = ${gasto}`)).toBe('G 0')

  // le rappel d'inscription arrive une seule fois, à la 4e section terminée
  for (const ordo of [1, 2, 3]) {
    await fini(page, ordo)
    await expect(page.getByTestId('rememorigo')).toHaveCount(0)
  }
  await fini(page, 4)
  await expect(page.getByTestId('rememorigo')).toBeVisible()
  await page.getByText('Plus tard').click()
  await fini(page, 5)
  await expect(page.getByRole('heading', { name: /^1\.6\. / })).toBeVisible()
  await expect(page.getByTestId('rememorigo')).toHaveCount(0)
  await respondi(page, 'La teo estas varma.')
  await expect(page.getByTestId('demando-1').getByLabel('Bonne réponse')).toBeVisible()

  // Paŝoj est réservé aux élèves inscrits
  await page.goto('lernejo/')
  await expect(page.getByText('DLEK : Cours en 10 leçons')).toBeVisible()
  await expect(page.getByText(/Gerda/).first()).toBeVisible()
  await expect(page.getByText(/Paŝoj/)).toHaveCount(0)

  // l'envoi au correcteur demande un compte
  await page.goto('lernejo/sekcio/8')
  const konto = page.getByTestId('konto-bezonata')
  await expect(konto).toBeVisible()
  await expect(page.getByText('Envoyer la leçon à mon correcteur')).toHaveCount(0)
  await konto.getByText('Créer mon compte pour être corrigé').click()

  const enirnomo = `e2eapp${Date.now()}`
  const retadreso = `${enirnomo}@mailinator.com`
  await page.getByLabel('Identifiant').fill(enirnomo)
  await page.getByLabel('Adresse e-mail').fill(retadreso)
  await page.getByLabel('Mot de passe').fill('motdepasse')
  await page.getByRole('button', { name: 'Créer mon compte' }).click()
  await expect(page.getByText('Vérifiez votre boîte mail')).toBeVisible()
  await expect(page.getByText(retadreso)).toBeVisible()

  // l'invité est devenu le compte, avec son travail
  expect(sql(`SELECT CONCAT(enirnomo, ' ', rajtoj, ' ', aktivigita) FROM personoj WHERE id = ${gasto}`)).toBe(`${enirnomo} P 0`)
  expect(sql(`SELECT COUNT(*) FROM personoj_lecioneroj WHERE persono_id = ${gasto}`)).toBe('5')
  expect(sql(`SELECT respondo FROM respondoj WHERE persono_id = ${gasto} AND ekzercero_id = 1`)).toBe('La teo estas varma.')
  const mail = await waitForMail(retadreso, 'Activation de votre compte')

  // pas encore activé : il continue le cours, mais l'envoi attend l'activation
  await page.getByRole('button', { name: 'Continuer le cours' }).click()
  await expect(page.getByTestId('resumo')).toBeVisible()
  await expect(page.getByTestId('gasto-strio')).toHaveCount(0)
  await page.getByText('Envoyer la leçon à mon correcteur').click()
  await expect(page.getByText(/pas validé/)).toBeVisible()
  await expect(page.getByText('Recevoir à nouveau le lien d’activation')).toBeVisible()

  // activé par le lien du mail : l'envoi passe
  await page.goto(linkFromMail(mail, 'aktivigi.php'))
  expect(sql(`SELECT aktivigita FROM personoj WHERE id = ${gasto}`)).toBe('1')
  await page.goto('lernejo/sekcio/8')
  await page.getByText('Envoyer la leçon à mon correcteur').click()
  await expect(page.getByText(/Leçon envoyée/)).toBeVisible()
})

test('l’invité se connecte à son compte : son travail le rejoint', async ({ page }) => {
  const gasto = await komenciGaste(page)
  await page.goto('lernejo/sekcio/6')
  await respondi(page, 'La teo estas varma.')

  await page.goto('lernejo/profilo')
  await expect(page.getByText('Vous suivez le cours en invité')).toBeVisible()
  await page.getByText('J’ai déjà un compte : me connecter').click()
  await page.getByLabel('Identifiant ou adresse e-mail').fill('lernanto1')
  await page.getByLabel('Mot de passe').fill('test')
  await page.getByText('Se connecter').click()
  // ses cours de compte, Paŝoj compris
  await expect(page.getByText('Paŝoj al plena posedo')).toBeVisible()

  expect(sql(`SELECT COUNT(*) FROM personoj WHERE id = ${gasto}`)).toBe('0')
  expect(sql(`SELECT respondo FROM respondoj WHERE persono_id = ${LERNANTO} AND ekzercero_id = 1`)).toBe('La teo estas varma.')
  expect(sql(`SELECT COUNT(*) FROM renovigaj_sxlosiloj WHERE persono_id = ${gasto} AND revokita IS NULL`)).toBe('0')
})

test('l’invité qui quitte le mode invité revient à l’accueil', async ({ page }) => {
  await komenciGaste(page)
  await page.goto('lernejo/profilo')
  await page.getByText('Quitter le mode invité').click()
  await page.getByText('Quitter et tout effacer').click()
  await expect(page.getByText('Commencer le cours')).toBeVisible()
})

test('à la fin d’une leçon, l’invité passe à la leçon suivante', async ({ page }) => {
  const gasto = await komenciGaste(page)
  // dernière section de la leçon 1 (1.13, l'envoi au correcteur) : « Terminé ! » mène à la leçon 2
  await page.goto('lernejo/sekcio/8')
  await fini(page, 13)
  await expect(page.getByRole('heading', { name: /^2\.1\. / })).toBeVisible()
  await page.goto('lernejo/sekcio/8')
  await expect(page.getByRole('heading', { name: /^1\.13\. / })).toBeVisible()
  await expect(page.getByRole('button', { name: 'Leçon 2 →' })).toBeVisible()

  // la leçon 1 terminée (jamais envoyée par l'invité) : le sommaire ouvre la leçon 2
  sql(`INSERT IGNORE INTO personoj_lecioneroj (dato, persono_id, lecionero_id, ekdato)
       SELECT NOW(), ${gasto}, le.id, NOW() FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
       WHERE l.kurso = 'CG' AND l.numero = 1`)
  await page.goto('lernejo/kurso/CG')
  await expect(page.getByText(/^2\.1\. /)).toBeVisible()
  await expect(page.getByText(/^1\.1\. /)).toHaveCount(0)
})

test('le rappel d’inscription s’affiche par-dessus une longue section, et une seule fois', async ({ page }) => {
  await page.setViewportSize({ width: 1280, height: 800 })
  const gasto = await komenciGaste(page)
  // 1.1 à 1.3 déjà terminées : la 2.2 est la 4e section terminée
  sql(`INSERT INTO personoj_lecioneroj (dato, persono_id, lecionero_id, ekdato)
       SELECT NOW(), ${gasto}, le.id, NOW() FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
       WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo <= 3`)
  await page.goto('lernejo/sekcio/9')
  await expect(page.getByRole('heading', { name: /^2\.2\. / })).toBeVisible()
  await page.getByText('Terminé !').click()
  await expect(page.getByTestId('rememorigo')).toBeInViewport()

  // quitté sans répondre : il ne revient pas à la section suivante
  await page.goto('lernejo/sekcio/11')
  await expect(page.getByRole('heading', { name: /^2\.4\. / })).toBeVisible()
  await page.getByText('Terminé !').click()
  await expect(page.getByRole('heading', { name: /^2\.5\. / })).toBeVisible()
  await expect(page.getByTestId('rememorigo')).toHaveCount(0)
})

test('section à QCM : « Terminé ! » est là sans faire le QCM, qui reste facultatif (#1109)', async ({ page }) => {
  await komenciGaste(page)
  await page.goto('lernejo/sekcio/10')
  await expect(page.getByRole('heading', { name: /^2\.3\. / })).toBeVisible()
  await expect(page.getByTestId('qcm')).toBeVisible()
  await page.getByText('Terminé !').click()
  await expect(page.getByRole('heading', { name: /^2\.4\. / })).toBeVisible()
})

test('schéma des corrélatifs : un début + une fin = le corrélatif et sa traduction (#1110)', async ({ page }) => {
  await komenciGaste(page)
  await page.goto('lernejo/sekcio/44')
  await expect(page.getByRole('heading', { name: /^5\.2\. / })).toBeVisible()
  const skemo = page.getByTestId('korelativoj')
  await expect(skemo).toBeVisible()
  await expect(page.getByText('##KORELATIVOJ')).toHaveCount(0)
  expect(await page.evaluate(() => document.documentElement.scrollWidth)).toBeLessThanOrEqual(412)
  await expect(skemo.getByRole('button')).toHaveCount(14)
  await expect(skemo.getByText('5 débuts × 9 fins = 45 corrélatifs')).toBeVisible()

  const rezulto = page.getByTestId('korelativoj-rezulto')
  await expect(rezulto).toContainText('ki- + -al = kial')
  await expect(rezulto).toContainText('pourquoi')
  await skemo.getByRole('button', { name: 'ti- démonstratif' }).click()
  await skemo.getByRole('button', { name: '-am temps' }).click()
  await expect(rezulto).toContainText('ti- + -am = tiam')
  await expect(rezulto).toContainText('alors')
  if (process.env.KAPTI) await skemo.screenshot({ path: process.env.KAPTI })
})

test('les passages réservés à l’impression du site ne sont pas affichés dans l’application', async ({ page }) => {
  await komenciGaste(page)
  await page.goto('lernejo/sekcio/18')
  await expect(page.getByRole('heading', { name: /^2\.13\. / })).toBeVisible()
  await expect(page.getByText('Voici un petit exercice de révision')).toBeVisible()
  await expect(page.getByText(/à faire en ligne sur la page/)).toBeHidden()
  await expect(page.getByText(/ikurso\.fr\/fr\/cge/)).toBeHidden()
})

test('une liste de mots dans un cadre bleu n’a pas de second cadre gris, comme sur le site', async ({ page }) => {
  await komenciGaste(page)
  await page.goto('lernejo/sekcio/219')
  await expect(page.getByRole('heading', { name: /^1\.7\. / })).toBeVisible()
  const listo = page.locator('fieldset.vortoj .vortlisto').first()
  await expect(listo).toBeVisible()
  await expect(listo).toHaveCSS('border-top-style', 'none')
})
