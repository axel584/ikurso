// Profil de l'élève : son compte, et la déconnexion (le refresh token est révoqué sur le serveur).
import { ScrollView, Text, View } from 'react-native'
import * as Linking from 'expo-linking'
import { retadreso } from '@/api/kliento'
import { useMi } from '@/api/demandoj'
import { Butono, Stato } from '@/komponantoj/Bazaj'
import { useSeanco } from '@/seanco'
import { stiloj } from '@/stiloj'

export default function Profilo() {
  const { elsaluti } = useSeanco()
  const { data, isLoading, error } = useMi()
  const u = data?.user
  return (
    <ScrollView style={stiloj.ekrano} contentContainerStyle={stiloj.enhavo}>
      <Stato sxargxas={isLoading} eraro={error}>
        {u && (
          <View style={stiloj.karto}>
            <Text style={stiloj.subtitolo}>{[u.personnomo, u.familinomo].filter(Boolean).join(' ') || u.enirnomo}</Text>
            <Text style={stiloj.teksto}>Identifiant : {u.enirnomo}</Text>
            {u.retadreso && <Text style={stiloj.teksto}>Adresse e-mail : {u.retadreso}</Text>}
            {u.ekdato && <Text style={stiloj.eta}>Inscrit depuis le {new Date(u.ekdato.replace(' ', 'T')).toLocaleDateString('fr-FR')}</Text>}
          </View>
        )}
      </Stato>
      <Butono dua teksto="Modifier mon profil sur le site" onPress={() => Linking.openURL(retadreso('personinformoj.php'))} />
      <Butono teksto="Se déconnecter" onPress={elsaluti} />
    </ScrollView>
  )
}
