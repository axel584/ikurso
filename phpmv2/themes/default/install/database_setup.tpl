{if $db_connect_ok}
<h4>{'install_db_ok'|translate}</h4>
{else}
	{if $header_error_message}
	<h3>{$header_error_message}</h3>
	{/if}
	
	{assign var=form_text value='install_database_setup_txt'|translate}
	{include file=admin/form.tpl}
{/if}