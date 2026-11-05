// Choix du cours pour commencer sans compte (#1089) : le Cours en 10 leçons ou Gerda malaperis
// (Paŝoj est réservé aux élèves inscrits). Le choix crée l'invité, puis ouvre la première section du cours.
import { useState } from 'react'
import { Pressable, ScrollView, Text, View } from 'react-native'
import type { KursoKodo } from '@/api/demandoj'
import { useSeanco } from '@/seanco'
import { koloroj, stiloj } from '@/stiloj'

const KURSOJ: { kodo: KursoKodo; nomo: string; priskribo: string; detaloj: string }[] = [
  {
    kodo: 'CG',
    nomo: 'Cours en 10 leçons',
    priskribo: 'Toute la grammaire de base, de l’alphabet aux premières phrases. Pour les vrais débutants.',
    detaloj: '10 leçons · exercices corrigés automatiquement',
  },
  {
    kodo: 'GR',
    nomo: 'Gerda malaperis',
    priskribo: 'Un roman policier écrit pour apprendre : on progresse en lisant une histoire, chapitre après chapitre.',
    detaloj: '25 chapitres · pour qui connaît les bases',
  },
]

export default function Elekti() {
  const { komenciGaste } = useSeanco()
  const [komencanto, setKomencanto] = useState(true)
  const [sendata, setSendata] = useState<KursoKodo | null>(null)
  const [eraro, setEraro] = useState<string | null>(null)
  const konsilata: KursoKodo = komencanto ? 'CG' : 'GR'

  async function komenci(kodo: KursoKodo) {
    setSendata(kodo)
    setEraro(null)
    const mesagxo = await komenciGaste(kodo)
    // si tout va bien, l'écran disparaît : l'invité passe aux écrans de l'élève
    if (mesagxo) {
      setEraro(mesagxo)
      setSendata(null)
    }
  }

  return (
    <ScrollView style={stiloj.ekrano} contentContainerStyle={[stiloj.enhavo, { gap: 16 }]}>
      <Text style={stiloj.titolo} accessibilityRole="header">
        Avez-vous déjà appris l’espéranto ?
      </Text>
      <View style={{ flexDirection: 'row', gap: 8 }} accessibilityRole="radiogroup">
        {[
          { teksto: 'Non, je débute', valoro: true },
          { teksto: 'Un peu', valoro: false },
        ].map((r) => {
          const elektita = komencanto === r.valoro
          return (
            <Pressable
              key={r.teksto}
              accessibilityRole="radio"
              accessibilityState={{ checked: elektita }}
              onPress={() => setKomencanto(r.valoro)}
              style={{
                flex: 1,
                minHeight: 44,
                borderRadius: 999,
                borderWidth: 1,
                borderColor: elektita ? koloroj.primara : '#989490',
                backgroundColor: elektita ? koloroj.primara : koloroj.blanka,
                alignItems: 'center',
                justifyContent: 'center',
              }}
            >
              <Text style={{ fontSize: 15, fontWeight: '600', color: elektita ? koloroj.blanka : koloroj.primara }}>{r.teksto}</Text>
            </Pressable>
          )
        })}
      </View>
      {KURSOJ.map((k) => {
        const konsilita = k.kodo === konsilata
        return (
          <Pressable
            key={k.kodo}
            accessibilityRole="button"
            accessibilityLabel={`Commencer ${k.nomo}`}
            disabled={sendata !== null}
            onPress={() => komenci(k.kodo)}
            style={({ pressed }) => ({
              backgroundColor: koloroj.blanka,
              borderRadius: 12,
              padding: 18,
              gap: 8,
              borderWidth: konsilita ? 2 : 1,
              borderColor: konsilita ? koloroj.primara : koloroj.helgriza,
              opacity: pressed || (sendata !== null && sendata !== k.kodo) ? 0.7 : 1,
            })}
          >
            <View style={{ flexDirection: 'row', justifyContent: 'space-between', alignItems: 'center', gap: 8 }}>
              <Text style={{ fontSize: 18, fontWeight: '700', color: koloroj.primara }}>{k.nomo}</Text>
              {konsilita && (
                <Text
                  style={{
                    fontSize: 12,
                    fontWeight: '700',
                    color: koloroj.blanka,
                    backgroundColor: koloroj.primara,
                    paddingHorizontal: 10,
                    paddingVertical: 3,
                    borderRadius: 999,
                    overflow: 'hidden',
                  }}
                >
                  Conseillé
                </Text>
              )}
            </View>
            <Text style={stiloj.teksto}>{k.priskribo}</Text>
            <Text style={stiloj.eta}>{sendata === k.kodo ? 'Ouverture du cours…' : k.detaloj}</Text>
          </Pressable>
        )
      })}
      {eraro && <Text style={stiloj.eraro}>{eraro}</Text>}
      <Text style={stiloj.eta}>
        Pas besoin de compte pour commencer : vous le créerez quand vous voudrez être corrigé par un correcteur.
      </Text>
    </ScrollView>
  )
}
