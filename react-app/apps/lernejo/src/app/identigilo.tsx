// Choix de l'identifiant après l'inscription avec un compte Google (#119), comme elektiIdentigilon.php sur le site :
// le compte est déjà activé (Google a vérifié l'adresse), seul l'identifiant reste à choisir, une seule fois.
import { useEffect, useState } from 'react'
import { KeyboardAvoidingView, Platform, ScrollView, Text, TextInput, View } from 'react-native'
import { api } from '@/api/kliento'
import { Butono } from '@/komponantoj/Bazaj'
import { useSeanco } from '@/seanco'
import { koloroj, stiloj } from '@/stiloj'
import { useKlavaroAlteco } from '@/utiloj/klavaro'

export default function Identigilo() {
  const klavaro = useKlavaroAlteco()
  const { elektota, identigiloElektita } = useSeanco()
  const [enirnomo, setEnirnomo] = useState(elektota ?? '')
  const [eraro, setEraro] = useState<string | null>(null)
  const [sendata, setSendata] = useState(false)
  // la proposition arrive après l'ouverture de l'écran quand l'application vient d'être relancée
  useEffect(() => {
    if (elektota) setEnirnomo((nuna) => nuna || elektota)
  }, [elektota])

  async function sendi() {
    if (!enirnomo.trim()) {
      setEraro('Choisissez un identifiant.')
      return
    }
    setSendata(true)
    setEraro(null)
    const { data, error } = await api.elektiIdentigilon(enirnomo.trim())
    if (!data) {
      setSendata(false)
      setEraro((error as { error?: string } | undefined)?.error ?? 'Enregistrement impossible, vérifiez votre connexion')
      return
    }
    // l'écran disparaît : l'élève arrive dans ses cours
    await identigiloElektita()
  }

  return (
    <KeyboardAvoidingView style={stiloj.ekrano} behavior={Platform.OS === 'ios' ? 'padding' : undefined}>
      <ScrollView contentContainerStyle={[stiloj.enhavo, { gap: 18, paddingBottom: 16 + klavaro }]} keyboardShouldPersistTaps="handled">
        <View style={{ flexDirection: 'row', gap: 10, backgroundColor: koloroj.helverda, borderRadius: 10, padding: 12 }}>
          <Text style={{ color: koloroj.verda, fontWeight: '700' }}>✓</Text>
          <Text style={{ flex: 1, color: koloroj.verda, fontSize: 14, lineHeight: 20 }}>
            Votre compte est créé avec votre adresse Google. Il ne reste qu’à choisir votre identifiant.
          </Text>
        </View>
        <View style={{ gap: 6 }}>
          <Text style={{ fontSize: 14, fontWeight: '600', color: koloroj.primara }}>Identifiant</Text>
          <TextInput
            style={stiloj.enigo}
            accessibilityLabel="Identifiant"
            autoCapitalize="none"
            autoCorrect={false}
            autoComplete="username-new"
            textContentType="username"
            value={enirnomo}
            onChangeText={setEnirnomo}
            onSubmitEditing={sendi}
          />
          <Text style={stiloj.eta}>Il sera visible par votre correcteur. Vous pourrez vous connecter avec lui ou avec Google.</Text>
        </View>
        {eraro && <Text style={stiloj.eraro}>{eraro}</Text>}
        <Butono teksto={sendata ? 'Enregistrement…' : 'Valider'} onPress={sendi} malsxaltita={sendata} />
      </ScrollView>
    </KeyboardAvoidingView>
  )
}
