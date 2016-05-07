<?php /* Smarty version 2.6.9, created on 2006-11-27 00:04:29
         compiled from install/finish.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'install/finish.tpl', 1, false),)), $this); ?>
<h4><?php echo ((is_array($_tmp='install_finish')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h4>
<p><?php echo ((is_array($_tmp='install_congratulation')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>
<p><?php echo ((is_array($_tmp='install_end_text')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>
<p class="next_step">
<a href="index.php?mod=index"><?php echo ((is_array($_tmp='install_go_phpmv')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a>
</p>