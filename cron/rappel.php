<?php
include "../util.php";
$query = "SELECT personoj.id,enirnomo,retadreso,personnomo,familinomo,nuna_kurso.kurso,nuna_kurso.nunleciono,lastdato FROM nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and nuna_kurso.stato='K' and lastdato=DATE_SUB(CURDATE(), INTERVAL 6 DAY) and stop_rappel='N'";
$result = $bdd->query($query);
 while($row = $result->fetch()) {
         echo $row["id"];  
     }
?>