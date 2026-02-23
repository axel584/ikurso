# Documentation de référence — .ai/

Ce répertoire contient les fichiers de documentation technique générés à partir de l'analyse du code source. **Consulte ces fichiers avant toute tâche d'analyse, de développement ou de migration.**

## Fichiers disponibles

### `DB_SCHEMA.md`
Description complète du schéma de la base de données MySQL/MariaDB.
- Liste des 24 tables avec toutes leurs colonnes, types, contraintes et valeurs ENUM
- Diagramme des relations entre tables
- Notes sur les moteurs (MyISAM vs InnoDB), l'encodage et les conventions

À consulter pour : toute requête SQL, ajout de table, compréhension du modèle de données.

---

### `API_INTERFACE.md`
Documentation de l'API REST actuellement implémentée dans `/api/`.
- 38 endpoints documentés (Auth, Personoj, Kursoj, Lecionoj, Lecioneroj, Ekzercoj, Ekzerceroj, Tekstoj, Legitajxoj, Legotajxoj, Kontakto)
- Corps des requêtes, réponses, codes d'erreur et règles de validation pour chaque endpoint
- Détail des deux mécanismes d'authentification (JWT utilisateurs, Bearer token interne)
- Notes techniques (CORS, logging, format des dates, idempotence)

À consulter pour : ajouter ou modifier un endpoint, intégrer le frontend avec l'API, déboguer une requête.

---

### `TECH_STACK.md`
Description de la stack technique actuelle et des cibles de migration.
- **Stack actuelle** : PHP 5.6.40, MariaDB 10.1, jQuery, Materialize, PDO + legacy `mysql_*`
- **Cible intermédiaire** : PHP 7.0.33 + premières îles React (Vite, React 18, TypeScript)
- **Cible finale** : React 18 SPA + API PHP pure + MariaDB 10.6+
- Feuille de route en 4 phases, tableau des versions et liste des problèmes à corriger

À consulter pour : toute décision technique, ajout de dépendance, travail de migration, configuration Docker.
