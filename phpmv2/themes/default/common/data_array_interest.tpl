<table class="interest" cellpadding="5" align="center">
{foreach from=$data item=raw name=boucle}
	{if $smarty.foreach.boucle.iteration == 1}
	<tr>
		<th width="{if $id==refererskeywords}40{else}34{/if}%">{$headline}</th>
		<th>
			{'generique_nombre'|translate} <br />
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('{$url_a_int_sort}&amp;a_{$id_sort}_sort=sum.asc.{$i}.{$info_sort.$id_sort.4}#i{$i}', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)">
				<img src="themes/default/images/sortasc{if $info_sort.$id_sort.0 == "sum.asc"}r{/if}.gif">
			</a> 
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('{$url_a_int_sort}&amp;a_{$id_sort}_sort=sum.desc.{$i}.{$info_sort.$id_sort.4}#i{$i}', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortdesc{if $info_sort.$id_sort.0 == "sum.desc"}r{/if}.gif"></a>
		</th>
		<th>
			{'visites_pagesvisites'|translate}<br />
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('{$url_a_int_sort}&amp;a_{$id_sort}_sort=page_per_visit.asc.{$i}.{$info_sort.$id_sort.4}#i{$i}', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortasc{if $info_sort.$id_sort.0 == "page_per_visit.asc"}r{/if}.gif"></a> 
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('{$url_a_int_sort}&amp;a_{$id_sort}_sort=page_per_visit.desc.{$i}.{$info_sort.$id_sort.4}#i{$i}', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortdesc{if $info_sort.$id_sort.0 == "page_per_visit.desc"}r{/if}.gif"></a>
		</th>
		<th>
			{'visites_pagesvisitessign'|translate}<br />
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('{$url_a_int_sort}&amp;a_{$id_sort}_sort=page_per_visit_significant.asc.{$i}.{$info_sort.$id_sort.4}#i{$i}', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortasc{if $info_sort.$id_sort.0 == "page_per_visit_significant.asc"}r{/if}.gif"></a> 
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('{$url_a_int_sort}&amp;a_{$id_sort}_sort=page_per_visit_significant.desc.{$i}.{$info_sort.$id_sort.4}#i{$i}', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortdesc{if $info_sort.$id_sort.0 == "page_per_visit_significant.desc"}r{/if}.gif"></a>
		</th>
		<th>
			{'visites_tauxvisite'|translate}<br />
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('{$url_a_int_sort}&amp;a_{$id_sort}_sort=one_page_rate.asc.{$i}.{$info_sort.$id_sort.4}#i{$i}', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortasc{if $info_sort.$id_sort.0 == "one_page_rate.asc"}r{/if}.gif"></a> 
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('{$url_a_int_sort}&amp;a_{$id_sort}_sort=one_page_rate.desc.{$i}.{$info_sort.$id_sort.4}#i{$i}', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortdesc{if $info_sort.$id_sort.0 == "one_page_rate.desc"}r{/if}.gif"></a>
		</th>
		<th>
			{'visites_tempsmoyen'|translate}<br />
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('{$url_a_int_sort}&amp;a_{$id_sort}_sort=time_per_visit.asc.{$i}.{$info_sort.$id_sort.4}#i{$i}', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortasc{if $info_sort.$id_sort.0 == "time_per_visit.asc"}r{/if}.gif"></a> 
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('{$url_a_int_sort}&amp;a_{$id_sort}_sort=time_per_visit.desc.{$i}.{$info_sort.$id_sort.4}#i{$i}', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortdesc{if $info_sort.$id_sort.0 == "time_per_visit.desc"}r{/if}.gif"></a>
		</th>
	</tr>
	{/if}
	<tr>
		<td class="{if $smarty.foreach.boucle.iteration is even}damier{/if}align" nowrap>
			{if $raw.img}<img src="{$path.$id}/{$raw.img}"> {/if}
			<strong>
			{if $id == 'sites'}<a href="http://{$raw.data}" target="_blank">
			{elseif $raw.url}<a href="{$raw.url}" target="_blank">{/if}
			{$raw.data|truncate:50:'...'}
			{if $id == 'sites'}</a>{/if}
			</strong>
		</td>
		<td class="{if $smarty.foreach.boucle.iteration is even}damier{/if}">{$raw.sum}</td>
		<td class="{if $smarty.foreach.boucle.iteration is even}damier{/if}">{$raw.page_per_visit|string_format:"%.1f"}</td>
		<td class="{if $smarty.foreach.boucle.iteration is even}damier{/if}">{$raw.page_per_visit_significant|string_format:"%.1f"}</td>
		<td class="{if $smarty.foreach.boucle.iteration is even}damier{/if}">{$raw.one_page_rate|string_format:"%.0f"} %</td>
		<td class="{if $smarty.foreach.boucle.iteration is even}damier{/if}">{$raw.time_per_visit}</td>
	</tr>	
{/foreach}
</table>


{if $info_sort.$id_sort.4 == "0.0"}
{include file='common/page_index.tpl'}
{/if}

{pmv_data_array 
	id=$id
	template="common/link_population.tpl"
}