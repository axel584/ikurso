import { useState } from 'react'
import {
  AppBar, Toolbar, Typography,
  Button, Menu, MenuItem, Divider, Box, IconButton,
} from '@mui/material'
import ArrowDropDownIcon from '@mui/icons-material/ArrowDropDown'
import PersonIcon from '@mui/icons-material/Person'
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

const NAV_BTN_SX = {
  fontFamily: "'Roboto Condensed', sans-serif",
  textTransform: 'uppercase',
  fontWeight: 400,
  letterSpacing: '0.03em',
  fontSize: '0.85rem',
} as const

function DropdownMenu({ item }: { item: NavItem & { children: NavChild[] } }) {
  const [anchor, setAnchor] = useState<null | HTMLElement>(null)
  return (
    <>
      <Button
        color="inherit"
        size="small"
        endIcon={<ArrowDropDownIcon />}
        onClick={e => setAnchor(e.currentTarget)}
        sx={NAV_BTN_SX}
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

function UserMenu() {
  const { user } = useAuth()
  const [anchor, setAnchor] = useState<null | HTMLElement>(null)

  return (
    <>
      <IconButton
        color="inherit"
        onClick={e => setAnchor(e.currentTarget)}
        sx={{ bgcolor: 'primary.light', '&:hover': { bgcolor: 'primary.dark' } }}
      >
        <PersonIcon />
      </IconButton>
      <Menu
        anchorEl={anchor}
        open={!!anchor}
        onClose={() => setAnchor(null)}
        anchorOrigin={{ vertical: 'bottom', horizontal: 'right' }}
        transformOrigin={{ vertical: 'top', horizontal: 'right' }}
      >
        <MenuItem disableRipple sx={{ flexDirection: 'column', alignItems: 'flex-start', cursor: 'default', '&:hover': { bgcolor: 'transparent' }, fontSize: 14, lineHeight: 1.6 }}>
          <strong>{user?.enirnomo}</strong>
          <span>{user?.personnomo} {user?.familinomo}</span>
          <em style={{ color: '#666' }}>{user?.retadreso}</em>
        </MenuItem>
        <Divider />
        <MenuItem component="a" href="/personinformoj.php" onClick={() => setAnchor(null)} sx={{ fontSize: 14 }}>
          Mes données personnelles
        </MenuItem>
        <MenuItem component="a" href="/eliri.php" onClick={() => setAnchor(null)} sx={{ fontSize: 14 }}>
          Déconnexion
        </MenuItem>
      </Menu>
    </>
  )
}

export default function Header() {
  return (
    <AppBar position="static" elevation={1}>
      <Toolbar sx={{ gap: 1 }}>
        <Typography
          component="a"
          href="/index.php"
          id="logo"
          sx={{ color: 'inherit', textDecoration: 'none', mr: 2, whiteSpace: 'nowrap', fontFamily: "'Nothing You Could Do', cursive", letterSpacing: '-0.08em', fontSize: '1.8rem' }}
        >
          iKurso
        </Typography>

        <Box sx={{ flexGrow: 1 }} />

        <Box sx={{ display: 'flex', alignItems: 'center', flexWrap: 'wrap', gap: 0.5 }}>
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
                sx={NAV_BTN_SX}
              >
                {item.label}
              </Button>
            ),
          )}
        </Box>

        <UserMenu />
      </Toolbar>
    </AppBar>
  )
}
