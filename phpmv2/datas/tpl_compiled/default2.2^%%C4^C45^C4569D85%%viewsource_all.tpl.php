<?php /* Smarty version 2.6.9, created on 2006-11-27 00:21:07
         compiled from common/viewsource_all.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/viewsource_all.tpl', 1, false),array('function', 'counter', 'common/viewsource_all.tpl', 4, false),)), $this); ?>
<h1><?php echo ((is_array($_tmp='provenance_titre')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h1>

<div id="centrer">
<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<a id="a<?php echo $this->_tpl_vars['a']; ?>
"></a>
<h3><?php echo ((is_array($_tmp='provenance_mappemonde')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>

<!-- Map of the world -->
<?php if ($this->_tpl_vars['map'] == 'world'):  $this->assign('index_lang_detail', 'provenance_continent'); ?>
<map id="worldmap" name="worldmap">
	<?php $_from = $this->_tpl_vars['html_area_location']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['info']):
?>
	<area shape="poly" coords="<?php echo $this->_tpl_vars['info']; ?>
" 
	href="<?php echo $this->_tpl_vars['url_continent']; ?>
&amp;id_details_continent=<?php echo $this->_tpl_vars['id']; ?>
#a<?php echo $this->_tpl_vars['a']; ?>
" 
	alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" 
	title="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" 
	onmouseout="window.status=''; return true"  
	onmouseover="window.status='<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
'; return true" />
	<?php endforeach; endif; unset($_from); ?>
</map>
<?php endif; ?>

<center>
<?php if ($this->_tpl_vars['map'] == 'continent'):  $this->assign('index_lang_detail', 'provenance_pays'); ?>
<a href="<?php echo $this->_tpl_vars['url_continent']; ?>
#a<?php echo $this->_tpl_vars['a']; ?>
">
<?php endif; ?>

<img src="<?php echo $this->_tpl_vars['url_mod']; ?>
&amp;mod=view_world_map<?php if ($this->_tpl_vars['map'] == 'continent'): ?>&amp;id_details_continent=<?php echo $this->_tpl_vars['continent_asked'];  endif; ?>" <?php if ($this->_tpl_vars['map'] == 'world'): ?>usemap="#worldmap"<?php endif; ?> class="generic" />
<br />
<img src="<?php echo $this->_tpl_vars['path_maps']; ?>
/scale.png" class="generic"/>
<br />
</center>
<?php if ($this->_tpl_vars['map'] == 'continent'): ?>
</a>
<?php endif; ?>

<!-- Details Map Of The World (all continent OR all countries in the zoomed continent) -->

<?php $_tplvars_stack = array(); $_tplvars_stack_rank = 0;

  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('data', $this->_tpl_vars['continentcountries']);
$this->assign('id', 'continent');
$this->assign('template', "common/display_data_array.tpl");
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>
</div>
<!-- Coutries -->
<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('headline', 'provenance_recappays');
$this->assign('text', ((is_array($_tmp='provenance_nbpays')) ? $this->_run_mod_handler('translate', true, $_tmp, "<strong>".($this->_tpl_vars['countriesdistinct'])."</strong>") : smarty_modifier_translate($_tmp, "<strong>".($this->_tpl_vars['countriesdistinct'])."</strong>")));
$this->assign('data', $this->_tpl_vars['countries']);
$this->assign('template', "common/display_data_array.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>

<!-- Countries Interest -->
<?php echo smarty_function_counter(array('name' => 'i'), $this);?>

<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('link', 'provenance_interetspays');
$this->assign('data', $this->_tpl_vars['countriesinterest']);
$this->assign('template', "common/display_data_array_interest.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array_interest.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>

<br /><br />
<div class="centrer">
<img src="<?php echo $this->_tpl_vars['url_mod']; ?>
&mod=view_graph&graph_type=3&graph_data=source_countries">
</div>

<!-- Providers -->
<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('headline', 'provenance_fai');
$this->assign('data', $this->_tpl_vars['providers']);
$this->assign('template', "common/display_data_array.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>