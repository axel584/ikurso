{if sizeof($partners_available) != 0}


	<h1>{'admin_partner_title'|translate}</h1>
	<div class="centrer">
	
	<p>{'admin_recorded_partners'|translate}</p>
	<ul>
	{foreach from=$partners_available key=id item=info}
		 <li><a href="{$url_current}&amp;adminpartner={$id}">{$info} (pid = {$id})</a></li>
	{/foreach}
	</ul>
	</div>
{else}
	<h2>{'admin_nopartner'|translate}</h2>
	{include file="admin/go_back.tpl"}
{/if} 