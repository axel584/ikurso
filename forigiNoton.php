<?
include "lingvo.inc.php";
require("db.inc.php");
$noto_id=$_GET["noto_id"];
$stud_id=$_GET["stud_id"];
$stud_nomo=$_GET["stud_nomo"];
$pagxo=$_GET["pagxo"];
malfermidatumbazon();
mysql_select_db( "ikurso");
$demando = "delete from komentoj where id='$noto_id'";
$result = mysql_query($demando);
header("Location:".$pagxo."");
?>