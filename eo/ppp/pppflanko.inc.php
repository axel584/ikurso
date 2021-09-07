	<aside class="col s12 m10 l3 offset-m1 push-l1">
		<?php
			// lien vers la révision du vocabulaire
			//getLigiloAlMemorilo($persono_id);
		?>
		<ul class="collapsible" data-collapsible="expandable">
			<?php 
			// On affiche le sommaire de la lecon
			getEnhavtabelo('PP',$leciono); 
			?>
		</ul>	
		<!--<p>
			Elŝutu ĉiujn rakontojn (entute: 25) en unu dosiero:
			 <a href="<echo $vojo;?>fr/gerda/son/gerda-malaperis.zip">gerda-malaperis.zip</a>
		</p>-->
		<?php
		pubFacebook();
		?>
	</aside>
