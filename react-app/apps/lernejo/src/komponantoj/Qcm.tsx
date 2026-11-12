// QCM d'auto-évaluation (##QCM## et ##QCM_BILDOJ##), corrigé sur l'appareil comme sur le site (js/ikurso.js) :
// une question à la fois, on recommence jusqu'à la bonne réponse, puis le récapitulatif.
import { useEffect, useState } from 'react'
import { Image, Pressable, Text, View } from 'react-native'
import * as Linking from 'expo-linking'
import { retadreso } from '@/api/kliento'
import type { QcmDemando } from '@/utiloj/enhavo'
import { HtmlTeksto } from './HtmlTeksto'
import { useLudi } from './Sono'
import { koloroj, stiloj } from '@/stiloj'

// Facultatif : « Terminé ! » ne l'attend pas (#1109).
export function Qcm({ demandoj, bildoj }: { demandoj: QcmDemando[]; bildoj: boolean }) {
  const [nuna, setNuna] = useState(0)
  const [mesagxo, setMesagxo] = useState<{ bone: boolean; teksto: string } | null>(null)
  const [elektita, setElektita] = useState<number | null>(null)
  const finita = nuna >= demandoj.length
  const ludi = useLudi()

  useEffect(() => {
    if (!mesagxo?.bone) return
    const tempo = setTimeout(() => {
      setMesagxo(null)
      setElektita(null)
      setNuna((n) => n + 1)
    }, 1000)
    return () => clearTimeout(tempo)
  }, [mesagxo])

  if (finita) {
    return (
      <View style={[stiloj.karto, { backgroundColor: koloroj.helblua }]} testID="qcm-resumo">
        <Text style={stiloj.subtitolo}>Récapitulatif :</Text>
        {demandoj.map((d, i) => (
          <View key={i} style={{ flexDirection: 'row', gap: 8, alignItems: 'center' }}>
            {bildoj && d.bildo && <Image source={{ uri: retadreso(d.bildo) }} style={{ width: 64, height: 48 }} resizeMode="cover" />}
            <View style={{ flex: 1 }}>
              {d.question && (
                <Text style={[stiloj.teksto, { fontWeight: '700' }]}>
                  {i + 1}. <HtmlTeksto html={d.question} />
                </Text>
              )}
              <Text style={stiloj.teksto}>
                {!d.question && `${i + 1}. `}
                <HtmlTeksto html={d.propositions[d.reponse - 1] ?? ''} />
              </Text>
            </View>
          </View>
        ))}
      </View>
    )
  }

  const d = demandoj[nuna]
  return (
    <View style={[stiloj.karto, { gap: 10 }]} testID="qcm">
      <Text style={stiloj.subtitolo}>
        Question {nuna + 1}/{demandoj.length} :
      </Text>
      {d.question && <HtmlTeksto html={d.question} />}
      {sono(d.question) && (
        <Pressable
          accessibilityRole="button"
          accessibilityLabel="Écouter"
          testID="qcm-sono"
          onPress={() => ludi(sono(d.question)!)}
          style={{ flexDirection: 'row', alignItems: 'center', gap: 8, alignSelf: 'flex-start', paddingVertical: 6, paddingHorizontal: 12, borderRadius: 20, backgroundColor: koloroj.blua }}
        >
          <Text style={{ color: '#fff', fontWeight: '600' }}>▶ Écouter</Text>
        </Pressable>
      )}
      {bildoj && d.bildo && (
        <View style={{ gap: 2 }}>
          <Image source={{ uri: retadreso(d.bildo) }} style={{ width: '100%', maxWidth: 420, aspectRatio: 4 / 3 }} resizeMode="contain" />
          {d.auteur && (
            <Text style={stiloj.eta} onPress={d.url ? () => Linking.openURL(d.url!) : undefined}>
              photo : {d.auteur}
            </Text>
          )}
        </View>
      )}
      {d.propositions.map((p, i) => {
        const jes = elektita === i + 1
        return (
          <Pressable
            key={i}
            accessibilityRole="radio"
            accessibilityState={{ checked: jes }}
            disabled={mesagxo?.bone}
            onPress={() => {
              setElektita(i + 1)
              setMesagxo(
                i + 1 === d.reponse
                  ? { bone: true, teksto: nuna + 1 === demandoj.length ? 'Bravo, vous avez trouvé toutes les bonnes réponses !' : 'Bravo !' }
                  : { bone: false, teksto: d.indices?.[i]?.trim() ? `Mauvaise réponse : ${d.indices[i].trim()}` : 'Mauvaise réponse, essayez encore !' },
              )
            }}
            style={{
              flexDirection: 'row',
              gap: 8,
              alignItems: 'center',
              padding: 8,
              borderRadius: 6,
              backgroundColor: jes ? (mesagxo?.bone ? koloroj.helverda : koloroj.helrugxa) : 'transparent',
            }}
          >
            <View style={{ width: 18, height: 18, borderRadius: 9, borderWidth: 2, borderColor: koloroj.blua }} />
            <HtmlTeksto html={p} stilo={{ flex: 1 }} />
          </Pressable>
        )
      })}
      {mesagxo && (
        <Text accessibilityLiveRegion="polite" style={{ color: mesagxo.bone ? koloroj.verda : koloroj.rugxa, fontWeight: '600' }}>
          {mesagxo.teksto}
        </Text>
      )}
    </View>
  )
}

// enregistrement d'une question « Écoutez… » (lien sm2_button du site, #1114) : chemin du fichier audio
function sono(question?: string): string | null {
  const m = question?.match(/<a\s[^>]*href=['"]([^'"]+\.mp3)['"][^>]*sm2_button|<a\s[^>]*sm2_button[^>]*href=['"]([^'"]+\.mp3)['"]/)
  return m ? (m[1] ?? m[2]) : null
}
