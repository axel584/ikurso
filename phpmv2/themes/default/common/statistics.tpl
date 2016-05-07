<h3 {if $mod=="rss"}style="padding-left:20px;font-size: 110%;color: #00008B;"{/if}>{'visites_statistiques'|translate} {if $mod=="rss"}(<strong>{$site_name}</strong>){/if}</h3>

{assign var=style1 value="text-align:left; border: 1px solid rgb(226, 227, 228);color: #00008B;padding-top:3px;padding-bottom:3px;background-color: rgb(241, 242, 243);padding:4;"}
{assign var=style2 value="text-align:left; border: 1px solid rgb(226, 227, 228);color: #00008B;padding-top:3px;padding-bottom:3px;background-color: white;padding:4;"}
<div class="centrer">

<table {if $mod!="rss"} class="resultats"{/if} cellpadding="5">
<tbody>
<tr>
	<th colspan="2" 
		{if $mod=="rss"}
			style="text-align:left; border-top: 1px solid rgb(80, 100, 133);border-right: 1px solid rgb(80, 100, 133);font-weight: bold;background-color: rgb(96, 115, 165);color: #ffffff;padding:7px;padding-right:4px;
			padding-left:4px;empty-cells: hide;"
		{/if}
		>
			<strong>{'visites_periodesel'|translate}</strong>
	</th>
</tr>
<tr>
	<td 
	{if $mod=="rss"}
	style="{$style1}"
	{else} class="damieralign"
	{/if}
	>
		{'visites_visites'|translate}
	</td>
	<td 
	{if $mod=="rss"}
	style="{$style2	}"
	{/if}
	>
		<strong>{$statistics.nb_vis}</strong>
	</td>
</tr>
<tr>
	<td {if $mod=="rss"}
	style="{$style2}"
	{else} class="align"{/if}>{'visites_uniques'|translate}</td>
	<td{if $mod=="rss"}
	style="{$style1}"
	{else} class="damier"{/if}><strong>{$statistics.nb_uniq_vis}</strong></td>
</tr>

<tr>
	<td {if $mod=="rss"}
	style="{$style1}"
	{else} class="damieralign"{/if}>{'visites_pagesvues'|translate}</td>
	<td {if $mod=="rss"}
	style="{$style2}"
	{/if}><strong>{$statistics.nb_pag}</strong></td>
</tr>
<tr>
	<td {if $mod=="rss"}
	style="{$style2}"
	{else} class="align"{/if}>{'visites_pagesvisiteurs'|translate}</td>
	<td{if $mod=="rss"} 
	style="{$style1}"
	{else} class="damier"{/if}><strong>{$statistics.nb_pag_per_vis|string_format:"%.1f"}</strong></td>
</tr>
<tr>
	<td {if $mod=="rss"}
	style="{$style1}"
	{else} class="damieralign"{/if}>{'visites_pagesvisitessign'|translate}</td>
	<td {if $mod=="rss"}
	style="{$style2}"
	{/if}><strong>{$statistics.nb_pag_per_vis_sig|string_format:"%.1f"}</strong></td>
</tr>
<tr>

	<td {if $mod=="rss"}
	style="{$style2}"
	{else} class="align"{/if}>{'visites_tempsmoyen'|translate}</td>
	<td{if $mod=="rss"}
	style="{$style1}"
	{else} class="damier"{/if}><strong>{$statistics.time_per_vis|time_visit}</strong></td>
</tr>
<tr>
	<td {if $mod=="rss"}
	style="{$style1}"
	{else} class="damieralign"{/if}>{'visites_tempsmoyenpv'|translate}</td>
	
	<td {if $mod=="rss"}
	style="{$style2}"
	{/if}><strong>{$statistics.time_per_pag|time_visit}</strong></td>
</tr>
<tr>
	<td {if $mod=="rss"}
	style="{$style2}"
	{else} class="align"{/if}>{'visites_tauxvisite'|translate}</td>

	<td {if $mod=="rss"}
	style="{$style1}"
	{else} class="damier"{/if}><strong>{$statistics.one_page_rate|string_format:"%.0f"}%</strong></td>
</tr>
{if $statistics.average_visits_per_day}
<tr>
	<td {if $mod=="rss"}
	style="{$style1}"
	{else} class="damieralign"{/if}>{'visites_average_visits_per_day'|translate}</td>
	<td {if $mod=="rss"}
	style="{$style2}"
	{/if}><strong>{$statistics.average_visits_per_day|string_format:"%d"}</strong></td>
</tr>
{/if}
</tbody>
</table>

</div>