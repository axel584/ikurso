<?php
include "../util.php";

$query = "SELECT ekzerceroj.id as id,kodo,ekzercoj.lecionero_id FROM `ekzerceroj` join ekzercoj on ekzercoj.id=ekzerceroj.ekzerco_id";
$result = $bdd->query($query);

$i=0;
while($row=$result->fetch()) {
	$query3 = "update respondoj set ekzercero_id='".$row["id"]."' where lecionero_id='".$row["lecionero_id"]."' and kodo='".$row["kodo"]."'";
	echo $query3."<br/>";
	$bdd->query($query3);
}



?>