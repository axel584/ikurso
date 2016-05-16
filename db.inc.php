<?php
// tiu funkcio kunligas la datumbazon. 
// Elirvaluo : referenco pri la datumbazo
function malfermiDatumbazon () {
    global $bdd;
     $bdd = new PDO('mysql:host=localhost;dbname=ikurso;charset=utf8', 'jefo', '***REMOVED***');
}


// tiu funkcio malfermas la datumbazan ligon (neniam uzita, la datumbazo estas malfermita je la fino de la PHP-pagxo)
function fermiDatumbazon() {
   mysql_close();
}

// tiu funkcio kreas novan personon, gxi nur bezonas devigajn parametrojn
// parametroj : 
// $enirnomo - kasxnomo uzita por eniri en la ttt-ejo
// $pasvorto - vorto uzita por eniri en la ttt-ejo kun la enirnomo
// $retadreso - uzita por sendi mesagxon kun la nomo de la korektanto (por la studantoj) aux de la studanto (por la Korektantoj)
// Elirvaluo : id de la persono (unika nombro por retrovi iun)
function kreiPersonon($enirnomo,$pasvorto,$retadreso,$lingvo) {
    global $bdd;
     $query = "insert into personoj";
     $query .="(enirnomo,pasvorto,retadreso,ekdato,lingvo) ";
     $query .="values ('$enirnomo','$pasvorto','$retadreso',now(),'$lingvo')";
     mysql_select_db("ikurso");
     $result = mysql_query($query) or die ("INSERT : Invalid query :".$query);
     return mysql_insert_id();
}

// tiu funcio aldonas (aux sxangxas) informojn pri iu
// parametroj ; kompreneblaj per ili mem krom :
// id - unika nombro redoni dum la kreado aux retrovi en la datumbazo per la enirnomo kaj la pasvorto
// ndtago : tago de la naskigxdato (1-->31) (ekz. : 11)
// ndmonato : monato de la naskigxdato (1-->12) (ekz. : 5 (por majo))
// ndjaro : jaro de la naskigxdato per 4 ciferoj (ekz. : 1978)
// lingvo : uzita lingvo de la persono : TRE GRAVA AFERO !!! cxiuj franclingvaj korektantoj korektas franclingvajn studantojn. cxiuj brazillingvaj korektantoj korektas brazillingvajn studantojn ktp.
function modifiPersonon ($id,$sekso,$familinomo,$personnomo,$adreso1,$adreso2,$posxtkodo,$urbo,$lando,$ndtago,$ndmonato,$ndjaro,$kialo,$maksimumo,$kurso,$sistemo,$stopInfo) {
    global $bdd;
     $query = "update personoj set ";
     $query .= "sekso='$sekso',";
     $query .= "familinomo='$familinomo',";
     $query .= "personnomo='$personnomo',";
     $query .= "adreso1='$adreso1',";
     $query .= "adreso2='$adreso2',";
     $query .= "posxtkodo='$posxtkodo',";
     $query .= "urbo='$urbo',";
     $query .= "lando='$lando',";
     $query .= "naskigxdato='$ndjaro-$ndmonato-$ndtago',";
     $query .= "kialo='$kialo',";
     $query .= "maksimumo='$maksimumo',";
     $query .= "kurso='$kurso',";
     $query .= "sistemo='$sistemo',";
     $query .= "stop_info='$stopInfo' ";
     $query .= "where id=$id";
     mysql_select_db("ikurso");

     $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
}

// tiu funkcio trovas iun per lia unika numero (id) kaj eldonas objekton kun tiu persono.
// parametro : id : unika numero
// elirvaluo : $persono : objekto
function apartigiPersonon($id) {
	global $bdd;
	$query = "select * from personoj where id=".$id;
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$persono = $result->fetch();
	return $persono;
}

// tiu funkcio kontrolas iun per lia enirnomo kaj lia pasvorto
// parametro : enirnomo kaj pasvorto
// elirvaluo : 0 se la persono ne ekzistas (la pasvorto maltrafas...)
// > 0 : la unika numero de la persono
function kontroliPersonon($enirnomo,$pasvorto) {
	global $bdd;
	$pasvorto=strtoupper($pasvorto);
	$enirnomo=strtoupper($enirnomo);
	$query = "select * from personoj where upper(enirnomo)='$enirnomo' and upper(pasvorto)='$pasvorto'";
	$result = $bdd->query($query) or die(print_r($bdd->errorInfo()));
	$row = $result->fetch();
	if (!$row) {
		return "0";
	} else {
		return $row['id'];
	}
}

/**********************************************************************************
 *
 * tiu funkcio donas la liston de lernantoj au korektantoj, kiu logas en la sama departemento
 *
 **********************************************************************************
 * ENTREE
 * $idDepartemento = numero de la departemento
 * $rajtoj = K (se oni volas liston de korektantoj) au S se listo de lernantoj
 * SORTIE
 * $samideanoj = listo de la korektantoj au lernantoj de la sama departemento
*/
function listoDepartemento($idDepartemento, $rajtoj) {
	global $bdd;
	// ni sercas la liston de ciuj korektantoj au lernantoj de la sama departemento
	if ($rajtoj=="K")
		$demando = "select distinct personoj.id,personoj.enirnomo,personoj.personnomo,personoj.familinomo,personoj.posxtkodo,personoj.urbo from personoj,nuna_kurso where personoj.id=nuna_kurso.korektanto and posxtkodo like '".$idDepartemento."%' and lando='FR'";
	else
		$demando = "select distinct personoj.id,personoj.enirnomo,personoj.personnomo,personoj.familinomo,personoj.posxtkodo,personoj.urbo from personoj,nuna_kurso where personoj.id=nuna_kurso.studanto and (nuna_kurso.stato='K' or nuna_kurso.stato='F') and (personoj.rajtoj='S') and posxtkodo like '".$idDepartemento."%' and lando='FR'";
	$result = mysql_query($demando) or die ("SELECT : malbona demando :".$demando);
	$i=0;
	while ($row = mysql_fetch_array($result)){
		/* à décommenter si on passe les pages en utf-8
		$samideanoj[$i]['id']=utf8_encode($row['id']);
		$samideanoj[$i]['enirnomo']=utf8_encode($row['enirnomo']);
		$samideanoj[$i]['personnomo']=utf8_encode($row['personnomo']);
		$samideanoj[$i]['posxtkodo']=utf8_encode($row['posxtkodo']);
		$samideanoj[$i]['urbo']=utf8_encode($row['urbo']);
		*/
		$samideanoj[$i]['id']=$row['id'];
		$samideanoj[$i]['enirnomo']=$row['enirnomo'];
		$samideanoj[$i]['personnomo']=$row['personnomo'];
		$samideanoj[$i]['posxtkodo']=$row['posxtkodo'];
		$samideanoj[$i]['urbo']=$row['urbo'];
		$i++;
	}
	return $samideanoj;
}
/**********************************************************************************
 *
 * fonction konstruiMenuon() : affiche une liste de choix pour les menus déroulants
 * DEPRECATED : à remplacer par la fonction konstruiListon() ci-après
 *
 ********************************************************************************** 
*/
// tiu funkcio konstruas HTML-menuon "select"
// nomo = nomo en la HTML formularo
// tabelo = nomo de la tabelo uzita por konstrui la HTML-menuon
// valuo = nomo de la vertikalo uzita por la valuo de la menuo
// vidigito = nomo de la vertikalo kiu estas vidigita
// elektita = valuo kiu estas elektita
// aliavaluo + aliavidigito = alia valuo kiu ne ekzistas en la tabelo
// kie = kondicio por elekti la bonajn vicojn (povas malpleni)
function konstruiMenuon($nomo,$tabelo,$valuo,$vidigito,$elektita,$kie,$unuavaluo) {
    global $bdd;
     $demando =  "select $valuo,$vidigito from $tabelo $kie"; 
    $result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
     echo "<select name=\"$nomo\">";
     echo "<option value=''>".$unuavaluo."</option>";  
     while($row = $result->fetch()) {
         echo "<option value=\"".$row["$valuo"]."\" ";
         if ($row["$valuo"]==$elektita) { echo "selected";}
         echo " >".$row["$vidigito"]."</option>";  
     }
     if (($aliavaluo!="") || ($aliavidigito!="")) {
          echo "<option value=\"$aliavaluo\" ";
          if ($aliavaluo==$elektita) { echo "selected";}
          echo " >".$aliavidigito."</option>";
     }
     echo "</select>";
}
/**********************************************************************************
 *
 * fonction konstruiListon() : construit une liste de choix pour les menus déroulants
 *
 ********************************************************************************** 
 * EN
 * $tabelo : table de la base où se trouvent les choix
 * $valuo : nom du champ à extraire de la table
 * $vidigito
 * $kie : condition de sélection
 * EL
 * $listo : liste de choix à afficher
 */
function konstruiListon($tabelo,$valuo,$vidigito,$kie) {
    global $bdd;
	 $demando =  "select $valuo,$vidigito from $tabelo $kie"; 
	 $result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
	 
	 $i=0;
	 while($row = $result->fetch()) {
	 	$menuo[$i]["valuo"] = al_utf8($row["$valuo"]);
	 	$menuo[$i]["vidigito"] = al_utf8($row["$vidigito"]);
	 	$i++;
	}
	return $menuo;
}

function simplaVorto($valuo,$tabelo,$kie) {
    global $bdd;
     $demando =  "select $valuo from $tabelo $kie"; 
     $result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
     
     while($row = $result->fetch()) {
         echo $row["$valuo"];  
     }
}


function konstruiKorektantliston($lingvo) {
    global $bdd;
     echo "<select name=\"korektanto\" class=\"input_text_box\">";
     $query = "select personoj.id,personoj.enirnomo from personoj left join nuna_kurso on personoj.id=nuna_kurso.korektanto where personoj.rajtoj='A' or personoj.rajtoj='K' and personoj.lingvo='$lingvo' and nuna_kurso.korektanto IS NULL";
     mysql_select_db( "ikurso"); 
     $result = mysql_query($query) or die (  "INSERT : Invalid query :".$query); 
     while($row = mysql_fetch_array($result)) {
         echo "<option value=\"".$row["id"]."\">".$row["enirnomo"]." : 0 %</option>";  
     }

     $query ="select personoj.id, personoj.enirnomo,personoj.maksimumo,count(nuna_kurso.korektanto) as studantoj from personoj,nuna_kurso where personoj.id = nuna_kurso.korektanto and personoj.lingvo='$lingvo' group by nuna_kurso.korektanto";
     $result = mysql_query($query) or die (  "INSERT : Invalid query :".$query); 
     while($row = mysql_fetch_array($result)) {
         if ($row["maksimumo"]=="0") {
              $remplissage="maksimumo";
         } else {
              $remplissage=(($row["studantoj"]/$row["maksimumo"])*100)." %";
         }
         echo "<option value=\"".$row["id"]."\">".$row["enirnomo"]." : ".$remplissage."</option>";  
     }
  
     echo "</select>";
}

//funkcio kiu korektantigi iun
function igiKorektanton($persono_id) {
     $query = "update personoj set rajtoj='K' where id=$persono_id";
     mysql_select_db( "ikurso");
     $result = mysql_query($query) or die (  "UPDATE : Invalid query :".$query);
}

//fonction qui prends un id d'un correcteur et d'une personne pour les associer dans "nuna_kurso" et mettre la personne à studanto (S)
function doniKorektanton($korektanto,$studanto) {
     $query = "update personoj set rajtoj='S' where id=$studanto";
     mysql_select_db( "ikurso"); 
     $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query); 
     $query = "INSERT INTO nuna_kurso (ekdato,korektanto,studanto) VALUES (CURDATE(),'$korektanto','$studanto')";
     $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query);
}

function vidiKorektantojn($lingvo) {
     $query = "select * from personoj where lingvo='$lingvo' and rajtoj='A' or rajtoj='K'";
     mysql_select_db( "ikurso"); 
     $result = mysql_query($query) or die ( "INSERT : Invalid query :".$query); 
     while($row = mysql_fetch_array($result)) {
         echo "<div align=\"left\" class=\"text_box\">";
         echo "<b>".$row["enirnomo"]."</b>:";  
         echo $row["familinomo"]." ".$row["personnomo"]." - ".$row["retadreso"]."<br>";  
         echo $row["adreso1"]." ".$row["adreso2"]." ; ".$row["lando"]."-".$row["posxtkodo"]." ".$row["urbo"]."<br>";  
         echo "né-e le :";
         if ($row["naskigxdato"]=="0000-00-00") { echo "inconnu";} else { echo $row["naskigxdato"];}
         echo " - Nb maximal d'élèves : ";
         if ($row["maksimumo"]=="0" || $row["maksimumo"]=="") { echo "non renseigné";} else { echo $row["maksimumo"];}
         echo "<br><i>".$row["kialo"]."</i><br>";
         echo "<p>";  
     }

}
function protokolo($persono_id,$kategorio,$teksto) {
   global $lingvo,$bdd;
   $ip = $_SERVER['REMOTE_ADDR'];
   $query = "insert into protokolo(id,persono_id,horo,ip,kategorio,teksto,lingvo) values ('','$persono_id',now(),'$ip','$kategorio','$teksto','$lingvo')";
   $bdd->exec($query);
}
?>
