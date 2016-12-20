<?php
include "../util.php";

$query = "select id from personoj where aktivigo is null";
$result = $bdd->query($query);

while($row=$result->fetch()) {
	echo $row["id"]."<br/>";
	$aktivigo = md5(uniqid(rand(), true));
	$query2 = "update personoj set aktivigo='".$aktivigo."' where id=".$row["id"];
	$bdd->query($query2);
}



?>