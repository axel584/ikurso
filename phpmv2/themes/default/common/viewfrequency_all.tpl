<h1>{'frequence_titre'|translate}</h1>

{counter name=a}
<a id="a{$a}"></a>
<h3>{'visites_statistiques'|translate}</h3>

<div class="centrer">

<table class="resultats" cellpadding="5">
<tbody>
<tr>
	<th colspan="2"><strong>{'visites_periodesel'|translate}</strong></th>
</tr>
<tr>
	<td class="damieralign">{'frequence_nouveauxvisiteurs'|translate}</td>
	<td><strong>{$frequencystatistics.nb_uniq_vis_new}</strong></td>
</tr>
<tr>
	<td class="align">{'frequence_visiteursconnus'|translate}</td>
	<td class="damier"><strong>{$frequencystatistics.nb_uniq_vis_returning}</strong></td>
</tr>
<tr>
	<td class="damieralign">{'frequence_returningrate'|translate}</td>
	<td><strong>{$frequencystatistics.returning_rate|string_format:"%.0f"}%</strong></td>
</tr>
<tr>
	<td class="align">{'frequence_vispervis'|translate}</td>
	<td class="damier"><strong>{$frequencystatistics.nb_vis_per_uniq_vis|string_format:"%.1f"} {'frequence_vis'|translate}</strong></td>
</tr>
</tbody>
</table>


<h3>{'frequence_nouveauxconnus'|translate}</h3>
<table class="resultats" cellpadding="18">
<tbody>
<tr>
	<th></th>
	<th><strong>{'frequence_visitesconnues'|translate}</strong></th>
	<th><strong>{'frequence_nouvellesvisites'|translate}</strong></th>
</tr>
<tr>
	<td class="damieralign">{'visites_visites'|translate}</td>
	<td>
		<strong>{$frequencystatistics.nb_vis_returning}</strong> 
		<small>({$frequencystatistics.nb_vis_returning_percent|string_format:"%.0f"}%)</small></td>
	<td class="damier">
		<strong>{$frequencystatistics.nb_vis_new}</strong> 
		<small>({$frequencystatistics.nb_vis_new_percent|string_format:"%.0f"}%)</small>
	</td>
</tr>
<tr>
	<td class="align">{'visites_pagesvues'|translate}</td>
	<td class="damier">
		<strong>{$frequencystatistics.nb_pag_returning}</strong> 
		<small>({$frequencystatistics.nb_pag_returning_percent|string_format:"%.0f"}%)</small>
	</td>
	<td>
		<strong>{$frequencystatistics.nb_pag_new}</strong> 
		<small>({$frequencystatistics.nb_pag_new_percent|string_format:"%.0f"}%)</small>
	</td>
</tr>

<tr>
	<td class="damieralign">{'visites_pagesvisiteurs'|translate}</td>
	<td>
		<strong>{$frequencystatistics.nb_pag_per_vis_returning|string_format:"%.1f"}</strong>
	</td>
	<td class="damier">
		<strong>{$frequencystatistics.nb_pag_per_vis_new|string_format:"%.1f"}</strong>
	</td>
</tr>
<tr>
	<td class="align">{'visites_tempsmoyen'|translate}</td>
	<td class="damier">
		<strong>{$frequencystatistics.time_per_vis_returning|time_visit}</strong>
	</td>
	<td>
		<strong>{$frequencystatistics.time_per_vis_new|time_visit}</strong>
	</td>
</tr>
<tr>
	<td class="damieralign">{'visites_tempsmoyenpv'|translate}</td>
	<td>
		<strong>{$frequencystatistics.time_per_pag_returning|time_visit}</strong>
	</td>
	<td class="damier">
		<strong>{$frequencystatistics.time_per_pag_new|time_visit}</strong>
	</td>
</tr>
<tr>
	<td class="align">{'visites_tauxvisite'|translate}</td>
	<td class="damier">
		<strong>{$frequencystatistics.one_page_rate_returning|string_format:"%.0f"}%</strong>
	</td>
	<td>
		<strong>{$frequencystatistics.one_page_rate_new|string_format:"%.0f"}%</strong>
	</td>
</tr>

</tbody>
</table>

<br /><br />
{counter name=a}
<a id="a{$a}"></a>
<h3>{'frequence_nouveauxconnusgraph'|translate}</h3>
<img src="{$url_mod}&mod=view_graph&graph_type=5&graph_data=frequency_new_vs_returning">

<br /><br />
{counter name=a}
<a id="a{$a}"></a>
<h3>{'pagesvues_vispervisgraph'|translate}</h3>
<img src="{$url_mod}&mod=view_graph&graph_type=2&graph_data=visits_by_visitor">

</div>