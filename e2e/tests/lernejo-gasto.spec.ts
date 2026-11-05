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
