# Documentation API Ikurso

Ce répertoire contient la documentation Swagger/OpenAPI pour l'API Ikurso.

## 📁 Contenu

- `openapi.yml` - Spécification OpenAPI 3.0 complète de l'API
- `index.html` - Interface Swagger UI pour visualiser et tester l'API
- `README.md` - Ce fichier d'instructions

## 🚀 Utilisation

### Accès à la documentation

1. **Via le serveur de développement Docker:**
   ```bash
   docker compose up --build
   ```
   Puis accéder à: http://localhost:8080/dev/swagger/

2. **Via serveur web local:**
   Servir le répertoire `/dev/swagger/` avec n'importe quel serveur web

### Test des endpoints

L'interface Swagger UI permet de:
- ✅ Visualiser tous les endpoints disponibles
- ✅ Voir les schémas de requête/réponse
- ✅ Tester directement les endpoints depuis l'interface
- ✅ Générer des exemples de code

## 🔗 Endpoints principaux

### Authentication (`/auth/*`)
- `POST /auth/register` - Création de compte
- `POST /auth/login` - Connexion 
- `POST /auth/logout` - Déconnexion
- `GET /auth/me` - Informations utilisateur

### Tekstoj (`/tekstoj/*`)
- `GET /tekstoj` - Liste des textes (avec filtres)
- `GET /tekstoj/{id}` - Détails d'un texte
- `POST /tekstoj` - Créer un texte (auth requise)
- `PUT /tekstoj/{id}` - Modification complète (auth requise)
- `PATCH /tekstoj/{id}` - Modification partielle (auth requise)

## 🔑 Authentification

Certains endpoints nécessitent un token Bearer d'authentification:

```bash
curl -H "Authorization: Bearer YOUR_TOKEN" \
     http://localhost:8080/api.php?path=tekstoj
```

## 📝 Exemples d'utilisation

### Inscription d'un utilisateur

```bash
curl -X POST \
  http://localhost:8080/api.php?path=auth/register \
  -H "Content-Type: application/json" \
  -d '{
    "enirnomo": "nouvelutilisateur",
    "pasvorto": "motdepasse123",
    "retadreso": "user@example.com"
  }'
```

### Connexion

```bash
curl -X POST \
  http://localhost:8080/api.php?path=auth/login \
  -H "Content-Type: application/json" \
  -d '{
    "identigilo": "lernanto1",
    "pasvorto": "test"
  }'
```

### Liste des textes

```bash
# Tous les textes actifs (par défaut)
curl http://localhost:8080/api.php?path=tekstoj

# Avec filtres
curl "http://localhost:8080/api.php?path=tekstoj?nivelo_min=1&nivelo_max=3&limit=5"

# Recherche
curl "http://localhost:8080/api.php?path=tekstoj?q=Zamenhof&sort=titolo&order=ASC"
```

## 🛠️ Développement

### Mise à jour de la documentation

1. Modifier `openapi.yml` selon les changements d'API
2. Tester la documentation en rechargeant l'interface
3. Valider la syntaxe OpenAPI avec des outils comme Swagger Editor

### Validation du fichier OpenAPI

Vous pouvez valider la spécification avec:
```bash
# Via Swagger Editor en ligne
# Copier/coller le contenu sur https://editor.swagger.io/

# Ou via CLI si installé
swagger-codegen validate -i openapi.yml
```

## 📧 Contact

Pour toute question sur l'API, contacter: axel.rousseau@esperanto-france.org