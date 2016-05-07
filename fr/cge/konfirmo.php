<?
$numcxap=$_GET["lec"];
$kazo=$_GET["kazo"];
include "dlekkapo.inc.php";
?>
		<div class="klarigo">
	<? 
		if ($kazo==1){
	?>
	<p>Votre devoir a été envoyé par courriel à votre correcteur. Vous allez en recevoir une copie par message.</p>
	<?
	}
		elseif ($kazo==3) {
		// le devoir n'a pas pu etre envoye pour des raisons techniques. Il est sauvegarde et sera envoye plus tard	
		?>
		<p>Votre devoir a été enregistré et sera envoyé à votre correcteur dès que possible. Une copie du message
		vous sera alors adressée.</p>
		<?
		}
		else {
	?>
	<p>Nous avons enregistré vos exercices. Ils seront envoyés à votre correcteur, dès que nous vous en aurons 
	attribué un. Vous recevrez alors ses coordonnées par message électronique.</p>
	<p>Votre correcteur recevra alors vos exercices par messagerie électronique et vous recevrez une copie de ce message.</p>
	<?
	}
	?>         
		</div> <!-- klarigo -->
<? include "dlekpiedo.inc.php"; ?>