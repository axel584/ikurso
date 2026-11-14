import { test, expect, type Page } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'

// Fin de la révision du vocabulaire : bouton « Continuer le cours » vers la section qui suit la dernière terminée,
// ou « Commencer le cours suivant » à la fin d'un cours (api/DauxrigoAPI.php), sur le site et dans l'application.
const LERNANTO = "(SELECT id FROM personoj WHERE enirnomo = 'lernanto1')"

// dernière section terminée par lernanto1 : celle d'ordre `ordo` dans la leçon `numero` du cours `kurso`
function lastaSekcio(kurso: string, numero: number, ordo: number) {
  sql(`INSERT INTO personoj_lecioneroj (ekdato, dato, persono_id, lecionero_id)
    SELECT NOW(), NOW(), ${LERNANTO}, le.id FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
    WHERE l.kurso = '${kurso}' AND l.numero = ${numero} AND le.ordo = ${ordo}`)
}

test.beforeEach(() => {
  resetTestData()
  sql(`DELETE FROM personoj_lecioneroj WHERE persono_id = ${LERNANTO}`)
  sql(`DELETE FROM personoj_vortoj WHERE persono_id = ${LERNANTO}`)
})

test('site : « Continuer le cours » vers la section suivante', async ({ page }) => {
  lastaSekcio('CG', 1, 3)
  // les mots de la section 1.3 sont ajoutés à l'ouverture de la page : on les repousse pour n'avoir rien à réviser
  sql(`INSERT INTO personoj_vortoj (persono_id, vorto_id, nombrilo, venontaFojo)
    SELECT ${LERNANTO}, v.id, 1, DATE_ADD(NOW(), INTERVAL 5 DAY) FROM vortoj v
    WHERE v.lecionero_id IN (SELECT lecionero_id FROM personoj_lecioneroj WHERE persono_id = ${LERNANTO})`)
  await login(page, USERS.lernanto)
  await page.goto('memoriVortojn.php')
  await expect(page.getByText('Aucun mot à réviser pour le moment.')).toBeVisible()
  const butono = page.locator('.dauxrigi a')
  await expect(butono).toHaveText('Continuer le cours')
  await expect(butono).toHaveAttribute('href', /fr\/cge\/lec01\.php\?section=4$/)
  await expect(page.locator('.dauxrigi')).toContainText('Leçon 1 : Un peu de grammaire...')
  await butono.click()
  await expect(page).toHaveURL(/lec01\.php\?section=4$/)
})

test('site : à la fin du cours élémentaire, « Commencer le cours suivant » vers Gerda', async ({ page }) => {
  const lasta = sql("SELECT MAX(le.ordo) FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id WHERE l.kurso = 'CG' AND l.numero = 10")
  lastaSekcio('CG', 10, Number(lasta))
  // un mot à réviser : le bouton est dans le message de fin de session
  sql(`INSERT INTO personoj_vortoj (persono_id, vorto_id, nombrilo, venontaFojo)
    SELECT ${LERNANTO}, v.id, 1, DATE_ADD(NOW(), INTERVAL 5 DAY) FROM vortoj v
    WHERE v.lecionero_id IN (SELECT lecionero_id FROM personoj_lecioneroj WHERE persono_id = ${LERNANTO})`)
  sql(`INSERT INTO personoj_vortoj (persono_id, vorto_id, nombrilo, venontaFojo)
    SELECT ${LERNANTO}, v.id, 1, NOW() FROM vortoj v
    WHERE v.id NOT IN (SELECT vorto_id FROM personoj_vortoj WHERE persono_id = ${LERNANTO}) ORDER BY v.id LIMIT 1`)
  await login(page, USERS.lernanto)
  await page.goto('memoriVortojn.php')
  const butono = page.locator('#lasta_mesagho .dauxrigi a')
  await expect(butono).toHaveText('Commencer le cours suivant')
  await expect(butono).toHaveAttribute('href', /fr\/gerda\/cxap01\.php\?section=1$/)
  await expect(page.locator('#lasta_mesagho .dauxrigi')).toContainText('Gerda Malaperis')
})

async function ensaluti(page: Page) {
  await page.goto('lernejo/')
  await page.getByText('J’ai déjà un compte').click()
  await page.getByLabel('Identifiant ou adresse e-mail').fill('lernanto1')
  await page.getByLabel('Mot de passe').fill('test')
  await page.getByText('Se connecter').click()
  await expect(page.getByText('DLEK : Cours en 10 leçons')).toBeVisible()
}

test.describe('application', () => {
  test.use({ viewport: { width: 412, height: 915 } })

  test('« Continuer le cours » ouvre la section suivante', async ({ page }) => {
    lastaSekcio('CG', 1, 3)
    await ensaluti(page)
    await page.goto('lernejo/revizio')
    await expect(page.getByText('Aucun mot à réviser pour le moment.', { exact: false })).toBeVisible()
    const dauxrigi = page.getByTestId('revizio-dauxrigi')
    await expect(dauxrigi).toContainText('Leçon 1 : Un peu de grammaire...')
    await dauxrigi.getByText('Continuer le cours').click()
    const id = sql(`SELECT le.id FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 4`)
    await expect(page).toHaveURL(new RegExp(`/lernejo/sekcio/${id}$`))
  })
})
