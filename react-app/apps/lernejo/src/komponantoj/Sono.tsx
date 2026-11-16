// Prononciations et enregistrements des leçons (expo-audio) : un seul lecteur pour toute l'application,
// un nouveau son arrête le précédent.
// Petit son discret des bonnes réponses (QCM, exercices) : son propre lecteur, pour ne pas couper une
// prononciation en cours ; désactivable dans le profil (réglage gardé sur l'appareil).
import { createContext, use, useCallback, useEffect, useMemo, useState, type PropsWithChildren } from 'react'
import { Switch, Text, View } from 'react-native'
import { setAudioModeAsync, useAudioPlayer } from 'expo-audio'
import { retadreso } from '@/api/kliento'
import { legiAgordon, skribiAgordon } from '@/api/agordoj'
import { koloroj, stiloj } from '@/stiloj'

const SonoKunteksto = createContext<(vojo: string) => void>(() => {})
const BoneKunteksto = createContext<{ ludiBone: () => void; sxaltita: boolean; sxalti: (jes: boolean) => void }>({
  ludiBone: () => {},
  sxaltita: true,
  sxalti: () => {},
})

const AGORDO_BONE = 'sono_bone'
const VOLUMENO_BONE = 0.5

export function useLudi() {
  return use(SonoKunteksto)
}

// son de la bonne réponse (rien si l'élève l'a coupé)
export function useLudiBone() {
  return use(BoneKunteksto).ludiBone
}

// le son s'entend même quand le téléphone est en silencieux, comme une vidéo
setAudioModeAsync({ playsInSilentMode: true }).catch(() => {})

export function SonoProvizanto({ children }: PropsWithChildren) {
  const ludilo = useAudioPlayer(null)
  const ludi = useCallback(
    (vojo: string) => {
      ludilo.replace({ uri: retadreso(vojo) })
      ludilo.play()
    },
    [ludilo],
  )

  const boneLudilo = useAudioPlayer(require('../../assets/sonoj/bone.mp3'))
  const [sxaltita, setSxaltita] = useState(true)
  useEffect(() => {
    boneLudilo.volume = VOLUMENO_BONE
  }, [boneLudilo])
  useEffect(() => {
    legiAgordon(AGORDO_BONE)
      .then((v) => setSxaltita(v !== '0'))
      .catch(() => {})
  }, [])
  const ludiBone = useCallback(() => {
    if (!sxaltita) return
    try {
      boneLudilo.seekTo(0)
      boneLudilo.play()
    } catch {
      // un son raté ne doit jamais gêner l'exercice
    }
  }, [boneLudilo, sxaltita])
  const sxalti = useCallback((jes: boolean) => {
    setSxaltita(jes)
    void skribiAgordon(AGORDO_BONE, jes ? '1' : '0')
  }, [])
  const bone = useMemo(() => ({ ludiBone, sxaltita, sxalti }), [ludiBone, sxaltita, sxalti])

  return (
    <SonoKunteksto value={ludi}>
      <BoneKunteksto value={bone}>{children}</BoneKunteksto>
    </SonoKunteksto>
  )
}

// Réglage du profil : couper le son des bonnes réponses
export function BoneSonoAgordo() {
  const { sxaltita, sxalti } = use(BoneKunteksto)
  return (
    <View style={[stiloj.karto, { flexDirection: 'row', alignItems: 'center', gap: 12 }]} testID="sono-bone">
      <View style={{ flex: 1, gap: 4 }}>
        <Text style={stiloj.subtitolo}>Son des bonnes réponses</Text>
        <Text style={stiloj.eta}>Un petit son quand vous trouvez la bonne réponse à un QCM ou à un exercice.</Text>
      </View>
      <Switch
        accessibilityLabel="Son des bonnes réponses"
        value={sxaltita}
        onValueChange={sxalti}
        trackColor={{ true: koloroj.blua, false: koloroj.helgriza }}
        thumbColor={koloroj.blanka}
      />
    </View>
  )
}
