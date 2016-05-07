<h1>{'pagesvues_titre'|translate}</h1>

<!-- Summary Pages -->
{assign var="idtouse" value="sum"}
<table class="resultats" width="98%">
<tbody><tr>
	<th width=55% style="background-color:white"></th>
	<th width=15%>
	{if $period==1} {'pagesvues_joursel'|translate} <br><br><small>({/if}{$zoom.$idtouse.0.0}{if $period==1})</small>{/if}
	</th>
	
	<th width=15%>

	{if $period==1}	{'pagesvues_jmoins7'|translate} <br><br><small>({/if}{$zoom.$idtouse.0.1}{if $period==1})</small>{/if}
	</th>
	
	<th width=15%>
	{if $period==1} {'pagesvues_jmoins14'|translate} <br><br><small>({/if}{$zoom.$idtouse.0.2}{if $period==1})</small>{/if}
	</th>
</tr>
<tr>
	<td>{'pagesvues_pagesvues'|translate}</td>
	<td>{$zoom.$idtouse.2.0.nb_pag}</td>
	<td>{$zoom.$idtouse.2.1.nb_pag}</td>
	<td>{$zoom.$idtouse.2.2.nb_pag}</td>
</tr>
<tr>
	<td>{'pagesvues_pagesvudiff'|translate}</td>
	<td>{$zoom.$idtouse.2.0.nb_uniq_pag}</td>
	<td>{$zoom.$idtouse.2.1.nb_uniq_pag}</td>
	<td>{$zoom.$idtouse.2.2.nb_uniq_pag}</td>
</tr>
<tr>
	<td>{'pagesvues_recordpages'|translate}</td>
	<td>{$zoom.$idtouse.2.0.nb_max_pag}</td>
	<td>{$zoom.$idtouse.2.1.nb_max_pag}</td>
	<td>{$zoom.$idtouse.2.2.nb_max_pag}</td>
</tr>
<tr>
	<td class="sansbordure" colspan="4">
<!-- Pages table -->
{counter name=a}
{counter name=i}
<a id="a{$a}"></a>
<a id="i{$i}"></a>
<h3>{'pagesvues_pagesvues'|translate}</h3>
</td>
</tr>
<tr>
	<td colspan="4" class="tc">

{include file=common/viewpages_details.tpl}
</td></tr></table>
<div class="both"></div>

{pmv_data_array 
	id="pag"
	data="pag"
	template="common/link_population_pages.tpl"
}

<br/>
<p>
<a class="help_pagename" href="./index.php?mod=admin_help_pagename">{'pagesvues_help_pagename'|translate}</a>
</br>
<br/>
<a class="help_pagename" href="./index.php?mod=admin_url_redirection_generate">{'pagesvues_help_track_dls'|translate}</a>
</br>
</p>

<!-- Time per pages -->
{assign var="idtouse" value="sumtime"}
{counter name=a}
{counter name=i}
<a id="a{$a}"></a>
<a id="i{$i}"></a>
<table class="resultats" width="98%">
<tbody>
	<td class="sansbordure" colspan="4">
<a id="ancre1"></a><h3>{'pagesvues_tempsparpage'|translate}</h3>

</td>
</tr>
<tr id="csumtimeroot">
	<th width=55% style="background-color:white"></th>
	<th width=12%>
	{'pagesvues_total_time'|translate}<br />
	<a href="{$url_a_exit_sort}&amp;a_sumtime_sort=sumtime.asc.{$a}.{$info_sort.$idtouse.4}#a{$a}"><img src="themes/default/images/sortasc{if $info_sort.$idtouse.0 == "sumtime.asc"}r{/if}.gif"></a> 
	<a href="{$url_a_exit_sort}&amp;a_sumtime_sort=sumtime.desc.{$a}.{$info_sort.$idtouse.4}#a{$a}"><img src="themes/default/images/sortdesc{if $info_sort.$idtouse.0 == "sumtime.desc"}r{/if}.gif"></a>
		
	</th>
	<th width=12%>
	{'pagesvues_avg_time'|translate} <br />
	<a href="{$url_a_exit_sort}&amp;a_sumtime_sort=avgtime.asc.{$a}.{$info_sort.$idtouse.4}#a{$a}"><img src="themes/default/images/sortasc{if $info_sort.$idtouse.0 == "avgtime.asc"}r{/if}.gif"></a> 
	<a href="{$url_a_exit_sort}&amp;a_sumtime_sort=avgtime.desc.{$a}.{$info_sort.$idtouse.4}#a{$a}"><img src="themes/default/images/sortdesc{if $info_sort.$idtouse.0 == "avgtime.desc"}r{/if}.gif"></a>
		
	</th>
</tr>

<tr>
<td colspan=4>
{include file=common/viewpages_details.tpl}
</td>
</tr>
</table>
<div class="both"></div>


{pmv_data_array 
	id="sumtime"
	data="sumtime"
	template="common/link_population_pages.tpl"
} 

<br /><br />
<div class="centrer">
{counter name=a}
<a id="a{$a}"></a>
<h3>{'pagesvues_graphsnbpages'|translate}</h3>
<img src="{$url_mod}&mod=view_graph&graph_type=2&graph_data=pages_by_visit">
</div>