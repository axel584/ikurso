<?
if ($cookieFunkcias!="1") {
        header("Location:index.php?lingvo=$formlingvo&erarkodo=8");
} else {
        setcookie("lingvo",$formlingvo,time()+31536000);
        switch ($rapidvojo) {
        case "1":
                header("Location:index.php");
                break;
            case "2":
                header("Location:aligxi.php");
                break;
            case "3":
                header("Location:atendiKorekanton.php");
                break;
        case "4":
                header("Location:personinformoj.php");
                break;
        case "5":
                header("Location:studantojlisto.php");
                break;
            case "6":
                header("Location:administri.php");
                break;
            default:
	        header("Location:index.php");
        }
}
?>