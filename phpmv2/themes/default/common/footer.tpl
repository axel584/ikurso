
{if $internal_stats}
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
{/if}
{if $mod==view}
<p class="archive">
Version : phpMyVisites {$PHPMV_VERSION} | {'admin_rss_feed'|translate}
&nbsp;<a title="RSS web statistics" alt="RSS web statistics" href="./index.php?mod=view_rss&amp;rss_hash={$rss_hash}"><img src="images/logos/rss.gif" border="0"></a>
{/if}
</p>
</body>
</html>