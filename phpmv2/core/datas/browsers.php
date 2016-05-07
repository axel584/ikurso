<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: browsers.php 29 2006-08-18 07:35:21Z matthieu_ $


$GLOBALS['browsers'] = array(
		'msie'							=> 'IE',
		'microsoft internet explorer'	=> 'IE',
		'internet explorer'				=> 'IE',
		'netscape6'						=> 'NS',
		'netscape'						=> 'NS',
		'galeon'						=> 'GA',
		'phoenix'						=> 'PX',
		'firefox'						=> 'FF',
		'mozilla firebird'				=> 'FB',
		'firebird'						=> 'FB',
		'seamonkey'						=> 'SM',
		'chimera'						=> 'CH',
		'camino'						=> 'CA',
		'safari'						=> 'SF',
		'k-meleon'						=> 'KM',
		'mozilla'						=> 'MO',
		'opera'							=> 'OP',
		'konqueror'						=> 'KO',
		'icab'							=> 'IC',
		'lynx'							=> 'LX',
		'links'							=> 'LI',
		'ncsa mosaic'					=> 'MC',
		'amaya'							=> 'AM',
		'omniweb'						=> 'OW',
		'hotjava'						=> 'HJ',
		'browsex'						=> 'BX',
		'amigavoyager'					=> 'AV',
		'amiga-aweb'					=> 'AW',
		'ibrowse'						=> 'IB',
		'unknown'						=> 'unk'
);

$GLOBALS['browsers_reverse'] = array_flip($GLOBALS['browsers']);

$GLOBALS['browsers_graph'] = $GLOBALS['browsers_reverse'];
$GLOBALS['browsers_graph']['IE'] = "IE";
$GLOBALS['browsers_graph']['FB'] = "Firebird";
?>