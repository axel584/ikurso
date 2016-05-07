<?
include "util.php";
$pagxtitolo=$lgv_miajlernantoj;
$gxisdatigDato="2007-06-16";
$eksaj=$_GET["eksaj"];
$farite=$_GET["farite"];
if ($eksaj=="") {$eksaj="no";}
$persono_id = $_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
if (($rajto!='A')&&($rajto!='K')) {header("Location:index.php?erarkodo=4");}

// tiu funkcio konstruas la liston de cxiuj studantoj
function listiStudantojn() {
	global $lingvo,$persono_id,$lgv_nekomencita,$lgv_neniuLernanto,$lgv_nuna_leciono,$lgv_ek,$idnoto,$lgv_sekvitakurso,$lgv_haltita,$lgv_finita;
	$i=0;
	// studantoj kiu NE jam komencis lerni (stato de nuna_kurso valoras 'N' kiel NE komencita)
	$demando = "select nuna_kurso.id as kursid,nuna_kurso.studanto as studanto,nuna_kurso.lastdato,(TO_DAYS(NOW()) - TO_DAYS(nuna_kurso.lastdato)) as numtagoj1,nuna_kurso.ekdato,(TO_DAYS(NOW()) - TO_DAYS(nuna_kurso.ekdato)) as numtagoj2, personoj.id as personid,personoj.enirnomo,personoj.personnomo,personoj.familinomo,personoj.naskigxdato as naskigxdato,personoj.retadreso as retadreso,personoj.adreso1 as adreso1,personoj.adreso2 as adreso2,personoj.lando as lando,personoj.posxtkodo as posxtkodo,personoj.urbo as urbo,personoj.kialo as kialo,personoj.noto as noto,nuna_kurso.nunleciono,nuna_kurso.kurso as kurso from personoj,nuna_kurso where nuna_kurso.studanto=personoj.id and nuna_kurso.korektanto=$persono_id and (nuna_kurso.stato='K' or nuna_kurso.stato='N') order by nuna_kurso.lastdato desc";
	mysql_select_db( "ikurso");
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando);
	while($row = mysql_fetch_array($result)) {		
		echo "<div class='lernantoj'>";
		echo "<div class='nomo'>";
		echo "<div class='tagoj' style='background: url(bildoj/rond-";
		($row['numtagoj1']==NULL)?($numtagoj=$row['numtagoj2']):($numtagoj=$row['numtagoj1']);
		if ($numtagoj<15) {echo "vert";}
		elseif ($numtagoj<31) {echo "orange";}
		else {echo "rouge";}
		echo ".gif) no-repeat;'>";
		echo "<p style='padding:0; margin:0;padding-top:9px;'>".$numtagoj;
		echo "</div>";
		
		echo "<div style=\"height:35px; margin-left:40px;\"><img align='middle' src=\"bildoj/";
		if ($row["kurso"]=="KE") {echo "ikurso-ikono.gif\"";}
		if ($row["kurso"]=="CG") {echo "cge-ikono.gif\"";}
		if ($row["kurso"]=="GR") {echo "gerda-ikono.gif\"";}
		echo "\">";
		$personid=$row["personid"];
		echo "\n<b>".$row["enirnomo"]."</b> (".$row['personnomo']." ".$row['familinomo'].") - ";
		echo "<a href=\"mailto:".$row['retadreso']."\">".$row["retadreso"]."</a>\n";
		echo "</div></div>";
		
		// colonne 1: coordonnees
		echo "<div class='lernanto gauche' style='border:solid #888;border-width:0 1px 1px 0;margin-right:10px;'>";
		ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["naskigxdato"],$nskdt);
		echo $nskdt[3]."/".$nskdt[2]."/".$nskdt[1]."<br>";

		if ($row["adreso1"]!="") echo $row["adreso1"]."<br>";
		if ($row["adreso2"]!="") echo $row["adreso2"]."<br>";
		echo $row["posxtkodo"]." ".$row["urbo"]."<br>";
		echo $row["lando"]."-";
		echo "</div><div class='lernanto' style='padding-left:10px;'>";

		// cours suivi
		$demando2="select kursoj.nomo as kursnomo from kursoj where kursoj.kodo='".$row['kurso']."' and kursoj.lingvo='$lingvo'"; 
		mysql_select_db( "ikurso");
		$result2 = mysql_query($demando2) or die (  "SELECT : malbona demando :".$demando2);
		$row2 = mysql_fetch_array($result2);
		echo "<form method=\"POST\" action=\"miajlernantoj2.php\">"; 
		echo "<em>cours suivi&nbsp;:</em><b>".$row2["kursnomo"]."</b><br>";	
		echo "<em>inscription le : </em>\n";
		ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["ekdato"],$ekdt);
		echo $ekdt[3]."/".$ekdt[2]."/".$ekdt[1]."<br>\n";
		echo "<em>derni&egrave;re le&ccedil;on envoy&eacute;e le : </em>\n";
		if ($row["lastdato"]==0) {
			echo "--/--/--<br>\n";
		}
		else{
			ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["lastdato"],$lstdt);
			echo $lstdt[3]."/".$lstdt[2]."/".$lstdt[1]."<br>\n";
		}
		echo "<select name=\"leciono\">\n";
		echo "<option value=\"".$row["kursid"]."-N\" >".$lgv_nekomencita."</option>\n";
		$demando3="select lecionoj.titolo, lecionoj.numero from lecionoj where lecionoj.kurso='".$row["kurso"]."' and lecionoj.lingvo='$lingvo'";
		$result3 = mysql_query($demando3) or die (  "INSERT : malbona demando :".$demando3);
		while($row3 = mysql_fetch_array($result3)) {
			// echo $lgv_nuna_leciono." : ".$row3["titolo"]."-".$row3["numero"]."<br>\n";	
			echo "<option value=\"".$row["kursid"]."-".$row3["numero"]."\" ";
			if ($row["nunleciono"]==$row3["numero"]) {echo "selected";}
				echo ">".$row3["titolo"]."</option>\n";
		}
		echo "<option value=\"".$row["kursid"]."-F\" >".$lgv_finita."</option>\n";
		echo "<option value=\"".$row["kursid"]."-H\" >".$lgv_haltita."</option>\n";
		echo "</select>\n";
		echo "<input type=\"hidden\" name=\"nunleciono\" value=\"".$row["nunleciono"]."\">";
		echo "<input class=\"bouton\" type=\"submit\" value=\"".$lgv_ek."\">";
		echo "</form>\n";

		// colonne 3: commentaires
		echo "</div><div class='lernanto'>";
		echo "<em>commentaire de l’élève :</em><br>";
		
		echo stripslashes($row['kialo'])."<br>";
		echo "<em>commentaires du correcteur : </em> <br>";
		// notoj aldoneblaj per la korektanto
		$demando4 = "select * from komentoj where komentoj.studanto='".$row["studanto"]."'";
		$result4 = mysql_query($demando4) or die (  "SELECT : malbona demando :".$demando4);
		echo "</em>";
		while ($row4 = mysql_fetch_array($result4)){
			$demando5 = "select enirnomo from personoj where personoj.id='".$row4['korektanto']."'";
			$result5 = mysql_query($demando5) or die (  "SELECT : malbona demando :".$demando5);
			$row5 = mysql_fetch_array($result5);
			if ($row4["korektanto"]==$persono_id){
				echo "<a href='forigiNoton.php?noto_id=".$row4['id']."&stud_id=".$row['studanto']."&stud_nomo=".$row['enirnomo']."&pagxo=miajlernantoj.php'>";
				echo "<img src=\"forum/templates/subSilver/images/icon_delete.gif\" alt=\"Supprimer ce commentaire\" title=\"Supprimer ce commentaire\" border=\"0\" align=\"middle\"></a>";
			}
			echo " <em>de ".$row5['enirnomo']." le ".$row4['dato']."</em> :\n";
			echo " ".stripslashes($row4["teksto"])."\n";
			echo "<br>\n";
		}
		echo "<div class='encadre' style='clear:both; margin:10px 0 0 0;padding:5px;'>";
		echo "<form name='aldoniNoton".$i."' method='post' action='aldoniNoton.php'>\n";
		echo "<input type='hidden' name='stud_id' value='".$row["studanto"]."'>\n";
		echo "<input type='hidden' name='pagxo' value='miajlernantoj.php'>";
		echo "<em>Ce commentaire ne sera visible que de vous. Ne pas utiliser ceci pour contacter les administrateurs.</em><br/>";
		echo "<input type='text' name='teksto' size='80' value='** vous pouvez ajouter un commentaire ici **' onFocus='this.value=\"\"'>";
		echo "&nbsp;&nbsp;<input class='bouton' type='image' src='bildoj/icon_valider2.gif' align='middle' onClick='this.form.submit();'>";
		echo "</form>";
		echo "</span>";
		echo "</div></div></div>";
		$i++;
	}
	if ($i==0) { 
			echo "<p>".$lgv_neniuLernanto."</p>";
	}
}

// tiu funkcio konstruas la liston de cxiuj eks-studantoj (haltintaj kaj finintaj)
function listiEksStudantojn() {
	global $lingvo,$persono_id,$lgv_nekomencita,$lgv_neniuLernanto,$lgv_nuna_leciono,$lgv_ek,$idnoto,$lgv_sekvitakurso,$lgv_haltita,$lgv_finita,$lgv_repreniLernanton;
	$i=0;
	// studantoj kiu NE jam komencis lerni (stato de nuna_kurso valoras 'N' kiel NE komencita)
	$demando = "select nuna_kurso.id as kursid,nuna_kurso.stato as stato,nuna_kurso.studanto as studanto,nuna_kurso.lastdato,(TO_DAYS(NOW()) - TO_DAYS(nuna_kurso.lastdato)) as numtagoj1,nuna_kurso.ekdato,(TO_DAYS(NOW()) - TO_DAYS(nuna_kurso.ekdato)) as numtagoj2, personoj.enirnomo,personoj.personnomo,personoj.familinomo,personoj.naskigxdato as naskigxdato,personoj.retadreso as retadreso,personoj.adreso1 as adreso1,personoj.adreso2 as adreso2,personoj.lando as lando,personoj.posxtkodo as posxtkodo,personoj.urbo as urbo,personoj.kialo as kialo,personoj.noto as noto,nuna_kurso.nunleciono,nuna_kurso.kurso as kurso from personoj,nuna_kurso where nuna_kurso.studanto=personoj.id and nuna_kurso.korektanto=$persono_id and (nuna_kurso.stato='H' or nuna_kurso.stato='F') order by nuna_kurso.lastdato desc";
	mysql_select_db( "ikurso");
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando);
	while($row = mysql_fetch_array($result)) {		
		echo "<div class='lernantoj'>";
		echo "<form name='repreni".$row["studanto"]."' method='POST' action='repreniLernanton.php'>";
		echo "<div class='nomo'>";
		echo "<div style=\"height:35px;\"><img align='middle' src=\"bildoj/";
		if ($row["kurso"]=="KE") {echo "ikurso-ikono.gif\"";}
		if ($row["kurso"]=="CG") {echo "cge-ikono.gif\"";}
		if ($row["kurso"]=="GR") {echo "gerda-ikono.gif\"";}
		echo "\">";
		echo "\n<b>".$row["enirnomo"]."</b> (".$row['personnomo']." ".$row['familinomo'].") - ";
		echo "<a href=\"mailto:".$row['retadreso']."\">".$row["retadreso"]."</a>\n";
		if ($row["stato"]=='H') {
			echo "<input type='hidden' name='studanto' value='".$row["studanto"]."'>";
			echo "<input type='hidden' name='enirnomo' value='".$row["enirnomo"]."'>";
			echo "<input type='hidden' name='idnunaKurso' value='".$row["kursid"]."'>";
			echo "<input class='bouton' type='submit' value=\"".$lgv_repreniLernanton."\">";
		}	
		echo "</div></div>";
			echo "</form>";

		// colonne 1: coordonnees 
		echo "<div class='lernanto gauche' style='border:solid #888;border-width:0 1px 1px 0;margin-right:10px;'>";
		ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["naskigxdato"],$nskdt);
		echo $nskdt[3]."/".$nskdt[2]."/".$nskdt[1]."<br>";
		if ($row["adreso1"]!="") echo $row["adreso1"]."<br>";
		if ($row["adreso2"]!="") echo $row["adreso2"]."<br>";
		echo $row["posxtkodo"]." ".$row["urbo"]." ";
		echo $row["lando"];
		echo "</div><div class='lernanto' style='padding-left:10px;'>";

		// cours suivi
		$demando2="select kursoj.nomo as kursnomo from kursoj where kursoj.kodo='".$row['kurso']."' and kursoj.lingvo='$lingvo'"; 
		mysql_select_db( "ikurso");
		$result2 = mysql_query($demando2) or die (  "SELECT : malbona demando :".$demando2);
		$row2 = mysql_fetch_array($result2);
		echo "<em>cours suivi&nbsp;:</em><b>".$row2["kursnomo"]."</b><br>";	
		echo "<em>inscription le : </em>\n";
		ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["ekdato"],$ekdt);
		echo $ekdt[3]."/".$ekdt[2]."/".$ekdt[1]."<br>\n";
		$demando3="select lecionoj.titolo, lecionoj.numero from lecionoj where lecionoj.kurso='".$row["kurso"]."' and lecionoj.lingvo='$lingvo' and lecionoj.numero='".$row['nunleciono']."'";
		$result3 = mysql_query($demando3) or die (  "INSERT : malbona demando :".$demando3);
		$row3 = mysql_fetch_array($result3);
		echo "<em>derni&egrave;re le&ccedil;on : </em>".$row3['titolo']."<br>";
		if ($row["stato"]=='F'){echo "<em>fin du cours le : </em>\n";}
		else {echo "<em>abandon le : </em>\n";}
		if ($row["lastdato"]==0) {
			echo "--/--/--<br>\n";
		}
		else{
			ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["lastdato"],$lstdt);
			echo $lstdt[3]."/".$lstdt[2]."/".$lstdt[1]."<br>\n";
		}

		// colonne 3: commentaires
		echo "</div><div class='lernanto'>";
		echo "<em>commentaire de l'&eacute;l&egrave;ve :</em><br>";
		echo stripslashes($row['kialo'])."<br>";
		echo "<em>commentaires du correcteur :</em><br>";
		// notoj aldoneblaj per la korektanto
		$demando4 = "select * from komentoj where komentoj.studanto='".$row["studanto"]."'";
		$result4 = mysql_query($demando4) or die (  "SELECT : malbona demando :".$demando4);
		while ($row4 = mysql_fetch_array($result4)){
			$demando5 = "select enirnomo from personoj where personoj.id='".$row4['korektanto']."'";
			$result5 = mysql_query($demando5) or die (  "SELECT : malbona demando :".$demando5);
			$row5 = mysql_fetch_array($result5);
			if ($row4["korektanto"]==$persono_id){
				echo "<a href='forigiNoton.php?noto_id=".$row4['id']."&stud_id=".$row['studanto']."&stud_nomo=".$row['enirnomo']."&pagxo=miajlernantoj.php'>";
				echo "<img src=\"forum/templates/subSilver/images/icon_delete.gif\" alt=\"Supprimer ce commentaire\" title=\"Supprimer ce commentaire\" border=\"0\" align=\"middle\"></a>";
			}
			echo " <em>de ".$row5['enirnomo']." le ".$row4['dato']."</em> :\n";
			echo " ".$row4['teksto']."\n";
			echo "</span>\n";
			echo "<br>\n";
		}
		echo "<div class='encadre' style='clear:both; margin:10px 0 0 0;padding:5px;'>";
		echo "<form name='aldoniNoton".$i."' method='post' action='aldoniNoton.php'>\n";
		echo "<input type='hidden' name='stud_id' value='".$row["studanto"]."'>\n";
		echo "<input type='hidden' name='pagxo' value='miajlernantoj.php'>";
		echo "<input type='text' name='teksto' size='50' value='** vous pouvez ajouter un commentaire ici **' onFocus='this.value=\"\"'>";
		echo "&nbsp;&nbsp;<input type='image' class='bouton' src='bildoj/icon_valider2.gif' align='middle' onClick='this.form.submit();'>";
		echo "</form>";
		echo "</span>";
		echo "</div></div></div>";
		$i++;
	}
	if ($i==0) { 
			echo "<p>".$lgv_neniuLernanto."</p>";
	}
}
include "pagxkapo.inc.php";
?>
		<div id="enhavo">
			<ul id="tabnav">
				<li <?if ($eksaj=="no") {echo " class='aktiva'";}?>><a href="miajlernantoj.php"><?=$lgv_nunajLernantoj?></a></li>
				<li <?if ($eksaj=="jes") {echo " class='aktiva'";}?>><a href="miajlernantoj.php?eksaj=jes"><?=$lgv_eksajLernantoj?></a></li>
				<li><a href="sxangxiNBlernantoj.php"><?=$lgv_sxangiNBlernantoj?></a></li>
		</ul>
		<div id="kadro">
			<? if ($farite=="jes") { ?>
				<p class="eraro">Vos donn&eacute;es ont &eacute;t&eacute; mises &agrave; jour</p>
			<? } ?>
			<div class="encadre">
				<p>Pour plus d'informations sur la fa&ccedil;on de g&eacute;rer vos &eacute;l&egrave;ves, 
				lisez le <a href="helppagxo.php">Guide du correcteur</a>.</p>
			</div>

    		<? if ($eksaj=="jes"){
    			echo "<h2>".$lgv_eksajLernantoj."</h2>";
    			listiEksStudantojn();
			} else {
				echo "<h2>".$lgv_nunajLernantoj."</h2>";
				listiStudantojn();
			}
			?>
		</div>
<? include "pagxpiedo.inc.php";?>                