<?
$url="statLauxKategorio.php";
if ($_GET["lgv"]!="") {
	$lgv=$_GET["lgv"];
	$url.="?lgv=".$lgv;
}
header("Location:".$url);
?>