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
<? if ($erarkodo=="10") echo '<p class="eraro"><i>'.$lgv_eraro10.'</i></p></center>'; ?>
<div>
	<form name="pasvorto" method="post" action="pasvortoforgesita2.php">
	<p><? echo $lgv_pasvortoforgesita; ?></p>
	<br>
	<p><input type="text" name="retadreso" size="60"> 
	<input class="bouton" type="submit" value="<? echo $lgv_ek; ?>"></p>
	</form>
	<br>
</div>
</body>
</html>