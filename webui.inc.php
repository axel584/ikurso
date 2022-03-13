<?php
// 
function pagxkapo() {
}


function kursoligo($nomo,$rajto){
}

function displayWarningSiLecioneroManquante($persono_id,$kurso,$leciono,$lecionero) {
	global $bdd;
	if ($persono_id==null) {
		return;
	}
	$query = "SELECT distinct lecioneroj.id,ordo,lecioneroj.titolo,lecioneroj.tipo,lecionoj.retpagxo,personoj_lecioneroj.persono_id,lecioneroj.dauxro  FROM lecioneroj JOIN lecionoj on lecioneroj.leciono_id=lecionoj.id LEFT JOIN personoj_lecioneroj on personoj_lecioneroj.lecionero_id=lecioneroj.id and personoj_lecioneroj.persono_id=".$persono_id." WHERE lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' and ordo<".$lecionero." order by ordo";
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$enTete = false; 
	$nbLecioneroManquante = 0;
	while ($row = $result->fetch()) {
		if ($row["persono_id"]==null) {
			if (!$enTete) {
				echo '<div class="card red  lighten-4"><div class="card-content"><span class="card-title"><i class="material-icons">warning</i> Attention, vous n\'avez pas terminé certaines sections précédentes.</span>';
				$enTete=true;
			}
			echo '<li><a href="'.$row['retpagxo'].'?section='.$row['ordo'].'">'.$row["titolo"]."</a></li>";	
			$nbLecioneroManquante++;
		} 
	}
	// si on a affiché des sections qui n'ont pas été barré, on ferme le rectangle de warning
	if ($nbLecioneroManquante>0) {
		echo "Afin de mieux suivre votre progression, n'oubliez pas de cliquer sur le bouton TERMINÉ en bas de chaque page.";
		echo '</div></div>';
	}
}

function displayLecionoEnhavo($kurso,$leciono,$lecionero) {
	global $bdd;
	$query = "SELECT enhavo  FROM lecioneroj JOIN lecionoj on lecioneroj.leciono_id=lecionoj.id WHERE lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' and ordo=".$lecionero;
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$row = $result->fetch();
	echo $row["enhavo"];

}

function getTitoloLecionero($kurso,$leciono,$lecionero) {
	global $bdd;
	$query = "SELECT lecioneroj.titolo,lecioneroj.dauxro FROM lecioneroj,lecionoj WHERE lecioneroj.leciono_id=lecionoj.id and lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' and lecioneroj.ordo=".$lecionero;
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$row = $result->fetch();
	$titolo = $row['titolo'];
	$dauxro = $row['dauxro'];

	
	echo '<div class="impression right"><a href="javascript:window.print()" class="waves-effect waves-light btn-floating small blue"><i class="material-icons">print</i></a></div>';

	echo '<h2 id="lec'.$leciono.'.'.$lecionero.'">'.$leciono.'.'.$lecionero.'. '.$titolo.'</h2>';
	if ($dauxro!=null) {
		echo '<p class="dauro">Temps moyen estimé : '.$dauxro.' minutes</p>';
	}
}

function getTipoLecionero($kurso,$leciono,$lecionero) {
	global $bdd;
	$query = "SELECT lecioneroj.titolo FROM lecioneroj,lecionoj WHERE lecioneroj.leciono_id=lecionoj.id and lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' and lecioneroj.ordo=".$lecionero;
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$tipo = $result->fetch()['tipo'];
	return($tipo);
}

function getEnhavtabelo($kurso,$leciono,$chemin='') {
	global $bdd,$persono_id;
	if ($persono_id=="") { // Pas connecté : on récupère le sommaire normal
			$query = "SELECT lecioneroj.id,ordo,lecioneroj.titolo,lecioneroj.tipo,lecionoj.retpagxo,'' as persono_id,lecioneroj.dauxro,lecionoj.id as leciono_id FROM lecioneroj,lecionoj WHERE lecioneroj.leciono_id=lecionoj.id and lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' order by ordo";
	} else { // connecté, on récupère la liste des leçons effectuées
		$query = "SELECT distinct lecioneroj.id,ordo,lecioneroj.titolo,lecioneroj.tipo,lecionoj.retpagxo,personoj_lecioneroj.persono_id,lecioneroj.dauxro,lecionoj.id as leciono_id  FROM lecioneroj JOIN lecionoj on lecioneroj.leciono_id=lecionoj.id LEFT JOIN personoj_lecioneroj on personoj_lecioneroj.lecionero_id=lecioneroj.id and personoj_lecioneroj.persono_id=".$persono_id." WHERE lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."'  order by ordo";
	}
	echo '<li class="active">';
	echo '<div class="collapsible-header"><i class="material-icons">toc</i>Sommaire de la leçon</div>';
	echo '<div class="collapsible-body">';
	echo '<ul id="enhavtabelo" class="collection">';
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$max_ordo = 0;
	$leciono_id = 0;
	while ($row = $result->fetch()) {
		$max_ordo = $row['ordo'];
		$leciono_id = $row["leciono_id"];
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

		if ($row["dauxro"]!=null) {
			$dauxro = '<span class="dauro">('.$row["dauxro"].'&nbsp;min)</span>';
		} else {
			$dauxro = '';
		}
		echo '<li id="'.$leciono.'-'.$row['ordo'].'" class="gramm '.$farita.' '.$tipoLecionero.'"><a href="'.$chemin.$row['retpagxo'].'?section='.$row['ordo'].'">'.$leciono.'.'.$row['ordo'].' '.$row['titolo'].' '.$dauxro.'</a></li>';
	}
	// on teste s'il existe une leçon corrigée
	if ($persono_id) {
		$max_ordo = $max_ordo +1;
		$result = $bdd->query("select numero,kurso  from personoj_lecionoj join lecionoj on lecionoj.id=personoj_lecionoj.leciono_id where korektita = 1 and persono_id='".$persono_id."' and leciono_id='".$leciono_id."'") or die(print_r($bdd->errorInfo()));
		while ($row = $result->fetch()) {
			if ($chemin=='') { // si on a indiqué un chemin pour afficher le sommaire, c'est qu'on l'affiche depuis la page vidiLecionon
				echo "<li class='korektado'><a href='../../vidiLecionon.php?kurso=".$row['kurso']."&numleciono=".$row['numero']."'>".$row['numero'].".".$max_ordo." Correction de la leçon</a></li>";
			} else {
				echo "<li class='korektado'><a href='vidiLecionon.php?kurso=".$row['kurso']."&numleciono=".$row['numero']."'>".$row['numero'].".".$max_ordo." Correction de la leçon</a></li>";
			}
		}
	}
	echo '</ul>';
	echo '</div>';
	echo '</li>';
								
}

function getLecionoEnhavo($kurso,$leciono) {
	global $bdd;
	$query = "SELECT lecioneroj.id,ordo,lecioneroj.titolo,lecioneroj.tipo,lecionoj.retpagxo,'' as persono_id FROM lecioneroj,lecionoj WHERE lecioneroj.leciono_id=lecionoj.id and lecionoj.numero=".$leciono." and lecionoj.kurso='".$kurso."' order by ordo";

	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	while ($row = $result->fetch()) {
		echo '<li id="'.$leciono.'-'.$row['ordo'].' '.$tipoLecionero.'"><a href="'.$row['retpagxo'].'?section='.$row['ordo'].'">'.$leciono.'.'.$row['ordo'].' '.$row['titolo'].'</a></li>';
	}
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
				echo '<a id="finiLecioneron_button" class="hide waves-effect waves-light btn tooltipped light-blue darken-1 '.$classeDejaFait.'" data-kurso="'.$kurso.'" data-leciono="'.$leciono.'" data-lecionero_id="'.$lecionero_id.'" data-ekdato="'.time().'" data-position="top" data-delay="50" data-tooltip="j\'ai fini d\'étudier cette section">Terminé !</a>';
			} elseif($tipo=="EKZERCARO") { // on memorise (même si on a déjà mémorisé)
				echo '<a id="registriEkzercaron_button" class="waves-effect waves-light btn tooltipped light-blue darken-1 '.$classeDejaFait.'" data-kurso="'.$kurso.'" data-leciono="'.$leciono.'" data-lecionero_id="'.$lecionero_id.'" data-ekdato="'.time().'" data-position="top" data-delay="50" data-tooltip="elles seront envoyées à mon correcteur à la fin de la leçon">Enregistrer mes réponses !</a>';
			} elseif($lasta==1) { // on envoit au correcteur si on a un correcteur, on en demande un dans le cas contraire
				if ($dejaFait>0) {
					echo '<a id="sendiLecionon_button" class="waves-effect waves-light btn tooltipped light-blue darken-1 '.$classeDejaFait.'" data-kurso="'.$kurso.'" data-leciono="'.$leciono.'" data-lecionero_id="'.$lecionero_id.'" data-ekdato="'.time().'" data-position="top" data-delay="50" data-tooltip="j\'ai fini d\'étudier cette section">Envoyer à mon correcteur !</a>';
				} else { // Pas de correcteur
					echo '<a id="petiKorektanton_button" class="waves-effect waves-light btn tooltipped light-blue darken-1 '.$classeDejaFait.'" data-kurso="'.$kurso.'" data-leciono="'.$leciono.'" data-lecionero_id="'.$lecionero_id.'" data-ekdato="'.time().'" data-position="top" data-delay="50" data-tooltip="Mes exercices lui seront envoyés">Demander un correcteur</a>';
				}
			} else { // on indique que la leçon est terminée
				echo '<a id="finiLecioneron_button" class="waves-effect waves-light btn tooltipped light-blue darken-1 '.$classeDejaFait.'" data-kurso="'.$kurso.'" data-leciono="'.$leciono.'" data-lecionero_id="'.$lecionero_id.'" data-ekdato="'.time().'" data-position="top" data-delay="50" data-tooltip="j\'ai fini d\'étudier cette section">Terminé !</a>';
			}
		}
	}
}



function getEkzercon($id,$persono_id,$lingvo="fr") {
	global $bdd;
		if ($persono_id=="") {
		$idenfication=False;
	} else {
		$idenfication =True;
	}
	$queryEkzerco = "SELECT komando,komando_detalo,ekzemplo,typo,x2u,korektebla FROM `ekzercoj` where id=".$id;
	$resultEkzerco = $bdd->query($queryEkzerco) or die(print_r($bdd->errorInfo()));
	$rowEkzerco = $resultEkzerco->fetch();
	echo "<fieldset class='ekzerco'>";
	echo "<legend><strong>";
	if ($lingvo=="fr") {
		echo "EXERCICE";
	} else if ($lingvo=="eo"){
		echo "EKZERCO";
	}
	echo "</strong> : ".$rowEkzerco["komando"]."</legend>";
	if ($rowEkzerco["komando_detalo"]!="") {
		echo "<p>".$rowEkzerco["komando_detalo"]."</p>";
	}
	if ($rowEkzerco["x2u"]==1) {
		if ($lingvo=="fr") {
			echo "<p class='eo eta'>Pour obtenir une lettre accentuée, il suffit de taper la lettre suivie d’un <b>x</b>&nbsp;:&nbsp;";
			echo "en tapant <b>cx</b>, <b>sx</b>, <b>ux</b>... vous obtiendrez <b>ĉ</b>, <b>ŝ</b>, <b>ŭ</b>...</p>\n";
		} else if ($lingvo=="eo"){
			echo "<p class='eo eta'>Por la ĉapelitaj literoj, sufiĉas tajpi la literon kaj <b>x</b>&nbsp;:&nbsp;";
			echo "tajpante : <b>cx</b>, <b>sx</b>, <b>ux</b>... surekraniĝos : <b>ĉ</b>, <b>ŝ</b>, <b>ŭ</b>...</p>\n";
		}
	}
	if ($rowEkzerco["korektebla"]==1) {
		if ($lingvo=="fr") {
			echo "<p class='eo eta'>Plusieurs réponses sont possibles. Si vous indiquez l'une des bonnes réponses, elle sera automatiquement soulignée en vert.<br/>Si la réponse n'est pas soulignée, cela ne veut pas dire qu'elle soit incorrecte, mais simplement que le système n'a pas pu l'analyser. Votre correcteur vous donnera des explications sur les réponses que vous aurez données.</p>\n";
		}else if ($lingvo=="eo"){
			echo "<p class='eo eta'>Pluraj respondoj ĝustas. Se vi respondu unu el tiuj ĝustaj respondoj, ĝi aŭtomate verdiĝos.<br/>Se via respondo ne verdiĝus, tio ne signifas ke vi eraris sed nur ke la sistemo ne scias ĉu via respondo estas ĝusta aŭ ne. Tiam, via korektanto povos taksi vian respondon kaj klarigi al vi.</p>\n";
		}
		$styleKorektebla=" korektebla";
	} else {
		if ($lingvo=="fr") {
			echo "<p class='eo eta'>Cet exercice ne peut pas être corrigé automatiquement. Votre correcteur vous donnera des explications sur les réponses que vous aurez données.</p>\n";
		}else if ($lingvo=="eo"){
			echo "<p class='eo eta'>Tiu ekzerco ne aŭtomate korekteblas. Via korektanto klarigos al vi ĉu viaj respondoj ĝustas aŭ ne.</p>\n";
		}
		$styleKorektebla=" nekorektebla";
	}
	if ($rowEkzerco["ekzemplo"]!="") {
			echo "<div class='ekzemplo row'>";
			echo "<p><em>Exemples :</em></p>";
			echo $rowEkzerco["ekzemplo"];
			echo "</div>";
	}

	echo "<div class='tasko'>";
	echo "<div class='row'>";
	$queryEkzercero = "SELECT id,numero,demando,respondmodelo,korektebla,bildo,poentoj FROM `ekzerceroj` where ekzerco_id=".$id." and forigita=0 order by numero";
	$resultEkzercero = $bdd->query($queryEkzercero) or die(print_r($bdd->errorInfo()));
	while ($rowEkzercero = $resultEkzercero->fetch()) {
		$iconprefix="";
		$respondo = $rowEkzercero["respondmodelo"];
		$valid="";
		$rowRespondo=null;
		$warningNonConnecte = ($idenfication==False)?" READONLY onClick='window.alert(\"Identifiez-vous en haut à droite pour pouvoir remplir les exercices\");'":"";
		if ($idenfication) {
			// afficher ici le contenu de la base pour cet élève
			$queryRespondo = "select id,respondo,korekto,gxusta from respondoj where ekzercero_id=".$rowEkzercero["id"]." and persono_id=".$persono_id;
			$resultRespondo = $bdd->query($queryRespondo) or die(print_r($bdd->errorInfo()));
			$rowRespondo = $resultRespondo->fetch();
			if ($rowRespondo["respondo"]!=null) {
				$respondo= $rowRespondo["respondo"];
			}
			if ($rowRespondo["gxusta"]==1) {
				$valid="valid";
				$iconprefix="<i class=\"material-icons prefix\" style=\"color:green\">check</i>";
			} 
		}
		// Cas des QCM
		$demando = $rowEkzercero["demando"];
		$liste_choix = array();
		if (strrpos($demando,"<qcm>")) {
			$debut = strrpos($demando,"<qcm>");	
			$fin = strrpos($demando,"</qcm>");
			$chaine_choix = substr($demando, $debut,$fin-$debut);
			$liste_choix = explode("/",$chaine_choix);
			$demando = substr($demando,0,$debut); // retire ce qu'il y a à droite des balises <qcm>
		}
		echo "<p class='col s12 demando'>".$rowEkzercero["numero"].". ".$demando;
		if ($rowEkzercero["poentoj"]) {
			if ($rowEkzercero["poentoj"]==1) { // singulier
				echo "<span class='badge'>1 poento</span>";
			} else { // pluriel
				echo "<span class='badge'>".$rowEkzercero["poentoj"]." poentoj</span>";
			}
		}
		echo "</p>\n";
		// QCM
		if (count($liste_choix)>0) {
			foreach ($liste_choix as $choix){
				// TODO : ajouter une marge
				echo "<p>";
				echo "<label>";
	        	echo "<input data-studanto=".$persono_id." data-ekzercero=".$rowEkzercero["id"]." name='res_".$rowEkzercero["id"]."' type='radio' value='".$choix."' ";
	        	if ($choix==$respondo) {
	        		echo "checked";
	        	}
	        	echo "/>";
	        	echo "<span>".$choix."</span>";
	      		echo "</label>";
				echo "</p>";
			}
		} else { // Cas qui n'est pas un QCM 		
			// si on a une image :
			if ($rowEkzercero["bildo"]) {
				echo "<p class='col s12 center-align'><img class='responsive-img' src='".$rowEkzercero["bildo"]."'></p>";
			}
			echo "<input type='hidden' name=\"dem_".$rowEkzercero["id"]."\" value=\"\">";

			if (($rowEkzerco["typo"]=="traduko-2")||($rowEkzerco["typo"]=="verkado-2")||($rowEkzerco["typo"]=="stelo-2")) { // cas des types d'exercices textarea
				echo "<div class='input-field col s12'>";
				echo $iconprefix; // on affiche une marque verte si la réponse est bonne
				echo "<textarea spellcheck=\"false\" rows='5' data-studanto=".$persono_id." data-ekzercero=".$rowEkzercero["id"]." id=\"res_".$rowEkzercero["id"]."\" name=\"res_".$rowEkzercero["id"]."\"".$warningNonConnecte;
				if ($rowEkzerco["x2u"]==1) {
					echo " onkeyup='xAlUtf8(this)'";
				}
				echo " class='materialize-textarea validate ".$valid." ".$styleKorektebla."'>";
				echo $respondo;
				echo "</textarea>";
				if ($rowRespondo['korekto']) {echo "<div class='card green lighten-4 card-content'>".$rowRespondo['korekto']."</div>";}
				echo "</div>";
			} else { // cas des types d'exercice sur des champs input
				echo "<div class='input-field col s12'>";
				echo $iconprefix; // on affiche une marque verte si la réponse est bonne
				echo "<input Autocomplete=\"off\" spellcheck=\"false\" data-studanto=".$persono_id." data-ekzercero=".$rowEkzercero["id"]." id=\"res_".$rowEkzercero["id"]."\" name=\"res_".$rowEkzercero["id"]."\"".$warningNonConnecte;
				if ($rowEkzerco["x2u"]==1) {
					echo " onkeyup='xAlUtf8(this)'";
				}
				echo " value=\"";
				echo $respondo;
				
				echo "\" class='validate ".$valid." ".$styleKorektebla."'";
				echo ">";
				if ($rowRespondo['korekto']) {echo "<div class='card green lighten-4 card-content'>".$rowRespondo['korekto']."</div>";}
				echo "</div>";
			}
		}
	}
	echo "</div>";
	echo "</div>";
	echo "</fieldset>";
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
			echo "<label for='00".$indiceQuestion."-0".$indiceProposition."'><input type='radio' name='qcm".$indiceQuestion."' value='".$indiceProposition."' id='00".$indiceQuestion."-0".$indiceProposition."' class='".$style."' ".$lasta."/><span>".$proposition."</span></label><br>";
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
			echo "<label for='00".$indiceQuestion."-0".$indiceProposition."'><input type='radio' name='qcm".$indiceQuestion."' value='".$indiceProposition."' id='00".$indiceQuestion."-0".$indiceProposition."' class='".$style."' ".$lasta."/><span>".$proposition."</span></label><br>";
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
			$query = "select ekzercoj.komando,ekzerceroj.demando,respondoj.respondo,respondoj.korekto,gxusta from respondoj  join ekzerceroj on ekzerceroj.id=respondoj.ekzercero_id join ekzercoj on ekzercoj.id=ekzerceroj.ekzerco_id join lecioneroj on lecioneroj.id=ekzercoj.lecionero_id  join lecionoj on lecioneroj.leciono_id=lecionoj.id  where persono_id=".$persono_id." and lecionoj.numero=".$leciono." and kurso='".$kurso."' order by ekzerceroj.numero";
			$result = $bdd->query($query);
			echo "<ul class='collection'>";
			$lastKomando = "";
			while ($row=$result->fetch()) {
				if ($row["komando"]!=$lastKomando) {
					$lastKomando=$row["komando"];
					echo "<h6>".$lastKomando."</h6>\n";
				}
				echo "<li class='collection-item row'>";
				echo "<b>".$row["demando"]."</b><br/>";
				if ($row["gxusta"]==1) {
					echo "<span class=\"gxusta\">".$row["respondo"]."</span><br/>";
				} else {
					echo "&nbsp;&nbsp;&nbsp;".$row["respondo"]."<br/>";
				}
				echo "</li>";
				if ($row["korekto"]) {
					echo "<li class='collection-item row green lighten-5'>";
					echo $row["korekto"];
					echo "</li>";
				}
			}
			echo "</ul>";
			// ajout d'un champ commentaire :
			echo "<ul class='collection'>";
				echo "<li class='collection-item row'>";
				echo "Si vous souhaitez ajouter un message à l’intention de votre correcteur, vous pouvez écrire dans le cadre ci-dessous&nbsp;:";
				echo "<textarea spellcheck=\"false\" name='commentaire_pour_correcteur' class='materialize-textarea'></textarea>";
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

function getListoLecionoj($kurso,$leciono,$chemin='') {
	global $bdd;
	echo "<header id='superrigardo'>";
	if ($kurso=='CG') {		
		echo "<p>Cours d'espéranto en dix leçons :</p>";
	}
	elseif ($kurso=="GR") {
		echo "<p>Gerda malaperis&nbsp;:</p>";
	}elseif ($kurso=="3N") {
		echo "<p>Tria nivela kurso&nbsp;:</p>";
	}elseif ($kurso=="PP") {
		echo "<p>Pa&#349;oj al plena posedo:</p>";
	}
	echo "<ul id='lecionoj'>";
	if ($leciono==0) {
		if ($kurso=='CG') {
			echo "<li id='intro' class='nuna'><a href='".$chemin."intro.php'>introduction</a></li>";
		} elseif ($kurso=="GR") {
			echo "<li id='intro' class='nuna'><a href='".$chemin."index.php'>enkonduko</a></li>";
		}elseif ($kurso=="PP") {
			echo "<li id='intro' class='nuna'><a href='".$chemin."antauxklarigo.php'>enkonduko</a></li>";
		}
	}
	else {
		if ($kurso=='CG') {
			echo "<li id='intro' class='farita'><a href='".$chemin."intro.php'>introduction</a></li>";
		} elseif ($kurso=="GR") {
			echo "<li id='intro' class='farita'><a href='".$chemin."index.php'>enkonduko</a></li>";
		}elseif ($kurso=="PP") {
			echo "<li id='intro' class='farita'><a href='".$chemin."antauxklarigo.php'>enkonduko</a></li>";
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
		$numero = $row["numero"];
		// examen A2 sur Gerda
		if ($kurso=='GR' and $numero=='26') {
			$numero='Ekzameno A2';
		}
		echo "<li id='lec".sprintf('%02d',$row["numero"])."' class='".$classe."'><a href='".$chemin.$row["retpagxo"]."'>".$numero."</a></li>";
	}
	if ($kurso=='GR') {
		if ($leciono==90) {
			echo "<li id='konsiloj' class='nuna'><a href='".$chemin."konsiloj.php'>konsiloj</a></li>";
		} else {
			echo "<li id='konsiloj' class='nova'><a href='".$chemin."konsiloj.php'>konsiloj</a></li>";
		}
	}
	if ($kurso=='CG') {
		if ($leciono==98) {
			echo "<li id='temaro' class='nuna'><a href='".$chemin."temaro.php'>index</a></li>";
		} else {
			echo "<li id='temaro' class='nova'><a href='".$chemin."temaro.php'>index</a></li>";
		}
	}
	
	if ($kurso=='GR') {
		if ($leciono==98) {
			echo "<li id='temaro' class='nuna'><a href='".$chemin."temaro.php'>indekso</a></li>";
		} else {
			echo "<li id='temaro' class='nova'><a href='".$chemin."temaro.php'>indekso</a></li>";
		}
	}
	if ($leciono==99) {
		if ($kurso=='GR') {
			echo "<li id='lexique' class='nuna'><a href='".$chemin."vocabula.php'>vortlisto</a></li>";
		} else {
			echo "<li id='lexique' class='nuna'><a href='".$chemin."vocabula.php'>lexique</a></li>";
		}
	} else {
		if ($kurso=='GR') {
			echo "<li id='lexique' class='nova'><a href='".$chemin."vocabula.php'>vortlisto</a></li>";
		} else if ($kurso=='CG') {
			echo "<li id='lexique' class='nova'><a href='".$chemin."vocabula.php'>lexique</a></li>";
		}
	}
	echo "</ul>";
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
		echo "<div class='input-field col s12 l12'>".$question["question"];
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
	if ($persono_id=="") {return;}
	// on compte pour savoir si on a 10 cartes ou moins
	$query= "SELECT count(*) as combien FROM `personoj_vortoj` WHERE persono_id=".$persono_id." and venontaFojo<=NOW()";
	$combien = $bdd->query($query)->fetch()["combien"];
	return $combien;
}

function kiomVortojPorMemoriMorgau($persono_id) {
	global $bdd;
	// on compte pour savoir si on a 10 cartes ou moins
	$query= "SELECT count(*) as combien FROM `personoj_vortoj` WHERE persono_id=".$persono_id." and venontaFojo<=ADDDATE(NOW(),1)";
	//echo $query;
	$combien = $bdd->query($query)->fetch()["combien"];
	return $combien;
}


// fonction "unitaire" pour l'outil en dessous de révision de vocabulaire
function kreiKartonPorMemoriVortojn($persono_id,$indice,$combien,$fr,$eo,$tipo,$vorto_id) {
			if ($indice!=1) {
				$style = "hide";
			} else {
				$style = "";
			}
			echo "<div class='memorilo_demando row ".$style."'>";
			echo "<p>Encore ".(1+$combien-$indice)." mot";
			if ($combien-$indice > 0) echo "s";
			echo " à réviser...</p>";
			echo "<p class='eo eta'>Pour obtenir une lettre accentuée, il suffit de taper la lettre suivie d’un <b>x</b>&nbsp;:&nbsp;";
			echo "en tapant <b>cx</b>, <b>sx</b>, <b>ux</b>... vous obtiendrez <b>ĉ</b>, <b>ŝ</b>, <b>ŭ</b>...</p>\n";
			echo "<div class='col s12'>";
			echo "<div class='card-panel white'>";
			echo "<h3>&nbsp;".$fr."&nbsp;<div class='chip'>".$tipo."</div></h3>";
			echo "<input type='text' onkeyup='xAlUtf8(this)' autocomplete='off' class='memorilo_input' name='memorilo".$indice."' value='' id='memorilo".$indice."' data-vorto_id='".$vorto_id."' data-persono_id='".$persono_id."'/>";
			echo "<a class='memorilo_button waves-effect waves-light btn light-blue darken-1' data-vorto_id='".$vorto_id."' data-persono_id='".$persono_id."' data-input='memorilo".$indice."'>vérifier</a>";
			echo "</div></div></div>\n";
}

// fonction pour afficher les cartes dans l'outil "memrise-like"
function kreiKartojnPorMemoriVortojn($persono_id) {
	global $bdd;
	if ($persono_id=="") {return;}
	$combien = kiomVortojPorMemori($persono_id);
	if ($combien>0)
	{
		$query= "SELECT vortoj.id,eo,fr,tipo FROM `personoj_vortoj` join vortoj on personoj_vortoj.vorto_id=vortoj.id WHERE persono_id=".$persono_id." and venontaFojo<=NOW() order by RAND()";
		$res = $bdd->query($query);
		$indice = 1;		
		echo "<div class='memorilo' id='carousel_qcm'>";
		while ($row = $res->fetch()) {
			//echo $row["id"].":".$row["eo"].":".$row["fr"].":".$row["tipo"]."<br/>";
			kreiKartonPorMemoriVortojn($persono_id,$indice,$combien,$row["fr"],$row["eo"],$row["tipo"],$row["id"]);
			$indice++;
		}
		// message pour après la révision
		echo "<div class='memorilo_demando row hide' id='lasta_mesagho'>";
		echo "<h3>Bravo, vous avez terminé votre session</h3>";
		echo "<p>Des sessions de révisions courtes et fréquentes vous aideront à mieux mémoriser le vocabulaire.</p>";
		echo "<p>Pour votre cerveau, <b>souvent</b> est mieux que <b>longtemps</b>.</p>";
		echo "</div>\n";
		echo "</div>";
	} else {
		echo "<h3>Aucun mot à réviser pour le moment.</h3>";
		$combienDemain = kiomVortojPorMemoriMorgau($persono_id);
		if ($combienDemain>0) {
			echo "<p>Demain, vous aurez ".$combienDemain." mots a réviser.</p>";
			echo "<p>Des sessions de révisions courtes et fréquentes vous aideront à mieux mémoriser le vocabulaire.</p>";
			echo "<p>Pour votre cerveau, <b>souvent</b> est mieux que <b>longtemps</b>.</p>";
		}
		echo " Vous pouvez également avancer dans le cours pour découvrir plus de mots.";
	}
}

function getLigiloAlMemorilo($persono_id) {
	global $bdd,$vojo;
	if ($persono_id=="") {return;}
	$combien = kiomVortojPorMemori($persono_id);
	if ($combien>0) {
		echo "<p><a href='".$vojo."memoriVortojn.php' class='waves-effect waves-light btn light-blue darken-1 '>".$combien." mot";
		if ($combien > 1) echo "s";
		echo " à réviser...</a></p>";
	}
}

function pubFacebook() {
	echo '<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAssociation.Esperanto.France%2F&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="130" style="border:none;overflow:hidden"></iframe>';
}
function pubAndroid() {
	global $vojo;
	echo '<div class="card reklamo"><p>Vous pouvez retrouver iKurso sur Android.</p><p class="container"><a href="https://play.google.com/apps/testing/fr.esperanto_france.ikurso"><img  class="responsive-img" src="'.$vojo.'bildoj/google-play-badge.png"></a></p></div>';
}
function pubPPP() {
	global $vojo;
	echo '<div class="reklamo"><div class="row"><span class="col s7">Vi povas aĉeti la libron <i>Pa&#349;oj al plena posedo</i> en <a href="https://butiko-esperanto-france.org/methodes-et-manuels/65-pasoj-al-plena-posedo-nova-eld.html">nia butiko</a></span><span class="col s5"><a href="https://butiko-esperanto-france.org/methodes-et-manuels/65-pasoj-al-plena-posedo-nova-eld.html"><img class="responsive-img" src="'.$vojo.'bildoj/butiko/pasoj-al-plena-posedo-nova-eld.jpg" /></</span></div>';
}
function vortlisto($persono_id,$kurso,$pattern) {
	global $bdd;
	$query = "SELECT eo,fr,vortoj.tipo,lecionoj.numero,lecioneroj.ordo FROM vortoj join lecioneroj on vortoj.lecionero_id=lecioneroj.id join lecionoj on lecioneroj.leciono_id=lecionoj.id WHERE lecionoj.kurso='".$kurso."'";
	if ($pattern!="") {
		$query .= " and (eo like '".addslashes($pattern)."%' or fr like '".addslashes($pattern)."%') ";
	}
	$query .= " order by eo";
	$res = $bdd->query($query);
	echo "<div class='vortlisto' id='vortlisto'>";
	echo "<div class='lexique'>";
	$i=0;
	echo "<div class='row'>";
	while ($row = $res->fetch()) {	
		if (strpos($row['eo'],"|")!==false) {
			$VortoEo = substr($row['eo'], 0,strpos($row['eo'], "|"));
		} else {
			$VortoEo = $row['eo'];
		}
		echo "<p class='col s12 m6'><span class='eo'>".$VortoEo." ";
		echo "<span class='numero'> (".$row['numero'].".".$row['ordo'].")</span></span> : ".$row['fr']."</p>\n";
		$i++;
	}
	echo "</div></div></div>";
}


// administration

function listi_protokolo($nb_max_ligne,$debut = "",$fin = "",$persono = "",$type = "") {
	global $bdd;
        $demando = "select * from protokolo where 1=1";
        if ($debut!="") {
        	$demando .= " and horo>'".$debut."'";
        }
        if ($fin!="") {
        	$demando .= " and horo<='".$fin."'";
        }
        if ($persono!="") {
        	$demando .= " and persono_id='".$persono."'";
        }
        if ($type!="") {
        	$demando .= " and kategorio='".$type."'";
        }
        $demando .= " order by horo DESC ";
		$demando .= " limit ".$nb_max_ligne;
		$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
        echo "<table class='striped'>\n<thead>\n<tr>\n<td>Date</td>\n<td>Personne</td>\n<td>Type</td><td>Message</td>\n</tr>\n</thead>\n<tbody>";
        $i=0;
        while ($row=$result->fetch()) {
         $i++;
         echo "<tr>\n<td class='col1' nowrap>";
         echo $row["horo"]."</td>\n<td nowrap>";
         if ($row["persono_id"]!=0) {
         echo "<a href='administri.php?celpersono_id=".$row["persono_id"]."'>".$row["persono_id"]."</a></td>";
        } else {
        	echo "&nbsp;</td>";
        }
         echo "<td>".stripslashes($row['kategorio'])."</td>";
         echo "<td>".stripslashes($row['teksto'])."</td>";
         echo "</tr>";
         if ($i>$nb_max_ligne) break;
        }
        echo "</tbody></table>";
}

function listi_plejBonajKorektantoj() {
	global $bdd;
	$demando = "select * from personoj where (rajtoj='K' or rajtoj='A')";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	echo "<table class='striped'><thead><tr><th>Kiu ?</th>";
	echo "<th>Ont abandonné</th><th>A fini</th><th>% réussite</th></tr></thead><tbody>";
	while ($row=$result->fetch()) {
		$nomo_korektantoj[$row["id"]]=$row["enirnomo"];
		$demando2 = "select count(*) as sumo from nuna_kurso where korektanto=".$row["id"]." and stato='F'";
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		$row2=$result2->fetch();
		$listo_f[$row["id"]]=$row2["sumo"];

		$demando2 = "select count(*) as sumo from nuna_kurso where korektanto=".$row["id"]." and stato='H'";
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		$row2=$result2->fetch();
		$listo_h[$row["id"]]=$row2["sumo"];
        	if ($listo_h[$row["id"]]+$listo_f[$row["id"]]>0) { 
        		$listo_boneco[$row["id"]]=round($listo_f[$row["id"]]*100/($listo_h[$row["id"]]+$listo_f[$row["id"]]));
        	} else {
        		$listo_boneco[$row["id"]]=0;
        	}		
	}
	
	arsort($listo_boneco,SORT_NUMERIC);
	foreach ($listo_boneco as $id=>$valuo) {
		// n'affiche que les correcteurs qui ont au moins un élève abandonné ou un élève fini
		if (($listo_h[$id]!=0) || ($listo_f[$id]!=0)) {
			echo "<tr><td class='col1'>";
			echo "<a href=\"administri.php?celpersono_id=".$id."\">";
			echo $nomo_korektantoj[$id];
			echo "</a>";
			echo "</td>";
			echo "<td>".$listo_h[$id]."</td>";
			echo "<td>".$listo_f[$id]."</td>";
			echo "<td>".$valuo."%</td>";
			echo "</tr>"; 
		}
	}
	echo "</tbody></table>"; 
}

function listi_plejBonajKorektantojLauxMonato($mois,$annee) {
	global $bdd;
	$demando = "select * from personoj where (rajtoj='K' or rajtoj='A')";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	echo "<table class='striped'><thead><tr><th>Kiu ?</th>";
	echo "<th>A abandonné</th><th>A fini</th><th>% réussite</th></tr></thead><tbody>";
	while ($row=$result->fetch()) {
		$nomo_korektantoj[$row["id"]]=$row["enirnomo"];
		$demando2 = "select count(*) as sumo from nuna_kurso where korektanto=".$row["id"]." and stato='F' and findato like '".$annee."-".$mois."%'";
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		$row2=$result2->fetch();
		$listo_f[$row["id"]]=$row2["sumo"];

		$demando2 = "select count(*) as sumo from nuna_kurso where korektanto=".$row["id"]." and stato='H' and findato like '".$annee."-".$mois."%'";
		$result2 = $bdd->query($demando2) or die(print_r($bdd->errorInfo()));
		$row2=$result2->fetch();
		$listo_h[$row["id"]]=$row2["sumo"];
        	if ($listo_h[$row["id"]]+$listo_f[$row["id"]]>0) { 
        		$listo_boneco[$row["id"]]=round($listo_f[$row["id"]]*100/($listo_h[$row["id"]]+$listo_f[$row["id"]]));
        	} else {
        		$listo_boneco[$row["id"]]=0;
        	}		
	}
	
	arsort($listo_boneco,SORT_NUMERIC);
	foreach ($listo_boneco as $id=>$valuo) {
		// n'affiche que les correcteurs qui ont au moins un élève abandonné ou un élève fini
		if (($listo_h[$id]!=0) || ($listo_f[$id]!=0)) {
			echo "<tr><td class='col1'>";
			echo "<a href=\"administri.php?celpersono_id=".$id."\">";
			echo $nomo_korektantoj[$id];
			echo "</a>";
			echo "</td>";
			echo "<td>".$listo_h[$id]."</td>";
			echo "<td>".$listo_f[$id]."</td>";
			echo "<td>".$valuo."%</td>";
			echo "</tr>"; 
		}
	}
	echo "</tbody></table>"; 
}

function listi_korektantoj() {
	global $bdd;
	$demando = "select distinct retadreso from personoj,korektebla_kurso where (personoj.rajtoj='K' or personoj.rajtoj='A') and personoj.id = korektebla_kurso.korektanto and korektebla_kurso.kiom_lernantoj>0";
	$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
        echo "<textarea id='korektantoj' class='materialize-textarea'>";
        echo $result->fetch()["retadreso"];
        while ($row=$result->fetch()) {
          echo ", ".$row["retadreso"];
        }
        echo "</textarea>";
}

function listi_tableauHonneur($type,$persono_id) {
	global $bdd;
	if ($type=="semajno") {
		$query = "select personoj.id,enirnomo,sum(nombrilo) as total from personoj_vortoj join personoj on personoj.id=personoj_vortoj.persono_id where nombrilo>1 and week(lastfojo,7)=week(now(),7) and year(lastfojo)=year(now()) group by enirnomo order by total desc";
	}
	if ($type=="monato") {
		$query = "select personoj.id,enirnomo,sum(nombrilo) as total from personoj_vortoj join personoj on personoj.id=personoj_vortoj.persono_id where nombrilo>1 and month(lastfojo)=month(now()) and year(lastfojo)=year(now()) group by enirnomo order by total desc";
	}
	if ($type=="jaro") {
		$query = "select personoj.id,enirnomo,sum(nombrilo) as total from personoj_vortoj join personoj on personoj.id=personoj_vortoj.persono_id where nombrilo>1 and year(lastfojo)=year(now()) group by enirnomo order by total desc";
	}
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	echo "<table>";
	$classement = 1;
	while ($row=$result->fetch()) {
		if ($row["id"]==$persono_id) {
			$enirnomo = "<b>".$row["enirnomo"]."</b>";
		} else {
			$enirnomo = $row["enirnomo"];
		}
		if ($classement<=10) {
			echo "<tr><td>".$classement.". ".$enirnomo."</td><td>".$row["total"]."</td></tr>";
		} else if ($row["id"]==$persono_id) {
			echo "<tr><td>".$classement.". ".$enirnomo."</td><td>".$row["total"]."</td></tr>";
		}
		$classement++;
	}
	echo "</table>";
}

function statMotsParForce($persono_id) {
	global $bdd;
	$resultat = array();
	$query = "SELECT nombrilo  ,count(*) as total FROM personoj_vortoj WHERE persono_id='".$persono_id."' group by nombrilo order by nombrilo";
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	while ($row=$result->fetch()) {
		if ($row["nombrilo"]==1) {
			$resultat['à apprendre']=$row["total"];
		} else if ($row["nombrilo"]>1 && $row["nombrilo"]<5) {
			$resultat['force '.($row["nombrilo"]-1)]=$row["total"];
		} else {
			if (isset($resultat['force max'])) {
				$resultat['force max']+=$row["total"];
			} else {
				$resultat['force max']=$row["total"];
			}
		}
	}
	$chaine = "";
	foreach($resultat as $key=>$value) {
		$chaine .= "['".$key."',".$value."],";
	}
	echo rtrim($chaine,",");
}


function statEvolution($persono_id,$nbjours,$nbeleves) {
	global $bdd;
	// on regarde la dernière leçon faite
	$query = "SELECT personoj_lecioneroj.lecionero_id,lecionoj.kurso FROM personoj_lecioneroj join lecioneroj on lecioneroj.id=personoj_lecioneroj.lecionero_id join lecionoj on lecionoj.id=lecioneroj.leciono_id  WHERE personoj_lecioneroj.persono_id=".$persono_id." order by dato desc limit 1";
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$row = $result->fetch();
	$derniereSection = $row["lecionero_id"];
	$dernierCours= $row["kurso"];
	// on regarde les autres élèves qui ont fait cette leçon
	$autresEleves = array();
	$query = "SELECT persono_id,personoj_lecioneroj.lecionero_id,dato FROM personoj_lecioneroj join lecioneroj on lecioneroj.id = personoj_lecioneroj.lecionero_id join lecionoj on lecionoj.id=lecioneroj.leciono_id WHERE lecionoj.kurso='".$dernierCours."' and personoj_lecioneroj.lecionero_id=".$derniereSection." order by dato desc limit ".$nbeleves;
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	while ($row=$result->fetch()) {
		$autresEleves[] = $row["persono_id"];
	}
	// on récupère la liste des leçons
	$lecioneroj = array();
	$query = "SELECT lecioneroj.id FROM lecioneroj join lecionoj on lecionoj.id=lecioneroj.leciono_id where kurso='".$dernierCours."' order by lecionoj.numero, lecioneroj.ordo";
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$indiceSection = 1;
	while ($row=$result->fetch()) {
		$lecioneroj[$row["id"]]=$indiceSection;
		$indiceSection++;
	}	
	//on récupère le nom des élèves 
	$nomEleve= array();
	$query = "select id,enirnomo from personoj where id in (".join(',', $autresEleves).")";
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	while ($row=$result->fetch()) {
		$nomEleve[$row["id"]]=$row["enirnomo"];
	}
	echo "['Date'";
	foreach ($nomEleve as $valeur) {
		echo ",{label : '".$valeur."',type:'number'}";
	}
	echo "]";
	$statistique = array();
	$jours = array();
	$query = "SELECT personoj_lecioneroj.persono_id,personoj_lecioneroj.lecionero_id,dato,DAYOFYEAR(dato) as dayofyear FROM personoj_lecioneroj join lecioneroj on lecioneroj.id = personoj_lecioneroj.lecionero_id join lecionoj on lecionoj.id=lecioneroj.leciono_id WHERE dato>DATE_SUB(CURDATE(), INTERVAL ".$nbjours." DAY) and lecionoj.kurso='".$dernierCours."' and persono_id in (".join(',', $autresEleves).") order by dato";
	//echo $query."<br/>";
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	while ($row=$result->fetch()) {
		// on stocke le libellé du jour sous une forme plus lisible que le "jour de l'année"
		$jours[$row["dayofyear"]]=substr($row["dato"],strpos($row["dato"],"-")+1,5);
		if (!isset($statistique[$row["dayofyear"]])) {
			$statistique[$row["dayofyear"]]=array();
		}
		$statistique[$row["dayofyear"]][$row["persono_id"]]=$lecioneroj[$row["lecionero_id"]];
	}
	// on affiche les statistiques :
	$i=0;
	foreach($statistique as $jour=>$resultat) {
		echo ",\n['".$jours[$jour]."'";
		// on boucle sur les 5 élèves
		foreach ($nomEleve as $lernanto_id=>$identifiant) {
			// on vérifie si l'élève a fait une leçon ET SI la leçon appartient au cours en question (pour lequel on a le nom des sections)
			if (isset($resultat[$lernanto_id])) {
				echo ",".$resultat[$lernanto_id];
			} else {
				// l'élève en question n'a pas fait de leçon ce jour
				echo ",null";
			}
		}
		echo "]";
		$i++;
	}
}

?>