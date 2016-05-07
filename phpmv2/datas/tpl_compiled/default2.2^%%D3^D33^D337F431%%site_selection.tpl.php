<?php /* Smarty version 2.6.9, created on 2006-11-30 10:48:44
         compiled from admin/site_selection.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'admin/site_selection.tpl', 1, false),)), $this); ?>
<h1><?php echo ((is_array($_tmp='admin_select_site_title')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h1>
<div id="adminSiteSelection">
<p><?php echo ((is_array($_tmp='admin_sitesenregistres')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>
<ul>
<?php $_from = $this->_tpl_vars['sites_admin_available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['info']):
?>
	 <li><a href="<?php echo $this->_tpl_vars['url_current']; ?>
&amp;adminsite=<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['id']; ?>
 - <?php echo $this->_tpl_vars['info']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>