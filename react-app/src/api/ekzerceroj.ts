import { api } from './client'

export interface Ekzercero {
  id: number
  ekzerco_id: number
  numero: number
  demando: string
  respondmodelo: string | null
  respondo: string | null
  normaligita: string | null
  bildo: string
  forigita: boolean
  korektebla: boolean
  poentoj: number | null
}

interface EkzerceroiResponse {
  data: Ekzercero[]
  count: number
}

export interface EkzerceroStatLine {
  respondo: string | null
  nombre: number
  procento: number
}

export interface EkzerceroStats {
  ekzercero_id: number
  total: number
  limite: number
  data: EkzerceroStatLine[]
}

export const ekzerceroiApi = {
  list: (ekzerco_id?: number) =>
    api.get<EkzerceroiResponse>(
      `ekzerceroj${ekzerco_id !== undefined ? `?ekzerco_id=${ekzerco_id}` : ''}`,
    ),
  get: (id: number) => api.get<{ data: Ekzercero }>(`ekzerceroj/${id}`),
  create: (data: Omit<Ekzercero, 'id'>) =>
    api.post<{ data: Ekzercero }>('ekzerceroj', data),
  update: (id: number, data: Partial<Omit<Ekzercero, 'id'>>) =>
    api.patch<{ data: Ekzercero }>(`ekzerceroj/${id}`, data),
  delete: (id: number) => api.delete<{ message: string }>(`ekzerceroj/${id}`),
  stats: (id: number) => api.get<EkzerceroStats>(`ekzerceroj/${id}/stats`),
}
