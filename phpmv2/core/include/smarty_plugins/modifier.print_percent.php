<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

function smarty_modifier_print_percent($string)
{
	if(substr($string, 0, 1) === '-')
	{
		$span = "negatif";
	}
	else
	{
		$span = "positif";
	}
	return "<span class=\"$span\">$string</span>";
}

?>
