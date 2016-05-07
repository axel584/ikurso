<?php /* Smarty version 2.6.9, created on 2006-11-26 23:55:51
         compiled from install/structure.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'install/structure.tpl', 18, false),)), $this); ?>
<?php $this->assign('styleCommon', 'installCommon');  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="main">
<div id="contenu">
<div id="logo">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/langs_selection.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<img src="themes/default/images/logo-phpmyvisites.gif" alt="phpMyVisites" />
</div>
<div class="both"></div>
<div id="generalInstall">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "install/all_steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<div id="detailInstall">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['contentpage']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  if ($this->_tpl_vars['show_next_step']): ?>
	<p class="next_step">
		<a href="./index.php?mod=<?php echo $this->_tpl_vars['next_module_name']; ?>
"><?php echo ((is_array($_tmp='install_next_step')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a>
	</p>
<?php endif; ?>
</div>
<div class="both"></div>
<h3><?php echo ((is_array($_tmp='install_status')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>
<div id="instalpercent">
<p style="width: <?php echo $this->_tpl_vars['percent_done']; ?>
%;"></p>
</div>
<?php echo ((is_array($_tmp='install_done')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['percent_done']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['percent_done'])); ?>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>