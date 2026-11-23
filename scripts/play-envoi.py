#!/usr/bin/env python3
"""Envoi d'une version de l'application lernejo sur Google Play, canal de test interne, par l'API Google Play.

Utilise le compte de service play-envoi@ikurso.iam.gserviceaccount.com (projet Google Cloud ikurso), invité dans la
Play Console avec le seul droit de publier sur les canaux de test. Sa clé JSON reste hors du dépôt :
~/.config/ikurso/play-service-account.json (ou --cle).

    python3 scripts/play-envoi.py ~/Documents/ikurso-play-store/ikurso-1.0.0-7.aab \\
        --nomo "1.0.0 (7) – connexion avec Google" --notoj notes-fr.txt [--brouillon]

--notoj : fichier texte des notes de version en français (500 caractères au plus).
--brouillon : la version reste en brouillon dans la Play Console, à publier à la main.
Seules dépendances : requests et cryptography.
"""
import argparse
import base64
import json
import os
import sys
import time

import requests
from cryptography.hazmat.primitives import hashes, serialization
from cryptography.hazmat.primitives.asymmetric import padding

PAKO = "org.esperantofrance.ikurso"
API = "https://androidpublisher.googleapis.com/androidpublisher/v3/applications/" + PAKO
ALSXUTO = "https://androidpublisher.googleapis.com/upload/androidpublisher/v3/applications/" + PAKO
AMPLEKSO = "https://www.googleapis.com/auth/androidpublisher"
KANALO = "internal"


def b64(datumoj: bytes) -> str:
    return base64.urlsafe_b64encode(datumoj).rstrip(b"=").decode()


def alirjxetono(cxeloj: dict) -> str:
    """Jeton d'accès OAuth du compte de service (JWT signé RS256 échangé contre un access token)."""
    nun = int(time.time())
    kapo = {"alg": "RS256", "typ": "JWT", "kid": cxeloj["private_key_id"]}
    enhavo = {"iss": cxeloj["client_email"], "scope": AMPLEKSO, "aud": cxeloj["token_uri"], "iat": nun, "exp": nun + 3600}
    subskribota = (b64(json.dumps(kapo).encode()) + "." + b64(json.dumps(enhavo).encode())).encode()
    sxlosilo = serialization.load_pem_private_key(cxeloj["private_key"].encode(), password=None)
    subskribo = sxlosilo.sign(subskribota, padding.PKCS1v15(), hashes.SHA256())
    r = requests.post(cxeloj["token_uri"], data={
        "grant_type": "urn:ietf:params:oauth:grant-type:jwt-bearer",
        "assertion": subskribota.decode() + "." + b64(subskribo),
    }, timeout=30)
    kontroli(r, "jeton d'accès")
    return r.json()["access_token"]


def kontroli(r: requests.Response, pasxo: str) -> None:
    if not r.ok:
        sys.exit(f"Échec ({pasxo}) : HTTP {r.status_code}\n{r.text[:2000]}")


def main() -> None:
    p = argparse.ArgumentParser(description=__doc__, formatter_class=argparse.RawDescriptionHelpFormatter)
    p.add_argument("aab")
    p.add_argument("--nomo", required=True, help="nom de la version dans la Play Console")
    p.add_argument("--notoj", required=True, help="fichier des notes de version en français")
    p.add_argument("--cle", default=os.path.expanduser("~/.config/ikurso/play-service-account.json"))
    p.add_argument("--brouillon", action="store_true", help="ne pas publier : version en brouillon")
    a = p.parse_args()

    with open(a.notoj, encoding="utf-8") as f:
        notoj = f.read().strip()
    if len(notoj) > 500:
        sys.exit(f"Notes trop longues : {len(notoj)} caractères (500 au plus)")
    with open(a.cle, encoding="utf-8") as f:
        cxeloj = json.load(f)

    s = requests.Session()
    s.headers["Authorization"] = "Bearer " + alirjxetono(cxeloj)

    r = s.post(API + "/edits", json={}, timeout=60)
    kontroli(r, "ouverture de la modification")
    redakto = r.json()["id"]

    print(f"Envoi de {a.aab} ({os.path.getsize(a.aab) / 1e6:.1f} Mo)…", flush=True)
    with open(a.aab, "rb") as f:
        r = s.post(ALSXUTO + f"/edits/{redakto}/bundles", params={"uploadType": "media"},
                   headers={"Content-Type": "application/octet-stream"}, data=f, timeout=900)
    kontroli(r, "envoi de l'AAB")
    versio = r.json()["versionCode"]
    print(f"AAB reçu : versionCode {versio}")

    eldono = {
        "name": a.nomo,
        "versionCodes": [str(versio)],
        "status": "draft" if a.brouillon else "completed",
        "releaseNotes": [{"language": "fr-FR", "text": notoj}],
    }
    r = s.put(API + f"/edits/{redakto}/tracks/{KANALO}", json={"track": KANALO, "releases": [eldono]}, timeout=60)
    kontroli(r, "canal de test interne")

    r = s.post(API + f"/edits/{redakto}:commit", timeout=120)
    kontroli(r, "validation")
    print(("Brouillon enregistré" if a.brouillon else "Publiée") + f" sur le canal {KANALO} : {a.nomo}")


if __name__ == "__main__":
    main()
