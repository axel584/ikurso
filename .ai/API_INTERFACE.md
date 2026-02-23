# Interface de l'API Ikurso

Description complète de l'API REST générée depuis le code source (`/api/`).

**Point d'entrée** : `api.php?path=<resource>`
**Format** : JSON (`Content-Type: application/json; charset=utf-8`)
**Encodage** : `JSON_UNESCAPED_UNICODE` (support des caractères espéranto)

> **Note sur les URLs** : Le point d'entrée réel est `api.php?path=<resource>` (ex: `api.php?path=auth/me`).
> Une règle `.htaccess` réécriture optionnelle (`RewriteRule ^api/(.*)$ api.php?path=$1`) permet également d'utiliser `/api/<resource>`, mais cette réécriture n'est pas disponible dans tous les environnements.
> Les sections ci-dessous utilisent la notation `GET /auth/me` comme identifiant logique — l'URL réelle correspondante est `GET api.php?path=auth/me`.

---

## Sommaire

1. [Authentification](#authentification)
2. [Endpoints](#endpoints)
   - [POST /auth/login](#post-authlogin)
   - [POST /auth/register](#post-authregister)
   - [POST /auth/logout](#post-authlogout)
   - [GET /auth/me](#get-authme)
   - [GET /personoj](#get-personoj)
   - [GET /personoj/{id}](#get-personojid)
   - [POST /personoj](#post-personoj)
   - [PATCH /personoj/{id}](#patch-personojid)
   - [DELETE /personoj/{id}](#delete-personojid)
   - [GET /kursoj](#get-kursoj)
   - [GET /kursoj/{id}](#get-kursojid)
   - [POST /kursoj](#post-kursoj)
   - [PATCH /kursoj/{id}](#patch-kursojid)
   - [DELETE /kursoj/{id}](#delete-kursojid)
   - [GET /lecionoj](#get-lecionoj)
   - [GET /lecionoj/{id}](#get-lecionojid)
   - [POST /lecionoj](#post-lecionoj)
   - [PATCH /lecionoj/{id}](#patch-lecionojid)
   - [DELETE /lecionoj/{id}](#delete-lecionojid)
   - [GET /lecioneroj](#get-lecioneroj)
   - [GET /lecioneroj/{id}](#get-lecionerojid)
   - [POST /lecioneroj](#post-lecioneroj)
   - [PATCH /lecioneroj/{id}](#patch-lecionerojid)
   - [DELETE /lecioneroj/{id}](#delete-lecionerojid)
   - [GET /ekzercoj](#get-ekzercoj)
   - [GET /ekzercoj/{id}](#get-ekzercojid)
   - [POST /ekzercoj](#post-ekzercoj)
   - [PATCH /ekzercoj/{id}](#patch-ekzercojid)
   - [DELETE /ekzercoj/{id}](#delete-ekzercojid)
   - [GET /ekzerceroj](#get-ekzerceroj)
   - [GET /ekzerceroj/{id}](#get-ekzerceroijid)
   - [POST /ekzerceroj](#post-ekzerceroj)
   - [PATCH /ekzerceroj/{id}](#patch-ekzerceroijid)
   - [DELETE /ekzerceroj/{id}](#delete-ekzerceroijid)
   - [GET /tekstoj](#get-tekstoj)
   - [GET /tekstoj/{id}](#get-tekstojid)
   - [POST /tekstoj](#post-tekstoj)
   - [PUT /tekstoj/{id}](#put-tekstojid)
   - [PATCH /tekstoj/{id}](#patch-tekstojid)
   - [GET /legitajxoj](#get-legitajxoj)
   - [POST /legitajxoj](#post-legitajxoj)
   - [PATCH /legitajxoj/{teksto_id}](#patch-legitajxojteksto_id)
   - [GET /legotajxoj](#get-legotajxoj)
   - [POST /legotajxoj](#post-legotajxoj)
   - [DELETE /legotajxoj/{teksto_id}](#delete-legotajxojteksto_id)
   - [POST /kontakto](#post-kontakto)
3. [Authentification détaillée](#authentification-détaillée)
4. [Codes de réponse](#codes-de-réponse)
5. [Format des erreurs](#format-des-erreurs)

---

## Authentification

Deux mécanismes coexistent selon l'endpoint :

### JWT (la plupart des endpoints)

Token JWT signé HS256. Secret : variable `$motDePasse` de `config.php`.
Transmis via :
- Cookie : `access_token`
- Header : `Authorization: Bearer {token}`

Payload JWT :
```json
{
  "enirnomo": "username",
  "retadreso": "email@example.com",
  "persono_id": 123,
  "rajto": "S",
  "persononomo": "Prénom",
  "familinomo": "Nom"
}
```

> Attention : le JWT ne contient pas de champ d'expiration (`exp`). Il est valide 1 an via le cookie.

### Bearer token interne (TekstojAPI uniquement)

Pour les opérations d'écriture sur les textes (POST/PUT/PATCH), un token statique est requis :
```
Authorization: Bearer {INTERNAL_ACCESS_TOKEN}
```
Ce token est configuré dans `config.php` via `$INTERNAL_ACCESS_TOKEN`.

### Niveaux d'accès (`rajtoj`)

| Code | Label | Description |
|------|-------|-------------|
| `P` | Prospect | Nouveau compte, non inscrit à un cours |
| `S` | Studanto | Étudiant inscrit |
| `K` | Korektanto | Correcteur |
| `A` | Administranto | Administrateur |
| `I` | Inaktiva | Compte inactif |

---

## Endpoints

### POST /auth/login

Authentifie un utilisateur et pose le cookie JWT.

**Accès** : Public

**Corps**
```json
{
  "identigilo": "username",
  "pasvorto": "motdepasse"
}
```

**Réponse 200**
```json
{
  "message": "Authentification réussie",
  "user": {
    "id": 123,
    "enirnomo": "username",
    "rajtoj": "S",
    "retadreso": "user@example.com",
    "personnomo": "Jean",
    "familinomo": "Dupont"
  },
  "access_token": "eyJ...",
  "redirect_url": "fr/cge/index.php"
}
```

Le cookie `access_token` est posé avec une durée de 1 an.
`redirect_url` dépend du rôle :
- `A` → `administri.php`
- `K` → `miajlernantoj.php`
- `P` → `fr/cge/intro.php`
- `S` → dépend du cours actif (`fr/cge/index.php`, `fr/gerda/index.php`, ou `personinformoj.php`)

**Erreurs**
- `400` : Paramètres manquants
- `401` : Identifiant introuvable ou mot de passe incorrect
- `403` : Compte non activé

---

### POST /auth/register

Crée un compte et envoie un email d'activation.

**Accès** : Public

**Corps**
```json
{
  "enirnomo": "nouveauuser",
  "pasvorto": "motdepasse",
  "retadreso": "user@example.com"
}
```

**Réponse 201**
```json
{
  "message": "Compte créé avec succès. Un email d'activation a été envoyé à votre adresse.",
  "user_id": 456
}
```

**Validations**
- `enirnomo` : Non vide, ne peut pas contenir `@`
- `pasvorto` : Non vide
- `retadreso` : Format valide + vérification MX + unicité

**Erreurs**
- `400` : Validation échouée ou email/identifiant déjà utilisé
- `500` : Erreur envoi email

---

### POST /auth/logout

Efface le cookie JWT.

**Accès** : JWT (optionnel, log si présent)

**Réponse 200**
```json
{
  "message": "Déconnexion réussie"
}
```

---

### GET /auth/me

Retourne le profil de l'utilisateur connecté.

**Accès** : JWT requis

**Réponse 200**
```json
{
  "user": {
    "id": 123,
    "enirnomo": "username",
    "rajtoj": "S",
    "retadreso": "user@example.com",
    "personnomo": "Jean",
    "familinomo": "Dupont",
    "aktivigita": true,
    "ekdato": "2024-01-15",
    "lasteniro": "2024-08-13 15:30:00"
  },
  "cours_info": {
    "kurso": "CG",
    "stato": "N",
    "nunleciono": 5
  },
  "redirect_url": "fr/cge/index.php"
}
```

`cours_info` n'est présent que pour les étudiants (`rajtoj = 'S'`).

**Erreurs**
- `401` : Non authentifié
- `403` : Compte non activé

---

### GET /personoj

Liste les utilisateurs avec pagination et filtres.

**Accès** : JWT + rôle `A` (administrateur)

**Paramètres query**

| Paramètre | Type | Description | Défaut |
|-----------|------|-------------|--------|
| `page` | int | Numéro de page (min 1) | 1 |
| `limit` | int | Résultats par page (1–100) | 20 |
| `search` | string | Recherche dans `enirnomo`, `personnomo`, `familinomo`, `retadreso` | — |
| `rajtoj` | string | Filtre par rôle (P/S/K/A/I) | — |

**Réponse 200**
```json
{
  "data": [{ "id": 123, "enirnomo": "...", "rajtoj": "S", "rajtoj_label": "Étudiant", ... }],
  "pagination": {
    "page": 1,
    "limit": 20,
    "total_count": 150,
    "total_pages": 8,
    "has_next": true,
    "has_previous": false
  },
  "filters": { "search": "", "rajtoj": "" }
}
```

Champs retournés pour chaque utilisateur (sans `pasvorto_md5`) : `id`, `ekdato`, `lasteniro`, `sekso`, `familinomo`, `personnomo`, `enirnomo`, `adreso1`, `adreso2`, `posxtkodo`, `urbo`, `lando`, `latitudo`, `longitudo`, `retadreso`, `naskigxdato`, `rajtoj`, `rajtoj_label`, `kialo`, `noto`, `maksimumo`, `kurso`, `videbla` (bool), `stop_info` (bool), `stop_rappel` (bool), `aktivigo`, `aktivigita` (bool), `saviezvous`.

**Erreurs**
- `401` : Non authentifié
- `403` : Droits administrateur requis

---

### GET /personoj/{id}

Retourne le profil d'un utilisateur.

**Accès** : JWT requis + (propriétaire OU admin)

**Réponse 200**
```json
{
  "data": { "id": 123, "enirnomo": "...", ... }
}
```

Mêmes champs que la liste.

**Erreurs**
- `401` : Non authentifié
- `403` : Ni propriétaire ni admin
- `404` : Utilisateur non trouvé

---

### POST /personoj

Crée un compte utilisateur sans envoyer d'email d'activation.

**Accès** : Public

**Corps**
```json
{
  "enirnomo": "nouveauuser",
  "pasvorto": "motdepasse",
  "retadreso": "user@example.com"
}
```

**Réponse 201**
```json
{
  "message": "Compte créé avec succès",
  "data": {
    "id": 456,
    "enirnomo": "nouveauuser",
    "retadreso": "user@example.com",
    "aktivigo": "abc123...",
    "aktivigita": false
  }
}
```

> Différence avec `/auth/register` : pas d'envoi d'email d'activation ici.

**Erreurs**
- `400` : Validation échouée
- `409` : Email ou identifiant déjà utilisé

---

### PATCH /personoj/{id}

Mise à jour partielle d'un utilisateur.

**Accès** : JWT requis + (propriétaire OU admin)

**Corps** (tous les champs sont optionnels)

Champs modifiables par tout utilisateur authentifié :
`sekso`, `familinomo`, `personnomo`, `enirnomo`, `adreso1`, `adreso2`, `posxtkodo`, `urbo`, `lando`, `latitudo`, `longitudo`, `retadreso`, `naskigxdato`, `kialo`, `noto`, `maksimumo`, `kurso`, `videbla`, `stop_info`, `stop_rappel`, `saviezvous`, `pasvorto`

Champs réservés aux admins :
`rajtoj`, `aktivigita`, `aktivigo`

**Validations**
- `sekso` : `"M"`, `"I"` ou `null`
- `naskigxdato` : Format `YYYY-MM-DD`
- `retadreso` : Format valide + unicité (hors utilisateur courant)
- `enirnomo` : Sans `@` + unicité
- `rajtoj` : P/S/K/A/I uniquement
- `videbla`, `stop_info`, `stop_rappel` : bool → convertis en `J`/`N` en base
- `pasvorto` : hashé en MD5 avant stockage

**Réponse 200**
```json
{
  "message": "Utilisateur modifié avec succès",
  "data": { "id": 123, ... }
}
```

**Erreurs**
- `400` : Champ non modifiable ou validation échouée
- `403` : Tentative de modification d'un champ admin sans droits
- `404` : Utilisateur non trouvé
- `409` : Email ou identifiant déjà utilisé

---

### DELETE /personoj/{id}

Supprime un utilisateur (suppression physique de `personoj`).

**Accès** : JWT requis + (propriétaire OU admin)

**Règles**
- Un utilisateur peut supprimer son propre compte
- Un admin peut supprimer d'autres comptes
- Un admin **ne peut pas** supprimer son propre compte

**Réponse 200**
```json
{
  "message": "Utilisateur supprimé avec succès",
  "data": { "id": 123, "enirnomo": "...", "retadreso": "..." }
}
```

**Erreurs**
- `403` : Accès refusé ou admin tentant de se supprimer lui-même
- `404` : Utilisateur non trouvé

---

### GET /kursoj

Liste tous les cours.

**Accès** : Public

**Réponse 200**
```json
{
  "data": [
    { "id": 1, "kodo": "CG", "nomo": "Cours de grammaire élémentaire" }
  ],
  "count": 3
}
```

---

### GET /kursoj/{id}

Retourne un cours par son ID numérique.

**Accès** : Public

**Réponse 200**
```json
{
  "data": { "id": 1, "kodo": "CG", "nomo": "Cours de grammaire élémentaire" }
}
```

**Erreurs**
- `400` : ID invalide
- `404` : Cours non trouvé

---

### POST /kursoj

Crée un cours.

**Accès** : JWT + rôle `A`

**Corps**
```json
{
  "kodo": "PP",
  "nomo": "Pasoj al plena posedo"
}
```

**Validations**
- `kodo` : Requis, max 2 caractères, unique
- `nomo` : Requis, non vide

**Réponse 201**
```json
{
  "message": "Cours créé avec succès",
  "data": { "id": 4, "kodo": "PP", "nomo": "Pasoj al plena posedo" }
}
```

**Erreurs**
- `409` : Code de cours déjà utilisé

---

### PATCH /kursoj/{id}

Mise à jour partielle d'un cours.

**Accès** : JWT + rôle `A`

**Corps** : `kodo` et/ou `nomo`

**Réponse 200**
```json
{
  "message": "Cours modifié avec succès",
  "data": { "id": 1, "kodo": "CG", "nomo": "..." }
}
```

---

### DELETE /kursoj/{id}

Supprime un cours.

**Accès** : JWT + rôle `A`

**Garde-fous** : Refus si le cours a des étudiants actifs dans `nuna_kurso` ou des leçons dans `lecionoj`.

**Réponse 200**
```json
{
  "message": "Cours supprimé avec succès",
  "data": { "id": 1, "kodo": "CG", "nomo": "..." }
}
```

**Erreurs**
- `409` : Cours utilisé par des étudiants ou des leçons

---

### GET /lecionoj

Liste les leçons avec filtres optionnels.

**Accès** : Public

**Paramètres query**

| Paramètre | Description |
|-----------|-------------|
| `kurso` | Filtre par code de cours |
| `numero` | Filtre par numéro de leçon |

**Réponse 200**
```json
{
  "data": [
    {
      "id": 10,
      "numero": 1,
      "titolo": "Les salutations",
      "retpagxo": "fr/cge/l01.php",
      "kurso": "CG",
      "unua": true,
      "lasta": false
    }
  ],
  "count": 20
}
```

Trié par `kurso ASC, numero ASC`.

---

### GET /lecionoj/{id}

Retourne une leçon par son ID.

**Accès** : Public

**Réponse 200**
```json
{
  "data": { "id": 10, "numero": 1, "titolo": "...", "retpagxo": "...", "kurso": "CG", "unua": true, "lasta": false }
}
```

---

### POST /lecionoj

Crée une leçon.

**Accès** : JWT + rôle `A`

**Corps**
```json
{
  "numero": 1,
  "titolo": "Les salutations",
  "retpagxo": "fr/cge/l01.php",
  "kurso": "CG",
  "unua": true,
  "lasta": false
}
```

**Validations**
- `numero` : Requis
- `kurso` : Requis, max 2 car., doit exister dans `kursoj`
- Unicité de `(numero, kurso)`

**Réponse 201**
```json
{
  "message": "Leçon créée avec succès",
  "data": { "id": 10, ... }
}
```

**Erreurs**
- `404` : Cours non trouvé
- `409` : Numéro de leçon déjà existant pour ce cours

---

### PATCH /lecionoj/{id}

Mise à jour partielle d'une leçon.

**Accès** : JWT + rôle `A`

**Champs modifiables** : `numero`, `titolo`, `retpagxo`, `kurso`, `unua`, `lasta`

**Réponse 200**
```json
{
  "message": "Leçon modifiée avec succès",
  "data": { "id": 10, ... }
}
```

---

### DELETE /lecionoj/{id}

Supprime une leçon.

**Accès** : JWT + rôle `A`

**Garde-fous** : Refus si la leçon contient des sections (`lecioneroj`) ou des exercices.

**Réponse 200**
```json
{
  "message": "Leçon supprimée avec succès",
  "data": { "id": 10, "numero": 1, "titolo": "...", "kurso": "CG" }
}
```

**Erreurs**
- `409` : La leçon contient des sections ou des exercices

---

### GET /lecioneroj

Liste les sections de leçons avec filtres optionnels.

**Accès** : Public

**Paramètres query**

| Paramètre | Description |
|-----------|-------------|
| `leciono_id` | Filtre par ID de leçon |
| `tipo` | Filtre par type : `VORTARO`, `QCM`, `TEKSTO`, `EKZERCARO` |

**Réponse 200**
```json
{
  "data": [
    {
      "id": 100,
      "leciono_id": 10,
      "titolo": "Vocabulaire",
      "tipo": "VORTARO",
      "enhavo": "<p>...</p>",
      "ordo": 1,
      "unua": true,
      "lasta": false,
      "dauxro": 300,
      "android": true
    }
  ],
  "count": 5
}
```

Trié par `leciono_id ASC, ordo ASC`.

---

### GET /lecioneroj/{id}

Retourne une section par son ID.

**Accès** : Public

---

### POST /lecioneroj

Crée une section de leçon.

**Accès** : JWT + rôle `A`

**Corps**
```json
{
  "leciono_id": 10,
  "titolo": "Vocabulaire",
  "tipo": "VORTARO",
  "enhavo": "<p>Contenu HTML</p>",
  "ordo": 1,
  "unua": true,
  "lasta": false,
  "dauxro": 300,
  "android": true
}
```

**Validations**
- `tipo` : VORTARO / QCM / TEKSTO / EKZERCARO
- `leciono_id` : Doit exister dans `lecionoj` si fourni

**Réponse 201**

---

### PATCH /lecioneroj/{id}

Mise à jour partielle d'une section.

**Accès** : JWT + rôle `A`

**Champs modifiables** : `leciono_id`, `titolo`, `tipo`, `enhavo`, `ordo`, `unua`, `lasta`, `dauxro`, `android`

---

### DELETE /lecioneroj/{id}

Supprime une section.

**Accès** : JWT + rôle `A`

**Garde-fous** : Refus si la section contient des exercices (`ekzercoj`).

**Erreurs**
- `409` : Section contenant des exercices

---

### GET /ekzercoj

Liste les exercices avec filtres optionnels.

**Accès** : Public

**Paramètres query**

| Paramètre | Description |
|-----------|-------------|
| `lecionero_id` | Filtre par section de leçon |
| `typo` | Filtre par type d'exercice |
| `korektebla` | `true`/`1` pour exercices nécessitant correction |

**Réponse 200**
```json
{
  "data": [
    {
      "id": 50,
      "komando": "Traduisez en espéranto :",
      "lecionero_id": 100,
      "komando_detalo": "...",
      "ekzemplo": "...",
      "typo": "traduko-1",
      "x2u": false,
      "korektebla": true
    }
  ],
  "count": 10
}
```

**Types valides** : `traduko-1`, `traduko-2`, `traduko-3`, `verkado-1` à `verkado-6`, `stelo-1`, `stelo-2`, `truoj-1`, `truoj-2`, `kompletigu`, `ordigu`, `elektu`

---

### GET /ekzercoj/{id}

Retourne un exercice par son ID.

**Accès** : Public

---

### POST /ekzercoj

Crée un exercice.

**Accès** : JWT + rôle `A`

**Corps**
```json
{
  "komando": "Traduisez :",
  "lecionero_id": 100,
  "komando_detalo": "Conseil...",
  "ekzemplo": "Ex: ...",
  "typo": "traduko-1",
  "x2u": false,
  "korektebla": true
}
```

**Champs requis** : `komando`, `lecionero_id`, `typo`

**Réponse 201**

---

### PATCH /ekzercoj/{id}

Mise à jour partielle d'un exercice.

**Accès** : JWT + rôle `A`

**Champs modifiables** : `komando`, `lecionero_id`, `komando_detalo`, `ekzemplo`, `typo`, `x2u`, `korektebla`

---

### DELETE /ekzercoj/{id}

Supprime un exercice.

**Accès** : JWT + rôle `A`

**Garde-fous** : Refus si l'exercice a des sous-questions (`ekzerceroj`) ou des réponses d'étudiants (`respondoj`).

**Erreurs**
- `409` : Exercice avec sous-questions ou réponses existantes

---

### GET /ekzerceroj

Liste les questions d'exercice avec filtres.

**Accès** : Public

**Paramètres query**

| Paramètre | Description |
|-----------|-------------|
| `ekzerco_id` | Filtre par exercice parent |
| `kodo` | Filtre par code interne |
| `forigita` | `true`/`1` pour inclure les supprimés (par défaut : `forigita=0` uniquement) |

**Réponse 200**
```json
{
  "data": [
    {
      "id": 200,
      "ekzerco_id": 50,
      "kodo": "L01Q01",
      "numero": 1,
      "demando": "Comment dit-on bonjour ?",
      "respondmodelo": "Saluton",
      "respondo": null,
      "normaligita": "saluton",
      "bildo": "",
      "forigita": false,
      "korektebla": false,
      "poentoj": 1
    }
  ],
  "count": 5
}
```

> Par défaut, les questions supprimées logiquement (`forigita=1`) sont exclues.

---

### GET /ekzerceroj/{id}

Retourne une question par son ID.

**Accès** : Public

---

### POST /ekzerceroj

Crée une question d'exercice.

**Accès** : JWT + rôle `A`

**Corps**
```json
{
  "ekzerco_id": 50,
  "kodo": "L01Q01",
  "numero": 1,
  "demando": "Comment dit-on bonjour ?",
  "respondmodelo": "Saluton",
  "respondo": null,
  "normaligita": "saluton",
  "bildo": "",
  "forigita": false,
  "korektebla": false,
  "poentoj": 1
}
```

**Champs requis** : `ekzerco_id`, `kodo` (max 10 car.), `numero`, `demando`

**Réponse 201**

---

### PATCH /ekzerceroj/{id}

Mise à jour partielle d'une question.

**Accès** : JWT + rôle `A`

**Champs modifiables** : `ekzerco_id`, `kodo`, `numero`, `demando`, `respondmodelo`, `respondo`, `normaligita`, `bildo`, `forigita`, `korektebla`, `poentoj`

---

### DELETE /ekzerceroj/{id}

Supprime physiquement une question.

**Accès** : JWT + rôle `A`

**Garde-fous** : Refus si la question a des réponses d'étudiants dans `respondoj`.

**Erreurs**
- `409` : Question avec réponses existantes

---

### GET /tekstoj

Liste les textes avec filtres et pagination.

**Accès** : Public ou JWT (résultats enrichis si connecté)

**Paramètres query**

| Paramètre | Type | Description | Défaut |
|-----------|------|-------------|--------|
| `aktiva` | int/string | `0`, `1`, ou `"all"` | `1` |
| `auxtoro` | string | Recherche auteur (LIKE `%...%`) | — |
| `titolo` | string | Recherche titre (LIKE) | — |
| `kolekto` | string | Filtre exact par collection | — |
| `nivelo_min` | int | Niveau minimum | — |
| `nivelo_max` | int | Niveau maximum | — |
| `vortoj_min` | int | Nombre de mots minimum | — |
| `vortoj_max` | int | Nombre de mots maximum | — |
| `etikedoj` | string | Recherche dans les tags (LIKE) | — |
| `q` | string | Recherche générale (titre, auteur, tags, lecteur) | — |
| `has_sono` | string | `"true"` pour textes avec audio | — |
| `sort` | string | `id`, `titolo`, `nivelo`, `vortoj`, `ekdato` | `id` |
| `order` | string | `ASC` ou `DESC` | `ASC` |
| `limit` | int | 1–100 | `10` |
| `offset` | int | Décalage | `0` |

**Réponse 200 (non connecté)**
```json
{
  "data": [
    {
      "id": "gerda01",
      "titolo": "Gerda malaperis! - Ĉapitro 1",
      "auxtoro": "Claude Piron",
      "fonto": "Gerda malaperis!",
      "nivelo": 1,
      "vortoj": 450,
      "kolekto": "gerda",
      "etikedoj": "komencanto,mistero",
      "sono": "audio/gerda01.mp3",
      "leganto": "Anna Johnson",
      "arthur_id": 123
    }
  ],
  "pagination": {
    "total": 150,
    "limit": 10,
    "offset": 0,
    "count": 10
  }
}
```

**Si connecté (JWT valide)** : Les champs `legotajxoj_*` et `legitajxoj_*` sont ajoutés pour les textes que l'utilisateur a marqués ou lus. Les champs `null` sont filtrés (absent de la réponse si non renseigné).

> `enhavo` (contenu complet) n'est **jamais** retourné dans la liste.

---

### GET /tekstoj/{id}

Retourne un texte avec son contenu complet.

**Accès** : Public

**Réponse 200**
```json
{
  "id": "gerda01",
  "titolo": "...",
  "auxtoro": "...",
  "enhavo": [
    { "type": "paragraph", "content": "..." }
  ],
  "aktiva": 1,
  "ekdato": "2020-01-15 10:00:00",
  ...
}
```

`enhavo` est automatiquement parsé depuis JSON (ou retourné brut si invalide).

**Erreurs**
- `404` : Texte non trouvé

---

### POST /tekstoj

Crée un texte.

**Accès** : Bearer token interne (`$INTERNAL_ACCESS_TOKEN`)

**Corps**
```json
{
  "id": "custom01",
  "titolo": "Mon texte",
  "auxtoro": "Auteur",
  "fonto": "Source",
  "nivelo": 3,
  "vortoj": 500,
  "kolekto": "modern",
  "etikedoj": "science,fiction",
  "sono": "audio/custom01.mp3",
  "enhavo": [{ "type": "paragraph", "content": "..." }],
  "aktiva": 1,
  "arthur_id": 456
}
```

**Champs requis** : `id`, `titolo`, `auxtoro`

**Réponse 201**
```json
{
  "id": "custom01",
  "message": "Teksto créé avec succès"
}
```

**Erreurs**
- `401` : Token invalide
- `409` : ID déjà existant

---

### PUT /tekstoj/{id}

Mise à jour complète d'un texte.

**Accès** : Bearer token interne

**Champs requis** : `titolo`, `auxtoro`

**Champs modifiables** : `titolo`, `auxtoro`, `fonto`, `nivelo`, `vortoj`, `kolekto`, `etikedoj`, `sono`, `enhavo`, `aktiva`, `leganto`, `arthur_id`

**Réponse 200**
```json
{
  "id": "custom01",
  "message": "Teksto mis à jour avec succès"
}
```

Si aucun champ modifié : `"message": "Aucune modification effectuée"`

---

### PATCH /tekstoj/{id}

Mise à jour partielle d'un texte.

**Accès** : Bearer token interne

Même champs que PUT, tous optionnels.

---

### GET /legitajxoj

Liste les sessions de lecture de l'utilisateur connecté (avec les données des textes).

**Accès** : JWT requis

**Réponse 200**
```json
{
  "status": "success",
  "count": 3,
  "legitajxoj": [
    {
      "id": 456,
      "teksto_id": "gerda01",
      "komenc_timestamp": "2024-08-13 15:30:00",
      "fin_timestamp": "2024-08-13 16:00:00",
      "legad_tempo": 1800,
      "noto": 4,
      "komentaro": "Très intéressant",
      "kreita_je": "2024-08-13 15:30:00",
      "modifita_je": "2024-08-13 16:00:00",
      "titolo": "Gerda malaperis! - Ĉapitro 1",
      "auxtoro": "Claude Piron",
      ...
    }
  ]
}
```

Trié par `modifita_je DESC`.

---

### POST /legitajxoj

Démarre ou récupère une session de lecture (idempotent).

**Accès** : JWT requis

**Corps**
```json
{
  "teksto_id": "gerda01",
  "komenc_timestamp": "2024-08-13T15:30:00Z"
}
```

**Comportement** : Si une session existe déjà pour `(persono_id, teksto_id)`, elle est retournée sans en créer une nouvelle.

**Réponse 201**
```json
{
  "legitajxo_id": 456,
  "persono_id": 123,
  "teksto_id": "gerda01",
  "komenc_timestamp": "2024-08-13T15:30:00Z"
}
```

**Erreurs**
- `400` : Paramètres manquants ou timestamp invalide

---

### PATCH /legitajxoj/{teksto_id}

Met à jour une session de lecture (identifiée par le `teksto_id` de l'utilisateur connecté).

**Accès** : JWT requis

**Corps** (tous optionnels)

| Champ | Type | Validation |
|-------|------|------------|
| `fin_timestamp` | string | ISO 8601 |
| `legad_tempo` | int | ≥ 0 (secondes) |
| `noto` | int | 1 à 5 |
| `komentaro` | string | — |

**Réponse 200**
```json
{
  "legitajxo_id": 456,
  "teksto_id": "gerda01",
  "updated_data": {
    "legad_tempo": 1800,
    "noto": 4,
    "komentaro": "...",
    "fin_timestamp": "2024-08-13 16:00:00",
    "modifita_je": "2024-08-13 16:05:00"
  }
}
```

**Erreurs**
- `404` : Session non trouvée pour ce texte

---

### GET /legotajxoj

Liste les marque-pages de l'utilisateur connecté (avec les données des textes).

**Accès** : JWT requis

**Réponse 200**
```json
{
  "status": "success",
  "count": 5,
  "legotajxoj": [
    {
      "id": 789,
      "teksto_id": "gerda01",
      "kreita_je": "2024-08-01 10:00:00",
      "modifita_je": "2024-08-01 10:00:00",
      "titolo": "...",
      "auxtoro": "...",
      ...
    }
  ]
}
```

Trié par `modifita_je DESC`.

> Cet endpoint inclut des headers **CORS** (`Access-Control-Allow-Origin: *`).

---

### POST /legotajxoj

Ajoute un marque-page.

**Accès** : JWT requis

**Corps**
```json
{
  "teksto_id": "gerda01"
}
```

**Réponse 201**
```json
{
  "status": "success",
  "message": "Legotajxo ajouté avec succès",
  "id": 789,
  "persono_id": 123,
  "teksto_id": "gerda01"
}
```

**Erreurs**
- `400` : `teksto_id` manquant ou vide
- `409` : Marque-page déjà existant

---

### DELETE /legotajxoj/{teksto_id}

Supprime un marque-page.

**Accès** : JWT requis

**Réponse 200**
```json
{
  "status": "success",
  "message": "Legotajxo supprimé avec succès",
  "persono_id": 123,
  "teksto_id": "gerda01"
}
```

**Erreurs**
- `400` : `teksto_id` manquant dans l'URL
- `404` : Marque-page non trouvé

---

### POST /kontakto

Envoie un message de contact à tous les administrateurs (+ copie à l'expéditeur).

**Accès** : Public

**Corps**
```json
{
  "sendinto": "user@example.com",
  "temo": "Question sur le cours",
  "komento": "Bonjour, j'ai une question...",
  "reagopagxo": "https://ikurso.esperanto-france.org/page"
}
```

`reagopagxo` est optionnel.

**Validations**
- `sendinto` : Email valide (format + vérification MX + connexion port 25)
- `temo` : Non vide
- `komento` : Non vide + filtrage anti-spam

**Détection spam** (dans `komento`) :
- Mots : `" girl "`, `" sex "`, `" money "`, `" virginity "`, `"порно"`
- URLs : `"http://"`, `"https://"`

**Réponse 200**
```json
{
  "status": "success",
  "sendinto": "user@example.com",
  "temo": "Question sur le cours"
}
```

**Erreurs**
- `400` : Email invalide, champs vides, spam détecté
- `500` : Erreur envoi email

---

## Authentification détaillée

### Génération du JWT (`AuthentificationAPI.php`)

```
header = base64url({ "alg": "HS256", "typ": "JWT" })
payload = base64url({ "enirnomo", "retadreso", "persono_id", "rajto", "persononomo", "familinomo" })
signature = HMAC-SHA256(header + "." + payload, $motDePasse)
JWT = header + "." + payload + "." + base64url(signature)
```

### Validation du JWT (`JWTAuth.php`)

Ordre de recherche du token :
1. Cookie `access_token`
2. Header `Authorization: Bearer {token}`
3. Header `HTTP_AUTHORIZATION`
4. `apache_request_headers()['Authorization']`

---

## Codes de réponse

| Code | Usage |
|------|-------|
| `200` | Succès (GET, PATCH, DELETE) |
| `201` | Ressource créée (POST) |
| `400` | Requête invalide (validation échouée, paramètre manquant) |
| `401` | Non authentifié ou token invalide |
| `403` | Accès refusé (droits insuffisants, compte non activé) |
| `404` | Ressource non trouvée |
| `405` | Méthode HTTP non supportée |
| `409` | Conflit (doublon, ressource liée existante) |
| `500` | Erreur serveur |

---

## Format des erreurs

```json
{
  "error": "Message d'erreur descriptif"
}
```

Si `DEBUG_MODE = true` (config.php), les erreurs 500 incluent le message PDO complet.

---

## Notes techniques

- **Mot de passe** : Stocké en MD5 (legacy). Migration vers bcrypt recommandée.
- **CORS** : Seul `LegotajxojAPI` expose des headers CORS (`Access-Control-Allow-Origin: *`).
- **Logging** : Les actions importantes sont tracées dans la table `protokolo` (connexions, déconnexions, lectures, contacts, spam).
- **Timestamps** : Entrée ISO 8601, conversion via `strtotime()` + `date('Y-m-d H:i:s')`, stockage en DATETIME MySQL.
- **Emails** : Envoi via AWS SES si `$awskey`/`$awssecret` configurés, sinon fallback sur `mail()` PHP ou simple log.
- **ID tekstoj** : VARCHAR libre (ex: `"gerda01"`, `"ppp03"`), non auto-increment.
- **Suppression tekstoj** : Pas de DELETE exposé — les textes sont archivés via `aktiva=0`.
