<?php
/* 
 * This work is hereby released into the Public Domain.
 * To view a copy of the public domain dedication,
 * visit http://creativecommons.org/licenses/publicdomain/ or send a letter to
 * Creative Commons, 559 Nathan Abbott Way, Stanford, California 94305, USA.
 *
 */

/*
 * Path to Artichow
 */

$version = (int)substr(phpversion(), 0, 1);
if($version === 5 and ini_get("zend.ze1_compatibility_mode")) {
	$version = 4;
}

define('ARTICHOW', dirname(__FILE__).DIRECTORY_SEPARATOR.'php'.$version);

/*
 * Path where Artichow can find your TrueType fonts
 */

define('ARTICHOW_FONT', ARTICHOW.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'font');


/*
 * Patterns directory
 */

define('ARTICHOW_PATTERN', '../core/graphs/patterns');


/*
 * Images directory
 */

define('ARTICHOW_IMAGE', ARTICHOW.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'images');


/*
 * Enable/disable cache support
 */
define('ARTICHOW_CACHE', TRUE);

/*
 * Prefix for class names
 * No prefix by default
 */
define('ARTICHOW_PREFIX', '');

/*
 * Trigger errors when use of a deprecated feature
 */
define('ARTICHOW_DEPRECATED', TRUE);

/*
 * Fonts to use
 */
$fonts = array(
	'Tuffy',
	'TuffyBold',
	'TuffyBoldItalic',
	'TuffyItalic'
);

?>