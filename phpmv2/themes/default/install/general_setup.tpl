{if $show_next_step}
<h4>{'install_config_file'|translate}</h4>
{else}
	{if $header_error_message}
	<h3>{$header_error_message}</h3>
	{/if}	
	{assign var=form_text value='install_general_config_text'|translate}
	{include file=admin/form.tpl}
{/if}
