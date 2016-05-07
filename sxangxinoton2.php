<?
require("db.inc.php");
malfermidatumbazon();
$query = "update personoj set noto='".$noto."' where id='".$idnoto."'";
mysql_select_db( "ikurso");
$result = mysql_query($query) or die (  "INSERT : Invalid query :".$query);
header("Location:studantalisto.php");
?> 
