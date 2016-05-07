
{include file="common/header.tpl"}
	

{include file="common/logged.tpl"}
<div id="main">
<div id="contenu">
	<div id="logo">
	
		{include file="common/calendar.tpl"}
		
		{include file="common/sites_selection.tpl"}
		
		<a href="index.php">
		<img border="0" alt="{'logo_description'|translate}" src="themes/default/images/phpmv.png" alt="phpMyVisites" width="485" height="132" />
		</a>
		<div class="both"></div>
	
	</div>
	
	{include file="common/menu.tpl"}
	{include file="common/langs_selection.tpl"}
	
	{if $mod==view}
		{include file="common/period_selection.tpl"}
	{/if}
	
	<div class="both"></div>
	
	{counter print=false assign=a name=a start=0}
	{counter print=false assign=i name=i start=0}
	
	{include file="$contentpage"}
	
	<!--
		We request you retain the link to www.phpmyvisites.net.
		This not only gives respect to the large amount of time given freely by the developers
		but also helps build interest, traffic and use of phpmyvisites.net. 
		If you refuse to include even this then support on our forums may be affected.
	
		phpMyVisites developpers : 2006	
	-->


	<div class="centrer">
		<a href="#" class="movetop">
			<img src="themes/default/images/top.png" alt="{'generique_retourhaut'|translate}" /> {'generique_retourhaut'|translate}
		</a>
	</div>
	
	<div class="both"></div>
	
	<!-- bottom menu -->
	<ul id="admin">
		<li class="site"><a href="http://www.phpmyvisites.us" link="open source free web analytics" onclick="window.open(this.href);return(false);">{'liens_siteofficiel'|translate}</a></li>
		<li class="install"><a href="{$url_mod}&amp;mod=admin_index">{'liens_admin'|translate}</a></li>
		<li class="contacts"><a href="index.php?mod=contacts">{'liens_contacts'|translate}</a></li>
	</ul>
	
	<div class="both"></div>
</div>
</div>
{include file="common/footer.tpl"}
