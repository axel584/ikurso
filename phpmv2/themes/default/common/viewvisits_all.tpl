<h1>{'visites_titre'|translate}</h1>

{counter name=a}
<a id="a{$a}"></a>

{include file="common/statistics.tpl"}

{counter name=a}
<a id="a{$a}"></a>
<h3>{'visites_recapperiode'|translate}</h3>
<div class="centrer">

<table {if $mod=="rss"}border=1{/if} class="resultats" cellpadding="5" width="100%">
<tbody><tr>
	<td class="vide"></td>
{foreach from=$periodsummaries item=info}
	<th>{$info.date}</th>
{/foreach}
</tr>
<tr>
	<td><strong>{'visites_nbvisites'|translate}</strong></td>
{foreach from=$periodsummaries item=info}

	<td>
		{if $info.visits == 0} {'visites_aucunevivisite'|translate}
		{else}
		{$info.visits_percent|print_percent} <br /><small>({$info.visits})</small>
		{/if}
	</td>
{/foreach}

<tr>
	<td><strong>{'visites_pagesvues'|translate}</strong></td>

{foreach from=$periodsummaries item=info}
	<td>
		{if $info.visits == 0} {'visites_aucunevivisite'|translate}
		{else}
		{$info.pages_percent|print_percent} <br /><small>({$info.pages})</small>
		{/if}
		</td>
{/foreach}

</tr>
</tbody></table>


<br><br>
{counter name=a}
<a id="a{$a}"></a>
<h3>{'visites_grapghrecap'|translate}</h3>
<img src="{$url_mod}&mod=view_graph&graph_type=1&graph_data=visits_period_summaries">

<br><br>
{counter name=a}
<a id="a{$a}"></a>
<h3>{'visites_grapghrecaplongterm'|translate}</h3>
<img src="{$url_mod}&mod=view_graph&graph_type=1&graph_data=visits_all_period_summary">

<br><br>
{counter name=a}
<a id="a{$a}"></a>
<h3>{'visites_graphtempsvisites'|translate}</h3>
<img src="{$url_mod}&mod=view_graph&graph_type=2&graph_data=visits_time">

<br><br>
{counter name=a}
<a id="a{$a}"></a>
<h3>{'visites_graphheureserveur'|translate}</h3>
<img src="{$url_mod}&mod=view_graph&graph_type=2&graph_data=visits_server_time">

<br><br>
{counter name=a}
<a id="a{$a}"></a>
<h3>{'visites_graphheurevisiteur'|translate}</h3>
<img src="{$url_mod}&mod=view_graph&graph_type=2&graph_data=visits_local_time">

</div>