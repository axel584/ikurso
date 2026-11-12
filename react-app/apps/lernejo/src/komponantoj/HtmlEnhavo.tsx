'use dom'
// Morceau HTML d'une section, tel qu'il est en base : DOM component Expo, donc une WebView sur le téléphone
// et du HTML ordinaire sur le web. Les sons (liens .mp3) passent par le lecteur de l'application, les autres
// liens s'ouvrent dans le navigateur.
import { useEffect, useMemo, useRef } from 'react'
import type { DOMProps } from 'expo/dom'

type Props = {
  html: string
  radiko: string
  ludi: (url: string) => Promise<void>
  malfermi: (url: string) => Promise<void>
  dom?: DOMProps
}

export default function HtmlEnhavo({ html, radiko, ludi, malfermi }: Props) {
  const ujo = useRef<HTMLDivElement>(null)
  // adresses relatives à la racine du site, comme $vojo dans montriLecioneron()
  const absoluta = useMemo(() => {
    const h = ikonoj(html).replace(/\b(href|src|poster)=(["'])(?![a-z]+:|#|\/)/gi, `$1=$2${radiko}/`)
    return telefone() ? videojPerRelajso(h, radiko) : h
  }, [html, radiko])

  useEffect(() => {
    const elemento = ujo.current
    if (!elemento) return
    elemento.querySelectorAll('a.sm2_button').forEach((a) => a.setAttribute('aria-label', 'Écouter'))
    const klako = (e: MouseEvent) => {
      const ligilo = (e.target as Element).closest('a')
      const href = ligilo?.getAttribute('href')
      if (!href || href.startsWith('#')) return
      e.preventDefault()
      if (/\.mp3$/i.test(href)) {
        ludi(href)
      } else {
        malfermi(href)
      }
    }
    elemento.addEventListener('click', klako)
    return () => elemento.removeEventListener('click', klako)
  }, [absoluta, ludi, malfermi])

  return (
    <>
      <style>{STILO}</style>
      <div ref={ujo} className="ikurso-enhavo" dangerouslySetInnerHTML={{ __html: absoluta }} />
    </>
  )
}

// Icônes Material du site (<i class="material-icons">lightbulb_outline</i>) : la police n'est pas chargée ici
// (la WebView du téléphone n'a pas d'accès garanti au réseau), le nom de l'icône s'afficherait en texte.
// On les remplace par un symbole équivalent ; une icône inconnue disparaît.
const IKONOJ: Record<string, string> = {
  lightbulb_outline: '💡',
  star: '★',
  warning: '⚠️',
  check: '✓',
  volume_up: '🔊',
  school: '🎓',
  arrow_left: '◀',
  arrow_right: '▶',
}

function ikonoj(html: string): string {
  return html.replace(
    /<i\b[^>]*\bclass=(["'])[^"']*\bmaterial-icons\b[^"']*\1[^>]*>\s*([a-z_]+)\s*<\/i>/gi,
    (_, _c: string, nomo: string) =>
      IKONOJ[nomo] ? `<span class="ikono" aria-hidden="true">${IKONOJ[nomo]}</span>` : '',
  )
}

// Dans la WebView du téléphone (page locale, sans adresse de site), le lecteur YouTube intégré refuse de se charger
// (« Erreur 153 ») : la vidéo passe par la page relais lernejo/video.html du site, que YouTube accepte.
function telefone(): boolean {
  return typeof window !== 'undefined' && 'ReactNativeWebView' in window
}

function videojPerRelajso(html: string, radiko: string): string {
  return html.replace(
    /<iframe[^>]*\bsrc=["']https?:\/\/(?:www\.)?youtube(?:-nocookie)?\.com\/embed\/([\w-]+)[^"']*["'][^>]*>\s*<\/iframe>/gi,
    (_, id: string) =>
      `<iframe class="video-relajso" src="${radiko}/lernejo/video.html?v=${id}" title="Vidéo" ` +
      `allow="autoplay; encrypted-media; picture-in-picture; fullscreen" allowfullscreen></iframe>`,
  )
}

// Grille Materialize (row, col s6 m4…) et classes du site utilisées dans le contenu (style/ikurso.css).
const kolumnoj = (prefikso: string) =>
  Array.from({ length: 12 }, (_, i) => {
    const n = i + 1
    const w = ((100 * n) / 12).toFixed(4)
    return `.ikurso-enhavo .col.${prefikso}${n}{width:${w}%}.ikurso-enhavo .col.offset-${prefikso}${n}{margin-left:${w}%}`
  }).join('')

const STILO = `
html,body{margin:0;padding:0;background:transparent}
.ikurso-enhavo{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5;color:#212121;overflow-wrap:break-word}
.ikurso-enhavo *{box-sizing:border-box}
.ikurso-enhavo h1,.ikurso-enhavo h2,.ikurso-enhavo h3{font-weight:500;line-height:1.3;margin:1em 0 .5em}
.ikurso-enhavo h2{font-size:1.4em}.ikurso-enhavo h3{font-size:1.2em}
.ikurso-enhavo p{margin:.5em 0}
.ikurso-enhavo img,.ikurso-enhavo video,.ikurso-enhavo iframe{max-width:100%;height:auto}
.ikurso-enhavo a{color:#1976d2}
.ikurso-enhavo table{border-collapse:collapse;width:100%}
.ikurso-enhavo td,.ikurso-enhavo th{padding:.4em;border-bottom:1px solid #e0e0e0;text-align:left}
.ikurso-enhavo ul{padding-left:1.5em}
.ikurso-enhavo .row{display:flex;flex-wrap:wrap;margin:0 -.5rem}
.ikurso-enhavo .col{width:100%;padding:0 .5rem;overflow-wrap:normal}
${kolumnoj('s')}
@media (min-width:601px){${kolumnoj('m')}}
@media (min-width:993px){${kolumnoj('l')}}
.ikurso-enhavo .center,.ikurso-enhavo .center-align{text-align:center}
.ikurso-enhavo .hide{display:none}
/* pour l'impression du site seulement (« QCM à faire en ligne sur la page… », tableaux découpés) */
.ikurso-enhavo .onlyprint{display:none}
.ikurso-enhavo .eo{color:#2196F3}
.ikurso-enhavo .eta{font-size:85%}
.ikurso-enhavo .tab{padding-left:1em}
.ikurso-enhavo p.parto{margin-top:1em;margin-bottom:.5em}
.ikurso-enhavo p.parto:before{content:"";display:inline-block;width:.6em;height:.6em;background:#2196F3;margin-right:.5em;vertical-align:middle}
.ikurso-enhavo p.sekva{margin-top:0;padding-top:0}
.ikurso-enhavo p.rimarko{margin-top:1em}
.ikurso-enhavo span.marque{color:#9ccc65}
.ikurso-enhavo .vortlisto{border:1px solid #ccc;padding:1em;margin:0}
.ikurso-enhavo .vortlisto p{margin-bottom:0}
.ikurso-enhavo fieldset{border:2px double #2196F3;padding:0 1em 1em;margin:1em 0;min-width:0}
.ikurso-enhavo fieldset legend{padding:0 .5em;color:#2196F3}
/* liste de mots ou règle dans un cadre bleu : pas de second cadre gris, comme sur le site */
.ikurso-enhavo fieldset.vortoj div.vortlisto,.ikurso-enhavo fieldset.memoru div.regulo{border:none;padding:0}
.ikurso-enhavo fieldset.sono{border:2px dotted #64B5F6}
.ikurso-enhavo audio{width:100%;max-width:400px}
.ikurso-enhavo .card-panel{background:#e3f2fd;padding:1em;border-radius:4px;margin:.5em 0}
.ikurso-enhavo .ikono{margin-right:.35em}
.ikurso-enhavo .creditphoto{font-size:.7rem;margin-top:0}
.ikurso-enhavo .responsive-img{max-width:100%;height:auto}
.ikurso-enhavo video.vidbendo{display:block;width:100%;max-width:560px;height:auto;margin:.5em 0;background:#000}
.ikurso-enhavo iframe.video-relajso{display:block;width:100%;max-width:560px;height:auto;aspect-ratio:16/9;border:0;margin:.5em 0;background:#000}
.ikurso-enhavo a.sm2_button{display:inline-block;width:1.6em;height:1.6em;border-radius:50%;background:#2196F3;vertical-align:middle;position:relative;text-decoration:none}
.ikurso-enhavo a.sm2_button:after{content:"";position:absolute;left:.6em;top:.45em;border-style:solid;border-width:.35em 0 .35em .55em;border-color:transparent transparent transparent #fff}
`
