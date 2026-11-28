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
    const h = tabeloj(ikonoj(html)).replace(/\b(href|src|poster)=(["'])(?![a-z]+:|#|\/)/gi, `$1=$2${radiko}/`)
    return telefone() ? videojPerRelajso(h, radiko) : h
  }, [html, radiko])

  useEffect(() => {
    const elemento = ujo.current
    if (!elemento) return
    spacoj(elemento)
    linioj(elemento)
  }, [absoluta])

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

// Espace insécable avant « : ; ? ! » et à l'intérieur des guillemets, comme en typographie française : dans une colonne
// étroite, « Énoncé : » passait sur deux lignes, le deux-points seul en dessous.
function spacoj(elemento: HTMLElement) {
  const iranto = document.createTreeWalker(elemento, NodeFilter.SHOW_TEXT)
  for (let n = iranto.nextNode(); n; n = iranto.nextNode()) {
    const t = n as Text
    const nova = t.data.replace(/ ([:;?!»])/g, ' $1').replace(/« /g, '« ')
    if (nova !== t.data) t.data = nova
  }
}

// Grille du site sur un écran de téléphone : les colonnes d'une ligne (col s1 + s5 + s2 + s2 + s2, ou s2 « Énoncé : »
// + s10) ont chacune une largeur fixe en pourcentage, souvent plus étroite que leur mot le plus long sur le téléphone ;
// la ligne débordait et la dernière colonne passait seule à la ligne suivante (« majo » sous « aj » dans la 4.4, le
// texte sous « Énoncé : » dans la 4.1). Les colonnes qui forment une ligne (12 unités au plus, décalage compris) sont
// regroupées ; dans le groupe, chacune prend sa part de la largeur (2, 5, 10…) sans descendre sous son mot le plus
// long, la plus large cédant la place aux mots des autres. Rien ne change sur un écran plus large (classes m et l).
function linioj(elemento: HTMLElement) {
  if (window.innerWidth > 600) return
  elemento.querySelectorAll<HTMLElement>('.row').forEach((vico) => {
    const kolumnoj = Array.from(vico.children) as HTMLElement[]
    if (kolumnoj.length === 0 || kolumnoj.some((k) => !k.classList.contains('col'))) return
    let linio: HTMLElement | null = null
    let sumo = 0
    for (const k of kolumnoj) {
      const n = unuoj(k, 's')
      if (!linio || sumo + n + unuoj(k, 'offset-s', 0) > 12) {
        linio = document.createElement('div')
        linio.className = 'linio'
        vico.insertBefore(linio, k)
        sumo = 0
      }
      linio.appendChild(k)
      sumo += n + unuoj(k, 'offset-s', 0)
      k.style.flex = `${n} 1 0%`
    }
  })
}

function unuoj(k: HTMLElement, prefikso: string, defauxlto = 12): number {
  const m = k.className.match(new RegExp(`(?:^|\\s)${prefikso}(\\d+)(?:\\s|$)`))
  return m ? Number(m[1]) : defauxlto
}

// Un tableau plus large que l'écran (corrélatifs à 5 colonnes…) faisait glisser toute la page de gauche à droite
// dans la WebView : chaque tableau a maintenant son propre cadre qui défile seul, comme .korelativoj sur le site.
function tabeloj(html: string): string {
  return html.replace(/<table\b/gi, '<div class="tabelujo"><table').replace(/<\/table>/gi, '</table></div>')
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
/* la WebView prend la taille de son contenu (matchContents) : un contenu plus large que l'écran l'élargissait,
   et tout le texte de la section sortait de l'écran ; le contenu ne dépasse plus jamais la largeur */
html,body{margin:0;padding:0;background:transparent;max-width:100%;overflow-x:hidden}
/* sur le téléphone, Expo place le contenu dans un #root en flex : sans min-width:0, le cadre ne peut pas être plus
   étroit que son élément le plus large (tableau des corrélatifs, surtout avec une police agrandie) et le texte sort */
.ikurso-enhavo{flex:1 1 0%;min-width:0;max-width:100%}
.ikurso-enhavo{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5;color:#212121;overflow-wrap:break-word}
.ikurso-enhavo *{box-sizing:border-box}
.ikurso-enhavo h1,.ikurso-enhavo h2,.ikurso-enhavo h3{font-weight:500;line-height:1.3;margin:1em 0 .5em}
.ikurso-enhavo h2{font-size:1.4em}.ikurso-enhavo h3{font-size:1.2em}
.ikurso-enhavo p{margin:.5em 0}
.ikurso-enhavo img,.ikurso-enhavo video,.ikurso-enhavo iframe{max-width:100%;height:auto}
.ikurso-enhavo a{color:#1976d2;overflow-wrap:anywhere}
.ikurso-enhavo .tabelujo{max-width:100%;overflow-x:auto;margin:.5em 0}
.ikurso-enhavo table{border-collapse:collapse;width:100%}
.ikurso-enhavo td,.ikurso-enhavo th{padding:.4em;border-bottom:1px solid #e0e0e0;text-align:left}
.ikurso-enhavo ul{padding-left:1.5em}
/* marge négative à gauche seulement : le texte des colonnes reste aligné sur les paragraphes sans dépasser à droite */
.ikurso-enhavo .row{display:flex;flex-wrap:wrap;margin:0 0 0 -.5rem}
/* une colonne étroite (col s2, s3) n'est jamais plus étroite que son mot le plus long (ĉokolado, fragotorteto avec une police
   agrandie) : la grille passe à la ligne au lieu que le mot déborde sur la colonne voisine ou hors de l'écran */
.ikurso-enhavo .col{width:100%;min-width:min-content;padding:0 .5rem;overflow-wrap:normal}
${kolumnoj('s')}
.ikurso-enhavo .linio{display:flex;flex-wrap:wrap;width:100%}
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
/* tableau des corrélatifs, comme style/ikurso.css : colonnes de largeur fixe, première colonne immobile */
.ikurso-enhavo .korelativoj table{border-collapse:separate;border-spacing:0}
.ikurso-enhavo .korelativoj th,.ikurso-enhavo .korelativoj td{vertical-align:top;padding:.25em .5em;min-width:7em;border:1px dashed #aaa}
.ikurso-enhavo .korelativoj th{background:#f6f9fb;border:1px solid #aaa}
.ikurso-enhavo .korelativoj td{font-size:85%}
.ikurso-enhavo .korelativoj th:first-child{position:sticky;left:0;z-index:1}
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
/* images des récits de PP (.rakonto), comme style/ikurso.css sur téléphone : flottantes à droite (flot-d) ou à gauche
   (flot-g), largeur s-NN % ; les marges négatives écrites dans la page (pour la marge du site) sortaient de l'écran */
.ikurso-enhavo .rakonto::after{content:"";display:block;clear:both}
.ikurso-enhavo .flot-d{float:right;margin:0 0 1em 1em!important}
.ikurso-enhavo .flot-g{float:left;margin:0 1em 1em 0!important}
.ikurso-enhavo .s-25{max-width:25%}.ikurso-enhavo .s-30{max-width:30%}.ikurso-enhavo .s-40{max-width:40%}
.ikurso-enhavo .s-50{max-width:50%}.ikurso-enhavo .s-70{max-width:70%}
.ikurso-enhavo .s-100{max-width:100%;float:none;display:block;margin:0 auto 1em!important}
.ikurso-enhavo video.vidbendo{display:block;width:100%;max-width:560px;height:auto;margin:.5em 0;background:#000}
.ikurso-enhavo iframe.video-relajso{display:block;width:100%;max-width:560px;height:auto;aspect-ratio:16/9;border:0;margin:.5em 0;background:#000}
.ikurso-enhavo a.sm2_button{display:inline-block;width:1.6em;height:1.6em;border-radius:50%;background:#2196F3;vertical-align:middle;position:relative;text-decoration:none}
.ikurso-enhavo a.sm2_button:after{content:"";position:absolute;left:.6em;top:.45em;border-style:solid;border-width:.35em 0 .35em .55em;border-color:transparent transparent transparent #fff}
`
