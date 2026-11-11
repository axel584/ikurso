// Sur le web, pas de cache local (#1123) : le site sert déjà l'application en ligne, et SQLite y demanderait
// des en-têtes COOP/COEP sur tout /lernejo. Mêmes fonctions que kasxmemoro.ts, qui passent directement au serveur.

export async function kasxmemorita<T>(_sxlosilo: string, legi: () => Promise<T>): Promise<T> {
  return legi()
}

export async function malfresxigi(..._prefiksoj: string[]): Promise<void> {}

export async function forgesiCxion(): Promise<void> {}
