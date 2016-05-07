<?php

	// bug site name too short for UTF8 (japanese for example) names
	
$allQueries = array(
	'ALTER TABLE `'.T_SITE.'` CHANGE `name` `name` VARCHAR( 60 )' 
	);

foreach($allQueries as $query)
{
	query($query);
}	
	
	
?>