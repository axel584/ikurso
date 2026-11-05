// Récapitulatif avant l'envoi (##RESUMO##) : ce qui manque dans la leçon, un message pour le correcteur, l'envoi.
import { useState } from 'react'
import { Text, TextInput, View } from 'react-native'
import { Link, router } from 'expo-router'
import { useKurso, useResumo, useSendi, type KursoKodo } from '@/api/demandoj'
import { Butono, Stato } from './Bazaj'
import { HtmlTeksto } from './HtmlTeksto'
import { koloroj, stiloj } from '@/stiloj'

export function Resumo({ kurso, numero }: { kurso: KursoKodo; numero: number }) {
  const resumo = useResumo(kurso, numero)
  const leciono = useKurso(kurso).data?.lecionoj.find((l) => l.numero === numero)
  const sendi = useSendi()
  const [komento, setKomento] = useState('')

  const r = resumo.data
  const kompleta = r && r.nefinitaj_sekcioj.length === 0 && r.mankantaj_respondoj.length === 0
  return (
    <View style={[stiloj.karto, { backgroundColor: koloroj.helblua, gap: 10 }]} testID="resumo">
      <Text style={stiloj.subtitolo}>Envoi de la leçon {numero} à votre correcteur</Text>
      <Stato sxargxas={resumo.isLoading} eraro={resumo.error}>
        {kompleta && <Text style={stiloj.teksto}>Toutes les sections sont terminées et toutes les questions ont une réponse.</Text>}
        {r && r.nefinitaj_sekcioj.length > 0 && (
          <View>
            <Text style={[stiloj.teksto, { fontWeight: '600' }]}>Sections pas encore terminées :</Text>
            {r.nefinitaj_sekcioj.map((s) => (
              <Text key={s.ordo} style={stiloj.teksto}>
                • {numero}.{s.ordo}. {s.titolo}
              </Text>
            ))}
          </View>
        )}
        {r && r.mankantaj_respondoj.length > 0 && (
          <View>
            <Text style={[stiloj.teksto, { fontWeight: '600' }]}>Questions sans réponse :</Text>
            {r.mankantaj_respondoj.map((m) => (
              <Text key={m.ekzerco_id} style={stiloj.teksto}>
                • section {numero}.{m.ordo}, <HtmlTeksto html={m.komando} /> : n° {m.numeroj.join(', ')}
              </Text>
            ))}
          </View>
        )}
      </Stato>
      {sendi.data ? (
        <View style={{ gap: 8 }}>
          <Text style={[stiloj.teksto, { color: koloroj.verda, fontWeight: '600' }]} accessibilityLiveRegion="polite">
            {sendi.data.rezulto === 'korektanto_atribuita'
              ? 'Leçon envoyée ! Un correcteur vient de vous être attribué : il vous écrira bientôt.'
              : 'Leçon envoyée à votre correcteur !'}
          </Text>
          <Text
            accessibilityRole="link"
            style={{ color: koloroj.blua, fontSize: 16 }}
            onPress={() => router.dismissTo({ pathname: '/kurso/[kodo]', params: { kodo: kurso } })}
          >
            Retour au sommaire du cours
          </Text>
        </View>
      ) : (
        <>
          {leciono?.sendita && (
            <Text style={stiloj.eta}>
              Vous avez déjà envoyé cette leçon.{' '}
              <Link href={{ pathname: '/leciono/[kurso]/[numero]', params: { kurso, numero: String(numero) } }} style={{ color: koloroj.blua }}>
                {leciono.korektita ? 'Voir la correction' : 'La revoir'}
              </Link>
            </Text>
          )}
          <TextInput
            style={[stiloj.enigo, { minHeight: 90, textAlignVertical: 'top' }]}
            multiline
            placeholder="Un message pour votre correcteur (facultatif)"
            accessibilityLabel="Message pour votre correcteur"
            value={komento}
            onChangeText={setKomento}
          />
          {sendi.error && <Text style={stiloj.eraro}>{sendi.error.message}</Text>}
          <Butono
            teksto={sendi.isPending ? 'Envoi…' : leciono?.sendita ? 'Envoyer à nouveau' : 'Envoyer la leçon à mon correcteur'}
            malsxaltita={sendi.isPending}
            onPress={() => sendi.mutate({ kurso, numero, komento })}
          />
        </>
      )}
    </View>
  )
}
