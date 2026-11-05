// Champ de réponse : méthode « x » si l'exercice la prévoit (x2u), et rangée de lettres accentuées
// (ĉ ĝ ĥ ĵ ŝ ŭ) au-dessus du clavier tant que le champ a le focus.
import { useEffect, useRef, useState, type ComponentRef } from 'react'
import { Pressable, Text, TextInput, View, type TextInputProps } from 'react-native'
import { SUPERSIGNITAJ, xAlUnikodo } from '@/utiloj/eotajpu'
import { koloroj, stiloj } from '@/stiloj'

type Props = Omit<TextInputProps, 'value' | 'onChangeText'> & {
  valoro: string
  onSxangxo: (teksto: string) => void
  x2u: boolean
}

export function EoEnigo({ valoro, onSxangxo, x2u, onFocus, onBlur, style, ...aliaj }: Props) {
  const [fokuso, setFokuso] = useState(false)
  const elekto = useRef({ start: valoro.length, end: valoro.length })
  const enigo = useRef<ComponentRef<typeof TextInput>>(null)
  // un appui sur une lettre ne doit pas faire perdre le focus (et donc enregistrer la réponse) au champ
  const literoPremata = useRef(false)
  // la rangée de lettres disparaît un peu après la perte du focus : sinon le bouton suivant remonte sous le doigt
  // au moment du clic, qui tombe à côté
  const kasxo = useRef<ReturnType<typeof setTimeout> | null>(null)
  useEffect(() => () => clearTimeout(kasxo.current ?? undefined), [])

  function sxangxi(teksto: string) {
    onSxangxo(x2u ? xAlUnikodo(teksto) : teksto)
  }

  function enmeti(litero: string) {
    const { start, end } = elekto.current
    const nova = valoro.slice(0, start) + litero + valoro.slice(end)
    elekto.current = { start: start + 1, end: start + 1 }
    onSxangxo(nova)
    enigo.current?.focus()
  }

  return (
    <View style={{ gap: 4 }}>
      <TextInput
        ref={enigo}
        {...aliaj}
        style={[stiloj.enigo, style]}
        value={valoro}
        onChangeText={sxangxi}
        onSelectionChange={(e) => {
          elekto.current = e.nativeEvent.selection
        }}
        autoCapitalize="none"
        autoCorrect={false}
        spellCheck={false}
        onFocus={(e) => {
          clearTimeout(kasxo.current ?? undefined)
          setFokuso(true)
          onFocus?.(e)
        }}
        onBlur={(e) => {
          if (literoPremata.current) return
          kasxo.current = setTimeout(() => setFokuso(false), 300)
          onBlur?.(e)
        }}
      />
      {fokuso && (
        <View style={{ flexDirection: 'row', gap: 6, flexWrap: 'wrap' }}>
          {SUPERSIGNITAJ.map((litero) => (
            <Pressable
              key={litero}
              accessibilityRole="button"
              accessibilityLabel={`Insérer ${litero}`}
              onPressIn={() => {
                literoPremata.current = true
              }}
              onPressOut={() => {
                literoPremata.current = false
              }}
              onPress={() => enmeti(litero)}
              style={({ pressed }) => ({
                minWidth: 40,
                paddingVertical: 6,
                borderRadius: 6,
                alignItems: 'center',
                backgroundColor: pressed ? koloroj.blua : koloroj.helblua,
              })}
            >
              <Text style={{ fontSize: 18, color: koloroj.malhelblua }}>{litero}</Text>
            </Pressable>
          ))}
        </View>
      )}
    </View>
  )
}
