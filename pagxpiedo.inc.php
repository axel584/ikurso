	</form>
	</main>
	<footer class="primaire fond">
		<div class="submenuo">
			<div class="ero primaire-texte"><a href="#">QUI SOMMES-NOUS ?</a></div>
			<div class="ero primaire-texte"><a href="#">INFORMATIONS</a></div>
			<div class="ero primaire-texte"><a href="<?php echo $vojo;?>reago.php">NOUS CONTACTER</a></div>
		</div>
		<div class="asocio primaire-texte texte-clair">
			Espéranto-France – 4 bis, rue de la Cerisaie, 75004 Paris
		</div>
	</footer>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	<script src="<?php echo $vojo;?>js/config.js"></script>
	<script src="<?php echo $vojo;?>js/init.js"></script>
	<script src="<?php echo $vojo;?>js/ikurso.js"></script>
<script type="text/javascript" >	
<?php	
// gestion des messages d'erreur en toast
	if ($erarkodo==4) {
		echo "Materialize.toast('Vous n’avez pas les droits pour accéder à cette page.', 4000);\n";
	}
	if ($erarkodo==8) {
		echo "Materialize.toast('Votre session a expiré, veuillez vous identifier.', 4000);\n";
	}
	if ($erarkodo==18) {
		echo "Materialize.toast('Clef d’activation incorrecte.', 4000);\n";
	}
	if ($erarkodo==19) {
		echo "Materialize.toast('Aucun compte à activer avec cette adresse email.', 4000);\n";
	}
	if ($erarkodo==20) {
		echo "Materialize.toast('Les changements ont bien été enregistrés.', 4000);\n";
	}
	if ($erarkodo==21) {
		echo "Materialize.toast('Votre QCM est parfait !', 4000);\n";
	}
	if ($erarkodo==22) {
		echo "Materialize.toast('Attention, relisez bien la leçon !', 4000);\n";
	}
	

?>
</script>
</body>
</html>  
<?php ob_flush();?>
