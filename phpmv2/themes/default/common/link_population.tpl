<div id="includepopulationtop">
{if $info_sort.$id_sort.4 == "0.0"}
<span
	id="includepopulation"
	onmouseover="pointer(this)"
	onclick="loadReferersDetails('{$url_a_int_sort}&amp;a_{$id_sort}_sort={$info_sort.$id_sort.0}.{$i}.{$info_sort.$id_sort.7}#i{$i}', this.parentNode.parentNode.parentNode, true, false)"> 
{'generique_lowpop'|translate}
</span>

{else}

<span 
	id="includepopulation"
	onmouseover="pointer(this)"
	onclick="loadReferersDetails('{$url_a_int_sort}&amp;a_{$id_sort}_sort={$info_sort.$id_sort.0}.{$i}.0.0#i{$i}', this.parentNode.parentNode.parentNode, true, false)" >
{'generique_allpop'|translate}
</span>
{/if}
</div>