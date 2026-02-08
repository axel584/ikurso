# API Ikurso - Spécification Technique

## Informations générales

**Base URL** : `https://ikurso.esperanto-france.org/api/`
**Format** : JSON
**Encodage** : UTF-8
**Version** : 1.0

## Table des matières

1. [Authentification](#authentification)
2. [Endpoints](#endpoints)
   - [Auth](#auth)
   - [Personoj (Utilisateurs)](#personoj-utilisateurs)
   - [Tekstoj (Textes)](#tekstoj-textes)
   - [Legitajxoj (Sessions de lecture)](#legitajxoj-sessions-de-lecture)
   - [Legotajxoj (Marque-pages)](#legotajxoj-marque-pages)
   - [Kontakto (Contact)](#kontakto-contact)
3. [Codes d'erreur](#codes-derreur)
4. [Modèles de données](#modèles-de-données)

---

## Authentification

L'API utilise JWT (JSON Web Tokens) pour l'authentification des utilisateurs.

### Méthodes d'authentification

#### 1. Cookie (recommandé pour web)
Le token JWT est automatiquement stocké dans un cookie `access_token` après login.

#### 2. Header Authorization (recommandé pour mobile/API)
```
Authorization: Bearer {jwt_token}
```

#### 3. Bearer Token (endpoints admin)
Certains endpoints (TekstojAPI POST/PUT/PATCH) nécessitent un token Bearer interne.
```
Authorization: Bearer {internal_access_token}
```

### Niveaux d'accès (rajtoj)

| Code | Label | Description |
|------|-------|-------------|
| `P` | Prospect | Nouveau, non inscrit à un cours |
| `S` | Studanto | Étudiant inscrit |
| `K` | Korektanto | Correcteur |
| `A` | Administranto | Administrateur |
| `I` | Inaktiva | Compte inactif |

---

## Endpoints

### Auth

#### POST /api/auth/login

Authentifie un utilisateur et retourne un JWT.

**Requête**
```http
POST /api/auth/login
Content-Type: application/json

{
  "identigilo": "username",
  "pasvorto": "password"
}
```

**Réponse succès (200)**
```json
{
  "message": "Authentification réussie",
  "user": {
    "id": 123,
    "enirnomo": "username",
    "rajtoj": "S",
    "retadreso": "user@example.com",
    "personnomo": "John",
    "familinomo": "Doe"
  },
  "access_token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...",
  "redirect_url": "personinformoj.php"
}
```

**Erreurs**
- `400` : Paramètres manquants
- `401` : Identifiant introuvable ou mot de passe incorrect
- `403` : Compte non validé

---

#### POST /api/auth/register

Crée un nouveau compte utilisateur.

**Requête**
```http
POST /api/auth/register
Content-Type: application/json

{
  "enirnomo": "newuser",
  "pasvorto": "securepass123",
  "retadreso": "newuser@example.com"
}
```

**Réponse succès (201)**
```json
{
  "message": "Compte créé avec succès. Un email d'activation a été envoyé à votre adresse.",
  "user_id": 456
}
```

**Règles de validation**
- `enirnomo` : Ne peut pas contenir "@", doit être unique
- `pasvorto` : Requis, non vide
- `retadreso` : Format valide, vérification MX, doit être unique

**Erreurs**
- `400` : Validation échouée (format, champs manquants)
- `409` : Email ou identifiant déjà utilisé
- `500` : Erreur lors de l'envoi de l'email d'activation

---

#### POST /api/auth/logout

Déconnecte l'utilisateur (supprime le cookie).

**Requête**
```http
POST /api/auth/logout
Authorization: Bearer {jwt_token}
```

**Réponse succès (200)**
```json
{
  "message": "Déconnexion réussie"
}
```

---

#### GET /api/auth/me

Récupère les informations de l'utilisateur actuellement connecté.

**Requête**
```http
GET /api/auth/me
Authorization: Bearer {jwt_token}
```

**Réponse succès (200)**
```json
{
  "user": {
    "id": 123,
    "enirnomo": "username",
    "rajtoj": "S",
    "retadreso": "user@example.com",
    "personnomo": "John",
    "familinomo": "Doe",
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

**Erreurs**
- `401` : Non authentifié ou token invalide
- `403` : Compte non activé

---

### Personoj (Utilisateurs)

#### GET /api/personoj

Liste les utilisateurs avec pagination et filtres. **Réservé aux administrateurs.**

**Requête**
```http
GET /api/personoj?page=1&limit=20&search=john&rajtoj=S
Authorization: Bearer {jwt_token}
```

**Paramètres query**

| Paramètre | Type | Description | Défaut |
|-----------|------|-------------|--------|
| `page` | int | Numéro de page | 1 |
| `limit` | int | Résultats par page (1-100) | 20 |
| `search` | string | Recherche dans enirnomo, personnomo, familinomo, retadreso | - |
| `rajtoj` | string | Filtre par droits (P/S/K/A/I) | - |

**Réponse succès (200)**
```json
{
  "data": [
    {
      "id": 123,
      "enirnomo": "username",
      "rajtoj": "S",
      "rajtoj_label": "Étudiant",
      "retadreso": "user@example.com",
      "personnomo": "John",
      "familinomo": "Doe",
      "aktivigita": true,
      "ekdato": "2024-01-15",
      "lasteniro": "2024-08-13 15:30:00",
      "videbla": true,
      "stop_info": false,
      "stop_rappel": false,
      "maksimumo": 0,
      "saviezvous": 1,
      "sekso": "M",
      "lando": "FR",
      "urbo": "Paris",
      "naskigxdato": "1990-05-20"
    }
  ],
  "pagination": {
    "page": 1,
    "limit": 20,
    "total_count": 150,
    "total_pages": 8,
    "has_next": true,
    "has_previous": false
  },
  "filters": {
    "search": "john",
    "rajtoj": "S"
  }
}
```

**Erreurs**
- `401` : Non authentifié
- `403` : Droits administrateur requis

---

#### GET /api/personoj/{id}

Récupère un utilisateur spécifique. L'utilisateur peut consulter son propre profil, les admins peuvent consulter tous les profils.

**Requête**
```http
GET /api/personoj/123
Authorization: Bearer {jwt_token}
```

**Réponse succès (200)**
```json
{
  "data": {
    "id": 123,
    "enirnomo": "username",
    "rajtoj": "S",
    "rajtoj_label": "Étudiant",
    "retadreso": "user@example.com",
    "personnomo": "John",
    "familinomo": "Doe",
    "aktivigita": true,
    "ekdato": "2024-01-15",
    "lasteniro": "2024-08-13 15:30:00",
    "sekso": "M",
    "adreso1": "123 Rue de la Paix",
    "adreso2": "Apt 4B",
    "posxtkodo": "75001",
    "urbo": "Paris",
    "lando": "FR",
    "latitudo": 48.8566,
    "longitudo": 2.3522,
    "naskigxdato": "1990-05-20",
    "kialo": "Apprendre l'espéranto",
    "noto": "Notes internes",
    "maksimumo": 0,
    "kurso": "CG",
    "videbla": true,
    "stop_info": false,
    "stop_rappel": false,
    "saviezvous": 1
  }
}
```

**Erreurs**
- `401` : Non authentifié
- `403` : Accès refusé (ni propriétaire ni admin)
- `404` : Utilisateur non trouvé

---

#### POST /api/personoj

Crée un nouvel utilisateur. **Endpoint public**, pas d'authentification requise.

**Requête**
```http
POST /api/personoj
Content-Type: application/json

{
  "enirnomo": "newuser",
  "pasvorto": "securepass123",
  "retadreso": "newuser@example.com"
}
```

**Réponse succès (201)**
```json
{
  "message": "Compte créé avec succès",
  "data": {
    "id": 456,
    "enirnomo": "newuser",
    "retadreso": "newuser@example.com",
    "aktivigo": "a1b2c3d4e5f6...",
    "aktivigita": false
  }
}
```

**Règles de validation**
- Identique à `/api/auth/register`

**Erreurs**
- `400` : Validation échouée
- `409` : Email ou identifiant déjà utilisé

---

#### PATCH /api/personoj/{id}

Met à jour partiellement un utilisateur. L'utilisateur peut modifier son propre profil, les admins peuvent modifier tous les profils.

**Requête**
```http
PATCH /api/personoj/123
Authorization: Bearer {jwt_token}
Content-Type: application/json

{
  "personnomo": "Jean",
  "familinomo": "Dupont",
  "urbo": "Lyon",
  "lando": "FR",
  "sekso": "M",
  "naskigxdato": "1990-05-20",
  "videbla": true,
  "stop_info": false
}
```

**Champs modifiables (utilisateur normal)**
- `sekso`, `familinomo`, `personnomo`, `enirnomo`
- `adreso1`, `adreso2`, `posxtkodo`, `urbo`, `lando`
- `latitudo`, `longitudo`
- `retadreso`, `naskigxdato`
- `kialo`, `noto`, `maksimumo`, `kurso`
- `videbla`, `stop_info`, `stop_rappel`
- `saviezvous`
- `pasvorto` (sera hashé en MD5)

**Champs modifiables (admin uniquement)**
- `rajtoj` (P/S/K/A/I)
- `aktivigita` (boolean)
- `aktivigo` (string)

**Règles de validation**
- `sekso` : "M", "I" ou null
- `naskigxdato` : Format YYYY-MM-DD
- `retadreso` : Format valide + unicité
- `enirnomo` : Sans "@" + unicité
- `rajtoj` : P/S/K/A/I uniquement
- `videbla`, `stop_info`, `stop_rappel` : Convertis en "J"/"N"

**Réponse succès (200)**
```json
{
  "message": "Utilisateur modifié avec succès",
  "data": {
    "id": 123,
    "enirnomo": "username",
    "rajtoj": "S",
    "rajtoj_label": "Étudiant",
    "retadreso": "user@example.com",
    "personnomo": "Jean",
    "familinomo": "Dupont",
    ...
  }
}
```

**Erreurs**
- `400` : Validation échouée ou champ non modifiable
- `401` : Non authentifié
- `403` : Accès refusé ou tentative de modification d'un champ admin
- `404` : Utilisateur non trouvé
- `409` : Email ou identifiant déjà utilisé

---

#### DELETE /api/personoj/{id}

Supprime un utilisateur. L'utilisateur peut supprimer son propre compte, les admins peuvent supprimer d'autres comptes (sauf le leur).

**Requête**
```http
DELETE /api/personoj/123
Authorization: Bearer {jwt_token}
```

**Réponse succès (200)**
```json
{
  "message": "Utilisateur supprimé avec succès",
  "data": {
    "id": 123,
    "enirnomo": "username",
    "retadreso": "user@example.com"
  }
}
```

**Règles de suppression**
- Un utilisateur peut supprimer son propre compte
- Un admin peut supprimer d'autres comptes
- **Un admin ne peut PAS supprimer son propre compte**

**Erreurs**
- `401` : Non authentifié
- `403` : Accès refusé ou admin tentant de supprimer son compte
- `404` : Utilisateur non trouvé

---

### Tekstoj (Textes)

#### GET /api/tekstoj

Liste tous les textes avec filtres et pagination. Si l'utilisateur est authentifié, inclut les informations de marque-pages et sessions de lecture.

**Requête**
```http
GET /api/tekstoj?aktiva=1&nivelo_min=2&nivelo_max=4&limit=10&offset=0
Authorization: Bearer {jwt_token} (optionnel)
```

**Paramètres query**

| Paramètre | Type | Description | Défaut |
|-----------|------|-------------|--------|
| `aktiva` | int/string | Filtre par statut (0, 1, "all") | 1 |
| `auxtoro` | string | Recherche par auteur (LIKE) | - |
| `titolo` | string | Recherche par titre (LIKE) | - |
| `kolekto` | string | Filtre par collection | - |
| `nivelo_min` | int | Niveau minimum | - |
| `nivelo_max` | int | Niveau maximum | - |
| `vortoj_min` | int | Nombre de mots minimum | - |
| `vortoj_max` | int | Nombre de mots maximum | - |
| `etikedoj` | string | Recherche dans tags (LIKE) | - |
| `q` | string | Recherche générale (titre, auteur, tags, lecteur) | - |
| `has_sono` | string | "true" pour textes avec audio | - |
| `sort` | string | Champ de tri (id, titolo, nivelo, vortoj, ekdato) | id |
| `order` | string | Ordre (ASC, DESC) | ASC |
| `limit` | int | Résultats par page (1-100) | 10 |
| `offset` | int | Décalage pour pagination | 0 |

**Réponse succès (200) - Non authentifié**
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
    "count": 1
  }
}
```

**Réponse succès (200) - Authentifié**

Si l'utilisateur est authentifié, les champs suivants sont ajoutés pour chaque texte :

```json
{
  "data": [
    {
      "id": "gerda01",
      "titolo": "Gerda malaperis! - Ĉapitro 1",
      ...
      "legotajxoj_kreita_je": "2024-08-01 10:00:00",
      "legitajxoj_komenc_timestamp": "2024-08-10 14:30:00",
      "legitajxoj_fin_timestamp": "2024-08-10 15:00:00",
      "legitajxoj_legad_tempo": 1800,
      "legitajxoj_noto": 4,
      "legitajxoj_komentaro": "Très intéressant",
      "legitajxoj_kreita_je": "2024-08-10 14:30:00",
      "legitajxoj_modifita_je": "2024-08-10 15:00:00"
    }
  ],
  "pagination": {...}
}
```

**Notes**
- Le champ `enhavo` (contenu) n'est **pas** retourné dans la liste
- Les champs `legitajxoj_*` et `legotajxoj_*` ne sont présents que si l'utilisateur a des données correspondantes

---

#### GET /api/tekstoj/{id}

Récupère un texte spécifique avec son contenu complet.

**Requête**
```http
GET /api/tekstoj/gerda01
```

**Réponse succès (200)**
```json
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
  "arthur_id": 123,
  "aktiva": 1,
  "ekdato": "2020-01-15 10:00:00",
  "enhavo": [
    {
      "type": "paragraph",
      "content": "Gerda, knabino de dek kvin jaroj, loĝis en urbeto..."
    },
    {
      "type": "paragraph",
      "content": "Unu tagon ŝi ne venis hejmen..."
    }
  ]
}
```

**Notes**
- Le champ `enhavo` est automatiquement parsé en JSON si valide
- Si `enhavo` n'est pas du JSON valide, il est retourné tel quel (string)

**Erreurs**
- `404` : Texte non trouvé

---

#### POST /api/tekstoj

Crée un nouveau texte. **Requiert authentification Bearer token interne.**

**Requête**
```http
POST /api/tekstoj
Authorization: Bearer {internal_access_token}
Content-Type: application/json

{
  "id": "custom01",
  "titolo": "Mon nouveau texte",
  "auxtoro": "Jean Dupont",
  "fonto": "Source originale",
  "nivelo": 3,
  "vortoj": 500,
  "kolekto": "modern",
  "etikedoj": "science,fiction",
  "sono": "audio/custom01.mp3",
  "enhavo": [
    {"type": "paragraph", "content": "Premier paragraphe..."},
    {"type": "paragraph", "content": "Deuxième paragraphe..."}
  ],
  "aktiva": 1,
  "arthur_id": 456
}
```

**Champs**

| Champ | Type | Requis | Description |
|-------|------|--------|-------------|
| `id` | string | ✓ | Identifiant unique du texte |
| `titolo` | string | ✓ | Titre du texte |
| `auxtoro` | string | ✓ | Auteur |
| `fonto` | string | - | Source/origine |
| `nivelo` | int | - | Niveau de difficulté (1-5) |
| `vortoj` | int | - | Nombre de mots |
| `kolekto` | string | - | Collection/catégorie |
| `etikedoj` | string | - | Tags (séparés par virgules) |
| `sono` | string | - | Chemin fichier audio |
| `enhavo` | array/string | - | Contenu structuré (JSON) |
| `aktiva` | int | - | Statut publié (0 ou 1, défaut: 0) |
| `arthur_id` | int | - | ID externe système Arthur |

**Réponse succès (201)**
```json
{
  "id": "custom01",
  "message": "Teksto créé avec succès"
}
```

**Erreurs**
- `400` : Validation échouée (champs requis manquants)
- `401` : Token d'authentification invalide ou manquant
- `409` : Un texte avec cet ID existe déjà

---

#### PUT /api/tekstoj/{id}

Mise à jour complète d'un texte. **Requiert authentification Bearer token interne.**

**Requête**
```http
PUT /api/tekstoj/custom01
Authorization: Bearer {internal_access_token}
Content-Type: application/json

{
  "titolo": "Titre modifié",
  "auxtoro": "Jean Dupont",
  "fonto": "Nouvelle source",
  "nivelo": 4,
  "vortoj": 600,
  "kolekto": "modern",
  "etikedoj": "science,fiction,aventure",
  "sono": "audio/custom01_v2.mp3",
  "enhavo": [...],
  "aktiva": 1,
  "leganto": "Marie Martin",
  "arthur_id": 456
}
```

**Champs requis** : `titolo`, `auxtoro`

**Réponse succès (200)**
```json
{
  "id": "custom01",
  "message": "Teksto mis à jour avec succès"
}
```

**Erreurs**
- `400` : Champs requis manquants pour mise à jour complète
- `401` : Token d'authentification invalide
- `404` : Texte non trouvé

---

#### PATCH /api/tekstoj/{id}

Mise à jour partielle d'un texte. **Requiert authentification Bearer token interne.**

**Requête**
```http
PATCH /api/tekstoj/custom01
Authorization: Bearer {internal_access_token}
Content-Type: application/json

{
  "nivelo": 5,
  "aktiva": 1,
  "etikedoj": "science,fiction,aventure,classique"
}
```

**Champs modifiables** : `titolo`, `auxtoro`, `fonto`, `nivelo`, `vortoj`, `kolekto`, `etikedoj`, `sono`, `enhavo`, `aktiva`, `leganto`, `arthur_id`

**Réponse succès (200)**
```json
{
  "id": "custom01",
  "message": "Teksto mis à jour avec succès"
}
```

**Si aucune modification**
```json
{
  "id": "custom01",
  "message": "Aucune modification effectuée"
}
```

**Erreurs**
- `400` : Aucun champ à mettre à jour
- `401` : Token d'authentification invalide
- `404` : Texte non trouvé

---

### Legitajxoj (Sessions de lecture)

#### POST /api/legitajxoj

Démarre une nouvelle session de lecture ou retourne la session existante (idempotent).

**Requête**
```http
POST /api/legitajxoj
Authorization: Bearer {jwt_token}
Content-Type: application/json

{
  "teksto_id": "gerda01",
  "komenc_timestamp": "2024-08-13T15:30:00Z"
}
```

**Champs**

| Champ | Type | Requis | Description |
|-------|------|--------|-------------|
| `teksto_id` | string | ✓ | ID du texte |
| `komenc_timestamp` | string | ✓ | Date/heure de début (ISO 8601) |

**Réponse succès (201)**
```json
{
  "legitajxo_id": 456,
  "persono_id": 123,
  "teksto_id": "gerda01",
  "komenc_timestamp": "2024-08-13T15:30:00Z"
}
```

**Notes**
- Si une session existe déjà pour ce `teksto_id` et cet utilisateur, elle est retournée (pas de création)
- Le timestamp est converti en format MySQL (Y-m-d H:i:s) pour le stockage

**Erreurs**
- `400` : Paramètres manquants ou timestamp invalide
- `401` : Non authentifié

---

#### GET /api/legitajxoj

Liste toutes les sessions de lecture de l'utilisateur connecté.

**Requête**
```http
GET /api/legitajxoj
Authorization: Bearer {jwt_token}
```

**Réponse succès (200)**
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
      "komentaro": "Très intéressant, j'ai appris beaucoup",
      "kreita_je": "2024-08-13 15:30:00",
      "modifita_je": "2024-08-13 16:00:00",
      "titolo": "Gerda malaperis! - Ĉapitro 1",
      "auxtoro": "Claude Piron",
      "fonto": "Gerda malaperis!",
      "nivelo": 1,
      "vortoj": 450,
      "kolekto": "gerda",
      "etikedoj": "komencanto,mistero",
      "sono": "audio/gerda01.mp3",
      "leganto": "Anna Johnson",
      "aktiva": 1
    }
  ]
}
```

**Notes**
- Inclut les données du texte associé (JOIN avec table `tekstoj`)
- Ordonné par `modifita_je DESC`

**Erreurs**
- `401` : Non authentifié

---

#### PATCH /api/legitajxoj/{teksto_id}

Met à jour une session de lecture en utilisant le `teksto_id`.

**Requête**
```http
PATCH /api/legitajxoj/gerda01
Authorization: Bearer {jwt_token}
Content-Type: application/json

{
  "fin_timestamp": "2024-08-13T16:00:00Z",
  "legad_tempo": 1800,
  "noto": 4,
  "komentaro": "Très intéressant, j'ai appris beaucoup"
}
```

**Champs modifiables**

| Champ | Type | Description | Validation |
|-------|------|-------------|------------|
| `fin_timestamp` | string | Date/heure de fin (ISO 8601) | Format ISO 8601 |
| `legad_tempo` | int | Temps de lecture en secondes | Nombre positif |
| `noto` | int | Note de 1 à 5 | Entre 1 et 5 |
| `komentaro` | string | Commentaire libre | - |

**Réponse succès (200)**
```json
{
  "legitajxo_id": 456,
  "teksto_id": "gerda01",
  "updated_data": {
    "legad_tempo": 1800,
    "noto": 4,
    "komentaro": "Très intéressant, j'ai appris beaucoup",
    "fin_timestamp": "2024-08-13 16:00:00",
    "modifita_je": "2024-08-13 16:05:00"
  }
}
```

**Erreurs**
- `400` : Validation échouée ou aucun champ à mettre à jour
- `401` : Non authentifié
- `404` : Session de lecture non trouvée pour ce texte

---

### Legotajxoj (Marque-pages)

#### GET /api/legotajxoj

Liste tous les marque-pages de l'utilisateur connecté.

**Requête**
```http
GET /api/legotajxoj
Authorization: Bearer {jwt_token}
```

**Réponse succès (200)**
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
      "titolo": "Gerda malaperis! - Ĉapitro 1",
      "auxtoro": "Claude Piron",
      "fonto": "Gerda malaperis!",
      "nivelo": 1,
      "vortoj": 450,
      "kolekto": "gerda",
      "etikedoj": "komencanto,mistero",
      "sono": "audio/gerda01.mp3",
      "leganto": "Anna Johnson",
      "aktiva": 1
    }
  ]
}
```

**Notes**
- Inclut les données du texte associé (JOIN avec table `tekstoj`)
- Ordonné par `modifita_je DESC`

**Erreurs**
- `401` : Non authentifié

---

#### POST /api/legotajxoj

Ajoute un marque-page.

**Requête**
```http
POST /api/legotajxoj
Authorization: Bearer {jwt_token}
Content-Type: application/json

{
  "teksto_id": "gerda01"
}
```

**Réponse succès (201)**
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
- `400` : Paramètre `teksto_id` manquant ou vide
- `401` : Non authentifié
- `409` : Marque-page déjà existant pour cet utilisateur et ce texte

---

#### DELETE /api/legotajxoj/{teksto_id}

Supprime un marque-page.

**Requête**
```http
DELETE /api/legotajxoj/gerda01
Authorization: Bearer {jwt_token}
```

**Réponse succès (200)**
```json
{
  "status": "success",
  "message": "Legotajxo supprimé avec succès",
  "persono_id": 123,
  "teksto_id": "gerda01"
}
```

**Erreurs**
- `400` : Paramètre `teksto_id` manquant dans l'URL
- `401` : Non authentifié
- `404` : Marque-page non trouvé

---

### Kontakto (Contact)

#### POST /api/kontakto

Envoie un message de contact aux administrateurs.

**Requête**
```http
POST /api/kontakto
Content-Type: application/json

{
  "sendinto": "user@example.com",
  "temo": "Question sur le cours",
  "komento": "Bonjour, j'ai une question concernant...",
  "reagopagxo": "https://ikurso.example.com/page"
}
```

**Champs**

| Champ | Type | Requis | Description |
|-------|------|--------|-------------|
| `sendinto` | string | ✓ | Email de l'expéditeur |
| `temo` | string | ✓ | Sujet du message |
| `komento` | string | ✓ | Contenu du message |
| `reagopagxo` | string | - | URL de la page d'origine |

**Réponse succès (200)**
```json
{
  "status": "success",
  "sendinto": "user@example.com",
  "temo": "Question sur le cours"
}
```

**Validations**
- Email valide (vérification MX)
- Sujet et commentaire non vides
- Détection anti-spam (mots interdits, URLs)

**Mots/patterns interdits (spam)**
- " girl ", " sex ", " money ", " virginity "
- "порно" (cyrillique)
- "http://", "https://"

**Notes**
- Le message est envoyé à tous les administrateurs (rajtoj = 'A')
- L'expéditeur reçoit également une copie du message

**Erreurs**
- `400` : Validation échouée (email invalide, champs vides, spam détecté)
- `500` : Erreur lors de l'envoi de l'email

---

## Codes d'erreur

| Code | Signification | Usage |
|------|---------------|-------|
| 200 | OK | Succès (GET, PATCH, DELETE) |
| 201 | Created | Ressource créée (POST) |
| 400 | Bad Request | Validation échouée, paramètres invalides |
| 401 | Unauthorized | Non authentifié ou token invalide |
| 403 | Forbidden | Accès refusé (droits insuffisants, compte non activé) |
| 404 | Not Found | Ressource non trouvée |
| 405 | Method Not Allowed | Méthode HTTP non supportée pour cet endpoint |
| 409 | Conflict | Ressource déjà existante (doublon) |
| 500 | Internal Server Error | Erreur serveur |

### Format des erreurs

```json
{
  "error": "Message d'erreur descriptif"
}
```

---

## Modèles de données

### Persono (Utilisateur)

```json
{
  "id": 123,
  "enirnomo": "username",
  "rajtoj": "S",
  "rajtoj_label": "Étudiant",
  "retadreso": "user@example.com",
  "personnomo": "John",
  "familinomo": "Doe",
  "aktivigita": true,
  "ekdato": "2024-01-15",
  "lasteniro": "2024-08-13 15:30:00",
  "sekso": "M",
  "adreso1": "123 Rue de la Paix",
  "adreso2": "Apt 4B",
  "posxtkodo": "75001",
  "urbo": "Paris",
  "lando": "FR",
  "latitudo": 48.8566,
  "longitudo": 2.3522,
  "naskigxdato": "1990-05-20",
  "kialo": "Apprendre l'espéranto",
  "noto": "Notes internes",
  "maksimumo": 0,
  "kurso": "CG",
  "videbla": true,
  "stop_info": false,
  "stop_rappel": false,
  "aktivigo": "a1b2c3d4e5f6...",
  "saviezvous": 1
}
```

### Teksto (Texte)

```json
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
  "arthur_id": 123,
  "aktiva": 1,
  "ekdato": "2020-01-15 10:00:00",
  "enhavo": [
    {"type": "paragraph", "content": "..."}
  ]
}
```

### Legitajxo (Session de lecture)

```json
{
  "id": 456,
  "persono_id": 123,
  "teksto_id": "gerda01",
  "komenc_timestamp": "2024-08-13 15:30:00",
  "fin_timestamp": "2024-08-13 16:00:00",
  "legad_tempo": 1800,
  "noto": 4,
  "komentaro": "Très intéressant",
  "kreita_je": "2024-08-13 15:30:00",
  "modifita_je": "2024-08-13 16:00:00"
}
```

### Legotajxo (Marque-page)

```json
{
  "id": 789,
  "persono_id": 123,
  "teksto_id": "gerda01",
  "kreita_je": "2024-08-01 10:00:00",
  "modifita_je": "2024-08-01 10:00:00"
}
```

---

## Notes techniques

### Format de dates

- **Input** : ISO 8601 (`2024-08-13T15:30:00Z`)
- **Stockage** : MySQL DATETIME (`2024-08-13 15:30:00`)
- **Output** : Format MySQL conservé

### Encodage JSON

Tous les endpoints retournent du JSON encodé avec `JSON_UNESCAPED_UNICODE` pour supporter les caractères espéranto (ĉ, ĝ, ĥ, ĵ, ŝ, ŭ).

### Headers

```
Content-Type: application/json; charset=utf-8
```

### CORS

Les endpoints `LegotajxojAPI` incluent des headers CORS :
```
Access-Control-Allow-Origin: *
Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS
Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With
```

### Sécurité des mots de passe

⚠️ **Important** : L'API utilise actuellement MD5 pour le hashing des mots de passe (système legacy). Il est recommandé de migrer vers bcrypt ou argon2 pour de nouveaux développements.

### Logging

Toutes les actions importantes sont loggées dans la table `protokolo` :
- Connexions/déconnexions
- Créations de compte
- Modifications de sessions de lecture
- Messages de contact

---

**Version** : 1.0
**Dernière mise à jour** : 2024-08-18
