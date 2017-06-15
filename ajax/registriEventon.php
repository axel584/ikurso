<?php
include "../util.php";
$persono_id=isset($_SESSION["persono_id"])?$_SESSION["persono_id"]:"";
$geographique=isset($_GET["geographique"])?$_GET["geographique"]:"";
$priskribo=isset($_GET["priskribo"])?$_GET["priskribo"]:"";
$url=isset($_GET["url"])?$_GET["url"]:"";
$mail=isset($_GET["mail"])?$_GET["mail"]:"";
$type=isset($_GET["type"])?$_GET["type"]:"";
$komenco=isset($_GET["komenco"])?$_GET["komenco"]:"";
$fino=isset($_GET["fino"])?$_GET["fino"]:$komenco;

// transforme 1/7/2017 en 2017-7-1
$komenco=implode("-",array_reverse(explode("/",$komenco)));
$fino=implode("-",array_reverse(explode("/",$fino)));

if ($fino=="") {
	$fino=null;
}

if ($type=="France") {
	$lando="France";
	$requete = $bdd->prepare('insert into eventoj(persono_id,komenco,fino,priskribo,departemento,lando,url,mail) values (:persono_id,:komenco,:fino,:priskribo,:departemento,:lando,:url,:mail)');
	$requete->execute(array('persono_id'=>$persono_id,'komenco'=>$komenco,'fino'=>$fino,'priskribo'=>$priskribo,'departemento'=>$geographique,'lando'=>$lando,'url'=>$url,'mail'=>$mail));

}
// $requete = $bdd->prepare('insert into eventoj(persono_id,dato,kodo,demando,respondo,normaligita,lecionero_id,komando) values (:persono_id,now(),:kodo,:demando,:respondo,:normaligita,:lecionero_id,:komando)');
// $requete->execute(array('persono_id'=>$persono_id,'kodo'=>$kodo,'demando'=>$lernantajDemandoj[$kodo],'respondo'=>$lernantajRespondoj[$kodo],'normaligita'=>normaligita($lernantajRespondoj[$kodo]),'lecionero_id'=>$lecionero_id,'ekzercero_id'=>$kodoj2id[$kodo],'komando'=>$komandoLauxKodo[$kodo]));


$respondo["mesagxo"] = "ok";
echo json_encode($respondo);
exit();
?>