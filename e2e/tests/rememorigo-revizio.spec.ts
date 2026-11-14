import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { cron, resetTestData, sql } from '../helpers/db'
import { clearMails, linkFromMail, mailsTo, waitForMail } from '../helpers/mailhog'

// Rappel par mail quand des mots de vocabulaire attendent d'être révisés depuis 3 jours (#1120, cron/rappel.php) :
// nombre de mots, exemples en français, lien direct vers la révision, désinscription en un clic.
const RETADRESO = 'lernanto1@mailinator.com'
const TEMO = 'Des mots vous attendent'
const ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")

// mots du cours dans le carnet de révision de lernanto1, à réviser depuis `tagoj` jours
function vortoj(kiom: number, tagoj: number) {
  sql(`INSERT INTO personoj_vortoj (persono_id, vorto_id, nombrilo, venontaFojo, forigita)
    SELECT ${ID()}, v.id, 1, DATE_SUB(NOW(), INTERVAL ${tagoj} DAY), 0 FROM vortoj v
    WHERE v.id NOT IN (SELECT vorto_id FROM personoj_vortoj WHERE persono_id=${ID()}) ORDER BY v.id LIMIT ${kiom}`)
}

function revizio(rajto: 0 | 1) {
  sql(`INSERT INTO personoj_agordoj (persono_id, agordo, rajto, dato) VALUES (${ID()}, 'REVIZIO', ${rajto}, NOW())
    ON DUPLICATE KEY UPDATE rajto = ${rajto}`)
}

const revizioMails = async () => (await mailsTo(RETADRESO)).filter((m) => m.subject.includes(TEMO))

test.beforeEach(async () => {
  resetTestData()
  sql(`DELETE FROM personoj_vortoj WHERE persono_id=${ID()}`)
  await clearMails()
})

test('mots en attente depuis 3 jours : rappel avec exemples, lien vers la révision et désinscription', async ({ page }) => {
  revizio(1)
  vortoj(6, 3)
  vortoj(2, 0) // ajoutés aujourd'hui : comptés aussi
  cron('rappel.php')
  const mail = await waitForMail(RETADRESO, TEMO)
  expect(mail.body).toContain('8 mots attendent votre révision')
  expect((mail.body.match(/<li>/g) ?? []).length).toBe(5)
  expect(sql(`SELECT teksto FROM protokolo WHERE persono_id=${ID()} AND kategorio='ENVOIE RAPPEL' ORDER BY id DESC LIMIT 1`))
    .toContain('Rappel de révision du vocabulaire : 8 mots')

  // le lien mène à la révision, après la connexion si besoin
  const revizioLigilo = mail.body.match(/href="([^"]*memoriVortojn\.php)"/)?.[1]
  expect(revizioLigilo).toBeTruthy()
  await page.goto(revizioLigilo!)
  // index.php?retour=… ouvre directement la fenêtre de connexion
  await expect(page).toHaveURL(/index\.php\?retour=/)
  await page.locator('#eniri_identigilo').fill(USERS.lernanto.login)
  await page.locator('#eniri_pasvorto').fill(USERS.lernanto.password)
  await page.locator('#connection_button').click()
  await expect(page).toHaveURL(/memoriVortojn\.php$/)
  await expect(page.getByRole('heading', { name: 'Révision du vocabulaire' })).toBeVisible()

  // désinscription en un clic
  await page.goto(linkFromMail(mail, 'malaboni.php'))
  await expect(page.getByText('les rappels quand des mots de vocabulaire sont à réviser')).toBeVisible()
  expect(sql(`SELECT rajto FROM personoj_agordoj WHERE persono_id=${ID()} AND agordo='REVIZIO'`)).toBe('0')
})

test('pas de rappel trop tôt, trop tard ou après désinscription', async ({ page }) => {
  revizio(1)
  vortoj(4, 2) // depuis 2 jours : trop tôt
  cron('rappel.php')
  sql(`UPDATE personoj_vortoj SET venontaFojo = DATE_SUB(NOW(), INTERVAL 10 DAY) WHERE persono_id=${ID()}`) // élève parti
  cron('rappel.php')
  sql(`UPDATE personoj_vortoj SET venontaFojo = DATE_SUB(NOW(), INTERVAL 3 DAY) WHERE persono_id=${ID()}`)
  revizio(0) // refusé
  cron('rappel.php')
  await page.waitForTimeout(1000)
  expect(await revizioMails()).toHaveLength(0)
})

test('le réglage est proposé dans les données personnelles', async ({ page }) => {
  revizio(1)
  await login(page, USERS.lernanto)
  await page.goto('sxangxipersoninformojn.php')
  const kesto = page.locator('#revizio')
  await expect(kesto).toBeChecked()
})
