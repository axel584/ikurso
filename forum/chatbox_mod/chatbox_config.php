<?php
/***************************************************************************
 *							chatbox_config.php
 *							-------------------
 *	begin				:	Sun July 07 2002
 *	copyright			:	(C) 2002 Smartor
 *	email				:	smartor_xp@hotmail.com
 *
 *	$Id: chatbox_config.php,v 1.19g 2002/8/03, 20:24:31 hnt Exp $
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

include_once($phpbb_root_path . './chatbox_mod/chatbox_function.'.$phpEx);

define("_CHATBOX_VERSION", "1.19g"); // DO NOT CHANGE THIS

// Find out how many people are using:
$sql = "DELETE FROM " . $table_chatbox_session_name . " WHERE lastactive < '" . (time() - 300) . "'";
if (!$result = $db->sql_query($sql))
{
	message_die(GENERAL_ERROR, "Could not check session for Ghosts", "", __LINE__, __FILE__, $sql);
}
$sql = 'SELECT * FROM ' . $table_chatbox_session_name;
if (!$result = $db->sql_query($sql))
{
	message_die(GENERAL_ERROR, "Could not query ChatBox Session information", "", __LINE__, __FILE__, $sql);
}
$howmanychat = $db->sql_numrows($result);

// for IAI system messages
define("_CHATBOX_SYSTEM_MSG", "<span style='color: #DD6900'>" . $board_config['iai_username'] . " Msg</span>");

// for normal IAI replies
define("_IAI_MSG", $board_config['iai_username']);

$chatbox_config = array (

	'refresh_time'	=>	'15',

	'delete_time'	=>	'900',

	'offline_time'	=>	'900',

	'away_time'		=>	'300',

	'stylesheet'	=>	'chatbox.css',

	'show_amount'	=>	'20',	// amount of chats to show

	'max_msg_len'	=>	'120',

	'direction'		=>	'1',	// 1 = new posts at bottom,  others = new posts at the top

	//'vietuni'		=>	'http://your-domain.com/path-to/vietuni.js', // change this with yours
);

?>