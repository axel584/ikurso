<?php
include "db.inc.php";
malfermidatumbazon();
// ER 05.10.2015 correction pour passage en PHP 5.4
//session_register("persono_id");
$_SESSION['persono_id']=$persono_id;
if ($persono_id=="") {header("Location:index.php?erarkodo=4");} else {
  $ekdato=$ekdt_jaro."-".$ekdt_monato."-".$ekdt_tago;
  $findato=$findt_jaro."-".$findt_monato."-".$findt_tago;
  $demando = "INSERT INTO ferioj (id,persono,ekdato,findato) values ('','".$persono_id."','".$ekdato."','".$findato."')";
  mysql_select_db( "ikurso");
  $result = mysql_query($demando) or die (  "INSERT : malbona demando :".$demando);
  header("Location:aldoniferion.php");
}
?>

