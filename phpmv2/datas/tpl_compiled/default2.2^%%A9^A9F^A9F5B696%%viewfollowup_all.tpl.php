<?php /* Smarty version 2.6.9, created on 2006-11-27 00:06:17
         compiled from common/viewfollowup_all.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/viewfollowup_all.tpl', 1, false),array('function', 'counter', 'common/viewfollowup_all.tpl', 5, false),)), $this); ?>
<h1><?php echo ((is_array($_tmp='suivi_titre')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h1>

<!-- Entry Pages -->
<?php $this->assign('idtouse', 'entry');  echo smarty_function_counter(array('name' => 'a'), $this);?>

<?php echo smarty_function_counter(array('name' => 'i'), $this);?>

<a id="a<?php echo $this->_tpl_vars['a']; ?>
"></a>
<a id="i<?php echo $this->_tpl_vars['i']; ?>
"></a>

<table class="resultats" width="98%">
	<tr>
		<td class="sansbordure" colspan="4">
			<a id="ancre1"></a>
			<h3><?php echo ((is_array($_tmp='suivi_pageentree')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>
		</td>
	</tr>
	
	<tr>
		<th width=55% style="background-color:white"></th>
		<th width=10%>
			<?php echo ((is_array($_tmp='suivi_pageentreehits')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br />
			
			<a href="<?php echo $this->_tpl_vars['url_a_entry_sort']; ?>
&amp;a_entry_sort=entry.asc.<?php echo $this->_tpl_vars['a']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['4']; ?>
#a<?php echo $this->_tpl_vars['a']; ?>
">
				<img src="themes/default/images/sortasc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['0'] == "entry.asc"): ?>r<?php endif; ?>.gif">
			</a> 
			
			<a href="<?php echo $this->_tpl_vars['url_a_entry_sort']; ?>
&amp;a_entry_sort=entry.desc.<?php echo $this->_tpl_vars['a']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['4']; ?>
#a<?php echo $this->_tpl_vars['a']; ?>
">
				<img src="themes/default/images/sortdesc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['0'] == "entry.desc"): ?>r<?php endif; ?>.gif">
			</a>
			
		</th>
	</tr>
	
	<tr>
		<td colspan=4>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/viewpages_details.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
	</tr>
</table>

<div class="both"></div>

<?php $_tplvars_stack = array(); $_tplvars_stack_rank = 0;

  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('id', 'entry');
$this->assign('data', 'entry');
$this->assign('template', "common/link_population_pages.tpl");
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/link_population_pages.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>


<!-- Exit pages -->
<?php $this->assign('idtouse', 'exit');  echo smarty_function_counter(array('name' => 'a'), $this);?>

<?php echo smarty_function_counter(array('name' => 'i'), $this);?>

<a id="a<?php echo $this->_tpl_vars['a']; ?>
"></a>
<a id="i<?php echo $this->_tpl_vars['i']; ?>
"></a>
<table class="resultats" width="98%">
<tbody>
	<td class="sansbordure" colspan="4">
<a id="ancre1"></a><h3><?php echo ((is_array($_tmp='suivi_pagesortie')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>

</td>
</tr>
<tr id="cexitroot">
	<th width=55% style="background-color:white"></th>
	<th width=12%>
	<?php echo ((is_array($_tmp='suivi_pagesortiehits')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br />
	<a href="<?php echo $this->_tpl_vars['url_a_exit_sort']; ?>
&amp;a_exit_sort=exit.asc.<?php echo $this->_tpl_vars['a']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['4']; ?>
#a<?php echo $this->_tpl_vars['a']; ?>
"><img src="themes/default/images/sortasc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['0'] == "exit.asc"): ?>r<?php endif; ?>.gif"></a> 
	<a href="<?php echo $this->_tpl_vars['url_a_exit_sort']; ?>
&amp;a_exit_sort=exit.desc.<?php echo $this->_tpl_vars['a']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['4']; ?>
#a<?php echo $this->_tpl_vars['a']; ?>
"><img src="themes/default/images/sortdesc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['0'] == "exit.desc"): ?>r<?php endif; ?>.gif"></a>
		
	</th>
	<th width=12%>
	<?php echo ((is_array($_tmp='suivi_tauxsortie')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <br />
	<a href="<?php echo $this->_tpl_vars['url_a_exit_sort']; ?>
&amp;a_exit_sort=exitrate.asc.<?php echo $this->_tpl_vars['a']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['4']; ?>
#a<?php echo $this->_tpl_vars['a']; ?>
"><img src="themes/default/images/sortasc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['0'] == "exitrate.asc"): ?>r<?php endif; ?>.gif"></a> 
	<a href="<?php echo $this->_tpl_vars['url_a_exit_sort']; ?>
&amp;a_exit_sort=exitrate.desc.<?php echo $this->_tpl_vars['a']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['4']; ?>
#a<?php echo $this->_tpl_vars['a']; ?>
"><img src="themes/default/images/sortdesc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['0'] == "exitrate.desc"): ?>r<?php endif; ?>.gif"></a>
		
	</th>
</tr>

<tr>
<td colspan=4>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/viewpages_details.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
</table>
<div class="both"></div>


<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('id', 'exit');
$this->assign('data', 'exit');
$this->assign('template', "common/link_population_pages.tpl");
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/link_population_pages.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?> 

<!-- Single pages visit -->
<?php $this->assign('idtouse', 'singlepage');  echo smarty_function_counter(array('name' => 'a'), $this);?>

<?php echo smarty_function_counter(array('name' => 'i'), $this);?>

<a id="a<?php echo $this->_tpl_vars['a']; ?>
"></a>
<a id="i<?php echo $this->_tpl_vars['i']; ?>
"></a>
<table class="resultats" width="98%">
<tbody>
	<td class="sansbordure" colspan="4">
<a id="ancre1"></a><h3><?php echo ((is_array($_tmp='suivi_singlepage')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>

</td>
</tr>
<tr id="csinglepageroot">
	<th width=55% style="background-color:white"></th>
	<th width=10%>
	<?php echo ((is_array($_tmp='generique_hits')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br />
	<a href="<?php echo $this->_tpl_vars['url_a_exit_sort']; ?>
&amp;a_singlepage_sort=exit.asc.<?php echo $this->_tpl_vars['a']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['4']; ?>
#a<?php echo $this->_tpl_vars['a']; ?>
"><img src="themes/default/images/sortasc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['0'] == "singlepage.asc"): ?>r<?php endif; ?>.gif"></a> 
	<a href="<?php echo $this->_tpl_vars['url_a_exit_sort']; ?>
&amp;a_singlepage_sort=exit.desc.<?php echo $this->_tpl_vars['a']; ?>
.<?php echo $this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['4']; ?>
#a<?php echo $this->_tpl_vars['a']; ?>
"><img src="themes/default/images/sortdesc<?php if ($this->_tpl_vars['info_sort'][$this->_tpl_vars['idtouse']]['0'] == "singlepage.desc"): ?>r<?php endif; ?>.gif"></a>
		
	</th>
</tr>

<tr>
<td colspan=4>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/viewpages_details.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
</table>
<div class="both"></div>


<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('id', 'singlepage');
$this->assign('data', 'singlepage');
$this->assign('template', "common/link_population_pages.tpl");
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/link_population_pages.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?> 