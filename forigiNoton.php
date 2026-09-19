<?php
include "util.php";
$persono_id=isset($_SESSION["persono_id"])?(int)$_SESSION["persono_id"]:0;
if ($persono_id==0) {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
if (!$persono || ($persono["rajtoj"]!='A' && $persono["rajtoj"]!='K')) {header("Location:index.php?erarkodo=4"); exit;}
$noto_id=isset($_GET["noto_id"])?(int)$_GET["noto_id"]:0;
$pagxo=pagxoLokalaSekura(isset($_GET["pagxo"])?$_GET["pagxo"]:"","miajlernantoj.php");

if ($persono["rajtoj"]=='A') {
	$stmt = $bdd->prepare("delete from komentoj where id=?");
	$stmt->execute(array($noto_id));
} else {
	// un correcteur ne peut supprimer que ses propres notes
	$stmt = $bdd->prepare("delete from komentoj where id=? and korektanto=?");
	$stmt->execute(array($noto_id,$persono_id));
}
header("Location:".$pagxo);
exit;
?>
