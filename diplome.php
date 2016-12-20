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
// ajoute dans le protocole que l'élève regarde son diplome
protokolo($persono["id"],"DIPLOME",$persono["enirnomo"]." regarde son diplome ".$kurso);
// vérifier en base que le cours est bien terminé, récupérer le nom-prénom du correcteur, la date de fin et le statut (si le statut!=F => exit)
$infos = getInfoPorDiplomoElLernanto($persono_id,$kurso);
if ($infos==null) {
	// on n'a pas trouvé de cours finis pour cet élève (tentative de fraude ?)
	header("Location:personinformoj.php?erarkodo=17");	
}
?>
<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,600,600italic,700italic,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
		
		<!--Import materialize.css-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
		<link type="text/css" rel="stylesheet" href="style/ikurso.css" media="screen"/>
		<link type="text/css" rel="stylesheet" href="style/impression.css" media="print"/>
	</head>
    <body class="attestation">
		<?php 
		if ($clef!="") {
			$urlClef = "&clef=".$clef;
		} else {
			$urlClef = "";
		}
		echo '<img src="diplomeImage.php?kurso='.$kurso.$urlClef.'" width="842" height="595"/>'; ?>
		<div class="outils">
			<a class="btn waves-effect waves-light blue modal-trigger imprimer" href="" onclick="window.print();">Imprimer l’attestation</a>
			<a class="btn waves-effect waves-light blue modal-trigger fermer" href="" onclick="window.close();">Fermer</a>
		</div>
    </body>
</html>

