<?
if ($_GET["lgv"]!="") {$lgv=$_GET["lgv"];}
if ($_GET["lingvo"]!="") {$lingvo=$_GET["lingvo"];}
// @include "fr.inc.php";
/* tant pis pour le multilinguisme : faisons d'abord un truc qui marche !
*/
switch ($lgv) {
	case "DE":
		@include "de.inc.php";
		break;
	case "EN":
		@include "en.inc.php";
		break;
	case "FR":
		@include "fr.inc.php";
		break;
	case "HE":
		@include "he.inc.php";
		break;
	default:
	@include "eo.inc.php";
}
?>