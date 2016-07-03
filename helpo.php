<?php
include "util.php";
malfermidatumbazon();
$gxisdatigDato="2016-07-03";
$pagxtitolo="Aide et informations utiles";
$korpo="informoj";
$section=isset($_GET["temo"])?$_GET["temo"]:"";
if ($section==""){$section="faq";}
if ($section=="elsxutoj") {header("Location:fr/elsxutoj.php");}
$persono_id=$_SESSION["persono_id"];
if ($persono_id!="") {
	$persono = apartigiPersonon($persono_id);
	$videbla=$persono["videbla"];
	if (($videbla=="J")||($videbla=="")) {$temo="nova";}
	//echo "videbla=".$videbla."<br>";
}
else {$videbla="N";}
	//echo "temo=".$temo."<br>";

$demando = "update personoj set videbla='N' where id='".$persono_id."'";
$bdd->exec($demando);

include "pagxkapo.inc.php";
?>
	<div class="row">
		<article class="col s12 m10 l7 offset-m1 offset-l2">
			<h1>Foire aux questions</h1>
			
			<section id="faq">
				<p>
				Vous trouverez ici les réponses aux questions les plus fréquentes. Si vous avez des questions sur
				la manière d’utiliser ce site, lisez attentivement cette page. Si vous ne trouvez pas ici la réponse
				à vos questions, vous pouvez <a href="<?php echo $vojo;?>reago.php">contacter les administrateurs du cours</a>.</p>
					
				<h2 name="infocours">Comment bien utiliser les cours&nbsp;? Comment s’inscrire&nbsp;?</h2>		
		
				<p>Sur ce site, vous avez accès à deux cours différents&nbsp;:</p>
				<ul>
					<li>le <a href="#dlek">cours en dix leçons</a>&nbsp;: cours pour débutants sous forme de pages web</li>
					<li><a href="#gerda">Gerda malaperis</a>, cours de perfectionnement basé sur un petit roman en 25&nbsp;chapitres.</li>
				</ul>
				<p>Ces cours s’utilisent en auto-apprentissage mais cela ne signifie pas que vous serez seul durant votre étude. 
				Vous pouvez être aidé par un correcteur qui corrigera vos exercices et pourra répondre à vos questions. 
				Les échanges avec le correcteur se font par courriel.</p> 		

				<p>Pour en savoir plus, voir la page <a href="<?php echo $vojo;?>fr/intro.php?temo=enskribo" class="btn-flat small blue-text"><i class="material-icons right">arrow_right</i>Comment s'inscrire</a></p>
				
				<?php if (($persono["rajtoj"]=="K")||($persono["rajtoj"]=="A")) { ?>
					<h2 name="korektanto">Guide du correcteur</h2>
					<p>Nous recommandons à tous nos correcteurs de prendre connaissance du guide du correcteur.
					Il existe sous forme d'un fichier PDF à télécharger et d'une série de questions-réponses :</p>
					<p><a href="<?php echo $vojo;?>helppagxo.php" class="btn-flat small blue-text"><i class="material-icons right">arrow_right</i>Voir le guide du correcteur</a></p>
				<?php } ?>
			</section>
					
			<section id="akcentoj">

				<?php include "helpo_accents.inc.php" ?>
		
				<?php include "helpo_accents_mobile.inc.php" ?>
			</section>

		</article>
	</div>
<?php include "pagxpiedo.inc.php"; ?>
