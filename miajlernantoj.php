<?php
include "util.php";
$pagxtitolo="Mes &eacute;l&egrave;ves";
$gxisdatigDato="2007-06-16";
$eksaj=isset($_GET["eksaj"])?$_GET["eksaj"]:"no";
$farite=isset($_GET["farite"])?$_GET["farite"]:"";
$persono_id = $_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
if (($rajto!='A')&&($rajto!='K')) {header("Location:index.php?erarkodo=4");}

// tiu funkcio konstruas la liston de cxiuj studantoj
function listiStudantojn() {
	global $persono_id,$bdd;
	$i=0;
	// studantoj kiu NE jam komencis lerni (stato de nuna_kurso valoras 'N' kiel NE komencita)
	$demando = "select nuna_kurso.id as kursid,nuna_kurso.studanto as studanto,nuna_kurso.lastdato,(TO_DAYS(NOW()) - TO_DAYS(nuna_kurso.lastdato)) as numtagoj1,nuna_kurso.ekdato,(TO_DAYS(NOW()) - TO_DAYS(nuna_kurso.ekdato)) as numtagoj2, personoj.id as personid,personoj.enirnomo,personoj.personnomo,personoj.familinomo,personoj.naskigxdato as naskigxdato,personoj.retadreso as retadreso,personoj.adreso1 as adreso1,personoj.adreso2 as adreso2,personoj.lando as lando,personoj.posxtkodo as posxtkodo,personoj.urbo as urbo,personoj.kialo as kialo,personoj.noto as noto,nuna_kurso.nunleciono,nuna_kurso.kurso as kurso from personoj,nuna_kurso where nuna_kurso.studanto=personoj.id and nuna_kurso.korektanto=$persono_id and (nuna_kurso.stato='K' or nuna_kurso.stato='N') order by nuna_kurso.lastdato desc";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {		
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
		//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["naskigxdato"],$nskdt);
		$nskdt=explode("-",$row["naskigxdato"]);
		if (count($nskdt)==3) { // cas où la date contient deux tirets
			echo $nskdt[2]."/".$nskdt[1]."/".$nskdt[0]."<br>";
		}

		if ($row["adreso1"]!="") echo $row["adreso1"]."<br>";
		if ($row["adreso2"]!="") echo $row["adreso2"]."<br>";
		echo $row["posxtkodo"]." ".$row["urbo"]."<br>";
		echo $row["lando"]."-";
		echo "</div><div class='lernanto' style='padding-left:10px;'>";

		// cours suivi
		$demando2="select kursoj.nomo as kursnomo from kursoj where kursoj.kodo='".$row['kurso']."'"; 
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		$row2 = $result2->fetch();

		// infos sur le cours suivi
		echo "<em>cours suivi&nbsp;:</em><b>".$row2["kursnomo"]."</b><br>";	
		echo "<em>inscription le : </em>\n";
		$ekdt = explode("-",$row["ekdato"]);
		echo $ekdt[2]."/".$ekdt[1]."/".$ekdt[0]."<br>\n";
		echo "<em>derni&egrave;re le&ccedil;on envoy&eacute;e le : </em>\n";
		if ($row["lastdato"]==0) {
			echo "--/--/--\n";
		}
		else{
			//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["lastdato"],$lstdt);
			$lstdt = explode("-",$row["lastdato"]);
			echo $lstdt[2]."/".$lstdt[1]."/".$lstdt[0]."\n";
			echo "&nbsp;(<a href='vidiLecionon.php?numleciono=".$row["nunleciono"]."&kurso=".$row["kurso"]."&studanto=".$row["studanto"]."'>voir</a>)";
		}
		echo "<br/>";
		// bouton pour indiquer qu'un élève a abandonné
		echo "<form method='POST' action='miajlernantoj2.php'>"; 
		echo "<input type=\"hidden\" name=\"nunleciono\" value=\"".$row["nunleciono"]."\">";
		echo "<input type=\"hidden\" name=\"leciono\" value=\"".$row["kursid"]."-H\">";
		echo "<input  class='bouton' type='submit' value='A abandonné'>";
		echo " <i>(Vous liberez ainsi une place pour un nouvel élève)</i><br/>";
		echo "</form>";

		// menu déroulant pour avancer manuellement dans les leçons
		echo "<form method=\"POST\" action=\"miajlernantoj2.php\">"; 
		echo "<select name=\"leciono\">\n";
		echo "<option value=\"".$row["kursid"]."-N\" >Pas encore commencé</option>\n";
		$demando3="select lecionoj.titolo, lecionoj.numero from lecionoj where lecionoj.kurso='".$row["kurso"]."'";
		$result3 = $bdd->query($demando3) or die(print_r($bdd->errorInfo()));
		while($row3 = $result3->fetch()) {
			echo "<option value=\"".$row["kursid"]."-".$row3["numero"]."\" ";
			if ($row["nunleciono"]==$row3["numero"]) {echo "selected";}
				echo ">".$row3["titolo"]."</option>\n";
		}
		echo "</select>\n";
		echo "<input type=\"hidden\" name=\"nunleciono\" value=\"".$row["nunleciono"]."\">";
		echo "<input class=\"bouton\" type=\"submit\" value=\"Valider\"><br/>";
		echo "</form>\n";

		// bouton pour indiquer que l'élève a fini son cours
		echo "<form method='POST' action='miajlernantoj2.php'>"; 
		echo "<input type=\"hidden\" name=\"nunleciono\" value=\"".$row["nunleciono"]."\">";
		echo "<input type=\"hidden\" name=\"leciono\" value=\"".$row["kursid"]."-F\">";
		echo "<input  class='bouton' type='submit' value='A fini'>";
		echo " <i>(l'élève recevra un message pour recevoir son diplôme)</i><br/>";
		echo "</form>";

		// colonne 3: commentaires
		echo "</div><div class='lernanto'>";
		echo "<em>commentaire de l’élève :</em><br>";
		
		echo stripslashes($row['kialo'])."<br>";
		echo "<em>commentaires du correcteur : </em> <br>";
		// notoj aldoneblaj per la korektanto
		$demando4 = "select * from komentoj where komentoj.studanto='".$row["studanto"]."'";
		$result4 = $bdd->query($demando4) or die(print_r($bdd->errorInfo()));
		echo "</em>";
		while ($row4 = $result4->fetch()){
			$demando5 = "select enirnomo from personoj where personoj.id='".$row4['korektanto']."'";
			$result5 = $bdd->query($demando5) or die(print_r($bdd->errorInfo()));
			$row5 = $result5->fetch();
			if ($row4["korektanto"]==$persono_id){
				echo "<a href='forigiNoton.php?noto_id=".$row4['id']."&stud_id=".$row['studanto']."&stud_nomo=".$row['enirnomo']."&pagxo=miajlernantoj.php'>";
				echo "<img src=\"bildoj/icon_delete.gif\" alt=\"Supprimer ce commentaire\" title=\"Supprimer ce commentaire\" border=\"0\" align=\"middle\"></a>";
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
			echo "<p>Aucun élève</p>";
	}
}

// tiu funkcio konstruas la liston de cxiuj eks-studantoj (haltintaj kaj finintaj)
function listiEksStudantojn() {
	global $persono_id,$bdd;
	$i=0;
	// studantoj kiu NE jam komencis lerni (stato de nuna_kurso valoras 'N' kiel NE komencita)
	$demando = "select nuna_kurso.id as kursid,nuna_kurso.stato as stato,nuna_kurso.studanto as studanto,nuna_kurso.lastdato,(TO_DAYS(NOW()) - TO_DAYS(nuna_kurso.lastdato)) as numtagoj1,nuna_kurso.ekdato,(TO_DAYS(NOW()) - TO_DAYS(nuna_kurso.ekdato)) as numtagoj2, personoj.enirnomo,personoj.personnomo,personoj.familinomo,personoj.naskigxdato as naskigxdato,personoj.retadreso as retadreso,personoj.adreso1 as adreso1,personoj.adreso2 as adreso2,personoj.lando as lando,personoj.posxtkodo as posxtkodo,personoj.urbo as urbo,personoj.kialo as kialo,personoj.noto as noto,nuna_kurso.nunleciono,nuna_kurso.kurso as kurso from personoj,nuna_kurso where nuna_kurso.studanto=personoj.id and nuna_kurso.korektanto=$persono_id and (nuna_kurso.stato='H' or nuna_kurso.stato='F') order by nuna_kurso.lastdato desc";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	while($row = $result->fetch()) {		
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
			echo "<input class='bouton' type='submit' value=\"Récupérer l’élève\">";
		}	
		echo "</div></div>";
			echo "</form>";

		// colonne 1: coordonnees 
		echo "<div class='lernanto gauche' style='border:solid #888;border-width:0 1px 1px 0;margin-right:10px;'>";
		//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["naskigxdato"],$nskdt);
		$nskdt=explode("-",$row["naskigxdato"]);
		echo $nskdt[2]."/".$nskdt[1]."/".$nskdt[0]."<br>";
		if ($row["adreso1"]!="") echo $row["adreso1"]."<br>";
		if ($row["adreso2"]!="") echo $row["adreso2"]."<br>";
		echo $row["posxtkodo"]." ".$row["urbo"]." ";
		echo $row["lando"];
		echo "</div><div class='lernanto' style='padding-left:10px;'>";

		// cours suivi
		$demando2="select kursoj.nomo as kursnomo from kursoj where kursoj.kodo='".$row['kurso']."'"; 
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		$row2 = $result2->fetch();
		echo "<em>cours suivi&nbsp;:</em><b>".$row2["kursnomo"]."</b><br>";	
		echo "<em>inscription le : </em>\n";
		//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["ekdato"],$ekdt);
		$ekdt=explode("-",$row["ekdato"]);
		echo $ekdt[2]."/".$ekdt[1]."/".$ekdt[0]."<br>\n";
		$demando3="select lecionoj.titolo, lecionoj.numero from lecionoj where lecionoj.kurso='".$row["kurso"]."' and lecionoj.numero='".$row['nunleciono']."'";
		$result3 = $bdd->query($demando3) or die(print_r($bdd->errorInfo()));
		$row3 = $result3->fetch();
		echo "<em>derni&egrave;re le&ccedil;on : </em>".$row3['titolo']."<br>";
		if ($row["stato"]=='F'){echo "<em>fin du cours le : </em>\n";}
		else {echo "<em>abandon le : </em>\n";}
		if ($row["lastdato"]==0) {
			echo "--/--/--<br>\n";
		}
		else{
			//ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["lastdato"],$lstdt);
			$lstdt = explode("-",$row["lastdato"]);
			echo $lstdt[2]."/".$lstdt[1]."/".$lstdt[0]."<br>\n";
		}

		// colonne 3: commentaires
		echo "</div><div class='lernanto'>";
		echo "<em>commentaire de l'&eacute;l&egrave;ve :</em><br>";
		echo stripslashes($row['kialo'])."<br>";
		echo "<em>commentaires du correcteur :</em><br>";
		// notoj aldoneblaj per la korektanto
		$demando4 = "select * from komentoj where komentoj.studanto='".$row["studanto"]."'";
		$result4 = $bdd->query($demando4) or die(print_r($bdd->errorInfo()));
		while ($row4 = $result4->fetch()){
			$demando5 = "select enirnomo from personoj where personoj.id='".$row4['korektanto']."'";
			$result5 = $bdd->query($demando5) or die(print_r($bdd->errorInfo()));
			$row5 = $result5->fetch();
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
			echo "<p>Aucun élève</p>";
	}
}
include "pagxkapo-old.inc.php";
?>
		<div id="enhavo">
			<ul id="tabnav">
				<li <?php if ($eksaj=="no") {echo " class='aktiva'";}?>><a href="miajlernantoj.php">élèves en cours</a></li>
				<li <?php if ($eksaj=="jes") {echo " class='aktiva'";}?>><a href="miajlernantoj.php?eksaj=jes">Anciens élèves</a></li>
				<li><a href="sxangxiNBlernantoj.php">Modifier le nombre d’élèves</a></li>
		</ul>
		<div id="kadro">
			<?php if ($farite=="jes") { ?>
				<p class="eraro">Vos donn&eacute;es ont &eacute;t&eacute; mises &agrave; jour</p>
			<?php } ?>
			<div class="encadre">
				<p>Pour plus d'informations sur la fa&ccedil;on de g&eacute;rer vos &eacute;l&egrave;ves, 
				lisez le <a href="helppagxo.php">Guide du correcteur</a>.</p>
			</div>

    		<?php if ($eksaj=="jes"){
    			echo "<h2>Anciens élèves</h2>";
    			listiEksStudantojn();
			} else {
				echo "<h2>élèves en cours</h2>";
				listiStudantojn();
			}
			?>
		</div>
<?php include "pagxpiedo-old.inc.php";?>                

