// Cache local (SQLite) des réponses de l'API déjà vues, en prévision du mode hors ligne (#1123).
// - à l'ouverture, l'écran affiche tout de suite la copie gardée (legiLoke) pendant qu'il redemande au serveur ;
// - toujours redemandée au serveur, puis gardée : ce que l'élève fait sur le site (sections terminées, leçon
//   envoyée, correction reçue) apparaît dans l'application une ou deux secondes après. Avant, une réponse de moins
//   d'une semaine était prise dans le cache sans appeler le serveur, et le sommaire restait en retard (remarque d'une
//   bêta-testeuse) ;
// - serveur injoignable (pas de réseau, ou erreur 5xx) : le cache, même vieux, plutôt qu'une erreur ;
// - changement fait dans l'application (section terminée) : la copie est corrigée sur place (skribi), sans attendre.
// Chaque ligne appartient à un utilisateur (persono id) : un autre compte sur le même téléphone ne la voit pas.
import * as SQLite from 'expo-sqlite'
import { ApiEraro, uzanto } from './kliento'

let datumbazo: Promise<SQLite.SQLiteDatabase> | null = null

function db(): Promise<SQLite.SQLiteDatabase> {
  datumbazo ??= (async () => {
    const d = await SQLite.openDatabaseAsync('kasxmemoro.db')
    await d.execAsync(`
      CREATE TABLE IF NOT EXISTS kasxmemoro (
        persono INTEGER NOT NULL,
        sxlosilo TEXT NOT NULL,
        datumoj TEXT NOT NULL,
        dato INTEGER NOT NULL,
        PRIMARY KEY (persono, sxlosilo)
      )`)
    return d
  })()
  return datumbazo
}

// Le serveur n'a pas pu répondre : fetch a échoué (pas de réseau), ou erreur du serveur lui-même.
function senReto(e: unknown): boolean {
  return !(e instanceof ApiEraro) || e.stato >= 500
}

// Copie gardée sur le téléphone, ou null : pour afficher l'écran sans attendre le serveur.
export async function legiLoke<T>(sxlosilo: string): Promise<T | null> {
  const u = await uzanto()
  if (!u) return null
  try {
    const d = await db()
    const linio = await d.getFirstAsync<{ datumoj: string }>(
      'SELECT datumoj FROM kasxmemoro WHERE persono = ? AND sxlosilo = ?',
      u.id,
      sxlosilo,
    )
    return linio ? (JSON.parse(linio.datumoj) as T) : null
  } catch {
    return null
  }
}

// Remplace la copie gardée (réponse du serveur, ou changement fait dans l'application).
export async function skribi(sxlosilo: string, datumoj: unknown): Promise<void> {
  const u = await uzanto()
  if (!u) return
  try {
    const d = await db()
    await d.runAsync(
      'INSERT OR REPLACE INTO kasxmemoro (persono, sxlosilo, datumoj, dato) VALUES (?, ?, ?, ?)',
      u.id,
      sxlosilo,
      JSON.stringify(datumoj),
      Date.now(),
    )
  } catch {
    // le cache est un plus : l'écran a ses données même s'il n'a pas pu les garder
  }
}

export async function kasxmemorita<T>(sxlosilo: string, legi: () => Promise<T>): Promise<T> {
  let datumoj: T
  try {
    datumoj = await legi()
  } catch (e) {
    if (!senReto(e)) throw e
    const kopio = await legiLoke<T>(sxlosilo)
    if (kopio !== null) return kopio
    throw e
  }
  await skribi(sxlosilo, datumoj)
  return datumoj
}

// Déconnexion, suppression du compte, changement d'élève : plus rien ne reste sur le téléphone.
export async function forgesiCxion(): Promise<void> {
  try {
    const d = await db()
    await d.runAsync('DELETE FROM kasxmemoro')
  } catch {
    // base absente ou illisible : rien à effacer
  }
}
