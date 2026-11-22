import { test, expect } from '@playwright/test'
import { resetTestData, sql } from '../helpers/db'

// L'application Android garde les cookies renvoyés par le serveur. Une question sans image (bildo NULL en prod)
// lui faisait charger la page du cours (fr/cge/) comme image : elle recevait un cookie de session PHP (30 jours),
// puis le renouvellement de son jeton et la connexion étaient refusés (403 « Origine non autorisée ») : l'élève
// était déconnectée et ne pouvait plus se reconnecter.
const API = 'api.php?path='
const APP = { 'User-Agent': 'okhttp/4.12.0', Cookie: 'PHPSESSID=abcdef0123456789abcdef0123' }

test.beforeEach(() => {
  resetTestData()
  sql('DELETE FROM renovigaj_sxlosiloj')
})

test('avec un cookie de session et sans Origin, l’application se connecte et renouvelle son jeton', async ({ request }) => {
  const ensaluto = await request.post(`${API}auth/token`, { headers: APP, data: { identigilo: 'lernanto1', pasvorto: 'test' } })
  expect(ensaluto.status()).toBe(200)
  const { refresh_token } = await ensaluto.json()
  const renovigo = await request.post(`${API}auth/refresh`, { headers: APP, data: { refresh_token } })
  expect(renovigo.status()).toBe(200)
  expect((await request.post(`${API}auth/gasto`, { headers: APP })).status()).toBe(201)

  // les autres requêtes qui modifient des données restent protégées : cookie sans jeton ni origine → refusé
  expect((await request.post(`${API}lernado/respondoj`, { headers: APP, data: {} })).status()).toBe(403)
})

test('une question sans image n’a pas d’adresse d’image', async ({ request }) => {
  // en prod, d'anciennes questions ont bildo NULL (NOT NULL en local) : la question vide doit donner null
  const sekcio = sql("SELECT e.lecionero_id FROM ekzerceroj ee JOIN ekzercoj e ON e.id=ee.ekzerco_id JOIN lecioneroj le ON le.id=e.lecionero_id JOIN lecionoj l ON l.id=le.leciono_id WHERE l.kurso='CG' AND ee.bildo='' LIMIT 1")
  const { access_token } = await (await request.post(`${API}auth/token`, { data: { identigilo: 'lernanto1', pasvorto: 'test' } })).json()
  const r = await request.get(`${API}lernado/sekcioj/${sekcio}`, { headers: { Authorization: `Bearer ${access_token}` } })
  expect(r.status()).toBe(200)
  const bildoj: (string | null)[] = (await r.json()).ekzercoj.flatMap((e: { demandoj: { bildo: string | null }[] }) => e.demandoj.map((d) => d.bildo))
  expect(bildoj.length).toBeGreaterThan(0)
  expect(bildoj.filter((b) => b !== null && !/\.(png|jpe?g|gif|svg|webp)$/i.test(b))).toEqual([])
})
