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
$lang['auteur_nom'] = "Omer Hanetz"; // Translator's name
$lang['auteur_email'] = "bhsoft@walla.com"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "rtl"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "he"; // iso language code
$lang['lang_libelle_en'] = "Hebrew"; // english language name
$lang['lang_libelle_fr'] = "Hébreu"; // french language name
$lang['unites_bytes'] = array('בתים', 'ק"ב', 'מ"ב', 'ג"ב', 'ט"ב', 'פ"ב', 'א"ב', 'ז"ב', 'י"ב');
$lang['separateur_milliers'] = ''; // three thousands spells 300,000 in english
$lang['separateur_decimaux'] = '.'; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "תוכנת קוד פתוח לסטטיסטיקות עבור אתר אינטרנט, וזיהוי כמות מעבר באינטרנט | phpMyVisites"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, script, application, software, statistics, referals, stats, free, open source, gpl, visits, visitors, mysql, viewed pages, pages, views, number of visits, graphs, Browsers, os, operating system, resolutions, day, week, month, records, country, host, service providors, search enginge, key words, referrers, graphs, entry pages, exit pages, pie charts"; // Header keywords
$lang['head_description'] = "תוכנת קוד פתוח לסטטיסטיקות עבור אתר אינטרנט. מפותחת ב php/MySql, ומופצת תחת רשיון Gnu GPL | phpMyVisites"; // Header description
$lang['logo_description'] = "PhpMyVisits: תוכנת קוד פתוח לסטטיסטיקות עבור אתר אינטרנט. מפותחת ב php/MySql, ומופצת תחת רשיון Gnu GPL"; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "ביקורים";
$lang['menu_pagesvues'] = "דפים שנצפו";
$lang['menu_suivi'] = "מעקב";
$lang['menu_provenance'] = "מקור";
$lang['menu_configurations'] = "הגדרות";
$lang['menu_affluents'] = "משייכים";
$lang['menu_listesites'] = "רשימת אתרים";
$lang['menu_bilansites'] = "Summary";
$lang['menu_jour'] = "יום";
$lang['menu_semaine'] = "שבוע";
$lang['menu_mois'] = "חודש";
$lang['menu_annee'] = "Year";
$lang['menu_periode'] = "%s תקופה שנלמדה:"; // Text formated (e.g.: Studied period: Thuesday, september the 11th)
$lang['liens_siteofficiel'] = "אתר רשמי";
$lang['liens_admin'] = "ניהול";
$lang['liens_contacts'] = "יצירת קשר";

//
// Divers
//
$lang['generique_nombre'] = "מספר";
$lang['generique_tauxsortie'] = "יציאה מהדירוג";
$lang['generique_ok'] = "אישור";
$lang['generique_timefooter'] = "הדף נוצר בתוך %s שניות"; // Time in seconds
$lang['generique_divers'] = "אחרים"; // (for the graphs)
$lang['generique_inconnu'] = "לא ידוע"; // (for the graphs)
$lang['generique_vous'] = "... You ?";
$lang['generique_traducteur'] = "Translator";
$lang['generique_langue'] = "Language";
$lang['generique_autrelangure'] = "אחר?"; // Other language, translations wanted
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
$lang['generique_total'] = "סך הכל";
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
$lang['login_password'] = "סיסמא : "; // lowercase
$lang['login_login'] = "שם משתמש : "; // lowercase
$lang['login_error'] = "לא ניתן להתחבר. שם משתמש או סיסמא שגויים.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "You wish to enter a %sphpMyVisites%s protected area.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "יצירת קשר";
$lang['contacts_langue'] = "תרגומים";
$lang['contacts_merci'] = "תודות";
$lang['contacts_auteur'] = "הכותב, מחבר העזרה והיוצר של פרוייקט phpMyVisites הוא <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "עבור <strong>שאלות טכניות, דיווחים על שגיאות ו/או הצעות</strong> אנא השתמש בפורומים של האתר הרשמי %s. לבקשות אחרות אנא צור קשר דרך הטופס באתר הרשמי."; // adresse du site
$lang['contacts_trad1'] = "האם ברצונך לתרגם את PhpMyVisites לשפה שלך? אל תתבייש כי <strong>phpMyVisites צריכה אותך!</strong>";
$lang['contacts_trad2'] = "תרגום PhpMyVisites יקח זמן מה (מספר שעות), ודורש ידע גבוה בשפה המעורבת.; אבל זכרו ש  <strong>כל עבודה שתעשו תהיה לעזר למספר רב של משתמשים.</strong>.  אם אתה מעוניין לתרגם את PhpMyVisites, אתה יכול למצוא את כל המידע שאתה צריך כאן  %s קבצי העזרה הרשמיים של PhpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "אל תהססו להתייעץ %s בקבצי העזרה הרשמיים של phpMyVisites %s אשר יתנו לכם מידע רב על ההתקנה, ההגדרות והפעולות של  phpMyVisites. זה זמין בגירסה שלך של  phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Thank you <strong>%s</strong>, co-developers of phpMyVisites, for their high quality work on the project.";
$lang['contacts_merci3'] = "אל תהססו להתייעץ בדך המידע באתר הרשמי, כדל לקבל רשימת חברים מלאה של  phpMyVisites.";
$lang['contacts_merci2'] = "תודה גדולה לכל אלו ששיתפו את תרבותם בכך שעזרו בתרגום  phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Site %s on %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Go to detailed statistics";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "מידע המבקר"; 
$lang['visites_statistiques'] = "סטטיסטיקות";
$lang['visites_periodesel'] = "לתקופה שנבחרה";
$lang['visites_visites'] = "ביקורים";
$lang['visites_uniques'] = "מבקרים מיוחדים";
$lang['visites_pagesvues'] = "דפים שנצפו";
$lang['visites_pagesvisiteurs'] = "דפים לכל מבקר"; 
$lang['visites_pagesvisites'] = "Pages per visit"; 
$lang['visites_pagesvisitessign'] = "Pages per significant visit"; 
$lang['visites_tempsmoyen'] = "משך זמן ביקור ממוצע";
$lang['visites_tempsmoyenpv'] = "משך זמן צפייה לפי דף";
$lang['visites_tauxvisite'] = "שיעור ביקור דף 1"; 
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "סיכומי תקופה";
$lang['visites_nbvisites'] = "ביקורים";
$lang['visites_aucunevivisite'] = "אין ביקור"; // in the table, must be short
$lang['visites_recap'] = "סיכום";
$lang['visites_unepage'] = "דף 1"; // (graph)
$lang['visites_pages'] = "%s דפים"; // 1-2 pages (graph)
$lang['visites_min'] = "%s דקות"; // 10-15 min (graph)
$lang['visites_sec'] = "%s שניות"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "גרף להצגת סיכום הסטטיסטיקות";
$lang['visites_grapghrecaplongterm'] = "Graph to show long term statistics summary";
$lang['visites_graphtempsvisites'] = "גרף להצגת משך זמן הביקור לפי מבקר";
$lang['visites_graphtempsvisitesimg'] = "משך זמן הביקור לפי מבקר";
$lang['visites_graphheureserveur'] = "גרף להצגת ביקורים לפי שעות עבור השרת"; 
$lang['visites_graphheureserveurimg'] = "ביקורים לפי זמן שרת"; 
$lang['visites_graphheurevisiteur'] = "גרף להצגת ביקורים לפי שעות עבור המבקר";
$lang['visites_graphheurelocalimg'] = "ביקורים לפי שעה מקומית"; 
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
$lang['pagesvues_titre'] = "מידע צפייה בדפים";
$lang['pagesvues_joursel'] = "יום שנבחר";
$lang['pagesvues_jmoins7'] = "יום - 7";
$lang['pagesvues_jmoins14'] = "יום - 14";
$lang['pagesvues_moyenne'] = "(ממוצע)";
$lang['pagesvues_pagesvues'] = "צפיות בדף";
$lang['pagesvues_pagesvudiff'] = "צפיות מיוחדות בדף";
$lang['pagesvues_recordpages'] = "מספר הדפים הגבוה ביותר למבקר אחד";
$lang['pagesvues_tabdetails'] = "דפים שנצפו (מ %s עד %s)"; // (de 1   21)
$lang['pagesvues_graphsnbpages'] = "גרף להצגת מספר הביקורים לפי מספר הדפים שנצפו";
$lang['pagesvues_graphnbvisitespageimg'] = "ביקורים לפי מספר הדפים שנצפו";
$lang['pagesvues_graphheureserveur'] = "גרף להצגת ביקורים לפי זמן שרת";
$lang['pagesvues_graphheureserveurimg'] = "ביקורים לפי זמן שרת";
$lang['pagesvues_graphheurevisiteur'] = "גרף להצגת ביקורים לפי זמן מקומי";
$lang['pagesvues_graphpageslocalimg'] = "ביקורים לפי זמן מקומי";
$lang['pagesvues_tempsparpage'] = "Time by page";
$lang['pagesvues_total_time'] = "Total time";
$lang['pagesvues_avg_time'] = "Average time";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "תנועת מבקר";
$lang['suivi_pageentree'] = "כניסה לדפים";
$lang['suivi_pagesortie'] = "יציאה מדפים";
$lang['suivi_tauxsortie'] = "שיעור יציאה";
$lang['suivi_pageentreehits'] = "Entry hits";
$lang['suivi_pagesortiehits'] = "Exit hits";
$lang['suivi_singlepage'] = "Single Pages visits";

//
// Origin
//
$lang['provenance_titre'] = "מוצאי המבקרים";
$lang['provenance_recappays'] = "סיכום ארצות";
$lang['provenance_pays'] = "ארצות";
$lang['provenance_paysimg'] = "תרשים מבקרים לפי ארצות";
$lang['provenance_fai'] = "ספקי שירות אינטרנט";
$lang['provenance_nbpays'] = "Number of different countries : %s";
$lang['provenance_provider'] = "ספקים"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "יבשת";
$lang['provenance_mappemonde'] = "מפת העולם";
$lang['provenance_interetspays'] = "Countries Interests";

//
// Setup
//
$lang['configurations_titre'] = "הגדרות מבקר";
$lang['configurations_os'] = "מערכות הפעלה";
$lang['configurations_osimg'] = "גרף להצגת מערכות ההפעלה של המבקרים";
$lang['configurations_navigateurs'] = "דפדפנים";
$lang['configurations_navigateursimg'] = "גרף להצגת הדפדפנים של המבקרים";
$lang['configurations_resolutions'] = "רזולוציות מסך";
$lang['configurations_resolutionsimg'] = "גרף להצגת רזולוציות המסך של המבקרים";
$lang['configurations_couleurs'] = "עומק צבע";
$lang['configurations_couleursimg'] = "גרף להצגת עומק הצבע של המבקרים";
$lang['configurations_rapport'] = "מסך רגיל/מסך רחב";
$lang['configurations_large'] = "מסך רחב";
$lang['configurations_normal'] = "מסך רגיל";
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
$lang['affluents_titre'] = "משייכים";
$lang['affluents_recapimg'] = "תרשים מבקרים לפי משייכים";
$lang['affluents_directimg'] = "ישיר";
$lang['affluents_sitesimg'] = "אתרים";
$lang['affluents_moteursimg'] = "מנועים";
$lang['affluents_referrersimg'] = "משייכים";
$lang['affluents_moteurs'] = "מנועי חיפוש";
$lang['affluents_nbparmoteur'] = "ביקורים שסופקו על ידי מנועי חיפוש : %s";
$lang['affluents_aucunmoteur'] = "לא סופקו ביקורים על ידי מנועי חיפוש.";
$lang['affluents_motscles'] = "מילות מפתח";
$lang['affluents_nbmotscles'] = "מילות מפתח ברורות : %s";
$lang['affluents_aucunmotscles'] = "לא נמצאו מילות מפתח.";
$lang['affluents_sitesinternet'] = "אתרים";
$lang['affluents_nbautressites'] = "ביקורים שסופקו על ידי אתרים אחרים : %s";
$lang['affluents_nbautressitesdiff'] = "מספר אתרים שונים : %s";
$lang['affluents_aucunautresite'] = "לא סופקו ביקורים על ידי אתרים.";
$lang['affluents_entreedirecte'] = "בקשה ישירה";
$lang['affluents_nbentreedirecte'] = "ביקורים בבקשה ישירה : %s";
$lang['affluents_nbpartenaires'] = "Visits provided by partners : %s";
$lang['affluents_aucunpartenaire'] = "No visits were provided by partners sites.";
$lang['affluents_nbnewsletters'] = "Visits provided by newsletters : %s";
$lang['affluents_aucunnewsletter'] = "No visits were provided by newsletters.";
$lang['affluents_details'] = "פרטים"; // In the results of the referers array
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
$lang['purge_titre'] = "סיכום של ביקורים ושיוכים";
$lang['purge_intro'] = "התקופה הזו הוסרה על ידי מנהל האתר. רק הפרטים הנחוצים נשמרו.";
$lang['admin_purge'] = "תחזוקת מסד נתונים";
$lang['admin_purgeintro'] = "המחלקה הזאת מאפשרת לך לנהל את הטבלאות שיהיו בשימוש על ידי phpMyVisites. אתה יכול לראות את שטח הדיסק שנמצא בשימוש על ידי מסד הנתונים, לייעל אותם, או להסיר רשומות ישנות. זה יאפשר לך להגביל את גודלהטבלאות במסד הנתונים שלך.";
$lang['admin_optimisation'] = "ייעול של [ %s ]..."; // Tables names
$lang['admin_postopt'] = "הגודל הכולל צומצם על ידי %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "הסר את התקופות הבאות: %s";
$lang['admin_purge_fini'] = "סיים מחיקת טבלאות...";
$lang['admin_bdd_nom'] = "שם";
$lang['admin_bdd_enregistrements'] = "רשומות";
$lang['admin_bdd_taille'] = "גודל הטבלה";
$lang['admin_bdd_opt'] = "ייעול";
$lang['admin_bdd_purge'] = "טיהור קריטריון";
$lang['admin_bdd_optall'] = "ייעל הכל";
$lang['admin_purge_j'] = "הסר רשומות ישנות יותר מ %s ימים";
$lang['admin_purge_s'] = "הסר רשומות ישנות יותר מ %s שבועות";
$lang['admin_purge_m'] = "הסר רשומות ישנות יותר מ %s חודשים";
$lang['admin_purge_y'] = "Remove records older than %s years";
$lang['admin_purge_logs'] = "הסר את כל התיעודים";
$lang['admin_purge_autres'] = "טהר מידע ציבורי לטבלה '%s'";
$lang['admin_purge_none'] = "אין פעולה אפשרית";
$lang['admin_purge_cal'] = "חשב וטהר (זה יכול לקחת מספר דקות)";
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
$lang['admin_intro'] = "ברוכים הבאים לאזור ההגדרות של phpMyVisites. אתה יכול לערוך את כל המידע שקשור להתקנה שלך. אם יש לך בעיות, אל תהסס לצפות ב %s קבצי העזרה הרשמיים שלphpMyVisites %s."; // link to the doc
$lang['admin_configetperso'] = "הגדרות כלליות";
$lang['admin_afficherjavascript'] = "הצג קוד ג'אווה סקריפט עבור הסטטיסטיקות";
$lang['admin_cookieadmin'] = "אל תספור את המנהל בסטטיסטיקות";
$lang['admin_ip_ranges'] = "Don't count IP/IP ranges in the statistics";
$lang['admin_sitesenregistres'] = "אתרים רשומים:";
$lang['admin_retour'] = "חזרה";
$lang['admin_cookienavigateur'] = "אתה יכול לבטל סטטיסטיקות עבור מנהל האתר. המתודה הזאת מבוססת עוגיות, היא תעבוד רק עם דפדפן זה. אתה יכול לבטל אפשרות זו מתי שתרצה.";
$lang['admin_prendreencompteadmin'] = "חשב את המנהל בסטטיסטיקות (מחק את העוגייה)";
$lang['admin_nepasprendreencompteadmin'] = "אל תחשב את המנהל בסטטיסטיקות (צור עוגייה)";
$lang['admin_etatcookieoui'] = "המנהל נחשב בסטטיסטיקות עבור אתר זה (זו הגדרת ברירת המחדל - המנהל נחשב כמשתמש רגיל)";
$lang['admin_etatcookienon'] = "אתה לא נחשב בסטטיסטיקות עבור אתר זה (ביקוריך לא ייחשבו באתר זה)";
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
$lang['install_loginmysql'] = "שם משתמש למסד הנתונים";
$lang['install_mdpmysql'] = "סיסמא למסד הנתונים";
$lang['install_serveurmysql'] = "שם השרת של מסד הנתונים";
$lang['install_basemysql'] = "שם מסד הנתונים";
$lang['install_prefixetable'] = "קידומת לטבלה";
$lang['install_utilisateursavances'] = "משתמשים מתקדמים (אופציונלי)";
$lang['install_oui'] = "כן";
$lang['install_non'] = "לא";
$lang['install_ok'] = "אישור";
$lang['install_probleme'] = "בעייה: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "שם המשתמש של המנהל:";
$lang['install_mdpadmin'] = "הסיסמא של המנהל:";
$lang['install_chemincomplet'] = "נתיב מדוייק למיקום יישום phpMyVisites (כמו http://www.mysite.com/rep1/rep3/phpmyvisites/). הנתיב חייב להסתיים ב  <strong>/</strong>.";
$lang['install_afficherlogo'] = "הצג את הלוגו בדפים שלך? %s <br />By allowing the display of the logo on your site, you will help publicize phpMyVisites and help it evolve more rapidly.  It is also a way to thank the author who has spent many hours developing this Open Source, free application."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "הצג גרפים עבור הסטטיסטיקות.";
$lang['install_valider'] = "שלח"; //  during installation and for login
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
$lang['install_txt2'] = "בסוף ההתקנה, בקשה תישלח לאתר הרשמי, כדי שנוכל לפקח על מספר האנשים שמשתמשים ב PhpMyVisits. תודה על ההבנה.";
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
$lang['moistab']['01'] = "ינואר";
$lang['moistab']['02'] = "פברואר";
$lang['moistab']['03'] = "מרץ";
$lang['moistab']['04'] = "אפריל";
$lang['moistab']['05'] = "מאי";
$lang['moistab']['06'] = "יוני";
$lang['moistab']['07'] = "יולי";
$lang['moistab']['08'] = "אוגוסט";
$lang['moistab']['09'] = "ספטמבר";
$lang['moistab']['10'] = "אוקטובר";
$lang['moistab']['11'] = "נובמבר";
$lang['moistab']['12'] = "דצמבר";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "ינו";
$lang['moistab_graph']['02'] = "פבר";
$lang['moistab_graph']['03'] = "מרץ";
$lang['moistab_graph']['04'] = "אפר";
$lang['moistab_graph']['05'] = "מאי";
$lang['moistab_graph']['06'] = "יונ";
$lang['moistab_graph']['07'] = "יול";
$lang['moistab_graph']['08'] = "אוג";
$lang['moistab_graph']['09'] = "ספט";
$lang['moistab_graph']['10'] = "אוק";
$lang['moistab_graph']['11'] = "נוב";
$lang['moistab_graph']['12'] = "דצמ";

// Day of the week
$lang['jsemaine']['Mon'] = "יום שני";
$lang['jsemaine']['Tue'] = "יום שלישי";
$lang['jsemaine']['Wed'] = "יום רביעי";
$lang['jsemaine']['Thu'] = "יום חמישי";
$lang['jsemaine']['Fri'] = "יום שישי";
$lang['jsemaine']['Sat'] = "יום שבת";
$lang['jsemaine']['Sun'] = "יום ראשון";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "שני";
$lang['jsemaine_graph']['Tue'] = "שלי";
$lang['jsemaine_graph']['Wed'] = "רבי";
$lang['jsemaine_graph']['Thu'] = "חמי";
$lang['jsemaine_graph']['Fri'] = "שיש";
$lang['jsemaine_graph']['Sat'] = "שבת";
$lang['jsemaine_graph']['Sun'] = "ראש";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "M";
$lang['calendrier_jours'][1] = "T";
$lang['calendrier_jours'][2] = "W";
$lang['calendrier_jours'][3] = "T";
$lang['calendrier_jours'][4] = "F";
$lang['calendrier_jours'][5] = "S";
$lang['calendrier_jours'][6] = "S";

// DO NOT ALTER!
$lang['weekdays']['Mon'] = '2';
$lang['weekdays']['Tue'] = '3';
$lang['weekdays']['Wed'] = '4';
$lang['weekdays']['Thu'] = '5';
$lang['weekdays']['Fri'] = '6';
$lang['weekdays']['Sat'] = '7';
$lang['weekdays']['Sun'] = '1';

// Continents
$lang['eur'] = "אירופה";
$lang['afr'] = "אפריקה";
$lang['asi'] = "אסיה";
$lang['ams'] = "אמריקה הדרומית והמרכזית";
$lang['amn'] = "אמריקה הצפונית";
$lang['oce'] = "אוסטרליה";

// Oceans
$lang['oc_pac'] = "Pacific Ocean"; // TODO : translate
$lang['oc_atl'] = "Atlantic Ocean"; // TODO : translate
$lang['oc_ind'] = "Indian Ocean"; // TODO : translate

// Countries
$lang['domaines'] = array(
    "xx" => "לא ידוע",
    "ac" => "איי ההתרוממות",
    "ad" => "אנדורה",
    "ae" => "איחוד האמירויות הערביות",
    "af" => "אפגניסטן",
    "ag" => "אנטיגואה וברבודה",
    "ai" => "אנגולה",
    "al" => "אלבניה",
    "am" => "ארמניה",
    "an" => "האיים האנטיליים ההולנדים",
    "ao" => "אנגולה",
    "aq" => "אנטרקטיקה",
    "ar" => "ארגנטינה",
    "as" => "סמואה האמריקאית",
    "at" => "אוסטריה",
    "au" => "אוסטרליה",
    "aw" => "ארובה",
    "az" => "אזרבאיג'ן",
    "ba" => "בוסניה והרציגובינה",
    "bb" => "ברבדוס",
    "bd" => "בנגלדש",
    "be" => "בלגיה",
    "bf" => "בוקינה פאסו",
    "bg" => "בולגריה",
    "bh" => "בחריין",
    "bi" => "בורונדי",
    "bj" => "בנין",
    "bm" => "ברמודה",
    "bn" => "ברונאו",
    "bo" => "בוליביה",
    "br" => "ברזיל",
    "bs" => "בהמאס",
    "bt" => "בוטאן",
    "bv" => "האי בווט",
    "bw" => "בוטסוואנה",
    "by" => "בלארוס",
    "bz" => "בליץ",
    "ca" => "קנדה",
    "cc" => "איי קוקוס",
    "cd" => "הרפובליקה הדמוקרטית של קונגו",
    "cf" => "הרפובליקה המרכז אפריקאית",
    "cg" => "קונגו",
    "ch" => "שוויץ",
    "ci" => "קוטה דלוואיר",
    "ck" => "איי קוק",
    "cl" => "צ'ילה",
    "cm" => "קמרון",
    "cn" => "סין",
    "co" => "קולומביה",
    "cr" => "קוסטה ריקה",
	"cs" => "Serbia Montenegro",
    "cu" => "קובה",
    "cv" => "קאפה ורדה",
    "cx" => "אי חג המולד",
    "cy" => "קפריסין",
    "cz" => "הרפובליקה של צ'כיה",
    "de" => "גרמניה",
    "dj" => "דג'יבוטי",
    "dk" => "דנמרק",
    "dm" => "דומיניקה",
    "do" => "הרפובליקה הדומיניקנית",
    "dz" => "אלג'יריה",
    "ec" => "אקוודור",
    "ee" => "אסטוניה",
    "eg" => "מצרים",
    "eh" => "סהרה המערבית",
    "er" => "אריטראה",
    "es" => "ספרד",
    "et" => "אתיופיה",
    "fi" => "פינלנד",
    "fj" => "פיג'י",
    "fk" => "איי פקלנד",
    "fm" => "המדינות הפדרציות של מיקרונזיה",
    "fo" => "איי פארו",
    "fr" => "צרפת",
    "ga" => "גבון",
    "gd" => "גרנדה",
    "ge" => "ג'ורג'יה",
    "gf" => "גינאה הצרפתית",
    "gg" => "גרנזי",
    "gh" => "גאנה",
    "gi" => "ג'יברלטר",
    "gl" => "גרינלנד",
    "gm" => "גמביה",
    "gn" => "גינאה",
    "gp" => "גוואדלופ",
    "gq" => "גינאה של קו המשווה",
    "gr" => "יוון",
    "gs" => "ג'רג'יה הדרומית ואיי סנדביץ' הדרומיים",
    "gt" => "גואטמלה",
    "gu" => "גואם",
    "gw" => "גינאה-ביסאו",
    "gy" => "גאנה",
    "hk" => "הונג קונג",
    "hm" => "איי הרד ואיי מקדונלד",
    "hn" => "הונדורס",
    "hr" => "קרואטיה",
    "ht" => "האיטי",
    "hu" => "הונגריה",
    "id" => "אינדונזיה",
    "ie" => "אירלנד",
    "il" => "ישראל",
    "im" => "אי האדם",
    "in" => "הודו",
    "io" => "שטח האוקיינוס ההודי של בריטניה",
    "iq" => "עיראק",
    "ir" => "הרפבליקה האיסלאמית של איראן",
    "is" => "איסלנד",
    "it" => "איטליה",
    "je" => "ג'רזי",
    "jm" => "ג'מייקה",
    "jo" => "ירדן",
    "jp" => "יפן",
    "ke" => "קניה",
    "kg" => "קירגיסטן",
    "kh" => "קמבודיה",
    "ki" => "קיריבטי",
    "km" => "קומורוס",
    "kn" => "סנט קיטס ונוויס",
    "kp" => "הרפובליקה של הדמוקרטית של קוריאה",
    "kr" => "הרפובליקה של קוריאה",
    "kw" => "כוויית",
    "ky" => "איי קיימן",
    "kz" => "קזיסטן",
    "la" => "לאוס",
    "lb" => "לבנון",
    "lc" => "סנט לוסיה",
    "li" => "ליכנטנשטיין",
    "lk" => "סרי לנקה",
    "lr" => "ליבריה",
    "ls" => "לסות'ו",
    "lt" => "ליטואניה",
    "lu" => "לוקסמבורג",
    "lv" => "לטביה",
    "ly" => "לוב",
    "ma" => "מרוקו",
    "mc" => "מונאקו",
    "md" => "הרפובליקה של מולדובה",
    "mg" => "מדגסקר",
    "mh" => "איי מרשל",
    "mk" => "מקדוניה",
    "ml" => "מאלי",
    "mm" => "מייאנמאר",
    "mn" => "מונגוליה",
    "mo" => "מקאו",
    "mp" => "איי מריאנה הצפוניים",
    "mq" => "מארטיניק",
    "mr" => "מאוריטניה",
    "ms" => "מונטסראט",
    "mt" => "מלטה",
    "mu" => "מאוריציוס",
    "mv" => "מאלדיבס",
    "mw" => "מאלאווי",
    "mx" => "מכסיקו",
    "my" => "מלזיה",
    "mz" => "מוזמביק",
    "na" => "נמיביה",
    "nc" => "קאלדוניה החדשה",
    "ne" => "ניגר",
    "nf" => "האי נורפולק",
    "ng" => "ניגריה",
    "ni" => "ניקרגואה",
    "nl" => "הולנד",
    "no" => "נורווגיה",
    "np" => "נפאל",
    "nr" => "נאורו",
    "nu" => "ניאו",
    "nz" => "ניו זילנד",
    "om" => "עומאן",
    "pa" => "פנמה",
    "pe" => "פרו",
    "pf" => "פולינזיה הצרפתית",
    "pg" => "פפיאה ניו גינאה",
    "ph" => "איי הפיליפינים",
    "pk" => "פקיסטן",
    "pl" => "פולין",
    "pm" => "סנט פייר ומיקוואלון",
    "pn" => "פיטקאיירן",
    "pr" => "פורטו ריקו",
	"ps" => "Palestinian Territory",
    "pt" => "פרוטוגל",
    "pw" => "פאלאו",
    "py" => "פארגוואי",
    "qa" => "קטאר",
    "re" => "האיים המאוחדים",
    "ro" => "רומניה",
    "ru" => "הפדרציה הרוסית",
    "rs" => "רוסיה",
    "rw" => "רוואנדה",
    "sa" => "ערב הסעודית",
    "sb" => "איי המלך שלמה",
    "sc" => "איי סיישל",
    "sd" => "סודן",
    "se" => "שבדיה",
    "sg" => "סינגפור",
    "sh" => "סנט הלנה",
    "si" => "סלובניה",
    "sj" => "סבאלבארד",
    "sk" => "סלובקיה",
    "sl" => "סיירה לאונה",
    "sm" => "סן מרינו",
    "sn" => "סנגל",
    "so" => "סומליה",
    "sr" => "סורינאם",
    "st" => "סאו טום ופרינסיפ",
    "su" => "ברית המועצות הישנה",
    "sv" => "אל סלבדור",
    "sy" => "הרפובליקה הערבית של סוריה",
    "sz" => "Swaziland",
    "tc" => "איי טורקס וקאייקוס",
    "td" => "צ'אד",
    "tf" => "השטחים הדרומיים של צרפת",
    "tg" => "טוגו",
    "th" => "תאילנד",
    "tj" => "טאג'יקיסטן",
    "tk" => "טוקלאו",
    "tm" => "טורקמניסטן",
    "tn" => "תוניסיה",
    "to" => "טונגה",
    "tp" => "מזרח טימור",
    "tr" => "טורקיה",
    "tt" => "טרינידד וטובאגו",
    "tv" => "טובאלו",
    "tw" => "טייוואן",
    "tz" => "הרפובליקה המאוחדת של טנזניה",
    "ua" => "אוקראינה",
    "ug" => "אוגנדה",
    "uk" => "UK - בריטניה",
    "gb" => "GB - בריטניה",
    "um" => "איי ארצות הברית הקטנים",
    "us" => "איי ארצות הברית",
    "uy" => "אורוגואי",
    "uz" => "אוזבקיסטן",
    "va" => "ותיקן",
    "vc" => "סנט וינסנט",
    "ve" => "ונצואלה",
    "vg" => "איי הבתולה - בריטניה",
    "vi" => "איי הבתולה - ארצות הברית",
    "vn" => "וייטנאם",
    "vu" => "ואנאטו",
    "wf" => "ואליס ופוטונה",
    "ws" => "סמואה",
    "ye" => "ימן",
    "yt" => "מאיוט",
    "yu" => "יוגוסלביה",
    "za" => "דרום אפריקה",
    "zm" => "זמביה",
    "zr" => "זאיר",
    "zw" => "זימבבואה",
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
    "tv" => "טובאלו",
    "ws" => "סמואה",
);
?>