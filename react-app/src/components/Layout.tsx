import type { ReactNode } from 'react'
import { Typography, Breadcrumbs, Container, Box, Link as MuiLink } from '@mui/material'
import { Link, useLocation } from 'react-router-dom'
import Header from './Header'

function useBreadcrumbs() {
  const location = useLocation()
  const parts = location.pathname.replace(/^\//, '').split('/')
  const crumbs: { label: string; to: string }[] = [
    { label: 'Kursoj', to: '/' },
  ]

  if (parts[0] === 'kursoj' && parts[1]) {
    const kodo = parts[1]
    if (parts[2] === 'lecionoj') {
      crumbs.push({ label: `Lecionoj (${kodo})`, to: `/kursoj/${kodo}/lecionoj` })
      if (parts[3] && parts[4] === 'lecioneroj') {
        const lecionoId = parts[3]
        crumbs.push({ label: 'Lecioneroj', to: `/kursoj/${kodo}/lecionoj/${lecionoId}/lecioneroj` })
        if (parts[5] && parts[6] === 'ekzercoj') {
          const lid = parts[5]
          crumbs.push({ label: 'Ekzercoj', to: `/kursoj/${kodo}/lecionoj/${lecionoId}/lecioneroj/${lid}/ekzercoj` })
          if (parts[7] && parts[8] === 'ekzerceroj') {
            const eid = parts[7]
            crumbs.push({ label: 'Ekzerceroj', to: `/kursoj/${kodo}/lecionoj/${lecionoId}/lecioneroj/${lid}/ekzercoj/${eid}/ekzerceroj` })
          }
        }
      }
    }
  }

  return crumbs
}

export default function Layout({ children }: { children: ReactNode }) {
  const crumbs = useBreadcrumbs()

  return (
    <Box minHeight="100vh" bgcolor="grey.50">
      <Header />

      <Box sx={{ bgcolor: 'grey.100', borderBottom: 1, borderColor: 'divider', px: 3, py: 1 }}>
        <Breadcrumbs>
          {crumbs.map((c, i) =>
            i < crumbs.length - 1 ? (
              <MuiLink
                key={c.to}
                component={Link}
                to={c.to}
                underline="hover"
                color="inherit"
                variant="body2"
              >
                {c.label}
              </MuiLink>
            ) : (
              <Typography key={c.to} variant="body2" color="text.primary" fontWeight="medium">
                {c.label}
              </Typography>
            ),
          )}
        </Breadcrumbs>
      </Box>

      <Container maxWidth="lg" sx={{ py: 3 }}>
        {children}
      </Container>
    </Box>
  )
}
