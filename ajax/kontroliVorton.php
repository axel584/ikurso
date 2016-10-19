<?php
include "../util.php";
$vorto_id=isset($_GET["vorto_id"])?$_GET["vorto_id"]:"";
$persono_id=isset($_GET["persono_id"])?$_GET["persono_id"]:"";
$respondo=isset($_GET["respondo"])?$_GET["respondo"]:"";

echo "vorto_id ".$vorto_id."<br/>";
echo "persono_id ".$persono_id."<br/>";
echo "respondo ".$respondo."<br/>";

?>
