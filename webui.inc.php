<?php
// 
function pagxkapo() {
}

// tiu funkcio konstruas la menuon
// $nomo : nomo de la uzanto
// $rajto : rajto de tiu uzanto
// P : Persono (nenia rajto)
// S : Studanto (havas korektanton)
// K : Korekanto (havas multajn studantojn kaj studanta maksimumo)
// A : administrato (cxiaj rajtoj)
function menuo($nomo,$rajto) {
global $persono_id,$persono,$lgv_persona,$lgv_korekanta,$lgv_administranta,$lgv_sxangipersoninformojn,$lgv_eliru,$lgv_alkursoj,$lgv_vortlisto,$lgv_zorgistudantojn,$lgv_zorgiuzantojn,$lgv_lernantalisto,$lgv_zorgiferiojn,$lgv_ferioj,$lgv_stirpanelo,$lgv_statistiko,$lgv_helppagxo,$lgv_forumo,$phpbb2mysql_sid;
	echo vmenuo($nomo,$rajto,"");
}

function kursoligo($nomo,$rajto){
}
// tiu funkcio konstruas la menuo kaj sendas gxian valuon.
// $nomo : nomo de la uzanto
// $rajto : rajto de tiu uzanto
// $vojo : vojo por trovi dosierojn (../ el forumo, nenio por la cetero)
// P : Persono (nenia rajto)
// S : Studanto (havas korektanton)
// K : Korekanto (havas multajn studantojn kaj studanta maksimumo)
// A : administrato (cxiaj rajtoj)
function vmenuo($nomo,$rajto,$vojo,$pagxtitolo) {
	global $lgv_persona,$persono,$lgv_eliru,$lgv_korektanta,$lgv_administranta,$metodo,
	$lgv_sxangipersoninformojn,$lgv_miajlernantoj,$lgv_eliru,$lgv_alkursoj,$lgv_vortlisto
	,$lgv_zorgistudantojn,$lgv_zorgiuzantojn,$lgv_lernantalisto,$lgv_zorgiferiojn,$lgv_ferioj,
	$lgv_stirpanelo,$lgv_statistiko,$lgv_helppagxo,$lgv_forumo,$lgv_skribi,$lgv_helpo, 
	$phpbb2mysql_sid,$persono_id,$kurso,$url,$vojo,$lgv_pasvortoForgesita,$metodo;
$vojo="../";
$res="";
$res.="<div id=\"menuo\">";
$res.="<table><tr><td class=\"unua\">";
$res.="<h1>".$nomo."</h1>";
$res.="<p><a href=\"#\"><a href=\"".$vojo."eliri.php\">".$lgv_eliru."</a></p>";
$res.="</td><td>";
$res.="<h2>".$lgv_persona."</h2>";
$res.="<p><a href=\"".$vojo."forum/index.php?sid=".$phpbb2mysql_sid."\">";
$res.=$lgv_forumo. " ".@phpbb_nombre_nouveau_message($persono_id);
$res.="</a></p>";
$res.="<p><a href=\"javascript:void(0);\" onClick=\"window.open('".$vojo."forum/chatbox_mod/chatbox.php','12_ChatBox','scrollbars=no,width=700,height=550')\">Discussion en ligne</a></p>";
$res.="<p><a href=\"".$vojo."personinformoj.php\">".$lgv_sxangipersoninformojn."</a></p>";
$res.="</td>";
if ($rajto=="K" || $rajto=="A"){
	$res.="<td>";
	$res.="<h2>".$lgv_korektanta."</h2>";
	$res.="<p><a href=\"".$vojo."statLauxKategorio.php\">".$lgv_statistiko."</a></p>";
	$res.="<p><a href=\"".$vojo."helppagxo.php\">".$lgv_helppagxo."</a></p>";
	$res.="<p><a href=\"".$vojo."miajlernantoj.php\">".$lgv_zorgistudantojn."</a></p>";
	$res.="</td>";
}
if ($rajto=="I"){ 
	$res.="<td>";
	$res.="<h2>".$lgv_administranta."</h2>";
	$res.="<p><a href=\"".$vojo."statLauxKategorio.php\">".$lgv_statistiko."</a></p>";
	$res.="<p><a href=\"".$vojo."administri.php\">".$lgv_zorgiuzantojn."</a></p>";
	$res.="</td>";
} 
if ($rajto=="A"){ 
	$res.="<td class=\"elemento\">";
	$res.="<h2>".$lgv_administranta."</h2>";
	$res.="<p><a href=\"".$vojo."stirpanelo.php\">".$lgv_stirpanelo."</a></p>";
	$res.="<p><a href=\"".$vojo."administri.php\">".$lgv_zorgiuzantojn."</a></p>";
	$res.="</td>";
}
$res.="</tr></table></div>";

$res.="<div id=\"pagxo\">";
$res.="<div id=\"subpagxo\">";
$res.="<div id=\"pagxmenuo\">";

$res.="<table class='nula'><tr><td valign='top'>\n";
$res.="Mode d&rsquo;affichage :<br>\n";
$res.="<a href='".$url."?metodo=U' title='Unikode'>\n";
$res.="<img src='".$vojo."style/bouton-U.gif' title='Afficher les lettres accentu&eacute;es' class='";
if ($metodo=="U") {$res.="jes";}else{$res.="ne";}
$res.="'></a>";
$res.="<a href='".$url."?metodo=X' title='X-sistemo'>\n";
$res.="<img src='".$vojo."style/bouton-X.gif' title='Afficher des x pour les accents' class='";
if ($metodo!="U"){$res.="jes";}else{$res.="ne";}
$res.="'></a>\n";
$res.="</td><td valign='top'>\n";
$res.="<br><a href='".$vojo."helpo.php'><button>&nbsp;&nbsp;&nbsp;Aide&nbsp;&nbsp;&nbsp;</button></a>";
$res.="</td></tr></table>";

if (($rajto=="K"||$rajto=="A")) {
	$res.="<h2><a href=\"http://ikurso.esperanto-france.org/sxangxiNBlernantoj.php\">".$lgv_miajlernantoj."</h2></a>";
	$res.="<a href=\"http://ikurso.esperanto-france.org/sxangxiNBlernantoj.php\">";
	$res.="<table title=\"cliquez sur la table pour modifier votre nombre d'&eacute;l&egrave;ves\">";
	$res.="<thead>\n<tr>\n<td>cours</td>\n";
	$res.="<td>&eacute;l&egrave;ves<br>en cours</td>";
	$res.="<td>nombre<br>maximum</td>";
	$res.="</tr>\n</thead>\n<tbody>";

/* tableau des eleves */
	$demando1="select nomo,kodo from kursoj";
	$result1 = mysql_query($demando1) or die (  "SELECT : malbona demando :".$demando1);
	while($row1 = mysql_fetch_array($result1)) {
		$res.="<tr>\n";
		$res.="\t<td class='col1'>".$row1["nomo"]."</td>\n";
		$demando2="select count(*) as kiom from nuna_kurso,personoj where nuna_kurso.korektanto='".$persono_id."' and nuna_kurso.kurso='".$row1["kodo"]."' and personoj.id=nuna_kurso.studanto and (nuna_kurso.stato='K' or nuna_kurso.stato='N')";
		$result2 = mysql_query($demando2) or die (  "SELECT : malbona demando :".$demando2);
		$row2 = mysql_fetch_array($result2);
		$res.="\t<td>".$row2['kiom']."</td>\n";
		$demando3="select * from korektebla_kurso where korektanto='".$persono_id."' and kurso='".$row1['kodo']."'";
		$result3 = mysql_query($demando3) or die ("SELECT : malbona demando :".$demando3);
		if (mysql_num_rows($result3)==0){
			$demando3="INSERT INTO korektebla_kurso (korektanto,kurso,kiom_lernantoj) VALUES ('$persono_id','".$row1["kodo"]."',0)";
			$result3 = mysql_query($demando3) or die ("INSERT : Invalid query :".$demando3);
			$demando3="select * from korektebla_kurso where korektanto='".$persono_id."' and kurso='".$row1['kodo']."'";
			$result3 = mysql_query($demando3) or die (  "SELECT : malbona demando :".$demando3);
		}
		$row3 = mysql_fetch_array($result3);
		$res.="\t<td>";
		if ($row2['kiom'] > $row3["kiom_lernantoj"]) {
			$res.="<span style=\"color:red\">".$row3["kiom_lernantoj"]."</span>";
		}else {$res.=$row3["kiom_lernantoj"];}
		$res.="</td>\n";
		$res.="\t</tr>\n";
	}

/* fin du tableau */

	$res.="</tbody>\n</table>\n</a>";
}	

$res.="<h2>Cours</h2>";
$res.="<ul class='niv1'>";

$res.="<li><a href=\"".$vojo."fr/intro.php?temo=eo\">Pr&eacute;sentation</a></li>";
$res.="<li class='ligo'>";
$res.="<a href='".$vojo."fr/cge/intro.php?temo=intro'>Cours en dix le&ccedil;ons</a>";
$res.="<ul class='niv2'>";
$res.="<li><a href='".$vojo."fr/cge/intro.php?temo=intro'>Introduction</a></li>";
$demando="select lecionoj.titolo, lecionoj.retpagxo from lecionoj where lecionoj.kurso='CG'";
mysql_select_db( "ikurso");
$result = mysql_query($demando) or die ("INSERT : malbona demando :".$demando);
while($row = mysql_fetch_array($result)) {
	$res.="<li><a href='".$vojo."fr/cge/".$row['retpagxo']."'>".$row['titolo']."</a></li>\n";
}
$res.="</ul></li>";
$res.="<li class='ligo'>";
$res.="<a href='".$vojo."aligxi.php'>Kurso de esperanto</a>";
$res.="<ul class='niv2'>";
$res.="<li><a href='".$vojo."aligxi.php'>Inscription</a></li>";
$res.="<li><a href='".$vojo."fr/cge/vocabula.php'>Lexique</a></li>";
$res.="</ul></li>";
$res.="<li class='ligo'>";
$res.="<a href='".$vojo."fr/gerda/index.php'>Gerda malaperis</a>";
$res.="<ul class='niv2 gerda'>";
$demando="select lecionoj.titolo, lecionoj.retpagxo from lecionoj 
where lecionoj.kurso='GR' ";
mysql_select_db( "ikurso");
$result = mysql_query($demando) or die ("INSERT : malbona demando :".$demando);
while($row = mysql_fetch_array($result)) {
	$res.="<li><a href='".$vojo."fr/gerda/".$row['retpagxo']."'>".$row['titolo']."</a></li>\n";
}
$res.="</ul></li>";
$res.="<li><a href=\"".$vojo."fr/gerda/lasu00.php\">Lasu min paroli plu!</a></li>";				 

$res.="<li class='lasta'><a href='".$vojo."helpo.php?temo=elsxutoj'>T&eacute;l&eacute;chargements</a></li>";					 
$res.="</ul>";

$res.="<h2>L&rsquo;esp&eacute;ranto</h2>";
$res.="<ul class='niv1'>";
$res.="<li class='lasta'><a href='".$vojo."ressources.php'>En savoir plus...</a></li>";
$res.="</ul>";

$res.="<h2>Comment faire ?</h2>\n";
$res.="<ul class='niv0'>\n";
$res.="<li><a href='".$vojo."/helpo.php'>".$lgv_helpo."</a></li>\n";
$res.="<li><a href='".$vojo."/fr/intro.php?temo=enskribo'>S&rsquo;inscrire &agrave; un cours</a></li>\n";
$res.="<li><a href='#' onClick=\"window.open('".$vojo."pasvortoforgesita.php','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=400,height=150');\" >";
$res.=$lgv_pasvortoForgesita." ?</a></li>\n";

$res.="<li class='lasta'>\n";
$res.="<a href='".$vojo."reago.php'>".$lgv_skribi." :	";				
$res.="<input type='image' src='".$vojo."bildoj/koverto.gif'>";
$res.="</a></p></li></ul>";

$res.="<h2>Farbskatol&rsquo;</h2>\n<ul>\n<li class='nenio'>";
$res.="<p style='text-align:center' id='farbskatol'>\n";
$res.="<a href='http://farbskatol.net'>Vid&eacute;os en esp&eacute;ranto</a></p></li></ul>\n";

$res.="<p class=\"meze\">&nbsp;Ce site est g&eacute;r&eacute; par&nbsp;:";
$res.="<a href=\"http://www.esperanto-jeunes.org\">";
$res.="<img alt=\"jefo-logeto\" src=\"".$vojo."../bildoj/logo_JEFO.gif\"></a><br>";
$res.="avec le soutien de<br>";
$res.="<a href='http://www.linguaforce.com/esperanto/traduction.htm' alt='linguaforce'>";
$res.="<img src='".$vojo."../bildoj/linguaforce.gif' align='center' border='0'></a>";
$res.="</p>";

$res.="</div>";
$res.="<div class=\"stylenavbar\"></div>";

$res.="<h1>".$pagxtitolo."</h1>";

return $res;
}

function getTitoloLecionero($kurso,$leciono,$lecionero) {
	global $bdd;
	$query = "SELECT lecioneroj.titolo FROM lecioneroj,lecionoj WHERE lecioneroj.leciono_id=lecionoj.id and lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' and lecioneroj.ordo=".$lecionero;
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$titolo = $result->fetch()['titolo'];
	echo '<h2 id="lec'.$leciono.'.'.$lecionero.'">'.$leciono.'.'.$lecionero.'. '.$titolo.'</h2>';
}

function getEnhavtabelo($kurso,$leciono) {
	global $bdd,$persono_id;
	if ($persono_id=="") { // Pas connecté : on récupère le sommaire normal
			$query = "SELECT lecioneroj.id,ordo,lecioneroj.titolo,lecioneroj.tipo,lecionoj.retpagxo,'' as persono_id FROM lecioneroj,lecionoj WHERE lecioneroj.leciono_id=lecionoj.id and lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' order by ordo";
	} else { // connecté, on récupère la liste des leçons effectuées
		$query = "SELECT distinct lecioneroj.id,ordo,lecioneroj.titolo,lecioneroj.tipo,lecionoj.retpagxo,personoj_lecioneroj.persono_id  FROM lecioneroj JOIN lecionoj on lecioneroj.leciono_id=lecionoj.id LEFT JOIN personoj_lecioneroj on personoj_lecioneroj.lecionero_id=lecioneroj.id and personoj_lecioneroj.persono_id=".$persono_id." WHERE lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."'  order by ordo";
	}
	echo '<li>';
	echo '<div class="collapsible-header active"><i class="material-icons">toc</i>Sommaire de la leçon</div>';
	echo '<div class="collapsible-body">';
	echo '<ul id="enhavtabelo" class="collection">';
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	while ($row = $result->fetch()) {
		// TODO : changer les classes farita/nuna/nova
		if ($row["persono_id"]==null) { // l'élève n'a pas fait cette section
			$farita="";
		} else { // l'élève a fait cette section
			$farita=" farita";
		}
		if ($row["tipo"]=="TEKSTO") {
			$tipoLecionero = "gramm";
		} elseif ($row["tipo"]=="QCM") {
			$tipoLecionero = "qcm";
		} elseif ($row["tipo"]=="EKZERCARO") {
			$tipoLecionero = "exo";
		} elseif ($row["tipo"]=="VORTARO") {
			$tipoLecionero = "vortaro";
		}  else {
			$tipoLecionero = "";
		}

		echo '<li id="'.$leciono.'-'.$row['ordo'].'" class="'.$farita.' '.$tipoLecionero.'"><a href="'.$row['retpagxo'].'?section='.$row['ordo'].'">'.$leciono.'.'.$row['ordo'].' '.$row['titolo'].'</a></li>';
	}
	echo '</ul>';
	echo '</div>';
	echo '</li>';
								
}

function getFaritajLecioneroj($kurso,$leciono,$persono_id) {
	global $bdd;
	if ($persono_id=="") { // Pas connecté
		return;
	}
	$query = "SELECT distinct lecioneroj.id,ordo,lecioneroj.titolo,lecionoj.retpagxo,personoj_lecioneroj.persono_id  FROM lecioneroj JOIN lecionoj on lecioneroj.leciono_id=lecionoj.id LEFT JOIN personoj_lecioneroj on personoj_lecioneroj.lecionero_id=lecioneroj.id WHERE lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' order by ordo";
	$result = $bdd->query($query);
	echo '<ul id="progreso">';
	while ($row = $result->fetch()) {
		if ($row["persono_id"]==null) { // l'élève n'a pas fait cette section
			echo '<li id="lecionero'.$row["id"].'" class="nova"></li>';
		} else { // l'élève a fait cette section
			echo '<li id="lecionero'.$row["id"].'" class="farita"></li>';
		}

	}
	echo '</ul>';
}

function getLecioneroAntauxa($kurso,$leciono,$lecionero) {
	global $bdd;
	$query="SELECT lecioneroj.titolo,ordo,lecionoj.retpagxo FROM lecioneroj,lecionoj WHERE lecioneroj.leciono_id=lecionoj.id and lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' and lecioneroj.ordo<".$lecionero." order by ordo DESC";
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$row = $result->fetch();
	if ($row!=false) {
		echo '<a href="'.$row['retpagxo'].'?section='.$row['ordo'].'" class="btn-flat small blue-text"><i class="material-icons left">arrow_left</i>'.$leciono.'.'.$row['ordo'].' '.$row['titolo'].'</a>';
	}
	else {
		echo "<a></a>";
	}	
}

function getLecioneroVenonta($kurso,$leciono,$lecionero) {
	global $bdd;
	$query="SELECT lecioneroj.titolo,ordo,lecionoj.retpagxo FROM lecioneroj,lecionoj WHERE lecioneroj.leciono_id=lecionoj.id and lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' and lecioneroj.ordo>".$lecionero." order by ordo ASC";
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$row = $result->fetch();
	if ($row!=false) {
		echo '<a href="'.$row['retpagxo'].'?section='.$row['ordo'].'" class="btn-flat small blue-text">'.$leciono.'.'.$row['ordo'].' '.$row['titolo'].'<i class="material-icons right">arrow_right</i></a>';
	} 
}

function getBoutonFinSection($kurso,$leciono,$lecionero,$persono_id) {
	global $bdd;
	$query="SELECT lecioneroj.id,lecioneroj.titolo,ordo,lecionoj.retpagxo,lecioneroj.tipo,lecioneroj.lasta FROM lecioneroj,lecionoj WHERE lecioneroj.leciono_id=lecionoj.id and lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' and lecioneroj.ordo=".$lecionero." order by ordo ASC";
	//echo $query;
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$row = $result->fetch();
	$tipo = $row["tipo"];
	$lasta = $row["lasta"];
	$lecionero_id = $row["id"];
	// si l'élève n'est pas enregistré
	if ($persono_id!="") { 
		// on n'affiche le bouton DEMANDER UN CORRECTEUR que pour les élèves
		$persono = apartigiPersonon($persono_id);

		if (($persono['rajtoj']=="S")||($persono['rajtoj']=="P")) {
			// on vérifie si l'élève a déjà fait cette leçon pour n'afficher le bouton que si il n'a pas déjà cliqué sur le bouton :
			$query = "select count(*) as combien from personoj_lecioneroj where persono_id=".$persono_id." and lecionero_id=".$lecionero_id;
			$result = $bdd->query($query);
			$leconEnCours = $result->fetch()["combien"];
			if ($leconEnCours>0) {
				$classeDejaFait="disabled";
			} else {
				$classeDejaFait="";
			}
			// on vérifie si l'élève a déjà un correcteur :
			$query = "select count(*) as combien from nuna_kurso where kurso='".$kurso."' and studanto=".$persono_id;
			$result = $bdd->query($query);
			$dejaFait = $result->fetch()["combien"];
			if($tipo=="QCM") { // on vérifie le QCM
				echo '<a id="finiLecioneron_button" class="hide waves-effect waves-light btn tooltipped light-blue darken-1 '.$classeDejaFait.'" data-kurso="'.$kurso.'" data-leciono="'.$leciono.'" data-lecionero_id="'.$lecionero_id.'" data-position="top" data-delay="50" data-tooltip="j\'ai fini d\'étudier cette section">Terminé !</a>';
			} elseif($tipo=="EKZERCARO") { // on memorise (même si on a déjà mémorisé)
				echo '<a id="registriEkzercaron_button" class="waves-effect waves-light btn tooltipped light-blue darken-1 '.$classeDejaFait.'" data-kurso="'.$kurso.'" data-leciono="'.$leciono.'" data-lecionero_id="'.$lecionero_id.'" data-position="top" data-delay="50" data-tooltip="elles seront envoyées à mon correcteur à la fin de la leçon">Enregistrer mes réponses !</a>';
			} elseif($lasta==1) { // on envoit au correcteur si on a un correcteur, on en demande un dans le cas contraire
				if ($dejaFait>0) {
					echo '<a id="sendiLecionon_button" class="waves-effect waves-light btn tooltipped light-blue darken-1 '.$classeDejaFait.'" data-kurso="'.$kurso.'" data-leciono="'.$leciono.'" data-lecionero_id="'.$lecionero_id.'" data-position="top" data-delay="50" data-tooltip="j\'ai fini d\'étudier cette section">Envoyer à mon correcteur !</a>';
				} else { // Pas de correcteur
					echo '<a id="petiKorektanton_button" class="waves-effect waves-light btn tooltipped light-blue darken-1 '.$classeDejaFait.'" data-kurso="'.$kurso.'" data-leciono="'.$leciono.'" data-lecionero_id="'.$lecionero_id.'" data-position="top" data-delay="50" data-tooltip="Mes exercices lui seront envoyés">Demander un correcteur</a>';
				}
			} else { // on indique que la leçon est terminée
				echo '<a id="finiLecioneron_button" class="waves-effect waves-light btn tooltipped light-blue darken-1 '.$classeDejaFait.'" data-kurso="'.$kurso.'" data-leciono="'.$leciono.'" data-lecionero_id="'.$lecionero_id.'" data-position="top" data-delay="50" data-tooltip="j\'ai fini d\'étudier cette section">Terminé !</a>';
			}
		}
	}
}


function QCM_bildoj($qcm) {
	echo "<div class='qcm' id='carousel_qcm'>";
	$indiceQuestion= 1;
	foreach ($qcm as $question) {
		if ($indiceQuestion==1) {
			echo "<div class='qcm_demando row'>";
		} else {
			echo "<div class='qcm_demando row hide'>";
		}
		echo "<h3>Question ".$indiceQuestion."/".count($qcm)." :</h3>";
		echo "<p class='col s12 m6 l5'>";
		echo "<img src='".$question["bildo"]."' class='responsive-img'><br>";
		echo "<legend>photo : <a href='".$question["url"]."'>".$question["auteur"]."</a></legend>";
		echo "</p>";
		echo "<p class='col s12 m6 l7'>";
		echo "</p>";
		$indiceProposition= 1;
		foreach ($question["propositions"] as $proposition) {
			if ($indiceProposition==$question["reponse"]) {
				$style = "qcm_ok";
			} else {
				$style = "qcm_nok";
			}
			if ($indiceQuestion==count($qcm)) {
				$lasta = "data-lasta='true'";
			} else {
				$lasta = "";
			}
			echo "<input type='radio' name='qcm".$indiceQuestion."' value='".$indiceProposition."' id='00".$indiceQuestion."-0".$indiceProposition."' class='".$style."' ".$lasta."/><label for='00".$indiceQuestion."-0".$indiceProposition."'>".$proposition."</label><br>";
			$indiceProposition++;
		}
		echo "</div>\n";
		$indiceQuestion++;
	}
	echo "</div>";
	// on affiche un récapitulatif :
	echo "<div class='row hide' id='recapitulatif_qcm'>";
	echo "<div class='col s12'>";
	echo "<div class='card-panel blue lighten-5'>";
	echo "<h3>Récapitulatif :</h3>";
	$indiceQuestion= 1;
	echo "<ul class='collection'>";
	foreach ($qcm as $question) {
		//echo "<li>".$question["propositions"][$question["reponse"]]."</li>";
		echo "<li class='collection-item row'>";
		echo "<span class='col s4 l2'><img src='".$question["bildo"]."' class='responsive-img'></span><span class='col s8 l10'>".$indiceQuestion.". ".$question["propositions"][$question["reponse"]-1]."</span></li>";
		$indiceQuestion++;
	}
	echo "</div>";
	echo "</div>";
	echo "</div>\n";
}

function QCM($qcm) {
	echo "<div class='qcm' id='carousel_qcm'>";
	$indiceQuestion= 1;
	foreach ($qcm as $question) {
		if ($indiceQuestion==1) {
			echo "<div class='qcm_demando row'>";
		} else {
			echo "<div class='qcm_demando row hide'>";
		}
		echo "<h3>Question ".$indiceQuestion."/".count($qcm)." :</h3>";
		echo "<p>".$question["question"]."</p>";
		$indiceProposition= 1;
		foreach ($question["propositions"] as $proposition) {
			if ($indiceProposition==$question["reponse"]) {
				$style = "qcm_ok";
			} else {
				$style = "qcm_nok";
			}
			if ($indiceQuestion==count($qcm)) {
				$lasta = "data-lasta='true'";
			} else {
				$lasta = "";
			}
			echo "<input type='radio' name='qcm".$indiceQuestion."' value='".$indiceProposition."' id='00".$indiceQuestion."-0".$indiceProposition."' class='".$style."' ".$lasta."/><label for='00".$indiceQuestion."-0".$indiceProposition."'>".$proposition."</label><br>";
			$indiceProposition++;
		}
		echo "</div>\n";
		$indiceQuestion++;
	}
	echo "</div>";
	// on affiche un récapitulatif :
	echo "<div class='row hide' id='recapitulatif_qcm'>";
	echo "<div class='col s12'>";
	echo "<div class='card-panel blue lighten-5'>";
	echo "<h3>Récapitulatif :</h3>";
	$indiceQuestion= 1;
	echo "<ul class='collection'>";
	foreach ($qcm as $question) {
		//echo "<li>".$question["propositions"][$question["reponse"]]."</li>";
		echo "<li class='collection-item row'>";
		echo "<span class='col s12'><b>".$indiceQuestion.". ".$question["question"]."</b></span><span class='col s12'>".$question["propositions"][$question["reponse"]-1]."</span></li>";
		$indiceQuestion++;
	}
	echo "</div>";
	echo "</div>";
	echo "</div>\n";
}

function questionQCM($numero,$question,$propositions,$eraroj,$memorkurso) {
					echo "<p id=\"demando_".$numero."\">";
					//echo "<input type=\"hidden\" name=\"900 dmd ".$numero."\" value=\"".$question."\">\n";
					//echo "<input type=\"hidden\" name=\"900 resp ".$numero."\" value=\"".join("/",$propositions)."\">\n";
					if (in_array($numero,$eraroj)) {
						echo "<span class=\"qcmerr\">";
					}
					echo $numero.". ".$question;
					if (in_array($numero,$eraroj)) {
						echo "</span>";
					}
					echo "</p>\n";
					echo "<p>";
					// sans réponse :
					echo "<input style=\"display:none;\" type=\"radio\" name=\"900 ".$numero."\"";
					if ((isset($memorkurso["900_".$numero])) && ($memorkurso["900_".$numero]=="")) {
						echo "checked";
					}
					echo ">";
					$i = 1;
					foreach ($propositions as $proposition ) {
						if ($proposition=="(pas de réponse)") {
							$i++;
							continue;
						}
						echo "<input type=\"radio\" name=\"900 ".$numero."\" value=\"".$i."\" id=\"900 ".$numero.$i."\" ";
				
						if ((isset($memorkurso["900_".$numero])) && ($memorkurso["900_".$numero]==strval($i))) {
							echo "checked";
						}
						echo "> ";
						if (in_array($numero,$eraroj) && (isset($memorkurso["900_".$numero])) && ($memorkurso["900_".$numero]==strval($i))) {
							echo "<span class=\"qcmerr\">";
						}
						echo "<label for=\"900 ".$numero.$i."\">".$proposition."</label>";
						if (in_array($numero,$eraroj) && (isset($memorkurso["900_".$numero])) && ($memorkurso["900_".$numero]==strval($i))) {
							echo "</span>";
						}
						echo "<br/>";
						$i++;
					}
					echo "</p>\n";
				
				}

function recapitulatif_lecon_avant_envoi($kurso,$leciono,$persono_id) {
	// on n'affiche le récapitulatif que pour un élève connecté
	echo "<div class='row' id='recapitulatif_qcm'>";
	echo "<div class='col s12'>";
	echo "<div class='card-panel blue lighten-5'>";
	if ($persono_id) {
		$persono = apartigiPersonon($persono_id);
		if (($persono['rajtoj']=="S")||($persono['rajtoj']=="P")) {
			global $bdd;
			echo "<h3>Récapitulatif :</h3>";
			echo "Voilà ce qui sera envoyé à votre correcteur. Si vous souhaitez modifier des réponses, vous pouvez faire les modifications directement dans les pages d'exercices, enregistrer vos réponses puis revenir sur cette page.";
			$indiceQuestion= 1;
			
			// on récupère les réponses en base
			$query = "select demando,respondo from respondoj join lecioneroj on lecioneroj.id=respondoj.lecionero_id join lecionoj on lecioneroj.leciono_id=lecionoj.id where persono_id=".$persono_id." and numero=".$leciono." and kurso='".$kurso."' order by kodo";
			$result = $bdd->query($query);
			echo "<ul class='collection'>";
			while ($row=$result->fetch()) {
				echo "<li class='collection-item row'>";
				echo "<b>".$row["demando"]."</b><br/>";
				echo "&nbsp;&nbsp;&nbsp;".$row["respondo"]."<br/>";
				echo "</li>";
			}
			echo "</ul>";
			// ajout d'un champ commentaire :
			echo "<ul class='collection'>";
				echo "<li class='collection-item row'>";
				echo "Si vous souhaitez ajouter un message à l'intention de votre correcteur, vous pouvez écrire dans le cadre ci-dessous :";
				echo "<textarea name='commentaire_pour_correcteur'></textarea>";
				echo "</li>";
			echo "</ul>";
		} else {
			echo "L’envoi des exercices est réservé aux élèves inscrits au cours.";		
		}
	}
	// si pas connecté on affiche une information
	else {
		echo "L’envoi des exercices est réservé aux élèves inscrits au cours. Si vous êtes déjà inscrit, veuillez vous identifier en cliquant sur le bouton CONNEXION en haut à droite de l’écran.";		
	}
	echo "</div>";
	echo "</div>";
	echo "</div>\n";
}

function getListoLecionoj($kurso,$leciono) {
	global $bdd;
	echo "<header id='superrigardo'>";
	if ($kurso=='CG') {		
		echo "<p>Cours d'espéranto en dix leçons :</p>";
	}
	elseif ($kurso=="GR") {
		echo "<p>Gerda malaperis :</p>";
	}
	echo "<ul id='lecionoj'>";
	if ($leciono==0) {
		if ($kurso=='CG') {
			echo "<li id='intro' class='nuna'><a href='intro.php'>introduction</a></li>";
		} elseif ($kurso=="GR") {
			echo "<li id='intro' class='nuna'><a href='index.php'>enkonduko</a></li>";
		}
	}
	else {
		if ($kurso=='CG') {
			echo "<li id='intro' class='farita'><a href='intro.php'>introduction</a></li>";
		} elseif ($kurso=="GR") {
			echo "<li id='intro' class='farita'><a href='index.php'>enkonduko</a></li>";
			}
	}
	$query = "select * from lecionoj where kurso='".$kurso."' order by numero";
	$res = $bdd->query($query);
	while ($row = $res->fetch()) {
		// leçon en cours :
		if ($leciono==$row["numero"]) {
			$classe = 'nuna';
		} 
		// leçon déjà faite :
		if ($leciono>$row["numero"]) {
			$classe = 'farita';
		}
		// leçon par encore faite 
		if ($leciono<$row["numero"]) {
			$classe = 'nova';
		}
		echo "<li id='lec".sprintf('%02d',$row["numero"])."' class='".$classe."'><a href='".$row["retpagxo"]."'>".$row["numero"]."</a></li>";
	}
	if ($kurso=='GR') {
		if ($leciono==90) {
			echo "<li id='konsiloj' class='nuna'><a href='konsiloj.php'>konsiloj</a></li>";
		} else {
			echo "<li id='konsiloj' class='nova'><a href='konsiloj.php'>konsiloj</a></li>";
		}
	}
	if ($kurso=='CG') {
		if ($leciono==98) {
			echo "<li id='konsiloj' class='nuna'><a href='temaro.php'>index</a></li>";
		} else {
			echo "<li id='konsiloj' class='nova'><a href='temaro.php'>index</a></li>";
		}
	}
	
	if ($leciono==99) {
		if ($kurso=='GR') {
			echo "<li id='lexique' class='nuna'><a href='vocabula.php'>vortlisto</a></li>";
		} else {
			echo "<li id='lexique' class='nuna'><a href='vocabula.php'>lexique</a></li>";
		}
	} else {
		if ($kurso=='GR') {
			echo "<li id='lexique' class='nova'><a href='vocabula.php'>vortlisto</a></li>";
		} else {
			echo "<li id='lexique' class='nova'><a href='vocabula.php'>lexique</a></li>";
		}
	}
	echo "</div>";
	echo "</header>";
	
}

function ekzercoMemkorektita($convert,$strukturo) {
	echo "<div class='qcm' id='carousel_qcm'>";
	$indiceQuestion= 1;
	foreach ($strukturo as $question) {
		if ($indiceQuestion==1) {
			echo "<div class='qcm_demando row'>";
		} else {
			echo "<div class='qcm_demando row hide'>";
		}
		echo "<h3>Question ".$indiceQuestion."/".count($strukturo)." :</h3>";
		echo "<div class='input-field col s6 l4'>".$question["question"];
		$indiceProposition= 1;
		// on verifie si c'est la derniere question
		if ($indiceQuestion==count($strukturo)) {
			$lasta = "data-lasta='true'";
		} else {
			$lasta = "";
		}
		echo "&nbsp;<input type='text' name='qcm".$indiceQuestion."' class='input-field validate' id='00".$indiceQuestion."' ".$lasta." data-reponse='".$question["reponse"]."'/>";
		echo '<a id="kontroliRespondon_button_00'.$indiceQuestion.'" data-id="00'.$indiceQuestion.'" class="kontroliRespondon_button  waves-effect waves-light btn tooltipped light-blue darken-1" data-position="top" data-delay="50" data-tooltip="kontrolu mian respondon">Kontrolu !</a>';
		echo "</div>";
		echo "</div>\n";
		$indiceQuestion++;
	}
	echo "</div>";
	// on affiche un récapitulatif :
	echo "<div class='row hide' id='recapitulatif_qcm'>";
	echo "<div class='col s12'>";
	echo "<div class='card-panel blue lighten-5'>";
	echo "<h3>Récapitulatif :</h3>";
	$indiceQuestion= 1;
	echo "<ul class='collection'>";
	foreach ($strukturo as $question) {
		echo "<li class='collection-item row'>";
		echo "<span class='col s12'><b>".$indiceQuestion.". ".$question["question"]."</b></span><span class='col s12'>".$question["reponse"]."</span></li>";
		$indiceQuestion++;
	}
	echo "</div>";
	echo "</div>";
	echo "</div>\n";
}

function menuDeroulantChoixProposition($kodo,$lecionero_id,$persono_id) {
	global $bdd;
	$query = "SELECT persono_id,enirnomo FROM `respondoj` join personoj on personoj.id=respondoj.persono_id WHERE kodo='".$kodo."' and lecionero_id=".$lecionero_id." and persono_id<>'".$persono_id."' order by dato";
	echo "<br/>";
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$i=1;
	echo "<select name='ElektitaRespondo'>";
	echo "<option>Elektu nomon de lernanto :";
	while ($row = $result->fetch()) {
		echo "<option value='".$row["persono_id"]."'>".$i.") ".$row["enirnomo"]."</option>";
	}
	echo "</select>";
	echo "<a id='montriElektitanRespondon_button' class='waves-effect waves-light btn tooltipped light-blue darken-1' data-position='top' data-delay='50'>Montri Proponon de tiu lernanto</a>";
}


function kiomVortojPorMemori($persono_id) {
	global $bdd;
	// on compte pour savoir si on a 10 cartes ou moins
	$query= "SELECT count(*) as combien FROM `personoj_vortoj` WHERE persono_id=".$persono_id." and venontaFojo<=NOW()";
	$combien = $bdd->query($query)->fetch()["combien"];
	return $combien;
}

// fonction pour afficher les cartes dans l'outil "memrise-like"
function kreiKartojnPorMemoriVortojn($persono_id) {
	global $bdd;
	$combien = kiomVortojPorMemori($persono_id);
	$query= "SELECT vortoj.id,eo,fr,tipo FROM `personoj_vortoj` join vortoj on personoj_vortoj.vorto_id=vortoj.id WHERE persono_id=".$persono_id." and venontaFojo<=NOW() order by RAND()";
	$res = $bdd->query($query);
	$indice = 1;
	echo "<div class='memorilo' id='carousel_qcm'>";
	while ($row = $res->fetch()) {
		//echo $row["id"].":".$row["eo"].":".$row["fr"].":".$row["tipo"]."<br/>";
		if ($indice!=1) {
			$style = "hide";
		} else {
			$style = "";
		}
		echo "<div class='memorilo_demando row ".$style."'>";
		echo "<p>Encore ".(1+$combien-$indice)." mot";
		if ($combien-$indice > 0) echo "s";
		echo " à réviser...</p>";
		echo "<h3>&nbsp;".$row["fr"]."&nbsp;<div class='chip'>".$row["tipo"]."</div></h3>";
		echo "<input type='text' onkeyup='xAlUtf8(this)' class='memorilo_input' name='memorilo".$indice."' value='' id='memorilo".$indice."' data-vorto_id='".$row["id"]."' data-persono_id='".$persono_id."'/>";
		echo "<a class='memorilo_button waves-effect waves-light btn' data-vorto_id='".$row["id"]."' data-persono_id='".$persono_id."' data-input='memorilo".$indice."'>vérifier</a>";
		echo "</div>";
		$indice++;
	}
	echo "</div>";
}

function getLigiloAlMemorilo($persono_id) {
	global $bdd,$vojo;
	$combien = kiomVortojPorMemori($persono_id);
	if ($combien>0) {
		echo "<p><a href='".$vojo."memoriVortojn.php' class='waves-effect waves-light btn tooltipped light-blue darken-1 '>".$combien." mot";
		if ($combien > 1) echo "s";
		echo " à réviser...</a></p>";
	}
}
?>