<?php
include "../util.php";

$query = "select lecionoj.id,kodo,demando,count(*) as combien,max(dato) from respondoj join lecioneroj on lecioneroj.id=respondoj.lecionero_id join lecionoj on lecioneroj.leciono_id=lecionoj.id group by lecionoj.id,kodo, demando order by lecionoj.id,kodo,max(dato) desc";
$result = $bdd->query($query);

while($row=$result->fetch()) {
	echo $row["id"]."<br/>";
	$aktivigo = md5(uniqid(rand(), true));
	$query2 = "update personoj set aktivigo='".$aktivigo."' where id=".$row["id"];
	$bdd->query($query2);
}



?>