// Petits composants communs : boutons, chargement, erreur.
import type { ReactNode } from 'react'
import { ActivityIndicator, Pressable, Text, View, type StyleProp, type ViewStyle } from 'react-native'
import { koloroj, stiloj } from '@/stiloj'

export function Butono({
  teksto,
  onPress,
  dua,
  malsxaltita,
  stilo,
}: {
  teksto: string
  onPress: () => void
  dua?: boolean
  malsxaltita?: boolean
  stilo?: StyleProp<ViewStyle>
}) {
  return (
    <Pressable
      accessibilityRole="button"
      disabled={malsxaltita}
      onPress={onPress}
      style={({ pressed }) => [dua ? stiloj.duaButono : stiloj.butono, { opacity: malsxaltita ? 0.5 : pressed ? 0.8 : 1 }, stilo]}
    >
      <Text style={dua ? stiloj.duaButonoTeksto : stiloj.butonoTeksto}>{teksto}</Text>
    </Pressable>
  )
}

// Chargement ou erreur d'une requête ; sinon le contenu.
export function Stato({
  sxargxas,
  eraro,
  children,
}: {
  sxargxas: boolean
  eraro: Error | null
  children?: ReactNode
}) {
  if (sxargxas) {
    return (
      <View style={stiloj.centro}>
        <ActivityIndicator color={koloroj.blua} size="large" />
      </View>
    )
  }
  if (eraro) {
    return (
      <View style={stiloj.centro}>
        <Text style={stiloj.eraro}>{eraro.message}</Text>
      </View>
    )
  }
  return <>{children}</>
}

export function Insigno({ teksto, koloro }: { teksto: string; koloro: string }) {
  return (
    <View style={{ backgroundColor: koloro, borderRadius: 10, paddingHorizontal: 8, paddingVertical: 2, alignSelf: 'flex-start' }}>
      <Text style={{ color: koloroj.blanka, fontSize: 12, fontWeight: '600' }}>{teksto}</Text>
    </View>
  )
}
