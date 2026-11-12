#!/usr/bin/env python3
"""Banc d'essai de la correction par IA (#1129) : compare les corrections des modèles à celles des correcteurs.

Mesures automatiques par modèle (sur les leçons corrigées par ce modèle) :
- format : leçons dont le JSON est lisible et contient toutes les réponses ;
- accord : réponses où le modèle et le correcteur disent la même chose (juste ou fausse) ;
- erreurs trouvées : parmi les réponses que le correcteur a marquées fausses, celles que le modèle a aussi marquées fausses ;
- fausses alertes : parmi les réponses que le correcteur a marquées justes, celles que le modèle a marquées fausses ;
- coût et durée moyens par leçon.

Écrit aussi la liste des désaccords (malkonsentoj.csv), à faire trancher par des correcteurs : le correcteur
n'a pas toujours raison (réponse juste oubliée, erreur non vue).

Usage : python3 taksi.py [--lecionoj 'GR-*'] (par défaut le cours élémentaire, CG-*)
"""
import argparse
import csv
import json
import re
from pathlib import Path

DOSIERUJO = Path.home() / 'Documents/ikurso-ia'


def plata(t):
    t = re.sub(r'<br\s*/?>|</p>', '\n', t or '', flags=re.I)
    t = re.sub(r'<[^>]+>', '', t).replace('&nbsp;', ' ')
    return re.sub(r'[ \t]+', ' ', t).strip()


def main():
    ap = argparse.ArgumentParser()
    ap.add_argument('--lecionoj', default='CG-*', help='motif des leçons à comparer')
    a = ap.parse_args()
    homaj = {}
    for d in sorted((DOSIERUJO / 'datumoj').glob(a.lecionoj + '.json')):
        leciono = json.loads(d.read_text())
        homaj[d.stem] = {q['id']: (e, q) for e in leciono['ekzercoj'] for q in e['demandoj']}

    vicoj, malkonsentoj = [], []
    for dosierujo in sorted((DOSIERUJO / 'rezultoj').iterdir()):
        rezultoj = [json.loads(f.read_text()) for f in sorted(dosierujo.glob(a.lecionoj + '.json'))]
        if not rezultoj:
            continue
        # le dossier distingue deux passages du même modèle (korekti.py --etikedo)
        modelo = rezultoj[0]['modelo']
        if '--' in dosierujo.name:
            modelo += ' (' + dosierujo.name.split('--', 1)[1] + ')'
        formato = konsento = cxiuj = malbonaj_homaj = trovitaj = bonaj_homaj = falsaj = 0
        for r in rezultoj:
            demandoj = homaj[r['leciono']]
            k = r['korektado'] or {}
            ia = {x.get('id'): x for x in k.get('respondoj', []) if isinstance(x, dict)}
            if set(demandoj) <= set(ia) and isinstance(k.get('konkludo'), str):
                formato += 1
            for qid, (e, q) in demandoj.items():
                h = q['homa']['gxusta']
                m = ia.get(qid, {}).get('gxusta')
                if h is None:
                    continue
                cxiuj += 1
                konsento += m == h
                if h is False:
                    malbonaj_homaj += 1
                    trovitaj += m is False
                else:
                    bonaj_homaj += 1
                    falsaj += m is False
                if m != h:
                    malkonsentoj.append({
                        'modelo': modelo, 'leciono': r['leciono'], 'id': qid, 'tipo': e['tipo'],
                        'komando': e['komando'], 'demando': q['demando'], 'modelo_respondo': q['modelo'],
                        'respondo': q['respondo'],
                        'homa_gxusta': h, 'homa_korekto': plata(q['homa']['korekto']),
                        'ia_gxusta': m, 'ia_korekto': ia.get(qid, {}).get('korekto', '(absente)'),
                    })
        n = len(rezultoj)
        kostoj = [r['kosto'] for r in rezultoj if r['kosto'] is not None]
        vicoj.append({
            'modelo': modelo,
            'lecionoj': n,
            'formato': f'{formato}/{n}',
            'akordo': konsento / cxiuj if cxiuj else 0,
            'trovitaj': trovitaj / malbonaj_homaj if malbonaj_homaj else 0,
            'falsaj': falsaj / bonaj_homaj if bonaj_homaj else 0,
            'kosto_leciono': sum(kostoj) / len(kostoj) if kostoj else 0,
            'kosto_cxiuj': sum(kostoj),
            'sekundoj': sum(r['sekundoj'] for r in rezultoj) / n,
        })

    vicoj.sort(key=lambda v: -v['akordo'])
    print(f"{'Modèle':32s} {'leçons':>6s} {'format':>7s} {'accord':>7s} {'trouvées':>8s} {'f. alertes':>10s} "
          f"{'$/leçon':>8s} {'$ total':>8s} {'s/leçon':>7s}")
    for v in vicoj:
        print(f"{v['modelo']:32s} {v['lecionoj']:6d} {v['formato']:>7s} {v['akordo']:7.1%} {v['trovitaj']:8.1%} "
              f"{v['falsaj']:10.1%} {v['kosto_leciono']:8.4f} {v['kosto_cxiuj']:8.3f} {v['sekundoj']:7.1f}")
    print(f"Coût total : {sum(v['kosto_cxiuj'] for v in vicoj):.2f} $")

    eligo = DOSIERUJO / 'taksado'
    eligo.mkdir(exist_ok=True)
    sufikso = '' if a.lecionoj == 'CG-*' else '-' + ''.join(c for c in a.lecionoj if c.isalnum() or c == '-')
    (eligo / f'resumo{sufikso}.json').write_text(json.dumps(vicoj, ensure_ascii=False, indent=1) + '\n')
    with open(eligo / f'malkonsentoj{sufikso}.csv', 'w', newline='') as f:
        w = csv.DictWriter(f, fieldnames=list(malkonsentoj[0]) if malkonsentoj else ['modelo'])
        w.writeheader()
        w.writerows(malkonsentoj)
    print(f'{len(malkonsentoj)} désaccords dans {eligo / f"malkonsentoj{sufikso}.csv"}')


if __name__ == '__main__':
    main()
