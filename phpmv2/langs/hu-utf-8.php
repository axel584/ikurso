<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

//
// Technical information
//
$lang['auteur_nom'] = "Szabolcs Polgár"; // Translator's name
$lang['auteur_email'] = "http://www.hirtek.hu/"; // Translator's website
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "hu"; // iso language code
$lang['lang_libelle_en'] = "Magyar"; // hungarian language name
$lang['lang_libelle_fr'] = "Hongrois"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = ' '; // three thousand spells 3,000 in english
$lang['separateur_decimaux'] = ','; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | nyílt forráskódú weboldal statisztikai és web forgalom elemző alkalmazás"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, szkript, alkalmazás, szoftver, statisztika, hivatkozások, ingyenes, nyílt forráskódú, gpl, látogatók, látogatások, mysql, megtekintett oldalak, látogatás, látogatások száma, grafikon, böngészők, or, operációs rendszer, felbontás, nap, hét, hónap, bejegyzések, ország, hoszt, szolgáltatók, kereső motorok, kulcsszavak, belépő, kilépő oldal, kördiagram"; // Header keywords
$lang['head_description'] = "phpMyVisites | nyílt forráskódú weboldal statisztikai alkalmazás PHP/MySQL-ben fejlesztve, terjesztve a Gnu GPL licensz alatt."; // Header description
$lang['logo_description'] = "phpMyVisites | nyílt forráskódú weboldal statisztikai alkalmazás PHP/MySQL-ben fejlesztve, terjesztve a Gnu GPL licensz alatt."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Látogatások";
$lang['menu_pagesvues'] = "Oldalak";
$lang['menu_suivi'] = "Követés";
$lang['menu_provenance'] = "Forrás";
$lang['menu_configurations'] = "Beállítások";
$lang['menu_affluents'] = "Hivatkozások";
$lang['menu_listesites'] = "Weboldalak";
$lang['menu_bilansites'] = "Összefoglalás";
$lang['menu_jour'] = "Nap";
$lang['menu_semaine'] = "Hét";
$lang['menu_mois'] = "Hónap";
$lang['menu_annee'] = "Év";
$lang['menu_periode'] = "Vizsgált időszak: %s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "Hivatalos oldal";
$lang['liens_admin'] = "Adminisztráció";
$lang['liens_contacts'] = "Kapcsolat";

//
// Divers
//
$lang['generique_nombre'] = "Szám";
$lang['generique_tauxsortie'] = "Elhagyási ráta";
$lang['generique_ok'] = "Rendben";
$lang['generique_timefooter'] = "Oldal létrehozva %s másodperc alatt"; // Time in seconds
$lang['generique_divers'] = "Többi"; // (for the graphs)
$lang['generique_inconnu'] = "Ismeretlen"; // (for the graphs)
$lang['generique_vous'] = "... Te ?";
$lang['generique_traducteur'] = "Fordító";
$lang['generique_langue'] = "Nyelv";
$lang['generique_autrelangure'] = "Többi?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "Nem volt látogató ebben az időszakban."; 
$lang['generique_aucune_visite_bdd'] = "<b>Figyelem ! </b> Nem volt látogatás rögzítve. Ellenőrizd le, hogy beszúrtad-e a javascript kódokat az oldaladba a megfelelő phpMyVisites URL-lel. Segítséget a dokumentációban találhatsz.";
$lang['generique_aucune_site_bdd'] = "Nincs oldal rögzítve az adatbázisban. Új oldal hozzáadásához jelentkezzen be adminisztrátorként!";
$lang['generique_retourhaut'] = "Fel";
$lang['generique_tempsvisite'] = "%sp %smp"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%só"; // 4h means 4 hours
$lang['generique_siteno'] = "%s honlap"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "%s hírlevél"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "%s partner"; // Partner "version 2 announcement"
$lang['generique_general'] = "Általános";
$lang['generique_user'] = "%s felhasználó"; // User "Admin"
$lang['generique_previous'] = "Előző";
$lang['generique_next'] = "Következő";
$lang['generique_lowpop'] = "Alacsony látogatások kizárása a statisztikából";
$lang['generique_allpop'] = "Minden látogatást tartalmazza a statisztika";
$lang['generique_to'] = "-"; // 4 'to' 8
$lang['generique_total_on'] = ":"; // 4 to 8 'on' 10
$lang['generique_total'] = "Öszzes";
$lang['generique_information'] = "Információ";
$lang['generique_done'] = "Kész!";
$lang['generique_other'] = "Egyéb";
$lang['generique_description'] = "Leírás:";
$lang['generique_name'] = "Név:";
$lang['generique_variables'] = "Változó";
$lang['generique_logout'] = "Kijelentkezés";
$lang['generique_login'] = "Bejelentkezés";
$lang['generique_hits'] = "Találatok";
$lang['generique_errors'] = "Hibák";
$lang['generique_site'] = "Oldal";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "jelszó : "; // lowercase
$lang['login_login'] = "név : "; // lowercase
$lang['login_error'] = "Hibás bejelentkezés. Rossz név vagy jelszó.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "A %sphpMyVisites%s statisztikája jelszavas védelem alatt áll.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Kapcsolat";
$lang['contacts_langue'] = "Fordítások";
$lang['contacts_merci'] = "Köszönet";
$lang['contacts_auteur'] = "A phpMyVisites projekt szerzője, dokumentátora, készítője <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "A <strong>technikai kérdéseket, hibabejelentésket, javaslatokat</strong> a hivatalos weboldal fórumába küldhetitek el %s. Egyéb kívánságokat a hivatalos weboldal űrlapján keresztül várja a szerző."; // adresse du site
$lang['contacts_trad1'] = "Le szeretnéd fordítani a phpMyVisites-t a saját nyelvedre? Ne tétovázz, mert <strong> a phpMyVisites számít rád!</strong>";
$lang['contacts_trad2'] = "A phpMyVisites lefordítása (csak) néhány órába tellik, de gondolj arra, hogy <strong> így rengeteg felhasználónak segíthetsz</strong>.  A fordításhoz szükséges információkat %s a hivatalos phpMyVisites dokumentációban %s megtalálod."; // lien vers la doc
$lang['contacts_doc'] = "A %s hivatalos phpMyVisites dokumentáció %s tartalmaz minden olyan információt, ami az adott verzió telepítéséhez, beállításához kell."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Köszönöm <strong>%s</strong> fejlesztőknek a kiválló munkájukat.";
$lang['contacts_merci3'] = "A hivatalos weboldal köszönetnyilvánítás oldalán a phpMyVisites összes barátját megtalálhatod.";
$lang['contacts_merci2'] = "Hatalmas köszönet a phpMyVisites fordítóinak, akik közreműködtek abban, hogy a projekt átlépje az országhatárokat :";

//
// Rss & Mails
//
$lang['rss_titre'] = "%s oldal - %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Tovább a részletes statisztikákhoz";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Látogató információk";
$lang['visites_statistiques'] = "Statisztika";
$lang['visites_periodesel'] = "A kiválasztott időszakra";
$lang['visites_visites'] = "Látogatások";
$lang['visites_uniques'] = "Egyedi látogatók";
$lang['visites_pagesvues'] = "Megtekintett oldalak";
$lang['visites_pagesvisiteurs'] = "Oldalak látogatónként";
$lang['visites_pagesvisites'] = "Oldalak látogatónként"; 
$lang['visites_pagesvisitessign'] = "Oldalak fontos látogatónként"; 
$lang['visites_tempsmoyen'] = "Átlagos látogatási időtartam";
$lang['visites_tempsmoyenpv'] = "Átlagos oldal megtekintési időtartam";
$lang['visites_tauxvisite'] = "1 oldal látogatási aránya";
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Időszak összefoglalás";
$lang['visites_nbvisites'] = "Látogatások";
$lang['visites_aucunevivisite'] = "nincs látogatás"; // in the table, must be short
$lang['visites_recap'] = "Összefoglalás";
$lang['visites_unepage'] = "1 oldal"; // (graph)
$lang['visites_pages'] = "%s oldalak"; // 1-2 pages (graph)
$lang['visites_min'] = "%s p"; // 10-15 min (graph)
$lang['visites_sec'] = "%s mp"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Grafikon mutatja a statisztika összegzését";
$lang['visites_grapghrecaplongterm'] = "Grafikon mutatja a hosszú időszak statisztika összegzését";
$lang['visites_graphtempsvisites'] = "Grafikon mutatja a látogatók látogatási időtartamát";
$lang['visites_graphtempsvisitesimg'] = "Látogatók látogatási időtartama";
$lang['visites_graphheureserveur'] = "Grafikon mutatja a szerver óránkénti látogatását";
$lang['visites_graphheureserveurimg'] = "Látogatások a szerver ideje szerint";
$lang['visites_graphheurevisiteur'] = "Grafikon mutatja a látogatók óránkénti látogatását";
$lang['visites_graphheurelocalimg'] = "Látogatások a helyi idő szerint";
$lang['visites_longterm_statd'] = "Hosszú időszak vizsgálat (Napi időszak)";
$lang['visites_longterm_statm'] = "Hosszú időszak vizsgálat (Havi időszak)";

//
// Sites Summary
//
$lang['summary_title'] = "Honlap összefoglalás";
$lang['summary_stitle'] = "Összefoglalás";

//
// Frequency Part
//
$lang['frequence_titre'] = "Visszatérő látogatók";
$lang['frequence_nouveauxconnusgraph'] = "Grafikon mutatja az új és a visszatérő látogatókat";
$lang['frequence_nouveauxconnus'] = "Új és visszatérő látogatások";
$lang['frequence_titremenu'] = "Gyakoriság";
$lang['frequence_visitesconnues'] = "Visszatérő látogatások";
$lang['frequence_nouvellesvisites'] = "Új látogatások";
$lang['frequence_visiteursconnus'] = "Visszatérő látogatók";
$lang['frequence_nouveauxvisiteurs'] = "Új látogatók";
$lang['frequence_returningrate'] = "Visszatérési arány";
$lang['pagesvues_vispervisgraph'] = "Grafikon mutatja a látogatások számát látogatónként";
$lang['frequence_vispervis'] = "Látogatások száma látogatónként";
$lang['frequence_vis'] = "látogatás";
$lang['frequence_visit'] = "1 látogatás"; // (graph)
$lang['frequence_visits'] = "%s látogatás"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Oldal megtekintési információk";
$lang['pagesvues_joursel'] = "Kiválasztott nap";
$lang['pagesvues_jmoins7'] = "Nap - 7";
$lang['pagesvues_jmoins14'] = "Nap - 14";
$lang['pagesvues_moyenne'] = "(átlag)";
$lang['pagesvues_pagesvues'] = "Oldal megtekintések";
$lang['pagesvues_pagesvudiff'] = "Egyedi oldal megtekintések";
$lang['pagesvues_recordpages'] = "Egy látogató által meglátogatott oldalak legnagyobb száma";
$lang['pagesvues_tabdetails'] = "Megtekintett oldalak (%s - %s)"; // (from 1 to 21)
$lang['pagesvues_graphsnbpages'] = "Grafikon mutatja az oldalak látogatási számát";
$lang['pagesvues_graphnbvisitespageimg'] = "Megtekintett oldalak látogatási száma";
$lang['pagesvues_graphheureserveur'] = "Grafikon mutatja a szerver idő szerinti látogatások számát";
$lang['pagesvues_graphheureserveurimg'] = "Szerver idő szerinti látogatások";
$lang['pagesvues_graphheurevisiteur'] = "Grafikon mutatja a helyi idő szerinti látogatásokat";
$lang['pagesvues_graphpageslocalimg'] = "Helyi idő szerinti látogatások";
$lang['pagesvues_tempsparpage'] = "Idő oldalankén";
$lang['pagesvues_total_time'] = "Teljes idő";
$lang['pagesvues_avg_time'] = "Átlagos idő";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Látogató aktivitás";
$lang['suivi_pageentree'] = "Belépő oldalak";
$lang['suivi_pagesortie'] = "Kilépő oldalak";
$lang['suivi_tauxsortie'] = "Kilépési arány";
$lang['suivi_pageentreehits'] = "Belépő találatok";
$lang['suivi_pagesortiehits'] = "Kilépő találatok";
$lang['suivi_singlepage'] = "Egyedüli oldalak látogatásai";

//
// Origin
//
$lang['provenance_titre'] = "Látogatók származása";
$lang['provenance_recappays'] = "Országok összefoglalása";
$lang['provenance_pays'] = "Országok";
$lang['provenance_paysimg'] = "Látogatók országonkénti diagramja";
$lang['provenance_fai'] = "Internet szolgáltatók";
$lang['provenance_nbpays'] = "Különböző országok száma : %s";
$lang['provenance_provider'] = "Szolgáltatók"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "Kontinens";
$lang['provenance_mappemonde'] = "Világtérkép";
$lang['provenance_interetspays'] = "Országok szerint";

//
// Setup
//
$lang['configurations_titre'] = "Látogató beállítások";
$lang['configurations_os'] = "Operációs Rendszer";
$lang['configurations_osimg'] = "Grafikon mutatja a látogató operációs rendszerének típusát";
$lang['configurations_navigateurs'] = "Böngészők";
$lang['configurations_navigateursimg'] = "Grafikon mutatja a látogatók böngészőjének típusát";
$lang['configurations_resolutions'] = "Képernyő felbontások";
$lang['configurations_resolutionsimg'] = "Grafikon mutatja a látogatók képernyő felbontásait";
$lang['configurations_couleurs'] = "Színmélység";
$lang['configurations_couleursimg'] = "Grafikon mutatja a látogatók színmélység beállítását";
$lang['configurations_rapport'] = "Normál/Szélesvásznú";
$lang['configurations_large'] = "Szélesvásznú";
$lang['configurations_normal'] = "Normál";
$lang['configurations_double'] = "Dupla képernyő";
$lang['configurations_plugins'] = "Bővítmények";
$lang['configurations_navigateursbytype'] = "Böngészők (típusonként)";
$lang['configurations_navigateursbytypeimg'] = "Grafikon mutatja a böngészők típusait";
$lang['configurations_os_interest'] = "Operációs rendszerek szerint";
$lang['configurations_navigateurs_interest'] = "Böngészők szerint";
$lang['configurations_resolutions_interest'] = "Képernyő felbontások szerint";
$lang['configurations_couleurs_interest'] = "Színmélység szerint";
$lang['configurations_configurations'] = "Fő beállítások";

//
// Referers
//
$lang['affluents_titre'] = "Hivatkozások";
$lang['affluents_recapimg'] = "Látogatók diagramja hivatkozásonként";
$lang['affluents_directimg'] = "Közvetlen";
$lang['affluents_sitesimg'] = "Weboldalak";
$lang['affluents_moteursimg'] = "Keresők";
$lang['affluents_referrersimg'] = "Hivatkozások";
$lang['affluents_moteurs'] = "Kereső Motorok";
$lang['affluents_nbparmoteur'] = "Látogatások a kereső motorok által: %s";
$lang['affluents_aucunmoteur'] = "Nem voltak kereső motor látogatások.";
$lang['affluents_motscles'] = "Kulcsszavak";
$lang['affluents_nbmotscles'] = "Eltérő kulcsszavak : %s";
$lang['affluents_aucunmotscles'] = "Nem találhatóak kulcsszavak.";
$lang['affluents_sitesinternet'] = "Weboldalak";
$lang['affluents_nbautressites'] = "Egyéb weboldalakról származó látogatások : %s";
$lang['affluents_nbautressitesdiff'] = "Különböző weboldalak száma : %s";
$lang['affluents_aucunautresite'] = "Nincsenek egyéb weboldalakról származó látogatások.";
$lang['affluents_entreedirecte'] = "Közvetlen kérelem";
$lang['affluents_nbentreedirecte'] = "Közvetlen kérésű látogatások : %s";
$lang['affluents_nbpartenaires'] = "Látogatások partnerektől : %s";
$lang['affluents_aucunpartenaire'] = "Nem voltak látogatások a partner oldalakról.";
$lang['affluents_nbnewsletters'] = "Látogatások a hírlevélről : %s";
$lang['affluents_aucunnewsletter'] = "Nem voltak látogatások a hírlevélről.";
$lang['affluents_details'] = "Részletek"; // In the results of the referers array
$lang['affluents_interetsmoteurs'] = "Keresőprogram szerint";
$lang['affluents_interetsmotscles'] = "Kulcsszó szerint";
$lang['affluents_interetssitesinternet'] = "Honlap szerint";
$lang['affluents_partenairesimg'] = "Partnerek";
$lang['affluents_partenaires'] = "Partnerek";
$lang['affluents_interetspartenaires'] = "Partnerek szerint";
$lang['affluents_newslettersimg'] = "Hírlevelek";
$lang['affluents_newsletters'] = "Hírlevelek";
$lang['affluents_interetsnewsletters'] = "Hírlevelek szerint";
$lang['affluents_type'] = "Hivatkozás típus";
$lang['affluents_interetstype'] = "Elérés típus szerint";

//
// Summary
//
$lang['purge_titre'] = "A látogatások és hivatkozások összefoglalása";
$lang['purge_intro'] = "Ez az időszak el lett távolítva az adminisztrációból, csak a nélkülözhetetlen statisztikák maradtak meg.";
$lang['admin_purge'] = "Adatbázis karbantartás";
$lang['admin_purgeintro'] = "Itt tudod kezelni a phpMyVisites által használt táblákat. Ellenőrizheted a használt lemezterületet, optimalizálhatod, vagy eltávolíthatod a régi bejegyzéseket. Korlátozhatod a táblák méretét az adatbázisban.";
$lang['admin_optimisation'] = "A(z) [ %s ] tábla optimalizálása..."; // Tables names
$lang['admin_postopt'] = "Az összes méret csökkentése %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Következő időszak eltávolítása: %s";
$lang['admin_purge_fini'] = "Táblák törlése befejeződött...";
$lang['admin_bdd_nom'] = "Név";
$lang['admin_bdd_enregistrements'] = "Bejegyzés";
$lang['admin_bdd_taille'] = "Méret";
$lang['admin_bdd_opt'] = "Optimalizál";
$lang['admin_bdd_purge'] = "Karbantartás feltétele";
$lang['admin_bdd_optall'] = "Összes Optimalizálása";
$lang['admin_purge_j'] = "A %s napnál régebbi bejegyzések eltávolítása";
$lang['admin_purge_s'] = "A %s hétnél régebbi bejegyzések eltávolítása";
$lang['admin_purge_m'] = "A %s hónapnál régebbi bejegyzések eltávolítása";
$lang['admin_purge_y'] = "%s évnél régebbi bejegyzések eltávolítása";
$lang['admin_purge_logs'] = "Összes napló eltávolítása";
$lang['admin_purge_autres'] = "Karbantartás a táblába '%s'";
$lang['admin_purge_none'] = "Nem lehetséges művelet";
$lang['admin_purge_cal'] = "Számítás és karbantartás...(néhány perc)";
$lang['admin_alias_title'] = "Honlap alternatív nevek és URL-ek";
$lang['admin_partner_title'] = "Honlap partnerek";
$lang['admin_newsletter_title'] = "Honlap hírlevelek";
$lang['admin_ip_exclude_title'] = "IP címtartomány kizárása a statisztikából";
$lang['admin_name'] = "Név:";
$lang['admin_error_ip'] = "IP helyes formátumban: %s";
$lang['admin_site_name'] = "Oldal név";
$lang['admin_site_url'] = "Honlap fő URL";
$lang['admin_db_log'] = "Adatbázis beállítások módosításához lépjen be adminisztrátorként.";
$lang['admin_error_critical'] = "Hiba, ki kell javítani a megfelelő működéshez.";
$lang['admin_warning'] = "Figyelem, a phpMyVisites megfelelően működik,<BR> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; de néhány extra funkció talán nem.";
$lang['admin_move_group'] = "Mozgatás a csoportba:";
$lang['admin_move_select'] = "Csoport kiválasztása";

//
// Setup
//
$lang['admin_intro'] = "Üdvözöllek a phpMyVisites konfigurálásánál. A telepítés minden információját itt módosíthatod. Ha eközben bármi problémád adódna, ne habozz belenézni %s a phpMyVisites hivatalos dokumentációjába %s."; // link to the doc
$lang['admin_configetperso'] = "Általános Beállítások";
$lang['admin_afficherjavascript'] = "JavaScript statisztikai kód lekérése";
$lang['admin_cookieadmin'] = "Az adminisztrátort ne rögzítse a statisztika";
$lang['admin_ip_ranges'] = "IP/IP címtartományt ne rögzítse a statisztika";
$lang['admin_sitesenregistres'] = "Vizsgált webodalak:";
$lang['admin_retour'] = "Vissza";
$lang['admin_cookienavigateur'] = "Letilthatod az Adminisztrátort a statisztikából. Ez a művelet süti alapú, és csak a jelenlegi böngészővel működik. Ezt az opciót bármikor módosíthatod.";
$lang['admin_prendreencompteadmin'] = "Az Adminisztrátort is vizsgálja a statisztika (süti törlése)";
$lang['admin_nepasprendreencompteadmin'] = "Ne számolja bele az Adminisztrátort a statisztikába (süti készítése)";
$lang['admin_etatcookieoui'] = "Az Adminisztrátort is beleszámolja a weboldal statisztikájába (Ez az alapértelmezett beállítás, normál látogatóként vagy azonosítva)";
$lang['admin_etatcookienon'] = "Nem vagy beleszámolva a weboldal statisztikájába (A látogatásaidat nem veszi figyelembe az oldal statisztikája)";
$lang['admin_deleteconfirm'] = "Biztosan törlöd ezt : %s?";
$lang['admin_sitedeletemessage'] = "Legyen <u>nagyon</u> óvatos: az oldallal kapcsolatos minden adat törlődni fog<br>és nincs lehetőség az adatok helyreállítására.";
$lang['admin_confirmyes'] = "Igen, törölni akarom";
$lang['admin_confirmno'] = "Nem, mégsem akarom törölni";
$lang['admin_nonewsletter'] = "Nem található hírlevél ehhez az oldalhoz!";
$lang['admin_nopartner'] = "Nem található partner ehhez az oldalhoz!";
$lang['admin_get_question'] = "GET változó rögzítése? (URL változók)";
$lang['admin_get_a1'] = "Minden URL változó rögzítése";
$lang['admin_get_a2'] = "Ne rögzítsen semmilyen URL változót";
$lang['admin_get_a3'] = "Csak a meghatározott változókat rögzítse";
$lang['admin_get_a4'] = "Csak a kizárt változókat rögzítse";
$lang['admin_get_list'] = "Változó nevek (<b>;</b>-vel elválasztott lista) <br/>Például : %s";
$lang['admin_required'] = "%s kötelező.";
$lang['admin_title_required'] = "Kötelező";
$lang['admin_write_dir'] = "Írható könyvtárak";
$lang['admin_chmod_howto'] = "Ezeknek a könyvtáraknak írhatóaknak kell lenniük a szerveren. Egy FTP programmal módosítsa chmod 777-re.";
$lang['admin_optional'] = "Opcionális";
$lang['admin_memory_limit'] = "Memória korlát";
$lang['admin_allowed'] = "engedélyezett";
$lang['admin_webserver'] = "Web szerver";
$lang['admin_server_os'] = "Szerver OR";
$lang['admin_server_time'] = "Szerver idő";
$lang['admin_legend'] = "Jelmagyarázat:";
$lang['admin_error_url'] = "URL helyes formában : %s (a végén törtvonal nélkül)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URL alternatív nevek";
$lang['admin_logo_question'] = "Logo megjelenítése?";
$lang['admin_type_again'] = "(adja meg újra)";
$lang['admin_admin_mail'] = "Adminisztrátor email";
$lang['admin_admin'] = "Adminisztrátor";
$lang['admin_phpmv_path'] = "Teljes elérési útvonal a phpMyVisites programhoz";
$lang['admin_valid_email'] = "Emailnek érvényesnek kell lennie";
$lang['admin_valid_pass'] = "Jelszónak bonyolultabbnak kell lennie<BR>(minimum 6 karakter, számokkal)";
$lang['admin_match_pass'] = "Jelszó nem egyezik";
$lang['admin_no_user_group'] = "Nincs felhasználó ebben a csoportban ehhez az oldalhoz";
$lang['admin_recorded_nl'] = "Rögzített hírlevelek:";
$lang['admin_recorded_partners'] = "Rögzített partnerek:";
$lang['admin_recorded_users'] = "Rögzített felhasználók:";
$lang['admin_select_site_title'] = "Válassz honlapot";
$lang['admin_select_user_title'] = "Válassz felhasználót";
$lang['admin_no_user_registered'] = "Nincs regisztrált felhasználó!";
$lang['admin_configuration'] = "Beállítás";
$lang['admin_general_conf'] = "Általános beállítás";
$lang['admin_group_title'] = "Csoport kezelő (engedélyek)";
$lang['admin_user_title'] = "Felhasználó kezelő";
$lang['admin_user_add'] = "Felhasználó hozzáadás";
$lang['admin_user_mod'] = "Felhasználó módosítás";
$lang['admin_user_del'] = "Felhasználó törlés";
$lang['admin_server_info'] = "Szerver információ";
$lang['admin_send_mail'] = "Statisztikák küldése emailen keresztül";
$lang['admin_rss_feed'] = "Statisztikák RSS-n";
$lang['admin_site_admin'] = "Oldal adminisztráció";
$lang['admin_site_add'] = "Oldal hozzáadása";
$lang['admin_site_mod'] = "Oldal módosítása";
$lang['admin_site_del'] = "Oldal törlése";
$lang['admin_nl_add'] = "Hírlevél hozzáadása";
$lang['admin_nl_mod'] = "Hírlevél módosítása";
$lang['admin_nl_del'] = "Hírlevél törlése";
$lang['admin_partner_add'] = "Partner hozzáadása";
$lang['admin_partner_mod'] = "Partner módosítása";
$lang['admin_partner_del'] = "Partner törlése";
$lang['admin_url_alias'] = "URL alternatív név kezelő";
$lang['admin_group_admin_n'] = "Statisztikák megtekintése és admin engedélyek";
$lang['admin_group_admin_d'] = "Felhasználó tudja csak megtekinteni az oldal statisztikákat és módosítani az oldal információkat (név, süti hozzáadása, IP tartomány tiltás, URL alternatív név/ Partnerek/ Hírlevél, stb.)";
$lang['admin_group_view_n'] = "Statisztikák megtekintése";
$lang['admin_group_view_d'] = "Felhasználó tudja csak megtekinteni az oldal statisztikákat. Nincs admin engedély.";
$lang['admin_group_noperm_n'] = "Nincs engedély";
$lang['admin_group_noperm_d'] = "Az ebben a csoportban lévő felhasználóknak nincs engedélyük megtekinteni az oldal statisztikákat, vagy módosítani az oldal információkat.";
$lang['admin_group_stitle'] = "Módosíthatja a felhasználó csoportját a felhasználó, majd a megfelelő csoport kiválasztásával.";
$lang['admin_url_generate_download_link_example'] = "Download file adress Or URL redirection to an external website";
$lang['admin_url_generate_title'] = "File download / Url redirection : Url generator";
$lang['admin_url_generate_intro'] = "phpMyVisites can count your file downloads, and can also track external clicks to URLs. Downloads and URLs tracked will appear in the 'Pages views' section of phpMyVisites.</p><p class='texte'> To achieve this, you have to use a URL that points to the phpmyvisites file, then it will redirect to the URL you need. Because it is not trivial to generate such a URL, here is a tool that will make it simple (because phpMyVisites must be a simple but powerful experience for all of us). Simply fill in the form, click the 'Generate URL' button, and you will count your file downloads or external URL redirections very easily!";
$lang['admin_url_generate_site_selection'] = "Select the site for which you want to count a file download or a URL redirection";
$lang['admin_url_generate_enter_url'] = "Enter your file complete adress or the external Url you want to track in the statistics:";
$lang['admin_url_generate_help_enter_url'] = "Help: It must be like '<b>http://www.yoursite.com/file/brilliant-software.zip</b>' or for any URL redirection '<b>http://www.the-site-to-redirect.com</b>'";
$lang['admin_url_generate_friendly_name'] = "Friendly name of the file / URL that will be used in the page views table:"; 
$lang['admin_url_generate_help_friendly_name'] = "Help: You can classify the 'files / Url redirection' in categories for a better display in the Pages view section in phpMyVisites. You can separate the category and the files or Url redirections with the character '<b>/</b>'. For example, the Name can be '<b>my photos download/Summer in France</b>' or '<b>Partners/PHP.net website</b>' : it will classify respectively in the folder '<b>my photos downloads</b>' or in the folder '<b>Partners</b>' : you will see them in folders in the 'Pages view' section in your phpMyVisites interface.";
$lang['admin_url_generate_result_url'] = "Here is the URL you can link to: ";
$lang['admin_url_generate_html_result'] = "If it is useful for you, here is the HTML Link you can use:";
$lang['admin_url_generate_image_legend'] = "Example of Pages views with URL redirection and file download tracking:";
$lang['admin_site_link_javascript'] = "%s Now you have to install the tracker on your pages (copy paste the Javascript code). Click to display the javascript code. %s";
$lang['admin_last_version'] = "Do you have phpMyVisites last version? (Recommended!)";
$lang['admin_general_config_firstday'] = "First day of the calendar?";
$lang['admin_default_language'] = "Default language? <br/>It will also be the default language for emails.";

//
// Pdf export
//
$lang['pdf_generate_link'] = "Generate a PDF presenting all statistics for site %s";
$lang['pdf_summary_generate_link'] = "Generate a PDF presenting a statistics summary";
$lang['pdf_free_page'] = "Free new page";
$lang['pdf_free_chapter'] = "Free title chapter";
$lang['pdf_page_break'] = "Page break";
$lang['pdf_page_summary'] = "Summary";
$lang['generique_pdfno'] = "PDF %s"; // Newsletter "version 2 announcement" 
$lang['admin_pdf_title'] = "Website PDF"; 
$lang['admin_nopdf'] = "No pdf found for this site!";
$lang['admin_recorded_pdf'] = "Recorded PDFs:";
$lang['admin_pdf_add'] = "Add PDF"; 
$lang['admin_pdf_mod'] = "Modify PDF"; 
$lang['admin_pdf_del'] = "Delete PDF"; 
$lang['generique_pdf'] = "PDF";

//
// Installation Step
//
$lang['install_loginmysql'] = "Adatbázis bejelentkezési név";
$lang['install_mdpmysql'] = "Adatbázis jelszó";
$lang['install_serveurmysql'] = "Adatbázis szerver";
$lang['install_basemysql'] = "Adatbázis név";
$lang['install_prefixetable'] = "Tábla előtag";
$lang['install_utilisateursavances'] = "Haladó felhasználók (opcionális)";
$lang['install_oui'] = "Igen";
$lang['install_non'] = "Nem";
$lang['install_ok'] = "Rendben";
$lang['install_probleme'] = "Probléma: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Adminisztrátor név:";
$lang['install_mdpadmin'] = "Adminisztrátor jelszó:";
$lang['install_chemincomplet'] = "Teljes elérési út a phpMyVisites programhoz (mint http://www.oldalam.hu/rep1/rep3/phpmyvisites/). Az útvonal végéről ezt ne hagyd le: <strong>/</strong>.";
$lang['install_afficherlogo'] = "Legyen látható a logo? %s <br />Ha ezt engedélyezed, a weboldaladon megjelenik a phpMyVisites logoja, és így segíthetsz reklámozni a szoftvert. Ez egy lehetőség arra, hogy megköszönd a szerzőnek a sok órát, amit eltöltött ezen nyílt forráskódú, ingyenes szoftver kifejlesztésével."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Statisztikai garfikonok mutatása.";
$lang['install_valider'] = "Mehet"; //  during installation and for login
$lang['install_popup_logo'] = "Válassz egy logot!";
$lang['install_logodispo'] = "Nézd meg a rendelkezésre álló többi logot is!";
$lang['install_welcome'] = "Üdvözöllek!";
$lang['install_system_requirements'] = "Rendszer követelmények";
$lang['install_database_setup'] = "Adatbázis beállítások";
$lang['install_create_tables'] = "Táblázat készítés";
$lang['install_general_setup'] = "Általános beállítások";
$lang['install_create_config_file'] = "Config fájl készítése";
$lang['install_first_website_setup'] = "Első honlap hozzáadása";
$lang['install_display_javascript_code'] = "Javascript kód lekérése";
$lang['install_finish'] = "Kész!";
$lang['install_txt2'] = "A telepítés befejezésekor tudathatod velünk a hivatalos honlapon, hogy a phpMyVisites-t használod, így egy képet kaphatunk a projektet használó emnberek számáról. Segítségedet köszönjük.";
$lang['install_database_setup_txt'] = "Add meg az adatbázis beállításokat.";
$lang['install_general_config_text'] = "A phpMyVisites-nek csak egy adminisztrátora lehet teljes hozzáféréssel. Válassz felhasználónevet és jelszót az adminisztrátor fiókhoz. Felhasználókat később felvehetsz.";
$lang['install_config_file'] = " Adminisztrátor információk sikeresen megadva.";
$lang['install_js_code_text'] = "<p>Az összes látogató számlálásához be kell illesztened a javascript kódot minden oldaladba. </p><p> Nem szükséges PHP alapúnak lennie az oldaladnak, <strong>hiszen a phpMyVisites működik minden programozási nyelven (legyen az HTML, ASP, Perl vagy bármely nyelv).</strong> </p><p> Ezt a kódot kell beillesztened: (másold és illeszd minden oldalba) </p>";
$lang['install_intro'] = "Üdvözöllek a phpMyVisites telepítőjében!"; 
$lang['install_intro2'] = "Ez a folyamat %s könnyű lépésből áll, és kb. 10 percig tart.";
$lang['install_next_step'] = "Következő lépés";
$lang['install_status'] = "Telepítési állapot";
$lang['install_done'] = "Telepítés %s%%-a kész"; // Install 25% complete
$lang['install_site_success'] = "Weboldal sikeresen elkészítve!";
$lang['install_site_info'] = "Adjon meg minden információt az első weboldalról.";
$lang['install_go_phpmv'] = "Tovább a phpMyVisites-hez!";
$lang['install_congratulation'] = "Gratulálunk, a phpMyVisites telepítése befejeződött.";
$lang['install_end_text'] = "Ha a javascript kódokat beillesztetted a honlapodba, várhatod az első látogatókat!";
$lang['install_db_ok'] = "Kapcsolódás az adatbázishoz sikerült!";
$lang['install_table_exist'] = "A phpMyVisites táblák már léteznek az adatbázisban.";
$lang['install_table_choice'] = "Választhatod a meglévő táblák használatát, vagy a táblák törlését.";
$lang['install_table_erase'] = "Minden tábla törlése (légy óvatos!)";
$lang['install_table_reuse'] = "Meglévő táblák használata";
$lang['install_table_success'] = "Táblák sikeresen elkészültek!";
$lang['install_send_mail'] = "Fogad naponta statisztika összefoglalót weboldalanként?";

//
// Update Step
//
$lang['update_title'] = "phpMyVisites frissítése";
$lang['update_subtitle'] = "A phpMyVisites szeretnéd frissíteni.";
$lang['update_versions'] = "Az előző verzió: %s. Frissítés erre: %s.";
$lang['update_db_updated'] = "Az adatbázis sikeresen frissítve!";
$lang['update_continue'] = "Tovább a phpMyVisites-hez";
$lang['update_jschange'] = "Figyelmeztetés! <br /> A phpMyVisites javascript kód megváltozott. Frissítened kell az oldalaidat a phpMyVisites új Javascript kódjával minden honlapon. <br /> A javascript kód megváltozása elég ritka, elnézésedet kérjük a kellemetlenségekért.";

//
// Dates
//

/*
%daylong% // Monday
%dayshort% // Mon
%daynumeric% // 27
%monthlong% // Febuary
%monthshort% // Feb
%monthnumeric% // 02
%yearlong% // 2004
%yearshort% // 04
*/

// Monday February 10 2004
$lang['tdate1'] = "%yearlong%. %monthlong% %daynumeric%. %daylong%";

// Monday 10
$lang['tdate2'] = "%daynumeric%. %daylong%";

// Week February 10 To February 17 2004
$lang['tdate3'] = "%yearlong%. %monthlong% %daynumeric%. - %monthlong2% %daynumeric2%.";

// February 2004 Month
$lang['tdate4'] = "%yearlong%. %monthlong%";

// December 2003
$lang['tdate5'] = "%yearlong%. %monthlong%";

// 10 Febuary week
$lang['tdate6'] = "%monthlong% %daynumeric%.";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%yearlong%-%monthnumeric%-%daynumeric%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = " %daynumeric%. %dayshort%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9'] = " %monthshort% %daynumeric%.";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%yearshort%. %monthshort%";

// Year 2004
$lang['tdate11'] = "%yearlong%.";

// 2004
$lang['tdate12'] = "%yearlong%.";

// 31
$lang['tdate13'] = "%daynumeric%.";

// Months
$lang['moistab']['01'] = "Január";
$lang['moistab']['02'] = "Február";
$lang['moistab']['03'] = "Március";
$lang['moistab']['04'] = "Április";
$lang['moistab']['05'] = "Május";
$lang['moistab']['06'] = "Június";
$lang['moistab']['07'] = "Július";
$lang['moistab']['08'] = "Augusztus";
$lang['moistab']['09'] = "Szeptember";
$lang['moistab']['10'] = "Október";
$lang['moistab']['11'] = "November";
$lang['moistab']['12'] = "December";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Jan";
$lang['moistab_graph']['02'] = "Feb";
$lang['moistab_graph']['03'] = "Már";
$lang['moistab_graph']['04'] = "Ápr";
$lang['moistab_graph']['05'] = "Máj";
$lang['moistab_graph']['06'] = "Jún";
$lang['moistab_graph']['07'] = "Júl";
$lang['moistab_graph']['08'] = "Aug";
$lang['moistab_graph']['09'] = "Sze";
$lang['moistab_graph']['10'] = "Okt";
$lang['moistab_graph']['11'] = "Nov";
$lang['moistab_graph']['12'] = "Dec";

// Day of the week
$lang['jsemaine']['Mon'] = "Hétfő";
$lang['jsemaine']['Tue'] = "Kedd";
$lang['jsemaine']['Wed'] = "Szerda";
$lang['jsemaine']['Thu'] = "Csütörtök";
$lang['jsemaine']['Fri'] = "Péntek";
$lang['jsemaine']['Sat'] = "Szombat";
$lang['jsemaine']['Sun'] = "Vasárnap";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Het";
$lang['jsemaine_graph']['Tue'] = "Ked";
$lang['jsemaine_graph']['Wed'] = "Sze";
$lang['jsemaine_graph']['Thu'] = "Csü";
$lang['jsemaine_graph']['Fri'] = "Pén";
$lang['jsemaine_graph']['Sat'] = "Szo";
$lang['jsemaine_graph']['Sun'] = "Vas";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "H";
$lang['calendrier_jours'][1] = "K";
$lang['calendrier_jours'][2] = "S";
$lang['calendrier_jours'][3] = "C";
$lang['calendrier_jours'][4] = "P";
$lang['calendrier_jours'][5] = "S";
$lang['calendrier_jours'][6] = "V";

// DO NOT ALTER!
$lang['weekdays']['Mon'] = '1';
$lang['weekdays']['Tue'] = '2';
$lang['weekdays']['Wed'] = '3';
$lang['weekdays']['Thu'] = '4';
$lang['weekdays']['Fri'] = '5';
$lang['weekdays']['Sat'] = '6';
$lang['weekdays']['Sun'] = '7';

// Continents
$lang['eur'] = "Európa";
$lang['afr'] = "Afrika";
$lang['asi'] = "Ázsia";
$lang['ams'] = "Közép-, és Dél-Amerika";
$lang['amn'] = "Észak-Amerika";
$lang['oce'] = "Óceánia";

// Oceans
$lang['oc_pac'] = "Csendes Óceán";
$lang['oc_atl'] = "Atlanti Óceán";
$lang['oc_ind'] = "Indiai Óceán";

// Countries
$lang['domaines'] = array(
    "xx" => "Ismeretlen",
    "ac" => "Ascension-Szigetek",
    "ad" => "Andorra",
    "ae" => "Egyesült Arab Emirátusok",
    "af" => "Afganisztán",
    "ag" => "Antigua és Barbuda",
    "ai" => "Anguilla",
    "al" => "Albánia",
    "am" => "Örményország",
    "an" => "Netherlands Antilles",
    "ao" => "Angola",
    "aq" => "Antarktika",
    "ar" => "Argentína",
    "as" => "Amerikai Szamoa",
    "at" => "Ausztria",
    "au" => "Ausztrália",
    "aw" => "Aruba",
    "az" => "Azerbajdzsán",
    "ba" => "Bosznia és Herzegovina",
    "bb" => "Barbados",
    "bd" => "Banglades",
    "be" => "Belgium",
    "bf" => "Burkina Faso",
    "bg" => "Bulgária",
    "bh" => "Bahrain",
    "bi" => "Burundi",
    "bj" => "Benin",
    "bm" => "Bermuda",
    "bn" => "Bruneo",
    "bo" => "Bolívia",
    "br" => "Brazília",
    "bs" => "Bahamák",
    "bt" => "Bhutan",
    "bv" => "Bouvet-Sziget",
    "bw" => "Botswana",
    "by" => "Belarusz",
    "bz" => "Belize",
    "ca" => "Kanada",
    "cc" => "Kókusz-Szigetek",
    "cd" => "Kongói Demokratikus Köztársaság",
    "cf" => "Közép Afrikai Köztársaság",
    "cg" => "Kongó",
    "ch" => "Svájc",
    "ci" => "Cote D'Ivoire",
    "ck" => "Cook-Szigetek",
    "cl" => "Chile",
    "cm" => "Cameroon",
    "cn" => "Kína",
    "co" => "Kolumbia",
    "cr" => "Costa Rica",
	"cs" => "Serbia Montenegro",
    "cu" => "Kuba",
    "cv" => "Cape Verde",
    "cx" => "Karácsony-Sziget",
    "cy" => "Ciprus",
    "cz" => "Cseh Köztársaság",
    "de" => "Németország",
    "dj" => "Djibouti",
    "dk" => "Dánia",
    "dm" => "Dominika",
    "do" => "Dominikai Köztársaság",
    "dz" => "Algéria",
    "ec" => "Ecuador",
    "ee" => "Észtország",
    "eg" => "Egyiptom",
    "eh" => "Nyugat-Szahara",
    "er" => "Eritrea",
    "es" => "Spanyolország",
    "et" => "Etiópia",
    "fi" => "Finnország",
    "fj" => "Fiji",
    "fk" => "Falkland-Szigetek",
    "fm" => "Mikronéziai Szövetségi Köztársaság",
    "fo" => "Faroe-Szigetek",
    "fr" => "Franciaország",
    "ga" => "Gabon",
    "gd" => "Grenada",
    "ge" => "Georgia",
    "gf" => "Francia Guyana",
    "gg" => "Guernsey",
    "gh" => "Ghana",
    "gi" => "Gibraltár",
    "gl" => "Grönland",
    "gm" => "Gambia",
    "gn" => "Guinea",
    "gp" => "Guadeloupe",
    "gq" => "Egyenlítői-Guinea",
    "gr" => "Görögország",
    "gs" => "Dél-Georgia és a Dél-Sandwich-Szigetek",
    "gt" => "Guatemala",
    "gu" => "Guam",
    "gw" => "Guinea-Bissau",
    "gy" => "Guyana",
    "hk" => "Hong Kong",
    "hm" => "Heard-Sziget és a McDonald -Szigetek",
    "hn" => "Honduras",
    "hr" => "Horvátország",
    "ht" => "Haiti",
    "hu" => "Magyarország",
    "id" => "Indonézia",
    "ie" => "Írország",
    "il" => "Izrael",
    "im" => "Man-Sziget",
    "in" => "India",
    "io" => "Brit Indiai-Óceáni Övezet",
    "iq" => "Irak",
    "ir" => "Iráni Iszlám Köztársaság",
    "is" => "Izland",
    "it" => "Olaszország",
    "je" => "Jersey",
    "jm" => "Jamaica",
    "jo" => "Jordánia",
    "jp" => "Japán",
    "ke" => "Kenya",
    "kg" => "Kyrgyzstan",
    "kh" => "Kambodzsa",
    "ki" => "Kiribati",
    "km" => "Comoros",
    "kn" => "Saint Kitts és Nevis",
    "kp" => "Koreai Demokratikus Köztársaság",
    "kr" => "Koreai Köztársaság",
    "kw" => "Kuvait",
    "ky" => "Cayman-Szigetek",
    "kz" => "Kazahsztán",
    "la" => "Laosz",
    "lb" => "Libanon",
    "lc" => "Saint Lucia",
    "li" => "Liechtenstein",
    "lk" => "Srí Lanka",
    "lr" => "Libéria",
    "ls" => "Lesotho",
    "lt" => "Litvánia",
    "lu" => "Luxemburg",
    "lv" => "Lettország",
    "ly" => "Líbia",
    "ma" => "Marokkó",
    "mc" => "Monaco",
    "md" => "Moldovai Köztársaság",
    "mg" => "Madagaszkár",
    "mh" => "Marshall-Szigetek",
    "mk" => "Macedonia",
    "ml" => "Mali",
    "mm" => "Myanmar",
    "mn" => "Mongólia",
    "mo" => "Macau",
    "mp" => "Észak-Mariana-Szigetek",
    "mq" => "Martinique",
    "mr" => "Mauritánia",
    "ms" => "Montserrat",
    "mt" => "Málta",
    "mu" => "Mauritius",
    "mv" => "Maldív-Szigetek",
    "mw" => "Malawi",
    "mx" => "Mexikó",
    "my" => "Malajzia",
    "mz" => "Mozambik",
    "na" => "Namíbia",
    "nc" => "Új-Kaledónia",
    "ne" => "Niger",
    "nf" => "Norfolk-Sziget",
    "ng" => "Nigéria",
    "ni" => "Nicaragua",
    "nl" => "Netherlands",
    "no" => "Norvégia",
    "np" => "Nepál",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "Új-Zéland",
    "om" => "Oman",
    "pa" => "Panama",
    "pe" => "Peru",
    "pf" => "Francia-Polinézia",
    "pg" => "Pápua Új-Guinea",
    "ph" => "Fülöp-Szigetek",
    "pk" => "Pakisztán",
    "pl" => "Lengyelország",
    "pm" => "Saint Pierre és Miquelon",
    "pn" => "Pitcairn",
    "pr" => "Puerto Rico",
	"ps" => "Palestinian Territory",
    "pt" => "Portugália",
    "pw" => "Palau",
    "py" => "Paraguay",
    "qa" => "Katar",
    "re" => "Reunion-Sziget",
    "ro" => "Románia",
    "ru" => "Orosz Szövetségi Állam",
    "rs" => "Oroszország",
    "rw" => "Ruanda",
    "sa" => "Szaúd-Arábia",
    "sb" => "Salamon-Szigetek",
    "sc" => "Seychelles-Szigetek",
    "sd" => "Szudán",
    "se" => "Svédország",
    "sg" => "Szingapúr",
    "sh" => "Saint Helena",
    "si" => "Szlovénia",
    "sj" => "Svalbard",
    "sk" => "Szlovákia",
    "sl" => "Sierra Leone",
    "sm" => "San Marino",
    "sn" => "Szenegál",
    "so" => "Szomália",
    "sr" => "Suriname",
    "st" => "Sao Tome és Principe",
    "su" => "Régi U.R.S.S.",
    "sv" => "El Salvador",
    "sy" => "Szír Arab Köztársaság",
    "sz" => "Szváziföld",
    "tc" => "Török és Caicos-Szigetek",
    "td" => "Csád",
    "tf" => "Francia Déli Övezetek",
    "tg" => "Togo",
    "th" => "Thaiföld",
    "tj" => "Tajikistan",
    "tk" => "Tokelau",
    "tm" => "Turkmenistan",
    "tn" => "Tunézia",
    "to" => "Tonga",
    "tp" => "Észak Timor",
    "tr" => "Törökország",
    "tt" => "Trinidad és Tobago",
    "tv" => "Tuvalu",
    "tw" => "Taiwan Kínai Tartománya",
    "tz" => "Tanzániai Egyesült Köztársaság",
    "ua" => "Ukrajna",
    "ug" => "Uganda",
    "uk" => "Egyesült Királyság",
    "gb" => "Nagy-Britannia",
    "um" => "Minor Outlying-Szigetek Egyesült Államai",
    "us" => "Egyesült Államok",
    "uy" => "Uruguay",
    "uz" => "Üzbegisztán",
    "va" => "Vatikán Város",
    "vc" => "Saint Vincent és a Grenadines",
    "ve" => "Venezuela",
    "vg" => "Brit Virgin-Szigetek",
    "vi" => "Egyesült Államok Virgin-Szigetei",
    "vn" => "Vietnám",
    "vu" => "Vanuatu",
    "wf" => "Wallis és Futuna",
    "ws" => "Szamoa",
    "ye" => "Jemen",
    "yt" => "Mayotte",
    "yu" => "Jugoszlávia",
    "za" => "Dél-Afrika",
    "zm" => "Zambia",
    "zr" => "Zaire",
    "zw" => "Zimbabwe",
    "com" => "-",
    "net" => "-",
    "org" => "-",
    "edu" => "-",
    "int" => "-",
    "arpa" => "-",
    "gov" => "-",
    "mil" => "-",
    "reverse" => "-",
    "biz" => "-",
    "info" => "-",
    "name" => "-",
    "pro" => "-",
    "coop" => "-",
    "aero" => "-",
    "museum" => "-",
    "tv" => "Tuvalu",
    "ws" => "Szamoa",
);
?>