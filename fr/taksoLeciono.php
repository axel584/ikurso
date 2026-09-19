<?php
include "../util.php";
// 1 : On récupère les paramètres : le cours, la leçon, les 3 critères d'évaluation, l'id de l'élève
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$intereso=isset($_POST["intereso"])?$_POST["intereso"]:"";
$malfacileco=isset($_POST["malfacileco"])?$_POST["malfacileco"]:"";
$komento=isset($_POST["komento"])?$_POST["komento"]:"";
$leciono=isset($_POST["leciono"])?$_POST["leciono"]:"";
$kurso=isset($_POST["kurso"])?$_POST["kurso"]:"";
if ($persono_id=="") {header("Location:../index.php?erarkodo=8"); exit;}

// 2 : on stocke en base
// on récupère le leciono_id à partir du cours et du numéro de leçon
$stmtLeciono = $bdd->prepare("select id from lecionoj where kurso=? and numero=?");
$stmtLeciono->execute(array($kurso,$leciono));
$leciono_id = $stmtLeciono->fetch()["id"];
$stmt = $bdd->prepare("INSERT INTO takso_leciono (dato,persono_id,leciono_id,intereso,malfacileco,komento) VALUES (CURRENT_TIMESTAMP,:persono_id, :leciono_id,:intereso,:malfacileco,:komento)");
$stmt->bindParam(':persono_id', $persono_id);
$stmt->bindParam(':leciono_id', $leciono_id);
$stmt->bindParam(':intereso', $intereso);
$stmt->bindParam(':malfacileco', $malfacileco);
$stmt->bindParam(':komento', $komento);
$stmt->execute();
// log
protokolo($persono_id,"EVALUATION LECON","Evaluation de la leçon :".$leciono." (".$intereso."/".$malfacileco.") : ".$komento);
// 3 : on récupère la prochaine leçon avec idéalement une pop-up de remerciement
$prefixe_url = getPrefixeCours($kurso);
header("location:../".$prefixe_url.getUrlVenontaLeciono($kurso,$leciono)."?erarkodo=14"); exit; // le erarkodo à 14 c'est pour afficher un message de remerciement
?>