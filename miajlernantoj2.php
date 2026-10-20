<?php
include "util.php";
$persono_id=isset($_SESSION["persono_id"])?(int)$_SESSION["persono_id"]:0;
if ($persono_id==0) {header("Location:index.php?erarkodo=8"); exit;}
$persono = apartigiPersonon($persono_id);
if (!$persono || ($persono["rajtoj"]!='A' && $persono["rajtoj"]!='K')) {header("Location:index.php?erarkodo=4"); exit;}
if ($_SERVER["REQUEST_METHOD"]!="POST") {header("Location:miajlernantoj.php"); exit;}

// leciono vaut "<id de nuna_kurso>-<nouvel état>" : numéro de leçon, N (pas commencé), F (fini) ou H (abandon)
$rezultoj=explode("-", isset($_POST["leciono"])?$_POST["leciono"]:"", 2);
$nunaKurso_id=(int)$rezultoj[0];
$nova=isset($rezultoj[1])?$rezultoj[1]:"";
if (!in_array($nova, array("N","F","H"), true) && !ctype_digit($nova)) {header("Location:miajlernantoj.php"); exit;}

// un correcteur ne modifie que ses propres élèves
$stmt = $bdd->prepare("select stato,nunleciono,korektanto from nuna_kurso where id=?");
$stmt->execute(array($nunaKurso_id));
$row = $stmt->fetch();
if (!$row || ($persono["rajtoj"]!='A' && (int)$row["korektanto"]!=$persono_id)) {header("Location:index.php?erarkodo=4"); exit;}

//sxangxi lastan lecionon por iu lernanto
if (ctype_digit($nova) && $nova!=$row["nunleciono"]) {
	$stmt = $bdd->prepare("update nuna_kurso set nunleciono=?,stato='K',lastdato=CURDATE() where id=? and (stato='N' or stato='K')");
	$stmt->execute(array((int)$nova, $nunaKurso_id));
}
// se la nova stato estas F(inita), sed la malnova ne estis F, ni updatas ! :-)
if ($nova=='F' and $row["stato"]!='F') {
	$stmt = $bdd->prepare("update nuna_kurso set stato='F',findato=CURDATE(),lastdato=CURDATE() where id=? and (stato='N' or stato='K')");
	$stmt->execute(array($nunaKurso_id));
	//prenu cxiujn informojn pri la studanto, lia kurso kaj lia korektanto
	$stmt = $bdd->prepare("select s.*, k.nomo as kursnomo, k.kodo, ko.enirnomo as korektanto_nomo
		from nuna_kurso nk join personoj s on s.id=nk.studanto join kursoj k on k.kodo=nk.kurso join personoj ko on ko.id=nk.korektanto
		where nk.id=?");
	$stmt->execute(array($nunaKurso_id));
	$studanto=$stmt->fetch();
	// tiam ni sendas retmesagxon al la informistoj
	$filename = "mails/finiInfFR.html";
	if ($studanto && file_exists($filename)) {
		$contents = file_get_contents($filename);
		//prenu la liston de cxiuj informistoj
		$informistoj = implode(",", $bdd->query("select retadreso from personoj where rajtoj='I'")->fetchAll(PDO::FETCH_COLUMN));
		foreach (array("ENIRNOMO"=>"enirnomo","NASKIGXDATO"=>"naskigxdato","PERSONNOMO"=>"personnomo","FAMILINOMO"=>"familinomo","SEKSO"=>"sekso",
				"RETADRESO"=>"retadreso","ADRESO1"=>"adreso1","ADRESO2"=>"adreso2","LANDO"=>"lando","POSXTKODO"=>"posxtkodo","URBO"=>"urbo",
				"KURSO"=>"kursnomo","KOREKTANTO"=>"korektanto_nomo") as $sxlosilo=>$kampo) {
			$contents=str_replace("##".$sxlosilo."##",htmlspecialchars((string)$studanto[$kampo], ENT_QUOTES, "UTF-8"),$contents);
		}
		if ($informistoj!="") mailViaSES($informistoj,"un esperantiste de plus !",$contents);
	}
	// et on envoie aussi un mail à l'élève (le code du cours vient de la base : on ne garde que des lettres)
	$filename = "mails/finiStu".preg_replace('/[^A-Z]/', '', strtoupper((string)$studanto["kodo"])).".html";
	if ($studanto && file_exists($filename)) {
		$contents=str_replace("##ENIRNOMO##",htmlspecialchars($studanto["enirnomo"], ENT_QUOTES, "UTF-8"),file_get_contents($filename));
		mailViaSES($studanto["retadreso"],"Félicitations !",$contents);
	}
}
// se la nova stato estas H(altita), sed la malnova ne estis H, ni updatas ! :-)
if ($nova=='H' and $row["stato"]!='H') {
	$stmt = $bdd->prepare("update nuna_kurso set stato='H',findato=CURDATE(),lastdato=CURDATE() where id=? and (stato='N' or stato='K')");
	$stmt->execute(array($nunaKurso_id));
}
header("Location:miajlernantoj.php"); exit;
?>
