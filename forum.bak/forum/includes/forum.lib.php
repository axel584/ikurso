<? 
/***************************************************************************
 *                               forum.lib.php
 *                            -------------------
 *   begin                : Saturday, May 11, 2003
 *   copyright            : (C) 2003 Axel 584
 *   email                : axel584@axel584.org
 *
 *
 *
 ***************************************************************************/
 
if (!(function_exists('encode_ip'))){
	function encode_ip($dotquad_ip)
	{
		$ip_sep = explode('.', $dotquad_ip);
		return sprintf('%02x%02x%02x%02x', $ip_sep[0], $ip_sep[1], $ip_sep[2], $ip_sep[3]);
	}
} 
 function phpbb_create_user($user_id,$enirnomo,$pasvorto,$retadreso,$lingvo,$urbo) {
 	$new_password = md5(htmlspecialchars(stripslashes($pasvorto)));
 	switch ($lingvo) {
 		case "FR" : $user_lang="french";
 			    break;
 		case "EO" : $user_lang="esperanto";
 			    break; 			    
 	}
 	$query = "INSERT INTO phpbb_users	(user_id, username, user_regdate, user_password, user_email, user_from, user_viewemail, user_attachsig, user_allowsmile, user_allowhtml, user_allowbbcode, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_timezone, user_dateformat, user_lang, user_style, user_level, user_allow_pm, user_active, user_actkey)
		VALUES ($user_id, '" . str_replace("\'", "''", $enirnomo) . "', " . time() . ", '" . str_replace("\'", "''", $new_password) . "', '" . str_replace("\'", "''", $retadreso) . "', '" . str_replace("\'", "''", $urbo) . "',0, 0, 1, 0, 1, 1, 1, 1, 1, '0.00', 'd M Y h:i a', '" . str_replace("\'", "''", $user_lang) . "', 1, 0, 1, 1, '')";
	mysql_connect("localhost","jefo","***REMOVED***") or die ("Connexion impossible");
	mysql_select_db("ikurso");
	if ( !($result = mysql_query($query)) )
	{
		protokolo($user_id,"PHPBB KREADO","sql :".addslashes($query));
	}
     	//$result = mysql_query($query) or die ("INSERT : Invalid query :".$query);
     	mysql_close();
}

function phpbb_login($persono_id) {
	$ip = $_SERVER['REMOTE_ADDR'];
	$session_id = md5(uniqid(encode_ip($ip)));
	$sessiondata['autologinid'] = '';
	$sessiondata['userid'] = $persono_id;
	//mysql_connect("localhost","jefo","***REMOVED***") or die ("Connexion impossible");
	mysql_select_db("ikurso");
	// supprimer les dernieres sessions
	$query ="DELETE from phpbb_sessions where session_user_id = ".$persono_id;
	$result = mysql_query($query) or die ("INSERT : Invalid query :".$query);
	
	// met à jour le profil pour le champ user_lastvisit
	$query ="UPDATE phpbb_users set user_lastvisit = user_session_time where user_id = ".$persono_id;
	$result = mysql_query($query) or die ("INSERT : Invalid query :".$query);
	
	// créer une nouvelle session
	$query = "INSERT INTO phpbb_sessions(session_id,session_user_id, session_start,session_time,session_ip,session_page,session_logged_in)
	VALUES ('".$session_id."','$persono_id',".time().",".time().",'".encode_ip($ip)."',0,1)";
	$result = mysql_query($query) or die ("INSERT : Invalid query :".$query);
	
	// la sauvegarde dans un cookie
     	setcookie('phpbb2mysql_data', serialize($sessiondata), time() + 60*60*24*30*6,'/');
	setcookie('phpbb2mysql_sid', $session_id, 0,'/');
     	mysql_close();	
}
function phpbb_nombre_nouveau_message($persono_id) {
	mysql_select_db("ikurso");
	$query="SELECT count(*) as nouveau_message FROM phpbb_posts,phpbb_users WHERE post_time >= phpbb_users.user_lastvisit and phpbb_users.user_id=".$persono_id;
	//$result = @mysql_query($query) or die ("INSERT : Invalid query :".$query);
	$result = @mysql_query($query);
	$row = mysql_fetch_array($result);
	if ($row[nouveau_message]>0) {
		return "(".$row[nouveau_message].")";
	} else {
		return "";
	}
}
?>
