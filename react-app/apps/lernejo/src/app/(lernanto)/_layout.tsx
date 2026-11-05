// Écrans de l'élève connecté : les onglets, puis les cours, sections et corrections par-dessus.
import { Stack } from 'expo-router'
import { koloroj } from '@/stiloj'

export const unstable_settings = {
  anchor: '(langetoj)',
}

export default function LernantoArangxo() {
  return (
    <Stack
      screenOptions={{
        headerStyle: { backgroundColor: koloroj.blua },
        headerTintColor: koloroj.blanka,
        headerBackTitle: 'Retour',
        contentStyle: { backgroundColor: koloroj.fono },
      }}
    >
      <Stack.Screen name="(langetoj)" options={{ headerShown: false }} />
      <Stack.Screen name="kurso/[kodo]" options={{ title: 'Cours' }} />
      <Stack.Screen name="sekcio/[id]" options={{ title: 'Section' }} />
      <Stack.Screen name="leciono/[kurso]/[numero]" options={{ title: 'Correction' }} />
    </Stack>
  )
}
