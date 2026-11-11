// Cache local (SQLite) des réponses de l'API déjà vues, en prévision du mode hors ligne (#1123).
// - réponse de moins d'une semaine : prise dans le cache, sans appeler le serveur ;
// - plus vieille, ou absente : demandée au serveur, puis gardée ;
// - serveur injoignable (pas de réseau, ou erreur 5xx) : le cache, même trop vieux, plutôt qu'une erreur.
// Chaque ligne appartient à un utilisateur (persono id) : un autre compte sur le même téléphone ne la voit pas.
import * as SQLite from 'expo-sqlite'
import { ApiEraro, uzanto } from './kliento'

const SEMAJNO = 7 * 24 * 3600 * 1000

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

export async function kasxmemorita<T>(sxlosilo: string, legi: () => Promise<T>): Promise<T> {
  const u = await uzanto()
  // personne de connecté : rien à garder
  if (!u) return legi()
  let linio: { datumoj: string; dato: number } | null = null
  try {
    const d = await db()
    linio = await d.getFirstAsync<{ datumoj: string; dato: number }>(
      'SELECT datumoj, dato FROM kasxmemoro WHERE persono = ? AND sxlosilo = ?',
      u.id,
      sxlosilo,
    )
  } catch {
    // cache illisible : on fait comme s'il était vide
  }
  if (linio && Date.now() - linio.dato < SEMAJNO) return JSON.parse(linio.datumoj) as T
  let datumoj: T
  try {
    datumoj = await legi()
  } catch (e) {
    if (linio && senReto(e)) return JSON.parse(linio.datumoj) as T
    throw e
  }
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
  return datumoj
}

// Données changées (section terminée, leçon envoyée) ou rechargement demandé : la prochaine lecture va au serveur.
// Les lignes restent, pour servir encore si le réseau manque.
export async function malfresxigi(...prefiksoj: string[]): Promise<void> {
  const u = await uzanto()
  if (!u) return
  try {
    const d = await db()
    for (const p of prefiksoj) {
      await d.runAsync("UPDATE kasxmemoro SET dato = 0 WHERE persono = ? AND sxlosilo LIKE ? ESCAPE '\\'", u.id, p.replace(/[\\%_]/g, '\\$&') + '%')
    }
  } catch {
    // rien à faire : au pire, les données se rafraîchiront au bout d'une semaine
  }
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
