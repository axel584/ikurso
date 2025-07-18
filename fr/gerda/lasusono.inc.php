<?php
$cxapitro=substr(basename($_SERVER['REQUEST_URI']),4,2);
$sono=$vojo."audio/lasumin".$cxapitro.".mp3";
?>
			<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="<?php echo $sono;?>" />
					</audio>
				</p>
			</fieldset>