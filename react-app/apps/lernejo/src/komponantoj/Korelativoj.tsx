// Schéma des corrélatifs (##KORELATIVOJ##, #1110), comme sur le site (korelativaSkemo() dans webui.inc.php) :
// un début (ki-, ti-…) + une fin (-o, -u…) = un corrélatif ; choisir un autre début ou une autre fin change l'exemple.
// Débuts et fins sur deux colonnes, pour voir tout le schéma sur un écran de téléphone.
import { useState } from 'react'
import { Platform, Pressable, Text, View } from 'react-native'
import type { Korelativoj as Datumoj } from '@/utiloj/enhavo'
import { koloroj } from '@/stiloj'

const BLUA = '#1e88e5'
const MONO = Platform.select({ ios: 'Menlo', android: 'monospace', default: 'Consolas, "Liberation Mono", Menlo, monospace' })

function Karto({ ero, senco, elektita, onPress }: { ero: string; senco: string; elektita: boolean; onPress: () => void }) {
  return (
    <Pressable
      accessibilityRole="button"
      accessibilityState={{ selected: elektita }}
      accessibilityLabel={`${ero} ${senco}`}
      onPress={onPress}
      style={({ pressed }) => ({
        flexDirection: 'row',
        alignItems: 'center',
        gap: 8,
        borderWidth: 2,
        borderColor: BLUA,
        borderRadius: 12,
        paddingVertical: 8,
        paddingHorizontal: 10,
        backgroundColor: elektita ? BLUA : pressed ? koloroj.helblua : koloroj.blanka,
        flexBasis: '47%',
        flexGrow: 1,
      })}
    >
      <Text style={{ minWidth: 36, fontFamily: MONO, fontSize: 18, fontWeight: '700', color: elektita ? koloroj.blanka : BLUA }}>
        {ero}
      </Text>
      <Text style={{ fontSize: 15, color: elektita ? koloroj.blanka : koloroj.teksto, flexShrink: 1 }}>{senco}</Text>
    </Pressable>
  )
}

function Titolo({ teksto }: { teksto: string }) {
  return (
    <Text accessibilityRole="header" style={{ color: BLUA, fontWeight: '700', letterSpacing: 1, fontSize: 15 }}>
      {teksto.toUpperCase()}
    </Text>
  )
}

function Signo({ teksto }: { teksto: string }) {
  return (
    <Text aria-hidden style={{ color: BLUA, fontSize: 30, fontWeight: '700', textAlign: 'center', lineHeight: 32 }}>
      {teksto}
    </Text>
  )
}

// Les cartes sur deux colonnes ; la dernière, seule sur sa ligne, garde la largeur d'une colonne.
function Kartoj({ eroj, montri, elektita, elekti }: {
  eroj: [string, string][]
  montri: (ero: string) => string
  elektita: string
  elekti: (ero: string) => void
}) {
  return (
    <View style={{ flexDirection: 'row', flexWrap: 'wrap', gap: 8 }}>
      {eroj.map(([ero, senco]) => (
        <Karto key={ero} ero={montri(ero)} senco={senco} elektita={ero === elektita} onPress={() => elekti(ero)} />
      ))}
      {eroj.length % 2 === 1 && <View style={{ flexBasis: '47%', flexGrow: 1 }} />}
    </View>
  )
}

export function Korelativoj({ datumoj }: { datumoj: Datumoj }) {
  const [komenco, setKomenco] = useState(datumoj.ekzemplo[0])
  const [fino, setFino] = useState(datumoj.ekzemplo[1])
  const vorto = komenco + fino
  const { komencoj, finoj } = datumoj
  return (
    <View style={{ gap: 8, width: '100%', maxWidth: 560, alignSelf: 'center' }} testID="korelativoj">
      <Titolo teksto="1 · Un début" />
      <Kartoj eroj={komencoj} montri={(ero) => `${ero}-`} elektita={komenco} elekti={setKomenco} />
      <Signo teksto="+" />
      <Titolo teksto="2 · Une fin" />
      <Kartoj eroj={finoj} montri={(ero) => `-${ero}`} elektita={fino} elekti={setFino} />
      <Signo teksto="=" />
      <View
        accessibilityLiveRegion="polite"
        aria-live="polite"
        style={{ backgroundColor: BLUA, borderRadius: 16, padding: 12, alignItems: 'center', gap: 2 }}
        testID="korelativoj-rezulto"
      >
        <Text style={{ color: koloroj.blanka, fontSize: 15 }}>exemple</Text>
        <Text style={{ color: koloroj.blanka, fontFamily: MONO, fontSize: 26, fontWeight: '700', textAlign: 'center' }}>
          {`${komenco}- + -${fino} = ${vorto}`}
        </Text>
        <Text style={{ color: koloroj.blanka, fontSize: 17, textAlign: 'center' }}>{datumoj.vortoj[vorto] ?? ''}</Text>
      </View>
      <Text style={{ textAlign: 'center', fontSize: 15, color: koloroj.teksto }}>
        {`${komencoj.length} débuts × ${finoj.length} fins = ${komencoj.length * finoj.length} corrélatifs`}
      </Text>
    </View>
  )
}
