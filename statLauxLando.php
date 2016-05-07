<?
$temo="lando";
include "stat.inc.php";
function stat_landoj() {
	global $lingvo,$lgv;
	echo "<table class=\"stat\">\n<tbody>\n";

	mysql_select_db( "ikurso");

	// laux landoj
	$demando = "select personoj.lando as lando from personoj,nuna_kurso where personoj.id=nuna_kurso.studanto and (personoj.rajtoj='P' or personoj.rajtoj='S') and (nuna_kurso.stato='N' or nuna_kurso.stato='K') and personoj.lingvo='".$lingvo."'";
	$result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
	while($row = mysql_fetch_array($result)) {
                 $stat[$row["lando"]]++;
        }	
        $demando = "select * from landoj where lingvo='".$lgv."'";
        $result = mysql_query($demando) or die (  "SELECT : malbona demando :".$demando.":".mysql_error());
        while ($row=mysql_fetch_array($result)) {
          $nomo_landoj[$row["kodo"]]=$row["nomo"];
        }
	ksort($stat);
	foreach($stat as $key => $value) {
		echo "<tr>\n";
		if ($key=="FR") { 
			echo "<td class='col1'>&nbsp;".$nomo_landoj[$key]."&nbsp;";
			echo "<a href=\"#\" onClick=\"window.open('stat-fr.html','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=515,height=555');\">";
			echo "<img border=\"0\" height=\"14\" width=\"14\" src=\"bildoj/grafiko.png\">";
			echo "</a></td>\n<td>&nbsp;".$value."&nbsp;</td>\n";}
		else {
                	echo "<td  class='col1'>&nbsp;".$nomo_landoj[$key]."&nbsp;</td>\n<td align='right'>&nbsp;".$value."&nbsp;</td>\n";
                }
                echo "</tr>\n";
	}
        echo "</tbody>\n</table>\n";

}
?>
			<h2><? echo $lgv_laux.$lgv_lauxLando." :";?></h2>
			<? stat_landoj(); ?>
<?include "pagxpiedo.inc.php";?>