<div class="centrer">
<table class="resultats">
<tr>
	<th>{'generique_langue'|translate}</th>
	<th>{'generique_traducteur'|translate}</th>
</tr>

{foreach from=$translators_array item=info}

<tr>
	<td><a href="index.php?lang={$info.lang_file}&mod=contacts">{$info.lang_name}</a></td>
	<td><a href="mailto:{$info.translator_email}">{$info.translator_name}</a></td>
</tr>

{/foreach}
</table>
</div>