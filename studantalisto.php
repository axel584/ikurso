<?php
// Cette page devrait être virer du site ? (AR 8/10/10)
include "lingvo.inc.php";
include "db.inc.php";
include "webui.inc.php";
include "forum/includes/forum.lib.php";
malfermiDatumbazon();
// ER 05.10.2015 : correction pour passage en PHP 5.4
//session_register("persono_id");
$_SESSION['persono_id']=$persono_id;
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
if (($persono["rajtoj"]!='A')&&($persono["rajtoj"]!='K')) {header("Location:index.php?erarkodo=4");}
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0

// tiu funkcio konstruas la liston de cxiuj studantojn
function listiStudantojn() {
     global $lingvo,$persono_id,$lgv_nekomencita,$lgv_neniuLernanto,$lgv_nuna_leciono,$lgv_ek,$idnoto;
     $i=0;
     echo "<table width=\"100%\" border=0 class=\"normala\" cellpadding=0 cellspacing=0>";
     mysql_select_db( "ikurso");
     // studantoj kiu NE jam komencis lerni (stato de nuna_kurso valoras 'N' kiel NE komencita)
     $demando =  "select personoj.naskigxdato as naskigxdato,personoj.id as id,personoj.enirnomo as enirnomo,personoj.familinomo as familinomo,personoj.personnomo as personnomo,personoj.retadreso as retadreso,personoj.adreso1 as adreso1,personoj.adreso2 as adreso2,personoj.lando as lando,personoj.posxtkodo as posxtkodo,personoj.urbo as urbo,personoj.kialo as kialo,personoj.noto as noto from nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and personoj.rajtoj='S' and personoj.lingvo='$lingvo' and nuna_kurso.stato='N' and nuna_kurso.korektanto='$persono_id';";
     mysql_select_db( "ikurso");
     $result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando);
     while($row = mysql_fetch_array($result)) {
        echo "<tr";
           if ($i%2==1) { echo " bgcolor=\"#d0d8df\"";}
        echo "><td>";
        $demando2="select (TO_DAYS(NOW()) - TO_DAYS(ekdato)) as numtagoj from nuna_kurso where studanto='".$row["id"]."' and stato='N'";
        $result2 = mysql_query($demando2) or die (  "INSERT : malbona demando :".$demando2);
        while($row2 = mysql_fetch_array($result2)) {
        	echo $row2["numtagoj"];	
        }
        echo "</td><td>";
        echo "<a href=\"mailto:".$row["retadreso"]."\">".$row["enirnomo"]."</a>";
        echo "&nbsp;-&nbsp;".$row["retadreso"]."&nbsp;-&nbsp;n&eacute;(e) le ".$row["naskigxdato"]."<br>";
        echo $lgv_nekomencita;
        echo "</td><td>";
        echo $row["personnomo"]." ".$row["familinomo"]."<br>";
        if ($row["adreso1"]!="") echo $row["adreso1"]."<br>";
        if ($row["adreso2"]!="") echo $row["adreso2"]."<br>";
        echo $row["lando"]."-".$row["posxtkodo"]." ".$row["urbo"]."<br>";
        echo "</td></tr>";
        echo "<tr";
        if ($i%2==1) { echo " bgcolor=\"#d0d8df\"";}
        echo "><td colspan=\"3\">";
        if ($row["kialo"]!="") { echo $row["kialo"]."<br>"; }

        // notoj aldoneblaj per la korektanto
        if ($idnoto!=$row["id"]) {
           echo "<a href=\"studantalisto.php?idnoto=".$row["id"]."\">";
           echo "<img src=\"bildoj/skribi.gif\" border=\"0\"></a><font color=\"red\">".$row["noto"]."</font></td><td>";
        } else {
           echo "<form name=\"formnoto\" metho=\"post\" action=\"sxangxinoton2.php\">";
           echo "<input type=\"hidden\" name=\"idnoto\" value=\"".$idnoto."\">";
           echo "<input type=\"text\" size=\"80\" name=\"noto\" value=\"".$row["noto"]."\">";
           echo "<input type=\"submit\" value=\"".$lgv_ek."\">";
           echo "</form>";
        }        $i++;
     }
     // studantoj kiu jam komencis lerni (stato de nuna_kurso valoras 'K' kiel Komencita)
     $demando =  "select personoj.naskigxdato as naskigxdato,personoj.id as id,nuna_kurso.kurso as kurso,nuna_kurso.nunleciono as leciono,personoj.enirnomo as enirnomo,personoj.familinomo as familinomo,personoj.personnomo as personnomo,personoj.retadreso as retadreso,personoj.adreso1 as adreso1,personoj.adreso2 as adreso2,personoj.lando as lando,personoj.posxtkodo as posxtkodo,personoj.urbo as urbo,personoj.kialo as kialo,personoj.noto as noto from nuna_kurso,personoj where nuna_kurso.studanto=personoj.id and personoj.rajtoj='S' and personoj.lingvo='$lingvo' and nuna_kurso.stato='K' and nuna_kurso.korektanto='$persono_id';";
     mysql_select_db( "ikurso");
     $result = mysql_query($demando) or die (  "INSERT : malbona demando :".$demando);
     while($row = mysql_fetch_array($result)) {
        echo "<tr";
           if ($i%2==1) { echo " bgcolor=\"#d0d8df\"";}
        echo "><td>";
        // atentu ke la studanto ne movigxis antaux 15 tagoj
        $demando2="select (TO_DAYS(NOW()) - TO_DAYS(lastdato)) as numtagoj,lastdato from nuna_kurso where studanto='".$row["id"]."' and stato='K'";
        $result2 = mysql_query($demando2) or die (  "INSERT : malbona demando :".$demando2);
        while($row2 = mysql_fetch_array($result2)) {
        	echo $row2["numtagoj"];	
        }
        echo "</td><td>";
        echo "<a href=\"mailto:".$row["retadreso"]."\">".$row["enirnomo"]."</a>";
        echo "&nbsp;-&nbsp;".$row["retadreso"]."&nbsp;-&nbsp;n&eacute;(e) le ".$row["naskigxdato"]."<br>";
        $demando2="select titolo from lecionoj where numero='".$row["leciono"]."' and kurso='".$row["kurso"]."' and lingvo='$lingvo'";
        $result2 = mysql_query($demando2) or die (  "INSERT : malbona demando :".$demando2);
        while($row2 = mysql_fetch_array($result2)) {
        	echo $lgv_nuna_leciono." : ".$row2["titolo"]."<br>";	
        }
        echo "</td><td>";
        echo $row["personnomo"]." ".$row["familinomo"]."<br>";
        if ($row["adreso1"]!="") echo $row["adreso1"]."<br>";
        if ($row["adreso2"]!="") echo $row["adreso2"]."<br>";
        echo $row["lando"]."-".$row["posxtkodo"]." ".$row["urbo"]."<br>";
        echo "</td></tr>";
        echo "<tr";
        if ($i%2==1) { echo " bgcolor=\"#d0d8df\"";}
        echo "><td colspan=\"3\">";
        if ($row["kialo"]!="") { echo $row["kialo"]."<br>"; }

        // notoj aldoneblaj per la korektanto
        if ($idnoto!=$row["id"]) {
           echo "<a href=\"studantalisto.php?idnoto=".$row["id"]."\">";
           echo "<img src=\"bildoj/skribi.gif\" border=\"0\"></a><font color=\"red\">".$row["noto"]."</font></td><td>";
        } else {
           echo "<form name=\"formnoto\" metho=\"post\" action=\"sxangxinoton2.php\">";
           echo "<input type=\"hidden\" name=\"idnoto\" value=\"".$idnoto."\">";
           echo "<input type=\"text\" size=\"80\" name=\"noto\" value=\"".$row["noto"]."\">";
           echo "<input type=\"submit\" value=\"".$lgv_ek."\">";
           echo "</form>";
        }
        $i++;
     }
     if ($i==0) { echo "<tr><td>".$lgv_neniuLernanto."</td></tr>";}
     echo "</table>";
}

?>
<html>
<head>
<title>ikurso</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" dir="<?php echo $lgv_direkto; ?>">
<center>
  <table border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td nowrap>
  <div align="center" class="titolo"><?php echo $lgv_lernantalisto; ?></div>
  </td>
  </tr>
  <tr>
  <td bgcolor="#d0d8df">&nbsp;</td>
  </tr>
  <tr>
    <td nowrap>
    <?php listiStudantojn(); ?>
</center>

</body>

</html>


                    
                    
                    
                    
                    
                    
                    
                    
                    