<?php
	
$allQueries = array(
'ALTER TABLE '.T_CATEGORY.' CHANGE `name` `name` VARCHAR( 100 ) '
);

foreach($allQueries as $query)
{
	query($query);
}	
	
	
?>