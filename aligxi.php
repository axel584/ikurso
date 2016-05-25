<?php
include "util.php";
$pagxtitolo="Kurso de Esperanto";
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
if (isset($celpersono_id)) {$celpersono = apartigiPersonon($celpersono_id);}
include "pagxkapo.inc.php";
?>
		<div id="enhavo">
			<?php if ($erarkodo=="2") echo "<div class='atentigo'><p class='eraro'>Vous n’avez pas rempli toutes les données obligatoires du formulaire d’inscription.</p></div>"; ?>
			<?php if ($erarkodo=="3") echo "<div class='atentigo'><p class='eraro'>Vous avez tapé deux mots de passe différents.</p></div>"; ?>
			<?php if ($erarkodo=="6") echo "<div class='atentigo'><p class='eraro'>Adresse électronique invalide.</p></div>"; ?>
			<?php if ($erarkodo=="7") echo "<div class='atentigo'><p class='eraro'>Cet identifiant existe déjà. Veuillez en choisir un autre, merci.</p></div>"; ?>
			<ul id="tabnav">
				<li class="aktiva"><a href="intro.php">Inscription</a></li>
				<li><a href="fr/cge/vortlisto.php">Lexique</a></li>
			</ul>
	
			<div id="kadro">

				<div class="klarigo">
					<p>Pour aider les &eacute;l&egrave;ves du «Kurso de Esperanto», les auteurs ont mis en place 
					un service de correction. </p>
					<p>Pour obtenir un correcteur, remplissez ce formulaire, vous recevrez 
					une premi&egrave;re confirmation par courrier &eacute;lectronique et d&egrave;s qu’un correcteur 
					se lib&eacute;rera, il vous sera affect&eacute;. Vous recevrez ses coordonn&eacute;es 
					&eacute;galement par courrier &eacute;lectronique. Notez l’adresse ainsi re&ccedil;ue dans la 
					partie "configuration" du logiciel.</p>
					<p>Retenez bien votre identifiant et votre mot de passe. Ils vous seront utiles pour vous 
					connecter par la suite.</p>
	 				<p> Par ailleurs nous vous proposons de vous abonner à une lettre d’information mensuelle 
	 				sur les activités liées à l’espéranto. Cette lettre est éditée par l’association Espéranto-Jeunes 
	 				et hébergée par Yahoogroupes. Vous pouvez donc très facilement vous désabonner à tout moment et 
	 				la protection des données personnelles (adresse électronique par exemple) est assurée correctement.
	 				Vous pouvez consulter les dernières lettres parues sur le site d’Espéranto-France, à la
	 				rubrique <a href="http://esperanto-france.org/esperanto-aktiv">Lettre d’information <i>Esperanto Aktiv'</i></a>.</p>
	 				<hr>
	 				<p><b>Important :</b> Cette inscription n’est indispensable que si vous désirez faire appel à 
	 				un correcteur. Ce service est gratuit, mais cela ne veut pas dire qu’il ne coûte rien : 
	 				répondre aux élèves et les suivre dans leur apprentissage demande du temps et un certain 
	 				investissement de la part des correcteurs. 
	 				Par conséquent, en vous inscrivant, vous vous engagez à suivre le 
	 				cours régulièrement et à avertir votre correcteur en cas d’arrêt 
	 				momentané ou définitif. Sans manifestation de votre part pendant plus d’une semaine, nous
	 				pourrons suspendre votre inscription et affecter votre correcteur à un autre élève. </p>  
	 				
					<form name="inscription" action="aligxi2.php" method="post"> 
					<?php echo "<input type='hidden' name='kurso' value='KE'>\n"; 
					   echo "<input type='hidden' name='lingvo' value='fr'>\n";
					   $kurso="KE";
						// debut de l'insertion de l'include du formulaire d'inscription
					 	include "aligxi.inc.php"; 
						// fin de l'include
					?>
					</form>
				</div>
			</div>
		</div>
<?php include "pagxpiedo.inc.php"; ?>
