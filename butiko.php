<?php
include "util.php";
$pagxtitolo="Boutique";
$korpo="hejmo";
if (isset($celpersono_id)) {$celpersono = apartigiPersonon($celpersono_id);}
include "pagxkapo.inc.php";
?>
	<div class="row">
		<article class="col s12 m10 l7 offset-m1 offset-l2">
			<h1>Boutique</h1>
			<div class="row">
					
				<div class="col s9 m10">
					<p>Nous avons sélectionné dans la boutique d’Espéranto-France quelques produits adaptés aux débutants. Ils vous permettront de mettre en pratique ce que vous avez appris dans le cours et approfondir votre connaissance de l’espéranto.</p>
					<p>Pour commander, il vous suffit de télécharger le bulletin de commande ci-contre, de le compléter et de le retourner avec votre règlement par chèque en incluant les frais d'envoi à&nbsp;:<br>
						Espéranto-France<br>
						4bis, rue de la Cerisaie<br>
						75004 Paris.
					</p>
					<p>Vous pouvez également commander en ligne en vous connectant sur <a href="//esperanto-france.org/perso" target="_NEW">le site d'Espéranto-France</a>. Il sera nécessaire de se créer un compte pour effectuer votre première commande.</p>
					<p>Si vous n’habitez pas en France, vous pouvez également contacter la boutique (voir bon de commande) pour connaître les frais d’envoi vers votre pays.</p>
				</div>
				<div class="col s3 m2">
					<a href="<?=$vojo?>bildoj/butiko/bondecom2016-ikurso.pdf" title="Bon de commande boutique Espéranto-France 2016" type="application/pdf"><img src="esperanto-france.org/local/cache-vignettes/L200xH283/bondecom2016-5be82.jpg?1476828061" alt="Bon de commande boutique Espéranto-France 2016" class="responsive-img z-depth-1"></a>
				</div>
			</div>
			
			<div class="row">
			
				<!---- pour petits écrans seulement ----->
				<div class="butiko-eta row hide-on-med-and-up">
					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">Mil unuaj vortoj en Esperanto</span>
							<img src="<?=$vojo?>bildoj/butiko/mil-unuaj-vortoj.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9">Cet imagier est l'outil idéale pour enrichir votre vocabulaire à partir de grandes illustrations détaillées couvrant des univers variés (la ferme, la maison, le magasin, etc.). Accessible aux plus jeunes enfants comme aux adultes.<br>12&nbsp;€</p>
						</div>
					</div>
					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">La templo de l’suno, de Hergé</span>
							<img src="<?=$vojo?>bildoj/butiko/templo-de-l-suno.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9">Cette bande dessinée vous fera voyager aux côtés du célèbre reporter belge. Cette traduction du temple du soleil est le quatrième album disponible en espéranto.<br>12,50&nbsp;€</p>
						</div>
					</div>
					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">Grand dictionnaire français–espéranto</span>
							<img src="<?=$vojo?>bildoj/butiko/gdfe.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9">Le plus complet des dictionnaires français/espéranto avec 32&nbsp;000 entrées et 944&nbsp;pages (20 cm), avec son supplément de 40&nbsp;pages.<br>15 €<img class="responsive-img" src="<?=$vojo?>bildoj/butiko/gdfe-ene.jpg" alt="" /></p>
						</div>
					</div>
					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">Dictionnaire de poche (F/E - E/F)</span>
							<img src="<?=$vojo?>bildoj/butiko/dico-de-poche.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9">Édité par l'association SAT-Amikaro, ce dictionnaire de poche vous permettra de vous dépanner autant lors de lecture de texte en espéranto que pour pouvoir vous exprimer dans cette langue.<br>4,30&nbsp;€</p>
						</div>
					</div>
					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">Poŝamiko</span>
							<img src="<?=$vojo?>bildoj/butiko/poshamiko.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9">«L'ami de poche» porte bien son nom. Ce petit livre résume les points les plus importants de l'espéranto, du vocabulaire classé par thème (les couleurs, les nombres etc.) et vous permettra de réviser votre espéranto à n'importe quel moment.<br>5,50&nbsp;€</p>
						</div>
					</div>
					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">Monato</span>
							<img src="<?=$vojo?>bildoj/butiko/monato.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9">Magazine d'actualité internationale en espéranto traitant de domaines divers tels que politique, vie moderne, sciences, culture, économie, etc. .<br>1 an (11 n<sup>os</sup>)&nbsp;: 55&nbsp;€<br><br><a href="<?=$vojo?>bildoj/butiko/monato-provnumero.pdf"><i class="material-icons left">file_download</i> Télécharger un spécimen</a></p>
						</div>
					</div>

					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">Kajto flugas, de Kajto</span>
							<img src="<?=$vojo?>bildoj/butiko/kajto-flugas.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9"><em>Kajto Flugas</em> a été présenté pour la 1<sup>ère</sup> fois lors du Congrès mondial d'espéranto à Lille, en 2015.<br>CD 15 titres – 46 min<br>15&nbsp;€<br>Écouter un extrait&nbsp;: <a href="<?php echo $vojo;?>bildoj/butiko/kajto-vkkd127.mp3" class="sm2_button"></a></p>
						</div>
					</div>

					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">Amu min, de Ĵomart kaj Nataŝa</span>
							<img src="<?=$vojo?>bildoj/butiko/amumin.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9">Amu min est le 2<sup>e</sup> album du duo Ĵomart kaj Nataŝa.<br>CD 12 titres – 43 min<br>19&nbsp;€<br>Écouter un extrait&nbsp;: <a href="<?php echo $vojo;?>bildoj/butiko/amumin-vkkd65.mp3" class="sm2_button"></a></p>
						</div>
					</div>

					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">Pli ol nenio, de Martin kaj la Talpoj</span>
							<img src="<?=$vojo?>bildoj/butiko/pliolnenio.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9">CD 12 titres - 38 min<br>15,50&nbsp;€<br>Écouter un extrait&nbsp;: <a href="<?php echo $vojo;?>bildoj/butiko/pliolnenio-vkkd87.mp3" class="sm2_button"></a></p>
						</div>
					</div>
					
				</div>	

				<!---- pour tablettes ----->
				<div class="butiko hide-on-small-only col s12 row">

					<div class="col s3">
						<div class="card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/templo-de-l-suno.jpg" alt="" />
							</div>
							<div class="card-content">
								<span class="card-title activator">La templo de l’&nbsp;suno (Hergé)<br>12,50&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p>Cette bande dessinée vous fera voyager aux côtés du célèbre reporter belge. Cette traduction du temple du soleil est le quatrième album disponible en espéranto.</p>
							</div>
						</div>

						<div class="card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/mil-unuaj-vortoj.jpg" alt="" />
								
							</div>
							<div class="card-content">
								<span class="card-title activator">Mil unuaj vortoj en Esperanto <br>12&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p>Cet imagier est l'outil idéal pour enrichir votre vocabulaire à partir de grandes illustrations détaillées couvrant des univers variés (la ferme, la maison, le magasin, etc.). Accessible aux plus jeunes enfants comme aux adultes.<img class="responsive-img" src="<?=$vojo?>bildoj/butiko/mil-unuaj-vortoj-ene.jpg" alt="" /></p>
							</div>
						</div>
					</div>
						
					<div class="col s3">
						<div class="card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/gdfe.jpg" alt="" />
							</div>
							<div class="card-content">
								<span class="card-title activator">Grand dictionnaire français–espéranto<br>15&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p><img class="responsive-img" src="<?=$vojo?>bildoj/butiko/gdfe-ene.jpg" alt="" />Le plus complet des dictionnaires français/espéranto avec 32 000 entrées et 944 pages (20 cm), avec son supplément de 40 pages.</p>
							</div>
						</div>

						<div class="card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/dico-de-poche.jpg" alt="" />
							</div>
							<div class="card-content">
								<span class="card-title activator">Dictionnaire de poche (F/E–E/F) <br>4,30&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p>Édité par l'association SAT-Amikaro, ce dictionnaire de poche vous permettra de vous dépanner autant lors de lecture de texte en espéranto que pour pouvoir vous exprimer dans cette langue.</p>
							</div>
						</div>

					</div>
						
					<div class="col s3">
						<div class="card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/poshamiko.jpg" alt="" />
							</div>
							<div class="card-content">
								<span class="card-title activator">Poŝamiko<br>5,50&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p>«L'ami de poche» porte bien son nom. Ce petit livre résume les points les plus importants de l'espéranto, du vocabulaire classé par thème (les couleurs, les nombres etc.) et vous permettra de réviser votre espéranto à n'importe quel moment.</p>
							</div>
						</div>
						<div class="card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/monato.jpg" alt="" />
							</div>
							<div class="card-content">
								<span class="card-title activator">Monato<br>1 an (11 n<sup>os</sup>)&nbsp;: 55&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p>MONATO est un magazine international en espéranto traitant de domaines divers tels que politique, vie moderne, sciences, culture, économie, etc.<br><br> <a href="<?=$vojo?>bildoj/butiko/monato-provnumero.pdf"><i class="material-icons left">file_download</i> Télécharger un spécimen</a></p>
							</div>
						</div>
					</div>
				
					<div class="col s3">
						<div class="card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/kajto-flugas.jpg" alt="" />
							</div>
							<div class="card-content">
								<span class="card-title activator">Kajto flugas, de Kajto<br>15&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p><em>Kajto Flugas</em> a été présenté pour la 1<sup>ère</sup> fois lors du Congrès mondial d'espéranto à Lille, en 2015.<br>CD 15 titres – 46 min<br>Écouter un extrait&nbsp;: <a href="<?php echo $vojo;?>bildoj/butiko/kajto-vkkd127.mp3" class="sm2_button"></a></p>
							</div>
						</div>
						<div class="card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/amumin.jpg" alt="" />
							</div>
							<div class="card-content">
								<span class="card-title activator">Amu min, de Ĵomart kaj Nataŝa<br>19&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p>Amu min est le 2<sup>e</sup> album du duo Ĵomart kaj Nataŝa.<br>CD 12 titres – 43 min<br>Écouter un extrait&nbsp;: <a href="<?php echo $vojo;?>bildoj/butiko/amumin-vkkd65.mp3" class="sm2_button"></a></p>
							</div>
						</div>
						<div class="card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/pliolnenio.jpg" alt="" />
							</div>
							<div class="card-content">
								<span class="card-title activator">Pli ol nenio, de Martin kaj la Talpoj<br>15,50&nbsp;€<i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p>CD 12 titres - 38 min <br>Écouter un extrait&nbsp;: <a href="<?php echo $vojo;?>bildoj/butiko/pliolnenio-vkkd87.mp3" class="sm2_button"></a></p>
							</div>
						</div>

					</div>

				</div>	
			</div>

		</article>
	</div>
<?php include "pagxpiedo.inc.php"; ?>