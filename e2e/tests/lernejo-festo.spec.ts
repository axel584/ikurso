import { test, expect, type Page } from '@playwright/test'
import { resetTestData, sql } from '../helpers/db'

// Application : bonne réponse à un QCM ou à une question → étoiles vertes et petit son (coupable dans le profil).
const LERNANTO = "(SELECT id FROM personoj WHERE enirnomo = 'lernanto1')"
const QCM_SEKCIO = () => sql(`SELECT le.id FROM lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 8`)

// compte les sons joués (HTMLMediaElement.play) avec leur fichier
async function kalkuliSonojn(page: Page): Promise<void> {
  await page.addInitScript(() => {
    const w = window as unknown as { ludoj: string[] }
    w.ludoj = []
    const play = HTMLMediaElement.prototype.play
    HTMLMediaElement.prototype.play = function (this: HTMLMediaElement) {
      w.ludoj.push(this.currentSrc || this.src)
      return play.call(this).catch(() => undefined)
    }
  })
}
const sonojBone = (page: Page) => page.evaluate(() => (window as unknown as { ludoj: string[] }).ludoj.filter((s) => s.includes('bone')).length)

async function ensaluti(page: Page) {
  await page.goto('lernejo/')
  await page.getByText('J’ai déjà un compte').click()
  await page.getByLabel('Identifiant ou adresse e-mail').fill('lernanto1')
  await page.getByLabel('Mot de passe').fill('test')
  await page.getByText('Se connecter').click()
  await expect(page.getByText('DLEK : Cours en 10 leçons')).toBeVisible()
}

test.beforeEach(() => {
  resetTestData()
  sql(`DELETE FROM respondoj WHERE persono_id = ${LERNANTO}`)
})

test('QCM : étoiles et son à la bonne réponse, rien à la mauvaise', async ({ page }) => {
  await kalkuliSonojn(page)
  await ensaluti(page)
  await page.goto(`lernejo/sekcio/${QCM_SEKCIO()}`)
  const qcm = page.getByTestId('qcm')
  const proponoj = qcm.getByRole('radio')
  await expect(proponoj.first()).toBeVisible()
  for (let i = 0; i < (await proponoj.count()); i++) {
    await proponoj.nth(i).click()
    await page.waitForTimeout(200) // le message de cette proposition remplace le précédent
    if (await qcm.getByText(/^Bravo/).isVisible()) break
    await expect(page.getByTestId('steloj')).toHaveCount(0)
  }
  await expect(page.getByTestId('steloj').getByText('★').first()).toBeVisible()
  await page.screenshot({ path: 'test-results/festo-qcm.png' })
  expect(await sonojBone(page)).toBe(1)
  // les étoiles disparaissent
  await expect(page.getByTestId('steloj')).toHaveCount(0, { timeout: 3000 })
})

test('exercice : étoiles et son quand la réponse devient juste, une seule fois', async ({ page }) => {
  await kalkuliSonojn(page)
  await ensaluti(page)
  await page.goto('lernejo/sekcio/6')
  const kampo = page.getByLabel('Réponse 1')
  const respondi = async (teksto: string) => {
    await kampo.fill(teksto)
    const r = page.waitForResponse((r) => r.url().includes('lernado/respondoj') && r.request().method() === 'POST')
    await kampo.blur()
    await r
  }
  await respondi('La teo estas malvarma.')
  await expect(page.getByTestId('steloj')).toHaveCount(0)
  await respondi('La teo estas varma.')
  await expect(page.getByTestId('demando-1').getByTestId('steloj').getByText('★').first()).toBeVisible()
  await page.screenshot({ path: 'test-results/festo-ekzerco.png' })
  expect(await sonojBone(page)).toBe(1)
  // encore juste (variante) : pas de nouvelle fête
  await expect(page.getByTestId('steloj')).toHaveCount(0, { timeout: 3000 })
  await respondi('La teo estas varma!')
  await page.waitForTimeout(300)
  expect(await sonojBone(page)).toBe(1)
})

test('son coupé dans le profil : les étoiles restent, pas de son', async ({ page }) => {
  await kalkuliSonojn(page)
  await ensaluti(page)
  await page.goto('lernejo/profilo')
  const sxaltilo = page.getByTestId('sono-bone').getByRole('switch')
  await expect(sxaltilo).toBeChecked()
  await sxaltilo.click()
  await expect(sxaltilo).not.toBeChecked()
  await page.goto('lernejo/sekcio/6')
  const kampo = page.getByLabel('Réponse 1')
  await kampo.fill('La teo estas varma.')
  await kampo.blur()
  await expect(page.getByTestId('steloj').getByText('★').first()).toBeVisible()
  expect(await sonojBone(page)).toBe(0)
})
