<?php
session_start();
include "db.inc.php";
include "webui.inc.php";
malfermiDatumbazon();
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
if (!$persono_id) {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
$celpersono_id=isset($_POST["celpersono_id"])?$_POST["celpersono_id"]:"";
if ($celpersono_id!="") { $celpersono = apartigiPersonon($celpersono_id);}
if ($persono["rajtoj"]!='A'){header("Location:index.php?erarkodo=4");}
$sekso=isset($_POST["sekso"])?$_POST["sekso"]:"";
$celenirnomo=$_POST["celenirnomo"];
$familinomo=addslashes($_POST["familinomo"]);
$personnomo=addslashes($_POST["personnomo"]);
$adreso1=addslashes($_POST["adreso1"]);
$adreso2=addslashes($_POST["adreso2"]);
$posxtkodo=$_POST["posxtkodo"];
$urbo=$_POST["urbo"];
$lando=isset($_POST["lando"])?$_POST["lando"]:"";
$retadreso=$_POST["retadreso"];
$naskigxdato_jaro=$_POST["naskigxdato_jaro"];
$naskigxdato_monato=$_POST["naskigxdato_monato"];
$naskigxdato_tago=$_POST["naskigxdato_tago"];
$rajtoj=$_POST["rajtoj"];
$kialo=addslashes($_POST["kialo"]);
$noto=isset($_POST["noto"])?$_POST["noto"]:"";
$kurso=$_POST["kurso"];
$stopInfo=isset($_POST["stopInfo"])?$_POST["stopInfo"]:"";
if ($stopInfo=='on') {$stopInfo='J';} else {$stopInfo='N';}

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D,d M Y H:i:s")." GMT");
header("Cache-Control: no-store,no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0

if ($celpersono["sekso"]!=$sekso) { 
   // update en la normala datumbazo
   $query = "update personoj set sekso='$sekso' where id=$celpersono_id";
   $result = $bdd->exec($query);
}

if ($celpersono["enirnomo"]!=$celenirnomo) { 
	// update en la normala datumbazo
   $query = "update personoj set enirnomo='$celenirnomo'  where id=$celpersono_id";
   $result = $bdd->exec($query);
}

if ($celpersono["familinomo"]!=$familinomo) { 
	// update en la normala datumbazo
   $query = "update personoj set familinomo='$familinomo' where id=$celpersono_id";
   $result = $bdd->exec($query);
}

if ($celpersono["personnomo"]!=$personnomo) { 
	// update en la normala datumbazo
   $query = "update personoj set personnomo='$personnomo' where id=$celpersono_id";
   $result = $bdd->exec($query);
}

if ($celpersono["adreso1"]!=$adreso1) { 
	// update en la normala datumbazo
   $query = "update personoj set adreso1='$adreso1' where id=$celpersono_id";
   $result = $bdd->exec($query);
}
if ($celpersono["adreso2"]!=$adreso2) { 
	// update en la normala datumbazo
   $query = "update personoj set adreso2='$adreso2' where id=$celpersono_id";
   $result = $bdd->exec($query);
}

if ($celpersono["posxtkodo"]!=$posxtkodo) { 
	// update en la normala datumbazo
   $query = "update personoj set posxtkodo='$posxtkodo' where id=$celpersono_id";
   $result = $bdd->exec($query);
}

if ($celpersono["urbo"]!=$urbo) { 
	// update en la normala datumbazo
   $query = "update personoj set urbo='$urbo' where id=$celpersono_id";
   $result = $bdd->exec($query);
}

if ($celpersono["lando"]!=$lando && $lando!="-- pays --") { 
	// update en la normala datumbazo
   $query = "update personoj set lando='$lando' where id=$celpersono_id";
   $result = $bdd->exec($query);
}

if ($celpersono["retadreso"]!=$retadreso) { 
	// update en la normala datumbazo
   $query = "update personoj set retadreso='$retadreso' where id=$celpersono_id";
   $result = $bdd->exec($query);
}
if ($celpersono["sistemo"]!=$sistemo) {
	// update en la normala datumbazo
   $query = "update personoj set sistemo='$sistemo' where id=$celpersono_id";
   $result = $bdd->exec($query);
}

if ($celpersono["stop_info"]!=$stopInfo) {
	// update en la normala datumbazo
   $query = "update personoj set stop_info='$stopInfo' where id=$celpersono_id";
   $result = $bdd->exec($query);
}

if ($celpersono["naskigxdato"]!=$naskigxdato_jaro."-".$naskigxdato_monato."-".$naskigxdato_tago) { 
	if ($naskigxdato_tago!="" && $naskigxdato_monato!="" && $naskigxdato_jaro!="") {
      $query = "update personoj set naskigxdato='$naskigxdato_jaro-$naskigxdato_monato-$naskigxdato_tago' where id=$celpersono_id";
      $result = $bdd->exec($query);
   }
}

if ($celpersono["rajtoj"]!=$rajtoj) { 
   // update en la normala datumbazo
   $query = "update personoj set rajtoj='$rajtoj' where id=$celpersono_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
   // se ni korektantigas iun kaj li ne sxangxis kiom da lernantoj li volas : auxtomatike, li havos 3 lernantojn.
   if (($rajtoj=='K') && ($celpersono["maksimumo"]==$maksimumo)) { 
	   // update en la normala datumbazo
	   $query = "update personoj set maksimumo='3' where id=$celpersono_id";
	  $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
   }  
}

if ($celpersono["kialo"]!=$kialo) { 
	// update en la normala datumbazo
   $query = "update personoj set kialo='$kialo' where id=$celpersono_id";
   $result = $bdd->exec($query);
}

if ($celpersono["kurso"]!=$kurso) { 
	// update en la normala datumbazo
   $query = "update personoj set kurso='$kurso' where id=$celpersono_id";
   $result = $bdd->exec($query);
}

header("Location:administri.php?celpersono_id=$celpersono_id&validi=jes");
?>                        
