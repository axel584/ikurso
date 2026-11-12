import { test, expect, type Page } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'
import { clearMails, waitForMail } from '../helpers/mailhog'

// Application élève lernejo (#1089), version web servie par Apache sur /lernejo (build versionné dans lernejo/,
// `npm run build -w lernejo` dans react-app/). Elle ne passe que par l'API élève (#1088).
test.use({ viewport: { width: 412, height: 915 } })
test.describe.configure({ mode: 'serial' })

const LERNANTO = "(SELECT id FROM personoj WHERE enirnomo = 'lernanto1')"

test.beforeEach(() => {
  resetTestData()
  sql('DELETE FROM renovigaj_sxlosiloj')
  // un élève qui commence le cours : aucune section finie, aucune réponse
  sql(`DELETE FROM respondoj WHERE persono_id = ${LERNANTO}`)
  sql(`DELETE FROM personoj_lecioneroj WHERE persono_id = ${LERNANTO}`)
})

async function ensaluti(page: Page) {
  // sans session, l'application ouvre l'accueil : « J'ai déjà un compte » mène à la connexion
  await page.goto('lernejo/')
  await page.getByText('J’ai déjà un compte').click()
  await page.getByLabel('Identifiant ou adresse e-mail').fill('lernanto1')
  await page.getByLabel('Mot de passe').fill('test')
  await page.getByText('Se connecter').click()
  await expect(page.getByText('DLEK : Cours en 10 leçons')).toBeVisible()
}

// Réponse tapée dans un champ, enregistrée quand le champ perd le focus
async function respondi(page: Page, kampo: ReturnType<Page['getByLabel']>, teksto: string) {
  await kampo.fill(teksto)
  const registrita = page.waitForResponse((r) => r.url().includes('lernado/respondoj') && r.request().method() === 'POST')
  await kampo.blur()
  expect((await registrita).status()).toBe(200)
}

// QCM d'auto-évaluation : on essaie les propositions jusqu'à la bonne, question après question
async function solviQcm(page: Page) {
  const qcm = page.getByTestId('qcm')
  while (await qcm.isVisible()) {
    const demando = await qcm.getByText(/^Question \d+\/\d+/).textContent()
    const proponoj = qcm.getByRole('radio')
    for (let i = 0; i < (await proponoj.count()); i++) {
      await proponoj.nth(i).click()
      if (await qcm.getByText(/^Bravo/).isVisible()) break
      await expect(qcm.getByText(/^Mauvaise réponse/)).toBeVisible() // message habituel ou indice (sql/70)
    }
    // question suivante (ou récapitulatif) au bout d'une seconde
    await expect(page.getByText(demando!, { exact: true })).toHaveCount(0)
  }
  await expect(page.getByTestId('qcm-resumo')).toBeVisible()
}

test('un élève suit la leçon 1 complète sur /lernejo, jusqu’au retour de son correcteur', async ({ page }) => {
  test.setTimeout(180_000) // 13 sections, dont deux QCM d'une seconde par question
  await clearMails()
  await ensaluti(page)
  await page.getByText('DLEK : Cours en 10 leçons').click()
  await expect(page.getByText('Leçon 1 : Première leçon')).toBeVisible()
  await expect(page.getByText('0/13 sections')).toBeVisible()
  await page.getByText('1.1. Indications sur la prononciation').click()

  for (let ordo = 1; ordo <= 13; ordo++) {
    await expect(page.getByRole('heading', { name: new RegExp(`^1\\.${ordo}\\. `) })).toBeVisible()
    const kampoj = page.getByLabel(/^Réponse \d+$/)
    const nombro = await kampoj.count()
    for (let i = 0; i < nombro; i++) {
      const kampo = kampoj.nth(i)
      const demando = page.getByTestId('demando-1')
      if (ordo === 6 && i === 0) {
        // question 1 de l'exercice 1, corrigée automatiquement : réponse juste marquée en vert
        await respondi(page, kampo, 'La teo estas varma.')
        await expect(demando.getByLabel('Bonne réponse')).toBeVisible()
      } else if (ordo === 6 && i === 1) {
        // méthode « x » de l'exercice (x2u) : cx donne ĉ
        await kampo.pressSequentially('Cxu vi sxatas gxin?')
        await expect(kampo).toHaveValue('Ĉu vi ŝatas ĝin?')
        const registrita = page.waitForResponse((r) => r.url().includes('lernado/respondoj'))
        await kampo.blur()
        await registrita
      } else {
        await respondi(page, kampo, 'e2e')
      }
    }
    if (await page.getByTestId('qcm').isVisible()) {
      // le QCM est facultatif (#1109) : « Terminé ! » est déjà là
      await expect(page.getByText('Terminé !')).toBeVisible()
      await solviQcm(page)
    }
    if (ordo < 13) {
      await page.getByText('Terminé !').click()
    }
  }

  // dernière section : le récapitulatif ne signale que la section en cours, puis l'envoi au correcteur
  const resumo = page.getByTestId('resumo')
  await expect(resumo.getByText('Sections pas encore terminées :')).toBeVisible()
  await expect(resumo.getByText('• 1.13. Épilogue et envoi des exercices')).toBeVisible()
  await expect(resumo.getByText('Questions sans réponse :')).toHaveCount(0)
  expect(sql(`SELECT COUNT(*) FROM personoj_lecioneroj WHERE persono_id = ${LERNANTO}`)).toBe('12')
  expect(sql(`SELECT respondo FROM respondoj WHERE persono_id = ${LERNANTO} AND ekzercero_id = 2`)).toBe('Ĉu vi ŝatas ĝin?')

  // premier envoi du cours : choix du mode de correction (#627), correcteur bénévole présélectionné
  const elektoj = resumo.getByTestId('korektadaj-elektoj')
  await expect(elektoj.getByRole('radio')).toHaveCount(4)
  await expect(elektoj.getByRole('radio').first()).toContainText('Un correcteur bénévole')
  await expect(elektoj.getByRole('radio').first()).toBeChecked()
  await resumo.getByLabel('Message pour votre correcteur').fill('Saluton de lernejo !')
  await resumo.getByText('Valider et envoyer la leçon').click()
  await expect(resumo.getByText(/Un correcteur vient de vous être attribué/)).toBeVisible()
  await waitForMail('korektanto1@mailinator.com', 'Nouvel élève')
  expect((await waitForMail('korektanto1@mailinator.com', 'lec01 de lernanto1')).body).toContain('Saluton de lernejo !')

  // appréciation de la leçon, comme la page konfirmo.php du site : les deux notes sont obligatoires
  const takso = page.getByTestId('takso')
  await expect(takso.getByText('Évaluez-nous !')).toBeVisible()
  const sendiTakson = takso.getByRole('button', { name: 'Envoyer mon appréciation' })
  await expect(sendiTakson).toBeDisabled()
  await takso.getByRole('radio', { name: 'Assez intéressant' }).click()
  await expect(sendiTakson).toBeDisabled()
  await takso.getByRole('radio', { name: 'Assez facile' }).click()
  await takso.getByLabel('Laissez un commentaire (optionnel) sur la leçon').fill('Bonega leciono')
  await sendiTakson.click()
  await expect(resumo.getByText('Merci pour votre appréciation !')).toBeVisible()
  expect(
    sql(`SELECT CONCAT(t.intereso, '/', t.malfacileco, ' ', t.komento) FROM takso_leciono t JOIN lecionoj l ON l.id = t.leciono_id
      WHERE t.persono_id = ${LERNANTO} AND l.kurso = 'CG' AND l.numero = 1 ORDER BY t.id DESC LIMIT 1`),
  ).toBe('4/2 Bonega leciono')
  await page.getByText('Terminé !').click()
  // la dernière section terminée mène à la leçon suivante
  await expect(page.getByRole('heading', { name: /^2\.1\. / })).toBeVisible()
  await page.goto('lernejo/kurso/CG')
  await expect(page.getByText('13/13 sections')).toBeVisible()
  await expect(page.getByText('Envoyée', { exact: true })).toBeVisible()

  // le correcteur corrige sur le site
  const korektanto = await page.context().browser()!.newPage()
  await login(korektanto, USERS.korektanto)
  await korektanto.goto(`korektiLecionon.php?numleciono=1&kurso=CG&studanto=${sql(`SELECT ${LERNANTO}`)}`)
  await korektanto.locator('textarea[name=konkludo]').evaluate((el) => { (window as any).$(el).trumbowyg('html', 'Bonege (e2e lernejo)') })
  const kampo = korektanto.locator(`textarea[name=korekto${sql(`SELECT id FROM respondoj WHERE persono_id = ${LERNANTO} AND ekzercero_id = 2`)}]`)
  await kampo.evaluate((el) => { (window as any).$(el).trumbowyg('html', 'Atentu la akuzativon (e2e)') })
  await korektanto.locator('#pas_envoi_email').uncheck({ force: true })
  await korektanto.locator('#registriKorektadon_button').click()
  await expect(korektanto).toHaveURL(/vidiLecionon\.php/)
  await korektanto.close()

  // l'élève lit la correction dans l'application
  await page.reload()
  await expect(page.getByText('Corrigée', { exact: true })).toBeVisible()
  // le sommaire ouvre la première leçon pas encore envoyée : la 2
  await expect(page.getByText('2.1. ', { exact: false })).toBeVisible()
  await page.getByText('Leçon 1 : Première leçon').click()
  await page.getByText('Voir la correction').click()
  await expect(page.getByTestId('konkludo')).toContainText('Bonege (e2e lernejo)')
  await expect(page.getByTestId('korekto-2')).toContainText('Atentu la akuzativon (e2e)')
  await expect(page.getByTestId('demando-2')).toContainText('Ĉu vi ŝatas ĝin?')
  await expect(page.getByText('Votre message :')).toHaveCount(0) // au premier envoi, le message n'est pas gardé en base (#1088)
})

test('contenu : sons des leçons par le lecteur de l’application, liens et images du site', async ({ page }) => {
  await ensaluti(page)
  await page.goto('lernejo/sekcio/3') // vocabulaire de la leçon 1, adresse ouverte directement
  await expect(page.getByRole('heading', { name: '1.3. Vocabulaire' })).toBeVisible()
  const sono = page.waitForRequest((r) => /\/fr\/son\/vortoj\/.+\.mp3$/.test(r.url()))
  await page.getByRole('link', { name: 'Écouter' }).first().click()
  expect((await sono).url()).toMatch(/^http:\/\/localhost:8080\/fr\/son\/vortoj\//)
  await expect(page).toHaveURL(/lernejo\/sekcio\/3$/) // le lien du son n'a pas quitté la page

  // ##QCM_BILDOJ## : les images viennent du site
  await page.goto('lernejo/sekcio/218')
  const bildo = page.getByTestId('qcm').locator('img').first()
  await expect(bildo).toHaveAttribute('src', /^http:\/\/localhost:8080\//)
  await expect.poll(() => bildo.evaluate((img: HTMLImageElement) => img.naturalWidth)).toBeGreaterThan(0)
})

test('révision du vocabulaire dans l’application', async ({ page }) => {
  await ensaluti(page)
  await page.goto('lernejo/sekcio/3')
  await page.getByText('Terminé !').click()
  await expect(page.getByRole('heading', { name: /^1\.4\. / })).toBeVisible()
  const nombro = Number(sql(`SELECT COUNT(*) FROM personoj_vortoj WHERE persono_id = ${LERNANTO}`))
  expect(nombro).toBeGreaterThan(0)

  await page.goto('lernejo/revizio')
  // première réponse fausse, puis bonne réponse au mot suivant
  const fr1 = (await page.getByTestId('revizio-fr').textContent())!
  await page.getByLabel('Traduction en espéranto').fill('malgxusta')
  await page.getByText('Vérifier').click()
  await expect(page.getByText('Ce n’est pas ça.')).toBeVisible()
  const bona = sql(`SELECT SUBSTRING_INDEX(eo, '|', 1) FROM vortoj WHERE fr = BINARY '${fr1.replace(/'/g, "''")}' LIMIT 1`)
  await expect(page.getByText(bona, { exact: true })).toBeVisible()
  await page.getByText('Mot suivant').click()

  const fr2 = (await page.getByTestId('revizio-fr').textContent())!
  const eo2 = sql(`SELECT SUBSTRING_INDEX(eo, '|', 1) FROM vortoj WHERE fr = BINARY '${fr2.replace(/'/g, "''")}' LIMIT 1`)
  await page.getByLabel('Traduction en espéranto').fill(eo2)
  await page.getByText('Vérifier').click()
  await expect(page.getByText('Bonne réponse !')).toBeVisible()
})

test('session : gardée au rechargement, refusée après déconnexion', async ({ page }) => {
  await ensaluti(page)
  await page.goto('lernejo/kurso/GR')
  await expect(page.getByText('Leçon 1', { exact: false }).first()).toBeVisible()
  await page.reload()
  await expect(page.getByText('Leçon 1', { exact: false }).first()).toBeVisible()
  expect(sql(`SELECT COUNT(*) FROM renovigaj_sxlosiloj WHERE persono_id = ${LERNANTO} AND revokita IS NULL AND uzita IS NULL`)).toBe('1')

  // access token expiré (ici abîmé) : l'application demande de nouveaux jetons et refait la requête
  await page.evaluate(() => {
    const sxlosiloj = JSON.parse(localStorage.getItem('ikurso.sxlosiloj')!)
    localStorage.setItem('ikurso.sxlosiloj', JSON.stringify({ ...sxlosiloj, access_token: 'a.b.c' }))
  })
  const renovigo = page.waitForResponse((r) => r.url().includes('auth/refresh'))
  await page.reload()
  expect((await renovigo).status()).toBe(200)
  await expect(page.getByText('Leçon 1', { exact: false }).first()).toBeVisible()
  expect(sql(`SELECT COUNT(*) FROM renovigaj_sxlosiloj WHERE persono_id = ${LERNANTO} AND uzita IS NOT NULL`)).toBe('1')

  await page.goto('lernejo/profilo')
  await expect(page.getByText('Identifiant : lernanto1')).toBeVisible()
  await page.getByText('Se déconnecter').click()
  await expect(page.getByText('Commencer le cours')).toBeVisible()
  expect(sql(`SELECT COUNT(*) FROM renovigaj_sxlosiloj WHERE persono_id = ${LERNANTO} AND revokita IS NULL AND uzita IS NULL`)).toBe('0')
  // une adresse de l'élève ramène à l'accueil
  await page.goto('lernejo/kurso/CG')
  await expect(page.getByText('Commencer le cours')).toBeVisible()
  await page.getByText('J’ai déjà un compte').click()

  await page.getByLabel('Identifiant ou adresse e-mail').fill('lernanto1')
  await page.getByLabel('Mot de passe').fill('faux')
  await page.getByText('Se connecter').click()
  await expect(page.getByText(/incorrect|invalide|Identifiants/i)).toBeVisible()
})

test('suppression du compte depuis le profil de l’application, confirmée par le mot de passe (#1090)', async ({ page }) => {
  // compte jetable : un élève sans travail, mot de passe « test »
  sql("DELETE FROM personoj WHERE enirnomo = 'forigoto'")
  sql(`INSERT INTO personoj (enirnomo, pasvorto_md5, retadreso, rajtoj, ekdato, aktivigita)
    VALUES ('forigoto', MD5('test'), 'forigoto@mailinator.com', 'S', CURDATE(), 1)`)
  await page.goto('lernejo/')
  await page.getByText('J’ai déjà un compte').click()
  await page.getByLabel('Identifiant ou adresse e-mail').fill('forigoto')
  await page.getByLabel('Mot de passe').fill('test')
  await page.getByText('Se connecter').click()
  await page.getByRole('tab', { name: /Profil/ }).click()
  await page.getByText('Supprimer mon compte', { exact: true }).click()

  const forigi = page.getByTestId('forigi-konton')
  const butono = forigi.getByRole('button', { name: 'Supprimer définitivement mon compte' })
  await expect(butono).toBeDisabled()
  await forigi.getByLabel('Votre mot de passe, pour confirmer').fill('malgxusta')
  await butono.click()
  await expect(forigi.getByText('Mot de passe incorrect')).toBeVisible()
  expect(sql("SELECT COUNT(*) FROM personoj WHERE enirnomo = 'forigoto'")).toBe('1')

  await forigi.getByLabel('Votre mot de passe, pour confirmer').fill('test')
  await butono.click()
  // déconnecté : retour à l'accueil, et le compte n'existe plus
  await expect(page.getByText('J’ai déjà un compte')).toBeVisible()
  expect(sql("SELECT COUNT(*) FROM personoj WHERE enirnomo = 'forigoto'")).toBe('0')
})
