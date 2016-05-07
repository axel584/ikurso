<?php /* Smarty version 2.6.9, created on 2006-11-26 23:55:51
         compiled from install/all_steps.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'install/all_steps.tpl', 4, false),)), $this); ?>
<ul>
<?php $_from = $this->_tpl_vars['steps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['step_name']):
 if ($this->_tpl_vars['step_number'] > $this->_tpl_vars['id']+1): ?>
<li class="pastStep"><?php echo ((is_array($_tmp=$this->_tpl_vars['step_name'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</li>
<?php elseif ($this->_tpl_vars['step_number'] == $this->_tpl_vars['id']+1): ?>
<li class="actualStep"><?php echo ((is_array($_tmp=$this->_tpl_vars['step_name'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</li>
<?php else: ?>
<li class="futureStep"><?php echo ((is_array($_tmp=$this->_tpl_vars['step_name'])) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</li>
<?php endif;  endforeach; endif; unset($_from); ?>
</ul>