// Onglets : cours, révision du vocabulaire, profil.
// Icônes Material, comme sur le site (materialize) : couleur de l'onglet, marron quand il est actif, gris sinon.
import MaterialIcons from '@expo/vector-icons/MaterialIcons'
import { Tabs } from 'expo-router'
import type { ColorValue } from 'react-native'
import type { ComponentProps } from 'react'
import { koloroj } from '@/stiloj'

type Nomo = ComponentProps<typeof MaterialIcons>['name']

// les couleurs des onglets sont des chaînes (koloroj)
function piktogramo(nomo: Nomo) {
  return function Piktogramo({ color, size }: { color: ColorValue; size: number }) {
    return <MaterialIcons name={nomo} color={color as string} size={size} />
  }
}

export default function Langetoj() {
  return (
    <Tabs
      screenOptions={{
        headerStyle: { backgroundColor: koloroj.primara },
        headerTintColor: koloroj.blanka,
        tabBarActiveTintColor: koloroj.primara,
        tabBarInactiveTintColor: koloroj.griza,
        sceneStyle: { backgroundColor: koloroj.fono },
      }}
    >
      <Tabs.Screen name="index" options={{ title: 'Mes cours', tabBarLabel: 'Cours', tabBarIcon: piktogramo('menu-book') }} />
      <Tabs.Screen
        name="revizio"
        options={{ title: 'Révision du vocabulaire', tabBarLabel: 'Révision', tabBarIcon: piktogramo('style') }}
      />
      <Tabs.Screen name="profilo" options={{ title: 'Profil', tabBarIcon: piktogramo('perm-identity') }} />
    </Tabs>
  )
}
