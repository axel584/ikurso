<h2>{$message}</h2>
<div class="centrer">
{if $confirmation==site}
	{'admin_sitedeletemessage'|translate}
{/if}
<ul>
<li><a href="{$url_current}&amp;confirmed=1">{'admin_confirmyes'|translate}</a></li>
<li><a href="index.php?mod=admin_index">{'admin_confirmno'|translate}</a></li>
</ul>
</div>