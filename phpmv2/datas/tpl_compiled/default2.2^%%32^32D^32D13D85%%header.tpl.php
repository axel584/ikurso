<?php /* Smarty version 2.6.9, created on 2006-11-26 23:55:51
         compiled from common/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/header.tpl', 2, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='<?php echo ((is_array($_tmp='lang_iso')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
'>
<head>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo ((is_array($_tmp='charset')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" />
	<meta name="description" content="<?php echo ((is_array($_tmp='head_description')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" />
	<meta name="keywords" content="<?php echo ((is_array($_tmp='head_keywords')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" />
	<meta name="robots" content="all" />
	<meta name="revisit-after" content="7 day" />
	<meta name="author" content="phpMyVisites Team" />
	<meta http-equiv="reply-to" content="http://www.phpmyvisites.us/" />
	<meta name="copyright" content="phpMyVisites" />
	<meta name="version" content="<?php echo $this->_tpl_vars['PHPMV_VERSION']; ?>
" />
	<title><?php echo ((is_array($_tmp='head_titre')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</title>
	<link href="./themes/default/css/<?php if ($this->_tpl_vars['styleCommon']):  echo $this->_tpl_vars['styleCommon'];  else: ?>interfaceCommon<?php endif; ?>.css" rel="stylesheet" type="text/css" />	
	<link href="./themes/default/css/styles.php?dir=<?php echo ((is_array($_tmp='text_dir')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" rel="stylesheet" type="text/css" />	
	<script type="text/javascript" src="./themes/default/include/menu.js"></script>
	<script type="text/javascript" src="./themes/default/include/misc.js"></script>
	<link rel="alternate" type="application/rss+xml" title="RSS" href="./index.php?mod=view_rss&amp;rss_hash=<?php echo $this->_tpl_vars['rss_hash']; ?>
" />
	<script type="text/javascript">var js_direction="<?php echo ((is_array($_tmp='text_dir')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
";</script>
</head>
<body>
<!-- http://www.phpmyvisites.net/ -->	
<?php if ($this->_tpl_vars['header_error_message']): ?>
	<h2>
	<?php echo $this->_tpl_vars['header_error_message']; ?>
	
	<?php if ($this->_tpl_vars['mod'] == 'admin'): ?> <?php echo ((is_array($_tmp='admin_db_log')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <?php endif; ?>
	</h2>
<?php endif; ?>