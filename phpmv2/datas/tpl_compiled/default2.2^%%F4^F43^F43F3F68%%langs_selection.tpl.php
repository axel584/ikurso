<?php /* Smarty version 2.6.9, created on 2006-11-26 23:55:51
         compiled from common/langs_selection.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/langs_selection.tpl', 6, false),array('function', 'html_options', 'common/langs_selection.tpl', 9, false),)), $this); ?>
<!-- lang selection -->
<div id="choixlangue">
<form action="<?php echo $this->_tpl_vars['url_lang']; ?>
" method="post">

<fieldset>
	<legend> &nbsp; <?php echo ((is_array($_tmp='generique_langue')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
  &nbsp; </legend>

		<select name="lang" onchange="this.form.submit()" dir="<?php echo $this->_tpl_vars['dir']; ?>
">
		   <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['langs_available'],'selected' => $this->_tpl_vars['lang_selected']), $this);?>

		</select>
</fieldset>
</form>
</div>