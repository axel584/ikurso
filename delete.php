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
	$stmt = $bdd->prepare("delete from personoj where id=?");
	$stmt->execute([$celpersono_id]);
	$stmt = $bdd->prepare("delete from nuna_kurso where korektanto=?");
	$stmt->execute([$celpersono_id]);
	$stmt = $bdd->prepare("delete from nuna_kurso where studanto=?");
	$stmt->execute([$celpersono_id]);
	$stmt = $bdd->prepare("delete from komentoj where studanto=?");
	$stmt->execute([$celpersono_id]);
	$stmt = $bdd->prepare("delete from personoj_lecioneroj where persono_id=?");
	$stmt->execute([$celpersono_id]);
	$stmt = $bdd->prepare("delete from personoj_lecionoj where persono_id=?");
	$stmt->execute([$celpersono_id]);
	$stmt = $bdd->prepare("delete from respondoj where persono_id=?");
	$stmt->execute([$celpersono_id]);
	$stmt = $bdd->prepare("delete from takso_leciono where persono_id=?");
	$stmt->execute([$celpersono_id]);
	$stmt = $bdd->prepare("delete from personoj_vortoj where persono_id=?");
	$stmt->execute([$celpersono_id]);
	$stmt = $bdd->prepare("delete from personoj_vortoj_respondoj where persono_id=?");
	$stmt->execute([$celpersono_id]);
	header("Location:administri.php?validi=jes");
}
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0
include "pagxkapo.inc.php";
?>
	<div class="row">
		<article class="col s12 m10 l7 offset-m1 offset-l2">
			<h1>Confirmez la suppression</h1>
				<p>Pour supprimer <b><?php echo $celpersono["enirnomo"]; ?></b>, veuiller recopier son identifiant : 
				<form method="post" action="delete.php">
					<input type="text" name="validperson"> 
					<input type="hidden" name="celpersono_id" value="<?php echo $celpersono_id?>"> 
					<input type="submit" value="Confirmer">
				</form>
   		</article>
	</div>	
<?php include "pagxpiedo.inc.php";?>                    
