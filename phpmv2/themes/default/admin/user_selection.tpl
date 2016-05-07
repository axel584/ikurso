{if sizeof($users_available) != 0}
	<h1>{'admin_select_user_title'|translate}</h1>
	<div class="centrer">
	{'admin_recorded_users'|translate}
	<ul>
	{foreach from=$users_available key=id item=alias}
		<li><a href="{$url_current}&amp;adminuser={$id}">{$alias} (login : {$id})</a></li>
	{/foreach}	
	</div>
{else}
<h2>{'admin_no_user_registered'|translate}</h2>
{include file="admin/go_back.tpl"}
{/if} 