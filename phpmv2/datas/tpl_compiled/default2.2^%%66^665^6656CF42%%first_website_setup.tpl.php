<?php /* Smarty version 2.6.9, created on 2006-11-26 23:59:10
         compiled from install/first_website_setup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'install/first_website_setup.tpl', 3, false),)), $this); ?>
<script type="text/javascript" src="./themes/default/include/popup.js"></script>
<?php if ($this->_tpl_vars['show_next_step']): ?>
<h4><?php echo ((is_array($_tmp='install_site_success')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h4>
<?php else:  $this->assign('form_text', ((is_array($_tmp='install_site_info')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)));  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/form.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  echo $this->_tpl_vars['img_phpmv']; ?>