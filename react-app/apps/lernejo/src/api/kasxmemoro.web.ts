// Sur le web, pas de cache local (#1123) : le site sert déjà l'application en ligne, et SQLite y demanderait
// des en-têtes COOP/COEP sur tout /lernejo. Mêmes fonctions que kasxmemoro.ts, qui passent directement au serveur.

export async function kasxmemorita<T>(_sxlosilo: string, legi: () => Promise<T>): Promise<T> {
  return legi()
}

export async function legiLoke<T>(_sxlosilo: string): Promise<T | null> {
  return null
}

export async function skribi(_sxlosilo: string, _datumoj: unknown): Promise<void> {}

export async function forgesiCxion(): Promise<void> {}
