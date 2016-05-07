<?php /* Smarty version 2.6.9, created on 2006-11-26 23:56:07
         compiled from install/database_setup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'install/database_setup.tpl', 2, false),)), $this); ?>
<?php if ($this->_tpl_vars['db_connect_ok']): ?>
<h4><?php echo ((is_array($_tmp='install_db_ok')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h4>
<?php else: ?>
	<?php if ($this->_tpl_vars['header_error_message']): ?>
	<h3><?php echo $this->_tpl_vars['header_error_message']; ?>
</h3>
	<?php endif; ?>
	
	<?php $this->assign('form_text', ((is_array($_tmp='install_database_setup_txt')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp))); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/form.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>