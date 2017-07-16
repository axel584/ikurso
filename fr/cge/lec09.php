<?php
$titolo="9 (na&#365;)";
$leciono = 9;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";

?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
				
		<section id="leciono-enhavo">

		<?php 
		getTitoloLecionero('CG',9,$section);
		displayWarningSiLecioneroManquante($persono_id,'CG',9,$section);

		if ($section=="1") {
		?>

			<p class="parto">
			Une des meilleures façons d’apprendre une langue, c’est en la chantant.
			Vous n’aurez sûrement pas de difficulté à reconnaître la mélodie de
			<i>Frère Jacques</i> dans le texte suivant&nbsp;:
			</p>

			<p>
			     Frato Jako, frato Jako,<br/>
			     Levu vin, levu vin.<br/>
			     Jen la sonorilo, jen la sonorilo;<br/>
			     Bim bam bom, bim bam bom.<br/>
			</p>
			<p>
			     Frato Jako, frato Jako,<br/>
			     Lavu vin, lavu vin.<br/>
			     Metu vian veston, metu vian veston;<br/>
			     Bim bam bom, bim bam bom.<br/>
			</p>
			<p>
			     Frato Jako, frato Jako,<br/>
			     Kuru do, kuru do<br/>
			     Tuj al la lernejo, tuj al la lernejo;<br/>
			     Bim bam bom, bim bam bom.<br/>
			</p>

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					<?php if ($persono) { ?>
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					<?php } ?>
				</div>
				<div class="vortlisto row">
					<p class="col s6 m4"><span class="eo">jen</span> : voici, voilà</p>
					<p class="col s6 m4"><span class="eo">sonorilo</span> : cloche</p>
					<p class="col s6 m4"><span class="eo">do</span> : donc</p>
					<p class="col s6 m4"><span class="eo">tuj</span> : tout de suite</p>
					<p class="col s6 m4"><span class="eo">vesto</span> : vêtement</p>
				</div>
			</fieldset>

			<p class="parto">
			Une autre version de <i>Frère Jacques</i> est celle élaborée par un groupe
			de musiciens et chanteurs espérantistes du Brésil&nbsp;:
			</p>
			
			<p>
			     Bonan tagon ! Bonan tagon !<br/>
			     Mi deziras al vi !<br/>
			     Havu bonan tagon ! Havu bonan tagon,<br/>
			     Vi kaj la famili’ !<br/>
			</p>
			<p>
			     Nun sidiĝu ! Nun sidiĝu,<br/>
			     Mia kara fraŭlin’ !<br/>
			     Diru nun belsone : ĉu vi fartas bone ?<br/>
			     Belulin’, kisu min !<br/>
			</p>
			<p>
			     Ĝis revido ! Ĝis revido,<br/>
			     Mia kara fraŭlin’ !<br/>
			     Ĝis alia fojo ! Estos granda ĝojo<br/>
			     Vidi vin, kisi vin !<br/>
			</p>
			
			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					<?php if ($persono) { ?>
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					<?php } ?>
				</div>
				<div class="vortlisto row">
					<p class="col s6 m6"><span class="eo">belsone</span> : d’un beau son</p>
					<p class="col s6 m6"><span class="eo">farti</span> : se porter</p>
					<p class="col s6 m6"><span class="eo">ĝojo</span> : joie</p>
					<p class="col s6 m6"><span class="eo">ĝis revido</span> : au revoir</p>
					<p class="col s6 m6"><span class="eo">fraŭlo</span> : homme célibataire</p>
					<p class="col s6 m6"><span class="eo">fraŭlino</span> : demoiselle</p>
				</div>
			</fieldset>

		<?php 
		} // fin section
		if ($section=="2") {
		?>

			<p class="parto">
			Vous avez remarqué l’élision du <b>-o</b> final dans certains mots
			(famili’, fraŭlin’), ce qui se fait couramment en poésie avec la
			terminaison des noms et le <b>a</b> de l’article <b>la</b>&nbsp;:
			</p>
			<p class="eo">Esperanto estas la espero de l’ mond’.</p>
			
			<p class="parto">L’élision ne change pas la place de l’accent tonique :</p>
			<p><span class="eo">fraŭ-<u>li</u>-no</span> devient <span class="eo">fraŭ-<u>lin’</u></span></p>


		<?php 
		} // fin section
		if ($section=="3") {
		?>
		
			<p class="parto">
			Dans la 3<sup>e</sup> leçon, nous avons parlé des <b>adverbes</b> et nous avons
			expliqué que ceux qui sont dérivés d’autres mots se terminent par
			<b>-e</b>. Mais beaucoup d’adverbes ne sont pas des dérivés et appartiennent
			au groupe des mots dits primaires. Voici quelques adverbes se terminant
			en <b>-aŭ</b> parmi les plus usités en espéranto.
			</p>
			
			<?php if ($persono) { ?>
			<p class="eo eta">Les adverbes présentés ci-dessous seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
			<?php } ?>

			<div class="row">
				<p class="col s12"><b>almenaŭ</b> : au moins</p>
				<p class="col s11 offset-s1"><span class="eo">Donu al mi almenaŭ du minutojn.</span></p>
				<p class="col s12"><b>ankaŭ</b> : aussi, également (précède le mot sur lequel on insiste)</p>
				<p class="col s11 offset-s1"><span class="eo">Ankaŭ Johano lavas sin.</span> (Il n’y a pas que Marie qui se lave)</p>
				<p class="col s11 offset-s1"><span class="eo">Johano ankaŭ lavas sin.</span> (Non seulement il se peigne, mais il se lave également)</p>
				<p class="col s11 offset-s1"><span class="eo">Johano lavas ankaŭ sin.</span> (Jean ne lave pas seulement d’autres personnes)</p>
				<p class="col s12"><b>ankoraŭ</b> : encore</p>
				<p class="col s11 offset-s1"><span class="eo">Mi ankoraŭ ne vidis lin. Ĉu li ankoraŭ estas tie?</span> (Je ne l'ai pas encore vu. Est-ce qu'il est encore ici ?)</p>
				<p class="col s12"><b>apenaŭ</b> : à peine</p>
				<p class="col s11 offset-s1"><span class="eo">Li dormis apenaŭ kvin minutojn.</span></p>
				<p class="col s12"><b>baldaŭ</b> : bientôt</p>
				<p class="col s11 offset-s1"><span class="eo">Venu baldaŭ, mi petas.</span></p>
				<p class="col s12"><b>hieraŭ</b> : hier</p>
				<p class="col s11 offset-s1"><span class="eo">Mi renkontis lin hieraŭ (antaŭhieraŭ).</span></p>
				<p class="col s12"><b>hodiaŭ</b> : aujourd’hui</p>
				<p class="col s11 offset-s1"><span class="eo">Hodiaŭ estas bela tago.</span></p>
				<p class="col s12"><b>morgaŭ</b> : demain</p>
				<p class="col s11 offset-s1"><span class="eo">Kial plenumi</span> (accomplir) <span class="eo">morgaŭ tion, kion oni povas fari hodiaŭ ?</span></p>
				<p class="col s12"><b>preskaŭ</b> : presque</p>
				<p class="col s11 offset-s1"><span class="eo">Li preskaŭ falis.</span></p>
			</div>

		<?php 
		} // fin section
		if ($section=="4") {
		?>

			<p class="parto">Voici cinq autres mots très fréquents terminés par <b>-aŭ</b>&nbsp;:</p>
		
			<?php if ($persono) { ?>
			<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
			<?php } ?>

			<div class="row">
				<p class="col s12"><b>ambaŭ</b> : tous les deux (adjectif ou pronom numéral)</p>
				<p class="col s11 offset-s1"><span class="eo">Ili ambaŭ estas en la ĝardeno.</span></p>
				<p class="col s12"><b>anstataŭ</b> : au lieu de (prép.)</p>
				<p class="col s11 offset-s1"><span class="eo">Ŝi dormis anstataŭ legi.</span></p>
				<p class="col s12"><b>antaŭ</b> : avant, devant (prép.)</p>
				<p class="col s11 offset-s1"><span class="eo">Antaŭ ĉio oni devas peti informojn.<br>La monumento staras antaŭ la muzeo.</span></p>
				<p class="col s12"><b>ĉirkaŭ</b> : autour de, environ (prép.)</p>
				<p class="col s11 offset-s1"><span class="eo">Ili vojaĝis ĉirkaŭ la terglobo.<br/>Venu ĉirkaŭ la dua (horo).</span></p>
				<p class="col s12"><b>kontraŭ</b> : contre (prép.) </p>
				<p class="col s11 offset-s1"><span class="eo">Ni batalas kontraŭ la inflacio.<br/>Kontraŭ doloro helpas bonhumoro.</span></p>
			</div>

			<p class="rimarko"><strong>REMARQUE</strong> : 
			Pour tous ces mots en <b>aŭ</b> vous devez faire
			très attention à placer correctement l’accent tonique. Les
			francophones ont souvent la mauvaise habitude de prononcer
			<b>tchir-<u>ka</u>-ou</b> alors que <b>kaŭ</b> ne forme qu’une seule syllabe. La
			prononciation exacte est donc :</p>
			
			<div class="row">
				<p class="col s2"><span class="eo">ĉirkaŭ</span></p><p class="col s10">(<u>tchir</u>-kaw)</p>
				<p class="col s2"><span class="eo">morgaŭ</span></p><p class="col s10">(<u>mor</u>-gaw)</p>
				<p class="col s2"><span class="eo">hieraŭ</span></p><p class="col s10">(hi-<u>è</u>-raw)</p>
				<p class="col s2"><span class="eo">hodiaŭ</span></p><p class="col s10">(ho-<u>di</u>-aw)</p>
			</div>

		<?php 
		} // fin section
		if ($section=="5") {
		?>

			<p class="parto">Parmi les mots invariables fréquemment employés, on trouve aussi&nbsp;:</p>
		
			<div class="row">
				<p class="col s12"><b>ĉi</b> : indique la proximité </p>
				<p class="col s5 offset-s1"><span class="eo">ĉi-tio</span> : cette chose-ci</p>
				<p class="col s6"><span class="eo">ĉi-tie</span> : ici</p>
				<p class="col s5 offset-s1"><span class="eo">ĉio-ĉi</span> : tout ceci</p>
				<p class="col s6"><span class="eo">ĉi-matene</span> : ce matin</p>
				<p class="col s11 offset-s1"><span class="eo">ĉi-foje</span> : cette fois-ci</p>
				<p class="col s11 offset-s1"><span class="eo">tiu knabo</span> : ce garçon(-là)</p>
				<p class="col s11 offset-s1"><span class="eo">tiu ĉi knabo, ĉi tiu knabo</span> : ce garçon-ci</p>
				<p class="col s12"><b>ajn</b> : exprime l’indétermination généralisée</p>
				<p class="col s5 offset-s1"><span class="eo">iu ajn</span> : n’importe qui</p>
				<p class="col s6"><span class="eo">io ajn</span> : n’importe quoi</p>
				<p class="col s5 offset-s1"><span class="eo">ie ajn</span> : n’importe où</p>
				<p class="col s6"><span class="eo">iam ajn</span> : n’importe quand</p>
				<p class="col s11 offset-s1"><span class="eo">iru ien!</span> : allez (allez-vous en) quelque part&nbsp;!</p>
				<p class="col s11 offset-s1"><span class="eo">iru ien ajn!</span> : allez-vous en n’importe où&nbsp;!</p>
				<p class="col s11 offset-s1"><span class="eo">iru, kien vi volas!</span> : allez où vous voulez&nbsp;!</p>
				<p class="col s11 offset-s1"><span class="eo">iru, kien ajn vi volas!</span> : allez (n’importe où) où vous voulez !</p>
			</div>

		<?php 
		} // fin section
		if ($section=="6") {
		?>
			<div class="row">
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/pv9-1.mp3" class="sm2_button"></a></p>
				<p class="col s11"><span class="eo">Kiam kato promenas, la musoj festenas.</span></p>
				<p class="col s11 offset-s1">Quand le chat n’est pas là, les souris dansent. (<i>festoient</i>)</p>
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/pv9-2.mp3" class="sm2_button"></a></p>
				<p class="col s11"><span class="eo">Kion oni volas, tion oni povas.</span></p>
				<p class="col s11 offset-s1">Quand on veut, on peut. (<i>ce qu’on veut, on le peut</i>)</p>
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/pv9-3.mp3" class="sm2_button"></a></p>
				<p class="col s11"><span class="eo">Kia patro, tia filo.</span></p>
				<p class="col s11 offset-s1">Tel père, tel fils.</p>
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/pv9-4.mp3" class="sm2_button"></a></p>
				<p class="col s11"><span class="eo">Amiko de amiko estas ankaŭ amiko.</span></p>
				<p class="col s11 offset-s1">L’ami de mon ami est mon ami. (<i>un ami d’ami est aussi un ami</i>)</p>
				<p class="col s1"><a href="<?php echo $vojo;?>fr/son/pv9-5.mp3" class="sm2_button"></a></p>
				<p class="col s11"><span class="eo">Se mi scius, kie mi falos, mi tien metus tapiŝon.</span> (= <i>tapis</i>)</p>
				<p class="col s11 offset-s1"><i>Devinez vous-même...</i></p>
			</div>

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					<?php if ($persono) { ?>
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					<?php } ?>
				</div>
				<div class="vortlisto row">
					<p class="col s12 m6"><span class="eo">muso</span> : souris</p>
					<p class="col s12 m6"><span class="eo">tapiŝo</span> : tapis</p>
					<p class="col s12 m6"><span class="eo">fali</span> : tomber</p>
					<p class="col s12 m6"><span class="eo">festeni</span> : festoyer</p>
				</div>
			</fieldset>

		<?php 
		} // fin section
		if ($section=="7") {
		?>

			<p>
			Il existe une centaine de publications en espéranto. Celles-ci sont
			éditées par des maisons indépendantes, par des associations
			nationales ou internationales, et elles se font l’écho du mouvement
			espérantiste dans le monde.
			</p>
			<p>Page suivante, nous vous invitons à lire un extrait d’article, que vous traduirez à titre exercice.</p>

		<?php 
		} // fin section
		if ($section=="8") {
		?>
	
			<?php 
				getEkzercon(37,$persono_id);
			?>
			
			<p class="noto">NOTE : <span class="eo">Ŝerbruko</span> : Sherbrooke (ville du Québec)</p>
			

			<fieldset class="vortoj">
				<legend>VOCABULAIRE À RETENIR</legend>
				<div>
					<?php if ($persono) { ?>
					<p class="eo eta">Ces mots seront automatiquement ajoutés à votre vocabulaire à réviser lorsque vous aurez terminé d'étudier cette section. Le nombre de mots à réviser sera indiqué sur le bouton affiché au-dessus du sommaire.</p>
					<?php } ?>
				</div>
				<div class="vortlisto row">
					<p class="col s12 m6"><span class="eo">gvidi</span> : guider, diriger</p>
					<p class="col s12 m6"><span class="eo">Brazilo</span> : Brésil</p>
					<p class="col s12 m6"><span class="eo">Brazilio</span> : Brasilia</p>
					<p class="col s12 m6"><span class="eo">senti</span> : sentir, ressentir</p>
					<p class="col s12 m6"><span class="eo">kresko</span> : croissance, accroissement</p>
					<p class="col s12 m6"><span class="eo">samideano</span> : partisan (ici : espérantiste)</p>
					<p class="col s12 m6"><span class="eo">gastigi</span> : recevoir (des invités), offrir l’hospitalité</p>
					<p class="col s12 m6"><span class="eo">kutima</span> : habituel</p>
					<p class="col s12 m6"><span class="eo">Usono</span> : États-Unis</p>
					<p class="col s12 m6"><span class="eo">plie</span> : de plus</p>
					<p class="col s12 m6"><span class="eo">aranĝo</span> : manifestation</p>
					<p class="col s12 m6"><span class="eo">asocio</span> : association</p>
					<p class="col s12 m6"><span class="eo">najbaro</span> : voisin</p>
					<p class="col s12 m6"><span class="eo">rubriko</span> : rubrique</p>
					<p class="col s12 m6"><span class="eo">numero</span> : numéro (d’une revue)</p>
					<p class="col s12 m6"><span class="eo">bulteno</span> : bulletin</p>
					<p class="col s12 m6"><span class="eo">organizi</span> : organiser</p>
					<p class="col s12 m6"><span class="eo">vidpunkto</span> : point de vue</p>
					<p class="col s12 m6"><span class="eo">Pasko</span> : Pâques</p>
					<p class="col s12 m6"><span class="eo">tradicio</span> : tradition</p>
					<p class="col s12 m6"><span class="eo">supozi</span> : supposer</p>
					<p class="col s12 m6"><span class="eo">Flandro</span> : Flandres </p>
					<p class="col s12 m6"><span class="eo">Nederlando</span> : Pays-Bas</p>
				</div>
			</fieldset>

		<?php 
		} // fin section
		if ($section=="9") {
		?>
			<p>
			Vous venez de franchir la dernière étape de votre apprentissage. La dixième et dernière leçon consiste en un examen qui va vous permettre d'évaluer l'ensemble de vos connaissances. Les questions sont faciles, il n'y a pas de piège. Vous connaissez déjà toutes les réponses, cet examen a pour seul objectif de vous en convaincre.
			</p>
			
			<p>
			Que de chemin parcouru depuis le début de ce cours&nbsp;! Nous espérons que vous aurez pris autant plaisir à le suivre que nous en avons pris à l'élaborer. Mais ce cours n'est pas statique, il évolue en fonction de vos retours. N'hésitez pas à nous contacter si vous avez des remarques, des suggestions ou des envies que nous pourrons réaliser pour les générations futures d'élèves.
			</p>
			
			<p>
			Faites connaître ce cours autour de vous, c'est la meilleure façon qu'il continue à vivre.
			</p>
		
		<?php 
			recapitulatif_lecon_avant_envoi('CG',$leciono,$persono_id);
		} // fin derniere section
		?>	
		</section>

		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('CG',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('CG',$leciono,$section); ?>
				<?php getLecioneroVenonta('CG',$leciono,$section); ?>
			</div>
		</section>

	</article>
			
	<aside class="col s12 m10 l3 offset-m1 push-l1">
								
		<?php
			// lien vers la révision du vocabulaire
			getLigiloAlMemorilo($persono_id);
		?>

		<ul class="collapsible" data-collapsible="expandable">

			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('CG',$leciono); 
			?>

		</ul>	
		
		<?php
		pubFacebook();
		?>
				
	</aside>
</div>
<?php include "dlekpiedo.inc.php"; ?>
