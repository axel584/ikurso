 <?php
include "util.php";
$pagxtitolo="Données personnelles";
$korpo="informoj";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
include "pagxkapo.inc.php";
?>



	<div class="row">
		<article class="col s12 m9 l6 offset-m1 offset-l1">
			<h1>Révision du vocabulaire</h1>

			<section id="enhavo">

			<?php
				// on ajoute ici les mots à réviser, mais on peut le faire aussi souvent que l'on veut et où on le veut (par exemple dans le script qui indique que la leçon est terminé, ce serait très bien)
				// le code est dans db.inc car c'est uniquement du php/sql sans affichage html
				aldoniNovajnVortojnEnMemorilo($persono_id);
			?>

			
			<?php
				// ici la méthode est faite pour afficher des cartes, donc on met le code dans webui
				kreiKartojnPorMemoriVortojn($persono_id);
			?>



<!-- 		<div class='memorilo' id='carousel_qcm'>
			<div class='memorilo_demando row'>
				<h3>(1/10) : pain</h3>
				<input type='text' name='memorilo1' value='' id='001-01' />
				<a class="waves-effect waves-light btn">vérifier</a>
				<br>
			</div>
		</div> -->	
			



			</section>
			<section id="rimarko" class="rimarko primaire-texte texte-moyen">
			<div class="row">
				<div class="col s12">
					<p class="noto">
					Révisez votre vocabulaire régulièrement. En venant sur cette page, vous pourrez réviser les mots à apprendre. Plus vous répondrez correctement et moins souvent vous devrez réviser les mots concernés. Inversement, les mots qui vous posent problème reviendront plus souvent.
					</p>
				</div>
			</div>
		</section>
		</article>
	
		<aside class="col s12 m10 l4 offset-m1 offset-l1">
		<!-- pour les élèves uniquement qui ont commencé un cours -->
		<?php if (jamKomencisKurson($persono_id)) { ?>
			<h2>Mes cours</h2>
			
			<p><span class="primaire-texte texte-moyen">Dernier cours choisi : </span><?php simplaVorto("nomo","kursoj"," where kodo='".$persono['kurso']."'"); ?></p>
			<p><span class="primaire-texte texte-moyen">Mon correcteur est :</span><br>
				<?php $korektanto = getKorektantonElLernanto($persono['id'],$persono['kurso']); echo $korektanto['personnomo']." ".$korektanto['familinomo']; ?>
				(<a href="mailto:<?php echo $korektanto['retadreso'];?>"><?php echo $korektanto['retadreso'];?></a>)</p>
			<h5>Cours suivis :</h5>
			<?php getCoursElLernanto($persono['id']);?>			
			<!-- pour les administrateurs ou informateurs ou korekteur --> 
		<?php } elseif (($persono["rajtoj"]=="I") or ($persono["rajtoj"]=="A")or ($persono["rajtoj"]=="K")) { ?>
			<p><a href="<?php echo $vojo;?>miajlernantoj.php" class="btn waves-effect waves-light" >Gérer mes élèves</a></p>
		<!-- cas des élèves qui n'ont pas encore commencé le cours -->
		<?php } else { 
			// différencier le cas des élèves inscrits au ikurso des autres
			if ($persono['kurso']=="KE") {
			?>
			<h2>Mes cours</h2>
			<p><span class="primaire-texte texte-moyen">Cours choisi : </span><?php simplaVorto("nomo","kursoj"," where kodo='".$persono['kurso']."'"); ?></p>
			<p><span class="primaire-texte texte-moyen">En attente d'attribution d'un correcteur.</span></p>
			<?php
			} else {
			?>
			<p>Si vous n'avez jamais suivi de cours d'espéranto, nous vous conseillons de commencer par le <b>Cours en 10 leçons</b>. Vous pourrez le suivre avec l’aide d'un correcteur ou en totale autonomie.<br>
			<a href="<?php echo $vojo;?>fr/cge/intro.php" class="btn waves-effect waves-light" >Cours en 10 leçons</a></p>
			<p>Si vous quelques bases et que vous voulez approfondir, nous vous conseillons le cours <b>Gerda malaperis</b> :<br>
			<a href="<?php echo $vojo;?>fr/gerda/index.php" class="btn waves-effect waves-light" >cours Gerda Malaperis</a></p>
			<?php } ?>
		<?php } ?>

	</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>			