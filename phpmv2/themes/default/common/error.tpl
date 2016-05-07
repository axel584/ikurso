{if $content_message}
<h2>{$content_message}</h2>
{/if}

<h2 {if $mod=="rss"} style="padding-left:20px;font-size: 110%;color: red;"{/if}>
	{'aucunvisiteur_titre'|translate}
</h2>
{if $error_message_bis}
	<br/><center><small><i>{$error_message_bis}</i></small></center>
{/if}