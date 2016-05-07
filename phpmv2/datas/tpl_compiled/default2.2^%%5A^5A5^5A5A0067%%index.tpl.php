<?php /* Smarty version 2.6.9, created on 2006-11-30 10:48:38
         compiled from admin/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'admin/index.tpl', 1, false),)), $this); ?>
<h1><?php echo ((is_array($_tmp='liens_admin')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h1>
<div id="administration">
	<p class="texte">
	<?php echo ((is_array($_tmp='admin_intro')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['link_doc']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['link_doc'])); ?>

	</p>
	
	<div id="generalAdmin">
	
		<h3><?php echo ((is_array($_tmp='install_general_setup')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>
		<h5><?php echo ((is_array($_tmp='admin_configuration')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h5>
		<ul>
		<li><a href="./index.php?mod=admin_general_config"><?php echo ((is_array($_tmp='admin_general_conf')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_db_config"><?php echo ((is_array($_tmp='install_database_setup')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		</ul>
		
		<h5><?php echo ((is_array($_tmp='admin_user_title')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h5>
		<ul>
		<li><a href="./index.php?mod=admin_group"><?php echo ((is_array($_tmp='admin_group_title')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_user&amp;action=add"><?php echo ((is_array($_tmp='admin_user_add')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_user&amp;action=mod"><?php echo ((is_array($_tmp='admin_user_mod')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_user&amp;action=del"><?php echo ((is_array($_tmp='admin_user_del')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		</ul>
		
		<h5><?php echo ((is_array($_tmp='admin_server_info')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h5>
		<ul>
		<li><a href="./index.php?mod=admin_server_info"><?php echo ((is_array($_tmp='admin_server_info')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		</ul>
		
		<h5><?php echo ((is_array($_tmp='generique_other')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h5>
		<ul>
		<li><a href="./index.php?mod=send_mail"><?php echo ((is_array($_tmp='admin_send_mail')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=view_rss&amp;rss_hash=<?php echo $this->_tpl_vars['rss_hash']; ?>
"><?php echo ((is_array($_tmp='admin_rss_feed')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=view_pdf&amp;rss_hash=<?php echo $this->_tpl_vars['rss_hash']; ?>
&site=1"><?php echo ((is_array($_tmp='pdf_generate_link')) ? $this->_run_mod_handler('translate', true, $_tmp, 1) : smarty_modifier_translate($_tmp, 1)); ?>
</a></li>
		<li><a href="./index.php?mod=view_pdf&amp;rss_hash=<?php echo $this->_tpl_vars['rss_hash']; ?>
"><?php echo ((is_array($_tmp='pdf_summary_generate_link')) ? $this->_run_mod_handler('translate', true, $_tmp, 1) : smarty_modifier_translate($_tmp, 1)); ?>
</a></li>
		
		</ul>
		<h5><?php echo ((is_array($_tmp='admin_last_version')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h5>
		<a href="http://www.phpmyvisites.us/"><img src="http://www.phpmyvisites.net/test-last-version-available.php?version=<?php echo $this->_tpl_vars['PHPMV_VERSION']; ?>
"></a>
	</div>
	
	
	<div id="detailAdmin">
		<h3><?php echo ((is_array($_tmp='admin_site_admin')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h3>
		<h5><?php echo ((is_array($_tmp='install_general_setup')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h5>
		<ul>
		<li><a href="./index.php?mod=admin_site_general&amp;action=add"><?php echo ((is_array($_tmp='admin_site_add')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_site_general&amp;action=mod"><?php echo ((is_array($_tmp='admin_site_mod')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_site_general&amp;action=del"><?php echo ((is_array($_tmp='admin_site_del')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_site_urls"><?php echo ((is_array($_tmp='admin_url_alias')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		</ul>
		
		<h5><?php echo ((is_array($_tmp='generique_other')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h5>
		<ul>
		<li><a href="./index.php?mod=admin_site_javascript_code"><?php echo ((is_array($_tmp='admin_afficherjavascript')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_url_redirection_generate"><?php echo ((is_array($_tmp='admin_url_generate_title')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_help_pagename"><b>How to give a friendly name to your pages?</b></a></li>
		<br/>
		<li><a href="./index.php?mod=admin_site_cookie_exclude"><?php echo ((is_array($_tmp='admin_cookieadmin')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_site_ip_exclude"><?php echo ((is_array($_tmp='admin_ip_ranges')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		</ul>
		
		<h5><?php echo ((is_array($_tmp='affluents_newslettersimg')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h5>
		<small><p>To detect a visitor from a newsletter in the Referrers section of phpMyVisites, you have
		to add the parameter "nid" in the URLs in your newsletters.</p>
		<p>For example if you have a link in your newsletter which is "http://www.site.com/index.php?part=misc"</p>
		<p>You have to change it to "http://www.site.com/index.php?part=misc&nid=XXXXXXX" where XXXXXXX is the nid 
		of the newsletter you've saved in phpmyvisites.</p>
		<p>Another example : "http://www.site.com/" will be "http://www.site.com/?nid=XXXXXXX".</p>
		</small>
		<ul>
		<li><a href="./index.php?mod=admin_site_newsletters&amp;action=add"><?php echo ((is_array($_tmp='admin_nl_add')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_site_newsletters&amp;action=mod"><?php echo ((is_array($_tmp='admin_nl_mod')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_site_newsletters&amp;action=del"><?php echo ((is_array($_tmp='admin_nl_del')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		</ul>
		
		<h5><?php echo ((is_array($_tmp='affluents_partenairesimg')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h5>
		<small>
		<p>To detect a partner website as is, you have to enter its url or add a parameters to the link from its site
		to your site (as in the newsletters). This parameter's name is "pid".</p>
		<p>For example if the partner "Tourloutiti" has a "pid=14", you can ask him to change its link to your site adding "pid=14" as an URL parameter.
		But the simplest is to save all its urls and "Tourloutiti" will be automatically recognized as a partner website in the Referers part.</p>
		</small>
		<ul>	
		<li><a href="./index.php?mod=admin_site_partners&amp;action=add"><?php echo ((is_array($_tmp='admin_partner_add')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_site_partners&amp;action=mod"><?php echo ((is_array($_tmp='admin_partner_mod')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		<li><a href="./index.php?mod=admin_site_partners&amp;action=del"><?php echo ((is_array($_tmp='admin_partner_del')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a></li>
		</ul>
	</div>
	
	<div class="both"></div>
</div>
<p align="center">Version : phpMyVisites <?php echo $this->_tpl_vars['PHPMV_VERSION']; ?>
</p>