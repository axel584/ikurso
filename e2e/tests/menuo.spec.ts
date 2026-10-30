import { test, expect, type Page } from '@playwright/test'
import { login, USERS } from '../helpers/auth'

// Menu de l'en-tête (#1017) : entre 993 et 1279 px, le menu horizontal ne tenait pas sur une ligne
// (surtout avec « Espace correcteur ») et passait sous la barre, par-dessus la liste des leçons.
// On y affiche le menu hamburger ; au-delà, le menu horizontal tient sur la ligne du logo.
async function mezuri(page: Page) {
  return page.evaluate(() => {
    const nav = document.querySelector('nav.primaire')!.getBoundingClientRect()
    // le texte « iKurso », et non le lien (15 % de la largeur, texte centré), où le menu peut commencer sans rien cacher
    const teksto = document.createRange()
    teksto.selectNodeContents(document.querySelector('#logo')!)
    const logo = teksto.getBoundingClientRect()
    const lis = [...document.querySelectorAll('nav ul.hide-on-med-and-down > li')].map(l => l.getBoundingClientRect())
      .filter(l => l.width > 0)
    return {
      maldekstre: lis.length ? Math.min(...lis.map(l => l.left)) - logo.right : null,
      malsupre: lis.length ? Math.max(...lis.map(l => l.bottom)) - nav.bottom : null,
      // boutons de la liste des leçons sur lesquels un autre élément est affiché
      kovritaj: [...document.querySelectorAll('#lecionoj a')].filter(a => {
        const r = a.getBoundingClientRect()
        return !a.contains(document.elementFromPoint(r.left + r.width / 2, r.top + r.height / 2))
      }).map(a => a.textContent),
    }
  })
}

test('correcteur : menu hamburger jusqu’à 1279 px, menu horizontal sur une ligne au-delà', async ({ page }) => {
  await login(page, USERS.korektanto)
  for (const larĝo of [993, 1100, 1200, 1279]) {
    await page.setViewportSize({ width: larĝo, height: 800 })
    await page.goto('fr/cge/intro.php')
    await expect(page.locator('nav .sidenav-trigger'), `${larĝo} px`).toBeVisible()
    await expect(page.locator('nav ul.hide-on-med-and-down'), `${larĝo} px`).toBeHidden()
    expect((await mezuri(page)).kovritaj, `${larĝo} px`).toEqual([])
  }
  for (const larĝo of [1280, 1366, 1440, 1920]) {
    await page.setViewportSize({ width: larĝo, height: 800 })
    await page.goto('fr/cge/intro.php')
    await expect(page.locator('nav .sidenav-trigger'), `${larĝo} px`).toBeHidden()
    await expect(page.getByRole('link', { name: /ESPACE CORRECTEUR/ }), `${larĝo} px`).toBeVisible()
    const m = await mezuri(page)
    expect(m.maldekstre, `${larĝo} px : le menu ne chevauche pas le logo`).toBeGreaterThan(0)
    expect(m.malsupre, `${larĝo} px : le menu reste dans la barre`).toBeLessThanOrEqual(0)
    expect(m.kovritaj, `${larĝo} px`).toEqual([])
  }
})

test('le menu hamburger s’ouvre à 1100 px et mène aux leçons', async ({ page }) => {
  await login(page, USERS.lernanto)
  await page.setViewportSize({ width: 1100, height: 800 })
  await page.goto('fr/cge/intro.php')
  await page.locator('nav .sidenav-trigger').click()
  await expect(page.locator('#nav-mobile')).toBeInViewport()
  await page.locator('#nav-mobile').getByRole('link', { name: 'Gerda malaperis' }).click()
  await expect(page).toHaveURL(/fr\/gerda\/index\.php/)
})
