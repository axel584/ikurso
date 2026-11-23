// Commun aux deux boutons « Continuer avec Google » (Android et web) : propriétés et allure du bouton Android.
import { StyleSheet } from 'react-native'
import { koloroj } from '@/stiloj'

export type GoogleButonoProps = {
  // jeton d'identité remis par Google, à envoyer au serveur (auth/google/token)
  onJxetono: (credential: string) => void
  onEraro: (mesagxo: string) => void
  malsxaltita?: boolean
}

export const googleStiloj = StyleSheet.create({
  butono: {
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'center',
    gap: 10,
    minHeight: 48,
    paddingHorizontal: 16,
    borderRadius: 6,
    borderWidth: 1,
    borderColor: '#dadce0',
    backgroundColor: koloroj.blanka,
  },
  teksto: { fontSize: 16, fontWeight: '600', color: '#3c4043' },
})
