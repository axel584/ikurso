<?php
include "../util.php";

$query = "select id,kodo,lecionero_id,demando,komando from respondoj where komando = ''";
$result = $bdd->query($query);

$i=0;
while($row=$result->fetch()) {
	$i++;
	// if ($i>10000) {
	// 	break;
	// }
	echo $row["id"].":".$row["demando"].":".$row["kodo"].":".$row["lecionero_id"]."<br/>";
	$query2 = "select komando from respondoj where kodo='".$row["kodo"]."' and komando<>'' and lecionero_id='".$row["lecionero_id"]."' order by dato desc";
	//echo $query2."<br/>";
	$row2 = $bdd->query($query2)->fetch();	
	//echo $row2["komando"]."<br/>";
	if ($row2["komando"]=='') {
		echo "pas de komando<br/>";
		continue;
	}
	$query3 = "update respondoj set komando='".str_replace("'","''",$row2["komando"])."' where id='".$row["id"]."' ";
	echo $query3."<br/>";
	$bdd->query($query3);
}



?>