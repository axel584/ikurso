// Application élève lernejo (#1089) : connexion, puis les écrans de l'élève.
import { useState } from 'react'
import { Stack, SplashScreen } from 'expo-router'
import { StatusBar } from 'expo-status-bar'
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
  const { sxargxas, ensalutita } = useSeanco()
  if (sxargxas) return null
  SplashScreen.hide()
  return (
    <Stack
      screenOptions={{
        headerStyle: { backgroundColor: koloroj.blua },
        headerTintColor: koloroj.blanka,
        contentStyle: { backgroundColor: koloroj.fono },
      }}
    >
      <Stack.Protected guard={ensalutita}>
        <Stack.Screen name="(lernanto)" options={{ headerShown: false }} />
      </Stack.Protected>
      <Stack.Protected guard={!ensalutita}>
        <Stack.Screen name="ensaluti" options={{ title: 'iKurso', headerShown: false }} />
      </Stack.Protected>
    </Stack>
  )
}
