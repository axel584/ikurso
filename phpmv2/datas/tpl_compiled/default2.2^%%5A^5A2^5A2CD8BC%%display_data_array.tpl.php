<?php /* Smarty version 2.6.9, created on 2006-11-27 00:05:09
         compiled from common/display_data_array.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/display_data_array.tpl', 4, false),)), $this); ?>

<?php if ($this->_tpl_vars['id'] != 'continent'): ?>
<a id="a<?php echo $this->_tpl_vars['a']; ?>
"></a>
<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['headline'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>
<?php else: ?>
<br /> <br />
<?php endif; ?>

<?php if ($this->_tpl_vars['data'] != 'null'): ?>
	<?php if ($this->_tpl_vars['text']):  echo $this->_tpl_vars['text']; ?>
 <br /><br /> <?php endif; ?>
	<table align="center">
	<tr>
	<td>
	<?php echo $this->_tpl_vars['data']; ?>

	</td>
	</tr>
	</table>
<?php else:  echo ((is_array($_tmp=$this->_tpl_vars['lang_no_visit'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

<?php endif; ?>