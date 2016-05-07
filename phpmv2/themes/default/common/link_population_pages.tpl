{if $info_sort.$id.4 == "0.0"}
<a
	class="includepopulation"
	onmouseover="pointer(this)"
	href="{$url_a_int_sort}&amp;a_{$id}_sort={$info_sort.$id.0}.{$i}.{$info_sort.$id.7}#i{$i}"> 
	{'generique_lowpop'|translate}
</a>
{else}

<a
	class="includepopulation"
	onmouseover="pointer(this)"
	href="{$url_a_int_sort}&amp;a_{$id}_sort={$info_sort.$id.0}.{$i}.0.0#i{$i}">
		{'generique_allpop'|translate}
</a>
{/if}