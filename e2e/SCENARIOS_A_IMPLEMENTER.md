# Scénarios à implémenter pour les tests Playwright e2e

Ce document liste les scénarios retenus, par priorité, avec leurs objectifs, prérequis, sélecteurs clés, endpoints/API/ajax impliqués et fichiers de test à créer/étendre. Il sert de feuille de route pour l'implémentation.

> Règle : ne jamais lancer les tests contre la prod. `playwright.config.ts` bloque déjà `esperanto-france.org`. Les tests créent/modifient des données et envoient des mails via MailHog.

## État actuel (référence)
- `tests/connexion.spec.ts` (7) - partiel (1 échec constaté)
- `tests/inscription.spec.ts` (4)
- `tests/parcours-eleve.spec.ts` (5, mode `serial`)
- Helpers : `helpers/auth.ts`, `helpers/db.ts`, `helpers/mailhog.ts`

## P0 - Critique (à implémenter en premier)

| # | Scénario | Fichier | Priorité | Statut | Description détaillée |
|---|---|---|---|---|---|
| P0-1 | Mot de passe oublié (flux modal) | `tests/mot-de-passe.spec.ts` (nouveau) | P0 | À faire | Depuis la modal "CONNEXION" → "Identifiant ou mot de passe oublié" → modal `#sendi_novan_pasvorton`. Saisir email d'un compte existant (ex. `lernanto1@mailinator.com`) → clic `#sendi_novan_pasvorton_button`. Attendre mail via MailHog avec sujet contenant "mot de passe" / template `mails/novigiPasvorton.html`. Extraire lien `novigiPasvorton.php?...` via `linkFromMail()` (gérer URL tronquée). Ouvrir le lien → modal `#novigi_pasvorton` visible, saisir nouveau mot de passe dans `#novigi_pasvorton_pasvorto`, cliquer `#novigi_pasvorton_sendi_button`. Vérifier redirection vers accueil / message de succès. Se connecter avec le nouveau mot de passe via `login()` → succès. Restaurer éventuellement le mot de passe initial si nécessaire (ou s'assurer que le reset ne casse pas l'état global - à voir). |
| P0-2 | Renvoyer le mail d'activation | `tests/inscription.spec.ts` (extension) | P0 | À faire | Étendre le test existant "un compte non activé ne peut pas se connecter" : après avoir créé un compte non activé, tenter de se connecter → bouton `#sendi_denove_aktivigilo_button` visible. Cliquer dessus → attendre nouveau mail d'activation dans MailHog (sujet "Activation de votre compte"). Extraire lien `aktivigi.php` → ouvrir → compte activé (`aktivigita=1` en base), redirection `personinformoj.php?aktivigo=ok`. |
| P0-3 | Lien d'activation invalide | `tests/inscription.spec.ts` (extension) | P0 | À faire | Ouvrir directement `aktivigi.php?retadreso=inexistant@mailinator.com&aktivigo=mauvaisecle` → vérification via `hash_equals()`. Attendu : redirection vers `index.php?erarkodo=18` (selon code `aktivigi.php`). À confirmer par le test. |
| P0-4 | Élève envoie sa leçon 2 au correcteur | `tests/parcours-eleve.spec.ts` (extension) | P0 | À faire | Après attribution du correcteur (déjà fait dans le parcours), passer `lernanto1` en état pour envoyer la leçon 2. Aller sur `fr/cge/lec02.php` (ou utiliser l'interface pour envoyer). Cliquer `#sendiLecionon_button` (présent dans `vidiLecionon.php`/interface). Attendre mail "Nouvelle leçon" envoyé au correcteur `korektanto1@mailinator.com`. Vérifier en base : entrée `personoj_lecionoj` mise à jour / statut envoyé, ou logs. Selon `ajax/sendiLecionon.php`. |
| P0-5 | Correcteur reprend un élève abandonné | `tests/correcteur.spec.ts` (nouveau) | P0 | À faire | Marquer un élève comme abandonné depuis l'interface correcteur : depuis `miajlernantoj.php`, onglet approprié ou action "A abandonné" (`miajlernantoj2.php` avec `leciono = <kursid>-H`). Vérifier passage en `stato='H'` dans `nuna_kurso`. Aller dans onglet "Anciens élèves" (`?eksaj=jes`). Formulaire pour reprendre : poster vers `repreniLernanton.php` avec `studanto`, `enirnomo`, `idnunaKurso`. Vérifier retour en `stato='K'` / réapparition dans "Élèves en cours". |

### Points techniques P0
- **Mot de passe oublié** : utiliser `clearMails()` avant le test. `linkFromMail()` gère les URLs tronquées par `$urlracine` sans `/` final.
- **Activation** : `resetTestData()` remet les comptes de test dans l'état initial (important pour P0-2/P0-3).
- **Envoi leçon** : `parcours-eleve.spec.ts` est en mode `serial`, il faut être prudent avec l'ordre ou bien réinitialiser l'état nécessaire.
- **Reprendre élève** : nécessite de pouvoir créer un état "abandonné". Peut passer par le parcours correcteur existant ou directement en base via `helpers/db.ts` si nécessaire, mais privilégier l'UI quand c'est raisonnable.

## P1 - Important (après P0)

| # | Scénario | Fichier | Priorité | Statut | Description détaillée |
|---|---|---|---|---|---|
| P1-1 | Section de texte "Terminé !" | `tests/parcours-eleve.spec.ts` (extension) | P1 | À faire | Naviguer vers une section de type texte dans une leçon. Cliquer bouton "Terminé !" (lié à `ajax/finiLecioneron.php` / `#finiLecioneron_button`). Vérifier marquage complété dans `personoj_lecioneroj`. Passage automatique/manuel à la section suivante. |
| P1-2 | Exercice "Enregistrer mes réponses" (incomplet/complet) | `tests/parcours-eleve.spec.ts` (extension) | P1 | À faire | Sur un exercice nécessitant "Enregistrer mes réponses" (`#registriEkzercaron_button`, `ajax/registriEkzercaron.php`), soumettre formulaire incomplet → refus/erreur. Soumettre complet → accepté, réponses enregistrées en base (`respondoj`). |
| P1-3 | Exercice de rédaction (texte libre) | `tests/parcours-eleve.spec.ts` (extension) | P1 | À faire | Remplir zone de texte libre dans un exercice. Enregistrer → réponse sauvegardée dans `respondoj`. Vérifier qu'elle apparaît dans `vidiLecionon.php` et dans l'interface de correction `korektiLecionon.php`. |
| P1-4 | Notation x (normalisation cx → ĉ) | `tests/parcours-eleve.spec.ts` (extension) | P1 | À faire | Dans un champ auto-corrigé, taper `La cxaro estas rapida.` (ou équivalent) → normalisation via JS (`ikurso.js`). Vérifier que la réponse est acceptée si elle correspond à la bonne réponse normalisée. Vérifier classe `valid` ou comportement attendu. |
| P1-5 | Visiteur non connecté ne peut pas enregistrer | `tests/parcours-eleve.spec.ts` (extension) | P1 | À faire | Sans session, ouvrir `fr/cge/lec01.php`. Tenter d'enregistrer une réponse → soit champs désactivés, soit refus AJAX/erreur. Ne pas créer de session. |
| P1-6 | Attribution sans correcteur disponible | `tests/attribution.spec.ts` (nouveau) | P1 | À faire | **À surveiller attentivement** (bug potentiel mentionné dans README). Remplir les créneaux de tous les correcteurs disponibles pour le cours CG (via `korektebla_kurso` ou en utilisant les correcteurs existants). Demander un correcteur via `ajax/petiKorektanton.php`. Observer le comportement : soit message d'erreur, soit attribution avec `nua_kurso.korektanto` NULL. À documenter si NULL est inséré dans une colonne NOT NULL. |
| P1-7 | Capacité correcteur respectée (max 3 élèves) | `tests/attribution.spec.ts` (nouveau) | P1 | À faire | Vérifier que `korektanto1` a `kiom_lernantoj` limité. Avec 3 élèves déjà attribués, un nouvel élève ne doit pas lui être attribué automatiquement (devrait aller à un autre correcteur ou rester en attente). |
| P1-8 | Élève voit chaque correction sous l'exercice | `tests/parcours-eleve.spec.ts` (extension) | P1 | À faire | Après correction complète, se connecter en `lernanto1`, aller sur `vidiLecionon.php?numleciono=1&kurso=CG`. Vérifier présence du commentaire `Bravo pour cette première leçon (e2e)` (déjà testé partiellement) et de la correction `Attention à l’accord (e2e)` sous la réponse concernée. Vérifier balises/classes associées. |
| P1-9 | Case "ne pas envoyer de mail" respectée | `tests/correcteur.spec.ts` (extension) | P1 | À faire | Cocher `#pas_envoi_email` lors de la correction. Vérifier qu'aucun mail n'est envoyé à `lernanto1@mailinator.com` pour cette correction. Comparer avec le cas où le mail est envoyé (déjà testé). |

## P2 - Important mais moins critique

| # | Scénario | Fichier | Priorité | Statut | Description détaillée |
|---|---|---|---|---|---|
| P2-1 | Révision vocabulaire - apparition après leçon | `tests/vocabulaire.spec.ts` (nouveau) | P2 | À faire | Après avoir fait des exercices contenant des mots, ceux-ci apparaissent dans `memoriVortojn.php`. `aldoniNovajnVortojnEnMemorilo()` doit avoir ajouté les mots. |
| P2-2 | Révision vocabulaire - bonne/mauvaise réponse | `tests/vocabulaire.spec.ts` (nouveau) | P2 | À faire | Dans `memoriVortojn.php`, répondre correctement → "Bravo !" (ou message équivalent). Répondre incorrectement → affiche la bonne réponse. Vérifier via `ajax/kontroliVorton.php`. |
| P2-3 | Révision vocabulaire - aucun mot à réviser | `tests/vocabulaire.spec.ts` (nouveau) | P2 | À faire | Quand plus aucun mot à réviser, afficher message "Aucun mot à réviser". |
| P2-4 | Modifier ses informations personnelles | `tests/espace-perso.spec.ts` (nouveau) | P2 | À faire | Se connecter en tant qu'élève. Aller sur `sxangxipersoninformojn.php`. Changer `personnomo`, `familinomo`, `urbo`, `lando`, décocher/cocher `#rappel`, `#saviezvous`. Soumettre → redirection `personinformoj.php?erarkodo=20`. Vérifier mise à jour en base. Vérifier log dans `protokolo` "UPDATE PERSO". |
| P2-5 | Supprimer son compte | `tests/espace-perso.spec.ts` (extension) | P2 | À faire | Aller sur `forigiKonton.php`. Saisir mot de passe correct dans `#pasvorto`. Confirmer suppression → déconnecté, redirigé `index.php?erarkodo=26`. Vérifier via `KontoAPI` que compte supprimé / rendu inaccessible. Ne pas utiliser les comptes de test principaux (créer un compte temporaire). |
| P2-6 | Recommencer un cours | `tests/espace-perso.spec.ts` (extension) | P2 | À faire | Aller sur `rekomenciKurson.php`, sélectionner cours, cocher confirmation, saisir mot de passe. Soumettre → redirection `personinformoj.php?erarkodo=27`. Vérifier progression effacée en base. |
| P2-7 | Attribution manuelle par administrateur | `tests/admin.spec.ts` (nouveau) | P2 | À faire | Se connecter en `administranto`. Aller sur `administri.php` dans catégorie "Attendent un correcteur" (`P`). Sélectionner un étudiant en attente, assigner un correcteur via `administriNunanKurson.php`. Vérifier `nuna_kurso` créé avec `korektanto`, `stato`, `nunleciono=1`. Vérifier mails envoyés (`doniStu*`, `doniKor*`). |
| P2-8 | Changer correcteur (administrateur) | `tests/admin.spec.ts` (extension) | P2 | À faire | Élève déjà attribué à `korektanto1`. Admin change vers autre correcteur disponible → `nuna_kurso.korektanto` mis à jour. Mails `redoniStu*`, `redoniKor*` envoyés. |
| P2-9 | Admin se fait passer pour élève puis revient | `tests/admin.spec.ts` (extension) | P2 | À faire | Admin voit un élève dans `administri.php` → clic pour impersonnification (`eniri-por-administranto.php?persono_id=...`) → redirigé selon droits de l'élève (devrait arriver sur parcours élève). Aller sur `eliri.php` → session admin restaurée (`admin_id`), retour `administri.php`. Vérifier restauration session. |
| P2-10 | Correcteur change sa capacité max d'élèves par cours | `tests/correcteur.spec.ts` (extension) | P2 | À faire | Se connecter en `korektanto1`. Aller sur `sxangxiNBlernantoj.php`. Changer valeur pour cours CG → soumettre vers `sxangxiNBlernantoj2.php`. Vérifier mise à jour `korektebla_kurso.kiom_lernantoj`. Vérifier log dans `protokolo` avec message contenant "kiom_lernantoj". |
| P2-11 | Événements locaux - ajouter/supprimer | `tests/evenements.spec.ts` (nouveau) | P2 | À faire | Aller sur `eventoj.php?action=add`. Remplir formulaire (`#priskribo`, `#komenco`, `#fino`, `#url`, `#mail`, département/radios). Soumettre via AJAX `ajax/registriEventon.php`. Vérifier apparition dans liste. Supprimer via `ajax/deleteEventon.php` (bouton avec `.delete_evento[data-evento]`). |

## P3 - Administration/édition/infra

| # | Scénario | Fichier | Priorité | Statut | Description détaillée |
|---|---|---|---|---|---|
| P3-1 | Redaktilo s'affiche et liste les cours | `tests/admin-redaktilo.spec.ts` (nouveau) | P3 | À faire | Se connecter en `administranto`. Aller sur `redaktilo.php`. Vérifier absence de page blanche, liste de cours/sections visible. (Aurait détecté la page blanche d'octobre 2026 mentionnée dans le contexte.) |
| P3-2 | Statistiques basiques | `tests/admin-stats.spec.ts` (nouveau) | P3 | À faire | Accès `statistikoj.php`, `statLauxKurso.php`, etc. Vérifier affichage graphique/tableaux sans erreur PHP. Accès restreint aux admins/correcteurs selon pages. |
| P3-3 | Export données JSON | `tests/admin-export.spec.ts` (nouveau) | P3 | À faire | `eksportiDatumojn.php` → déclenche export via `EksportoAPI`. Vérifier téléchargement/réponse JSON avec données attendues. |
| P3-4 | API - auth/me avec session cookie | `tests/api.spec.ts` (nouveau) | P3 | À faire | Via Playwright `request` ou `page.request`. Se connecter via UI pour obtenir cookie session, puis `GET http://localhost:8080/api.php?path=auth/me` → 200 avec user/cours_info. Sans cookie → 401. |
| P3-5 | API - Tekstoj list avec filtres/pagination | `tests/api.spec.ts` (extension) | P3 | À faire | `GET /api.php?path=tekstoj?q=...&kolekto=...&limit=5&offset=0` → structure `data` + `pagination`. Vérifier tri whitelist, filtres fonctionnels. |
| P3-6 | API - CORS/CSRF enforcement | `tests/api.spec.ts` (extension) | P3 | À faire | POST vers `api.php` avec header `Origin: http://evil.example.com` et cookies auth → 403. OPTIONS préflight depuis origine autorisée → 200 avec headers CORS. POST sans Origin avec auth cookies et Referer non autorisé → 403. |
| P3-7 | Diplôme avec clé valide/invalide | `tests/diplome.spec.ts` (nouveau) | P3 | À faire | Étudiant avec `stato='F'` dans `nuna_kurso` → `diplome.php?kurso=CG&clef=...` accessible. Étudiant non terminé → redirigé `personinformoj.php?erarkodo=17`. Clé invalide → refus. |

## Stratégie d'implémentation

1. **Créer le fichier de suivi** : `e2e/SCENARIOS_A_IMPLEMENTER.md` (ce fichier) ✓
2. **Démarrer avec P0** : Créer `tests/mot-de-passe.spec.ts` et étendre `tests/inscription.spec.ts`, `tests/parcours-eleve.spec.ts`, créer `tests/correcteur.spec.ts`
3. **Vérifier l'existant** : Avant d'ajouter, s'assurer que les tests existants tournent (corriger l'échec constaté si nécessaire, mais rester minimal)
4. **Utiliser les helpers existants** : `login()`, `resetTestData()`, `sql()`, `clearMails()`, `waitForMail()`, `linkFromMail()`
5. **Mode série si nécessaire** : Pour les tests partageant un état complexe, utiliser `test.describe.configure({ mode: 'serial' })` comme dans `parcours-eleve.spec.ts`
6. **Nettoyage** : Ne pas laisser de données temporaires qui casseraient `resetTestData()`; privilégier reset ou utilisation des comptes de test

## Notes importantes
- **Bug potentiel P1-6** : "Le code insère alors NULL dans une colonne obligatoire" - à tester en conditions réelles et à consigner le résultat dans le test/commentaire
- **Mot de passe oublié legacy** : `pasvortoforgesita.php` envoie mot de passe en clair (dangereux) mais existe toujours - ne pas toucher
- **Notation x** : Spécifique à l'espéranto, logique dans `js/ikurso.js`
- **MailHog requis** : Docker doit tourner avec mailhog
- **Base de données partagée** : Tests en série recommandés, reset régulier
- **Multi-langues** : Principalement français dans les tests, cohérent avec l'existant
