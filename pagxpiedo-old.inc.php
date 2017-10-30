<p class="dato">
ĝisdatigita je : 
<?php if (isset($gxisdatigDato)) {
		echo $gxisdatigDato;
	} else {
		echo "2016-05-11";
	}
?>
</p>
<p style="text-align:center">
	Des commentaires ou des questions à propos de cette page ? <a href="<?=$vojo?>reago.php?q=<?=$pagxtitolo?>">
					<br />Contactez-nous :					
					<input type="image" src="<?=$vojo?>bildoj/koverto.gif">
					</a>
</p>
</div> <!-- fin div subpagxo -->
</div>  <!-- fin div pagxo -->
<div class="antauxpiedo">&nbsp;</div>
<div id="piedo">&nbsp;</div>
</body>
</html>  
<?php ob_flush();?>