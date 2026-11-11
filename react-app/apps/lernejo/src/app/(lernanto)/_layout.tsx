// Écrans de l'élève connecté : les onglets (les cours, sections et corrections sont dans l'onglet « Cours »).
import { useEffect } from 'react'
import { AppState } from 'react-native'
import { Stack, router } from 'expo-router'
import { useSafeAreaInsets } from 'react-native-safe-area-context'
import { datumoj, kliento } from '@/api/kliento'
import { auxskultiSciigojn, planigiRevizion } from '@/api/sciigoj'
import { useSeanco } from '@/seanco'
import { koloroj } from '@/stiloj'

export const unstable_settings = {
  anchor: '(langetoj)',
}

export default function LernantoArangxo() {
  const { komencota, komencis } = useSeanco()
  const margxeno = useSafeAreaInsets()

  // rappels de révision (#1120) : recalculés à chaque retour dans l'application ; la notification touchée ouvre la révision
  useEffect(() => {
    void planigiRevizion()
    const abono = AppState.addEventListener('change', (stato) => {
      if (stato === 'active') void planigiRevizion()
    })
    const malabono = auxskultiSciigojn((url) => router.push(url as '/revizio'))
    return () => {
      abono.remove()
      malabono()
    }
  }, [])

  // le nouvel invité arrive directement dans la première section du cours choisi (#1089),
  // au-dessus du sommaire du cours, dans l'onglet « Cours »
  useEffect(() => {
    if (!komencota) return
    komencis()
    datumoj(kliento.GET('/lernado/kursoj/{kurso}', { params: { path: { kurso: komencota } } }))
      .then((k) => {
        router.push({ pathname: '/kurso/[kodo]', params: { kodo: komencota } })
        const unua = k.lecionoj[0]?.sekcioj[0]?.id
        if (unua) router.push({ pathname: '/sekcio/[id]', params: { id: String(unua) } })
      })
      .catch(() => router.push({ pathname: '/kurso/[kodo]', params: { kodo: komencota } }))
  }, [komencota, komencis])

  return (
    <Stack
      screenOptions={{
        headerStyle: { backgroundColor: koloroj.primara },
        headerTintColor: koloroj.blanka,
        headerBackTitle: 'Retour',
        // bas des écrans au-dessus des boutons d'Android ; la barre des onglets le fait elle-même
        contentStyle: { backgroundColor: koloroj.fono, paddingBottom: margxeno.bottom },
      }}
    >
      <Stack.Screen name="(langetoj)" options={{ headerShown: false, contentStyle: { backgroundColor: koloroj.fono } }} />
      <Stack.Screen name="konfirmi" options={{ title: 'Votre compte' }} />
    </Stack>
  )
}
