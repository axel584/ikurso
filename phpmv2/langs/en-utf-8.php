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
$lang['auteur_nom'] = "David Carrington"; // Translator's name
$lang['auteur_email'] = "david.carrington@gmail.com"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "en"; // iso language code
$lang['lang_libelle_en'] = "English"; // english language name
$lang['lang_libelle_fr'] = "Anglais"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = ''; // three thousand spells 3,000 in english
$lang['separateur_decimaux'] = '.'; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | open source web analytics, website statistics"; // Pages header's title
$lang['head_keywords'] = "statistics, analytics, analysis, referrer, stats, free, open source, visits, search engines, keywords, web, websites"; // Header keywords
$lang['head_description'] = "phpMyVisites | An open source website statistics and web analytics application distributed under the GNU GPL."; // Header description
$lang['logo_description'] = "Free web analytics, website statistics"; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Visits";
$lang['menu_pagesvues'] = "Pages Viewed";
$lang['menu_suivi'] = "Follow-up";
$lang['menu_provenance'] = "Source";
$lang['menu_configurations'] = "Settings";
$lang['menu_affluents'] = "Referals";
$lang['menu_listesites'] = "List Sites";
$lang['menu_bilansites'] = "Summary";
$lang['menu_jour'] = "Day";
$lang['menu_semaine'] = "Week";
$lang['menu_mois'] = "Month";
$lang['menu_annee'] = "Year";
$lang['menu_periode'] = "Studied period: %s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "Official website";
$lang['liens_admin'] = "Administration";
$lang['liens_contacts'] = "Contacts";

//
// Divers
//
$lang['generique_nombre'] = "Number";
$lang['generique_tauxsortie'] = "Exit Rate";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Page generated in %s seconds"; // Time in seconds
$lang['generique_divers'] = "Others"; // (for the graphs)
$lang['generique_inconnu'] = "Unknown"; // (for the graphs)
$lang['generique_vous'] = "... You ?";
$lang['generique_traducteur'] = "Translator";
$lang['generique_langue'] = "Language";
$lang['generique_autrelangure'] = "Other?"; // Other language, translations wanted
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
$lang['generique_total'] = "Total"; // 4 to 8 'on' 10
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
$lang['login_password'] = "password: "; // lowercase
$lang['login_login'] = "login: "; // lowercase
$lang['login_error'] = "Cannot login. Bad login or password.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "You wish to enter a %sphpMyVisites%s protected area.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Contacts";
$lang['contacts_langue'] = "Translations";
$lang['contacts_merci'] = "Thanks";
$lang['contacts_auteur'] = "The author, documentor, and creator of the phpMyVisites project is <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "For <strong>technical questions, reporting bugs, suggestions</strong> please use the official website forums %s. For other requests, please contact the author using the official website form."; // adresse du site
$lang['contacts_trad1'] = "Do you want to translate phpMyVisites to your language? Don't hesitate because <strong>phpMyVisites needs you!</strong>";
$lang['contacts_trad2'] = "Translating phpMyVisites will take quite a while (a few hours) and requires a good knowledge of the languages involved; but remember that <strong>any work you do will benefit a large number of users</strong>. If you are interested in translating phpMyVisites you can find all the information you need in %s the official documentation of phpMyVisites %s."; // Documentation link
$lang['contacts_doc'] = "Don't hesitate to consult %s the official documentation of phpMyVisites %s which will give you plenty of information on installation, configuration, and the functionality of phpMyVisites. It is available in your version of phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Thank you <strong>%s</strong>, co-developers of phpMyVisites, for their high quality work on the project.";
$lang['contacts_merci3'] = "Don't hesitate to consult the acknowledgments page on the official website to get a complete list of phpMyVisites friends.";
$lang['contacts_merci2'] = "A big thank you to all those who shared their culture while contributing to the translation of phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Site %s on %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Go to detailed statistics";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Visitor information"; 
$lang['visites_statistiques'] = "Statistics";
$lang['visites_periodesel'] = "For the selected period";
$lang['visites_visites'] = "Visits";
$lang['visites_uniques'] = "Unique visitors";
$lang['visites_pagesvues'] = "Pages viewed";
$lang['visites_pagesvisiteurs'] = "Pages per visitor"; 
$lang['visites_pagesvisites'] = "Pages per visit"; 
$lang['visites_pagesvisitessign'] = "Pages per significant visit"; 
$lang['visites_tempsmoyen'] = "Average visit duration";
$lang['visites_tempsmoyenpv'] = "Average time by page seen";
$lang['visites_tauxvisite'] = "1 page visit rate"; 
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Period summaries";
$lang['visites_nbvisites'] = "Visits";
$lang['visites_aucunevivisite'] = "No visit"; // in the table, must be short
$lang['visites_recap'] = "Summary";
$lang['visites_unepage'] = "1 page"; // (graph)
$lang['visites_pages'] = "%s pages"; // 1-2 pages (graph)
$lang['visites_min'] = "%smin"; // 10-15 min (graph)
$lang['visites_sec'] = "%ss"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Graph to show statistics summary";
$lang['visites_grapghrecaplongterm'] = "Graph to show long term statistics summary";
$lang['visites_graphtempsvisites'] = "Graph to show durations of the visits by visitor";
$lang['visites_graphtempsvisitesimg'] = "Duration of the visits by visitor";
$lang['visites_graphheureserveur'] = "Graph to show visits per hour for the server"; 
$lang['visites_graphheureserveurimg'] = "Visits by server time"; 
$lang['visites_graphheurevisiteur'] = "Graph to show visits per hour for the visitor";
$lang['visites_graphheurelocalimg'] = "Visits by local time"; 
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
$lang['pagesvues_titre'] = "Pages views Information";
$lang['pagesvues_joursel'] = "Day selected";
$lang['pagesvues_jmoins7'] = "Day - 7";
$lang['pagesvues_jmoins14'] = "Day - 14";
$lang['pagesvues_moyenne'] = "(average)";
$lang['pagesvues_pagesvues'] = "Page views";
$lang['pagesvues_pagesvudiff'] = "Unique page views";
$lang['pagesvues_recordpages'] = "Highest number of pages for one visitor";
$lang['pagesvues_tabdetails'] = "Pages and groups viewed";
$lang['pagesvues_graphsnbpages'] = "Graph to show number of visits per page viewed";
$lang['pagesvues_graphnbvisitespageimg'] = "Visits per number of pages viewed";
$lang['pagesvues_graphheureserveur'] = "Graph to show visits by server time";
$lang['pagesvues_graphheureserveurimg'] = "Visits by server time";
$lang['pagesvues_graphheurevisiteur'] = "Graph to show visits by local time";
$lang['pagesvues_graphpageslocalimg'] = "Visits by local time";
$lang['pagesvues_tempsparpage'] = "Time by page";
$lang['pagesvues_total_time'] = "Total time";
$lang['pagesvues_avg_time'] = "Average time";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Visitor movement";
$lang['suivi_pageentree'] = "Entry pages";
$lang['suivi_pagesortie'] = "Exit pages";
$lang['suivi_tauxsortie'] = "Exit rate";
$lang['suivi_pageentreehits'] = "Entry hits";
$lang['suivi_pagesortiehits'] = "Exit hits";
$lang['suivi_singlepage'] = "Single Pages visits";

//
// Origin
//
$lang['provenance_titre'] = "Visitors Origins";
$lang['provenance_recappays'] = "Countries Summary";
$lang['provenance_pays'] = "Countries";
$lang['provenance_paysimg'] = "Visitors Chart by Country";
$lang['provenance_fai'] = "Internet Service Providers";
$lang['provenance_nbpays'] = "Number of different countries : %s";
$lang['provenance_provider'] = "Providers"; // must be short
$lang['provenance_continent'] = "Continent";
$lang['provenance_mappemonde'] = "Map of the world";
$lang['provenance_interetspays'] = "Countries Interests";

//
// Setup
//
$lang['configurations_titre'] = "Visitor Settings";
$lang['configurations_os'] = "Operating Systems";
$lang['configurations_osimg'] = "Graph to show visitors operating systems";
$lang['configurations_navigateurs'] = "Browsers";
$lang['configurations_navigateursimg'] = "Graph to show visitors browsers";
$lang['configurations_resolutions'] = "Screen Resolutions";
$lang['configurations_resolutionsimg'] = "Graph to show visitors screen resolutions";
$lang['configurations_couleurs'] = "Color Depth";
$lang['configurations_couleursimg'] = "Graph to show visitors color depth";
$lang['configurations_rapport'] = "Normal/widescreen";
$lang['configurations_large'] = "Widescreen";
$lang['configurations_normal'] = "Normal";
$lang['configurations_double'] = "Dual Screen";
$lang['configurations_plugins'] = "Plugins";
$lang['configurations_navigateursbytype'] = "Browsers (by type)";
$lang['configurations_navigateursbytypeimg'] = "Graph to show browsers types";
$lang['configurations_os_interest'] = "Operating Systems Interest";
$lang['configurations_navigateurs_interest'] = "Browsers Interest";
$lang['configurations_resolutions_interest'] = "Screen Resolutions Interest";
$lang['configurations_couleurs_interest'] = "Color Depth Interest";
$lang['configurations_configurations'] = "Top settings";

//
// Referers
//
$lang['affluents_titre'] = "Referrals";
$lang['affluents_recapimg'] = "Visitors Chart by Referers";
$lang['affluents_directimg'] = "Direct";
$lang['affluents_sitesimg'] = "Websites";
$lang['affluents_moteursimg'] = "Engines";
$lang['affluents_referrersimg'] = "Referrals";
$lang['affluents_moteurs'] = "Search Engines";
$lang['affluents_nbparmoteur'] = "Visits provided by search engines : %s";
$lang['affluents_aucunmoteur'] = "No visits were provided by search engines.";
$lang['affluents_motscles'] = "Keywords";
$lang['affluents_nbmotscles'] = "Distinct keywords : %s";
$lang['affluents_aucunmotscles'] = "No keyword found.";
$lang['affluents_sitesinternet'] = "Websites";
$lang['affluents_nbautressites'] = "Visits provided by other websites : %s";
$lang['affluents_nbautressitesdiff'] = "Number of different websites : %s";
$lang['affluents_aucunautresite'] = "No visits were provided by websites.";
$lang['affluents_entreedirecte'] = "Direct Request";
$lang['affluents_nbentreedirecte'] = "Direct request visits : %s";
$lang['affluents_nbpartenaires'] = "Visits provided by partners : %s";
$lang['affluents_aucunpartenaire'] = "No visits were provided by partners sites.";
$lang['affluents_nbnewsletters'] = "Visits provided by newsletters : %s";
$lang['affluents_aucunnewsletter'] = "No visits were provided by newsletters.";
$lang['affluents_details'] = "Details";
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
$lang['purge_titre'] = "Summary of the visits and referrals";
$lang['purge_intro'] = "This period was removed in the administration, only the essential statistics were kept.";
$lang['admin_purge'] = "Database maintenance";
$lang['admin_purgeintro'] = "This section lets you manage the tables used by phpMyVisites. You can see the disk space used by the tables, optimize them, or remove old records. This will enable you to limit the size of the tables in your database.";
$lang['admin_optimisation'] = "Optimization of [ %s ]..."; // Tables names
$lang['admin_postopt'] = "The total size decreased by %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Remove following periods: %s";
$lang['admin_purge_fini'] = "Finished deleting tables...";
$lang['admin_bdd_nom'] = "Name";
$lang['admin_bdd_enregistrements'] = "Records";
$lang['admin_bdd_taille'] = "Table Size";
$lang['admin_bdd_opt'] = "Optimize";
$lang['admin_bdd_purge'] = "Purge Criteria";
$lang['admin_bdd_optall'] = "Optimize All";
$lang['admin_purge_j'] = "Remove records older than %s days";
$lang['admin_purge_s'] = "Remove records older than %s weeks";
$lang['admin_purge_m'] = "Remove records older than %s months";
$lang['admin_purge_y'] = "Remove records older than %s years";
$lang['admin_purge_logs'] = "Remove all logs";
$lang['admin_purge_autres'] = "Purge common to the table '%s'";
$lang['admin_purge_none'] = "No possible action";
$lang['admin_purge_cal'] = "Calculate and purge (this can take a few minutes)";
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
$lang['admin_intro'] = "Welcome to the phpMyVisites configuration area. You can modify all information relating to your installation. If you have any problems then do not hesitate to consult %s the official documentation of phpMyVisites %s."; // link to the doc
$lang['admin_configetperso'] = "General settings";
$lang['admin_afficherjavascript'] = "Show JavaScript statistics code";
$lang['admin_cookieadmin'] = "Don't count the administrator within statistics (cookie)";
$lang['admin_ip_ranges'] = "Don't count IP/IP ranges in the statistics";
$lang['admin_sitesenregistres'] = "Recorded websites:";
$lang['admin_retour'] = "Back";
$lang['admin_cookienavigateur'] = "You may exclude Adminstrator from statistics. This method is cookies based and this option will only work with this current browser. You can change this option at any time.";
$lang['admin_prendreencompteadmin'] = "Count the administrator within statistics (delete the cookie)";
$lang['admin_nepasprendreencompteadmin'] = "Don't count in the administrator within statistics (create a cookie)";
$lang['admin_etatcookieoui'] = "The Administrator is counted within statistics for this website (This is the default configuration, you are considered as a normal visitor)";
$lang['admin_etatcookienon'] = "You are not counted within statistics for this website (Your visits will not be counted for this website)";
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
$lang['install_loginmysql'] = "Database login";
$lang['install_mdpmysql'] = "Database password";
$lang['install_serveurmysql'] = "Database server";
$lang['install_basemysql'] = "Database name";
$lang['install_prefixetable'] = "Table prefix";
$lang['install_utilisateursavances'] = "Advanced users (optional)";
$lang['install_oui'] = "Yes";
$lang['install_non'] = "No";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Problem: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Super Administrator login";
$lang['install_mdpadmin'] = "Super Administrator password";
$lang['install_chemincomplet'] = "Complete path to the phpMyVisites application (like http://www.mysite.com/rep1/rep3/phpmyvisites/). The path must end with a <strong>/</strong>.";
$lang['install_afficherlogo'] = "Show the logo on your pages? %s <br />By allowing the display of the logo on your site, you will help publicize phpMyVisites and help it evolve more rapidly. It would also be a nice way to thank the authors who have spent many hours developing this Open Source, Free application."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Show statistics graphs.";
$lang['install_valider'] = "Submit"; // during installation and for login
$lang['install_popup_logo'] = "Please select a logo";
$lang['install_logodispo'] = "See the various logos available";
$lang['install_welcome'] = "Welcome!";
$lang['install_system_requirements'] = "System Requirements";
$lang['install_database_setup'] = "Database Setup";
$lang['install_create_tables'] = "Table creation";
$lang['install_general_setup'] = "General Setup";
$lang['install_create_config_file'] = "Create Config File";
$lang['install_first_website_setup'] = "Add First Website";
$lang['install_display_javascript_code'] = "Display Javascript code";
$lang['install_finish'] = "Finished!";
$lang['install_txt2'] = "At the end of installation, a request will be made to the official site to help us keep track of the number of people using phpMyVisites. Thank you for your understanding.";
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
$lang['update_jschange'] = "Warning! <br /> The phpMyVisites javascript code has been modified. You MUST update your pages and copy/paste the new phpMyVisites Javascript on ALL your configured sites. <br /> The changes made to javascript code are rare, we apologies for the trouble we are taking you through with this change.";

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
$lang['moistab']['01'] = "January";
$lang['moistab']['02'] = "February";
$lang['moistab']['03'] = "March";
$lang['moistab']['04'] = "April";
$lang['moistab']['05'] = "May";
$lang['moistab']['06'] = "June";
$lang['moistab']['07'] = "July";
$lang['moistab']['08'] = "August";
$lang['moistab']['09'] = "September";
$lang['moistab']['10'] = "October";
$lang['moistab']['11'] = "November";
$lang['moistab']['12'] = "December";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Jan";
$lang['moistab_graph']['02'] = "Feb";
$lang['moistab_graph']['03'] = "Mar";
$lang['moistab_graph']['04'] = "Apr";
$lang['moistab_graph']['05'] = "May";
$lang['moistab_graph']['06'] = "Jun";
$lang['moistab_graph']['07'] = "Jul";
$lang['moistab_graph']['08'] = "Aug";
$lang['moistab_graph']['09'] = "Sep";
$lang['moistab_graph']['10'] = "Oct";
$lang['moistab_graph']['11'] = "Nov";
$lang['moistab_graph']['12'] = "Dec";

// Day of the week
$lang['jsemaine']['Mon'] = "Monday";
$lang['jsemaine']['Tue'] = "Tuesday";
$lang['jsemaine']['Wed'] = "Wednesday";
$lang['jsemaine']['Thu'] = "Thursday";
$lang['jsemaine']['Fri'] = "Friday";
$lang['jsemaine']['Sat'] = "Saturday";
$lang['jsemaine']['Sun'] = "Sunday";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Mon";
$lang['jsemaine_graph']['Tue'] = "Tue";
$lang['jsemaine_graph']['Wed'] = "Wed";
$lang['jsemaine_graph']['Thu'] = "Thu";
$lang['jsemaine_graph']['Fri'] = "Fri";
$lang['jsemaine_graph']['Sat'] = "Sat";
$lang['jsemaine_graph']['Sun'] = "Sun";

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
$lang['eur'] = "Europe";
$lang['afr'] = "Africa";
$lang['asi'] = "Asia";
$lang['ams'] = "South and Central America";
$lang['amn'] = "North America";
$lang['oce'] = "Oceania";

// Oceans
$lang['oc_pac'] = "Pacific Ocean";
$lang['oc_atl'] = "Atlantic Ocean";
$lang['oc_ind'] = "Indian Ocean";

// Countries
$lang['domaines'] = array(
	"xx" => "Unknown",
	"ac" => "Ascension Islands",
	"ad" => "Andorra",
	"ae" => "United Arab Emirates",
	"af" => "Afghanistan",
	"ag" => "Antigua and Barbuda",
	"ai" => "Anguilla",
	"al" => "Albania",
	"am" => "Armenia",
	"an" => "Netherlands Antilles",
	"ao" => "Angola",
	"aq" => "Antarctica",
	"ar" => "Argentina",
	"as" => "American Samoa",
	"at" => "Austria",
	"au" => "Australia",
	"aw" => "Aruba",
	"az" => "Azerbaijan",
	"ba" => "Bosnia and Herzegovina",
	"bb" => "Barbados",
	"bd" => "Bangladesh",
	"be" => "Belgium",
	"bf" => "Burkina Faso",
	"bg" => "Bulgaria",
	"bh" => "Bahrain",
	"bi" => "Burundi",
	"bj" => "Benin",
	"bm" => "Bermuda",
	"bn" => "Bruneo",
	"bo" => "Bolivia",
	"br" => "Brazil",
	"bs" => "Bahamas",
	"bt" => "Bhutan",
	"bv" => "Bouvet Island",
	"bw" => "Botswana",
	"by" => "Belarus",
	"bz" => "Belize",
	"ca" => "Canada",
	"cc" => "Cocos (Keeling) Islands",
	"cd" => "Congo, The Democratic Republic of the",
	"cf" => "Central African Republic",
	"cg" => "Congo",
	"ch" => "Switzerland",
	"ci" => "Cote D'Ivoire",
	"ck" => "Cook Islands",
	"cl" => "Chile",
	"cm" => "Cameroon",
	"cn" => "China",
	"co" => "Colombia",
	"cr" => "Costa Rica",
	"cs" => "Serbia Montenegro",
	"cu" => "Cuba",
	"cv" => "Cape Verde",
	"cx" => "Christmas Island",
	"cy" => "Cyprus",
	"cz" => "Czech Republic",
	"de" => "Germany",
	"dj" => "Djibouti",
	"dk" => "Denmark",
	"dm" => "Dominica",
	"do" => "Dominican Republic",
	"dz" => "Algeria",
	"ec" => "Ecuador",
	"ee" => "Estonia",
	"eg" => "Egypt",
	"eh" => "Western Sahara",
	"er" => "Eritrea",
	"es" => "Spain",
	"et" => "Ethiopia",
	"fi" => "Finland",
	"fj" => "Fiji",
	"fk" => "Falkland Islands (Malvinas)",
	"fm" => "Micronesia, Federated States of",
	"fo" => "Faroe Islands",
	"fr" => "France",
	"ga" => "Gabon",
	"gd" => "Grenada",
	"ge" => "Georgia",
	"gf" => "French Guyana",
	"gg" => "Guernsey",
	"gh" => "Ghana",
	"gi" => "Gibraltar",
	"gl" => "Greenland",
	"gm" => "Gambia",
	"gn" => "Guinea",
	"gp" => "Guadeloupe",
	"gq" => "Equatorial Guinea",
	"gr" => "Greece",
	"gs" => "South Georgia and the South Sandwich Islands",
	"gt" => "Guatemala",
	"gu" => "Guam",
	"gw" => "Guinea-Bissau",
	"gy" => "Guyana",
	"hk" => "Hong Kong",
	"hm" => "Heard Island and McDonald Islands",
	"hn" => "Honduras",
	"hr" => "Croatia",
	"ht" => "Haiti",
	"hu" => "Hungary",
	"id" => "Indonesia",
	"ie" => "Ireland",
	"il" => "Israel",
	"im" => "Man Island",
	"in" => "India",
	"io" => "British Indian Ocean Territory",
	"iq" => "Iraq",
	"ir" => "Iran, Islamic Republic of",
	"is" => "Iceland",
	"it" => "Italy",
	"je" => "Jersey",
	"jm" => "Jamaica",
	"jo" => "Jordan",
	"jp" => "Japan",
	"ke" => "Kenya",
	"kg" => "Kyrgyzstan",
	"kh" => "Cambodia",
	"ki" => "Kiribati",
	"km" => "Comoros",
	"kn" => "Saint Kitts and Nevis",
	"kp" => "Korea, Democratic People's Republic of",
	"kr" => "Korea, Republic of",
	"kw" => "Kuwait",
	"ky" => "Cayman Islands",
	"kz" => "Kazakhstan",
	"la" => "Laos",
	"lb" => "Lebanon",
	"lc" => "Saint Lucia",
	"li" => "Liechtenstein",
	"lk" => "Sri Lanka",
	"lr" => "Liberia",
	"ls" => "Lesotho",
	"lt" => "Lithuania",
	"lu" => "Luxembourg",
	"lv" => "Latvia",
	"ly" => "Libya",
	"ma" => "Morocco",
	"mc" => "Monaco",
	"md" => "Moldova, Republic of",
	"mg" => "Madagascar",
	"mh" => "Marshall Islands",
	"mk" => "Macedonia",
	"ml" => "Mali",
	"mm" => "Myanmar",
	"mn" => "Mongolia",
	"mo" => "Macau",
	"mp" => "Northern Mariana Islands",
	"mq" => "Martinique",
	"mr" => "Mauritania",
	"ms" => "Montserrat",
	"mt" => "Malta",
	"mu" => "Mauritius",
	"mv" => "Maldives",
	"mw" => "Malawi",
	"mx" => "Mexico",
	"my" => "Malaysia",
	"mz" => "Mozambique",
	"na" => "Namibia",
	"nc" => "New Caledonia",
	"ne" => "Niger",
	"nf" => "Norfolk Island",
	"ng" => "Nigeria",
	"ni" => "Nicaragua",
	"nl" => "Netherlands",
	"no" => "Norway",
	"np" => "Nepal",
	"nr" => "Nauru",
	"nu" => "Niue",
	"nz" => "New Zealand",
	"om" => "Oman",
	"pa" => "Panama",
	"pe" => "Peru",
	"pf" => "French Polynesia",
	"pg" => "Papua New Guinea",
	"ph" => "Philippines",
	"pk" => "Pakistan",
	"pl" => "Poland",
	"pm" => "Saint Pierre and Miquelon",
	"pn" => "Pitcairn",
	"pr" => "Puerto Rico",
	"ps" => "Palestinian Territory",
	"pt" => "Portugal",
	"pw" => "Palau",
	"py" => "Paraguay",
	"qa" => "Qatar",
	"re" => "Reunion Island",
	"ro" => "Romania",
	"ru" => "Russian Federation",
	"rs" => "Russia",
	"rw" => "Rwanda",
	"sa" => "Saudi Arabia",
	"sb" => "Solomon Islands",
	"sc" => "Seychelles",
	"sd" => "Sudan",
	"se" => "Sweden",
	"sg" => "Singapore",
	"sh" => "Saint Helena",
	"si" => "Slovenia",
	"sj" => "Svalbard",
	"sk" => "Slovakia",
	"sl" => "Sierra Leone",
	"sm" => "San Marino",
	"sn" => "Senegal",
	"so" => "Somalia",
	"sr" => "Suriname",
	"st" => "Sao Tome and Principe",
	"su" => "Old U.S.S.R",
	"sv" => "El Salvador",
	"sy" => "Syrian Arab Republic",
	"sz" => "Swaziland",
	"tc" => "Turks and Caicos Islands",
	"td" => "Chad",
	"tf" => "French Southern Territories",
	"tg" => "Togo",
	"th" => "Thailand",
	"tj" => "Tajikistan",
	"tk" => "Tokelau",
	"tm" => "Turkmenistan",
	"tn" => "Tunisia",
	"to" => "Tonga",
	"tp" => "East Timor",
	"tr" => "Turkey",
	"tt" => "Trinidad and Tobago",
	"tv" => "Tuvalu",
	"tw" => "Taiwan",
	"tz" => "Tanzania, United Republic of",
	"ua" => "Ukraine",
	"ug" => "Uganda",
	"uk" => "United Kingdom",
	"gb" => "Great Britain",
	"um" => "United States Minor Outlying Islands",
	"us" => "United States",
	"uy" => "Uruguay",
	"uz" => "Uzbekistan",
	"va" => "Vatican City",
	"vc" => "Saint Vincent and the Grenadines",
	"ve" => "Venezuela",
	"vg" => "Virgin Islands, British",
	"vi" => "Virgin Islands, U.S.",
	"vn" => "Vietnam",
	"vu" => "Vanuatu",
	"wf" => "Wallis and Futuna",
	"ws" => "Samoa",
	"ye" => "Yemen",
	"yt" => "Mayotte",
	"yu" => "Yugoslavia",
	"za" => "South Africa",
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