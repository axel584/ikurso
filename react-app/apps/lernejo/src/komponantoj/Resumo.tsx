// Récapitulatif avant l'envoi (##RESUMO##) : ce qui manque dans la leçon, le mode de correction au premier envoi
// du cours (#627), un message pour le correcteur, l'envoi, puis l'appréciation de la leçon (Takso), comme sur le site.
import { useState } from 'react'
import { Pressable, Text, TextInput, View } from 'react-native'
import { Link, router } from 'expo-router'
import { ApiEraro } from '@/api/kliento'
import { useKurso, useResumo, useSendi, type Elekto, type KursoKodo } from '@/api/demandoj'
import { useSeanco } from '@/seanco'
import { Butono, Stato } from './Bazaj'
import { KontoBezonata } from './Gasto'
import { HtmlTeksto } from './HtmlTeksto'
import { Takso } from './Takso'
import { koloroj, stiloj } from '@/stiloj'

export function Resumo({ kurso, numero }: { kurso: KursoKodo; numero: number }) {
  const resumo = useResumo(kurso, numero)
  const leciono = useKurso(kurso).data?.lecionoj.find((l) => l.numero === numero)
  const sendi = useSendi()
  const [komento, setKomento] = useState('')
  const [elekto, setElekto] = useState<Elekto | null>(null)
  const [teksto, setTeksto] = useState('')
  const { gasto } = useSeanco()
  // compte créé dans l'application, pas encore activé : le serveur refuse l'envoi (403)
  const neAktivigita = sendi.error instanceof ApiEraro && sendi.error.stato === 403

  const r = resumo.data
  const kompleta = r && r.nefinitaj_sekcioj.length === 0 && r.mankantaj_respondoj.length === 0
  const korektado = r?.korektado
  const ebloj = korektado?.ebloj ?? []
  // sans correcteur : le choix déjà fait (sans correcteur) ou le premier proposé (même correcteur, sinon un bénévole)
  const elektita: Elekto | null =
    ebloj.length === 0 ? null : (elekto ?? (ebloj.some((e) => e.kodo === korektado?.elekto) ? (korektado?.elekto as Elekto) : ebloj[0].kodo))
  const butono = elektita === 'sen' ? 'Terminer la leçon' : elektita ? 'Valider et envoyer la leçon'
    : korektado?.atendas ? 'Enregistrer ma leçon' : korektado?.ia ? 'Envoyer la leçon à la correction automatique'
    : 'Envoyer la leçon à mon correcteur'
  return (
    <View style={[stiloj.karto, { backgroundColor: koloroj.helblua, gap: 10 }]} testID="resumo">
      <Text style={stiloj.subtitolo}>{ebloj.length > 0 ? `Fin de la leçon ${numero}` : `Envoi de la leçon ${numero} à votre correcteur`}</Text>
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
      {gasto ? (
        <KontoBezonata />
      ) : sendi.data ? (
        <View style={{ gap: 8 }}>
          <Text style={[stiloj.teksto, { color: koloroj.verda, fontWeight: '600' }]} accessibilityLiveRegion="polite">
            {MESAGXOJ[sendi.data.rezulto] ?? 'Leçon envoyée à votre correcteur !'}
          </Text>
          <Takso kurso={kurso} numero={numero} />
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
          {korektado?.atendas && (
            <Text style={stiloj.teksto}>
              Vous avez demandé à être corrigé par « {korektado.atendas} ». Nous le recherchons : vos leçons sont enregistrées et lui
              seront transmises dès qu’il vous sera attribué.
            </Text>
          )}
          {ebloj.length > 0 && (
            <View style={{ gap: 6 }} accessibilityRole="radiogroup" testID="korektadaj-elektoj">
              <Text style={[stiloj.teksto, { fontWeight: '600' }]}>
                {korektado?.elekto === 'sen' ? 'Vous suivez ce cours sans correcteur. Voulez-vous être corrigé ?' : 'Qui corrigera vos leçons ?'}
              </Text>
              {ebloj.map((e) => (
                <Pressable
                  key={e.kodo}
                  accessibilityRole="radio"
                  accessibilityState={{ checked: e.kodo === elektita }}
                  aria-checked={e.kodo === elektita}
                  onPress={() => setElekto(e.kodo)}
                  style={{ flexDirection: 'row', gap: 10, paddingVertical: 4 }}
                >
                  <View
                    style={{
                      width: 20, height: 20, borderRadius: 10, borderWidth: 2, marginTop: 2,
                      borderColor: koloroj.blua, backgroundColor: e.kodo === elektita ? koloroj.blua : 'transparent',
                    }}
                  />
                  <View style={{ flex: 1 }}>
                    <Text style={[stiloj.teksto, { fontWeight: '600' }]}>{e.titolo}</Text>
                    <Text style={stiloj.eta}>{e.priskribo}</Text>
                  </View>
                </Pressable>
              ))}
              {elektita === 'konato' && (
                <TextInput
                  style={stiloj.enigo}
                  autoCapitalize="none"
                  placeholder="Prénom, identifiant ou adresse e-mail de votre correcteur"
                  accessibilityLabel="Votre correcteur"
                  value={teksto}
                  onChangeText={setTeksto}
                />
              )}
            </View>
          )}
          {elektita !== 'sen' && (
          <TextInput
            style={[stiloj.enigo, { minHeight: 90, textAlignVertical: 'top' }]}
            multiline
            placeholder="Un message pour votre correcteur (facultatif)"
            accessibilityLabel="Message pour votre correcteur"
            value={komento}
            onChangeText={setKomento}
          />
          )}
          {sendi.error && <Text style={stiloj.eraro}>{sendi.error.message}</Text>}
          {neAktivigita && (
            <Text accessibilityRole="link" style={{ color: koloroj.blua, fontSize: 15 }} onPress={() => router.push('/konfirmi')}>
              Recevoir à nouveau le lien d’activation
            </Text>
          )}
          <Butono
            teksto={sendi.isPending ? 'Envoi…' : leciono?.sendita && !elektita ? 'Envoyer à nouveau' : butono}
            malsxaltita={sendi.isPending || (elektita === 'konato' && teksto.trim() === '')}
            onPress={() => sendi.mutate({ kurso, numero, komento, ...(elektita ? { elekto: elektita, teksto } : {}) })}
          />
        </>
      )}
    </View>
  )
}

const MESAGXOJ: Record<string, string> = {
  korektanto_atribuita: 'Leçon envoyée ! Un correcteur vient de vous être attribué : il vous écrira bientôt.',
  sendita_ia: 'Leçon envoyée à la correction automatique : vous recevrez un message dès qu’elle sera corrigée, en général dans quelques minutes.',
  sen_korektanto: 'Leçon terminée ! Vous continuez sans correcteur. À la fin d’une prochaine leçon, vous pourrez demander à être corrigé.',
  atendas_korektanton: 'Leçon enregistrée. Nous recherchons le correcteur que vous avez indiqué : il recevra vos leçons dès qu’il vous sera attribué.',
}
