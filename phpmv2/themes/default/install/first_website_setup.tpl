<script type="text/javascript" src="./themes/default/include/popup.js"></script>
{if $show_next_step}
<h4>{'install_site_success'|translate}</h4>
{else}
{assign var=form_text value='install_site_info'|translate}
{include file=admin/form.tpl}
{/if}
{$img_phpmv}