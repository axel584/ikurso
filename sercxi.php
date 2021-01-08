<?php
include "util.php";
$pagxtitolo="Résultat de la recherche";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
if ($rajto!='A') {header("Location:index.php?erarkodo=4");}
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
    global $persono_id,$idnoto,$bdd;
	$wheresql="1=1";
	if ($personnomo!="") {
		$wheresql=$wheresql." and personnomo like '%".$personnomo."%'";
	}
	if ($familinomo!="") {
		$wheresql=$wheresql." and familinomo like '%".$familinomo."%'";
	}
	if ($celenirnomo!="") {
		$wheresql=$wheresql." and enirnomo like '%".$celenirnomo."%'";
	}
	if ($retadreso!="") {
		$wheresql=$wheresql." and retadreso like '%".$retadreso."%'";
	}
	if ($urbo!="") {
		$wheresql=$wheresql." and urbo like '%".$urbo."%'";
	}
	if ($posxtkodo!="") {
		$wheresql=$wheresql." and posxtkodo like '".$posxtkodo."%'";
	}
	echo "<table>";
	$query="select * from personoj where ".$wheresql;
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	
	$nbResultat=0;
	while($row = $result->fetch()) {
		$nbResultat++;
		echo "<tr";
		if ($nbResultat%2==1) { echo " bgcolor=\"#d0d8df\"";}
        echo "><td>";
        echo "(".$row["id"].") ";
		echo "<a href=\"administri.php?celpersono_id=".$row["id"]."\">".$row["enirnomo"]."</a>";
        echo "&nbsp;n&eacute;(e) le ".$row["naskigxdato"]."<br>";
		echo "<i>".$row["retadreso"]."</i>";
        echo "</td><td>";
        echo $row["personnomo"]." ".$row["familinomo"]."<br>";
        if ($row["adreso1"]!="") { echo $row["adreso1"]."<br>";}
        if ($row["adreso2"]!="") {echo $row["adreso2"]."<br>";}
        echo $row["lando"]."-".$row["posxtkodo"]." ".$row["urbo"]."<br>";
        echo "</td>";
     
        echo "</tr>";
        echo "<tr";
        if ($nbResultat%2==1) { echo " bgcolor=\"#d0d8df\"";}
        echo "><td colspan=\"2\">";
        if ($row["kialo"]!="") { echo $row["kialo"]."<br>"; }
  		echo "</td></tr>";
	}

	if ($nbResultat==0) {
		echo "<tr><td>";
		echo "<h1>Aucun élève</h1>";
		echo "</tr></td>";
	}

	echo "</table>";
}
include "adminkapo.inc.php";
?>
		<div id="adminejo">
			<ul id="tabnav">
				<li class='aktiva'><a href="#">Résultat de recherche</a></li>
			</ul>
			<div id="kadro">
				<?php if ($erarkodo=="9") echo "<div class='atentigo'><p class='eraro'>Cet élève a déjà un correcteur.</p></div>"; ?>
				<?php if ($erarkodo=="11") echo "<div class='atentigo'><p class='eraro'>Choisissez un correcteur avant de sauvegarder</p></div>"; ?>
			
			<div id="adminD">
				<div class="encadre">
	    			<?php listiSercxadon($personnomo,$familinomo,$celenirnomo,$retadreso,$urbo,$posxtkodo); ?>
				</div>
			</div>
		</div>
<?php include "pagxpiedo.inc.php"; ?>
