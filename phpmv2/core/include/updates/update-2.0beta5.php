<?php

	// add send_mail to users and adjust table varchar variables to 255
	
$allQueries = array(
"ALTER TABLE ".T_USERS."  ADD `send_mail` INT( 10 ) DEFAULT '0' NOT NULL AFTER `email`",
"ALTER TABLE ".T_VARS." CHANGE `name` `name` VARCHAR( 255 ) NOT NULL, CHANGE `varchar_value` `varchar_value` VARCHAR( 255 ) DEFAULT NULL "
);



foreach($allQueries as $query)
{
	query($query);
}	
?>