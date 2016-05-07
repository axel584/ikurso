<?php /* Smarty version 2.6.9, created on 2006-11-27 00:05:09
         compiled from common/data_array_interest.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/data_array_interest.tpl', 7, false),array('modifier', 'truncate', 'common/data_array_interest.tpl', 61, false),array('modifier', 'string_format', 'common/data_array_interest.tpl', 66, false),)), $this); ?>
<table class="interest" cellpadding="5" align="center">
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['boucle'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['boucle']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['raw']):
        $this->_foreach['boucle']['iteration']++;
?>
	<?php if ($this->_foreach['boucle']['iteration'] == 1): ?>
	<tr>
		<th width="<?php if ($this->_tpl_vars['id'] == refererskeywords): ?>40<?php else: ?>34<?php endif; ?>%"><?php echo $this->_tpl_vars['headline']; ?>
</th>
		<th>
			<?php echo ((is_array($_tmp='generique_nombre')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <br />
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_a_int_sort']; ?>
&amp;a_<?php echo $this->_tpl_vars['id_sort']; ?>
_sort=sum.asc.<?php echo $this->_tpl_vars['i']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['4']; ?>
#i<?php echo $this->_tpl_vars['i']; ?>
', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)">
				<img src="themes/default/images/sortasc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['0'] == "sum.asc"): ?>r<?php endif; ?>.gif">
			</a> 
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_a_int_sort']; ?>
&amp;a_<?php echo $this->_tpl_vars['id_sort']; ?>
_sort=sum.desc.<?php echo $this->_tpl_vars['i']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['4']; ?>
#i<?php echo $this->_tpl_vars['i']; ?>
', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortdesc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['0'] == "sum.desc"): ?>r<?php endif; ?>.gif"></a>
		</th>
		<th>
			<?php echo ((is_array($_tmp='visites_pagesvisites')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br />
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_a_int_sort']; ?>
&amp;a_<?php echo $this->_tpl_vars['id_sort']; ?>
_sort=page_per_visit.asc.<?php echo $this->_tpl_vars['i']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['4']; ?>
#i<?php echo $this->_tpl_vars['i']; ?>
', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortasc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['0'] == "page_per_visit.asc"): ?>r<?php endif; ?>.gif"></a> 
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_a_int_sort']; ?>
&amp;a_<?php echo $this->_tpl_vars['id_sort']; ?>
_sort=page_per_visit.desc.<?php echo $this->_tpl_vars['i']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['4']; ?>
#i<?php echo $this->_tpl_vars['i']; ?>
', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortdesc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['0'] == "page_per_visit.desc"): ?>r<?php endif; ?>.gif"></a>
		</th>
		<th>
			<?php echo ((is_array($_tmp='visites_pagesvisitessign')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br />
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_a_int_sort']; ?>
&amp;a_<?php echo $this->_tpl_vars['id_sort']; ?>
_sort=page_per_visit_significant.asc.<?php echo $this->_tpl_vars['i']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['4']; ?>
#i<?php echo $this->_tpl_vars['i']; ?>
', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortasc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['0'] == "page_per_visit_significant.asc"): ?>r<?php endif; ?>.gif"></a> 
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_a_int_sort']; ?>
&amp;a_<?php echo $this->_tpl_vars['id_sort']; ?>
_sort=page_per_visit_significant.desc.<?php echo $this->_tpl_vars['i']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['4']; ?>
#i<?php echo $this->_tpl_vars['i']; ?>
', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortdesc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['0'] == "page_per_visit_significant.desc"): ?>r<?php endif; ?>.gif"></a>
		</th>
		<th>
			<?php echo ((is_array($_tmp='visites_tauxvisite')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br />
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_a_int_sort']; ?>
&amp;a_<?php echo $this->_tpl_vars['id_sort']; ?>
_sort=one_page_rate.asc.<?php echo $this->_tpl_vars['i']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['4']; ?>
#i<?php echo $this->_tpl_vars['i']; ?>
', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortasc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['0'] == "one_page_rate.asc"): ?>r<?php endif; ?>.gif"></a> 
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_a_int_sort']; ?>
&amp;a_<?php echo $this->_tpl_vars['id_sort']; ?>
_sort=one_page_rate.desc.<?php echo $this->_tpl_vars['i']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['4']; ?>
#i<?php echo $this->_tpl_vars['i']; ?>
', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortdesc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['0'] == "one_page_rate.desc"): ?>r<?php endif; ?>.gif"></a>
		</th>
		<th>
			<?php echo ((is_array($_tmp='visites_tempsmoyen')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br />
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_a_int_sort']; ?>
&amp;a_<?php echo $this->_tpl_vars['id_sort']; ?>
_sort=time_per_visit.asc.<?php echo $this->_tpl_vars['i']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['4']; ?>
#i<?php echo $this->_tpl_vars['i']; ?>
', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortasc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['0'] == "time_per_visit.asc"): ?>r<?php endif; ?>.gif"></a> 
			<a 
				onmouseover="pointer(this)"
				onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_a_int_sort']; ?>
&amp;a_<?php echo $this->_tpl_vars['id_sort']; ?>
_sort=time_per_visit.desc.<?php echo $this->_tpl_vars['i']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['4']; ?>
#i<?php echo $this->_tpl_vars['i']; ?>
', this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode, true)"><img src="themes/default/images/sortdesc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['0'] == "time_per_visit.desc"): ?>r<?php endif; ?>.gif"></a>
		</th>
	</tr>
	<?php endif; ?>
	<tr>
		<td class="<?php if (!(1 & $this->_foreach['boucle']['iteration'])): ?>damier<?php endif; ?>align" nowrap>
			<?php if ($this->_tpl_vars['raw']['img']): ?><img src="<?php echo $this->_tpl_vars['path'][$this->_tpl_vars['id']]; ?>
/<?php echo $this->_tpl_vars['raw']['img']; ?>
"> <?php endif; ?>
			<strong>
			<?php if ($this->_tpl_vars['id'] == 'sites'): ?><a href="http://<?php echo $this->_tpl_vars['raw']['data']; ?>
" target="_blank">
			<?php elseif ($this->_tpl_vars['raw']['url']): ?><a href="<?php echo $this->_tpl_vars['raw']['url']; ?>
" target="_blank"><?php endif; ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['raw']['data'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, '...') : smarty_modifier_truncate($_tmp, 50, '...')); ?>

			<?php if ($this->_tpl_vars['id'] == 'sites'): ?></a><?php endif; ?>
			</strong>
		</td>
		<td class="<?php if (!(1 & $this->_foreach['boucle']['iteration'])): ?>damier<?php endif; ?>"><?php echo $this->_tpl_vars['raw']['sum']; ?>
</td>
		<td class="<?php if (!(1 & $this->_foreach['boucle']['iteration'])): ?>damier<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['raw']['page_per_visit'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>
</td>
		<td class="<?php if (!(1 & $this->_foreach['boucle']['iteration'])): ?>damier<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['raw']['page_per_visit_significant'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>
</td>
		<td class="<?php if (!(1 & $this->_foreach['boucle']['iteration'])): ?>damier<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['raw']['one_page_rate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")); ?>
 %</td>
		<td class="<?php if (!(1 & $this->_foreach['boucle']['iteration'])): ?>damier<?php endif; ?>"><?php echo $this->_tpl_vars['raw']['time_per_visit']; ?>
</td>
	</tr>	
<?php endforeach; endif; unset($_from); ?>
</table>


<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['id_sort']]['4'] == "0.0"):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/page_index.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<?php $_tplvars_stack = array(); $_tplvars_stack_rank = 0;

  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('id', $this->_tpl_vars['id']);
$this->assign('template', "common/link_population.tpl");
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/link_population.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>