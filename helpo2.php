<?
include "util.php";
malfermidatumbazon();
$pagxtitolo="Aide et informations utiles";
$temo=$_GET["temo"];
if ($temo=="") {$temo="faq";}
$persono_id=$_SESSION["persono_id"];
if ($persono_id!="") {
	$persono = apartigiPersonon($persono_id);
	$videbla=$persono["videbla"];
	$temo="nova";
//	echo "videbla=".$videbla."<br>";
}
else {$videbla="N";}

$demando = "update personoj set videbla='N' where id='".$persono_id."'";
mysql_select_db( "ikurso");
$result = mysql_query($demando) or die (  "INSERT : Invalid query :".$demando);

$temo="nova";

include "pagxkapo.inc.php";
?>
		<div id="enhavo">
			<ul id="tabnav">
				<li <?if ($temo=="nova"){echo "class='aktiva'";}?>><a href="helpo.php?temo=nova">Bienvenue</a></li>
				<li <?if ($temo=="faq"){echo "class='aktiva'";}?>><a href="helpo.php?temo=faq">Aide</a></li>
				<li <?if ($temo=="liens"){echo "class='aktiva'";}?>><a href="helpo.php?temo=liens">Liens</a></li>
			</ul>
			<div id="kadro">
				<div class="klarigo">
				<? if ($temo=="nova") { 
						if (($persono["rajtoj"]=="K")||($persono["rajtoj"]=="A")) {	
						// information specifique pour les correcteurs se connectant la première fois					
				?>
					<h2>Bienvenue dans le nouveau site I-kurso !</h2>
					<p>
					Bonjour,<br>
					le site I-kurso évolue ! Pour l'instant seuls les correcteurs et les administrateurs du
					site ont accès à ces nouvelles pages. &Agrave; partir de 1<sup>er</sup> octobre, les élèves auront
					également accès au nouveau site.</p>
					<p>Les principales nouveautés sont les suivantes :</p>
					<p>
					<ul>
						<li><a href="#ihm">Nouvelle interface permettant d'accéder à toutes les fonctionnalités du site 
						depuis n'importe quelle page</a></li>
						<li><a href="#onglets">Système d'onglets pour passer facilement d'une page à l'autre 
						(notamment dans les cours)</a></li> 
						<li><a href="#accents">Utilisation des lettres accentuées dans toutes les pages de cours et 
						dans les messages</a></li>
						<li><a href="#exercices">Nouvelle présentation des exercices et des devoirs des élèves</a></li>
					</ul>
					</p>
					<p class="important">	
					Merci de prendre quelques minutes pour lire ce qui suit et pour visiter les différentes pages de cours.
					Des changements notables y ont été apportés et vous serez les premiers à qui les élèves poseront des
					questions.<br>
					Veuillez lire attentivement ce qui concerne l'utilisation des accents, c'est le point
					pour lesquels les questions risquent d'être les plus nombreuses.
					<br>N'attendez pas d'être confontrés au
					problème devant vos élèves&nbsp;: prenez les devants ! C'est simple&nbsp;: il suffit de lire les quelques
					explications données dans cette page.
					</p>
					<h3 id="ihm">Nouvelle interface</h3>
					<p>
					Sur chaque page, deux menus permettent d'accéder à toutes les fonctionnalités du site :<br>
					- le menu du haut permet d'accéder à toutes les fonctionnalités spécifiques à chaque type d'utilisateur. 
					Il n'est affiché dès que l'utilisateur s'est identifié.<br>
					- le menu de gauche permet d'accéder aux cours, aux pages d'aide et d'information. En haut de ce menu,
					des boutons permettent de choisir le système d'affichage des pages (avec les accents ou les X)<br>
					- lorsqu'un correcteur est connecté, il peut voir en haut de ce menu un tableau récapitulatif 
					du nombre d'élèves. Il suffit de cliquer sur le tableau pour le modifier.					
					</p>
					
					<h3 id="onglets">Onglets</h3>
					<p>
					Le système d'onglets permet de passer facilement d'une page à l'autre, rendant plus pratique la
					navigation à l'intérieur du cours. Dans le cours <a href="fr/gerda/">Gerda malaperis</a>, ce système
					permet un découpage des leçons en différentes étapes. Ainsi l'élève peut facilement passer du
					texte aux exercices en passant par la partie grammaire et vocabulaire. 					
					</p>
					<p align="right"><em><a href="#top">Revenir au début</a></em></p>
					
					<h3 id="accents">Accents</h3>
					<p>Une question fréquente est celle de l'utilisation des accents. Nombre d'entre vous ont déjà été 
					confrontés au problème des accents qui ne passent pas toujours bien dans les messages (notamment
					les correcteurs dont les élèves utilisent le logiciel "Kurso de Esperanto"). La solution la plus
					couramment adoptée est le passage au système en -x ou en -h<br>
					Cependant, dans la majorité des cas, il est tout à fait possible d'
					<a href="helpo.php#courriel?temo=faq">utiliser les accents dans les 
					messages</a> et ce qui était difficile à mettre en oeuvre il y a dix ans ne l'est plus du tout aujourd'hui. 
					<br>
					Vous trouverez dans les pages d'aide toutes les informations vous permettant de le faire facilement.
					</p>
					
					<h4>Utilisation des accents dans le cours</h4>
					<p>
					Comme vous pourrez le constater, les textes en espéranto sont maintenant écrits avec les accents. 
					Cela ne pose généralement aucun problème, mais si cela était le cas, il est possible
					de visualiser les textes avec la méthode "en -X" (comme cela était fait sur les anciennes pages).
					Il suffit pour cela de cliquer sur un des deux petits boutons se trouvant en haut à gauche de l'écran.
					</p>
					<h4>Utilisation des accents dans les messages</h3>
					<p>
					Quel que soit le système utilisé pour l'affichage des pages, il est possible d'utiliser deux systèmes
					pour l'envoi des messages : soit avec le système en -X (qui était utilisée jusqu'à présent pour les cours
					DLEK et Gerda) soit avec les lettres accentuées.<br>
					La plupart des systèmes permettent aujourd'hui d'utiliser les accents dans les messages. C'est pourquoi
					<strong>nous vous conseillons d'utiliser cette dernière méthode</strong>.
					</p>
					<p>Si vous n'êtes pas sûr de pouvoir traiter correctement les messages avec les accents, nous vous
					conseillons de faire ce petit test&nbsp;: 
					<a href="#" onClick="window.open('tipohelpo2.php?retadreso=<?=$retadreso;?>','test','top=150,left=150,width=400,height=50');">
					cliquez ici pour recevoir un message de test</a>. Lorsque vous l'aurez re&ccedil;u lisez
					bien les instructions contenues dans ce message pour terminer le test.</p>
					
					<p>Le test n'a pas réussi ? Alors lisez <a href="helpo2.php?temo=faq#methodes">ces explications</a> qui vous permettront de paramétrer
					votre messagerie pour pouvoir recevoir et envoyer les accents</p>
					<p>
					<a href="helpo2.php?temo=faq#methodes">Pour en savoir plus sur les accents...</a>
					</p>
					<p align="right"><em><a href="#top">Revenir au début</a></em></p>
					
					<h3 id="exercices">Nouvelle présentation des exercices</h3>
					<p>
					Jusqu'à présent, les exercices se présentaient sous forme de gros blocs de texte dans lesquels
					l'élève devait écrire sa réponse.<br>
					Dans la nouvelle version les exercices ont été découpés : cela permet une présentation plus claire
					à l'écran ainsi que dans le message qui est envoyé. En effet, les messages étaient jusqu'ici envoyés
					en format "text brut" ce qui ne permet pas de mettre en valeur les différents éléments du devoir.<br>
					&Agrave; partir du 1<sup>er</sup> octobre, les messages seront envoyés en HTML<sup><a href="#html">*</a></sup>&nbsp;
					: ainsi les énoncés des exercices et les réponses des élèves seront présentés avec des couleurs différentes.</p>
		
					<p class="note">HTML est le langage utilisé pour décrire les pages web. Il permet donc d'améliorer la
					mise en page des message grâce à l'ajout d'images ou de mise en forme des caractères.
					</p>
					<p align="right"><em><a href="#top">Revenir au début</a></em></p>
				<? } else {
					// information specifique pour les autres utilisateurs se connectant la première fois
				?>
					<h2>Bienvenue dans le nouveau site I-kurso ! (élève)</h2>

					<p>
					Bonjour,<br>
					ce site est en cours d'évolution. Pour l'instant seuls les correcteurs et les administrateurs du
					site ont accès à ces nouvelles pages. &Agrave; partir de 1<sup>er</sup> octobre, les élèves auront
					également accès au nouveau site.</p>

			<? } 
			}?>
			
			<? if ($temo=="faq") { ?>
				<h2>Aide et informations utiles</h2>
				<p>
					Vous trouverez ici les réponses aux questions les plus fréquentes. Si vous avez des questions sur
					la manière d'utiliser ce site, lisez attentivement cette page. Si vous ne trouvez pas ici la réponse
					à vos questions, vous pourrez	consulter le forum (réservé aux utilisateurs inscrits) ou poser 
					votre question aux administrateurs du cours.</p></blockquote>
					
				  	<h3 id="accents">Utilisation des lettres accentuées</h3>
				  	<p>
					Dans ce site, les textes en espéranto sont écrits avec les accents. Cela ne pose généralement pas
					de problème mais si c'était le cas, il est possible de visualiser les pages en utilisant la 
					<a href="#:methodes">méthode en -X</a>. Pour cela, il suffit de cliquer sur l'un des deux boutons en haut à gauche de l'écran.
				  	</p>
				  	<p>
					Il existe différentes méthodes pour <a href="#:clavier">taper les lettres accentuées</a> au clavier. 
					Il est également possible de les utiliser dans les <a href="courriel">messages électroniques</a>, 
					à condition de respecter certains principes simples.
				  	</p>
				  	
				  	<h4 id="methodes">Les différentes méthodes pour représenter les accents</h4>
				  	<blockquote><p>
				  	Il existe plusieurs méthodes...
				  	</p>
				  	
				  	<h4 id="clavier">Comment taper les accents au clavier</h4>
				  	<p>
				  	Il existe plusieurs méthodes...
				  	</p>
				  	
				  	<h4 id="courriel">Comment utiliser les accents dans le courrier électronique</h4>
				  	<p>
				  	Il existe plusieurs méthodes...
				  	</p>
			<? } ?>
				
			<? if ($temo=="liens") { ?>
				<h2>Liens utiles</h2>

				<blockquote><p>
				... à compléter ...
				</p></blockquote>

			<? } ?>
			</div>
		</div>
	</div>
<? include "pagxpiedo.inc.php"; ?>
