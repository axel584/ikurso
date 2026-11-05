// Application élève lernejo (#1089) : connexion, puis les écrans de l'élève.
import { useState } from 'react'
import { Stack, SplashScreen } from 'expo-router'
import { StatusBar } from 'expo-status-bar'
import { useSafeAreaInsets } from 'react-native-safe-area-context'
import { useFonts } from 'expo-font'
import { NothingYouCouldDo_400Regular } from '@expo-google-fonts/nothing-you-could-do'
import { QueryClient, QueryClientProvider } from '@tanstack/react-query'
import { ApiEraro } from '@/api/kliento'
import { SonoProvizanto } from '@/komponantoj/Sono'
import { SeancoProvizanto, useSeanco } from '@/seanco'
import { koloroj } from '@/stiloj'

SplashScreen.preventAutoHideAsync()

export default function Radiko() {
  const [qc] = useState(
    () =>
      new QueryClient({
        defaultOptions: {
          // une erreur de l'API (404, 401…) ne se corrige pas en réessayant
          queries: { retry: (n, eraro) => !(eraro instanceof ApiEraro) && n < 2 },
        },
      }),
  )
  return (
    <QueryClientProvider client={qc}>
      <SeancoProvizanto>
        <SonoProvizanto>
          <StatusBar style="light" />
          <Navigilo />
        </SonoProvizanto>
      </SeancoProvizanto>
    </QueryClientProvider>
  )
}

function Navigilo() {
  const { sxargxas, ensalutita, gasto } = useSeanco()
  // police du logo iKurso du site ; sans elle (hors ligne…), le logo s'affiche dans la police du système
  const [tiparoPreta, tiparoEraro] = useFonts({ NothingYouCouldDo_400Regular })
  // l'application dessine sous les barres d'Android (edge-to-edge) : le bas des écrans reste au-dessus des boutons
  const margxeno = useSafeAreaInsets()
  if (sxargxas || !(tiparoPreta || tiparoEraro)) return null
  SplashScreen.hide()
  return (
    <Stack
      screenOptions={{
        headerStyle: { backgroundColor: koloroj.primara },
        headerTintColor: koloroj.blanka,
        contentStyle: { backgroundColor: koloroj.fono, paddingBottom: margxeno.bottom },
      }}
    >
      {/* sans jetons, les adresses de l'élève mènent à l'accueil */}
      <Stack.Protected guard={ensalutita} redirectTo="/bonvenon">
        <Stack.Screen name="(lernanto)" options={{ headerShown: false, contentStyle: { backgroundColor: koloroj.fono } }} />
      </Stack.Protected>
      {/* arrivée dans l'application (#1089) : l'accueil, puis le choix du cours qui crée l'invité */}
      <Stack.Protected guard={!ensalutita}>
        <Stack.Screen
          name="bonvenon"
          options={{ headerShown: false, contentStyle: { backgroundColor: koloroj.primara, paddingBottom: margxeno.bottom } }}
        />
        <Stack.Screen name="elekti" options={{ title: 'Par où commencer ?' }} />
      </Stack.Protected>
      {/* l'invité se connecte à son compte (son travail le rejoint) ou en crée un */}
      <Stack.Protected guard={!ensalutita || gasto}>
        <Stack.Screen
          name="ensaluti"
          options={{
            title: 'Connexion',
            headerShown: gasto,
            contentStyle: { backgroundColor: koloroj.fono, paddingBottom: margxeno.bottom, paddingTop: gasto ? 0 : margxeno.top },
          }}
        />
      </Stack.Protected>
      <Stack.Protected guard={gasto}>
        <Stack.Screen name="aligxi" options={{ title: 'Créer mon compte' }} />
      </Stack.Protected>
    </Stack>
  )
}
