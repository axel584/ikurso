<?
include "db.inc.php";
malfermiDatumbazon();

mysql_select_db( "ikurso");
$demando =  "SELECT ekdato,id,round(datediff(now(),naskigxdato)/365) as naskigxdato,personnomo,urbo,lando, kialo FROM `personoj` WHERE kialo!=\"\" order by ekdato desc";


print "<table border=1>";
mysql_select_db( "ikurso");
$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando);
while($row = mysql_fetch_array($result)) {
  print "<tr><td>".$row["ekdato"]."</td><td>".$row["id"]."</td><td>".$row["personnomo"].", ".$row["urbo"].", ".$row["lando"]." (".$row["naskigxdato"]." ans) : \"".stripslashes($row["kialo"])."\"</td></tr>\n";
}

print "</table>";
     
     


// $etiquettes->SetCase(2, 4); // facultatif ; si on veut commencer en milieu de page

//
//$etiquettes->Adresse($code, $prenom, $nom, $adresse, $adresse2, $code_postal, $ville, $pays);
//$etiquettes->Adresse($code, $prenom, $nom, $adresse, $adresse2, $code_postal, $ville, $pays);
//$etiquettes->Adresse($code, $prenom, $nom, $adresse, $adresse2, $code_postal, $ville, $pays);

$etiquettes->Output();     

