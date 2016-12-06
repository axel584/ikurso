<?php
include "util.php";
if ($rajto!='A' && $rajto!='I'){header("Location:index.php?erarkodo=4");}
$persono_id=isset($_GET["persono_id"])?$_GET["persono_id"]:"";
$persono = apartigiPersonon($persono_id);
$_SESSION["persono_id"]=$persono["id"];
protokolo($persono["id"],"ENIRO","administranto eniris kiel $enirnomo");
redirigeParDroits($persono);
?>       
