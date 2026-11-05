// Client de l'API élève d'iKurso (#1088). Les types viennent de api/openapi.yaml : `npm run generate`.
import createClient, { type Middleware } from 'openapi-fetch'
import type { components, paths } from './schema'

export type { components, paths }
type Skemoj = components['schemas']
export type Sxlosiloj = Skemoj['Sxlosiloj']
export type Kurso = Skemoj['Kurso']
export type Leciono = Skemoj['Leciono']
export type Sekcio = Skemoj['Sekcio']
export type Ekzerco = Skemoj['Ekzerco']
export type Demando = Skemoj['Demando']
export type Korekto = Skemoj['Korekto']
export type Vorto = Skemoj['Vorto']

// Le point d'entrée est api.php?path=… (en prod, /api/ est servi par un autre programme) :
// https://…/api/lernado/vortoj?kurso=CG devient https://…/api.php?path=lernado/vortoj&kurso=CG
export function apiPhpUrl(url: string): string {
  const u = new URL(url)
  const indekso = u.pathname.indexOf('/api/')
  if (indekso < 0) return url
  const vojo = u.pathname.slice(indekso + '/api/'.length)
  const demando = new URLSearchParams(u.search)
  const rezulto = new URL(u.pathname.slice(0, indekso) + '/api.php', u)
  rezulto.search = 'path=' + vojo + (demando.toString() ? '&' + demando.toString() : '')
  return rezulto.toString()
}

// Où l'application garde ses jetons (stockage sécurisé de l'appareil, par exemple expo-secure-store).
export interface Sxlosilujo {
  akiri(): Promise<{ access_token: string; refresh_token: string } | null>
  konservi(sxlosiloj: Sxlosiloj): Promise<void>
  forigi(): Promise<void>
}

// radiko : adresse du site, par exemple https://ikurso.esperanto-france.org
export function kreiKlienton(radiko: string, sxlosilujo: Sxlosilujo) {
  const baseUrl = radiko.replace(/\/$/, '') + '/api'
  const kopioj = new Map<string, { url: string; init: RequestInit }>()
  let renovigo: Promise<boolean> | null = null

  // une seule demande de nouveaux jetons à la fois : le refresh token ne sert qu'une fois
  async function renovigi(): Promise<boolean> {
    const nunaj = await sxlosilujo.akiri()
    if (!nunaj) return false
    const respondo = await fetch(apiPhpUrl(baseUrl + '/auth/refresh'), {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ refresh_token: nunaj.refresh_token }),
    })
    if (!respondo.ok) {
      await sxlosilujo.forigi()
      return false
    }
    await sxlosilujo.konservi((await respondo.json()) as Sxlosiloj)
    return true
  }

  const mezvaro: Middleware = {
    async onRequest({ request, id }) {
      const sxlosiloj = await sxlosilujo.akiri()
      // corps lu d'avance en texte (du JSON) : recopié tel quel (un flux), Chrome ne l'envoie qu'en HTTP/2
      // (ERR_ALPN_NEGOTIATION_FAILED) ; React Native n'a pas request.body
      const teksto = request.method === 'GET' || request.method === 'HEAD' ? '' : await request.text()
      const kapoj = new Headers(request.headers)
      // pas de Bearer pour obtenir, renouveler ou révoquer les jetons : ils sont dans le corps
      if (sxlosiloj && !/\/api\/auth\/(token|refresh|revoke)$/.test(new URL(request.url).pathname)) {
        kapoj.set('Authorization', 'Bearer ' + sxlosiloj.access_token)
      }
      const init: RequestInit = {
        method: request.method,
        headers: kapoj,
        body: teksto || undefined,
        signal: request.signal,
      }
      const url = apiPhpUrl(request.url)
      kopioj.set(id, { url, init })
      return new Request(url, init)
    },
    async onResponse({ response, id }) {
      const kopio = kopioj.get(id)
      kopioj.delete(id)
      // access token expiré : nouveaux jetons, puis la même requête une seconde fois
      const kapoj = kopio?.init.headers as Headers | undefined
      // rien de renvoyé = réponse inchangée (openapi-fetch exige sinon une instance de Response)
      if (response.status !== 401 || !kopio || !kapoj?.has('Authorization')) return
      renovigo ??= renovigi().finally(() => { renovigo = null })
      if (!(await renovigo)) return
      const sxlosiloj = await sxlosilujo.akiri()
      kapoj.set('Authorization', 'Bearer ' + sxlosiloj!.access_token)
      const respondo: globalThis.Response = await fetch(kopio.url, kopio.init)
      if ((respondo as unknown) instanceof Response) return respondo
      // sur Android, le fetch d'Expo renvoie sa propre classe de réponse
      return new Response(respondo.status === 204 ? null : await respondo.text(), {
        status: respondo.status,
        statusText: respondo.statusText,
        headers: respondo.headers,
      })
    },
  }

  const kliento = createClient<paths>({ baseUrl })
  kliento.use(mezvaro)

  return {
    kliento,
    async ensaluti(identigilo: string, pasvorto: string) {
      const { data, error } = await kliento.POST('/auth/token', { body: { identigilo, pasvorto } })
      if (data) await sxlosilujo.konservi(data)
      return { data, error }
    },
    async elsaluti() {
      const sxlosiloj = await sxlosilujo.akiri()
      if (sxlosiloj) await kliento.POST('/auth/revoke', { body: { refresh_token: sxlosiloj.refresh_token } })
      await sxlosilujo.forigi()
    },
  }
}
