<?php /* Smarty version 2.6.9, created on 2006-11-27 00:04:32
         compiled from common/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/login.tpl', 66, false),array('modifier', 'ucfirst', 'common/login.tpl', 74, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<style>
body {

	background: #FAFCFF;
	color: #000;
	margin: 0;
	padding: 0;
}
#login {
	background: #fff;
	border: 1px solid #a2a2a2;
	margin: 5em auto;
	padding: 1.5em;
	width: 27em;
}

#login input {
	padding: 3px;
}

#login #log, #pwd {
	font-size: 1.7em;
	width: 80%;
}

#login #submit {
	font-size: 1.7em;
}
.submit input, .submit input:focus, .button {
	background: url( themes/default/images/background-submit.png );
	border: 3px double #999;
	border-left-color: #ccc;
	border-top-color: #ccc;
	color: #333;
	padding: 0.25em;
}

.submit input:active, .button:active {
	background: #f4f4f4;
	border: 3px double #ccc;
	border-left-color: #999;
	border-top-color: #999;
}

.submit, .editform th, #postcustomsubmit {
	text-align: right;
}
</style>
<script type="text/javascript">
function focusit() {
	document.getElementById(\'log\').focus();
}
window.onload = focusit;
</script>
'; ?>


<div id="login">

<a href="http://www.phpmyvisites.us"><img src="themes/default/images/logo-phpmyvisites.gif" border="0"></a>

<div class="both"></div>
<?php if ($this->_tpl_vars['error_login'] == 1): ?>
	<h2><?php echo ((is_array($_tmp='login_error')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<?php elseif ($this->_tpl_vars['error_login'] == 2): ?>
	<h2><?php echo ((is_array($_tmp='login_error_nopermission')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/form_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form <?php echo $this->_tpl_vars['form_data']['attributes']; ?>
>
<p style="color:#4472A5" align="center"><?php echo ((is_array($_tmp='login_protected')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['a_link_phpmv']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['a_link_phpmv'])); ?>
</p>
<p><label><?php echo ((is_array($_tmp=((is_array($_tmp='login_login')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)))) ? $this->_run_mod_handler('ucfirst', true, $_tmp) : ucfirst($_tmp)); ?>
<br /><input type="text" name="form_login" id="log" value="" size="20" tabindex="1" /></label></p>
<p><label><?php echo ((is_array($_tmp=((is_array($_tmp='login_password')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)))) ? $this->_run_mod_handler('ucfirst', true, $_tmp) : ucfirst($_tmp)); ?>
<br /> <input type="password" name="form_password" id="pwd" value="" size="20" tabindex="2" /></label></p>
 <br/>
<p class="submit">
<?php echo $this->_tpl_vars['form_data']['hidden']; ?>

<input type="submit" name="submit" id="submit" value="Login &raquo;" tabindex="4" />
</p>
</form>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>