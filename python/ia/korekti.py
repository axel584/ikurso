#!/usr/bin/env python3
"""Banc d'essai de la correction par IA (#1129) : fait corriger les leçons du jeu de test par des modèles, via OpenRouter.

Pour chaque modèle et chaque leçon (fichiers de eltiri_lecionojn.py), envoie la consigne (api/ia-konsigno.md, la même que le site) et la leçon
SANS la correction humaine, demande une réponse JSON structurée, et garde le résultat avec le nombre de tokens,
le coût et la durée. Une leçon déjà corrigée par un modèle n'est pas redemandée (relancer reprend où on en était).

La clé d'API est lue dans ~/.config/ikurso/openrouter.key (jamais dans le dépôt).

Usage :
  python3 korekti.py --modeloj z-ai/glm-5.3-flash,anthropic/claude-haiku-5.5 [--lecionoj 'CG-0[12]-*'] [--paralelo 4]
"""
import argparse
import concurrent.futures
import json
import time
import urllib.error
import urllib.request
from pathlib import Path

DOSIERUJO = Path.home() / 'Documents/ikurso-ia'
SXLOSILO = Path.home() / '.config/ikurso/openrouter.key'
KONSIGNO = Path(__file__).resolve().parents[2] / 'api/ia-konsigno.md'  # la même consigne que le site (#1130)
URL = 'https://openrouter.ai/api/v1/chat/completions'
KURSOJ = {'CG': 'Cours élémentaire (CG)', 'GR': 'Gerda malaperis (GR)', 'PP': 'Paŝoj al plena posedo (PP)'}  # comme api/IaKorektadoAPI.php

SKEMO = {
    'name': 'korektado',
    'strict': True,
    'schema': {
        'type': 'object',
        'additionalProperties': False,
        'required': ['respondoj', 'konkludo'],
        'properties': {
            'respondoj': {
                'type': 'array',
                'items': {
                    'type': 'object',
                    'additionalProperties': False,
                    'required': ['id', 'gxusta', 'korekto'],
                    'properties': {
                        'id': {'type': 'string'},
                        'gxusta': {'type': 'boolean'},
                        'korekto': {'type': 'string'},
                    },
                },
            },
            'konkludo': {'type': 'string'},
        },
    },
}


def por_modelo(leciono: dict) -> dict:
    """La leçon telle que la voit le modèle : sans la correction humaine."""
    return {
        'kurso': KURSOJ[leciono['kurso']],
        'leciono': leciono['leciono'],
        'titolo': leciono['titolo'],
        **({'teksto': leciono['teksto']} if leciono.get('teksto') else {}),
        'ekzercoj': [
            {
                'sekcio': e['sekcio'],
                'tipo': e['tipo'],
                'komando': e['komando'],
                'komando_detalo': e['komando_detalo'],
                'ekzemplo': e['ekzemplo'],
                'demandoj': [{k: d[k] for k in ('id', 'demando', 'modelo', 'akceptataj', 'respondo')} for d in e['demandoj']],
            }
            for e in leciono['ekzercoj']
        ],
    }


def peti(sxlosilo: str, modelo: str, konsigno: str, leciono: dict) -> dict:
    korpo = {
        'model': modelo,
        'messages': [
            {'role': 'system', 'content': konsigno},
            {'role': 'user', 'content': json.dumps(por_modelo(leciono), ensure_ascii=False, indent=1)},
        ],
        'response_format': {'type': 'json_schema', 'json_schema': SKEMO},
        'max_tokens': 16000,
        'usage': {'include': True},
        # seulement des fournisseurs qui respectent le format demandé
        'provider': {'require_parameters': True},
    }
    peto = urllib.request.Request(URL, data=json.dumps(korpo).encode(), headers={
        'Authorization': 'Bearer ' + sxlosilo,
        'Content-Type': 'application/json',
        'X-Title': 'iKurso - banc d\'essai correction (#1129)',
    })
    komenco = time.time()
    with urllib.request.urlopen(peto, timeout=600) as r:
        respondo = json.load(r)
    return {'respondo': respondo, 'sekundoj': round(time.time() - komenco, 1)}


def analizi(respondo: dict):
    """Le JSON de la correction, ou None s'il est illisible."""
    try:
        teksto = respondo['choices'][0]['message']['content']
    except (KeyError, IndexError, TypeError):
        return None
    teksto = (teksto or '').strip()
    if teksto.startswith('```'):
        teksto = teksto.strip('`').removeprefix('json').strip()
    try:
        return json.loads(teksto)
    except json.JSONDecodeError:
        return None


def labori(sxlosilo, modelo, konsigno, dosiero: Path, celo: Path) -> str:
    leciono = json.loads(dosiero.read_text())
    for provo in range(3):
        try:
            r = peti(sxlosilo, modelo, konsigno, leciono)
            break
        except (urllib.error.URLError, TimeoutError, json.JSONDecodeError) as e:
            eraro = getattr(e, 'read', lambda: b'')().decode(errors='replace')[:300] or str(e)
            if provo == 2:
                return f'{modelo} {dosiero.stem} : ÉCHEC ({eraro})'
            time.sleep(5 * (provo + 1))
    uzo = r['respondo'].get('usage') or {}
    rezulto = {
        'modelo': modelo,
        'leciono': dosiero.stem,
        'sekundoj': r['sekundoj'],
        'tokens_eniro': uzo.get('prompt_tokens'),
        'tokens_eliro': uzo.get('completion_tokens'),
        'kosto': uzo.get('cost'),
        'provizanto': r['respondo'].get('provider'),
        'korektado': analizi(r['respondo']),
        'kruda': r['respondo'],
    }
    celo.parent.mkdir(parents=True, exist_ok=True)
    celo.write_text(json.dumps(rezulto, ensure_ascii=False, indent=1) + '\n')
    stato = 'ok' if rezulto['korektado'] else 'JSON illisible'
    return f"{modelo} {dosiero.stem} : {stato}, {r['sekundoj']} s, {rezulto['kosto']} $"


def main():
    ap = argparse.ArgumentParser(description=__doc__.split('\n')[0])
    ap.add_argument('--modeloj', required=True, help='identifiants OpenRouter séparés par des virgules')
    ap.add_argument('--lecionoj', default='CG-*', help='motif des fichiers du jeu de test')
    ap.add_argument('--paralelo', type=int, default=4)
    ap.add_argument('--etikedo', default='', help='suffixe du dossier de résultats, pour repasser un modèle (ex. une autre consigne)')
    a = ap.parse_args()

    sxlosilo = SXLOSILO.read_text().strip()
    konsigno = KONSIGNO.read_text()
    dosieroj = sorted((DOSIERUJO / 'datumoj').glob(a.lecionoj + '.json'))
    taskoj = []
    for modelo in a.modeloj.split(','):
        for d in dosieroj:
            celo = DOSIERUJO / 'rezultoj' / (modelo.replace('/', '__') + (f'--{a.etikedo}' if a.etikedo else '')) / f'{d.stem}.json'
            if not celo.exists():
                taskoj.append((modelo, d, celo))
    print(f'{len(taskoj)} corrections à demander')
    with concurrent.futures.ThreadPoolExecutor(a.paralelo) as ekz:
        for linio in ekz.map(lambda t: labori(sxlosilo, t[0], konsigno, t[1], t[2]), taskoj):
            print(linio, flush=True)


if __name__ == '__main__':
    main()
