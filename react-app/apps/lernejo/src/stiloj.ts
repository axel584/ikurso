// Couleurs et styles communs, repris du site (style/ikurso.css).
import { StyleSheet } from 'react-native'

export const koloroj = {
  // marron du site (.primaire) : barre du haut, titres, onglets
  primara: '#554E47',
  // bleu du site (.contraste-A) : boutons et liens
  blua: '#2196F3',
  malhelblua: '#0d47a1',
  helblua: '#E3F2FD',
  verda: '#2e7d32',
  helverda: '#E8F5E9',
  rugxa: '#c62828',
  helrugxa: '#FFEBEE',
  // gris chauds du site (.primaire.moyen, .primaire.fond)
  griza: '#75706B',
  helgriza: '#DDDCDA',
  teksto: '#212121',
  fono: '#fafafa',
  blanka: '#ffffff',
}

export const stiloj = StyleSheet.create({
  ekrano: { flex: 1, backgroundColor: koloroj.fono },
  enhavo: { padding: 16, gap: 12, maxWidth: 800, width: '100%', alignSelf: 'center' },
  centro: { flex: 1, alignItems: 'center', justifyContent: 'center', padding: 24 },
  titolo: { fontSize: 22, fontWeight: '600', color: koloroj.primara },
  subtitolo: { fontSize: 17, fontWeight: '600', color: koloroj.primara },
  teksto: { fontSize: 16, lineHeight: 24, color: koloroj.teksto },
  eta: { fontSize: 13, color: koloroj.griza },
  karto: {
    backgroundColor: koloroj.blanka,
    borderRadius: 8,
    padding: 16,
    gap: 8,
    borderWidth: 1,
    borderColor: koloroj.helgriza,
  },
  butono: {
    backgroundColor: koloroj.blua,
    borderRadius: 6,
    paddingVertical: 12,
    paddingHorizontal: 20,
    alignItems: 'center',
  },
  butonoTeksto: { color: koloroj.blanka, fontSize: 16, fontWeight: '600' },
  duaButono: {
    borderRadius: 6,
    paddingVertical: 12,
    paddingHorizontal: 20,
    alignItems: 'center',
    borderWidth: 1,
    borderColor: koloroj.blua,
  },
  duaButonoTeksto: { color: koloroj.blua, fontSize: 16, fontWeight: '600' },
  enigo: {
    borderWidth: 1,
    borderColor: '#bdbdbd',
    borderRadius: 6,
    paddingHorizontal: 12,
    paddingVertical: 10,
    fontSize: 16,
    backgroundColor: koloroj.blanka,
    color: koloroj.teksto,
  },
  eraro: { color: koloroj.rugxa, fontSize: 15 },
})
