<?php
// #1092 : supprime les invités (visiteurs qui ont fait des exercices sans compte) inactifs depuis 6 mois,
// avec leurs réponses et leur progression. À lancer une fois par jour.
// Vide aussi les demandes de changement d'adresse e-mail expirées (#1107).
include "../db.inc.php";
include "../util.php";
require_once "../api/GastoAPI.php";
malfermidatumbazon();

$kiom = (new GastoAPI($bdd))->forigiNeaktivajn(6);
echo $kiom.($kiom > 1 ? " invités supprimés" : " invité supprimé")."\n";

// #1107 : demandes de changement d'adresse e-mail expirées, vidées pour que l'adresse redevienne libre
require_once "../api/RetadresoAPI.php";
$kiom = (new RetadresoAPI($bdd))->forigiEksvalidajn();
echo $kiom.($kiom > 1 ? " demandes de changement d'adresse expirées vidées" : " demande de changement d'adresse expirée vidée")."\n";
