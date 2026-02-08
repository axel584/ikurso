# CLAUDE.md - API Ikurso

Ce fichier fournit des instructions à Claude Code lors du travail sur l'API REST du répertoire `/api`.

## Vue d'ensemble de l'API

L'API Ikurso est une API REST construite en PHP pour fournir un accès programmatique à la plateforme d'apprentissage de l'espéranto. Elle utilise l'authentification JWT et expose plusieurs endpoints pour la gestion des utilisateurs, des textes, des sessions de lecture et du contact.

## Architecture de l'API

### Structure des fichiers

```
/api/
├── AuthentificationAPI.php   # Authentification (login, register, logout, me)
├── JWTAuth.php               # Utilitaire d'authentification JWT
├── PersonojAPI.php           # Gestion des utilisateurs (CRUD)
├── TekstojAPI.php           # Gestion des textes (CRUD avec auth token)
├── LegitajxojAPI.php        # Sessions de lecture (tracking)
├── LegotajxojAPI.php        # Marque-pages (favoris)
└── KontaktoAPI.php          # Formulaire de contact
```

### Point d'entrée

L'API est accessible via un routeur central (généralement dans le répertoire racine) qui route les requêtes vers les classes appropriées en fonction du path.

Format des URLs : `https://domaine.com/api/{resource}/{id?}/{action?}`

## Authentification

### Système JWT

L'API utilise JWT (JSON Web Tokens) pour l'authentification avec les caractéristiques suivantes :

- **Algorithme** : HS256
- **Secret** : Variable `$motDePasse` du fichier `config.php`
- **Storage** : Cookie `access_token` + Header `Authorization: Bearer {token}`
- **Durée** : 1 an (86400*365 secondes)

### Payload JWT

```json
{
  "enirnomo": "username",
  "retadreso": "email@example.com",
  "persono_id": 123,
  "rajto": "S",
  "persononomo": "Firstname",
  "familinomo": "Lastname"
}
```

### Niveaux de droits (rajtoj)

- `P` : Nouveau (non inscrit) - "Prospect"
- `S` : Étudiant - "Studanto"
- `K` : Correcteur - "Korektanto"
- `A` : Administrateur - "Administranto"
- `I` : Inactif

## Endpoints disponibles

### 1. Authentification (`AuthentificationAPI.php`)

#### POST `/api/auth/login`
Connexion utilisateur.

**Body** :
```json
{
  "identigilo": "username",
  "pasvorto": "password"
}
```

**Réponse (200)** :
```json
{
  "message": "Authentification réussie",
  "user": {
    "id": 123,
    "enirnomo": "username",
    "rajtoj": "S",
    "retadreso": "email@example.com",
    "personnomo": "John",
    "familinomo": "Doe"
  },
  "access_token": "eyJhbGc...",
  "redirect_url": "personinformoj.php"
}
```

**Codes erreur** :
- 401 : Identifiant introuvable ou mot de passe incorrect
- 403 : Compte non validé

#### POST `/api/auth/register`
Inscription utilisateur.

**Body** :
```json
{
  "enirnomo": "username",
  "pasvorto": "password",
  "retadreso": "email@example.com"
}
```

**Réponse (201)** :
```json
{
  "message": "Compte créé avec succès. Un email d'activation a été envoyé à votre adresse.",
  "user_id": 123
}
```

**Validations** :
- L'identifiant ne peut pas contenir "@"
- L'email doit être valide (vérification MX)
- L'email et l'identifiant doivent être uniques

#### POST `/api/auth/logout`
Déconnexion utilisateur (supprime le cookie).

**Réponse (200)** :
```json
{
  "message": "Déconnexion réussie"
}
```

#### GET `/api/auth/me`
Récupère les informations de l'utilisateur connecté.

**Auth** : JWT requis

**Réponse (200)** :
```json
{
  "user": {
    "id": 123,
    "enirnomo": "username",
    "rajtoj": "S",
    "retadreso": "email@example.com",
    "personnomo": "John",
    "familinomo": "Doe",
    "aktivigita": true,
    "ekdato": "2024-01-01 10:00:00",
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

### 2. Utilisateurs (`PersonojAPI.php`)

#### GET `/api/personoj`
Liste tous les utilisateurs (admin uniquement).

**Auth** : JWT + droits administrateur requis

**Paramètres query** :
- `page` : Numéro de page (défaut: 1)
- `limit` : Résultats par page (1-100, défaut: 20)
- `search` : Recherche dans enirnomo, personnomo, familinomo, retadreso
- `rajtoj` : Filtre par droits (P, S, K, A, I)

**Réponse (200)** :
```json
{
  "data": [...],
  "pagination": {
    "page": 1,
    "limit": 20,
    "total_count": 150,
    "total_pages": 8,
    "has_next": true,
    "has_previous": false
  },
  "filters": {
    "search": "",
    "rajtoj": ""
  }
}
```

#### GET `/api/personoj/{id}`
Récupère un utilisateur spécifique.

**Auth** : JWT requis (propriétaire ou admin)

**Réponse (200)** :
```json
{
  "data": {
    "id": 123,
    "enirnomo": "username",
    "rajtoj": "S",
    "rajtoj_label": "Étudiant",
    "retadreso": "email@example.com",
    "personnomo": "John",
    "familinomo": "Doe",
    "aktivigita": true,
    "videbla": true,
    "stop_info": false,
    "stop_rappel": false,
    ...
  }
}
```

#### POST `/api/personoj`
Créer un nouvel utilisateur (public, pas d'auth requise).

**Body** :
```json
{
  "enirnomo": "username",
  "pasvorto": "password",
  "retadreso": "email@example.com"
}
```

**Réponse (201)** :
```json
{
  "message": "Compte créé avec succès",
  "data": {
    "id": 123,
    "enirnomo": "username",
    "retadreso": "email@example.com",
    "aktivigo": "abc123...",
    "aktivigita": false
  }
}
```

#### PATCH `/api/personoj/{id}`
Mettre à jour un utilisateur (mise à jour partielle).

**Auth** : JWT requis (propriétaire ou admin)

**Body** (tous les champs sont optionnels) :
```json
{
  "personnomo": "John",
  "familinomo": "Doe",
  "sekso": "M",
  "adreso1": "123 rue",
  "urbo": "Paris",
  "lando": "FR",
  "naskigxdato": "1990-01-01",
  "pasvorto": "newpassword",
  "videbla": true,
  "stop_info": false,
  "stop_rappel": false
}
```

**Champs réservés aux admins** :
- `rajtoj`
- `aktivigita`
- `aktivigo`

**Validations** :
- `sekso` : "M" ou "I" ou null
- `naskigxdato` : Format YYYY-MM-DD
- `retadreso` : Validation email + unicité
- `enirnomo` : Sans "@" + unicité

#### DELETE `/api/personoj/{id}`
Supprimer un utilisateur.

**Auth** : JWT requis (propriétaire ou admin)

**Restrictions** :
- Un utilisateur peut supprimer son propre compte
- Un admin peut supprimer d'autres comptes
- Un admin ne peut PAS supprimer son propre compte

**Réponse (200)** :
```json
{
  "message": "Utilisateur supprimé avec succès",
  "data": {
    "id": 123,
    "enirnomo": "username",
    "retadreso": "email@example.com"
  }
}
```

### 3. Textes (`TekstojAPI.php`)

#### GET `/api/tekstoj`
Liste tous les textes avec filtres.

**Auth** : Optionnelle (enrichit les données si connecté)

**Paramètres query** :
- `aktiva` : Filtre par statut (0, 1, ou "all", défaut: 1)
- `auxtoro` : Recherche par auteur (LIKE)
- `titolo` : Recherche par titre (LIKE)
- `kolekto` : Filtre par collection
- `nivelo_min` / `nivelo_max` : Fourchette de niveau
- `vortoj_min` / `vortoj_max` : Fourchette de nombre de mots
- `etikedoj` : Recherche dans les tags (LIKE)
- `q` : Recherche générale (titre, auteur, tags, lecteur)
- `has_sono` : "true" pour filtrer les textes avec audio
- `sort` : Champ de tri (id, titolo, nivelo, vortoj, ekdato)
- `order` : Ordre (ASC ou DESC, défaut: ASC)
- `limit` : Résultats par page (1-100, défaut: 10)
- `offset` : Décalage (défaut: 0)

**Réponse (200)** :
```json
{
  "data": [
    {
      "id": "abc123",
      "titolo": "La Granda Aventuro",
      "auxtoro": "Zamenhof",
      "fonto": "Fundamenta Krestomatio",
      "nivelo": 3,
      "vortoj": 450,
      "kolekto": "klasikaj",
      "etikedoj": "aventuro,naturo",
      "sono": "audio/aventuro.mp3",
      "leganto": "Maria Smith",
      "arthur_id": 789
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

**Notes** :
- Si l'utilisateur est connecté (JWT), les réponses incluent `legotajxoj_*` et `legitajxoj_*` (marque-pages et sessions de lecture)
- Le champ `enhavo` n'est PAS retourné dans la liste

#### GET `/api/tekstoj/{id}`
Récupère un texte spécifique avec le contenu complet.

**Auth** : Non requise

**Réponse (200)** :
```json
{
  "id": "abc123",
  "titolo": "La Granda Aventuro",
  "auxtoro": "Zamenhof",
  "enhavo": [
    {"type": "paragraph", "content": "Ĉi tiu estas la unua paragrafo..."},
    {"type": "paragraph", "content": "Kaj la dua..."}
  ],
  "nivelo": 3,
  "vortoj": 450,
  ...
}
```

**Notes** :
- Le champ `enhavo` est automatiquement parsé en JSON si valide

#### POST `/api/tekstoj`
Créer un nouveau texte.

**Auth** : Bearer token requis (variable `$INTERNAL_ACCESS_TOKEN`)

**Body** :
```json
{
  "id": "abc123",
  "titolo": "Titre du texte",
  "auxtoro": "Auteur",
  "fonto": "Source (optionnel)",
  "nivelo": 3,
  "vortoj": 450,
  "kolekto": "klasikaj",
  "etikedoj": "tag1,tag2",
  "sono": "audio/file.mp3",
  "enhavo": [
    {"type": "paragraph", "content": "..."}
  ],
  "aktiva": 1,
  "arthur_id": 789
}
```

**Champs requis** : `id`, `titolo`, `auxtoro`

**Réponse (201)** :
```json
{
  "id": "abc123",
  "message": "Teksto créé avec succès"
}
```

#### PUT `/api/tekstoj/{id}`
Mise à jour complète d'un texte.

**Auth** : Bearer token requis

**Body** : Mêmes champs que POST (tous requis sauf optionnels)

**Réponse (200)** :
```json
{
  "id": "abc123",
  "message": "Teksto mis à jour avec succès"
}
```

#### PATCH `/api/tekstoj/{id}`
Mise à jour partielle d'un texte.

**Auth** : Bearer token requis

**Body** : N'importe quel sous-ensemble des champs autorisés

**Champs autorisés** : `titolo`, `auxtoro`, `fonto`, `nivelo`, `vortoj`, `kolekto`, `etikedoj`, `sono`, `enhavo`, `aktiva`, `leganto`, `arthur_id`

### 4. Sessions de lecture (`LegitajxojAPI.php`)

#### POST `/api/legitajxoj`
Démarrer une session de lecture.

**Auth** : JWT requis

**Body** :
```json
{
  "teksto_id": "abc123",
  "komenc_timestamp": "2024-08-13T15:30:00Z"
}
```

**Notes** :
- Idempotent : si une session existe déjà, elle est retournée
- `komenc_timestamp` : Format ISO 8601

**Réponse (201)** :
```json
{
  "legitajxo_id": 456,
  "persono_id": 123,
  "teksto_id": "abc123",
  "komenc_timestamp": "2024-08-13T15:30:00Z"
}
```

#### GET `/api/legitajxoj`
Liste toutes les sessions de lecture de l'utilisateur.

**Auth** : JWT requis

**Réponse (200)** :
```json
{
  "status": "success",
  "count": 3,
  "legitajxoj": [
    {
      "id": 456,
      "teksto_id": "abc123",
      "komenc_timestamp": "2024-08-13T15:30:00",
      "fin_timestamp": "2024-08-13T16:00:00",
      "legad_tempo": 1800,
      "noto": 4,
      "komentaro": "Très intéressant",
      "kreita_je": "2024-08-13 15:30:00",
      "modifita_je": "2024-08-13 16:00:00",
      "titolo": "La Granda Aventuro",
      "auxtoro": "Zamenhof",
      ...
    }
  ]
}
```

#### PATCH `/api/legitajxoj/{teksto_id}`
Mettre à jour une session de lecture (par teksto_id).

**Auth** : JWT requis

**Body** (tous les champs sont optionnels) :
```json
{
  "fin_timestamp": "2024-08-13T16:00:00Z",
  "legad_tempo": 1800,
  "noto": 4,
  "komentaro": "Commentaire..."
}
```

**Validations** :
- `legad_tempo` : Nombre positif (en secondes)
- `noto` : Nombre entre 1 et 5
- `fin_timestamp` : Format ISO 8601

**Réponse (200)** :
```json
{
  "legitajxo_id": 456,
  "teksto_id": "abc123",
  "updated_data": {
    "legad_tempo": 1800,
    "noto": 4,
    "komentaro": "...",
    "fin_timestamp": "2024-08-13 16:00:00",
    "modifita_je": "2024-08-13 16:05:00"
  }
}
```

### 5. Marque-pages (`LegotajxojAPI.php`)

#### GET `/api/legotajxoj`
Liste tous les marque-pages de l'utilisateur.

**Auth** : JWT requis

**Réponse (200)** :
```json
{
  "status": "success",
  "count": 5,
  "legotajxoj": [
    {
      "id": 789,
      "teksto_id": "abc123",
      "kreita_je": "2024-08-13 15:00:00",
      "modifita_je": "2024-08-13 15:00:00",
      "titolo": "La Granda Aventuro",
      "auxtoro": "Zamenhof",
      ...
    }
  ]
}
```

#### POST `/api/legotajxoj`
Ajouter un marque-page.

**Auth** : JWT requis

**Body** :
```json
{
  "teksto_id": "abc123"
}
```

**Réponse (201)** :
```json
{
  "status": "success",
  "message": "Legotajxo ajouté avec succès",
  "id": 789,
  "persono_id": 123,
  "teksto_id": "abc123"
}
```

**Codes erreur** :
- 409 : Marque-page déjà existant

#### DELETE `/api/legotajxoj/{teksto_id}`
Supprimer un marque-page.

**Auth** : JWT requis

**Réponse (200)** :
```json
{
  "status": "success",
  "message": "Legotajxo supprimé avec succès",
  "persono_id": 123,
  "teksto_id": "abc123"
}
```

### 6. Contact (`KontaktoAPI.php`)

#### POST `/api/kontakto`
Envoyer un message de contact.

**Auth** : Non requise

**Body** :
```json
{
  "sendinto": "email@example.com",
  "temo": "Sujet du message",
  "komento": "Contenu du message...",
  "reagopagxo": "page_url (optionnel)"
}
```

**Validations** :
- Email valide (vérification MX)
- Détection anti-spam (mots interdits, URLs)
- Champs non vides

**Réponse (200)** :
```json
{
  "status": "success",
  "sendinto": "email@example.com",
  "temo": "Sujet du message"
}
```

**Notes** :
- Le message est envoyé à tous les administrateurs + l'expéditeur
- Les URLs (http://, https://) sont détectées comme spam

## Gestion des erreurs

### Format des réponses d'erreur

```json
{
  "error": "Message d'erreur descriptif"
}
```

### Codes HTTP utilisés

- `200` : Succès (GET, PATCH, DELETE)
- `201` : Création réussie (POST)
- `400` : Mauvaise requête (validation échouée)
- `401` : Non authentifié
- `403` : Accès refusé (droits insuffisants ou compte non activé)
- `404` : Ressource non trouvée
- `405` : Méthode HTTP non autorisée
- `409` : Conflit (ressource déjà existante)
- `500` : Erreur interne du serveur

### Mode DEBUG

Si `DEBUG_MODE` est activé (dans `config.php`), les messages d'erreur incluent des détails techniques (stack traces, messages PDO). En production, les messages sont génériques.

## Sécurité

### Authentification JWT

- Utilisée pour protéger les endpoints utilisateurs
- Token stocké dans cookie `access_token` (sécurisé, 1 an)
- Validation via `JWTAuth::validateJWT()`
- Récupération ID utilisateur via `JWTAuth::getPersonoIdFromJWT()`

### Bearer Token

- Utilisé pour les endpoints TekstojAPI (POST/PUT/PATCH)
- Variable globale `$INTERNAL_ACCESS_TOKEN` dans `config.php`
- Format : `Authorization: Bearer {token}`

### Validation des emails

- Vérification du format avec regex
- Vérification MX record
- Test de connexion SMTP (port 25)

### Détection anti-spam

Mots interdits dans KontaktoAPI :
- " girl ", " sex ", " money ", " virginity "
- "порно" (cyrillique)
- "http://", "https://"

### Hashing des mots de passe

- **⚠️ MD5 utilisé** : Système legacy, non recommandé pour de nouveaux projets
- Passwords stockés dans `personoj.pasvorto_md5`
- À migrer vers bcrypt/argon2 à l'avenir

### Protection CORS

- LegotajxojAPI implémente des headers CORS
- `Access-Control-Allow-Origin: *`
- Support des requêtes OPTIONS (preflight)

### Logging

Table `protokolo` pour tracer les actions :
- Connexions/déconnexions
- Créations de compte
- Activations
- Messages de contact
- Modifications de sessions

## Base de données

### Tables principales utilisées par l'API

- `personoj` : Utilisateurs
- `tekstoj` : Textes (contenu)
- `legitajxoj` : Sessions de lecture (tracking)
- `legotajxoj` : Marque-pages
- `nuna_kurso` : Cours actuel de l'étudiant
- `protokolo` : Logs d'activité

### Colonnes importantes

#### personoj
- `aktivigita` : 0 ou 1 (compte validé)
- `rajtoj` : P/S/K/A/I (niveau d'accès)
- `pasvorto_md5` : Hash MD5 du mot de passe
- `aktivigo` : Clé d'activation unique

#### tekstoj
- `id` : VARCHAR (non auto-increment)
- `enhavo` : JSON encodé (structure du texte)
- `aktiva` : 0 ou 1 (publié ou brouillon)
- `arthur_id` : ID externe (système Arthur)

#### legitajxoj
- `persono_id` + `teksto_id` : Combinaison unique
- `legad_tempo` : Temps en secondes
- `noto` : Note de 1 à 5
- `modifita_je` : AUTO UPDATE TIMESTAMP

#### legotajxoj
- `persono_id` + `teksto_id` : Combinaison unique
- `modifita_je` : AUTO UPDATE TIMESTAMP

## Conventions de développement

### Naming

- **Classes** : PascalCase avec suffixe "API" (`PersonojAPI`)
- **Méthodes privées** : camelCase (`sendResponse`, `validateJWT`)
- **Variables** : camelCase ou snake_case selon contexte
- **Champs esperanto** : Conserver les noms originaux (`enirnomo`, `pasvorto`, `teksto_id`)

### Structure des classes API

```php
class ResourceAPI {
    private $conn; // Connexion PDO

    public function __construct() {
        // Initialisation connexion DB
    }

    public function handleRequest() {
        // Routage interne basé sur HTTP method + path
    }

    private function getResource() { }
    private function createResource() { }
    private function updateResource() { }
    private function deleteResource() { }

    private function sendResponse($data, $status = 200) { }
    private function sendError($statusCode, $message) { }
}
```

### Validation des données

1. Vérifier la présence des champs requis
2. Valider le format (email, dates, nombres)
3. Vérifier l'unicité (email, username) si applicable
4. Nettoyer les données (trim, strtolower pour emails)
5. Encoder/décoder JSON si nécessaire

### Gestion des timestamps

- **Input** : ISO 8601 (ex: `2024-08-13T15:30:00Z`)
- **Conversion** : `strtotime()` puis `date('Y-m-d H:i:s')`
- **Storage** : DATETIME MySQL (Y-m-d H:i:s)
- **Output** : Format MySQL conservé

### Headers HTTP

Tous les endpoints retournent :
```
Content-Type: application/json; charset=utf-8
```

JSON encodé avec `JSON_UNESCAPED_UNICODE` pour l'esperanto.

## Tests et débogage

### Variables globales requises

Dans `config.php` :
- `$urlDb` : Host de la base de données
- `$base` : Nom de la base
- `$login` : User DB
- `$motDePasse` : Password DB + Secret JWT
- `$urlracine` : URL racine du site
- `$cookieDomain` : Domaine pour les cookies
- `$awskey`, `$awssecret` : Credentials AWS SES (optionnel en dev)
- `$INTERNAL_ACCESS_TOKEN` : Token pour TekstojAPI
- `DEBUG_MODE` : true/false

### Endpoints de test

1. **Test auth** : POST `/api/auth/login` avec `lernanto1/test`
2. **Test me** : GET `/api/auth/me` avec JWT
3. **Test tekstoj** : GET `/api/tekstoj?limit=5`
4. **Test legotajxoj** : POST `/api/legotajxoj` avec JWT

### Exemple curl

```bash
# Login
curl -X POST https://ikurso.example.com/api/auth/login \
  -H "Content-Type: application/json" \
  -d '{"identigilo":"lernanto1","pasvorto":"test"}'

# Get me
curl https://ikurso.example.com/api/auth/me \
  -H "Authorization: Bearer eyJhbGc..."

# Liste tekstoj
curl "https://ikurso.example.com/api/tekstoj?limit=10&nivelo_min=2&nivelo_max=4"
```

## TODO / Améliorations futures

- [ ] Migrer de MD5 vers bcrypt/argon2 pour les mots de passe
- [ ] Ajouter rate limiting pour prévenir les abus
- [ ] Implémenter refresh tokens (JWT avec expiration courte)
- [ ] Ajouter versioning API (v1, v2)
- [ ] Documenter avec OpenAPI/Swagger
- [ ] Ajouter tests automatisés (PHPUnit)
- [ ] Implémenter pagination cursor-based pour grandes collections
- [ ] Ajouter cache (Redis/Memcached) pour GET endpoints
- [ ] Implémenter WebSockets pour notifications temps réel
- [ ] Ajouter endpoint de recherche full-text dans tekstoj.enhavo

## Notes importantes

1. **Pas de DELETE pour tekstoj** : Pour préserver l'intégrité, les textes ne sont jamais supprimés, juste marqués `aktiva=0`

2. **Idempotence** : POST `/api/legitajxoj` est idempotent (retourne session existante)

3. **CORS** : Seul LegotajxojAPI a des headers CORS explicites (à généraliser si nécessaire)

4. **Protocole** : Toutes les actions importantes sont loggées dans la table `protokolo`

5. **Email en développement** : Si AWS SES n'est pas configuré, les emails sont juste loggés (pas d'envoi réel)

6. **Format ID tekstoj** : Les IDs sont des VARCHAR (ex: "ppp01", "gerda03") et non des integers

7. **Authentification dual** : JWT pour utilisateurs, Bearer token pour systèmes externes (TekstojAPI)
