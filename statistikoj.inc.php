<?
$url=$_SERVER['SCRIPT_URI'];
$url=explode("/", $_SERVER['SCRIPT_NAME']);
$pagxo=$url[count($url)-1];
if ($_GET["lgv"]!="") {$lgv=$_GET["lgv"];}
$tab = array("Kategorio","Monato","Lando","Kurso");
$lib = array ("par cat&eacute;gorie","par mois","par pays","par cours");
echo "<table border='0' cellpadding='0' cellspacing='2'>\n";
echo "<tr>";
foreach ($tab as $i => $value) {
	echo "<td>";
	if ($pagxo!=("statLaux".$value.".php")){
		echo "<a href='";
		echo "statLaux".$value.".php";
		if ($lgv!="FR") {echo "?lgv=".$lgv;}
		echo "'>\n";
	}
	echo "<img src='bildoj/bt_".$value;
	if ($pagxo==("statLaux".$value.".php")){echo "_G";}
	else {echo "_N";}
	echo $lgv;
	echo ".gif' alt='".$lib[$i]."' border='0'>";
	if ($pagxo!=("statLaux".$value.".php")){
		echo "</a>";
	}
	echo "</td>\n";
}
echo "</tr></table>\n";
?>