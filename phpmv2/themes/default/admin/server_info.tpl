{assign var=ok value="<img src='themes/default/images/ok.gif' />"}
{assign var=error value="<img src='themes/default/images/no.gif' />"}
{assign var=warning value="<img src='themes/default/images/warning.gif' />"}

<h1>{'install_system_requirements'|translate}</h1>

<h3>{'admin_title_required'|translate}</h3>
<table class="infos">
  <tr>
    <td class="libelle">PHP version > {$PHP_VERSION_NEEDED} </td>
    <td>
	{if $server.php_ok}{$ok}{else}{$error}{/if}
	</td>
  </tr>
  <tr>
    <td class="libelle">Mysql extension</td>
    <td>
	{if $server.mysql_ok}{$ok}{else}{$error}{/if}
	</td>
  </tr>  
  <tr>
    <td class="libelle">PHP-XML extension (utf8_decode function)</td>
    <td>
	{if $server.php_xml}{$ok}{else}{$error}{/if}
	</td>
  </tr>
  <tr>
    <td class="libelle">
    	{'admin_write_dir'|translate}
		
		{foreach from=$server.dirs key=dir item=bool}
			{if !$bool}{assign var=explanation value=1}{/if}
		{/foreach}
		
		{if $explanation}
			<p class="explenation"> {'admin_chmod_howto'|translate}</p>
		{/if}
    </td>
    <td>
	<ul>
	{foreach from=$server.dirs key=dir item=bool}
		<li>
		{if $bool}
		{$ok}
		{else}
		<span class="error">{$error}</span>
		{/if}
		
		{$dir}
		</li>
	{/foreach}
	</ul>
	</td>
  </tr>
</table>
<h3>{'admin_optional'|translate}</h3>
<table class="infos">
<tr>
    <td class="libelle">GD > 2.x (graphics)</td>
    <td>	
	{if $server.gd_ok}
	{$ok}
	{else}
	{$warning}
	{/if}
	</td>
</tr>
<tr>
    <td class="libelle">FreeType (graphics text)</td>
    <td>
	{if $server.freetype_ok}
	{$ok}
	{else}
	{$warning}
	{/if}
	</td>
  </tr>
<tr>
    <td class="libelle">{'admin_memory_limit'|translate}</td>
    <td>
	{$memory_limit}
	<strong>{$memory_limit_ok}</strong>
	
	{if $server.memory_ok}
	{$ok}
	{else}
	{$warning}
	{/if}	
	{$server.memory} 
	
	</td>
</tr>
<tr>
    <td class="libelle">set_time_limit() {'admin_allowed'|translate}</td>
    <td>
	
	{if $server.set_time_limit_ok}
	{$ok}
	{else}
	{$warning}
	{/if}
	</td>
</tr>
<tr>
    <td class="libelle">mail() {'admin_allowed'|translate}</td>
    <td>
	
	{if $server.mail_ok}
	{$ok}
	{else}
	{$warning}
	{/if}
	</td>
</tr>
</table>
  
{if $display_information}
	<h3>{'generique_information'|translate}</h3>
	<table class="infos">
	<tr>
		<td class="libelle">{'admin_webserver'|translate}</td>
		<td>{$server.server_version}</td>
	</tr>
	<tr>
		<td class="libelle">{'admin_server_os'|translate}</td>
	    <td>{$server.server_os}</td>
	</tr>
	<tr>
	    <td>{'admin_server_time'|translate}</td>
	    <td>{$server.server_time}</td>
	</tr>
	<tr>
	    <td>Uptime</td>
	    <td>{$server.server_uptime}</td>
	</tr>
	</table>	  
  {/if}

{'admin_legend'|translate}
<ul>
<li>{$ok} : {'generique_ok'|translate}</li>
<li>{$error} : {'admin_error_critical'|translate}</li>
<li>{$warning} : {'admin_warning'|translate}</li>
</ul>

{if $display_information}
	{include file=admin/go_back.tpl}
{/if}