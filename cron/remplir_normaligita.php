<?php
include "../util.php";

$query = "select id,respondo from respondoj where normaligita is null";
$result = $bdd->query($query);

while($row=$result->fetch()) {
	$normaligita = strtolower(konvX($row["respondo"]));
	$trans = array("." => "", "," => "", "'" => "","!" => "","?" => ""); // liste des caractères à supprimer pour la comparaison
	$normaligita = trim(strtr($normaligita, $trans));
	echo $row["id"].":".$normaligita."<br/>";
	$aktivigo = md5(uniqid(rand(), true));
	$query2 = "update respondoj set normaligita='".$normaligita."' where id=".$row["id"];
	$bdd->query($query2);
}



?>