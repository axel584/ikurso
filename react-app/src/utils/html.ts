/**
 * Décode les entités HTML (ex: &egrave; → è) en passant par un nœud textarea.
 * Sûr contre le XSS car on lit .value (texte pur), pas .innerHTML.
 */
export function decodeHtml(s: string | null | undefined): string {
  if (!s) return ''
  const el = document.createElement('textarea')
  el.innerHTML = s
  return el.value
}
