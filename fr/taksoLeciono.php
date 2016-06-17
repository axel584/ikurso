<?php
include "../util.php";
// 1 : On récupère les paramètres : le cours, la leçon, les 3 critères d'évaluation, l'id de l'élève
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$intereso=isset($_POST["intereso"])?$_POST["intereso"]:"";
$malfacileco=isset($_POST["malfacileco"])?$_POST["malfacileco"]:"";
$komento=isset($_POST["komento"])?$_POST["komento"]:"";
$leciono=isset($_POST["leciono"])?$_POST["leciono"]:"";

echo "intereso:".$intereso."<br/>";
echo "malfacileco:".$malfacileco."<br/>";
echo "komento:".$komento."<br/>";
echo "leciono:".$leciono."<br/>";
echo "persono_id:".$persono_id."<br/>";

// 2 : on stocke en base
// 3 : on récupère la prochaine leçon avec idéalement une pop-up de remerciement

?>