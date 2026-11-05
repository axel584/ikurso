// Connexion de l'élève, avec l'identifiant (ou l'adresse e-mail) et le mot de passe du site.
import { useState } from 'react'
import { KeyboardAvoidingView, Platform, ScrollView, Text, TextInput, View } from 'react-native'
import * as Linking from 'expo-linking'
import { router } from 'expo-router'
import { retadreso } from '@/api/kliento'
import { Butono } from '@/komponantoj/Bazaj'
import { useSeanco } from '@/seanco'
import { koloroj, stiloj } from '@/stiloj'

export default function Ensaluti() {
  const { ensaluti, gasto } = useSeanco()
  const [identigilo, setIdentigilo] = useState('')
  const [pasvorto, setPasvorto] = useState('')
  const [eraro, setEraro] = useState<string | null>(null)
  const [sendata, setSendata] = useState(false)

  async function sendi() {
    if (!identigilo.trim() || !pasvorto) {
      setEraro('Indiquez votre identifiant et votre mot de passe.')
      return
    }
    setSendata(true)
    setEraro(null)
    const mesagxo = await ensaluti(identigilo.trim(), pasvorto)
    setSendata(false)
    if (mesagxo) setEraro(mesagxo)
  }

  return (
    <KeyboardAvoidingView style={stiloj.ekrano} behavior={Platform.OS === 'ios' ? 'padding' : undefined}>
      <ScrollView contentContainerStyle={[stiloj.centro, { gap: 16 }]} keyboardShouldPersistTaps="handled">
        {/* logo du site (bildoj/largelogo.png) */}
        <View style={{ backgroundColor: koloroj.primara, borderRadius: 16, paddingHorizontal: 28, paddingVertical: 12 }}>
          <Text
            accessibilityRole="header"
            style={{ fontFamily: 'NothingYouCouldDo_400Regular', fontSize: 52, color: koloroj.blanka, letterSpacing: -2 }}
          >
            iKurso
          </Text>
        </View>
        <Text style={[stiloj.teksto, { textAlign: 'center' }]}>Cours d’espéranto en ligne, avec un correcteur</Text>
        <View style={[stiloj.karto, { width: '100%', maxWidth: 400, gap: 12 }]}>
          <Text style={stiloj.subtitolo}>Connexion</Text>
          <TextInput
            style={stiloj.enigo}
            placeholder="Identifiant ou adresse e-mail"
            accessibilityLabel="Identifiant ou adresse e-mail"
            autoCapitalize="none"
            autoCorrect={false}
            autoComplete="username"
            textContentType="username"
            value={identigilo}
            onChangeText={setIdentigilo}
            onSubmitEditing={sendi}
          />
          <TextInput
            style={stiloj.enigo}
            placeholder="Mot de passe"
            accessibilityLabel="Mot de passe"
            secureTextEntry
            autoComplete="current-password"
            textContentType="password"
            value={pasvorto}
            onChangeText={setPasvorto}
            onSubmitEditing={sendi}
          />
          {eraro && <Text style={stiloj.eraro}>{eraro}</Text>}
          <Butono teksto={sendata ? 'Connexion…' : 'Se connecter'} onPress={sendi} malsxaltita={sendata} />
        </View>
        {gasto ? (
          <Text style={[stiloj.eta, { textAlign: 'center', maxWidth: 400 }]}>
            Ce que vous avez fait en invité sera ajouté à votre compte.
          </Text>
        ) : (
          <Text style={[stiloj.eta, { textAlign: 'center', maxWidth: 400 }]}>
            Pas encore de compte ?{' '}
            <Text
              accessibilityRole="link"
              style={{ color: koloroj.blua }}
              onPress={() => (router.canGoBack() ? router.back() : router.replace('/bonvenon'))}
            >
              Commencer le cours sans compte
            </Text>
          </Text>
        )}
        <Text style={[stiloj.eta, { textAlign: 'center', maxWidth: 400 }]}>
          Identifiant ou mot de passe oublié ?{' '}
          <Text accessibilityRole="link" style={{ color: koloroj.blua }} onPress={() => Linking.openURL(retadreso('index.php'))}>
            Rendez-vous sur le site
          </Text>
          .
        </Text>
      </ScrollView>
    </KeyboardAvoidingView>
  )
}
