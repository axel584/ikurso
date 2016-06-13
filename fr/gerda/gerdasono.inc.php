<?php
$cxapitro=substr(basename($_SERVER['REQUEST_URI']),4,2);
$sono="./son/gerda/gerda".$cxapitro.".mp3";
?>
		<div class="sono">
			<p>Aŭskultu tiun rakonton: </p>
			<p>
				<audio id="audioPlayer" controls="controls" type="audio/mpeg">
					<source type="audio/mp3" src="<?php echo $sono;?>">
					<object type="application/x-shockwave-flash" data="http://ikurso.esperanto-jeunes.org/dewplayer.swf?son=<?=$sono?>"> 
						<param name="movie" value="http://ikurso.esperanto-jeunes.org/dewplayer.swf?son=<?=$sono?>" / align='justify'> 
						<param name="bgcolor" value="#668CB2" align='justify'> 
					</object>
					Votre navigateur ne peut pas lire les fichiers audio.
				</audio>
			</p><p>
			Elŝutu ĉiujn rakontojn (entute: 25) en unu dosiero:
			 <a href="./son/gerda_malaperis.zip">gerda_malaperis.zip</a>
			</li></ul>
			</p>
		</div>
