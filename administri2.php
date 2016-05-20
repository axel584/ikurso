<?php
echo "coucou";
session_start();
include "lingvo.inc.php";
include "db.inc.php";
include "webui.inc.php";
malfermiDatumbazon();
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
if (!$persono_id) {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
$celpersono_id=isset($_POST["celpersono_id"])?$_POST["celpersono_id"]:"";

if ($celpersono_id!="") { $celpersono = apartigiPersonon($celpersono_id);}
if ($persono["rajtoj"]!='A'){header("Location:index.php?erarkodo=4");}
$sekso=$_POST["sekso"];
$celenirnomo=$_POST["celenirnomo"];
$familinomo=addslashes($_POST["familinomo"]);
$personnomo=addslashes($_POST["personnomo"]);
$adreso1=addslashes($_POST["adreso1"]);
$adreso2=addslashes($_POST["adreso2"]);
$pasvorto=$_POST["pasvorto"];
$posxtkodo=$_POST["posxtkodo"];
$urbo=$_POST["urbo"];
$lando=$_POST["lando"];
$retadreso=$_POST["retadreso"];
$sistemo=$_POST["sistemo"];
$naskigxdato_jaro=$_POST["naskigxdato_jaro"];
$naskigxdato_monato=$_POST["naskigxdato_monato"];
$naskigxdato_tago=$_POST["naskigxdato_tago"];
$rajtoj=$_POST["rajtoj"];
$kialo=addslashes($_POST["kialo"]);
$noto=$_POST["noto"];
$kurso=$_POST["kurso"];
$stopInfo=$_POST["stopInfo"];
if ($stopInfo=='on') {$stopInfo='J';} else {$stopInfo='N';}

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D,d M Y H:i:s")." GMT");
header("Cache-Control: no-store,no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0

if ($celpersono["sekso"]!=$sekso) { 
   // update en la normala datumbazo
   $query = "update personoj set sekso='$sekso' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

if ($celpersono["enirnomo"]!=$celenirnomo) { 
	// update en la normala datumbazo
   $query = "update personoj set enirnomo='$celenirnomo'  where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

if ($celpersono["familinomo"]!=$familinomo) { 
	// update en la normala datumbazo
   $query = "update personoj set familinomo='$familinomo' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

if ($celpersono["personnomo"]!=$personnomo) { 
	// update en la normala datumbazo
   $query = "update personoj set personnomo='$personnomo' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

if ($celpersono["adreso1"]!=$adreso1) { 
	// update en la normala datumbazo
   $query = "update personoj set adreso1='$adreso1' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}
if ($celpersono["adreso2"]!=$adreso2) { 
	// update en la normala datumbazo
   $query = "update personoj set adreso2='$adreso2' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

if ($celpersono["pasvorto"]!=$pasvorto) { 
	// update en la normala datumbazo
   $query = "update personoj set pasvorto='$pasvorto' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

if ($celpersono["posxtkodo"]!=$posxtkodo) { 
	// update en la normala datumbazo
   $query = "update personoj set posxtkodo='$posxtkodo' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

if ($celpersono["urbo"]!=$urbo) { 
	// update en la normala datumbazo

   $query = "update personoj set urbo='$urbo' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

if ($celpersono["lando"]!=$lando) { 
	// update en la normala datumbazo
   $query = "update personoj set lando='$lando' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

if ($celpersono["retadreso"]!=$retadreso) { 
	// update en la normala datumbazo
   $query = "update personoj set retadreso='$retadreso' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}
if ($celpersono["sistemo"]!=$sistemo) {
	// update en la normala datumbazo
   $query = "update personoj set sistemo='$sistemo' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

if ($celpersono["stop_info"]!=$stopInfo) {
	// update en la normala datumbazo
   $query = "update personoj set stop_info='$stopInfo' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

if ($celpersono["naskigxdato"]!=$naskigxdato_jaro."-".$naskigxdato_monato."-".$naskigxdato_tago) { 
	// update en la normala datumbazo
   $query = "update personoj set naskigxdato='$naskigxdato_jaro-$naskigxdato_monato-$naskigxdato_tago' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

if ($celpersono["rajtoj"]!=$rajtoj) { 
   // update en la normala datumbazo
   $query = "update personoj set rajtoj='$rajtoj' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
   if ($rajtoj=='K'){
   	// aldoni la uzanton al la forum-grupo "korektantoj"
		$demando2 ="INSERT INTO phpbb_user_group (group_id,user_id,user_pending) VALUES ('4','$cel_id','0')";
	   	$result = $bdd->exec($demando2) or die(print_r($bdd->errorInfo()));
	}
   // se ni korektantigas iun kaj li ne sxangxis kiom da lernantoj li volas : auxtomatike, li havos 3 lernantojn.
   if (($rajtoj=='K') && ($celpersono["maksimumo"]==$maksimumo)) { 
	   // update en la normala datumbazo
	   $query = "update personoj set maksimumo='3' where id=$cel_id";
	  $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
   }  
}

if ($celpersono["kialo"]!=$kialo) { 
	// update en la normala datumbazo
   $query = "update personoj set kialo='$kialo' where id=$cel_id";
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

if ($celpersono["kurso"]!=$kurso) { 
	// update en la normala datumbazo
   $query = "update personoj set kurso='$kurso' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = $bdd->exec($query) or die(print_r($bdd->errorInfo()));
}

header("Location:administri.php?celpersono_id=$cel_id&validi=jes");
?>                        
