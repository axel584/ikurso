import { expect } from '@playwright/test'

const MAILHOG_URL = process.env.MAILHOG_URL ?? 'http://localhost:8025'

export type Mail = { subject: string; to: string[]; body: string }

type MailhogMessage = {
  Content: { Headers: Record<string, string[]>; Body: string }
  MIME: { Parts: { Headers: Record<string, string[]>; Body: string }[] } | null
}

function decodeQuotedPrintable(text: string): string {
  const bytes = text
    .replace(/=\r?\n/g, '')
    .replace(/=([0-9A-F]{2})/gi, (_, hex) => String.fromCharCode(parseInt(hex, 16)))
  return Buffer.from(bytes, 'latin1').toString('utf8')
}

function decodeSubject(subject: string): string {
  return subject.replace(/=\?utf-8\?([BQ])\?([^?]*)\?=/gi, (_, enc, data) =>
    enc.toUpperCase() === 'B'
      ? Buffer.from(data, 'base64').toString('utf8')
      : decodeQuotedPrintable(data.replace(/_/g, ' ')),
  )
}

function toMail(m: MailhogMessage): Mail {
  const parts = m.MIME?.Parts?.length ? m.MIME.Parts : [m.Content]
  const body = parts
    .map((p) => {
      const encoding = p.Headers['Content-Transfer-Encoding']?.[0]?.toLowerCase()
      if (encoding === 'base64') return Buffer.from(p.Body, 'base64').toString('utf8')
      if (encoding === 'quoted-printable') return decodeQuotedPrintable(p.Body)
      return p.Body
    })
    .join('\n')
  return {
    subject: decodeSubject(m.Content.Headers.Subject?.[0] ?? ''),
    to: m.Content.Headers.To ?? [],
    body,
  }
}

export async function clearMails(): Promise<void> {
  await fetch(`${MAILHOG_URL}/api/v1/messages`, { method: 'DELETE' })
}

export async function mailsTo(address: string): Promise<Mail[]> {
  const res = await fetch(`${MAILHOG_URL}/api/v2/search?kind=to&query=${encodeURIComponent(address)}`)
  const json = (await res.json()) as { items: MailhogMessage[] }
  return json.items.map(toMail)
}

// Attend qu'un mail dont le sujet contient `subject` arrive pour `address`.
export async function waitForMail(address: string, subject: string): Promise<Mail> {
  let found: Mail | undefined
  await expect
    .poll(async () => {
      found = (await mailsTo(address)).find((m) => m.subject.includes(subject))
      return found !== undefined
    }, { message: `mail « ${subject} » pour ${address}`, timeout: 10_000 })
    .toBe(true)
  return found!
}

// En dev, $urlracine n'a pas toujours de « / » final : on ne garde que le chemin
// à partir du nom de fichier et on le rejoue contre la baseURL des tests.
export function linkFromMail(mail: Mail, file: string): string {
  const match = mail.body.match(new RegExp(`${file.replace('.', '\\.')}\\?[^"'\\s<>]+`))
  if (!match) throw new Error(`Lien ${file} introuvable dans le mail « ${mail.subject} »`)
  return match[0].replace(/&amp;/g, '&')
}
