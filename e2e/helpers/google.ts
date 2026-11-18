import { createSign, generateKeyPairSync, randomBytes } from 'node:crypto'
import { mkdirSync, writeFileSync } from 'node:fs'
import { fileURLToPath } from 'node:url'

// Jetons d'identité Google simulés (#119). En test, config.php fait lire au serveur les clés publiques de
// e2e/.google-test/certs.json au lieu de celles de Google ($GOOGLE_CERTS) : on y écrit une clé générée ici,
// et on signe avec sa clé privée des jetons de la même forme que ceux de Google Identity Services.
export const CLIENT_ID = 'ikurso-e2e.apps.googleusercontent.com'

const dosiero = fileURLToPath(new URL('../.google-test/certs.json', import.meta.url))
const KID = 'e2e-' + randomBytes(4).toString('hex')
const { privateKey, publicKey } = generateKeyPairSync('rsa', { modulusLength: 2048 })
const { privateKey: aliaSxlosilo } = generateKeyPairSync('rsa', { modulusLength: 2048 })

let skribita = false
function skribiSxlosilojn(): void {
  if (skribita) return
  mkdirSync(fileURLToPath(new URL('../.google-test/', import.meta.url)), { recursive: true })
  writeFileSync(dosiero, JSON.stringify({ [KID]: publicKey.export({ type: 'spki', format: 'pem' }) }))
  skribita = true
}

const b64 = (o: unknown) => Buffer.from(JSON.stringify(o)).toString('base64url')

export type GoogleUzanto = {
  sub: string
  email: string
  given_name?: string
  family_name?: string
  email_verified?: boolean
}

// Jeton signé ; `sxangxoj` modifie le contenu (aud, exp…) et `falsa` le signe avec une autre clé.
export function googleJxetono(uzanto: GoogleUzanto, sxangxoj: Record<string, unknown> = {}, falsa = false): string {
  skribiSxlosilojn()
  const nun = Math.floor(Date.now() / 1000)
  const kapo = b64({ alg: 'RS256', kid: KID, typ: 'JWT' })
  const enhavo = b64({
    iss: 'https://accounts.google.com',
    aud: CLIENT_ID,
    azp: CLIENT_ID,
    iat: nun,
    exp: nun + 3600,
    email_verified: true,
    ...uzanto,
    ...sxangxoj,
  })
  const subskribo = createSign('RSA-SHA256').update(`${kapo}.${enhavo}`).sign(falsa ? aliaSxlosilo : privateKey)
  return `${kapo}.${enhavo}.${subskribo.toString('base64url')}`
}
