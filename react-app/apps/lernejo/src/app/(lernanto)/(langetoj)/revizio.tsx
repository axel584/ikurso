// Révision du vocabulaire : un mot français à la fois, l'élève tape sa traduction en espéranto.
// Bonne réponse, le mot revient plus tard ; mauvaise, au plus tôt (calcul fait par le serveur).
import { useCallback, useState } from 'react'
import { ScrollView, Text, View } from 'react-native'
import { useQueryClient } from '@tanstack/react-query'
import { useFocusEffect } from 'expo-router'
import { useRevizio, useRevizioRespondo } from '@/api/demandoj'
import { legiAgordojn, permeso, planigiRevizion } from '@/api/sciigoj'
import { Butono, Stato } from '@/komponantoj/Bazaj'
import { EoEnigo } from '@/komponantoj/EoEnigo'
import { useLudi } from '@/komponantoj/Sono'
import { koloroj, stiloj } from '@/stiloj'

export default function Revizio() {
  const qc = useQueryClient()
  const { data, isLoading, error } = useRevizio()
  const respondi = useRevizioRespondo()
  const ludi = useLudi()
  const [nuna, setNuna] = useState(0)
  const [respondo, setRespondo] = useState('')
  const [gxustaj, setGxustaj] = useState(0)

  // rappels de révision (#1120) : l'autorisation est demandée ici, où elle a du sens, si le rappel est activé ;
  // en quittant l'écran, les rappels sont recalculés avec les mots qui restent
  useFocusEffect(
    useCallback(() => {
      legiAgordojn().then((a) => {
        if (a.sxaltita) permeso(true).then(() => planigiRevizion())
      })
      return () => void planigiRevizion()
    }, []),
  )

  const vortoj = data?.vortoj ?? []
  const vorto = vortoj[nuna]
  const rezulto = respondi.data?.vorto_id === vorto?.id ? respondi.data : undefined

  function kontroli() {
    if (!vorto || respondo.trim() === '' || respondi.isPending) return
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
  }

  function rekomenci() {
    respondi.reset()
    setRespondo('')
    setNuna(0)
    setGxustaj(0)
    qc.invalidateQueries({ queryKey: ['revizio'] })
  }

  return (
    <ScrollView style={stiloj.ekrano} contentContainerStyle={stiloj.enhavo} keyboardShouldPersistTaps="handled">
      <Stato sxargxas={isLoading} eraro={error}>
        {vortoj.length === 0 ? (
          <View style={stiloj.karto}>
            <Text style={stiloj.teksto}>
              Aucun mot à réviser pour le moment. Les mots des sections de vocabulaire que vous terminez s’ajoutent ici.
            </Text>
          </View>
        ) : !vorto ? (
          <View style={stiloj.karto} testID="revizio-fino">
            <Text style={stiloj.subtitolo}>Révision terminée</Text>
            <Text style={stiloj.teksto}>
              {gxustaj} bonne{gxustaj > 1 ? 's' : ''} réponse{gxustaj > 1 ? 's' : ''} sur {vortoj.length}.
            </Text>
            <Butono teksto="Réviser d’autres mots" onPress={rekomenci} />
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
            <EoEnigo
              valoro={respondo}
              onSxangxo={setRespondo}
              x2u
              editable={!rezulto}
              placeholder="En espéranto…"
              accessibilityLabel="Traduction en espéranto"
              onSubmitEditing={rezulto ? sekva : kontroli}
              autoFocus
            />
            {rezulto && (
              <View
                accessibilityLiveRegion="polite"
                style={{ padding: 10, borderRadius: 6, backgroundColor: rezulto.gxusta ? koloroj.helverda : koloroj.helrugxa }}
              >
                <Text style={[stiloj.teksto, { fontWeight: '600', color: rezulto.gxusta ? koloroj.verda : koloroj.rugxa }]}>
                  {rezulto.gxusta ? 'Bonne réponse !' : 'Ce n’est pas ça.'}
                </Text>
                <Text style={stiloj.teksto}>
                  {rezulto.fr} : <Text style={{ color: koloroj.blua, fontWeight: '600' }}>{rezulto.bona_respondo}</Text>
                  {rezulto.sono && (
                    <Text style={{ color: koloroj.blua }} onPress={() => ludi(rezulto.sono!)} accessibilityRole="button">
                      {'  '}▶ écouter
                    </Text>
                  )}
                </Text>
              </View>
            )}
            {respondi.error && <Text style={stiloj.eraro}>{respondi.error.message}</Text>}
            {rezulto ? (
              <Butono teksto="Mot suivant" onPress={sekva} />
            ) : (
              <Butono teksto="Vérifier" onPress={kontroli} malsxaltita={respondi.isPending || respondo.trim() === ''} />
            )}
          </View>
        )}
      </Stato>
    </ScrollView>
  )
}
