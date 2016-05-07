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
$lang['auteur_nom'] = "Michael Alvmarken"; // Translator's name
$lang['auteur_email'] = "miknor@users.sourceforge.net"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "se"; // iso language code
$lang['lang_libelle_en'] = "Swedish"; // english language name
$lang['lang_libelle_fr'] = "Suédois"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = ' '; // three thousands spells 300,000 in english
$lang['separateur_decimaux'] = ','; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | open source applikation för analys av website statistik och webtrafik"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, script, skript, applikation, program, statistik, referals, gratis, open source, gpl, besökare, besök, mysql, visade sidor, sidor, visningar, antal besök, grafer, webläsare, os, operativsystem, upplösningar, dag, vecka, månad, poster, land, värd, ISP, sökmotor, nyckelord, graf, ingångssida, utgångssida, pajdiagram"; // Header keywords
$lang['head_description'] = "phpMyVisites | En open source applikation för website statistik utvecklad i PHP/MySQL och distribuerad under Gnu GPL."; // Header description
$lang['logo_description'] = "phpMyVisites : En open source applikation för website statistik gjord i PHP/MySQL, distribuerad under GPL."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "besök";
$lang['menu_pagesvues'] = "Visade sidor";
$lang['menu_suivi'] = "Uppföljning";
$lang['menu_provenance'] = "Källa";
$lang['menu_configurations'] = "Inställningar";
$lang['menu_affluents'] = "Hänvisningar";
$lang['menu_listesites'] = "Lista siter";
$lang['menu_bilansites'] = "Summary";
$lang['menu_jour'] = "Dag";
$lang['menu_semaine'] = "vecka";
$lang['menu_mois'] = "Månad";
$lang['menu_annee'] = "Year";
$lang['menu_periode'] = "Studerad period: %s"; // Text formated (e.g.: Studied period: Thuesday, september the 11th)
$lang['liens_siteofficiel'] = "Officiell website";
$lang['liens_admin'] = "Administration";
$lang['liens_contacts'] = "Kontakter";

//
// Divers
//
$lang['generique_nombre'] = "Nummer";
$lang['generique_tauxsortie'] = "Avsluta gradering";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Sidan skapades på %s sekunder"; // Time in seconds
$lang['generique_divers'] = "Andra"; // (for the graphs)
$lang['generique_inconnu'] = "Okända"; // (for the graphs)
$lang['generique_vous'] = "... You ?";
$lang['generique_traducteur'] = "Translator";
$lang['generique_langue'] = "Language";
$lang['generique_autrelangure'] = "Annat språk?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "No visitor in this period."; 
$lang['generique_aucune_visite_bdd'] = "<b>Warning ! </b> You have no visitor recorded in the database for the current site. Please be sure you've installed your javascript code on your pages, with the correct phpMyVisites URL <u>IN</u> the Javascript code. Try documentation for help.";
$lang['generique_aucune_site_bdd'] = "No site registered in the database ! Try to Try to login as phpMyVisites Super User to add a new site.";
$lang['generique_retourhaut'] = "Top";
$lang['generique_tempsvisite'] = "%smin %ss"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%sh"; // 4h means 4 hours
$lang['generique_siteno'] = "Site %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Newsletter %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "Partner %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "General";
$lang['generique_user'] = "User %s"; // User "Admin"
$lang['generique_previous'] = "Previous";
$lang['generique_next'] = "Next";
$lang['generique_lowpop'] = "Exclude low population from statistics";
$lang['generique_allpop'] = "Include all the population in statistics";
$lang['generique_to'] = "to"; // 4 'to' 8
$lang['generique_total_on'] = "on"; // 4 to 8 'on' 10
$lang['generique_total'] = "Totalt";
$lang['generique_information'] = "Information";
$lang['generique_done'] = "Done!";
$lang['generique_other'] = "Other";
$lang['generique_description'] = "Description:";
$lang['generique_name'] = "Name:";
$lang['generique_variables'] = "Variables";
$lang['generique_logout'] = "Logout";
$lang['generique_login'] = "Login";
$lang['generique_hits'] = "Hits";
$lang['generique_errors'] = "Errors";
$lang['generique_site'] = "Site";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "lösenord : "; // lowercase
$lang['login_login'] = "inloggning : "; // lowercase
$lang['login_error'] = "Kan inte logga in. Fel inloggningsnamn eller lösenord.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "You wish to enter a %sphpMyVisites%s protected area.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Kontaktinformation";
$lang['contacts_langue'] = "ÖVersättningar";
$lang['contacts_merci'] = "Tack till";
$lang['contacts_auteur'] = "Författare och skapare av phpMyVisites projektet är <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "För <strong>tekniska frågor, buggrapporter och förslag</strong> vänligen använd den officiella hemsidans forum %s. För andra önskemål, vänligen kontakta författaren via den officiella hemsidans kontaktformulär."; // adresse du site
$lang['contacts_trad1'] = "Vill du översätta phpMyVisites till ditt språk? Tveka inte för <strong>phpMyVisites behöver dig!</strong>";
$lang['contacts_trad2'] = "Översättning av phpMyVisites tar ett tag (några timmar) och kräver god kunskap om de inblandade språken; men kom ihåg att <strong>jobbet du gör kommer att gagna ett stort antal användare</strong>.  Om du är intresserad av att översätta phpMyVisites kan du hitta all nödvändig information i den %s officiella dokumentationen av phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "Tveka inte att konsultera %s den officiella dokumentationen av phpMyVisites %s vilken ger dig gott om information om hur du installerar, konfigurerar och använder phpMyVisites. Den finns tillgänglig i din version av phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Thank you <strong>%s</strong>, co-developers of phpMyVisites, for their high quality work on the project.";
$lang['contacts_merci3'] = "Titta gärna på acknowledgments sidan på den officiella hemsidan för att få en komplett lista över phpMyVisites-vänner.";
$lang['contacts_merci2'] = "Ett stort tack till alla som bidragit med sina översättningar till phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Site %s on %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Go to detailed statistics";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Besökarinformation"; 
$lang['visites_statistiques'] = "Statistik";
$lang['visites_periodesel'] = "För den valda perioden";
$lang['visites_visites'] = "Besök";
$lang['visites_uniques'] = "Unika besökare";
$lang['visites_pagesvues'] = "Visade sidor";
$lang['visites_pagesvisiteurs'] = "Sidor per besökare"; 
$lang['visites_pagesvisites'] = "Pages per visit"; 
$lang['visites_pagesvisitessign'] = "Pages per significant visit"; 
$lang['visites_tempsmoyen'] = "Genomsnittlig längd på besök";
$lang['visites_tempsmoyenpv'] = "Genomsnittligt tid per visad sida";
$lang['visites_tauxvisite'] = "1 sidas besöksfrekvens"; 
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Periodsummering";
$lang['visites_nbvisites'] = "Besök";
$lang['visites_aucunevivisite'] = "Inga besök"; // in the table, must be short
$lang['visites_recap'] = "Summering";
$lang['visites_unepage'] = "1 sida"; // (graph)
$lang['visites_pages'] = "%s sidor"; // 1-2 pages (graph)
$lang['visites_min'] = "%s min"; // 10-15 min (graph)
$lang['visites_sec'] = "%s s"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Diagram för att visa statistiksummering";
$lang['visites_grapghrecaplongterm'] = "Graph to show long term statistics summary";
$lang['visites_graphtempsvisites'] = "Diagram för att visa besökslängden per besökare";
$lang['visites_graphtempsvisitesimg'] = "Besökslängd per besökare";
$lang['visites_graphheureserveur'] = "Diagram för att visa besök per timme på servern"; 
$lang['visites_graphheureserveurimg'] = "Besök per timme och server"; 
$lang['visites_graphheurevisiteur'] = "Diagram för att visa besök per timme för besökaren";
$lang['visites_graphheurelocalimg'] = "Besök i lokal tid"; 
$lang['visites_longterm_statd'] = "Long term Analysis (Days of the Period)";
$lang['visites_longterm_statm'] = "Long term Analysis (Months in the Period)";

//
// Sites Summary
//
$lang['summary_title'] = "Site Summary";
$lang['summary_stitle'] = "Summary";

//
// Frequency Part
//
$lang['frequence_titre'] = "Returning visitors";
$lang['frequence_nouveauxconnusgraph'] = "Graph to show New vs Returning visits";
$lang['frequence_nouveauxconnus'] = "New vs Returning visits";
$lang['frequence_titremenu'] = "Frequency";
$lang['frequence_visitesconnues'] = "Returning visits";
$lang['frequence_nouvellesvisites'] = "New visits";
$lang['frequence_visiteursconnus'] = "Returning visitors";
$lang['frequence_nouveauxvisiteurs'] = "New visitors";
$lang['frequence_returningrate'] = "Returning rate";
$lang['pagesvues_vispervisgraph'] = "Graph to show number of visits per visitor";
$lang['frequence_vispervis'] = "Number of visits per visitor";
$lang['frequence_vis'] = "visit";
$lang['frequence_visit'] = "1 visit"; // (graph)
$lang['frequence_visits'] = "%s visits"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Sidvisningsinformation";
$lang['pagesvues_joursel'] = "Vald dag";
$lang['pagesvues_jmoins7'] = "Dag - 7";
$lang['pagesvues_jmoins14'] = "Dag - 14";
$lang['pagesvues_moyenne'] = "(genomsnitt)";
$lang['pagesvues_pagesvues'] = "Sidvisningar";
$lang['pagesvues_pagesvudiff'] = "Unika sidvisningar";
$lang['pagesvues_recordpages'] = "Flest visade sidor för en besökare";
$lang['pagesvues_tabdetails'] = "Visade sidor (från %s till %s)"; // (de 1   21)
$lang['pagesvues_graphsnbpages'] = "Diagram för att visa antal besök per visad sida";
$lang['pagesvues_graphnbvisitespageimg'] = "Besök per besökt sida";
$lang['pagesvues_graphheureserveur'] = "Diagram för att visa besök i servertid";
$lang['pagesvues_graphheureserveurimg'] = "Besök i servertid";
$lang['pagesvues_graphheurevisiteur'] = "Diagram för att visa besök i lokal tid";
$lang['pagesvues_graphpageslocalimg'] = "Besök i lokal tid";
$lang['pagesvues_tempsparpage'] = "Time by page";
$lang['pagesvues_total_time'] = "Total time";
$lang['pagesvues_avg_time'] = "Average time";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "besökarförflyttningar";
$lang['suivi_pageentree'] = "Ingångssidor";
$lang['suivi_pagesortie'] = "Utgångssidor";
$lang['suivi_tauxsortie'] = "Utgångshastighet";
$lang['suivi_pageentreehits'] = "Entry hits";
$lang['suivi_pagesortiehits'] = "Exit hits";
$lang['suivi_singlepage'] = "Single Pages visits";

//
// Origin
//
$lang['provenance_titre'] = "Besökarursprung";
$lang['provenance_recappays'] = "Summering per land";
$lang['provenance_pays'] = "Länder";
$lang['provenance_paysimg'] = "Besökardiagram per land";
$lang['provenance_fai'] = "Internet Service Providers";
$lang['provenance_nbpays'] = "Number of different countries : %s";
$lang['provenance_provider'] = "ISP's"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "Kontinent";
$lang['provenance_mappemonde'] = "Världskarta";
$lang['provenance_interetspays'] = "Countries Interests";

//
// Setup
//
$lang['configurations_titre'] = "besökarinställningar";
$lang['configurations_os'] = "Operativsystem";
$lang['configurations_osimg'] = "Diagram för att visa besökarnas operativsystem";
$lang['configurations_navigateurs'] = "Webläsare";
$lang['configurations_navigateursimg'] = "Diagram för att visa besökarnas webläsare";
$lang['configurations_resolutions'] = "Skärmupplösning";
$lang['configurations_resolutionsimg'] = "Diagram för att visa besökarnas skärmupplösningar";
$lang['configurations_couleurs'] = "Färgdjup";
$lang['configurations_couleursimg'] = "Diagram för att visa besökarnas färgdjup";
$lang['configurations_rapport'] = "Normal/widescreen";
$lang['configurations_large'] = "Widescreen";
$lang['configurations_normal'] = "Normal";
$lang['configurations_double'] = "Dual Screen";
$lang['configurations_plugins'] = "Plugins"; // TODO : translate
$lang['configurations_navigateursbytype'] = "Browsers (by type)"; // TODO : translate
$lang['configurations_navigateursbytypeimg'] = "Graph to show browsers types"; // TODO : translate
$lang['configurations_os_interest'] = "Operating Systems Interest";
$lang['configurations_navigateurs_interest'] = "Browsers Interest";
$lang['configurations_resolutions_interest'] = "Screen Resolutions Interest";
$lang['configurations_couleurs_interest'] = "Color Depth Interest";
$lang['configurations_configurations'] = "Top settings";

//
// Referers
//
$lang['affluents_titre'] = "Referers";
$lang['affluents_recapimg'] = "Besökardiagram per Referer";
$lang['affluents_directimg'] = "Direkt";
$lang['affluents_sitesimg'] = "Webbplatser";
$lang['affluents_moteursimg'] = "Sökmotorer";
$lang['affluents_referrersimg'] = "Hänvisare";
$lang['affluents_moteurs'] = "Sökmotorer";
$lang['affluents_nbparmoteur'] = "Besök genererade av sökmotorer : %s";
$lang['affluents_aucunmoteur'] = "Inga besök genererade av sökmotorer.";
$lang['affluents_motscles'] = "Nyckelord";
$lang['affluents_nbmotscles'] = "Distinkta nyckelord : %s";
$lang['affluents_aucunmotscles'] = "Inga nyckelord hittades.";
$lang['affluents_sitesinternet'] = "Websiter";
$lang['affluents_nbautressites'] = "Besök genererade av andra websiter : %s";
$lang['affluents_nbautressitesdiff'] = "Antal olika websiter : %s";
$lang['affluents_aucunautresite'] = "Inga besök genererade av andra websiter.";
$lang['affluents_entreedirecte'] = "Direkt förfrågan";
$lang['affluents_nbentreedirecte'] = "Besök via Direkt förfrågan : %s";
$lang['affluents_nbpartenaires'] = "Visits provided by partners : %s";
$lang['affluents_aucunpartenaire'] = "No visits were provided by partners sites.";
$lang['affluents_nbnewsletters'] = "Visits provided by newsletters : %s";
$lang['affluents_aucunnewsletter'] = "No visits were provided by newsletters.";
$lang['affluents_details'] = "Detaljer"; // In the results of the referers array
$lang['affluents_interetsmoteurs'] = "Search Engines Interests";
$lang['affluents_interetsmotscles'] = "Keywords Interests";
$lang['affluents_interetssitesinternet'] = "Websites Interests";
$lang['affluents_partenairesimg'] = "Partners";
$lang['affluents_partenaires'] = "Partners";
$lang['affluents_interetspartenaires'] = "Partners Interests";
$lang['affluents_newslettersimg'] = "Newsletters";
$lang['affluents_newsletters'] = "Newsletters";
$lang['affluents_interetsnewsletters'] = "Newsletters Interests";
$lang['affluents_type'] = "Referer type";
$lang['affluents_interetstype'] = "Access type Interests";

//
// Summary
//
$lang['purge_titre'] = "Summering av besök och hänvisningar";
$lang['purge_intro'] = "Denna period har tagits bort, bara den väsentliga statistiken har sparats.";
$lang['admin_purge'] = "Databasunderhåll";
$lang['admin_purgeintro'] = "Denna del låter dig administrera tabellerna som används av phpMyVisites. Du kan se diskutrymmet som används av tabellerna, optimera dem, eller ta bort gamla poster. Detta gör att du kan begränsa tabellernas storlek i din databas.";
$lang['admin_optimisation'] = "Optimering av [ %s ]..."; // Tables names
$lang['admin_postopt'] = "Den totala storleken minskade med %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Ta bort följande perioder: %s";
$lang['admin_purge_fini'] = "Klar med borttagning av tabeller...";
$lang['admin_bdd_nom'] = "Namn";
$lang['admin_bdd_enregistrements'] = "Poster";
$lang['admin_bdd_taille'] = "Tabellstorlek";
$lang['admin_bdd_opt'] = "Optimera";
$lang['admin_bdd_purge'] = "Rensa Kriterier";
$lang['admin_bdd_optall'] = "Optimera alla";
$lang['admin_purge_j'] = "Ta bort poster äldre än %s dagar";
$lang['admin_purge_s'] = "Ta bort poster äldre än %s veckor";
$lang['admin_purge_m'] = "Ta bort poster äldre än %s månader";
$lang['admin_purge_y'] = "Remove records older than %s years";
$lang['admin_purge_logs'] = "Ta bort alla loggfiler";
$lang['admin_purge_autres'] = "Rensa gemensamma i tabellen '%s'";
$lang['admin_purge_none'] = "Ingen möjlig åtgärd";
$lang['admin_purge_cal'] = "Kalkylera och rensa (detta kan ta några minuter)";
$lang['admin_alias_title'] = "Website aliases and URLs";
$lang['admin_partner_title'] = "Website partners";
$lang['admin_newsletter_title'] = "Website newsletters";
$lang['admin_ip_exclude_title'] = "IP address ranges to exclude from the statistics";
$lang['admin_name'] = "Name:";
$lang['admin_error_ip'] = "IP has to be in correct format: %s";
$lang['admin_site_name'] = "Site Name";
$lang['admin_site_url'] = "Site main URL";
$lang['admin_db_log'] = "Try to login as phpMyVisites Super User to change database settings.";
$lang['admin_error_critical'] = "Error, needs to be repaired for phpMyVisites to work.";
$lang['admin_warning'] = "Warning, phpMyVisites will work correctly but maybe some extra features won't.";
$lang['admin_move_group'] = "Move to group:";
$lang['admin_move_select'] = "Select a group";

//
// Setup
//
$lang['admin_intro'] = "Välkommen till phpMyVisites konfigurationsarea. Du kan ändra all information som relaterar till din installation. Om du har några problem kan du titta i %s den officiella dokumentationen av phpMyVisites %s."; // link to the doc
$lang['admin_configetperso'] = "Generella inställningar";
$lang['admin_afficherjavascript'] = "Visa JavaScript statistikkod";
$lang['admin_cookieadmin'] = "Räkna inte med administratören i statistiken";
$lang['admin_ip_ranges'] = "Don't count IP/IP ranges in the statistics";
$lang['admin_sitesenregistres'] = "Angivna webbplatser:";
$lang['admin_retour'] = "Tillbaka";
$lang['admin_cookienavigateur'] = "Du kan exkludera Adminstratören från statistiken. Denna metod är baserad på cookies och detta val fungerar bara med den nuvarande webläsaren. Du kan ändra detta val när som helst.";
$lang['admin_prendreencompteadmin'] = "Räkna med administratören i statistiken (radera cookie)";
$lang['admin_nepasprendreencompteadmin'] = "Räkna inte med administratören i statistiken (skapa en cookie)";
$lang['admin_etatcookieoui'] = "Administratören räknas med i statistiken för denna webbplats (Detta är standardkonfigurationen, du kommer att räknas som en vanlig besökare)";
$lang['admin_etatcookienon'] = "Du räknas inte med i statistiken för denna webbplats (Dina besök kommer inte att räknas)";
$lang['admin_deleteconfirm'] = "Please confirm that you want to delete %s?";
$lang['admin_sitedeletemessage'] = "Please <u>be very careful</u>: all data associated to that Site will be deleted <br>and there won't be any way to recover the data loss.";
$lang['admin_confirmyes'] = "Yes, I want to delete it";
$lang['admin_confirmno'] = "No, I don't want to delete it";
$lang['admin_nonewsletter'] = "No newsletter found for this site!";
$lang['admin_nopartner'] = "No Partner found for this site!";
$lang['admin_get_question'] = "Record GET variable? (URL variables)";
$lang['admin_get_a1'] = "Record ALL URL variables";
$lang['admin_get_a2'] = "Do NOT record any URL variable";
$lang['admin_get_a3'] = "Record ONLY specified variables";
$lang['admin_get_a4'] = "Record all EXCEPT specified variables";
$lang['admin_get_list'] = "Variable names (<b>;</b> separated list) <br/>Example : %s";
$lang['admin_required'] = "%s is required.";
$lang['admin_title_required'] = "Required";
$lang['admin_write_dir'] = "Writable directories";
$lang['admin_chmod_howto'] = "These directories need to be writable by the server. This means you have to chmod 777 them, with your FTP software (right-click on the directory -> Permissions (or chmod))";
$lang['admin_optional'] = "Optional";
$lang['admin_memory_limit'] = "Memory limit";
$lang['admin_allowed'] = "allowed";
$lang['admin_webserver'] = "Web server";
$lang['admin_server_os'] = "Server OS";
$lang['admin_server_time'] = "Server time";
$lang['admin_legend'] = "Legend:";
$lang['admin_error_url'] = "URL has to be in a correct format : %s (without slash at the end)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URLs aliases";
$lang['admin_logo_question'] = "Display logo?";
$lang['admin_type_again'] = "(type again)";
$lang['admin_admin_mail'] = "Super Administrator email";
$lang['admin_admin'] = "Super Administrator";
$lang['admin_phpmv_path'] = "Complete path to the phpMyVisites application";
$lang['admin_valid_email'] = "Email has to be a valid email";
$lang['admin_valid_pass'] = "Password must be more complex (6 characters minimum, must contain numbers)";
$lang['admin_match_pass'] = "Passwords do not match";
$lang['admin_no_user_group'] = "No user in this group for this site";
$lang['admin_recorded_nl'] = "Recorded newsletters:";
$lang['admin_recorded_partners'] = "Recorded partners:";
$lang['admin_recorded_users'] = "Recorded users:";
$lang['admin_select_site_title'] = "Please select a site";
$lang['admin_select_user_title'] = "Please select a user";
$lang['admin_no_user_registered'] = "No user registered!";
$lang['admin_configuration'] = "Configuration";
$lang['admin_general_conf'] = "General configuration";
$lang['admin_group_title'] = "Groups manager (permissions)";
$lang['admin_user_title'] = "User management";
$lang['admin_user_add'] = "Add user";
$lang['admin_user_mod'] = "Modify user";
$lang['admin_user_del'] = "Delete user";
$lang['admin_server_info'] = "Server Information";
$lang['admin_send_mail'] = "Send statistics by email";
$lang['admin_rss_feed'] = "Statistics in a RSS feed";
$lang['admin_site_admin'] = "Site Administration";
$lang['admin_site_add'] = "Add site";
$lang['admin_site_mod'] = "Modify site";
$lang['admin_site_del'] = "Delete site";
$lang['admin_nl_add'] = "Add newsletter";
$lang['admin_nl_mod'] = "Modify newsletter";
$lang['admin_nl_del'] = "Delete newsletter";
$lang['admin_partner_add'] = "Add partner";
$lang['admin_partner_mod'] = "Modify partner's name and URL";
$lang['admin_partner_del'] = "Delete partner";
$lang['admin_url_alias'] = "URL alias Manager";
$lang['admin_group_admin_n'] = "View statistics + Admin permission";
$lang['admin_group_admin_d'] = "Users can view site statistics AND edit site information (name, add cookie, exclude IP ranges, manage URLs alias/partners/newsletters, etc.)";
$lang['admin_group_view_n'] = "View statistics";
$lang['admin_group_view_d'] = "User can only view site statistics. No admin permission.";
$lang['admin_group_noperm_n'] = "No permission";
$lang['admin_group_noperm_d'] = "Users in this group don't have any permission to view statistics or edit information.";
$lang['admin_group_stitle'] = "You can edit user's groups by selecting the users you want to change, and then select a group in which you want to move the selected users.";
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
$lang['install_loginmysql'] = "Användarnamn för databasen";
$lang['install_mdpmysql'] = "Lösenord för databasen";
$lang['install_serveurmysql'] = "Databasserver";
$lang['install_basemysql'] = "Databasnamn";
$lang['install_prefixetable'] = "Tabellprefix";
$lang['install_utilisateursavances'] = "Avancerade användare (valfritt)";
$lang['install_oui'] = "Ja";
$lang['install_non'] = "Nej";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Problem: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Användarnamn för administratören:";
$lang['install_mdpadmin'] = "Lösenord för administratören:";
$lang['install_chemincomplet'] = "Fullständig sökväg till phpMyVisites (som http://www.mysite.com/rep1/rep3/phpmyvisites/). Sökvägen måste sluta med ett <strong>/</strong>.";
$lang['install_afficherlogo'] = "Visa logon på dina sidor? %s <br />By allowing the display of the logo on your site, you will help publicize phpMyVisites and help it evolve more rapidly.  It is also a way to thank the author who has spent many hours developing this Open Source, free application."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Visa statistikdiagram.";
$lang['install_valider'] = "Skicka"; //  during installation and for login
$lang['install_popup_logo'] = "Please select a logo"; // TODO : translate
$lang['install_logodispo'] = "See the various logos available"; // TODO : translate
$lang['install_welcome'] = "Welcome!";
$lang['install_system_requirements'] = "System Requirements";
$lang['install_database_setup'] = "Database Setup";
$lang['install_create_tables'] = "Table creation";
$lang['install_general_setup'] = "General Setup";
$lang['install_create_config_file'] = "Create Config File";
$lang['install_first_website_setup'] = "Add First Website";
$lang['install_display_javascript_code'] = "Display Javascript code";
$lang['install_finish'] = "Finished!";
$lang['install_txt2'] = "I slutet av installationen kommer en förfrågan att göras till den officiella phpmyvisites siten att göras för att hjälpa oss hålla reda på hur många som använder phpMyVisites.";
$lang['install_database_setup_txt'] = "Please enter your Database settings.";
$lang['install_general_config_text'] = "phpMyVisites will have only one administrator user who has full access to view/modify everything. Please choose a username and password for your super administrator account. You can add additional users later.";
$lang['install_config_file'] = " Admin user info entered successfully.";
$lang['install_js_code_text'] = "<p>To count all visitors, you must insert the javascript code on all of your pages. </p><p> Your pages do not have to be made with PHP, <strong>phpMyVisites will work on all kinds of pages (whether it is HTML, ASP, Perl or any other languages).</strong> </p><p> Here is the code you have to insert: (copy and paste on all your pages) </p>";
$lang['install_intro'] = "Welcome to the phpMyVisites installation."; 
$lang['install_intro2'] = "This process is split up into %s easy steps and will take around 10 minutes.";
$lang['install_next_step'] = "Go to next step";
$lang['install_status'] = "Installation Status";
$lang['install_done'] = "Installation %s%% complete"; // Install 25% complete
$lang['install_site_success'] = "Website created with success!";
$lang['install_site_info'] = "Please type in all information about the first website.";
$lang['install_go_phpmv'] = "Go to phpMyVisites!";
$lang['install_congratulation'] = "Congratulations! Your phpMyVisites installation is complete.";
$lang['install_end_text'] = "Make sure your javascript code is entered on your pages, and wait for your first visitors!";
$lang['install_db_ok'] = "Connection to database server ok!";
$lang['install_table_exist'] = "phpMyVisites tables already exist in the database.";
$lang['install_table_choice'] = "Either choose to reuse the existing database tables or select a clean install to erase all existing data in the database.";
$lang['install_table_erase'] = "Erase all tables (be careful!)";
$lang['install_table_reuse'] = "Reuse existing tables";
$lang['install_table_success'] = "Tables created with success!";
$lang['install_send_mail'] = "Receive an email each day per website containing statistics summary?";

//
// Update Step
//
$lang['update_title'] = "Update phpMyVisites";
$lang['update_subtitle'] = "We detect that you are updating phpMyVisites.";
$lang['update_versions'] = "Your previous version was %s and we have updated it to %s.";
$lang['update_db_updated'] = "Your database was successfully updated!";
$lang['update_continue'] = "Continue to phpMyVisites";
$lang['update_jschange'] = "Warning! <br /> The phpMyVisites javascript code has been modified. You MUST update your pages and copy/paste the new phpMyVisites Javascript on ALL your configured sites. <br /> The changes made to javascript code are rare, we apologies for the trouble we are taking you through with this change."; // TODO : translate

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
$lang['tdate1'] = "%daylong% %monthlong% %daynumeric% %yearlong%";

// Monday 10
$lang['tdate2'] = "%daylong% %daynumeric%";

// Week February 10 To February 17 2004
$lang['tdate3'] = "Week %monthlong% %daynumeric% To %monthlong2% %daynumeric2% %yearlong%";

// February 2004 Month
$lang['tdate4'] = "%monthlong% %yearlong% Month";

// December 2003
$lang['tdate5'] = "%monthlong% %yearlong%";

// 10 Febuary week
$lang['tdate6'] = "%daynumeric% %monthlong% week";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%daynumeric%-%monthnumeric%-%yearlong%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = "%dayshort% %daynumeric%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9'] = " Week %daynumeric% %monthshort%";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%monthshort% %yearshort%";

// Year 2004
$lang['tdate11'] = "Year %yearlong%";

// 2004
$lang['tdate12'] = "%yearlong%";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "Januari";
$lang['moistab']['02'] = "Februari";
$lang['moistab']['03'] = "Mars";
$lang['moistab']['04'] = "April";
$lang['moistab']['05'] = "Maj";
$lang['moistab']['06'] = "Juni";
$lang['moistab']['07'] = "Juli";
$lang['moistab']['08'] = "Augusti";
$lang['moistab']['09'] = "September";
$lang['moistab']['10'] = "Oktober";
$lang['moistab']['11'] = "November";
$lang['moistab']['12'] = "December";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Jan";
$lang['moistab_graph']['02'] = "Feb";
$lang['moistab_graph']['03'] = "Mar";
$lang['moistab_graph']['04'] = "Apr";
$lang['moistab_graph']['05'] = "Maj";
$lang['moistab_graph']['06'] = "Jun";
$lang['moistab_graph']['07'] = "Jul";
$lang['moistab_graph']['08'] = "Aug";
$lang['moistab_graph']['09'] = "Sep";
$lang['moistab_graph']['10'] = "Okt";
$lang['moistab_graph']['11'] = "Nov";
$lang['moistab_graph']['12'] = "Dec";

// Day of the week
$lang['jsemaine']['Mon'] = "Måndag";
$lang['jsemaine']['Tue'] = "Tisdag";
$lang['jsemaine']['Wed'] = "Onsdag";
$lang['jsemaine']['Thu'] = "Torsdag";
$lang['jsemaine']['Fri'] = "Fredag";
$lang['jsemaine']['Sat'] = "Lördag";
$lang['jsemaine']['Sun'] = "Söndag";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Mån";
$lang['jsemaine_graph']['Tue'] = "Tis";
$lang['jsemaine_graph']['Wed'] = "Ons";
$lang['jsemaine_graph']['Thu'] = "Tor";
$lang['jsemaine_graph']['Fri'] = "Fre";
$lang['jsemaine_graph']['Sat'] = "Lör";
$lang['jsemaine_graph']['Sun'] = "Sön";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "M";
$lang['calendrier_jours'][1] = "T";
$lang['calendrier_jours'][2] = "W";
$lang['calendrier_jours'][3] = "T";
$lang['calendrier_jours'][4] = "F";
$lang['calendrier_jours'][5] = "S";
$lang['calendrier_jours'][6] = "S";

// DO NOT ALTER!
$lang['weekdays']['Mon'] = '1';
$lang['weekdays']['Tue'] = '2';
$lang['weekdays']['Wed'] = '3';
$lang['weekdays']['Thu'] = '4';
$lang['weekdays']['Fri'] = '5';
$lang['weekdays']['Sat'] = '6';
$lang['weekdays']['Sun'] = '7';

// Continents
$lang['eur'] = "Europa";
$lang['afr'] = "Afrika";
$lang['asi'] = "Asien";
$lang['ams'] = "Syd- och Centralamerika";
$lang['amn'] = "Nordamerika";
$lang['oce'] = "Oceanien";

// Oceans
$lang['oc_pac'] = "Pacific Ocean"; // TODO : translate
$lang['oc_atl'] = "Atlantic Ocean"; // TODO : translate
$lang['oc_ind'] = "Indian Ocean"; // TODO : translate

// Countries
$lang['domaines'] = array(
    "xx" => "Okänd",
    "ac" => "Ascension Islands",
    "ad" => "Andorra",
    "ae" => "Förenade Arabemiraten",
    "af" => "Afganistan",
    "ag" => "Antigua och Barbuda",
    "ai" => "Anguilla",
    "al" => "Albanien",
    "am" => "Armenien",
    "an" => "Nederländska Antillerna",
    "ao" => "Angola",
    "aq" => "Antarktis",
    "ar" => "Argentina",
    "as" => "Amerikanska Samoa",
    "at" => "Österrike",
    "au" => "Australien",
    "aw" => "Aruba",
    "az" => "Azerbadjan",
    "ba" => "Bosnien och Herzegovina",
    "bb" => "Barbados",
    "bd" => "Bangladesh",
    "be" => "Belgien",
    "bf" => "Burkina Faso",
    "bg" => "Bulgarien",
    "bh" => "Bahrain",
    "bi" => "Burundi",
    "bj" => "Benin",
    "bm" => "Bermudas",
    "bn" => "Brunei",
    "bo" => "Bolivia",
    "br" => "Brazilien",
    "bs" => "Bahamas",
    "bt" => "Bhutan",
    "bv" => "Bouvet Island",
    "bw" => "Botswana",
    "by" => "Vitryssland",
    "bz" => "Belize",
    "ca" => "Kanada",
    "cc" => "Cocos (Keeling) Öarna",
    "cd" => "Kongo, Den demokratiska republiken",
    "cf" => "Centralafrikanska Republiken",
    "cg" => "Kongo",
    "ch" => "Schweiz",
    "ci" => "Elfenbenskusten",
    "ck" => "Cooköarna",
    "cl" => "Chile",
    "cm" => "Kamerun",
    "cn" => "Kina",
    "co" => "Colombia",
    "cr" => "Costa Rica",
	"cs" => "Serbia Montenegro",
    "cu" => "Kuba",
    "cv" => "Cape Verde",
    "cx" => "Julön",
    "cy" => "Cypern",
    "cz" => "Tjeckiska Republiken",
    "de" => "Tyskland",
    "dj" => "Djibouti",
    "dk" => "Danmark",
    "dm" => "Dominica",
    "do" => "Dominikanska Republiken",
    "dz" => "Algeriet",
    "ec" => "Ecuador",
    "ee" => "Estland",
    "eg" => "Egypten",
    "eh" => "Västra Sahara",
    "er" => "Eritrea",
    "es" => "Spanien",
    "et" => "Etiopien",
    "fi" => "Finland",
    "fj" => "Fiji",
    "fk" => "Falklandsöarna (Malvinas)",
    "fm" => "Micronesien, Federala Staterna",
    "fo" => "Färöarna",
    "fr" => "Frankrike",
    "ga" => "Gabon",
    "gd" => "Grenada",
    "ge" => "Georgien",
    "gf" => "Franska Guyana",
    "gg" => "Guernsey",
    "gh" => "Ghana",
    "gi" => "Gibraltar",
    "gl" => "Grönland",
    "gm" => "Gambia",
    "gn" => "Guinea",
    "gp" => "Guadeloupe",
    "gq" => "Equatorial Guinea",
    "gr" => "Grekland",
    "gs" => "South Georgia and the South Sandwich Islands",
    "gt" => "Guatemala",
    "gu" => "Guam",
    "gw" => "Guinea-Bissau",
    "gy" => "Guyana",
    "hk" => "Hong Kong",
    "hm" => "Heard Öarna and McDonald Öarna",
    "hn" => "Honduras",
    "hr" => "Kroatien",
    "ht" => "Haiti",
    "hu" => "Ungern",
    "id" => "Indonesien",
    "ie" => "Irland",
    "il" => "Israel",
    "im" => "Man Island",
    "in" => "Indien",
    "io" => "British Indian Ocean Territory",
    "iq" => "Irak",
    "ir" => "Iran, Islamiska Republiken",
    "is" => "Island",
    "it" => "Italien",
    "je" => "Jersey",
    "jm" => "Jamaica",
    "jo" => "Jordanien",
    "jp" => "Japan",
    "ke" => "Kenya",
    "kg" => "Kyrgyzstan",
    "kh" => "Kambodja",
    "ki" => "Kiribati",
    "km" => "Comoros",
    "kn" => "Saint Kitts and Nevis",
    "kp" => "Korea, Demokratiska Folkrepubliken",
    "kr" => "Korea, Republiken",
    "kw" => "Kuwait",
    "ky" => "Caymanöarna",
    "kz" => "Kazakhstan",
    "la" => "Laos",
    "lb" => "Libanon",
    "lc" => "Saint Lucia",
    "li" => "Liechtenstein",
    "lk" => "Sri Lanka",
    "lr" => "Liberia",
    "ls" => "Lesotho",
    "lt" => "Litauen",
    "lu" => "Luxembourg",
    "lv" => "Lettland",
    "ly" => "Libyen",
    "ma" => "Marocco",
    "mc" => "Monaco",
    "md" => "Moldavien, Republiken",
    "mg" => "Madagaskar",
    "mh" => "Marshallöarna",
    "mk" => "Makedonien",
    "ml" => "Mali",
    "mm" => "Myanmar",
    "mn" => "Mongoliet",
    "mo" => "Macau",
    "mp" => "Norra Marianaöarna",
    "mq" => "Martinique",
    "mr" => "Mauritanien",
    "ms" => "Montserrat",
    "mt" => "Malta",
    "mu" => "Mauritius",
    "mv" => "Maldiverna",
    "mw" => "Malawi",
    "mx" => "Mexiko",
    "my" => "Malaysia",
    "mz" => "Mocambique",
    "na" => "Namibia",
    "nc" => "Nya Kaledonien",
    "ne" => "Nigeria",
    "nf" => "Norfolk",
    "ng" => "Nigeria",
    "ni" => "Nicaragua",
    "nl" => "Nederländerna",
    "no" => "Norge",
    "np" => "Nepal",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "Nya Zeeland",
    "om" => "Oman",
    "pa" => "Panama",
    "pe" => "Peru",
    "pf" => "Franska Polynesien",
    "pg" => "Papua Nya Guinea",
    "ph" => "Filippinerna",
    "pk" => "Pakistan",
    "pl" => "Polen",
    "pm" => "Saint Pierre och Miquelon",
    "pn" => "Pitcairn",
    "pr" => "Puerto Rico",
	"ps" => "Palestinian Territory",
    "pt" => "Portugal",
    "pw" => "Palau",
    "py" => "Paraguay",
    "qa" => "Qatar",
    "re" => "Reunion Island",
    "ro" => "Rumänien",
    "ru" => "Ryska Federationen",
    "rs" => "Ryssland",
    "rw" => "Rwanda",
    "sa" => "Saudi Arabien",
    "sb" => "Salomonöarna",
    "sc" => "Seychellerna",
    "sd" => "Sudan",
    "se" => "Sverige",
    "sg" => "Singapore",
    "sh" => "Saint Helena",
    "si" => "Slovenien",
    "sj" => "Svalbard",
    "sk" => "Slovakien",
    "sl" => "Sierra Leone",
    "sm" => "San Marino",
    "sn" => "Senegal",
    "so" => "Somalia",
    "sr" => "Surinam",
    "st" => "Sao Tome och Principe",
    "su" => "Gamla U.R.S.S.",
    "sv" => "El Salvador",
    "sy" => "Syriska Arabrepubliken",
    "sz" => "Swaziland",
    "tc" => "Turks and Caicos Islands",
    "td" => "Chad",
    "tf" => "French Southern Territories",
    "tg" => "Togo",
    "th" => "Thailand",
    "tj" => "Tajikistan",
    "tk" => "Tokelau",
    "tm" => "Turkmenistan",
    "tn" => "Tunisien",
    "to" => "Tonga",
    "tp" => "Östtimor",
    "tr" => "Turkiet",
    "tt" => "Trinidad och Tobago",
    "tv" => "Tuvalu",
    "tw" => "Taiwan, Kinesiska Provinsen",
    "tz" => "Tanzania, Förenade Republiken",
    "ua" => "Ukraina",
    "ug" => "Uganda",
    "uk" => "England",
    "gb" => "Storbrittanien",
    "um" => "United States Minor Outlying Islands",
    "us" => "Förenade Staterna",
    "uy" => "Uruguay",
    "uz" => "Uzbekistan",
    "va" => "Vatikanen",
    "vc" => "Saint Vincent och Grenadinerna",
    "ve" => "Venezuela",
    "vg" => "Brittiska Jungfruöarna",
    "vi" => "Amerikanska Jungfruöarna",
    "vn" => "Vietnam",
    "vu" => "Vanuatu",
    "wf" => "Wallis och Futuna",
    "ws" => "Samoa",
    "ye" => "Yemen",
    "yt" => "Mayotte",
    "yu" => "Jugoslavien",
    "za" => "Sydafrika",
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
    "ws" => "Samoa",
);
?>