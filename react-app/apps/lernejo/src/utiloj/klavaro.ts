// Hauteur du clavier virtuel sur Android. L'application est affichée bord à bord (edgeToEdgeEnabled) : la fenêtre
// n'est plus réduite à l'ouverture du clavier (adjustResize sans effet), et le bas d'une page restait caché dessous,
// même tout en bas du défilement (la question suivante d'un exercice). Les pages qui défilent ajoutent cette hauteur
// en marge du bas de leur contenu. Sur iOS, ScrollView le fait lui-même (automaticallyAdjustKeyboardInsets).
import { useEffect, useState } from 'react'
import { Keyboard, Platform } from 'react-native'

export function useKlavaroAlteco(): number {
  const [alteco, setAlteco] = useState(0)
  useEffect(() => {
    if (Platform.OS !== 'android') return
    const montri = Keyboard.addListener('keyboardDidShow', (e) => setAlteco(e.endCoordinates.height))
    const kasxi = Keyboard.addListener('keyboardDidHide', () => setAlteco(0))
    return () => {
      montri.remove()
      kasxi.remove()
    }
  }, [])
  return alteco
}
