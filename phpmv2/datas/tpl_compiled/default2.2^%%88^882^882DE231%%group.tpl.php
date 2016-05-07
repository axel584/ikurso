<?php /* Smarty version 2.6.9, created on 2007-01-01 19:42:06
         compiled from admin/group.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'admin/group.tpl', 3, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/form_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<p class="texte"><?php echo ((is_array($_tmp='admin_group_stitle')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>
<form <?php echo $this->_tpl_vars['form_data']['attributes']; ?>
>

	<!-- Output hidden fields -->
	<?php echo $this->_tpl_vars['form_data']['hidden']; ?>

	
	<!-- Display the fields -->
<!-- OLD Version
	<table align="center"> 
	<?php $_from = $this->_tpl_vars['list_elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['title'] => $this->_tpl_vars['data']):
?>

		<tr><td colspan="2">
			<table border=1 cellpadding=9 width=600>
			<tr><td colspan="2"><?php echo $this->_tpl_vars['title']; ?>
</td></tr>

		<?php if (sizeof ( $this->_tpl_vars['data'] ) < 2): ?>
			<tr><td colspan="2"><font color="red"><?php echo ((is_array($_tmp='admin_no_user_group')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</font></td></tr>
		<?php else: ?>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldname']):
?>
				
				<tr>
					<td>&nbsp;<?php echo $this->_tpl_vars['form_data'][$this->_tpl_vars['fieldname']]['label']; ?>
</td>
					<td><?php echo $this->_tpl_vars['form_data'][$this->_tpl_vars['fieldname']]['html']; ?>
</td>
				</tr>
				
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
			
			</table>
		</td></tr>
		<tr><td><br/></td></tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
	
<div class="boutonsAction">
<?php echo $this->_tpl_vars['form_data']['submit']['html']; ?>


<?php if ($this->_tpl_vars['mod'] == 'admin'):  echo $this->_tpl_vars['form_data']['back']['html']; ?>

<?php endif; ?>
</div>
-->
	<input type="hidden" name="nb_users_available" value="<?php echo $this->_tpl_vars['nb_users_available']; ?>
" />
	<input type="hidden" name="id_site" value="<?php echo $this->_tpl_vars['id_site']; ?>
" />
	
	<table align="center" border=1 cellpadding=9> 
	<tr>
		<?php if (((is_array($_tmp='text_dir')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)) == 'ltr'): ?>
		<td>&nbsp;</td>
		<?php endif; ?>
		<?php $_from = $this->_tpl_vars['groups_available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['name']):
?>
		<td align="center"><?php echo $this->_tpl_vars['name']; ?>
</td>
		<?php endforeach; endif; unset($_from); ?>
		<?php if (((is_array($_tmp='text_dir')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)) == 'rtl'): ?>
		<td>&nbsp;</td>
		<?php endif; ?>
	</tr>
	<?php $_from = $this->_tpl_vars['users_available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['allUser'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['allUser']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['login'] => $this->_tpl_vars['info']):
        $this->_foreach['allUser']['iteration']++;
?>
	<?php $this->assign('numUser', $this->_foreach['allUser']['iteration']); ?>
	<tr>
		<?php if (((is_array($_tmp='text_dir')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)) == 'ltr'): ?>
		<td width="450"><?php echo $this->_tpl_vars['info']['0']; ?>
<input type="hidden" name="name<?php echo $this->_tpl_vars['numUser']; ?>
" value="<?php echo $this->_tpl_vars['login']; ?>
" /></td>
		<?php endif; ?>
		<?php $_from = $this->_tpl_vars['groups_available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['name']):
?>
		<td width="50" align="center"><input type="radio" name="right<?php echo $this->_tpl_vars['numUser']; ?>
" value="<?php echo $this->_tpl_vars['id']; ?>
" <?php if ($this->_tpl_vars['info']['1'] == $this->_tpl_vars['id']): ?> checked <?php endif; ?>/></td>
		<?php endforeach; endif; unset($_from); ?>
		<?php if (((is_array($_tmp='text_dir')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)) == 'rtl'): ?>
		<td width="450"><?php echo $this->_tpl_vars['info']['0']; ?>
<input type="hidden" name="name<?php echo $this->_tpl_vars['numUser']; ?>
" value="<?php echo $this->_tpl_vars['login']; ?>
" /></td>
		<?php endif; ?>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	</table><br>
	
<div class="boutonsAction">
<?php echo $this->_tpl_vars['form_data']['submit']['html']; ?>


<?php if ($this->_tpl_vars['mod'] == 'admin'):  echo $this->_tpl_vars['form_data']['back']['html']; ?>

<?php endif; ?>
</div>
<!-- Help of group -->
<br>
<?php if (((is_array($_tmp='text_dir')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)) == 'rtl'): ?>
<table border="0">
	<tr valign="top"><td>(<?php echo ((is_array($_tmp='admin_group_admin_n')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
) <b><?php echo $this->_tpl_vars['groups_available']['1']; ?>
</b></td><td nowrap>&nbsp;<u><?php echo ((is_array($_tmp='generique_name')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</u></td></tr>
	<tr valign="top"><td><?php echo ((is_array($_tmp='admin_group_admin_d')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br>&nbsp;</td><td nowrap>&nbsp;<u><?php echo ((is_array($_tmp='generique_description')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</u></td></tr>
	<tr valign="top"><td>(<?php echo ((is_array($_tmp='admin_group_view_n')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
) <b><?php echo $this->_tpl_vars['groups_available']['2']; ?>
</b></td><td nowrap>&nbsp;<u><?php echo ((is_array($_tmp='generique_name')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</u></td></tr>
	<tr valign="top"><td><?php echo ((is_array($_tmp='admin_group_view_d')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br>&nbsp;</td><td nowrap>&nbsp;<u><?php echo ((is_array($_tmp='generique_description')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</u></td></tr>
	<tr valign="top"><td>(<?php echo ((is_array($_tmp='admin_group_noperm_n')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
) <b><?php echo $this->_tpl_vars['groups_available']['no_permission']; ?>
</b></td>&nbsp;<td nowrap><u><?php echo ((is_array($_tmp='generique_name')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</u></td></tr>
	<tr valign="top"><td><?php echo ((is_array($_tmp='admin_group_noperm_d')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br>&nbsp;</td><td nowrap>&nbsp;<u><?php echo ((is_array($_tmp='generique_description')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</u></td></tr>
</table>
<?php else: ?>
<table border="0">
	<tr valign="top"><td nowrap><u><?php echo ((is_array($_tmp='generique_name')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</u>&nbsp;</td><td><b><?php echo $this->_tpl_vars['groups_available']['1']; ?>
</b> (<?php echo ((is_array($_tmp='admin_group_admin_n')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
)</td></tr>
	<tr valign="top"><td nowrap><u><?php echo ((is_array($_tmp='generique_description')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</u>&nbsp;</td><td><?php echo ((is_array($_tmp='admin_group_admin_d')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br>&nbsp;</td></tr>
	<tr valign="top"><td nowrap><u><?php echo ((is_array($_tmp='generique_name')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</u>&nbsp;</td><td><b><?php echo $this->_tpl_vars['groups_available']['2']; ?>
</b> (<?php echo ((is_array($_tmp='admin_group_view_n')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
)</td></tr>
	<tr valign="top"><td nowrap><u><?php echo ((is_array($_tmp='generique_description')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</u>&nbsp;</td><td><?php echo ((is_array($_tmp='admin_group_view_d')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br>&nbsp;</td></tr>
	<tr valign="top"><td nowrap><u><?php echo ((is_array($_tmp='generique_name')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</u>&nbsp;</td><td><b><?php echo $this->_tpl_vars['groups_available']['no_permission']; ?>
</b> (<?php echo ((is_array($_tmp='admin_group_noperm_n')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
)</td></tr>
	<tr valign="top"><td nowrap><u><?php echo ((is_array($_tmp='generique_description')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</u>&nbsp;</td><td><?php echo ((is_array($_tmp='admin_group_noperm_d')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br>&nbsp;</td></tr>
</table>
<?php endif; ?>
</form>