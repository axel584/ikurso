<?php
include "util.php";
//malfermidatumbazon();
$pagxtitolo="Suppression d'une personne";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$celpersono_id=isset($_POST["celpersono_id"])?$_POST["celpersono_id"]:"";
$celpersono_id=isset($_GET["celpersono_id"])?$_GET["celpersono_id"]:$celpersono_id;
$validperson=isset($_GET["validperson"])?$_GET["validperson"]:"";
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";
$celpersono = apartigiPersonon($celpersono_id);
if (($celpersono_id!="") && ($validperson==$celpersono["enirnomo"])) {
	$demando = "delete from personoj where id='$celpersono_id'";
	$bdd->exec($demando);
	$demando = "delete from nuna_kurso where korektanto='$celpersono_id'";
	$bdd->exec($demando);
	$demando = "delete from nuna_kurso where studanto='$celpersono_id'";
	$bdd->exec($demando);
	$demando = "delete from komentoj where studanto='$celpersono_id'";
	$bdd->exec($demando);
	$demando = "delete from personoj_lecioneroj where persono_id='$celpersono_id'";
	$bdd->exec($demando);
	$demando = "delete from personoj_lecionoj where persono_id='$celpersono_id'";
	$bdd->exec($demando);
	$demando = "delete from respondoj where persono_id='$celpersono_id'";
	$bdd->exec($demando);
	$demando = "delete from takso_leciono where persono_id='$celpersono_id'";
	$bdd->exec($demando);
	header("Location:administri.php?validi=jes");
}
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
include "pagxkapo.inc.php";
?>
<?php if ($erarkodo=="9") echo "<div class='atentigo'><p class='eraro'>Cet élève a déjà un correcteur.</p></div>"; ?>

		<div id="enhavo">
			<ul id="tabnav">
			</ul>
			<div id="kadro">

				<p>Pour supprimer <b><?php echo $celpersono["enirnomo"]; ?></b>, veuiller recopier son identifiant : 
				<form method="post" action="delete.php">
					<input type="text" name="validperson"> 
					<input type="hidden" name="celpersono_id" value="<?php echo $celpersono_id?>"> 
					<input type="submit" value="Confirmer">
					<div align="left"><input type="reset" value="Annuler"></div>
				</form>
   		</div>
   	</div>
<?php include "pagxpiedo.inc.php";?>                    
