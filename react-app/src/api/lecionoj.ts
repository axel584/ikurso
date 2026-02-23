import { api } from './client'

export interface Leciono {
  id: number
  numero: number
  titolo: string
  retpagxo: string | null
  kurso: string
  unua: boolean
  lasta: boolean
}

interface LecionojResponse {
  data: Leciono[]
  count: number
}

export const lecionojApi = {
  list: (kurso?: string) =>
    api.get<LecionojResponse>(`lecionoj${kurso ? `?kurso=${kurso}` : ''}`),
  get: (id: number) => api.get<{ data: Leciono }>(`lecionoj/${id}`),
  create: (data: Omit<Leciono, 'id'>) =>
    api.post<{ data: Leciono }>('lecionoj', data),
  update: (id: number, data: Partial<Omit<Leciono, 'id'>>) =>
    api.patch<{ data: Leciono }>(`lecionoj/${id}`, data),
  delete: (id: number) => api.delete<{ message: string }>(`lecionoj/${id}`),
}
