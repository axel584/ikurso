<?php
include "util.php";
$pagxtitolo="Bienvenue sur le site d’ikurso !";
$gxisdatigDato="2016-01-21";
malfermiDatumbazon();
$persono_id = isset($_SESSION["persono_id"]) ? $_SESSION["persono_id"] : "";
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
if ($persono_id) {
	$persono = apartigiPersonon($persono_id);
	//$forum_sid = $_SESSION["phpbb2mysql_sid"];
	//if (!$forum_sid) {
		// TODO : mettre ici la fonction qui se connecte au forum...
		//phpbb_login($persono_id);
	//}
	// on redirige les personnes utilisé suivants certaines règles :
	redirigeParDroits($persono);
}
include "pagxkapo.inc.php";
?>
	<div id="enhavo">
		<p>L’association <a href="http://esperanto-jeunes.org">Espéranto-Jeunes</a> propose trois cours par Internet,  
		pour lesquels elle a mis en place un service de correction gratuit :</p>

		<table class="prezento hejmo">
			<tr>
			<td colspan=2><h3>2 Cours pour débutants :</h3></td>
			<td><h3>1 Cours avancé :</h3></td> 
			</tr>
			<tr>
				<td class="txt">
					<h3><a href="http://ikurso.net">Logiciel : Kurso de Esperanto</a></h3>
					<div align="center">
					<a href="http://ikurso.net"><img src="bildoj/ikurso.jpg" alt="ikurso" title="cliquez ici pour en savoir plus"></a>		
					</div>
					<h4>Logiciel multimédia pour Windows, Linux et Mac, idéal pour débuter.</h4>
					
					<p>En 12 leçons, vous apprendrez les bases de l’espéranto de manière 
					agréable et ludique. En vous inscrivant, vous pourrez suivre ce cours en compagnie 
					d’un tuteur qui corrigera vos exercices.</p> 
					<p>Le cours est téléchargeable <a href="http://www.kurso.com.br">ici</a>.</p>
				</td>
				<td class="txt">
					<h3><a href="fr/cge/">Cours en dix leçons en ligne</a></h3>
					<div align="center">
					<a href="fr/cge/"><img src="bildoj/cge.jpg" alt="cge" title="cliquez ici pour en savoir plus"></a>
					</div>
					<h4>Cours en ligne pour débutants</h4>
					
					<p>Ce cours s’adresse également aux débutants. 
					Il se présente sous forme de pages web alternant explications et exercices.</p>
					<p>L’inscription pour recevoir un correcteur se trouve à la fin de la 
					première leçon.</p>			
				</td>
				<td class="txt">
					<h3><a href="fr/gerda/">Gerda malaperis</a></h3>
					<div align="center">
					<a href="fr/gerda/"><img src="bildoj/gerda.jpg" alt="gerda" title="cliquez ici pour en savoir plus"></a>
					</div>
					<h4>Ce roman policier est l’outil idéal pour continuer à progresser en espéranto.</h4>
					<p>Il s’adresse à ceux qui connaissent déjà 
					les bases de l’espéranto et fait suite aux cours précédents.</p>
					<p>L’inscription pour recevoir un correcteur se trouve à fin de la première leçon. 
					En parallèle, lisez aussi les récits de <a href="fr/gerda/lasu00.php"><i>Lasu min paroli plu!</i></a></p>
					<br/>
				</td>
			</tr>
			<tr>
				<td colspan=3><h3>Il existe d'autres cours pour apprendre l'espéranto parmi lesquels nous vous recommandons :</h3></td>
			</tr>
			<tr>
			<td>
			<?php 
			$departement=isset($_GET["departement"])?$_GET["departement"]:"";
			$remote_host = isset($_SERVER['REMOTE_HOST'])?$_SERVER['REMOTE_HOST']:"";
			echo file_get_contents('http://esperanto-jeunes.org/local/ikurso.php?departement='.$departement."&host=".$remote_host); 
			?>
			</td>
			
				<td colspan="2">
					<h3><a href="http://www.lernu.net"><i>lernu!</i></a></h3>
					<a href="http://www.lernu.net"><img src="bildoj/lernu.gif" alt="lernu" align="left" border=0 /></a>
					<p>Cet autre site, géré par une équipe internationale, est traduit en plus de vingt
					langues.<br>Il s’adresse à ceux qui veulent faire connaissance avec l’espéranto, 
					l’apprendre ou le pratiquer. Vous y trouverez des cours, des dictionnaires, 
					des lectures, des jeux, des correspondants...</p>
					<form name="lernu" action="http://www.lernu.net" method="post">
					<div align="right"><input class="bouton" type="submit" name="Submit" value="Aller sur lernu!"></div></form>
				</td>
			</tr>
		</table>
	</div>
	<?php if ($erarkodo=="1") { // mot de passe incorrect : on propose d'envoyer son mot de passe par mail
	echo '<div class="atentigo"><form target="_NEW" name="pasvorto" method="post" action="pasvortoforgesita2.php">';
	echo '<p class="eraro">Le mot de passe ou l’identifiant est erroné.</p>';
	echo '<p class="eraro">Pour recevoir votre mot de passe, <br/>indiquez votre adresse &eacute;lectronique :<br/><input type="text" name="retadreso" size="60"></p><input class="bouton" type="submit" value="Valider">';
	echo '</form></div>';
	}
	?>
	<?php if ($erarkodo=="4") echo "<div class='atentigo'><p class='eraro'>Vous n’avez pas les droits pour accéder à cette page.</p></div>"; ?>
	<?php if ($erarkodo=="8") {
		if ($_COOKIE["PHPSESSID"]=="") {echo "<div class='atentigo'><p class='eraro'>Vous devez activer les cookies pour utiliser ce site.</p></div>";}
		else {echo "<div class='atentigo'><p class='eraro'>Votre session a expiré, veuillez vous identifier.</p></div>";}
	}
	?>
	<?php if ($erarkodo=="12") echo "<div class='atentigo'><p class='eraro'>Vous êtes déjà inscrit - essayez de vous connecter, merci.</p></div>"; ?>

<?php include "pagxpiedo.inc.php";?>
