<!-- sites selection -->
<div id="sites">
<form action="{$url_site}" method="post">
<p>
	<select name="site" onchange="form.submit()" dir="{$dir}">
	<option value ="-1" {if $site_selected==-1} selected="selected"{/if}> {'menu_bilansites'|translate} </option>
		<optgroup label="Sites">
		   {foreach from=$sites_view_available key=id item=info}
		   		<option label="{$info}" value="{$id}" {if $site_selected==$id} selected="selected"{/if}>{$info}</option>
		   {/foreach}
		</optgroup>
	</select>
</p>
</form>
</div>