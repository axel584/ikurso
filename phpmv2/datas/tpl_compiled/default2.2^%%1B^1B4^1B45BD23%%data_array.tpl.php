<?php /* Smarty version 2.6.9, created on 2006-11-27 00:05:08
         compiled from common/data_array.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/data_array.tpl', 5, false),array('modifier', 'truncate', 'common/data_array.tpl', 33, false),array('modifier', 'string_format', 'common/data_array.tpl', 42, false),array('function', 'cycle', 'common/data_array.tpl', 20, false),)), $this); ?>
<?php if ($this->_tpl_vars['data']): ?>
<table class="resultats" width="<?php if ($this->_tpl_vars['id'] == 'refererskeywords'): ?>600<?php elseif ($this->_tpl_vars['id'] == 'settingsconfig' || $this->_tpl_vars['id'] == 'refererssites'): ?>500<?php else: ?>400<?php endif; ?>px" cellpadding="0" align="center">
	<tr>
		<th><?php echo $this->_tpl_vars['headline']; ?>
</th>
		<th width="120px"><?php echo ((is_array($_tmp='generique_nombre')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</th>
	</tr>

<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['boucle'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['boucle']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['raw']):
        $this->_foreach['boucle']['iteration']++;
?>
	<tr
	<?php if ($this->_tpl_vars['raw']['id']): ?>
	onmouseover="colorow(this, true);" 
	onmouseout="uncolorow(this);" 
 	onclick="loadReferersDetails('<?php echo $this->_tpl_vars['url_mod']; ?>
&amp;mod=view_data_array&amp;method_name=<?php echo $this->_tpl_vars['id']; ?>
details&amp;id_details=<?php echo $this->_tpl_vars['raw']['id']; ?>
', this);"
  	<?php elseif ($this->_tpl_vars['raw']['continent']): ?>
	onmouseover="colorow(this, true);" 
	onmouseout="uncolorow(this);" 
 	onclick="loadUrl('<?php echo $this->_tpl_vars['url_mod']; ?>
&amp;mod=view_source&amp;id_details_continent=<?php echo $this->_tpl_vars['raw']['continent']; ?>
#a1')"
  	<?php endif; ?>
	>
	<?php echo smarty_function_cycle(array('values' => ",damier",'assign' => 'style'), $this);?>

		<td class="<?php echo $this->_tpl_vars['style']; ?>
align" >
		<strong>
          <?php if ($this->_tpl_vars['raw']['img']): ?>
		    		<img src="<?php echo $this->_tpl_vars['path'][$this->_tpl_vars['id']]; ?>
/<?php echo $this->_tpl_vars['raw']['img']; ?>
">
		  <?php elseif ($this->_tpl_vars['raw']['id']): ?>
          	<img src="<?php echo $this->_tpl_vars['path']['theme']; ?>
/f5a.png">
		  <?php elseif ($this->_tpl_vars['raw']['url']): ?>
		  	<a href="<?php echo $this->_tpl_vars['raw']['url']; ?>
" target="_blank"> 
		  <?php elseif ($this->_tpl_vars['id'] == 'world'): ?>
		  	<a href="<?php echo $this->_tpl_vars['url']; ?>
&amp;continent_zoom=<?php echo $this->_tpl_vars['raw']['continent']; ?>
#a<?php echo $this->_tpl_vars['a']; ?>
">
		  <?php endif; ?>
		  &nbsp;
		  <?php echo ((is_array($_tmp=$this->_tpl_vars['raw']['data'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, '...') : smarty_modifier_truncate($_tmp, 60, '...')); ?>

		  
		  <?php if ($this->_tpl_vars['raw']['url'] || $this->_tpl_vars['id'] == 'world'): ?></a>
		  <?php endif; ?>
		
		</strong>
		</td>
		
		<td class="<?php echo $this->_tpl_vars['style']; ?>
">
			<?php echo $this->_tpl_vars['raw']['sum']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['raw']['percent'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>
 %)
		</td>
	
	</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/page_index.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php else: ?>null<?php endif; ?>