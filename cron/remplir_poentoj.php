<?php
include "../util.php";

$query = "SELECT respondoj.persono_id,ekzercoj.lecionero_id,count(*) as combien from respondoj join ekzerceroj on ekzerceroj.id=respondoj.ekzercero_id and ekzerceroj.normaligita=respondoj.normaligita  join ekzercoj on ekzerceroj.ekzerco_id=ekzercoj.id join personoj_lecioneroj on personoj_lecioneroj.lecionero_id=ekzercoj.lecionero_id and personoj_lecioneroj.persono_id=respondoj.persono_id group by respondoj.persono_id,ekzercoj.lecionero_id";
$result = $bdd->query($query);

while($row=$result->fetch()) {
	$query2 = "update personoj_lecioneroj set poentoj='".$row["combien"]."' where persono_id=".$row["persono_id"]." and lecionero_id=".$row["lecionero_id"];
	$bdd->query($query2);
}



?>