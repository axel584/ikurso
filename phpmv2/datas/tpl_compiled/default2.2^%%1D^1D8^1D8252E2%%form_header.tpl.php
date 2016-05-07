<?php /* Smarty version 2.6.9, created on 2006-11-26 23:56:07
         compiled from admin/form_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'admin/form_header.tpl', 6, false),)), $this); ?>
<?php if ($this->_tpl_vars['form_data']['header']['headertext']): ?>
	<h1><?php echo $this->_tpl_vars['form_data']['header']['headertext']; ?>
</h1>
<?php endif;  if ($this->_tpl_vars['form_data']['errors']): ?>
	<div id="errorsForm">
	<strong><?php echo ((is_array($_tmp='generique_errors')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
:</strong>
	<ul>
	<?php $_from = $this->_tpl_vars['form_data']['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
	<li><?php echo $this->_tpl_vars['data']; ?>
</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>	
	</div>
<?php endif;  if ($this->_tpl_vars['form_text']): ?>
<p><?php echo $this->_tpl_vars['form_text']; ?>
</p>
<?php endif; ?>