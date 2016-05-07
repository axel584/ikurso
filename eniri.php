<?
include "util.php";
//session_start();
// ER 05.10.2015 : correction pour passage en PHP 5.4
//session_register("persono_id");
$_SESSION['persono_id']=$persono_id;
$enirnomo=$_REQUEST["enirnomo"];
$pasvorto=$_REQUEST["pasvorto"];
$admin_id=$_SESSION["admin_id"];
if ($admin_id) {
	$enirnomo=$_GET["enirnomo"];
	$pasvorto=$_GET["pasvorto"];
}
$persono_id = kontroliPersonon($enirnomo,$pasvorto);
if ($persono_id=="0") {
	protokolo(0,"ERARO","provis eniri : $enirnomo - $pasvorto");
	header( "Location:index.php?erarkodo=1");
} else {
	$persono = apartigiPersonon($persono_id);
	$_SESSION["persono_id"]=$persono["id"];
	protokolo($persono["id"],"ENIRO","$enirnomo eniris");
	phpbb_login($persono["id"]);
	$lasturl=$_SESSION["lasturl"];
	if ($lasturl!=""){
		unset ($_SESSION["lasturl"]);
		header ("Location:".$lasturl."");
	}
	else {
		switch ($rapidvojo) {
		case "1":
			header("Location:index.php");
			break;
	    	case "2":
	        	header("Location:aligxi.php");
		        break;
		case "3":	
		case "4":	
	        	header("Location:forum/index.php?sid=".$phpbb2mysql_sid.".php");
				break;
	    	case "5":	/* korektanto */
				if (($persono["videbla"]=="J")||($persono["videbla"]=="")) {
					header ("Location:helpo.php?temo=nova");
				} else {
	        		header("Location:mastrumistudantojn.php");
	        	}
	        	break;
	    	case "6":	/* administranto */
				if (($persono["videbla"]=="J")||($persono["videbla"]=="")) {
					header ("Location:helpo.php?temo=nova");
				} else {
	        		header("Location:administri.php");
	        	}
	        	break; 
	        case "7":
	                header("Location:studantalisto.php");
	                break;   
	        case "8":
	                header("Location:statistikoj.php");
	                break;
		default:
			switch ($persono["rajtoj"]) {
				case "P":
/*					header("Location:atendiKorektanton.php");
					break;
*/				case "S":
					if (($persono["videbla"]=="J")||($persono["videbla"]=="")) {
						header ("Location:helpo.php?temo=nova");
					} else {
					header("Location:forum/index.php?sid=".$phpbb2mysql_sid.".php");
				}
					break;
				case "K":
					if (($persono["videbla"]=="J")||($persono["videbla"]=="")) {
						header ("Location:helpo.php?temo=nova");
					} else {
						header("Location:miajlernantoj.php");
					}
					break;
				case "A":
					if (($persono["videbla"]=="J")||($persono["videbla"]=="")) {
						header ("Location:helpo.php?temo=nova");
					} else {
						header("Location:administri.php?kategorio=P");
					}
					break;
				case "I":
					if (($persono["videbla"]=="J")||($persono["videbla"]=="")) {
						header ("Location:helpo.php?temo=nova");
					} else {
						header("Location:administri.php?kategorio=F");
					}
					break;
				default:				
					header("Location:forum/index.php?sid=".$phpbb2mysql_sid.".php");
					break;
			}
		}
	}
}
?> 
</html>          