<?php
include "util.php";
$pagxtitolo="stirpanelo";
$korpo="hejmo";
$section=isset($_GET["section"])?$_GET["section"]:"protokolo";
if (isset($celpersono_id)) {$celpersono = apartigiPersonon($celpersono_id);}
include "pagxkapo.inc.php";
?>

<div class="row">

	<article class="col s12 m9">

		<?php
		if ($section=="protokolo") {
		?>

		<h1>Carnet de bord</h1>
		
		<div class="card-panel blue lighten-5 row">
			<p class="col s6 m3"><span class="label">Début : </span><input id="debut_protokolo" name="debut" type="date" value="" class="datepicker" /></p>
			<p class="col s6 m3"><span class="label">Fin : </span><input id="fin_protokolo" name="fin" type="date" value="" class="datepicker" /></p>
			<p class="col s6 m3"><span class="label">Type : </span><br/>
			<select id="type_protokolo">
				<option value="">Tout</option>
				
				<option value='TASKO SALVITA'>Tasko Salvita</option>
				<option value='ENIRO'>Eniro</option>
				<option value='ERARO'>Eraro</option>
				<option value='TASKO SENDITA'>Tasko sendita</option>
				<option value='PASVORTO SENDITA'>Pasvorto sendita</option>
				<option value='UPDATE PERSO'>Update perso</option>
				<option value='RAPPEL MAIL OFF'>Rappel Mail off</option>
				<option value='REPRENIS LERNANTON'>Reprenis lernanton</option>
				<option value='ACTIVATION COMPTE'>Activation compte</option>
				<option value='COMPTE ACTIF'>Compte actif</option>
				<option value='ENVOIE RAPPEL'>Envoie Rappel</option>
				<option value='EVALUATION LECON'>Evaluation Leçon</option>
				<option value='DIPLOME'>Diplome</option>
				<option value='réinitialisation du mot de passe'>réinitialisation du mot de passe</option>
				<option value='RENVOIE ACTIVATION COMPTE'>Renvoie Activation Compte</option>
				<option value='MEMORILO'>Memorilo</option>
				<option value='SUPPRESSON AUTOMATIQUE'>Supression Automatique</option>
				<option value='VERDA KRABO'>Verda Krabo</option>
			</select></p>
			<p class="col s6 m3"><span class="label">Utilisateur : </span><input id="persono_protokolo" type='text' name='persono' value="" /></p>
			<p class="col s12"><a id="serchi_protokolon_button" class="btn waves-effect waves-light blue right">Afficher</a></p>
		</div>


		<!--input id="type_protokolo" type="text" name="type" value="" /--> 

		<div id="resultat_recherche_protokolo">
		<?php
			listi_protokolo(50);

		?>


		</div>

	

	<?php
		}
		if ($section=="lernantoj") {
	?>
		<h1>Élèves</h1>
		lernantoj
	<?php
		}
		if ($section=="korektantoj") {
	?>
		<h1>Correcteurs</h1>

		<?php 

				listi_plejBonajKorektantoj(); 
				
				// par mois
		        $demando = "select * from monatoj";
				$result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
				while ($row=$result->fetch()) {
					$nomo_monatoj[$row["kodo"]]=$row["nomo"];
				}
				$mktime = mktime(date('H'), date('i'), date('s'), date('m')-1, date('d'), date('Y')); // 
				$mois = date("m",$mktime);
				$annee = date("Y",$mktime);
				echo "<h2>R&eacute;sultats pour ".$nomo_monatoj[$mois].":</h2>";
				listi_plejBonajKorektantojLauxMonato($mois,$annee); 
				echo "<h2>Liste des correcteurs :</h2>";
				listi_korektantoj();

		?>

	<?php
		}
		if ($section=="lecionoj") {
	?>
		<h1>Leçons</h1>
	<?php
		}
	?>

	</article>


	<aside class="col s12 m3">
		<ul class="collapsible" data-collapsible="expandable">
			<li><div class="collapsible-header active"><i class="material-icons">toc</i>Administration</div>
			<div class="collapsible-body">
				<ul id="enhavtabelo" class="collection">
				<li class=""><div><a href="stirpanelo.php?section=protokolo" class="">Carnet de bord</a></div></li>
				<!--<li class=""><div><a href="stirpanelo.php?section=lernantoj" class="">Élèves</a></div></li>-->
				<li class=""><div><a href="stirpanelo.php?section=korektantoj" class="">Correcteurs</a></div></li>
				<!--<li class=""><div><a href="stirpanelo.php?section=lecionoj" class="">Leçons</a></div></li>-->
				</ul>
			</div>		
			</li>
		</ul>	
	</aside>
			
</div>
<?php include "pagxpiedo.inc.php"; ?>