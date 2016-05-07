{include file="common/header.tpl"}

{literal}
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
	document.getElementById('log').focus();
}
window.onload = focusit;
</script>
{/literal}

<div id="login">

<a href="http://www.phpmyvisites.us"><img src="themes/default/images/logo-phpmyvisites.gif" border="0"></a>

<div class="both"></div>
{if $error_login==1}
	<h2>{'login_error'|translate}</h2>
{elseif $error_login==2}
	<h2>{'login_error_nopermission'|translate}</h2>
{/if}

{include file=admin/form_header.tpl}
<form {$form_data.attributes}>
<p style="color:#4472A5" align="center">{'login_protected'|translate:$a_link_phpmv}</p>
<p><label>{'login_login'|translate|ucfirst}<br /><input type="text" name="form_login" id="log" value="" size="20" tabindex="1" /></label></p>
<p><label>{'login_password'|translate|ucfirst}<br /> <input type="password" name="form_password" id="pwd" value="" size="20" tabindex="2" /></label></p>
 <br/>
<p class="submit">
{$form_data.hidden}
<input type="submit" name="submit" id="submit" value="Login &raquo;" tabindex="4" />
</p>
</form>
</div>

{include file="common/footer.tpl"}
