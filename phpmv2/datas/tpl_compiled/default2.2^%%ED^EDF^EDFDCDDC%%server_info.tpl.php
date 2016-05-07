<?php /* Smarty version 2.6.9, created on 2006-11-26 23:55:55
         compiled from admin/server_info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'admin/server_info.tpl', 5, false),)), $this); ?>
<?php $this->assign('ok', "<img src='themes/default/images/ok.gif' />");  $this->assign('error', "<img src='themes/default/images/no.gif' />");  $this->assign('warning', "<img src='themes/default/images/warning.gif' />"); ?>

<h1><?php echo ((is_array($_tmp='install_system_requirements')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h1>

<h3><?php echo ((is_array($_tmp='admin_title_required')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>
<table class="infos">
  <tr>
    <td class="libelle">PHP version > <?php echo $this->_tpl_vars['PHP_VERSION_NEEDED']; ?>
 </td>
    <td>
	<?php if ($this->_tpl_vars['server']['php_ok']):  echo $this->_tpl_vars['ok'];  else:  echo $this->_tpl_vars['error'];  endif; ?>
	</td>
  </tr>
  <tr>
    <td class="libelle">Mysql extension</td>
    <td>
	<?php if ($this->_tpl_vars['server']['mysql_ok']):  echo $this->_tpl_vars['ok'];  else:  echo $this->_tpl_vars['error'];  endif; ?>
	</td>
  </tr>  
  <tr>
    <td class="libelle">PHP-XML extension (utf8_decode function)</td>
    <td>
	<?php if ($this->_tpl_vars['server']['php_xml']):  echo $this->_tpl_vars['ok'];  else:  echo $this->_tpl_vars['error'];  endif; ?>
	</td>
  </tr>
  <tr>
    <td class="libelle">
    	<?php echo ((is_array($_tmp='admin_write_dir')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

		
		<?php $_from = $this->_tpl_vars['server']['dirs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dir'] => $this->_tpl_vars['bool']):
?>
			<?php if (! $this->_tpl_vars['bool']):  $this->assign('explanation', 1);  endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		
		<?php if ($this->_tpl_vars['explanation']): ?>
			<p class="explenation"> <?php echo ((is_array($_tmp='admin_chmod_howto')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>
		<?php endif; ?>
    </td>
    <td>
	<ul>
	<?php $_from = $this->_tpl_vars['server']['dirs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dir'] => $this->_tpl_vars['bool']):
?>
		<li>
		<?php if ($this->_tpl_vars['bool']): ?>
		<?php echo $this->_tpl_vars['ok']; ?>

		<?php else: ?>
		<span class="error"><?php echo $this->_tpl_vars['error']; ?>
</span>
		<?php endif; ?>
		
		<?php echo $this->_tpl_vars['dir']; ?>

		</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
	</td>
  </tr>
</table>
<h3><?php echo ((is_array($_tmp='admin_optional')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>
<table class="infos">
<tr>
    <td class="libelle">GD > 2.x (graphics)</td>
    <td>	
	<?php if ($this->_tpl_vars['server']['gd_ok']): ?>
	<?php echo $this->_tpl_vars['ok']; ?>

	<?php else: ?>
	<?php echo $this->_tpl_vars['warning']; ?>

	<?php endif; ?>
	</td>
</tr>
<tr>
    <td class="libelle">FreeType (graphics text)</td>
    <td>
	<?php if ($this->_tpl_vars['server']['freetype_ok']): ?>
	<?php echo $this->_tpl_vars['ok']; ?>

	<?php else: ?>
	<?php echo $this->_tpl_vars['warning']; ?>

	<?php endif; ?>
	</td>
  </tr>
<tr>
    <td class="libelle"><?php echo ((is_array($_tmp='admin_memory_limit')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
    <td>
	<?php echo $this->_tpl_vars['memory_limit']; ?>

	<strong><?php echo $this->_tpl_vars['memory_limit_ok']; ?>
</strong>
	
	<?php if ($this->_tpl_vars['server']['memory_ok']): ?>
	<?php echo $this->_tpl_vars['ok']; ?>

	<?php else: ?>
	<?php echo $this->_tpl_vars['warning']; ?>

	<?php endif; ?>	
	<?php echo $this->_tpl_vars['server']['memory']; ?>
 
	
	</td>
</tr>
<tr>
    <td class="libelle">set_time_limit() <?php echo ((is_array($_tmp='admin_allowed')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
    <td>
	
	<?php if ($this->_tpl_vars['server']['set_time_limit_ok']): ?>
	<?php echo $this->_tpl_vars['ok']; ?>

	<?php else: ?>
	<?php echo $this->_tpl_vars['warning']; ?>

	<?php endif; ?>
	</td>
</tr>
<tr>
    <td class="libelle">mail() <?php echo ((is_array($_tmp='admin_allowed')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
    <td>
	
	<?php if ($this->_tpl_vars['server']['mail_ok']): ?>
	<?php echo $this->_tpl_vars['ok']; ?>

	<?php else: ?>
	<?php echo $this->_tpl_vars['warning']; ?>

	<?php endif; ?>
	</td>
</tr>
</table>
  
<?php if ($this->_tpl_vars['display_information']): ?>
	<h3><?php echo ((is_array($_tmp='generique_information')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>
	<table class="infos">
	<tr>
		<td class="libelle"><?php echo ((is_array($_tmp='admin_webserver')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
		<td><?php echo $this->_tpl_vars['server']['server_version']; ?>
</td>
	</tr>
	<tr>
		<td class="libelle"><?php echo ((is_array($_tmp='admin_server_os')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	    <td><?php echo $this->_tpl_vars['server']['server_os']; ?>
</td>
	</tr>
	<tr>
	    <td><?php echo ((is_array($_tmp='admin_server_time')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	    <td><?php echo $this->_tpl_vars['server']['server_time']; ?>
</td>
	</tr>
	<tr>
	    <td>Uptime</td>
	    <td><?php echo $this->_tpl_vars['server']['server_uptime']; ?>
</td>
	</tr>
	</table>	  
  <?php endif; ?>

<?php echo ((is_array($_tmp='admin_legend')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

<ul>
<li><?php echo $this->_tpl_vars['ok']; ?>
 : <?php echo ((is_array($_tmp='generique_ok')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</li>
<li><?php echo $this->_tpl_vars['error']; ?>
 : <?php echo ((is_array($_tmp='admin_error_critical')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</li>
<li><?php echo $this->_tpl_vars['warning']; ?>
 : <?php echo ((is_array($_tmp='admin_warning')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</li>
</ul>

<?php if ($this->_tpl_vars['display_information']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/go_back.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>