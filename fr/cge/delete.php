<?
include "db.inc.php";
include "webui.inc.php";
include "forum/includes/forum.lib.php";
malfermiDatumbazon();
// ER 05.10.2015 : correction pour passage en PHP 5.4
//session_register("persono_id");
$_SESSION['persono_id']=$persono_id;
$persono = apartigiPersonon($persono_id);
if ($persono["rajtoj"]!='A'){header("Location:index.php?erarkodo=4");}
$celpersono = apartigiPersonon($celpersono_id);
if ($validperson==$celpersono["enirnomo"]) {
	mysql_select_db( "ikurso");
	$demando = "delete from personoj where id='$celpersono_id'";
	$result = mysql_query($demando) or die ("SELECT : malbona demando :".$demando);
	$demando = "delete from nuna_kurso where korektanto='$celpersono_id'";
	$result = mysql_query($demando) or die ("SELECT : malbona demando :".$demando);
	$demando = "delete from nuna_kurso where studanto='$celpersono_id'";
	$result = mysql_query($demando) or die ("SELECT : malbona demando :".$demando);
	header("Location:administri.php");
}
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
?>
<html>
<head>
<title>ikurso</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?
	pagxkapo();
	menuo($persono["enirnomo"],$persono["rajtoj"]);
?>
<center>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td nowrap>
<div align="center" class="titolo">Suppression d'une personne</div>
</td>
</tr>
<tr>
<td bgcolor="#d0d8df">&nbsp;</td>
</tr>
<tr>
<td nowrap>
<table border="0" cellspacing="10" cellpadding="10" class="normala">
<tr>
<form name="administri" method="post">
<td colspan="2">
Pour supprimer une personne, veuiller recopier son identifiant&nbsp;: <? echo $celpersono["enirnomo"]; ?><br>
</td>
</tr>
<tr>
<td>
<form method="post">
<input type="text" name="validperson"> 
<input type="hidden" name="celpersono_id" value="<? echo $celpersono_id?>"> 
<input type="submit" value="Confirmer">
</form>
</td>
<td>
<form method="post" action="administri.php">
<input type="hidden" name="celpersono_id" value="<? echo $celpersono_id?>"> 
<div align="right"><input type="submit" value="Annuler"></div>
</form>

	</td>
	</tr>
	</table>
	</td>

	</tr>

	<tr>

	<td bgcolor="#d0d8df">&nbsp;</td>

	</tr>

	</table>
	<p>&nbsp;</p>
	</center>
	</body>
	</html>