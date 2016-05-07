<?
include "../db.inc.php";
malfermiDatumbazon();
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D,d M Y H:i:s")." GMT");
header("Cache-Control: no-store,no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0

mysql_select_db( "ikurso");
$demando =  "select personnomo,familinomo,adreso1,adreso2,posxtkodo,urbo from personoj where lando='FR' and rajtoj='K' order by posxtkodo";

mysql_select_db( "ikurso");
$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando);
while($row = mysql_fetch_array($result)) {
  echo $row["personnomo"]."\t".$row["familinomo"]."\t".$row["adreso1"]."\t".$row["adreso2"]."\t".$row["posxtkodo"]."\t".$row["urbo"]."<br/>";
}

