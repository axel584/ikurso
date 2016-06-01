-- supprime les lignes "non française"
delete from personoj where lingvo!='fr';

ALTER TABLE demandaro CONVERT TO CHARACTER SET utf8;
ALTER TABLE eraraj_lecionoj CONVERT TO CHARACTER SET utf8;

-- suppression des tables mw_
DROP TABLE `mw_archive`, `mw_categorylinks`, `mw_groups`, `mw_hitcounter`, `mw_image`, `mw_imagelinks`, `mw_interwiki`, `mw_ipblocks`, `mw_logging`, `mw_math`, `mw_objectcache`, `mw_oldimage`, `mw_page`, `mw_pagelinks`, `mw_querycache`, `mw_recentchanges`, `mw_revision`, `mw_searchindex`, `mw_site_stats`, `mw_text`, `mw_user`, `mw_user_groups`, `mw_user_rights`, `mw_validate`, `mw_watchlist`;
-- suppression des tables wikipedias :
DROP TABLE `wikiarchive`, `wikicategorylinks`, `wikiexternallinks`, `wikihitcounter`, `wikiimage`, `wikiimagelinks`, `wikiinterwiki`, `wikiipblocks`, `wikijob`, `wikilogging`, `wikimath`, `wikiobjectcache`, `wikioldimage`, `wikipage`, `wikipagelinks`, `wikiquerycache`, `wikirecentchanges`, `wikirevision`, `wikisearchindex`, `wikisite_stats`, `wikitemplatelinks`, `wikitext`, `wikitrackbacks`, `wikitranscache`, `wikiuser`, `wikiuser_groups`, `wikiuser_newtalk`, `wikivalidate`, `wikiwatchlist`;

ALTER TABLE  `protokolo` CHANGE  `teksto`  `teksto` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL
