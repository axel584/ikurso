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
   $stmt = $bdd->prepare("update personoj set sekso=? where id=?");
   $stmt->execute([$sekso, $celpersono_id]);
}

if ($celpersono["enirnomo"]!=$celenirnomo) { 
	// update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set enirnomo=? where id=?");
   $stmt->execute([$celenirnomo, $celpersono_id]);
}

if ($celpersono["familinomo"]!=$familinomo) { 
	// update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set familinomo=? where id=?");
   $stmt->execute([$familinomo, $celpersono_id]);
}

if ($celpersono["personnomo"]!=$personnomo) { 
	// update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set personnomo=? where id=?");
   $stmt->execute([$personnomo, $celpersono_id]);
}

if ($celpersono["adreso1"]!=$adreso1) { 
	// update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set adreso1=? where id=?");
   $stmt->execute([$adreso1, $celpersono_id]);
}
if ($celpersono["adreso2"]!=$adreso2) { 
	// update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set adreso2=? where id=?");
   $stmt->execute([$adreso2, $celpersono_id]);
}

if ($celpersono["posxtkodo"]!=$posxtkodo) { 
	// update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set posxtkodo=? where id=?");
   $stmt->execute([$posxtkodo, $celpersono_id]);
}

if ($celpersono["urbo"]!=$urbo) { 
	// update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set urbo=? where id=?");
   $stmt->execute([$urbo, $celpersono_id]);
}

if ($celpersono["lando"]!=$lando && $lando!="-- pays --") { 
	// update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set lando=? where id=?");
   $stmt->execute([$lando, $celpersono_id]);
}

if ($celpersono["retadreso"]!=$retadreso) { 
	// update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set retadreso=? where id=?");
   $stmt->execute([$retadreso, $celpersono_id]);
}
if ($celpersono["sistemo"]!=$sistemo) {
	// update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set sistemo=? where id=?");
   $stmt->execute([$sistemo, $celpersono_id]);
}

if ($celpersono["stop_info"]!=$stopInfo) {
	// update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set stop_info=? where id=?");
   $stmt->execute([$stopInfo, $celpersono_id]);
}

if ($celpersono["naskigxdato"]!=$naskigxdato_jaro."-".$naskigxdato_monato."-".$naskigxdato_tago) { 
	if ($naskigxdato_tago!="" && $naskigxdato_monato!="" && $naskigxdato_jaro!="") {
      $stmt = $bdd->prepare("update personoj set naskigxdato=? where id=?");
      $stmt->execute([$naskigxdato_jaro.'-'.$naskigxdato_monato.'-'.$naskigxdato_tago, $celpersono_id]);
   }
}

if ($celpersono["rajtoj"]!=$rajtoj) { 
   // update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set rajtoj=? where id=?");
   $stmt->execute([$rajtoj, $celpersono_id]);
   // se ni korektantigas iun kaj li ne sxangxis kiom da lernantoj li volas : auxtomatike, li havos 3 lernantojn.
   if (($rajtoj=='K') && ($celpersono["maksimumo"]==$maksimumo)) { 
	   // update en la normala datumbazo
	   $stmt = $bdd->prepare("update personoj set maksimumo=? where id=?");
	   $stmt->execute(['3', $celpersono_id]);
   }  
}

if ($celpersono["kialo"]!=$kialo) { 
	// update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set kialo=? where id=?");
   $stmt->execute([$kialo, $celpersono_id]);
}

if ($celpersono["kurso"]!=$kurso) { 
	// update en la normala datumbazo
   $stmt = $bdd->prepare("update personoj set kurso=? where id=?");
   $stmt->execute([$kurso, $celpersono_id]);
}

header("Location:administri.php?celpersono_id=$celpersono_id&validi=jes");
?>                        
