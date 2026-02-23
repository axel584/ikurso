import { useState } from 'react'
import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query'
import { useParams } from 'react-router-dom'
import {
  Box, Typography, Button, Alert, Paper, Stack,
  Table, TableBody, TableCell, TableContainer, TableHead, TableRow,
  TextField, FormControlLabel, Checkbox,
} from '@mui/material'
import AddIcon from '@mui/icons-material/Add'
import { decodeHtml } from '../utils/html'
import EditIcon from '@mui/icons-material/Edit'
import { ekzerceroiApi, type Ekzercero } from '../api/ekzerceroj'
import DeleteButton from '../components/DeleteButton'

type FormData = Omit<Ekzercero, 'id'>
function emptyForm(ekzerco_id: number): FormData {
  return { ekzerco_id, kodo: '', numero: 1, demando: '', respondmodelo: null, respondo: null, normaligita: null, bildo: '', forigita: false, korektebla: false, poentoj: null }
}

export default function EkzerceroiPage() {
  const { eid } = useParams<{ eid: string }>()
  const ekzercoId = parseInt(eid ?? '0', 10)
  const qc = useQueryClient()
  const [editing, setEditing] = useState<Ekzercero | null>(null)
  const [creating, setCreating] = useState(false)
  const [form, setForm] = useState<FormData>(emptyForm(ekzercoId))
  const [error, setError] = useState<string | null>(null)

  const { data, isLoading } = useQuery({
    queryKey: ['ekzerceroj', ekzercoId],
    queryFn: () => ekzerceroiApi.list(ekzercoId),
    enabled: !!ekzercoId,
  })

  const invalidate = () => qc.invalidateQueries({ queryKey: ['ekzerceroj', ekzercoId] })
  const createMut = useMutation({
    mutationFn: (d: FormData) => ekzerceroiApi.create(d),
    onSuccess: () => { invalidate(); setCreating(false); setForm(emptyForm(ekzercoId)); setError(null) },
    onError: (e: Error) => setError(e.message),
  })
  const updateMut = useMutation({
    mutationFn: ({ id, d }: { id: number; d: Partial<FormData> }) => ekzerceroiApi.update(id, d),
    onSuccess: () => { invalidate(); setEditing(null); setForm(emptyForm(ekzercoId)); setError(null) },
    onError: (e: Error) => setError(e.message),
  })
  const deleteMut = useMutation({
    mutationFn: (id: number) => ekzerceroiApi.delete(id),
    onSuccess: () => invalidate(),
    onError: (e: Error) => setError(e.message),
  })

  function startCreate() { setEditing(null); setForm(emptyForm(ekzercoId)); setError(null); setCreating(true) }
  function startEdit(e: Ekzercero) {
    setCreating(false)
    setForm({ ekzerco_id: e.ekzerco_id, kodo: e.kodo, numero: e.numero, demando: e.demando, respondmodelo: e.respondmodelo, respondo: e.respondo, normaligita: e.normaligita, bildo: e.bildo, forigita: e.forigita, korektebla: e.korektebla, poentoj: e.poentoj })
    setError(null); setEditing(e)
  }
  function cancelForm() { setCreating(false); setEditing(null); setForm(emptyForm(ekzercoId)); setError(null) }
  function submitForm(ev: React.FormEvent) {
    ev.preventDefault()
    if (editing) updateMut.mutate({ id: editing.id, d: form })
    else createMut.mutate(form)
  }

  const isPending = createMut.isPending || updateMut.isPending

  return (
    <Box>
      <Stack direction="row" justifyContent="space-between" alignItems="center" mb={3}>
        <Typography variant="h5" fontWeight="bold">Ekzerceroj — ekzerco #{eid}</Typography>
        {!creating && !editing && (
          <Button variant="contained" startIcon={<AddIcon />} onClick={startCreate}>Nova ekzercero</Button>
        )}
      </Stack>

      {error && <Alert severity="error" sx={{ mb: 2 }}>{error}</Alert>}

      {(creating || editing) && (
        <Paper variant="outlined" sx={{ p: 3, mb: 3 }}>
          <Typography variant="subtitle1" fontWeight="bold" mb={2}>
            {editing ? 'Modifier la question' : 'Nouvelle question'}
          </Typography>
          <Box component="form" onSubmit={submitForm}>
            <Stack direction="row" spacing={2} flexWrap="wrap" mb={2}>
              <TextField label="Kodo (max 10)" size="small" sx={{ width: 140 }}
                inputProps={{ maxLength: 10, style: { fontFamily: 'monospace' } }}
                value={form.kodo} onChange={e => setForm(f => ({ ...f, kodo: e.target.value }))} required />
              <TextField label="Numero" type="number" size="small" sx={{ width: 100 }}
                value={form.numero} onChange={e => setForm(f => ({ ...f, numero: +e.target.value }))} required />
              <TextField label="Poentoj" type="number" size="small" sx={{ width: 100 }}
                value={form.poentoj ?? ''}
                onChange={e => setForm(f => ({ ...f, poentoj: e.target.value ? +e.target.value : null }))} />
              <TextField label="Bildo" size="small" sx={{ minWidth: 200 }}
                value={form.bildo} onChange={e => setForm(f => ({ ...f, bildo: e.target.value }))} />
            </Stack>
            <TextField label="Demando" multiline rows={2} size="small" fullWidth sx={{ mb: 2 }}
              value={form.demando} onChange={e => setForm(f => ({ ...f, demando: e.target.value }))} required />
            <Stack direction="row" spacing={2} mb={2}>
              <TextField label="Respondmodelo" size="small" sx={{ flex: 1 }}
                value={form.respondmodelo ?? ''}
                onChange={e => setForm(f => ({ ...f, respondmodelo: e.target.value || null }))} />
              <TextField label="Normaligita" size="small" sx={{ flex: 1 }}
                inputProps={{ style: { fontFamily: 'monospace' } }}
                value={form.normaligita ?? ''}
                onChange={e => setForm(f => ({ ...f, normaligita: e.target.value || null }))} />
            </Stack>
            <TextField label="Respondo (variantes)" multiline rows={2} size="small" fullWidth sx={{ mb: 2 }}
              value={form.respondo ?? ''}
              onChange={e => setForm(f => ({ ...f, respondo: e.target.value || null }))} />
            <Stack direction="row" spacing={1} mb={2}>
              <FormControlLabel control={<Checkbox size="small" checked={form.forigita} onChange={e => setForm(f => ({ ...f, forigita: e.target.checked }))} />} label="forigita" />
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
              <TableCell><strong>N°</strong></TableCell>
              <TableCell><strong>Kodo</strong></TableCell>
              <TableCell><strong>Demando</strong></TableCell>
              <TableCell><strong>Respondmodelo</strong></TableCell>
              <TableCell><strong>Pt.</strong></TableCell>
              <TableCell align="right" />
            </TableRow>
          </TableHead>
          <TableBody>
            {isLoading ? (
              <TableRow><TableCell colSpan={6} align="center">Chargement…</TableCell></TableRow>
            ) : data?.data.length === 0 ? (
              <TableRow><TableCell colSpan={6} align="center" sx={{ color: 'text.secondary' }}>Aucune question</TableCell></TableRow>
            ) : data?.data.map(e => (
              <TableRow key={e.id} hover>
                <TableCell sx={{ fontFamily: 'monospace' }}>{e.numero}</TableCell>
                <TableCell sx={{ fontFamily: 'monospace', fontSize: '0.75rem' }}>{e.kodo}</TableCell>
                <TableCell sx={{ maxWidth: 280, overflow: 'hidden', textOverflow: 'ellipsis', whiteSpace: 'nowrap' }}>{decodeHtml(e.demando)}</TableCell>
                <TableCell sx={{ maxWidth: 200, overflow: 'hidden', textOverflow: 'ellipsis', whiteSpace: 'nowrap', color: 'text.secondary' }}>{decodeHtml(e.respondmodelo)}</TableCell>
                <TableCell sx={{ color: 'text.secondary' }}>{e.poentoj}</TableCell>
                <TableCell align="right">
                  <Stack direction="row" spacing={1} justifyContent="flex-end">
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
