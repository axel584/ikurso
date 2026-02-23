import { useState } from 'react'
import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query'
import { useNavigate } from 'react-router-dom'
import {
  Box, Typography, Button, Alert, Paper,
  Table, TableBody, TableCell, TableContainer, TableHead, TableRow,
  TextField, Stack,
} from '@mui/material'
import AddIcon from '@mui/icons-material/Add'
import EditIcon from '@mui/icons-material/Edit'
import ChevronRightIcon from '@mui/icons-material/ChevronRight'
import { kursojApi, type Kurso } from '../api/kursoj'
import DeleteButton from '../components/DeleteButton'

type FormData = { kodo: string; nomo: string }
const emptyForm: FormData = { kodo: '', nomo: '' }

export default function KursojPage() {
  const qc = useQueryClient()
  const navigate = useNavigate()
  const [editing, setEditing] = useState<Kurso | null>(null)
  const [creating, setCreating] = useState(false)
  const [form, setForm] = useState<FormData>(emptyForm)
  const [error, setError] = useState<string | null>(null)

  const { data, isLoading } = useQuery({
    queryKey: ['kursoj'],
    queryFn: () => kursojApi.list(),
  })

  const invalidate = () => qc.invalidateQueries({ queryKey: ['kursoj'] })

  const createMut = useMutation({
    mutationFn: (d: FormData) => kursojApi.create(d),
    onSuccess: () => { invalidate(); setCreating(false); setForm(emptyForm); setError(null) },
    onError: (e: Error) => setError(e.message),
  })
  const updateMut = useMutation({
    mutationFn: ({ id, d }: { id: number; d: Partial<FormData> }) => kursojApi.update(id, d),
    onSuccess: () => { invalidate(); setEditing(null); setForm(emptyForm); setError(null) },
    onError: (e: Error) => setError(e.message),
  })
  const deleteMut = useMutation({
    mutationFn: (id: number) => kursojApi.delete(id),
    onSuccess: () => invalidate(),
    onError: (e: Error) => setError(e.message),
  })

  function startCreate() { setEditing(null); setForm(emptyForm); setError(null); setCreating(true) }
  function startEdit(k: Kurso) { setCreating(false); setForm({ kodo: k.kodo, nomo: k.nomo }); setError(null); setEditing(k) }
  function cancelForm() { setCreating(false); setEditing(null); setForm(emptyForm); setError(null) }
  function submitForm(e: React.FormEvent) {
    e.preventDefault()
    if (editing) updateMut.mutate({ id: editing.id, d: form })
    else createMut.mutate(form)
  }

  const isPending = createMut.isPending || updateMut.isPending

  return (
    <Box>
      <Stack direction="row" justifyContent="space-between" alignItems="center" mb={3}>
        <Typography variant="h5" fontWeight="bold">Kursoj</Typography>
        {!creating && !editing && (
          <Button variant="contained" startIcon={<AddIcon />} onClick={startCreate}>
            Nova kurso
          </Button>
        )}
      </Stack>

      {error && <Alert severity="error" sx={{ mb: 2 }}>{error}</Alert>}

      {(creating || editing) && (
        <Paper variant="outlined" sx={{ p: 3, mb: 3 }}>
          <Typography variant="subtitle1" fontWeight="bold" mb={2}>
            {editing ? 'Modifier le cours' : 'Nouveau cours'}
          </Typography>
          <Box component="form" onSubmit={submitForm}>
            <Stack direction="row" spacing={2} flexWrap="wrap">
              <TextField
                label="Kodo (max 2 car.)"
                size="small"
                inputProps={{ maxLength: 2, style: { textTransform: 'uppercase', width: 60 } }}
                value={form.kodo}
                onChange={e => setForm(f => ({ ...f, kodo: e.target.value.toUpperCase() }))}
                required
              />
              <TextField
                label="Nomo"
                size="small"
                sx={{ minWidth: 280 }}
                value={form.nomo}
                onChange={e => setForm(f => ({ ...f, nomo: e.target.value }))}
                required
              />
            </Stack>
            <Stack direction="row" spacing={1} mt={2}>
              <Button type="submit" variant="contained" color="success" disabled={isPending} size="small">
                {isPending ? '…' : editing ? 'Enregistrer' : 'Créer'}
              </Button>
              <Button variant="outlined" color="inherit" size="small" onClick={cancelForm}>
                Annuler
              </Button>
            </Stack>
          </Box>
        </Paper>
      )}

      <TableContainer component={Paper} variant="outlined">
        <Table size="small">
          <TableHead>
            <TableRow sx={{ bgcolor: 'grey.50' }}>
              <TableCell><strong>Kodo</strong></TableCell>
              <TableCell><strong>Nomo</strong></TableCell>
              <TableCell align="right" />
            </TableRow>
          </TableHead>
          <TableBody>
            {isLoading ? (
              <TableRow><TableCell colSpan={3} align="center">Chargement…</TableCell></TableRow>
            ) : data?.data.length === 0 ? (
              <TableRow><TableCell colSpan={3} align="center" sx={{ color: 'text.secondary' }}>Aucun cours</TableCell></TableRow>
            ) : data?.data.map(k => (
              <TableRow key={k.id} hover>
                <TableCell sx={{ fontFamily: 'monospace', fontWeight: 'bold' }}>{k.kodo}</TableCell>
                <TableCell>{k.nomo}</TableCell>
                <TableCell align="right">
                  <Stack direction="row" spacing={1} justifyContent="flex-end">
                    <Button size="small" variant="text" endIcon={<ChevronRightIcon />}
                      onClick={() => navigate(`/kursoj/${k.kodo}/lecionoj`)}>
                      Lecionoj
                    </Button>
                    <Button size="small" variant="outlined" startIcon={<EditIcon />}
                      onClick={() => startEdit(k)}>
                      Modifier
                    </Button>
                    <DeleteButton onConfirm={() => deleteMut.mutate(k.id)} isLoading={deleteMut.isPending} />
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
