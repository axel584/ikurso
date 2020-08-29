<?php
include "util.php";
$pagxtitolo="Boutique";
$korpo="butiko";
if (isset($celpersono_id)) {$celpersono = apartigiPersonon($celpersono_id);}
include "pagxkapo.inc.php";
?>
	<div class="row">
		<article class="col s12 m7 offset-m1">
			<div class="row">
				<div class="col s12">
					<h1>Boutique</h1>
					<p>Nous avons sélectionné dans la boutique d’Espéranto-France quelques produits adaptés aux débutants. <br>
						Ils vous permettront de mettre en pratique ce que vous avez appris dans le cours et approfondir votre connaissance de l’espéranto.</p>
					
				</div>
				<div class="col s12 row plejbonaj">
					<h2><span>Meilleures ventes</span></h2>
					<div class="col s1 card">
						<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/eta-princo.png" alt="" />
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p>La Eta Princo (Antoine de Saint-Éxupéry)<br>12,00&nbsp;€</p>
							</div>
						</div>
					<div class="col s1 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/vere-aux-fantazie.png" alt="" />
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Vere aŭ fantazie<br>(Claude Piron)<br>16,50&nbsp;€</p>
						</div>
					</div>
					<div class="col s1 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/gdfe.png" alt="" />
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Grand dictionnaire<br>français-espéranto<br>15&nbsp;€</p>
						</div>
					</div>
					<div class="col s1 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/metodo11.png" alt="" />
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Metodo&nbsp;11<br><br>9&nbsp;€</p>
						</div>
					</div>
					<div class="col s1 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/kajto-flugas.png" alt="" />
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Kajto flugas<br>de Kajto<br>15&nbsp;€</p>
						</div>
					</div>
				</div>	
				<div class="input-field col s12">
					<select multiple="multiple">
						<option value="" disabled="disabled" selected="selected">tous les articles</option>
						<option value="1">Méthodes et dictionnaires</option>
						<option value="2">Lectures faciles</option>
						<option value="3">Littérature originale</option>
						<option value="4">Littérature traduite</option>
						<option value="5">Livres illustrés et BD</option>
						<option value="6">Musique</option>
						<option value="7">Divers</option>
					</select>
					<label>Sélectionnez une ou plusieurs catégories d’articles :</label>
				</div>
				<div class="col s12 row hide-on-med-and-down">
					<div class="col s2 card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/eta-princo.png" alt="" />
							</div>
							<div class="card-content">
								<span class="card-title activator">La Eta Princo (Antoine de Saint-Éxupéry)<br>12,00&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p><em>La Eta Princo</em> (<em>Le Petit Prince</em>) est un conte philosophique qui séduit pour les valeurs qu’il porte, qui se transmet et se partage de génération en génération depuis plus de 75 ans.</p>
							</div>
						</div>
					<div class="col s2 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/vere-aux-fantazie.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Vere aŭ fantazie<br>(Claude Piron)<br>16,50&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Recueil de récits écrits dans un espéranto facile.</p>
						</div>
					</div>
					<div class="col s2 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/templo-de-l-suno.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">La templo de l’&nbsp;suno<br>(Hergé)<br>12,50&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Cette bande dessinée vous fera voyager aux côtés du célèbre reporter belge. Cette traduction du temple du soleil est le quatrième album disponible en espéranto.</p>
						</div>
					</div>
					<div class="col s2 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/mil-unuaj-vortoj.png" alt="" />
							
						</div>
						<div class="card-content">
							<span class="card-title activator">Mil unuaj vortoj<br>en Esperanto <br>12&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Cet imagier est l'outil idéal pour enrichir votre vocabulaire à partir de grandes illustrations détaillées couvrant des univers variés (la ferme, la maison, le magasin, etc.). Accessible aux plus jeunes enfants comme aux adultes.<img class="responsive-img" src="<?=$vojo?>bildoj/butiko-nova/mil-unuaj-vortoj-ene.jpg" alt="" /></p>
						</div>
					</div>
					<div class="col s2 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/gdfe.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Grand dictionnaire<br>français-espéranto<br>15&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p><img class="responsive-img" src="<?=$vojo?>bildoj/butiko-nova/gdfe-ene.jpg" alt="" />Le plus complet des dictionnaires français/espéranto avec 32 000 entrées et 944 pages (20 cm), avec son supplément de 40 pages.</p>
						</div>
					</div>
					<div class="col s2 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/dico-de-poche.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Dictionnaire de poche<br>(F/E–E/F) <br>4,30&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Édité par l'association SAT-Amikaro, ce dictionnaire de poche vous permettra de vous dépanner autant lors de lecture de texte en espéranto que pour pouvoir vous exprimer dans cette langue.</p>
						</div>
					</div>
					<div class="col s2 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/metodo11.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Metodo&nbsp;11<br><br>9&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Nouvelle édition de <i>Metodo 11</i>, le manuel qui a accompagné de nombreux espérantophones dans l’apprentissage de la langue. Plus d’info sur le site de <a href="https://metodo11.esperanto-france.org">Metodo 11</a></p>
						</div>
					</div>
					<div class="col s2 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/poshamiko.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Poŝamiko<br><br>5,50&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>«L'ami de poche» porte bien son nom. Ce petit livre résume les points les plus importants de l'espéranto, du vocabulaire classé par thème (les couleurs, les nombres etc.) et vous permettra de réviser votre espéranto à n'importe quel moment.</p>
						</div>
					</div>
					<div class="col s2 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/monato.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Monato<br>1 an (11 n<sup>os</sup>)&nbsp;:<br>55&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>MONATO est un magazine international en espéranto traitant de domaines divers tels que politique, vie moderne, sciences, culture, économie, etc.<br><br> <a href="<?=$vojo?>bildoj/butiko-nova/monato-provnumero.pdf"><i class="material-icons left">file_download</i> Télécharger un spécimen</a></p>
						</div>
					</div>
					<div class="col s2 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/kajto-flugas.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Kajto flugas<br>de Kajto<br>15&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p><em>Kajto Flugas</em> a été présenté pour la 1<sup>ère</sup> fois lors du Congrès mondial d'espéranto à Lille, en 2015.<br>CD 15 titres – 46 min<br>Écouter un extrait&nbsp;: <a href="<?php echo $vojo;?>bildoj/butiko-nova/kajto-vkkd127.mp3" class="sm2_button"></a></p>
						</div>
					</div>
					<div class="col s2 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/amumin.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Amu min<br>de Ĵomart kaj Nataŝa<br>19&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Amu min est le 2<sup>e</sup> album du duo Ĵomart kaj Nataŝa.<br>CD 12 titres – 43 min<br>Écouter un extrait&nbsp;: <a href="<?php echo $vojo;?>bildoj/butiko-nova/amumin-vkkd65.mp3" class="sm2_button"></a></p>
						</div>
					</div>
					<div class="col s2 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/pliolnenio.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Pli ol nenio<br>de Martin kaj la Talpoj<br>15,50&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>CD 12 titres - 38 min <br>Écouter un extrait&nbsp;: <a href="<?php echo $vojo;?>bildoj/butiko-nova/pliolnenio-vkkd87.mp3" class="sm2_button"></a></p>
						</div>
					</div>
				</div>		
				<div class="col s12 row hide-on-med-and-up">
					<div class="col s3 card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/eta-princo.png" alt="" />
							</div>
							<div class="card-content">
								<span class="card-title activator">La Eta Princo (Antoine de Saint-Éxupéry)<br>12,00&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p><em>La Eta Princo</em> (<em>Le Petit Prince</em>) est un conte philosophique qui séduit pour les valeurs qu’il porte, qui se transmet et se partage de génération en génération depuis plus de 75 ans.</p>
							</div>
						</div>
					<div class="col s3 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/vere-aux-fantazie.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Vere aŭ fantazie<br>(Claude Piron)<br>16,50&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Recueil de récits écrits dans un espéranto facile.</p>
						</div>
					</div>
					<div class="col s3 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/templo-de-l-suno.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">La templo de l’&nbsp;suno<br>(Hergé)<br>12,50&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Cette bande dessinée vous fera voyager aux côtés du célèbre reporter belge. Cette traduction du temple du soleil est le quatrième album disponible en espéranto.</p>
						</div>
					</div>
					<div class="col s3 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/mil-unuaj-vortoj.png" alt="" />
							
						</div>
						<div class="card-content">
							<span class="card-title activator">Mil unuaj vortoj<br>en Esperanto <br>12&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Cet imagier est l'outil idéal pour enrichir votre vocabulaire à partir de grandes illustrations détaillées couvrant des univers variés (la ferme, la maison, le magasin, etc.). Accessible aux plus jeunes enfants comme aux adultes.<img class="responsive-img" src="<?=$vojo?>bildoj/butiko-nova/mil-unuaj-vortoj-ene.jpg" alt="" /></p>
						</div>
					</div>
					<div class="col s3 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/gdfe.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Grand dictionnaire<br>français-espéranto<br>15&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p><img class="responsive-img" src="<?=$vojo?>bildoj/butiko-nova/gdfe-ene.jpg" alt="" />Le plus complet des dictionnaires français/espéranto avec 32 000 entrées et 944 pages (20 cm), avec son supplément de 40 pages.</p>
						</div>
					</div>
					<div class="col s3 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/dico-de-poche.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Dictionnaire de poche<br>(F/E–E/F) <br>4,30&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Édité par l'association SAT-Amikaro, ce dictionnaire de poche vous permettra de vous dépanner autant lors de lecture de texte en espéranto que pour pouvoir vous exprimer dans cette langue.</p>
						</div>
					</div>
					<div class="col s3 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/metodo11.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Metodo&nbsp;11<br><br>9&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Nouvelle édition de <i>Metodo 11</i>, le manuel qui a accompagné de nombreux espérantophones dans l’apprentissage de la langue. Plus d’info sur le site de <a href="https://metodo11.esperanto-france.org">Metodo 11</a></p>
						</div>
					</div>
					<div class="col s3 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/poshamiko.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Poŝamiko<br><br>5,50&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>«L'ami de poche» porte bien son nom. Ce petit livre résume les points les plus importants de l'espéranto, du vocabulaire classé par thème (les couleurs, les nombres etc.) et vous permettra de réviser votre espéranto à n'importe quel moment.</p>
						</div>
					</div>
					<div class="col s3 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/monato.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Monato<br>1 an (11 n<sup>os</sup>)&nbsp;:<br>55&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>MONATO est un magazine international en espéranto traitant de domaines divers tels que politique, vie moderne, sciences, culture, économie, etc.<br><br> <a href="<?=$vojo?>bildoj/butiko-nova/monato-provnumero.pdf"><i class="material-icons left">file_download</i> Télécharger un spécimen</a></p>
						</div>
					</div>
					<div class="col s3 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/kajto-flugas.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Kajto flugas<br>de Kajto<br>15&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p><em>Kajto Flugas</em> a été présenté pour la 1<sup>ère</sup> fois lors du Congrès mondial d'espéranto à Lille, en 2015.<br>CD 15 titres – 46 min<br>Écouter un extrait&nbsp;: <a href="<?php echo $vojo;?>bildoj/butiko-nova/kajto-vkkd127.mp3" class="sm2_button"></a></p>
						</div>
					</div>
					<div class="col s3 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/amumin.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Amu min<br>de Ĵomart kaj Nataŝa<br>19&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>Amu min est le 2<sup>e</sup> album du duo Ĵomart kaj Nataŝa.<br>CD 12 titres – 43 min<br>Écouter un extrait&nbsp;: <a href="<?php echo $vojo;?>bildoj/butiko-nova/amumin-vkkd65.mp3" class="sm2_button"></a></p>
						</div>
					</div>
					<div class="col s3 card">
						<div class="card-image">
							<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko-nova/pliolnenio.png" alt="" />
						</div>
						<div class="card-content">
							<span class="card-title activator">Pli ol nenio<br>de Martin kaj la Talpoj<br>15,50&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
							<p>CD 12 titres - 38 min <br>Écouter un extrait&nbsp;: <a href="<?php echo $vojo;?>bildoj/butiko-nova/pliolnenio-vkkd87.mp3" class="sm2_button"></a></p>
						</div>
					</div>
				</div>	
		</article>
		<aside class="col s12 m3 push-m1">
			<h3><span>Nouveautés</span></h3>
			<div class="col s12 card">
				<div class="card-content row">
					<span class="card-title col s12">Metodo 11</span>
					<img src="<?=$vojo?>bildoj/butiko/metodo11.jpg" class="col s3 responsive-img" alt="" />
					<p class="col s8">Nouvelle édition de <i>Metodo 11</i>, le manuel qui a accompagné de nombreux espérantophones dans l’apprentissage de la langue.<br>9&nbsp;€</p>
				</div>
			</div>			
			<div class="col s12 card">
				<div class="card-content row">
					<span class="card-title col s12">La templo de l’suno, de Hergé</span>
					<img src="<?=$vojo?>bildoj/butiko/templo-de-l-suno.jpg" class="col s3 responsive-img" alt="" />
					<p class="col s8">Cette bande dessinée vous fera voyager aux côtés du célèbre reporter belge. Cette traduction du temple du soleil est le quatrième album disponible en espéranto.<br>12,50&nbsp;€</p>
				</div>
			</div>
			<div class="col s12 card">
				<div class="card-content row">
					<span class="card-title col s12">Grand dictionnaire français–espéranto</span>
					<img src="<?=$vojo?>bildoj/butiko/gdfe.jpg" class="col s3 responsive-img" alt="" />
					<p class="col s8">Le plus complet des dictionnaires français/espéranto avec 32&nbsp;000 entrées et 944&nbsp;pages (20 cm), avec son supplément de 40&nbsp;pages.<br>15 €</p>
				</div>
			</div>
			<div class="col s12 card">
				<div class="card-content row">
					<span class="card-title col s12">Dictionnaire de poche (F/E - E/F)</span>
					<img src="<?=$vojo?>bildoj/butiko/dico-de-poche.jpg" class="col s3 responsive-img" alt="" />
					<p class="col s8">Édité par l'association SAT-Amikaro, ce dictionnaire de poche vous permettra de vous dépanner autant lors de lecture de texte en espéranto que pour pouvoir vous exprimer dans cette langue.<br>4,30&nbsp;€</p>
				</div>
			</div>
		</aside>
		
	</div>
<?php include "pagxpiedo.inc.php"; ?>