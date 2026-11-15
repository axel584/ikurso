// Sur le web, pas de rappels de révision (#1120) : ils sont propres à l'application du téléphone.
// Mêmes fonctions que sciigoj.ts, sans effet ; le profil n'affiche pas le réglage (subtenata).

export const subtenata = false

export type RevizioAgordoj = { sxaltita: boolean; horo: number }

export async function legiAgordojn(): Promise<RevizioAgordoj> {
  return { sxaltita: false, horo: 9 }
}

export async function skribiAgordojn(_a: RevizioAgordoj): Promise<void> {}

export type Permeso = { donita: boolean; blokita: boolean }
export async function permeso(_peti: boolean): Promise<Permeso> {
  return { donita: false, blokita: false }
}

export async function proponendaj(): Promise<boolean> {
  return false
}
export async function proponitaj(): Promise<void> {}

export async function nuligiRevizion(): Promise<void> {}

export async function planigiRevizion(): Promise<void> {}

export function auxskultiSciigojn(_malfermi: (url: string) => void): () => void {
  return () => {}
}
