# AGENTS.md

Règles à respecter pour tout code écrit ou modifié dans ce dépôt (humains et agents IA).
Elles complètent `CLAUDE.md` (architecture, commandes) et `.ai/` (API, schéma, stack).

## 1. Compatibilité

- **Version cible : PHP 7.4.** Le nouveau code peut utiliser ses fonctionnalités (types scalaires et de retour, propriétés typées, `??`, `??=`, fonctions fléchées, `declare(strict_types=1)` pour les nouveaux fichiers) mais rien qui exige PHP 8 (pas de `match`, d'arguments nommés, de propriétés promues, de `?->` ni de `str_contains`).
- Le code existant n'est pas encore tout compatible 7.4 : ne pas casser ce qui fonctionne, et corriger les incompatibilités (ex. `each()`, accolades pour les index de chaîne, `get_magic_quotes_*`, syntaxes dépréciées) quand on touche le fichier concerné.
- `php/Dockerfile` utilise `PHP_VERSION=5.6` par défaut : construire avec `PHP_VERSION=7.4` (`docker compose build --build-arg PHP_VERSION=7.4`) pour tester, et faire de 7.4 la valeur par défaut dès que la migration le permet.
- Ne jamais introduire de fonctions `mysql_*`. `mysql_compat.php` n'existe que pour le code legacy, à faire disparaître.
- **Fins de ligne : toujours LF** (`\n`), jamais CRLF, sur Linux comme sur macOS. Tout fichier créé ou entièrement réécrit est en LF. Configurer l'éditeur en conséquence et ne jamais mettre `core.autocrlf=true`.
- Tout le dépôt a été normalisé en LF (commit `530bc9c9`, ignoré par `git blame` via `.git-blame-ignore-revs`). `.gitattributes` (`* text=auto eol=lf`) et `.editorconfig` (`end_of_line = lf`) maintiennent cette règle : ne pas les contourner. Seule exception : `doc/GERDA-kurso.rtf`, laissé tel quel.
- Un diff qui réécrit tout un fichier est un défaut. Avant de rendre le travail, vérifier avec `git diff --stat` et `git ls-files --eol <fichier>` (attendu : `i/lf w/lf`). Un fichier importé de l'extérieur (Windows, ancien code) est converti en LF dans un commit dédié, sans autre changement.
- Conserver l'encodage UTF-8 et le style de nommage existant (identifiants en espéranto pour le domaine, français pour les messages utilisateur).

## 2. SQL

1. **Requêtes préparées obligatoirement** (`$bdd->prepare()` + `execute(array(...))`, PDO). Aucune valeur venant de `$_GET`, `$_POST`, `$_REQUEST`, `$_COOKIE`, d'un en-tête ou de la base ne doit être concaténée dans une requête.
2. `addslashes`, `htmlspecialchars` et `stripslashes` ne sont **pas** des protections SQL.
3. Ce qui ne peut pas être un paramètre (nom de colonne, sens de tri, `LIMIT`) passe par une **liste blanche** ou un cast `(int)`, comme dans `api/TekstojAPI.php`.
4. Pas de clause `WHERE` brute passée en paramètre d'une fonction (contre-exemple à ne pas reproduire : `personoj::find($parametre)`).
5. **Emplacement** : tout nouveau SQL va dans `api/` (classes d'accès aux données), jamais dans une page, un `ajax/*.php` ou `webui.inc.php`. Les pages appellent ces classes directement, pas l'API en HTTP. Ne pas ajouter de nouvelle requête à `db.inc.php` ni à `webui.inc.php`.
6. Utiliser la connexion PDO existante (`$bdd`). Ne pas créer de nouvelle connexion.

## 3. Authentification et autorisation

- Toute page ou endpoint qui lit ou modifie des données personnelles vérifie **d'abord** la session, puis le rôle (`A` admin, `K` correcteur, `S` étudiant, `P` prospect, `I` inactif).
- Après chaque `header("Location: ...")` de refus : **`exit;`** immédiat. Sans `exit`, le reste du script s'exécute.
- L'identité vient de **`$_SESSION`** (ou du JWT vérifié), jamais d'un paramètre GET/POST (`persono_id`, `studanto_id`…). Si un correcteur agit sur un élève, vérifier que cet élève lui est bien rattaché (`nuna_kurso`).
- Ne pas se fier à un contrôle côté JavaScript ou à un champ caché.
- Redirections : ne jamais rediriger vers une URL fournie par l'utilisateur. Utiliser `pagxoLokalaSekura()` (`util.php`) ou une liste blanche.
- Les actions qui modifient l'état (suppression, ajout, changement de rôle) ne se font pas en GET.

## 4. Authentification JWT et mots de passe

- Un JWT n'est émis **qu'après** une authentification réussie (voir `ajax/eniri.php`).
- Le secret de signature ne doit pas être le mot de passe de la base. Les nouveaux jetons doivent avoir une expiration (`exp`).
- Ne jamais stocker ni journaliser un mot de passe en clair. Pour tout nouveau code, utiliser `password_hash()` / `password_verify()` (le MD5 actuel est une dette à migrer, pas un modèle).
- Comparer les secrets avec `hash_equals()`, pas avec `==` ou `!=`.

## 5. Sorties et entrées

- Échapper toute donnée dynamique affichée en HTML : `htmlspecialchars($v, ENT_QUOTES, 'UTF-8')`. Ne pas confondre avec la protection SQL.
- Valider et convertir les entrées à la frontière : `(int)` pour les identifiants, liste blanche pour les codes de cours (`CG`, `GR`, `PP`, `3N`…), format strict pour les dates.
- Ne jamais construire un chemin de fichier avec une valeur utilisateur sans la valider (`mails/…`, `include`, `fopen`).
- Ne pas afficher de requête SQL ni d'erreur PHP à l'utilisateur : pas de `die("... ".$requete)` ni de `print_r($bdd->errorInfo())`. Journaliser côté serveur (`error_log`) et renvoyer un message générique.
- `display_errors` doit rester désactivé en production.

## 6. Configuration et secrets

- Aucun identifiant, mot de passe, clé ou jeton dans le code ni dans un fichier suivi par git. Ils vont dans `config.php` (non commité) ou dans des variables d'environnement.
- Ne jamais placer de journaux, dumps SQL ou sauvegardes dans le répertoire servi par Apache. Ils doivent aussi être dans `.gitignore`.
- Ne pas envoyer de données personnelles à un service tiers sans demande explicite.

## 7. Qualité du code

- Modifications minimales : une correction ne s'accompagne pas d'un refactoring général. Signaler ce qu'on voit sans le corriger hors périmètre.
- Pas de code mort ni de blocs commentés laissés dans le code. Le dépôt contient déjà des fichiers `*2.php`, `*-old.php` et des scripts qui reposent sur `register_globals` : ne pas les étendre, ne pas s'en inspirer.
- Fonctions courtes, une responsabilité, pas de variables globales nouvelles (`global $bdd` existe déjà, ne pas l'étendre).
- Commentaires seulement pour expliquer un **pourquoi** non évident.
- Les dépendances passent par `composer` (`composer.lock` commité). Vérifier la maintenance et les vulnérabilités connues avant d'en ajouter une.

## 8. Vérification avant de rendre le travail

Ces vérifications sont obligatoires sur l'environnement Docker local (`docker compose up`, http://localhost:8080) :

1. **Syntaxe** : `docker compose exec -T web php -l <fichier>` pour chaque fichier PHP modifié, avec un conteneur en PHP 7.4 (voir section 1).
2. **Cas nominal** : tester la fonctionnalité avec les comptes `administranto`, `korektanto1` et `lernanto1` (mot de passe `test`).
3. **Droits** : vérifier qu'un visiteur anonyme et un compte de rôle insuffisant sont refusés.
4. **Injection** : tester chaque paramètre avec `'`, `" OR "1"="1`, `1 OR 1=1` et `1 UNION SELECT NULL`. Aucune erreur SQL ni fuite de données ne doit apparaître.
5. **Données de test** : nettoyer ce qui a été créé pendant les tests et remettre les comptes dans leur état d'origine.
6. Si un test ne peut pas être exécuté (dépendance réseau, données absentes), le dire explicitement. Ne pas déclarer « fonctionne » sans l'avoir vérifié.

## 9. Git et livraison

- Ne pas faire `git add`, `git commit` ni `git push` sans demande explicite.
- Quand un commit est demandé : messages en français, courts, centrés sur le pourquoi ; ne jamais ajouter de fichier de secrets, de journal ou de dump.
- Une modification de schéma SQL s'accompagne d'une entrée dans `sql/changelog.txt` et d'une mise à jour de `sql/` et de `.ai/DB_SCHEMA.md`.
- Une modification de l'API met à jour `.ai/API_INTERFACE.md`.
