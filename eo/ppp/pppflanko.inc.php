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
		<?php
		pubPPP();
		?>
	</aside>
