<h1>{'suivi_titre'|translate}</h1>

<!-- Entry Pages -->
{assign var="idtouse" value="entry"}
{counter name=a}
{counter name=i}
<a id="a{$a}"></a>
<a id="i{$i}"></a>

<table class="resultats" width="98%">
	<tr>
		<td class="sansbordure" colspan="4">
			<a id="ancre1"></a>
			<h3>{'suivi_pageentree'|translate}</h3>
		</td>
	</tr>
	
	<tr>
		<th width=55% style="background-color:white"></th>
		<th width=10%>
			{'suivi_pageentreehits'|translate}<br />
			
			<a href="{$url_a_entry_sort}&amp;a_entry_sort=entry.asc.{$a}.{$info_sort.$idtouse.4}#a{$a}">
				<img src="themes/default/images/sortasc{if $info_sort.$idtouse.0 == "entry.asc"}r{/if}.gif">
			</a> 
			
			<a href="{$url_a_entry_sort}&amp;a_entry_sort=entry.desc.{$a}.{$info_sort.$idtouse.4}#a{$a}">
				<img src="themes/default/images/sortdesc{if $info_sort.$idtouse.0 == "entry.desc"}r{/if}.gif">
			</a>
			
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
	id="entry"
	data="entry"
	template="common/link_population_pages.tpl"
}


<!-- Exit pages -->
{assign var="idtouse" value="exit"}
{counter name=a}
{counter name=i}
<a id="a{$a}"></a>
<a id="i{$i}"></a>
<table class="resultats" width="98%">
<tbody>
	<td class="sansbordure" colspan="4">
<a id="ancre1"></a><h3>{'suivi_pagesortie'|translate}</h3>

</td>
</tr>
<tr id="cexitroot">
	<th width=55% style="background-color:white"></th>
	<th width=12%>
	{'suivi_pagesortiehits'|translate}<br />
	<a href="{$url_a_exit_sort}&amp;a_exit_sort=exit.asc.{$a}.{$info_sort.$idtouse.4}#a{$a}"><img src="themes/default/images/sortasc{if $info_sort.$idtouse.0 == "exit.asc"}r{/if}.gif"></a> 
	<a href="{$url_a_exit_sort}&amp;a_exit_sort=exit.desc.{$a}.{$info_sort.$idtouse.4}#a{$a}"><img src="themes/default/images/sortdesc{if $info_sort.$idtouse.0 == "exit.desc"}r{/if}.gif"></a>
		
	</th>
	<th width=12%>
	{'suivi_tauxsortie'|translate} <br />
	<a href="{$url_a_exit_sort}&amp;a_exit_sort=exitrate.asc.{$a}.{$info_sort.$idtouse.4}#a{$a}"><img src="themes/default/images/sortasc{if $info_sort.$idtouse.0 == "exitrate.asc"}r{/if}.gif"></a> 
	<a href="{$url_a_exit_sort}&amp;a_exit_sort=exitrate.desc.{$a}.{$info_sort.$idtouse.4}#a{$a}"><img src="themes/default/images/sortdesc{if $info_sort.$idtouse.0 == "exitrate.desc"}r{/if}.gif"></a>
		
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
	id="exit"
	data="exit"
	template="common/link_population_pages.tpl"
} 

<!-- Single pages visit -->
{assign var="idtouse" value="singlepage"}
{counter name=a}
{counter name=i}
<a id="a{$a}"></a>
<a id="i{$i}"></a>
<table class="resultats" width="98%">
<tbody>
	<td class="sansbordure" colspan="4">
<a id="ancre1"></a><h3>{'suivi_singlepage'|translate}</h3>

</td>
</tr>
<tr id="csinglepageroot">
	<th width=55% style="background-color:white"></th>
	<th width=10%>
	{'generique_hits'|translate}<br />
	<a href="{$url_a_exit_sort}&amp;a_singlepage_sort=exit.asc.{$a}.{$info_sort.$idtouse.4}#a{$a}"><img src="themes/default/images/sortasc{if $info_sort.$idtouse.0 == "singlepage.asc"}r{/if}.gif"></a> 
	<a href="{$url_a_exit_sort}&amp;a_singlepage_sort=exit.desc.{$a}.{$info_sort.$idtouse.4}#a{$a}"><img src="themes/default/images/sortdesc{if $info_sort.$idtouse.0 == "singlepage.desc"}r{/if}.gif"></a>
		
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
	id="singlepage"
	data="singlepage"
	template="common/link_population_pages.tpl"
} 
