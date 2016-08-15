<?php
$titolo="2 (du)";
$leciono = 2;
$section=isset($_GET["section"])?$_GET["section"]:"1";
include "dlekkapo.inc.php";
?>

<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
				
		<section id="leciono-enhavo">


		<p class="parto">Pour introduire cette leçon, nous vous proposons un petit test. Il vous permettra de réviser ce que vous avez vu dans la leçon 1 et de découvrir un peu de vocabulaire de la leçon 2.</p>
		<p>Retrouvez le texte qui convient à l'image (attention, quelques mots sont à deviner… et seront expliqués dans la leçon 2. Soyez attentif et imaginatif&nbsp;!</p>
		<div class="row">


<div class="carousel carousel-slider s12">
    <div class="carousel-item"> 
				<p class="col s12 m6 l5">
					<img src="<?php echo $vojo;?>fr/cge/bildoj/img-02-01.jpg" class="responsive-img"><br>
					<legend>photo : <a href="http://monde.ccdmd.qc.ca/recherche/?demande=collection&str=Denis%20Chabot">Denis Chabot</a></legend>
				 </p>
				<p class="col s12 m6 l7">
					<input type="radio" name="qcm1" value="1" id="001-01" class='qcm_ok'/><label for="001-01">La kafo estas varma</label><br>
					<input type="radio" name="qcm1" value="2" id="001-02" class='qcm_nok' data-indice='attention, la lettre c se prononce ts'/><label for="001-02">La cafeo estas varma</label><br>
					<input type="radio" name="qcm1" value="3" id="001-03" class='qcm_nok'/><label for="001-03">La kafo estas ĉauda</label><br>
				</p>
      </div>
      <div class="carousel-item"> 
				<p class="col s12 m6 l5">
					<img src="<?php echo $vojo;?>fr/cge/bildoj/img-02-02.jpg" class="responsive-img"><br>
					<legend>photo : <a href="http://monde.ccdmd.qc.ca/recherche/?demande=collection&str=Denis%20Chabot">Denis Chabot</a></legend>
				 </p>
				<p class="col s12 m6 l7">
					<input type="radio" name="qcm2" value="1" id="002-01" class='qcm_nok'/><label for="002-01">La biskivtoj estas en pano</label><br>
					<input type="radio" name="qcm2" value="2" id="002-02" class='qcm_ok'/><label for="002-02">La panoj estas en korbo</label><br>
					<input type="radio" name="qcm2" value="3" id="002-03" class='qcm_nok'/><label for="002-03">La paneoj estas sekaj</label><br>
				</p>
   </div>
</div>


  		</div>
		

		
		</section>



	</article>
			
</div>
<?php include "dlekpiedo.inc.php"; ?>
