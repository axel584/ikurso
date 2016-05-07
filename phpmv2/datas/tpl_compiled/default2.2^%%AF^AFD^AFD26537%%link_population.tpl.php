<?php /* Smarty version 2.6.9, created on 2006-11-27 00:05:09
         compiled from common/link_population.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/link_population.tpl', 7, false),)), $this); ?>
<div id="includepopulationtop">
<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['4'] == "0.0"): ?>
<span
	id="includepopulation"
	onmouseover="pointer(this)"
	onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_a_int_sort']; ?>
&amp;a_<?php echo $this->_tpl_vars['id_sort']; ?>
_sort=<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['0']; ?>
.<?php echo $this->_tpl_vars['i']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['7']; ?>
#i<?php echo $this->_tpl_vars['i']; ?>
', this.parentNode.parentNode.parentNode, true, false)"> 
<?php echo ((is_array($_tmp='generique_lowpop')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

</span>

<?php else: ?>

<span 
	id="includepopulation"
	onmouseover="pointer(this)"
	onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_a_int_sort']; ?>
&amp;a_<?php echo $this->_tpl_vars['id_sort']; ?>
_sort=<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['0']; ?>
.<?php echo $this->_tpl_vars['i']; ?>
.0.0#i<?php echo $this->_tpl_vars['i']; ?>
', this.parentNode.parentNode.parentNode, true, false)" >
<?php echo ((is_array($_tmp='generique_allpop')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

</span>
<?php endif; ?>
</div>