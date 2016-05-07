<?php /* Smarty version 2.6.9, created on 2006-11-27 00:05:09
         compiled from common/viewreferers_all.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/viewreferers_all.tpl', 1, false),array('function', 'counter', 'common/viewreferers_all.tpl', 4, false),)), $this); ?>
<h1><?php echo ((is_array($_tmp='affluents_titre')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h1>

<div class="centrer">
<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<a id="a<?php echo $this->_tpl_vars['a']; ?>
"></a>
<h3><?php echo ((is_array($_tmp='affluents_recapimg')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>
<img src="<?php echo $this->_tpl_vars['url_mod']; ?>
&mod=view_graph&graph_type=4&graph_data=referers_summary">
</div>

<!-- Referer Type Interest -->
<?php echo smarty_function_counter(array('name' => 'i'), $this);?>

<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('link', 'affluents_interetstype');
$this->assign('data', $this->_tpl_vars['typeinterest']);
$this->assign('template', "common/display_data_array_interest.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array_interest.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>

<!-- Search Engines -->
<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('headline', 'affluents_moteurs');
$this->assign('lang_no_visit', 'affluents_aucunmoteur');
$this->assign('text', ((is_array($_tmp='affluents_nbparmoteur')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['numbers']['searchengines']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['numbers']['searchengines'])));
$this->assign('data', $this->_tpl_vars['searchengines']);
$this->assign('template', "common/display_data_array.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>

<!-- Search engines Interest -->
<?php echo smarty_function_counter(array('name' => 'i'), $this);?>

<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('link', 'affluents_interetsmoteurs');
$this->assign('data', $this->_tpl_vars['searchenginesinterest']);
$this->assign('template', "common/display_data_array_interest.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array_interest.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>


<!-- Keywords -->
<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('headline', 'affluents_motscles');
$this->assign('lang_no_visit', 'affluents_aucunmoteur');
$this->assign('text', ((is_array($_tmp='affluents_nbmotscles')) ? $this->_run_mod_handler('translate', true, $_tmp, "<strong>".($this->_tpl_vars['numbers']['keywords'])."</strong>") : smarty_modifier_translate($_tmp, "<strong>".($this->_tpl_vars['numbers']['keywords'])."</strong>")));
$this->assign('data', $this->_tpl_vars['keywords']);
$this->assign('template', "common/display_data_array.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>

<!-- Keywords Interest -->
<?php echo smarty_function_counter(array('name' => 'i'), $this);?>

<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('link', 'affluents_interetsmotscles');
$this->assign('data', $this->_tpl_vars['keywordsinterest']);
$this->assign('template', "common/display_data_array_interest.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array_interest.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>

<!-- Sites -->
<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<?php $this->assign('strsites', ((is_array($_tmp='affluents_nbautressites')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['numbers']['sites']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['numbers']['sites']))); ?>
<?php $this->assign('strdistinctsites', ((is_array($_tmp='affluents_nbautressitesdiff')) ? $this->_run_mod_handler('translate', true, $_tmp, "<strong>".($this->_tpl_vars['numbers']['distinctsites'])."</strong>") : smarty_modifier_translate($_tmp, "<strong>".($this->_tpl_vars['numbers']['distinctsites'])."</strong>"))); ?>
<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('headline', 'affluents_sitesinternet');
$this->assign('lang_no_visit', 'affluents_aucunautresite');
$this->assign('text', ($this->_tpl_vars['strsites'])." <br/><br/>".($this->_tpl_vars['strdistinctsites']));
$this->assign('data', $this->_tpl_vars['sites']);
$this->assign('template', "common/display_data_array.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>

<!-- Sites Interest -->
<?php echo smarty_function_counter(array('name' => 'i'), $this);?>

<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('link', 'affluents_interetssitesinternet');
$this->assign('data', $this->_tpl_vars['sitesinterest']);
$this->assign('template', "common/display_data_array_interest.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array_interest.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>

<!-- Partners -->
<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('headline', 'affluents_partenaires');
$this->assign('lang_no_visit', 'affluents_aucunpartenaire');
$this->assign('text', ((is_array($_tmp='affluents_nbpartenaires')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['numbers']['partners']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['numbers']['partners'])));
$this->assign('data', $this->_tpl_vars['partners']);
$this->assign('template', "common/display_data_array.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>

<!-- Partners Interest -->
<?php echo smarty_function_counter(array('name' => 'i'), $this);?>

<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('link', 'affluents_interetspartenaires');
$this->assign('data', $this->_tpl_vars['partnersinterest']);
$this->assign('template', "common/display_data_array_interest.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array_interest.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>


<!-- Newsletters -->
<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('headline', 'affluents_newsletters');
$this->assign('lang_no_visit', 'affluents_aucunnewsletter');
$this->assign('text', ((is_array($_tmp='affluents_nbnewsletters')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['numbers']['newsletters']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['numbers']['newsletters'])));
$this->assign('data', $this->_tpl_vars['newsletters']);
$this->assign('template', "common/display_data_array.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>

<!-- Newsletters Interest -->
<?php echo smarty_function_counter(array('name' => 'i'), $this);?>

<?php 
  /*** pmv_data_array ***/  
$_tplvars_stack_rank++;
 $_tplvars_stack[$_tplvars_stack_rank] = $this->_tpl_vars; 
$this->assign('link', 'affluents_interetsnewsletters');
$this->assign('data', $this->_tpl_vars['newslettersinterest']);
$this->assign('template', "common/display_data_array_interest.tpl");
$this->assign('id', 'int');
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/display_data_array_interest.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $this->_tpl_vars = $_tplvars_stack[$_tplvars_stack_rank]; unset($_tplvars_stack[$_tplvars_stack_rank]); $_tplvars_stack--;
 ?>

<!-- Direct -->
<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<a id="a<?php echo $this->_tpl_vars['a']; ?>
"></a>
<h3><?php echo ((is_array($_tmp='affluents_entreedirecte')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>
<?php echo ((is_array($_tmp='affluents_nbentreedirecte')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['numbers']['direct']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['numbers']['direct'])); ?>