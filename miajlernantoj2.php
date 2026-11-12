<?php
include "util.php";
require_once "api/KursaFinoAPI.php";
$persono_id=isset($_SESSION["persono_id"])?(int)$_SESSION["persono_id"]:0;
if ($persono_id==0) {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
if (!$persono || ($persono["rajtoj"]!='A' && $persono["rajtoj"]!='K')) {header("Location:index.php?erarkodo=4"); exit;}
if ($_SERVER["REQUEST_METHOD"]!="POST") {header("Location:miajlernantoj.php"); exit;}

// leciono vaut "<id de nuna_kurso>-<nouvel état>" : numéro de leçon, N (pas commencé), F (fini) ou H (abandon)
$rezultoj=explode("-", isset($_POST["leciono"])?$_POST["leciono"]:"", 2);
$nunaKurso_id=(int)$rezultoj[0];
$nova=isset($rezultoj[1])?$rezultoj[1]:"";
if (!in_array($nova, array("N","F","H"), true) && !ctype_digit($nova)) {header("Location:miajlernantoj.php"); exit;}

// un correcteur ne modifie que ses propres élèves
$stmt = $bdd->prepare("select stato,nunleciono,korektanto from nuna_kurso where id=?");
$stmt->execute(array($nunaKurso_id));
$row = $stmt->fetch();
if (!$row || ($persono["rajtoj"]!='A' && (int)$row["korektanto"]!=$persono_id)) {header("Location:index.php?erarkodo=4"); exit;}

//sxangxi lastan lecionon por iu lernanto
if (ctype_digit($nova) && $nova!=$row["nunleciono"]) {
	$stmt = $bdd->prepare("update nuna_kurso set nunleciono=?,stato='K',lastdato=CURDATE() where id=? and (stato='N' or stato='K')");
	$stmt->execute(array((int)$nova, $nunaKurso_id));
}
// se la nova stato estas F(inita), sed la malnova ne estis F, ni updatas ! :-)
if ($nova=='F' and $row["stato"]!='F') {
	(new KursaFinoAPI($bdd))->fini($nunaKurso_id); // stato F et mails aux informateurs et à l'élève
}
// se la nova stato estas H(altita), sed la malnova ne estis H, ni updatas ! :-)
if ($nova=='H' and $row["stato"]!='H') {
	$stmt = $bdd->prepare("update nuna_kurso set stato='H',findato=CURDATE(),lastdato=CURDATE() where id=? and (stato='N' or stato='K')");
	$stmt->execute(array($nunaKurso_id));
}
header("Location:miajlernantoj.php"); exit;
?>
