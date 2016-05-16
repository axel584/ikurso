<html>
<body>
<center><h1>Unikodo</h1>
<h3>Baza Latina</h3><table><tr>
<?
for ($i=32;$i<128;$i++) {
	echo "<td bgcolor= \"ffcccc\">$i</td>";
	echo "<td bgcolor= \"ffffcc\">&#$i;</td>";
	if (($i % 16) == 15) echo "</tr><tr>";
}	
?>
</tr></table>
<h3>Latina 1</h3><table><tr>
<?
for ($i=128;$i<256;$i++) {
	echo "<td bgcolor= \"ffcccc\">$i</td>";
	echo "<td bgcolor= \"ffffcc\">&#$i;</td>";
	if (($i % 16) == 15) echo "</tr><tr>";
}	
?>

</tr></table>
<h3>Latina A</h3><table><tr>
<?
for ($i=256;$i<384;$i++) {
	echo "<td bgcolor= \"ffcccc\">$i</td>";
	echo "<td bgcolor= \"ffffcc\">&#$i;</td>";
	if (($i % 16) == 15) echo "</tr><tr>";
}	
?>
</tr></table>
<h3>Latina B</h3><table><tr>
<?
for ($i=402;$i<512;$i++) {
	echo "<td bgcolor= \"ffcccc\">$i</td>";
	echo "<td bgcolor= \"ffffcc\">&#$i;</td>";
	if (($i % 16) == 15) echo "</tr><tr>";
}	
?>
</tr></table>

<h3>Signoj</h3><table><tr>
<?
for ($i=710;$i<734;$i++) {
	echo "<td bgcolor= \"ffcccc\">$i</td>";
	echo "<td bgcolor= \"ffffcc\">&#$i;</td>";
	//if (($i % 16) == 15) echo "</tr><tr>";
	if ($i == 713) $i = 727;
}	
?>
</tr></table>
<h3>La Greka</h3><table><tr>
<?
for ($i=894;$i<975;$i++) {
	echo "<td bgcolor= \"ffcccc\">$i</td>";
	echo "<td bgcolor= \"ffffcc\">&#$i;</td>";
	if (($i % 16) == 15) echo "</tr><tr>";
}	
?>
</tr></table>
<h3>La Kirilaj</h3><table><tr>

<?
for ($i=1024;$i<1170;$i++) {
	echo "<td bgcolor= \"ffcccc\">$i</td>";
	echo "<td bgcolor= \"ffffcc\">&#$i;</td>";
	if (($i % 16) == 15) echo "</tr><tr>";
	if ($i == 1119) $i = 1168;
}	
?>
</tr></table>
<h3>La Hebrea</h3><table><tr>
<?
for ($i=1456;$i<1536;$i++) {
	echo "<td bgcolor= \"ffcccc\">$i</td>";
	echo "<td bgcolor= \"ffffcc\">&#$i;</td>";
	if (($i % 16) == 15) echo "</tr><tr>";
}	
?>
</tr></table>
<h3>La Araba</h3><table><tr>
<?
for ($i=1536;$i<1791;$i++) {
	echo "<td bgcolor= \"ffcccc\">$i</td>";
	echo "<td bgcolor= \"ffffcc\">&#$i;</td>";
	if (($i % 16) == 15) echo "</tr><tr>";
}	
?>

</tr></table>
</center>
</html>

