<?php /* Smarty version 2.6.9, created on 2006-11-27 00:04:43
         compiled from common/calendar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'common/calendar.tpl', 6, false),array('modifier', 'replace', 'common/calendar.tpl', 24, false),)), $this); ?>
<!-- month selection -->
<div id="calendrier">
<form action="<?php echo $this->_tpl_vars['url_date']; ?>
" method="post">
<p>
	<select onchange="form.submit()" name="date">
	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['months_available'],'selected' => $this->_tpl_vars['month_selected']), $this);?>

	</select>	
</p>
</form>
<!-- /month selection -->

<!-- calendar -->
<table>
	<tr>
		<?php $_from = $this->_tpl_vars['day_first_letter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['day']):
?>
		<th><?php echo $this->_tpl_vars['day']; ?>
</th>
		<?php endforeach; endif; unset($_from); ?>
	</tr>
	<?php $_from = $this->_tpl_vars['calendar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['week']):
?>
	<tr>
		<?php $_from = $this->_tpl_vars['week']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['days']):
?>
			<td>
				<?php if ($this->_tpl_vars['days']['exists'] == 1): ?><a <?php if ($this->_tpl_vars['days']['selected'] == 1): ?> class="selection" <?php endif; ?> href="<?php echo $this->_tpl_vars['url_date']; ?>
&amp;date=<?php echo $this->_tpl_vars['days']['date']; ?>
"><?php endif; ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['days']['day'])) ? $this->_run_mod_handler('replace', true, $_tmp, "-", "<br />") : smarty_modifier_replace($_tmp, "-", "<br />")); ?>

				<?php if ($this->_tpl_vars['days']['exists'] == 1): ?></a><?php endif; ?>
			</td>
		<?php endforeach; endif; unset($_from); ?>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
</div>
<!-- /calendar -->