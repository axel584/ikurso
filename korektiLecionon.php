<?php
include "util.php";
$pagxtitolo="Détails leçon";
$korpo="informoj korektiLecionon";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
$kurso=isset($_GET["kurso"])?$_GET["kurso"]:"";
$leciono=isset($_GET["numleciono"])?$_GET["numleciono"]:"";
$studanto_id=isset($_GET["studanto"])?$_GET["studanto"]:"";
if ($studanto_id==""){header("Location:miajlernantoj.php?erarkodo=23");}
$studanto = apartigiPersonon($studanto_id);
include "pagxkapo.inc.php";

// on recupere les informations sur la leçon (intro et conclusion)
$query = "SELECT personoj_lecionoj.leciono_id,komentario,enkonduko,konkludo  FROM personoj_lecionoj join lecionoj on lecionoj.id=personoj_lecionoj.leciono_id where persono_id= ".$studanto_id." and numero=".$leciono." and kurso='".$kurso."'";
$result = $bdd->query($query);
$row=$result->fetch();
$komentario = $row["komentario"];
$enkonduko = $row["enkonduko"];
$konkludo = $row["konkludo"];
$leciono_id = $row["leciono_id"];
?>

<div class="row">
	<article class="col s12 m9 l6 offset-m1 offset-l1">
		<h2>Détails de la leçon de <?=$studanto["enirnomo"]?>
<?php 
	if ($studanto["personnomo"]!="") {
		echo "&nbsp;(".$studanto["personnomo"]." ".$studanto["familinomo"].")";
	}
?>		
		</h2>
		
		<p class="parto"><strong>Introduction</strong></p>
		
		<ul class="collapsible expandable">
			<li>
		    	<div class="collapsible-header"><i class="material-icons blue-text text-darken-2">edit</i>Rédiger une introduction</div>
				<div class="collapsible-body"><span>
					<textarea name="enkonduko" class="trumbowyg"><?=$enkonduko?></textarea>
				</span></div>
			</li>
		</ul>
<?php



$query = "select ekzercoj.id,ekzercoj.komando from ekzercoj join lecioneroj on lecioneroj.id=ekzercoj.lecionero_id join lecionoj on lecionoj.id=lecioneroj.leciono_id where kurso='".$kurso."' and numero='".$leciono."' order by lecioneroj.ordo,ekzercoj.id";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	echo "<p class=\"parto\">";
	echo "<strong>EXERCICE : </strong>".$row["komando"];
	echo "</p>";
	$ekzerco_id = $row["id"];
	$query2 = "select respondoj.id as respondo_id,ekzerceroj.numero,ekzerceroj.demando,ekzerceroj.respondo as bona_respondo,ekzerceroj.normaligita as normaligita_bona_respondo,respondoj.respondo,respondoj.normaligita as normaligita_lernanta_respondo,respondoj.gxusta,respondoj.korekto,ekzerceroj.poentoj,respondoj.poentoj as lernanta_poentoj from ekzerceroj left join respondoj on ekzerceroj.id=respondoj.ekzercero_id where persono_id=".$studanto_id." and ekzerceroj.ekzerco_id='".$ekzerco_id."' order by ekzerceroj.numero";
	$result2 = $bdd->query($query2);
	while ($row2=$result2->fetch()) {
		$gxusta = $row2["gxusta"]==1;
		if (!$gxusta) {
			$lernantaRespondo = $row2["normaligita_lernanta_respondo"];
			$bonaRespondo = $row2["normaligita_bona_respondo"];
			$gxusta = kontroliRespondon($lernantaRespondo,$bonaRespondo);
			// TODO : vérifier les points en base et les afficher
			// Afficher les points sur les mauvaises réponses ou réponses non corrigées (indiquer : /X points)
			// Afficher les points sur les bonnes réponses (indiquer : X/X points)
			// Quand on coche la case verte, mettre automatiquement le bon nombre de points
			// sauvegarder en base le nombre de points choisi par le correcteur
			// remplir le champ "normaligita" pour les réponses types
		}
		echo "<p class=\"demando\">".$row2["numero"].". ".$row2["demando"]; // on termine la balise <p> dans la partie gxusta et dans le else
		if ($gxusta) {
			
			if ($row2["poentoj"]) {
				echo "<span class='badge'>".$row2["poentoj"]."/".$row2["poentoj"]."</span></p>";
				echo "<input type='hidden' name='noto".$row2["respondo_id"]."' value='".$row2["poentoj"]."'/>";
			}
			echo "<p class=\"respondo\"><span style=\"color:green\">".$row2["respondo"]."</span>";
			echo "</p>\n";	
		} else {
			if ($row2["poentoj"]) {
				echo "<span class='badge'>";
				if ($row2["lernanta_poentoj"]) {
					echo $row2["lernanta_poentoj"];
				}
				echo "/".$row2["poentoj"]."</span></p>";
			}
			echo "<ul class=\"collapsible expandable\"><li>\n";
			echo "<div class=\"collapsible-header\"><i class=\"material-icons blue-text text-darken-2\">edit</i>";
			echo "<span style=\"color:blue\">".nl2br($row2["respondo"])."</span>";
			
			echo "</div>\n";
			echo "<div class=\"collapsible-body\"><span>";
    		if ($row2["poentoj"]) {
    			// cet question doit être corrigé avec une notation
    			if ($row2["lernanta_poentoj"]) {
					echo "<p><select name='noto".$row2["respondo_id"]."'><option value='' disabled>Notu la respondon</option>";
    			} else {
    				echo "<p><select name='noto".$row2["respondo_id"]."'><option value='' disabled selected>Notu la respondon</option>";
    			}
    			for ($i=0;$i<=intval($row2["poentoj"]);$i++) {
    				echo "<option value='".$i."' ";
    				if ($row2["lernanta_poentoj"] && $row2["lernanta_poentoj"]==$i) {
    					echo "selected";
    				}
    				echo ">".$i."</option>";
    			}
    			echo "</select></p>";
    		}
			echo "<p><label><input type=\"checkbox\" class=\"filled-in\" name='bonaRespondo".$row2["respondo_id"]."' />";
      		echo "<span>bonne réponse (cochez cette case si la phrase vous semble bonne pour enrichir le corrigé type)</span></label></p>";
			echo "<p>(corrigé type : ".$row2["bona_respondo"].")</p>";
			echo "<textarea name='korekto".$row2["respondo_id"]."' class='trumbowyg'>".$row2["korekto"]."</textarea>\n";
			echo "</span></div>\n";
			echo "</li></ul>\n";
		}
		echo "<hr/>";
}
	
}

// on affiche le commentaire de l'élève qui est stocké en base

echo "<p class=\"parto\"><strong>Commentaire de l'élève</strong></p>";
echo $komentario;



?>
<p class="parto"><strong>Conclusion</strong></p>

<ul class="collapsible expandable">
	<li>
    	<div class="collapsible-header"><i class="material-icons blue-text text-darken-2">edit</i> Rédiger une conclusion</div>
		<div class="collapsible-body"><span>
			<textarea name="konkludo" class="trumbowyg"><?=$konkludo?></textarea>
		</span></div>
	</li>
</ul>

	<section id="leciono-fino">
			<div id="marko" class="right-align">
				<p>
				<label>
					<input type="checkbox" id="pas_envoi_email" name="pas_envoi_email" class="filled-in" />
					<span>Ne pas prévenir l'élève par mail</span>
				</label>
				<br />
				<a id="registriKorektadon_button" class="waves-effect waves-light btn tooltipped light-blue darken-1 " data-kurso="<?=$kurso?>" data-leciono_id="<?=$leciono_id?>" data-leciono="<?=$leciono?>" data-studanto="<?=$studanto_id?>" data-position="top" data-delay="50" data-tooltip="Sauvegarder cette correction">Envoyer cette correction à l'élève</a>
    		</p>
			</div>

		</section>
	</article>

		
		<aside class="col s12 m10 l3 offset-m1 push-l1">


			<ul class="collapsible" data-collapsible="expandable">

			<li class="active">
				<div class="collapsible-header"><i class="material-icons">toc</i>Leçons de l'élève</div>

<?php

$query = "SELECT numero,kurso,titolo  FROM `personoj_lecionoj` join lecionoj on lecionoj.id=personoj_lecionoj.leciono_id WHERE `persono_id` = ".$studanto_id." order by kurso,numero";
$result = $bdd->query($query);
while ($row=$result->fetch()) {
	echo "<div class='collapsible-header'><a href='vidiLecionon.php?kurso=".$row["kurso"]."&numleciono=".$row["numero"]."&studanto=".$studanto_id."'>".$row["titolo"]."</a></div>\n";
}
?>
				
			</li>
		</ul>	


		</aside>

	</div>
	
<?php include "pagxpiedo.inc.php";?>