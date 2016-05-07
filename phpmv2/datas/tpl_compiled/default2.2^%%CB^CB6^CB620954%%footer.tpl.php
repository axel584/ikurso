<?php /* Smarty version 2.6.9, created on 2006-11-26 23:55:51
         compiled from common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/footer.tpl', 28, false),)), $this); ?>

<?php if ($this->_tpl_vars['internal_stats']): ?>
<center>
<!-- phpmyvisites -->
<a href="http://www.phpmyvisites.us/" title="phpMyVisites : logiciel gratuit de mesure d\'audience et de statistiques de sites Internet (licence libre GPL, logiciel en php/MySQL)"
onclick="window.open(this.href);return(false);">
<script type="text/javascript">
<!--
var a_vars = Array();
var pagename='';

var phpmyvisitesSite = 1;
var phpmyvisitesURL = "phpmyvisites.php";
//-->
</script>
<script language=javascript src="phpmyvisites.js"></script>
<noscript>
<p>phpMyVisites : logiciel gratuit de mesure d\'audience et de statistiques de sites Internet (licence libre GPL, logiciel en php/MySQL)
<img src="phpmyvisites.php" alt="phpMyVisites" style="border:0" />
</p>
</noscript>
</a>
<!-- /phpmyvisites --> 
</center>
<?php endif; ?>
<?php if ($this->_tpl_vars['mod'] == view): ?>
<p class="archive">
Version : phpMyVisites <?php echo $this->_tpl_vars['PHPMV_VERSION']; ?>
 | <?php echo ((is_array($_tmp='admin_rss_feed')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

&nbsp;<a title="RSS web statistics" alt="RSS web statistics" href="./index.php?mod=view_rss&amp;rss_hash=<?php echo $this->_tpl_vars['rss_hash']; ?>
"><img src="images/logos/rss.gif" border="0"></a>
<?php endif; ?>
</p>
</body>
</html>