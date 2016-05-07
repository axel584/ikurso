<? $url=$_SERVER['SCRIPT_URI']; ?>
<html><head>
<title>
<? echo "Gerda malaperis vl&#265;ap".$&#265;ap; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--
<link rel="stylesheet" href="//esperanto-jeunes.org/style/emmanuelle/html_modif.css" type="text/css">
<link rel="stylesheet" href="//esperanto-jeunes.org/style/emmanuelle/links.css" type="text/css">
<link rel="stylesheet" href="//esperanto-jeunes.org/style/emmanuelle/spip01.css" type="text/css">
<link rel="StyleSheet" href="//esperanto-jeunes.org/style/emmanuelle/layersmenu-old.css" type="text/css"></link>
-->
<link rel="stylesheet" type="text/css" href="gerda.css">
</head>

<body>
<center>
<img height=5 width=800 src="../hr05.gif">
<?
if ($&#265;ap=="00") 
	{$titolo="G&eacute;n&eacute;ralit&eacute;s sur la prononciation";}
if ($_ENV["COQUE"]){
	echo "<h1>$titolo</h1>";
} else {
	if ($&#265;ap=="00"){echo "<div class=\"titolo\">$titolo</div>";}
	else {
		echo "<div class=\"titolo\">Vortlisto de &#265;apitro - $titolo</div>";}
}
?>
<img height=5 width=800 src="../hr05.gif">
<div class="kurso">