<?
include "util.php";
$subjekto="ressources.php";
$temo=$_GET["temo"];
if ($temo==""){$temo="intro";}
$pagxtitolo="En savoir plus...";
include "pagxkapo.inc.php";
$gxisdatigDato="2006-11-02";
?>
		<div id="enhavo">
			<ul id="tabnav">
				<li <?if ($temo=="intro") {echo " class='aktiva'";}?>><a href="ressources.php?temo=intro">En savoir plus...</a></li>
				<li <?if ($temo=="lerni") {echo " class='aktiva'";}?>><a href="ressources.php?temo=lerni">apprendre</a></li>
				<li <?if ($temo=="legi") {echo " class='aktiva'";}?>><a href="ressources.php?temo=legi">lire, s&rsquo;informer</a></li>
				<li <?if ($temo=="auxskulti") {echo " class='aktiva'";}?>><a href="ressources.php?temo=auxskulti">&eacute;couter, regarder</a></li>
				<li <?if ($temo=="kores") {echo " class='aktiva'";}?>><a href="ressources.php?temo=kores">correspondre</a></li>
			</ul>
			<div id="kadro">
				<div class="rakonto">
				<? if ($temo=="intro") { ?>
					<p>Pour compléter votre étude de l’espéranto, nous vous proposons une sélection de sites dans lesquels vous trouverez diverses ressources :
						dictionnaires, grammaires, lectures, musique, vidéos...
					</p>
					<p>
					Quelques bonnes adresses pour en savoir plus sur l’espéranto :
					</p><br>
					<ul>
					    <li><a href="http://fr.wikipedia.org/wiki/Portail:Esp%C3%A9ranto/">
					      portail Espéranto de wikipedia</a> : tout sur l’espéranto (langue, histoire, littérature, culture...)</li>
						<li><a href="http://eo.wikipedia.org/wiki/Portalo:Esperanto">portail Espéranto de wikipedia</a> (en espéranto)</li>
						<li><a href="http://esperanto.net/">esperanto.net</a> : centre d’information multilingue sur l’espéranto</li>					
					</ul>
					
					<h3>Pour acheter livres, dictionnaires, T-shirts, CD, DVD...:</h3>
					<ul>
						<li><a href="http://esperanto-jeunes.org/butik">Jefo-butik’</a>, la boutique en ligne de Jefo (commande en ligne de certains articles)<li>
						<li><a href="http://www.esperanto-france.org/documents/katalogolibroservo.pdf">Le calalogue Espéranto-France /Espéranto-Jeunes</a> (vente par correspondance)</li>
						<li><a href="http://www.esperanto.be/fel/fr/ls_serchu.php">La boutique de la FEL</a> (Flandra Esperanto-Ligo)</a>
						<li>Le catalogue du <a href="http://katalogo.uea.org/">libroservo de UEA</a></li>
					</ul>

				<? } elseif ($temo=="lerni") { ?>
					<h3>Dictionnaires</h3>
					<ul>
						<li><a href="http://purl.org/net/voko/revo/">Reta vortaro</a> : 
							grand dictionnaire en ligne et en esp&eacute;ranto, avec traductions dans diverses langues</li>
						<li><a href="http://www.krokodilo.de/">La verda krokodilo</a> : petit dictionnaire d&rsquo;esp&eacute;ranto illustr&eacute;</li>
						<li><a href="http://fr.lernu.net/lernado/vortoj/bildvortaro/index.php">dictionnaire illustr&eacute;</a> propos&eacute; par <i>lernu!</i></li>
					</ul>
					
					<h3>Lexiques</h3>
					<ul>
						<li><a href="http://perso.orange.fr/la-vortaro/index.html">La Vortaro</a> : lexique &agrave; t&eacute;l&eacute;charger</li>	
						<li><a href="http://www.helsinki.fi/~jslindst/hejmvort.html">Hejma vortaro</a> : 
							dictionnaire de la vie domestique, avec traduction en plusieurs langues</li>
						<li><a href="http://www.esperanto.mv.ru/KompLeks/DEFAULT.html">
							Komputada leksikono</a> (lexique de l&rsquo;informatique)</li> 	
						<li><a href="http://www.tejo.org/uea/Tezauxro">Teza&#365;ro de UEA</a></li>
						<li><a href="http://www.chez.com/corobu/">lexiques th&eacute;matiques</a></li>
						<li><a href="http://tekstoj.nl/esperanto/tradligoj.htm">quelques autres lexiques th&eacute;matiques</a></li>
					</ul>
				
				<h3>Grammaires</h3>
				<ul>
					<li><a href="http://www.uni-leipzig.de/esperanto/texte/bibl/fundamento/index.html">Fundamento de Esperanto</a></li>
					<li><a href="http://www.bertilow.com/pmeg/">Plena Manlibro de Esperanta Gramatiko</a> : grammaire compl&egrave;te et d&eacute;taill&eacute;e, tout en esp&eacute;ranto</li>
					<li><a href="http://www.esperanto.mv.ru/Seppik/index.html">La tuta Esperanto</a> : grammaire tout en esp&eacute;ranto</li> 
					<li><a href="http://www.edukado.net">edukado.net</a> : importante collection d&rsquo;exercices tous niveaux</li> 
				</ul>

				<? } elseif ($temo=="legi") { ?>
				
				<h3>Biblioth&egrave;ques en ligne</h3>
				<ul>
					<li><a href="http://esperantujo.org/eLibrejo/">eLibrejo</a> : litt&eacute;rature (traduite ou originale) &agrave; t&eacute;l&eacute;charger au format PDF</li>
					<li><a href="http://donh.best.vwh.net/Esperanto/Literaturo/literaturo.html">litt&eacute;rature en ligne</a></li>

				</ul>
				
				<h3>Revues</h3>
				<ul>
					<li><a href="http://fr.lernu.net/biblioteko/gazetoj/index.php">magazines en esp&eacute;ranto</a> pr&eacute;sent&eacute;s par <i>lernu!</i></li>
					<li><a href="http://eo.mondediplo.com/">Le Monde Diplomatique</a> en esp&eacute;ranto</li>
					<li><a href="http://www.esperanto.org/Ondo/">La Ondo de Esperanto</a> : actualit&eacute;s, 
					articles sur l&rsquo;esp&eacute;ranto et sa litt&eacute;rature</li>
					<li><a href="http://www.la-amikeco.net/">La Amikeco</a> : magazine en ligne pour les jeunes</li>
					<li><a href="http://www.esperantoinfo.info/">Esp&eacute;ranto-Info</a> : magazine d'information sur l'Esp&eacute;ranto en fran&ccedil;ais</li>
				</ul>
				
				<h3>Actualit&eacute;</h3>
				<ul>
					<li><a href="http://www.liberafolio.org/">Liberia Folio</a> : actualit&eacute;s du monde de l&rsquo;esp&eacute;ranto.</li>
					<!--<li><a href="http://gxangalo.com/">Gxangalo</a> : portail en esp&eacute;ranto (nouvelles, blogs, forums...)</li>-->
					<li><a href="http://raporto.info/">raporto.info</a> : actualit&eacute;s du monde, en esp&eacute;ranto</li>
					<li><a href="http://esperantujo.org/">esperantujo.org</a> : site d&rsquo;information en esp&eacute;ranto</li>
				</ul>
				
				<h3>Blogs</h3>
				<ul>
					<li><a href="http://e-planedo.kerno.org/">e-planedo</a> : s&eacute;lection de blogs en esp&eacute;ranto</li>
				</ul>
				<br>
				<p>Vous trouverez sur <a href="http://startu.net/">startu.net</a> une grand nombre
				d&rsquo;autres liens vers des sites en esp&eacute;ranto</li>
				
				<? } elseif ($temo=="auxskulti") { ?>
				
				<h3>Musique, radio, podcasts</h3>
				<ul>
					<li><a href="http://www.vinilkosmo.com/">Vinilkosmo</a> : toute la musique en esp&eacute;ranto</li>
					<li><a href="http://www.radioarkivo.org/">radioarkivo.org</a> : archives de toutes les radios en esp&eacute;ranto</li>
					<li><a href="http://esperanto-jeunes.org/zam">Zam&rsquo;Radio</a> : l&rsquo;&eacute;mission de radio d&rsquo;Esp&eacute;ranto-Jeunes</li>
					<li><a href="http://junularadiointernacia.eu.tt/">Junula radio internacia</a> : podcasts en esp&eacute;ranto r&eacute;alis&eacute;s par des jeunes</li>
					<li><a href="http://chitienun.zervic.com/">&#264;i tie Nun</a> : encore des podcasts en esp&eacute;ranto</li>
				</ul>
				
				<h3>Vid&eacute;o, t&eacute;l&eacute;vision</h3>
				<ul>
					<li><a href="http://farbskatol.net">Farkskatol&rsquo;</a> : vid&eacute;os en esp&eacute;ranto</li>
					<!--<li><a href="http://www.esperanto.cat/kistv/">KisTV</a> : &eacute;missions en esp&eacute;ranto propos&eacute; par une cha&icirc;ne catalane</li>
					<li><a href="http://internacia.tv">Internacia televido</a> : cha&icirc;ne de t&eacute;l&eacute;vision en esp&eacute;ranto</li>-->
				</ul>

				<? } elseif ($temo=="kores") { ?>
				
				<h3>Pour trouver des amis gr&acirc;ce &agrave; l&rsquo;esp&eacute;ranto</h3>
				<ul>
					<li><a href="http://www.esperantomondo.net/">esperantomondo</a> : des correspondants dans le monde entier</li>
					<li><a href="http://www.edukado.net/">edukado.net</a> propose aussi un service de correspondance</li>
				</ul>
				<h3>discuter en direct...</h3>
				<ul>
					<li><a href="http://www.babilejo.org/">babilejo.org</a> vous permet de papoter en direct avec d&rsquo;autres esp&eacute;rantophones</li>
					<li><a href="http://gxangalo.com/babilejo/">Gxangalo</a> vous propose aussi son "babilejo"</li>
					<li>Rejoignez le groupes des "<a href="http://groups.yahoo.com/group/skajpanoj/">skajpanoj</a>" pour discuter en esp&eacute;ranto 
						gr&acirc;ce &agrave;
						<a href="http://www.skype.com/intl/fr/">Skype</a></li>
				</ul>
				<h3>... et voyager : </h3>
				<ul>
					<li><a href="http://www.tejo.org/ps/ps_lingv/ps_fr.htm">Pasporta Servo</a> : r&eacute;seau convivial d&rsquo;&eacute;hergement chez l&rsquo;habitant</li>
				</ul>
		</div>
		<? } ?>
		</div>
	</div>
<? include "pagxpiedo.inc.php"; ?>
