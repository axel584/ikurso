// Accueil de l'application, sans compte (#1089) : commencer le cours tout de suite, ou se connecter.
import { Pressable, ScrollView, Text, View } from 'react-native'
import { router } from 'expo-router'
import { koloroj } from '@/stiloj'

export default function Bonvenon() {
  return (
    <ScrollView
      style={{ flex: 1, backgroundColor: koloroj.primara }}
      contentContainerStyle={{ flexGrow: 1, padding: 28, paddingTop: 96, gap: 24, maxWidth: 480, width: '100%', alignSelf: 'center' }}
    >
      <View style={{ flexGrow: 1, alignItems: 'center', justifyContent: 'center', gap: 20 }}>
        {/* logo du site (bildoj/largelogo.png) */}
        <Text
          accessibilityRole="header"
          style={{ fontFamily: 'NothingYouCouldDo_400Regular', fontSize: 76, color: koloroj.blanka, letterSpacing: -3 }}
        >
          iKurso
        </Text>
        <Text style={{ color: koloroj.blanka, fontSize: 20, fontWeight: '600', textAlign: 'center', lineHeight: 28 }}>
          Apprenez l’espéranto gratuitement, à votre rythme
        </Text>
        <Text style={{ color: koloroj.helgriza, fontSize: 15, textAlign: 'center', lineHeight: 22, maxWidth: 300 }}>
          Des leçons courtes, des exercices corrigés tout de suite, et un correcteur bénévole qui suit votre progression.
        </Text>
      </View>
      <View style={{ gap: 14 }}>
        <Pressable
          accessibilityRole="button"
          onPress={() => router.push('/elekti')}
          style={({ pressed }) => ({ backgroundColor: koloroj.blua, borderRadius: 10, padding: 16, alignItems: 'center', opacity: pressed ? 0.85 : 1 })}
        >
          <Text style={{ color: koloroj.blanka, fontSize: 17, fontWeight: '700' }}>Commencer le cours</Text>
        </Pressable>
        <Pressable
          accessibilityRole="button"
          onPress={() => router.push('/ensaluti')}
          style={({ pressed }) => ({ borderColor: '#989490', borderWidth: 1, borderRadius: 10, padding: 12, alignItems: 'center', opacity: pressed ? 0.85 : 1 })}
        >
          <Text style={{ color: koloroj.blanka, fontSize: 15, fontWeight: '600' }}>J’ai déjà un compte</Text>
        </Pressable>
        <Text style={{ color: '#CBC9C7', fontSize: 13, textAlign: 'center' }}>Sans inscription pour commencer</Text>
      </View>
    </ScrollView>
  )
}
