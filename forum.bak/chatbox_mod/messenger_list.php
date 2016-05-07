<?php
/***************************************************************************
 *							messenger_list.php
 *							-------------------
 *	begin				:	Sun July 08 2002
 *	copyright			:	(C) 2002 Smartor
 *	email				:	smartor_xp@hotmail.com
 *
 *	$Id: messenger_list.php,v 1.18 2002/7/23 23:13:27 hnt Exp $
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
<link rel="stylesheet" href="<?php echo $chatbox_config['stylesheet']?>" type="text/css">
</head>
<body leftmargin="2" topmargin="2" marginwidth="0" marginheight="0" link="#006699">
<div align="left"><span class="chatbox">

<?php

// Check User Session
if (!$userdata['session_logged_in'])
{
	echo "Please login to chat</body></html>";
	exit();
}

echo who_are_on_chat();

?>

</span></div>

</body>
</html>

<?php

function who_are_on_chat()
{
	global $chatbox_config, $table_chatbox_session_name, $db;

	$sql = "SELECT * FROM " . $table_chatbox_session_name;

    if (!$sol = $db->sql_query($sql))
	{
		die("SQL Error in function who_are_on_chat()");
	}

	$isimler[0] = $db->sql_numrows($sol);
	
	$i = 1;
	
	while ($record = $db->sql_fetchrow($sol))
	{
		$isimler[$i++] = $record['username'];
	}

	$online = "<table cellpadding=\"2\" cellspacing=\"0\" \"border=0\" width=\"100%\" class=\"table0\"><tr><td class=\"chatbox\" title=\"\"><b>Online</b>:</td></tr></table><table cellpadding=\"2\" cellspacing=\"0\" \"border=0\" width=\"100%\" class=\"table1\"><tr><td class=\"chatbox\">";

	$away = "<table cellpadding=\"2\" cellspacing=\"0\" \"border=0\" width=\"100%\" class=\"table0\"><tr><td class=\"chatbox\" title=\"\"><b>Away</b>:</td></tr></table><table cellpadding=\"2\" cellspacing=\"0\" \"border=0\" width=\"100%\" class=\"table1\"><tr><td class=\"chatbox\">";

	for($s = 1; $s <= $isimler[0]; $s++)
	{
		if(isuser_active($isimler[$s]) == "online")
		{
			$online .= $isimler[$s]."<br />";
		}
		if(isuser_active($isimler[$s]) == "away")
		{
			$away .= $isimler[$s]."<br />";
		}
	}

	$online .= "</td></tr></table>";
	$away .= "</td></tr></table>";

	$chatters = $online . $away;

	return $chatters;
}

?>