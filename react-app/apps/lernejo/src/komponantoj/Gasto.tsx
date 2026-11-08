// Ce que voit l'invité (#1089) : le bandeau des sections, le rappel d'inscription et l'invitation à créer
// un compte pour être corrigé.
import { Modal, Text, View } from 'react-native'
import { router } from 'expo-router'
import { Butono } from './Bazaj'
import { koloroj, stiloj } from '@/stiloj'

// rappel montré une seule fois, après la 4e section terminée
export const REMEMORIGO = 'rememorigo_aligxi'
export const REMEMORIGO_POST = 4

export function GastoStrio() {
  return (
    <View style={{ backgroundColor: '#EFEDEB', borderRadius: 8, padding: 10 }} testID="gasto-strio">
      <Text style={{ color: koloroj.primara, fontSize: 13, lineHeight: 19 }}>
        Vous suivez le cours en invité : votre travail est gardé sur cet appareil.{' '}
        <Text accessibilityRole="link" style={{ fontWeight: '700', textDecorationLine: 'underline' }} onPress={() => router.push('/aligxi')}>
          Créer un compte
        </Text>
      </Text>
    </View>
  )
}

// En fenêtre par-dessus la section : ajouté en bas de la page, il restait hors de l'écran et « Terminé ! »
// semblait ne rien faire.
export function Rememorigo({ onPlusTard, onAligxi }: { onPlusTard: () => void; onAligxi: () => void }) {
  return (
    <Modal transparent animationType="fade" onRequestClose={onPlusTard}>
      <View style={{ flex: 1, backgroundColor: 'rgba(0,0,0,0.4)', justifyContent: 'center', alignItems: 'center', padding: 16 }}>
        <View style={[stiloj.karto, { gap: 10, width: '100%', maxWidth: 440 }]} testID="rememorigo" accessibilityViewIsModal>
          <Text style={stiloj.subtitolo} accessibilityRole="header">
            Vous avancez bien !
          </Text>
          <Text style={stiloj.teksto}>
            Créez un compte pour ne pas perdre votre travail et le retrouver sur le site ou sur un autre appareil.
          </Text>
          <Butono teksto="Créer mon compte" onPress={onAligxi} />
          <Butono dua teksto="Plus tard" onPress={onPlusTard} />
        </View>
      </View>
    </Modal>
  )
}

// À la place de l'envoi de la leçon au correcteur, réservé aux comptes.
export function KontoBezonata() {
  return (
    <View style={{ backgroundColor: koloroj.primara, borderRadius: 12, padding: 20, gap: 12 }} testID="konto-bezonata">
      <Text style={{ color: koloroj.blanka, fontSize: 19, fontWeight: '700' }} accessibilityRole="header">
        Pour être corrigé, créez votre compte
      </Text>
      <View style={{ gap: 4 }}>
        {[
          'vos réponses sont gardées, rien n’est à refaire',
          'un correcteur vous est attribué',
          'vous retrouvez votre cours sur le site et sur tous vos appareils',
        ].map((t) => (
          <Text key={t} style={{ color: '#F2F1F0', fontSize: 15, lineHeight: 22 }}>
            • {t}
          </Text>
        ))}
      </View>
      <Butono teksto="Créer mon compte pour être corrigé" onPress={() => router.push('/aligxi')} />
      <Text
        accessibilityRole="link"
        style={{ color: koloroj.blanka, fontSize: 14, fontWeight: '600', textAlign: 'center', padding: 8 }}
        onPress={() => router.push('/ensaluti')}
      >
        J’ai déjà un compte : me connecter
      </Text>
    </View>
  )
}
