// Exercice d'une section, comme getEkzercon() dans webui.inc.php : consigne, exemples, puis les questions.
// Chaque réponse est enregistrée en quittant le champ (ou au choix fait) et corrigée par le serveur ; une réponse
// juste d'un exercice corrigé automatiquement est marquée en vert.
import { useRef, useState } from 'react'
import { Image, Pressable, Text, View } from 'react-native'
import { useQueryClient } from '@tanstack/react-query'
import type { Demando as DemandoT, Ekzerco as EkzercoT } from '@ikurso/api-client'
import { retadreso } from '@/api/kliento'
import { useRespondi } from '@/api/demandoj'
import { EoEnigo } from './EoEnigo'
import { HtmlTeksto, malkodi, plataTeksto } from './HtmlTeksto'
import { koloroj, stiloj } from '@/stiloj'

const TEKSTOJ = {
  fr: {
    titolo: 'EXERCICE',
    x2u: 'Pour obtenir une lettre accentuée, tapez la lettre suivie d’un x : cx, sx, ux… donnent ĉ, ŝ, ŭ…',
    korektebla:
      'Plusieurs réponses sont possibles. Si vous indiquez l’une des bonnes réponses, elle sera marquée en vert. Si elle ne l’est pas, elle n’est pas forcément fausse : votre correcteur vous donnera des explications.',
    nekorektebla:
      'Cet exercice ne peut pas être corrigé automatiquement. Votre correcteur vous donnera des explications sur vos réponses.',
    ekzemploj: 'Exemples :',
    bone: 'Bonne réponse',
    eraro: 'Réponse non enregistrée, réessayez.',
  },
  eo: {
    titolo: 'EKZERCO',
    x2u: 'Por la ĉapelitaj literoj, tajpu la literon kaj x : cx, sx, ux… donas ĉ, ŝ, ŭ…',
    korektebla:
      'Pluraj respondoj ĝustas. Se vi respondas unu el ili, ĝi verdiĝos. Se via respondo ne verdiĝas, tio ne signifas ke vi eraris : via korektanto klarigos al vi.',
    nekorektebla: 'Tiu ekzerco ne aŭtomate korekteblas. Via korektanto klarigos al vi ĉu viaj respondoj ĝustas aŭ ne.',
    ekzemploj: 'Ekzemploj :',
    bone: 'Ĝusta respondo',
    eraro: 'Respondo ne registrita, reprovu.',
  },
}

const LONGAJ = ['traduko-2', 'verkado-2', 'stelo-2']

export function Ekzerco({ ekzerco, legebla }: { ekzerco: EkzercoT; legebla?: boolean }) {
  const t = TEKSTOJ[ekzerco.lingvo]
  return (
    <View
      style={{ borderWidth: 2, borderStyle: 'dotted', borderColor: '#64B5F6', borderRadius: 6, padding: 12, gap: 10, marginVertical: 8 }}
      testID={`ekzerco-${ekzerco.id}`}
    >
      <Text style={[stiloj.teksto, { color: koloroj.blua }]}>
        <Text style={{ fontWeight: '700' }}>{t.titolo}</Text> : <HtmlTeksto html={ekzerco.komando} />
      </Text>
      {ekzerco.komando_detalo && <HtmlTeksto html={ekzerco.komando_detalo} />}
      {!legebla && ekzerco.x2u && <Text style={stiloj.eta}>{t.x2u}</Text>}
      {!legebla && <Text style={stiloj.eta}>{ekzerco.korektebla ? t.korektebla : t.nekorektebla}</Text>}
      {ekzerco.ekzemplo && (
        <View style={{ backgroundColor: koloroj.helgriza, padding: 8, borderRadius: 4 }}>
          <Text style={[stiloj.eta, { fontStyle: 'italic' }]}>{t.ekzemploj}</Text>
          <HtmlTeksto html={ekzerco.ekzemplo} />
        </View>
      )}
      {ekzerco.demandoj.map((d) => (
        <Demando key={d.id} demando={d} typo={ekzerco.typo} x2u={ekzerco.x2u} t={t} legebla={legebla} />
      ))}
    </View>
  )
}

type Tekstoj = (typeof TEKSTOJ)['fr']

function Demando({ demando, typo, x2u, t, legebla }: { demando: DemandoT; typo: string; x2u: boolean; t: Tekstoj; legebla?: boolean }) {
  const qc = useQueryClient()
  const respondi = useRespondi()
  const [gxusta, setGxusta] = useState(demando.gxusta)
  const [eraro, setEraro] = useState(false)
  const sendita = useRef(demando.respondo !== null ? malkodi(demando.respondo) : null)
  const atendata = useRef<string | null>(null)

  // une seule requête à la fois par question : une réponse plus ancienne ne doit pas écraser la dernière
  function registri(respondo: string) {
    if (legebla || respondo.trim() === '' || respondo === sendita.current) return
    if (respondi.isPending) {
      atendata.current = respondo
      return
    }
    sendita.current = respondo
    respondi.mutate(
      { ekzercero_id: demando.id, respondo },
      {
        onSuccess: (r) => {
          setEraro(false)
          setGxusta(r.gxusta)
          qc.invalidateQueries({ queryKey: ['resumo'] })
        },
        onError: () => {
          sendita.current = null
          setEraro(true)
        },
        onSettled: () => {
          const sekva = atendata.current
          atendata.current = null
          if (sekva !== null) registri(sekva)
        },
      },
    )
  }

  const bone = demando.korektebla && gxusta === true
  return (
    <View style={{ gap: 6, paddingTop: 6, borderTopWidth: 1, borderTopColor: koloroj.helgriza }} testID={`demando-${demando.id}`}>
      {demando.partoj ? (
        <Frazo demando={demando} x2u={x2u} legebla={legebla} bone={bone} registri={registri} />
      ) : (
        <>
          <Text style={stiloj.teksto}>
            {bone && <Text style={{ color: koloroj.verda }} accessibilityLabel={t.bone}>✓ </Text>}
            {demando.numero}. <HtmlTeksto html={demando.demando} />
            {demando.poentoj ? <Text style={stiloj.eta}> ({demando.poentoj} {demando.poentoj > 1 ? 'poentoj' : 'poento'})</Text> : null}
          </Text>
          {demando.bildo && (
            <Image
              source={{ uri: retadreso(demando.bildo) }}
              style={{ width: '100%', maxWidth: 400, aspectRatio: 4 / 3, alignSelf: 'center' }}
              resizeMode="contain"
            />
          )}
          {demando.elektoj ? (
            <Elektoj demando={demando} legebla={legebla} registri={registri} />
          ) : (
            <Kampo demando={demando} longa={LONGAJ.includes(typo)} x2u={x2u} legebla={legebla} bone={bone} registri={registri} />
          )}
        </>
      )}
      {eraro && <Text style={stiloj.eraro}>{t.eraro}</Text>}
      {demando.korekto && (
        <View style={{ backgroundColor: koloroj.helverda, padding: 8, borderRadius: 4 }} testID={`korekto-${demando.id}`}>
          <HtmlTeksto html={demando.korekto} />
        </View>
      )}
    </View>
  )
}

function Kampo({
  demando,
  longa,
  x2u,
  legebla,
  bone,
  registri,
}: {
  demando: DemandoT
  longa: boolean
  x2u: boolean
  legebla?: boolean
  bone: boolean
  registri: (r: string) => void
}) {
  const [valoro, setValoro] = useState(malkodi(demando.respondo ?? demando.respondmodelo ?? ''))
  if (legebla) {
    return <Text style={[stiloj.teksto, { fontStyle: 'italic' }]}>{valoro || '—'}</Text>
  }
  return (
    <EoEnigo
      valoro={valoro}
      onSxangxo={setValoro}
      x2u={x2u}
      multiline={longa}
      numberOfLines={longa ? 5 : 1}
      accessibilityLabel={`Réponse ${demando.numero}`}
      style={[longa && { minHeight: 110, textAlignVertical: 'top' }, bone && { borderColor: koloroj.verda, borderWidth: 2 }]}
      onBlur={() => registri(valoro)}
      onSubmitEditing={longa ? undefined : () => registri(valoro)}
    />
  )
}

function Elektoj({ demando, legebla, registri }: { demando: DemandoT; legebla?: boolean; registri: (r: string) => void }) {
  const [elektita, setElektita] = useState(demando.respondo !== null ? malkodi(demando.respondo) : null)
  return (
    <View style={{ gap: 6 }} accessibilityRole="radiogroup">
      {demando.elektoj!.map((elekto) => {
        const jes = elekto === elektita
        return (
          <Pressable
            key={elekto}
            accessibilityRole="radio"
            accessibilityState={{ checked: jes, disabled: legebla }}
            disabled={legebla}
            onPress={() => {
              setElektita(elekto)
              registri(elekto)
            }}
            style={{ flexDirection: 'row', alignItems: 'center', gap: 8, paddingVertical: 4 }}
          >
            <View
              style={{
                width: 20,
                height: 20,
                borderRadius: 10,
                borderWidth: 2,
                borderColor: koloroj.blua,
                alignItems: 'center',
                justifyContent: 'center',
              }}
            >
              {jes && <View style={{ width: 10, height: 10, borderRadius: 5, backgroundColor: koloroj.blua }} />}
            </View>
            <Text style={stiloj.teksto}>{elekto.trim()}</Text>
          </Pressable>
        )
      })}
    </View>
  )
}

// Phrase à trous (plenigu) ou à menus (elektlisto) : la réponse est la phrase complète, recomposée comme le fait
// frazoTeksto() dans js/ikurso.js (espaces regroupées).
function Frazo({
  demando,
  x2u,
  legebla,
  bone,
  registri,
}: {
  demando: DemandoT
  x2u: boolean
  legebla?: boolean
  bone: boolean
  registri: (r: string) => void
}) {
  const partoj = demando.partoj!
  const kampoj = partoj.filter((p) => p.tipo !== 'teksto').length
  const [valoroj, setValoroj] = useState<string[]>(() =>
    Array.from({ length: kampoj }, (_, i) => demando.valoroj?.[i] ?? ''),
  )
  const [malfermita, setMalfermita] = useState<number | null>(null)

  function frazo(v: string[]) {
    let n = 0
    return partoj
      .map((p) => (p.tipo === 'teksto' ? plataTeksto(p.teksto ?? '') : v[n++]))
      .join('')
      .replace(/[\s  ]+/g, ' ')
      .trim()
  }

  function sendi(v: string[]) {
    // un menu laissé vide : la phrase n'est pas finie
    let n = 0
    const menuoVaka = partoj.some((p) => p.tipo !== 'teksto' && v[n++] === '' && p.tipo === 'elekto')
    if (!menuoVaka) registri(frazo(v))
  }

  function meti(i: number, valoro: string) {
    const v = valoroj.map((x, j) => (j === i ? valoro : x))
    setValoroj(v)
    return v
  }

  let n = 0
  return (
    <View style={{ gap: 6 }}>
      <View style={{ flexDirection: 'row', flexWrap: 'wrap', alignItems: 'center', columnGap: 4, rowGap: 6 }}>
        {bone && <Text style={{ color: koloroj.verda }}>✓</Text>}
        <Text style={stiloj.teksto}>{demando.numero}.</Text>
        {partoj.map((p, j) => {
          if (p.tipo === 'teksto') {
            return <HtmlTeksto key={j} html={p.teksto ?? ''} />
          }
          const i = n++
          if (legebla) {
            return (
              <Text key={j} style={[stiloj.teksto, { fontStyle: 'italic', textDecorationLine: 'underline' }]}>
                {valoroj[i] || '…'}
              </Text>
            )
          }
          if (p.tipo === 'truo') {
            return (
              <View key={j} style={{ minWidth: 70 }}>
                <EoEnigo
                  valoro={valoroj[i]}
                  onSxangxo={(v) => meti(i, v)}
                  x2u={x2u}
                  accessibilityLabel={`mot à compléter n° ${i + 1}`}
                  style={{ paddingVertical: 4, paddingHorizontal: 8, minWidth: 70 }}
                  onBlur={() => sendi(valoroj)}
                />
              </View>
            )
          }
          return (
            <Pressable
              key={j}
              accessibilityRole="button"
              accessibilityLabel={`choix n° ${i + 1}`}
              onPress={() => setMalfermita(malfermita === i ? null : i)}
              style={{ borderWidth: 1, borderColor: '#bdbdbd', borderRadius: 6, paddingHorizontal: 10, paddingVertical: 4, backgroundColor: koloroj.blanka }}
            >
              <Text style={stiloj.teksto}>{valoroj[i] || '…'} ▾</Text>
            </Pressable>
          )
        })}
      </View>
      {malfermita !== null && (
        <View style={{ flexDirection: 'row', flexWrap: 'wrap', gap: 6 }}>
          {(partoj.filter((p) => p.tipo !== 'teksto')[malfermita].elektoj ?? []).map((elekto) => (
            <Pressable
              key={elekto}
              accessibilityRole="button"
              onPress={() => {
                const v = meti(malfermita, elekto)
                setMalfermita(null)
                sendi(v)
              }}
              style={{ backgroundColor: koloroj.helblua, borderRadius: 6, paddingHorizontal: 12, paddingVertical: 6 }}
            >
              <Text style={[stiloj.teksto, { color: koloroj.malhelblua }]}>{elekto}</Text>
            </Pressable>
          ))}
        </View>
      )}
    </View>
  )
}
