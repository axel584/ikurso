<?php
//error_reporting(1);
$retadreso=$_POST['retadreso'];
include "util.php";
malfermidatumbazon();
$query = "select enirnomo,pasvorto,id from personoj where retadreso='$retadreso'";
mysql_select_db( "ikurso");
$result = mysql_query($query) or die (  "INSERT : Invalid query :".$query);
if (mysql_num_rows($result)==0) {
	header("Location:pasvortoforgesita.php?erarkodo=10");
}
else {
	$row = mysql_fetch_array($result);
	// sendi mesagxon kun la forgesita pasvorto
	$filename = "mails/pasvorto".$lingvo.".html";
	$fd = fopen($filename, "r");
	$contents = fread($fd, filesize ($filename));
	fclose($fd);
	$contents=str_replace("##PASVORTO##",$row["pasvorto"],$contents);
	$contents=str_replace("##ENIRNOMO##",$row["enirnomo"],$contents);
	if (mysql_num_rows($result)>1) {
		$row2 = mysql_fetch_array($result);
		$contents=str_replace("##PLUS##","<b>Attention, vous avez un deuxi&egrave;me compte : ".$row2["enirnomo"]."/".$row2["pasvorto"]."<br/>Merci de contacter les administrateurs pour regler cette situation.</b>",$contents);
	} else {
		$contents=str_replace("##PLUS##","",$contents);
	}
}
$mesagxkapo="MIME-Version: 1.0".chr(13).chr(10);
$mesagxkapo.="Content-type: text/html;charset=utf-8".chr(13).chr(10);
$mesagxkapo.="From: Ikurso <ikurso@esperanto-jeunes.org>".chr(13).chr(10);
$mesagxkapo.="Date: ".date("D, j M Y H:i:s").chr(13).chr(10);
mail($retadreso,$lgv_viaPasvorto,$contents,$mesagxkapo);
protokolo($row['id'],"PASVORTO SENDITA",$row['enirnomo']."-".$row['pasvorto']);

if (mysql_num_rows($result)!=0){?> 
<html>
<head>
<title>ikurso</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="style/bleu.css">
</head>
<body class="popup">
<div>
<p><? echo $contents; ?></p>
	<p><? echo $lgv_fermufenestron; ?></p>
	<input class="bouton" type="button" value="<? echo $lgv_fermi; ?>" onClick="window.close();">
</div>
</body>
</html>
<? } 
mysql_free_result($result);
?>                  