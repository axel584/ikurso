// Données des écrans (TanStack Query) : une fonction par appel de l'API élève.
import { useMutation, useQuery, useQueryClient } from '@tanstack/react-query'
import type { components } from '@ikurso/api-client'
import { datumoj, kliento } from './kliento'

export type KursoKodo = components['schemas']['KursoKodo']

export function useKursoj() {
  return useQuery({
    queryKey: ['kursoj'],
    queryFn: () => datumoj(kliento.GET('/lernado/kursoj')),
  })
}

export function useKurso(kodo: KursoKodo | undefined) {
  return useQuery({
    queryKey: ['kurso', kodo],
    queryFn: () => datumoj(kliento.GET('/lernado/kursoj/{kurso}', { params: { path: { kurso: kodo! } } })),
    enabled: kodo !== undefined,
  })
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
export function useRespondi() {
  return useMutation({
    mutationFn: (peto: { ekzercero_id: number; respondo: string }) =>
      datumoj(kliento.POST('/lernado/respondoj', { body: peto })),
  })
}

// Section terminée : la progression et le récapitulatif changent.
export function useFini() {
  const qc = useQueryClient()
  return useMutation({
    mutationFn: (peto: { id: number; ekdato: number }) =>
      datumoj(kliento.POST('/lernado/sekcioj/{id}/fini', { params: { path: { id: peto.id } }, body: { ekdato: peto.ekdato } })),
    onSuccess: (_d, peto) => {
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
    mutationFn: (peto: { kurso: KursoKodo; numero: number; komento: string }) =>
      datumoj(
        kliento.POST('/lernado/lecionoj/{kurso}/{numero}/sendi', {
          params: { path: { kurso: peto.kurso, numero: peto.numero } },
          body: { komento: peto.komento },
        }),
      ),
    onSuccess: () => {
      qc.invalidateQueries({ queryKey: ['kurso'] })
      qc.invalidateQueries({ queryKey: ['kursoj'] })
      qc.invalidateQueries({ queryKey: ['korekto'] })
    },
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
