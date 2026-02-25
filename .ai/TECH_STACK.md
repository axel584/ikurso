# Stack Technique — Ikurso

Ce document décrit la stack technique actuelle de l'application, la cible intermédiaire et la cible finale.

---

## 1. Stack actuelle

### Infrastructure

| Composant | Technologie | Version |
|-----------|-------------|---------|
| Serveur web | Apache | 2.4 (mod_rewrite) |
| Langage backend | PHP | **5.6.40** |
| Base de données | MariaDB | **10.1.48** |
| Orchestration | Docker Compose | 3.7 |
| Image Docker | `php:5.6-apache` | — |
| Email (dev) | Mailhog | latest |
| Email (prod) | AWS SES via PHPMailer | PHPMailer 6.2 |

### Backend PHP

| Aspect | Détail |
|--------|--------|
| Modèle d'exécution | PHP pur, pages PHP rendues côté serveur |
| Couche d'accès DB | PDO (nouvelles pages) + `mysql_*` deprecated (classes legacy dans `/db/`) |
| Gestion des dépendances | Composer (`phpmailer/phpmailer ^6.2`) |
| Sessions | `$_SESSION` PHP natif |
| Authentification (web) | Sessions PHP |
| Authentification (API) | JWT custom (HS256, secret = `$motDePasse`) |
| Hachage mot de passe | **MD5** (legacy, non sécurisé) |
| Template engine | **PHP pur** (pas de Twig/Smarty) |
| Architecture | Mélange procédural (`db.inc.php`, `util.php`) et OOP partiel (`/api/`, `/db/`) |
| API REST | `/api/` — classes PHP `*API.php` avec routeur `api.php` |
| Routing API | `.htaccess` : `RewriteRule ^api/(.*)$ api.php?path=$1` |

**Fichiers structurants :**

| Fichier | Rôle |
|---------|------|
| `config.php` | Variables globales : DB, SMTP, URL, tokens |
| `db.inc.php` | Couche d'accès DB procédurale (34 KB, ~70 fonctions) |
| `util.php` | Fonctions utilitaires générales |
| `webui.inc.php` | Helpers de rendu HTML |
| `pagxkapo.inc.php` | Template header commun |
| `api.php` | Point d'entrée API REST |
| `api/JWTAuth.php` | Validation/génération JWT |

**Code legacy à risque (`/db/*.inc.php`) :**
- Utilisation de `mysql_*` (supprimé en PHP 7.0)
- `addslashes()` au lieu de prepared statements
- Connexion DB via paramètre `$dbh` passé en objet
- Incompatible PHP 7.x sans refactoring

### Frontend

| Composant | Technologie | Version |
|-----------|-------------|---------|
| Manipulation DOM | jQuery | **3.2.1** |
| Framework CSS | Materialize (Material Design) | Minifié (non versionné) |
| CSS | CSS pur | Pas de SCSS/LESS |
| Editeur WYSIWYG | Trumbowyg | Minifié |
| Logique métier JS | `ikurso.js` (custom) | 34 KB |
| Lecture audio | SoundManager2 | Externe (`/soundmanager2/`) |
| Icônes | Google Material Icons | CDN |

**Fonts** : Luciole (accessibilité), chargée via `@font-face` local.

**Pas de bundler** (aucun Webpack/Vite/Parcel). Les fichiers JS/CSS sont liés directement dans les templates PHP via des balises `<script>` et `<link>`.

### Base de données

| Aspect | Détail |
|--------|--------|
| Moteur principal | **MyISAM** (pas de transactions, pas de FK enforced) |
| Moteur nouvelles tables | InnoDB (`legitajxoj`, `legotajxoj`) |
| Encodage | `utf8` (MyISAM) / `utf8mb4` (InnoDB) |
| Migrations | Manuel — `sql/changelog.txt`, scripts `02-create-data.sql` |

### Mobile

| Composant | Technologie | Version |
|-----------|-------------|---------|
| App Android | Apache Cordova | 6.2.3 (dans `/ikurso/`) |
| Contenu mobile | Subset du contenu web | — |

### Analytics / Scripts

| Composant | Technologie | Rôle |
|-----------|-------------|------|
| Scripts stats | Python 3.x (`/python/`) | Calculs statistiques, Random Forest |
| Configuration | `python/config.py` | Connexion DB directe |

### Environnement de développement

```
Docker Compose :
  web       → php:5.6-apache (port 8080)
  db        → mariadb:10.1   (port 3306)
  phpmyadmin → phpmyadmin    (port 8081)
  mailhog   → mailhog        (port 8025)
```

---

## 2. Problèmes de la stack actuelle

### Blocages pour la migration vers PHP 7+

| Problème | Fichiers concernés | Impact |
|----------|--------------------|--------|
| `mysql_*` supprimé en PHP 7.0 | `/db/*.inc.php` (14 fichiers DAOs) | **Bloquant** |
| `ereg()` supprimé en PHP 7.0 | À vérifier dans legacy | Bloquant |
| Constructeurs PHP 4 style (`function NomClasse()`) | `/db/Db.php` à vérifier | Bloquant PHP 7+ |
| `$HTTP_POST_VARS` et autres superglobales ancienne API | Code legacy | Bloquant |

### Problèmes de sécurité

| Problème | Gravité | Localisation |
|----------|---------|--------------|
| Mots de passe hashés en MD5 | 🔴 Critique | `personoj.pasvorto_md5`, `db.inc.php`, API |
| Requêtes SQL concaténées (legacy) | 🔴 Critique | `/db/*.inc.php`, certaines fonctions `db.inc.php` |
| JWT sans expiration (`exp`) | 🟠 Élevé | `api/AuthentificationAPI.php` |
| Cookie JWT sans `HttpOnly` déclaré | 🟠 Élevé | `api/AuthentificationAPI.php` |
| `DEBUG_MODE = true` hardcodé | 🟡 Moyen | `api.php` |

### Dette technique

- Pas de tests automatisés (aucun PHPUnit, aucun test JS)
- CSS/JS non minifiés en prod (pas de build pipeline)
- Pas de gestion d'erreurs centralisée côté legacy
- Mélange de paradigmes : procédural + OOP ancien + OOP moderne + REST API
- `$_SESSION` et JWT coexistent sans pont clair
- Encodage mixte : `utf8` et `utf8mb4` dans la même base

---

## 3. Cible intermédiaire — PHP 7.0.33 + premières îles React

**Principe** : Le code legacy reste fonctionnel. On monte PHP à 7.0.33 (dernière 7.0.x), on corrige les incompatibilités bloquantes, et on commence à introduire React pour les **nouveaux composants uniquement** (approche "micro-frontends" ou "îles React").

### Infrastructure cible intermédiaire

| Composant | Actuel | Cible intermédiaire |
|-----------|--------|---------------------|
| PHP | 5.6.40 | **7.0.33** |
| MariaDB | 10.1.48 | 10.1.48 (inchangé) |
| Image Docker | `php:5.6-apache` | `php:7.0-apache` |
| Bundler JS | Aucun | **Vite** (pour les composants React) |
| React | Aucun | **React 18** (nouveaux composants uniquement) |
| Node.js | Non présent | **Node.js 20 LTS** (build uniquement) |

### Backend PHP 7.0.33

**Corrections obligatoires pour PHP 7.0 :**

| Action | Détail |
|--------|--------|
| Supprimer `mysql_*` | Remplacer par PDO dans tous les fichiers `/db/*.inc.php` |
| Supprimer `ereg()` / `eregi()` | Remplacer par `preg_match()` |
| Corriger constructeurs PHP 4 | Renommer `function NomClasse()` en `__construct()` |
| Vérifier `$HTTP_POST_VARS` etc. | Remplacer par `$_POST`, `$_GET`, `$_SERVER` |
| Vérifier `split()` | Remplacer par `explode()` |

**Améliorations ciblées :**

| Action | Priorité |
|--------|----------|
| Passer MD5 → `password_hash()` + `password_verify()` | 🔴 Sécurité |
| Ajouter `exp` dans le payload JWT | 🟠 Sécurité |
| Activer `HttpOnly` + `Secure` sur le cookie JWT | 🟠 Sécurité |
| Centraliser la gestion d'erreurs dans `api.php` | 🟡 Qualité |
| Migrer `composer.json` : ajouter `phpunit/phpunit` | 🟡 Tests |

**Pas de changement sur :**
- Architecture des pages PHP legacy (templates PHP purs)
- Base de données (schéma inchangé)
- jQuery + Materialize pour le code existant

### Frontend — Introduction de React (îles React)

L'approche adoptée est celle des **îles React** (*React islands*) : des composants React montés sur des `<div id="react-root-*">` spécifiques dans les pages PHP existantes. Le reste de la page continue d'être rendu par PHP + jQuery.

```
Pages PHP existantes (inchangées)
├── <header> PHP
├── <div id="react-island-1">  ← Nouveau composant React
│      ↑ React 18 monte ici via ReactDOM.createRoot()
├── <section> HTML existant
├── <div id="react-island-2">  ← Autre composant React
└── <footer> PHP
```

**Outillage build :**

| Outil | Rôle |
|-------|------|
| **Vite** | Bundler (rapide, ESM natif) |
| **React 18** | Bibliothèque UI |
| **TypeScript** | Typage statique (optionnel mais recommandé dès le début) |
| Node.js 20 LTS | Runtime build |

**Structure proposée pour les composants React :**

```
/frontend/           ← Nouveau répertoire (hors racine web)
├── src/
│   ├── components/  ← Composants React réutilisables
│   ├── pages/       ← Composants page (pour migration progressive)
│   └── api/         ← Wrappers fetch vers /api/*
├── dist/            ← Fichiers buildés (servis par Apache)
├── vite.config.ts
├── package.json
└── tsconfig.json
```

Les fichiers buildés dans `/frontend/dist/` sont inclus dans les pages PHP via :
```php
<script type="module" src="/frontend/dist/assets/main.js"></script>
```

**Premiers composants candidats à migrer vers React :**

| Composant | Page PHP actuelle | Complexité |
|-----------|-------------------|------------|
| Formulaire de contact | `reago.php` | Faible |
| Liste des textes avec filtres | `tekstoj.php` | Moyenne |
| Lecteur de texte + suivi session | Page de lecture | Moyenne |
| Système de marque-pages | Intégré dans liste textes | Faible |
| Tableau de bord étudiant | `personinformoj.php` | Élevée |

### API REST (inchangée fonctionnellement)

- Les classes `/api/*.php` restent telles quelles
- Seul ajout : CORS global dans `api.php` pour les requêtes React
- Le routing `.htaccess` reste identique

---

## 4. Cible finale — React SPA + API PHP

**Principe** : Le frontend devient une Single Page Application React complète. Le backend PHP est exclusivement une API REST dans `/api/`. Le code PHP legacy de rendu HTML est progressivement retiré.

### Infrastructure cible finale

| Composant | Cible intermédiaire | Cible finale |
|-----------|---------------------|--------------|
| PHP | 7.0.33 | **8.2+** (recommandé) |
| MariaDB | 10.1.48 | **10.6+ / MySQL 8.0** (migration recommandée) |
| Frontend | React islands | **React 18 SPA** |
| Bundler | Vite | Vite (inchangé) |
| CSS | Materialize + CSS pur | **Tailwind CSS** ou MUI (à décider) |
| Auth | JWT custom | JWT + refresh tokens |
| Typage | PHP non typé | **PHP 8 typed** + TypeScript |
| Tests PHP | Aucun | PHPUnit 10+ |
| Tests JS | Aucun | Vitest + React Testing Library |

### Architecture cible finale

```
┌─────────────────────────────────────────┐
│            FRONTEND (React SPA)          │
│  /frontend/                              │
│  ├── React 18 + TypeScript               │
│  ├── React Router (navigation SPA)       │
│  ├── TanStack Query (cache API)          │
│  ├── Zustand ou Redux Toolkit (état)     │
│  └── Vite (build)                        │
│              ↕ fetch / axios             │
├─────────────────────────────────────────┤
│            BACKEND (PHP API)             │
│  /api/                                   │
│  ├── PHP 8.2+                            │
│  ├── Routeur central api.php             │
│  ├── Classes *API.php (REST)             │
│  ├── JWT avec expiration                 │
│  └── Composer (dépendances)              │
│              ↕ PDO                       │
├─────────────────────────────────────────┤
│            BASE DE DONNÉES              │
│  MariaDB 10.6+ / MySQL 8                 │
│  ├── MyISAM → InnoDB (migration)         │
│  ├── utf8mb4 unifié                      │
│  └── FK enforced                         │
└─────────────────────────────────────────┘
```

### Backend PHP (cible finale)

| Aspect | Cible |
|--------|-------|
| Version | PHP 8.2+ |
| Architecture | API REST pure (pas de rendu HTML côté PHP) |
| Hachage MDP | `password_hash()` / `password_verify()` (bcrypt ou argon2id) |
| JWT | Avec `exp`, `iat`, refresh token |
| Types | Typed properties, return types, union types |
| Erreurs | Middleware d'erreur centralisé |
| Tests | PHPUnit 10 |
| Dépendances | Composer (ajouter `firebase/php-jwt` ou équivalent) |
| Documentation | OpenAPI/Swagger généré |

### Frontend React (cible finale)

| Aspect | Technologie |
|--------|-------------|
| Framework | React 18 |
| Langage | TypeScript |
| Routing | React Router v6 |
| State global | Zustand (léger) ou Redux Toolkit |
| Cache/fetch | TanStack Query (React Query) |
| Forms | React Hook Form + Zod |
| CSS | Tailwind CSS ou Material UI v5 |
| Build | Vite |
| Tests unitaires | Vitest |
| Tests composants | React Testing Library |
| i18n | i18next (si multilingue) |

### Base de données (cible finale)

| Action | Priorité |
|--------|----------|
| Migrer toutes les tables MyISAM vers InnoDB | 🔴 Essentiel |
| Unifier l'encodage en `utf8mb4` | 🔴 Essentiel |
| Ajouter les clés étrangères | 🟠 Important |
| Migrer MariaDB 10.1 → 10.6+ | 🟠 Important |
| Mettre en place un outil de migrations (Phinx ou Liquibase) | 🟡 Recommandé |

---

## 5. Feuille de route de migration

### Phase 1 — PHP 7.0.33 (priorité : corriger les bloquants)

```
[x] Modifier Dockerfile : php:5.6-apache → php:7.0-apache
[x] Compatibilité mysql_* : shim MySQLi via mysql_compat.php + classe Db (db/Db.inc.php)
[x] Corriger les constructeurs PHP 4 style (nuna_kurso, personoj)
[x] Corriger ereg()/eregi() → stubs dans mysql_compat.php + preg_match() dans makefont.php
[x] Corriger set_magic_quotes_runtime() dans pdf/fpdf.php et makefont.php
[x] Corriger $HTTP_SERVER_VARS dans pdf/fpdf.php
[ ] Tester toutes les pages existantes
[ ] Migrer MD5 → password_hash() + password_verify()
[ ] Ajouter exp + HttpOnly sur JWT
```

### Phase 2 — Introduction de React (nouveaux composants)

```
[ ] Créer /frontend/ avec Vite + React 18 + TypeScript
[ ] Configurer le build Vite (output vers /frontend/dist/)
[ ] Ajouter script de build dans docker-compose (ou séparé)
[ ] Créer les wrappers API fetch (/frontend/src/api/)
[ ] Migrer le formulaire de contact → composant React
[ ] Migrer la liste des textes (tekstoj) → composant React
[ ] Migrer le lecteur de texte + suivi → composant React
[ ] Ajouter CORS global dans api.php
```

### Phase 3 — Migration progressive des pages

```
[ ] Migrer page de connexion → React
[ ] Migrer tableau de bord étudiant → React
[ ] Migrer gestion des exercices → React
[ ] Migrer l'interface correcteur → React
[ ] Retirer jQuery au fur et à mesure
[ ] Retirer Materialize au fur et à mesure
```

### Phase 4 — SPA complète + PHP 8 (cible finale)

```
[ ] Migrer PHP 7.0 → PHP 8.2
[ ] Ajouter React Router : SPA avec routing côté client
[ ] Supprimer les templates PHP de rendu HTML (legacy)
[ ] Migrer MyISAM → InnoDB sur toutes les tables
[ ] Unifier utf8mb4
[ ] Mettre en place les FK enforced
[ ] Mettre en place PHPUnit
[ ] Mettre en place Vitest + React Testing Library
[ ] Mettre en place OpenAPI/Swagger
[ ] Migrer MariaDB 10.1 → 10.6+
```

---

## 6. Récapitulatif des versions

| Composant | Actuel | Cible intermédiaire | Cible finale |
|-----------|--------|---------------------|--------------|
| PHP | 5.6.40 | **7.0.33** | 8.2+ |
| MariaDB | 10.1.48 | 10.1.48 | 10.6+ |
| Apache | 2.4 | 2.4 | 2.4 |
| jQuery | 3.2.1 | 3.2.1 (legacy conservé) | Retiré |
| Materialize | Non versionné | Non versionné (legacy conservé) | Retiré |
| React | Absent | **18** (îles React) | **18** (SPA) |
| TypeScript | Absent | **5.x** (nouveaux composants) | **5.x** (tout) |
| Vite | Absent | **5.x** | **5.x** |
| Node.js | Absent | **20 LTS** (build) | **20 LTS** |
| PHPMailer | 6.2 | 6.2 | 6.x |
| JWT | Custom HS256 | Custom HS256 (+ exp + HttpOnly) | firebase/php-jwt ou équivalent |
| Hachage MDP | MD5 | **bcrypt** (password_hash) | **bcrypt/argon2id** |
| CSS | CSS pur | CSS pur (legacy) | Tailwind ou MUI |
| Tests PHP | Aucun | PHPUnit (nouveaux) | PHPUnit 10 |
| Tests JS | Aucun | Vitest (nouveaux) | Vitest + RTL |
| Cordova Android | 6.2.3 | 6.2.3 (non prioritaire) | À évaluer |
| Python analytics | 3.x | 3.x (inchangé) | 3.x (inchangé) |
