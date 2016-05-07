<?php /* Smarty version 2.6.9, created on 2006-11-26 23:55:51
         compiled from install/welcome.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'install/welcome.tpl', 1, false),)), $this); ?>
<h1><?php echo ((is_array($_tmp='install_welcome')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h1>
<p><?php echo ((is_array($_tmp='install_intro')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>
<p><?php echo ((is_array($_tmp='install_intro2')) ? $this->_run_mod_handler('translate', true, $_tmp, 9) : smarty_modifier_translate($_tmp, 9)); ?>
</p>
<p><?php echo ((is_array($_tmp='install_txt2')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>