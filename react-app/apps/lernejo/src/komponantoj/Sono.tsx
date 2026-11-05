// Prononciations et enregistrements des leçons (expo-audio) : un seul lecteur pour toute l'application,
// un nouveau son arrête le précédent.
import { createContext, use, useCallback, type PropsWithChildren } from 'react'
import { setAudioModeAsync, useAudioPlayer } from 'expo-audio'
import { retadreso } from '@/api/kliento'

const SonoKunteksto = createContext<(vojo: string) => void>(() => {})

export function useLudi() {
  return use(SonoKunteksto)
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
  return <SonoKunteksto value={ludi}>{children}</SonoKunteksto>
}
