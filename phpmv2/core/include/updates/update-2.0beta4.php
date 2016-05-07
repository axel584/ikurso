<?php

	// add file names table 
	// changement in visit because of newsletter bug
	// changed archive for strict mysql 5 compliant
	
$allQueries = array(

'DROP TABLE IF EXISTS '.T_A_FILE,
"CREATE TABLE ".T_A_FILE." (
  id int(10) unsigned NOT NULL auto_increment,
  name text,
  PRIMARY KEY (id)
) TYPE=MyISAM
",
"ALTER TABLE ".T_VISIT." DROP `browser`",
"ALTER TABLE ".T_VISIT." ADD `entry_idpageurl` INT( 11 ) NOT NULL ",
	
"	ALTER TABLE ".T_ARCHIVES." 
	CHANGE `vis_period` `vis_period` LONGTEXT NULL DEFAULT NULL ,
	CHANGE `vis_nb_vis` `vis_nb_vis` TEXT NULL ,
	CHANGE `vis_st` `vis_st` TEXT NULL ,
	CHANGE `vis_lt` `vis_lt` TEXT NULL ,
	CHANGE `pag_st` `pag_st` TEXT NULL ,
	CHANGE `pag_lt` `pag_lt` TEXT NULL ,
	CHANGE `vis_lth` `vis_lth` TEXT NULL ,
	CHANGE `vis_nb_pag` `vis_nb_pag` TEXT NULL ,
	CHANGE `vis_pag_grp` `vis_pag_grp` LONGTEXT NULL ,
	CHANGE `vis_country` `vis_country` TEXT NULL ,
	CHANGE `vis_continent` `vis_continent` TEXT NULL ,
	CHANGE `vis_provider` `vis_provider` LONGTEXT NULL ,
	CHANGE `vis_config` `vis_config` LONGTEXT NULL ,
	CHANGE `vis_os` `vis_os` TEXT NULL ,
	CHANGE `vis_browser` `vis_browser` TEXT NULL ,
	CHANGE `vis_browser_type` `vis_browser_type` TEXT NULL ,
	CHANGE `vis_resolution` `vis_resolution` LONGTEXT NULL ,
	CHANGE `vis_plugin` `vis_plugin` TEXT NULL ,
	CHANGE `vis_search_engine` `vis_search_engine` LONGTEXT NULL ,
	CHANGE `vis_keyword` `vis_keyword` LONGTEXT NULL ,
	CHANGE `vis_site` `vis_site` LONGTEXT NULL ,
	CHANGE `vis_partner` `vis_partner` LONGTEXT NULL ,
	CHANGE `vis_newsletter` `vis_newsletter` LONGTEXT NULL ,
	CHANGE `int_lt` `int_lt` TEXT NULL ,
	CHANGE `int_st` `int_st` TEXT NULL ,
	CHANGE `int_referer_type` `int_referer_type` LONGTEXT NULL ,
	CHANGE `int_search_engine` `int_search_engine` LONGTEXT NULL ,
	CHANGE `int_keyword` `int_keyword` LONGTEXT NULL ,
	CHANGE `int_site` `int_site` LONGTEXT NULL ,
	CHANGE `int_partner` `int_partner` LONGTEXT NULL ,
	CHANGE `int_newsletter` `int_newsletter` LONGTEXT NULL ,
	CHANGE `int_country` `int_country` LONGTEXT NULL ,
	CHANGE `int_continent` `int_continent` LONGTEXT NULL ,
	CHANGE `int_config` `int_config` LONGTEXT NULL ,
	CHANGE `int_os` `int_os` LONGTEXT NULL ,
	CHANGE `int_browser` `int_browser` LONGTEXT NULL ,
	CHANGE `int_resolution` `int_resolution` LONGTEXT NULL 
	"
	);
foreach($allQueries as $query)
{
	query($query);
}	
	
	
?>