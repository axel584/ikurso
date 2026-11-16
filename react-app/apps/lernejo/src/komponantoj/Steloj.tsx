// Bonne réponse : quelques étoiles vertes partent en gerbe depuis un point et disparaissent en fondu.
// Posé en absolu sur l'élément réussi, sans gêner les touchers ; une nouvelle clé (key) relance l'effet.
// Rien si l'élève a demandé de réduire les animations dans les réglages du téléphone.
import { useEffect, useRef, useState } from 'react'
import { AccessibilityInfo, Animated, Easing, Platform, View, type ViewStyle } from 'react-native'

const KOLOROJ = ['#2e7d32', '#43a047', '#66bb6a', '#81c784']
const NOMBRO = 10
const DAUXRO = 900
const NATIVA = Platform.OS !== 'web'

type Stelo = { x: number; y: number; grandeco: number; koloro: string; turno: number }

function kreiStelojn(): Stelo[] {
  const komenco = Math.random() * Math.PI * 2
  return Array.from({ length: NOMBRO }, (_, i) => {
    const angulo = komenco + (i / NOMBRO) * Math.PI * 2 + (Math.random() - 0.5) * 0.5
    const distanco = 40 + Math.random() * 40
    return {
      x: Math.cos(angulo) * distanco,
      // un peu plus vers le haut, comme une gerbe
      y: Math.sin(angulo) * distanco - 10,
      grandeco: 15 + Math.random() * 9,
      koloro: KOLOROJ[i % KOLOROJ.length],
      turno: (Math.random() - 0.5) * 180,
    }
  })
}

export function Steloj({ stilo }: { stilo?: ViewStyle }) {
  const progreso = useRef(new Animated.Value(0)).current
  const [steloj] = useState(kreiStelojn)
  const [videbla, setVidebla] = useState(true)

  useEffect(() => {
    let nuligita = false
    AccessibilityInfo.isReduceMotionEnabled()
      .catch(() => false)
      .then((redukti) => {
        if (nuligita) return
        if (redukti) {
          setVidebla(false)
          return
        }
        Animated.timing(progreso, { toValue: 1, duration: DAUXRO, easing: Easing.out(Easing.cubic), useNativeDriver: NATIVA }).start(() => {
          if (!nuligita) setVidebla(false)
        })
      })
    return () => {
      nuligita = true
      progreso.stopAnimation()
    }
  }, [progreso])

  if (!videbla) return null
  return (
    <View pointerEvents="none" style={[{ position: 'absolute', width: 0, height: 0, overflow: 'visible', zIndex: 10 }, stilo]} testID="steloj">
      {steloj.map((s, i) => (
        <Animated.Text
          key={i}
          style={{
            position: 'absolute',
            left: -s.grandeco / 2,
            top: -s.grandeco / 2,
            fontSize: s.grandeco,
            lineHeight: s.grandeco * 1.1,
            color: s.koloro,
            opacity: progreso.interpolate({ inputRange: [0, 0.15, 0.55, 1], outputRange: [0, 1, 0.9, 0] }),
            transform: [
              { translateX: progreso.interpolate({ inputRange: [0, 1], outputRange: [0, s.x] }) },
              { translateY: progreso.interpolate({ inputRange: [0, 1], outputRange: [0, s.y] }) },
              { scale: progreso.interpolate({ inputRange: [0, 0.3, 1], outputRange: [0.3, 1.1, 0.7] }) },
              { rotate: progreso.interpolate({ inputRange: [0, 1], outputRange: ['0deg', `${s.turno}deg`] }) },
            ],
          }}
        >
          ★
        </Animated.Text>
      ))}
    </View>
  )
}
