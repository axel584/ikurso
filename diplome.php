<?php
include "util.php"; // permet de démarrer la session
// vérifier les paramètres d'entrée : identifiant (en session) + cours 
$clef = isset($_GET["clef"])?$_GET["clef"]:""; 
if ($clef!="") {
	$persono_id = getPersonoIdFromAktivigo($clef);
} else {
	$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
}

if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
if ($kurso=="" || ($kurso!="CG" && $kurso!="GR" && $kurso!="KE")) {
	// Cours inconnu 
	header("Location:personinformoj.php?erarkodo=17");
}
switch ($kurso) {
	case "CG" : $urlCours = $urlracine."fr/cge/lec01.php";
	break;
	case "GR" : $urlCours = $urlracine."fr/gerda/cxap01.php";
	break;
	case "3N" : $urlCours = $urlracine."fr/3n/leciono01.php";
	break;
	default :
		$urlCours = $urlracine;

}
// ajoute dans le protocole que l'élève regarde son diplome
if ($clef!="") {
	protokolo($persono["id"],"DIPLOME","Quelqu'un regarde le diplome ".$kurso." de ".$persono["enirnomo"]." depuis ".$_SERVER["HTTP_REFERER"]);
} else {
	protokolo($persono["id"],"DIPLOME",$persono["enirnomo"]." regarde son diplome ".$kurso);
}
// vérifier en base que le cours est bien terminé, récupérer le nom-prénom du correcteur, la date de fin et le statut (si le statut!=F => exit)
$infos = getInfoPorDiplomoElLernanto($persono_id,$kurso);
if ($infos==null) {
	// on n'a pas trouvé de cours finis pour cet élève (tentative de fraude ?)
	header("Location:personinformoj.php?erarkodo=17");	
}

// si on a un nom de famille ou un prénom on l'utilise pour afficher sur le diplome, sinon on prend l'identifiant
if ($persono["familinomo"]!="" || $persono["personnomo"]!="") {
	$nom = $persono["personnomo"]." ".$persono["familinomo"];
} else {
	$nom = $persono["enirnomo"];
}
$urlImage = $urlracine."diplomeImage.php?kurso=".$kurso."&clef=".$persono["aktivigo"];
$urlPage = $urlracine."diplome.php?kurso=".$kurso."&clef=".$persono["aktivigo"];
$description = "Espéranto-France atteste que ".$nom." a correctement suivi le Cours d'Espéranto";
?>
<html>
	<head>
		<meta property="og:title" content="Diplome de <?=$nom?>" />
		<meta property="og:image"              content="<?=$urlImage?>" />
		<meta property="og:description" content="<?=$description?>" />
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,600,600italic,700italic,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
		
		<!--Import materialize.css-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link type="text/css" rel="stylesheet" href="style/ikurso.css" media="screen"/>
		<link type="text/css" rel="stylesheet" href="style/diplome.css" media="print"/>
	</head>
    <body class="attestation">
		<?php 

		echo '<img src="'.$urlImage.'" width="842" height="595"/>'; ?>
		<div class="outils">
		<a class="btn waves-effect waves-light blue modal-trigger" target="_NEW" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($urlPage);?>">Partager sur FaceBook</a>


			<?php
			// on affiche le lien vers le cours que si on accede au diplôme à partir de son lien "public"
			if ($clef!="") {
			?>
			<a class="btn waves-effect waves-light blue modal-trigger" href="<?=$urlCours?>">Découvrir le cours</a>
			<?php
			}	
			?>
			<a class="btn waves-effect waves-light blue modal-trigger imprimer" href="" onclick="window.print();">Imprimer l’attestation</a>
			<a class="btn waves-effect waves-light blue modal-trigger fermer" href="" onclick="window.close();">Fermer</a>
		</div>
    </body>
</html>

