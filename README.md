# ikurso
kurso de esperanto

Logiciel web contenant le cours et les outils d'administration du site https://ikurso.esperanto-france.org
Le cours initial est dans domaine public et les modifications qui y ont été apporté sont sous licence libre.

# Comment nous aider ?

Nous avons besoin d'aide pour un certain nombre d'amélioration que nous avons en tête (voir la liste des issues pour le détail). Nous avons taggué comme "facile" celle qui sont plus abordable à des débutants dans le projet.

Pour installer en local une version du site utilisable, il vous suffit d'installer un serveur apache+php+mysql (Wamp fonctionne bien sous windows).
Puis télécharger le cours, il vous suffit de le cloner avec la commande : 

git clone git@github.com:axel584/ikurso.git

De créer une base MySQL et un utilisateur et d'attribuer à l'utilisateur les droits qui vont bien à la base (phpMyAdmin permet de faire tout ceci assez simplement)

D'inserer en base le fichier qui se trouve dans sql/create-database.sql
Et insérer également les données qui permettent de faire fonctionner le site (les cours, le vocabulaire, la liste des leçons etc.) en exécutant le script sql/create-data.sql

Et insérer le script sql/create-data-test.sql pour insérer un compte (on peut aussi s'inspirer du contenu de ce fichier pour choisir l'identifiant/mot de passe/adresse email de l'administrateur et/ou des premières correcteurs

De créer à la racine un fichier config.php contenant les informations suivante :
```
<?php
$base = "ikurso";
$login = "identifiant";
$motDePasse = "monmotdepasse";
$urlracine = "http://127.0.0.1/ikurso/"; // ça peut être l'adresse ip publique si on veut que le site soit accessible de l'extérieur
$cheminAbsolu = "/ikurso/";
$hostSmtp = "smtp.free.fr";
$portSmtp = 587;
$hostSmtpSES = "email-smtp.eu-west-1.amazonaws.com";
$portSmtpSES = 587;
$userSES = "USER_SES"; // pour l'envoi des mails via amazon
$passwordSES = "mot de passe Amazon SES";
?>
```
De créer dans le répertoire js un fichier config.js contenant les informations suivantes :

```
$urlracine = "http://localhost/ikurso/"; // ou bien "http://ikurso.esperanto-france.org" pour la prod
$cheminAbsolu = "/ikurso/"; // peut aussi avoir comme valeur "/" si le site est accessible à la racine du domaine
```

et de se connecter à l'adresse http://localhost/ikurso

# Organisation du code 

Voici une description des répertoires les plus importants : 

- /ajax : contient les scripts qui sont appelés par des appels ajax
- /bildoj : contient les images du sites
- /cron : contient les scripts qui sont appelés toutes les nuits (principalement pour les rappels automatique).
- /db : couche "DAO"
- /fr : contiennt les cours. Les répertoires les plus importants sont les sous-répertoires /fr/cge et /fr/gerda. Ils ont été historiquement mis dans un sous répertoire /fr dans le but de faire une version par langue, mais ça n'a jamais pris.
- /ikurso : contient la version "android" du site (pour Cordova)
- /js : contient les scripts javascript (souvent utilisés avec les fichiers php du répertoire /ajax
- /mails : il s'agit des "template" des messages qui sont envoyés automatiquement. On utilise des variables ##VARIABLE## qui sont ensuite remplacé par le code qui envoit les mails. A noter que certains mails se terminent par FR pour indiquer qu'ils sont envoyés à des francophones. Les autres langues ne sont plus utilisés.
- /python : script python pour faire quelques analyses statistiques sur la base (nécessaire un fichier de configuration similaire au config.php mais en python)
- /soundmanager2 : bibliothèque externe pour jouer des mp3
- /sql : code sql pour alimenter la base (create.sql) et pour suivre les nouvelles versions (changelog.sql)

# Organisation de la base 

Voici une descriptions des tables les plus importantes :

- ekzerceroj : question d'un exercice
- ekzercoj : exercice à rédiger. Un exercice contient plusieurs questions "ekzerceroj"
- komentoj : commentaire qu'un correcteur peut laisser sur son élève
- korektebla_kurso : nombre d'élèves qu'un correcteur accepte de prendre pour un cours donné
- kursoj : liste des cours (actuellement 4)
- landoj : liste des pays (n'est pas exhaustif afin d'éviter une liste trop longue car nous n'avons que des élèves francophones)
- lecioneroj : section d'une leçon
- lecionoj : leçon. Une leçon contient plusieurs sections "lecioneroj"
- nuna_kurso : cours actuellement suivi par un élève avec la dernière leçon envoyée et le correcteur qui lui est attribué
- personoj : table des élèves/correcteurs/administrateurs
- personoj_lecioneroj : table des jointures élèves/section
- personoj_lecionoj : table des jointures élèves/leçons
- personoj_vortoj : table des jointures élèves/mots (pour l'apprentissage des mots). Contient le nombre de fois où le mot a été correctement répondu et la date à laquelle le mot devra être ré-appris
- personoj_vortoj_respondoj : table de l'historique des réponses donnés à l'apprentissage des mots.
- protokolo : table "log"
- qcm / qcm_demando / qcm_propono : tables pour faire des QCM, n'est utilisé que pour l'application android
- rajtoj : liste des droits (élève/correcteur/administrateur)
- respondoj : réponses des élèves pour un "ekzerceroj" donné.
- takso_leciono : évaluation d'une leçon par l'élève (note et champ libre)
- vortoj : liste des mots (pour outil de révision des mots)

Les tables contenant les données propres à l'application (liste des leçons/exercices etc.) n'ont pas d'autoincrémente sur leur clef primaire, en revanche, les tables contenant les données générés à l'utilisation (compte utilisateur, table de jointures etc.) ont un champ id qui est indiqué en auto_increment.

En cas de problème, n'hésitez pas à me contacter : axel584@gmail.com

