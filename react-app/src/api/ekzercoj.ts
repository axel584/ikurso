import { api } from './client'

export type EkzercoTypo =
  | 'traduko-1' | 'traduko-2' | 'traduko-3'
  | 'verkado-1' | 'verkado-2' | 'verkado-3' | 'verkado-4' | 'verkado-5' | 'verkado-6'
  | 'stelo-1' | 'stelo-2'
  | 'truoj-1' | 'truoj-2'
  | 'kompletigu' | 'ordigu' | 'elektu'

export interface Ekzerco {
  id: number
  lecionero_id: number
  komando: string
  komando_detalo: string | null
  ekzemplo: string | null
  typo: EkzercoTypo
  x2u: boolean
  korektebla: boolean
}

interface EkzercojResponse {
  data: Ekzerco[]
  count: number
}

export const ekzercojApi = {
  list: (lecionero_id?: number) =>
    api.get<EkzercojResponse>(
      `ekzercoj${lecionero_id !== undefined ? `?lecionero_id=${lecionero_id}` : ''}`,
    ),
  get: (id: number) => api.get<{ data: Ekzerco }>(`ekzercoj/${id}`),
  create: (data: Omit<Ekzerco, 'id'>) =>
    api.post<{ data: Ekzerco }>('ekzercoj', data),
  update: (id: number, data: Partial<Omit<Ekzerco, 'id'>>) =>
    api.patch<{ data: Ekzerco }>(`ekzercoj/${id}`, data),
  delete: (id: number) => api.delete<{ message: string }>(`ekzercoj/${id}`),
}
