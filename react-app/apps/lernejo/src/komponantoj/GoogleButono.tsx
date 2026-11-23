// « Continuer avec Google » (#119) sur Android : le sélecteur de comptes Google du téléphone, qui remet un jeton
// d'identité destiné au Client ID web du site (le serveur le vérifie et ne connaît que celui-là). Google reconnaît
// l'application par son nom de package et l'empreinte de sa signature (clients OAuth Android du projet iKurso).
import { useState } from 'react'
import { Pressable, Text } from 'react-native'
import FontAwesome from '@expo/vector-icons/FontAwesome'
import { GoogleSignin, isErrorWithCode, isSuccessResponse, statusCodes } from '@react-native-google-signin/google-signin'
import { GOOGLE_KLIENTO } from '@/api/google'
import { googleStiloj, type GoogleButonoProps } from './GoogleButonoStilo'

let agordita = false

export function GoogleButono({ onJxetono, onEraro, malsxaltita }: GoogleButonoProps) {
  const [okupata, setOkupata] = useState(false)

  async function premi() {
    if (!agordita) {
      GoogleSignin.configure({ webClientId: GOOGLE_KLIENTO })
      agordita = true
    }
    setOkupata(true)
    try {
      await GoogleSignin.hasPlayServices({ showPlayServicesUpdateDialog: true })
      // le compte choisi la fois précédente n'est pas repris d'office : l'élève choisit à chaque fois
      await GoogleSignin.signOut().catch(() => {})
      const respondo = await GoogleSignin.signIn()
      // fenêtre fermée sans choisir de compte : rien à dire
      if (!isSuccessResponse(respondo)) return
      if (respondo.data.idToken) onJxetono(respondo.data.idToken)
      else onEraro('Connexion Google impossible, merci de réessayer.')
    } catch (e) {
      if (isErrorWithCode(e) && e.code === statusCodes.IN_PROGRESS) return
      if (isErrorWithCode(e) && e.code === statusCodes.PLAY_SERVICES_NOT_AVAILABLE) {
        onEraro('Les services Google Play ne sont pas disponibles sur ce téléphone.')
      } else {
        onEraro('Connexion Google impossible, merci de réessayer.')
      }
    } finally {
      setOkupata(false)
    }
  }

  const neaktiva = malsxaltita || okupata
  return (
    <Pressable
      accessibilityRole="button"
      accessibilityLabel="Continuer avec Google"
      disabled={neaktiva}
      onPress={premi}
      style={({ pressed }) => [googleStiloj.butono, { opacity: neaktiva ? 0.5 : pressed ? 0.8 : 1 }]}
    >
      <FontAwesome name="google" size={20} color="#4285F4" />
      <Text style={googleStiloj.teksto}>Continuer avec Google</Text>
    </Pressable>
  )
}
