<?
include "db.inc.php";
malfermiDatumbazon();
// ER 05.10.2015 : correction pour passage en PHP 5.4
//session_register("persono_id");
$_SESSION['persono_id']=$persono_id;
$persono = apartigiPersonon($persono_id);
if ($persono["rajtoj"]!='K' && $persono["rajtoj"]!='A') exit($lgv_eraro4);

?>
<html>
<head>
<title>ikurso</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" dir="<? echo $lgv_direkto; ?>">
<form name="formnoto" metho="post" action="sxangxinoton2.php">
<center>
<input type="hidden" name="idnoto" value="<? echo $idnoto; ?>">
<p><span class="normala"><? echo $lgv_aldoniNoton; ?></span></p>
<textarea name="noto"><? simplaVorto("noto","personoj","where id='".$idnoto."'"); ?></textarea><br>
<input type="submit" value="<? echo $lgv_ek; ?>">
</center>
</form>
</body>
</html>



