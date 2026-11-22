// Révision du vocabulaire : un mot français à la fois, l'élève tape sa traduction en espéranto.
// Bonne réponse, le mot revient plus tard ; mauvaise, au plus tôt (calcul fait par le serveur).
import { useCallback, useRef, useState } from 'react'
import { ScrollView, Text, View } from 'react-native'
import { useQueryClient } from '@tanstack/react-query'
import { router, useFocusEffect } from 'expo-router'
import { useRevizio, useRevizioRespondo } from '@/api/demandoj'
import { legiAgordojn, permeso, planigiRevizion } from '@/api/sciigoj'
import { Butono, Stato } from '@/komponantoj/Bazaj'
import { EoEnigo, type EoEnigoRef } from '@/komponantoj/EoEnigo'
import { useLudi } from '@/komponantoj/Sono'
import { koloroj, stiloj } from '@/stiloj'
import { useKlavaroAlteco } from '@/utiloj/klavaro'

export default function Revizio() {
  const klavaro = useKlavaroAlteco()
  const qc = useQueryClient()
  const { data, isLoading, error } = useRevizio()
  const respondi = useRevizioRespondo()
  const ludi = useLudi()
  const [nuna, setNuna] = useState(0)
  const [respondo, setRespondo] = useState('')
  const [gxustaj, setGxustaj] = useState(0)
  // le champ garde le focus d'un mot à l'autre : le clavier reste ouvert, l'élève n'a pas à toucher le champ à chaque mot
  const enigo = useRef<EoEnigoRef>(null)
  const fokusi = () => setTimeout(() => enigo.current?.focus(), 50)

  // rappels de révision (#1120) : l'autorisation est demandée ici, où elle a du sens, si le rappel est activé ;
  // en quittant l'écran, les rappels sont recalculés avec les mots qui restent
  useFocusEffect(
    useCallback(() => {
      legiAgordojn().then((a) => {
        if (a.sxaltita) permeso(true).then(() => planigiRevizion())
      })
      // retour sur l'onglet : le champ reprend le focus (autoFocus ne joue qu'au premier affichage)
      const t = fokusi()
      return () => {
        clearTimeout(t)
        void planigiRevizion()
      }
    }, []),
  )

  const vortoj = data?.vortoj ?? []
  const dauxrigi = data?.dauxrigi ?? null
  // après la révision, retour au cours : section qui suit la dernière terminée, ou début du cours suivant
  const dauxrigiButono = dauxrigi && (
    <View style={{ gap: 4 }} testID="revizio-dauxrigi">
      <Butono
        teksto={dauxrigi.nova_kurso ? 'Commencer le cours suivant' : 'Continuer le cours'}
        onPress={() => router.push({ pathname: '/sekcio/[id]', params: { id: String(dauxrigi.sekcio_id) } })}
      />
      <Text style={stiloj.eta}>
        {dauxrigi.nova_kurso ? dauxrigi.kurso_nomo : `Leçon ${dauxrigi.leciono} : ${dauxrigi.titolo}`}
      </Text>
    </View>
  )
  const vorto = vortoj[nuna]
  const rezulto = respondi.data?.vorto_id === vorto?.id ? respondi.data : undefined

  // champ vide : « Voir la réponse » (l'élève ne trouve pas le mot) ; le mot compte comme à revoir, comme sur le site
  function kontroli(montri = false) {
    if (!vorto || (respondo.trim() === '' && !montri) || respondi.isPending) return
    respondi.mutate(
      { vorto_id: vorto.id, respondo: respondo.trim() },
      {
        onSuccess: (r) => {
          if (r.gxusta) setGxustaj((n) => n + 1)
          if (r.sono) ludi(r.sono)
        },
      },
    )
  }

  function sekva() {
    respondi.reset()
    setRespondo('')
    setNuna((n) => n + 1)
    fokusi()
  }

  function rekomenci() {
    respondi.reset()
    setRespondo('')
    setNuna(0)
    setGxustaj(0)
    qc.invalidateQueries({ queryKey: ['revizio'] })
  }

  return (
    <ScrollView
      style={stiloj.ekrano}
      contentContainerStyle={[stiloj.enhavo, { paddingBottom: 16 + klavaro }]}
      keyboardShouldPersistTaps="handled"
      automaticallyAdjustKeyboardInsets
    >
      <Stato sxargxas={isLoading} eraro={error}>
        {vortoj.length === 0 ? (
          <View style={stiloj.karto}>
            <Text style={stiloj.teksto}>
              Aucun mot à réviser pour le moment. Les mots des sections de vocabulaire que vous terminez s’ajoutent ici.
            </Text>
            {dauxrigiButono}
          </View>
        ) : !vorto ? (
          <View style={stiloj.karto} testID="revizio-fino">
            <Text style={stiloj.subtitolo}>Révision terminée</Text>
            <Text style={stiloj.teksto}>
              {gxustaj} bonne{gxustaj > 1 ? 's' : ''} réponse{gxustaj > 1 ? 's' : ''} sur {vortoj.length}.
            </Text>
            {dauxrigiButono}
            <Butono teksto="Réviser d’autres mots" onPress={rekomenci} dua={!!dauxrigi} />
          </View>
        ) : (
          <View style={[stiloj.karto, { gap: 12 }]}>
            <Text style={stiloj.eta}>
              Mot {nuna + 1} sur {vortoj.length}
            </Text>
            <Text style={[stiloj.titolo, { textAlign: 'center' }]} testID="revizio-fr">
              {vorto.fr}
            </Text>
            {vorto.tipo && <Text style={[stiloj.eta, { textAlign: 'center' }]}>{vorto.tipo}</Text>}
            {/* le champ reste modifiable pendant l'affichage du résultat (sinon Android ferme le clavier), mais la
                réponse est figée ; Entrée vérifie, puis passe au mot suivant, sans fermer le clavier */}
            <EoEnigo
              ref={enigo}
              valoro={respondo}
              onSxangxo={rezulto ? () => {} : setRespondo}
              x2u
              placeholder="En espéranto…"
              accessibilityLabel="Traduction en espéranto"
              onSubmitEditing={rezulto ? sekva : () => kontroli()}
              submitBehavior="submit"
              returnKeyType="next"
              autoFocus
            />
            {rezulto && (
              <View
                accessibilityLiveRegion="polite"
                style={{ padding: 10, borderRadius: 6, backgroundColor: rezulto.gxusta ? koloroj.helverda : koloroj.helflava }}
              >
                {/* erreur : ton neutre, pas de rouge (remarque d'une bêta-testeuse : « ça rappelle les corrections de profs ») */}
                <Text style={[stiloj.teksto, { fontWeight: '600', color: rezulto.gxusta ? koloroj.verda : koloroj.primara }]}>
                  {rezulto.gxusta ? 'Bonne réponse !' : 'À retenir :'}
                </Text>
                <Text style={stiloj.teksto}>
                  {rezulto.fr} : <Text style={{ color: koloroj.blua, fontWeight: '600' }}>{rezulto.bona_respondo}</Text>
                  {rezulto.sono && (
                    <Text style={{ color: koloroj.blua }} onPress={() => ludi(rezulto.sono!)} accessibilityRole="button">
                      {'  '}▶ écouter
                    </Text>
                  )}
                </Text>
                {rezulto.aliaj_respondoj && rezulto.aliaj_respondoj.length > 0 && (
                  <Text style={stiloj.eta} testID="revizio-aliaj">
                    Aussi accepté : {rezulto.aliaj_respondoj.join(', ')}
                  </Text>
                )}
              </View>
            )}
            {respondi.error && <Text style={stiloj.eraro}>{respondi.error.message}</Text>}
            {rezulto ? (
              <Butono teksto="Mot suivant" onPress={sekva} />
            ) : (
              <Butono
                teksto={respondo.trim() === '' ? 'Voir la réponse' : 'Vérifier'}
                dua={respondo.trim() === ''}
                onPress={() => kontroli(true)}
                malsxaltita={respondi.isPending}
              />
            )}
          </View>
        )}
      </Stato>
    </ScrollView>
  )
}
