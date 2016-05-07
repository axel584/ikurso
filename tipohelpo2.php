<?
error_reporting(1);
include "util.php";
$retadreso=$_GET['retadreso'];
if ($retadreso=="") {
	$retadreso=$_POST['retadreso'];
}
malfermidatumbazon();

$filename = "mails/helpotipo.html";
$fd = fopen($filename, "r");
$contents = fread($fd, filesize ($filename));
fclose($fd);

$mesagxkapo="MIME-Version: 1.0".chr(13).chr(10);
$mesagxkapo.="Content-type: text/html;charset=iso-8859-1".chr(13).chr(10);
$mesagxkapo.="From: Ikurso <ikurso@esperanto-jeunes.org>".chr(13).chr(10);
$mesagxkapo.="Reply-to: ".$retadreso.chr(13).chr(10);
$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13).chr(10);
mail($retadreso,"Ikurso - message de test",$contents,$mesagxkapo);

?>
<html>
<head>
<title>ikurso</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="style/bleu.css" title="helpo">

</head>
<body class="popup">
	<div class="rakonto">
		<? if ($retadreso=="") { ?>
		<form name="testo" method="post" action="tipohelpo2.php">
		<p>Pour recevoir un message de test, veuillez indiquer votre adresse &eacute;lectronique : </p>
		<input type="text" name="retadreso" size="50">
		<input class="bouton" type="submit" value="envoyer">&nbsp;&nbsp;<input class="bouton" type="reset" value="annuler" onClick="window.close();">
		</form>
		<? } else { ?>
		<p>Un message de test a &eacute;t&eacute; envoy&eacute; &agrave;  l'adresse : <?=$retadreso?> </p>
		<input class="bouton" type="button" value="<? echo $lgv_fermi; ?>" onClick="window.close();">
		<? } ?>
	</div>
</body>
</html>              