<?php
include "config.php";


// tiu funkcio kunligas la datumbazon. 
// Elirvaluo : referenco pri la datumbazo
function malfermiDatumbazon () {
    global $bdd,$base,$login,$motDePasse;
     $bdd = new PDO('mysql:host=localhost;dbname='.$base.';charset=utf8', $login, $motDePasse);
     $bdd->query('SET lc_time_names = \'fr_FR\''); // Pour avoir les dates en français
     // A décommenter pour rendre les erreurs sql plus parlante
     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
function kreiPersonon($enirnomo,$pasvorto,$retadreso,$aktivigo) {
    global $bdd;
     $query = "insert into personoj";
     $query .="(enirnomo,pasvorto_md5,retadreso,aktivigo,ekdato) ";
     $query .="values ('$enirnomo',md5('$pasvorto'),'$retadreso','$aktivigo',now())";
     $bdd->exec($query);
     return $bdd->lastInsertId();
}

// variante de la version au dessus uniquement pour le cours
function kreiPersononKurso($enirnomo,$pasvorto,$retadreso,$aktivigo) {
        global $bdd;
     $query = "insert into personoj";
     $query .="(enirnomo,pasvorto_md5,retadreso,aktivigo,ekdato,kurso) ";
     $query .="values ('$enirnomo',md5('$pasvorto'),'$retadreso','$aktivigo',now(),'KE')";
     $bdd->exec($query);
     return $bdd->lastInsertId();
}

function updateAktivigo($retadreso,$aktivigo) {
    global $bdd;
     $query = "update personoj ";
     $query .="set aktivigo='$aktivigo' where retadreso='$retadreso'";
     $bdd->exec($query);
}

function updatePasvorton($retadreso,$pasvorto) {
    global $bdd;
     $query = "update personoj ";
     $query .="set pasvorto_md5=md5('$pasvorto') where retadreso='$retadreso'";
     $bdd->exec($query);
}

// tiu funcio aldonas (aux sxangxas) informojn pri iu
// parametroj ; kompreneblaj per ili mem krom :
// id - unika nombro redoni dum la kreado aux retrovi en la datumbazo per la enirnomo kaj la pasvorto
// ndtago : tago de la naskigxdato (1-->31) (ekz. : 11)
// ndmonato : monato de la naskigxdato (1-->12) (ekz. : 5 (por majo))
// ndjaro : jaro de la naskigxdato per 4 ciferoj (ekz. : 1978)
function modifiPersonon ($id,$sekso,$familinomo,$personnomo,$adreso1,$adreso2,$posxtkodo,$urbo,$lando,$ndtago,$ndmonato,$ndjaro,$stopInfo) {
    global $bdd;
    if (($ndjaro=="")||($ndmonato=="")||($ndtago=="")) {
        $naskigxdato=NULL;    
    } else {
        $naskigxdato=$ndjaro.'-'.$ndmonato.'-'.$ndtago;
    }
     $query = "update personoj set ";
     $query .= "sekso=:sekso,";
     $query .= "familinomo=:familinomo,";
     $query .= "personnomo=:personnomo,";
     $query .= "adreso1=:adreso1,";
     $query .= "adreso2=:adreso2,";
     $query .= "posxtkodo=:posxtkodo,";
     $query .= "urbo=:urbo,";
     $query .= "lando=:lando,";
     $query .= "naskigxdato=:naskigxdato,"; // $ndjaro-$ndmonato-$ndtago
     $query .= "stop_info=:stopInfo ";
     $query .= "where id=:id";
     try {
         $requete = $bdd->prepare($query);
         $requete->execute(array(':sekso' => $sekso, ':familinomo' => $familinomo,':personnomo'=>$personnomo,':adreso1'=>$adreso1,':adreso2'=>$adreso2,':posxtkodo'=>$posxtkodo,':urbo'=>$urbo,':lando'=>$lando,':naskigxdato'=>$naskigxdato,':stopInfo'=>$stopInfo,':id'=>$id));
     }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
            exit(0);
    }
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
     if (isset($aliavaluo) && isset($aliavidigito)) {
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

function getSimplaVorto($valuo,$tabelo,$kie) {
    global $bdd;
     $demando =  "select $valuo from $tabelo $kie"; 
     $result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
     while($row = $result->fetch()) {
         return $row["$valuo"];  
     }
}

function simplaVorto($valuo,$tabelo,$kie) {
    echo getSimplaVorto($valuo,$tabelo,$kie);
}

function getKorektantonElLernanto($lernanto_id,$lernanto_kurso) {
    global $bdd;
     $demando =  "SELECT personnomo,familinomo,retadreso  FROM nuna_kurso join personoj on personoj.id = nuna_kurso.korektanto WHERE studanto = ".$lernanto_id." AND nuna_kurso.kurso = '".$lernanto_kurso."'"; 
     $result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
     $row = $result->fetch();
     return $row;
}

function getUrlVenontaLeciono($kurso,$nunleciono) {
    global $bdd;
    $prochaine_lecon = $nunleciono+1;
    $demando2 = "select titolo,retpagxo from lecionoj where numero='".$prochaine_lecon."' and kurso='".$kurso."'";
    $row2 = $bdd->query($demando2)->fetch();
    return $row2["retpagxo"];
}   


function getPrefixeCours($kurso) {
    if ($kurso=="GR") {
        return 'fr/gerda/';
    } elseif($kurso=="CG") {
       return 'fr/cge/';
    } else {
        return null;
    }
}

function getCoursElLernanto($lernanto_id) {
    global $bdd;
    $demando = "select stato,nunleciono,kurso,nunleciono from nuna_kurso where studanto=".$lernanto_id;
    $result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
    $lasta = ""; $finita = False;
    ?>
    <ul class="collection">
	<?php
    while ($row = $result->fetch()) {
        $prefixe_url = getPrefixeCours($row["kurso"]);
        echo "<li class='collection-item'><span class='title'>";
        simplaVorto('nomo','kursoj',"where kodo='".$row['kurso']."'");
        // on stocke le dernier cours vu, sauf si c'est Gerda car c'est forcément le dernier
        $lasta = $row['kurso'];
        echo "</span>";
        // TODO : vérifier pour les élèves n'ayant pas encore commencé
        if ($row['nunleciono']==null) {
            echo "<p>pas encore commencé</p>";
        } else {
            echo "<p><span class='primaire-texte texte-moyen'>Dernière leçon suivie</span> : ";
            simplaVorto('titolo','lecionoj',"where numero='".$row["nunleciono"]."' and kurso='".$row["kurso"]."'");
            echo "</p>";
        }
        if ($row["stato"]=="N") { // cas des élèves pas encore commencé
            // TODO : ici on affiche la première leçon à suivre
            $demando2 = "select titolo,retpagxo from lecionoj where numero='1' and kurso='".$row["kurso"]."'";
            $row2 = $bdd->query($demando2)->fetch();
            if (isset($row2['retpagxo'])) { // dans le cas du logiciel, il n'y a pas de leçon à afficher
                echo "<p><a href='".$prefixe_url.$row2['retpagxo']."'>Accès à la leçon : ".$row2['titolo']."</a></p>";
            }
        }
        if ($row["stato"]=="K") { // cas des élèves en cours
            $prochaine_lecon = $row['nunleciono']+1;
            $demando2 = "select titolo,retpagxo from lecionoj where numero='".$prochaine_lecon."' and kurso='".$row["kurso"]."'";
            $row2 = $bdd->query($demando2)->fetch();
            if ($row2['retpagxo']!=null) { // dans le cas du logiciel, il n'y a pas de leçon à afficher
                echo "<a class='btn-flat small blue-text' href='".$prefixe_url.$row2['retpagxo']."'><i class='material-icons right'>arrow_right</i>Accès à la leçon : ".$row2['titolo']."</a>";
            }
        }
        if ($row["stato"]=="F") {
            // ici on affiche le lien vers le diplome
            ?>            
              <a class="bouton" href="diplome.php?kurso=<?php echo $row['kurso'] ?>" onclick="window.open(this.href, 'attestation', 'height=660, width=862, left='+(screen.availWidth-862)/2+', top='+(screen.availHeight-660)/2)+', toolbar=no, menubar=yes, location=no, resizable=yes, scrollbars=no, status=no'; return false;">Attestation de réussite</a>
           <?php
		   echo "</li>";
        }
        if ($row["stato"]=="F") {
	        $finita =  True;
	    } else {
		    $finita = False;
        }
    }
    echo "</ul>";
    if (($lasta=="CG"||$lasta=="KE")&&($finita==True)){
	    ?>
    	    <p>Si vous souhaitez approfondir, nous vous conseillons de suivre le cours de 2<sup>e</sup> niveau&nbsp;:</p>
			<p><a href="<?php echo $vojo;?>fr/gerda/index.php" class="btn waves-effect waves-light" >Commencer le cours Gerda Malaperis</a></p>
		<?php
	}
}

// cette fonction prends un utilisateur et fait des redirection en fonction du statut de la personne
function redirigeParDroits($persono) {
    global $bdd;
    if ($persono['rajtoj']=='A') { // administrateur
        header("Location:administri.php"); 
    }
    if ($persono['rajtoj']=='K') { // correcteurs
        header("Location:miajlernantoj.php");
    }
    if ($persono['rajtoj']=='P') {
        header("location:fr/cge/intro.php"); // pour les nouveaux élèves retourne sur la première page du cours ?
    }
    if ($persono['rajtoj']=='S') { // nouveaux élèves ou élève qui suivent déjà un cours
        $demando = "select stato,nunleciono,kurso,nunleciono from nuna_kurso where studanto=".$persono['id']." order by CASE stato WHEN 'N' THEN 1 WHEN 'K' THEN 2 WHEN 'H' THEN 3 WHEN 'F' THEN 4 ELSE 5 END";
        $result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
        $row = $result->fetch();
        if ($row==null) {
            return; 
        }
        if ($row["kurso"]=="KE") {
            return;
        }
        if ($row['kurso']=="GR") {
            $prefixe_url ='fr/gerda/';
        } elseif($row['kurso']=="CG") {
            $prefixe_url = 'fr/cge/';
        }
        if ($row["stato"]=="N") { // cas des élèves pas encore commencé
            $demando2 = "select titolo,retpagxo from lecionoj where numero='1' and kurso='".$row["kurso"]."'";
            $row2 = $bdd->query($demando2)->fetch();
            header("location:".$prefixe_url.$row2['retpagxo']);
        }
        if ($row["stato"]=="K") { // cas des élèves en cours
            header("location:".$prefixe_url.getUrlVenontaLeciono($row["kurso"],$row["nunleciono"]));
        }
    }
}

// cette fonction améliore la version précédente
function getRedirectionParDroits($persono_id) {
    global $bdd;
    $persono = apartigiPersonon($persono_id);
    if ($persono['rajtoj']=='A') { // administrateur
        return "administri.php"; 
    }
    if ($persono['rajtoj']=='K') { // correcteurs
        return "miajlernantoj.php";
    }
    if ($persono['rajtoj']=='P') {
        return "personinformoj.php"; // pour les nouveaux élèves va sur leur espace personnel (car les nouveaux élèves peuvent vouloir aller sur gerda)
    }
    if ($persono['rajtoj']=='S') { // nouveaux élèves ou élève qui suivent déjà un cours
        $demando = "select stato,nunleciono,kurso,nunleciono from nuna_kurso where studanto=".$persono['id']." order by CASE stato WHEN 'N' THEN 1 WHEN 'K' THEN 2 WHEN 'H' THEN 3 WHEN 'F' THEN 4 ELSE 5 END";
        $result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
        $row = $result->fetch();
        if ($row==null) {
            return "personinformoj.php"; 
        }
        if ($row["kurso"]=="KE") {
            return "personinformoj.php"; // les élèves du logiciel vont uniquement sur leur page personnelle
        }
        if ($row['kurso']=="GR") {
            $prefixe_url ='fr/gerda/';
        } elseif($row['kurso']=="CG") {
            $prefixe_url = 'fr/cge/';
        }
        if ($row["stato"]=="N") { // cas des élèves pas encore commencé
            $demando2 = "select titolo,retpagxo from lecionoj where numero='1' and kurso='".$row["kurso"]."'";
            $row2 = $bdd->query($demando2)->fetch();
            return $prefixe_url.$row2['retpagxo'];
        }
        if ($row["stato"]=="K") { // cas des élèves en cours
            return $prefixe_url.getUrlVenontaLeciono($row["kurso"],$row["nunleciono"]);
        }
        if ($row["stato"]=="F") { // cas des élèves qui ont fini : on les envoit vers leurs diplome et la page pour choisir un autre cours
            return "personinformoj.php";
        }
    }
}

function getInfoPorDiplomoElLernanto($lernanto_id,$kurso) {
    global $bdd;
    $demando = "SELECT findato,nuna_kurso.kurso,personoj.personnomo,personoj.familinomo FROM nuna_kurso join personoj on personoj.id=nuna_kurso.korektanto where studanto=".$lernanto_id." and nuna_kurso.kurso='".$kurso."' and stato='F'";
    $result = $bdd->query($demando) or die(print_r($bdd->errorInfo()));
    $row = $result->fetch();
     return $row;
}

function konstruiKorektantliston() {
    global $bdd;
     echo "<select name=\"korektanto\" class=\"input_text_box\">";
     $query = "select personoj.id,personoj.enirnomo from personoj left join nuna_kurso on personoj.id=nuna_kurso.korektanto where personoj.rajtoj='A' or personoj.rajtoj='K' and nuna_kurso.korektanto IS NULL";
     mysql_select_db( "ikurso"); 
     $result = mysql_query($query) or die (  "INSERT : Invalid query :".$query); 
     while($row = mysql_fetch_array($result)) {
         echo "<option value=\"".$row["id"]."\">".$row["enirnomo"]." : 0 %</option>";  
     }

     $query ="select personoj.id, personoj.enirnomo,personoj.maksimumo,count(nuna_kurso.korektanto) as studantoj from personoj,nuna_kurso where personoj.id = nuna_kurso.korektanto group by nuna_kurso.korektanto";
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

function vidiKorektantojn() {
     $query = "select * from personoj where rajtoj='A' or rajtoj='K'";
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
   global $bdd;
   $ip = $_SERVER['REMOTE_ADDR'];
    $requete = $bdd->prepare('insert into protokolo(persono_id,horo,ip,kategorio,teksto) values (:persono_id,now(),:ip,:kategorio,:teksto)');
    $requete->execute(array('persono_id'=>$persono_id,'ip'=>$ip,'kategorio'=>$kategorio,'teksto'=>$teksto));
}

function updateLastEniro($persono_id) {
    global $bdd;
    if ($persono_id!=null && $persono_id!=0) {
        $query = "update personoj set lasteniro=now() where id=".$persono_id;
        $bdd->exec($query);
    }
}

function getRegistritajnRespondojn($kurso,$leciono,$persono_id) {
    global $bdd;
    if ($leciono=="" or $persono_id=="") {
        return;
    }
    $query = "SELECT kodo,respondo FROM `respondoj` join lecioneroj on lecioneroj.id=respondoj.lecionero_id join lecionoj on lecionoj.id=lecioneroj.leciono_id where persono_id=".$persono_id." and kurso='".$kurso."' and numero=".$leciono;
    $result = $bdd->query($query);
    $retour = array();
    while ($row = $result->fetch()) {
        $retour["res_".$row["kodo"]]=$row["respondo"];
    }
    return $retour;

}

function jamKomencisKurson($persono_id) {
    global $bdd;
    $query = "select count(*) as combien from nuna_kurso where studanto=".$persono_id;
    $result = $bdd->query($query);
    $row = $result->fetch();
    return $row["combien"]>0;
}

?>
