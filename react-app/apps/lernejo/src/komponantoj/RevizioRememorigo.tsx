// Réglage du rappel de révision du vocabulaire (#1120), dans le profil : activé ou non, et l'heure (9 h par défaut).
import { useEffect, useState } from 'react'
import { Linking, Pressable, Switch, Text, View } from 'react-native'
import { legiAgordojn, permeso, skribiAgordojn, subtenata, type RevizioAgordoj } from '@/api/sciigoj'
import { Butono } from '@/komponantoj/Bazaj'
import { koloroj, stiloj } from '@/stiloj'

function HoroButono({ teksto, etikedo, onPress }: { teksto: string; etikedo: string; onPress: () => void }) {
  return (
    <Pressable
      accessibilityRole="button"
      accessibilityLabel={etikedo}
      onPress={onPress}
      style={{ width: 44, height: 44, borderRadius: 22, borderWidth: 1, borderColor: koloroj.helgriza, alignItems: 'center', justifyContent: 'center' }}
    >
      <Text style={[stiloj.subtitolo, { color: koloroj.blua }]}>{teksto}</Text>
    </Pressable>
  )
}

export function RevizioRememorigo() {
  const [agordoj, setAgordoj] = useState<RevizioAgordoj | null>(null)
  const [blokita, setBlokita] = useState(false)

  useEffect(() => {
    if (!subtenata) return
    legiAgordojn().then(setAgordoj)
    permeso(false).then((p) => setBlokita(p.blokita))
  }, [])

  if (!subtenata || !agordoj) return null

  async function sxangxi(novaj: RevizioAgordoj) {
    setAgordoj(novaj)
    if (novaj.sxaltita) setBlokita((await permeso(true)).blokita)
    await skribiAgordojn(novaj)
  }

  const horo = `${agordoj.horo} h`
  return (
    <View style={[stiloj.karto, { gap: 12 }]} testID="revizio-rememorigo">
      <View style={{ flexDirection: 'row', alignItems: 'center', gap: 12 }}>
        <Text style={[stiloj.subtitolo, { flex: 1 }]}>Rappel de révision</Text>
        <Switch
          accessibilityLabel="Me rappeler de réviser mon vocabulaire"
          value={agordoj.sxaltita}
          onValueChange={(sxaltita) => void sxangxi({ ...agordoj, sxaltita })}
          trackColor={{ true: koloroj.blua, false: koloroj.helgriza }}
          thumbColor={koloroj.blanka}
        />
      </View>
      {agordoj.sxaltita ? (
        <>
          <Text style={stiloj.teksto}>Une notification à {horo} les jours où des mots de vocabulaire sont à réviser.</Text>
          <View style={{ flexDirection: 'row', alignItems: 'center', justifyContent: 'center', gap: 24 }}>
            <HoroButono teksto="−" etikedo="Une heure plus tôt" onPress={() => void sxangxi({ ...agordoj, horo: (agordoj.horo + 23) % 24 })} />
            <Text accessibilityLiveRegion="polite" style={[stiloj.titolo, { minWidth: 70, textAlign: 'center' }]}>
              {horo}
            </Text>
            <HoroButono teksto="+" etikedo="Une heure plus tard" onPress={() => void sxangxi({ ...agordoj, horo: (agordoj.horo + 1) % 24 })} />
          </View>
          {blokita && (
            <>
              <Text style={stiloj.eraro}>Les notifications d’iKurso sont bloquées dans les réglages du téléphone.</Text>
              <Butono dua teksto="Ouvrir les réglages" onPress={() => void Linking.openSettings()} />
            </>
          )}
        </>
      ) : (
        <Text style={stiloj.eta}>Aucun rappel : pensez à revenir réviser vos mots.</Text>
      )}
    </View>
  )
}
