// HTML simple des consignes, questions et corrections (b, strong, i, em, u, br, p, span class="eo", sup, sub)
// affiché en texte natif ; les autres balises sont ignorées, leur texte est gardé.
import type { ReactNode } from 'react'
import { Text, type StyleProp, type TextStyle } from 'react-native'
import { koloroj } from '@/stiloj'

const ENTOJ: Record<string, string> = { amp: '&', lt: '<', gt: '>', quot: '"', apos: "'", nbsp: ' ', rsquo: '’', lsquo: '‘', laquo: '«', raquo: '»', hellip: '…', ndash: '–', mdash: '—' }

export function malkodi(teksto: string): string {
  return teksto.replace(/&(#x[0-9a-f]+|#\d+|[a-z]+);/gi, (tuto, ento: string) => {
    if (ento[0] === '#') {
      const n = ento[1] === 'x' || ento[1] === 'X' ? parseInt(ento.slice(2), 16) : parseInt(ento.slice(1), 10)
      return Number.isFinite(n) ? String.fromCodePoint(n) : tuto
    }
    return ENTOJ[ento.toLowerCase()] ?? tuto
  })
}

// Texte brut, sans balises (pour comparer ou recomposer une réponse).
export function plataTeksto(html: string): string {
  return malkodi(html.replace(/<br\s*\/?>/gi, '\n').replace(/<[^>]*>/g, ''))
}

type Stilo = TextStyle

function stiloDe(etikedo: string, atributoj: string): Stilo | null {
  switch (etikedo) {
    case 'b':
    case 'strong':
      return { fontWeight: '700' }
    case 'i':
    case 'em':
      return { fontStyle: 'italic' }
    case 'u':
      return { textDecorationLine: 'underline' }
    case 'sup':
    case 'sub':
      return { fontSize: 11 }
    case 'span':
    case 'p':
      return /class=["'][^"']*\beo\b/.test(atributoj) ? { color: koloroj.blua } : {}
    default:
      return {}
  }
}

export function HtmlTeksto({ html, stilo }: { html: string; stilo?: StyleProp<TextStyle> }) {
  const radiko: ReactNode[] = []
  const stako: { etikedo: string; stilo: Stilo; infanoj: ReactNode[] }[] = [{ etikedo: '', stilo: {}, infanoj: radiko }]
  const re = /<(\/?)([a-z0-9]+)([^>]*)>|([^<]+)/gi
  let m: RegExpExecArray | null
  let sxlosilo = 0
  while ((m = re.exec(html)) !== null) {
    const supro = stako[stako.length - 1]
    if (m[4] !== undefined) {
      supro.infanoj.push(malkodi(m[4].replace(/\s+/g, ' ')))
      continue
    }
    const [, fermo, etikedoGranda, atributoj] = m
    const etikedo = etikedoGranda.toLowerCase()
    if (etikedo === 'br') {
      supro.infanoj.push('\n')
    } else if (fermo) {
      const indekso = stako.map((s) => s.etikedo).lastIndexOf(etikedo)
      if (indekso > 0) {
        while (stako.length > indekso) {
          const ero = stako.pop()!
          stako[stako.length - 1].infanoj.push(
            <Text key={sxlosilo++} style={ero.stilo}>
              {ero.infanoj}
            </Text>,
          )
          if (ero.etikedo === 'p') stako[stako.length - 1].infanoj.push('\n')
        }
      }
    } else if (!atributoj.trim().endsWith('/')) {
      stako.push({ etikedo, stilo: stiloDe(etikedo, atributoj) ?? {}, infanoj: [] })
    }
  }
  while (stako.length > 1) {
    const ero = stako.pop()!
    stako[stako.length - 1].infanoj.push(
      <Text key={sxlosilo++} style={ero.stilo}>
        {ero.infanoj}
      </Text>,
    )
  }
  return <Text style={[{ fontSize: 16, lineHeight: 24, color: koloroj.teksto }, stilo]}>{radiko}</Text>
}
