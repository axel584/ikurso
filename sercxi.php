<?
include "util.php";
$pagxtitolo=$lgv_sercxlisto;
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
if ($rajto!='A') {header("Location:index.php?erarkodo=4");}
$personnomo=$_POST["personnomo"];
$familinomo=$_POST["familinomo"];
$celenirnomo=$_POST["celenirnomo"];
$retadreso=$_POST["retadreso"];
$urbo=$_POST["urbo"];
$posxtkodo=$_POST["posxtkodo"];
//echo "personnomo=".$personnomo." familinomo=".$familinomo." celenirnomo=".$celenirnomo." retadreso=".$retadreso." urbo=".$urbo."<br>";
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D,d M Y H:i:s")." GMT");
header("Cache-Control: no-store,no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0

function listiSercxadon($personnomo,$familinomo,$celenirnomo,$retadreso,$urbo,$posxtkodo) {
    global $lingvo,$persono_id,$lgv_nekomencita,$lgv_neniuLernanto,$lgv_nuna_leciono,$lgv_adreso1,$lgv_ek,$idnoto,$lgv_familinomo;
	$obj_persono = new personoj;
	//$obj_nuna_kurso = new nuna_kurso;
	$wheresql="lingvo='".$lingvo."'";
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
	$personoj=$obj_persono->find($wheresql);
	if (count($personoj)==0) {
		echo "<tr><td>";
		echo "<h1>".$lgv_neniuLernanto."</h1>";
		echo "</tr></td>";
	} /*else {
		echo "<tr><td align=\"center\" class=\"normala\">";
		echo $lgv_familinomo."</td>";
		echo "<td align=\"center\" class=\"normala\">";
		echo $lgv_adreso1."</td>";
		echo "<td align=\"center\" class=\"normala\">";
		echo $lgv_nuna_leciono."</td></tr>";
	}*/
	for($i=0;$i<count($personoj);$i++) {
		echo "<tr";
		if ($i%2==1) { echo " bgcolor=\"#d0d8df\"";}
        echo "><td>";
        echo "(".$personoj[$i]->get_id().") ";
		echo "<a href=\"administri.php?celpersono_id=".$personoj[$i]->get_id()."\">".$personoj[$i]->get_enirnomo()."</a>";
        echo "&nbsp;n&eacute;(e) le ".$personoj[$i]->get_naskigxdato()."<br>";
		echo "<i>".$personoj[$i]->get_retadreso()."</i>";
        echo "</td><td>";
        echo $personoj[$i]->get_personnomo()." ".$personoj[$i]->get_familinomo()."<br>";
        if ($personoj[$i]->get_adreso1()!="") { echo $personoj[$i]->get_adreso1()."<br>";}
        if ($personoj[$i]->get_adreso2()!="") {echo $personoj[$i]->get_adreso2()."<br>";}
        echo $personoj[$i]->lando->get_kodo()."-".$personoj[$i]->get_posxtkodo()." ".$personoj[$i]->get_urbo()."<br>";
        echo "</td>";
     
        echo "</tr>";
        echo "<tr";
        if ($i%2==1) { echo " bgcolor=\"#d0d8df\"";}
        echo "><td colspan=\"2\">";
        if ($personoj[$i]->get_kialo()!="") { echo $personoj[$i]->get_kialo()."<br>"; }
  		echo "</td></tr>";
	}
	echo "</table>";
}
include "adminkapo.inc.php";
?>
		<div id="adminejo">
			<ul id="tabnav">
				<li><a href="administri.php?kategorio=P"><?=$lgv_atendasKorektanton ?></a></li>
				<li><a href="administri.php?kategorio=SO"><?=$lgv_jamRicevisKorektanton ?></a></li>
				<li><a href="administri.php?kategorio=S"><?=$lgv_aliajLernantoj ?></a></li>
				<li><a href="administri.php?kategorio=H"><?=$lgv_haltis ?></a></li>
				<li><a href="administri.php?kategorio=F"><?=$lgv_finis ?></a></li>
				<li><a href="administri.php?kategorio=K"><?=$lgv_korektantoj?></a></li>
				<li><a href="administri.php?kategorio=A"><?=$lgv_administrantoj?></a></li>
				<li><a href="administri.php?kategorio=I"><?=$lgv_informantoj?></a></li>
			</ul>
			<div id="kadro">
				<? if ($erarkodo=="9") echo "<p class='eraro'><i>$lgv_eraro9</i></p>"; ?>
				<? if ($erarkodo=="11") echo "<p class='eraro'><i>$lgv_eraro11</i></p>"; ?>
			
			<div id="adminG">

			<!-- page d'administration -->
				<form name="administri" method="post" action="<?=$vojo?>administri.php?kategorio=<?=$kategorio?>">
				<input type="hidden" name="kategorio" value="<?=$kategorio?>">
				</form>
			</div>
			<div id="adminD">
			<h2>R&eacute;sultat de la recherche :</h2>
				<div class="encadre">
	    			<? listiSercxadon($personnomo,$familinomo,$celenirnomo,$retadreso,$urbo,$posxtkodo); ?>
				</div>
			</div>
		</div>
<? include "pagxpiedo.inc.php"; ?>