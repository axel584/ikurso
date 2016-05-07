<?
php_track_vars;
include "lingvo.inc.php";
include "db.inc.php";
include "webui.inc.php";
malfermiDatumbazon();
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
$celpersono_id=$_POST["celpersono_id"];

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

if ($celpersono["id"]=="") { 
   if (($retadreso=="") || ($celenirnomo=="") || ($pasvorto=="")) {
      header("Location:administri.php?erarkodo=2");
   } else {
      $query .="select * from personoj where enirnomo='$celenirnomo'";
       mysql_select_db("ikurso");
        $result = mysql_query($query) or die ("INSERT : Invalid query :".$query);
        if (mysql_num_rows($result) =="1") {
        	// tiu enirnomo jam ekzistas
          header("Location:administri.php?erarkodo=7");
        } else {
        	// nur kreas novan personon kun tauxgaj informoj kaj prenas tiujn informojn
            $cel_id = kreiPersonon($enirnomo,$pasvorto,$retadreso,$lingvo);
            $celpersono = apartigiPersonon($cel_id);
       }
   }
} else {
   $cel_id=$celpersono["id"];
}

if ($celpersono["sekso"]!=$sekso) { 
   // update en la normala datumbazo
   $query = "update personoj set sekso='$sekso' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
   // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["sekso"]);
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $sekso");
}

if ($celpersono["enirnomo"]!=$celenirnomo) { 
	// update en la normala datumbazo
   $query = "update personoj set enirnomo='$celenirnomo'  where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["enirnomo"]);
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $celenirnomo");
}

if ($celpersono["familinomo"]!=$familinomo) { 
	// update en la normala datumbazo
   $query = "update personoj set familinomo='$familinomo' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["familinomo"]);
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $familinomo");
}

if ($celpersono["personnomo"]!=$personnomo) { 
	// update en la normala datumbazo
   $query = "update personoj set personnomo='$personnomo' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["personnomo"]);
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $personnomo");
}

if ($celpersono["adreso1"]!=$adreso1) { 
	// update en la normala datumbazo
   $query = "update personoj set adreso1='$adreso1' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["adreso1"]);
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $adreso1");
}
if ($celpersono["adreso2"]!=$adreso2) { 
	// update en la normala datumbazo
   $query = "update personoj set adreso2='$adreso2' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["adreso2"]);
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $adreso2");
}

if ($celpersono["pasvorto"]!=$pasvorto) { 
	// update en la normala datumbazo
   $query = "update personoj set pasvorto='$pasvorto' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["pasvorto"]);
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $pasvorto");
}

if ($celpersono["posxtkodo"]!=$posxtkodo) { 
	// update en la normala datumbazo
   $query = "update personoj set posxtkodo='$posxtkodo' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["posxtkodo"]);
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $posxtkodo");
}

if ($celpersono["urbo"]!=$urbo) { 
	// update en la normala datumbazo

   $query = "update personoj set urbo='$urbo' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["urbo"]);
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $urbo");
}

if ($celpersono["lando"]!=$lando) { 
	// update en la normala datumbazo
   $query = "update personoj set lando='$lando' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["lando"]);
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $lando");
}

if ($celpersono["retadreso"]!=$retadreso) { 
	// update en la normala datumbazo
   $query = "update personoj set retadreso='$retadreso' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["retadreso"]);
	//protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $retadreso");
}
if ($celpersono["sistemo"]!=$sistemo) {
	// update en la normala datumbazo
   $query = "update personoj set sistemo='$sistemo' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["sistemo"]);
  	//protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $sistemo");
}

if ($celpersono["stop_info"]!=$stopInfo) {
	// update en la normala datumbazo
   $query = "update personoj set stop_info='$stopInfo' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["stop_info"]);
  	//protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $stopInfo");
}

if ($celpersono["naskigxdato"]!=$naskigxdato_jaro."-".$naskigxdato_monato."-".$naskigxdato_tago) { 
	// update en la normala datumbazo
   $query = "update personoj set naskigxdato='$naskigxdato_jaro-$naskigxdato_monato-$naskigxdato_tago' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["naskigxdato"]);
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $naskigxdato_jaro-$naskigxdato_monato-$naskigxdato_tago");
}

if ($celpersono["rajtoj"]!=$rajtoj) { 
   // update en la normala datumbazo
   $query = "update personoj set rajtoj='$rajtoj' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["rajtoj"]);
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $rajtoj");
   if ($rajtoj=='K'){
   	// aldoni la uzanton al la forum-grupo "korektantoj"
		$demando2 ="INSERT INTO phpbb_user_group (group_id,user_id,user_pending) VALUES ('4','$cel_id','0')";
	   mysql_select_db("ikurso");
		$result2 = mysql_query($demando2) or die ("INSERT : Invalid query :".$demando2);
	}
   // se ni korektantigas iun kaj li ne sxangxis kiom da lernantoj li volas : auxtomatike, li havos 3 lernantojn.
   if (($rajtoj=='K') && ($celpersono["maksimumo"]==$maksimumo)) { 
	   // update en la normala datumbazo
	   $query = "update personoj set maksimumo='3' where id=$cel_id";
	   mysql_select_db("ikurso");
	   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
	      // insert en la protokolo por memori cxion
	  //protokolo($cel_id,"UPDATE ADM","baznombro de lernantoj : 3");
   }  
}

if ($celpersono["kialo"]!=$kialo) { 
	// update en la normala datumbazo
   $query = "update personoj set kialo='$kialo' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["kialo"]);
   // neniu protokolo por tio, cxar gxi estas ofte tre granda
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $kialo");
}

if ($celpersono["kurso"]!=$kurso) { 
	// update en la normala datumbazo
   $query = "update personoj set kurso='$kurso' where id=$cel_id";
   mysql_select_db("ikurso");
   $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
      // insert en la protokolo por memori cxion
   $malnova=addslashes($celpersono["kurso"]);
   //protokolo($cel_id,"UPDATE ADM","malnova: $malnova -nova: $kurso");
}

header("Location:administri.php?celpersono_id=$cel_id&validi=jes");
?>                        