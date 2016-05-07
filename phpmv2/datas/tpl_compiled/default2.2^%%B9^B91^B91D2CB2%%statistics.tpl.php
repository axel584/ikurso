<?php /* Smarty version 2.6.9, created on 2006-11-27 00:20:49
         compiled from common/statistics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/statistics.tpl', 1, false),array('modifier', 'string_format', 'common/statistics.tpl', 59, false),array('modifier', 'time_visit', 'common/statistics.tpl', 76, false),)), $this); ?>
<h3 <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>style="padding-left:20px;font-size: 110%;color: #00008B;"<?php endif; ?>><?php echo ((is_array($_tmp='visites_statistiques')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>(<strong><?php echo $this->_tpl_vars['site_name']; ?>
</strong>)<?php endif; ?></h3>

<?php $this->assign('style1', "text-align:left; border: 1px solid rgb(226, 227, 228);color: #00008B;padding-top:3px;padding-bottom:3px;background-color: rgb(241, 242, 243);padding:4;");  $this->assign('style2', "text-align:left; border: 1px solid rgb(226, 227, 228);color: #00008B;padding-top:3px;padding-bottom:3px;background-color: white;padding:4;"); ?>
<div class="centrer">

<table <?php if ($this->_tpl_vars['mod'] != 'rss'): ?> class="resultats"<?php endif; ?> cellpadding="5">
<tbody>
<tr>
	<th colspan="2" 
		<?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
			style="text-align:left; border-top: 1px solid rgb(80, 100, 133);border-right: 1px solid rgb(80, 100, 133);font-weight: bold;background-color: rgb(96, 115, 165);color: #ffffff;padding:7px;padding-right:4px;
			padding-left:4px;empty-cells: hide;"
		<?php endif; ?>
		>
			<strong><?php echo ((is_array($_tmp='visites_periodesel')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</strong>
	</th>
</tr>
<tr>
	<td 
	<?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style1']; ?>
"
	<?php else: ?> class="damieralign"
	<?php endif; ?>
	>
		<?php echo ((is_array($_tmp='visites_visites')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

	</td>
	<td 
	<?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style2']; ?>
"
	<?php endif; ?>
	>
		<strong><?php echo $this->_tpl_vars['statistics']['nb_vis']; ?>
</strong>
	</td>
</tr>
<tr>
	<td <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style2']; ?>
"
	<?php else: ?> class="align"<?php endif; ?>><?php echo ((is_array($_tmp='visites_uniques')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td<?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style1']; ?>
"
	<?php else: ?> class="damier"<?php endif; ?>><strong><?php echo $this->_tpl_vars['statistics']['nb_uniq_vis']; ?>
</strong></td>
</tr>

<tr>
	<td <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style1']; ?>
"
	<?php else: ?> class="damieralign"<?php endif; ?>><?php echo ((is_array($_tmp='visites_pagesvues')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style2']; ?>
"
	<?php endif; ?>><strong><?php echo $this->_tpl_vars['statistics']['nb_pag']; ?>
</strong></td>
</tr>
<tr>
	<td <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style2']; ?>
"
	<?php else: ?> class="align"<?php endif; ?>><?php echo ((is_array($_tmp='visites_pagesvisiteurs')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td<?php if ($this->_tpl_vars['mod'] == 'rss'): ?> 
	style="<?php echo $this->_tpl_vars['style1']; ?>
"
	<?php else: ?> class="damier"<?php endif; ?>><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['statistics']['nb_pag_per_vis'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>
</strong></td>
</tr>
<tr>
	<td <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style1']; ?>
"
	<?php else: ?> class="damieralign"<?php endif; ?>><?php echo ((is_array($_tmp='visites_pagesvisitessign')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style2']; ?>
"
	<?php endif; ?>><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['statistics']['nb_pag_per_vis_sig'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>
</strong></td>
</tr>
<tr>

	<td <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style2']; ?>
"
	<?php else: ?> class="align"<?php endif; ?>><?php echo ((is_array($_tmp='visites_tempsmoyen')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td<?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style1']; ?>
"
	<?php else: ?> class="damier"<?php endif; ?>><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['statistics']['time_per_vis'])) ? $this->_run_mod_handler('time_visit', true, $_tmp) : smarty_modifier_time_visit($_tmp)); ?>
</strong></td>
</tr>
<tr>
	<td <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style1']; ?>
"
	<?php else: ?> class="damieralign"<?php endif; ?>><?php echo ((is_array($_tmp='visites_tempsmoyenpv')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	
	<td <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style2']; ?>
"
	<?php endif; ?>><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['statistics']['time_per_pag'])) ? $this->_run_mod_handler('time_visit', true, $_tmp) : smarty_modifier_time_visit($_tmp)); ?>
</strong></td>
</tr>
<tr>
	<td <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style2']; ?>
"
	<?php else: ?> class="align"<?php endif; ?>><?php echo ((is_array($_tmp='visites_tauxvisite')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>

	<td <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style1']; ?>
"
	<?php else: ?> class="damier"<?php endif; ?>><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['statistics']['one_page_rate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")); ?>
%</strong></td>
</tr>
<?php if ($this->_tpl_vars['statistics']['average_visits_per_day']): ?>
<tr>
	<td <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style1']; ?>
"
	<?php else: ?> class="damieralign"<?php endif; ?>><?php echo ((is_array($_tmp='visites_average_visits_per_day')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td <?php if ($this->_tpl_vars['mod'] == 'rss'): ?>
	style="<?php echo $this->_tpl_vars['style2']; ?>
"
	<?php endif; ?>><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['statistics']['average_visits_per_day'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
</strong></td>
</tr>
<?php endif; ?>
</tbody>
</table>

</div>