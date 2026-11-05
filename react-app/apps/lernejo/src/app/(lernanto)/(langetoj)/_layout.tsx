// Onglets : cours, révision du vocabulaire, profil.
import { Text, type ColorValue } from 'react-native'
import { Tabs } from 'expo-router'
import { koloroj } from '@/stiloj'

function Piktogramo({ signo, koloro }: { signo: string; koloro: ColorValue }) {
  return <Text style={{ fontSize: 20, color: koloro }}>{signo}</Text>
}

export default function Langetoj() {
  return (
    <Tabs
      screenOptions={{
        headerStyle: { backgroundColor: koloroj.primara },
        headerTintColor: koloroj.blanka,
        tabBarActiveTintColor: koloroj.primara,
        sceneStyle: { backgroundColor: koloroj.fono },
      }}
    >
      <Tabs.Screen
        name="index"
        options={{ title: 'Mes cours', tabBarLabel: 'Cours', tabBarIcon: ({ color }) => <Piktogramo signo="📚" koloro={color} /> }}
      />
      <Tabs.Screen
        name="revizio"
        options={{ title: 'Révision du vocabulaire', tabBarLabel: 'Révision', tabBarIcon: ({ color }) => <Piktogramo signo="🔁" koloro={color} /> }}
      />
      <Tabs.Screen
        name="profilo"
        options={{ title: 'Profil', tabBarIcon: ({ color }) => <Piktogramo signo="👤" koloro={color} /> }}
      />
    </Tabs>
  )
}
