<?
if ($cookieFunkcias!="1") {
        header("Location:index.php?lingvo=$formlingvo&erarkodo=8"); exit;
} else {
        setcookie("lingvo",$formlingvo,time()+31536000);
        switch ($rapidvojo) {
        case "1":
                header("Location:index.php"); exit;
                break;
            case "2":
                header("Location:aligxi.php"); exit;
                break;
            case "3":
                header("Location:atendiKorekanton.php"); exit;
                break;
        case "4":
                header("Location:personinformoj.php"); exit;
                break;
        case "5":
                header("Location:studantojlisto.php"); exit;
                break;
            case "6":
                header("Location:administri.php"); exit;
                break;
            default:
	        header("Location:index.php"); exit;
        }
}
?>