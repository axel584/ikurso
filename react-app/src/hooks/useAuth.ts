import { useQuery } from '@tanstack/react-query'
import { fetchMe } from '../api/auth'
import { ApiError } from '../api/client'

export function useAuth() {
  const query = useQuery({
    queryKey: ['auth', 'me'],
    queryFn: fetchMe,
    retry: false,
    staleTime: 5 * 60 * 1000,
  })

  const user = query.data?.user
  const isAdmin = user?.rajtoj === 'A'
  const isLoading = query.isLoading
  const err = query.error
  const isUnauthorized =
    !isLoading &&
    (query.isError ||
      (err instanceof ApiError && err.status === 401) ||
      !isAdmin)

  return { user, isAdmin, isLoading, isUnauthorized, error: query.error }
}
