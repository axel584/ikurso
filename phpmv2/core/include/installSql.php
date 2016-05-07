<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: installSql.php 72 2006-09-11 10:47:57Z matthieu_ $

if(!defined("DB_TABLES_PREFIX"))
{
	trigger_error("Error, tables name constants are not defined properly. Please go back and try to set a prefix for the tables name.", E_USER_ERROR);
}

$create['a_category'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_category'." (
  id int(10) unsigned NOT NULL auto_increment,
  name varchar(100) default NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM
";

$create['a_config'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_config'." (
  id int(10) unsigned NOT NULL auto_increment,
  name varchar(100) default NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM
";


$create['a_keyword'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_keyword'." (
  id int(10) unsigned NOT NULL auto_increment,
  name text,
  PRIMARY KEY  (id)
) TYPE=MyISAM
";


$create['a_newsletter'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_newsletter'." (
  id int(11) NOT NULL auto_increment,
  name varchar(60) NOT NULL default '',
  PRIMARY KEY  (id)
) TYPE=MyISAM
";

$create['a_page'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_page'." (
  id int(10) unsigned NOT NULL auto_increment,
  name text,
  PRIMARY KEY  (id)
) TYPE=MyISAM
";

$create['a_file'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_file'." (
  id int(10) unsigned NOT NULL auto_increment,
  name text,
  PRIMARY KEY (id)
) TYPE=MyISAM
";


$create['a_partner_name'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_partner_name'." (
  id int(10) unsigned NOT NULL auto_increment,
  name varchar(100) default NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM
";


$create['a_partner_url'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_partner_url'." (
  id int(11) NOT NULL auto_increment,
  name text NOT NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM
";


$create['a_provider'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_provider'." (
  id int(10) unsigned NOT NULL auto_increment,
  name varchar(100) default NULL,
  PRIMARY KEY  (id),
  KEY name (name)
) TYPE=MyISAM
";


$create['a_resolution'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_resolution'." (
  id int(11) NOT NULL auto_increment,
  name varchar(20) NOT NULL default '',
  PRIMARY KEY  (id)
) TYPE=MyISAM
";


$create['a_search_engine'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_search_engine'." (
  id int(10) unsigned NOT NULL auto_increment,
  name varchar(100) default NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM
";


$create['a_site'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_site'." (
  id int(10) unsigned NOT NULL auto_increment,
  name text,
  PRIMARY KEY  (id)
) TYPE=MyISAM
";


$create['a_vars_name'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_vars_name'." (
  id int(11) NOT NULL auto_increment,
  name varchar(255) NOT NULL default '',
  PRIMARY KEY  (id)
) TYPE=MyISAM
";


$create['a_vars_value'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'a_vars_value'." (
  id int(11) NOT NULL auto_increment,
  name varchar(255) NOT NULL default '',
  PRIMARY KEY  (id)
) TYPE=MyISAM
";

$create['archives'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'archives'." (
  idarchives int(10) unsigned NOT NULL auto_increment,
  idsite int(10) unsigned NOT NULL default '0',
  done tinyint(4) NOT NULL default '0',
  period tinyint(1) NOT NULL default '0',
  `simple` tinyint(4) NOT NULL default '0',
  date1 varchar(10) NOT NULL default '00:00:00',
  date2 varchar(10) NOT NULL default '00:00:00',
  nb_uniq_vis mediumint(8) unsigned NOT NULL default '0',
  nb_vis mediumint(8) unsigned NOT NULL default '0',
  nb_vis_returning int(8) NOT NULL default '0',
  nb_uniq_vis_returning int(11) NOT NULL default '0',
  nb_pag mediumint(8) unsigned NOT NULL default '0',
  nb_pag_returning int(8) NOT NULL default '0',
  nb_uniq_pag smallint(5) unsigned NOT NULL default '0',
  nb_max_pag smallint(5) unsigned NOT NULL default '0',
  nb_vis_1pag mediumint(8) unsigned NOT NULL default '0',
  nb_vis_1pag_returning mediumint(8) NOT NULL default '0',
  sum_vis_lth int(10) unsigned NOT NULL default '0',
  sum_vis_lth_returning int(10) NOT NULL default '0',
  nb_direct mediumint(8) unsigned NOT NULL default '0',
  nb_search_engine mediumint(8) unsigned NOT NULL default '0',
  nb_site mediumint(8) unsigned NOT NULL default '0',
  nb_newsletter mediumint(8) unsigned NOT NULL default '0',
  nb_partner mediumint(8) unsigned NOT NULL default '0',
  vis_period longblob,
  vis_nb_vis blob,
  vis_st blob,
  vis_lt blob,
  pag_st blob,
  pag_lt blob,
  vis_lth blob,
  vis_nb_pag blob,
  vis_pag_grp longblob,
  vis_country blob,
  vis_continent blob,
  vis_provider longblob,
  vis_config longblob,
  vis_os blob,
  vis_browser blob,
  vis_browser_type blob,
  vis_resolution longblob,
  vis_plugin blob,
  vis_search_engine longblob,
  vis_keyword longblob,
  vis_site longblob,
  vis_partner longblob,
  vis_newsletter longblob,
  int_lt blob,
  int_st blob,
  int_referer_type longblob,
  int_search_engine longblob,
  int_keyword longblob,
  int_site longblob,
  int_partner longblob,
  int_newsletter longblob,
  int_country longblob,
  int_continent longblob,
  int_config longblob,
  int_os longblob,
  int_browser longblob,
  int_resolution longblob,
  `compressed` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (idarchives),
  KEY pmvindex1 (idsite),
  KEY pmvindex2 (done)
) TYPE=MyISAM
";


$create['category'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'category'." (
  idcategory int(10) unsigned NOT NULL auto_increment,
  complete_name varchar(255) NOT NULL default '',
  name varchar(100) default NULL,
  level smallint(5) unsigned NOT NULL default '0',
  idparent smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (idcategory)
) TYPE=MyISAM
";


$create['ip_ignore'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'ip_ignore'." (
  idip_ignore int(10) unsigned NOT NULL auto_increment,
  idsite int(10) unsigned NOT NULL default '0',
  ip_min int(11) default NULL,
  ip_max int(11) default NULL,
  PRIMARY KEY  (idip_ignore),
  KEY pmvindex (idsite)
) TYPE=MyISAM
";


$create['link_vp'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'link_vp'." (
  idlink_vp int(11) NOT NULL auto_increment,
  idvisit int(10) unsigned NOT NULL default '0',
  idpage int(10) unsigned NOT NULL default '0',
  idpage_ref int(11) unsigned NOT NULL default '0',
  total_time_page_ref int(10) unsigned default NULL,
  PRIMARY KEY  (idlink_vp),
  KEY pmvindex (idvisit,idpage)
) TYPE=MyISAM
";


$create['link_vpv'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'link_vpv'." (
  idlink_vp int(11) NOT NULL default '0',
  idvars int(11) NOT NULL default '0',
  PRIMARY KEY  (idlink_vp,idvars)
) TYPE=MyISAM
";


$create['newsletter'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'newsletter'." (
  idnewsletter int(10) unsigned NOT NULL auto_increment,
  idsite int(10) unsigned NOT NULL default '0',
  name varchar(90) default NULL,
  PRIMARY KEY  (idnewsletter),
  KEY pmvindex (idsite)
) TYPE=MyISAM
";


$create['page'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'page'." (
  idpage int(10) unsigned NOT NULL auto_increment,
  idcategory int(10) unsigned NOT NULL default '0',
  name varchar(255) default NULL,
  PRIMARY KEY  (idpage),
  KEY pmvindex (idcategory)
) TYPE=MyISAM
";

$create['page_md5url'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'page_md5url'." (
  idpage_md5url int(10) unsigned NOT NULL auto_increment,
  idpage int(10) unsigned NOT NULL default '0',
  md5url char(32) default NULL,
  idpage_url int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (idpage_md5url),
  KEY idpage (idpage),
  KEY url (md5url)
) TYPE=MyISAM 
";

$create['page_url'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'page_url'." (
  idpage_url int(10) unsigned NOT NULL auto_increment,
  url text,
  PRIMARY KEY  (idpage_url)
) TYPE=MyISAM
";



$create['query_log'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'query_log'." (
  idquery_log int(11) NOT NULL auto_increment,
  idsite int(11) NOT NULL default '0',
  query smallint(6) NOT NULL default '0',
  time float NOT NULL default '0',
  date date NOT NULL default '0000-00-00',
  daytime time NOT NULL default '00:00:00',
  PRIMARY KEY  (idquery_log)
) TYPE=MyISAM
";


$create['site'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'site'." (
  idsite int(10) unsigned NOT NULL auto_increment,
  name varchar(90) default NULL,
  logo varchar(15) default NULL,
  params_choice varchar(6) NOT NULL default 'all',
  params_names varchar(255) NOT NULL default '',
  PRIMARY KEY  (idsite)
) TYPE=MyISAM
";


$create['site_partner'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'site_partner'." (
  idsite_partner int(10) unsigned NOT NULL auto_increment,
  idsite int(10) unsigned NOT NULL default '0',
  name varchar(90) default NULL,
  PRIMARY KEY  (idsite_partner),
  KEY pmvindex (idsite)
) TYPE=MyISAM
";


$create['site_partner_url'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'site_partner_url'." (
  idsite_partner_url int(10) unsigned NOT NULL auto_increment,
  idsite_partner int(10) unsigned NOT NULL default '0',
  url varchar(200) default NULL,
  PRIMARY KEY  (idsite_partner_url)
) TYPE=MyISAM
";


$create['site_url'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'site_url'." (
  idsite_url int(10) unsigned NOT NULL auto_increment,
  idsite int(10) unsigned NOT NULL default '0',
  url varchar(255) default NULL,
  PRIMARY KEY  (idsite_url),
  KEY pmvindex (idsite)
) TYPE=MyISAM
";


$create['vars'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'vars'." (
  idvars int(10) unsigned NOT NULL auto_increment,
  name varchar(255) NOT NULL default '',
  int_value int(10) default NULL,
  varchar_value varchar(255) default NULL,
  PRIMARY KEY  (idvars),
  KEY pmvindex (name)
) TYPE=MyISAM
";


$create['version'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'version'." (
  `version` varchar(255) NOT NULL default ''
) TYPE=MyISAM
";


$create['visit'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'visit'." (
  idvisit int(10) unsigned NOT NULL auto_increment,
  idsite int(10) unsigned NOT NULL default '0',
  idcookie varchar(32) default NULL,
  returning tinyint(1) NOT NULL default '0',
  last_visit_time time NOT NULL default '00:00:00',
  server_date date default NULL,
  server_time time NOT NULL default '00:00:00',
  referer text,
  os char(3) default NULL,
  browser_name varchar(10) NOT NULL default '',
  browser_version varchar(20) NOT NULL default '',
  resolution varchar(9) default NULL,
  color_depth tinyint(2) unsigned default NULL,
  pdf tinyint(1) NOT NULL default '0',
  flash tinyint(1) NOT NULL default '0',
  java tinyint(1) NOT NULL default '0',
  director tinyint(1) NOT NULL default '0',
  quicktime tinyint(1) NOT NULL default '0',
  realplayer tinyint(1) NOT NULL default '0',
  windowsmedia tinyint(1) NOT NULL default '0',
  local_time time NOT NULL default '00:00:00',
  ip int(10) default NULL,
  hostname_ext varchar(100) default NULL,
  browser_lang varchar(60) default NULL,
  total_pages smallint(5) unsigned default NULL,
  total_time smallint(5) unsigned default NULL,
  country char(3) default NULL,
  continent char(3) default NULL,
  exit_idpage int(11) NOT NULL default '0',
  entry_idpage int(11) NOT NULL default '0',
  entry_idpageurl int(11) NOT NULL default '0',
  md5config varchar(32) NOT NULL default '',
  PRIMARY KEY  (idvisit),
  KEY idsite (idsite),
  KEY server_date (server_date),
  KEY md5config (md5config)
) TYPE=MyISAM 
";


$create['groups'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'groups'." (
  `idgroups` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(40) default NULL,
  `view` tinyint(1) unsigned default '0',
  `admin` tinyint(3) unsigned default '0',
  PRIMARY KEY  (`idgroups`)
) TYPE=MyISAM
";


$create['users'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'users'." (
  `login` varchar(20) NOT NULL default '',
  `password` varchar(255) default NULL,
  `alias` varchar(45) default NULL,
  `email` varchar(100) NOT NULL default '',
  `send_mail` int( 10 ) default NULL,
  `rss_hash` varchar(100) NOT NULL default '',
  `date_registered` int(11) default NULL,
  PRIMARY KEY  (`login`)
) TYPE=MyISAM
";



$create['users_link_groups'] = 
"CREATE TABLE ".DB_TABLES_PREFIX.'users_link_groups'." (
  `idsite` int(10) unsigned NOT NULL default '0',
  `idgroups` int(10) unsigned NOT NULL default '0',
  `login` varchar(20) NOT NULL default '0',
  PRIMARY KEY  (`idsite`,`idgroups`,`login`)
) TYPE=MyISAM
";


$createRecords[] = 
	"INSERT INTO ".DB_TABLES_PREFIX.'groups'." VALUES (1, 'admin', 1, 1)"
;

$createRecords[] = 
	"INSERT INTO ".DB_TABLES_PREFIX.'groups'." VALUES (2, 'view', 1, 0)"
;

$createRecords[] = 
	"INSERT INTO ".DB_TABLES_PREFIX.'users'." VALUES ('anonymous', NULL, 'Anonymous user', '', 0, 'ffffffffffffff493e8d55a4a75de3f90a1', NULL)"
	;
	
$createRecords[] = 
	"INSERT INTO ".DB_TABLES_PREFIX.'version'." VALUES ( '".PHPMV_VERSION."')"
	;


?>