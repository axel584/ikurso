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
	<!-- include skelenote css/js-->
    <link href="<?php echo $vojo;?>style/materialnote.css" rel="stylesheet" type="text/css">
    <script src="<?php echo $vojo;?>js/materialnote.js"></script>
	
	<script src="https://cdn.tiny.cloud/1/7ypwq3abv301p0c62mhwkoyodjbnlnwx8b7k3gvjs4wid90u/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>tinymce.init({
			selector:'.wysiwyg',
			plugins: [ 'quickbars' ],
			toolbar: false,
			menubar: false});</script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/trumbowyg.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/ui/trumbowyg.min.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/langs/fr.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/plugins/colors/trumbowyg.colors.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/plugins/colors/ui/trumbowyg.colors.min.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/plugins/specialchars/trumbowyg.specialchars.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/plugins/specialchars/ui/trumbowyg.specialchars.min.css"/>
	<script>$('.trumbowyg').trumbowyg({
			btns: [['bold', 'italic','del'], ['link'],['foreColor'], ['specialChars'],['removeformat']],
			autogrow: true,
			lang: 'fr',
			plugins: {
				colors: {
					colorList: [
						'FF0000', '00FF00'
					]
				},
				specialchars: {
					symbolList: [
						'0108','011C','0124','0134','015C','016C','0109','011D','0125','0135','015D','016D'
					]
				}
			}
	});
	
	
	</script>
	
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
