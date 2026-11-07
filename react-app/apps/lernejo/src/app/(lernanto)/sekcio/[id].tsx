// Une section de leçon : son contenu, ses exercices et QCM, puis « Terminé ! » qui mène à la section suivante.
import { useCallback, useMemo, useRef, useState } from 'react'
import { ScrollView, Text, View } from 'react-native'
import { Stack, router, useLocalSearchParams } from 'expo-router'
import * as Linking from 'expo-linking'
import { RADIKO } from '@/api/kliento'
import { legiAgordon, skribiAgordon } from '@/api/agordoj'
import { useFini, useKurso, useKursoj, useSekcio, type KursoKodo } from '@/api/demandoj'
import { Butono, Stato } from '@/komponantoj/Bazaj'
import { Ekzerco } from '@/komponantoj/Ekzerco'
import { GastoStrio, REMEMORIGO, REMEMORIGO_POST, Rememorigo } from '@/komponantoj/Gasto'
import { useSeanco } from '@/seanco'
import HtmlEnhavo from '@/komponantoj/HtmlEnhavo'
import { Qcm } from '@/komponantoj/Qcm'
import { Resumo } from '@/komponantoj/Resumo'
import { useLudi } from '@/komponantoj/Sono'
import { dividi } from '@/utiloj/enhavo'
import { koloroj, stiloj } from '@/stiloj'

export default function Sekcio() {
  const id = Number(useLocalSearchParams<{ id: string }>().id)
  const { data: s, isLoading, error } = useSekcio(id)
  const fini = useFini()
  const ludiSonon = useLudi()
  const ekdato = useRef(Math.floor(Date.now() / 1000))
  const [finitajQcm, setFinitajQcm] = useState(0)
  const { gasto } = useSeanco()
  const kursoj = useKursoj()
  // section où aller après le rappel d'inscription de l'invité (undefined : pas de rappel affiché)
  const [post, setPost] = useState<number | null | undefined>(undefined)
  // après la dernière section d'une leçon : la première section de la leçon suivante
  const kurso = useKurso(s?.kurso as KursoKodo | undefined)
  const sekvaLeciono = s ? kurso.data?.lecionoj.find((l) => l.numero > s.leciono) : undefined
  const unuaDeSekva = sekvaLeciono?.sekcioj[0]?.id ?? null

  const partoj = useMemo(() => (s ? dividi(s.enhavo) : []), [s])
  const qcmoj = partoj.filter((p) => p.tipo === 'qcm').length
  const qcmFinita = useCallback(() => setFinitajQcm((n) => n + 1), [])
  const ludi = useCallback(async (url: string) => ludiSonon(url), [ludiSonon])
  const malfermi = useCallback(async (url: string) => {
    await Linking.openURL(url)
  }, [])

  function iri(sekva: number | null) {
    if (sekva) {
      router.replace({ pathname: '/sekcio/[id]', params: { id: String(sekva) } })
    } else if (s) {
      // retour au sommaire du cours déjà ouvert, sans en empiler un second
      router.dismissTo({ pathname: '/kurso/[kodo]', params: { kodo: s.kurso } })
    }
  }

  // l'invité qui termine sa 4e section voit une fois l'invitation à créer un compte, avant de continuer
  async function postFino(sekva: number | null) {
    const finitaj = kursoj.data?.kursoj.find((k) => k.kodo === s?.kurso)?.finitaj_sekcioj ?? 0
    if (gasto && finitaj + 1 >= REMEMORIGO_POST && (await legiAgordon(REMEMORIGO)) !== '1') {
      setPost(sekva)
      return
    }
    iri(sekva)
  }

  async function finiRememorigon(aligxi: boolean) {
    await skribiAgordon(REMEMORIGO, '1')
    const sekva = post ?? null
    setPost(undefined)
    if (aligxi) {
      router.push('/aligxi')
    } else {
      iri(sekva)
    }
  }

  // comme sur le site, la section d'un QCM se termine une fois le QCM réussi
  const povasFini = s && (s.finita || finitajQcm >= qcmoj)
  return (
    <ScrollView style={stiloj.ekrano} contentContainerStyle={stiloj.enhavo} keyboardShouldPersistTaps="handled">
      <Stack.Screen options={{ title: s ? `Leçon ${s.leciono}` : 'Section' }} />
      <Stato sxargxas={isLoading} eraro={error}>
        {s && (
          <>
            <Text style={stiloj.titolo} accessibilityRole="header">
              {s.leciono}.{s.ordo}. {s.titolo}
            </Text>
            {s.dauxro ? <Text style={stiloj.eta}>Temps moyen estimé : {s.dauxro} minutes</Text> : null}
            {gasto && <GastoStrio />}
            {partoj.map((p, i) => {
              switch (p.tipo) {
                case 'html':
                  return (
                    <HtmlEnhavo
                      key={`${s.id}-${i}`}
                      html={p.html}
                      radiko={RADIKO}
                      ludi={ludi}
                      malfermi={malfermi}
                      // pas de défilement dans le morceau : scrollEnabled pour iOS, nestedScrollEnabled pour Android
                      // (vrai par défaut : la WebView y garde le geste et la page ne défile plus)
                      dom={{ matchContents: true, scrollEnabled: false, nestedScrollEnabled: false }}
                    />
                  )
                case 'ekzerco': {
                  const ekzerco = s.ekzercoj.find((e) => e.id === p.id)
                  return ekzerco ? <Ekzerco key={`${s.id}-${i}`} ekzerco={ekzerco} /> : null
                }
                case 'qcm':
                  return <Qcm key={`${s.id}-${i}`} demandoj={p.demandoj} bildoj={p.bildoj} onFinita={qcmFinita} />
                case 'resumo':
                  return <Resumo key={`${s.id}-${i}`} kurso={s.kurso} numero={s.leciono} />
              }
            })}
            <View style={{ flexDirection: 'row', gap: 12, marginTop: 8, flexWrap: 'wrap' }}>
              {s.antauxa && <Butono dua teksto="← Précédent" onPress={() => iri(s.antauxa)} />}
              {povasFini && (
                <Butono
                  stilo={{ flexGrow: 1 }}
                  teksto={
                    fini.isPending
                      ? '…'
                      : !s.finita
                        ? 'Terminé !'
                        : s.sekva
                          ? 'Section suivante →'
                          : unuaDeSekva
                            ? `Leçon ${sekvaLeciono?.numero} →`
                            : 'Retour au sommaire'
                  }
                  malsxaltita={fini.isPending}
                  onPress={() => {
                    if (s.finita) {
                      iri(s.sekva ?? unuaDeSekva)
                      return
                    }
                    fini.mutate({ id: s.id, ekdato: ekdato.current }, { onSuccess: (r) => postFino(r.sekva ?? unuaDeSekva) })
                  }}
                />
              )}
            </View>
            {fini.error && <Text style={stiloj.eraro}>{fini.error.message}</Text>}
            {post !== undefined && <Rememorigo onPlusTard={() => finiRememorigon(false)} onAligxi={() => finiRememorigon(true)} />}
            {s.finita && <Text style={[stiloj.eta, { color: koloroj.verda }]}>✓ Section terminée</Text>}
          </>
        )}
      </Stato>
    </ScrollView>
  )
}
