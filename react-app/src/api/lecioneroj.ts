import { api } from './client'

export type LecioneroTipo = 'VORTARO' | 'QCM' | 'TEKSTO' | 'EKZERCARO'

export interface Lecionero {
  id: number
  leciono_id: number
  titolo: string
  tipo: LecioneroTipo
  enhavo: string | null
  ordo: number
  unua: boolean
  lasta: boolean
  dauxro: number | null
  android: boolean
}

interface LecionerojResponse {
  data: Lecionero[]
  count: number
}

export const lecionerojApi = {
  list: (leciono_id?: number) =>
    api.get<LecionerojResponse>(
      `lecioneroj${leciono_id !== undefined ? `?leciono_id=${leciono_id}` : ''}`,
    ),
  get: (id: number) => api.get<{ data: Lecionero }>(`lecioneroj/${id}`),
  create: (data: Omit<Lecionero, 'id'>) =>
    api.post<{ data: Lecionero }>('lecioneroj', data),
  update: (id: number, data: Partial<Omit<Lecionero, 'id'>>) =>
    api.patch<{ data: Lecionero }>(`lecioneroj/${id}`, data),
  delete: (id: number) => api.delete<{ message: string }>(`lecioneroj/${id}`),
}
