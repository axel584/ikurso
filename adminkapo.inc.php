<?php
//include_once $vojo."util.php";
if (!isset($vojo)) { $vojo="";}
$url=$_SERVER['REQUEST_URI'];
$pagxo=explode("/", $_SERVER["SCRIPT_NAME"]);
$subjekto=$pagxo[count($pagxo)-1];
$metodo=isset($_GET["metodo"])?$_GET["metodo"]:"U";
$style=isset($_GET["style"])?$_GET["style"]:"";
if ($style==""){
	$style=isset($_COOKIE["style"])?$_COOKIE["style"]:"bleu";
}
setcookie("style", $style);
ob_start("konvX");
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n";
?>
<html>
<head>
<title>ikurso-<?php echo $pagxtitolo;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="<?=$vojo;?>style/<?=$style?>.css" title="<?=$style?>">

</head>
<body>
<!--
* 
* entete de la page
*

<div id="kapo">
	<img src="<?=$vojo?>bildoj/titre2.jpg">
</div>
<!--
* 
* menu personnel 
*
-->
<?php if ($persono_id!="") { ?>
	<div id="menuo">
		<table>
			<tr><td class="unua">
					<h1><?=$enirnomo?></h1>
					<p><a href="#"><a href="<?php echo $vojo."eliri.php"?>">Fermer la session</a></p>
				</td>
				<td>
					<h2><?=$lgv_persona?></h2>
					<p><a href="<?php echo $vojo."forum/index.php?sid=";?>">
					<?php //$lgv_forumo." ".phpbb_nombre_nouveau_message($persono_id);?>
					</a></p>
					<p><a href="javascript:void(0);" onClick="window.open('<?=$vojo?>forum/chatbox_mod/chatbox.php','12_ChatBox','scrollbars=no,width=700,height=550')">Discussion en ligne</a></p>
					<p><a href="<?php echo $vojo."personinformoj.php";?>"><?=$lgv_sxangipersoninformojn?></a></p>
				</td>
			<?php if ($rajto=="K" || $rajto=="A"){ ?>
				<td>
					<h2><?=$lgv_korektanta?></h2>
					<p><a href="<?php echo $vojo."statLauxKategorio.php";?>"><?=$lgv_statistiko?></a></p>
					<p><a href="<?php echo $vojo."helppagxo.php";?>"><?=$lgv_helppagxo?></a></p>
					<p><a href="<?php echo $vojo."miajlernantoj.php";?>"><?=$lgv_zorgistudantojn?></a></p>
				</td>
			<?php } ?>
			<?php if ($rajto=="I"){ ?>
				<td class="elemento">
					<h2><?=$lgv_administranta?></h2>
					<p><a href="#"><?=$lgv_statistiko?></a></p>
					<p><a href="<?php echo $vojo."stirpanelo.php";?>"><?=$lgv_stirpanelo?></a></p>
				</td>
			<?php } ?>
			<?php if ($rajto=="A"){ ?>
				<td class="elemento">
					<h2><?=$lgv_administranta?></h2>
					<p><a href="<?php echo $vojo."stirpanelo.php";?>"><?=$lgv_stirpanelo?></a></p>
					<p><a href="<?php echo $vojo."administri.php";?>"><?=$lgv_zorgiuzantojn?></a></p>
				</td>
			<?php } ?>
			</tr>
		</table>
	</div>
<?php } ?>
<!-- 
*
* page = menu lateral + onglets (facultatifs) + contenu 
*
-->
<div id="pagxo">
	<div id="subpagxo">
		<div class="stylenavbar">
		</div>		
		<h1><?=$pagxtitolo?></h1>
	