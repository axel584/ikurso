<?php
function smarty_modifier_time_visit($ts)
{

	$h = floor( $ts / 3600 );
	$m = floor( ($ts  - $h*3600) / 60 );
	$s = floor( ($ts - $h*3600 - $m * 60) );

	if($h != 0)
	{
		 $return[] = $h;
		 $return[] = $m;
	}
	elseif($m != 0) 
	{
		$return[] = $m;
	}
	$return[] = $s;
	
	// h + min + sec
	if(sizeof($return)===3)
	{
		return setToLength($h, 2) . ":" . setToLength($m,2) . ":" . setToLength($s,2);
	}
	// min + sec
	if(sizeof($return) == 2)
	{
		return vsprintf($GLOBALS['lang']['generique_tempsvisite'], $return); 
	}
	// only sec
	else
	{
		return vsprintf($GLOBALS['lang']['visites_sec'], $return); 
	}
}
?>