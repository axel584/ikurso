// Client de l'API élève (#1088) partagé par tous les écrans, et jetons de l'élève connecté.
import { Platform } from 'react-native'
import { kreiKlienton, type Sxlosiloj, type Sxlosilujo } from '@ikurso/api-client'
import { legi, skribi } from './sxlosilujo'

// Adresse du site : sur le web, celui qui sert l'application (/lernejo) ; sur le téléphone, le site de prod.
// EXPO_PUBLIC_IKURSO_URL la remplace (par exemple http://192.168.1.10:8080 pour un téléphone de test).
export const RADIKO = (
  process.env.EXPO_PUBLIC_IKURSO_URL ||
  (Platform.OS === 'web' && typeof window !== 'undefined' ? window.location.origin : 'https://ikurso.esperanto-france.org')
).replace(/\/$/, '')

// Adresse absolue d'un fichier du site (images, sons) donné relatif à sa racine, comme dans le contenu des leçons.
export function retadreso(vojo: string): string {
  return /^[a-z]+:/i.test(vojo) ? vojo : RADIKO + '/' + vojo.replace(/^\//, '')
}

let nunaj: Sxlosiloj | null | undefined
const auxskultantoj = new Set<(ensalutita: boolean) => void>()

// L'élève est déconnecté quand le refresh token ne sert plus (expiré, révoqué) : les écrans l'apprennent ici.
export function auxskulti(f: (ensalutita: boolean) => void): () => void {
  auxskultantoj.add(f)
  return () => auxskultantoj.delete(f)
}

const sxlosilujo: Sxlosilujo = {
  async akiri() {
    if (nunaj === undefined) {
      const teksto = await legi()
      try {
        nunaj = teksto ? (JSON.parse(teksto) as Sxlosiloj) : null
      } catch {
        nunaj = null
      }
    }
    return nunaj
  },
  async konservi(sxlosiloj) {
    nunaj = sxlosiloj
    await skribi(sxlosiloj)
    auxskultantoj.forEach((f) => f(true))
  },
  async forigi() {
    nunaj = null
    await skribi(null)
    auxskultantoj.forEach((f) => f(false))
  },
}

export async function uzanto() {
  await sxlosilujo.akiri()
  return nunaj?.user ?? null
}

export const api = kreiKlienton(RADIKO, sxlosilujo)
export const kliento = api.kliento

// Réponse d'openapi-fetch : les données, ou une erreur avec le message de l'API (pour TanStack Query).
export class ApiEraro extends Error {
  constructor(public stato: number, mesagxo: string) {
    super(mesagxo)
  }
}

export async function datumoj<T>(peto: Promise<{ data?: T; error?: unknown; response: Response }>): Promise<T> {
  const { data, error, response } = await peto
  if (data === undefined || error !== undefined) {
    const mesagxo = (error as { error?: string } | undefined)?.error
    throw new ApiEraro(response.status, mesagxo || 'Erreur ' + response.status)
  }
  return data
}
