<?php
include "util.php";
$id=isset($_REQUEST["id"])?$_REQUEST["id"]:"";
if (!is_numeric($id)) {
	$response = "Identifiant invalide :".$id;
} else {
	$persono = apartigiPersonon($id);
	if (!$persono) {
		$response = "Identifiant introuvable";
	} else {
		$query = "update personoj set stop_rappel='J' where id=".$id;
		$bdd->exec($query);
		protokolo($persono["id"],"RAPPEL MAIL OFF",$persono["enirnomo"]." a désactivé ses rappels de mail");
		$response = "Les messages de rappel ont été désactivés.";
	}
}
?>
<html>
<head>
<title>ikurso</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="style/bleu.css">
</head>
<body class="popup">
<div>
<?=$response?><br/>
</div>
</body>
</html>