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
$lang['auteur_nom'] = "Jaroslav Hanslík"; // And Vladimír Jarý & David Zejda, the translators of phpMyVisites 1.3 // Translator's name
$lang['auteur_email'] = "j.hanslik ((att)) centrum ((doot)) cz"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "cs"; // iso language code
$lang['lang_libelle_en'] = "Czech"; // english language name
$lang['lang_libelle_fr'] = "Tcheque"; // french language name
$lang['unites_bytes'] = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
$lang['separateur_milliers'] = ' '; // three thousand spells 3,000 in english
$lang['separateur_decimaux'] = ','; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | Open source analýza a statistiky návštěvnosti webu"; // "phpMyVisites | open source web analytics, website statistics"; // Pages header's title
$lang['head_keywords'] = "statistiky, analýza, rozbor, odkazovače, statistiky, free, open source, návštěvy, vyhledávače, klíčová slova, web, webové stránky"; // "statistics, analytics, analysis, referrals, stats, free, open source, visits, search engines, keywords, web, websites"; // Header keywords
$lang['head_description'] = "phpMyVisites | Open source aplikace na statistiky a analýzu návštěvnosti webu šířená pod licencí Gnu GPL."; // "phpMyVisites | An open source website statistics and analytics application distributed under the Gnu GPL."; // Header description
$lang['logo_description'] = "phpMyVisites | Open source analýza návštěvnosti webu"; // "phpMyVisites | Open source web analytics"; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Návštěvy"; // "Visits";
$lang['menu_pagesvues'] = "Stránky"; // "Pages Viewed";
$lang['menu_suivi'] = "Pohyb"; // "Follow-up";
$lang['menu_provenance'] = "Lokalita"; // "Source";
$lang['menu_configurations'] = "Nastavení"; // "Settings";
$lang['menu_affluents'] = "Příchody"; // "Referrals";
$lang['menu_listesites'] = "Seznam webů"; // "List Sites";
$lang['menu_bilansites'] = "Souhrn"; // "Summary";
$lang['menu_jour'] = "Den"; // "Day";
$lang['menu_semaine'] = "Týden"; // "Week";
$lang['menu_mois'] = "Měsíc"; // "Month";
$lang['menu_annee'] = "Rok"; // "Year";
$lang['menu_periode'] = "Sledované období: %s"; // "Studied period: %s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "Stránky projektu"; // "Official website";
$lang['liens_admin'] = "Správa"; // "Administration";
$lang['liens_contacts'] = "Kontakty"; // "Contacts";

//
// Divers
//
$lang['generique_nombre'] = "Počet"; // "Number";
$lang['generique_tauxsortie'] = "Poměr odchodů"; // "Exit Rate";
$lang['generique_ok'] = "OK"; // "OK";
$lang['generique_timefooter'] = "Stránka vytvořena za %s sekund"; // "Page generated in %s seconds"; // Time in seconds
$lang['generique_divers'] = "Ostatní"; // "Others"; // (for the graphs)
$lang['generique_inconnu'] = "Neznámé"; // "Unknown"; // (for the graphs)
$lang['generique_vous'] = "... Vy?" ; // "... You?";
$lang['generique_traducteur'] = "Překladatel"; // "Translator";
$lang['generique_langue'] = "Jazyk"; // "Language";
$lang['generique_autrelangure'] = "Jiný?"; //"Other?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "Žádné návštěvy v tomto období."; // "No visitor on this period.";
$lang['generique_aucune_visite_bdd'] = "<b>Varování!</b> V databázi není zaznamenán žádný návštěvník této stránky. Ujistěte se, že jste na Vaše stránky nainstalovali javascriptový kód se správnou URL phpMyVisites. Pro nápovědu použijte dokumentaci."; // "<b>Warning ! </b> You have no visitor recorded in the database for the current site. Please be sure you've installed your javascript code on your pages, with the correct phpMyVisites URL <u>IN</u> the Javascript code. Try documentation for help.";
$lang['generique_aucune_site_bdd'] = "Není zaregistrována žádná webová stránka! Přihlašte se jako hlavní správce a přidejte novou stránku."; // "No site registered in the database ! Try to login as phpMyVisites Super User to add a new site.";
$lang['generique_retourhaut'] = "Nahoru"; // "Top";
$lang['generique_tempsvisite'] = "%1\$smin %2\$ss";
$lang['generique_tempsheure'] = "%sh"; // 4 h means 4 hours
$lang['generique_siteno'] = "Stránka %s"; // "Site %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Bulletin %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "Partnerský web %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "Obecné"; //"General";
$lang['generique_user'] = "Uživatel"; // "User %s"; // User "Admin"
$lang['generique_previous'] = "Předchozí"; // "Previous";
$lang['generique_next'] = "Další"; // "Next";
$lang['generique_lowpop'] = "Vyloučit ze statistik nízké hodnoty"; // "Exclude low population from statistics";
$lang['generique_allpop'] = "Zahrnout do statistik všechny hodnoty"; // "Include all the population in statistics";
$lang['generique_to'] = "až"; // "to"; // 4 'to' 8
$lang['generique_total_on'] = "z"; // "on"; // 4 to 8 'on' 10
$lang['generique_total'] = "Celkem"; // "Total"; // 4 to 8 'on' 10
$lang['generique_information'] = "Informace"; // "Information";
$lang['generique_done'] = "Hotovo!"; // "Done!";
$lang['generique_other'] = "Další"; // "Other";
$lang['generique_description'] = "Popis"; // "Description:";
$lang['generique_name'] = "Jméno:"; // "Name:";
$lang['generique_variables'] = "Proměnné"; // "Variables";
$lang['generique_logout'] = "Odhlásit"; // "Logout";
$lang['generique_login'] = "Přihlásit"; // "Login";
$lang['generique_hits'] = "Hity"; // "Hits";
$lang['generique_errors'] = "Chyby"; // "Errors";
$lang['generique_site'] = "Stránka"; // "Site";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "heslo"; // "password: "; // lowercase
$lang['login_login'] = "jméno"; // "login: "; // lowercase
$lang['login_error'] = "Nelze se přihlásit. Špatné jméno nebo heslo."; //"Cannot login. Bad login or password.";
$lang['login_error_nopermission'] = "Daný uživatel nemá žádná oprávnění. Prosím požádejte hlavního správce, aby nastavil Vaše oprávnění k prohlížení/administraci v phpMyVisites."; //"The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "Snažíte se vstoupit do chráněné části %sphpMyVisites%s."; // "You wish to enter a %sphpMyVisites%s protected area.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Kontakty"; // "Contacts";
$lang['contacts_langue'] = "Překlady"; // "Translations";
$lang['contacts_merci'] = "Poděkování"; // "Thanks";
$lang['contacts_auteur'] = "Program phpMyVisites včetně dokumentace vytvořil <strong>Matthieu Aubry</strong>."; // "The author, documentor, and creator of the phpMyVisites project is <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "<strong>Technické dotazy, hlášení chyb a doporučení</strong> směřujte do diskusí na stránkách projektu %s. S ostatními požadavky prosím autora kontaktujte pomocí formuláře na stránkách projektu."; // "For <strong>technical questions, reporting bugs, suggestions</strong> please use the official website forums %s. For other requests, please contact the author using the official website form."; // adresse du site
$lang['contacts_trad1'] = "Chtěli byste přeložit phpMyVisites do svého jazyka? Neváhejte, protože <strong>phpMyVisites vás potřebuje!</strong>"; // "Do you want to translate phpMyVisites to your language? Don't hesitate because <strong>phpMyVisites needs you!</strong>";
$lang['contacts_trad2'] = "Překlad phpMyVisites zabere nějaký čas (pár hodin) a vyžaduje dobrou znalost příslušných jazyků; ale pamatujte, že <strong>z vaší práce bude mít užitek spousta uživatelů</strong>. Pokud se zajímáte o překlad phpMyVisites, všechny potřebné informace najdete %s v dokumentaci phpMyVisites%s."; // "Translatating phpMyVisites will take quite a while (a few hours) and requires a good knowledge of the languages involved; but remember that <strong>any work you do will benefit a large number of users</strong>.  If you are interested in translatating phpMyVisites you can find all the information you need in %s the official documentation of phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "Neváhejte nahlédnout do %s dokumentace phpMyVisites%s, kde najdete spoustu informací o instalaci, konfiguraci a také o funkcích phpMyVisites. Dokumentace je součástí vaší verze phpMyVisites."; // "Don't hesitate to consult %s the official documentation of phpMyVisites %s which will give you plenty of information on installation, configuration, and the functionality of phpMyVisites. It is available in your version of phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Poděkování zaslouží <strong>%s</strong>, spolutvůrci phpMyVisites, za svou kvalitní práci na projektu."; // "Thank you <strong>%s</strong>, co-developers of phpMyVisites, for their high quality work on the project.";
$lang['contacts_merci3'] = "Neváhejte na stránkách projektu nahlédnout do stránky s poděkováním. Najdete zde kompletní seznam přátel phpMyVisites."; // "Don't hesitate to consult the acknowledgments page on the official website to get a complete list of phpMyVisites friends.";
$lang['contacts_merci2'] = "Velké poděkování patří také všem, kteří se podělili o svou kulturu tím, že přispěli překladem phpMyVisites:"; // "A big thank you to all those who shared their culture while contributing to the translation of phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Stránka %1\$s ze dne %2\$s"; // "Site %1\$s on %2\$s"; // Site MyHomePage on Sunday 29
$lang['rss_go'] = "Pokračovat na detailní statistiky"; // "Go to detailed statistics";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Informace o návštěvníkovi"; // "Visitor information";
$lang['visites_statistiques'] = "Statistiky"; // "Statistics";
$lang['visites_periodesel'] = "Za vybrané období"; // "For the selected period";
$lang['visites_visites'] = "Návštěvy"; // "Visits";
$lang['visites_uniques'] = "Jedineční návštěvníci"; // "Unique visitors";
$lang['visites_pagesvues'] = "Shlédnuté stránky"; // "Pages viewed";
$lang['visites_pagesvisiteurs'] = "Stránek na návštěvníka"; // "Pages per visitor";
$lang['visites_pagesvisites'] = "Stránek na návštěvu"; // "Pages per visit";
$lang['visites_pagesvisitessign'] = "Stránek na významnou návštěvu"; // "Pages per significant visit";
$lang['visites_tempsmoyen'] = "Průměrná délka návštěvy"; // "Average visit duration"
$lang['visites_tempsmoyenpv'] = "Průměrný čas prohlížení stránky"; // "Average time by page seen";
$lang['visites_tauxvisite'] = "Podíl návštěv jedné stránky"; // "1 page visit rate";
$lang['visites_average_visits_per_day'] = "Průměr návštěv na den"; // "Average visits per day";
$lang['visites_recapperiode'] = "Souhrny období"; // "Period summaries";
$lang['visites_nbvisites'] = "Návštěvy"; // "Visits";
$lang['visites_aucunevivisite'] = "Žádné návštěvy"; // "No visit"; // in the table, must be short
$lang['visites_recap'] = "Souhrn"; // "Summary";
$lang['visites_unepage'] = "1 str"; // "1 page"; // (graph)
$lang['visites_pages'] = "%s str"; // "%s pages"; // 1-2 pages (graph)
$lang['visites_min'] = "%smin"; // "%smin"; // 10-15 min (graph)
$lang['visites_sec'] = "%ss"; // "%ss"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Graf souhrnných statistik"; // "Graph to show statistics summary";
$lang['visites_grapghrecaplongterm'] = "Graf dlouhodobých statistik"; // "Graph to show long term statistics summary";
$lang['visites_graphtempsvisites'] = "Graf délky návštěv"; // "Graph to show durations of the visits by visitor";
$lang['visites_graphtempsvisitesimg'] = "Délka návštěv"; // "Duration of the visits by visitor";
$lang['visites_graphheureserveur'] = "Graf návštěv podle času na serveru"; // "Graph to show visits per hour for the server";
$lang['visites_graphheureserveurimg'] = "Návštěvy podle času serveru"; // "Visits by server time";
$lang['visites_graphheurevisiteur'] = "Graf návštěv podle času na straně návštěvníka"; // "Graph to show visits per hour for the visitor";
$lang['visites_graphheurelocalimg'] = "Návštěvy podle místního času"; // "Visits by local time";
$lang['visites_longterm_statd'] = "Dlouhodobá analýza (Dny období)"; // "Long term Analysis (Days of the Period)";
$lang['visites_longterm_statm'] = "Dlouhodobá analýza (Měsíce v období)"; // "Long term Analysis (Months in the Period)";

//
// Sites Summary
//
$lang['summary_title'] = "Souhrn webů"; // "Site Summary";
$lang['summary_stitle'] = "Souhrn"; // "Summary";

//
// Frequency Part
//
$lang['frequence_titre'] = "Návraty návštěvníků"; // "Returning visitors";
$lang['frequence_nouveauxconnusgraph'] = "Graf Nové návštěvy vs Návraty"; // "Graph to show New vs Returning visits";
$lang['frequence_nouveauxconnus'] = "Nové návštěvy vs Návraty"; // "New vs Returning visits";
$lang['frequence_titremenu'] = "Četnost"; // "Frequency";
$lang['frequence_visitesconnues'] = "Návraty"; // "Returning visits";
$lang['frequence_nouvellesvisites'] = "Nové návštěvy"; // "New visits";
$lang['frequence_visiteursconnus'] = "Navrátilci"; // "Returning visitors";
$lang['frequence_nouveauxvisiteurs'] = "Noví návštěvníci"; // "New visitors";
$lang['frequence_returningrate'] = "Podíl návratů"; // "Returning rate";
$lang['pagesvues_vispervisgraph'] = "Graf počtu návštěv na návštěvníka"; // "Graph to show number of visits per visitor";
$lang['frequence_vispervis'] = "Počet návštěv na návštěvníka"; // "Number of visits per visitor";
$lang['frequence_vis'] = "návštěvy"; // "visit";
$lang['frequence_visit'] = "1 návštěva"; // "1 visit"; // (graph)
$lang['frequence_visits'] = "%s návštěvy"; // "%s visits"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Informace o shlédnutých stránkách"; // "Pages views Information";
$lang['pagesvues_joursel'] = "Vybraný den"; // "Day selected";
$lang['pagesvues_jmoins7'] = "Před týdnem"; // "Day - 7";
$lang['pagesvues_jmoins14'] = "Před 14 dny"; // "Day - 14";
$lang['pagesvues_moyenne'] = "(průměr)"; // "(average)";
$lang['pagesvues_pagesvues'] = "Shlédnuté stránky"; // "Page views";
$lang['pagesvues_pagesvudiff'] = "Jedinečných shlédnutí"; // "Unique page views";
$lang['pagesvues_recordpages'] = "Nejvyšší počet stránek shlédnutý jedním návštěvníkem"; // "Highest number of pages for one visitor";
$lang['pagesvues_tabdetails'] = "Shlédnuté stránky a skupiny"; // "Pages and groups viewed"
$lang['pagesvues_graphsnbpages'] = "Graf návštěv podle počtu shlédnutých stránek"; // "Graph to show number of visits per page viewed";
$lang['pagesvues_graphnbvisitespageimg'] = "Návštěvy podle počtu shlédnutých stránek"; // "Visits by number of pages viewed";
$lang['pagesvues_graphheureserveur'] = "Graf návštěv podle času serveru"; // "Graph to show visits by server time";
$lang['pagesvues_graphheureserveurimg'] = "Návštěv podle času serveru"; // "Visits by server time";
$lang['pagesvues_graphheurevisiteur'] = "Graf návštěv podle místního času"; // "Graph to show visits by local time";
$lang['pagesvues_graphpageslocalimg'] = "Návštěv podle místního času"; // "Visits by local time";
$lang['pagesvues_tempsparpage'] = "Čas podle stránky"; // "Time by page";
$lang['pagesvues_total_time'] = "Celkový čas"; // "Total time";
$lang['pagesvues_avg_time'] = "Průměrný čas"; // "Average time";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Pohyb návštěvníků"; // "Visitor movement";
$lang['suivi_pageentree'] = "Vstupní stránky "; // "Entry pages";
$lang['suivi_pagesortie'] = "Odchozí stránky "; // "Exit pages";
$lang['suivi_tauxsortie'] = "Podíl výstupů"; // "Exit rate";
$lang['suivi_pageentreehits'] = "Vstupní hity"; // "Entry hits";
$lang['suivi_pagesortiehits'] = "Odchozí hity"; // "Exit hits";
$lang['suivi_singlepage'] = "Návštěvy jedné jediné stránky"; // "Single Pages visits";

//
// Origin
//
$lang['provenance_titre'] = "Původ návštěvníků"; // "Visitors Origins";
$lang['provenance_recappays'] = "Souhrn zemí"; // "Countries Summary";
$lang['provenance_pays'] = "Země"; // "Countries";
$lang['provenance_paysimg'] = "Návštěvníci podle země"; // "Visitors Chart by Country";
$lang['provenance_fai'] = "Poskytovatelé internetu"; // "Internet Service Providers";
$lang['provenance_nbpays'] = "Počet různých zemí : %s"; // "Number of different nationalities : %s";
$lang['provenance_provider'] = "Poskytovatelé"; // "Providers"; // must be short
$lang['provenance_continent'] = "Světadíl"; // "Continent";
$lang['provenance_mappemonde'] = "Mapa světa"; // "Map of the world";
$lang['provenance_interetspays'] = "Podíly zemí"; // "Countries Interests";

//
// Setup
//
$lang['configurations_titre'] = "Nastavení u návštěvníka"; // "Visitor Settings";
$lang['configurations_os'] = "Operační systémy"; // "Operating Systems";
$lang['configurations_osimg'] = "Graf operačních systémů"; // "Graph to show visitors operating systems";
$lang['configurations_navigateurs'] = "Prohlížeče"; // "Browsers";
$lang['configurations_navigateursimg'] = "Graf prohlížečů"; // "Graph to show visitors browsers";
$lang['configurations_resolutions'] = "Rozlišení obrazovky"; // "Screen Resolutions";
$lang['configurations_resolutionsimg'] = "Graf rozlišení obrazovky"; // "Graph to show visitors screen resolutions";
$lang['configurations_couleurs'] = "Barevné hloubky"; // "Color Depth";
$lang['configurations_couleursimg'] = "Graf barevných hloubek"; // "Graph to show visitors color depth";
$lang['configurations_rapport'] = "Poměry stran obrazovky"; // "Normal/widescreen";
$lang['configurations_large'] = "Širokoúhlý"; // "Widescreen";
$lang['configurations_normal'] = "Klasický"; // "Normal";
$lang['configurations_double'] = "Dvojitý"; // "Dual Screen";
$lang['configurations_plugins'] = "Zásuvné moduly"; // "Plugins";
$lang['configurations_navigateursbytype'] = "Prohlížeče (podle typu)"; // "Browsers (by type)";
$lang['configurations_navigateursbytypeimg'] = "Graf prohlížečů (podle typu)"; // "Graph to show browsers types";
$lang['configurations_os_interest'] = "Podíly operačních systémů"; // "Operating Systems Interest";
$lang['configurations_navigateurs_interest'] = "Podíly prohlížečů"; // "Browsers Interest";
$lang['configurations_resolutions_interest'] = "Podíly rozlišení obrazovky"; // "Screen Resolutions Interest";
$lang['configurations_couleurs_interest'] = "Podíly barevné hloubky"; // "Color Depth Interest";
$lang['configurations_configurations'] = "Nejčastější nastavení"; // "Top settings";

//
// Referers
//
$lang['affluents_titre'] = "Příchody"; // "Referers";
$lang['affluents_recapimg'] = "Graf příchodů"; // "Visitors Chart by Referers";
$lang['affluents_directimg'] = "Přímo"; // "Direct";
$lang['affluents_sitesimg'] = "Weby"; // "Websites";
$lang['affluents_moteursimg'] = "Vyhledávače"; // "Engines";
$lang['affluents_referrersimg'] = "Příchody"; // "Referers";
$lang['affluents_moteurs'] = "Vyhledávače"; // "Search Engines";
$lang['affluents_nbparmoteur'] = "Návštěvy z vyhledávačů: %s"; // "Visits provided by search engines : %s";
$lang['affluents_aucunmoteur'] = "Žádné návštěvy z vyhledávačů."; // "No visits were provided by search engines.";
$lang['affluents_motscles'] = "Klíčová slova"; // "Keywords";
$lang['affluents_nbmotscles'] = "Konkrétní klíčová slova: %s"; // "Distinct keywords : %s";
$lang['affluents_aucunmotscles'] = "Žádná klíčová slova nenalezena."; // "No keyword found.";
$lang['affluents_sitesinternet'] = "Weby"; //"Websites";
$lang['affluents_nbautressites'] = "Návštěvy z jiných webů: %s"; //"Visits provided by other websites : %s";
$lang['affluents_nbautressitesdiff'] = "Počet jiných webů: %s"; //"Number of different websites : %s";
$lang['affluents_aucunautresite'] = "Žádné návštěvy z jiných webů."; //"No visits were provided by websites.";
$lang['affluents_entreedirecte'] = "Přímo"; // "Direct Request";
$lang['affluents_nbentreedirecte'] = "Přímé návštěvy: %s"; // "Direct request visits : %s";
$lang['affluents_nbpartenaires'] = "Návštěvy z partnerských webů : %s"; // "Visits provided by partners : %s";
$lang['affluents_aucunpartenaire'] = "Žádné návštěvy z partnerských webů."; // "No visits were provided by partners sites.";
$lang['affluents_nbnewsletters'] = "Návštěvy z informačních bulletinů : %s"; //  "Visits provided by newsletters : %s";
$lang['affluents_aucunnewsletter'] = "Žádné návštěvy z informačních bulletinů."; // "No visits were provided by newsletters.";
$lang['affluents_details'] = "Detaily"; // "Details";
$lang['affluents_interetsmoteurs'] = "Podíly vyhledávačů"; // "Search Engines Interests";
$lang['affluents_interetsmotscles'] = "Podíly klíčových slov"; // "Keywords Interests";
$lang['affluents_interetssitesinternet'] = "Podíly webů"; // "Websites Interests";
$lang['affluents_partenairesimg'] = "Partneři"; // "Partners";
$lang['affluents_partenaires'] = "Partnerské weby"; // "Partners";
$lang['affluents_interetspartenaires'] = "Podíly partnerských webů"; // "Partners Interests";
$lang['affluents_newslettersimg'] = "Bulletiny";
$lang['affluents_newsletters'] = "Informační bulletiny";
$lang['affluents_interetsnewsletters'] = "Podíly bulletinů"; // "Newsletters Interests";
$lang['affluents_type'] = "Typ příchodu"; // "Referer type";
$lang['affluents_interetstype'] = "Podíly typů příchodu"; // "Access type Interests";

//
// Summary
//
$lang['purge_titre'] = "Souhrn návštěv a jejich zdrojů"; // "Summary of the visits and referrals";
$lang['purge_intro'] = "Toto období bylo vymazáno správcem, zůstaly pouze základní statistiky."; // "This period was removed in the administration, only the essential statistics were kept.";
$lang['admin_purge'] = "Údržba databáze"; // "Database maintenance";
$lang['admin_purgeintro'] = "V této sekci můžete spravovat tabulky používané systémem phpMyVisites. Vidíte zde diskový prostor zabraný tabulkami, tabulky můžete optimalizovat, případně promazávat staré záznamy. Udržíte tak kontrolu nad velikostí tabulek ve své databázi."; // "This section lets you manage the tables used by phpMyVisites. You can see the disk space used by the tables, optimize them, or remove old records. This will enable you to limit the size of the tables in your database.";
$lang['admin_optimisation'] = "Optimalizace [ %s ]..."; // "Optimization of [ %s ]..."; // Tables names
$lang['admin_postopt'] = "Celková velikost snížena o %chiffres% %unites%"; // "The total size decreased by %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Odstranit následující období: %s"; // "Remove following periods: %s";
$lang['admin_purge_fini'] = "Mazání tabulek dokončeno..."; // "Finished deleting tables...";
$lang['admin_bdd_nom'] = "Jméno"; // "Name";
$lang['admin_bdd_enregistrements'] = "Záznamy"; // "Records";
$lang['admin_bdd_taille'] = "Velikost tabulky"; // "Table Size";
$lang['admin_bdd_opt'] = "Optimalizovat"; // "Optimize";
$lang['admin_bdd_purge'] = "Kritéria mazání"; // "Purge Criteria";
$lang['admin_bdd_optall'] = "Optimalizovat vše"; // "Optimize All";
$lang['admin_purge_j'] = "Odstranit záznamy starší než %s dní"; // "Remove records older than %s days";
$lang['admin_purge_s'] = "Odstranit záznamy starší než %s týdnů"; // "Remove records older than %s weeks";
$lang['admin_purge_m'] = "Odstranit záznamy starší než %s měsíců"; // "Remove records older than %s months";
$lang['admin_purge_y'] = "Odstranit záznamy starší než %s let"; // "Remove records older than %s years";
$lang['admin_purge_logs'] = "Odstranit všechny logy"; // "Remove all logs";
$lang['admin_purge_autres'] = "Odstranit společné pro tabulku '%s'"; // "Purge common to the table '%s'";
$lang['admin_purge_none'] = "Žádná dostupná akce"; // "No possible action";
$lang['admin_purge_cal'] = "Spočítat a smazat (může trvat několik minut)"; // "Calculate and purge (this can take a few minutes)";
$lang['admin_alias_title'] = "Aliasy a URL webových stránek"; // "Website aliases and URLs";
$lang['admin_partner_title'] = "Partneři webových stránek"; // "Website partners";
$lang['admin_newsletter_title'] = "Informační bulletiny webových stránek"; // "Website newsletters";
$lang['admin_ip_exclude_title'] = "Rozsahy IP adres určené k vyloučení ze statistik"; // "Ip address Ranges to exclude from the statistics";
$lang['admin_name'] = "Jméno:"; // "Name:";
$lang['admin_error_ip'] = "IP musí být ve správném formátu : %s"; // "Ip has to be in correct format: %s";
$lang['admin_site_name'] = "Jméno stránky"; // "Site Name";
$lang['admin_site_url'] = "Hlavní URL stránky"; // "Site main URL";
$lang['admin_db_log'] = "Přihlašte se jako hlavní správce a změňte nastavení databáze."; // "Try to login as phpMyVisites Super User to change database settings.";
$lang['admin_error_critical'] = "Chyba, nutno opravit, aby phpMyVisites fungovalo."; // "Error, need to be repaired for phpMyVisites to work.";
$lang['admin_warning'] = "Varování, phpMyVisites bude fungovat správně, ale některé nadstavby možná nebudou."; // "Warning, phpMyVisites will work correctly but maybe some extra features won't.";
$lang['admin_move_group'] = "Přesunout do skupiny:"; // "Move to group:";
$lang['admin_move_select'] = "Vybrat skupinu"; // "Select a group";

//
// Setup
//
$lang['admin_intro'] = "Vítejte v konfigurační oblasti phpMyVisites. Můžete upravit veškeré údaje vztahující se k vaší instalaci. Pokud budete mít jakékoli problémy, nahlédněte do %s oficiální dokumentace phpMyVisites%s."; //"Welcome to the phpMyVisites configuration area. You can modify all information relating to your installation. If you have any problems then do not hesitate to consult %s the official documentation of phpMyVisites %s."; // link to the doc
$lang['admin_configetperso'] = "Obecná nastavení"; // "General settings";
$lang['admin_afficherjavascript'] = "Zobrazit javascriptový kód pro statistiky";// "Show JavaScript statistics code";
$lang['admin_cookieadmin'] = "Vyloučit správce ze statistik"; // "Don't count the administrator within statistics";
$lang['admin_ip_ranges'] = "Vyloučit rozsahy IP ze statistik"; // "Don't count IP/IP ranges in the statistics";
$lang['admin_sitesenregistres'] = "Registrované weby"; // "Recorded websites:";
$lang['admin_retour'] = "Zpět"; // "Back";
$lang['admin_cookienavigateur'] = "Ze statistik můžete vyloučit správce. Tato metoda je založena na cookies a bude fungovat pouze v prohlížeči, který právě používáte. Nastavení můžete kdykoliv změnit."; // "You may exclude Adminstrator from statistics. This method is cookies based and this option will only work with this current browser. You can change this option at any time.";
$lang['admin_prendreencompteadmin'] = "Započítávat správce do statistik (smazat cookie)."; // "Count the administrator within statistics (delete the cookie)";
$lang['admin_nepasprendreencompteadmin'] = "Vyloučit správce ze statistik (vytvořit cookie)."; // "Don't count in the administrator within statistics (create a cookie)";
$lang['admin_etatcookieoui'] = "Správce je započítáván do statistik tohoto webu (Výchozí nastavení - jste považován za běžného návštěvníka)"; // "The Administrator is counted within statistics for this website (This is the default configuration, you are considered as a normal visitor)";
$lang['admin_etatcookienon'] = "Vaše návštěvy nejsou započítávány do statistik tohoto webu."; // "You are not counted within statistics for this website (Your visits will not be counted for this website)";
$lang['admin_deleteconfirm'] = "Prosím potvrďte, že chcete smazat %s?"; // "Please confirm that you want to delete %s?";
$lang['admin_sitedeletemessage'] = "Prosím <u>buďte velmi opatrní</u>: všechna data spojená s touto stránkou budou smazána <br /> a nebude existovat žádný způsob, jak ztracená data získat zpět."; // "Please <u>be very careful</u>: all datas associated to that Site will be deleted <br>and there won't be any way to recover the data loss.";
$lang['admin_confirmyes'] = "Ano, smazat"; // "Yes, I want to delete it";
$lang['admin_confirmno'] = "Ne, nemazat"; // "No, I don't want to delete it";
$lang['admin_nonewsletter'] = "Nenalezeny žádné informační bulletiny k této stránce!"; // "No newsletter found for this site!";
$lang['admin_nopartner'] = "Nenalezeny žádné partnerské weby k této stránce!"; // "No Partner found for this site!";
$lang['admin_get_question'] = "Zaznamenávat proměnné GET? (URL proměnné)"; // "Record GET variable? (URL variables)";
$lang['admin_get_a1'] = "Zaznamenávat VŠECHNY proměnné"; // "Record ALL url variables";
$lang['admin_get_a2'] = "Nezaznamenávat ŽÁDNOU proměnnou"; // "Do NOT record any url variable";
$lang['admin_get_a3'] = "Zaznamenávat POUZE výslovně uvedené proměnné"; // "Record ONLY specified variables";
$lang['admin_get_a4'] = "Zaznamenávat všechny KROMĚ výslovně uvedených proměnných"; // "Record all EXCEPT specified variables";
$lang['admin_get_list'] = "Jména proměnných (<b>;</b> oddělený seznam) <br />Příklad: %s"; // "Variable names (<b>;</b> separated list) <br/>Example : %s";
$lang['admin_required'] = "je vyžadováno %s."; // "%s is required.";
$lang['admin_title_required'] = "Vyžadované"; // "Required";
$lang['admin_write_dir'] = "Zapisovatelné adresáře"; // "Writable directories";
$lang['admin_chmod_howto'] = "Do těchto adresářů musí být možné zapisovat, tzn. musíte změnit jejich práva na 777 (ve vašem FTP programu klikněte pravým tlačítkem na adresář -> Oprávnění (nebo CHMOD))"; // "These directories need to be writable by the server. This means you have to chmod 755 them, with your FTP software (right-click on the directory -> Permissions (or chmod))";
$lang['admin_optional'] = "Volitelné"; // "Optional";
$lang['admin_memory_limit'] = "Limit paměti"; // "Memory limit";
$lang['admin_allowed'] = "povoleno"; // "allowed";
$lang['admin_webserver'] = "Webový server"; // "Web server";
$lang['admin_server_os'] = "Operační systém serveru"; // "Server OS";
$lang['admin_server_time'] = "Čas serveru"; // "Server time";
$lang['admin_legend'] = "Legenda"; // "Legend:";
$lang['admin_error_url'] = "URL musí být ve správném formátu : %s (bez lomítka na konci)"; // "URL has to be in a correct format : %s (without slash at the end)";
$lang['admin_url_n'] = "URL %s: "; // "Url %s:";
$lang['admin_url_aliases'] = "Aliasy URL"; // "URLs aliases";
$lang['admin_logo_question'] = "Zobrazit logo?"; // "Display logo?";
$lang['admin_type_again'] = "(napište znovu)"; // "(type again)";
$lang['admin_admin_mail'] = "Email hlavního správce"; // "Super Administrator email";
$lang['admin_admin'] = "Hlavní správce"; // "Super Administrator";
$lang['admin_phpmv_path'] = "Doplňte cestu k aplikaci phpMyVisites"; // "Complete path to the phpMyVisites application";
$lang['admin_valid_email'] = "Email musí být v platném formátu."; // "Email has to be a valid email";
$lang['admin_valid_pass'] = "Heslo musí být složitejší (minimálně 6 znaků, musí obsahovat číslice)"; // "Password must be more complex (6 characters mini, must contains numbers)";
$lang['admin_match_pass'] = "Hesla nesouhlasí"; // "Passwords do not match";
$lang['admin_no_user_group'] = "Pro tento web neexistuje žádný uživatel z této skupiny."; // "No user in this group for this site";
$lang['admin_recorded_nl'] = "Registrované bulletiny:"; // "Recorded newsletters:";
$lang['admin_recorded_partners'] = "Registrované partnerské weby:"; // "Recorded partners:";
$lang['admin_recorded_users'] = "Registrovaní uživatelé:"; // "Recorded users:";
$lang['admin_select_site_title'] = "Prosím vyberte web"; // "Please select a site";
$lang['admin_select_user_title'] = "Prosím vyberte uživatele"; // "Please select a user";
$lang['admin_no_user_registered'] = "Žádní registrovaní uživatelé!"; // "No user registered!";
$lang['admin_configuration'] = "Nastavení"; // "Configuration";
$lang['admin_general_conf'] = "Obecná nastavení"; // "General configuration";
$lang['admin_group_title'] = "Správa skupin (oprávnění)"; // "Groups manager (permissions)";
$lang['admin_user_title'] = "Správa uživatelů"; // "User management";
$lang['admin_user_add'] = "Přidat uživatele"; // "Add user";
$lang['admin_user_mod'] = "Upravit uživatele"; // "Modify user";
$lang['admin_user_del'] = "Smazat uživatele"; // "Delete user";
$lang['admin_server_info'] = "Informace o serveru"; // "Server Information";
$lang['admin_send_mail'] = "Poslat statistiky emailem"; // "Send statistics by email";
$lang['admin_rss_feed'] = "Statistiky jako RSS"; // "Statistics in a RSS feed";
$lang['admin_site_admin'] = "Správa webů"; // "Site Administration";
$lang['admin_site_add'] = "Přidat web"; // "Add site";
$lang['admin_site_mod'] = "Upravit web"; // "Modify site";
$lang['admin_site_del'] = "Smazat web"; // "Delete site";
$lang['admin_nl_add'] = "Přidat bulletin"; // "Add newsletter";
$lang['admin_nl_mod'] = "Upravit bulletin"; // "Modify newsletter";
$lang['admin_nl_del'] = "Smazat bulletin"; // "Delete newsletter";
$lang['admin_partner_add'] = "Přidat partnerský web"; // "Add partner";
$lang['admin_partner_mod'] = "Upravit jméno partnerského webu a jeho URL"; // "Modify partner's name and Url";
$lang['admin_partner_del'] = "Smazat partnerský web"; // "Delete partner";
$lang['admin_url_alias'] = "Správce URL aliasů"; // "Url alias Manager";
$lang['admin_group_admin_n'] = "Prohlížení statistik + Oprávnění správce"; // "View statistics + Admin permission";
$lang['admin_group_admin_d'] = "Uživatel si může prohlížet statistiky a může upravovat informace o webových stránkách (měnit jméno, přidat cookie, vyloučit rozsahy IP, spravovat aliasy URL/partnerské weby/informační bulletiny atd.)"; // "Users can view site statistics AND edit site information (name, add cookie, exclude IP ranges, manage URLs alias/partners/newsletters, etc.)";
$lang['admin_group_view_n'] = "Prohlížení statistik"; // "View statistics";
$lang['admin_group_view_d'] = "Uživatel si může pouze prohlížet statistiky. Nemá žádná oprávnění správce."; // "User can only view site statistics. No admin permission.";
$lang['admin_group_noperm_n'] = "Žádná oprávnění"; // "No permission";
$lang['admin_group_noperm_d'] = "Uživatelé v této skupině nemají žádná oprávnění prohlížet si statistiky nebo upravovat informace."; // "Users in this group don't have any permission of view statistics or edit information.";
$lang['admin_group_stitle'] = "Skupiny uživatelů můžete upravit výběrem těch uživatelů, které chcete změnit, a poté výběrem skupiny, do které chcete vybrané uživetele přesunout."; // "You can edit user's groups by selecting the users you want to change, and then select a group in which you want to move the selected users.";
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
$lang['install_loginmysql'] = "Jméno k databázi"; // "Database login";
$lang['install_mdpmysql'] = "Heslo k databázi"; // "Database password";
$lang['install_serveurmysql'] = "Databázový server"; // "Database server";
$lang['install_basemysql'] = "Jméno databáze"; // "Database name";
$lang['install_prefixetable'] = "Předpona tabulek"; // "Table prefix";
$lang['install_utilisateursavances'] = "Pokročilí uživatelé (volitelné)"; // "Advanced users (optional)";
$lang['install_oui'] = "Ano"; // "Yes";
$lang['install_non'] = "Ne"; // "No";
$lang['install_ok'] = "OK"; // "OK";
$lang['install_probleme'] = "Problém: "; // "Problem: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Jméno hlavního správce"; // "Super Administrator login";
$lang['install_mdpadmin'] = "Heslo hlavního správce"; // "Super Administrator password";
$lang['install_chemincomplet'] = "Doplňte cestu k aplikaci phpMyVisites (např. http://www.mysite.com/rep1/rep3/phpmyvisites/). Cesta musí končit <strong>/</strong>."; // "Complete path to the phpMyVisites application (like http://www.mysite.com/rep1/rep3/phpmyvisites/). The path must end with a <strong>/</strong>.";
$lang['install_afficherlogo'] = "Zobrazovat logo na vašich stránkách? %s <br /> Pokud povolíte zobrazení loga na vašich stránkách, pomůžete propagaci phpMyVisites a tomu, aby se aplikace vyvíjela rychleji. Také je to způsob jak poděkovat autorům, kteří strávili mnoho hodin vývojem této Open Source aplikace."; // "Show the logo on your pages? %s <br />By allowing the display of the logo on your site, you will help publicize phpMyVisites and help it evolve more rapidly. It is also a way to thank the authors who has spent many hours developing this Open Source, Free application."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Ukazovat grafy statistik."; // "Show statistics graphs.";
$lang['install_valider'] = "Potvrdit"; // "Submit"; // during installation and for login
$lang['install_popup_logo'] = "Prosím zvolte logo"; // "Please select a logo";
$lang['install_logodispo'] = "Prohlédnout si dostupná loga"; // "See the various logos available";
$lang['install_welcome'] = "Vítejte!"; // "Welcome!";
$lang['install_system_requirements'] = "Systémové požadavky"; // "System Requirements";
$lang['install_database_setup'] = "Nastavení databáze"; // "Database Setup";
$lang['install_create_tables'] = "Vytvoření tabulek"; // "Table creation";
$lang['install_general_setup'] = "Obecná nastavení"; // "General Setup";
$lang['install_create_config_file'] = "Vytvoření konfiguračního souboru"; // "Create Config File";
$lang['install_first_website_setup'] = "Přidání první webové stránky"; // "Add First Website";
$lang['install_display_javascript_code'] = "Zobrazení javascriptového kódu"; // "Display Javascript code";
$lang['install_finish'] = "Dokončení!"; // "Finished!";
$lang['install_txt2'] = "V závěru instalace bude na stránky projektu odeslána informace, která nám pomůže vést si evidenci o počtu uživatelů phpMyVisites. <strong>Nebudou samozřejmě odeslány žádné důvěrné informace</strong>. Děkujeme za pochopení."; // "At the end of installation, a request will be made to the official site to help us keep track of the number of people using phpMyVisites. Thank you for your understanding.";
$lang['install_database_setup_txt'] = "Prosím zadejte nastavení vaší databáze."; // "Please enter your Database settings.";
$lang['install_general_config_text'] = "phpMyVisites bude mít pouze jednoho správce, který bude mít kompletní přístup k prohlížení/úpravě čehokoliv. Zadejte prosím uživatelské jméno a heslo pro účet správce. Další uživatele můžete přidat později."; // "phpMyVisites will have only one administrator user who has full access to view/modify everything. Please choose a username and password for your super administrator account. You can add additional users later.";
$lang['install_config_file'] = "Informace o správci úspěšně zápsany."; // "Admin user info entered successfully.";
$lang['install_js_code_text'] = "<p>Aby byli započteni všichni návštěvníci, musíte javascriptový kód vložit do všech stránek. </p><p> Vaše stránky nemusí být vytvořeny v PHP, <strong>phpMyVisites bude fungovat na všech typech stránek (ať už to je HTML, ASP, Perl nebo jakýkoliv jiný jazyk)</strong>. </p><p> Zde je kód, který musíte přidat: (zkopírujte ho a vložte do všech vašich stránek)</p>"; // "<p>To count every visitors, you must insert the javascript code on all of your pages. </p><p> Your pages do not have to be made with PHP, <strong>phpMyVisites will work on all kinds of pages (whether it is HTML, ASP, Perl or any other languages).</strong> </p><p> Here is the code you have to insert: (copy and paste on all your pages) </p>";
$lang['install_intro'] = "Vítejte v instalaci phpMyVisites."; // "Welcome to the phpMyVisites installation.";
$lang['install_intro2'] = "Tento proces je rozdělen do %s jednoduchých kroků a zabere asi 10 minut."; // "This process is split up into %s easy steps and will take around 10 minutes.";
$lang['install_next_step'] = "Pokračovat na další krok"; // "Go to next step";
$lang['install_status'] = "Stav instalace"; // "Installation Status";
$lang['install_done'] = "Instalace dokončena z %s%%"; // "Install %s%% complete"; // Install 25% complete
$lang['install_site_success'] = "Webová stránka úspěšně vytvořena!"; // "Website created with success!";
$lang['install_site_info'] = "Prosím zadejte všechny informace o první webové stránce."; // "Please type in all information about the first website.";
$lang['install_go_phpmv'] = "Pokračovat na phpMyVisites"; // "Go to phpMyVisites!";
$lang['install_congratulation'] = "Blahopřejeme! Vaše instalace phpMyVisites byla dokončena."; // "Congratulations! Your phpMyVisites install is complete.";
$lang['install_end_text'] = "Ujistěte se, že na Vašich webových stránkách je správně nastaven javascriptový kód, a čekejte na své první návštěvníky."; // "Make sure your javascript code is well set on your pages, and wait for your first visitors!";
$lang['install_db_ok'] = "Připojení k databázi je v pořádku!"; // "Connection to database server ok!";
$lang['install_table_exist'] = "Tabulky phpMyVisites už v databázi existují."; // "phpMyVisites tables already exist in the database.";
$lang['install_table_choice'] = "Buď zvolte použití existujících tabulek nebo vyberte čistou instalaci, která smaže všechna data v databázi."; // "Either choose to reuse the existing database tables or select a clean install to erase all existing data in the database.";
$lang['install_table_erase'] = "Smazat všechny tabulky (buďte opatrní!)"; // "Erase all tables (be careful!)";
$lang['install_table_reuse'] = "Použít existující tabulky"; // "Reuse existing tables";
$lang['install_table_success'] = "Tabulky úspěšně vytvořeny!"; // "Tables created with success!";
$lang['install_send_mail'] = "Dostávat každý den email obsahující statistiky jednotlivých webů?"; // "Receive each day an email per website containing statistics summary?";

//
// Update Step
//
$lang['update_title'] = "Aktualizace phpMyVisites"; // "Update phpMyVisites";
$lang['update_subtitle'] = "Zjistili jsme, že aktualizujete phpMyVisites"; // "We detect that you are updating phpMyVisites.";
$lang['update_versions'] = "Vaše předchozí verze %s byla aktualizována na %s."; // "Your previous version was %s and we have updated it to %s.";
$lang['update_db_updated'] = "Vaše databáze byla úspěšně aktualizována!"; // "Your database was successfully updated!";
$lang['update_continue'] = "Pokračovat na phpMyVisites"; // "Continue to phpMyVisites";
$lang['update_jschange'] = "Varování! <br /> Javascriptový kód phpMyVisites byl změněn. Je NUTNÉ překopírovat nový kód na VŠECHNY vaše sledované webové stránky. <br /> Změny v javascriptovém kódu jsou výjimečné, omlouváme se za potíže, které vám touto změnou působíme."; // "Warning! <br /> The phpMyVisites javascript code has been modified. You MUST update your pages and copy/paste the new phpMyVisites Javascript on ALL your configured sites. <br /> The changes made to javascript code are rare, we apologies for the trouble we are taking you through with this change."; // TODO : translate

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
$lang['tdate1'] = "%daylong% %daynumeric%. %monthlong% %yearlong%";

// Monday 10
$lang['tdate2'] = "%daylong% %daynumeric%.";

// Week February 10 To February 17 2004
$lang['tdate3']  = "Týden od %daynumeric%. %monthlong% do %daynumeric2%. %monthlong2% %yearlong%";

// February 2004 Month
$lang['tdate4']  = "Měsíc %monthlong% %yearlong%";

// December 2003
$lang['tdate5']  = "%monthlong% %yearlong%";

// 10 Febuary week
$lang['tdate6']  = "Týden od %daynumeric%. %monthlong%";

// 10-02-2003 // February 2 2003
$lang['tdate7']  = "%daynumeric%.%monthnumeric%.%yearlong%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8']  = "%dayshort% %daynumeric%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9']  = " Týden od %daynumeric%. %monthshort%";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%monthshort% %yearshort%";

// Year 2004
$lang['tdate11'] = "Rok %yearlong%";

// 2004
$lang['tdate12'] = "%yearlong%";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "Leden";
$lang['moistab']['02'] = "Únor";
$lang['moistab']['03'] = "Březen";
$lang['moistab']['04'] = "Duben";
$lang['moistab']['05'] = "Květen";
$lang['moistab']['06'] = "Červen";
$lang['moistab']['07'] = "Červenec";
$lang['moistab']['08'] = "Srpen";
$lang['moistab']['09'] = "Září";
$lang['moistab']['10'] = "Říjen";
$lang['moistab']['11'] = "Listopad";
$lang['moistab']['12'] = "Prosinec";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Led";
$lang['moistab_graph']['02'] = "Úno";
$lang['moistab_graph']['03'] = "Bře";
$lang['moistab_graph']['04'] = "Dub";
$lang['moistab_graph']['05'] = "Kvě";
$lang['moistab_graph']['06'] = "Čer";
$lang['moistab_graph']['07'] = "Čec";
$lang['moistab_graph']['08'] = "Srp";
$lang['moistab_graph']['09'] = "Zář";
$lang['moistab_graph']['10'] = "Říj";
$lang['moistab_graph']['11'] = "Lis";
$lang['moistab_graph']['12'] = "Pro";

// Day of the week
$lang['jsemaine']['Mon'] = "Pondělí";
$lang['jsemaine']['Tue'] = "Úterý";
$lang['jsemaine']['Wed'] = "Středa";
$lang['jsemaine']['Thu'] = "Čtvrtek";
$lang['jsemaine']['Fri'] = "Pátek";
$lang['jsemaine']['Sat'] = "Sobota";
$lang['jsemaine']['Sun'] = "Neděle";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Po";
$lang['jsemaine_graph']['Tue'] = "Út";
$lang['jsemaine_graph']['Wed'] = "St";
$lang['jsemaine_graph']['Thu'] = "Čt";
$lang['jsemaine_graph']['Fri'] = "Pá";
$lang['jsemaine_graph']['Sat'] = "So";
$lang['jsemaine_graph']['Sun'] = "Ne";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "P";
$lang['calendrier_jours'][1] = "Ú";
$lang['calendrier_jours'][2] = "S";
$lang['calendrier_jours'][3] = "Č";
$lang['calendrier_jours'][4] = "P";
$lang['calendrier_jours'][5] = "S";
$lang['calendrier_jours'][6] = "N";

// DO NOT ALTER!
$lang['weekdays']['Mon'] = '1';
$lang['weekdays']['Tue'] = '2';
$lang['weekdays']['Wed'] = '3';
$lang['weekdays']['Thu'] = '4';
$lang['weekdays']['Fri'] = '5';
$lang['weekdays']['Sat'] = '6';
$lang['weekdays']['Sun'] = '7';

// Continents
$lang['eur'] = "Evropa"; // "Europe";
$lang['afr'] = "Afrika"; // "Africa";
$lang['asi'] = "Asie"; // "Asia";
$lang['ams'] = "Jižní a Střední Amerika"; // "South and Central America";
$lang['amn'] = "Severní Amerika"; // "North America";
$lang['oce'] = "Oceánie"; // "Oceania";

// Oceans
$lang['oc_pac'] = "Tichý oceán"; // "Pacific Ocean";
$lang['oc_atl'] = "Atlantský oceán"; // "Atlantic Ocean";
$lang['oc_ind'] = "Indický oceán"; // "Indian Ocean";

// Countries
$lang['domaines'] = array(
	"xx" => "Neznámé",
	"ac" => "Ostrov Asunción",
	"ad" => "Andora",
	"ae" => "Spojené Arabské Emiráty",
	"af" => "Afghánistán",
	"ag" => "Antigua a Barbuda",
	"ai" => "Anguilla",
	"al" => "Albánie",
	"am" => "Arménie",
	"an" => "Nizozemské Antilly",
	"ao" => "Angola",
	"aq" => "Antarktida",
	"ar" => "Argentina",
	"as" => "Americká Samoa",
	"at" => "Rakousko",
	"au" => "Austrálie",
	"aw" => "Aruba",
	"az" => "Ázerbajdžán",
	"ba" => "Bosna a Hercegovina",
	"bb" => "Barbados",
	"bd" => "Bangladéš",
	"be" => "Belgie",
	"bf" => "Burkina Faso",
	"bg" => "Bulharsko",
	"bh" => "Bahrajn",
	"bi" => "Burundi",
	"bj" => "Benin",
	"bm" => "Bermudy",
	"bn" => "Brunej",
	"bo" => "Bolívie",
	"br" => "Brazílie",
	"bs" => "Bahamy",
	"bt" => "Bhútán",
	"bv" => "Ostrov Bouvet",
	"bw" => "Botswana",
	"by" => "Bělorusko",
	"bz" => "Belize",
	"ca" => "Kanada",
	"cc" => "Kokosové ostrovy",
	"cd" => "Kongo", // "Demokratická republika Kongo"
	"cf" => "Středoafrická republika",
	"cg" => "Kongo",
	"ch" => "Švýcarsko",
	"ci" => "Pobřeží slonoviny",
	"ck" => "Cookovy ostrovy",
	"cl" => "Chile",
	"cm" => "Kamerun",
	"cn" => "Čína",
	"co" => "Kolumbie",
	"cr" => "Kostarika",
	"cs" => "Srbsko a Černá hora",
	"cu" => "Kuba",
	"cv" => "Kapverdy",
	"cx" => "Vánoční ostrov",
	"cy" => "Kypr",
	"cz" => "Česká republika",
	"de" => "Německo",
	"dj" => "Džibuti",
	"dk" => "Dánsko",
	"dm" => "Dominika",
	"do" => "Dominikánská republika",
	"dz" => "Alžír",
	"ec" => "Ekvádor",
	"ee" => "Estonsko",
	"eg" => "Egypt",
	"eh" => "Západní Sahara",
	"er" => "Eritrea",
	"es" => "Španělsko",
	"et" => "Etiopie",
	"fi" => "Finsko",
	"fj" => "Fidži",
	"fk" => "Falklandské ostrovy", // "Falklandské ostrovy (Malvíny)"
	"fm" => "Mikronésie", // "Federativní státy Mikronésie"
	"fo" => "Faerské ostrovy",
	"fr" => "Francie",
	"ga" => "Gabun",
	"gd" => "Grenada",
	"ge" => "Gruzie",
	"gf" => "Francouzská Guyana",
	"gg" => "Guernsey",
	"gh" => "Ghana",
	"gi" => "Gibraltar",
	"gl" => "Grónsko",
	"gm" => "Gambie",
	"gn" => "Guinea",
	"gp" => "Guadelup",
	"gq" => "Rovníková Guinea",
	"gr" => "Řecko",
	"gs" => "Jižní Georgia a Jižní Sandwichovy ostrovy",
	"gt" => "Guatemala",
	"gu" => "Guam",
	"gw" => "Guinea-Bissau",
	"gy" => "Guyana",
	"hk" => "Hong Kong",
	"hm" => "Heardův ostrov a McDonaldovy ostrovy",
	"hn" => "Honduras",
	"hr" => "Chorvatsko",
	"ht" => "Haiti",
	"hu" => "Maďarsko",
	"id" => "Indonésie",
	"ie" => "Irsko",
	"il" => "Izrael",
	"im" => "Ostrov Man",
	"in" => "Indie",
	"io" => "Britské indickooceánské území",
	"iq" => "Irák",
	"ir" => "Írán", // "Islámská republika Írán"
	"is" => "Island",
	"it" => "Itálie",
	"je" => "Jersey",
	"jm" => "Jamajka",
	"jo" => "Jordánsko",
	"jp" => "Japonsko",
	"ke" => "Keňa",
	"kg" => "Kyrgyzstán",
	"kh" => "Kambodža",
	"ki" => "Kiribati",
	"km" => "Komory",
	"kn" => "Svatý Kryštof a Nevis",
	"kp" => "KLDR", // "Korejská lidově demokratická republika"
	"kr" => "Rebublika Korea",
	"kw" => "Kuvajt",
	"ky" => "Kajmanské ostrovy",
	"kz" => "Kazachstán",
	"la" => "Laos",
	"lb" => "Libanon",
	"lc" => "Svatá Lucie",
	"li" => "Lichtenštejnsko",
	"lk" => "Srí Lanka",
	"lr" => "Liberia",
	"ls" => "Lesotho",
	"lt" => "Litva",
	"lu" => "Lucembursko",
	"lv" => "Lotyšsko",
	"ly" => "Lybie",
	"ma" => "Maroko",
	"mc" => "Monako",
	"md" => "Moldávie", // "Republika Moldávie"
	"mg" => "Madagaskar",
	"mh" => "Marshallovy ostrovy",
	"mk" => "Makedonie",
	"ml" => "Mali",
	"mm" => "Myanmar",
	"mn" => "Mongolsko",
	"mo" => "Macao",
	"mp" => "Severní Mariany",
	"mq" => "Martinik",
	"mr" => "Mauretánie",
	"ms" => "Montserrat",
	"mt" => "Malta",
	"mu" => "Mauricius",
	"mv" => "Maledivy",
	"mw" => "Malawi",
	"mx" => "Mexiko",
	"my" => "Malajsie",
	"mz" => "Mozambik",
	"na" => "Namibie",
	"nc" => "Nová Kaledonie",
	"ne" => "Niger",
	"nf" => "Ostrov Norfolk",
	"ng" => "Nigérie",
	"ni" => "Nikaragua",
	"nl" => "Nizozemí",
	"no" => "Norsko",
	"np" => "Nepál",
	"nr" => "Nauru",
	"nu" => "Niue",
	"nz" => "Nový Zéland",
	"om" => "Omán",
	"pa" => "Panama",
	"pe" => "Peru",
	"pf" => "Francouzská Polynésie",
	"pg" => "Papua Nová Guinea",
	"ph" => "Filipíny",
	"pk" => "Pákistán",
	"pl" => "Polsko",
	"pm" => "Svatý Pierre a Miquelon",
	"pn" => "Pitcairn",
	"pr" => "Portoriko",
	"ps" => "Palestina", // "Palestinská území",
	"pt" => "Portugalsko",
	"pw" => "Palau",
	"py" => "Paraguay",
	"qa" => "Katar",
	"re" => "Ostrov Reunion",
	"ro" => "Rumunsko",
	"ru" => "Ruská federace",
	"rs" => "Rusko",
	"rw" => "Rwanda",
	"sa" => "Saudská Arábie",
	"sb" => "Šalamounovy ostrovy",
	"sc" => "Seychely",
	"sd" => "Súdán",
	"se" => "Švédsko",
	"sg" => "Singapur",
	"sh" => "Svatá Helena",
	"si" => "Slovinsko",
	"sj" => "Svalbard",
	"sk" => "Slovensko",
	"sl" => "Sierra Leone",
	"sm" => "San Marino",
	"sn" => "Senegal",
	"so" => "Somálsko",
	"sr" => "Surinam",
	"st" => "Svatý Tomáš a Princův ostrov",
	"su" => "Bývalé S.S.S.R.",
	"sv" => "Salvádor",
	"sy" => "Syrská arabská republika",
	"sz" => "Swaziland",
	"tc" => "Ostrovy Turks a Caicos",
	"td" => "Čad",
	"tf" => "Francouzské jížní teritorium",
	"tg" => "Togo",
	"th" => "Thajsko",
	"tj" => "Tadžikistán",
	"tk" => "Tokelau",
	"tm" => "Turkmenistán",
	"tn" => "Tunisko",
	"to" => "Tonga",
	"tp" => "Východní Timor",
	"tr" => "Turecko",
	"tt" => "Trinidad a Tobago",
	"tv" => "Tuvalu",
	"tw" => "Taiwan",
	"tz" => "Tanzanie", // "Spojená republika Tanzanie"
	"ua" => "Ukrajina",
	"ug" => "Uganda",
	"uk" => "Spojené království",
	"gb" => "Velká Británie",
	"um" => "Austrálie a oceánie",
	"us" => "USA", // "Spojené Státy"
	"uy" => "Uruguay",
	"uz" => "Uzbekistán",
	"va" => "Vatikán",
	"vc" => "Svatý Vincent a Grenadiny",
	"ve" => "Venezuela",
	"vg" => "Britské Panenské ostrovy",
	"vi" => "Americké Panenské ostrovy",
	"vn" => "Vietnam",
	"vu" => "Vanuatu",
	"wf" => "Wallis a Futuna",
	"ws" => "Samoa",
	"ye" => "Jemen",
	"yt" => "Mayotte",
	"yu" => "Jugoslávie",
	"za" => "Jižní Afrika",
	"zm" => "Zambie",
	"zr" => "Zair",
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
	"ws" => "Samoa",
);
?>