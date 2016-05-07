<?php
	
$allQueries = array(
	
'ALTER TABLE '.T_VISIT.' CHANGE `browser_lang` `browser_lang` VARCHAR( 60 ) '
	);

foreach($allQueries as $query)
{
	query($query);
}	
	
	
?>