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
  const absoluta = useMemo(
    () => html.replace(/\b(href|src)=(["'])(?![a-z]+:|#|\/)/gi, `$1=$2${radiko}/`),
    [html, radiko],
  )

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
.ikurso-enhavo fieldset.sono{border:2px dotted #64B5F6}
.ikurso-enhavo audio{width:100%;max-width:400px}
.ikurso-enhavo .card-panel{background:#e3f2fd;padding:1em;border-radius:4px;margin:.5em 0}
.ikurso-enhavo .creditphoto{font-size:.7rem;margin-top:0}
.ikurso-enhavo .responsive-img{max-width:100%;height:auto}
.ikurso-enhavo a.sm2_button{display:inline-block;width:1.6em;height:1.6em;border-radius:50%;background:#2196F3;vertical-align:middle;position:relative;text-decoration:none}
.ikurso-enhavo a.sm2_button:after{content:"";position:absolute;left:.6em;top:.45em;border-style:solid;border-width:.35em 0 .35em .55em;border-color:transparent transparent transparent #fff}
`
