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
					<p>Pour aider les élèves du «Kurso de Esperanto», les auteurs ont mis en place 
					un service de correction. </p>
					<p>Pour obtenir un correcteur, remplissez ce formulaire, vous recevrez 
					une première confirmation par courrier électronique et dès qu’un correcteur 
					se libérera, il vous sera affecté. Vous recevrez ses coordonnées 
					également par courrier électronique. Notez bien cette adresse car vous l’utiliserez
					pour correspondre avec votre correcteur et lui envoyer les réponses aux exercices du cours.</p>
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
	 				<br />
	 				<p><strong>Comment faire pour envoyer vos exercices à votre correcteur ?</strong></p>
	 				<p>Dans chaque leçon, plusieurs exercices seront à envoyer à votre correcteur pour en obtenir la correction. 
		 				Ces exercices sont repérés par une petite enveloppe affichée à côté de l’exercice dans le menu de la leçon. Par exemple&nbsp;:<br />
		 				<img src="bildoj/ikurso-exemple-exo.jpg" /></p>
	 				<p>Lorsque vous avez terminé un de ces exercices, cliquez sur le bouton représentant une enveloppe et qui se trouve dans la barre d’outils 
		 			en bas de la fenêtre Kurso de Esperanto&nbsp;:<br />
		 			<img src="bildoj/ikurso-envoyer-exo.jpg" /></p>
		 			<p>Dans le logiciel que vous utilisez habituellement pour envoyer des e-mails, 
			 			créez un nouveau message en indiquant comme destinataire l’adresse courriel de votre correcteur.</p>
			 		<p>Dans le corps du message, copiez le contenu de l’exercice en tapant les touches Ctrl V (sous Windows) ou cmd V (sous Mac OSX).</p>
			 		<p>Pour un meilleur suivi des leçons, nous vous conseillons de mettre le nom de la leçon comme objet du message. 
				 		Par exemple pour la leçon 7, chapitre 15, l’objet est <b>Leciono 07 - Paĝo 15</b></p>
				 	<p>Procédez de la même façon pour tous les exercices qui sont repérés par une petite enveloppe.</p>
				 	<p><a class="bouton" href="doc/ikurso-aide.pdf">Télécharger ce guide en PDF</a></p>
	 				
					<form name="inscription" action="aligxi2.php" method="post"> 
					<?php echo "<input type='hidden' name='kurso' value='KE'>\n"; 
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
