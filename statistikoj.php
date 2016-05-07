<?
include "lingvo.inc.php";
include "db.inc.php";
include "webui.inc.php";
include "forum/includes/forum.lib.php";
include_once("db/personoj.inc.php");
include_once("db/korektebla_kurso.inc.php");
include_once("db/nuna_kurso.inc.php");
include_once("db/kursoj.inc.php");
malfermiDatumbazon();
// ER 05.10.2015 correction pour passage en PHP 5.4
//session_register("persono_id");
$_SESSION['persono_id']=$persono_id;
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = new personoj;
$persono->load_by_id($persono_id);
//if (($persono["rajtoj"]!='A')&&($persono["rajtoj"]!='K')) {header("Location:index.php?erarkodo=4");}
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D,d M Y H:i:s")." GMT");
header("Cache-Control: no-store,no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0

function stat_rajtoj() {
	global $lingvo,$lgv_studantoj,$lgv_korektantoj,$lgv_sumo,$lgv_maksimumo,$lgv_liberajLokoj;

	//$sumo = mysql_num_rows($result);

	$obj_kursoj = new kursoj;
	$kursoj = $obj_kursoj->get_all_objects($lingvo);
	$stat['Total']['PlaceDisponible']=0; // disponeblaj lokoj
	$stat['Total']['Korektantoj']=0; // kiom da korektantoj
	$stat['Total']['NbLernantoj']=0; // kiom da lernantoj
	$stat['Total']['PlaceRestante']=0; // disponeblaj lokoj

	// elektas la datumbazon
	mysql_select_db("ikurso");

	// kiom da lernantoj ?
	$demando = "SELECT nuna_kurso.kurso as kurso, count( nuna_kurso.kurso) as kiom FROM nuna_kurso, personoj WHERE (stato = 'K' or stato='N') and  nuna_kurso.studanto = personoj.id and personoj.lingvo = '".$lingvo."' GROUP BY nuna_kurso.kurso ";

	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());

	while ($row=mysql_fetch_array($result)) {
		$stat[$row["kurso"]]['NbLernantoj']=$row["kiom"];
		$stat['Total']['NbLernantoj']+=$row["kiom"]; // kiom da lernantoj
	}

	// kiom da disponeblaj lokoj ?
	$demando = "SELECT korektebla_kurso.kurso as kurso, sum( korektebla_kurso.kiom_lernantoj ) as kiom,count( korektebla_kurso.kiom_lernantoj ) as kiomKorektantoj FROM korektebla_kurso, personoj where korektebla_kurso.korektanto = personoj.id and korektebla_kurso.kiom_lernantoj>0 and personoj.lingvo = '".$lingvo."' GROUP BY korektebla_kurso.kurso";
	
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());

	while ($row=mysql_fetch_array($result)) {
		$stat[$row["kurso"]]['PlaceDisponible']=$row["kiom"];
		$stat[$row["kurso"]]['Korektantoj']=$row["kiomKorektantoj"];
		$stat['Total']['PlaceDisponible']+=$row["kiom"]; // kiom da lernantoj
		$stat[$row["kurso"]]['PlaceRestante']=$stat[$row["kurso"]]['PlaceDisponible']-$stat[$row["kurso"]]['NbLernantoj'];
	}

	// kiom da korektantoj entute ?
	$demando = "select * from personoj where rajtoj='K' or rajtoj='A' and lingvo='".$lingvo."'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	$stat['Total']['Korektantoj'] = mysql_num_rows($result);


	// faire la même chose pour le nombre de place choisies par les correcteurs 
	// et un truc différent pour la somme (des correcteurs, des élèves)
	// quand on calcule les correcteurs, on en profite pour mettre le nombre de place disponible
	// la somme des élèves doit être calculé, la somme des corecteurs doit être trouvé par requete

	//for (
	/* ancienne version a détruire à terme
	for ($k=0;$k<count($kursoj);$k++) {
		$korekteblaj_kursoj = $obj_korektebla_kurso->load_by_kurso($kursoj[$k]->get_kodo(),$lingvo);
		$stat[$kursoj[$k]->get_kodo()]['PlaceDisponible']=0; // disponeblaj lokoj
		$stat[$kursoj[$k]->get_kodo()]['Korektantoj']=0; // korektantoj
		for ($kk=0;$kk<count($korekteblaj_kursoj);$kk++) {
			$stat[$kursoj[$k]->get_kodo()]['PlaceDisponible']+=$korekteblaj_kursoj[$kk]->get_kiom_lernantoj();
			$stat['Total']['PlaceDisponible']+=$korekteblaj_kursoj[$kk]->get_kiom_lernantoj();
			if ($korekteblaj_kursoj[$kk]->get_kiom_lernantoj()>0) {
				$stat[$kursoj[$k]->get_kodo()]['Korektantoj']++;
				$stat['Total']['Korektantoj']++;
			}
		}
		// kiom da lernantoj ?
		$nunaj_kursoj = $obj_nuna_kurso->load_by_kurso($kursoj[$k]->get_kodo(),$lingvo);
		$stat[$kursoj[$k]->get_kodo()]['UL']=0; // uzataj lokoj
		for ($kk=0;$kk<count($nunaj_kursoj);$kk++) {
			if (($nunaj_kursoj[$kk]->get_stato()=="K")||($nunaj_kursoj[$kk]->get_stato()=="N")) {
				$stat[$kursoj[$k]->get_kodo()]['NbLernantoj']++;
				$stat['Total']['NbLernantoj']++;
			}
		}
		$stat[$kursoj[$k]->get_kodo()]['PlaceRestante']=$stat[$kursoj[$k]->get_kodo()]['PlaceDisponible']-$stat[$kursoj[$k]->get_kodo()]['NbLernantoj'];
	}*/
	$stat['Total']['PlaceRestante']=$stat['Total']['PlaceDisponible']-$stat['Total']['NbLernantoj'];

	echo "<table border=\"1\">";
	echo "<tr class=\"normala\">";
	echo "<td>&nbsp;</td>";
	echo "<td>&nbsp;".$lgv_studantoj."</td>";
	echo "<td>&nbsp;".$lgv_korektantoj."</td>";
	echo "<td>&nbsp;".$lgv_maksimumo."</td>";
	echo "<td>&nbsp;".$lgv_liberajLokoj."</td></tr>";	
		
	for ($k=0;$k<count($kursoj);$k++) {
		echo "<tr class=\"normala\">";
		echo "<td>".$kursoj[$k]->get_nomo()."</td>";
		echo "<td>".$stat[$kursoj[$k]->get_kodo()]['NbLernantoj']."</td>";
		echo "<td>".$stat[$kursoj[$k]->get_kodo()]['Korektantoj']."</td>";
		echo "<td>".$stat[$kursoj[$k]->get_kodo()]['PlaceDisponible']."</td>";
		echo "<td>".$stat[$kursoj[$k]->get_kodo()]['PlaceRestante']."</td>";
		echo "</tr>";
	}
	echo "<tr class=\"normala\">";
	echo "<td>".$lgv_sumo."</td>";
	echo "<td>".$stat['Total']['NbLernantoj']."</td>";
	echo "<td>".$stat['Total']['Korektantoj']."</td>";
	echo "<td>".$stat['Total']['PlaceDisponible']."</td>";
	echo "<td>".$stat['Total']['PlaceRestante']."</td>";
	echo "</tr></table>";
}

function stat_seksoj() {
	global $lingvo,$lgv_vira,$lgv_virina;
	echo "<table border=\"1\">";
	echo "<tr class=\"normala\">";
	echo "<td>".$lgv_vira."</td>";
	echo "<td>".$lgv_virina."</td>";
	echo "<td>???</td></tr>";
	echo "<tr class=\"normala\">";

	// elektas la datumbazon
	mysql_select_db("ikurso");

	// kiom da viroj ?
	$demando = "select * from personoj where (rajtoj='P' or rajtoj='S') and sekso='M' and personoj.lingvo='$lingvo'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	$sumo = mysql_num_rows($result);
	echo "<td>".$sumo."</td>";

	// kiom da virinoj ?
	$demando = "select * from personoj where (rajtoj='P' or rajtoj='S') and sekso='I' and personoj.lingvo='$lingvo'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	$sumo = mysql_num_rows($result);
	echo "<td>".$sumo."</td>";

	// kiom da ??? sekso ?
	$demando = "select * from personoj where (rajtoj='P' or rajtoj='S') and (sekso<>'M' and sekso<>'I') and personoj.lingvo='$lingvo'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	$sumo = mysql_num_rows($result);
	echo "<td>".$sumo."</td>";

	echo "</tr></table>";
}


function stat_monatoj() {
	global $lingvo,$lgv_sumo,$lgv_haltis,$lgv_finis,$lgv_studantoj;
	echo "<table border=\"1\">";
	echo "<tr class=\"normala\">";
	echo "<td>&nbsp;</td>";
	echo "<td>".$lgv_studantoj."</td>";
	echo "<td>".$lgv_haltis."</td>";
	echo "<td>".$lgv_finis."</td></tr>";

	mysql_select_db( "ikurso");

	// laux monatoj
	$demando = "select nuna_kurso.id as id, nuna_kurso.stato as stato, MONTH(nuna_kurso.ekdato) as ekmonato, YEAR(nuna_kurso.ekdato) as ekjaro, MONTH(nuna_kurso.findato) as finmonato,YEAR(nuna_kurso.findato) as finjaro from nuna_kurso, personoj where nuna_kurso.studanto=personoj.id and personoj.lingvo='$lingvo'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	while($row = mysql_fetch_array($result)) {
		if ($row["ekmonato"]<10) {
			$ekdato = $row["ekjaro"]."0".$row["ekmonato"];
		} else {
			$ekdato = $row["ekjaro"].$row["ekmonato"];
		}
		$stat[$ekdato]["ekis"]++;
		$sumekis++;
		if ($row["finmonato"]!=null) {
			if ($row["finmonato"]<10) {
				$findato = $row["finjaro"]."0".$row["finmonato"];
			} else {
				$findato = $row["finjaro"].$row["finmonato"];
			}
			if ($row["stato"]=="H") {
				$stat[$findato]["haltis"]++;
				$sumhaltis++;
			} elseif ($row["stato"]=="F") {
				$stat[$findato]["finis"]++;
				$sumfinis++;
			}
		}
	}
        $demando = "select * from monatoj where lingvo='$lingvo'";
        $result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
        while ($row=mysql_fetch_array($result)) {
          $nomo_monatoj[$row["kodo"]]=$row["nomo"];
        }
	ksort($stat);
	foreach($stat as $key => $value) {
		echo "<tr class=\"normala\">";
                ereg("([0-9]{4})([0-9]{2})", $key,$trancxita);
                // affiche le mois contenu dans nomo_monatoj et l'année
                echo "<td>".$nomo_monatoj[$trancxita[2]]." ".$trancxita[1]."</td>";

                // affiche ceux qui ont commencé
                echo "<td>&nbsp;".$value["ekis"]."</td>";
                // affiche ceux qui ont abandonné
                echo "<td>&nbsp;".$value["haltis"]."</td>";
                // affiche ceux qui ont finis
                echo "<td>&nbsp;".$value["finis"]."</td>";
                echo "</tr>";
	}
	
	//sumo
	echo "<tr class=\"normala\" bgcolor=\"#FF9999\">";
	echo "<td>".$lgv_sumo."</td>";
	echo "<td>".$sumekis."</td>";
	echo "<td>".$sumhaltis;
	if ($sumekis>0) echo "&nbsp;&nbsp;&nbsp;(".round(100*$sumhaltis/$sumekis,2)."%)";
	echo "</td>";
	echo "<td>".$sumfinis;
	if ($sumekis>0) echo "&nbsp;&nbsp;&nbsp;(".round(100*$sumfinis/$sumekis,2)."%)";
	echo "</td></tr>";
	
        echo "</table>";

}

function stat_landoj() {
	global $lingvo;
	echo "<table border=\"1\">";
	echo "<tr class=\"normala\">";

	mysql_select_db( "ikurso");

	// laux landoj
	$demando = "select personoj.lando as lando from personoj,nuna_kurso where personoj.id=nuna_kurso.studanto and (personoj.rajtoj='P' or personoj.rajtoj='S') and (nuna_kurso.stato='N' or nuna_kurso.stato='K') and personoj.lingvo='$lingvo'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	while($row = mysql_fetch_array($result)) {
                 $stat[$row["lando"]]++;
        }	
        $demando = "select * from landoj where lingvo='$lingvo'";
        $result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
        while ($row=mysql_fetch_array($result)) {
          $nomo_landoj[$row["kodo"]]=$row["nomo"];
        }
	ksort($stat);
	foreach($stat as $key => $value) {
		echo "<tr class=\"normala\">";
		if ($key=="FR") { 
			echo "<td>&nbsp;".$nomo_landoj[$key];
			echo "<a href=\"#\" onClick=\"window.open('stat-fr.html','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=515,height=555');\">";
			echo "<img border=\"0\" height=\"14\" width=\"14\" src=\"bildoj/grafiko.png\">";
			echo "</a></td><td>".$value."</td>";}
		else {
                	echo "<td>&nbsp;".$nomo_landoj[$key]."</td><td>".$value."</td>";
                }
                echo "</tr>";
	}
        echo "</table>";

}

function stat_lecionoj() {
	global $lingvo,$lgv_nomoLeciono,$lgv_haltis,$lgv_lernante,$lgv_sumo,$lgv_neKomencis;
	echo "<table border=\"0\" cellspacing=\"10\">";
	echo "<tr class=\"normala\">";

	mysql_select_db( "ikurso");

	// laux landoj
	$demando = "select nuna_kurso.kurso as kurso,nuna_kurso.nunleciono as numleciono,nuna_kurso.stato as stato from nuna_kurso,personoj where personoj.id=nuna_kurso.studanto and personoj.lingvo='$lingvo'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	while($row = mysql_fetch_array($result)) {
		if ($row["stato"]=="N") {
			$stat[$row["kurso"]]["N"]++;
			$stat[$row["kurso"]]["T"]++;
			$stat[$row["kurso"]]["TK"]++;
		} elseif ($row["stato"]=="F") {
			$stat[$row["kurso"]]["F"]++;
			$stat[$row["kurso"]]["T"]++;
		} elseif ($row["stato"]=="H") {
			if ($row["numleciono"]==null) { 			
			   $stat[$row["kurso"]]["H"]++; 
			} else {
			   $stat[$row["kurso"]][$row["numleciono"]]["H"]++;
			}
			$stat[$row["kurso"]]["T"]++;
		} elseif ($row["stato"]=="K") {
			$stat[$row["kurso"]][$row["numleciono"]]["K"]++;
			$stat[$row["kurso"]]["T"]++;
			$stat[$row["kurso"]]["TK"]++;
		}
	}
	$demando = "select * from lecionoj where lingvo='$lingvo'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	while ($row=mysql_fetch_array($result)) {
		$nomo_lecionoj[$row["kurso"]][$row["numero"]]=$row["titolo"];
	}
        $demando = "select * from kursoj where lingvo='$lingvo'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	while ($row=mysql_fetch_array($result)) {
		$nomo_kursoj[$row["kodo"]]=$row["nomo"];
	}
        
	ksort($stat);
        $numkurso = 0;
        foreach($stat as $key1 => $value1) {
		// nur 2 kursoj sur cxiuj lignioj
		if ((($numkurso%2)==0)&&($numkurso!=0)) { echo "</tr><tr>";}
		$numkurso++;
		// komenco de la kurso
		echo "<td class=\"normala\">".$nomo_kursoj[$key1];
		echo "<table border=\"1\">";

		// titoloj 
		echo "<tr class=\"normala\">";
		echo "<td class=\"normala\">".$lgv_nomoLeciono."</td>";
		echo "<td class=\"normala\">".$lgv_lernante."</td>";
		echo "<td class=\"normala\">%</td>";
		echo "<td class=\"normala\">".$lgv_haltis."</td>";
		echo "<td class=\"normala\">%</td>";
		echo "</tr>";	

		// unua : ne ekis la kurson		
		echo "<tr class=\"normala\">";
		echo "<td class=\"normala\">".$lgv_neKomencis."</td>";
		echo "<td class=\"normala\">&nbsp;".$value1["N"]."</td>";
		echo "<td class=\"normala\">&nbsp;";
		if ($value1["TK"]>0) {
		   echo round(100*$value1["N"]/$value1["TK"],2); 
		} else { 
		   echo "NV"; 
		}
		echo "</td>";
		echo "<td class=\"normala\">&nbsp;".$value1["H"]."</td>";
		echo "<td class=\"normala\">&nbsp;";
		if ($value1["T"]>0) {
		   echo round(100*$value1["H"]/$value1["T"],2); 
		} else { 
		   echo "NV"; 
		}
		echo "</td></tr>";
	
		// aliaj : valuoj
                ksort($value1);
		foreach($value1 as $key2 => $value2) {
			if (($key2!="N") && ($key2!="F") && ($key2!="") && ($key2!="H") && ($key2!="T") && ($key2!="TK")) {
				echo "<tr class=\"normala\">";
				echo "<td class=\"normala\">&nbsp;".$nomo_lecionoj[$key1][$key2]."</td>";
				echo "<td class=\"normala\">&nbsp;".$value2["K"]."</td>";
				echo "<td class=\"normala\">&nbsp;"; 
				if ($value1["TK"]>0) { echo round(100*($value2["K"]/$value1["TK"]),2);}
				else { echo "NV"; }
				echo "</td>";
				echo "<td class=\"normala\">&nbsp;".$value2["H"]."</td>";
				echo "<td class=\"normala\">&nbsp;"; 
				if ($value1["T"]>0) { echo round(100*($value2["H"]/$value1["T"]),2);}
				else { echo "NV"; }
				echo "</td></tr>";
			}
		}
		
		// antauxlasta : finis la kurson
		echo "<tr class=\"normala\"><td class=\"normala\">";
		echo "Ont fini le cours</td>";
		echo "<td colspan=\"3\">&nbsp;".$value1["F"]."</td>";
		echo "<td class=\"normala\">&nbsp;"; 
		if ($value1["T"]>0) { echo round(100*($value1["F"]/$value1["T"]),2);}
			else { echo "NV"; }
		echo "</td></tr>";

		// lasta : cxiuj
		echo "<tr class=\"normala\" bgcolor=\"#FF9999\"><td class=\"normala\">";
		echo $lgv_sumo."</td>";
		echo "<td colspan=\"4\">&nbsp;".$value1["T"]."</td></tr>";
		echo "</table>";
		echo "</td>";
	}
	echo "</tr></table>";
}

?>
<html>
<head>
<title>ikurso</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" dir="<? echo $lgv_direkto; ?>" <? if ($validi=="jes") { echo "onLoad=\"window.alert('".$lgv_datumsavo."');\""; } ?>>
<?
pagxkapo();
menuo($persono->get_enirnomo(),$persono->rajtoj->get_kodo());
?>
<center>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td nowrap>
      <div align="center" class="titolo">Statistiques</div>
    </td>
  </tr>
  <tr>
    <td bgcolor="#d0d8df">&nbsp;</td>
  </tr>
  <tr>
    <td>
    <table border="0">
      <tr>
        <td nowrap>
          <p class="normala"><?=$lgv_lauxKategorio; ?></p>
          <p class="artifiko"><?=$lgv_lauxKategorioNoto; ?></p>
          <? stat_rajtoj(); ?>
        </td>
        <td nowrap>
          <p class="normala"><?= $lgv_lauxSekso; ?></p>
          <? stat_seksoj(); ?>
        </td>
      </tr>
      <tr>
        <td nowrap>
          <hr>
          <p class="normala"><?= $lgv_lauxMonatoj; ?>
          <a href="#" onClick="window.open('stat-monatoj.php','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=620,height=520');">
		  <img border="0" height="14" width="14" src="bildoj/grafiko.png">
		  </a></p>
          <?  stat_monatoj(); ?>
          <!-- <img src="stat-monatoj.php" border="0"> -->
        </td>
        <td nowrap>
          <hr>
          <p class="normala"><?= $lgv_lauxLandoj; ?></p>
          <? stat_landoj(); ?>
        </td>
      </tr>
      <tr>
        <td nowrap colspan="2">
        <hr>
          <p class="normala"><?= $lgv_lauxLeciono;?></p>
          <p class="artifiko"><?= $lgv_lauxLecionoNoto;?></p>
          <? stat_lecionoj(); ?>
        </td>
      </tr>      
    </table>
  </td>
  </tr>
  <tr>
    <td bgcolor="#d0d8df">&nbsp;</td>
  </tr>
</table>
</center>
</body>
</html>