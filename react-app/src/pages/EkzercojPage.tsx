import { useState } from 'react'
import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query'
import { useParams, useNavigate } from 'react-router-dom'
import {
  Box, Typography, Button, Alert, Paper, Chip, Stack,
  Table, TableBody, TableCell, TableContainer, TableHead, TableRow,
  TextField, Select, MenuItem, FormControl, InputLabel,
  FormControlLabel, Checkbox,
} from '@mui/material'
import AddIcon from '@mui/icons-material/Add'
import { decodeHtml } from '../utils/html'
import EditIcon from '@mui/icons-material/Edit'
import ChevronRightIcon from '@mui/icons-material/ChevronRight'
import { ekzercojApi, type Ekzerco, type EkzercoTypo } from '../api/ekzercoj'
import DeleteButton from '../components/DeleteButton'

const TYPOS: EkzercoTypo[] = [
  'traduko-1', 'traduko-2', 'traduko-3',
  'verkado-1', 'verkado-2', 'verkado-3', 'verkado-4', 'verkado-5', 'verkado-6',
  'stelo-1', 'stelo-2', 'truoj-1', 'truoj-2',
  'kompletigu', 'ordigu', 'elektu',
]

type FormData = Omit<Ekzerco, 'id'>
function emptyForm(lecionero_id: number): FormData {
  return { lecionero_id, komando: '', komando_detalo: null, ekzemplo: null, typo: 'traduko-1', x2u: false, korektebla: false }
}

export default function EkzercojPage() {
  const { kodo, id, lid } = useParams<{ kodo: string; id: string; lid: string }>()
  const lecioneroId = parseInt(lid ?? '0', 10)
  const qc = useQueryClient()
  const navigate = useNavigate()
  const [editing, setEditing] = useState<Ekzerco | null>(null)
  const [creating, setCreating] = useState(false)
  const [form, setForm] = useState<FormData>(emptyForm(lecioneroId))
  const [error, setError] = useState<string | null>(null)

  const { data, isLoading } = useQuery({
    queryKey: ['ekzercoj', lecioneroId],
    queryFn: () => ekzercojApi.list(lecioneroId),
    enabled: !!lecioneroId,
  })

  const invalidate = () => qc.invalidateQueries({ queryKey: ['ekzercoj', lecioneroId] })
  const createMut = useMutation({
    mutationFn: (d: FormData) => ekzercojApi.create(d),
    onSuccess: () => { invalidate(); setCreating(false); setForm(emptyForm(lecioneroId)); setError(null) },
    onError: (e: Error) => setError(e.message),
  })
  const updateMut = useMutation({
    mutationFn: ({ id: eid, d }: { id: number; d: Partial<FormData> }) => ekzercojApi.update(eid, d),
    onSuccess: () => { invalidate(); setEditing(null); setForm(emptyForm(lecioneroId)); setError(null) },
    onError: (e: Error) => setError(e.message),
  })
  const deleteMut = useMutation({
    mutationFn: (eid: number) => ekzercojApi.delete(eid),
    onSuccess: () => invalidate(),
    onError: (e: Error) => setError(e.message),
  })

  function startCreate() { setEditing(null); setForm(emptyForm(lecioneroId)); setError(null); setCreating(true) }
  function startEdit(e: Ekzerco) {
    setCreating(false)
    setForm({ lecionero_id: e.lecionero_id, komando: e.komando, komando_detalo: e.komando_detalo, ekzemplo: e.ekzemplo, typo: e.typo, x2u: e.x2u, korektebla: e.korektebla })
    setError(null); setEditing(e)
  }
  function cancelForm() { setCreating(false); setEditing(null); setForm(emptyForm(lecioneroId)); setError(null) }
  function submitForm(ev: React.FormEvent) {
    ev.preventDefault()
    if (editing) updateMut.mutate({ id: editing.id, d: form })
    else createMut.mutate(form)
  }

  const isPending = createMut.isPending || updateMut.isPending

  return (
    <Box>
      <Stack direction="row" justifyContent="space-between" alignItems="center" mb={3}>
        <Typography variant="h5" fontWeight="bold">Ekzercoj — lecionero #{lid}</Typography>
        {!creating && !editing && (
          <Button variant="contained" startIcon={<AddIcon />} onClick={startCreate}>Nova ekzerco</Button>
        )}
      </Stack>

      {error && <Alert severity="error" sx={{ mb: 2 }}>{error}</Alert>}

      {(creating || editing) && (
        <Paper variant="outlined" sx={{ p: 3, mb: 3 }}>
          <Typography variant="subtitle1" fontWeight="bold" mb={2}>
            {editing ? "Modifier l'exercice" : 'Nouvel exercice'}
          </Typography>
          <Box component="form" onSubmit={submitForm}>
            <Stack direction="row" spacing={2} flexWrap="wrap" mb={2}>
              <FormControl size="small" sx={{ minWidth: 180 }}>
                <InputLabel>Typo</InputLabel>
                <Select label="Typo" value={form.typo}
                  onChange={e => setForm(f => ({ ...f, typo: e.target.value as EkzercoTypo }))}>
                  {TYPOS.map(t => <MenuItem key={t} value={t}>{t}</MenuItem>)}
                </Select>
              </FormControl>
              <TextField label="Komando" size="small" sx={{ minWidth: 300 }} required
                value={form.komando} onChange={e => setForm(f => ({ ...f, komando: e.target.value }))} />
              <TextField label="Komando detalo" size="small" sx={{ minWidth: 260 }}
                value={form.komando_detalo ?? ''}
                onChange={e => setForm(f => ({ ...f, komando_detalo: e.target.value || null }))} />
            </Stack>
            <TextField label="Ekzemplo" multiline rows={2} size="small" fullWidth sx={{ mb: 2 }}
              value={form.ekzemplo ?? ''}
              onChange={e => setForm(f => ({ ...f, ekzemplo: e.target.value || null }))} />
            <Stack direction="row" spacing={1} mb={2}>
              <FormControlLabel control={<Checkbox size="small" checked={form.x2u} onChange={e => setForm(f => ({ ...f, x2u: e.target.checked }))} />} label="x2u" />
              <FormControlLabel control={<Checkbox size="small" checked={form.korektebla} onChange={e => setForm(f => ({ ...f, korektebla: e.target.checked }))} />} label="korektebla" />
            </Stack>
            <Stack direction="row" spacing={1}>
              <Button type="submit" variant="contained" color="success" disabled={isPending} size="small">
                {isPending ? '…' : editing ? 'Enregistrer' : 'Créer'}
              </Button>
              <Button variant="outlined" color="inherit" size="small" onClick={cancelForm}>Annuler</Button>
            </Stack>
          </Box>
        </Paper>
      )}

      <TableContainer component={Paper} variant="outlined">
        <Table size="small">
          <TableHead>
            <TableRow sx={{ bgcolor: 'grey.50' }}>
              <TableCell><strong>Typo</strong></TableCell>
              <TableCell><strong>Komando</strong></TableCell>
              <TableCell><strong>Flags</strong></TableCell>
              <TableCell align="right" />
            </TableRow>
          </TableHead>
          <TableBody>
            {isLoading ? (
              <TableRow><TableCell colSpan={4} align="center">Chargement…</TableCell></TableRow>
            ) : data?.data.length === 0 ? (
              <TableRow><TableCell colSpan={4} align="center" sx={{ color: 'text.secondary' }}>Aucun exercice</TableCell></TableRow>
            ) : data?.data.map(e => (
              <TableRow key={e.id} hover>
                <TableCell><Chip label={e.typo} size="small" color="primary" variant="outlined" /></TableCell>
                <TableCell>{decodeHtml(e.komando)}</TableCell>
                <TableCell>
                  <Stack direction="row" spacing={0.5}>
                    {e.x2u && <Chip label="x2u" size="small" color="warning" variant="outlined" />}
                    {e.korektebla && <Chip label="korektebla" size="small" color="info" variant="outlined" />}
                  </Stack>
                </TableCell>
                <TableCell align="right">
                  <Stack direction="row" spacing={1} justifyContent="flex-end">
                    <Button size="small" variant="text" endIcon={<ChevronRightIcon />}
                      onClick={() => navigate(`/kursoj/${kodo}/lecionoj/${id}/lecioneroj/${lid}/ekzercoj/${e.id}/ekzerceroj`)}>
                      Ekzerceroj
                    </Button>
                    <Button size="small" variant="outlined" startIcon={<EditIcon />} onClick={() => startEdit(e)}>Modifier</Button>
                    <DeleteButton onConfirm={() => deleteMut.mutate(e.id)} isLoading={deleteMut.isPending} />
                  </Stack>
                </TableCell>
              </TableRow>
            ))}
          </TableBody>
        </Table>
      </TableContainer>
    </Box>
  )
}
