<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='{'lang_iso'|translate}'>
<head>
	<meta http-equiv="content-type" content="text/html; charset={'charset'|translate}" />
	<meta name="description" content="{'head_description'|translate}" />
	<meta name="keywords" content="{'head_keywords'|translate}" />
	<meta name="robots" content="all" />
	<meta name="revisit-after" content="7 day" />
	<meta name="author" content="phpMyVisites Team" />
	<meta http-equiv="reply-to" content="http://www.phpmyvisites.us/" />
	<meta name="copyright" content="phpMyVisites" />
	<meta name="version" content="{$PHPMV_VERSION}" />
	<title>{'head_titre'|translate}</title>
	<link href="./themes/default/css/{if $styleCommon}{$styleCommon}{else}interfaceCommon{/if}.css" rel="stylesheet" type="text/css" />	
	<link href="./themes/default/css/styles.php?dir={'text_dir'|translate}" rel="stylesheet" type="text/css" />	
	<script type="text/javascript" src="./themes/default/include/menu.js"></script>
	<script type="text/javascript" src="./themes/default/include/misc.js"></script>
	<link rel="alternate" type="application/rss+xml" title="RSS" href="./index.php?mod=view_rss&amp;rss_hash={$rss_hash}" />
	<script type="text/javascript">var js_direction="{'text_dir'|translate}";</script>
</head>
<body>
<!-- http://www.phpmyvisites.net/ -->	
{if $header_error_message}
	<h2>
	{$header_error_message}	
	{if $mod=="admin"} {'admin_db_log'|translate} {/if}
	</h2>
{/if}