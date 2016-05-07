<?php
	
$allQueries = array(
	'ALTER TABLE '.T_ARCHIVES.' CHANGE `vis_period` `vis_period` LONGBLOB DEFAULT NULL ,
	CHANGE `vis_nb_vis` `vis_nb_vis` BLOB DEFAULT NULL ,
	CHANGE `vis_st` `vis_st` BLOB DEFAULT NULL ,
	CHANGE `vis_lt` `vis_lt` BLOB DEFAULT NULL ,
	CHANGE `pag_st` `pag_st` BLOB DEFAULT NULL ,
	CHANGE `pag_lt` `pag_lt` BLOB DEFAULT NULL ,
	CHANGE `vis_lth` `vis_lth` BLOB DEFAULT NULL ,
	CHANGE `vis_nb_pag` `vis_nb_pag` BLOB DEFAULT NULL ,
	CHANGE `vis_pag_grp` `vis_pag_grp` LONGBLOB DEFAULT NULL ,
	CHANGE `vis_country` `vis_country` BLOB DEFAULT NULL ,
	CHANGE `vis_continent` `vis_continent` BLOB DEFAULT NULL ,
	CHANGE `vis_provider` `vis_provider` LONGBLOB DEFAULT NULL ,
	CHANGE `vis_config` `vis_config` LONGBLOB DEFAULT NULL ,
	CHANGE `vis_os` `vis_os` BLOB DEFAULT NULL ,
	CHANGE `vis_browser` `vis_browser` BLOB DEFAULT NULL ,
	CHANGE `vis_browser_type` `vis_browser_type` BLOB DEFAULT NULL ,
	CHANGE `vis_resolution` `vis_resolution` LONGBLOB DEFAULT NULL ,
	CHANGE `vis_plugin` `vis_plugin` BLOB DEFAULT NULL ,
	CHANGE `vis_search_engine` `vis_search_engine` LONGBLOB DEFAULT NULL ,
	CHANGE `vis_keyword` `vis_keyword` LONGBLOB DEFAULT NULL ,
	CHANGE `vis_site` `vis_site` LONGBLOB DEFAULT NULL ,
	CHANGE `vis_partner` `vis_partner` LONGBLOB DEFAULT NULL ,
	CHANGE `vis_newsletter` `vis_newsletter` LONGBLOB DEFAULT NULL ,
	CHANGE `int_lt` `int_lt` BLOB DEFAULT NULL ,
	CHANGE `int_st` `int_st` BLOB DEFAULT NULL ,
	CHANGE `int_referer_type` `int_referer_type` LONGBLOB DEFAULT NULL ,
	CHANGE `int_search_engine` `int_search_engine` LONGBLOB DEFAULT NULL ,
	CHANGE `int_keyword` `int_keyword` LONGBLOB DEFAULT NULL ,
	CHANGE `int_site` `int_site` LONGBLOB DEFAULT NULL ,
	CHANGE `int_partner` `int_partner` LONGBLOB  DEFAULT NULL ,
	CHANGE `int_newsletter` `int_newsletter` LONGBLOB DEFAULT NULL ,
	CHANGE `int_country` `int_country` LONGBLOB DEFAULT NULL ,
	CHANGE `int_continent` `int_continent` LONGBLOB DEFAULT NULL ,
	CHANGE `int_config` `int_config` LONGBLOB DEFAULT NULL ,
	CHANGE `int_os` `int_os` LONGBLOB DEFAULT NULL ,
	CHANGE `int_browser` `int_browser` LONGBLOB DEFAULT NULL ,
	CHANGE `int_resolution` `int_resolution` LONGBLOB DEFAULT NULL ',
'ALTER TABLE '.T_CATEGORY.' CHANGE `name` `name` VARCHAR( 100 ) '
);

foreach($allQueries as $query)
{
	query($query);
}	
	
	
?>