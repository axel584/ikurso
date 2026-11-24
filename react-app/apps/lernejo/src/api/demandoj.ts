// Données des écrans (TanStack Query) : une fonction par appel de l'API élève.
import { useMutation, useQuery, useQueryClient, type QueryClient } from '@tanstack/react-query'
import type { components, Sekcio } from '@ikurso/api-client'
import { datumoj, kliento } from './kliento'
import { kasxmemorita, legiLoke, skribi } from './kasxmemoro'

export type KursoKodo = components['schemas']['KursoKodo']
type Kursoj = Awaited<ReturnType<typeof legiKursojn>>
type Kurso = Awaited<ReturnType<typeof legiKurson>>

const legiKursojn = () => datumoj(kliento.GET('/lernado/kursoj'))
const legiKurson = (kodo: KursoKodo) => datumoj(kliento.GET('/lernado/kursoj/{kurso}', { params: { path: { kurso: kodo } } }))

// Copie gardée sur le téléphone (#1123), lue une fois par ouverture de l'application : affichée tout de suite,
// pendant que la vraie requête relit le serveur (sinon l'écran attend le réseau, long en 3G).
function useLokaKopio<T>(sxlosilo: string, ebla = true) {
  return useQuery({
    queryKey: ['loka', sxlosilo],
    queryFn: () => legiLoke<T>(sxlosilo),
    enabled: ebla,
    staleTime: Infinity,
    gcTime: 0,
  }).data ?? undefined
}

export function useKursoj() {
  const kopio = useLokaKopio<Kursoj>('kursoj')
  return useQuery({
    queryKey: ['kursoj'],
    // toujours relu sur le serveur, gardé pour l'ouverture suivante et pour quand le réseau manque
    queryFn: () => kasxmemorita('kursoj', legiKursojn),
    placeholderData: kopio,
  })
}

export function useKurso(kodo: KursoKodo | undefined) {
  const kopio = useLokaKopio<Kurso>('kurso/' + kodo, kodo !== undefined)
  return useQuery({
    queryKey: ['kurso', kodo],
    queryFn: () => kasxmemorita('kurso/' + kodo, () => legiKurson(kodo!)),
    enabled: kodo !== undefined,
    placeholderData: kopio,
  })
}

// Section terminée dans l'application : cochée tout de suite dans le sommaire (mémoire et copie du téléphone),
// sans attendre la relecture qui suit ; le cours et sa leçon passent à « terminée » si c'était la dernière.
function markiFinita(qc: QueryClient, id: number) {
  let kurso: KursoKodo | null = null
  for (const [sxlosilo, k] of qc.getQueriesData<Kurso>({ queryKey: ['kurso'] })) {
    if (!k || !k.lecionoj.some((l) => l.sekcioj.some((s) => s.id === id && !s.finita))) continue
    kurso = k.kodo
    const nova: Kurso = {
      ...k,
      lecionoj: k.lecionoj.map((l) => {
        if (!l.sekcioj.some((s) => s.id === id)) return l
        const sekcioj = l.sekcioj.map((s) => (s.id === id ? { ...s, finita: true } : s))
        return { ...l, sekcioj, stato: sekcioj.every((s) => s.finita) ? 'farita' : l.stato }
      }),
    }
    qc.setQueryData(sxlosilo, nova)
    void skribi('kurso/' + k.kodo, nova)
  }
  if (!kurso) return
  const kursoj = qc.getQueryData<Kursoj>(['kursoj'])
  if (kursoj) {
    const nova: Kursoj = {
      ...kursoj,
      kursoj: kursoj.kursoj.map((k) => (k.kodo === kurso ? { ...k, finitaj_sekcioj: k.finitaj_sekcioj + 1 } : k)),
    }
    qc.setQueryData(['kursoj'], nova)
    void skribi('kursoj', nova)
  }
}

export function useSekcio(id: number) {
  return useQuery({
    queryKey: ['sekcio', id],
    queryFn: () => datumoj(kliento.GET('/lernado/sekcioj/{id}', { params: { path: { id } } })),
  })
}

export function useResumo(kurso: KursoKodo, numero: number) {
  return useQuery({
    queryKey: ['resumo', kurso, numero],
    queryFn: () => datumoj(kliento.GET('/lernado/lecionoj/{kurso}/{numero}/resumo', { params: { path: { kurso, numero } } })),
  })
}

export function useKorekto(kurso: KursoKodo, numero: number) {
  return useQuery({
    queryKey: ['korekto', kurso, numero],
    queryFn: () => datumoj(kliento.GET('/lernado/lecionoj/{kurso}/{numero}/korekto', { params: { path: { kurso, numero } } })),
  })
}

export function useRevizio() {
  return useQuery({
    queryKey: ['revizio'],
    queryFn: () => datumoj(kliento.GET('/lernado/revizio')),
    // la liste est tirée au hasard : on ne la recharge pas pendant la révision
    staleTime: Infinity,
  })
}

export function useMi() {
  return useQuery({
    queryKey: ['mi'],
    queryFn: () => datumoj(kliento.GET('/auth/me')),
  })
}

// Réponse à une question : enregistrée et corrigée par le serveur.
// La section gardée en mémoire est mise à jour aussi : en y revenant dans l'application, l'écran repart de cette
// copie (les champs ne se remplissent qu'à leur création) et sans cela la réponse semblait perdue.
export function useRespondi() {
  const qc = useQueryClient()
  return useMutation({
    mutationFn: (peto: { ekzercero_id: number; respondo: string }) =>
      datumoj(kliento.POST('/lernado/respondoj', { body: peto })),
    onSuccess: (r, peto) => {
      qc.setQueriesData<Sekcio>({ queryKey: ['sekcio'] }, (s) =>
        s && {
          ...s,
          ekzercoj: s.ekzercoj.map((e) => ({
            ...e,
            demandoj: e.demandoj.map((d) => (d.id === peto.ekzercero_id ? { ...d, respondo: peto.respondo, gxusta: r.gxusta } : d)),
          })),
        },
      )
    },
  })
}

// Section terminée : la progression et le récapitulatif changent.
export function useFini() {
  const qc = useQueryClient()
  return useMutation({
    mutationFn: (peto: { id: number; ekdato: number }) =>
      datumoj(kliento.POST('/lernado/sekcioj/{id}/fini', { params: { path: { id: peto.id } }, body: { ekdato: peto.ekdato } })),
    onSuccess: (_d, peto) => {
      // la progression a changé : cochée tout de suite, puis relue sur le serveur (le réseau est là : on vient de l'utiliser)
      markiFinita(qc, peto.id)
      qc.invalidateQueries({ queryKey: ['sekcio', peto.id] })
      qc.invalidateQueries({ queryKey: ['kurso'] })
      qc.invalidateQueries({ queryKey: ['kursoj'] })
      qc.invalidateQueries({ queryKey: ['resumo'] })
      qc.invalidateQueries({ queryKey: ['revizio'] })
    },
  })
}

export function useSendi() {
  const qc = useQueryClient()
  return useMutation({
    // elekto : mode de correction choisi au premier envoi du cours (#627) ; teksto : le correcteur connu
    mutationFn: (peto: { kurso: KursoKodo; numero: number; komento: string; elekto?: Elekto; teksto?: string }) =>
      datumoj(
        kliento.POST('/lernado/lecionoj/{kurso}/{numero}/sendi', {
          params: { path: { kurso: peto.kurso, numero: peto.numero } },
          body: { komento: peto.komento, ...(peto.elekto ? { elekto: peto.elekto, teksto: peto.teksto ?? '' } : {}) },
        }),
      ),
    onSuccess: () => {
      qc.invalidateQueries({ queryKey: ['kurso'] })
      qc.invalidateQueries({ queryKey: ['kursoj'] })
      qc.invalidateQueries({ queryKey: ['korekto'] })
    },
  })
}

export type Elekto = 'sama' | 'volontulo' | 'konato' | 'sen' | 'ia'

// Changement de mode de correction depuis le profil (#627, #1130) : correction automatique ou correcteur bénévole
export function useSxangxiKorektadon() {
  const qc = useQueryClient()
  return useMutation({
    mutationFn: (peto: { kurso: KursoKodo; al: 'ia' | 'volontulo' }) =>
      datumoj(kliento.POST('/lernado/kursoj/{kurso}/korektado', { params: { path: { kurso: peto.kurso } }, body: { al: peto.al } })),
    onSuccess: () => {
      qc.invalidateQueries({ queryKey: ['kursoj'] })
      qc.invalidateQueries({ queryKey: ['resumo'] })
    },
  })
}

// Appréciation de la leçon envoyée (comme konfirmo.php sur le site)
export function useTakso() {
  return useMutation({
    mutationFn: (peto: { kurso: KursoKodo; numero: number; intereso: number; malfacileco: number; komento: string }) =>
      datumoj(
        kliento.POST('/lernado/lecionoj/{kurso}/{numero}/takso', {
          params: { path: { kurso: peto.kurso, numero: peto.numero } },
          body: { intereso: peto.intereso, malfacileco: peto.malfacileco, komento: peto.komento },
        }),
      ),
  })
}

// Suppression définitive du compte (forigiKonton.php sur le site), confirmée par le mot de passe
export function useForigiKonton() {
  return useMutation({
    mutationFn: (pasvorto: string) => datumoj(kliento.POST('/lernado/konto/forigi', { body: { pasvorto } })),
  })
}

export function useRevizioRespondo() {
  return useMutation({
    mutationFn: (peto: { vorto_id: number; respondo: string }) => datumoj(kliento.POST('/lernado/revizio', { body: peto })),
  })
}

// Nouveau lien d'activation par mail, pour le compte créé dans l'application.
export function useAktivigilo() {
  return useMutation({
    mutationFn: () => datumoj(kliento.POST('/lernado/aktivigo')),
  })
}

// Clic sur une proposition d'un QCM de page, pour les statistiques des questions difficiles (anonymes) :
// sans attendre la réponse, et un envoi raté (hors connexion…) ne change rien pour l'élève.
export function sendiQcmRespondon(peto: { lecionero_id: number; demando: number; propono: number; provo: number }) {
  kliento.POST('/qcm', { body: { ...peto, fonto: 'apo' } }).catch(() => {})
}
