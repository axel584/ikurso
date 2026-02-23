# Schéma de la base de données — Ikurso

Base de données MySQL/MariaDB. Encodage principal : `utf8` / `utf8mb4`.

---

## Tables

### `personoj` — Utilisateurs

Tous les comptes du système (étudiants, correcteurs, administrateurs).

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant unique |
| `ekdato` | DATE NOT NULL | Date d'inscription |
| `lasteniro` | TIMESTAMP | Dernière connexion |
| `sekso` | CHAR(1) | Sexe |
| `familinomo` | VARCHAR(32) | Nom de famille |
| `personnomo` | VARCHAR(32) | Prénom |
| `enirnomo` | VARCHAR(32) UNIQUE NOT NULL | Nom d'utilisateur (login) |
| `adreso1` | VARCHAR(128) | Adresse ligne 1 |
| `adreso2` | VARCHAR(128) | Adresse ligne 2 |
| `posxtkodo` | VARCHAR(6) | Code postal |
| `urbo` | VARCHAR(32) | Ville |
| `lando` | VARCHAR(2) | Code pays |
| `latitudo` | FLOAT(8,6) | Latitude géographique |
| `longitudo` | FLOAT(8,6) | Longitude géographique |
| `retadreso` | VARCHAR(128) NOT NULL | Adresse e-mail |
| `naskigxdato` | DATE | Date de naissance |
| `rajtoj` | ENUM('P','S','K','A','I') | Rôle : P=?, S=Étudiant, K=Correcteur, A=Admin, I=? |
| `kialo` | TEXT | Raison de l'inscription |
| `noto` | TEXT | Notes internes |
| `maksimumo` | INT | Nombre max d'étudiants (pour correcteurs) |
| `kurso` | VARCHAR(2) | Code du cours actuel |
| `videbla` | ENUM('J','N') | Profil visible (J=oui, N=non) |
| `stop_info` | ENUM('J','N') | Désabonné des infos |
| `stop_rappel` | ENUM('J','N') | Désabonné des rappels |
| `aktivigo` | VARCHAR(40) | Token d'activation du compte |
| `aktivigita` | TINYINT(1) | Compte activé (0/1) |
| `pasvorto_md5` | VARCHAR(40) | Mot de passe hashé (MD5) |
| `saviezvous` | INT | Compteur "le saviez-vous" |

---

### `kursoj` — Cours

Liste des cours disponibles.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK | Identifiant |
| `kodo` | CHAR(2) | Code cours (ex : `cg`, `ge`, `pp`) |
| `nomo` | VARCHAR(64) NOT NULL | Nom du cours |

---

### `lecionoj` — Leçons

Leçons appartenant à un cours.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `numero` | INT NOT NULL | Numéro de la leçon dans le cours |
| `titolo` | VARCHAR(64) | Titre de la leçon |
| `retpagxo` | VARCHAR(50) | Chemin vers la page web de la leçon |
| `kurso` | VARCHAR(2) NOT NULL | Code du cours parent |
| `unua` | TINYINT(1) | Est la première leçon du cours (0/1) |
| `lasta` | TINYINT(1) | Est la dernière leçon du cours (0/1) |

---

### `lecioneroj` — Sections de leçon

Sections (parties) composant une leçon.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `leciono_id` | INT | Référence vers `lecionoj.id` |
| `titolo` | TEXT | Titre de la section |
| `tipo` | ENUM('VORTARO','QCM','TEKSTO','EKZERCARO') | Type de section |
| `enhavo` | TEXT | Contenu HTML/texte de la section |
| `ordo` | INT | Ordre d'affichage dans la leçon |
| `unua` | TINYINT(1) | Première section de la leçon |
| `lasta` | TINYINT(1) | Dernière section de la leçon |
| `dauxro` | INT | Durée estimée (secondes) |
| `android` | TINYINT(1) | Disponible dans l'appli Android |

---

### `ekzercoj` — Exercices

Exercices rattachés à une section de leçon.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `komando` | TEXT NOT NULL | Consigne de l'exercice |
| `lecionero_id` | INT NOT NULL | Référence vers `lecioneroj.id` |
| `komando_detalo` | TEXT | Détail de la consigne |
| `ekzemplo` | TEXT | Exemple |
| `typo` | ENUM | Type d'exercice (voir valeurs ci-dessous) |
| `x2u` | TINYINT(1) NOT NULL | Exercice x2u (double points ?) |
| `korektebla` | TINYINT(1) NOT NULL | Nécessite une correction manuelle |

**Valeurs de `typo` :** `traduko-1`, `traduko-2`, `traduko-3`, `verkado-1` à `verkado-6`, `stelo-1`, `stelo-2`, `truoj-1`, `truoj-2`, `kompletigu`, `ordigu`, `elektu`

---

### `ekzerceroj` — Questions d'exercice

Questions individuelles composant un exercice.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `ekzerco_id` | INT NOT NULL | Référence vers `ekzercoj.id` |
| `kodo` | VARCHAR(10) NOT NULL | Code interne |
| `numero` | INT NOT NULL | Numéro d'ordre |
| `demando` | TEXT NOT NULL | Énoncé de la question |
| `respondmodelo` | TEXT | Réponse modèle (attendue) |
| `respondo` | TEXT | Réponse alternative |
| `normaligita` | TEXT | Forme normalisée de la réponse (pour comparaison) |
| `bildo` | VARCHAR(64) NOT NULL | Chemin d'une image associée |
| `forigita` | TINYINT(1) | Supprimé logiquement (0/1) |
| `korektebla` | TINYINT(1) | Nécessite une correction manuelle |
| `poentoj` | INT | Points attribués pour cette question |

---

### `respondoj` — Réponses des étudiants

Réponses saisies par les étudiants aux questions des exercices.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `dato` | TIMESTAMP | Date/heure de la réponse |
| `persono_id` | INT NOT NULL | Référence vers `personoj.id` |
| `lecionero_id` | INT | Référence vers `lecioneroj.id` |
| `ekzercero_id` | INT | Référence vers `ekzerceroj.id` |
| `kodo` | VARCHAR(40) | Code de l'exercice |
| `komando` | TEXT | Consigne au moment de la réponse |
| `demando` | TEXT | Question posée |
| `respondo` | TEXT | Réponse de l'étudiant |
| `normaligita` | TEXT | Forme normalisée de la réponse |
| `forigita` | TINYINT(1) | Supprimé logiquement |
| `gxusta` | TINYINT(1) | Réponse correcte (NULL=non corrigé, 0=faux, 1=vrai) |
| `korekto` | TEXT | Commentaire de correction du correcteur |

---

### `nuna_kurso` — Inscription et progression en cours

Suivi de la progression d'un étudiant dans un cours.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `ekdato` | DATE NOT NULL | Date de début |
| `findato` | DATE | Date de fin |
| `stato` | ENUM('N','K','F','H') | État : N=Normal, K=?, F=Fini, H=? |
| `lastdato` | DATE NOT NULL | Date de dernière activité |
| `korektanto` | INT NOT NULL | Correcteur actuel (`personoj.id`) |
| `pasintakorektanto` | INT | Ancien correcteur |
| `studanto` | INT NOT NULL | Étudiant (`personoj.id`) |
| `nunleciono` | INT | Leçon actuelle (`lecionoj.id`) |
| `kurso` | CHAR(2) | Code du cours |

---

### `korektebla_kurso` — Affectation correcteur/cours

Indique quels cours un correcteur peut encadrer et le nombre max d'étudiants.

| Colonne | Type | Description |
|---|---|---|
| `korektanto` | INT NOT NULL | Correcteur (`personoj.id`) |
| `kurso` | CHAR(2) NOT NULL | Code du cours |
| `kiom_lernantoj` | INT | Nombre max d'étudiants (défaut : 3) |

---

### `personoj_lecionoj` — Suivi des leçons par utilisateur

Enregistre la progression d'un étudiant pour chaque leçon.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `dato` | TIMESTAMP | Date de mise à jour |
| `persono_id` | INT NOT NULL | Référence vers `personoj.id` |
| `leciono_id` | INT NOT NULL | Référence vers `lecionoj.id` |
| `komentario` | TEXT | Commentaire général |
| `enkonduko` | TEXT | Texte d'introduction |
| `konkludo` | TEXT | Texte de conclusion |
| `korektita` | TINYINT(1) | Leçon corrigée par le correcteur |

---

### `personoj_lecioneroj` — Suivi des sections par utilisateur

Enregistre les points et la progression sur chaque section.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `ekdato` | TIMESTAMP | Date de début de la section |
| `dato` | TIMESTAMP | Date de dernière mise à jour |
| `persono_id` | INT NOT NULL | Référence vers `personoj.id` |
| `lecionero_id` | INT NOT NULL | Référence vers `lecioneroj.id` |
| `poentoj` | INT | Points obtenus |

---

### `komentoj` — Commentaires correcteur/étudiant

Messages échangés entre un étudiant et son correcteur.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `studanto` | INT NOT NULL | Étudiant (`personoj.id`) |
| `korektanto` | INT NOT NULL | Correcteur (`personoj.id`) |
| `dato` | DATE NOT NULL | Date du commentaire |
| `teksto` | TEXT | Contenu du commentaire |

---

### `vortoj` — Vocabulaire

Mots de vocabulaire associés à des sections de leçon.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `eo` | VARCHAR(128) NOT NULL | Mot en espéranto |
| `fr` | VARCHAR(128) NOT NULL | Traduction française |
| `tipo` | ENUM | Catégorie grammaticale |
| `lecionero_id` | INT NOT NULL | Section associée (`lecioneroj.id`) |

**Valeurs de `tipo` :** `adj`, `adv`, `conjonction`, `expression`, `interjection`, `nom`, `nombre`, `phrase`, `pronom`, `préfixe`, `préposition`, `verbe`

---

### `personoj_vortoj` — Progression vocabulaire par utilisateur

Suivi de la révision des mots (système de répétition espacée).

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `persono_id` | INT NOT NULL | Référence vers `personoj.id` |
| `vorto_id` | INT NOT NULL | Référence vers `vortoj.id` |
| `nombrilo` | INT NOT NULL | Compteur de révisions |
| `venontaFojo` | DATETIME NOT NULL | Prochaine révision planifiée |
| `lastfojo` | TIMESTAMP | Dernière révision |

---

### `personoj_vortoj_respondoj` — Historique des réponses vocabulaire

| Colonne | Type | Description |
|---|---|---|
| `persono_id` | INT NOT NULL | Référence vers `personoj.id` |
| `vorto_id` | INT NOT NULL | Référence vers `vortoj.id` |
| `dato` | TIMESTAMP | Date de la réponse |
| `bona` | TINYINT(1) NOT NULL | Réponse correcte (0/1) |
| `respondo` | VARCHAR(128) NOT NULL | Réponse saisie |

---

### `tekstoj` — Textes à lire

Textes en espéranto proposés à la lecture.

| Colonne | Type | Description |
|---|---|---|
| `id` | VARCHAR(64) PK | Identifiant (slug) |
| `ekdato` | DATETIME | Date de création |
| `titolo` | VARCHAR(1024) NOT NULL | Titre |
| `auxtoro` | VARCHAR(128) NOT NULL | Auteur |
| `arthur_id` | INT | Référence auteur interne |
| `fonto` | VARCHAR(1024) | Source / URL d'origine |
| `sono` | VARCHAR(1024) | URL du fichier audio |
| `leganto` | VARCHAR(1024) | Nom du lecteur audio |
| `nivelo` | INT | Niveau de difficulté |
| `vortoj` | INT | Nombre de mots |
| `kolekto` | VARCHAR(64) | Collection d'appartenance |
| `etikedoj` | VARCHAR(1024) | Étiquettes/tags (format libre) |
| `teksto` | MEDIUMTEXT | Texte brut |
| `enhavo` | MEDIUMTEXT | Contenu HTML formaté |
| `aktiva` | TINYINT NOT NULL | Texte publié (0/1) |

---

### `legitajxoj` — Sessions de lecture

Enregistre chaque session de lecture d'un texte par un utilisateur.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `persono_id` | INT NOT NULL | Référence vers `personoj.id` |
| `teksto_id` | VARCHAR(64) NOT NULL | Référence vers `tekstoj.id` |
| `komenc_timestamp` | DATETIME NOT NULL | Début de la session |
| `fin_timestamp` | DATETIME | Fin de la session |
| `legad_tempo` | INT | Temps de lecture en secondes |
| `noto` | TINYINT | Note de 1 à 5 |
| `komentaro` | TEXT | Commentaire libre |
| `kreita_je` | DATETIME | Date de création |
| `modifita_je` | DATETIME | Date de modification |

Contrainte d'unicité : `(persono_id, teksto_id, komenc_timestamp)`

---

### `legotajxoj` — Liste de lecture (à lire)

Textes marqués "à lire" par un utilisateur.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `persono_id` | INT NOT NULL | Référence vers `personoj.id` |
| `teksto_id` | VARCHAR(64) NOT NULL | Référence vers `tekstoj.id` |
| `kreita_je` | DATETIME | Date d'ajout |
| `modifita_je` | DATETIME | Date de modification |

Contrainte d'unicité : `(persono_id, teksto_id)`

---

### `takso_leciono` — Évaluations de leçons

Notes laissées par les étudiants sur les leçons.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `dato` | TIMESTAMP | Date de l'évaluation |
| `persono_id` | INT NOT NULL | Référence vers `personoj.id` |
| `leciono_id` | INT NOT NULL | Référence vers `lecionoj.id` |
| `intereso` | INT NOT NULL | Note d'intérêt |
| `malfacileco` | INT NOT NULL | Note de difficulté |
| `komento` | TEXT NOT NULL | Commentaire libre |

---

### `eventoj` — Événements

Événements culturels ou associatifs.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `persono_id` | INT NOT NULL | Créateur (`personoj.id`) |
| `komenco` | DATE NOT NULL | Date de début |
| `fino` | DATE | Date de fin |
| `tipo` | ENUM('France','Europe','Ailleurs','Événements mondiaux') | Portée géographique |
| `priskribo` | TEXT NOT NULL | Description |
| `lando` | VARCHAR(100) NOT NULL | Pays |
| `departemento` | INT | Département (France) |
| `url` | TEXT NOT NULL | URL de l'événement |
| `mail` | TEXT NOT NULL | Contact e-mail |

---

### `protokolo` — Journal d'activité

Log des actions utilisateurs.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `persono_id` | INT | Utilisateur concerné |
| `horo` | DATETIME | Date/heure de l'action |
| `ip` | VARCHAR(32) | Adresse IP |
| `kategorio` | VARCHAR(32) | Catégorie de l'action |
| `teksto` | TEXT | Description de l'action |

---

### `rajtoj` — Droits / Rôles

Table de référence des rôles disponibles.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK | Identifiant |
| `kodo` | CHAR(3) NOT NULL | Code du rôle |
| `nomo` | VARCHAR(64) NOT NULL | Libellé |

---

### `landoj` — Pays

Table de référence des pays.

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK | Identifiant |
| `kodo` | VARCHAR(2) NOT NULL | Code ISO pays |
| `nomo` | VARCHAR(64) NOT NULL | Nom du pays |

---

### `monatoj` — Mois

Table de référence des mois (libellés localisés).

| Colonne | Type | Description |
|---|---|---|
| `id` | INT PK AUTO_INCREMENT | Identifiant |
| `kodo` | VARCHAR(2) NOT NULL | Code du mois |
| `nomo` | VARCHAR(64) NOT NULL | Nom du mois |

---

## Relations principales

```
kursoj (1) ──< lecionoj (N)
lecionoj (1) ──< lecioneroj (N)
lecioneroj (1) ──< ekzercoj (N)
ekzercoj (1) ──< ekzerceroj (N)

personoj (1) ──< nuna_kurso (N)          -- inscription au cours
personoj (1) ──< personoj_lecionoj (N)   -- progression leçons
personoj (1) ──< personoj_lecioneroj (N) -- progression sections
personoj (1) ──< respondoj (N)           -- réponses exercices
personoj (1) ──< personoj_vortoj (N)     -- progression vocabulaire
personoj (1) ──< legitajxoj (N)          -- sessions de lecture
personoj (1) ──< legotajxoj (N)          -- liste de lecture

ekzerceroj (1) ──< respondoj (N)
vortoj (1) ──< personoj_vortoj (N)
tekstoj (1) ──< legitajxoj (N)
tekstoj (1) ──< legotajxoj (N)
```

---

## Notes techniques

- La plupart des tables utilisent `ENGINE=MyISAM` (pas de transactions ni de clés étrangères enforced).
- `legitajxoj` et `legotajxoj` utilisent `ENGINE=InnoDB` avec `utf8mb4`.
- Les mots de passe sont stockés en MD5 (`pasvorto_md5`) — format legacy.
- Les suppressions sont souvent logiques via un champ `forigita TINYINT(1)`.
- Les énumérations en espéranto : `J` = Jes (oui), `N` = Ne (non).
