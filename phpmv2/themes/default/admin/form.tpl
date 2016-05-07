{include file=admin/form_header.tpl}

<div align="center">
	<form {$form_data.attributes}>
	<!-- Output hidden fields -->
	{$form_data.hidden}
	
	<!-- Display the fields -->
	{foreach from=$list_elements key=title item=data}
		<h3>{$title}</h3>
		<table cellpadding="6">
		{foreach from=$data item=fieldname}
			{* normal form *}
			{if $form_data.$fieldname.label}
			<tr>
				<td>{$form_data.$fieldname.label}</td>
				<td>{$form_data.$fieldname.html}</td>
			</tr>
			{* radio form *}
			{else}
				{foreach from=$form_data.$fieldname key=key item=radio}
				<tr>
					<td width="60%">{$radio.label}</td>
					<td>{$radio.html}</td>
				</tr>
				{/foreach}
			{/if}
		{/foreach}
		</table>
	{/foreach}
	<br/>
	<div class="boutonsAction">
	{$form_data.submit.html}
	
	{if $mod=='admin'}
	{$form_data.back.html}
	{/if}
	</div>
	</form> 
</div>