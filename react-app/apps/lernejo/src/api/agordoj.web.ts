// Petits réglages gardés dans le navigateur (par exemple : le rappel d'inscription déjà montré, #1089).

export async function legiAgordon(nomo: string): Promise<string | null> {
  try {
    return localStorage.getItem('ikurso.' + nomo)
  } catch {
    return null
  }
}

export async function skribiAgordon(nomo: string, valoro: string): Promise<void> {
  try {
    localStorage.setItem('ikurso.' + nomo, valoro)
  } catch {
    // navigation privée : le réglage ne dure que le temps de la page
  }
}
