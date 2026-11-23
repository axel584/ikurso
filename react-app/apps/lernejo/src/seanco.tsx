// Élève connecté, invité ou personne, pour toute l'application (les routes protégées en dépendent).
// L'invité (#1089) a des jetons comme un élève, sans compte : il en crée un, ou se connecte, quand il veut.
import { createContext, use, useEffect, useState, type PropsWithChildren } from 'react'
import { useQueryClient } from '@tanstack/react-query'
import type { Sxlosiloj } from '@ikurso/api-client'
import { api, auxskulti, datumoj, kliento, uzanto } from './api/kliento'
import { forgesiCxion } from './api/kasxmemoro'
import { nuligiRevizion, planigiRevizion } from './api/sciigoj'
import type { KursoKodo } from './api/demandoj'

type Uzanto = Sxlosiloj['user']

type Seanco = {
  sxargxas: boolean
  // des jetons, d'un compte ou d'un invité
  ensalutita: boolean
  gasto: boolean
  enirnomo: string | null
  // cours choisi par le nouvel invité : l'application l'ouvre à sa première section
  komencota: KursoKodo | null
  komencis: () => void
  komenciGaste: (kurso: KursoKodo) => Promise<string | null>
  ensaluti: (identigilo: string, pasvorto: string) => Promise<string | null>
  // compte Google (#119) : connexion, ou inscription suivie du choix de l'identifiant
  google: (credential: string) => Promise<string | null>
  // nouveau compte Google dont l'identifiant reste à choisir : la proposition du serveur ('' en attendant)
  elektota: string | null
  identigiloElektita: () => Promise<void>
  aligxi: (enirnomo: string, retadreso: string, pasvorto: string) => Promise<string | null>
  elsaluti: () => Promise<void>
}

const SeancoKunteksto = createContext<Seanco | null>(null)

export function useSeanco(): Seanco {
  const seanco = use(SeancoKunteksto)
  if (!seanco) throw new Error('useSeanco hors de <SeancoProvizanto>')
  return seanco
}

function mesagxo(error: unknown, defauxlte: string): string {
  return (error as { error?: string } | undefined)?.error ?? defauxlte
}

export function SeancoProvizanto({ children }: PropsWithChildren) {
  const qc = useQueryClient()
  const [sxargxas, setSxargxas] = useState(true)
  const [u, setU] = useState<Uzanto | null>(null)
  const [komencota, setKomencota] = useState<KursoKodo | null>(null)
  const [elektota, setElektota] = useState<string | null>(null)

  useEffect(() => {
    uzanto().then((nuna) => {
      setU(nuna)
      setSxargxas(false)
      // application fermée après l'inscription par Google, avant le choix de l'identifiant (provisoire : google_…)
      if (nuna && nuna.rajtoj !== 'G' && nuna.enirnomo.startsWith('google_')) {
        setElektota('')
        datumoj(kliento.GET('/auth/identigilo'))
          .then((r) => setElektota(r.elektu_identigilon ? (r.propono ?? '') : null))
          .catch(() => {})
      }
    })
    // nouveaux jetons (connexion, renouvellement) ou plus de jetons du tout (refresh token refusé)
    return auxskulti((ensalutita) => {
      uzanto().then(setU)
      if (!ensalutita) {
        setElektota(null)
        qc.clear()
        void forgesiCxion()
        void nuligiRevizion()
      }
    })
  }, [qc])

  const seanco: Seanco = {
    sxargxas,
    ensalutita: u !== null,
    gasto: u?.rajtoj === 'G',
    enirnomo: u && u.rajtoj !== 'G' ? u.enirnomo : null,
    komencota,
    komencis: () => setKomencota(null),
    async komenciGaste(kurso) {
      const { data, error } = await api.komenciGaste()
      if (!data) return mesagxo(error, 'Impossible de commencer le cours, vérifiez votre connexion')
      qc.clear()
      await forgesiCxion()
      await nuligiRevizion()
      setKomencota(kurso)
      setU(data.user)
      return null
    },
    async ensaluti(identigilo, pasvorto) {
      const { data, error } = await api.ensaluti(identigilo, pasvorto)
      if (!data) return mesagxo(error, 'Connexion impossible')
      // le travail de l'invité a rejoint le compte : tout est à relire
      qc.clear()
      await forgesiCxion()
      await nuligiRevizion()
      void planigiRevizion()
      setU(data.user)
      return null
    },
    async google(credential) {
      const { data, error } = await api.google(credential)
      if (!data) return mesagxo(error, 'Connexion Google impossible, merci de réessayer')
      // comme ensaluti : le travail de l'invité a rejoint le compte, tout est à relire
      qc.clear()
      await forgesiCxion()
      await nuligiRevizion()
      void planigiRevizion()
      setElektota(data.elektu_identigilon ? (data.propono ?? '') : null)
      setU(data.user)
      return null
    },
    elektota,
    async identigiloElektita() {
      setElektota(null)
      setU(await uzanto())
    },
    async aligxi(enirnomo, retadreso, pasvorto) {
      const { data, error } = await api.aligxi(enirnomo, retadreso, pasvorto)
      if (!data) return mesagxo(error, 'Inscription impossible')
      setU(await uzanto())
      qc.invalidateQueries()
      return null
    },
    async elsaluti() {
      await api.elsaluti()
      setU(null)
      setElektota(null)
      qc.clear()
      await forgesiCxion()
      await nuligiRevizion()
    },
  }

  return <SeancoKunteksto value={seanco}>{children}</SeancoKunteksto>
}
