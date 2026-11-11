// Rappels de révision du vocabulaire (#1120) : notifications locales, programmées par l'application elle-même.
// Le serveur donne le calendrier des mots à réviser (GET lernado/revizio/kalendaro) ; l'application programme
// une notification à l'heure choisie par l'élève (9 h par défaut) pour chacun des 7 prochains jours où des mots
// seront à réviser, avec leur nombre. Rien les jours sans mot à réviser.
// Le calendrier est refait à chaque retour dans l'application, en quittant la révision et quand le réglage change :
// les nombres restent justes tant que l'élève utilise l'application, et sans réseau les rappels déjà prévus restent.
import { Platform } from 'react-native'
import * as Notifications from 'expo-notifications'
import { legiAgordon, skribiAgordon } from './agordoj'
import { datumoj, kliento } from './kliento'

export const subtenata = true

const KANALO = 'revizio'
const PREFIKSO = 'revizio-'
const TAGOJ = 7

export type RevizioAgordoj = { sxaltita: boolean; horo: number }

// notification reçue pendant que l'application est ouverte : affichée quand même
Notifications.setNotificationHandler({
  handleNotification: async () => ({ shouldShowBanner: true, shouldShowList: true, shouldPlaySound: false, shouldSetBadge: false }),
})

export async function legiAgordojn(): Promise<RevizioAgordoj> {
  const [sxaltita, horo] = await Promise.all([legiAgordon('revizio.sxaltita'), legiAgordon('revizio.horo')])
  const h = Number(horo)
  return { sxaltita: sxaltita !== 'ne', horo: horo !== null && Number.isInteger(h) && h >= 0 && h <= 23 ? h : 9 }
}

export async function skribiAgordojn(a: RevizioAgordoj): Promise<void> {
  await Promise.all([skribiAgordon('revizio.sxaltita', a.sxaltita ? 'jes' : 'ne'), skribiAgordon('revizio.horo', String(a.horo))])
  await planigiRevizion()
}

// Autorisation d'afficher des notifications (obligatoire depuis Android 13) ; peti : la demander si elle ne l'a pas été.
// « blokita » : refusée pour de bon, à changer dans les réglages du téléphone.
export async function permeso(peti: boolean): Promise<{ donita: boolean; blokita: boolean }> {
  let p = await Notifications.getPermissionsAsync()
  if (!p.granted && p.canAskAgain && peti) p = await Notifications.requestPermissionsAsync()
  return { donita: p.granted, blokita: !p.granted && !p.canAskAgain }
}

export async function nuligiRevizion(): Promise<void> {
  const planitaj = await Notifications.getAllScheduledNotificationsAsync()
  await Promise.all(
    planitaj.filter((s) => s.identifier.startsWith(PREFIKSO)).map((s) => Notifications.cancelScheduledNotificationAsync(s.identifier)),
  )
}

async function planigi(): Promise<void> {
  const agordoj = await legiAgordojn()
  if (!agordoj.sxaltita || !(await permeso(false)).donita) {
    await nuligiRevizion()
    return
  }
  let kalendaro: { nun: number; venontaj: { tempo: number; nombro: number }[] }
  try {
    kalendaro = await datumoj(kliento.GET('/lernado/revizio/kalendaro'))
  } catch {
    // pas de réseau : les rappels déjà programmés restent
    return
  }
  if (Platform.OS === 'android') {
    await Notifications.setNotificationChannelAsync(KANALO, {
      name: 'Révision du vocabulaire',
      importance: Notifications.AndroidImportance.DEFAULT,
    })
  }
  await nuligiRevizion()
  const nun = Date.now()
  for (let tago = 0; tago <= TAGOJ; tago++) {
    const kiam = new Date()
    kiam.setDate(kiam.getDate() + tago)
    kiam.setHours(agordoj.horo, 0, 0, 0)
    if (kiam.getTime() <= nun + 60_000) continue
    const nombro = kalendaro.nun + kalendaro.venontaj.filter((v) => v.tempo * 1000 <= kiam.getTime()).reduce((s, v) => s + v.nombro, 0)
    if (nombro === 0) continue
    await Notifications.scheduleNotificationAsync({
      identifier: PREFIKSO + tago,
      content: {
        title: 'Révision du vocabulaire',
        body: nombro === 1 ? 'Un mot à réviser aujourd’hui' : `${nombro} mots à réviser aujourd’hui`,
        data: { url: '/revizio' },
      },
      trigger: { type: Notifications.SchedulableTriggerInputTypes.DATE, date: kiam, channelId: KANALO },
    })
  }
}

// un seul calendrier refait à la fois (retour dans l'application et fin de révision peuvent tomber ensemble)
let vico: Promise<void> = Promise.resolve()
export function planigiRevizion(): Promise<void> {
  vico = vico.then(planigi).catch(() => {})
  return vico
}

// Écran à ouvrir quand l'élève touche une notification (au lancement de l'application, ou pendant qu'elle tourne).
export function auxskultiSciigojn(malfermi: (url: string) => void): () => void {
  const url = (r: Notifications.NotificationResponse | null) => r?.notification.request.content.data?.url
  const lasta = Notifications.getLastNotificationResponse()
  const u = url(lasta)
  if (typeof u === 'string') {
    malfermi(u)
    Notifications.clearLastNotificationResponse()
  }
  const abono = Notifications.addNotificationResponseReceivedListener((r) => {
    const v = url(r)
    if (typeof v === 'string') malfermi(v)
  })
  return () => abono.remove()
}
