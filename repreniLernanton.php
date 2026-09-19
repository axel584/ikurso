<?php
include "util.php";
$studanto_id=isset($_POST["studanto"])?(int)$_POST["studanto"]:0;
$nomo=isset($_POST["enirnomo"])?$_POST["enirnomo"]:"";
$idnunaKurso=isset($_POST["idnunaKurso"])?(int)$_POST["idnunaKurso"]:0;
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
if ($persono_id=="") {header("Location:index.php?erarkodo=8"); exit;}

$korektanto = apartigiPersonon($persono_id);
if (!$korektanto || (($korektanto["rajtoj"]!='A')&&($korektanto["rajtoj"]!='K'))) {header("Location:index.php?erarkodo=4"); exit;}

// sxangxi la staton de la lernanto al 'K'
$stmt = $bdd->prepare("update nuna_kurso set stato='K' where id=?");
$stmt->execute(array($idnunaKurso));
// trace protokolo
$teksto="lernanto=".$nomo." (".$studanto_id.")";
protokolo($persono_id,"REPRENIS LERNANTON",$teksto);
header("Location:miajlernantoj.php");
exit;
?>
