// Hauteur du clavier virtuel sur Android. L'application est affichée bord à bord (edgeToEdgeEnabled) : la fenêtre
// n'est plus réduite à l'ouverture du clavier (adjustResize sans effet), et le bas d'une page restait caché dessous,
// même tout en bas du défilement (la question suivante d'un exercice). Les pages qui défilent ajoutent cette hauteur
// en marge du bas de leur contenu. Sur iOS, ScrollView le fait lui-même (automaticallyAdjustKeyboardInsets).
import { useEffect, useRef, useState, type ComponentRef, type RefObject } from 'react'
import {
  DeviceEventEmitter,
  Keyboard,
  Platform,
  TextInput,
  type NativeScrollEvent,
  type NativeSyntheticEvent,
  type ScrollView,
} from 'react-native'

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

// Champ touché caché par le clavier : la page défile pour l'amener au-dessus, avec la rangée de lettres accentuées
// qui s'affiche sous le champ (remarque d'une bêta-testeuse sur le texte à écrire de la 8.5 : le champ et les lettres
// restaient sous le clavier tant qu'on ne faisait pas défiler à la main). Sur Android seulement : iOS le fait déjà.
// Le champ prévient par fokusSxangxo() (EoEnigo) ; l'ouverture du clavier refait la mesure.
const FOKUSO = 'ikurso.fokuso'
const SUB_LA_KAMPO = 72 // rangée de lettres accentuées et un peu d'air

export function fokusSxangxo() {
  if (Platform.OS === 'android') DeviceEventEmitter.emit(FOKUSO)
}

export function useMontriFokuson(rulumo: RefObject<ComponentRef<typeof ScrollView> | null>) {
  const deSupre = useRef(0)
  const klavaroSupro = useRef<number | null>(null)
  useEffect(() => {
    if (Platform.OS !== 'android') return
    let tempoj: ReturnType<typeof setTimeout>[] = []
    function mezuri() {
      const kampo = TextInput.State.currentlyFocusedInput()
      const supro = klavaroSupro.current
      if (!kampo || supro === null) return
      kampo.measureInWindow((_x, y, _l, alteco) => {
        const troa = y + alteco + SUB_LA_KAMPO - supro
        // champ plus haut que la place libre (long texte) : on garde son début visible
        const maks = Math.max(0, y - 120)
        if (troa > 0) rulumo.current?.scrollTo({ y: deSupre.current + Math.min(troa, maks), animated: true })
      })
    }
    function montri() {
      tempoj.forEach(clearTimeout)
      // après la mise en page ; la marge du bas (hauteur du clavier) arrive parfois après le premier essai, et le
      // défilement s'arrêtait alors au bas de l'ancienne page : seconde mesure, sans effet si le champ est visible
      tempoj = [setTimeout(mezuri, 150), setTimeout(mezuri, 500)]
    }
    const fokuso = DeviceEventEmitter.addListener(FOKUSO, montri)
    const malfermo = Keyboard.addListener('keyboardDidShow', (e) => {
      klavaroSupro.current = e.endCoordinates.screenY
      montri()
    })
    const fermo = Keyboard.addListener('keyboardDidHide', () => {
      klavaroSupro.current = null
    })
    return () => {
      tempoj.forEach(clearTimeout)
      fokuso.remove()
      malfermo.remove()
      fermo.remove()
    }
  }, [rulumo])
  return (e: NativeSyntheticEvent<NativeScrollEvent>) => {
    deSupre.current = e.nativeEvent.contentOffset.y
  }
}
