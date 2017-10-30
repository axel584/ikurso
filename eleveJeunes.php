<?php
include "db.inc.php";
include "etiquettes.php";
malfermiDatumbazon();
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D,d M Y H:i:s")." GMT");
header("Cache-Control: no-store,no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0

$etiquettes = new EtiquettesPDF(3, 8);

mysql_select_db( "ikurso");
$demando =  "select personnomo,familinomo,adreso1,adreso2,posxtkodo,urbo from personoj,nuna_kurso where personoj.id=nuna_kurso.studanto and lando='FR' and adreso1 != '' and naskigxdato>'1975-01-01' order by posxtkodo ASC";

mysql_select_db( "ikurso");
$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando);
while($row = mysql_fetch_array($result)) {
  $etiquettes->Adresse("", iconv("UTF-8","ISO-8859-1",$row["personnomo"]),iconv("UTF-8","ISO-8859-1",$row["familinomo"]),iconv("UTF-8","ISO-8859-1",$row["adreso1"]),iconv("UTF-8","ISO-8859-1",$row["adreso2"]), $row["posxtkodo"],iconv("UTF-8","ISO-8859-1",$row["urbo"]),"");        
}
     
     


// $etiquettes->SetCase(2, 4); // facultatif ; si on veut commencer en milieu de page

//
//$etiquettes->Adresse($code, $prenom, $nom, $adresse, $adresse2, $code_postal, $ville, $pays);
//$etiquettes->Adresse($code, $prenom, $nom, $adresse, $adresse2, $code_postal, $ville, $pays);
//$etiquettes->Adresse($code, $prenom, $nom, $adresse, $adresse2, $code_postal, $ville, $pays);

$etiquettes->Output();     

