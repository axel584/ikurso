// Petits réglages gardés sur le téléphone (par exemple : le rappel d'inscription déjà montré, #1089).
import * as SecureStore from 'expo-secure-store'

export async function legiAgordon(nomo: string): Promise<string | null> {
  return SecureStore.getItemAsync('ikurso.' + nomo)
}

export async function skribiAgordon(nomo: string, valoro: string): Promise<void> {
  await SecureStore.setItemAsync('ikurso.' + nomo, valoro)
}
