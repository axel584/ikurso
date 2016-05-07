<h1>{'summary_title'|translate}</h1>

{counter name=a}
<a id="a{$a}"></a>
<h3>{'summary_stitle'|translate}</h3>

<div class="centrer">

<table class="resultats" cellpadding="5">
<tbody>
<tr>
	<th>{'generique_site'|translate}</td>
	<th class="damieralign">{'visites_visites'|translate}</td>
	<th class="damieralign">{'visites_pagesvues'|translate}</td>
	<th class="align">{'visites_pagesvisiteurs'|translate}</td>
	<th class="align">{'visites_tempsmoyen'|translate}</td>
	<th class="align">{'visites_tauxvisite'|translate}</td>
</tr>

{foreach from=$statistics.sites_info item=info}
<tr onmouseover="colorow(this, 1)" onmouseout="uncolorow(this)"  onclick="loadUrl('{$url_mod_site}&amp;site={$info.id}&amp;mod=view_visits')">
{cycle values="," assign=style}
	<td class="{$style}align" width="130px">{$info.site_name}</td>
	<td class="{$style}" width="10%"><strong>{$info.nb_vis}</strong></td>
	<td class="{$style}"><strong>{$info.nb_pag}</strong></td>
	<td class="{$style}"><strong>{$info.nb_pag_per_vis|string_format:"%.1f"}</strong></td>
	<td class="{$style}"><strong>{$info.time_per_vis|time_visit}</strong></td>
	<td class="{$style}"><strong>{$info.one_page_rate|string_format:"%.0f"}%</strong></td>
</tr>
{/foreach}
<tr>
<td colspan="6"></td>
</tr>
<tr>{cycle values="damierlight" assign=style}
	<td class="{$style}" width="100px"><strong>{'generique_total'|translate}</strong></td>
	<td class="{$style}"><strong>{$statistics.total.nb_vis}</strong></td>
	<td class="{$style}"><strong>{$statistics.total.nb_pag}</strong></td>
	<td class="{$style}"><strong>{$statistics.total.nb_pag_per_vis|string_format:"%.1f"}</strong></td>
	<td class="{$style}"><strong>{$statistics.total.time_per_vis|time_visit}</strong></td>
	<td class="{$style}"><strong>{$statistics.total.one_page_rate|string_format:"%.0f"}%</strong></td>
</tr>

</tbody>
</table>

</div>
