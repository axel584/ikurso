import { useState, useEffect } from 'react'
import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query'
import { useParams } from 'react-router-dom'
import {
  Box, Typography, Button, Alert, Paper, Stack,
  Table, TableBody, TableCell, TableContainer, TableHead, TableRow,
  TextField, FormControlLabel, Checkbox, LinearProgress, IconButton,
} from '@mui/material'
import AddIcon from '@mui/icons-material/Add'
import DeleteIcon from '@mui/icons-material/Delete'
import { decodeHtml } from '../utils/html'
import EditIcon from '@mui/icons-material/Edit'
import DragIndicatorIcon from '@mui/icons-material/DragIndicator'
import { ekzerceroiApi, type Ekzercero, type EkzerceroStats } from '../api/ekzerceroj'
import DeleteButton from '../components/DeleteButton'

function NormaligitaEditor({ value, onChange }: { value: string | null; onChange: (v: string | null) => void }) {
  const items = value ? value.split('|') : []
  const [input, setInput] = useState('')

  function remove(i: number) {
    const next = items.filter((_, idx) => idx !== i)
    onChange(next.length ? next.join('|') : null)
  }

  function add(val: string) {
    const trimmed = val.trim()
    if (!trimmed || items.includes(trimmed)) return
    onChange([...items, trimmed].join('|'))
    setInput('')
  }

  return (
    <Box>
      <Stack spacing={0.25} mb={0.5}>
        {items.map((item, i) => (
          <Stack key={i} direction="row" alignItems="center" spacing={0.5}>
            <IconButton size="small" onClick={() => remove(i)} sx={{ color: 'error.main', p: '2px' }}>
              <DeleteIcon sx={{ fontSize: 16 }} />
            </IconButton>
            <Typography sx={{ fontFamily: 'monospace', fontSize: 13 }}>{item}</Typography>
          </Stack>
        ))}
      </Stack>
      <Stack direction="row" spacing={0.5} alignItems="center">
        <TextField
          size="small" placeholder="Ajouter une variante…" value={input}
          onChange={e => setInput(e.target.value)}
          onKeyDown={e => { if (e.key === 'Enter') { e.preventDefault(); add(input) } }}
          inputProps={{ style: { fontFamily: 'monospace', fontSize: 13 } }}
          sx={{ flex: 1 }}
        />
        <IconButton size="small" onClick={() => add(input)} disabled={!input.trim()}>
          <AddIcon fontSize="small" />
        </IconButton>
      </Stack>
    </Box>
  )
}

type FormData = Omit<Ekzercero, 'id'>
function emptyForm(ekzerco_id: number): FormData {
  return { ekzerco_id, numero: 1, demando: '', respondmodelo: null, respondo: null, normaligita: null, bildo: '', forigita: false, korektebla: false, poentoj: null }
}

export default function EkzercerojPage() {
  const { eid } = useParams<{ eid: string }>()
  const ekzercoId = parseInt(eid ?? '0', 10)
  const qc = useQueryClient()
  const [editing, setEditing] = useState<Ekzercero | null>(null)
  const [creating, setCreating] = useState(false)
  const [form, setForm] = useState<FormData>(emptyForm(ekzercoId))
  const [error, setError] = useState<string | null>(null)
  const [items, setItems] = useState<Ekzercero[]>([])
  const [dragIndex, setDragIndex] = useState<number | null>(null)
  const [overIndex, setOverIndex] = useState<number | null>(null)

  const { data, isLoading } = useQuery({
    queryKey: ['ekzerceroj', ekzercoId],
    queryFn: () => ekzerceroiApi.list(ekzercoId),
    enabled: !!ekzercoId,
  })

  const { data: statsData } = useQuery<EkzerceroStats>({
    queryKey: ['ekzerceroj-stats', editing?.id],
    queryFn: () => ekzerceroiApi.stats(editing!.id),
    enabled: !!editing,
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

  function addToNormaligita(val: string) {
    const trimmed = val.trim()
    if (!trimmed) return
    setForm(f => {
      const items = f.normaligita ? f.normaligita.split('|') : []
      if (items.includes(trimmed)) return f
      return { ...f, normaligita: [...items, trimmed].join('|') }
    })
  }

  function startCreate() { setEditing(null); setForm(emptyForm(ekzercoId)); setError(null); setCreating(true) }
  function startEdit(e: Ekzercero) {
    setCreating(false)
    setForm({ ekzerco_id: e.ekzerco_id, numero: e.numero, demando: e.demando, respondmodelo: e.respondmodelo, respondo: e.respondo, normaligita: e.normaligita, bildo: e.bildo, forigita: e.forigita, korektebla: e.korektebla, poentoj: e.poentoj })
    setError(null); setEditing(e)
  }
  function cancelForm() { setCreating(false); setEditing(null); setForm(emptyForm(ekzercoId)); setError(null) }
  function submitForm(ev: React.FormEvent) {
    ev.preventDefault()
    if (editing) updateMut.mutate({ id: editing.id, d: form })
    else createMut.mutate(form)
  }

  const isPending = createMut.isPending || updateMut.isPending

  // Synchronise la liste locale avec les données serveur
  useEffect(() => {
    if (data?.data) setItems(data.data)
  }, [data?.data])

  const reorderMut = useMutation({
    mutationFn: async (updates: { id: number; numero: number }[]) => {
      await Promise.all(updates.map(({ id, numero }) => ekzerceroiApi.update(id, { numero })))
    },
    onSuccess: () => { invalidate(); setError(null) },
    onError: (e: Error) => setError(e.message),
  })

  function handleDragStart(index: number) {
    setDragIndex(index)
  }
  function handleDragOver(e: React.DragEvent, index: number) {
    e.preventDefault()
    setOverIndex(index)
  }
  function handleDrop(e: React.DragEvent, dropIndex: number) {
    e.preventDefault()
    if (dragIndex === null || dragIndex === dropIndex) {
      setDragIndex(null); setOverIndex(null); return
    }
    const newItems = [...items]
    const [moved] = newItems.splice(dragIndex, 1)
    newItems.splice(dropIndex, 0, moved)
    // Réutilise les valeurs de numero existantes (triées) redistribuées dans le nouvel ordre
    const sortedNumeros = [...items].sort((a, b) => a.numero - b.numero).map(item => item.numero)
    const updated = newItems.map((item, i) => ({ ...item, numero: sortedNumeros[i] }))
    const updates = updated
      .filter(item => items.find(o => o.id === item.id)?.numero !== item.numero)
      .map(({ id, numero }) => ({ id, numero }))
    setItems(updated)
    if (updates.length > 0) reorderMut.mutate(updates)
    setDragIndex(null); setOverIndex(null)
  }
  function handleDragEnd() {
    setDragIndex(null); setOverIndex(null)
  }

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
            {editing ? `Ekzerceroj #${editing.id} — ekzerco #${eid}` : 'Nouvelle question'}
          </Typography>
          <Box component="form" onSubmit={submitForm}>
            <Stack direction="row" spacing={2} flexWrap="wrap" mb={2}>
              {editing && (
                <TextField label="ID" size="small" sx={{ width: 80 }}
                  value={editing.id} InputProps={{ readOnly: true }}
                  inputProps={{ style: { fontFamily: 'monospace', color: 'grey' } }} />
              )}
              <TextField label="Numero" type="number" size="small" sx={{ width: 100 }}
                value={form.numero} onChange={e => setForm(f => ({ ...f, numero: +e.target.value }))} required />
              <TextField label="Poentoj" type="number" size="small" sx={{ width: 100 }}
                value={form.poentoj ?? ''}
                onChange={e => setForm(f => ({ ...f, poentoj: e.target.value ? +e.target.value : null }))} />
              <TextField label="Bildo" size="small" sx={{ minWidth: 200 }}
                value={form.bildo} onChange={e => setForm(f => ({ ...f, bildo: e.target.value }))} />
            </Stack>
            <TextField label="Demando" multiline rows={2} size="small" fullWidth sx={{ mb: 1 }}
              value={form.demando} onChange={e => setForm(f => ({ ...f, demando: e.target.value }))} required />
            <TextField label="Respondmodelo" size="small" sx={{ mb: 2, width: 320 }}
              helperText="Précision ou exemple affiché avec la question (facultatif)"
              value={form.respondmodelo ?? ''}
              onChange={e => setForm(f => ({ ...f, respondmodelo: e.target.value || null }))} />

            {/* Correction automatique */}
            <Typography variant="caption" color="text.secondary" display="block" mb={0.5}>
              Correction automatique
            </Typography>
            <Stack direction="row" spacing={2} mb={2} alignItems="flex-start">
              <TextField label="Respondo" size="small" sx={{ flex: 1 }}
                helperText="Réponse idéale"
                value={form.respondo ?? ''}
                onChange={e => setForm(f => ({ ...f, respondo: e.target.value || null }))} />
              <Box sx={{ flex: 2 }}>
                <Typography variant="caption" color="text.secondary" display="block" mb={0.5}>
                  Normaligita — réponses autorisées (minuscules, sans accents)
                </Typography>
                <NormaligitaEditor
                  value={form.normaligita}
                  onChange={v => setForm(f => ({ ...f, normaligita: v }))}
                />
              </Box>
            </Stack>
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

      {editing && statsData && (
        <Paper variant="outlined" sx={{ p: 2, mb: 3 }}>
          <Typography variant="caption" color="text.secondary" display="block" mb={1}>
            Réponses les plus fréquentes — {statsData.total} réponse{statsData.total > 1 ? 's' : ''} au total
          </Typography>
          <Stack spacing={0.5}>
            {statsData.data.length === 0 ? (
              <Typography variant="body2" color="text.secondary">Aucune réponse enregistrée</Typography>
            ) : statsData.data.map((row, i) => (
              <Stack key={i} direction="row" spacing={1} alignItems="center">
                <IconButton
                  size="small" title="Ajouter à normaligita"
                  disabled={!row.respondo}
                  onClick={() => row.respondo && addToNormaligita(row.respondo)}
                  sx={{ p: '2px', color: 'success.main' }}
                >
                  <AddIcon sx={{ fontSize: 16 }} />
                </IconButton>
                <Typography variant="body2" sx={{ fontFamily: 'monospace', minWidth: 200, flexShrink: 0 }}>
                  {row.respondo ?? <em style={{ color: '#999' }}>(vide)</em>}
                </Typography>
                <Box sx={{ flex: 1 }}>
                  <LinearProgress variant="determinate" value={row.procento} sx={{ height: 8, borderRadius: 1 }} />
                </Box>
                <Typography variant="body2" color="text.secondary" sx={{ minWidth: 70, textAlign: 'right' }}>
                  {row.nombre} ({row.procento.toFixed(0)} %)
                </Typography>
              </Stack>
            ))}
          </Stack>
        </Paper>
      )}

      <TableContainer component={Paper} variant="outlined">
        <Table size="small">
          <TableHead>
            <TableRow sx={{ bgcolor: 'grey.50' }}>
              <TableCell sx={{ width: 32, px: 1 }} />
              <TableCell><strong>N°</strong></TableCell>
              <TableCell><strong>Demando</strong></TableCell>
              <TableCell><strong>Respondo</strong></TableCell>
              <TableCell align="right" />
            </TableRow>
          </TableHead>
          <TableBody>
            {isLoading ? (
              <TableRow><TableCell colSpan={5} align="center">Chargement…</TableCell></TableRow>
            ) : items.length === 0 ? (
              <TableRow><TableCell colSpan={5} align="center" sx={{ color: 'text.secondary' }}>Aucune question</TableCell></TableRow>
            ) : items.map((e, idx) => (
              <TableRow
                key={e.id}
                hover={dragIndex === null}
                draggable
                onDragStart={() => handleDragStart(idx)}
                onDragOver={ev => handleDragOver(ev, idx)}
                onDrop={ev => handleDrop(ev, idx)}
                onDragEnd={handleDragEnd}
                sx={{
                  opacity: dragIndex === idx ? 0.3 : 1,
                  cursor: dragIndex !== null ? 'grabbing' : undefined,
                  ...(overIndex === idx && dragIndex !== null && dragIndex !== idx && {
                    '& > td': {
                      borderTop: '2px solid',
                      borderTopColor: 'primary.main',
                    },
                    bgcolor: 'primary.50',
                  }),
                }}
              >
                <TableCell sx={{ width: 32, px: 1, color: 'text.disabled', cursor: 'grab' }}>
                  <DragIndicatorIcon fontSize="small" />
                </TableCell>
                <TableCell sx={{ fontFamily: 'monospace' }}>{e.numero}</TableCell>
                <TableCell sx={{ maxWidth: 280, overflow: 'hidden', textOverflow: 'ellipsis', whiteSpace: 'nowrap' }}>{decodeHtml(e.demando)}</TableCell>
                <TableCell sx={{ maxWidth: 200, overflow: 'hidden', textOverflow: 'ellipsis', whiteSpace: 'nowrap', color: 'text.secondary' }}>{decodeHtml(e.respondo)}</TableCell>
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
