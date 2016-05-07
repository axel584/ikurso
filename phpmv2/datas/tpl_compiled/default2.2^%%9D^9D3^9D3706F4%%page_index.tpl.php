<?php /* Smarty version 2.6.9, created on 2006-11-27 00:05:17
         compiled from common/page_index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/page_index.tpl', 9, false),)), $this); ?>
<?php if ($this->_tpl_vars['offset'] > 0 || $this->_tpl_vars['nb_elements'] > $this->_tpl_vars['offset'] + $this->_tpl_vars['data_limit']): ?>
<div align="center" id="next">
<?php endif; ?>

<?php if ($this->_tpl_vars['offset'] > 0): ?>
	<a
	onmouseover="pointer(this);"
	onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_offset']; ?>
&offset=<?php echo $this->_tpl_vars['offset']-$this->_tpl_vars['data_limit'];  if ($this->_tpl_vars['continent_asked']): ?>&id_details_continent=<?php echo $this->_tpl_vars['continent_asked'];  endif; ?>', this.parentNode.parentNode.parentNode, true)">
	 < <?php echo ((is_array($_tmp='generique_previous')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

	 </a>
<?php endif; ?>

<?php if ($this->_tpl_vars['offset'] > 0 && $this->_tpl_vars['nb_elements'] > $this->_tpl_vars['offset'] + $this->_tpl_vars['data_limit']): ?> | <?php endif; ?>
<?php if ($this->_tpl_vars['nb_elements'] > $this->_tpl_vars['offset'] + $this->_tpl_vars['data_limit']): ?>
	<a
	onmouseover="pointer(this);"
	onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_offset']; ?>
&offset=<?php echo $this->_tpl_vars['offset']+$this->_tpl_vars['data_limit'];  if ($this->_tpl_vars['continent_asked']): ?>&id_details_continent=<?php echo $this->_tpl_vars['continent_asked'];  endif; ?>', this.parentNode.parentNode.parentNode, true)">
	<?php echo ((is_array($_tmp='generique_next')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 >
	</a>
<?php endif; ?>

<?php if ($this->_tpl_vars['offset'] > 0 || $this->_tpl_vars['nb_elements'] > $this->_tpl_vars['offset'] + $this->_tpl_vars['data_limit']): ?>
</div>
<?php endif; ?>
