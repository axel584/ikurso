// Leçons d'un cours et leurs sections : ce que l'élève a fini, envoyé, ce qui est corrigé.
import { useState } from 'react'
import { Pressable, ScrollView, StyleSheet, Text, View } from 'react-native'
import { Link, Stack, useLocalSearchParams } from 'expo-router'
import { useKurso, useKursoj, type KursoKodo } from '@/api/demandoj'
import { Insigno, Stato } from '@/komponantoj/Bazaj'
import { koloroj, stiloj } from '@/stiloj'

const TIPOJ = { TEKSTO: 'Leçon', VORTARO: 'Vocabulaire', QCM: 'Quiz', EKZERCARO: 'Exercices' } as const

export default function Kurso() {
  const { kodo } = useLocalSearchParams<{ kodo: KursoKodo }>()
  const { data, isLoading, error } = useKurso(kodo)
  const nomo = useKursoj().data?.kursoj.find((k) => k.kodo === kodo)?.nomo
  // la première leçon pas encore envoyée est ouverte
  const unua = data?.lecionoj.find((l) => !l.sendita)?.numero ?? data?.lecionoj[0]?.numero
  const [malfermita, setMalfermita] = useState<number | null>(null)
  const nuna = malfermita ?? unua

  return (
    <ScrollView style={stiloj.ekrano} contentContainerStyle={stiloj.enhavo}>
      <Stack.Screen options={{ title: nomo ?? 'Cours' }} />
      <Stato sxargxas={isLoading} eraro={error}>
        {data?.lecionoj.map((l) => {
          const finitaj = l.sekcioj.filter((s) => s.finita).length
          const ferma = nuna !== l.numero
          return (
            <View key={l.numero} style={stiloj.karto}>
              <Pressable
                accessibilityRole="button"
                accessibilityState={{ expanded: !ferma }}
                onPress={() => setMalfermita(ferma ? l.numero : -1)}
                style={{ gap: 6 }}
              >
                <Text style={stiloj.subtitolo}>
                  Leçon {l.numero}
                  {l.titolo ? ` : ${l.titolo}` : ''}
                </Text>
                <View style={{ flexDirection: 'row', gap: 8, flexWrap: 'wrap', alignItems: 'center' }}>
                  <Text style={stiloj.eta}>
                    {finitaj}/{l.sekcioj.length} sections
                  </Text>
                  {l.korektita ? (
                    <Insigno teksto="Corrigée" koloro={koloroj.verda} />
                  ) : l.sendita ? (
                    <Insigno teksto="Envoyée" koloro={koloroj.blua} />
                  ) : null}
                </View>
              </Pressable>
              {!ferma && (
                <View style={{ gap: 4, marginTop: 4 }}>
                  {l.sekcioj.map((s) => (
                    <Link key={s.id} href={{ pathname: '/sekcio/[id]', params: { id: String(s.id) } }} asChild>
                      <Pressable
                        accessibilityRole="link"
                        style={{
                          flexDirection: 'row',
                          gap: 10,
                          alignItems: 'center',
                          paddingVertical: 8,
                          borderTopWidth: 1,
                          borderTopColor: koloroj.helgriza,
                        }}
                      >
                        <Text style={{ width: 22, color: s.finita ? koloroj.verda : koloroj.griza, fontSize: 16 }}>
                          {s.finita ? '✓' : '○'}
                        </Text>
                        <View style={{ flex: 1 }}>
                          <Text style={stiloj.teksto}>
                            {l.numero}.{s.ordo}. {s.titolo}
                          </Text>
                          <Text style={stiloj.eta}>
                            {TIPOJ[s.tipo]}
                            {s.dauxro ? ` · ${s.dauxro} min` : ''}
                          </Text>
                        </View>
                      </Pressable>
                    </Link>
                  ))}
                  {l.sendita && (
                    <Link href={{ pathname: '/leciono/[kurso]/[numero]', params: { kurso: kodo, numero: String(l.numero) } }} asChild>
                      <Pressable accessibilityRole="link" style={StyleSheet.flatten([stiloj.duaButono, { marginTop: 8 }])}>
                        <Text style={stiloj.duaButonoTeksto}>
                          {l.korektita ? 'Voir la correction' : 'Voir la leçon envoyée'}
                        </Text>
                      </Pressable>
                    </Link>
                  )}
                </View>
              )}
            </View>
          )
        })}
      </Stato>
    </ScrollView>
  )
}
