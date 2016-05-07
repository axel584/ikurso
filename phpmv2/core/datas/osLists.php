<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: osLists.php 58 2006-08-26 05:26:31Z matthieu_ $

// infos os
$GLOBALS['osNameToId'] = Array(
	'Windows NT 6.0' => 'WVI',
	'Windows Vista'  => 'WVI',
	'Windows NT 5.2' => 'WS3',
	'Windows Server 2003' => 'WS3',
	'Windows NT 5.1' => 'WXP',
	'Windows XP'     => 'WXP',
	'Win98'          => 'W98',
	'Windows 98'     => 'W98',
	'Windows NT 5.0' => 'W2K',
	'Windows 2000'   => 'W2K',
	'Windows NT 4.0' => 'WNT',
	'WinNT'          => 'WNT',
	'Windows NT'     => 'WNT',
	'Win 9x 4.90'    => 'WME',
	'Win 9x 4.90'    => 'WME',
	'Windows Me'     => 'WME',
	'Win32'          => 'W95',
	'Win95'          => 'W95',		
	'Windows 95'     => 'W95',
	'Mac_PowerPC'    => 'MAC', 
	'Mac PPC'        => 'MAC',
	'PPC'            => 'MAC',
	'Mac PowerPC'    => 'MAC',
	'Mac OS'         => 'MAC',
	'Linux'          => 'LIN',
	'SunOS'          => 'SOS', 
	'FreeBSD'        => 'BSD', 
	'AIX'            => 'AIX', 
	'IRIX'           => 'IRI', 
	'HP-UX'          => 'HPX', 
	'OS/2'           => 'OS2', 
	'NetBSD'         => 'NBS',
	'Unknown'        => 'UNK' 
	);

$GLOBALS['osIdToName'] = array_flip($GLOBALS['osNameToId']);

$GLOBALS['osNameToIdForGraph'] = Array(
	'WVI' => 'Win Vista',
	'WS3' => 'Win S2003',
	'WXP' => 'Win XP',
	'W98' => 'Win 98',
	'W2K' => 'Win 2000', 
	'WNT' => 'Win NT',
	'WME' => 'Win Me',
	'W95' => 'Win 95',		
	'WCE' => 'Win CE',
	'MAC' => 'Mac OS',
	'LIN' => 'Linux', 
	'INC' => 'Inconnu', 
	'SOS' => 'SunOS', 
	'BSD' => 'FreeBSD', 
	'AIX' => 'AIX',
	'IRI' => 'IRIX', 
	'HPX' => 'HPX', 
	'OS2' => 'OS/2', 
	'NBS' => 'NetBSD',
	'UNK' => 'Unknown',
	);
?>