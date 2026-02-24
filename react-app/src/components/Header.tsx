import { useState } from 'react'
import {
  AppBar, Toolbar, Typography, Link as MuiLink,
  Button, Menu, MenuItem, Divider, Box,
} from '@mui/material'
import ArrowDropDownIcon from '@mui/icons-material/ArrowDropDown'
import { Link } from 'react-router-dom'
import { useAuth } from '../hooks/useAuth'

type NavChild = { label: string; href: string; dividerBefore?: boolean }
type NavItem =
  | { label: string; href: string; children?: never }
  | { label: string; href?: never; children: NavChild[] }

const NAV: NavItem[] = [
  { label: 'Quoi de neuf ?', href: '/kionova.php' },
  {
    label: 'Cours en ligne',
    children: [
      { label: 'Cours en 10 leçons', href: '/fr/cge/intro.php' },
      { label: 'Gerda malaperis', href: '/fr/gerda/index.php' },
      { label: 'Téléchargements', href: '/fr/elsxutoj.php', dividerBefore: true },
    ],
  },
  { label: 'Boutique', href: 'https://butiko-esperanto-france.org/' },
  { label: 'Ni legu', href: 'https://nilegu.esperanto-france.org/' },
  {
    label: 'Espace correcteur',
    children: [
      { label: 'Mes élèves', href: '/miajlernantoj.php' },
      { label: 'Corrigé type', href: '/korektado.php' },
      { label: 'Statistiques', href: '/statLauxKategorio.php' },
      { label: 'Guide du correcteur', href: '/gvidilo.php' },
    ],
  },
  {
    label: "+ d'infos",
    children: [
      { label: "Comment s'inscrire ?", href: '/helpo.php?section=enskribo' },
      { label: 'Comment suivre le cours ?', href: '/helpo.php?section=kurso' },
      { label: 'Que faire après le cours ?', href: '/helpo.php?section=kajposte' },
      { label: 'Comment écrire en espéranto ?', href: '/helpo.php?section=kielskribi', dividerBefore: true },
      { label: 'Qui sommes-nous ?', href: '/kiujniestas.php' },
      { label: 'Comment nous aider ?', href: '/helpo.php?section=kielhelpi' },
      { label: 'Nous contacter', href: '/reago.php' },
    ],
  },
]

function DropdownMenu({ item }: { item: NavItem & { children: NavChild[] } }) {
  const [anchor, setAnchor] = useState<null | HTMLElement>(null)
  return (
    <>
      <Button
        color="inherit"
        size="small"
        endIcon={<ArrowDropDownIcon />}
        onClick={e => setAnchor(e.currentTarget)}
        sx={{ textTransform: 'none', fontWeight: 500 }}
      >
        {item.label}
      </Button>
      <Menu anchorEl={anchor} open={!!anchor} onClose={() => setAnchor(null)}>
        {item.children.map(child => [
          child.dividerBefore && <Divider key={`div-${child.href}`} />,
          <MenuItem
            key={child.href}
            component="a"
            href={child.href}
            onClick={() => setAnchor(null)}
            sx={{ fontSize: 14 }}
          >
            {child.label}
          </MenuItem>,
        ])}
      </Menu>
    </>
  )
}

export default function Header() {
  const { user } = useAuth()

  return (
    <AppBar position="static" elevation={1}>
      <Toolbar sx={{ gap: 1 }}>
        <Typography
          variant="h6"
          component={Link}
          to="/"
          sx={{ color: 'inherit', textDecoration: 'none', mr: 2, whiteSpace: 'nowrap' }}
        >
          Redaktilo — Ikurso
        </Typography>

        <Box sx={{ display: 'flex', alignItems: 'center', flexGrow: 1, flexWrap: 'wrap', gap: 0.5 }}>
          {NAV.map(item =>
            item.children ? (
              <DropdownMenu key={item.label} item={item as NavItem & { children: NavChild[] }} />
            ) : (
              <Button
                key={item.label}
                color="inherit"
                size="small"
                component="a"
                href={item.href}
                sx={{ textTransform: 'none', fontWeight: 500 }}
              >
                {item.label}
              </Button>
            ),
          )}
        </Box>

        <Typography variant="body2" sx={{ mr: 1, whiteSpace: 'nowrap' }}>
          {user?.enirnomo}
        </Typography>
        <MuiLink href="/index.php" color="inherit" underline="hover" variant="body2" sx={{ whiteSpace: 'nowrap' }}>
          ← Retour au site
        </MuiLink>
      </Toolbar>
    </AppBar>
  )
}
