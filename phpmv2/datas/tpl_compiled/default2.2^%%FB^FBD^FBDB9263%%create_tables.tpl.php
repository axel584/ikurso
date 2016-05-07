<?php /* Smarty version 2.6.9, created on 2006-11-26 23:58:08
         compiled from install/create_tables.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'install/create_tables.tpl', 1, false),)), $this); ?>
<h1><?php echo ((is_array($_tmp='install_create_tables')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h1>
<?php if ($this->_tpl_vars['offer_clean_install']): ?>
	<p><?php echo ((is_array($_tmp='install_table_exist')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>
	<p><?php echo ((is_array($_tmp='install_table_choice')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>

<p class="next_step">
<a href="index.php?mod=install_create_tables&amp;clean=1"><?php echo ((is_array($_tmp='install_table_erase')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
<br/>
<br/>
<a href="index.php?mod=<?php echo $this->_tpl_vars['next_module_name']; ?>
"><?php echo ((is_array($_tmp='install_table_reuse')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
</p>
<?php elseif ($this->_tpl_vars['tables_success']): ?>
<h4><?php echo ((is_array($_tmp='install_table_success')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h4>
<?php endif; ?>