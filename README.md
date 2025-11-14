# ikurso
kurso de esperanto

Logiciel web contenant le cours et les outils d'administration du site https://ikurso.esperanto-france.org
Le cours initial est dans domaine public et les modifications qui y ont été apportées sont sous licence libre.

# Comment nous aider ?

Nous avons besoin d'aide pour un certain nombre d'améliorations que nous avons en tête (voir la liste des issues pour le détail). Nous avons taggué comme "facile" celles qui sont plus abordables à des débutants dans le projet.

1. INSTALLER EN LOCAL UNE VERSION DU SITE UTILISABLE, il vous suffit d'installer un serveur apache+php+mysql (Wamp fonctionne bien sous Windows).

2. TÉLÉCHARGER LE COURS. Pour cela vous suffit de le cloner avec la commande : 

git clone git@github.com:axel584/ikurso.git

3. À LA RACINE CRÉER LE FICHIER config.php contenant les informations suivante :
```php
<?php
$urlDb = "db";
$base = "ikurso";
$login = "ikurso_user";
$motDePasse = "ikurso_pass";
$urlracine = "http://localhost:8080";
$hostSmtp = "smtp.free.fr";
$portSmtp = 587;
$hostSmtpSES = "email-smtp.eu-west-1.amazonaws.com";
$portSmtpSES = 587;
$userSES = "USER_SES";
$passwordSES = "mot de passe Amazon SES";
$milestone = 1;
?>
```
4. DANS LE RÉPERTOIRE js CRÉER LE FICHIER config.js contenant les informations suivantes :

```
$urlracine = "http://localhost:8080/";
$cheminAbsolu = "/";
```

5. Lancer l'application (voir ci-dessous LANCEMENT DE L'APPLICATION), puis lancer PG Admin en allant sur: http://localhost:8081/

6. CRÉER UNE BASE MySQL et un utilisateur, et attribuer à l'utilisateur les droits qui vont bien à la base (phpMyAdmin permet de faire tout ceci assez simplement). 

7. CRÉER LE CONTENU DE LA BASE. Pour cela :
* insérer le script sql/01-create-database.sql (crée les tables)
* insérer le script sql/02-create-data.sql (crée les données pour les cours, le vocabulaire, les leçons, etc.)
* insérer le script sql/03-create-data-test.sql (crée les comptes utilisateur de test). 
  On peut aussi s'inspirer du contenu de ce fichier pour choisir l'identifiant/mot de passe/adresse email de l'administrateur et/ou des premiers correcteurs.


LANCEMENT DE L'APPLICATION
------

Lancer avec Docker compose : 
```docker compose up --build```
Cela lance postgres, pgadmin et l'application ikurso.

PG Admin est accessible sur: http://localhost:8081/
L'application est accessible sur : http://localhost:8080/

Pour relancer l'appli (et réinitialiser avec les données de base):
```
docker compose down -v
docker compose up --build
```

Pour arrêter l'application : 
```docker compose stop```

COMPTES DE TEST
------

Vous aurez 3 comptes pour tester l'application : 
* administranto/test : un compte d'administration
* korektanto1/test : un compte de correcteur
* lernanto1/test : un compte d'élève

NI LEGU
-----
Installation 
------
npm install -g serve


Build
------
cd react-src/nilegu
npm run build
serve -s build
cp -R build/* ../../nilegu

il faut ajouter "homepage": "/nilegu", dans le package.json


En cas de problème, n'hésitez pas à me contacter : axel584@gmail.com


# Organisation du code 

Voici une description des répertoires les plus importants : 

- /ajax : contient les scripts qui sont appelés par des appels ajax
- /bildoj : contient les images du sites
- /cron : contient les scripts qui sont appelés toutes les nuits (principalement pour les rappels automatiques).
- /db : couche "DAO"
- /fr : contient les cours. Les répertoires les plus importants sont les sous-répertoires /fr/cge et /fr/gerda. Ils ont été historiquement mis dans un sous répertoire /fr dans le but de faire une version par langue, mais ça n'a jamais pris.
- /ikurso : contient la version "android" du site (pour Cordova)
- /js : contient les scripts javascript (souvent utilisés avec les fichiers php du répertoire /ajax
- /mails : il s'agit des "templates" des messages qui sont envoyés automatiquement. On utilise des variables ##VARIABLE## qui sont ensuite remplacés par le code qui envoit les mails. À noter que certains mails se terminent par FR pour indiquer qu'ils sont envoyés à des francophones. Les autres langues ne sont plus utilisées.
- /python : script python pour faire quelques analyses statistiques sur la base (nécessite un fichier de configuration similaire au config.php mais en python)
- /soundmanager2 : bibliothèque externe pour jouer des mp3
- /sql : code sql pour alimenter la base (create.sql) et pour suivre les nouvelles versions (changelog.sql)

# Organisation de la base 

Voici une description des tables les plus importantes :

- ekzerceroj : questions d'un exercice
- ekzercoj : exercices à rédiger. Un exercice contient plusieurs questions "ekzerceroj"
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

Les tables contenant les données propres à l'application (liste des leçons/exercices etc.) n'ont pas d'autoincrément sur leur clef primaire, en revanche, les tables contenant les données générées à l'utilisation (compte utilisateur, table de jointures etc.) ont un champ id qui est indiqué en auto_increment.

# Checklist à vérifier avant une mise en prod

- mettre à jour le numéro de version dans le fichier config.php ($milestone)
- s'assurer que le fichier kionova.php est à jour
- récupérer le code dans le répertoire ~/ikurso/ avec un git pull
- mettre à jour le sql de la base à partir du changelog.sql
- copier les fichiers depuis ~/ikurso vers /arthur/sites/ikurso (avec un cp -R)
- déplacer les issues non faite vers le milestone suivant (ou vers le backlog)
- faire des vérifications minimales (création d'un compte, remplissage d'une leçon) (à remplacer par le lancement des tests fonctionnels en prod ?)
- générer une release dans github (code, release, draft new release)
- Faire un mail aux correcteurs pour leur parler des nouveautés.


Base de données
---------------

Création d'un utilisateur *ikurso* et de la base de données *ikurso_database* :
```sql
CREATE USER 'ikurso'@'localhost' IDENTIFIED BY 'password';
CREATE DATABASE ikurso_database;
GRANT ALL ON ikurso_database.* TO 'ikurso'@'localhost';
FLUSH PRIVILEGES;
exit
```

Insertion dans la base de données:
```sh
mariadb -u ikurso -p ikurso_database < sql/01-create-database.sql
mariadb -u ikurso -p ikurso_database < sql/02-create-data.sql
mariadb -u ikurso -p ikurso_database < sql/03-create-data-test.sql
```

Apache : hôte virtuel ikurso.localhost
--------------------------------------

```sh
ln -s /chemin/absolu/vers/ikurso /var/www/
chown $USER:www-data /var/www/ikurso
```

```sh
cat > /etc/apache2/sites-available/ikurso.conf <<EOF 
<VirtualHost *:80>
    ServerName ikurso.localhost
    DocumentRoot "/var/www/ikurso"
    <Directory "/var/www/ikurso">
        Options +FollowSymLinks +Indexes
        AllowOverride all
        Require all granted
    </Directory>
    ErrorLog /var/log/apache2/error.ikurso.log
    CustomLog /var/log/apache2/access.ikurso.log combined
</VirtualHost>
EOF
```

```sh
a2ensite ikurso 
systemctl reload apache2
```