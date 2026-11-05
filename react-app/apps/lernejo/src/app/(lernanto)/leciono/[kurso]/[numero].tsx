// Leçon envoyée et retour du correcteur : son introduction, la correction de chaque réponse, sa conclusion.
import { ScrollView, Text, View } from 'react-native'
import { Stack, useLocalSearchParams } from 'expo-router'
import { useKorekto, type KursoKodo } from '@/api/demandoj'
import { Stato } from '@/komponantoj/Bazaj'
import { Ekzerco } from '@/komponantoj/Ekzerco'
import { HtmlTeksto } from '@/komponantoj/HtmlTeksto'
import { koloroj, stiloj } from '@/stiloj'

export default function Korekto() {
  const params = useLocalSearchParams<{ kurso: KursoKodo; numero: string }>()
  const numero = Number(params.numero)
  const { data: k, isLoading, error } = useKorekto(params.kurso, numero)
  return (
    <ScrollView style={stiloj.ekrano} contentContainerStyle={stiloj.enhavo}>
      <Stack.Screen options={{ title: `Leçon ${numero}` }} />
      <Stato sxargxas={isLoading} eraro={error}>
        {k && (
          <>
            <Text style={stiloj.eta}>
              {k.sendita ? `Envoyée le ${new Date(k.sendita.replace(' ', 'T')).toLocaleDateString('fr-FR')}` : 'Pas encore envoyée'}
              {k.korektita ? ' · corrigée' : k.sendita ? ' · en attente de correction' : ''}
            </Text>
            {k.komento && (
              <View style={stiloj.karto}>
                <Text style={[stiloj.eta, { fontWeight: '600' }]}>Votre message :</Text>
                <HtmlTeksto html={k.komento} />
              </View>
            )}
            {k.enkonduko && (
              <View style={[stiloj.karto, { backgroundColor: koloroj.helverda }]} testID="enkonduko">
                <Text style={[stiloj.eta, { fontWeight: '600' }]}>Votre correcteur :</Text>
                <HtmlTeksto html={k.enkonduko} />
              </View>
            )}
            {k.ekzercoj.map((e) => (
              <Ekzerco key={e.id} ekzerco={e} legebla />
            ))}
            {k.konkludo && (
              <View style={[stiloj.karto, { backgroundColor: koloroj.helverda }]} testID="konkludo">
                <Text style={[stiloj.eta, { fontWeight: '600' }]}>Conclusion de votre correcteur :</Text>
                <HtmlTeksto html={k.konkludo} />
              </View>
            )}
          </>
        )}
      </Stato>
    </ScrollView>
  )
}
