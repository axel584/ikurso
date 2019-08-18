	</form>
	</main>
	<footer class="primaire fond">
		<div class="submenuo">
			<div class="ero primaire-texte"><a href="<?php echo $vojo;?>kiujniestas.php">QUI SOMMES-NOUS ?</a></div>
			<div class="ero primaire-texte"><a href="<?php echo $vojo;?>reago.php">NOUS CONTACTER</a></div>
		</div>
		<div class="asocio primaire-texte texte-clair">
			Espéranto-France – 4 bis, rue de la Cerisaie, 75004 Paris
		</div>
	</footer>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
	<script src="<?php echo $vojo;?>js/config.js"></script>
	<script src="<?php echo $vojo;?>js/init.js"></script>
	<script src="<?php echo $vojo;?>js/ikurso.js?d=<?php echo time(); ?>"></script>


	<script type="text/javascript">
	</script>

<script type="text/javascript" >	
<?php	
// gestion des messages d'erreur en toast
	if ($erarkodo==2) {
		echo "M.toast({html: 'Merci de remplir tous les champs.'});\n";
	}
	if ($erarkodo==4) {
		echo "M.toast({html: 'Vous n’avez pas les droits pour accéder à cette page.'});\n";
	}
	if ($erarkodo==6) {
		echo "M.toast({html: 'Votre adresse e-mail est invalide.'});\n";
	}
	if ($erarkodo==7) {
		echo "M.toast({html: 'Cet identifiant est déjà utilisé, merci d’en choisir un autre.'});\n";
	}
	if ($erarkodo==8) {
		echo "M.toast({html: 'Votre session a expiré, veuillez vous identifier.'});\n";
	}
	if ($erarkodo==14) {
		echo "M.toast({html: 'Merci pour votre retour.'});\n";
	}
	if ($erarkodo==15) {
		echo "M.toast({html: 'Vous devez indiquer une adresse électronique correcte'});\n";
	}
	if ($erarkodo==16) {
		echo "M.toast({html: 'Votre message est vide'});\n";
	}	
	if ($erarkodo==17) {
		echo "M.toast({html: 'Cours incorrect pour le diplôme'});\n";
	}		
	if ($erarkodo==18) {
		echo "M.toast({html: 'Clé d’activation incorrecte.'});\n";
	}
	if ($erarkodo==19) {
		echo "M.toast({html: 'Aucun compte à activer avec cette adresse e-mail.'});\n";
	}
	if ($erarkodo==20) {
		echo "M.toast({html: 'Les changements ont bien été enregistrés.'});\n";
	}
	if ($erarkodo==21) {
		echo "M.toast({html: 'Votre QCM est parfait !', classes: 'bravo'});\n";
	}
	if ($erarkodo==22) {
		echo "M.toast({html: 'Attention, relisez bien la leçon !'});\n";
	}
	if ($erarkodo==23) {
		echo "M.toast({html: 'élève introuvable !'});\n";
	}
	if ($erarkodo==24) {
		echo "M.toast({html: 'injection XSS détectée !'});\n";
	}
	

?>
</script>

</body>
</html>  
<?php ob_flush();?>
