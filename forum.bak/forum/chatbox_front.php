<?php
/***************************************************************************
 *							 chatbox_front.php
 *							-------------------
 *	begin				:	Sun July 07 2002
 *	copyright			:	(C) 2002 Smartor
 *	email				:	smartor_xp@hotmail.com
 *
 *	$Id: chatbox_front.php, v1.2.0 2002/11/11 17:54:51 ngoctu Exp $
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
set_magic_quotes_runtime(0);

include_once($phpbb_root_path . 'config.'.$phpEx);

$table_chatbox_session_name = $table_prefix . 'chatbox_session';

// Kill Ghosts
$sql = "DELETE FROM " . $table_chatbox_session_name . " WHERE lastactive < '" . (time() - 300) . "'";
if (!$result = $db->sql_query($sql))
{
	message_die(GENERAL_ERROR, "Could not check session for Ghosts", "", __LINE__, __FILE__, $sql);
}

// Get all remain sessions
$sql = 'SELECT * FROM ' . $table_chatbox_session_name;
if (!$sol = $db->sql_query($sql))
{
	message_die(GENERAL_ERROR, "Could not query ChatBox Session information", "", __LINE__, __FILE__, $sql);
}

$howmanychat = $db->sql_numrows($sol); // Return this

$isimler[0] = $howmanychat;

$i = 1;

while ($record = $db->sql_fetchrow($sol))
{
	$isimler[$i++] = $record['username'];
}

$chatters = $isimler[1];

for($s = 2; $s <= $isimler[0]; $s++)
{
	$chatters .= ", $isimler[$s]"; // Return this
}
?>