<?php
function smarty_modifier_time($ts)
{
	$h = floor($ts / 3600);
	$m = floor( ($ts  - $h*3600) / 60 );
	$s = floor( ($ts - $h*3600 - $m * 60) );
	return setToLength($h, 2) . ":" . setToLength($m,2) . ":" . setToLength($s,2);
}
?>