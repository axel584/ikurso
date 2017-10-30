<?php
include "../util.php";

// choisi les questions dont les réponses sont "correctables"
$query = "select ekzerceroj.id,ekzerceroj.normaligita from ekzerceroj join ekzercoj on ekzercoj.id=ekzerceroj.ekzerco_id where ekzercoj.korektebla=1";
$result = $bdd->query($query);

while($row=$result->fetch()) {
	$query2 = "update respondoj set gxusta=1 where ekzercero_id=".$row["id"]." and normaligita='".str_replace("'","''",$row["normaligita"])."'";
	echo $query2.";<br/>";
	$bdd->query($query2);
}



?>