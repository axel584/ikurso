<?php
//include_once $vojo."util.php";
if (!isset($vojo)) { $vojo="";}
$url=$_SERVER['REQUEST_URI'];
$pagxo=explode("/", $_SERVER["SCRIPT_NAME"]);
$subjekto=$pagxo[count($pagxo)-1];
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n";
?>
<html>
<head>
<title>ikurso-<?php echo $pagxtitolo;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="<?=$vojo;?>style/bleu.css" title="bleu">

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
					<h2>Personnel</h2>
					<!--p><a href="<?php echo $vojo."forum/index.php?sid=";?>">
					<?php //$lgv_forumo." ".phpbb_nombre_nouveau_message($persono_id);?>
					</a></p-->
					<!--p><a href="javascript:void(0);" onClick="window.open('<?=$vojo?>forum/chatbox_mod/chatbox.php','12_ChatBox','scrollbars=no,width=700,height=550')">Discussion en ligne</a></p-->
					<p><a href="<?php echo $vojo."personinformoj.php";?>">Donn&eacute;es personnelles</a></p>
				</td>
			<?php if ($rajto=="K" || $rajto=="A"){ ?>
				<td>
					<h2>Correcteur</h2>
					<p><a href="<?php echo $vojo."statLauxKategorio.php";?>">Statistiques</a></p>
					<p><a href="<?php echo $vojo."helppagxo.php";?>">Guide du correcteur</a></p>
					<p><a href="<?php echo $vojo."miajlernantoj.php";?>">Mes &eacute;l&egrave;ves</a></p>
				</td>
			<?php } ?>
			<?php if ($rajto=="I"){ ?>
				<td class="elemento">
					<h2>Administrateur</h2>
					<p><a href="#">Statistiques</a></p>
					<p><a href="<?php echo $vojo."stirpanelo.php";?>">Panneau de contr&ocirc;le</a></p>
				</td>
			<?php } ?>
			<?php if ($rajto=="A"){ ?>
				<td class="elemento">
					<h2>Administrateur</h2>
					<p><a href="<?php echo $vojo."stirpanelo.php";?>">Panneau de contr&ocirc;le</a></p>
					<p><a href="<?php echo $vojo."administri.php";?>">G&eacute;rer les utilisateurs</a></p>
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
	
