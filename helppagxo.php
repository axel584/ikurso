<?
include "util.php";
$pagxtitolo=$lgv_helppagxo;
$temo=$_GET["temo"];
if ($temo=="") {$temo="inscription";}
if ($celpersono_id!="") {$celpersono = apartigiPersonon($celpersono_id);}
include "pagxkapo.inc.php";
?>
		<div id="enhavo">
			<ul id="tabnav">
				<li <?if ($temo=="inscription"){echo "class='aktiva'";}?>><a href="helppagxo.php?temo=inscription">Inscription au cours</a></li>
				<li <?if ($temo=="suivi"){echo "class='aktiva'";}?>><a href="helppagxo.php?temo=suivi">Suivi des élèves</a></li>
				<li <?if ($temo=="exemples"){echo "class='aktiva'";}?>><a href="helppagxo.php?temo=exemples">Messages</a></li>
				<li <?if ($temo=="utilisation"){echo "class='aktiva'";}?>><a href="helppagxo.php?temo=utilisation">Bien utiliser ce site</a></li>
			</ul>
			<div id="kadro">
				<div class="klarigo">
				<? if ($temo=="inscription") { ?>
					<p style="text-align:right"><a href="doc/GuideDuCorrecteur.pdf">Téléchargez le guide du correcteur au format pdf</a></p> 
					<h2>Inscription au cours</h2>
					<blockquote><p>
						Pour s’inscrire à un cours, l’élève doit remplir en formulaire en renseignant 
						au moins l’identifiant et le mot de passe choisis ainsi que son adresse électronique.
						Il reçoit alors un message l’invitant à attendre un correcteur.<br>
						Dès son inscription, l’élève a accès au forum ainsi 
						qu’à la page lui permettant de modifier ses données personnelles.<br>
						Lorsqu’un correcteur lui est affecté, l’élève reçoit 
						un nouveau message lui indiquant les coordonnées de son correcteur.</p>
		
					  	<h3>Kurso de Esperanto (ikurso)</h3>
						<p>Ce cours est basé sur un logiciel gratuit fonctionnant sous Windows et Linux.
						Il est téléchargeable depuis le site <a href="http://ikurso.net">http://ikurso.net</a>, 
						qui présente également le service de correction et l’accès au formulaire
						d'inscription. 
						Ce formulaire d’inscription est également accessible depuis la page d'accueil de ce site. <br>
						Lors de son inscription, l’élève reçoit un message l’invitant à 
						attendre un correcteur.</p>
						
						<h3>Cours d’espéranto en dix leçons (DLEK : DekLeciona Esperanto-Kurso)</h3>
						<p>L’élève qui souhaite bénéficier du service de correction s’inscrit en 
						remplissant le formulaire qui se trouve à la fin de la 1<sup>ère</sup> leçon. 
						Pour pouvoir s’inscrire l’élève doit donner toutes les réponses correctes 
						au QCM qui se trouve dans cette leçon.<br>
						<i>Remarque</i> : tant que l’élève n'a pas reçu de correcteur, les devoirs 
						qu’il envoie sont stockés sur le serveur. Il peut donc faire plusieurs devoirs avant d’avoir 
						reçu un correcteur (même si cela n’est pas conseillé).</p>
						
						<h3>Gerda malaperis</h3>
						<p>L’élève qui a suivi l’un des deux premiers cours a déjà un identifiant 
						et un mot de passe, qu’il doit réutiliser pour suivre ce cours. Si l’élève 
						n’est pas encore venu sur le site, il peut s’inscrire en utilisant le formulaire qui se 
						trouve à fin de la première leçon.<br>
						<i>Remarque</i> : le correcteur pour le cours <i>Gerda malaperis</i> n’est pas forcément le
						même correcteur que celui qui a suivi l’élève durant le ikurso ou le DLEK.
						</p></blockquote>
						<h3>Comment je sais que j’ai un nouvel élève ?</h3>
						<blockquote><p>
						Par courrier électronique, vous recevez un avis qu’un nouvel élève vous 
						a été affecté. Dans ce courrier sont indiqués sa ville, son âge, 
						son adresse électronique et le cours suivi.</p>
					
						<h4>cas des élèves du DLEK et de Gerda :</h4>
						<p>En même temps que l’inscription vous recevrez par courriel le premier devoir de votre élève 
						(voire plusieurs devoirs si celui-ci en avait fait plusieurs avant qu'on lui affecte un correcteur). 
						L’élève reçoit également une copie du message envoyé.
						</p></blockquote>
			
						<h3>Comment avoir de nouveaux élèves ?</h3>
						<blockquote><p>		
						Les élèves sont attribués en priorité aux correcteurs les "moins chargés". 
						Il faut donc se "décharger", soit en indiquant "a abandonné" pour les élèves 
						qui ne répondent pas aux relances, soit en augmentant le nombre maximum d’élèves 
						dans la partie "informations personnelles".<br>
						Si un correcteur accepte 4 élèves et en a déjà 3, sa charge est de 75%.<br>
						Si un correcteur accepte 10 élèves et en a déjà 6, sa charge est de 60%.<br> 
						C’est donc le deuxième correcteur qui recevra le prochain élève qui s’inscrit 
						même si, dans l’absolu, il a plus d’élèves que le premier. 
						</p></blockquote>
						<p align="right"><em><a href="#top">Revenir au début</a></em></p>
	
						<h3>Combien d'élèves vais-je avoir ?</h3>
						<blockquote><p>
						C’est vous qui indiquez combien d’élèves vous souhaitez avoir au maximum pour 
						chaque cours. Pour cela, utilisez le tableau qui se trouve en haut de la page "Mes élèves". 						
						</p></blockquote>
						<p align="right"><em><a href="#top">Revenir au début</a></em></p>
	
					<? } ?>
				
					<? if ($temo=="suivi") { ?>
						<p style="text-align:right"><a href="doc/GuideDuCorrecteur.pdf">Téléchargez le guide du correcteur au format pdf</a></p> 

						<h2>Suivi des élèves</h2>
						<h3>Que dois-je faire quand je reçois un nouvel élève ?</h3>
						<blockquote><p>
						En principe, rien. Il doit vous envoyer tout seul ses leçons qu’il vous faudra corriger au fur 
						et à mesure. Dans la pratique, il vaut mieux accueillir votre élève en lui 
						envoyant un petit mot de bienvenue.<br>
						Une fois que vous avez corrigé, vous devez, aussi régulièrement que possible, 
						mettre à jour les informations de vos élèves en vous connectant sur ce site.</p></blockquote>
					
						<h3>Comment avoir plus d'informations sur mes élèves ?</h3>
						<blockquote><p>	  	
						En cliquant sur "Mes élèves", vous arrivez à l'écran suivant :</p>
						<p><img src="bildoj/helpo2.gif" alt="Mes élèves" border="0" ></p>
						<p>
						Vous pouvez voir des informations plus détaillées sur vos élèves, 
						comme leur adresse postale complète, et  en cliquant sur un nom en bleu, vous pouvez 
						lui envoyer directement un message.<br>
						En rouge apparaissent des annotations que vous seul 
						pouvez voir. Ces informations permettent de mémoriser certaines choses, comme par exemple 
						le fait qu’un élève utilise une autre adresse électronique occasionnellement, 
						ou que l’élève vous indique qu’il part en vacances à une certaine date ou 
						n’importe quelle information que vous voulez garder sur un élève.<br>
						Pour ajouter cette information, tapez votre texte dans la zone de saisie qui se trouve dans la
						colonne de droite puis cliquez sur le bouton "valider" qui se trouve à droite du commentaire
						que vous venez d'écrire. Vos commentaires seront aussitôt datés. Vous pouvez supprimer
						un de vos commentaires en cliquant sur la petite croix qui se trouve juste à gauche du
						commentaire.
						<br>
						<b>Ces informations ne sont pas visibles de l'élève.</b><br>
						&Agrave; gauche du nom de l’élève apparaissent deux informations :<br>
						- un rond vert, jaune ou rouge contenant le nombre de jours depuis lequel votre élève 
						n’a pas envoyé de devoir. (en vert : le dernier devoir a été envoyé 
						il y a moins de 10 jours, en jaune : le dernier devoir a été envoyé entre 
						10 et 30 jours et en rouge : le dernier devoir a été envoyé 
						il y a plus de 30 jours)<br>
						- une petite image représentant le cours suivi par l'élève.<br>
						Le "contrat passé" avec l'élève consiste à ce qu’il envoie au moins 
						une leçon par semaine.<br>
						Sur cette page, vous verrez également un tableau récapitulant le nombre 
						d’élèves que vous suivez pour chaque cours et le nombre maximum d'élèves 
						que vous souhaitez pour chaque cours.<br>
						Si, pour un cours, vous avez plus d’élèves que le nombre maximum demandé, 
						ce dernier nombre apparaît en rouge (comme dans l'exemple ci-dessus).<br>
						Pour modifier le nombre d’élèves que vous souhaitez pour chaque cours, 
						cliquez sur le lien sous le tableau.</p>
						<p>
						Dans le tableau, vous pouvez également voir vos anciens élèves : 
						il vous suffit de cliquer sur l'onglet "anciens élèves". Dans cette liste, 
						vous verrez ceux qui ont fini et ceux qui ont abandonné le cours. Pour récupérer 
						un élève qui avait abandonné et qui souhaite reprendre le cours, 
						c’est très simple : il suffit de cliquer sur le bouton "Récupérer l'élève" 
						qui se trouve dans la ligne du tableau se rapportant à cet élève :<br>
						<img src="bildoj/helpo1.gif" alt="Reprendre un eleve" border="0" >
						</p></blockquote>
						<p align="right"><em><a href="#top">Revenir au début</a></em></p>
		
						<h3>Comment mettre à jour les informations concernant mes élèves ?</h3>
						<blockquote><p>	  	
						<img src="bildoj/helpo6.jpg" alt="Mettre à jour les informations" border="0" align="right">
						Sur la page présentée ci-dessus, il vous suffit d'ouvrir le menu déroulant de 
						l’élève dont vous avez corrigé la leçon (en cliquant sur le triangle 
						pointé vers le bas à droite du menu déroulant) et sélectionner la leçon 
						que vous avez corrigée. Puis validez vos modifications en cliquant le bouton "Envoyer" 
						se trouvant à côté du nom de la leçon que vous avez modifiée.
						</p></blockquote>
						
						<h4>cas des élèves du DLEK et de Gerda :</h4>
						<blockquote><p>Normalement, comme les élèves utilisent les pages du site pour envoyer leurs devoirs, 
						les données concernant le dernier cours sont automatiquement enregistrées lors du 
						passage de l’élève. Vous n'aurez donc rien à mettre à jour dans ce cas.<br>
						<i>Remarque</i> : vérifiez cependant que cela est bien le cas, car il se peut que certains 
						élèves fassent leurs devoirs en recopiant le texte directement dans leur message.
						</p></blockquote>				
						<p align="right"><em><a href="#top">Revenir au début</a></em></p>
				
						<h3>Que faire quand un élève a terminé ?</h3>
						<blockquote><p>	  	
						<p><strong>Quand un élève a terminé le cours</strong> : indiquez-le en choisissant "A fini" 
						dans ce menu déroulant. L’élève recevra alors une 
						<a href="doc/diplome.pdf"> attestation de fin de cours</a> et un exemplaire des magazines 
						des associations Espéranto-Jeunes et Espéranto-France. 
						(ceci ne concerne que les élèves du DLEK et de ikurso seulement).</p>
						<p><strong>Quand un élève a abandonné</strong> : indiquez-le en choisissant 
						"A abandonné dans ce menu déroulant.</p>
						<p colass="grava">Lorsqu’un élève a terminé (ou abandonné) le cours, ils reçoit 
						un questionnaire dans lequel il est invité à donner son avis sur le cours. 
						Vous pouvez lire les réponses à ce questionnaire dans le forum "korektantoj" 
						réservé aux correcteurs.
						</p>
						<p class="atentigo">Attention : lorsqu’un élève a terminé le cours, 
						les administrateurs lui envoient une attestation ainsi que les magazines des associations. 
						N’utilisez donc cette option que pour les élèves qui vous ont envoyé l’examen final.
						</p></blockquote>				
						<p align="right"><em><a href="#top">Revenir au début</a></em></p>
				
						<h3>Que faire si l'élève  n'envoie pas sa première leçon ?</h3>
						<blockquote><p>
						<i>(ce qui suit ne concerne que les élèves inscrits au ikurso)</i><br>
						Il est possible qu’il n'ait pas compris en quoi consiste le cours. Il peut par exemple :<br>
						- n’avoir pas téléchargé le logiciel : demandez-lui et expliquez-lui 
						alors qu’il doit télécharger le logiciel sur <a href="http://ikurso.net">
						http://ikurso.net</a>.<br>
						- n’avoir pas réussi à rentrer votre adresse électronique 
						(qu'il a reçue) : expliquez-lui qu’il faut aller dans la partie "configuration" du logiciel ikurso :<br>
						<img src="bildoj/helpo3.jpg" alt="configuration ikurso" border="0"><br>
						et qu'ensuite, il doit cocher la case "j'ai un correcteur" et indiquer votre nom et votre adresse 
						électronique dans les champs spécifiques :<br>
						<img src="bildoj/helpo4.gif" alt="configuration ikurso" border="0"><br>
						</p></blockquote>
						<p align="right"><em><a href="#top">Revenir au début</a></em></p>
					
						<h3>Mon élève m’a envoyé une leçon, mais le courrier électronique était vide</h3>
						<blockquote><p>
						<em>(ce qui suit concerne les élèves du Kurso de Esperanto)</em><br>
						Une fois que le logiciel a été configuré et que la page d’exercices a été remplie, 
						l’élève doit cliquer sur l’icône en forme d’enveloppe en bas à droite 
						du logiciel :</p>
						<img src="bildoj/helpo5.gif" alt="envoi leçon" border="0">
						<p>
						L’icône représentant la disquette sert à sauvegarder son travail sur son 
						ordinateur et l’icône représentant la porte permet de sortir du logiciel.<br>
						En cliquant sur l’enveloppe, le programme ouvre un courrier à votre nom comme destinataire.
						L'élève doit ensuite cliquer sur "CTRL + v" (touche en bas à gauche 
						de votre clavier, ainsi que la lettre 'v' simultanément), ceci a pour effet de remplir 
						le courrier avec le contenu de l'exercice.<br>
						Il lui suffit ensuite d’envoyer son courrier électronique comme d'habitude.<br>
						Expliquez à votre élève la marche à suivre et essayez de voir 
						ensemble la cause du problème.
						</p></blockquote>
						
						<h3>Que faire si votre élève n'a pas envoyé sa leçon après 
						plus d’une semaine ?</h3>
						<blockquote><p>		
						Il est probable qu’à cause d’un programme télévisé particulièrement 
						intéressant, d'une coupe de monde de football ou d’un examen à éviser, il n’ait pas 
						eu beaucoup de temps à consacrer à l'espéranto. Plus le temps passe et plus il 
						aura peur de s’y remettre et surtout peur de vous avouer qu’il veut arrêter. C'est pour cela 
						qu’il est impératif de "relancer" votre élève par différentes tactiques.<br>
						Si vous connaissez bien le cours, prenez les devants en lui expliquant que vous êtes conscient 
						de la difficulté de la leçon concernée, que s’il a besoin d'aide, il n’hésite pas
						à faire appel à vos services.<br>
						Vous pouvez jouer la "surprise" en lui expliquant que vous n'avez pas reçu sa leçon, 
						que celle-ci s'est peut-être "perdue" dans les méandres d'internet et que s’il l’a 
						toujours en mémoire sur son ordinateur, ce serait gentil de sa part de la renvoyer.<br><br>
						La "compassion" : faites-lui comprendre que vous avez plusieurs élèves à suivre 
						et que plus vite il fera ses leçons, plus vite vous pourrez aider un nouvel élève.<br>
						La "menace" : à éviter néanmoins.
						Une fois que vous avez relancé un élève, notez que vous avez fait cette 
						relance dans le champ "information sur l'élève" prévu à cet effet. Quand 
						vous retournerez sur le site, vous pourrez donc voir que vous avez relancé l'élève,
						la date de cette relance et ainsi, à la deuxième relance, vous pouvez lui rappeler 
						que vous n'avez pas eu de ses nouvelles "malgré" une relance précédente.<br>
						En effectuant une relance toutes les semaines (ou tous les 10 jours), vous pouvez essayer 2 ou 3 
						relances avant d'abandonner l’élève.<br>
						Vos élèves sont comme vos enfants, s’ils se perdent, c’est à vous d'aller 
						les chercher...<br>
						Vous trouverez quelques exemples de relance dans le forum réservé aux correcteurs. 
						</p></blockquote>
						<p align="right"><em><a href="#top">Revenir au début</a></em></p>
										
						<h3>Que faire si un élève donne plus de signe de vie après plusieurs relances ?</h3>
						<blockquote><p>		
						Quand nous disons que vos élèves sont comme vos enfants, c’était une image. 
						En attendant après un élève qui ne répond pas, vous empêchez 
						d’autres élèves d’avoir un correcteur. Il faudra donc penser à "sacrifier" 
						l’élève muet en sélectionnant "a abandonné" tout en bas de la liste 
						des leçons. Quand vous aurez fait cela, l’élève disparaîtra de votre 
						liste, soyez donc extrêmement vigilant.
						</p></blockquote>
						<p align="right"><em><a href="#top">Revenir au début</a></em></p>
				
					<? } ?>
			
					<? if ($temo=="exemples") { ?>
						<p style="text-align:right"><a href="doc/GuideDuCorrecteur.pdf">Téléchargez le guide du correcteur au format pdf</a></p> 

							<h3>Quelles informations reçoivent les élèves lors de leur inscription ?</h3>
							<blockquote><p>
							Voici les différents messages qui sont envoyés aux élèves lorsqu’ils s’inscrivent. 
							Dans ces pages tout ce qui est entre "##" est remplacé par les informations les concernant.
							</p></blockquote>
							<blockquote><p>
							<ul>
								<li><a href="doc/mails/aligxiKEFR.html" onClick="window.open('doc/mails/aligxiKEFR.html','ikurso','top=150,left=150,width=600,height=500');return false;">
								message envoyé après une inscription pour le Kurso de Esperanto</a></li>
								<li><a href="doc/mails/aligxiCGFR.html" onClick="window.open('doc/mails/aligxiCGFR.html','ikurso','top=150,left=150,width=600,height=500');return false;">
								message envoyé après une inscription pour le Cours en dix leçons</a></li>
								<li><a href="doc/mails/aligxiGRFR.html" onClick="window.open('doc/mails/aligxiGRFR.html','ikurso','top=150,left=150,width=600,height=500');return false;">
								message envoyé après une inscription pour Gerda malaperis</a></li>
								<li><a href="doc/mails/doniStuKEFR.html" onClick="window.open('doc/mails/doniStuKEFR.html','ikurso','top=150,left=150,width=600,height=500');return false;">
								message envoyé à l'élève du Kurso de Esperanto pour lui indiquer qu’il a reçu un correcteur</a></li>
								<li><a href="doc/mails/doniStuCGFR.html" onClick="window.open('doc/mails/doniStuCGFR.html','ikurso','top=150,left=150,width=600,height=500');return false;">
								message envoyé à l'élève du Cours en dix leçons pour lui indiquer qu’il a reçu un correcteur</a></li>
								<li><a href="doc/mails/doniStuGRFR.html" onClick="window.open('doc/mails/doniStuGRFR.html','ikurso','top=150,left=150,width=600,height=500');return false;">
								message envoyé à l'élève de Gerda malaperis pour lui indiquer qu’il a reçu un correcteur</a></li>
							</ul>
							</p></blockquote>
							<p align="right"><em><a href="#top">Revenir au début</a></em></p>
						
						<h3>Qu’écrire à l'élève pour l’accueillir, le relancer... ?</h3>
						<blockquote><p>
						Vous trouverez différents exemples de lettres types dans le forum réservé aux correcteurs.
						</p></blockquote>
					<? } ?>
			
					<? if ($temo=="utilisation") { ?>
		
						<h2>Mieux utiliser les cours et ce site</h2>
						<p style="text-align:right"><a href="doc/GuideDuCorrecteur.pdf">Téléchargez le guide du correcteur au format pdf</a></p> 
			
						<h3>J’ai des problèmes pour envoyer les messages avec les accents.</h3>
						<blockquote><p>		
						Vous trouverez des explications utiles sur 
						<a href="http://ikurso.esperanto-jeunes.org/helpo.php#courriel">cette page</a>.<br>
						Pour l’envoi de vos messages, si vous n’avez pas la possibilité de taper vous-même 
						les lettres accentuées, vous pourrez utiliser la méthode en -x ou en -h.</p>
						</p></blockquote>
						<blockquote><p>		
						Si un de vos élèves ne parvient pas à visualiser correctement 
						les messages avec les accents ou à répondre à de tels messages,
						conseillez-lui de lire tout d’abord les pages d'aide de ce site. En dernier recours,
						il pourra indiquer dans ses données personnelles qu’il souhaite que les 
						exercices soient envoyés en utilisant la méthode en -x.
						</p></blockquote>
					
							
						<h3>Comment se connecter rapidement au site ikurso sans avoir besoin de taper son mot de 
						passe à chaque fois ?</h3>
						<blockquote><p>		
						Une fois arrivé sur le site :
						<i>si vous utilisez Internet Explorer</i><br>
						-	dans le menu "favoris" cliquez sur "ajouter aux favoris"<br>
						-	on vous demandera de rentrer un nom pour ce favori, valider le nom que vous voulez ou le 
						nom par défaut ikurso en cliquant sur <OK><br>
						-	dans le menu "favoris" cliquez maintenant sur "organiser les favoris".<br>
						Retrouvez le favori que vous venez de créer cliquer dessus avec le bouton droit 
						de la souris et selectionnez "Proprietés"<br> 
						-	sans la zone de l’adresse, modifiez la valeur http://ikurso.esperanto-jeunes.org 
						par http://ikurso.esperanto-jeunes.org/eniri.php?enirnomo=identifiant&pasvorto=mot_de_passe   
						en mettant à la place de "identifiant" votre identifiant et à la place de "mot_de_passe", 
						votre propre mot de passe. Ainsi, au lieu de retaper votre identifiant / mot de passe à 
						chaque fois, il vous suffira de sélectionner ce favori dans la liste de vos favoris 
						pour arriver directement sur votre page. <br><br>
						<i>si vous utilisez Mozilla :</i><br>
						-	utilisez la fonction "Classer cette page" du menu "marque-page", et dans la zone "adresse", 
						modifiez l’URL comme précisé ci-dessus.
						</p></blockquote>
			
						<h3>J’ai un problème qui n'est pas expliqué dans ce guide ?</h3>
						<blockquote><p>				 
						Dans ce cas, <a href="http://ikurso.esperanto-jeunes.org/reago.php">n’hésitez pas à nous écrire !</a>
						</p></blockquote>	
					<? } ?>
				</div>
		</div>
	</div>
<? include "pagxpiedo.inc.php"; ?>
