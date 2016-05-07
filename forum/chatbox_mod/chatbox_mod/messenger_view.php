<?php
/***************************************************************************
 *							messenger_view.php
 *							-------------------
 *	begin				:	Sun July 08 2002
 *	copyright			:	(C) 2002 Smartor
 *	email				:	smartor_xp@hotmail.com
 *
 *	$Id: messenger_view.php,v 1.18b 2002/8/03, 20:06:21 hnt Exp $
 *
 ***************************************************************************/

/***************************************************************************
 *                                         				                                
 *   This program is free software; you can redistribute it and/or modify  	
 *   it under the terms of the GNU General Public License as published by  
 *   the Free Software Foundation; either version 2 of the License, or	    	
 *   (at your option) any later version.
 *
 ***************************************************************************/

define('IN_PHPBB', true);
$phpbb_root_path = './../';

include_once($phpbb_root_path . 'extension.inc');
include_once($phpbb_root_path . 'common.'.$phpEx);
include_once($phpbb_root_path . 'includes/bbcode.'.$phpEx);
include_once($phpbb_root_path . '/chatbox_mod/chatbox_config.'.$phpEx);

error_reporting  (E_ERROR | E_WARNING | E_PARSE); // This will NOT report uninitialized variables
set_magic_quotes_runtime(0); // Disable magic_quotes_runtime

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);
//
// End session management
//

?>

<html>
<head>

<title><?php echo $lang['ChatBox']; ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $lang['ENCODING']; ?>">

<meta http-equiv="refresh" content="<?php echo $chatbox_config['refresh_time']; ?>; URL=<?php echo append_sid("messenger_view.php"); ?>">

<link rel="stylesheet" href="<?php echo $chatbox_config['stylesheet']?>" type="text/css">

<script language="JavaScript1.2">
<!--
function MM_openBrWindow(theURL,winName,features)
{
	window.open(theURL,winName,features);
}
//-->
</script>

</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onload="window.scrollTo(0,99999);" link="#006699">

<?php

// Check User Session - Smartor
if (!$userdata['session_logged_in'])
{
	echo "Please login to chat</body></html>";
	exit();
}

// Send info to process - Smartor
if (isset($HTTP_POST_VARS['nick']) && isset($HTTP_POST_VARS['sent']))
{
	add_msg($HTTP_POST_VARS['nick'], $HTTP_POST_VARS['sent']);
}

chatters_sub();
change_list();
show_msg();

?>

</body>
</html>

<?php

function show_msg()
{
	global $chatbox_config, $userdata;

	$colour = 0; // used to change the backgrounh colours

	$msg_count = count_msg();

	$start = $msg_count - $chatbox_config['show_amount'];

	if ($start < 0)
	{
		$start = 0;
	}
	
	//
	// Delete too old messages
	//
	$records = get_msg(0, $msg_count, $chatbox_config['direction']);
	for ( $count = 0; $count < count($records); $count++ )
	{
		$msgs = $records[$count];

		if ( (($msgs['time']) + $chatbox_config['delete_time']) < time() )
		{
			delete_msg($msgs['time']);
		}
	}

	$records = get_msg($start, $msg_count, $chatbox_config['direction']);
	for ( $count = 0; $count < count($records); $count++ )
	{
		$chat = $records[$count];

		// Check if be kicked - Smartor
		if ($userdata['user_level'] != ADMIN)
		{
			if (($chat['nick'] == _CHATBOX_SYSTEM_MSG) and (strtolower($chat['msg']) == strtolower('<i>' . $userdata['username'] . ' was kicked</i>')))
			{
				drop_user($userdata['username']); // I need this instruction to force the victim to log out if his browser was disabled JavaScript - Smartor
				echo "\n<script language='JavaScript'>\n"; // and close his window, this chatbox connects very fast - Smartor
				echo "<!--\n";
				echo "top.close();\n";
				echo "//-->\n";
				echo "</script>\n";
			}
		}

		// Normal Messages
		if (trim($chat['nick'])!="" && trim($chat['msg'])!="" && trim($chat['time'])!="")
		{
			$msg = trim($chat['msg']);

			// Smilies
			$msg = smilies_pass($msg);
			$msg = preg_replace('/images\/smiles/', '../images/smiles', $msg);
						
			if ($colour == 0)
			{
				$colour=1;
			}
			else
			{
				$colour=0;
			}

			echo output_msg($chat['nick'], $msg, $colour);
		}
	}
}


function add_msg($nick, $msg) // This function processes the submission from user - Smartor
{
	global $chatbox_config, $userdata;

	$error = FALSE;

	$nick = stripslashes(htmlspecialchars(trim($nick)));
	$msg = htmlspecialchars(trim($msg));

	// Check Admin Command
	if ($userdata['user_level'] == ADMIN)
	{
		if ( strtolower(substr($msg, 0, 5)) == '/kick') // /KICK
		{
			$victim = substr($msg, 6, strlen($msg) - 6);
			write_msg(_CHATBOX_SYSTEM_MSG, '<i>' . $victim . ' was kicked</i>');
			return;
		}
		elseif (strtolower($msg) == '/clear') // /CLEAR
		{
			clear_chat();
			return;
		}
	}
	// END - Check

	if ( (!isset($msg)) or ($msg == "") or (!isset($nick)) or ($nick == "") )
	{
		$error = TRUE;
	}

	if ( strlen($msg) > $chatbox_config['max_msg_len'] )
	{
		$msg = substr($msg, 0, $chatbox_config['max_msg_len']);
	}

	if ($error == FALSE)
	{
		write_msg($nick, $msg);
		user_active($nick);
	}
}


function chatters_sub() // This function checks status of user
{
	global $chatbox_config, $board_config, $table_chatbox_session_name, $db;

	$sql = "SELECT * FROM " . $table_chatbox_session_name;

    if (!$sol = $db->sql_query($sql))
	{
		die("SQL Error in function chatters_sub(): SELECT");
	}

	$isimler[0] = $db->sql_numrows($sol);

	$i=1;

	while ($record = $db->sql_fetchrow($sol))
	{
		$activity[$i]=$record[2];
		$isimler[$i++]=$record[0];
	}

	for($s = 1; $s <= $isimler[0]; $s++)
	{
		$currentact = isuser_active($isimler[$s]);
		
		if($currentact != $activity[$s])
		{
			if (($activity[$s] == "online") && ($currentact == "away"))
			{
				write_msg(_CHATBOX_SYSTEM_MSG, "<span style='color: #006666'><i><b>$isimler[$s]</b> became away on " . create_date($board_config['default_dateformat'], time(), $board_config['board_timezone']) . "</i>");
			}
			
			$sql = "UPDATE " . $table_chatbox_session_name . " SET laststatus = '" . mysql_escape_string($currentact) . "' WHERE username = \"" . mysql_escape_string($isimler[$s]) . "\"";

		    if (!$result = $db->sql_query($sql))
			{
				die("SQL Error in function chatters_sub(): UPDATE");
			}
		}
	}
}


function change_list()
{
?>
	<script language="JavaScript">
	<!--
		window.parent.who.location.href = "<?php echo append_sid("messenger_list.php"); ?>";
	//-->
	</script>
<?php
}


function output_msg($nick, $msg, $colour) // Ouput message to screen -> Final Step - Smartor
{
?>
<table cellpadding='2' cellspacing='0' border='0' width='100%' class='table<?php echo $colour; ?>'>
	<tr><td class='chatbox'><b><?php echo $nick; ?></b>: <?php echo $msg; ?></td></tr>
</table>
<?php
}


function delete_msg($timestamp)
{
	global $chatbox_config, $table_chatbox_name, $db;
	
	$sql = "SELECT id,name,msg,timestamp FROM phpbb_chatbox where timestamp = '".$timestamp."'";
	
	if (!$sol = $db->sql_query($sql))
	{
		die("SQL Error in function delete_msg() : SELECT");
	}
	
	$record = $db->sql_fetchrow($sol);	
	
	$sql = "INSERT INTO phpbb_chatbox_backup (id, name, msg, timestamp) VALUES ('','".mysql_escape_string($record['name'])."','".mysql_escape_string($record['msg'])."','".$timestamp."')";

	if (!$result = $db->sql_query($sql))
	{
		die("SQL Error in function delete_msg() : INSERT<br>query:".$sql."<br>".mysql_errno()." : ".mysql_error());
	}

	$sql = "DELETE FROM " . $table_chatbox_name . " WHERE timestamp = '".$timestamp."'";

        if (!$result = $db->sql_query($sql))
	{
		die("SQL Error in function delete_msg() : DELETE");
	}
}


function clear_chat()
{
	global $chatbox_config, $table_chatbox_name, $db;

	$sql = "SELECT id,name,msg,timestamp FROM ".$table_chatbox_name;
	
	if (!$sol = $db->sql_query($sql))
	{
		die("SQL Error in function clear_chat() : SELECT query : ".$sql);
	}
	
	while ($record = $db->sql_fetchrow($sol))
	{
		$sql = "INSERT INTO phpbb_chatbox_backup (id, name, msg, timestamp) VALUES ('','".mysql_escape_string($record['name'])."','".mysql_escape_string($record['msg'])."','".mysql_escape_string($record['timestamp'])."')";
		if (!$result = $db->sql_query($sql))
		{
			die("SQL Error in function clear_chat() : INSERT query : ".$sql);
		}
	}	

	$sql = "DELETE FROM " . $table_chatbox_name;

    if (!$result = $db->sql_query($sql))
	{
		die("SQL Error in function clear_chat() : DELETE query : ".$sql);
	}
}

?>