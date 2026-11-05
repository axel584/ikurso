// Écrans de l'élève connecté : les onglets, puis les cours, sections et corrections par-dessus.
import { useEffect } from 'react'
import { Stack, router } from 'expo-router'
import { datumoj, kliento } from '@/api/kliento'
import { useSeanco } from '@/seanco'
import { koloroj } from '@/stiloj'

export const unstable_settings = {
  anchor: '(langetoj)',
}

export default function LernantoArangxo() {
  const { komencota, komencis } = useSeanco()

  // le nouvel invité arrive directement dans la première section du cours choisi (#1089),
  // par-dessus le sommaire du cours
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
        contentStyle: { backgroundColor: koloroj.fono },
      }}
    >
      <Stack.Screen name="(langetoj)" options={{ headerShown: false }} />
      <Stack.Screen name="kurso/[kodo]" options={{ title: 'Cours' }} />
      <Stack.Screen name="sekcio/[id]" options={{ title: 'Section' }} />
      <Stack.Screen name="leciono/[kurso]/[numero]" options={{ title: 'Correction' }} />
      <Stack.Screen name="konfirmi" options={{ title: 'Votre compte' }} />
    </Stack>
  )
}
