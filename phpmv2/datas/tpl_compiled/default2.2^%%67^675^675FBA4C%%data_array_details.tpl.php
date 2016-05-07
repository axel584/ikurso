<?php /* Smarty version 2.6.9, created on 2006-11-27 06:53:49
         compiled from common/data_array_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/data_array_details.tpl', 6, false),array('modifier', 'truncate', 'common/data_array_details.tpl', 27, false),array('modifier', 'string_format', 'common/data_array_details.tpl', 34, false),)), $this); ?>
<?php if ($this->_tpl_vars['zoom']): ?>
<table cellpadding="5" align="center" id="detail">
		<tr>
			<th colspan="2">
				<img src="themes/default/images/f6ltr.png" alt="" /> 
				<?php echo ((is_array($_tmp='affluents_details')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 
				(<?php if ($this->_tpl_vars['nb_elements'] > 0):  echo $this->_tpl_vars['offset']+1;  else: ?>0<?php endif; ?> 
				<?php echo ((is_array($_tmp='generique_to')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 
				<?php if ($this->_tpl_vars['offset']+$this->_tpl_vars['data_limit'] > $this->_tpl_vars['nb_elements']): ?> <?php echo $this->_tpl_vars['nb_elements']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['offset']+$this->_tpl_vars['data_limit']; ?>
 <?php endif; ?> 
				<?php echo ((is_array($_tmp='generique_total_on')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 
				<?php echo $this->_tpl_vars['nb_elements']; ?>
)
			</th>
		</tr>
<?php $_from = $this->_tpl_vars['zoom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['boucle'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['boucle']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['raw']):
        $this->_foreach['boucle']['iteration']++;
?>
	<tr>
		<td class="data">
			<?php if ($this->_tpl_vars['raw']['url']): ?>
			<a href="<?php echo $this->_tpl_vars['raw']['url']; ?>
" target="_blank"><?php endif; ?>
		  
          <?php if ($this->_tpl_vars['raw']['img']): ?>
		    		<img src="<?php echo $this->_tpl_vars['path'][$this->_tpl_vars['id']]; ?>
/<?php echo $this->_tpl_vars['raw']['img']; ?>
">
		    		<?php endif; ?>
		 <?php if ($this->_tpl_vars['id'] == 'refererssearchenginesdetails'): ?> <?php $this->assign('limit', 40); ?> 
		 <?php else:  $this->assign('limit', 55); ?>
		 <?php endif; ?>
		 
		 <?php echo ((is_array($_tmp=$this->_tpl_vars['raw']['data'])) ? $this->_run_mod_handler('truncate', true, $_tmp, $this->_tpl_vars['limit'], "...", true) : smarty_modifier_truncate($_tmp, $this->_tpl_vars['limit'], "...", true)); ?>

		
		<?php if ($this->_tpl_vars['raw']['url']): ?>
		</a>
		<?php endif; ?>

		</td>
		<td class="nb"><?php echo $this->_tpl_vars['raw']['sum']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['raw']['percent'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>
 %)</td>
	</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'common/page_index.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php else:  echo ((is_array($_tmp='generique_inconnu')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

<?php endif; ?>