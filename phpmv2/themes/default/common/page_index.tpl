{if $offset>0 || $nb_elements > $offset + $data_limit}
<div align="center" id="next">
{/if}

{if $offset>0}
	<a
	onmouseover="pointer(this);"
	onclick="loadReferersDetails('{$url_offset}&offset={$offset-$data_limit}{if $continent_asked}&id_details_continent={$continent_asked}{/if}', this.parentNode.parentNode.parentNode, true)">
	 < {'generique_previous'|translate}
	 </a>
{/if}

{if $offset > 0 && $nb_elements > $offset + $data_limit} | {/if}
{if $nb_elements > $offset + $data_limit}
	<a
	onmouseover="pointer(this);"
	onclick="loadReferersDetails('{$url_offset}&offset={$offset+$data_limit}{if $continent_asked}&id_details_continent={$continent_asked}{/if}', this.parentNode.parentNode.parentNode, true)">
	{'generique_next'|translate} >
	</a>
{/if}

{if $offset>0 || $nb_elements > $offset + $data_limit}
</div>
{/if}

