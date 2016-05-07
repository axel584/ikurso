<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


function smarty_modifier_translate($string, $a_values = null)
{
	if(is_null($a_values))
	{
		$a_values = array();
	}
	if(!is_array($a_values))
	{
		$a_values = array( $a_values);
	}
	return vsprintf($GLOBALS['lang'][$string], $a_values);
}

?>
