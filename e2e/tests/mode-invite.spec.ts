import { test, expect, type Page } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { cron, resetTestData, sql } from '../helpers/db'
import { clearMails, linkFromMail, waitForMail } from '../helpers/mailhog'

// Mode invité (#1092) : un visiteur fait les exercices sans compte. Son travail est enregistré
// sous une ligne personoj de droit G, qui devient son compte s'il s'inscrit, ou qui est fusionnée
// dans son compte s'il se connecte. Chaque test part d'un navigateur neuf, donc d'un nouveau visiteur.
test.beforeEach(async () => {
  resetTestData()
  await clearMails()
})

const LECON_1 = 'fr/cge/lec01.php'
const VALIDE = /(^|\s)valid(\s|$)/
const LERNANTO_ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")

const nbGastoj = () => sql("SELECT COUNT(*) FROM personoj WHERE rajtoj='G'")
const gastoId = () => sql("SELECT id FROM personoj WHERE rajtoj='G' ORDER BY id DESC LIMIT 1")

// Répond à une question en tant qu'invité et attend que la réponse soit en base (enregistrée en quittant le champ).
async function repondre(page: Page, ekzercero: number, respondo: string): Promise<void> {
  const champ = page.locator(`#res_${ekzercero}`)
  await champ.fill(respondo)
  await champ.blur()
  await expect
    .poll(() => sql(`SELECT COUNT(*) FROM respondoj r JOIN personoj p ON p.id=r.persono_id
      WHERE p.rajtoj='G' AND r.ekzercero_id=${ekzercero} AND r.respondo='${respondo}'`))
    .toBe('1')
}

test.describe('Mode invité', () => {
  test("un visiteur qui ne fait que lire ne crée pas d'invité", async ({ page }) => {
    await page.goto(`${LECON_1}?section=1`)
    await page.goto(`${LECON_1}?section=6`)
    await expect(page.locator('#res_1')).toBeEditable()
    expect(nbGastoj()).toBe('0')
  })

  test('un visiteur répond à un exercice : réponse corrigée, enregistrée et retrouvée', async ({ page }) => {
    await page.goto(`${LECON_1}?section=6`)
    await expect(page.locator('#gasto_avizo')).toHaveCount(0)

    await repondre(page, 1, 'La teo estas varma.')
    await expect(page.locator('#res_1')).toHaveClass(VALIDE)
    expect(nbGastoj()).toBe('1')
    expect(sql(`SELECT gxusta FROM respondoj WHERE persono_id=${gastoId()} AND ekzercero_id=1`)).toBe('1')

    // une deuxième réponse reste sur le même invité
    await repondre(page, 2, 'Via biskvito estas seka.')
    expect(nbGastoj()).toBe('1')

    // la réponse est réaffichée, avec le bandeau ; l'en-tête propose toujours la connexion
    await page.reload()
    await expect(page.locator('#res_1')).toHaveValue('La teo estas varma.')
    await expect(page.locator('#gasto_avizo')).toBeVisible()
    await expect(page.locator('a[href="#konektigxi"]:visible').first()).toBeVisible()
  })

  test('« Terminé ! » marque la section, passe à la suivante et ajoute les mots à réviser', async ({ page }) => {
    await page.goto(`${LECON_1}?section=2`)
    await page.locator('#finiLecioneron_button').click()
    await expect(page).toHaveURL(/lec01\.php\?section=3/)

    const id = gastoId()
    expect(sql(`SELECT lecionero_id FROM personoj_lecioneroj WHERE persono_id=${id}`)).toBe('2')
    expect(Number(sql(`SELECT COUNT(*) FROM personoj_vortoj WHERE persono_id=${id}`))).toBeGreaterThan(0)

    // la section faite n'a plus de bouton actif, et l'invité peut réviser son vocabulaire
    await page.goto(`${LECON_1}?section=2`)
    await expect(page.locator('#finiLecioneron_button')).toHaveClass(/disabled/)
    await page.goto('memoriVortojn.php')
    await expect(page.locator('.memorilo_input').first()).toBeVisible()
  })

  test("la fin de la leçon propose de créer un compte au lieu de demander un correcteur", async ({ page }) => {
    await page.goto(`${LECON_1}?section=13`)
    await expect(page.locator('#aligxi_por_korektado_button')).toBeVisible()
    await expect(page.locator('#petiKorektanton_button')).toHaveCount(0)
    await expect(page.locator('#sendiLecionon_button')).toHaveCount(0)
  })

  test("à l'inscription, l'invité devient le compte et garde ses réponses", async ({ page }) => {
    await page.goto(`${LECON_1}?section=6`)
    await repondre(page, 1, 'La teo estas varma.')
    const id = gastoId()

    const user = { login: `e2egasto${Date.now()}`, email: `e2egasto${Date.now()}@mailinator.com`, password: 'motdepasse' }
    // le bandeau apparaît au chargement suivant, une fois l'invité créé
    await page.reload()
    await page.locator('#gasto_avizo a[data-target="aligxi"]').click()
    await page.locator('#aligxi_retadreso').fill(user.email)
    await page.locator('#aligxi_identigilo').fill(user.login)
    await page.locator('#aligxi_pasvorto').fill(user.password)
    await page.locator('#inscription_button').click()
    await expect(page.locator('#parto2')).toBeVisible()

    // même ligne personoj : rien n'est copié
    expect(sql(`SELECT CONCAT(enirnomo,' ',rajtoj,' ',aktivigita) FROM personoj WHERE id=${id}`)).toBe(`${user.login} P 0`)
    expect(nbGastoj()).toBe('0')
    expect(sql(`SELECT COUNT(*) FROM personoj_agordoj WHERE persono_id=${id}`)).not.toBe('0')

    const mail = await waitForMail(user.email, 'Activation de votre compte')
    await page.goto(linkFromMail(mail, 'aktivigi.php'))
    await expect(page).toHaveURL(/personinformoj\.php\?aktivigo=ok/)

    await page.goto(`${LECON_1}?section=6`)
    await expect(page.locator('#res_1')).toHaveValue('La teo estas varma.')
    await expect(page.locator('#gasto_avizo')).toHaveCount(0)
  })

  test('à la connexion, le travail de l’invité rejoint le compte existant', async ({ page }) => {
    const lernanto = LERNANTO_ID()
    // les réponses du compte datent d'hier ; celle de la question 2 a déjà été corrigée
    sql(`UPDATE respondoj SET dato = dato - INTERVAL 1 DAY WHERE persono_id=${lernanto}`)
    sql(`UPDATE respondoj SET korekto='Bien (e2e)', dato = dato WHERE persono_id=${lernanto} AND ekzercero_id=2`)

    await page.goto(`${LECON_1}?section=6`)
    await repondre(page, 1, 'La teo estas tre varma.')
    await repondre(page, 2, 'Via biskvito estas malseka.')
    await repondre(page, 4, 'Respondo de gasto (e2e)')
    const gasto = gastoId()

    await login(page, USERS.lernanto)

    expect(nbGastoj()).toBe('0')
    expect(sql(`SELECT COUNT(*) FROM respondoj WHERE persono_id=${gasto}`)).toBe('0')
    // réponse plus récente de l'invité : elle remplace celle du compte
    expect(sql(`SELECT respondo FROM respondoj WHERE persono_id=${lernanto} AND ekzercero_id=1`)).toBe('La teo estas tre varma.')
    // réponse du compte déjà corrigée : elle est gardée
    expect(sql(`SELECT respondo FROM respondoj WHERE persono_id=${lernanto} AND ekzercero_id=2`)).toBe('Via biskvito estas seka.')
    // question à laquelle le compte n'avait pas répondu : la réponse de l'invité est ajoutée
    expect(sql(`SELECT respondo FROM respondoj WHERE persono_id=${lernanto} AND ekzercero_id=4`)).toBe('Respondo de gasto (e2e)')
    expect(sql(`SELECT COUNT(*) FROM respondoj WHERE persono_id=${lernanto} AND ekzercero_id IN (1,2,4)`)).toBe('3')
  })

  // Les clients de l'API (futures pages React) partagent la session PHP des pages de cours.
  const API_ORIGIN = { Origin: 'http://localhost:8080' }

  test('à la connexion par l’API, le travail de l’invité rejoint le compte', async ({ page }) => {
    const lernanto = LERNANTO_ID()
    await page.goto(`${LECON_1}?section=6`)
    await repondre(page, 4, 'Respondo de gasto (e2e API)')
    const gasto = gastoId()

    const reponse = await page.request.post('api.php?path=auth/login', {
      headers: API_ORIGIN,
      data: { identigilo: USERS.lernanto.login, pasvorto: USERS.lernanto.password },
    })
    expect(reponse.status()).toBe(200)

    expect(nbGastoj()).toBe('0')
    expect(sql(`SELECT COUNT(*) FROM respondoj WHERE persono_id=${gasto}`)).toBe('0')
    expect(sql(`SELECT respondo FROM respondoj WHERE persono_id=${lernanto} AND ekzercero_id=4`)).toBe('Respondo de gasto (e2e API)')
    // la session est celle du compte : la page de cours affiche sa réponse, sans le bandeau
    await page.goto(`${LECON_1}?section=6`)
    await expect(page.locator('#res_4')).toHaveValue('Respondo de gasto (e2e API)')
    await expect(page.locator('#gasto_avizo')).toHaveCount(0)
  })

  test("à l'inscription par l'API, l'invité devient le compte", async ({ page }) => {
    await page.goto(`${LECON_1}?section=6`)
    await repondre(page, 1, 'La teo estas varma.')
    const id = gastoId()

    const login = `e2eapigasto${Date.now()}`
    const reponse = await page.request.post('api.php?path=auth/register', {
      headers: API_ORIGIN,
      data: { enirnomo: login, pasvorto: 'motdepasse', retadreso: `${login}@mailinator.com` },
    })
    expect(reponse.status()).toBe(201)
    expect(String((await reponse.json()).user_id)).toBe(id)

    expect(sql(`SELECT CONCAT(enirnomo,' ',rajtoj,' ',aktivigita) FROM personoj WHERE id=${id}`)).toBe(`${login} P 0`)
    expect(nbGastoj()).toBe('0')
    expect(sql(`SELECT COUNT(*) FROM respondoj WHERE persono_id=${id}`)).toBe('1')
  })

  test('les événements Matomo : invité créé, section terminée, inscription depuis le mode invité', async ({ page }) => {
    // pas de Matomo en développement : un faux _paq relève les événements, y compris d'une page à l'autre
    const evenements: string[] = []
    await page.exposeFunction('spuroE2e', (e: string) => { evenements.push(e) })
    await page.addInitScript(() => {
      (window as any)._paq = { push: (a: unknown[]) => (window as any).spuroE2e(a.join(' / ')) }
    })

    await page.goto(`${LECON_1}?section=6`)
    await repondre(page, 1, 'La teo estas varma.')
    await repondre(page, 2, 'Via biskvito estas seka.')
    await expect.poll(() => evenements).toContain('trackEvent / Mode invité / Invité créé / /fr/cge/lec01.php')
    // un seul invité, donc un seul événement
    expect(evenements.filter((e) => e.includes('Invité créé'))).toHaveLength(1)

    await page.goto(`${LECON_1}?section=2`)
    await page.locator('#finiLecioneron_button').click()
    await expect(page).toHaveURL(/section=3/)
    expect(evenements).toContain('trackEvent / Cours / Section terminée / CG leçon 1')

    const login = `e2espuro${Date.now()}`
    await page.locator('#gasto_avizo a[data-target="aligxi"]').click()
    await page.locator('#aligxi_retadreso').fill(`${login}@mailinator.com`)
    await page.locator('#aligxi_identigilo').fill(login)
    await page.locator('#aligxi_pasvorto').fill('motdepasse')
    await page.locator('#inscription_button').click()
    await expect(page.locator('#parto2')).toBeVisible()
    expect(evenements).toContain('trackEvent / Compte / Inscription / depuis le mode invité')
  })

  test("un invité ne peut pas se connecter avec l'identifiant technique de son compte", async ({ page }) => {
    await page.goto(`${LECON_1}?section=6`)
    await repondre(page, 1, 'La teo estas varma.')
    const enirnomo = sql(`SELECT enirnomo FROM personoj WHERE id=${gastoId()}`)

    const reponse = await page.request.post('ajax/eniri.php', { form: { identigilo: enirnomo, pasvorto: '' } })
    expect((await reponse.json()).type).toBe('identigilo')
  })

  test('le cron supprime les invités inactifs depuis 6 mois, pas les autres', async ({ page }) => {
    await page.goto(`${LECON_1}?section=6`)
    await repondre(page, 1, 'La teo estas varma.')
    const ancien = gastoId()
    sql(`UPDATE personoj SET lasteniro = NOW() - INTERVAL 7 MONTH WHERE id=${ancien}`)

    // un deuxième visiteur (sans le cookie de session du premier), actif
    await page.context().clearCookies()
    await page.goto(`${LECON_1}?section=6`)
    await repondre(page, 2, 'Via biskvito estas seka.')
    const recent = gastoId()
    expect(recent).not.toBe(ancien)

    expect(cron('forigi_gastojn.php')).toContain('1 invité(s) supprimé(s)')
    expect(sql(`SELECT COUNT(*) FROM personoj WHERE id=${ancien}`)).toBe('0')
    expect(sql(`SELECT COUNT(*) FROM respondoj WHERE persono_id=${ancien}`)).toBe('0')
    expect(sql(`SELECT COUNT(*) FROM personoj WHERE id=${recent}`)).toBe('1')
  })
})
