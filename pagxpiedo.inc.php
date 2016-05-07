<p class="dato">
ĝisdatigita je : 
<? if ($gxisdatigDato) {
		echo $gxisdatigDato;
	} else {
		echo "2005-10-01";
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
<? ob_flush();?>
