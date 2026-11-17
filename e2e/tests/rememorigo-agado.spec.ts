import { test, expect } from '@playwright/test'
import { cron, resetTestData, sql } from '../helpers/db'
import { clearMails, mailsTo } from '../helpers/mailhog'

// Rappels de 6 et 10 jours sans activité (cron/rappel.php, api/RememorigoAPI.php) : la dernière activité est
// la plus récente entre la dernière page terminée et la dernière révision du vocabulaire. Un élève qui révise
// tous les jours sans terminer de nouvelle page ne doit pas être relancé.
const RETADRESO = 'lernanto1@mailinator.com'
const ID = () => sql("SELECT id FROM personoj WHERE enirnomo='lernanto1'")
const LECIONERO = () => sql("SELECT le.id FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 2")

// dernière page terminée il y a `tagoj` jours
function pagxo(tagoj: number) {
  sql(`INSERT INTO personoj_lecioneroj (dato, persono_id, lecionero_id, ekdato)
    VALUES (DATE_SUB(NOW(), INTERVAL ${tagoj} DAY), ${ID()}, ${LECIONERO()}, DATE_SUB(NOW(), INTERVAL ${tagoj} DAY))`)
}

// dernière révision du vocabulaire il y a `tagoj` jours
function revizio(tagoj: number) {
  sql(`INSERT INTO personoj_vortoj (persono_id, vorto_id, nombrilo, venontaFojo, lastfojo, forigita)
    SELECT ${ID()}, v.id, 2, DATE_ADD(NOW(), INTERVAL 5 DAY), DATE_SUB(NOW(), INTERVAL ${tagoj} DAY), 0
    FROM vortoj v ORDER BY v.id LIMIT 1`)
}

async function rappels() {
  cron('rappel.php')
  // tous les mails sont envoyés pendant le cron : pas d'attente
  return (await mailsTo(RETADRESO)).filter((m) => m.subject === "Cours d'espéranto")
}

const relancoj = () => sql(`SELECT teksto FROM komentoj WHERE studanto=${ID()} AND teksto LIKE 'Envoi relance%'`)

test.beforeEach(async () => {
  resetTestData()
  sql(`DELETE FROM personoj_lecioneroj WHERE persono_id=${ID()}; DELETE FROM personoj_vortoj WHERE persono_id=${ID()}`)
  sql(`INSERT INTO personoj_agordoj (persono_id, agordo, rajto, dato) VALUES (${ID()}, 'RAPPEL', 1, NOW())
    ON DUPLICATE KEY UPDATE rajto = 1`)
  await clearMails()
})

test('sans révision : rappel 6 jours après la dernière page', async () => {
  pagxo(6)
  const mails = await rappels()
  expect(mails).toHaveLength(1)
  expect(mails[0].body).toContain('Voilà bientôt une semaine')
  expect(relancoj()).toBe('Envoi relance 6ème jour')
})

test('révisions quotidiennes sans nouvelle page : pas de rappel', async () => {
  pagxo(6)
  revizio(0)
  expect(await rappels()).toHaveLength(0)
  expect(relancoj()).toBe('')
})

test('révisions arrêtées : rappels 6 puis 10 jours après la dernière révision', async () => {
  pagxo(20)
  revizio(6)
  expect(await rappels()).toHaveLength(1)
  expect(relancoj()).toBe('Envoi relance 6ème jour')

  sql(`DELETE FROM personoj_vortoj WHERE persono_id=${ID()}; DELETE FROM komentoj WHERE studanto=${ID()}`)
  await clearMails()
  revizio(10)
  const mails = await rappels()
  expect(mails).toHaveLength(1)
  expect(relancoj()).toBe('Envoi relance 10ème jour')
})

test('page terminée après la dernière révision : c’est la page qui compte', async () => {
  revizio(15)
  pagxo(10)
  expect(await rappels()).toHaveLength(1)
  expect(relancoj()).toBe('Envoi relance 10ème jour')
})
