<?php /* Smarty version 2.6.9, created on 2006-11-27 00:04:53
         compiled from common/viewpages_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/viewpages_details.tpl', 3, false),array('modifier', 'truncate', 'common/viewpages_details.tpl', 28, false),array('modifier', 'time', 'common/viewpages_details.tpl', 59, false),array('modifier', 'print_percent', 'common/viewpages_details.tpl', 66, false),array('modifier', 'string_format', 'common/viewpages_details.tpl', 70, false),array('function', 'counter', 'common/viewpages_details.tpl', 6, false),)), $this); ?>
<?php if ($this->_tpl_vars['level'] == 1): ?>
<script type="text/javascript" src="./themes/default/include/misc.js"></script>
	<link href="./themes/default/css/styles.php?dir=<?php echo ((is_array($_tmp='text_dir')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" rel="stylesheet" type="text/css" />	
<?php endif; ?>
<table class="sub<?php echo $this->_tpl_vars['level']; ?>
" border=0 cellpadding="0" cellspacing="0" width="100%">
<?php echo smarty_function_counter(array('print' => false,'assign' => 'cwtb','start' => 0), $this);?>

<?php $_from = $this->_tpl_vars['zoom'][$this->_tpl_vars['idtouse']]['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['info']):
?>

<?php if (! ( $this->_tpl_vars['info']['type'] == 'file' && $this->_tpl_vars['idtouse'] != 'sum' )): ?>
	<tr  
	onmouseover="colorow(this, <?php if ($this->_tpl_vars['info']['type'] == 'category'): ?>'category'<?php else: ?>'page'<?php endif; ?>,'#eaf5ff');" 
	onmouseout="uncolorow(this);" 
	<?php if ($this->_tpl_vars['info']['type'] == 'category'): ?>
	class="cate" 
	onclick="loadPagesDetails('<?php echo $this->_tpl_vars['url_pages_details']; ?>
&amp;mod=view_pages_details&amp;idtouse=<?php echo $this->_tpl_vars['idtouse']; ?>
&amp;c_id_zoom=<?php echo $this->_tpl_vars['info']['id']; ?>
', this);"
	<?php elseif (sizeof ( $this->_tpl_vars['info']['vars'] ) != 0 && $this->_tpl_vars['idtouse'] == 'sum'): ?>
	onclick="displayVariables( findNextWithType( this.firstChild, 'TD'));"
	
	<?php endif; ?>
	>
	<?php echo smarty_function_counter(array('print' => false,'assign' => 'cwtb'), $this);?>

		<td class="data <?php if ($this->_tpl_vars['cwtb'] == 1): ?>wtb<?php endif; ?>  wrb">
		
			<?php if ($this->_tpl_vars['info']['type'] == 'category'): ?>
				<img src="./themes/default/images/groupa.gif">
			<?php endif; ?>
			
			<?php echo ((is_array($_tmp=$this->_tpl_vars['info']['data'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 65, "...") : smarty_modifier_truncate($_tmp, 65, "...")); ?>

			<?php if ($this->_tpl_vars['info']['type'] == 'file'): ?>
				<img src="./themes/default/images/download.png">
			<?php endif; ?>

	<?php if (sizeof ( $this->_tpl_vars['info']['vars'] ) != 0 && $this->_tpl_vars['idtouse'] == 'sum'): ?>
		
		<span style="cursor: pointer;color:red;font-size: x-small; vertical-align: 50%;" onmouseover="pointer(this)" 
			<?php if ($this->_tpl_vars['info']['type'] == 'category'): ?>onclick="displayVariables( this.parentNode );"<?php endif; ?>>
		+
		</span>
		
		<div style="display: none;">
				<table cellspacing=0 align="right" id="variables">
				<th colspan="2">
				<?php echo ((is_array($_tmp='generique_variables')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

				</th>
				<?php $_from = $this->_tpl_vars['info']['vars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['var_name'] => $this->_tpl_vars['a_var']):
?>
					<tr><td colspan="2" class="header"><?php echo $this->_tpl_vars['var_name']; ?>
</td></tr>
					<?php $_from = $this->_tpl_vars['a_var']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['var_value'] => $this->_tpl_vars['var_count']):
?>
					<tr><td class="data"><?php echo $this->_tpl_vars['var_value']; ?>
</td><td class="nb"> <?php echo $this->_tpl_vars['var_count']; ?>
</td></tr>
					<?php endforeach; endif; unset($_from); ?>
				<?php endforeach; endif; unset($_from); ?>
				</table>
		</div>
	<?php endif; ?>

		</td>

		<td width="15%" class="acenter <?php if ($this->_tpl_vars['idtouse'] == 'sum' || $this->_tpl_vars['idtouse'] == 'exit' || $this->_tpl_vars['idtouse'] == 'sumtime'): ?>wrb<?php endif; ?> <?php if ($this->_tpl_vars['cwtb'] == 1): ?>wtb<?php endif; ?>" id="c<?php echo $this->_tpl_vars['idtouse'];  echo $this->_tpl_vars['info']['id']; ?>
">
		<?php if ($this->_tpl_vars['idtouse'] == 'sumtime'): ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['info'][$this->_tpl_vars['idtouse']])) ? $this->_run_mod_handler('time', true, $_tmp) : smarty_modifier_time($_tmp)); ?>

		<?php else: ?>
			<?php echo $this->_tpl_vars['info'][$this->_tpl_vars['idtouse']]; ?>

		<?php endif; ?>
		</td>
	
	<?php if ($this->_tpl_vars['idtouse'] == 'sum'): ?>
		<td width="15%" class="acenter <?php if ($this->_tpl_vars['cwtb'] == 1): ?>wtb<?php endif; ?> wrb" ><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['percentn1'])) ? $this->_run_mod_handler('print_percent', true, $_tmp) : smarty_modifier_print_percent($_tmp)); ?>
 <small>(<?php echo $this->_tpl_vars['info']['sumn1']; ?>
)</small></td>
		<td width="15%" class="acenter <?php if ($this->_tpl_vars['cwtb'] == 1): ?>wtb<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['percentn2'])) ? $this->_run_mod_handler('print_percent', true, $_tmp) : smarty_modifier_print_percent($_tmp)); ?>
 <small>(<?php echo $this->_tpl_vars['info']['sumn2']; ?>
)</small></td>
	<?php endif; ?>	
	<?php if ($this->_tpl_vars['idtouse'] == 'exit'): ?>
		<td width="15%" class="acenter <?php if ($this->_tpl_vars['cwtb'] == 1): ?>wtb<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['exitrate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 %</td>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['idtouse'] == 'sumtime'): ?>
		<td width="15%" class="acenter <?php if ($this->_tpl_vars['cwtb'] == 1): ?>wtb<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['avgtime'])) ? $this->_run_mod_handler('time', true, $_tmp) : smarty_modifier_time($_tmp)); ?>
</td>
	<?php endif; ?>
	</tr>
<?php endif;  endforeach; endif; unset($_from); ?>
</table>