<?php
/***************************************************************************
 *							chatbox_function.php
 *							-------------------
 *	begin				:	Sun July 07 2002
 *	copyright			:	(C) 2002 Smartor
 *	email				:	smartor_xp@hotmail.com
 *
 *	$Id: chatbox_function.php,v 1.18 2002/7/23 23:02:54 hnt Exp $
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

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

error_reporting(E_ERROR | E_WARNING | E_PARSE);

include_once($phpbb_root_path . 'config.'.$phpEx);

$table_chatbox_name = $table_prefix . 'chatbox';
$table_chatbox_session_name = $table_prefix . 'chatbox_session';


function write_msg($nick, $msg)
{
	global $chatbox_config, $table_chatbox_name, $board_config, $table_chatbox_name, $db;

	if (($nick != _CHATBOX_SYSTEM_MSG) && ($nick != _IAI_MSG) && (isuser_active($nick) == "offline"))
	{
		write_msg(_CHATBOX_SYSTEM_MSG,"<span style='color: #006600'><b><i>$nick</b> joined chat on " . create_date($board_config['default_dateformat'], time(), $board_config['board_timezone']) . "</i></span>");
		user_join($nick,"offline");
	}

	if (($nick != _CHATBOX_SYSTEM_MSG) && ($nick != _IAI_MSG) && (isuser_active($nick) == "away"))
	{
		write_msg(_CHATBOX_SYSTEM_MSG, "<span style='color: #000066'><i><b>$nick</b> is online again</i></span>");
	    user_active($nick);
	}

	$sql = "INSERT INTO ".$table_chatbox_name." VALUES ('','".mysql_escape_string($nick)."','".mysql_escape_string($msg)."','".time()."')";

    if (!$result = $db->sql_query($sql))
	{
		die("SQL Error in function write_msg()");
	}
}


function get_msg($start,$number,$dir)
{
	global $chatbox_config, $table_chatbox_name, $table_chatbox_name, $db;

	$count = 0;

	if ($start < 0)
	{
		$start = 0;
	}

	$sql = "SELECT id,name,msg,timestamp FROM " . $table_chatbox_name . " ORDER BY id LIMIT ". $start . ", " . $number;

    if (!$result = $db->sql_query($sql))
	{
		die("SQL Error in function get_msg()");
	}

	while ($record = $db->sql_fetchrow($result,MYSQL_ASSOC))
	{
        $output[$count] = array('nick'	=> stripslashes($record["name"]),
								'msg'	=> stripslashes($record["msg"]),
								'time'	=> stripslashes($record["timestamp"])
								);
		$count++;
	}

	if ($chatbox_config['direction'] != 1 && ($count > 0))
	{
		$output = array_reverse($output);
	}

	return $output;
}


function count_msg()
{
    global $chatbox_config, $table_chatbox_name, $table_chatbox_name, $db;

    $sql = "SELECT * FROM ".$table_chatbox_name;

    if (!$result = $db->sql_query($sql))
	{
		die("SQL Error in function count_msg()");
	}

    return $db->sql_numrows($result);
}

function user_join($usernick,$status)
{
	global $chatbox_config, $table_chatbox_session_name, $db;

	$sql = "DELETE FROM ".$table_chatbox_session_name." WHERE username = '".mysql_escape_string($usernick)."'";

    if (!$result = $db->sql_query($sql))
	{
		die("SQL Error in function user_join(): DELETE");
	}

    $sql = "INSERT INTO ".$table_chatbox_session_name." (username, lastactive, laststatus) VALUES ('" . mysql_escape_string($usernick) . "', '".time()."', '" . mysql_escape_string($status) . "')";

    if (!$result = $db->sql_query($sql))
	{
		die("SQL Error in function user_join(): INSERT");
	}
}


function user_active($usernick)
{
	global $chatbox_config, $table_chatbox_session_name, $db;

    $sql = "UPDATE ".$table_chatbox_session_name." SET lastactive = '".time()."' WHERE username = '".mysql_escape_string($usernick)."'";

    if (!$result = $db->sql_query($sql))
	{
		die("SQL Error in function user_active()");
	}
}


function isuser_active($usernick)
{
	global $chatbox_config, $table_chatbox_session_name, $db;

    $sql = "SELECT lastactive FROM " . $table_chatbox_session_name . " WHERE username = '" . mysql_escape_string($usernick) . "'";

    if (!$sol = $db->sql_query($sql))
	{
		die("SQL Error in function isuser_active()");
	}

	$record = $db->sql_fetchrow($sol);

	$lastactive = $record['lastactive'];

	if ( ($lastactive == "") or ($lastactive == "0") )
	{
		$result="offline";
	}
	else
	{
		if ( ( ($lastactive + $chatbox_config['away_time']) < time() ) and ( ($lastactive + $chatbox_config['offline_time']) > time() ) )
		{
			$result = "away";
		}
		else if ( ($lastactive + $chatbox_config['offline_time']) <= time() )
		{
			drop_user($usernick);
			$result = "offline";
		}
		else
		{
			$result = "online";
		}
	}

	return $result;
}


function drop_user($usernick)
{
	global $chatbox_config, $board_config, $table_chatbox_session_name, $db;

    $sql = "SELECT lastactive FROM " . $table_chatbox_session_name . " WHERE username = '" . mysql_escape_string($usernick) . "'";

    if (!$sol = $db->sql_query($sql))
	{
		die("SQL Error in function drop_user()");
	}

	$record = $db->sql_fetchrow($sol);

	$lastactive = $record['lastactive'];

	if ($lastactive != "")
	{
		$sql = "DELETE FROM ".$table_chatbox_session_name." WHERE username = '" . mysql_escape_string($usernick) . "'";

	    if (!$result = $db->sql_query($sql))
		{
			die("SQL Error in function drop_user()");
		}

		write_msg(_CHATBOX_SYSTEM_MSG, "<span style='color: #660000'><i><b>" . $usernick . "</b> logged out on " . create_date($board_config['default_dateformat'], time(), $board_config['board_timezone'])."</i></span>");
	}
}


?>