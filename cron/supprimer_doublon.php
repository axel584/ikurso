<?php
include "../util.php";

// choisi les questions dont les réponses sont "correctables"
$query = "select id,persono_id,lecionero_id from personoj_lecioneroj order by dato desc";
$result = $bdd->query($query);

$section = array();

while($row=$result->fetch()) {
	$clef = $row["persono_id"]."-".$row["lecionero_id"];
	if (array_key_exists($clef,$section)) {
		echo "doublon detecté : ".$clef." id : ".$row["id"]."<br/>";
		// TODO : suppression
		$query2 = "delete from personoj_lecioneroj where id=".$row["id"];	
		$bdd->query($query2);
	} else {
		$section[$clef]="ok";
	}
}



?>