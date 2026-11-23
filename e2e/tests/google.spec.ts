import { test, expect, type Page } from '@playwright/test'
import { resetTestData, sql } from '../helpers/db'
import { googleJxetono, type GoogleUzanto } from '../helpers/google'

// Inscription et connexion avec un compte Google (#119), avec des jetons simulés signés par une clé de test
// (e2e/helpers/google.ts) : le serveur vérifie la signature, le destinataire, l'expiration et l'adresse vérifiée.
// Sur le site, le bouton de Google appelle ikursoGoogle(respondo) ; on l'appelle directement avec notre jeton.
const API = 'api.php?path='
const MARIE: GoogleUzanto = { sub: '100000000000000000001', email: 'marie.e2e@gmail.com', given_name: 'Marie', family_name: 'Ŝtelo' }

const persono = (kondicxo: string) =>
  sql(`SELECT CONCAT_WS('|', id, enirnomo, enirnomo_elektota, rajtoj, aktivigita, IFNULL(google_id, ''), IFNULL(personnomo, ''))
    FROM personoj WHERE ${kondicxo}`)

async function googleSurRetejo(page: Page, uzanto: GoogleUzanto) {
  await page.evaluate((credential) => (window as any).ikursoGoogle({ credential }), googleJxetono(uzanto))
}

test.beforeEach(async ({ page }) => {
  resetTestData()
  sql('DELETE FROM renovigaj_sxlosiloj')
  // le vrai script de Google n'est pas nécessaire (et pas de requête sortante pendant les tests)
  await page.route('https://accounts.google.com/**', (route) => route.abort())
})

test.describe('Site', () => {
  test('le bouton « Continuer avec Google » est proposé aux visiteurs, pas aux élèves connectés', async ({ page }) => {
    const googlePetoj: string[] = []
    page.on('request', (r) => { if (r.url().startsWith('https://accounts.google.com/')) googlePetoj.push(r.url()) })
    await page.goto('index.php')
    await expect(page.locator('#konektigxi .g_id_signin')).toHaveCount(1)
    await expect(page.locator('#aligxi .g_id_signin')).toHaveCount(1)
    await expect(page.locator('#g_id_onload')).toHaveAttribute('data-client_id', 'ikurso-e2e.apps.googleusercontent.com')
    await expect(page.locator('#g_id_onload')).toHaveAttribute('data-auto_prompt', 'false')
    // le script de Google n'est chargé qu'à l'ouverture de la fenêtre de connexion
    await page.waitForLoadState('networkidle')
    expect(googlePetoj).toEqual([])
    await page.locator('a[href="#konektigxi"]:visible').first().click()
    await expect.poll(() => googlePetoj).toContain('https://accounts.google.com/gsi/client')

    googlePetoj.length = 0
    await page.goto('aligxi.php')
    await expect(page.locator('main .g_id_signin')).toHaveCount(1)
    await expect.poll(() => googlePetoj).toContain('https://accounts.google.com/gsi/client')

    // élève connecté : ni bouton ni script
    await googleSurRetejo(page, { sub: '100000000000000000009', email: 'lernanto1@mailinator.com' })
    await expect(page).not.toHaveURL(/aligxi\.php/)
    googlePetoj.length = 0
    await page.goto('index.php')
    await expect(page.locator('#g_id_onload')).toHaveCount(0)
    await expect(page.locator('.g_id_signin')).toHaveCount(0)
    expect(googlePetoj).toEqual([])
  })

  test('inscription : compte activé sans mail, puis choix de l’identifiant proposé à partir du prénom', async ({ page }) => {
    await page.goto('index.php')
    await googleSurRetejo(page, MARIE)
    await expect(page).toHaveURL(/elektiIdentigilon\.php/)
    expect(persono(`google_id='${MARIE.sub}'`)).toMatch(/^\d+\|google_[0-9a-f]{16}\|1\|P\|1\|100000000000000000001\|Marie$/)
    await expect(page.locator('#enirnomo')).toHaveValue('marie')

    await page.getByRole('button', { name: 'Valider' }).click()
    await expect(page).toHaveURL(/personinformoj\.php\?aktivigo=ok/)
    await expect(page.locator('#enhavo')).toContainText('marie')
    expect(persono(`google_id='${MARIE.sub}'`)).toMatch(/\|marie\|0\|P\|1\|/)
    expect(sql(`SELECT COUNT(*) FROM personoj_agordoj WHERE persono_id=(SELECT id FROM personoj WHERE enirnomo='marie')`)).not.toBe('0')

    // connexion suivante : directement dans le cours, sans repasser par le choix
    await page.goto('eliri.php')
    await page.goto('index.php')
    await googleSurRetejo(page, MARIE)
    await expect(page).not.toHaveURL(/elektiIdentigilon|index\.php/)
    expect(sql("SELECT COUNT(*) FROM personoj WHERE retadreso='marie.e2e@gmail.com'")).toBe('1')
  })

  test('identifiant déjà pris : message, et proposition suivie d’un numéro', async ({ page }) => {
    sql("INSERT INTO personoj (ekdato, enirnomo, retadreso, rajtoj, aktivigita) VALUES (NOW(), 'marie', 'autre@mailinator.com', 'P', 1)")
    await page.goto('index.php')
    await googleSurRetejo(page, MARIE)
    await expect(page.locator('#enirnomo')).toHaveValue('marie2')

    await page.locator('#enirnomo').fill('lernanto1')
    await page.getByRole('button', { name: 'Valider' }).click()
    await expect(page.locator('.identigilo-eraro')).toHaveText('Un compte existe déjà avec cet identifiant')
    await page.locator('#enirnomo').fill('marie@gmail.com')
    await page.getByRole('button', { name: 'Valider' }).click()
    await expect(page.locator('.identigilo-eraro')).toContainText('ne soit pas un e-mail')

    // pas encore choisi : la page revient à la connexion suivante
    await page.goto('eliri.php')
    await page.goto('index.php')
    await googleSurRetejo(page, MARIE)
    await expect(page).toHaveURL(/elektiIdentigilon\.php/)
    await page.locator('#enirnomo').fill('Marie Ŝtelo')
    await page.getByRole('button', { name: 'Valider' }).click()
    await expect(page).toHaveURL(/personinformoj\.php/)
    expect(persono(`google_id='${MARIE.sub}'`)).toContain('|Marie Ŝtelo|0|')
  })

  test('adresse déjà inscrite : le compte Google est relié au compte existant', async ({ page, request }) => {
    await page.goto('index.php')
    await googleSurRetejo(page, { sub: '100000000000000000002', email: 'Lernanto1@mailinator.com', given_name: 'Lernanto' })
    await expect(page).not.toHaveURL(/elektiIdentigilon|index\.php/)
    expect(persono("enirnomo='lernanto1'")).toMatch(/\|lernanto1\|0\|P\|1\|100000000000000000002\|/)
    expect(sql("SELECT COUNT(*) FROM personoj WHERE retadreso='lernanto1@mailinator.com'")).toBe('1')
    // le mot de passe marche toujours
    const r = await request.post(`${API}auth/token`, { data: { identigilo: 'lernanto1', pasvorto: 'test' } })
    expect(r.status()).toBe(200)
  })

  test('compte pas encore activé avec la même adresse : Google l’active', async ({ page }) => {
    sql("INSERT INTO personoj (ekdato, enirnomo, retadreso, rajtoj, aktivigita, aktivigo) VALUES (NOW(), 'nonaktiva', 'nonaktiva@gmail.com', 'P', 0, 'x')")
    await page.goto('index.php')
    await googleSurRetejo(page, { sub: '100000000000000000003', email: 'nonaktiva@gmail.com' })
    await expect(page).not.toHaveURL(/elektiIdentigilon|index\.php/)
    expect(persono("enirnomo='nonaktiva'")).toContain('|nonaktiva|0|P|1|100000000000000000003|')
  })

  test('la page de choix est réservée aux comptes inscrits par Google', async ({ page }) => {
    await page.goto('elektiIdentigilon.php')
    await expect(page).toHaveURL(/index\.php\?erarkodo=8/)
  })
})

test.describe('Jetons refusés', () => {
  const kazoj: [string, () => string][] = [
    ['signature d’une autre clé', () => googleJxetono(MARIE, {}, true)],
    ['autre destinataire', () => googleJxetono(MARIE, { aud: 'autre-site.apps.googleusercontent.com' })],
    ['autre émetteur', () => googleJxetono(MARIE, { iss: 'https://example.com' })],
    ['expiré', () => googleJxetono(MARIE, { exp: Math.floor(Date.now() / 1000) - 3600 })],
    ['adresse non vérifiée', () => googleJxetono({ ...MARIE, email_verified: false })],
    ['contenu modifié', () => { const [k, , s] = googleJxetono(MARIE).split('.'); const [, e] = googleJxetono({ ...MARIE, email: 'lernanto1@mailinator.com' }).split('.'); return `${k}.${e}.${s}` }],
    ['pas un jeton', () => 'abc'],
  ]
  for (const [nomo, jxetono] of kazoj) {
    test(nomo, async ({ request }) => {
      const r = await request.post(`${API}auth/google`, { data: { credential: jxetono() } })
      expect(r.status()).toBe(401)
      expect(sql("SELECT COUNT(*) FROM personoj WHERE google_id IS NOT NULL")).toBe('0')
    })
  }
})

test.describe('Application', () => {
  test('inscription avec jetons, choix de l’identifiant, l’invité garde sa progression', async ({ request }) => {
    const gasto = await (await request.post(`${API}auth/gasto`)).json()
    const sekcio = sql('SELECT MIN(id) FROM lecioneroj')
    sql(`INSERT INTO personoj_lecioneroj (dato, persono_id, lecionero_id, ekdato) VALUES (NOW(), ${gasto.user.id}, ${sekcio}, NOW())`)

    const r = await request.post(`${API}auth/google/token`, {
      headers: { Authorization: `Bearer ${gasto.access_token}` },
      data: { credential: googleJxetono(MARIE) },
    })
    expect(r.status()).toBe(200)
    const k = await r.json()
    expect(k).toMatchObject({ nova: true, elektu_identigilon: true, propono: 'marie', token_type: 'Bearer' })
    expect(k.refresh_token).toBeTruthy()
    const id = k.user.id
    expect(sql(`SELECT COUNT(*) FROM personoj_lecioneroj WHERE persono_id=${id} AND lecionero_id=${sekcio}`)).toBe('1')
    expect(sql(`SELECT COUNT(*) FROM personoj WHERE id=${gasto.user.id}`)).toBe('0')

    const auth = { Authorization: `Bearer ${k.access_token}` }
    expect(await (await request.get(`${API}auth/identigilo`, { headers: auth })).json()).toEqual({ elektu_identigilon: true, propono: 'marie' })
    const malbona = await request.post(`${API}auth/identigilo`, { headers: auth, data: { enirnomo: 'korektanto1' } })
    expect(malbona.status()).toBe(400)
    expect((await malbona.json()).error).toBe('Un compte existe déjà avec cet identifiant')
    const bona = await request.post(`${API}auth/identigilo`, { headers: auth, data: { enirnomo: 'mariino' } })
    expect(bona.status()).toBe(200)
    expect((await bona.json()).user.enirnomo).toBe('mariino')
    expect((await request.post(`${API}auth/identigilo`, { headers: auth, data: { enirnomo: 'alia' } })).status()).toBe(409)

    // connexion suivante : même compte, identifiant déjà choisi
    const denove = await (await request.post(`${API}auth/google/token`, { data: { credential: googleJxetono(MARIE) } })).json()
    expect(denove).toMatchObject({ nova: false, elektu_identigilon: false, user: { id, enirnomo: 'mariino' } })
    expect(denove.propono).toBeUndefined()
  })

  test('sans connexion, pas d’identifiant à choisir', async ({ request }) => {
    expect((await request.get(`${API}auth/identigilo`)).status()).toBe(401)
    expect((await request.post(`${API}auth/identigilo`, { data: { enirnomo: 'x' } })).status()).toBe(401)
  })
})

// Version web de l'application lernejo (/lernejo) : même bouton de Google que sur le site, puis l'écran de choix
// de l'identifiant. Le bouton appelle window.ikursoGoogle(respondo) ; on l'appelle directement avec notre jeton.
test.describe('Application, version web', () => {
  test.use({ viewport: { width: 412, height: 915 } })

  async function googleEnAplikajxo(page: Page, uzanto: GoogleUzanto) {
    await page.goto('lernejo/')
    await page.getByText('J’ai déjà un compte').click()
    await expect(page.getByTestId('google-butono')).toBeVisible()
    await expect.poll(() => page.evaluate(() => typeof (window as any).ikursoGoogle)).toBe('function')
    await page.evaluate((credential) => (window as any).ikursoGoogle({ credential }), googleJxetono(uzanto))
  }

  test('inscription : choix de l’identifiant proposé, puis les cours ; connexion suivante directe', async ({ page }) => {
    await googleEnAplikajxo(page, MARIE)
    const kampo = page.getByLabel('Identifiant', { exact: true })
    await expect(kampo).toHaveValue('marie')
    // identifiant déjà pris : message du serveur, on reste sur l'écran
    await kampo.fill('korektanto1')
    await page.getByText('Valider').click()
    await expect(page.getByText('Un compte existe déjà avec cet identifiant')).toBeVisible()
    await kampo.fill('mariino')
    await page.getByText('Valider').click()
    await expect(page.getByText('DLEK : Cours en 10 leçons')).toBeVisible()
    expect(persono(`google_id='${MARIE.sub}'`)).toMatch(/\|mariino\|0\|P\|1\|/)
    // rechargement : les jetons portent le nouvel identifiant, pas de retour au choix
    await page.reload()
    await expect(page.getByText('DLEK : Cours en 10 leçons')).toBeVisible()
    await expect(page.getByLabel('Identifiant', { exact: true })).toHaveCount(0)

    // déconnexion puis connexion avec Google : directement dans les cours
    await page.evaluate(() => localStorage.clear())
    await googleEnAplikajxo(page, MARIE)
    await expect(page.getByText('DLEK : Cours en 10 leçons')).toBeVisible()
    expect(sql("SELECT COUNT(*) FROM personoj WHERE retadreso='marie.e2e@gmail.com'")).toBe('1')
  })

  test('application relancée avant le choix : l’écran de choix revient', async ({ page }) => {
    await googleEnAplikajxo(page, MARIE)
    await expect(page.getByLabel('Identifiant', { exact: true })).toHaveValue('marie')
    await page.reload()
    await expect(page.getByLabel('Identifiant', { exact: true })).toHaveValue('marie')
    await expect(page.getByText('DLEK : Cours en 10 leçons')).toHaveCount(0)
  })

  test('élève déjà inscrit avec la même adresse : son compte, sans choix d’identifiant', async ({ page }) => {
    await googleEnAplikajxo(page, { sub: '100000000000000000009', email: 'lernanto1@mailinator.com' })
    await expect(page.getByText('DLEK : Cours en 10 leçons')).toBeVisible()
    expect(persono("enirnomo='lernanto1'")).toMatch(/\|lernanto1\|0\|P\|1\|100000000000000000009\|/)
  })
})
