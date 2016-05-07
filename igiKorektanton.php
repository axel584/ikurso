<?
require("db.inc.php");
malfermidatumbazon();
$query = "update personoj set rajtoj='K',maksimumo=3 where id=$studanto";
mysql_select_db( "ikurso");
$result = mysql_query($query) or die (  "INSERT : Invalid query :".$query);
header("Location:administri.php");
?> 