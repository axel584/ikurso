<?php /* Smarty version 2.6.9, created on 2006-11-30 10:49:40
         compiled from admin/go_back.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'admin/go_back.tpl', 3, false),)), $this); ?>
<div class="boutonsAction">
<form enctype="multipart/form-data" name"go_back" method="post" action="./index.php?mod=admin_index">
<input name="back" value=" <?php echo ((is_array($_tmp='admin_retour')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 " type="submit">
</form>
</div>