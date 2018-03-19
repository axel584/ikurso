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

D'inserer en base le fichier qui se trouve dans sql/create.sql

De créer à la racine un fichier config.php contenant les informations suivante :

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

et de se connecter à l'adresse http://localhost/ikurso

En cas de problème, n'hésitez pas à me contacter : axel584@gmail.com

