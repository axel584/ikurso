import { test, expect } from '@playwright/test'
import { login, USERS } from '../helpers/auth'
import { resetTestData, sql } from '../helpers/db'
import { clearMails, mailsTo, waitForMail } from '../helpers/mailhog'

// Suppression de compte (#1108) : chaque correcteur de l'élève est prévenu de ne plus le contacter.
const ENIRNOMO = 'e2eforigo'
const KOREKTANTO = 'korektanto1@mailinator.com'
const ADMINISTRANTO = 'administranto@mailinator.com'
const SUBJEKTO = `Votre élève ${ENIRNOMO} a supprimé son compte`
const ID = () => sql(`SELECT id FROM personoj WHERE enirnomo='${ENIRNOMO}'`)
const PERSONO = (enirnomo: string) => sql(`SELECT id FROM personoj WHERE enirnomo='${enirnomo}'`)

// élève inscrit à chaque cours donné, avec son correcteur
function lernanto(kursoj: { kurso: string; korektanto: string | null }[]): void {
  sql(`INSERT INTO personoj (enirnomo, personnomo, retadreso, rajtoj, aktivigita, ekdato, pasvorto_md5)
    VALUES ('${ENIRNOMO}', 'Zamenhof', '${ENIRNOMO}@mailinator.com', 'S', 1, NOW(), MD5('test'))`)
  for (const { kurso, korektanto } of kursoj) {
    sql(`INSERT INTO nuna_kurso (ekdato, lastdato, korektanto, studanto, kurso, nunleciono, stato)
      VALUES (NOW(), NOW(), ${korektanto ? PERSONO(korektanto) : 0}, ${ID()}, '${kurso}', 1, 'K')`)
  }
}

async function forigiSinMem(page: import('@playwright/test').Page): Promise<void> {
  await login(page, { login: ENIRNOMO, password: 'test' })
  await page.goto('forigiKonton.php')
  await page.locator('#pasvorto').fill('test')
  await page.getByRole('button', { name: 'Supprimer définitivement mon compte' }).click()
  await expect(page).toHaveURL(/erarkodo=26/)
  expect(sql(`SELECT COUNT(*) FROM personoj WHERE enirnomo='${ENIRNOMO}'`)).toBe('0')
}

test.beforeEach(async () => {
  resetTestData()
  sql(`DELETE FROM nuna_kurso WHERE studanto IN (SELECT id FROM personoj WHERE enirnomo='${ENIRNOMO}')`)
  sql(`DELETE FROM personoj WHERE enirnomo='${ENIRNOMO}'`)
  sql(`DELETE FROM protokolo WHERE kategorio='COMPTE SUPPRIMÉ'`)
  await clearMails()
})

test('le correcteur est prévenu quand son élève supprime son compte', async ({ page }) => {
  lernanto([{ kurso: 'CG', korektanto: 'korektanto1' }])
  await forigiSinMem(page)
  const mail = await waitForMail(KOREKTANTO, SUBJEKTO)
  expect(mail.body).toContain(ENIRNOMO)
  expect(mail.body).toContain('Zamenhof')
  expect(mail.body).toContain('Merci de ne plus le contacter')
  // ni l'adresse de l'élève
  expect(mail.body).not.toContain(`${ENIRNOMO}@mailinator.com`)
  // trace dans le compte rendu du correcteur
  expect(sql(`SELECT teksto FROM protokolo WHERE persono_id=${PERSONO('korektanto1')} AND kategorio='COMPTE SUPPRIMÉ'`))
    .toContain(`élève ${ENIRNOMO}`)
})

test('sans correcteur, aucun mail', async ({ page }) => {
  lernanto([{ kurso: 'CG', korektanto: null }])
  await forigiSinMem(page)
  // le temps qu'un éventuel mail arrive
  await page.waitForTimeout(1500)
  expect((await mailsTo(KOREKTANTO)).filter((m) => m.subject.includes(SUBJEKTO))).toHaveLength(0)
  expect(sql(`SELECT COUNT(*) FROM protokolo WHERE kategorio='COMPTE SUPPRIMÉ'`)).toBe('0')
})

test('deux cours, deux correcteurs : chacun reçoit un mail pour son cours', async ({ page }) => {
  lernanto([{ kurso: 'CG', korektanto: 'korektanto1' }, { kurso: 'GR', korektanto: 'administranto' }])
  await forigiSinMem(page)
  const alKorektanto = await waitForMail(KOREKTANTO, SUBJEKTO)
  const alAdministranto = await waitForMail(ADMINISTRANTO, SUBJEKTO)
  const kursonomo = (kodo: string) => sql(`SELECT nomo FROM kursoj WHERE kodo='${kodo}'`)
  expect(alKorektanto.body).toContain(kursonomo('CG'))
  expect(alKorektanto.body).not.toContain(kursonomo('GR'))
  expect(alAdministranto.body).toContain(kursonomo('GR'))
})

test('suppression par un administrateur : le correcteur est prévenu si la case est cochée', async ({ page }) => {
  lernanto([{ kurso: 'CG', korektanto: 'korektanto1' }])
  await login(page, USERS.admin)
  await page.goto(`administri.php?celpersono_id=${ID()}`)
  await page.getByRole('button', { name: 'Supprimer' }).click()
  await expect(page.locator('input[name="averti"]')).toBeChecked()
  await page.locator('input[name="validperson"]').fill(ENIRNOMO)
  await page.getByRole('button', { name: 'Confirmer' }).click()
  await expect(page).toHaveURL(/administri\.php\?validi=jes/)
  await waitForMail(KOREKTANTO, SUBJEKTO)
})
