<?php
include "db.inc.php";
malfermidatumbazon();
$persono_id=$_SESSION["persono_id"];

function listiDLEK(){
	$demando="select lecionoj.titolo, lecionoj.retpagxo from lecionoj where lecionoj.kurso='CG'";
	mysql_select_db( "ikurso");
	$result = mysql_query($demando) or die ("INSERT : malbona demando :".$demando);
	while($row = mysql_fetch_array($result)) {
		echo "<option value=\"".$row['retpagxo']."\" ";
		echo "onClick=\"window.opener.location.href='fr/cge/".$row['retpagxo']."';window.close();\">".$row['titolo']."</option>\n";
	}
}

function listiGerda(){
	$demando="select lecionoj.titolo, lecionoj.retpagxo from lecionoj where lecionoj.kurso='GR' ";
	mysql_select_db( "ikurso");
	$result = mysql_query($demando) or die ("INSERT : malbona demando :".$demando);
	while($row = mysql_fetch_array($result)) {
		echo "<option value=\"".$row['retpagxo']."\" ";
		echo "onClick=\"window.opener.location.href='fr/gerda/".$row['retpagxo']."';window.close();\">".$row['titolo']."</option>\n";
	}
}
?>
<html>
<head>
<title>Acc&egrave;s aux cours</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor="#F4FCFF" leftmargin="0" topmargin="5" marginwidth="5" marginheight="5">
<table>
	<tr>
		<td width="50%" class="normala">
			Cours en dix le&ccedil;ons<br>
			<select name="leciono">
				<option value="index.php" onClick="window.opener.location.href='fr/cge/index.php';window.close();">Introduction</option>
				<? listiDLEK(); ?> 
			</select>
		</td>
		<td width="50%" class="normala">
			Gerda malaperis<br>
			<select name="cxapitro">
				<option value="index.php" onClick="window.opener.location.href='fr/gerda/index.php';window.close();">Introduction</option>
				<? listiGerda(); ?> 
				<option value="lasu" onClick="window.opener.location.href='fr/lasu/index.php';window.close();"><i>Lasu min paroli plu!</i></option>
			</select>
		</td>
	</tr>
</table>
</body>
</html>