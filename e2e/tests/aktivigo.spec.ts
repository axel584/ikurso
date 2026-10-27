import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { cron, resetTestData, sql } from '../helpers/db'
import { clearMails, linkFromMail, mailsTo, waitForMail } from '../helpers/mailhog'

// Mails d'activation et de mot de passe envoyés depuis la fiche d'administration (#878)
// et relance des comptes pas activés par le cron de la nuit (#639).
const RETADRESO = 'e2eaktivigo@mailinator.com'

function kreiNeaktivitan(enirnomo: string, retadreso: string, ekdato: string): string {
  sql(`INSERT INTO personoj (enirnomo, retadreso, rajtoj, aktivigita, aktivigo, ekdato)
    VALUES ('${enirnomo}', '${retadreso}', 'P', 0, MD5('${enirnomo}'), ${ekdato})`)
  return sql(`SELECT id FROM personoj WHERE enirnomo='${enirnomo}'`)
}

const protokolo = (id: string, kategorio: string) =>
  sql(`SELECT teksto FROM protokolo WHERE persono_id=${id} AND kategorio='${kategorio}' ORDER BY id DESC LIMIT 1`)

test.beforeEach(async () => {
  resetTestData()
  await clearMails()
})

test.describe('Fiche d’administration (#878)', () => {
  test('le lien d’activation se renvoie et active le compte', async ({ page }) => {
    const id = kreiNeaktivitan('e2eaktivigo', RETADRESO, 'CURDATE()')
    await login(page, USERS.admin)
    await page.goto(`administri.php?celpersono_id=${id}`)
    await page.getByRole('button', { name: 'Renvoyer le lien d’activation' }).click()
    await expect(page.locator('.card-panel', { hasText: `Le lien d’activation a été envoyé à ${RETADRESO}` })).toBeVisible()

    const mail = await waitForMail(RETADRESO, 'Nouvelle activation de votre compte')
    const ligilo = linkFromMail(mail, 'aktivigi.php')
    expect(ligilo).toContain('fonto=administranto')
    await page.goto('eliri.php')
    await page.goto(ligilo)
    await expect(page).toHaveURL(/personinformoj\.php\?aktivigo=ok/)
    expect(sql(`SELECT aktivigita FROM personoj WHERE id=${id}`)).toBe('1')
    expect(protokolo(id, 'COMPTE ACTIF')).toContain('(lien renvoyé par un administrateur)')
  })

  test('un lien de mot de passe s’envoie et ouvre le formulaire de nouveau mot de passe', async ({ page }) => {
    const id = sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
    await login(page, USERS.admin)
    await page.goto(`administri.php?celpersono_id=${id}`)
    // compte déjà activé : pas de lien d'activation à renvoyer
    await expect(page.getByRole('button', { name: 'Renvoyer le lien d’activation' })).toHaveCount(0)
    await page.getByRole('button', { name: 'Envoyer un lien de mot de passe' }).click()
    await expect(page.locator('.card-panel', { hasText: 'Un lien pour changer de mot de passe a été envoyé à lernanto1@mailinator.com' })).toBeVisible()

    const mail = await waitForMail('lernanto1@mailinator.com', 'Votre mot de passe')
    await page.goto('eliri.php')
    await page.goto(linkFromMail(mail, 'index.php'))
    await expect(page.locator('#novigi_pasvorton_pasvorto')).toBeVisible()
  })

  test('pas de lien de mot de passe si plusieurs comptes ont la même adresse', async ({ page }) => {
    kreiNeaktivitan('e2edoublon', 'lernanto1@mailinator.com', 'CURDATE()')
    const id = sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
    await login(page, USERS.admin)
    await page.goto(`administri.php?celpersono_id=${id}`)
    await page.getByRole('button', { name: 'Envoyer un lien de mot de passe' }).click()
    await expect(page.locator('.card-panel.red', { hasText: 'Plusieurs comptes ont cette adresse e-mail' })).toBeVisible()
    expect(await mailsTo('lernanto1@mailinator.com')).toHaveLength(0)
  })

  test('un élève ne peut pas utiliser l’envoi', async ({ page }) => {
    const id = kreiNeaktivitan('e2eaktivigo', RETADRESO, 'CURDATE()')
    await login(page, USERS.lernanto)
    await page.goto('index.php')
    const respondo = await page.request.post('administriSendi.php', { form: { celpersono_id: id, ago: 'aktivigo' }, maxRedirects: 0 })
    expect(respondo.headers()['location']).toContain('erarkodo=4')
    expect(await mailsTo(RETADRESO)).toHaveLength(0)
  })
})

test.describe('Relance des comptes pas activés (#639)', () => {
  test('le cron relance une fois les inscrits d’avant-hier, et le lien active le compte', async ({ page }) => {
    const id = kreiNeaktivitan('e2eaktivigo', RETADRESO, 'DATE_SUB(CURDATE(), INTERVAL 2 DAY)')
    // inscrit hier : trop tôt ; invité : pas d'adresse ; déjà activé : rien à relancer
    kreiNeaktivitan('e2ehieraux', 'e2ehieraux@mailinator.com', 'DATE_SUB(CURDATE(), INTERVAL 1 DAY)')
    sql(`INSERT INTO personoj (enirnomo, retadreso, rajtoj, aktivigita, aktivigo, ekdato)
      VALUES ('e2eaktiva', 'e2eaktiva@mailinator.com', 'P', 1, 'x', DATE_SUB(CURDATE(), INTERVAL 2 DAY))`)

    cron('rappel.php')
    const mail = await waitForMail(RETADRESO, 'Activez votre compte')
    expect(mail.body).toContain('e2eaktivigo')
    expect(await mailsTo('e2ehieraux@mailinator.com')).toHaveLength(0)
    expect(await mailsTo('e2eaktiva@mailinator.com')).toHaveLength(0)

    // une seule relance
    cron('rappel.php')
    await page.waitForTimeout(1000)
    expect((await mailsTo(RETADRESO)).filter((m) => m.subject.includes('Activez votre compte'))).toHaveLength(1)

    const ligilo = linkFromMail(mail, 'aktivigi.php')
    expect(ligilo).toContain('fonto=rememorigo')
    await page.goto(ligilo)
    await expect(page).toHaveURL(/personinformoj\.php\?aktivigo=ok/)
    expect(protokolo(id, 'COMPTE ACTIF')).toContain('(lien du rappel)')
  })
})
