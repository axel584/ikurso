<?php
include "util.php";
$studanto_id=$_POST["studanto"];
$nomo=$_POST["enirnomo"];
$idnunaKurso=$_POST["idnunaKurso"];
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}

$korektanto = apartigiPersonon($persono_id);
$studanto = apartigiPersonon($studanto_id);
if (($korektanto["rajtoj"]!='A')&&($korektanto["rajtoj"]!='K')) {header("Location:index.php?erarkodo=4");}

// sxangxi la staton de la lernanto al 'K'

$demando = "update nuna_kurso set stato='K' where id=".$idnunaKurso."";
$result = $bdd->exec($demando);
// trace protokolo
$teksto="lernanto=".$nomo." (".$studanto_id.")";
protokolo($persono_id,"REPRENIS LERNANTON",$teksto);
// cxu la studanto havas jam komencitan kurson ?
$query = "select * from nuna_kurso where id=$idnunaKurso";
$result = $bdd->query($query);
$row = $result->fetch();
header("Location:miajlernantoj.php");
?>