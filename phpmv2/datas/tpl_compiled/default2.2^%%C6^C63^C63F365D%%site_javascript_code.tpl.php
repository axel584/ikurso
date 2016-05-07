<?php /* Smarty version 2.6.9, created on 2006-11-27 00:01:08
         compiled from admin/site_javascript_code.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'admin/site_javascript_code.tpl', 1, false),)), $this); ?>
<h1><?php echo ((is_array($_tmp='install_display_javascript_code')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h1>
<?php echo ((is_array($_tmp='install_js_code_text')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>


<code>
<?php echo $this->_tpl_vars['js_code']; ?>

</code>