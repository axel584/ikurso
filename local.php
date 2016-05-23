<?
include "util.php";
$pagxtitolo="Bienvenue sur le site d’ikurso !";
malfermiDatumbazon();
$persono_id = $_SESSION["persono_id"];
if ($persono_id) {
	$persono = apartigiPersonon($persono_id);
	$forum_sid = $_SESSION["phpbb2mysql_sid"];
	if (!$forum_sid) {
		// TODO : mettre ici la fonction qui se connecte au forum...
		//phpbb_login($persono_id);
	}
}
include "pagxkapo.inc.php";
?>
<div id="enhavo">
		<? if ($erarkodo=="1") echo "<p class='eraro'><i>Le mot de passe ou l’identifiant est erroné</i></p>"; ?>
		<? if ($erarkodo=="4") echo "<p class='eraro'><i>Vous n’avez pas les droits pour accéder à cette page.</i></p>"; ?>
		<? if ($erarkodo=="8") {
			if ($_COOKIE["PHPSESSID"]=="") {echo "<p class='eraro'><i>Vous devez activer les cookies pour utiliser ce site</i></p>";}
			else {echo "<p class='eraro'><i>Votre session a expiré, veuillez vous identifier.</i></p>";}
		}
		?>
		<? if ($erarkodo=="12") echo "<p class='eraro'><i>Vous êtes déjà inscrit - essayez de vous connecter, merci</i></p>"; ?>

			<? 
			//echo file_get_contents('http://esperanto-jeunes.org/local/ikurso.php?departement='.$_REQUEST["departement"]."&host=".$REMOTE_HOST."&action=detail"); 
			echo ('<script type="text/javascript" src="http://esperanto-jeunes.org/local/arthur-js.php?departement='.$_REQUEST["departement"].'"></script>');
			?>
</div>
<? include "pagxpiedo.inc.php";?>
