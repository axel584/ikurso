import { test, expect, type APIRequestContext } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'
import { clearMails, waitForMail } from '../helpers/mailhog'

// API de l'élève pour l'application mobile (#1088) : un élève suit une leçon complète sans aucune page PHP
// (lecture, exercices, envoi au correcteur, retour du correcteur), avec l'access token de auth/token.
const API = 'api.php?path='

type Sekcio = { id: number; ordo: number; lasta: boolean; enhavo: string; ekzercoj: { demandoj: { id: number }[] }[] }

async function ensaluti(request: APIRequestContext) {
  const r = await request.post(`${API}auth/token`, { data: { identigilo: 'lernanto1', pasvorto: 'test' } })
  expect(r.status()).toBe(200)
  return (await r.json()) as { access_token: string; refresh_token: string; expires_in: number }
}

function kun(token: string) {
  return { headers: { Authorization: `Bearer ${token}` } }
}

test.beforeEach(() => {
  resetTestData()
  sql('DELETE FROM renovigaj_sxlosiloj')
})

test.describe.configure({ mode: 'serial' })

test('un élève suit la leçon 1 uniquement par l’API, jusqu’au retour de son correcteur', async ({ request, page }) => {
  await clearMails()
  // les données de test contiennent déjà des réponses de lernanto1 : on part d'un élève qui n'a rien fait
  sql("DELETE FROM respondoj WHERE persono_id = (SELECT id FROM personoj WHERE enirnomo = 'lernanto1')")
  const { access_token: at } = await ensaluti(request)

  const kurso = await (await request.get(`${API}lernado/kursoj/CG`, kun(at))).json()
  const sekcioj: { id: number }[] = kurso.lecionoj[0].sekcioj
  expect(sekcioj).toHaveLength(13)

  for (const { id } of sekcioj) {
    const r = await request.get(`${API}lernado/sekcioj/${id}`, kun(at))
    expect(r.status()).toBe(200)
    const teksto = await r.text()
    // jamais la réponse attendue d'une question
    expect(teksto).not.toContain('normaligita')
    expect(teksto).not.toContain('La teo estas varma')
    const sekcio = JSON.parse(teksto) as Sekcio
    for (const ekzerco of sekcio.ekzercoj) {
      for (const demando of ekzerco.demandoj) {
        const respondo = demando.id === 1 ? 'La teo estas varma.' : 'e2e'
        const rr = await request.post(`${API}lernado/respondoj`, { ...kun(at), data: { ekzercero_id: demando.id, respondo } })
        expect(rr.status()).toBe(200)
        if (demando.id === 1) expect((await rr.json()).gxusta).toBe(true)
        if (demando.id === 2) expect((await rr.json()).gxusta).toBe(false)
      }
    }
    const fini = await request.post(`${API}lernado/sekcioj/${id}/fini`, kun(at))
    expect(fini.status()).toBe(200)
  }

  // la réponse enregistrée revient avec la section, corrigée
  const sekcio6 = await (await request.get(`${API}lernado/sekcioj/6`, kun(at))).json()
  expect(sekcio6.ekzercoj[0].demandoj[0]).toMatchObject({ id: 1, respondo: 'La teo estas varma.', gxusta: true })

  const resumo = await (await request.get(`${API}lernado/lecionoj/CG/1/resumo`, kun(at))).json()
  expect(resumo).toEqual({ nefinitaj_sekcioj: [], mankantaj_respondoj: [] })

  const sendo = await request.post(`${API}lernado/lecionoj/CG/1/sendi`, { ...kun(at), data: { komento: 'Saluton <b>!</b>' } })
  expect(await sendo.json()).toEqual({ rezulto: 'korektanto_atribuita' })
  await waitForMail('korektanto1@mailinator.com', 'Nouvel élève')
  // le commentaire de l'élève arrive échappé dans le mail de la leçon (au premier envoi, il n'est pas gardé en base)
  expect((await waitForMail('korektanto1@mailinator.com', 'lec01 de lernanto1')).body).toContain('Saluton &lt;b&gt;!&lt;/b&gt;')
  const kursoj = await (await request.get(`${API}lernado/kursoj`, kun(at))).json()
  expect(kursoj.kursoj[0]).toMatchObject({ kodo: 'CG', korektanto: { enirnomo: 'korektanto1' } })

  // le correcteur corrige sur le site
  await login(page, USERS.korektanto)
  await page.goto(`korektiLecionon.php?numleciono=1&kurso=CG&studanto=${sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")}`)
  await page.locator('textarea[name=konkludo]').evaluate((el) => { (el as HTMLTextAreaElement).value = 'Bonege (e2e)' })
  const kampo = page.locator('textarea[name^=korekto]').first()
  const respondoId = (await kampo.getAttribute('name'))!.replace('korekto', '')
  await kampo.evaluate((el) => { (el as HTMLTextAreaElement).value = 'Atentu (e2e)' })
  await page.locator('#pas_envoi_email').uncheck({ force: true })
  await page.locator('#registriKorektadon_button').click()
  await expect(page).toHaveURL(/vidiLecionon\.php/)

  const korekto = await (await request.get(`${API}lernado/lecionoj/CG/1/korekto`, kun(at))).json()
  expect(korekto).toMatchObject({ korektita: true, konkludo: 'Bonege (e2e)' })
  const ekzercero = sql(`SELECT ekzercero_id FROM respondoj WHERE id=${respondoId}`)
  const demandoj = korekto.ekzercoj.flatMap((e: Sekcio['ekzercoj'][0]) => e.demandoj)
  expect(demandoj.find((d: { id: number }) => String(d.id) === ekzercero)).toMatchObject({ korekto: 'Atentu (e2e)' })

  // leçon suivante : elle part directement au correcteur déjà attribué
  await clearMails()
  const leciono2 = (await (await request.get(`${API}lernado/kursoj/CG`, kun(at))).json()).lecionoj[1]
  const sekcio = (await (await request.get(`${API}lernado/sekcioj/${leciono2.sekcioj[4].id}`, kun(at))).json()) as Sekcio
  await request.post(`${API}lernado/respondoj`, { ...kun(at), data: { ekzercero_id: sekcio.ekzercoj[0].demandoj[0].id, respondo: 'e2e' } })
  expect(await (await request.post(`${API}lernado/lecionoj/CG/2/sendi`, kun(at))).json()).toEqual({ rezulto: 'sendita' })
  await waitForMail('korektanto1@mailinator.com', 'Nouvelle leçon de lernanto1')
})

test('révision du vocabulaire par l’API', async ({ request }) => {
  const { access_token: at } = await ensaluti(request)
  await request.post(`${API}lernado/sekcioj/3/fini`, kun(at)) // vocabulaire de la leçon 1
  const revizio = await (await request.get(`${API}lernado/revizio`, kun(at))).json()
  expect(revizio.vortoj.length).toBeGreaterThan(0)
  expect(revizio.vortoj[0]).not.toHaveProperty('eo') // pas la réponse attendue

  const biskvito = Number(sql("SELECT id FROM vortoj WHERE eo='biskvito'"))
  const malgxusta = await (await request.post(`${API}lernado/revizio`, { ...kun(at), data: { vorto_id: biskvito, respondo: 'kuko' } })).json()
  expect(malgxusta).toMatchObject({ gxusta: false, bona_respondo: 'biskvito', fr: 'biscuit' })
  const gxusta = await (await request.post(`${API}lernado/revizio`, { ...kun(at), data: { vorto_id: biskvito, respondo: 'Biskvito' } })).json()
  expect(gxusta.gxusta).toBe(true)
  const poste = await (await request.get(`${API}lernado/revizio`, kun(at))).json()
  expect(poste.vortoj.map((v: { id: number }) => v.id)).not.toContain(biskvito)

  const forigo = await request.put(`${API}lernado/vortoj/${biskvito}`, { ...kun(at), data: { forigita: true } })
  expect(await forigo.json()).toEqual({ id: biskvito, forigita: true })
  const leksikono = await (await request.get(`${API}lernado/vortoj&kurso=CG&prefikso=biskvito`, kun(at))).json()
  expect(leksikono.vortoj[0]).toMatchObject({ eo: 'biskvito', nivelo: 'forigita' })
})

test('refresh token : rotation, réutilisation refusée, déconnexion', async ({ request }) => {
  const { access_token: at, refresh_token: rt, expires_in } = await ensaluti(request)
  expect(expires_in).toBe(900)
  expect(sql('SELECT COUNT(*) FROM renovigaj_sxlosiloj WHERE hakajxo = SHA2(\'' + rt + '\', 256)')).toBe('1')

  const renovigo = await request.post(`${API}auth/refresh`, { data: { refresh_token: rt } })
  expect(renovigo.status()).toBe(200)
  const { access_token: at2, refresh_token: rt2 } = await renovigo.json()
  expect(rt2).not.toBe(rt)
  expect((await request.get(`${API}lernado/kursoj`, kun(at2))).status()).toBe(200)

  // un jeton déjà échangé qui revient : tous les jetons de l'élève sont révoqués
  expect((await request.post(`${API}auth/refresh`, { data: { refresh_token: rt } })).status()).toBe(401)
  expect((await request.post(`${API}auth/refresh`, { data: { refresh_token: rt2 } })).status()).toBe(401)

  const { refresh_token: rt3 } = await ensaluti(request)
  expect((await request.post(`${API}auth/revoke`, { data: { refresh_token: rt3 } })).status()).toBe(200)
  expect((await request.post(`${API}auth/refresh`, { data: { refresh_token: rt3 } })).status()).toBe(401)
  expect((await request.get(`${API}lernado/kursoj`, kun(at))).status()).toBe(200) // l'access token court jusqu'à son expiration
})

test('refus : sans jeton, jeton faux, paramètres invalides', async ({ request }) => {
  expect((await request.get(`${API}lernado/kursoj`)).status()).toBe(401)
  expect((await request.get(`${API}lernado/kursoj`, kun('a.b.c'))).status()).toBe(401)
  expect((await request.post(`${API}auth/token`, { data: { identigilo: 'lernanto1', pasvorto: 'faux' } })).status()).toBe(401)
  const { access_token: at } = await ensaluti(request)
  expect((await request.get(`${API}lernado/kursoj/KE`, kun(at))).status()).toBe(404)
  expect((await request.get(`${API}lernado/sekcioj/999999`, kun(at))).status()).toBe(404)
  expect((await request.post(`${API}lernado/respondoj`, { ...kun(at), data: { ekzercero_id: 1 } })).status()).toBe(400)
  expect((await request.post(`${API}lernado/respondoj`, { ...kun(at), data: { ekzercero_id: 999999, respondo: 'x' } })).status()).toBe(404)
  expect((await request.post(`${API}lernado/lecionoj/CG/3/sendi`, kun(at))).status()).toBe(422)
  for (const injekto of ["1'", '1 OR 1=1', '1 UNION SELECT NULL']) {
    const r = await request.get(`${API}lernado/sekcioj/${encodeURIComponent(injekto)}`, kun(at))
    expect(r.status()).toBeLessThan(500)
    expect(await r.text()).not.toMatch(/SQL|PDO/i)
  }
  expect((await request.get(`${API}lernado/vortoj&kurso=CG&nivelo=${encodeURIComponent("' OR 1=1")}`, kun(at))).status()).toBe(400)
})

test('titres en texte, même enregistrés avec des entités HTML (comme en prod)', async ({ request }) => {
  const titolo = sql("SELECT titolo FROM lecionoj WHERE kurso = 'CG' AND numero = 1")
  sql("UPDATE lecionoj SET titolo = 'Premi&egrave;re le&ccedil;on' WHERE kurso = 'CG' AND numero = 1")
  try {
    const { access_token } = await ensaluti(request)
    const kurso = await (await request.get(`${API}lernado/kursoj/CG`, kun(access_token))).json()
    expect(kurso.lecionoj[0].titolo).toBe('Première leçon')
    const sekcio = await (await request.get(`${API}lernado/sekcioj/${kurso.lecionoj[0].sekcioj[0].id}`, kun(access_token))).json()
    expect(sekcio.leciono_titolo).toBe('Première leçon')
  } finally {
    sql(`UPDATE lecionoj SET titolo = '${titolo.replace(/'/g, "''")}' WHERE kurso = 'CG' AND numero = 1`)
  }
})
