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
					<p>Pour commander, il vous suffit de télécharger le bulletin de commande ci-contre, de le compléter et de le retourner à l'adresse indiquée avec votre règlement.</p>
					<p>Pour toute question, vous pouvez <a href="<?=$vojo?>reago.php">nous contacter</a>.</p>
				</div>
				<div class="col s3 m2">
					<a href="<?=$vojo?>bildoj/butiko/bondecom2016.pdf" title="Bon de commande boutique Espéranto-France 2016" type="application/pdf"><img src="http://esperanto-france.org/local/cache-vignettes/L200xH283/bondecom2016-5be82.jpg?1476828061" alt="Bon de commande boutique Espéranto-France 2016" class="responsive-img z-depth-1"></a>
				</div>
			
				<!---- pour petits écrans seulement ----->
				<div class="butiko-eta row hide-on-med-and-up">
					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">La Eta Princo, de Antoine de Saint Exupéry</span>
							<img src="<?=$vojo?>bildoj/butiko/eta-princo.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9">Cette nouvelle édition de la traduction du <em>Petit Prince</em> a été revue et corrigée pour permettre au lecteur une qualité de la langue inégalée jusqu'à présent. Bien qu'il ait l'aspect d'un livre pour enfants, <em>La Eta Princo</em> cache une grande sagesse et un message philosophique accessible aux lecteurs de tous âges.</p>
						</div>
					</div>
					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">Tintin, La templo de l’suno, de Hergé</span>
							<img src="<?=$vojo?>bildoj/butiko/templo-de-l-suno.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9">Cette bande dessinée vous fera voyager aux côtés du célèbre reporter belge. Cette traduction du temple du soleil est le quatrième album disponible en espéranto.</p>
						</div>
					</div>
					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">Mil unuaj vortoj en Esperanto</span>
							<img src="<?=$vojo?>bildoj/butiko/mil-unuaj-vortoj.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9">Cet imagier est l'outil idéale pour enrichir votre vocabulaire à partir de grandes illustrations détaillées couvrant des univers variés (la ferme, la maison, le magasin, etc.). Accessible aux plus jeunes enfants comme aux adultes.</p>
						</div>
					</div>
					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">Dictionnaire de poche (F/E - E/F)</span>
							<img src="<?=$vojo?>bildoj/butiko/dico-de-poche.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9">Édité par l'association SAT-Amikaro, ce dictionnaire de poche vous permettra de vous dépanner autant lors de lecture de texte en espéranto que pour pouvoir vous exprimer dans cette langue.</p>
						</div>
					</div>
					<div class="col s12 card">
						<div class="card-content row">
							<span class="card-title col s12">Poŝamiko</span>
							<img src="<?=$vojo?>bildoj/butiko/poshamiko.jpg" class="col s5 m3 responsive-img" alt="" />
							<p class="col s7 m9">«L'ami de poche» porte bien son nom. Ce petit livre résume les points les plus importants de l'espéranto, du vocabulaire classé par thème (les couleurs, les nombres etc.) et vous permettra de réviser votre espéranto à n'importe quel moment.</p>
						</div>
					</div>
				</div>	

				<!---- pour tablettes et desktop ----->
				<div class="butiko hide-on-small-only row">
					<div class="col m4 l3">
						<div class="card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/eta-princo.jpg" alt="" />
							</div>
							<div class="card-content">
								<span class="card-title activator">La Eta Princo (Saint-Exupéry) <i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p>Cette nouvelle édition de la traduction du <em>Petit Prince</em> a été revue et corrigée pour permettre au lecteur une qualité de la langue inégalée jusqu'à présent. Bien qu'il ait l'aspect d'un livre pour enfants, <em>La Eta Princo</em> cache une grande sagesse et un message philosophique accessible aux lecteurs de tous âges.</p>
							</div>
						</div>
					</div>
						
					<div class="col m4 l3">
							<div class="card">
								<div class="card-image">
									<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/mil-unuaj-vortoj.jpg" alt="" />
									
								</div>
								<div class="card-content">
									<span class="card-title activator">Mil unuaj vortoj en Esperanto <i class="material-icons right">keyboard_arrow_down</i></span>
								</div>
								<div class="card-reveal">
									<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
									<p>Cet imagier est l'outil idéale pour enrichir votre vocabulaire à partir de grandes illustrations détaillées couvrant des univers variés (la ferme, la maison, le magasin, etc.). Accessible aux plus jeunes enfants comme aux adultes.</p>
								</div>
							</div>
						</div>
						
					<div class="col m4 l3">
						<div class="card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/dico-de-poche.jpg" alt="" />
								
							</div>
							<div class="card-content">
								<span class="card-title activator">Dictionnaire de poche (F/E–E/F) <i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p>Édité par l'association SAT-Amikaro, ce dictionnaire de poche vous permettra de vous dépanner autant lors de lecture de texte en espéranto que pour pouvoir vous exprimer dans cette langue.</p>
							</div>
						</div>
					</div>
						
					<div class="col m4 l3">
						<div class="card">
							<div class="card-image">
								<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/templo-de-l-suno.jpg" alt="" />
								
							</div>
							<div class="card-content">
								<span class="card-title activator">La templo de l’&nbsp;suno (Hergé) <i class="material-icons right">keyboard_arrow_down</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
								<p>Cette bande dessinée vous fera voyager aux côtés du célèbre reporter belge. Cette traduction du temple du soleil est le quatrième album disponible en espéranto.</p>
							</div>
						</div>
					</div>
						
					<div class="col m4 l3">
							<div class="card">
								<div class="card-image">
									<img class="activator responsive-img" src="<?=$vojo?>bildoj/butiko/poshamiko.jpg" alt="" />
									
								</div>
								<div class="card-content">
									<span class="card-title activator">Poŝamiko <i class="material-icons right">keyboard_arrow_down</i></span>
								</div>
								<div class="card-reveal">
									<span class="card-title"><i class="material-icons right">keyboard_arrow_up</i></span>
									<p>«L'ami de poche» porte bien son nom. Ce petit livre résume les points les plus importants de l'espéranto, du vocabulaire classé par thème (les couleurs, les nombres etc.) et vous permettra de réviser votre espéranto à n'importe quel moment.</p>
								</div>
							</div>
						</div>
				</div>	
			</div>

		</article>
	</div>
<?php include "pagxpiedo.inc.php"; ?>
