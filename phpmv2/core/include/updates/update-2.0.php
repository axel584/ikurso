<?php
// added compression 
// added simple archiving
// added faster visitors detection using md5
// idem for page detection

$allQueries = array(
"ALTER TABLE ".T_ARCHIVES." ADD `nb_uniq_vis_returning` INT NOT NULL",
"ALTER TABLE ".T_ARCHIVES." ADD `compressed` TINYINT( 1 ) UNSIGNED DEFAULT '0' NOT NULL"  ,
"ALTER TABLE ".T_ARCHIVES." ADD `simple` TINYINT( 1 ) UNSIGNED DEFAULT '0' NOT NULL"  ,
"ALTER TABLE ".T_VISIT." ADD `md5config` CHAR( 32 ) NOT NULL",
"CREATE TABLE ".T_PAGE_MD5URL." (
  `idpage_md5url` int(10) unsigned NOT NULL auto_increment,
  `idpage` int(10) unsigned NOT NULL default '0',
  `md5url` char(32) default NULL,
  `idpage_url` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`idpage_md5url`),
  KEY `idpage` (`idpage`),
  KEY `url` (`md5url`),
  KEY `idpage_url` (`idpage_url`)
)"


);


foreach($allQueries as $query)
{
	query($query);
}	
?>