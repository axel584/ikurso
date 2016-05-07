<?php /* Smarty version 2.6.9, created on 2006-11-27 00:04:43
         compiled from common/logged.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/logged.tpl', 4, false),)), $this); ?>
<div align="right" style="padding-right:20px">
<small>
	<strong><?php echo $this->_tpl_vars['user_login']; ?>
</strong> (<?php echo $this->_tpl_vars['user_alias']; ?>
) | 
	<?php if ($this->_tpl_vars['user_login'] == 'anonymous'): ?><a href="<?php echo $this->_tpl_vars['url_mod']; ?>
&amp;mod=login"><?php echo ((is_array($_tmp='generique_login')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a><?php else: ?>
	<a href="<?php echo $this->_tpl_vars['url_mod']; ?>
&amp;mod=logout"><u><?php echo ((is_array($_tmp='generique_logout')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</u></a><?php endif; ?>
</small>
</div>