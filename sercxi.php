<?php
include "util.php";
$pagxtitolo="Résultat de la recherche";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
if ($persono_id=="") {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
if ($rajto!='A') {header("Location:index.php?erarkodo=4"); exit;}
$personnomo=isset($_POST["personnomo"])?$_POST["personnomo"]:"";
$familinomo=isset($_POST["familinomo"])?$_POST["familinomo"]:"";
$celenirnomo=isset($_POST["celenirnomo"])?$_POST["celenirnomo"]:"";
$retadreso=isset($_POST["retadreso"])?$_POST["retadreso"]:"";
$urbo=isset($_POST["urbo"])?$_POST["urbo"]:"";
$posxtkodo=isset($_POST["posxtkodo"])?$_POST["posxtkodo"]:"";
$erarkodo = isset($_GET['erarkodo']) ? $_GET['erarkodo'] : "";

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D,d M Y H:i:s")." GMT");
header("Cache-Control: no-store,no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0

function listiSercxadon($personnomo,$familinomo,$celenirnomo,$retadreso,$urbo,$posxtkodo) {
	global $bdd;
	$wheresql="1=1";
	$parametroj=array();
	// posxtkodo est cherché en début de chaîne, les autres champs n'importe où
	foreach (array("personnomo"=>$personnomo,"familinomo"=>$familinomo,"enirnomo"=>$celenirnomo,"retadreso"=>$retadreso,"urbo"=>$urbo,"posxtkodo"=>$posxtkodo) as $kampo=>$valoro) {
		if (trim($valoro)!="") {
			$wheresql.=" and ".$kampo." like ?";
			$parametroj[]=($kampo=="posxtkodo" ? "" : "%").trim($valoro)."%";
		}
	}
	$query="select * from personoj where ".$wheresql." order by enirnomo";
	$result = $bdd->prepare($query);
	$result->execute($parametroj);
	$rezultoj = $result->fetchAll();
	$h = function ($teksto) { return htmlspecialchars((string)$teksto, ENT_QUOTES, "UTF-8"); };

	echo "<p>".count($rezultoj)." compte".(count($rezultoj)>1 ? "s" : "")." trouvé".(count($rezultoj)>1 ? "s" : "")."</p>";
	if (!$rezultoj) {
		return;
	}
	echo "<ul class='collection sercxrezultoj'>";
	foreach ($rezultoj as $row) {
		echo "<li class='collection-item'>";
		echo "<span class='title'><a href='administri.php?celpersono_id=".(int)$row["id"]."'>".$h($row["enirnomo"])."</a></span>";
		echo " <span class='grey-text'>n° ".(int)$row["id"]." · ".$h(isset($row["rajtoj"]) ? $row["rajtoj"] : "")."</span>";
		echo "<p>";
		$nomo = trim($row["personnomo"]." ".$row["familinomo"]);
		if ($nomo!="") { echo $h($nomo); }
		if ((string)$row["naskigxdato"]!="" && $row["naskigxdato"]!="0000-00-00") { echo ($nomo!="" ? " · " : "")."né(e) le ".$h($row["naskigxdato"]); }
		if ($nomo!="" || ((string)$row["naskigxdato"]!="" && $row["naskigxdato"]!="0000-00-00")) { echo "<br>"; }
		echo "<em>".$h($row["retadreso"])."</em><br>";
		if ($row["adreso1"]!="") { echo $h($row["adreso1"])."<br>"; }
		if ($row["adreso2"]!="") { echo $h($row["adreso2"])."<br>"; }
		echo $h(trim($row["lando"]."-".$row["posxtkodo"]." ".$row["urbo"], "- "))."</p>";
		if ((string)$row["kialo"]!="") { echo "<p class='grey-text'>".$h(stripslashes((string)$row["kialo"]))."</p>"; }
		echo "</li>";
	}
	echo "</ul>";
}
$korpo="informoj";
include "pagxkapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l8 offset-m1 offset-l2">
		<p><a href="administri.php"><i class="material-icons tiny">arrow_back</i> Gérer les utilisateurs</a></p>
		<h1>Résultat de la recherche</h1>
		<?php listiSercxadon($personnomo,$familinomo,$celenirnomo,$retadreso,$urbo,$posxtkodo); ?>
	</article>
</div>
<?php include "pagxpiedo.inc.php"; ?>
