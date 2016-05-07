<!-- month selection -->
<div id="calendrier">
<form action="{$url_date}" method="post">
<p>
	<select onchange="form.submit()" name="date">
	{html_options options=$months_available selected=$month_selected}
	</select>	
</p>
</form>
<!-- /month selection -->

<!-- calendar -->
<table>
	<tr>
		{foreach from=$day_first_letter item=day}
		<th>{$day}</th>
		{/foreach}
	</tr>
	{foreach from=$calendar item=week}
	<tr>
		{foreach from=$week item=days}
			<td>
				{if $days.exists==1}<a {if $days.selected==1} class="selection" {/if} href="{$url_date}&amp;date={$days.date}">{/if}
				{$days.day|replace:"-":"<br />"}
				{if $days.exists==1}</a>{/if}
			</td>
		{/foreach}
	</tr>
	{/foreach}
</table>
</div>
<!-- /calendar -->