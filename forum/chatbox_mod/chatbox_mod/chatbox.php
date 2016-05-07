<?php
/***************************************************************************
 *								chatbox.php
 *							-------------------
 *	begin				:	Sun July 07 2002
 *	copyright			:	(C) 2002 Smartor
 *	email				:	smartor_xp@hotmail.com
 *
 *	$Id: chatbox.php,v 1.17 2002/7/22 16:44:13 hnt Exp $
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

$nick = $userdata['username'];

?>
<html>
<head>
<title><?php echo $nick . " - " . $lang['ChatBox'] . " " . _CHATBOX_VERSION; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $lang['ENCODING']; ?>">
<link rel="stylesheet" href="<?php echo $chatbox_config['stylesheet']?>" type="text/css">
<script language="JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features)
{
	window.open(theURL,winName,features);
}
//-->
</script>
</head>
<?php

// Check User Session
if (!$userdata['session_logged_in'])
{
	echo "<body>Please login to chat</body></html>";
	exit();
}

user_join($nick,"online");

write_msg(_CHATBOX_SYSTEM_MSG,"<span style='color: #006600'><b><i>$nick</b> has joined chat on " . create_date($board_config['default_dateformat'], time(), $board_config['board_timezone']) . "</i></span>","");

?>

<frameset rows="*" cols="30%,*" scrolling=NO noresize framespacing=0 frameborder=NO border="0" onUnload="MM_openBrWindow('<?php echo append_sid("chatbox_drop.php"); ?>', 'drop', 'scrollbars=no, width=225, height=100')">

<frame src="<?php echo append_sid("messenger_list.php"); ?>" name="who" noresize marginwidth="0" marginheight="0">

<frameset rows="80%, 20%" cols="*" scrolling=NO noresize framespacing=0 frameborder=NO border="0">

		<frame src="<?php echo append_sid("messenger_view.php"); ?>" name="ekran" noresize marginwidth="0" marginheight="0">
    	
		<frame src="<?php echo append_sid("messenger_send.php"); ?>" scrolling="no" name="sender" noresize marginwidth="0" marginheight="0">

</frameset>

</frameset>

<noframes>
<body>Your browser does not support this feature!!!</body>
</noframes>

</html>