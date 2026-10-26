# Tests e2e (Playwright)

Tests de bout en bout qui pilotent un vrai navigateur sur l'environnement Docker local.
Ils couvrent d'abord ce qui compte pour le site : qu'une personne puisse s'inscrire,
apprendre l'espéranto et être corrigée.

> ⚠️ Ne jamais lancer ces tests contre la prod : ils créent des comptes, envoient des
> leçons et déclenchent des mails. `playwright.config.ts` refuse toute URL `esperanto-france.org`.

## Lancer les tests

```bash
docker compose up -d          # depuis la racine du projet (web, db, mailhog)
cd e2e
npm install                   # une seule fois
npx playwright install chromium
npx playwright test           # tous les tests
npx playwright test --ui      # mode interactif, pas à pas
npx playwright codegen http://localhost:8080/   # enregistre des clics pour écrire un test
```

- Chaque fichier de test remet les comptes de test dans leur état initial en rejouant
  `sql/03-create-data-test.sql` dans le conteneur `ikurso_mysql` (`helpers/db.ts`).
- Les mails sont lus dans MailHog (http://localhost:8025) via `helpers/mailhog.ts`.
- Les nouvelles adresses utilisent `@mailinator.com` : l'inscription vérifie que le domaine
  a un serveur mail. Rien n'est réellement envoyé, tout part dans MailHog.
- Les tests tournent l'un après l'autre (une seule base partagée).

## Comptes de test

| Identifiant | Mot de passe | Rôle | État de départ |
|---|---|---|---|
| `administranto` | `test` | A | administrateur |
| `korektanto1` | `test` | K | corrige le cours CG, 3 élèves max, aucun élève |
| `lernanto1` | `test` | P | leçon 1 du CG faite sauf la dernière section, pas de correcteur |

## Plan

Priorités : **P1** = cœur du site, à faire en premier · **P2** = important · **P3** = utile ensuite.
L'administration et l'édition du contenu (redaktilo, statistiques) passent en dernier.

### 1. Connexion — `tests/connexion.spec.ts` ✅
| Prio | Scénario | État |
|---|---|---|
| P1 | Un élève se connecte et arrive sur la suite de sa leçon | ✅ |
| P1 | Un correcteur se connecte et arrive sur « mes élèves » | ✅ |
| P1 | Un administrateur arrive sur l'administration | ✅ |
| P1 | Mauvais mot de passe refusé | ✅ |
| P1 | Identifiant inconnu refusé | ✅ |
| P1 | La déconnexion ferme la session | ✅ |
| P2 | Connexion avec l'adresse mail au lieu de l'identifiant (#516) | ✅ |

### 2. Inscription — `tests/inscription.spec.ts` ✅
| Prio | Scénario | État |
|---|---|---|
| P1 | Inscription → mail d'activation → lien → compte actif → accès à la leçon 1 | ✅ |
| P1 | Adresse mail déjà utilisée refusée | ✅ |
| P1 | Identifiant déjà pris refusé | ✅ |
| P1 | Un compte non activé ne peut pas se connecter (bouton « renvoyer » visible) | ✅ |
| P2 | « Renvoyer le mail d'activation » envoie un nouveau mail qui fonctionne | ✅ |
| P2 | Lien d'activation avec un mauvais code → message d'erreur | ✅ |
| P3 | Inscription au cours « Kurso de Esperanto » (`aligxi.php`) | à faire |

### 3. Mot de passe oublié — `tests/mot-de-passe.spec.ts` ✅
| Prio | Scénario | État |
|---|---|---|
| P1 | Demande → mail → lien → nouveau mot de passe → connexion avec le nouveau | ✅ |
| P2 | Adresse inconnue → message d'erreur | à faire |

### 4. Faire une leçon — `tests/parcours-eleve.spec.ts` (début ✅)
| Prio | Scénario | État |
|---|---|---|
| P1 | Exercice auto-corrigé : bonne réponse validée, mauvaise non, réponse enregistrée | ✅ |
| P1 | QCM : une mauvaise réponse ne fait pas avancer, le QCM se termine | ✅ |
| P1 | Section de texte : « Terminé ! » marque la section et passe à la suivante | à faire |
| P1 | Exercice : « Enregistrer mes réponses » refuse s'il manque une réponse, accepte sinon | à faire |
| P1 | Nouvel élève (inscrit dans le test) qui fait la leçon 1 entière de bout en bout | à faire |
| P2 | Exercice de rédaction (zone de texte libre) enregistré | à faire |
| P2 | Saisie des lettres accentuées avec la notation x (`cx` → `ĉ`) acceptée | à faire |
| P2 | Un visiteur non connecté peut faire les exercices en mode invité (#1092, `tests/mode-invite.spec.ts`) | ✅ |
| P3 | Cours « Gerda malaperis » : ouvrir un chapitre et répondre | à faire |

### 4 bis. Mode invité (#1092) — `tests/mode-invite.spec.ts` ✅
| Prio | Scénario | État |
|---|---|---|
| P1 | Lire une leçon ne crée pas d'invité | ✅ |
| P1 | Première réponse → invité créé, réponse corrigée, enregistrée et réaffichée avec le bandeau | ✅ |
| P1 | « Terminé ! » marque la section, passe à la suivante, ajoute les mots à réviser | ✅ |
| P1 | Fin de leçon : « Créer un compte pour être corrigé » au lieu de « Demander un correcteur » | ✅ |
| P1 | Inscription : la ligne de l'invité devient le compte, réponses conservées après activation | ✅ |
| P1 | Connexion : fusion dans le compte existant (réponse la plus récente, sauf réponse déjà corrigée) | ✅ |
| P2 | L'identifiant technique d'un invité ne permet pas de se connecter | ✅ |
| P2 | Le cron `forigi_gastojn.php` supprime les invités inactifs depuis 6 mois | ✅ |

### 5. Attribution d'un correcteur — `tests/parcours-eleve.spec.ts` (début ✅)
| Prio | Scénario | État |
|---|---|---|
| P1 | Fin de leçon 1 → « Demander un correcteur » → correcteur attribué automatiquement + mails | ✅ |
| P1 | Le correcteur voit son nouvel élève dans « mes élèves » | ✅ |
| P1 | Leçon 2 → « Envoyer à mon correcteur » → mail « Nouvelle leçon » au correcteur | à faire |
| P2 | Plus aucun correcteur disponible (capacité atteinte) → comportement attendu | à faire ¹ |
| P2 | Un correcteur avec 3 élèves n'en reçoit pas un 4ᵉ | à faire |
| P2 | Attribution manuelle par un administrateur (`administriNunanKurson.php`) | à faire |
| P3 | Le correcteur marque un élève « a abandonné », puis le récupère (`tests/correcteur.spec.ts`) | ✅ |

¹ Le code insère alors `NULL` dans une colonne obligatoire : à vérifier, c'est probablement un bug.

### 6. Correction — `tests/parcours-eleve.spec.ts` (début ✅)
| Prio | Scénario | État |
|---|---|---|
| P1 | Le correcteur corrige une réponse + commentaire, l'élève reçoit le mail et voit le commentaire | ✅ |
| P1 | L'élève voit la correction de chaque réponse sous l'exercice | à faire |
| P2 | Note par question (quand l'exercice est noté) enregistrée | à faire |
| P2 | Case « ne pas envoyer de mail » respectée | à faire |
| P2 | Un élève ne peut pas ouvrir la page de correction | à faire |

### 7. Révision du vocabulaire — `tests/vocabulaire.spec.ts`
| Prio | Scénario | État |
|---|---|---|
| P2 | Après une leçon, les mots apparaissent à réviser | à faire |
| P2 | Bonne réponse → « Bravo ! », mauvaise → affiche la bonne réponse | à faire |
| P3 | Plus rien à réviser → message « Aucun mot à réviser » | à faire |

### 8. Espace personnel — `tests/espace-perso.spec.ts`
| Prio | Scénario | État |
|---|---|---|
| P2 | Modifier ses informations (nom, pays…) | à faire |
| P3 | Diplôme disponible en fin de cours | à faire |

### 9. Administration et édition (en dernier)
| Prio | Scénario | État |
|---|---|---|
| P3 | Le redaktilo s'affiche et liste les cours (aurait détecté la page blanche d'octobre 2026) | à faire |
| P3 | Un administrateur se fait passer pour un élève puis revient | à faire |

## Bugs trouvés en écrivant ces tests

- **Schéma local incomplet** : la colonne `respondoj.poentoj` manquait dans
  `sql/01-create-database.sql` (elle existe en prod). En local, la page de correction
  n'affichait aucune réponse. Corrigé dans le fichier SQL.
- **`$urlracine` sans `/` final en dev** : les liens des mails ressemblent à
  `http://localhost:8080aktivigi.php?...`. Les tests contournent en ne gardant que le
  chemin (`linkFromMail`).

## GitHub Actions

Le workflow `.github/workflows/e2e.yml` lance ces tests à chaque push sur `master`, sur
chaque pull request, et à la demande (onglet Actions → « Tests e2e » → *Run workflow*).
Il crée un `config.php` et un `js/config.js` de test (sans aucun secret de prod), installe
`vendor/` avec Composer, démarre `web`, `db` et `mailhog` avec `docker compose`, attend
la fin de l'import de `sql/*.sql`, puis lance `npx playwright test`.

En cas d'échec, le rapport Playwright (captures, traces) est disponible dans l'artefact
`playwright-report` de l'exécution, et les journaux Docker sont affichés dans l'étape
« Journaux Docker ».
