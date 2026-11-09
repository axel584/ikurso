// Appréciation de la leçon, après son envoi au correcteur : mêmes questions que la page konfirmo.php du site
// (taksoDemandoj() de webui.inc.php), en espéranto pour Paŝoj al plena posedo. Lue par les administrateurs.
import { useState } from 'react'
import { Pressable, Text, TextInput, View } from 'react-native'
import { useTakso, type KursoKodo } from '@/api/demandoj'
import { Butono } from './Bazaj'
import { koloroj, stiloj } from '@/stiloj'

type Demando = { nomo: 'intereso' | 'malfacileco'; demando: string; respondoj: [string, string][] }

const TEKSTOJ = {
  fr: {
    titolo: 'Évaluez-nous !',
    enkonduko:
      'Pour nous permettre d’améliorer notre cours, merci de prendre quelques secondes pour nous faire un retour sur la leçon que vous venez d’envoyer. Cette évaluation est destinée aux administrateurs du cours et ne sera pas lue par votre correcteur.',
    komento: 'Laissez un commentaire (optionnel) sur la leçon',
    sendi: 'Envoyer mon appréciation',
    dankon: 'Merci pour votre appréciation !',
    demandoj: [
      {
        nomo: 'intereso',
        demando: 'Quel est votre ressenti sur l’intérêt de cette leçon ?',
        respondoj: [
          ['😴', 'Trop barbant'],
          ['😐', 'Plutôt ennuyeux'],
          ['🙂', 'Moyen'],
          ['😃', 'Assez intéressant'],
          ['🤩', 'Génial ! J’ai adoré !'],
        ],
      },
      {
        nomo: 'malfacileco',
        demando: 'Comment avez-vous trouvé la difficulté de cette leçon ?',
        respondoj: [
          ['🔵', 'Les doigts dans le nez !'],
          ['🟢', 'Assez facile'],
          ['🟡', 'Quelques difficultés, mais dans l’ensemble je m’en suis sorti(e)'],
          ['🟠', 'Assez difficile'],
          ['🔴', 'Trop compliqué. Je m’en suis arraché les cheveux !'],
        ],
      },
    ] as Demando[],
  },
  eo: {
    titolo: 'Taksu la kvaliton de tiu kurso!',
    enkonduko:
      'Por plibonigi tiun kurson, vi povas plenigi tiun formularon (franclingve aŭ esperante) por priskribi kion indos plibonigi. Tiujn informojn ricevos NUR la administrantoj kaj NE via korektanto.',
    komento: '(ne devigata) Lasu mesaĝon',
    sendi: 'Sendi mian takson',
    dankon: 'Dankon pro via takso!',
    demandoj: [
      {
        nomo: 'intereso',
        demando: 'Kiel interesa estis por vi tiu ĉi leciono?',
        respondoj: [
          ['😴', 'Tro enuiga'],
          ['😐', 'Iom enuiga'],
          ['🙂', 'Meza'],
          ['😃', 'Sufiĉe interesa'],
          ['🤩', 'Bonega! Mi ŝategis ĝin!'],
        ],
      },
      {
        nomo: 'malfacileco',
        demando: 'Kiel malfacila estis por vi tiu ĉi leciono?',
        respondoj: [
          ['🔵', 'Facilega!'],
          ['🟢', 'Sufiĉe facila'],
          ['🟡', 'Kelkaj malfacilaĵoj, sed entute mi sukcesis'],
          ['🟠', 'Sufiĉe malfacila'],
          ['🔴', 'Tro komplika! Mi preskaŭ elŝiris miajn harojn!'],
        ],
      },
    ] as Demando[],
  },
}

export function Takso({ kurso, numero }: { kurso: KursoKodo; numero: number }) {
  const t = TEKSTOJ[kurso === 'PP' ? 'eo' : 'fr']
  const takso = useTakso()
  const [notoj, setNotoj] = useState<{ intereso?: number; malfacileco?: number }>({})
  const [komento, setKomento] = useState('')

  if (takso.isSuccess) {
    return (
      <Text style={[stiloj.teksto, { color: koloroj.verda, fontWeight: '600' }]} accessibilityLiveRegion="polite">
        {t.dankon}
      </Text>
    )
  }
  const { intereso, malfacileco } = notoj
  return (
    <View style={{ gap: 10 }} testID="takso">
      <Text style={stiloj.subtitolo}>{t.titolo}</Text>
      <Text style={stiloj.teksto}>{t.enkonduko}</Text>
      {t.demandoj.map((d) => (
        <View key={d.nomo} accessibilityRole="radiogroup" accessibilityLabel={d.demando} style={{ gap: 2 }}>
          <Text style={[stiloj.teksto, { fontWeight: '600' }]}>{d.demando}</Text>
          {d.respondoj.map(([emoji, teksto], i) => {
            const jes = notoj[d.nomo] === i + 1
            return (
              <Pressable
                key={i}
                accessibilityRole="radio"
                accessibilityState={{ checked: jes }}
                accessibilityLabel={teksto}
                onPress={() => setNotoj((n) => ({ ...n, [d.nomo]: i + 1 }))}
                style={{
                  flexDirection: 'row',
                  gap: 8,
                  alignItems: 'center',
                  padding: 6,
                  borderRadius: 6,
                  backgroundColor: jes ? koloroj.blanka : 'transparent',
                }}
              >
                <View
                  style={{
                    width: 18,
                    height: 18,
                    borderRadius: 9,
                    borderWidth: 2,
                    borderColor: koloroj.blua,
                    alignItems: 'center',
                    justifyContent: 'center',
                  }}
                >
                  {jes && <View style={{ width: 8, height: 8, borderRadius: 4, backgroundColor: koloroj.blua }} />}
                </View>
                <Text style={[stiloj.teksto, { flex: 1 }]}>
                  {emoji} {teksto}
                </Text>
              </Pressable>
            )
          })}
        </View>
      ))}
      <TextInput
        style={[stiloj.enigo, { minHeight: 70, textAlignVertical: 'top' }]}
        multiline
        placeholder={t.komento}
        accessibilityLabel={t.komento}
        value={komento}
        onChangeText={setKomento}
      />
      {takso.error && <Text style={stiloj.eraro}>{takso.error.message}</Text>}
      <Butono
        teksto={takso.isPending ? '…' : t.sendi}
        malsxaltita={!intereso || !malfacileco || takso.isPending}
        onPress={() => intereso && malfacileco && takso.mutate({ kurso, numero, intereso, malfacileco, komento })}
      />
    </View>
  )
}
