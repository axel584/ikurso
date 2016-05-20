-- supprime les lignes "non française"
delete from personoj where lingvo!='fr';

ALTER TABLE demandaro CONVERT TO CHARACTER SET utf8;