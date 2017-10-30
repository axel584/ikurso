<?php
require("db.inc.php");
$noto_id=isset($_GET["noto_id"])?$_GET["noto_id"]:"";
$pagxo=isset($_GET["pagxo"])?$_GET["pagxo"]:"";
malfermidatumbazon();
$demando = "delete from komentoj where id='$noto_id'";
//echo $demando;
$bdd->exec($demando) or die(print_r($bdd->errorInfo()));
header("Location:".$pagxo."");
?>