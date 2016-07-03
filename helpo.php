<?php
include "util.php";
malfermidatumbazon();
$gxisdatigDato="2016-07-03";
$pagxtitolo="Aide et informations utiles";
$temo=$_GET["temo"];
if ($temo=="") {$temo="faq";}
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
<script type="text/javascript" src="xAlUtf8.js"></script>
<script type="text/javascript" src="eotajpu.js"></script>


		<div id="enhavo">
			<ul id="tabnav">
				<li <?php if ($temo=="nova"){echo "class='aktiva'";}?>><a href="helpo.php?temo=nova">Bienvenue</a></li>
				<li <?php if ($temo=="faq"){echo "class='aktiva'";}?>><a href="helpo.php?temo=faq">FAQ</a></li>
				<!--
				<li <?php if ($temo=="ligoj"){echo "class='aktiva'";}?>><a href="helpo.php?temo=ligoj">Liens</a></li>
				-->
				<li <?php if ($temo=="iloj"){echo "class='aktiva'";}?>><a href="helpo.php?temo=iloj">Outils</a></li>
				<li <?php if ($temo=="elsxutoj"){echo "class='aktiva'";}?>><a href="helpo.php?temo=elsxutoj">Téléchargements</a></li>
				<li <?php if ($temo=="konvertilo"){echo "class='aktiva'";}?>><a href="helpo.php?temo=konvertilo">Convertisseur</a></li>
			</ul>
			<div id="kadro">
				<div class="klarigo">
				<?php if ($temo=="nova") { 
						if (($persono["rajtoj"]=="K")||($persono["rajtoj"]=="A")) {	
						// information specifique pour les correcteurs se connectant la première fois					
						include "bonvenon_K.inc.php";
				} else {
					// information specifique pour les autres utilisateurs se connectant la première fois
						include "bonvenon.inc.php";
				} 
			}?>
			
			<?php if ($temo=="faq") { ?>
				<h2>Foire aux questions</h2>
				<p>
				Vous trouverez ici les réponses aux questions les plus fréquentes. Si vous avez des questions sur
				la manière d’utiliser ce site, lisez attentivement cette page. Si vous ne trouvez pas ici la réponse
				à vos questions, vous pourrez consulter le forum (réservé aux utilisateurs inscrits) ou poser 
				votre question aux administrateurs du cours.</p>
				<p>
				<ul>
					<li><a href="#infocours">Information sur les cours, inscription</a></li>
					<?php if (($persono["rajtoj"]=="K")||($persono["rajtoj"]=="A")) { ?>
					<li><a href="#correcteur">Guide du correcteur</a></li>
					<?php } ?>
					<li><a href="#accents">Les lettres accentuées : polices de caractères et affichage à l'écran</a></li>
					<li><a href="#clavier">Les lettres accentuées : comment les taper au clavier (Windows/Mac OS/Linux)</a></li>
					<li><a href="#courriel">Les lettres accentuées dans le courrier électronique</a></li>
					<li><a href="#mobile">Les lettres accentuées sur les terminaux mobiles (iPhone/Android)</a></li>
				</ul>
				</p>
					
		<h3 id="infocours">Information sur les cours, inscription</h3>		
		
		<p>Vous trouverez dans l'introduction de nos cours toutes les informations utiles à ce sujet.</p>	
		<p><a href="fr/intro.php?temo=kursoj">> Voir l'introduction des cours</a>.</p>
		
		<?php if (($persono["rajtoj"]=="K")||($persono["rajtoj"]=="A")) { ?>
				<h3 name="correcteur">Guide du correcteur</h3>
				<p>Nous recommandons à tous nos correcteurs de prendre connaissance du guide du correcteur.
				Il existe sous forme d'un fichier PDF à télécharger et d'une série de questions-réponses :</p>
				<p><a href="helppagxo.php">>Voir le guide du correcteur</a>.</p>
				
					
		<?php } ?>
		
		<?php include "helpo_accents.inc.php" ?>

		<?php include "helpo_accents_mobile.inc.php" ?>

			<?php } ?>
				
			<?php if ($temo=="ligoj") { ?>
				<h2>Liens utiles</h2>

				<blockquote><p>
				... à compléter ...
				</p></blockquote>

			<?php } ?>
			<?php if ($temo=="iloj") { ?>
				<h2>Quelques outils</h2>

				<h3>Clavier français-espéranto pour Windows</h3>
				
				<p class="rimarko">Le contenu de cette page provient du site <a href="http://ttt.jubilo.ca/ttt/clavier/">
					http://ttt.jubilo.ca/ttt/clavier/</a>. L’auteur indique que l’outil fonctionne sous Windows 2000, XP et Server 2003. 
					Il est cependant également possible de le faire fonctionner sous Windows Vista édition familiale.</p>
				
				<h4>Installation :</h4>
				    <ul>
				      <li>Téléchargez ce petit 
				      <a href="http://ikurso.esperanto-jeunes.org/klavaro.zip">
				      fichier ZIP</a>. 
				      Il contient le programme d’installation et un fichier DLL (FrEo.dll dans le dossier i386)&nbsp;:<br /><br />
				      <img src="http://ikurso.esperanto-jeunes.org/bildoj/klavaro.jpg"></li>
				      <li>Double-cliquez sur le programme d’installation (*.msi)</li>
				      <li>L’installation est terminée !<br>
				      <i>Il est bien sûr possible de désinstaller cette configuration.</i></li>
				    </ul>
			    <h4>Configuration :</h4>
			    <ul>
			      <li>Allez dans le <i>Panneau de configuration</i></li>
			      <li>Ouvrez le dossier <i>Options régionales et linguistiques</i> (<i>Regional Settings</i>)</li>
			      <li>Dans l’onglet <i>Langues</i>, cliquez sur <i>Détails</i>, puis sur <i>Ajouter</i> : choisissez <b><i>Français (France)</i></b> 
			      et la configuration <b><i>Français (+Esperanto)</i></b></li>
			      <li>La configuration est terminée.</li>
			    </ul>
			    <h4>Utilisation du clavier :</h4>
			    <ul>
			      <li><strong>Pour les lettres avec un accent circonflexe </strong>, comme le 
			      <strong>ĉ</strong> : tapez <em>AltGr+c</em>, <em>AltGr+g</em>, <em>
			      AltGr+h</em>, <em>AltGr+j</em>, et <em>AltGr+s</em>. Pour les majuscules 
			      tapez <em>Shift+AltGr+Lettre</em></li>
			      <li><strong>Pour les lettres surmontées d’une brève</strong>, comme le <strong>ŭ</strong> : 
			      tapez <em>AltGr+u</em>. Pour les majuscules tapez <em>Shift+AltGr+u</em></li>
			      <li>Le fonctionnement des autres touches n’est pas modifié.</li>
			    </ul>
			    <h4>Exemples :</h4>
			    <ul>
			      <li><strong>ĉevalo</strong><strong>: </strong>
			      <strong><em>AltGr-shift-c</em> <strong>e v a l o</strong></li>
			      <li><strong>manĝi</strong> :
			     <strong>m a n </strong><em>AltGr-g</em> <strong>i</strong></li>
			      <li><strong>ankaŭ</strong> : <strong>
			      a n k a</strong> <em>AltGr-u</em></li>
			    </ul>				   
			<?php } ?>
			<?php if ($temo=="elsxutoj") { ?>
				<h3>Téléchargements</h3>
					
				<h4>Logiciel</h4>				
				<ul>
					<li><a href="http://www.kurso.com.br/bazo/elshuto.html?fr">
						<em>Kurso de Esperanto</em> pour Windows, Linux et Mac</a></li>
				</ul>
				<h4>Fichiers audio</h4>	
				<ul>			
					<li>Les textes de <a href="http://ikurso.esperanto-jeunes.org/fr/gerda/son/gerda-mp3.zip"> 
					<em>Gerda malaperis</em> en version audio (mp3)</a></li>
					<li>Les récits 2 à 7 de <a href="http://ikurso.esperanto-jeunes.org/fr/gerda/son/lasu.zip">
					<em>Lasu min paroli plu</em> en version audio (mp3)</a></li>
				</ul>
				<h4>Documents à imprimer</h4>			
				<ul>	
					<li><a href="http://ikurso.esperanto-jeunes.org/doc/ikurso.pdf">Kurso de Esperanto : cours et exercices</a> (pdf - 935 Ko)</li>
					<li><a href="http://ikurso.esperanto-jeunes.org/doc/DLEK.pdf">Cours en dix leçons</a> (pdf - 476Ko)</li>
					<li><a href="http://ikurso.esperanto-jeunes.org/doc/DLEK-ekz.pdf">Cahier d'exercices du cours en dix leçons</a> (pdf - 223Ko)</li>
					<li><a href="http://ikurso.esperanto-jeunes.org/doc/LexiqueDLEK-Ikurso.pdf">Lexique Kurso de Esperanto / Cours en dix leçons</a> (pdf - 55Ko)</li>
				</ul>
			<?php } ?>
			<?php if ($temo=="konvertilo") { ?>
				<h2>Convertisseur</h2>
				<p>
				Cet outil convertit automatiquement le texte au fur et à mesure que vous le tapez en transformant 
				les cx, gx, ux... en lettres accentuées.
				</p>
				<textarea cols="80" rows="15" onkeyup="eotajpu(this,event);"></textarea>
			<?php } ?>
			</div>
		</div>
	</div>
<?php include "pagxpiedo.inc.php"; ?>
