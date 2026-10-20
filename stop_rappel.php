<?php
include "util.php";
$id=isset($_REQUEST["id"])?$_REQUEST["id"]:"";
if (!ctype_digit((string)$id)) {
	$response = "Identifiant invalide";
} else {
	$persono = apartigiPersonon($id);
	if (!$persono) {
		$response = "Identifiant introuvable";
	} else {
		$stmt = $bdd->prepare("update personoj set stop_rappel='J' where id=?");
		$stmt->execute(array((int)$id));
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
<?=htmlspecialchars($response, ENT_QUOTES, "UTF-8")?><br/>
</div>
</body>
</html>