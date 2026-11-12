// Profil de l'élève : son compte, le mode de correction de ses cours (#627), le rappel de révision (#1120), la déconnexion (le refresh token est révoqué sur le serveur) et la suppression du compte.
// L'invité (#1089) y trouve la création de compte et la connexion ; le compte pas encore activé, son lien d'activation.
import { useState } from 'react'
import { ScrollView, Text, TextInput, View } from 'react-native'
import { router } from 'expo-router'
import * as Linking from 'expo-linking'
import { retadreso } from '@/api/kliento'
import { useForigiKonton, useKursoj, useMi, useSxangxiKorektadon, type KursoKodo } from '@/api/demandoj'
import { Butono, Stato } from '@/komponantoj/Bazaj'
import { RevizioRememorigo } from '@/komponantoj/RevizioRememorigo'
import { useSeanco } from '@/seanco'
import { koloroj, stiloj } from '@/stiloj'

function Gasto() {
  const { elsaluti } = useSeanco()
  const [forlasi, setForlasi] = useState(false)
  return (
    <>
      <View style={stiloj.karto}>
        <Text style={stiloj.subtitolo}>Vous suivez le cours en invité</Text>
        <Text style={stiloj.teksto}>
          Votre travail est gardé sur cet appareil. Créez un compte pour être corrigé et le retrouver sur le site ou sur un
          autre appareil.
        </Text>
      </View>
      <Butono teksto="Créer mon compte" onPress={() => router.push('/aligxi')} />
      <Butono dua teksto="J’ai déjà un compte : me connecter" onPress={() => router.push('/ensaluti')} />
      {forlasi ? (
        <View style={[stiloj.karto, { borderColor: koloroj.rugxa }]}>
          <Text style={stiloj.teksto}>Sans compte, ce que vous avez fait jusqu’ici sera perdu.</Text>
          <Butono dua teksto="Quitter et tout effacer" onPress={elsaluti} />
          <Butono dua teksto="Annuler" onPress={() => setForlasi(false)} />
        </View>
      ) : (
        <Text accessibilityRole="button" style={[stiloj.eta, { textAlign: 'center', padding: 8 }]} onPress={() => setForlasi(true)}>
          Quitter le mode invité
        </Text>
      )}
    </>
  )
}

// Mode de correction des cours suivis avec un correcteur (#627, #1130) : passer à la correction automatique ou à un
// correcteur bénévole, comme dans le profil du site (sxangxiKorektadon.php).
function Korektado() {
  const { data } = useKursoj()
  const sxangxi = useSxangxiKorektadon()
  const [konfirmo, setKonfirmo] = useState<{ kurso: KursoKodo; al: 'ia' | 'volontulo' } | null>(null)
  const kursoj = (data?.kursoj ?? []).filter((k) => k.korektanto && (k.stato === 'K' || k.stato === 'N'))
  if (kursoj.length === 0) return null
  return (
    <View style={[stiloj.karto, { gap: 8 }]} testID="korektado">
      <Text style={stiloj.subtitolo}>Correction de mes leçons</Text>
      {kursoj.map((k) => {
        const al = k.korektanto?.ia ? 'volontulo' : 'ia'
        return (
          <View key={k.kodo} style={{ gap: 4 }}>
            <Text style={stiloj.teksto}>
              {k.nomo} : {k.korektanto?.ia ? 'correction automatique' : `${k.korektanto?.personnomo || k.korektanto?.enirnomo}`}
            </Text>
            {konfirmo?.kurso === k.kodo ? (
              <>
                <Text style={stiloj.eta}>
                  {al === 'ia'
                    ? 'Vos prochaines leçons seront corrigées par une intelligence artificielle, et votre correcteur en sera prévenu.'
                    : 'Un correcteur bénévole vous sera attribué et corrigera vos prochaines leçons.'}
                </Text>
                <Butono
                  teksto={sxangxi.isPending ? 'Changement…' : 'Confirmer'}
                  malsxaltita={sxangxi.isPending}
                  onPress={() => sxangxi.mutate(konfirmo, { onSuccess: () => setKonfirmo(null) })}
                />
                <Butono dua teksto="Annuler" onPress={() => setKonfirmo(null)} />
              </>
            ) : (
              <Text accessibilityRole="button" style={{ color: koloroj.blua, fontSize: 15 }} onPress={() => setKonfirmo({ kurso: k.kodo, al })}>
                {al === 'ia' ? 'Passer à la correction automatique' : 'Être corrigé par un correcteur bénévole'}
              </Text>
            )}
          </View>
        )
      })}
      {sxangxi.error && <Text style={stiloj.eraro}>{sxangxi.error.message}</Text>}
    </View>
  )
}

// Suppression du compte, comme forigiKonton.php sur le site (exigée par Google Play, #1090)
function ForigiKonton({ rajtoj }: { rajtoj: string }) {
  const { elsaluti } = useSeanco()
  const forigi = useForigiKonton()
  const [malfermita, setMalfermita] = useState(false)
  const [pasvorto, setPasvorto] = useState('')
  if (!malfermita) {
    return (
      <Text accessibilityRole="button" style={[stiloj.eta, { textAlign: 'center', padding: 8 }]} onPress={() => setMalfermita(true)}>
        Supprimer mon compte
      </Text>
    )
  }
  if (rajtoj === 'K' || rajtoj === 'A') {
    return (
      <View style={stiloj.karto}>
        <Text style={stiloj.teksto}>
          Votre compte est un compte de correcteur ou d’administrateur. Pour le supprimer, contactez les administrateurs du
          cours, qui confieront vos élèves à un autre correcteur.
        </Text>
        <Butono dua teksto="Fermer" onPress={() => setMalfermita(false)} />
      </View>
    )
  }
  return (
    <View style={[stiloj.karto, { borderColor: koloroj.rugxa, gap: 10 }]} testID="forigi-konton">
      <Text style={stiloj.subtitolo}>Supprimer mon compte</Text>
      <Text style={stiloj.teksto}>
        La suppression efface définitivement votre compte, vos informations personnelles, vos réponses aux exercices, vos
        corrections et votre progression dans les cours. Elle ne peut pas être annulée.
      </Text>
      <Text style={stiloj.eta}>
        Si vous pensez reprendre un jour les cours, exportez d’abord vos données depuis{' '}
        <Text style={{ color: koloroj.blua }} accessibilityRole="link" onPress={() => Linking.openURL(retadreso('personinformoj.php'))}>
          votre profil sur le site
        </Text>
        .
      </Text>
      <TextInput
        style={stiloj.enigo}
        secureTextEntry
        autoCapitalize="none"
        autoComplete="current-password"
        placeholder="Votre mot de passe, pour confirmer"
        accessibilityLabel="Votre mot de passe, pour confirmer"
        value={pasvorto}
        onChangeText={setPasvorto}
      />
      {forigi.error && <Text style={stiloj.eraro}>{forigi.error.message}</Text>}
      <Butono
        teksto={forigi.isPending ? 'Suppression…' : 'Supprimer définitivement mon compte'}
        malsxaltita={pasvorto === '' || forigi.isPending}
        stilo={{ backgroundColor: koloroj.rugxa }}
        onPress={() => forigi.mutate(pasvorto, { onSuccess: () => elsaluti() })}
      />
      <Butono dua teksto="Annuler" onPress={() => setMalfermita(false)} />
    </View>
  )
}

export default function Profilo() {
  const { elsaluti, gasto } = useSeanco()
  const { data, isLoading, error } = useMi()
  const u = data?.user
  if (gasto) {
    return (
      <ScrollView style={stiloj.ekrano} contentContainerStyle={stiloj.enhavo}>
        <RevizioRememorigo />
        <Gasto />
      </ScrollView>
    )
  }
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
        {u && u.aktivigita === false && (
          <View style={[stiloj.karto, { backgroundColor: koloroj.helblua }]}>
            <Text style={stiloj.teksto}>
              Votre compte n’est pas encore activé : suivez le lien reçu par mail pour envoyer vos leçons à votre correcteur.
            </Text>
            <Butono dua teksto="Recevoir à nouveau le lien" onPress={() => router.push('/konfirmi')} />
          </View>
        )}
      </Stato>
      <Korektado />
      <RevizioRememorigo />
      <Butono dua teksto="Modifier mon profil sur le site" onPress={() => Linking.openURL(retadreso('personinformoj.php'))} />
      <Butono teksto="Se déconnecter" onPress={elsaluti} />
      {u && <ForigiKonton rajtoj={u.rajtoj} />}
    </ScrollView>
  )
}
