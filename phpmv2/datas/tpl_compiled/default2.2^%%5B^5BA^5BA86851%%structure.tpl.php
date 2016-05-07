<?php /* Smarty version 2.6.9, created on 2006-11-27 00:04:43
         compiled from common/structure.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/structure.tpl', 15, false),array('function', 'counter', 'common/structure.tpl', 30, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/logged.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main">
<div id="contenu">
	<div id="logo">
	
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/calendar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/sites_selection.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
		<a href="index.php">
		<img border="0" alt="<?php echo ((is_array($_tmp='logo_description')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" src="themes/default/images/phpmv.png" alt="phpMyVisites" width="485" height="132" />
		</a>
		<div class="both"></div>
	
	</div>
	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/langs_selection.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<?php if ($this->_tpl_vars['mod'] == view): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/period_selection.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	
	<div class="both"></div>
	
	<?php echo smarty_function_counter(array('print' => false,'assign' => 'a','name' => 'a','start' => 0), $this);?>

	<?php echo smarty_function_counter(array('print' => false,'assign' => 'i','name' => 'i','start' => 0), $this);?>

	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['contentpage']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<!--
		We request you retain the link to www.phpmyvisites.net.
		This not only gives respect to the large amount of time given freely by the developers
		but also helps build interest, traffic and use of phpmyvisites.net. 
		If you refuse to include even this then support on our forums may be affected.
	
		phpMyVisites developpers : 2006	
	-->


	<div class="centrer">
		<a href="#" class="movetop">
			<img src="themes/default/images/top.png" alt="<?php echo ((is_array($_tmp='generique_retourhaut')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" /> <?php echo ((is_array($_tmp='generique_retourhaut')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

		</a>
	</div>
	
	<div class="both"></div>
	
	<!-- bottom menu -->
	<ul id="admin">
		<li class="site"><a href="http://www.phpmyvisites.us" link="open source free web analytics" onclick="window.open(this.href);return(false);"><?php echo ((is_array($_tmp='liens_siteofficiel')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li class="install"><a href="<?php echo $this->_tpl_vars['url_mod']; ?>
&amp;mod=admin_index"><?php echo ((is_array($_tmp='liens_admin')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li class="contacts"><a href="index.php?mod=contacts"><?php echo ((is_array($_tmp='liens_contacts')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
	</ul>
	
	<div class="both"></div>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>