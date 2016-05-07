<!-- period selection -->

<p class="periodevisu">
	{'menu_periode'|translate:"<strong> $date_litteral </strong>"} 
	
</p>

<p class="choixperiode">
	(<a href="{$url_period}&amp;period=1">{'menu_jour'|translate}</a> |
	<a href="{$url_period}&amp;period=2">{'menu_semaine'|translate}</a> |
	<a href="{$url_period}&amp;period=3">{'menu_mois'|translate}</a> |
	<a href="{$url_period}&amp;period=4">{'menu_annee'|translate}</a>
	)

		&nbsp;&nbsp;<a href="{$url_mod}&amp;mod=view_pdf&rss_hash={$rss_hash}"><img src="themes/default/images/pdf.png"></a>
</p>
