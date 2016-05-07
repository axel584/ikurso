{if sizeof($pdf_available) != 0}
	<h1>{'admin_newsletter_title'|translate}</h1>
	<div class="centrer">
	<p>{'admin_recorded_nl'|translate}</p>
	<ul>
	{foreach from=$pdf_available key=id item=info}
		 <li><a href="{$url_current}&amp;idPdf={$id}">{$info->pdfName} (nid = {$id})</a></li>
	{/foreach}
	</ul>
	</div>
{else}
	<h2>{'admin_nonewsletter'|translate}</h2>
	{include file="admin/go_back.tpl"}
{/if} 