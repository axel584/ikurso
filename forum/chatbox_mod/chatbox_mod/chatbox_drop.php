<?php
/***************************************************************************
 *							 chatbox_drop.php
 *							-------------------
 *	begin				:	Sun July 08 2002
 *	copyright			:	(C) 2002 Smartor
 *	email				:	smartor_xp@hotmail.com
 *
 *	$Id: chatbox_drop.php,v 1.18 2002/7/24 00:14:05 hnt Exp $
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
include_once($phpbb_root_path . 'chatbox_mod/chatbox_config.'.$phpEx);

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

// Check User Session
if (!$userdata['session_logged_in'])
{
	echo "Please login to chat";
	exit();
}

$nick = $userdata['username'];

drop_user($nick);

?>
<html>

<head>

<title><?php echo $lang['ChatBox'] . " " . $lang['Logout']; ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $lang['ENCODING']; ?>">

<meta http-equiv="refresh" content="3; URL=javascript:close()">

<link rel="stylesheet" href="<?php echo $chatbox_config['stylesheet']?>" type="text/css">

</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" link="#006699">

<div align="center"><span class="chatbox">

<br /><br /><b><?php echo $nick; ?>,</b></br> <?php echo $lang['log_out_chat'] . create_date($board_config['default_dateformat'], time(), $board_config['board_timezone']); ?>

</span></div>

</body>
</html>