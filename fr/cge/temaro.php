<?php 
$leciono=98;
$subjekto="temaro.php";
$temo="listo";
$pagxtitolo="Index thématique";
$metodo=isset($_GET["metodo"])?$_GET["metodo"]:"U";
include "dlekkapo.inc.php";
?>
<div class="row">
	<article class="col s11 offset-s1">
		
		<section id="leciono-enhavo">
			<h2>Index thématique</h2>
	
			<div class="row">
				<div class="col s12 m4">
					<h3>Prépositions</h3>
					<ul>
						<li><a href="lec06.php?section=6">Premier bloc</a></li>
						<li><a href="lec06.php?section=8">Deuxième bloc</a></li>
						<li><a href="lec09.php?section=4">Prépositions en <b>-aŭ</b></a></li>
					</ul>
					
					<h3>Nombres</h3>
					<ul>
						<li><a href="lec03.php?section=8">Nombres cardinaux</a></li>
						<li><a href="lec03.php?section=8#ordinaux">Nombres ordinaux</a></li>
						<li><a href="lec09.php?section=4"><b>ambaŭ</b></a></li>
					</ul>
				
					<h3>Pronoms</h3>
					<ul>
						<li><a href="lec01.php?section=4">Pronoms personnels</a></li>
						<li><a href="lec05.php?section=2">Pronoms corrélatifs en <b>-a</b>, <b>-u</b> et <b>-o</b></a></li>
						<li><a href="lec08.php?section=5">Pronom réfléchi</a></li>
						<li><a href="lec09.php?section=4"><b>ambaŭ</b></a></li>
					</ul>
					
					<h3>Petits mots</h3>
					<ul>
						<li><a href="lec01.php?section=4#articles">Articles</a></li>
						<li><a href="lec05.php?section=2">Corrélatifs</a></li>
						<li><a href="lec01.php?section=9"><b>kiu</b>, <b>kie</b></a></li>
						<li><a href="lec02.php?section=11"><b>kiel</b></a></li>
						<li><a href="lec03.php?section=12"><b>kio</b></a></li>
						<li><a href="lec03.php?section=8"><b>kiom</b></a></li>
						<li><a href="lec09.php?section=5"><b>ĉi</b></a></li>
						<li><a href="lec09.php?section=5"><b>ajn</b></a></li>
						<li><a href="lec02.php?section=6"><b>neniam</b>, <b>nenie</b>, <b>neniu</b>, <b>nenio</b></a></li>
						<li><a href="lec02.php?section=1"><b>tiel</b></a></li>
					</ul>
				</div>
				<div class="col s12 m4">
					<h3>Verbes</h3>
					<ul>
						<li><a href="lec01.php?section=2">Terminaison de l’infinitif</a></li>
						<li><a href="lec01.php?section=4#temps">Présent, passé, futur</a></li>
						<li><a href="lec03.php?section=10">Verbes transitifs et intransitifs</a></li>
						<li><a href="lec08.php?section=1">Conditionnel, impératif et subjonctif</a></li>
						<li><a href="lec08.php?section=1#participes">Participes</a></li>
					</ul>
					<h3>Noms et adjectifs</h3>
					<ul>
						<li><a href="lec01.php?section=2">Terminaison des noms</a></li>
						<li><a href="lec01.php?section=2">Terminaison des adjectifs</a></li>
						<li><a href="lec01.php?section=4">Pluriel</a></li>
						<li><a href="lec01.php?section=4">Adjectifs possessifs</a></li>
						<li><a href="lec05.php?section=2">Adjectifs corrélatifs en <b>-a</b>, <b>-u</b> et <b>-es</b></a></li>
						<li><a href="lec08.php?section=5">Adjectif possessif réfléchi</a></li>
					</ul>
					
					<h3>Adverbes</h3>
					<ul>
						<li><a href="lec03.php?section=5">Adverbes en <b>-e</b></a></li>
						<li><a href="lec05.php?section=2">Adverbes corrélatifs en <b>-e</b>, <b>-el</b>, <b>-al</b>, <b>-am</b> et <b>-om</b></a></li>
						<li><a href="lec06.php?section=14">Adverbes de lieu à l’accusatif</a></li>
						<li><a href="lec09.php?section=4">Adverbes primaires en <b>-aŭ</b></a></li>
					</ul>
					<h3>Dérivation</h3>
					<ul>
						<li><a href="lec02.php?section=1">Féminin</a></li>
						<li><a href="lec02.php?section=4">Préfixe <b>mal-</b></a></li>
						<li><a href="lec07.php?section=1">Préfixes</a></li>
						<li><a href="lec07.php?section=2">Suffixes</a></li>
					</ul>
				</div>
					
				<div class="col s12 m4">
					<h3>Prononciation</h3>
					<ul>
						<li><a href="lec01.php">Généralités</a></li>
						<li><a href="lec01.php?section=1">Accent tonique</a></li>
						<li><a href="lec04.php?section=3">Alphabet</a></li>
						<li><a href="lec04.php?section=6">Diphtongues</a></li>
						<li><a href="lec06.php?section=3">Rappel sur accent tonique, <b>c</b> <b>h</b></a></li>
						<li><a href="lec08.php?section=7">Rappel sur accent tonique, <b>h</b>, <b>r</b></a></li>
						<li><a href="lec09.php?section=2">Élision</a></li>
						<li><a href="lec09.php?section=4">Rappel sur <b>-aŭ</b></a></li>
					</ul>
					<h3>Syntaxe</h3>
					<ul>
						<li><a href="lec02.php?section=2">Accusatif pour complément d’objet direct</a></li>
						<li><a href="lec02.php?section=5">Forme négative</a></li>
						<li><a href="lec02.php?section=11">Comment ça va ? (quelques phrases utiles)</a></li>
						<li><a href="lec03.php?section=1">Ordre des mots</a></li>
						<li><a href="lec04.php?section=1">Est-ce que… ?, oui, non</a></li>
						<li><a href="lec05.php?section=1">Conversation</a></li>
						<li><a href="lec06.php?section=2">Corrélatifs interrogatifs</a></li>
						<li><a href="lec06.php?section=11">Traduction de <em>il y a</em></a></li>
						<li><a href="lec06.php?section=13">Complément d’objet indirect</a></li>
						<li><a href="lec06.php?section=14">Accusatif en remplacement d’une préposition</a></li>
						<li><a href="lec06.php?section=16">Accusatif derrière une préposition</a></li>
						<li><a href="lec06.php?section=16">Accusatif avec adverbe de lieu</a></li>
						<li><a href="lec04.php?section=8">La date</a></li>
						<li><a href="lec07.php?section=5">Expression de l’heure</a></li>
					</ul>
					<h3>Proverbes</h3>
					<ul>
						<li><a href="lec03.php">Leçon 3</a></li>
						<li><a href="lec05.php?section=4">Leçon 5</a></li>
						<li><a href="lec06.php?section=5">Leçon 6</a></li>
						<li><a href="lec07.php?section=4">Leçon 7</a></li>
						<li><a href="lec08.php?section=2">Leçon 8</a></li>
						<li><a href="lec09.php?section=6">Leçon 9</a></li>
					</ul>
					<h3>Culture</h3>
					<ul>
						<li><a href="lec04.php?section=13">La chanson espérantophone</a></li>
					</ul>
					
				</div>
			</div>
		</section>
	</article>
	
</div>
<?php include "dlekpiedo.inc.php"; ?>