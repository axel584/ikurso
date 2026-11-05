// Lettres accentuées de l'espéranto par la méthode « x », comme xAlUtf8.js sur le site : cx → ĉ, gx → ĝ, hx → ĥ,
// jx → ĵ, sx → ŝ, ux → ŭ (et leurs majuscules), ù → ŭ.
const ANSTATAUXOJ: [RegExp, string][] = [
  [/c[xX]/g, 'ĉ'],
  [/g[xX]/g, 'ĝ'],
  [/h[xX]/g, 'ĥ'],
  [/j[xX]/g, 'ĵ'],
  [/s[xX]/g, 'ŝ'],
  [/u[xX]|ù/g, 'ŭ'],
  [/C[xX]/g, 'Ĉ'],
  [/G[xX]/g, 'Ĝ'],
  [/H[xX]/g, 'Ĥ'],
  [/J[xX]/g, 'Ĵ'],
  [/S[xX]/g, 'Ŝ'],
  [/U[xX]|Ù/g, 'Ŭ'],
]

export function xAlUnikodo(teksto: string): string {
  return ANSTATAUXOJ.reduce((t, [re, litero]) => t.replace(re, litero), teksto)
}

export const SUPERSIGNITAJ = ['ĉ', 'ĝ', 'ĥ', 'ĵ', 'ŝ', 'ŭ']
