<?php
include "util.php";
$pagxtitolo="Kurso de Esperanto";
$korpo="aligxilo";
$gxisdatigDato="2016-06-27";
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
if (isset($celpersono_id)) {$celpersono = apartigiPersonon($celpersono_id);}
include "pagxkapo.inc.php";
?>

	<main>
		<header class="row">
			<h1 class="col s11 m6 offset-s1 offset-m3">Inscription</h1>
			<p class="chapo col s11 m6 offset-s1 offset-m3">Vous y êtes presque !</p>
		</header>
		<div class="row">
			<p class="col s11 m6 offset-s1 offset-m3">Pour activer votre compte, veuillez cliquer sur le lien se trouvant dans le message électronique que nous venons de vous envoyer.<br>
				Si vous ne l’avez pas reçu, vérifiez s’il n’est pas dans votre courrier indésirable.<br>
				Si vous n’avez rien, reçu, vous pouvez demander de réenvoyer le message.</p>
		</div>
		<div class="row">
			<p class="input-field col s11 m5 l4 offset-s1 offset-m2 offset-l3">
				<a href="#!" class="btn waves-effect waves-light blue">Envoyer le courriel d’activation</a>
			</p>
		</div>
	</main>	
		
<?php include "pagxpiedo.inc.php"; ?>
