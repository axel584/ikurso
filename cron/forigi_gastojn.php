<?php
// #1092 : supprime les invités (visiteurs qui ont fait des exercices sans compte) inactifs depuis 6 mois,
// avec leurs réponses et leur progression. À lancer une fois par jour.
include "../db.inc.php";
include "../util.php";
require_once "../api/GastoAPI.php";
malfermidatumbazon();

$kiom = (new GastoAPI($bdd))->forigiNeaktivajn(6);
echo $kiom." invité(s) supprimé(s)\n";
