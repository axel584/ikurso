<?php
include "util.php";
$pagxtitolo="Kurso de Esperanto";
malfermiDatumbazon();

$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$persono = apartigiPersonon($persono_id);
$filename = "mails/aligxi".$persono["kurso"]."FR.txt";
// si le fichier n'existe pas, mets le nom du fichier sans le cours
if (!file_exists($filename)) { $filename = "mails/aligxiFR.txt"; }
$fd = fopen($filename, "r");
$contents = fread($fd, filesize ($filename));
fclose($fd);
include "pagxkapo.inc.php";
?>
	<div id="enhavo">
		<ul id="tabnav">
			<li class="aktiva"><a href="intro.php">Inscription</a></li>
			<li><a href="fr/cge/vortlisto.php">Lexique</a></li>
		</ul>
		<div id="kadro">
			<div class="rakonto">
			<?php echo $contents;?>
			</div>
		</div>   
	</div>
<?php include "pagxpiedo.inc.php";?>          
