
{if $id != 'continent'}
<a id="a{$a}"></a>
<h3>{$headline|translate}</h3>
{else}
<br /> <br />
{/if}

{if $data != "null"}
	{if $text}{$text} <br /><br /> {/if}
	<table align="center">
	<tr>
	<td>
	{$data}
	</td>
	</tr>
	</table>
{else}
{$lang_no_visit|translate}
{/if}
