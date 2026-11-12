#!/usr/bin/env python3
"""Banc d'essai de la correction par IA (#1129) : jeu de test tiré de la base de prod, en lecture seule.

Choisit au hasard (graine fixe) des leçons d'un cours (CG par défaut, GR, PP) corrigées en ligne par un correcteur
bénévole (chaque réponse fausse commentée, voir plus bas), 5 par leçon par défaut (ou --maks au total, réparties
sur les leçons), et écrit pour chacune un fichier JSON (<cours>-<leçon>-<n>.json) avec :
- les consignes, les questions et les corrigés types ;
- les réponses de l'élève ;
- la correction humaine (bonne réponse ou non, commentaire, introduction et conclusion).

Aucune donnée personnelle n'est écrite : ni identifiant, ni date. Les noms, prénoms, identifiants, villes
et adresses de l'élève et de son correcteur sont remplacés dans les textes par [PRÉNOM], [NOM], [VILLE]…,
comme les adresses e-mail, numéros de téléphone et liens. Les fichiers restent hors du dépôt (public).

Usage : python3 eltiri_lecionojn.py [--kurso CG] [--eligo ~/Documents/ikurso-ia/datumoj] [--po 5] [--maks N] [--de 2025-01-01]
"""
import argparse
import html
import json
import random
import re
import subprocess
import unicodedata
from pathlib import Path

GRAINO = 1129

# Requête en lecture seule sur la base de prod : identifiants lus dans config.php sur le serveur,
# fichier temporaire en 600 supprimé aussitôt (rien ne transite en clair par la ligne de commande).
SSH = (
    'f=$(mktemp); chmod 600 $f; '
    'php -r \'include "/arthur/sites/ikurso/config.php"; '
    'echo "[client]\\nuser=$login\\npassword=$motDePasse\\ndatabase=$base\\ndefault-character-set=utf8mb4\\n";\' > $f; '
    'mysql --defaults-extra-file=$f --batch; r=$?; rm -f $f; exit $r'
)


def malesk(v: str):
    """Valeur d'une colonne de mysql --batch : NULL, ou texte avec \\n, \\t, \\\\ échappés."""
    if v == 'NULL':
        return None
    return re.sub(r'\\(.)', lambda m: {'n': '\n', 't': '\t', '0': '\0', '\\': '\\'}.get(m.group(1), m.group(1)), v)


def sql(demando: str) -> list[dict]:
    # en octets : en mode texte, Python changerait les \r des réponses en fins de ligne et décalerait les colonnes
    r = subprocess.run(['ssh', '-o', 'LogLevel=ERROR', 'esperanto-france', SSH], input=demando.encode(),
                       capture_output=True, check=True)
    linioj = r.stdout.decode().rstrip('\n').split('\n')
    if not linioj or not linioj[0]:
        return []
    kapoj = linioj[0].split('\t')
    return [dict(zip(kapoj, map(malesk, l.split('\t')))) for l in linioj[1:]]


def entjeroj(valoroj) -> str:
    return ','.join(str(int(v)) for v in valoroj)


def sen_html(t):
    if t is None:
        return None
    t = re.sub(r'<br\s*/?>', '\n', t, flags=re.I)
    t = re.sub(r'<[^>]+>', '', t)
    return html.unescape(t).replace('\xa0', ' ').strip()


def normigi(v: str) -> str:
    """Sans accents ni majuscules : « Frédéric » et « frederic » se comparent."""
    return ''.join(c for c in unicodedata.normalize('NFD', v) if not unicodedata.combining(c)).lower()


def proksimaj(a: str, b: str) -> bool:
    """Au plus une lettre de différence (faute de frappe, lettre doublée : Mathias / Matthias)."""
    if abs(len(a) - len(b)) > 1:
        return False
    antauxa = list(range(len(b) + 1))
    for i, ca in enumerate(a, 1):
        nuna = [i]
        for j, cb in enumerate(b, 1):
            nuna.append(min(antauxa[j] + 1, nuna[j - 1] + 1, antauxa[j - 1] + (ca != cb)))
        antauxa = nuna
    return antauxa[-1] <= 1


VORTO = re.compile(r"[^\W\d_][\w'’-]*")
MAJ = r"[A-ZÀ-ÝĈĜĤĴŜŬ][\w'’-]+"
SALUTO = re.compile(r"\b(Saluton|Bonjour|Bonsoir|Salut|Hello|Kara|Karaj|Cher|Chère|Chers|Bonan tagon|Bonan matenon|Bonan vesperon)\s+(" + MAJ + ")")
# « Mi estas Zamenhof », « Mia nomo estas Ludoviko », « je m'appelle … » : le nom qui suit
SINPREZENTO = re.compile(r"(?i:\b(mi estas|mia nomo estas|mi nomiĝas|mi nomigxas|mi nomigas|mia antaŭnomo estas|mia antauxnomo estas"
                         r"|mia antauŭnomo estas|je m'appelle|je m’appelle|je suis))\s+(" + MAJ + ")")
# « Mi loĝas en Lyon », « mi loĝas en la urbo Tours », « j'habite à … » : la ville qui suit
LOGXEJO = re.compile(r"(?i:\b(mi loĝas|mi logas|mi logxas|mi vivas|j'habite|j’habite|je vis|je demeure)"
                     r"(?:\s+(?:en|à|a|au|dans|ĉe))?(?:\s+(?:la urbo|la ville de|la ville|urbo))?)\s+(" + MAJ + ")")
# formule de fin d'un mot du correcteur : ce qui suit est sa signature
ADIAUXO = re.compile(r"(?i:amike|amikajn salutojn|elkore\w*|ĝis baldaŭ|ĝis la revido|ĝis revido|ĝis|gxis|cordialement"
                     r"|amicalement|bien à vous|bonne continuation|bon courage)")


class Anonimigilo:
    """Remplace dans les textes les données personnelles de l'élève et de son correcteur.

    - noms, prénoms, identifiants, villes et adresses connus en base : sans tenir compte des accents ni de la casse,
      avec une lettre d'écart au plus pour les mots de 5 lettres ou plus (Frederic, Matthias) ;
    - jamais un mot du cours (personnages, villes des exercices), pour ne pas fausser les réponses ;
    - dans les textes du correcteur, le prénom qui suit une salutation (« Saluton Japhet ») ;
    - une liste de remplacements complémentaires, hors du dépôt (aldonaj : {mot normalisé: marque}) ;
    - adresses e-mail, liens, numéros de téléphone.
    """

    def __init__(self, studanto: dict, korektantoj: list[dict], kursaj_vortoj: set[str], aldonaj: dict[str, str]):
        self.nomoj: dict[str, str] = {}
        for p, rolo in [(studanto, '')] + [(k, ' CORRECTEUR') for k in korektantoj]:
            for kampo, marko in [('personnomo', 'PRÉNOM'), ('familinomo', 'NOM'), ('enirnomo', 'IDENTIFIANT'),
                                 ('urbo', 'VILLE'), ('adreso1', 'ADRESSE'), ('adreso2', 'ADRESSE'),
                                 ('posxtkodo', 'CODE POSTAL')]:
                for v in re.split(r'[\s,._/-]+', p.get(kampo) or ''):
                    n = normigi(v)
                    # les valeurs trop courtes (« A », « 1 ») remplaceraient n'importe quoi
                    if len(n) >= 3 and n not in kursaj_vortoj:
                        self.nomoj.setdefault(n, f'[{marko}{rolo}]')
        self.kursaj_vortoj = kursaj_vortoj
        self.aldonaj = aldonaj

    def marko(self, vorto: str):
        n = normigi(vorto)
        if n in self.aldonaj:
            return self.aldonaj[n]
        if n in self.kursaj_vortoj:
            return None
        if n in self.nomoj:
            return self.nomoj[n]
        if len(n) >= 5:
            for nomo, marko in self.nomoj.items():
                if len(nomo) >= 5 and proksimaj(n, nomo):
                    return marko
        return None

    def __call__(self, t, de_korektanto: bool = False):
        if not t:
            return t
        t = re.sub(r'[\w.+-]+@[\w-]+(\.[\w-]+)+', '[E-MAIL]', t)
        t = re.sub(r'https?://\S+|www\.\S+', '[LIEN]', t)
        t = re.sub(r'(?<!\d)(?:\+33\s?|0)[1-9](?:[\s.-]?\d{2}){4}(?!\d)', '[TÉLÉPHONE]', t)
        # pas de remplacement dans les balises HTML des commentaires (style="color…")
        partoj = re.split(r'(<[^>]*>)', t)
        for i, parto in enumerate(partoj):
            if parto.startswith('<'):
                continue
            parto = VORTO.sub(lambda m: self.marko(m.group(0)) or m.group(0), parto)
            parto = SINPREZENTO.sub(lambda m: self.anstatauxi(m, '[PRÉNOM]'), parto)
            parto = LOGXEJO.sub(lambda m: self.anstatauxi(m, '[VILLE]'), parto)
            if de_korektanto:
                parto = SALUTO.sub(lambda m: self.anstatauxi(m, '[PRÉNOM]'), parto)
            partoj[i] = parto
        t = ''.join(partoj)
        if de_korektanto:
            # signature après la dernière formule de fin, si elle est dans les derniers mots du texte
            finoj = list(ADIAUXO.finditer(t))
            if finoj and len(re.sub(r'<[^>]+>', '', t[finoj[-1].end():])) < 120:
                t = t[:finoj[-1].end()] + ' [SIGNATURE]'
        return t

    def anstatauxi(self, m, marko: str) -> str:
        nomo = m.group(2)
        if nomo.startswith('[') or normigi(nomo) in self.kursaj_vortoj:
            return m.group(0)
        return m.group(1) + ' ' + marko


def main():
    ap = argparse.ArgumentParser(description=__doc__.split('\n')[0])
    ap.add_argument('--kurso', default='CG', choices=['CG', 'GR', 'PP'])
    ap.add_argument('--maks', type=int, help='nombre total de leçons, une par numéro de leçon tiré au hasard')
    ap.add_argument('--nombri', action='store_true', help='compter seulement les leçons disponibles par numéro')
    ap.add_argument('--eligo', default=str(Path.home() / 'Documents/ikurso-ia/datumoj'))
    ap.add_argument('--po', type=int, default=5, help='leçons tirées par numéro de leçon')
    ap.add_argument('--de', default='2025-01-01', help='leçons corrigées depuis cette date')
    a = ap.parse_args()
    if not re.fullmatch(r'\d{4}-\d{2}-\d{2}', a.de):
        raise SystemExit('--de : date AAAA-MM-JJ')

    # 1. leçons vraiment corrigées en ligne : certains correcteurs corrigent par mail et valident seulement la leçon,
    # ce qui laisse toutes les réponses « fausses » (case non cochée) sans commentaire. On garde les leçons où
    # au moins une réponse a été cochée juste, au moins une commentée, et où chaque réponse fausse a un commentaire.
    kandidatoj = sql(f"""
        SELECT pl.persono_id, pl.leciono_id, l.numero
        FROM personoj_lecionoj pl JOIN lecionoj l ON l.id = pl.leciono_id
        JOIN lecioneroj le ON le.leciono_id = l.id JOIN ekzercoj e ON e.lecionero_id = le.id
        JOIN ekzerceroj er ON er.ekzerco_id = e.id
        JOIN respondoj r ON r.ekzercero_id = er.id AND r.persono_id = pl.persono_id
        WHERE pl.korektita = 1 AND l.kurso = '{a.kurso}' AND pl.dato >= '{a.de}'
        GROUP BY pl.persono_id, pl.leciono_id, l.numero
        HAVING SUM(r.gxusta = 1) > 0
           AND SUM(r.korekto IS NOT NULL AND TRIM(r.korekto) <> '') > 0
           AND SUM(r.gxusta = 0 AND (r.korekto IS NULL OR TRIM(r.korekto) = '')) = 0
        ORDER BY pl.leciono_id, pl.persono_id""")
    numeroj = sorted({int(k['numero']) for k in kandidatoj})
    if a.nombri:
        for numero in numeroj:
            print(numero, sum(int(k['numero']) == numero for k in kandidatoj))
        return
    hazardo = random.Random(GRAINO)
    elektitaj = []
    if a.maks:
        # une leçon par numéro, sur --maks numéros tirés au hasard
        a.po = 1
        numeroj = sorted(hazardo.sample(numeroj, min(a.maks, len(numeroj))))
    for numero in numeroj:
        grupo = [k for k in kandidatoj if int(k['numero']) == numero]
        elektitaj += hazardo.sample(grupo, min(a.po, len(grupo)))

    lecionoj = entjeroj({k['leciono_id'] for k in elektitaj})
    personoj = entjeroj({k['persono_id'] for k in elektitaj})

    # 2. structure des leçons : exercices et questions, corrigés types
    strukturo = sql(f"""
        SELECT l.id leciono_id, l.numero, l.titolo leciono_titolo, le.id lecionero_id, le.titolo lecionero_titolo, le.ordo,
               e.id ekzerco_id, e.komando, e.komando_detalo, e.ekzemplo, e.typo, e.korektebla,
               er.id ekzercero_id, er.numero demando_numero, er.demando, er.respondmodelo, er.respondo modelo, er.normaligita
        FROM lecionoj l JOIN lecioneroj le ON le.leciono_id = l.id JOIN ekzercoj e ON e.lecionero_id = le.id
        JOIN ekzerceroj er ON er.ekzerco_id = e.id AND (er.forigita = 0 OR er.forigita IS NULL)
        WHERE l.id IN ({lecionoj}) ORDER BY l.id, le.ordo, e.id, er.numero""")

    # texte de lecture de chaque leçon (Gerda : « Rakonto », Paŝoj : « Legaĵo »), sur lequel portent les questions
    tekstoj = {}
    for t in sql(f"""SELECT le.leciono_id, le.titolo, le.enhavo FROM lecioneroj le
        WHERE le.leciono_id IN ({lecionoj}) ORDER BY le.leciono_id, le.ordo"""):
        if sen_html(t['titolo']) in ('Rakonto', 'Legaĵo') and t['leciono_id'] not in tekstoj:
            tekstoj[t['leciono_id']] = re.sub(r'\n{3,}', '\n\n', sen_html(re.sub(r'</p>|</h\d>|</li>', '\n', t['enhavo'] or '')) or '')

    # 3. réponses des élèves choisis et correction humaine
    respondoj = sql(f"""
        SELECT r.persono_id, le.leciono_id, r.ekzercero_id, r.respondo, r.gxusta, r.korekto, r.poentoj
        FROM respondoj r JOIN ekzerceroj er ON er.id = r.ekzercero_id JOIN ekzercoj e ON e.id = er.ekzerco_id
        JOIN lecioneroj le ON le.id = e.lecionero_id
        WHERE r.persono_id IN ({personoj}) AND le.leciono_id IN ({lecionoj}) AND (r.forigita = 0 OR r.forigita IS NULL)""")
    lecionoj_homaj = sql(f"""
        SELECT persono_id, leciono_id, enkonduko, konkludo FROM personoj_lecionoj
        WHERE persono_id IN ({personoj}) AND leciono_id IN ({lecionoj}) AND korektita = 1""")

    # 4. données personnelles, seulement pour les remplacer dans les textes (jamais écrites)
    personaj = {p['id']: p for p in sql(f"""
        SELECT id, personnomo, familinomo, enirnomo, urbo, adreso1, adreso2, posxtkodo, retadreso FROM personoj
        WHERE id IN ({personoj}) OR id IN (SELECT korektanto FROM nuna_kurso WHERE studanto IN ({personoj}))
           OR id IN (SELECT pasintakorektanto FROM nuna_kurso WHERE studanto IN ({personoj}))""")}
    korektantoj_de = {}
    for n in sql(f"SELECT studanto, korektanto, pasintakorektanto FROM nuna_kurso WHERE studanto IN ({personoj})"):
        for k in (n['korektanto'], n['pasintakorektanto']):
            if k and k != '0' and k in personaj:
                korektantoj_de.setdefault(n['studanto'], []).append(personaj[k])

    # mots du cours, à ne jamais prendre pour un nom (Maria, Petro, Pau, Gerda…) : tout le cours
    kursaj_vortoj = set()
    for v in sql(f"""SELECT e.komando, e.komando_detalo, e.ekzemplo, er.demando, er.respondmodelo, er.respondo, er.normaligita
        FROM lecionoj l JOIN lecioneroj le ON le.leciono_id = l.id JOIN ekzercoj e ON e.lecionero_id = le.id
        JOIN ekzerceroj er ON er.ekzerco_id = e.id WHERE l.kurso = '{a.kurso}'"""):
        for teksto in v.values():
            kursaj_vortoj.update(normigi(m) for m in VORTO.findall(sen_html(teksto) or ''))

    eligo = Path(a.eligo).expanduser()
    eligo.mkdir(parents=True, exist_ok=True)
    # remplacements complémentaires repérés à la relecture (« Mot => [MARQUE] » par ligne), hors du dépôt
    aldonaj = {}
    dosiero = eligo.parent / 'anstatauxoj.txt'
    if dosiero.exists():
        for linio in dosiero.read_text().splitlines():
            if '=>' in linio and not linio.lstrip().startswith('#'):
                v, m = (x.strip() for x in linio.split('=>', 1))
                aldonaj[normigi(v)] = m
    nombriloj = {}
    resumo = []
    for k in elektitaj:
        pid, lid, numero = k['persono_id'], k['leciono_id'], int(k['numero'])
        nombriloj[numero] = nombriloj.get(numero, 0) + 1
        nomo = f'{a.kurso}-{numero:02d}-{nombriloj[numero]}'
        anon = Anonimigilo(personaj.get(pid, {}), korektantoj_de.get(pid, []), kursaj_vortoj, aldonaj)
        liaj = {r['ekzercero_id']: r for r in respondoj if r['persono_id'] == pid and r['leciono_id'] == lid}
        homa = next((h for h in lecionoj_homaj if h['persono_id'] == pid and h['leciono_id'] == lid), {})

        ekzercoj, nr = [], 0
        for s in (s for s in strukturo if s['leciono_id'] == lid):
            r = liaj.get(s['ekzercero_id'])
            if r is None:
                continue
            if not ekzercoj or ekzercoj[-1]['_id'] != s['ekzerco_id']:
                ekzercoj.append({
                    '_id': s['ekzerco_id'],
                    'sekcio': sen_html(s['lecionero_titolo']),
                    'tipo': s['typo'],
                    'auxtomata': s['korektebla'] == '1',
                    'komando': sen_html(s['komando']),
                    'komando_detalo': sen_html(s['komando_detalo']),
                    'ekzemplo': sen_html(s['ekzemplo']),
                    'demandoj': [],
                })
            nr += 1
            ekzercoj[-1]['demandoj'].append({
                'id': f'r{nr}',
                'demando': sen_html(s['demando']),
                'modelo': sen_html(s['respondmodelo']) or sen_html(s['modelo']),
                'akceptataj': s['normaligita'].split('|') if s['normaligita'] else None,
                'respondo': anon(r['respondo']),
                'homa': {
                    'gxusta': None if r['gxusta'] is None else r['gxusta'] == '1',
                    'korekto': anon(r['korekto'], True) or None,
                    'poentoj': None if r['poentoj'] is None else int(r['poentoj']),
                },
            })
        for e in ekzercoj:
            del e['_id']
        leciono = {
            'nomo': nomo,
            'kurso': a.kurso,
            'leciono': numero,
            'titolo': sen_html(next((s['leciono_titolo'] for s in strukturo if s['leciono_id'] == lid), None)),
            # texte de lecture (contenu du cours, pas de données personnelles), absent du cours élémentaire
            'teksto': tekstoj.get(lid),
            'ekzercoj': ekzercoj,
            # l'introduction du correcteur (sa présentation : prénom, ville, parcours) n'est pas reprise
            'homa_konkludo': anon(homa.get('konkludo'), True) or None,
        }
        (eligo / f'{nomo}.json').write_text(json.dumps(leciono, ensure_ascii=False, indent=1) + '\n')
        demandoj = [d for e in ekzercoj for d in e['demandoj']]
        resumo.append(f"{nomo}: {len(demandoj)} réponses, {sum(d['homa']['gxusta'] is False for d in demandoj)} fausses, "
                      f"{sum(bool(d['homa']['korekto']) for d in demandoj)} commentées")
    print('\n'.join(resumo))
    print(f'{len(resumo)} leçons écrites dans {eligo}')


if __name__ == '__main__':
    main()
