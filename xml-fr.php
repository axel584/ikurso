<?
include "db.inc.php";
malfermiDatumbazon();
mysql_select_db( "ikurso");
$demando="select distinct(personoj.id),personoj.posxtkodo,nuna_kurso.stato,personoj.rajtoj from nuna_kurso,personoj where personoj.id=nuna_kurso.studanto and (nuna_kurso.stato='N' or nuna_kurso.stato='K') and personoj.lingvo='FR' and personoj.lando='FR'";
$result = mysql_query($demando) or die ("SELECT : malbona demando :".$demando);
while($row = mysql_fetch_array($result)) {
		$posxtkodo=$row["posxtkodo"];
		$departemento=substr($posxtkodo,0,2);
		if (($departemento!="")&&($departemento!=" 0")&&($departemento!="0")) {
			if ($row["rajtoj"]=="S")
				$stat[$departemento]["S"]++;
			if ($row["stato"]=="F")
				$stat[$departemento]["F"]++;				
			if ($row["stato"]=="H")
				$stat[$departemento]["H"]++;								
				
		}
	}
$demando="select distinct(personoj.id),personoj.posxtkodo,personoj.rajtoj from nuna_kurso,personoj where personoj.id=nuna_kurso.korektanto and personoj.lingvo='FR' and personoj.lando='FR'";	
$result = mysql_query($demando) or die ("SELECT : malbona demando :".$demando);
while($row = mysql_fetch_array($result)) {
		$posxtkodo=$row["posxtkodo"];
		$departemento=substr($posxtkodo,0,2);
		if (($departemento!="")&&($departemento!=" 0")&&($departemento!="0")) {
			if ($row["rajtoj"]=="A")
				$stat[$departemento]["A"]++;
			if ($row["rajtoj"]=="K")
				$stat[$departemento]["K"]++;
		}
	}

ksort($stat);
echo "<lando id=\"FR\">\n";	
foreach($stat as $key=>$value) {
	if ($value["S"]>6) { $value["S"]=6;}
	echo "  <departemento id=\"".$key."\" studantoj=\"".$value["S"]."\" administrantoj=\"".$value["A"]."\"  korektantoj=\"".$value["K"]."\"  finintoj=\"".$value["F"]."\"  haltintoj=\"".$value["H"]."\" />\n";
	/*if ($value["S"]!="")
		echo "  <studantoj nombro=\"".$value["S"]."\" />\n";
	if ($value["A"]!="")		
		echo "  <administrantoj nombro=\"".$value["A"]."\" />\n";
	if ($value["K"]!="")
		echo "  <korektantoj nombro=\"".$value["K"]."\" />\n";
	if ($value["F"]!="")
		echo "  <finintoj nombro=\"".$value["F"]."\" />\n";	
	if ($value["H"]!="")
		echo "  <haltintoj nombro=\"".$value["H"]."\" />\n";		
	echo "</departemento>\n";*/	
}	
echo "</lando>";
?>
                    