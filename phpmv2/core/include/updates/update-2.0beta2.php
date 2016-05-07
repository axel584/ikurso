<?php

	// new user management system
	// erase old tables
	// create new ones
	// add anonymous user
	// add basic groups
	
$allQueries = array(
	'DROP TABLE IF EXISTS '.T_USERS,
	'DROP TABLE IF EXISTS '.T_GROUPS,
	'DROP TABLE IF EXISTS '.T_USERS_LINK_GROUPS,
	"CREATE TABLE ".T_USERS." (
		  `login` varchar(20) NOT NULL default '',
		  `password` varchar(255) default NULL,
		  `alias` varchar(45) default NULL,
		  `email` varchar(100) NOT NULL default '',
		  `rss_hash` varchar(100) NOT NULL default '',
		  `date_registered` int(11) default NULL,
		  PRIMARY KEY  (`login`)
		) TYPE=MyISAM
	",
	"CREATE TABLE ".T_USERS_LINK_GROUPS." (
		  `idsite` int(10) unsigned NOT NULL default '0',
		  `idgroups` int(10) unsigned NOT NULL default '0',
		  `login` varchar(20) NOT NULL default '0',
		  PRIMARY KEY  (`idsite`,`idgroups`,`login`)
		) TYPE=MyISAM
	",
	"CREATE TABLE ".T_GROUPS." (
		  `idgroups` int(10) unsigned NOT NULL auto_increment,
		  `name` varchar(20) default NULL,
		  `view` tinyint(1) unsigned default '0',
		  `admin` tinyint(3) unsigned default '0',
		  PRIMARY KEY  (`idgroups`)
		) TYPE=MyISAM 
	",
	"INSERT INTO ".T_GROUPS." VALUES (1, 'admin', 1, 1)",
	"INSERT INTO ".T_GROUPS." VALUES (2, 'view', 1, 0)",
	"INSERT INTO ".T_USERS." VALUES ('anonymous', NULL, 'Anonymous user', '', 'ffffffffffffff493e8d55a4a75de3f90a1', NULL)",
	
	);

foreach($allQueries as $query)
{
	query($query);
}	
	

	
?>