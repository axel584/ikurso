<?php
include "util.php";
$pagxtitolo="Guide du correcteur";
$korpo="gvidilo";
$section=isset($_GET["section"])?$_GET["section"]:"";
if ($section==""){$section="kursoj";}
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"CG";
$leciono=isset($_GET["numleciono"])?$_GET["numleciono"]:"1";
// si la personne qui regarde la page n'est ni correcteur, ni administrateur, on affiche la home
if ($rajto!='A' && $rajto!='I'){header("Location:index.php?erarkodo=4");}

include "pagxkapo.inc.php";

$query = "select titolo from lecionoj where  numero=".$leciono." and kurso='".$kurso."'";
$result = $bdd->query($query);
$row=$result->fetch();
$titolo = $row["titolo"];

?>
	<div class="row">
		<article class="col s12 m7 l6 offset-l1">
			<h1>Guide du correcteur</h1>

			<p style="text-align:right"><a href="doc/GuideDuCorrecteur.pdf">Téléchargez le guide du correcteur au format pdf</a></p> 
			
			<h2 id="kursoj"  class="scrollspy">Présentation des cours</h2>
			<p class="parto">Espéranto-France propose deux cours en ligne, avec pour chacun un service de correction gratuit. 
				Ces cours sont accessibles depuis la page <a href="https://ikurso.esperanto-france.org">https://ikurso.esperanto-france.org</a>
				(ou <a href="https://ikurso.esperanto-france.org">ikurso.fr</a>)</p>
			<ul>
				<li><strong>Cours en 10 leçons</strong>&nbsp;: cours en ligne pour débutants</li>
				<li><strong>Gerda malaperis</strong>&nbsp;: cours en ligne pour ceux qui connaissent les bases de l’espéranto.</li>
			</ul>
			<p class="parto">Ces deux cours peuvent être suivis en ligne de façon autonome sans inscription, 
			mais pour bénéficier de la correction des exercices, nous conseillons aux élèves de demander l’aide d’un correcteur.
			<p>La présentation des cours en ligne a été conçue de manière à ce qu’ils puissent être utilisés sur téléphone, 
				tablette ou ordinateur.</p>
			<p class="noto">
				Espéranto-France propose également un service de correction pour le <i>Kurso de Esperanto</i>, 
				un cours pour débutants qui nécessite l’installation d’un logiciel. Cependant, ce logiciel n’a pas évolué depuis 
				plusieurs années, contrairement au <i>Cours en 10 leçons</i> qui bénéficie d’évolutions régulières, 
				tant du point de vue technique que du contenu pédagogique.</p>

			<h3>Cours en dix leçons</h3>
			<p class="parto">Ce cours en ligne se présente sous forme de pages alternant explications et exercices. 
				Le découpage des leçons en pages permet à l’élève de suivre le cours à son rythme&nbsp;: selon son temps disponible, 
				l’élève pourra ainsi étudier une leçon en une ou plusieurs séances.</p>
			<p>À la fin de chaque leçon, une page récapitulative permet à l’élève d’envoyer ses exercices à son correcteur. 
				Pour pouvoir bénéficier de ce service, il faut au préalable s’inscrire sur le site. </p>
			<p>Un correcteur est attribué à l’élève à la fin de la première leçon.</p>
			
			<h3>Cours <em>Gerda malaperis</em></h3>
			
			<p class="parto">Ce cours se présente sous forme de pages présentant un chapitre du livre et des exercices. 
			À chaque chapitre correspond une page présentant le vocabulaire et des remarques grammaticales. </p>
			<p>Cette page est accessible depuis la page de cours par le lien <a>Vortlisto de la ĉapitro</a> se trouvant en bas de la page. 
				On conseille également à l'élève de lire le chapitre correspondant de <i>Lasu min paroli plu</i>, 
				accessible depuis le lien <a>Responda rakonto Lasu min paroli plu</a>) qui se trouve aussi au bas de chaque chapitre 
				de <i>Gerda malaperis</i>.</p>
				<p>Un correcteur est attribué à l’élève à la fin de la première leçon.</p>
				<p class="noto"><strong>Remarque</strong>&nbsp;: Si le correcteur qui a suivi l’élève pour le cours de premier niveau 
				corrige également le cours <i>Gerda malaperis</i> et s’il a une place de libre, il sera en priorité attribué à l’élève.</p> 

			<p class="parto">Pour s’inscrire à un cours, l’élève doit remplir en formulaire en renseignant au moins 
			l’identifiant et le mot de passe choisis ainsi que son adresse électronique.</p>
			<p>L’élève reçoit alors un message l’invitant à attendre un correcteur.</p>
			<p>Dès son inscription, l’élève a accès à la page lui permettant de modifier ses données personnelles. 
			Lorsqu’un correcteur lui est affecté, l’élève reçoit un nouveau message lui indiquant les coordonnées de son correcteur.</p>

			<h3>Kurso de Esperanto (ikurso)</h3>
			
			<p class="parto">Ce cours est basé sur un logiciel gratuit fonctionnant sous Windows et Linux.
			Il est téléchargeable depuis le site <a href="http://ikurso.net">http://ikurso.net</a>, 
			qui présente également le service de correction et l’accès au formulaire d’inscription. 
			Lors de son inscription, l’élève reçoit un message l’invitant à attendre un correcteur.</p>
			
			<h2 id="conseils" class="scrollspy">Conseils d’apprentissage</h2>
			
			<p class="parto">Des conseils d’apprentissage sont donnés à l’élève en préambule du cours&nbsp;: 
			<a href="https://ikurso.esperanto-france.org/fr/cge/intro.php">https://ikurso.esperanto-france.org/fr/cge/intro.php</a></p>
			<p><strong>Vous aussi</strong>, n’hésitez pas à les rappeler à vos élèves au cours de leur apprentissage.</p>
			À la fin du cours, nous donnons, dans la page <a href="https://ikurso.esperanto-france.org/helpo.php?section=kajposte">
			Que faire après le cours&nbsp;?</a>, de nombreuses idées pour mettre en pratique ce que l’élève aura appris.</p>
				
			<p>N’hésitez pas à en parler durant le cours, au gré des corrections et des questions que vos élèves vous poseront sûrement. 
			Cette page est mise à jour régulièrement. Si vous pensez qu’une ressource mérite d’y figurer, 
			n’hésitez pas à envoyer vos suggestions aux administrateurs du cours, en utilisant le <a href="https://ikurso.esperanto-france.org/reago.php">formulaire de contact du site</a>
			(vous pouvez cliquer sur le bouton <strong>NOUS CONTACTER</strong> affiché en bas de chaque page).</p>

			<h3>Rythme d’apprentissage</h3>
			
			<p class="parto">
			Chaque élève peut suivre le cours à son rythme. Certains élèves envoient une leçon par jour, 
			alors que d’autres ont besoin d’une semaine ou plus pour étudier une leçon. </p>
			<p>Pour leur éviter de laisser passer trop de temps entre deux séances d’études, ce qui favorise l’oubli des acquis, 
			des messages automatiques sont envoyés aux élèves pour leur rappeler ce conseil. 
			L’envoi des messages automatiques peut être désactivé par l’élève.</p>
		
			<h2 id="correction" class="scrollspy">Correction des exercices</h2>
			
			<p class="parto">
				Sur le site, un <strong>système de correction automatique</strong> permet d’indiquer immédiatement à l’élève si une réponse est correcte. 
				Chaque réponse correcte est soulignée à vert à l’écran. </p>
			<img src="<?=$vojo?>bildoj/gvidilo/reponse-correcte.jpg" alt="correction automatique" class="responsive-img">
			
			<p>Cette correction automatique fonctionne uniquement pour les exercices pour lesquels le nombre de réponses possibles est limité. 
				Il vous restera donc des exercices à corriger. Nous vous invitons également à encourager vos élèves à persévérer et à leur 
				apporter des explications complémentaires lorsque cela est nécessaire. </p>
			<p>La correction peut se faire par courriel ou directement en ligne, comme nous vous l’expliquerons un peu plus loin dans ce document. </p>
			<p class="parto">Si vous constatez qu’une réponse donnée par un élève n’est pas indiquée comme correcte par le système de correction automatique,
				n’hésitez pas à le signaler aux administrateurs. </p>
			<p>Si vous optez pour la <strong>correction en ligne</strong>, vous pourrez indiquer directement 
				lors de la correction que la réponse donnée doit être considérée comme correcte (voir dans le chapitre suivant).</p>
			
			<h2>Suivi des élèves</h2>
			
			<h3 id="combien" class="scrollspy">Combien d’élèves vais-je avoir&nbsp;?</h3>
			<p class="parto">
			Le nombre d’élèves que vous pourrez suivre dépend de votre temps disponible. 
			Certains correcteurs suivent un ou deux élèves à la fois, d’autres suivent une vingtaine d’élèves en parallèle.</p>
			<p>Pour assurer un suivi efficace de vos élèves, il est important de répondre rapidement, 
				dans un délai d’un à deux jours après que l’élève a envoyé ses devoirs. En cas d’empêchement, 
				n’hésitez pas à prévenir vos élèves ou les administrateurs.</p>
			<p>Pour commencer, nous vous conseillons de suivre un ou deux élèves du <em>Cours en dix leçons</em>. 
				Vous pourrez à tout moment modifier le nombre maximal d’élèves que vous souhaitez suivre.
			</p>
			
			<h3 id="comment" class="scrollspy">Comment avoir de nouveaux élèves&nbsp;?</h3>
			<p class="parto">		
			Vous devez commencer par indiquer le nombre maximal d’élèves vous souhaitez suivre pour chaque cours.</p>
			<ul class="sublisto">
				<li>Rendez-vous sur la page <a href="https://ikurso.esperanto-france.org/miajlernantoj.php">Mes élèves</a>.</li>
				<li>À gauche de la page, un tableau indique combien vous pourrez recevoir d’élèves pour chaque cours.</li> 
				<li>Cliquez sur l’intitulé <strong>Modifier le nombre de mes élèves</strong> affiché en haut du tableau.</li>
				<li>Vous arriverez sur la page <strong>Modifier le nombre de mes élèves</strong>.</li>
				<li>Dans la colonne de droite du  tableau, indiquez, pour chaque cours, le nombre maximal d’élèves 
				que vous souhaitez suivre, puis cliquez sur le bouton <strong>Valider</strong>.</li>
			</ul>
			<img src="<?=$vojo?>bildoj/gvidilo/miajlernantoj-sxangxi.png" alt="modifier le nombre d’élèves" class="responsive-img">
			
			<p class="parto">Les nouveaux élèves sont attribués en priorité aux correcteurs habitant dans le même département (en France) ou dans le même pays (dans les autres pays), puis en priorité aux correcteurs les moins «&nbsp;occupés&nbsp;». </p>
			<p>Par exemple, si un correcteur accepte 4 élèves et en a déjà 3, sa charge est de 75%. Si un correcteur accepte 10 élèves et en a déjà 6, sa charge est de 60%. C’est donc le deuxième correcteur qui recevra le prochain élève qui s’inscrit même si, dans l’absolu, il a plus d’élèves que le premier.</p>
			<p class="noto"><strong>Remarques :</strong></p>
			<p class="noto">Les élèves étant attribués en fonction de la proximité géographique, nous vous recommandons 
				d’indiquer votre code postal sur votre page 
				<a href="https://ikurso.esperanto-france.org/personinformoj.php">Données personnelles</a> 
				afin que nous puissions vous attribuer des élèves habitant dans votre département 
				(si vous habitez en France) ou dans votre pays.</p>
			<p class="noto">Le cours de 3<sup>e</sup> niveau est encore en projet et n’est pas proposé aux élèves pour l’instant.</p>

			<h3 id="nouveau" class="scrollspy">Comment sais-je que j’ai un nouvel élève&nbsp;?</h3>
			<p class="parto">Par courrier électronique, vous recevez un avis qu’un nouvel élève vous a été affecté. 
				Dans ce courrier sont indiqués son pseudo, son adresse électronique et le cours suivi, ainsi que 
				sa ville et son âge si l’élève a renseigné ces informations dans les données personnelles.</p>
		
			<h4>Pour les élèves du DLEK et de Gerda</h4>
			<p class="parto">En même temps que l’inscription, vous recevrez par courriel le premier devoir de votre élève.
				L’élève reçoit également une copie du message envoyé.</p>
				
			<h4>Pour les élèves du Kurso de Esperanto</h4>
			<p class="parto">Vous recevrez d’abord un message vous informant de qu’un nouvel élève vous est affecté. 
				Vous pourrez dès lors lui écrire pour lui souhaiter la bienvenue et lui expliquer que vous le suivrez 
				tout au long du cours. Lorsque votre élève aura fait ses premiers exercices, 
				vous recevrez un message avec le devoir de votre élève.</p>
				
			<h3 id="quoifaire" class="scrollspy">Que dois-je faire quand je reçois un nouvel élève&nbsp;?</h3>
			
			<p class="parto">Lorsqu’un nouvel élève vous est affecté, vous recevrez rapidement ses premiers exercices. </p>
			<p>La correction du premier devoir de votre élève sera le premier contact avec cet élève. Ce sera pour vous 
				l’occasion d’accueillir votre élève en lui envoyant un petit mot de bienvenue. </p>
			<p>Au cours de la première leçon, un petit exercice de rédaction permet à l’élève de se présenter en écrivant 
				ses premières phrases en espéranto. En retour, vous pourrez donc également vous présenter brièvement et 
				lui parler par exemple comment vous avez appris l’espéranto, ce que cela vous apporte ou 
				présenter un événement lié à l’espéranto.</p>
					
			<h3 id="info" class="scrollspy">Comment avoir plus d’informations sur mes élèves&nbsp;?</h3>
			
			<p class="parto">Lorsque vous vous connectez sur le site, allez sur votre page <a href="https://ikurso.esperanto-france.org/personinformoj.php">Mes données personnelles</a>.</p>
			<div class="row">
				<p class="col s12 m8"><strong>Remarque</strong> : en cliquant sur le bouton en haut à droite de la page, 
				vous pourrez accéder à cette page depuis le menu déroulant.</p>
				<p class="col s12 m4"><img src="<?=$vojo?>bildoj/gvidilo/ligo-personaj-informoj.png" alt="accès données personnelles" class="responsive-img"></p>
			</div>
			<ul class="sublisto">
				<li>Cliquez sur le bouton <strong>GÉRER MES ÉLÈVES</strong> pour accéder à la liste détaillée de vos élèves.</li>
				<li>Sur la page <a href="https://ikurso.esperanto-france.org/miajlernantoj.php">Mes élèves</a> vous pouvez voir 
				des informations plus détaillées sur vos élèves, comme leur adresse postale complète par exemple.</li>
				<li>Pour chaque élève, vous pouvez ajouter des commentaires, que seuls vous et les administrateurs du cours pourrez voir. 
				Cela peut servir par exemple à noter que vous avez envoyé une relance à votre élève, ou lorsque votre élève vous a indiqué 
				qu’il part en vacances à une certaine date ou n’importe quelle information qui vous permettra de mieux suivre votre élève. 
				Ces informations ne sont pas visibles par l’élève. Seuls vous-même et les administrateurs peuvent voir ces informations.</li>
			</ul>
			<img src="<?=$vojo?>bildoj/gvidilo/detail-eleve.jpg" alt="informations sur un eleve" class="responsive-img">
			<p>À gauche du nom de l’élève est affiché un rond vert, jaune ou rouge indiquant le nombre de jours depuis lequel votre élève 
				n’a pas envoyé de devoir (en vert&nbsp;: le dernier devoir a été envoyé il y a moins de 10 jours&nbsp;; en jaune&nbsp;: 
				le dernier devoir a été envoyé entre 10 et 30 jours et en rouge&nbsp;: le dernier devoir a été envoyé il y a plus de 30 jours).</p>
			<p>On recommande généralement aux élèves de suivre le cours régulièrement et d’envoyer au moins une leçon par semaine. </p>
			<p class="noto"><strong>Remarque</strong>&nbsp;: Les élèves n’ayant pas envoyé de devoir depuis plus de 7 jours reçoivent 
				automatiquement un message de rappel envoyé par courrier électronique. Les élèves ont cependant la possibilité 
				de désactiver ce rappel automatique.</p>
					
			<h2>Correction des exercices</h2>
					
			<h3 id="echanges" class="scrollspy">Comment se passent les échanges avec les élèves&nbsp;?</h3>
			
			<p class="parto">Comme nous l’avons vu précédemment, vous serez averti par courriel lorsque vous aurez un nouvel élève.
			Vous serez également averti par courriel lorsque votre élève enverra un nouveau devoir. Vous recevrez en réalité deux messages&nbsp;: </p>
			<ul class="sublisto">
				<li>un message dont le sujet indique le numéro de la leçon et le pseudo de votre élève&nbsp;: « lec… de … »</li>
				<li>un message dont le sujet est « Nouvelle leçon de … ».</li>
			</ul>
			<p>Les échanges entre vous et votre élève peuvent se faire par courriel ou directement en ligne sur le site.</p> 

			<h3 id="courriel" class="scrollspy">Comment corriger par courriel&nbsp;?</h3>
			
			<p class="parto">Les réponses aux exercices données par votre élève vous sont toutes transmises dans le courriel « lec … de … ».<br>
				Les énoncés sont écrits en noir, et les réponses de votre élève sont en bleu. 
				Pour les exercices bénéficiant d’une correction automatique, les bonnes réponses sont en vert.</p>
			<p><strong>ATTENTION</strong> : L’émetteur du message électronique est ikurso@esperanto-france.org <br>
				Lorsque vous répondez au message, veuillez renseigner comme destinataire l’adresse courriel de votre élève.</p>
				
			<h3 id="online" class="scrollspy">Comment corriger en ligne&nbsp;?</h3>
			
			<p class="parto">Pour corriger en ligne, il vous suffit de cliquer sur le lien donné dans le message « Nouvelle leçon de ... ».</p>
			<p>Cette page affiche tous les exercices de la leçon et les réponses données par votre élève.</p>
			<ul class="sublisto">
				<li>Pour corriger, cliquez sur le bouton <strong>CORRIGER CETTE LEÇON EN LIGNE</strong> qui se trouve en bas de la page.</li>
				<li>Sur la page suivante, vous verrez de nouveau les exercices et vous aurez la possibilité de taper votre correction 
				et vos commentaires sous chaque réponse incorrecte ou qui n’a pas pu être corrigée automatiquement par le système. </li>
				<li>Cliquez sur l’icône représentant un crayon, affichée à gauche de chaque question. Vous pouvez ajouter une introduction 
				et une conclusion à votre correction.</li>
			</ul>
			<img src="<?=$vojo?>bildoj/gvidilo/corriger.jpg" alt="saisir une correction" class="responsive-img">
			
			<p class="parto">Une zone de saisie est alors affichée pour vous permettre de taper votre texte.</p>
			<p>Vous pouvez utiliser plusieurs couleurs, mettre du texte en gras ou en italique. 
				Vous pouvez également ajouter des liens vers d’autres pages web. Un bouton vous donne accès aux caractères accentués de l’espéranto.</p>
				
			<img src="<?=$vojo?>bildoj/gvidilo/corriger-edit.jpg" alt="taper la correction" class="responsive-img">
			
			<p class="parto">Si vous constatez que la réponse donnée par votre élève, mais qu’elle n’a pas été considérée comme telle par le système, 
				cochez la case <strong>bonne réponse</strong>. Elle sera ainsi ajoutée à la liste des bonnes réponses possibles, 
				ce qui permettra d’améliorer le système de correction automatique.</p>
				
			<img src="<?=$vojo?>bildoj/gvidilo/corriger-bonne-reponse.jpg" alt="indiquer une bonne reponse" class="responsive-img">
				
			<p class="parto">Lorsque vous avez terminé de corriger, cliquez sur le bouton <strong>SAUVEGARDER CETTE CORRECTION</strong>, 
				qui se trouve en bas de la page. Un message électronique sera alors automatiquement envoyé à l’élève pour lui dire 
				qu’il lui est possible de consulter la correction en ligne.</p>
				
			<img src="<?=$vojo?>bildoj/gvidilo/correction-sauvegarde.jpg" alt="envoyer la correction" class="responsive-img">
			
			<p class="parto">Si vous n’avez pas terminé votre correction et souhaitez la reprendre plus tard, 
				cochez la case <strong>Ne pas prévenir l’élève par mail</strong> avant de cliquer sur le bouton <strong>SAUVEGARDER CETTE CORRECTION</strong>.</p>

			<h3 id="eo-fr" class="scrollspy">Dois-je écrire en français ou en espéranto&nbsp;?</h3>
			
			<p class="parto">Dès la première leçon, vous pouvez écrire quelques phrases simples en espéranto, 
				en ajoutant soit la traduction en français des mots qui n’ont pas encore été vus dans le cours. </p>
			<p>Par exemple, dans la correction de la première leçon, vous pouvez vous présenter succinctement en espéranto, 
				comme cela est demandé à l’élève à la fin de cette leçon. </p>
			<p class="parto">En ce qui concerne le cours <em>Gerda malaperis</em>, nous vous conseillons d’écrire le plus possible en espéranto, 
				car ce cours a pour but de faire pratiquer la langue. Cela n’est cependant pas une obligation absolue et vous pouvez tout à fait 
				rédiger des explications en français. </p>
				
			<h3 id="probleme" class="scrollspy">Que faire si je n’ai pas reçu les exercices envoyés&nbsp;?</h3>
			
			<p class="parto">Il arrive parfois que certains exercices envoyés par un élève n’arrivent pas à destination. 
				Si vous constatez qu’un élève tarde à envoyer ses exercices, vérifiez tout d’abord que le message n’est pas dans le dossier des indésirables.
				Si vous ne le trouvez pas, vous pouvez le récupérer en allant sur le site.</p>
			<div class="row">
				<div class="col s12 m8">
					<ul class="sublisto">
						<li>Rendez-vous à la page <a href="https://ikurso.esperanto-france.org/miajlernantoj.php">Mes élèves</a>.</li>
						<li>Sur la fiche de votre élève, cliquez sur le lien <strong>(voir)</strong> comme indiqué ci-dessous.</li>
						<li>Vous accèderez alors à une page présentant les exercices de la dernière leçon faits par votre élève. 
						Un bouton <strong>RENVOYER CETTE LEÇON PAR MAIL</strong> vous permet de vous envoyer de nouveau le message 
						avec les exercices qui sont affichés sur cette page. </li>
					</ul>
				</div>
				<div class="col s12 m4">
					<img src="<?=$vojo?>bildoj/gvidilo/voir-devoir.jpg" alt="voir le devoir" class="responsive-img">
				</div>
			</div>
			<img src="<?=$vojo?>bildoj/gvidilo/corriger-envoyer.jpg" alt="corriger ou envoyer" class="responsive-img">
					
			<p class="parto">Si vous ne recevez toujours pas le message, nous vous recommandons de réessayer en cochant la case 
				<em>Avec ikurso@esperanto-france.org</em>. En effet, par défaut les messages envoyés par le site ont comme expéditeur 
				l’adresse courriel de votre élève, mais cela est considéré comme du spam par certains systèmes de messagerie. 
				En utilisant l’adresse ikurso@esperanto-france.org comme expéditeur, cela permet d’éviter ce problème.</p>
			<p>Vous avez également la possibilité de corriger directement en ligne en cliquant sur le bouton <strong>CORRIGER CETTE LEÇON EN LIGNE</strong>, 
				comme nous l’avons vu dans précédemment.</p>
					
			<h2 id="maj" class="scrollspy">Suivi des élèves</h2>

			<h3>Comment mettre à jour les informations concernant mes élèves&nbsp;?</h3>
			
			<p class="parto">Pour le <em>Cours en dix leçons</em> et le cours <em>Gerda malaperis</em>, 
			les informations que vous voyez sur la page <a href="https://ikurso.esperanto-france.org/miajlernantoj.php">Mes élèves</a>
			sont mises à jour automatiquement dès que l’élève envoie un devoir&nbsp;: vous y trouverez l’historique des leçons étudiées par votre élève.</p>
			<p>Lorsque l’élève a terminé le cours, cliquez sur le bouton <strong>A fini</strong>. L’élève recevra alors un message l’invitant à télécharger son attestation.</p>
			<img src="<?=$vojo?>bildoj/gvidilo/a-fini.jpg" alt="l’élève a fini le cours" class="responsive-img">
				
			<p class="parto">Pour le <em>Kurso de Esperanto</em>, Les échanges entre votre élève et vous ne passant pas par le site, 
				vous devez vous-même indiquer la dernière leçon étudiée par votre élève à chaque leçon.</p>
			<p>Lorsque vous recevez les exercices envoyés par votre élève, allez sur la page 
				<a href="https://ikurso.esperanto-france.org/miajlernantoj.php">Mes élèves</a> et, sur la fiche de l’élève, 
				indiquez le numéro de la dernière leçon que votre élève a étudiée&nbsp;: ouvrez le menu déroulant de l’élève
				(en cliquant sur le triangle pointé vers le bas à droite du menu déroulant) puis sélectionnez la leçon que vous avez corrigée.
				Validez vos modifications en cliquant le bouton <strong>Envoyer</strong> se trouvant à côté du nom de la leçon que vous avez modifiée.</p>	

			<h3 id="arret" class="scrollspy">Que faire si l’élève n’étudie plus&nbsp;?</h3>
			
			<p class="parto">Il est probable qu’à cause du programme télévisé particulièrement intéressant, d’une coupe de monde de football 
				ou d’un examen à réviser, votre élève n’ait pas eu beaucoup de temps à consacrer à l’espéranto. 
				Plus le temps passe et plus cela lui sera difficile de s’y remettre ou de vous avouer qu’il veut arrêter. </p>
			<p>C’est pour cela qu’il est impératif de «&nbsp;relancer&nbsp;» votre élève par différentes tactiques.</p>
			<p class="parto">Le site ikurso envoie une relance automatique par courriel aux élèves qui n’ont pas envoyé de devoirs depuis plus de 7&nbsp;jours.</p>
			<p class="noto">Note : l’élève a la possibilité de faire cesser les relances.</p>
			<p>Si malgré les relances, votre élève ne se manifeste pas, n’hésitez pas à lui écrire en lui expliquant que vous êtes 
				conscient de la difficulté de la leçon concernée, que s’il a besoin d’aide, il n’hésite pas à faire appel à vos services.</p>
			<p class="parto">Une fois que vous avez relancé un élève, notez que vous avez fait cette relance dans le champ de commentaire 
				sur la fiche de votre élève, dans la page <a href="https://ikurso.esperanto-france.org/miajlernantoj.php">Mes élèves</a>. </p>
			<p>Lorsque vous retournerez sur le site, vous pourrez donc voir que vous avez relancé l’élève, la date de cette relance et ainsi, 
				à la deuxième relance, vous pouvez lui rappeler que vous n’avez pas eu de ses nouvelles «&nbsp;malgré&nbsp;» une relance précédente.</p>

			<h3 id="abandon" class="scrollspy">Que faire si un élève ne répond pas aux relances&nbsp;?</h3>

			<p class="parto">En attendant après un élève qui ne répond pas, vous empêchez d’autres élèves d’avoir un correcteur. 
				Il faudra donc penser à libérer la place de l’élève muet. Pour cela, rendez-vous sur la fiche de l’élève, et cliquez sur le bouton 
				<strong>a abandonné</strong>. </p>
			<p>L’élève disparaîtra alors de votre liste d’élèves et laissera une place pour un nouvel élève. 
				Tout n’est cependant pas perdu, car vous pourrez le retrouver dans la liste des élèves ayant abandonné&nbsp;:
				cliquez sur l’onglet <strong>Anciens élèves</strong> pour accéder à cette liste.</p>
				
			<img src="<?=$vojo?>bildoj/gvidilo/onglet-anciens-eleves.jpg" alt="anciens élèves" class="responsive-img">

			<p>Dans cette liste, vous trouverez tous vos élèves qui ont soit fini le cours, soit «&nbsp;abandonné&nbsp;». 
				Si un ancien élève qui avait abandonné vous informe de son souhait de rependre, il vous suffit d’aller dans cette liste, 
				et de cliquer sur le bouton <strong>Récupérer l’élève</strong> :</p>

			<img src="<?=$vojo?>bildoj/gvidilo/recuperer-eleve.jpg" alt="récupérer un ancien élève" class="responsive-img">
			
			<p class="parto">Il arrive que l’élève qui avait «&nbsp;abandonné&nbsp;» décide de reprendre le cours, sans forcément vous en avertir. 
			Dans ce cas, il vous sera automatiquement réattribué lorsque l’élève enverra de nouveaux exercices. </p>
			<p class="noto"><strong>Remarque</strong> : il est possible dans ce cas que votre nombre effectif d’élèves soit supérieur au nombre maximal 
				d’élèves. Si vous ne pouvez pas suivre cet élève en plus, n’hésitez pas à <a href="reago.php">contacter les administrateurs</a> pour qu’un 
				autre correcteur puisse prendre le relais.</p>

			<h3 id="demandoj" class="scrollspy">Si vous avez d’autres questions…</h3>

			<p class="parto">Si vous avez d’autres questions dont vous n’avez pas trouvé la réponse dans ces pages, 
				n’hésitez pas à <a href="reago.php">contacter les administrateurs</a>. Cela permettra également d’enrichir ce guide.</p>
			
			<p class="parto">Merci pour votre collaboration&nbsp;!</p>
			
		</article>

		<aside class="col s12 m3 l2">
			<div class="pinned">
				<ul class="collapsible">
					<li class="active">
						<div class="collapsible-header">Les cours</div>
						<div class="collapsible-body">
							<ul class="collection enhavtabelo">
								<li><a href="#kursoj">Présentation des cours</a></li>
								<li><a href="#conseils">Conseils d’apprentissage</a></li>
								<li><a href="#correction">Correction des exercices</a></li>
							</ul>
						</div>
						<div class="collapsible-header">Nouveaux élèves</div>
						<div class="collapsible-body">
							<ul class="collection enhavtabelo">
								<li><a href="#combien">Combien d’élèves vais-je avoir&nbsp;?</a></li>
								<li><a href="#comment">Comment avoir de nouveaux élèves&nbsp;?</a></li>
								<li><a href="#nouveau">Comment sais-je que j’ai un nouvel élève&nbsp;?</a></li>
								<li><a href="#quoifaire">Que faire quand je reçois un nouvel élève&nbsp;?</a></li>
								<li><a href="#info">Comment avoir plus d’informations sur mes élèves&nbsp;?</a></li>
							</ul>
						</div>
						<div class="collapsible-header">Correction des exercices</div>
						<div class="collapsible-body">
							<ul class="collection enhavtabelo">
								<li><a href="#echanges">Comment se passent les échanges avec les élèves&nbsp;?</a></li>
								<li><a href="#courriel">Comment corriger par courriel&nbsp;?</a></li>
								<li><a href="#online">Comment corriger en ligne&nbsp;?</a></li>
								<li><a href="#eo-fr">Dois-je écrire en français ou en espéranto&nbsp;?</a></li>
								<li><a href="#probleme">Que faire si je n’ai pas reçu les exercices envoyés&nbsp;?</a></li>
							</ul>
						</div>
						<div class="collapsible-header">Suivi des élèves</div>
						<div class="collapsible-body">
							<ul class="collection enhavtabelo">
								<li><a href="#maj">Comment mettre à jour les informations concernant mes élèves&nbsp;?</a></li>
								<li><a href="#arret">Que faire si l’élève n’étudie plus&nbsp;?</a></li>
								<li><a href="#abandon">Que faire si un élève ne répond pas aux relances&nbsp;?</a></li>
							</ul>
						</div>
						<div class="collapsible-header">Autres questions</div>
						<div class="collapsible-body">
							<ul class="collection enhavtabelo">
								<li><a href="#demandoj">Si vous avez d’autres questions…</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>