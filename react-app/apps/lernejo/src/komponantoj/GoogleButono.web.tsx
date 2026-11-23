// « Continuer avec Google » (#119) dans la version web de l'application : le bouton de Google Identity Services,
// comme sur le site, avec le Client ID web. Le script de Google n'est chargé qu'à l'affichage du bouton.
// Les tests e2e appellent window.ikursoGoogle({ credential }) avec leur propre jeton, comme sur le site.
import { useEffect, useRef, type ComponentRef } from 'react'
import { View } from 'react-native'
import { GOOGLE_KLIENTO } from '@/api/google'
import type { GoogleButonoProps } from './GoogleButonoStilo'

type Gis = {
  accounts: {
    id: {
      initialize(agordoj: { client_id: string; callback: (r: { credential?: string }) => void; auto_select?: boolean }): void
      renderButton(elemento: HTMLElement, agordoj: Record<string, unknown>): void
    }
  }
}
type Fenestro = Window & { google?: Gis; ikursoGoogle?: (r: { credential?: string }) => void }

let skripto: Promise<void> | null = null
function sxargxi(): Promise<void> {
  skripto ??= new Promise((solvi, malsukcesi) => {
    const s = document.createElement('script')
    s.src = 'https://accounts.google.com/gsi/client'
    s.async = true
    s.onload = () => solvi()
    s.onerror = () => {
      skripto = null
      malsukcesi(new Error('gsi'))
    }
    document.head.appendChild(s)
  })
  return skripto
}

export function GoogleButono({ onJxetono, onEraro, malsxaltita }: GoogleButonoProps) {
  const ujo = useRef<ComponentRef<typeof View>>(null)
  // la fonction appelée par Google change avec l'écran : on garde la dernière
  const revoko = useRef({ onJxetono, onEraro })
  revoko.current = { onJxetono, onEraro }

  useEffect(() => {
    const fenestro = window as Fenestro
    const respondi = (r: { credential?: string }) => {
      if (r.credential) revoko.current.onJxetono(r.credential)
      else revoko.current.onEraro('Connexion Google impossible, merci de réessayer.')
    }
    fenestro.ikursoGoogle = respondi
    let nuligita = false
    sxargxi()
      .then(() => {
        const elemento = ujo.current as unknown as HTMLElement | null
        if (nuligita || !fenestro.google || !elemento) return
        fenestro.google.accounts.id.initialize({ client_id: GOOGLE_KLIENTO, callback: respondi, auto_select: false })
        fenestro.google.accounts.id.renderButton(elemento, {
          type: 'standard',
          theme: 'outline',
          size: 'large',
          text: 'continue_with',
          shape: 'rectangular',
          locale: 'fr',
          width: Math.min(400, elemento.clientWidth || 320),
        })
      })
      .catch(() => {})
    return () => {
      nuligita = true
      if (fenestro.ikursoGoogle === respondi) delete fenestro.ikursoGoogle
    }
  }, [])

  return (
    <View
      ref={ujo}
      testID="google-butono"
      style={{ minHeight: 44, alignItems: 'center', opacity: malsxaltita ? 0.5 : 1 }}
      pointerEvents={malsxaltita ? 'none' : 'auto'}
    />
  )
}
