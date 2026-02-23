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
import { lecionerojApi, type Lecionero, type LecioneroTipo } from '../api/lecioneroj'
import DeleteButton from '../components/DeleteButton'

const TIPOS: LecioneroTipo[] = ['VORTARO', 'QCM', 'TEKSTO', 'EKZERCARO']
const TIPO_COLOR: Record<LecioneroTipo, 'default' | 'primary' | 'secondary' | 'info' | 'success' | 'warning'> = {
  VORTARO: 'info', QCM: 'secondary', TEKSTO: 'default', EKZERCARO: 'success',
}

type FormData = Omit<Lecionero, 'id'>
function emptyForm(leciono_id: number): FormData {
  return { leciono_id, titolo: '', tipo: 'TEKSTO', enhavo: null, ordo: 1, unua: false, lasta: false, dauxro: null, android: false }
}

export default function LecionerojPage() {
  const { kodo, id } = useParams<{ kodo: string; id: string }>()
  const lecionoId = parseInt(id ?? '0', 10)
  const qc = useQueryClient()
  const navigate = useNavigate()
  const [editing, setEditing] = useState<Lecionero | null>(null)
  const [creating, setCreating] = useState(false)
  const [form, setForm] = useState<FormData>(emptyForm(lecionoId))
  const [error, setError] = useState<string | null>(null)

  const { data, isLoading } = useQuery({
    queryKey: ['lecioneroj', lecionoId],
    queryFn: () => lecionerojApi.list(lecionoId),
    enabled: !!lecionoId,
  })

  const invalidate = () => qc.invalidateQueries({ queryKey: ['lecioneroj', lecionoId] })
  const createMut = useMutation({
    mutationFn: (d: FormData) => lecionerojApi.create(d),
    onSuccess: () => { invalidate(); setCreating(false); setForm(emptyForm(lecionoId)); setError(null) },
    onError: (e: Error) => setError(e.message),
  })
  const updateMut = useMutation({
    mutationFn: ({ id: lid, d }: { id: number; d: Partial<FormData> }) => lecionerojApi.update(lid, d),
    onSuccess: () => { invalidate(); setEditing(null); setForm(emptyForm(lecionoId)); setError(null) },
    onError: (e: Error) => setError(e.message),
  })
  const deleteMut = useMutation({
    mutationFn: (lid: number) => lecionerojApi.delete(lid),
    onSuccess: () => invalidate(),
    onError: (e: Error) => setError(e.message),
  })

  function startCreate() { setEditing(null); setForm(emptyForm(lecionoId)); setError(null); setCreating(true) }
  function startEdit(l: Lecionero) {
    setCreating(false)
    setForm({ leciono_id: l.leciono_id, titolo: l.titolo, tipo: l.tipo, enhavo: l.enhavo, ordo: l.ordo, unua: l.unua, lasta: l.lasta, dauxro: l.dauxro, android: l.android })
    setError(null); setEditing(l)
  }
  function cancelForm() { setCreating(false); setEditing(null); setForm(emptyForm(lecionoId)); setError(null) }
  function submitForm(e: React.FormEvent) {
    e.preventDefault()
    if (editing) updateMut.mutate({ id: editing.id, d: form })
    else createMut.mutate(form)
  }

  const isPending = createMut.isPending || updateMut.isPending

  return (
    <Box>
      <Stack direction="row" justifyContent="space-between" alignItems="center" mb={3}>
        <Typography variant="h5" fontWeight="bold">Lecioneroj — leciono #{id}</Typography>
        {!creating && !editing && (
          <Button variant="contained" startIcon={<AddIcon />} onClick={startCreate}>Nova lecionero</Button>
        )}
      </Stack>

      {error && <Alert severity="error" sx={{ mb: 2 }}>{error}</Alert>}

      {(creating || editing) && (
        <Paper variant="outlined" sx={{ p: 3, mb: 3 }}>
          <Typography variant="subtitle1" fontWeight="bold" mb={2}>
            {editing ? 'Modifier la section' : 'Nouvelle section'}
          </Typography>
          <Box component="form" onSubmit={submitForm}>
            <Stack direction="row" spacing={2} flexWrap="wrap" mb={2}>
              <FormControl size="small" sx={{ minWidth: 160 }}>
                <InputLabel>Tipo</InputLabel>
                <Select label="Tipo" value={form.tipo}
                  onChange={e => setForm(f => ({ ...f, tipo: e.target.value as LecioneroTipo }))}>
                  {TIPOS.map(t => <MenuItem key={t} value={t}>{t}</MenuItem>)}
                </Select>
              </FormControl>
              <TextField label="Ordo" type="number" size="small" sx={{ width: 90 }}
                value={form.ordo} onChange={e => setForm(f => ({ ...f, ordo: +e.target.value }))} />
              <TextField label="Titolo" size="small" sx={{ minWidth: 260 }}
                value={form.titolo} onChange={e => setForm(f => ({ ...f, titolo: e.target.value }))} />
              <TextField label="Daŭro (min.)" type="number" size="small" sx={{ width: 130 }}
                value={form.dauxro ?? ''}
                onChange={e => setForm(f => ({ ...f, dauxro: e.target.value ? +e.target.value : null }))} />
            </Stack>
            <TextField label="Enhavo (HTML)" multiline rows={4} size="small" fullWidth
              sx={{ mb: 2, fontFamily: 'monospace' }}
              value={form.enhavo ?? ''}
              onChange={e => setForm(f => ({ ...f, enhavo: e.target.value || null }))}
              inputProps={{ style: { fontFamily: 'monospace', fontSize: '0.8rem' } }}
            />
            <Stack direction="row" spacing={1} mb={2}>
              {(['unua', 'lasta', 'android'] as const).map(key => (
                <FormControlLabel key={key}
                  control={<Checkbox size="small" checked={form[key] as boolean} onChange={e => setForm(f => ({ ...f, [key]: e.target.checked }))} />}
                  label={key}
                />
              ))}
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
              <TableCell><strong>Ordo</strong></TableCell>
              <TableCell><strong>Tipo</strong></TableCell>
              <TableCell><strong>Titolo</strong></TableCell>
              <TableCell><strong>Daŭro</strong></TableCell>
              <TableCell align="right" />
            </TableRow>
          </TableHead>
          <TableBody>
            {isLoading ? (
              <TableRow><TableCell colSpan={5} align="center">Chargement…</TableCell></TableRow>
            ) : data?.data.length === 0 ? (
              <TableRow><TableCell colSpan={5} align="center" sx={{ color: 'text.secondary' }}>Aucune section</TableCell></TableRow>
            ) : data?.data.map(l => (
              <TableRow key={l.id} hover>
                <TableCell sx={{ fontFamily: 'monospace' }}>{l.ordo}</TableCell>
                <TableCell><Chip label={l.tipo} size="small" color={TIPO_COLOR[l.tipo]} variant="outlined" /></TableCell>
                <TableCell>{decodeHtml(l.titolo)}</TableCell>
                <TableCell sx={{ color: 'text.secondary' }}>{l.dauxro ? `${l.dauxro} min` : ''}</TableCell>
                <TableCell align="right">
                  <Stack direction="row" spacing={1} justifyContent="flex-end">
                    <Button size="small" variant="text" endIcon={<ChevronRightIcon />}
                      onClick={() => navigate(`/kursoj/${kodo}/lecionoj/${id}/lecioneroj/${l.id}/ekzercoj`)}>
                      Ekzercoj
                    </Button>
                    <Button size="small" variant="outlined" startIcon={<EditIcon />} onClick={() => startEdit(l)}>Modifier</Button>
                    <DeleteButton onConfirm={() => deleteMut.mutate(l.id)} isLoading={deleteMut.isPending} />
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
