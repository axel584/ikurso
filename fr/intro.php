<?php
$vojo="../";
include "../util.php";
$subjekto="intro.php";
$temo=isset($_GET["temo"])?$_GET["temo"]:"";
if ($temo==""){$temo="eo";}
$pagxtitolo="Introduction";
include "../pagxkapo.inc.php";
?>
		<div id="enhavo">
			<ul id="tabnav">
				<li <?if ($temo=="eo") {echo " class='aktiva'";}?>><a href="intro.php?temo=eo">L'espéranto</a></li>
				<li <?if ($temo=="kursoj") {echo " class='aktiva'";}?>><a href="intro.php?temo=kursoj">Les cours</a></li>
				<li <?if ($temo=="enskribo") {echo " class='aktiva'";}?>><a href="intro.php?temo=enskribo">Comment s’inscrire</a></li>
			</ul>
			<div id="kadro">
			<div class="rakonto">
			<?php if ($temo=="eo") { ?>
				<h3>L’espéranto, qu’est-ce que c’est ?</h3>
				<p>
				L’espéranto, la Langue Internationale, est une langue destinée à
				faciliter la communication entre des personnes de différentes
				cultures. Son auteur, le docteur L. L. Zamenhof (1859-1917) publia sa «&nbsp;Lingvo
				Internacia&nbsp;» en 1887 sous le pseudonyme de «&nbsp;Docteur Esperanto&nbsp;». On
				estime que l’espéranto est maintenant parlé par au moins deux millions
				de personnes dans plus de 100 pays. Il y a des milliers de livres et
				plus de 100 revues différentes paraissent régulièrement. Mais
				qu’est-ce qui en fait une langue plus internationale que le français,
				l’anglais ou le russe&nbsp;?
				</p>
				<p>
				L’espéranto est une langue construite (le terme «&nbsp;artificiel&nbsp;» est plutôt
				impropre), particulièrement destinée à un usage international /
				interculturel, afin que ceux qui l’utilisent puissent dialoguer sur un
				pied d’égalité, dans la mesure où aucun n’utilise sa langue natale. Avec
				les langues nationales, un individu normal n’est pas capable de
				s’exprimer aussi bien dans une langue étrangère que celui dont c’est la
				langue maternelle, à moins d’être expert. Alors que grâce à sa
				construction simple, logique et régulière, chacun peut apprendre
				l’espéranto très rapidement.
				</p>
		
				<h3>Une langue vivante</h3>
				<p>
				L’espéranto n’existe que depuis une centaine d’années&nbsp;; il est donc la
				plus moderne des langues vivantes. Introduit d’abord en Europe,
				l’espéranto sert aujourd’hui aux échanges à l’échelle mondiale. En
				plus, il constitue une préparation idéale à l’étude d’une seconde langue
				en général et vous fait mieux apprécier le sens exact des mots de votre
				propre langue.
				</p>
				<p>
				L’espéranto s’utilise comme n’importe quelle autre langue. Néanmoins,
				il est plus facile à apprendre qu’une langue nationale. Même ceux qui
				n’arrivent pas à se souvenir d’un mot dans une langue qu’ils ont
				étudiée plusieurs années à l’école ou à l’université n’auront besoin
				que de quelques mois d’étude intensive pour parler couramment
				l’espéranto. L’espéranto est aussi plus utile qu’une langue nationale
				si votre but en apprenant une langue est de connaître des gens un peu
				partout dans le monde, puisque presque tout le monde l’a appris pour
				cette même raison.
				</p>
			<?php } else if ($temo=="kursoj") { ?>
				<h3>Les cours</h3>
				<p>
				Sur ce site, vous avez accès à trois cours différents, dont deux pour débutants.
				</p>
				<ul>
					<li>le <a href="#dlek">cours en dix leçons</a> : cours pour débutants sous forme de pages web</li>
					<li>le <a href="#kurso">Kurso de Esperanto</a>, cours en treize leçons, basé sur un logiciel multimédia</li>
					<li><a href="#gerda">Gerda malaperis</a>, cours de perfectionnement basé sur un petit roman en 25 chapitres</li>
				</ul> 
				<p>
				Ces cours s’utilisent en auto-apprentissage mais cela ne signifie pas que vous serez 
				seul durant votre étude. Vous pouvez être aidé par un correcteur qui 
				corrigera vos exercices et pourra répondre à vos questions. Les échanges 
				avec le correcteur se font par courriel.
				</p>
				
				<h4 id="dlek"><a href="cge/intro.php?temo=intro">
				Cours en dix leçons (DLEK: Dek Leciona Kurso)</a></h4>
				<p>
				Ce cours est basé sur le <em>Cours Gratuit par Correspondance en 10 leçons</em>
				de l’ESK (Societé québécoise d’espéranto / Esperanto-Societo Kebekia)
				qui lui-même est tiré d’un cours par correspondance très populaire en
				Angleterre. Ce cours présente les bases de l’espéranto sous forme de pages alternant 
				explications sur la langue (vocabulaire, grammaire…) et exercices. À la fin de chaque 
				leçon un formulaire vous permet d’envoyer vos exercices à votre tuteur 
				(si vous vous êtes inscrit à notre service de correction).</p>
				<p>
				Quand vous aurez terminé les dix leçons, vous recevrez une attestation de fin de cours.</p>
				<p>
				L’inscription à ce cours se fait à la fin de la <a href="cge/lec01.php">première leçon</a>.
				</p>
				
				<h4 id="kurso">Kurso de Esperanto</h4>
				<p>Pour suivre ce cours, vous devez d’abord <a href="http://www.cursodeesperanto.com.br">
				télécharger le logiciel <em>Kurso de Esperanto</em></a>. Le contenu de ce cours
				est à sensiblement le même que celui du cours en dix leçons et les devoirs 
				sont souvent quasiment identiques. Cependant l’environnement multimédia du cours 
				permet de proposer plus d’exercices d’entraînement et notamment des exercices qui vous 
				permettront d’écouter puis de vous enregistrer.</p>
				<p>
				Tout comme pour le cours en dix leçons, vous pourrez bénéficier d’un 
				service de correction et vous recevrez une attestation quand vous aurez terminé le cours.
				Le logiciel existe actuellement pour Windows et pour Linux. Si vous n’avez pas la possibilité 
				de le télécharger, vous pourrez le trouver sur le 
				<a href="http://esperanto-jeunes.org/article.php3?id_article=102">CD-rom <i>lernu!</i></a> que 
				vous pourrez commander à Espéranto-Jeunes.</p>
				
				<h4 id="gerda"><a href="gerda/index.php">
				Gerda malaperis</a></h4>
				<p>
				Ce cours s’adresse à ceux qui connaissent déjà les bases de l’espéranto comme, par exemple, ceux 
				qui ont suivi au moins le <a href="#dlek">Cours en dix leçons</a> ou le <a href="#ikurso">
				Kurso de Esperanto.</a></p>
				<p><strong>Gerda malaperis</strong> est un roman de Claude Piron spécifiquement destiné à 
				vous apprendre progressivement à maîtriser l’espéranto parlé à partir d’une histoire captivante.</p>
				<p>
				Le cours comporte est divisé en 25 chapitres, chacun constitué d’un extrait du roman, d’une série 
				de questions et d’un ou plusieurs exercices. Si vous avez décidé de suivre le cours, il vous est 
				conseillé de demander l’assistance d’un tuteur, mais ce n’est pas obligatoire. Celui-ci corrigera
				vos exercices et répondra succinctement à vos questions que le cours pourrait susciter. 
				<p>En complément du cours, nous vous proposons de lire les récits du recueil 
				<em><a href="gerda/lasu00.php">Lasu min paroli plu!</a></em> du même auteur.</p>
			<?php } elseif ($temo=="enskribo") { ?>
				<h3>Comment s’inscrire</h3>
				<p>
				Les cours d’espéranto que nous proposons sur ce site peuvent être suivis avec l’aide d’un tuteur
				qui corrige les exercices de l’élève et le suit tout au long de son apprentissage.
				Si vous souhaitez bénéficier de ce service, vous devez au préalable vous inscrire en indiquant au 
				minimum une adresse électronique valide car les échanges entre l’élève et le correcteur se font par
				courriel. En aucun cas, nous ne pourrons assurer de correction autrement que par ce moyen. Il est
				donc exclu de recourir à l’envoi de courrier postal pour le suivi de ce cours.</p>
				<p>
				Nous attirons votre attention sur le fait que la gratuité de ce cours ne veut pas dire qu’il ne coûte 
				rien : le suivi des élèves demande du temps et de l’attention de la part des correcteurs. Aussi
				nous demandons aux élèves qui s’inscrivent de s’engager à suivre réellement régulièrement le cours 
				et à prévenir leur correcteur en cas de retard ou d’empêchement à poursuivre le cours.<br>
				</p>
				<p>
				L’inscription au <a href="cge/intro.php?temo=intro">Cours en dix leçons</a> et au cours 
				<a href="gerda/">Gerda malaperis</a> se fait à la fin de la première leçon.<br>
				L’inscription pour recevoir un correcteur pour suivre le <em>Kurso de Esperanto</em> se fait à l’aide de
				<a href="../aligxi.php">ce formulaire</a>. 
				</p>
			
			<?php } elseif ($temo=="poste") { ?>
		
				<h3>Gardez le contact</h3>
				<p>
				Voici les adresses des associations d’espéranto nationales dans quelques
				pays de langue française ainsi que celle de l’association mondiale. 
				</p>
				<p>à compléter...</p>
		</div>
		<?php } ?>
		</div>
	</div>
<?php include "../pagxpiedo.inc.php"; ?>
