// Onglet « Cours » : la liste des cours, puis le sommaire d'un cours, ses sections et les corrections,
// empilés dans l'onglet pour garder la barre des onglets visible partout.
import { Stack } from 'expo-router'
import { koloroj } from '@/stiloj'

export const unstable_settings = {
  // une section ouverte directement (lien, invité qui commence) garde la liste des cours en dessous
  anchor: 'index',
}

export default function KursojArangxo() {
  return (
    <Stack
      screenOptions={{
        headerStyle: { backgroundColor: koloroj.primara },
        headerTintColor: koloroj.blanka,
        headerBackTitle: 'Retour',
        // la barre des onglets garde le bas des écrans au-dessus des boutons d'Android
        contentStyle: { backgroundColor: koloroj.fono },
      }}
    >
      <Stack.Screen name="index" options={{ title: 'Mes cours' }} />
      <Stack.Screen name="kurso/[kodo]" options={{ title: 'Cours' }} />
      <Stack.Screen name="sekcio/[id]" options={{ title: 'Section' }} />
      <Stack.Screen name="leciono/[kurso]/[numero]" options={{ title: 'Correction' }} />
    </Stack>
  )
}
