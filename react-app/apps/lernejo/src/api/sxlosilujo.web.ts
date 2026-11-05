// Jetons de l'application sur le web : localStorage du navigateur (pas de stockage sécurisé sur le web).
import type { Sxlosiloj } from '@ikurso/api-client'

const SXLOSILO = 'ikurso.sxlosiloj'

export async function legi(): Promise<string | null> {
  try {
    return localStorage.getItem(SXLOSILO)
  } catch {
    return null
  }
}

export async function skribi(sxlosiloj: Sxlosiloj | null): Promise<void> {
  try {
    if (sxlosiloj) {
      localStorage.setItem(SXLOSILO, JSON.stringify(sxlosiloj))
    } else {
      localStorage.removeItem(SXLOSILO)
    }
  } catch {
    // navigation privée : la connexion ne dure que le temps de la page
  }
}
