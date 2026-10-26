import { execFileSync } from 'node:child_process'
import { readFileSync } from 'node:fs'
import { fileURLToPath } from 'node:url'

// Identifiants de la base Docker de dev (docker-compose.yml), pas ceux de la prod.
const DB_CONTAINER = process.env.DB_CONTAINER ?? 'ikurso_mysql'
const DB_ARGS = ['-uikurso_user', '-pikurso_pass', '--default-character-set=utf8mb4', 'ikurso']

const seedFile = fileURLToPath(new URL('../../sql/03-create-data-test.sql', import.meta.url))

export function sql(query: string): string {
  return execFileSync('docker', ['exec', '-i', DB_CONTAINER, 'mysql', ...DB_ARGS, '-N', '-B'], {
    input: query,
    encoding: 'utf8',
  }).trim()
}

// Lance un script de cron/ dans le conteneur web, comme le fait le crontab du serveur.
const WEB_CONTAINER = process.env.WEB_CONTAINER ?? 'ikurso_php'

export function cron(script: string): string {
  return execFileSync('docker', ['exec', '-w', '/var/www/html/cron', WEB_CONTAINER, 'php', script], {
    encoding: 'utf8',
  }).trim()
}

// Remet les comptes de test (administranto, korektanto1, lernanto1) dans leur état initial.
// 03-create-data-test.sql commence par vider les tables liées aux personnes.
export function resetTestData(): void {
  sql(readFileSync(seedFile, 'utf8'))
}
