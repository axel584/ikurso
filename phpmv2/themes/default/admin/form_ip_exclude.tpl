{include file=admin/form_header.tpl}
{assign var=str_to value='generique_to'|translate}
<div class="centrer">
<form {$form_data.attributes}>
	<!-- Output hidden fields -->
	{$form_data.hidden}
	<!-- Display the fields -->
	<table class="centrer">
	{foreach from=$list_elements key=title item=data}

		{foreach from=$data item=fieldname}
		{cycle name=a values="<tr><td>,"}	
					{$form_data.$fieldname.html}
		{cycle name=b values=" $str_to ,</td></tr>"}			
		{/foreach}
	{/foreach}
	</table>
	<br/>
	<div class="boutonsAction">
	{$form_data.submit.html}
	{$form_data.back.html}
	</div>
</form>
</div>