{if $zoom}
<table cellpadding="5" align="center" id="detail">
		<tr>
			<th colspan="2">
				<img src="themes/default/images/f6ltr.png" alt="" /> 
				{'affluents_details'|translate} 
				({if $nb_elements > 0}{$offset+1}{else}0{/if} 
				{'generique_to'|translate} 
				{if $offset+$data_limit > $nb_elements} {$nb_elements} {else} {$offset+$data_limit} {/if} 
				{'generique_total_on'|translate} 
				{$nb_elements})
			</th>
		</tr>
{foreach from=$zoom item=raw name=boucle}
	<tr>
		<td class="data">
			{if $raw.url}
			<a href="{$raw.url}" target="_blank">{/if}
		  
          {if $raw.img}
		    		<img src="{$path.$id}/{$raw.img}">
		    		{/if}
		 {if $id =='refererssearchenginesdetails'} {assign var=limit value=40} 
		 {else}{assign var=limit value=55}
		 {/if}
		 
		 {$raw.data|truncate:$limit:"...":true}
		
		{if $raw.url}
		</a>
		{/if}

		</td>
		<td class="nb">{$raw.sum} ({$raw.percent|string_format:"%.1f"} %)</td>
	</tr>
{/foreach}
</table>

{include file='common/page_index.tpl'}

{else}
{'generique_inconnu'|translate}
{/if}