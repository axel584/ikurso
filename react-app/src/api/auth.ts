import { api } from './client'

export interface AuthUser {
  id: number
  enirnomo: string
  rajtoj: string
  retadreso: string
  personnomo: string
  familinomo: string
  aktivigita: boolean
  ekdato: string
  lasteniro: string
}

interface MeResponse {
  user: AuthUser
}

export function fetchMe(): Promise<MeResponse> {
  return api.get<MeResponse>('auth/me')
}
