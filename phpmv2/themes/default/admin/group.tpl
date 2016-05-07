
{include file=admin/form_header.tpl}
<p class="texte">{'admin_group_stitle'|translate}</p>
<form {$form_data.attributes}>

	<!-- Output hidden fields -->
	{$form_data.hidden}
	
	<!-- Display the fields -->
<!-- OLD Version
	<table align="center"> 
	{foreach from=$list_elements key=title item=data}

		<tr><td colspan="2">
			<table border=1 cellpadding=9 width=600>
			<tr><td colspan="2">{$title}</td></tr>

		{if sizeof($data)<2}
			<tr><td colspan="2"><font color="red">{'admin_no_user_group'|translate}</font></td></tr>
		{else}
			{foreach from=$data item=fieldname}
				
				<tr>
					<td>&nbsp;{$form_data.$fieldname.label}</td>
					<td>{$form_data.$fieldname.html}</td>
				</tr>
				
			{/foreach}
		{/if}
			
			</table>
		</td></tr>
		<tr><td><br/></td></tr>
	{/foreach}
</table>
	
<div class="boutonsAction">
{$form_data.submit.html}

{if $mod=='admin'}
{$form_data.back.html}
{/if}
</div>
-->
	<input type="hidden" name="nb_users_available" value="{$nb_users_available}" />
	<input type="hidden" name="id_site" value="{$id_site}" />
	
	<table align="center" border=1 cellpadding=9> 
	<tr>
		{if 'text_dir'|translate == "ltr"}
		<td>&nbsp;</td>
		{/if}
		{foreach from=$groups_available key=id item=name}
		<td align="center">{$name}</td>
		{/foreach}
		{if 'text_dir'|translate == "rtl"}
		<td>&nbsp;</td>
		{/if}
	</tr>
	{foreach name="allUser" from=$users_available key=login item=info iteration=numUser}
	{assign var="numUser" value=$smarty.foreach.allUser.iteration}
	<tr>
		{if 'text_dir'|translate == "ltr"}
		<td width="450">{$info.0}<input type="hidden" name="name{$numUser}" value="{$login}" /></td>
		{/if}
		{foreach from=$groups_available key=id item=name}
		<td width="50" align="center"><input type="radio" name="right{$numUser}" value="{$id}" {if $info.1 == $id} checked {/if}/></td>
		{/foreach}
		{if 'text_dir'|translate == "rtl"}
		<td width="450">{$info.0}<input type="hidden" name="name{$numUser}" value="{$login}" /></td>
		{/if}
	</tr>
	{/foreach}
	</table><br>
	
<div class="boutonsAction">
{$form_data.submit.html}

{if $mod=='admin'}
{$form_data.back.html}
{/if}
</div>
<!-- Help of group -->
<br>
{if 'text_dir'|translate == "rtl"}
<table border="0">
	<tr valign="top"><td>({'admin_group_admin_n'|translate}) <b>{$groups_available.1}</b></td><td nowrap>&nbsp;<u>{'generique_name'|translate}</u></td></tr>
	<tr valign="top"><td>{'admin_group_admin_d'|translate}<br>&nbsp;</td><td nowrap>&nbsp;<u>{'generique_description'|translate}</u></td></tr>
	<tr valign="top"><td>({'admin_group_view_n'|translate}) <b>{$groups_available.2}</b></td><td nowrap>&nbsp;<u>{'generique_name'|translate}</u></td></tr>
	<tr valign="top"><td>{'admin_group_view_d'|translate}<br>&nbsp;</td><td nowrap>&nbsp;<u>{'generique_description'|translate}</u></td></tr>
	<tr valign="top"><td>({'admin_group_noperm_n'|translate}) <b>{$groups_available.no_permission}</b></td>&nbsp;<td nowrap><u>{'generique_name'|translate}</u></td></tr>
	<tr valign="top"><td>{'admin_group_noperm_d'|translate}<br>&nbsp;</td><td nowrap>&nbsp;<u>{'generique_description'|translate}</u></td></tr>
</table>
{else}
<table border="0">
	<tr valign="top"><td nowrap><u>{'generique_name'|translate}</u>&nbsp;</td><td><b>{$groups_available.1}</b> ({'admin_group_admin_n'|translate})</td></tr>
	<tr valign="top"><td nowrap><u>{'generique_description'|translate}</u>&nbsp;</td><td>{'admin_group_admin_d'|translate}<br>&nbsp;</td></tr>
	<tr valign="top"><td nowrap><u>{'generique_name'|translate}</u>&nbsp;</td><td><b>{$groups_available.2}</b> ({'admin_group_view_n'|translate})</td></tr>
	<tr valign="top"><td nowrap><u>{'generique_description'|translate}</u>&nbsp;</td><td>{'admin_group_view_d'|translate}<br>&nbsp;</td></tr>
	<tr valign="top"><td nowrap><u>{'generique_name'|translate}</u>&nbsp;</td><td><b>{$groups_available.no_permission}</b> ({'admin_group_noperm_n'|translate})</td></tr>
	<tr valign="top"><td nowrap><u>{'generique_description'|translate}</u>&nbsp;</td><td>{'admin_group_noperm_d'|translate}<br>&nbsp;</td></tr>
</table>
{/if}
</form>
