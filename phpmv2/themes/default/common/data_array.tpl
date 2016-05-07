{if $data}
<table class="resultats" width="{if $id=='refererskeywords'}600{elseif $id=='settingsconfig' || $id=='refererssites'}500{else}400{/if}px" cellpadding="0" align="center">
	<tr>
		<th>{$headline}</th>
		<th width="120px">{'generique_nombre'|translate}</th>
	</tr>

{foreach from=$data item=raw name=boucle}
	<tr
	{if $raw.id}
	onmouseover="colorow(this, true);" 
	onmouseout="uncolorow(this);" 
 	onclick="loadReferersDetails('{$url_mod}&amp;mod=view_data_array&amp;method_name={$id}details&amp;id_details={$raw.id}', this);"
  	{elseif $raw.continent}
	onmouseover="colorow(this, true);" 
	onmouseout="uncolorow(this);" 
 	onclick="loadUrl('{$url_mod}&amp;mod=view_source&amp;id_details_continent={$raw.continent}#a1')"
  	{/if}
	>
	{cycle values=",damier" assign=style}
		<td class="{$style}align" >
		<strong>
          {if $raw.img}
		    		<img src="{$path.$id}/{$raw.img}">
		  {elseif $raw.id}
          	<img src="{$path.theme}/f5a.png">
		  {elseif $raw.url}
		  	<a href="{$raw.url}" target="_blank"> 
		  {elseif $id == 'world'}
		  	<a href="{$url}&amp;continent_zoom={$raw.continent}#a{$a}">
		  {/if}
		  &nbsp;
		  {$raw.data|truncate:60:'...'}
		  
		  {if $raw.url || $id == 'world' }</a>
		  {/if}
		
		</strong>
		</td>
		
		<td class="{$style}">
			{$raw.sum} ({$raw.percent|string_format:"%.1f"} %)
		</td>
	
	</tr>
{/foreach}
</table>

{include file='common/page_index.tpl'}

{else}null{/if}