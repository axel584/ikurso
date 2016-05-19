<?php
include "util.php";
$pagxtitolo="Suppression d'une personne";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$celpersono_id=$_POST["celpersono_id"];

$celpersono = apartigiPersonon($celpersono_id);
if ($_POST["validperson"]==$celpersono["enirnomo"]) {
	mysql_select_db( "ikurso");
	$demando = "delete from personoj where id='$celpersono_id'";
	$result = mysql_query($demando) or die ("SELECT : malbona demando :".$demando);
	$demando = "delete from nuna_kurso where korektanto='$celpersono_id'";
	$result = mysql_query($demando) or die ("SELECT : malbona demando :".$demando);
	$demando = "delete from nuna_kurso where studanto='$celpersono_id'";
	$result = mysql_query($demando) or die ("SELECT : malbona demando :".$demando);
	header("Location:administri.php");
}
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
include "pagxkapo.inc.php";
?>
<? if ($erarkodo=="9") echo "<h2><i>Cet élève a déjà un correcteur.</i></h2>"; ?>

		<div id="enhavo">
			<ul id="tabnav">
			</ul>
			<div id="kadro">

				<p>Pour supprimer <b><? echo $celpersono["enirnomo"]; ?></b>, veuiller recopier son identifiant : 
				<form method="post" action="delete.php">
					<input type="text" name="validperson"> 
					<input type="hidden" name="celpersono_id" value="<? echo $celpersono_id?>"> 
					<input type="submit" value="Confirmer">
					<div align="left"><input type="reset" value="Annuler"></div>
				</form>
   		</div>
   	</div>
<? include "pagxpiedo.inc.php";?>                    
