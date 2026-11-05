// Jetons de l'application sur le téléphone : stockage sécurisé de l'appareil (Keychain, Keystore).
import * as SecureStore from 'expo-secure-store'
import type { Sxlosiloj } from '@ikurso/api-client'

const SXLOSILO = 'ikurso.sxlosiloj'

export async function legi(): Promise<string | null> {
  return SecureStore.getItemAsync(SXLOSILO)
}

export async function skribi(sxlosiloj: Sxlosiloj | null): Promise<void> {
  if (sxlosiloj) {
    await SecureStore.setItemAsync(SXLOSILO, JSON.stringify(sxlosiloj))
  } else {
    await SecureStore.deleteItemAsync(SXLOSILO)
  }
}
