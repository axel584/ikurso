import type { ReactNode } from 'react'
import { Box, Typography, Button, CircularProgress } from '@mui/material'
import { useAuth } from '../hooks/useAuth'

export default function AuthGuard({ children }: { children: ReactNode }) {
  const { isLoading, isAdmin, isUnauthorized } = useAuth()

  if (isLoading) {
    return (
      <Box display="flex" justifyContent="center" alignItems="center" minHeight="100vh">
        <CircularProgress />
      </Box>
    )
  }

  if (isUnauthorized || !isAdmin) {
    return (
      <Box
        display="flex"
        flexDirection="column"
        alignItems="center"
        justifyContent="center"
        minHeight="100vh"
        gap={2}
      >
        <Typography variant="h5" color="error" fontWeight="bold">
          Accès refusé
        </Typography>
        <Typography color="text.secondary">
          Cette page est réservée aux administrateurs.
        </Typography>
        <Button variant="contained" href="/index.php">
          Se connecter
        </Button>
      </Box>
    )
  }

  return <>{children}</>
}
