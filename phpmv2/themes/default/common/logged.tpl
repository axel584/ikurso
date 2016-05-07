<div align="right" style="padding-right:20px">
<small>
	<strong>{$user_login}</strong> ({$user_alias}) | 
	{if $user_login == 'anonymous'}<a href="{$url_mod}&amp;mod=login">{'generique_login'|translate}</a>{else}
	<a href="{$url_mod}&amp;mod=logout"><u>{'generique_logout'|translate}</u></a>{/if}
</small>
</div>