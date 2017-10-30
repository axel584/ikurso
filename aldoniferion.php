<?php
include "db.inc.php";
include "webui.inc.php";
malfermiDatumbazon();
// ER 05.10.2015 : correction pour passage en PHP 5.4
$_SESSION['persono_id'] = $persono_id;
//session_register("persono_id");
$persono = apartigiPersonon($persono_id);

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D,d M Y H:i:s")." GMT");
header("Cache-Control: no-store,no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0

// tiu funkcio konstruas la liston de cxiuj studantojn
function listiFeriojn() {
     $i=1;
     $demando =  "select * from ferioj where persono=$persono_id";
     $result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
     while($row = $result->fetch()) {
        echo "<tr>";
        echo "<td class=\"normala\" >à partir du</td>";
        // ekdato
        echo "<td class=\"normala\" >&nbsp;";
        ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["ekdato"],$ekdt);
        $ekdt = explode("-",$row["ekdato"]);
        echo $ekdt[2]." ";
        simplaVorto("nomo","monatoj"," where kodo='$ekdt[1]'");
        echo " ".$ekdt[0];
        echo "&nbsp;</td>";

        echo "<td class=\"normala\" >jusqu’au</td>";
        // findato
        echo "<td class=\"normala\" >&nbsp;";
        //ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $row["findato"],$fndt);
        $fndt = explode("-",$row["findato"]);
        echo $fndt[2]." ";
        simplaVorto("nomo","monatoj"," where kodo='$fndt[1]'");
        echo " ".$fndt[0];
        echo "&nbsp;</td>";

        echo "<td class=\"normala\" ><input type=\"button\" value=\"Supprimer\" onClick=\"location.href='nuligiferion.php?idferion=".$row["id"]."';\"></td>";
        echo "</tr>";
     }
}


?>
<html>
<head>
<title>ikurso</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" <? if ($validi=="jes") { echo "onLoad=\"window.alert('Vos données ont été enregistrées');\""; } ?>>
<?
	pagxkapo();
	menuo($persono["enirnomo"],$persono["rajtoj"]);
?>
<center>
  <table border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td nowrap>
  <div align="center" class="titolo">G&eacute;rer ses vacances</div>
  </td>
  </tr>
  <tr>
  <td bgcolor="#d0d8df">&nbsp;</td>
  </tr>
  <tr>
    <td nowrap>
  <table border="0">
    <form name="aldoniferion" action="aldoniferion2.php" method="POST">
  <? listiFeriojn(); 
      echo "<tr>";
        echo "<td class=\"normala\" >à partir du</td>";
        // ekdato
        echo "<td>";
        echo "<input type=\"text\" name=\"ekdt_tago\" size=\"3\" maxlength=\"2\">";
konstruiMenuon("ekdt_monato","monatoj","kodo","nomo",""," ");
        echo "<input type=\"text\" name=\"ekdt_jaro\" size=\"5\" maxlength=\"4\">";
        echo "</td>";

        echo "<td class=\"normala\" >jusqu’au</td>";
        // findato
        echo "<td>";
        echo "<input type=\"text\" name=\"findt_tago\" size=\"3\" maxlength=\"2\">";
konstruiMenuon("findt_monato","monatoj","kodo","nomo","","");
        echo "<input type=\"text\" name=\"findt_jaro\" size=\"5\" maxlength=\"4\">";
        echo "</td>";

        echo "<td class=\"normala\" ><input type=\"submit\" value=\"Insérer\"></td>";
        echo "</tr>";
?>
  </table>
    </form>

  </td>

   </tr>

   <tr>

   <td bgcolor="#d0d8df">&nbsp;</td>

   </tr>

   </table>
  <p>&nbsp;</p>
</center>
</body>


</html>



