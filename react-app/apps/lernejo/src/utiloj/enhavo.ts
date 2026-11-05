// Contenu d'une section (lecioneroj.enhavo, #1087) découpé à ses marqueurs, comme montriLecioneron() dans webui.inc.php :
// ##EKZERCO:N## ou ##EKZERCO:N:eo##, ##QCM:[json]##, ##QCM_BILDOJ:[json]##, ##RESUMO##.

export type QcmDemando = {
  question?: string
  bildo?: string
  url?: string
  auteur?: string
  propositions: string[]
  reponse: number // numéro de la bonne proposition, à partir de 1
}

export type Parto =
  | { tipo: 'html'; html: string }
  | { tipo: 'ekzerco'; id: number; lingvo: 'fr' | 'eo' }
  | { tipo: 'qcm'; demandoj: QcmDemando[]; bildoj: boolean }
  | { tipo: 'resumo' }

export function dividi(enhavo: string): Parto[] {
  const pecoj = enhavo.split(/##(EKZERCO|QCM_BILDOJ|QCM|RESUMO):?(.*?)##/s)
  const partoj: Parto[] = []
  const html = (h: string) => {
    if (h.trim() !== '') partoj.push({ tipo: 'html', html: h })
  }
  html(pecoj[0])
  for (let i = 1; i < pecoj.length; i += 3) {
    const [marko, valoro] = [pecoj[i], pecoj[i + 1]]
    if (marko === 'EKZERCO') {
      const [id, lingvo] = valoro.split(':')
      partoj.push({ tipo: 'ekzerco', id: Number(id), lingvo: lingvo === 'eo' ? 'eo' : 'fr' })
    } else if (marko === 'QCM' || marko === 'QCM_BILDOJ') {
      partoj.push({ tipo: 'qcm', demandoj: JSON.parse(valoro) as QcmDemando[], bildoj: marko === 'QCM_BILDOJ' })
    } else {
      partoj.push({ tipo: 'resumo' })
    }
    html(pecoj[i + 2])
  }
  return partoj
}
