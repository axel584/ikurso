// Les trois cours, avec la progression de l'élève et son correcteur.
import { Pressable, RefreshControl, ScrollView, Text, View } from 'react-native'
import { Link } from 'expo-router'
import { useKursoj } from '@/api/demandoj'
import { malfresxigi } from '@/api/kasxmemoro'
import { Stato } from '@/komponantoj/Bazaj'
import { koloroj, stiloj } from '@/stiloj'

export default function Kursoj() {
  const { data, isLoading, error, refetch, isRefetching } = useKursoj()
  return (
    <ScrollView
      style={stiloj.ekrano}
      contentContainerStyle={stiloj.enhavo}
      refreshControl={<RefreshControl refreshing={isRefetching} onRefresh={() => void malfresxigi('kursoj').then(() => refetch())} />}
    >
      <Stato sxargxas={isLoading} eraro={error}>
        {data?.kursoj.map((k) => {
          const elcento = k.sekcioj > 0 ? Math.round((100 * k.finitaj_sekcioj) / k.sekcioj) : 0
          return (
            <Link key={k.kodo} href={{ pathname: '/kurso/[kodo]', params: { kodo: k.kodo } }} asChild>
              <Pressable accessibilityRole="link" style={stiloj.karto}>
                <Text style={stiloj.subtitolo}>{k.nomo}</Text>
                <Text style={stiloj.eta}>
                  {k.lecionoj} leçons · {k.finitaj_sekcioj} sections terminées sur {k.sekcioj}
                </Text>
                <View style={{ height: 6, backgroundColor: koloroj.helgriza, borderRadius: 3 }}>
                  <View style={{ width: `${elcento}%`, height: 6, backgroundColor: koloroj.blua, borderRadius: 3 }} />
                </View>
                {k.korektanto ? (
                  <Text style={stiloj.eta}>
                    Correcteur : {k.korektanto.personnomo || k.korektanto.enirnomo}
                    {k.nuna_leciono ? ` · dernière leçon envoyée : ${k.nuna_leciono}` : ''}
                  </Text>
                ) : (
                  <Text style={stiloj.eta}>Un correcteur vous sera attribué à l’envoi de votre première leçon.</Text>
                )}
              </Pressable>
            </Link>
          )
        })}
      </Stato>
    </ScrollView>
  )
}
