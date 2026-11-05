// Après l'inscription dans l'application : le lien d'activation à suivre, sans bloquer l'élève,
// qui continue son cours. Seul l'envoi d'une leçon au correcteur attend l'activation.
import { ScrollView, Text, View } from 'react-native'
import { router } from 'expo-router'
import { useAktivigilo, useMi } from '@/api/demandoj'
import { Butono, Stato } from '@/komponantoj/Bazaj'
import { koloroj, stiloj } from '@/stiloj'

export default function Konfirmi() {
  const mi = useMi()
  const aktivigilo = useAktivigilo()
  const u = mi.data?.user
  const aktivigita = u?.aktivigita === true

  return (
    <ScrollView style={stiloj.ekrano} contentContainerStyle={[stiloj.enhavo, { gap: 18, alignItems: 'center', paddingTop: 40 }]}>
      <Stato sxargxas={mi.isLoading} eraro={mi.error}>
        <View
          style={{ width: 88, height: 88, borderRadius: 44, backgroundColor: '#EFEDEB', alignItems: 'center', justifyContent: 'center' }}
        >
          <Text style={{ fontSize: 40, color: koloroj.primara }} accessibilityElementsHidden importantForAccessibility="no">
            ✉
          </Text>
        </View>
        <Text style={[stiloj.titolo, { textAlign: 'center' }]} accessibilityRole="header">
          {aktivigita ? 'Votre compte est activé' : 'Vérifiez votre boîte mail'}
        </Text>
        <Text style={[stiloj.teksto, { textAlign: 'center' }]}>
          {aktivigita ? (
            'Vous pouvez envoyer vos leçons à votre correcteur.'
          ) : (
            <>
              Nous avons envoyé un lien d’activation à <Text style={{ fontWeight: '700' }}>{u?.retadreso}</Text>. Cliquez
              dessus pour pouvoir envoyer vos leçons à votre correcteur.
            </>
          )}
        </Text>
        {!aktivigita && (
          <View style={[stiloj.karto, { width: '100%' }]}>
            <Text style={[stiloj.subtitolo, { fontSize: 15 }]}>En attendant</Text>
            <Text style={stiloj.teksto}>Votre compte est créé et votre travail est sauvegardé : vous pouvez continuer le cours tout de suite.</Text>
          </View>
        )}
        <View style={{ width: '100%', gap: 10 }}>
          <Butono teksto="Continuer le cours" onPress={() => (router.canGoBack() ? router.back() : router.replace('/'))} />
          {!aktivigita && (
            <Butono
              dua
              teksto={aktivigilo.isSuccess ? 'Mail renvoyé' : aktivigilo.isPending ? 'Envoi…' : 'Renvoyer le mail'}
              malsxaltita={aktivigilo.isPending || aktivigilo.isSuccess}
              onPress={() => aktivigilo.mutate()}
            />
          )}
          {!aktivigita && (
            <Butono dua teksto="J’ai cliqué sur le lien" onPress={() => mi.refetch()} />
          )}
          {aktivigilo.error && <Text style={stiloj.eraro}>{aktivigilo.error.message}</Text>}
        </View>
      </Stato>
    </ScrollView>
  )
}
