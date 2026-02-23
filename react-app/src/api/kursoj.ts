import { api } from './client'

export interface Kurso {
  id: number
  kodo: string
  nomo: string
}

interface KursojResponse {
  data: Kurso[]
  count: number
}

interface KursoResponse {
  data: Kurso
}

export const kursojApi = {
  list: () => api.get<KursojResponse>('kursoj'),
  get: (id: number) => api.get<KursoResponse>(`kursoj/${id}`),
  create: (data: { kodo: string; nomo: string }) =>
    api.post<{ data: Kurso }>('kursoj', data),
  update: (id: number, data: Partial<{ kodo: string; nomo: string }>) =>
    api.patch<{ data: Kurso }>(`kursoj/${id}`, data),
  delete: (id: number) => api.delete<{ message: string }>(`kursoj/${id}`),
}
