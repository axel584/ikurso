<?php /* Smarty version 2.6.9, created on 2006-11-27 00:20:34
         compiled from common/viewfrequency_all.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'common/viewfrequency_all.tpl', 1, false),array('modifier', 'string_format', 'common/viewfrequency_all.tpl', 24, false),array('modifier', 'time_visit', 'common/viewfrequency_all.tpl', 76, false),array('function', 'counter', 'common/viewfrequency_all.tpl', 3, false),)), $this); ?>
<h1><?php echo ((is_array($_tmp='frequence_titre')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h1>

<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<a id="a<?php echo $this->_tpl_vars['a']; ?>
"></a>
<h3><?php echo ((is_array($_tmp='visites_statistiques')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>

<div class="centrer">

<table class="resultats" cellpadding="5">
<tbody>
<tr>
	<th colspan="2"><strong><?php echo ((is_array($_tmp='visites_periodesel')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</strong></th>
</tr>
<tr>
	<td class="damieralign"><?php echo ((is_array($_tmp='frequence_nouveauxvisiteurs')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td><strong><?php echo $this->_tpl_vars['frequencystatistics']['nb_uniq_vis_new']; ?>
</strong></td>
</tr>
<tr>
	<td class="align"><?php echo ((is_array($_tmp='frequence_visiteursconnus')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td class="damier"><strong><?php echo $this->_tpl_vars['frequencystatistics']['nb_uniq_vis_returning']; ?>
</strong></td>
</tr>
<tr>
	<td class="damieralign"><?php echo ((is_array($_tmp='frequence_returningrate')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['returning_rate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")); ?>
%</strong></td>
</tr>
<tr>
	<td class="align"><?php echo ((is_array($_tmp='frequence_vispervis')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td class="damier"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['nb_vis_per_uniq_vis'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>
 <?php echo ((is_array($_tmp='frequence_vis')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</strong></td>
</tr>
</tbody>
</table>


<h3><?php echo ((is_array($_tmp='frequence_nouveauxconnus')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>
<table class="resultats" cellpadding="18">
<tbody>
<tr>
	<th></th>
	<th><strong><?php echo ((is_array($_tmp='frequence_visitesconnues')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</strong></th>
	<th><strong><?php echo ((is_array($_tmp='frequence_nouvellesvisites')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</strong></th>
</tr>
<tr>
	<td class="damieralign"><?php echo ((is_array($_tmp='visites_visites')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td>
		<strong><?php echo $this->_tpl_vars['frequencystatistics']['nb_vis_returning']; ?>
</strong> 
		<small>(<?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['nb_vis_returning_percent'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")); ?>
%)</small></td>
	<td class="damier">
		<strong><?php echo $this->_tpl_vars['frequencystatistics']['nb_vis_new']; ?>
</strong> 
		<small>(<?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['nb_vis_new_percent'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")); ?>
%)</small>
	</td>
</tr>
<tr>
	<td class="align"><?php echo ((is_array($_tmp='visites_pagesvues')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td class="damier">
		<strong><?php echo $this->_tpl_vars['frequencystatistics']['nb_pag_returning']; ?>
</strong> 
		<small>(<?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['nb_pag_returning_percent'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")); ?>
%)</small>
	</td>
	<td>
		<strong><?php echo $this->_tpl_vars['frequencystatistics']['nb_pag_new']; ?>
</strong> 
		<small>(<?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['nb_pag_new_percent'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")); ?>
%)</small>
	</td>
</tr>

<tr>
	<td class="damieralign"><?php echo ((is_array($_tmp='visites_pagesvisiteurs')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td>
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['nb_pag_per_vis_returning'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>
</strong>
	</td>
	<td class="damier">
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['nb_pag_per_vis_new'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>
</strong>
	</td>
</tr>
<tr>
	<td class="align"><?php echo ((is_array($_tmp='visites_tempsmoyen')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td class="damier">
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['time_per_vis_returning'])) ? $this->_run_mod_handler('time_visit', true, $_tmp) : smarty_modifier_time_visit($_tmp)); ?>
</strong>
	</td>
	<td>
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['time_per_vis_new'])) ? $this->_run_mod_handler('time_visit', true, $_tmp) : smarty_modifier_time_visit($_tmp)); ?>
</strong>
	</td>
</tr>
<tr>
	<td class="damieralign"><?php echo ((is_array($_tmp='visites_tempsmoyenpv')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td>
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['time_per_pag_returning'])) ? $this->_run_mod_handler('time_visit', true, $_tmp) : smarty_modifier_time_visit($_tmp)); ?>
</strong>
	</td>
	<td class="damier">
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['time_per_pag_new'])) ? $this->_run_mod_handler('time_visit', true, $_tmp) : smarty_modifier_time_visit($_tmp)); ?>
</strong>
	</td>
</tr>
<tr>
	<td class="align"><?php echo ((is_array($_tmp='visites_tauxvisite')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</td>
	<td class="damier">
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['one_page_rate_returning'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")); ?>
%</strong>
	</td>
	<td>
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['frequencystatistics']['one_page_rate_new'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.0f") : smarty_modifier_string_format($_tmp, "%.0f")); ?>
%</strong>
	</td>
</tr>

</tbody>
</table>

<br /><br />
<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<a id="a<?php echo $this->_tpl_vars['a']; ?>
"></a>
<h3><?php echo ((is_array($_tmp='frequence_nouveauxconnusgraph')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>
<img src="<?php echo $this->_tpl_vars['url_mod']; ?>
&mod=view_graph&graph_type=5&graph_data=frequency_new_vs_returning">

<br /><br />
<?php echo smarty_function_counter(array('name' => 'a'), $this);?>

<a id="a<?php echo $this->_tpl_vars['a']; ?>
"></a>
<h3><?php echo ((is_array($_tmp='pagesvues_vispervisgraph')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>
<img src="<?php echo $this->_tpl_vars['url_mod']; ?>
&mod=view_graph&graph_type=2&graph_data=visits_by_visitor">

</div>