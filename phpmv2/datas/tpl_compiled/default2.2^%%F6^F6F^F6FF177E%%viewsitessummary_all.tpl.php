<?php /* Smarty version 2.6.9, created on 2006-11-30 10:48:33
         compiled from common/viewsitessummary_all.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/viewsitessummary_all.tpl', 1, false),array('modifier', 'string_format', 'common/viewsitessummary_all.tpl', 26, false),array('modifier', 'time_visit', 'common/viewsitessummary_all.tpl', 27, false),array('function', 'counter', 'common/viewsitessummary_all.tpl', 3, false),array('function', 'cycle', 'common/viewsitessummary_all.tpl', 22, false),)), $this); ?>
<h1><?php echo ((is_array($_tmp='summary_title')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h1>

<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<a id="a<?php echo $this->_tpl_vars['a']; ?>
"></a>
<h3><?php echo ((is_array($_tmp='summary_stitle')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>

<div class="centrer">

<table class="resultats" cellpadding="5">
<tbody>
<tr>
	<th><?php echo ((is_array($_tmp='generique_site')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<th class="damieralign"><?php echo ((is_array($_tmp='visites_visites')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<th class="damieralign"><?php echo ((is_array($_tmp='visites_pagesvues')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<th class="align"><?php echo ((is_array($_tmp='visites_pagesvisiteurs')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<th class="align"><?php echo ((is_array($_tmp='visites_tempsmoyen')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<th class="align"><?php echo ((is_array($_tmp='visites_tauxvisite')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
</tr>

<?php $_from = $this->_tpl_vars['statistics']['sites_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['info']):
?>
<tr onmouseover="colorow(this, 1)" onmouseout="uncolorow(this)"  onclick="loadUrl('<?php echo $this->_tpl_vars['url_mod_site']; ?>
&amp;site=<?php echo $this->_tpl_vars['info']['id']; ?>
&amp;mod=view_visits')">
<?php echo smarty_function_cycle(array('values' => ",",'assign' => 'style'), $this);?>

	<td class="<?php echo $this->_tpl_vars['style']; ?>
align" width="130px"><?php echo $this->_tpl_vars['info']['site_name']; ?>
</td>
	<td class="<?php echo $this->_tpl_vars['style']; ?>
" width="10%"><strong><?php echo $this->_tpl_vars['info']['nb_vis']; ?>
</strong></td>
	<td class="<?php echo $this->_tpl_vars['style']; ?>
"><strong><?php echo $this->_tpl_vars['info']['nb_pag']; ?>
</strong></td>
	<td class="<?php echo $this->_tpl_vars['style']; ?>
"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['nb_pag_per_vis'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>
</strong></td>
	<td class="<?php echo $this->_tpl_vars['style']; ?>
"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['time_per_vis'])) ? $this->_run_mod_handler('time_visit', true, $_tmp) : smarty_modifier_time_visit($_tmp)); ?>
</strong></td>
	<td class="<?php echo $this->_tpl_vars['style']; ?>
"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['info']['one_page_rate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")); ?>
%</strong></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr>
<td colspan="6"></td>
</tr>
<tr><?php echo smarty_function_cycle(array('values' => 'damierlight','assign' => 'style'), $this);?>

	<td class="<?php echo $this->_tpl_vars['style']; ?>
" width="100px"><strong><?php echo ((is_array($_tmp='generique_total')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</strong></td>
	<td class="<?php echo $this->_tpl_vars['style']; ?>
"><strong><?php echo $this->_tpl_vars['statistics']['total']['nb_vis']; ?>
</strong></td>
	<td class="<?php echo $this->_tpl_vars['style']; ?>
"><strong><?php echo $this->_tpl_vars['statistics']['total']['nb_pag']; ?>
</strong></td>
	<td class="<?php echo $this->_tpl_vars['style']; ?>
"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['statistics']['total']['nb_pag_per_vis'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>
</strong></td>
	<td class="<?php echo $this->_tpl_vars['style']; ?>
"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['statistics']['total']['time_per_vis'])) ? $this->_run_mod_handler('time_visit', true, $_tmp) : smarty_modifier_time_visit($_tmp)); ?>
</strong></td>
	<td class="<?php echo $this->_tpl_vars['style']; ?>
"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['statistics']['total']['one_page_rate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")); ?>
%</strong></td>
</tr>

</tbody>
</table>

</div>