// Élève connecté ou non, pour toute l'application (les routes protégées en dépendent).
import { createContext, use, useEffect, useState, type PropsWithChildren } from 'react'
import { useQueryClient } from '@tanstack/react-query'
import { api, auxskulti, uzanto } from './api/kliento'

type Seanco = {
  sxargxas: boolean
  ensalutita: boolean
  enirnomo: string | null
  ensaluti: (identigilo: string, pasvorto: string) => Promise<string | null>
  elsaluti: () => Promise<void>
}

const SeancoKunteksto = createContext<Seanco | null>(null)

export function useSeanco(): Seanco {
  const seanco = use(SeancoKunteksto)
  if (!seanco) throw new Error('useSeanco hors de <SeancoProvizanto>')
  return seanco
}

export function SeancoProvizanto({ children }: PropsWithChildren) {
  const qc = useQueryClient()
  const [sxargxas, setSxargxas] = useState(true)
  const [enirnomo, setEnirnomo] = useState<string | null>(null)

  useEffect(() => {
    uzanto().then((u) => {
      setEnirnomo(u?.enirnomo ?? null)
      setSxargxas(false)
    })
    return auxskulti((ensalutita) => {
      if (!ensalutita) {
        setEnirnomo(null)
        qc.clear()
      }
    })
  }, [qc])

  const seanco: Seanco = {
    sxargxas,
    ensalutita: enirnomo !== null,
    enirnomo,
    async ensaluti(identigilo, pasvorto) {
      const { data, error } = await api.ensaluti(identigilo, pasvorto)
      if (!data) return (error as { error?: string } | undefined)?.error ?? 'Connexion impossible'
      qc.clear()
      setEnirnomo(data.user.enirnomo)
      return null
    },
    async elsaluti() {
      await api.elsaluti()
      setEnirnomo(null)
      qc.clear()
    },
  }

  return <SeancoKunteksto value={seanco}>{children}</SeancoKunteksto>
}
