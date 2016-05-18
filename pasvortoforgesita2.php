<?php
//error_reporting(1);
$retadreso=$_POST['retadreso'];
include "util.php";
malfermidatumbazon();
$query = "select enirnomo,pasvorto,id from personoj where retadreso='$retadreso'";
$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
if (!$row = $result->fetch()) { // aucune ligne retournée
	header("Location:pasvortoforgesita.php?erarkodo=10");
}
else {
	// sendi mesagxon kun la forgesita pasvorto
	$filename = "mails/pasvortoFR.html";
	$fd = fopen($filename, "r");
	$contents = fread($fd, filesize ($filename));
	fclose($fd);
	$contents=str_replace("##PASVORTO##",$row["pasvorto"],$contents);
	$contents=str_replace("##ENIRNOMO##",$row["enirnomo"],$contents);
	while ($row = $result->fetch()) { // si on récupère d'autres valeurs 
		$contents=str_replace("##PLUS##","<b>Attention, vous avez plusieurs comptes : ".$row["enirnomo"]."/".$row["pasvorto"]."<br/>Merci de contacter les administrateurs pour regler cette situation.</b>",$contents);
	} 
	$contents=str_replace("##PLUS##","",$contents);
}
$mesagxkapo="MIME-Version: 1.0".chr(13).chr(10);
$mesagxkapo.="Content-type: text/html;charset=utf-8".chr(13).chr(10);
$mesagxkapo.="From: Ikurso <ikurso@esperanto-jeunes.org>".chr(13).chr(10);
$mesagxkapo.="Reply-To: Ikurso <ikurso@esperanto-jeunes.org>".chr(13).chr(10);
$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13).chr(10);
$resultat = mail($retadreso,"Votre mot de passe pour rentrer sur I-kurso",$contents,$mesagxkapo);
protokolo($row['id'],"PASVORTO SENDITA",$row['enirnomo']."-".$row['pasvorto']);
?> 
<html>
<head>
<title>ikurso</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="style/bleu.css">
</head>
<body class="popup">
<div>
<?php
if (!$resultat) {
	echo "<p class='eraro'>IMPOSSIBLE D'ENVOYER LE MESSAGE</p>";
}
?>
<p><?php echo $contents; ?></p>
	<p>Votre mot de passe vous a été envoyé, vous pouvez fermer cette fenêtre</p>
	<input class="bouton" type="button" value="Fermer" onClick="window.close();">
</div>
</body>
</html>
<? 
} // fin du test si des lignes sont retournées
?>                  