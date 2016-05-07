<?
include "db.inc.php";
malfermidatumbazon();
// ER 05.10.2015 : correction pour passage en PHP 5.4
//session_register("persono_id");
$_SESSION['persono_id']=$persono_id;
if ($persono_id=="") {header("Location:index.php?erarkodo=4");} else {
     $demando =  "select persono from ferioj where id=".$idferion; 
     mysql_select_db( "ikurso"); 
     $result = mysql_query($demando) or die (  "INSERT : malbona demando :".$demando); 
     while($row = mysql_fetch_array($result)) {
         $havanto_da_ferio=$row["persono"];  
     }
     if ($havanto_da_ferio!=$persono_id) {header("Location:index.php?erarkodo=4");} else {
        $demando = "DELETE from ferioj where id=".$idferion;
        mysql_select_db( "ikurso");
        $result = mysql_query($demando) or die (  "INSERT : malbona demando :".$demando);
        header("Location:aldoniferion.php");
     }
}
?>

