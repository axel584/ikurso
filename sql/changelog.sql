-- Pour passer en V1 :

-- supprime les lignes "non française"
delete from personoj where lingvo!='fr';

ALTER TABLE demandaro CONVERT TO CHARACTER SET utf8;
ALTER TABLE eraraj_lecionoj CONVERT TO CHARACTER SET utf8;

-- suppression des tables mw_
DROP TABLE `mw_archive`, `mw_categorylinks`, `mw_groups`, `mw_hitcounter`, `mw_image`, `mw_imagelinks`, `mw_interwiki`, `mw_ipblocks`, `mw_logging`, `mw_math`, `mw_objectcache`, `mw_oldimage`, `mw_page`, `mw_pagelinks`, `mw_querycache`, `mw_recentchanges`, `mw_revision`, `mw_searchindex`, `mw_site_stats`, `mw_text`, `mw_user`, `mw_user_groups`, `mw_user_rights`, `mw_validate`, `mw_watchlist`;
-- suppression des tables wikipedias :
DROP TABLE `wikiarchive`, `wikicategorylinks`, `wikiexternallinks`, `wikihitcounter`, `wikiimage`, `wikiimagelinks`, `wikiinterwiki`, `wikiipblocks`, `wikijob`, `wikilogging`, `wikimath`, `wikiobjectcache`, `wikioldimage`, `wikipage`, `wikipagelinks`, `wikiquerycache`, `wikirecentchanges`, `wikirevision`, `wikisearchindex`, `wikisite_stats`, `wikitemplatelinks`, `wikitext`, `wikitrackbacks`, `wikitranscache`, `wikiuser`, `wikiuser_groups`, `wikiuser_newtalk`, `wikivalidate`, `wikiwatchlist`;

ALTER TABLE  `protokolo` CHANGE  `teksto`  `teksto` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL


-- Pour passer en V2 :
delete from kursoj where lingvo<>'FR';
delete from landoj where lingvo<>'FR';
delete from lecionoj where lingvo<>'FR';
delete from monatoj where lingvo<>'FR';
delete from personoj where lingvo<>'FR';
delete from protokolo where lingvo<>'FR';
delete from rajtoj where lingvo<>'FR';

ALTER TABLE kursoj DROP lingvo;
ALTER TABLE landoj DROP lingvo;
ALTER TABLE lecionoj DROP lingvo;
ALTER TABLE monatoj DROP lingvo;
ALTER TABLE protokolo DROP lingvo;
ALTER TABLE rajtoj DROP lingvo;
ALTER TABLE personoj CHANGE `ekdato` `ekdato` DATE NOT NULL;
ALTER TABLE personoj CHANGE `naskigxdato` `naskigxdato` DATE DEFAULT NULL;
Drop table lingvoj;






-- ne fonctionne pas en V2, on le garde pour le V3
ALTER TABLE personoj DROP lingvo;
