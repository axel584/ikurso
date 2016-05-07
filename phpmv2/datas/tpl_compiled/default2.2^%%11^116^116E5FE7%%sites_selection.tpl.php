<?php /* Smarty version 2.6.9, created on 2006-11-27 00:04:43
         compiled from common/sites_selection.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/sites_selection.tpl', 6, false),)), $this); ?>
<!-- sites selection -->
<div id="sites">
<form action="<?php echo $this->_tpl_vars['url_site']; ?>
" method="post">
<p>
	<select name="site" onchange="form.submit()" dir="<?php echo $this->_tpl_vars['dir']; ?>
">
	<option value ="-1" <?php if ($this->_tpl_vars['site_selected'] == -1): ?> selected="selected"<?php endif; ?>> <?php echo ((is_array($_tmp='menu_bilansites')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 </option>
		<optgroup label="Sites">
		   <?php $_from = $this->_tpl_vars['sites_view_available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['info']):
?>
		   		<option label="<?php echo $this->_tpl_vars['info']; ?>
" value="<?php echo $this->_tpl_vars['id']; ?>
" <?php if ($this->_tpl_vars['site_selected'] == $this->_tpl_vars['id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['info']; ?>
</option>
		   <?php endforeach; endif; unset($_from); ?>
		</optgroup>
	</select>
</p>
</form>
</div>