			<p>Ce lexique contient en principe tous les mots nécessaires pour les
			exercices, plus quelques autres à titre d’information. Attention: les
			mots choisis ici sont ceux qui se traduisent par une racine simple en
			espéranto. Vous y trouverez par exemple <em>bon</em>, mais pas <em>mauvais</em>, car
			<span class="eo">malbona</span> est un dérivé de <span class="eo">bona</span>. Cherchez donc les contraires, les
			verbes, les noms, etc. ayant un sens apparenté au mot que vous cherchez.</p>
			<p class="rimarko"><strong>NOTE</strong> : <br>
			Les chiffres entre parenthèses renvoient à la leçon où le mot
			est introduit ou expliqué (pas toujours celle où il apparaît la
			première fois). Le premier chiffre fait référence au numéro 
			de la leçon du <em>Cours en dix leçons</em>, le deuxième chiffre fait 
			référence au numéro de la leçon du <em>Kurso de Esperanto</em>.
			</p>
			
			<div class="vortlisto">
				<div class="lexique">
					<?php
					$filename = "vortlisto.txt";
					$fd = fopen($filename, "r");
					$i=0;
					$res="";
					while($ligne = fgets($fd)){ // on lit la ligne
						$tab = explode('\\',$ligne);  // on sépare suivant les \ pour avoir les différents parametres (mot en espéranto/numéro de leçon CGE/numéro de leçon karlo/mot en français
						if ($i%3==0){$res.= "<div class=\"row\">";}
						$res.= "<p class=\"col s6 eo\">".$tab[0]." ";
						if (($tab[1].$tab[2])!=""){
							$res.= "<span class=\"numero\"> (";
							if ($tab[1]) {$res.= $tab[1];} else {$res.= "-";}
							$res.= "/";
							if ($tab[2]) {$res.= $tab[2];} else {$res.= "-";}
							$res.= ")</span>";
						}
						$res.= "</p><p class=\"col s6 \"> ".$tab[3]."</p>\n";
						if ($i%3==2) {$res.= "</div>\n";}
						$i++;
					}
					fclose($fd);
					echo $res;
					
					?>
				</div>
			</div>

