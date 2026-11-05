// Création du compte par l'invité (#1089) : son travail est gardé, l'invité devient le compte.
// Comme sur le site (aligxi.php) : identifiant choisi, adresse e-mail et mot de passe, puis un lien d'activation par mail.
import { useState, type ComponentProps } from 'react'
import { KeyboardAvoidingView, Platform, ScrollView, Text, TextInput, View } from 'react-native'
import { router } from 'expo-router'
import { Butono } from '@/komponantoj/Bazaj'
import { useSeanco } from '@/seanco'
import { koloroj, stiloj } from '@/stiloj'

function Kampo({
  etikedo,
  helpo,
  ...props
}: { etikedo: string; helpo?: string } & ComponentProps<typeof TextInput>) {
  return (
    <View style={{ gap: 6 }}>
      <Text style={{ fontSize: 14, fontWeight: '600', color: koloroj.primara }}>{etikedo}</Text>
      <TextInput style={stiloj.enigo} accessibilityLabel={etikedo} autoCapitalize="none" autoCorrect={false} {...props} />
      {helpo && <Text style={stiloj.eta}>{helpo}</Text>}
    </View>
  )
}

export default function Aligxi() {
  const { aligxi } = useSeanco()
  const [enirnomo, setEnirnomo] = useState('')
  const [retadreso, setRetadreso] = useState('')
  const [pasvorto, setPasvorto] = useState('')
  const [eraro, setEraro] = useState<string | null>(null)
  const [sendata, setSendata] = useState(false)

  async function sendi() {
    if (!enirnomo.trim() || !retadreso.trim() || !pasvorto) {
      setEraro('Indiquez un identifiant, une adresse e-mail et un mot de passe.')
      return
    }
    setSendata(true)
    setEraro(null)
    const mesagxo = await aligxi(enirnomo.trim(), retadreso.trim(), pasvorto)
    setSendata(false)
    if (mesagxo) {
      setEraro(mesagxo)
      return
    }
    // l'écran disparaît (le compte n'est plus un invité) : on montre le mail à suivre
    router.replace('/konfirmi')
  }

  return (
    <KeyboardAvoidingView style={stiloj.ekrano} behavior={Platform.OS === 'ios' ? 'padding' : undefined}>
      <ScrollView contentContainerStyle={[stiloj.enhavo, { gap: 18 }]} keyboardShouldPersistTaps="handled">
        <View
          style={{ flexDirection: 'row', gap: 10, backgroundColor: koloroj.helverda, borderRadius: 10, padding: 12 }}
        >
          <Text style={{ color: koloroj.verda, fontWeight: '700' }}>✓</Text>
          <Text style={{ flex: 1, color: koloroj.verda, fontSize: 14, lineHeight: 20 }}>
            Ce que vous avez fait jusqu’ici (réponses, sections terminées, vocabulaire) sera rattaché à votre compte.
          </Text>
        </View>
        <Kampo
          etikedo="Identifiant"
          helpo="Il sert à vous connecter et sera visible par votre correcteur."
          autoComplete="username-new"
          textContentType="username"
          value={enirnomo}
          onChangeText={setEnirnomo}
        />
        <Kampo
          etikedo="Adresse e-mail"
          helpo="Votre correcteur vous écrira à cette adresse."
          keyboardType="email-address"
          autoComplete="email"
          textContentType="emailAddress"
          value={retadreso}
          onChangeText={setRetadreso}
        />
        <Kampo
          etikedo="Mot de passe"
          secureTextEntry
          autoComplete="new-password"
          textContentType="newPassword"
          value={pasvorto}
          onChangeText={setPasvorto}
          onSubmitEditing={sendi}
        />
        {eraro && <Text style={stiloj.eraro}>{eraro}</Text>}
        <Butono teksto={sendata ? 'Création du compte…' : 'Créer mon compte'} onPress={sendi} malsxaltita={sendata} />
        <Text style={[stiloj.eta, { textAlign: 'center' }]}>Gratuit, sans publicité. Association Espéranto-France.</Text>
      </ScrollView>
    </KeyboardAvoidingView>
  )
}
