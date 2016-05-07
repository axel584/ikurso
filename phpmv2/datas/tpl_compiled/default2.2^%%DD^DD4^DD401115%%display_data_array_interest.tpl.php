<?php /* Smarty version 2.6.9, created on 2006-11-27 00:05:09
         compiled from common/display_data_array_interest.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count_words', 'common/display_data_array_interest.tpl', 1, false),array('modifier', 'translate', 'common/display_data_array_interest.tpl', 10, false),)), $this); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('count_words', true, $_tmp) : smarty_modifier_count_words($_tmp)) > 25): ?>
<br />
<a id="i<?php echo $this->_tpl_vars['i']; ?>
"></a>

<span
	id="interest" 
	onmouseover="pointer(this)"
	onclick="displayInterest( this, '<?php echo $this->_tpl_vars['i']; ?>
');" 
>
<span>+</span> <?php echo ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

</span>

<div id="interestcontent" style="display:none">
	
	<table align="center">
	<tr><td>
		<?php echo $this->_tpl_vars['data']; ?>

	</td></tr></table>

</div>
<?php endif; ?>