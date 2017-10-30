<? 
include "forum/includes/forum.lib.php";
include "db.inc.php";
$link = mysql_connect("db.lo-data.net","ikurso","zamenhof") or die ("Connexion impossible");
$link2 = mysql_connect("db.lo-data.net","ikurso","zamenhof") or die ("Connexion impossible");
//mysql_select_db( "ikurso");
$query = "select enirnomo,id,pasvorto,lingvo,retadreso,urbo from ikurso.personoj";
$result = mysql_query($query,$link) or die (mysql_errno() . ": " . mysql_error(). " : ".$query);
//mysql_select_db("ikurso");
while($row = mysql_fetch_array($result)) {
	echo "enirnomo : ".$row['enirnomo']."- retadreso : ".$row['retadreso']."<br>";
	$query2 = "select * from ikurso.phpbb_users where user_id = ".$row['id'];

	$result2 = mysql_query($query2,$link2) or die (mysql_errno() . ": " . mysql_error(). " : ".$query2);
	if (mysql_num_rows($result2)==0) {
		phpbb_create_user($row['id'],$row['enirnomo'],$row['pasvorto'],$row['retadreso'],$row['lingvo'],$row['urbo']);
	}
}
?>
