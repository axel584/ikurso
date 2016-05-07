<?php /* Smarty version 2.6.9, created on 2006-11-30 10:58:53
         compiled from common/error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/error.tpl', 6, false),)), $this); ?>
<?php if ($this->_tpl_vars['content_message']): ?>
<h2><?php echo $this->_tpl_vars['content_message']; ?>
</h2>
<?php endif; ?>

<h2 <?php if ($this->_tpl_vars['mod'] == 'rss'): ?> style="padding-left:20px;font-size: 110%;color: red;"<?php endif; ?>>
	<?php echo ((is_array($_tmp='aucunvisiteur_titre')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

</h2>
<?php if ($this->_tpl_vars['error_message_bis']): ?>
	<br/><center><small><i><?php echo $this->_tpl_vars['error_message_bis']; ?>
</i></small></center>
<?php endif; ?>