<?php
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n";
include "util.php";
?>
<html>
<head>
<title>ikurso</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="style/bleu.css">
</head>
<body class="popup">
<?php 
$erarkodo=isset($_GET['erarkodo'])?$_GET['erarkodo']:"";
if ($erarkodo=="10") echo "<div class='atentigo'><p class='eraro'>Aucun utilisateur n’est enregistré avec cette adresse.</p></div>"; 
?>
<div>
	<form name="pasvorto" method="post" action="pasvortoforgesita2.php">
	<p>Entrez votre adresse électronique :</p>
	<br>
	<p><input type="text" name="retadreso" size="60"> 
	<input class="bouton" type="submit" value="Valider"></p>
	</form>
	<br>
</div>
</body>
</html>