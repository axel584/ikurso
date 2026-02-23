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
import { lecionojApi, type Leciono } from '../api/lecionoj'
import { kursojApi } from '../api/kursoj'
import DeleteButton from '../components/DeleteButton'

type FormData = Omit<Leciono, 'id'>
function emptyForm(kodo: string): FormData {
  return { numero: 1, titolo: '', retpagxo: null, kurso: kodo, unua: false, lasta: false }
}

export default function LecionojPage() {
  const { kodo } = useParams<{ kodo: string }>()
  const qc = useQueryClient()
  const navigate = useNavigate()
  const [editing, setEditing] = useState<Leciono | null>(null)
  const [creating, setCreating] = useState(false)
  const [form, setForm] = useState<FormData>(emptyForm(kodo ?? ''))
  const [error, setError] = useState<string | null>(null)

  const { data: kursojData } = useQuery({ queryKey: ['kursoj'], queryFn: () => kursojApi.list() })
  const { data, isLoading } = useQuery({
    queryKey: ['lecionoj', kodo],
    queryFn: () => lecionojApi.list(kodo),
    enabled: !!kodo,
  })

  const invalidate = () => qc.invalidateQueries({ queryKey: ['lecionoj', kodo] })
  const createMut = useMutation({
    mutationFn: (d: FormData) => lecionojApi.create(d),
    onSuccess: () => { invalidate(); setCreating(false); setForm(emptyForm(kodo ?? '')); setError(null) },
    onError: (e: Error) => setError(e.message),
  })
  const updateMut = useMutation({
    mutationFn: ({ id, d }: { id: number; d: Partial<FormData> }) => lecionojApi.update(id, d),
    onSuccess: () => { invalidate(); setEditing(null); setForm(emptyForm(kodo ?? '')); setError(null) },
    onError: (e: Error) => setError(e.message),
  })
  const deleteMut = useMutation({
    mutationFn: (id: number) => lecionojApi.delete(id),
    onSuccess: () => invalidate(),
    onError: (e: Error) => setError(e.message),
  })

  function startCreate() { setEditing(null); setForm(emptyForm(kodo ?? '')); setError(null); setCreating(true) }
  function startEdit(l: Leciono) {
    setCreating(false)
    setForm({ numero: l.numero, titolo: l.titolo, retpagxo: l.retpagxo, kurso: l.kurso, unua: l.unua, lasta: l.lasta })
    setError(null); setEditing(l)
  }
  function cancelForm() { setCreating(false); setEditing(null); setForm(emptyForm(kodo ?? '')); setError(null) }
  function submitForm(e: React.FormEvent) {
    e.preventDefault()
    if (editing) updateMut.mutate({ id: editing.id, d: form })
    else createMut.mutate(form)
  }

  const isPending = createMut.isPending || updateMut.isPending

  return (
    <Box>
      <Stack direction="row" justifyContent="space-between" alignItems="center" mb={3}>
        <Typography variant="h5" fontWeight="bold">Lecionoj — kurso {kodo}</Typography>
        {!creating && !editing && (
          <Button variant="contained" startIcon={<AddIcon />} onClick={startCreate}>Nova leciono</Button>
        )}
      </Stack>

      {error && <Alert severity="error" sx={{ mb: 2 }}>{error}</Alert>}

      {(creating || editing) && (
        <Paper variant="outlined" sx={{ p: 3, mb: 3 }}>
          <Typography variant="subtitle1" fontWeight="bold" mb={2}>
            {editing ? 'Modifier la leçon' : 'Nouvelle leçon'}
          </Typography>
          <Box component="form" onSubmit={submitForm}>
            <Stack direction="row" spacing={2} flexWrap="wrap" mb={2}>
              <TextField label="Numero" type="number" size="small" sx={{ width: 100 }}
                value={form.numero}
                onChange={e => setForm(f => ({ ...f, numero: +e.target.value }))}
                required
              />
              <FormControl size="small" sx={{ minWidth: 200 }}>
                <InputLabel>Kurso</InputLabel>
                <Select label="Kurso" value={form.kurso}
                  onChange={e => setForm(f => ({ ...f, kurso: e.target.value }))}>
                  {kursojData?.data.map(k => (
                    <MenuItem key={k.kodo} value={k.kodo}>{k.kodo} — {k.nomo}</MenuItem>
                  ))}
                </Select>
              </FormControl>
              <TextField label="Titolo" size="small" sx={{ minWidth: 260 }}
                value={form.titolo}
                onChange={e => setForm(f => ({ ...f, titolo: e.target.value }))}
              />
              <TextField label="Retpaĝo" size="small" sx={{ minWidth: 260, fontFamily: 'monospace' }}
                value={form.retpagxo ?? ''}
                onChange={e => setForm(f => ({ ...f, retpagxo: e.target.value || null }))}
              />
            </Stack>
            <Stack direction="row" spacing={1} mb={2}>
              <FormControlLabel control={<Checkbox size="small" checked={form.unua} onChange={e => setForm(f => ({ ...f, unua: e.target.checked }))} />} label="Unua" />
              <FormControlLabel control={<Checkbox size="small" checked={form.lasta} onChange={e => setForm(f => ({ ...f, lasta: e.target.checked }))} />} label="Lasta" />
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
              <TableCell><strong>N°</strong></TableCell>
              <TableCell><strong>Titolo</strong></TableCell>
              <TableCell><strong>Retpaĝo</strong></TableCell>
              <TableCell><strong>Flags</strong></TableCell>
              <TableCell align="right" />
            </TableRow>
          </TableHead>
          <TableBody>
            {isLoading ? (
              <TableRow><TableCell colSpan={5} align="center">Chargement…</TableCell></TableRow>
            ) : data?.data.length === 0 ? (
              <TableRow><TableCell colSpan={5} align="center" sx={{ color: 'text.secondary' }}>Aucune leçon</TableCell></TableRow>
            ) : data?.data.map(l => (
              <TableRow key={l.id} hover>
                <TableCell sx={{ fontFamily: 'monospace' }}>{l.numero}</TableCell>
                <TableCell>{decodeHtml(l.titolo)}</TableCell>
                <TableCell sx={{ fontFamily: 'monospace', fontSize: '0.75rem', color: 'text.secondary' }}>{l.retpagxo}</TableCell>
                <TableCell>
                  <Stack direction="row" spacing={0.5}>
                    {l.unua && <Chip label="unua" size="small" color="success" variant="outlined" />}
                    {l.lasta && <Chip label="lasta" size="small" color="warning" variant="outlined" />}
                  </Stack>
                </TableCell>
                <TableCell align="right">
                  <Stack direction="row" spacing={1} justifyContent="flex-end">
                    <Button size="small" variant="text" endIcon={<ChevronRightIcon />}
                      onClick={() => navigate(`/kursoj/${kodo}/lecionoj/${l.id}/lecioneroj`)}>
                      Lecioneroj
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
