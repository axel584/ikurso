import { useState } from 'react'
import { Button, Stack } from '@mui/material'
import DeleteIcon from '@mui/icons-material/Delete'

interface Props {
  onConfirm: () => void
  isLoading?: boolean
}

export default function DeleteButton({ onConfirm, isLoading = false }: Props) {
  const [confirming, setConfirming] = useState(false)

  if (confirming) {
    return (
      <Stack direction="row" spacing={0.5} display="inline-flex">
        <Button
          size="small"
          variant="contained"
          color="error"
          disabled={isLoading}
          onClick={() => { onConfirm(); setConfirming(false) }}
        >
          {isLoading ? '…' : 'Confirmer'}
        </Button>
        <Button
          size="small"
          variant="outlined"
          color="inherit"
          onClick={() => setConfirming(false)}
        >
          Annuler
        </Button>
      </Stack>
    )
  }

  return (
    <Button
      size="small"
      variant="outlined"
      color="error"
      startIcon={<DeleteIcon />}
      onClick={() => setConfirming(true)}
    >
      Supprimer
    </Button>
  )
}
