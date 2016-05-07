<?php
/***************************************************************************
 *							messenger_send.php
 *							-------------------
 *	begin				:	Sun July 08 2002
 *	copyright			:	(C) 2002 Smartor
 *	email				:	smartor_xp@hotmail.com
 *
 *	$Id: messenger_send.php,v 1.18b 2002/8/03, 20:15:39 hnt Exp $
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

// Check User Session
if (!$userdata['session_logged_in'])
{
	echo "Please login to chat";
	exit();
}

$nick = $userdata['username'];

?>

<html>
<head>

<title><?php echo $lang['ChatBox']; ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $lang['ENCODING']; ?>">

<link rel="stylesheet" href="<?php echo $chatbox_config['stylesheet']?>" type="text/css">

<script language="JavaScript">
<!--

function clear_text()
{
	if (document.post.message.value == "Enter Message")
	{
		document.post.message.value = "";
	}
}

function submitonce()
{
	document.post.sent.value = document.post.message.value;
	document.post.message.value = "";	
}

//-->
</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onload="window.scrollTo(0,99999);" link="#006699">

<?php
if (isset($chatbox_config['vietuni']))
{
?>
	<script language="JavaScript1.2" src="<?php echo $chatbox_config['vietuni']; ?>" type="text/javascript"></script>
<?php
}
?>

<form name="post" action="<?php echo append_sid('messenger_view.'.$phpEx); ?>" target="ekran" method="POST" autocomplete=off onsubmit="submitonce()">

<input type="hidden" name="nick" value="<?php echo $nick; ?>">

<table class="formarea" width="100%">
	<tr>
		<td align="center">
<?php
if (isset($chatbox_config['vietuni']))
{
?>
		Typer:
		<input type=radio name="switcher" accesskey="z" value="OFF" checked onfocus="setTypingMode(0); document.post.message.focus();">Default&nbsp;

		<input type=radio name="switcher" accesskey="x" value="TELEX" onfocus="setTypingMode(1); document.post.message.focus();">Telex
<?php
}
?>
		<br />
		<input type="text" name="message" size="30" maxlength="<?php echo $chatbox_config['max_msg_len']; ?>" value="Enter Message" onFocus="clear_text()" <?php if (isset($chatbox_config['vietuni'])) echo " onkeyup='initTyper(this);'"; ?> class="editbox">
		<input type="hidden" name="sent" value="">
		<input type="submit" name="submit_button" value="<?php echo $lang['Send']; ?>" class="button"><br />&nbsp;<br />
		<a href="javascript:void(0);" onclick="window.open('../posting.php?mode=smilies', '_chatboxsmilies', 'HEIGHT=300,resizable=yes,scrollbars=yes,WIDTH=275');">Smilies Box</a>
		</td>
	</tr>
</table>

<!-- DONOT REMOVE THIS LINE AS YOUR RESPECT TO THE AUTHOR--><center>&copy;2002 ChatBox by <a href="http://smartor.is-root.com" target="_blank">Smartor</a></center>

</form>
</body>
</html>