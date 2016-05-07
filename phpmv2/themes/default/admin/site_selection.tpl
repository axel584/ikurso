<h1>{'admin_select_site_title'|translate}</h1>
<div id="adminSiteSelection">
<p>{'admin_sitesenregistres'|translate}</p>
<ul>
{foreach from=$sites_admin_available key=id item=info}
	 <li><a href="{$url_current}&amp;adminsite={$id}">{$id} - {$info}</a></li>
{/foreach}
</ul>
</div>
