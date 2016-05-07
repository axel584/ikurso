<h1>{'install_create_tables'|translate}</h1>
{if $offer_clean_install}
	<p>{'install_table_exist'|translate}</p>
	<p>{'install_table_choice'|translate}</p>

<p class="next_step">
<a href="index.php?mod=install_create_tables&amp;clean=1">{'install_table_erase'|translate}</a></li>
<br/>
<br/>
<a href="index.php?mod={$next_module_name}">{'install_table_reuse'|translate}</a></li>
</p>
{elseif $tables_success}
<h4>{'install_table_success'|translate}</h4>
{/if}