// Proposition des rappels de révision (#1120), une seule fois après la connexion : Android ne demande pas
// l'autorisation des notifications à l'installation, c'est à l'application de le faire. On explique d'abord
// à quoi elles servent, puis seulement « Activer » ouvre la question d'Android.
import { useEffect, useState } from 'react'
import { Modal, Text, View } from 'react-native'
import { legiAgordojn, permeso, planigiRevizion, proponendaj, proponitaj } from '@/api/sciigoj'
import { Butono } from '@/komponantoj/Bazaj'
import { stiloj } from '@/stiloj'

export function RevizioPropono({ atendi }: { atendi: boolean }) {
  const [videbla, setVidebla] = useState(false)
  const [horo, setHoro] = useState(9)

  useEffect(() => {
    // le nouvel invité arrive dans sa première section : on lui proposera au prochain lancement
    if (atendi) return
    let aktiva = true
    proponendaj().then(async (jes) => {
      if (!jes || !aktiva) return
      setHoro((await legiAgordojn()).horo)
      setVidebla(true)
    })
    return () => {
      aktiva = false
    }
  }, [atendi])

  async function fermi(aktivigi: boolean) {
    setVidebla(false)
    await proponitaj()
    if (aktivigi) {
      await permeso(true)
      await planigiRevizion()
    }
  }

  return (
    <Modal visible={videbla} transparent animationType="fade" onRequestClose={() => void fermi(false)}>
      <View style={{ flex: 1, backgroundColor: 'rgba(0,0,0,0.45)', justifyContent: 'center', padding: 24 }}>
        <View style={[stiloj.karto, { gap: 12, maxWidth: 480, width: '100%', alignSelf: 'center' }]} testID="revizio-propono">
          <Text style={stiloj.titolo}>Rappel de révision</Text>
          <Text style={stiloj.teksto}>
            iKurso peut vous envoyer une notification à {`${horo}\u00a0h`} les jours où des mots de vocabulaire sont à réviser. Réviser au bon
            moment, c’est ce qui aide le plus à les retenir.
          </Text>
          <Text style={stiloj.eta}>Vous pourrez changer l’heure ou arrêter les rappels dans le Profil.</Text>
          <Butono teksto="Activer les rappels" onPress={() => void fermi(true)} />
          <Butono dua teksto="Plus tard" onPress={() => void fermi(false)} />
        </View>
      </View>
    </Modal>
  )
}
