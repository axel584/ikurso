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
$lang['auteur_nom'] = "Ангел Сарбаков"; // Translator's name
$lang['auteur_email'] = "s-angel@engineer.com"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "mk"; // iso language code
$lang['lang_libelle_en'] = "Macedonian"; // english language name
$lang['lang_libelle_fr'] = "Macédonien"; // french language name
$lang['unites_bytes'] = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
$lang['separateur_milliers'] = ' '; // three thousands spells 300,000 in english
$lang['separateur_decimaux'] = ','; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | апликација со отворен код за статистика на вебсајт и анализатор на веб сообраќај"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, скрипта, апликација, софтвер, статистика, префрлања, статистика, бесплатен, open source, gpl, посети, посетители, mysql, посетени страници, страници, посети, број на посети, графови, прелистувачи, ОС, оперативен систем, резолуции, ден, недела, месец, записи, земја, хост, доставувач на услуга, пребарувач, клучни зборови, препорачатели, графови, влезни страници, излезни страници, кружни дијаграми"; // Header keywords
$lang['head_description'] = "phpMyVisites | Апликација со отворен код за статистика на вебсајт, развиена во PHP/MySQL и дистрибуирана под GNU GPL."; // Header description
$lang['logo_description'] = "phpMyVisites : апликација со отворен код за статистика на вебсајт, развиена во PHP/MySQL и дистрибуирана под GPL."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Посети";
$lang['menu_pagesvues'] = "Посетени страници";
$lang['menu_suivi'] = "Следење";
$lang['menu_provenance'] = "Извор";
$lang['menu_configurations'] = "Поставки";
$lang['menu_affluents'] = "Префрлања";
$lang['menu_listesites'] = "Листа на сајтови";
$lang['menu_bilansites'] = "Summary";
$lang['menu_jour'] = "Ден";
$lang['menu_semaine'] = "Недела";
$lang['menu_mois'] = "Месец";
$lang['menu_annee'] = "Year";
$lang['menu_periode'] = "Анализиран период: %s"; // Text formated (e.g.: Studied period: Thuesday, september the 11th)
$lang['liens_siteofficiel'] = "Официјален вебсајт";
$lang['liens_admin'] = "Администрација";
$lang['liens_contacts'] = "Контакти";

//
// Divers
//
$lang['generique_nombre'] = "Број";
$lang['generique_tauxsortie'] = "Процент на излез";
$lang['generique_ok'] = "Во ред";
$lang['generique_timefooter'] = "Страницата е генерирана за %s секунди"; // Time in seconds
$lang['generique_divers'] = "Други"; // (for the graphs)
$lang['generique_inconnu'] = "Непознато."; // (for the graphs)
$lang['generique_vous'] = "... You ?";
$lang['generique_traducteur'] = "Translator";
$lang['generique_langue'] = "Language";
$lang['generique_autrelangure'] = "Други?"; // Other language, translations wanted
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
$lang['generique_total'] = "Вкупно";
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
$lang['login_password'] = "лозинка : "; // lowercase
$lang['login_login'] = "корисник : "; // lowercase
$lang['login_error'] = "Пристапот не е дозволен. Погрешен корисник или лозинка";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "You wish to enter a %sphpMyVisites%s protected area.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Контакти";
$lang['contacts_langue'] = "Преводи";
$lang['contacts_merci'] = "Благодарности";
$lang['contacts_auteur'] = "Автор на програмата, документацијата и проектот phpMyVisites е <strong>Метју Обри (Matthieu Aubry)</strong>.";
$lang['contacts_questions'] = "За <strong>технички прашања, пријавувањње на грешки, предлози</strong>, посетете го форумот на официјалниот вебсајт %s. За други барања, молам контактирајте го авторот преку формуларот на официјалниот вебсајт"; // adresse du site
$lang['contacts_trad1'] = "Сакате да ја преведете phpMyVisites на вашиот јазик? Не се мислете, бидејќи на <strong>phpMyVisites и сте потребни!</strong>";
$lang['contacts_trad2'] = "Преводоот на phpMyVisites може да потрае некое време (неколку часови) и потребно е добро познавање на јазикот; но запомнете, дека <strong>секоја работа што ќе ја завршите ќе биде од корист на многу корисници</strong>. Ако сте за преведување на phpMyVisites, сите потребни информации можете да ги најдете во %s официјалната документација на phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "Погледнете ја %s официјалната документација на phpMyVisites %s, која содржи многу информации за инсталирање, конфигурација и функционирање на phpMyVisites. Документацијата е достапна во вашата верзија на phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Thank you <strong>%s</strong>, co-developers of phpMyVisites, for their high quality work on the project.";
$lang['contacts_merci3'] = "Посетете ја страницата со благодарности на официјалниот вебсајт за да ја видите комплетната листа на пријатели на phpMyVisites.";
$lang['contacts_merci2'] = "Голема благодарност на сите оние кои ја споделија нивната култура со преведувањето на phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Site %s on %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Go to detailed statistics";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Информации за посетителот"; 
$lang['visites_statistiques'] = "Статистика";
$lang['visites_periodesel'] = "За избраниот период";
$lang['visites_visites'] = "Посети";
$lang['visites_uniques'] = "Единствени посетители";
$lang['visites_pagesvues'] = "Посетени страници";
$lang['visites_pagesvisiteurs'] = "Страници по посетител"; 
$lang['visites_pagesvisites'] = "Pages per visit"; 
$lang['visites_pagesvisitessign'] = "Pages per significant visit"; 
$lang['visites_tempsmoyen'] = "Средно траење на посета";
$lang['visites_tempsmoyenpv'] = "Средно време по посетена страница";
$lang['visites_tauxvisite'] = "Посетеност на 1 страница"; 
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Периодичен преглед";
$lang['visites_nbvisites'] = "Посети";
$lang['visites_aucunevivisite'] = "Без посета"; // in the table, must be short
$lang['visites_recap'] = "Извештај";
$lang['visites_unepage'] = "1 страница"; // (graph)
$lang['visites_pages'] = "%s страници"; // 1-2 pages (graph)
$lang['visites_min'] = "%s мин"; // 10-15 min (graph)
$lang['visites_sec'] = "%s сек"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "График за приказ на прегледот на статистика";
$lang['visites_grapghrecaplongterm'] = "Graph to show long term statistics summary";
$lang['visites_graphtempsvisites'] = "График за траење на посетите по посетител";
$lang['visites_graphtempsvisitesimg'] = "Траење на посетите по посетител";
$lang['visites_graphheureserveur'] = "График на посети на час на серверот"; 
$lang['visites_graphheureserveurimg'] = "Посети според времето на серверот"; 
$lang['visites_graphheurevisiteur'] = "График на посети на час за посетителот";
$lang['visites_graphheurelocalimg'] = "Посети според локално време"; 
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
$lang['pagesvues_titre'] = "Информација за посети на страници";
$lang['pagesvues_joursel'] = "Избран ден";
$lang['pagesvues_jmoins7'] = "Ден - 7";
$lang['pagesvues_jmoins14'] = "Ден - 14";
$lang['pagesvues_moyenne'] = "(средно)";
$lang['pagesvues_pagesvues'] = "Посети на страницата";
$lang['pagesvues_pagesvudiff'] = "Единствени посети на страницата";
$lang['pagesvues_recordpages'] = "Макс. број на страници за еден посетител";
$lang['pagesvues_tabdetails'] = "Посетени страници (од %s до %s)"; // (de 1   21)
$lang['pagesvues_graphsnbpages'] = "График на посети по посетена страница";
$lang['pagesvues_graphnbvisitespageimg'] = "Посети по број на посетени страници";
$lang['pagesvues_graphheureserveur'] = "График на посети според времето на серверот";
$lang['pagesvues_graphheureserveurimg'] = "Посети според времето на серверот";
$lang['pagesvues_graphheurevisiteur'] = "График на посети според локално време";
$lang['pagesvues_graphpageslocalimg'] = "Посети според локално време";
$lang['pagesvues_tempsparpage'] = "Time by page";
$lang['pagesvues_total_time'] = "Total time";
$lang['pagesvues_avg_time'] = "Average time";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Движење на посетителот";
$lang['suivi_pageentree'] = "Влезни страници";
$lang['suivi_pagesortie'] = "Излезни страници";
$lang['suivi_tauxsortie'] = "Процент на излез";
$lang['suivi_pageentreehits'] = "Entry hits";
$lang['suivi_pagesortiehits'] = "Exit hits";
$lang['suivi_singlepage'] = "Single Pages visits";

//
// Origin
//
$lang['provenance_titre'] = "Потекло на посетителите";
$lang['provenance_recappays'] = "Извештај по земји";
$lang['provenance_pays'] = "Земји";
$lang['provenance_paysimg'] = "Дијаграм на посетители по земја";
$lang['provenance_fai'] = "Интернет доставувачи";
$lang['provenance_nbpays'] = "Number of different countries : %s";
$lang['provenance_provider'] = "Доставувачи"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "Континент";
$lang['provenance_mappemonde'] = "Карта на светот";
$lang['provenance_interetspays'] = "Countries Interests";

//
// Setup
//
$lang['configurations_titre'] = "Поставки на посетителот";
$lang['configurations_os'] = "Оперативен систем";
$lang['configurations_osimg'] = "График на оперативни системи";
$lang['configurations_navigateurs'] = "Прелистувачи";
$lang['configurations_navigateursimg'] = "График на прелистувачи";
$lang['configurations_resolutions'] = "Резолуција на екранот";
$lang['configurations_resolutionsimg'] = "График на резолуции на екранот";
$lang['configurations_couleurs'] = "Квалитет на боја";
$lang['configurations_couleursimg'] = "График на квалитет на боја";
$lang['configurations_rapport'] = "Нормален/широк екран";
$lang['configurations_large'] = "Широк екран";
$lang['configurations_normal'] = "Нормален";
$lang['configurations_double'] = "Dual Screen";
$lang['configurations_plugins'] = "Приклучоци";
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
$lang['affluents_titre'] = "Препорачатели";
$lang['affluents_recapimg'] = "График на посетители по препорачатели";
$lang['affluents_directimg'] = "Директно";
$lang['affluents_sitesimg'] = "Вебсајтови";
$lang['affluents_moteursimg'] = "Пребарувачи";
$lang['affluents_referrersimg'] = "Препорачатели";
$lang['affluents_moteurs'] = "Пребарувачи";
$lang['affluents_nbparmoteur'] = "Посети  преку пребарувачи : %s";
$lang['affluents_aucunmoteur'] = "Немало посети преку прабарувачи.";
$lang['affluents_motscles'] = "Клучни зборови";
$lang['affluents_nbmotscles'] = "Посебни клучни зборови : %s";
$lang['affluents_aucunmotscles'] = "Клучниот збор не е пронајден.";
$lang['affluents_sitesinternet'] = "Вебсајтови";
$lang['affluents_nbautressites'] = "Посети преку други вебсајтови : %s";
$lang['affluents_nbautressitesdiff'] = "Број на различни вебсајтови : %s";
$lang['affluents_aucunautresite'] = "Немало посети преку други вебсајтови.";
$lang['affluents_entreedirecte'] = "Директно барање";
$lang['affluents_nbentreedirecte'] = "Број на директни барања : %s";
$lang['affluents_nbpartenaires'] = "Visits provided by partners : %s";
$lang['affluents_aucunpartenaire'] = "No visits were provided by partners sites.";
$lang['affluents_nbnewsletters'] = "Visits provided by newsletters : %s";
$lang['affluents_aucunnewsletter'] = "No visits were provided by newsletters.";
$lang['affluents_details'] = "Детали"; // In the results of the referers array
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
$lang['purge_titre'] = "Преглед по посети и префрлања";
$lang['purge_intro'] = "Овој период е отстранет при администрацијата, зачувана е само основната статистика.";
$lang['admin_purge'] = "Одржување на базата на податоци";
$lang['admin_purgeintro'] = "Овој дел ви овозможува да работите со табелите на phpMyVisites. Можете да ја видите искористеноста на дискот од страна на табелите, да ги оптимизирате или да отстраните стари записи. Ова ќе ви овозможи да ја ограничите големината на табелите во вашата база на податоци.";
$lang['admin_optimisation'] = "Оптимизирање на [ %s ]..."; // Tables names
$lang['admin_postopt'] = "Вкупната големина намалена за %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Отстрани ги следниве периоди: %s";
$lang['admin_purge_fini'] = "Бришењето на табелите е завршено...";
$lang['admin_bdd_nom'] = "Име";
$lang['admin_bdd_enregistrements'] = "Записи";
$lang['admin_bdd_taille'] = "Големина на табелата";
$lang['admin_bdd_opt'] = "Оптимизирај";
$lang['admin_bdd_purge'] = "Критериум за отстранување";
$lang['admin_bdd_optall'] = "Оптимизирај се";
$lang['admin_purge_j'] = "Отстрани ги записите постари од %s дена";
$lang['admin_purge_s'] = "Отстрани ги записите постари од %s недели";
$lang['admin_purge_m'] = "Отстрани ги записите постари од %s месеци";
$lang['admin_purge_y'] = "Remove records older than %s years";
$lang['admin_purge_logs'] = "Отстрани ги сите извештаи";
$lang['admin_purge_autres'] = "Отстрани исто како и за табелата '%s'";
$lang['admin_purge_none'] = "Недозволено дејство";
$lang['admin_purge_cal'] = "Пресметај и отстрани (може да потрае неколку минути)";
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
$lang['admin_intro'] = "Добродојдовте во делот за подесување на phpMyVisites. Можете да ги промените сите информации во врска со вашата инсталација. Ако имате некакви проблеми слободно консултирајте ја %s официјалната документација на phpMyVisites %s."; // link to the doc
$lang['admin_configetperso'] = "Општи поставки";
$lang['admin_afficherjavascript'] = "Покажи го JavaScript кодот за статистика";
$lang['admin_cookieadmin'] = "Не го вклучувај администраторот во статистиката";
$lang['admin_ip_ranges'] = "Don't count IP/IP ranges in the statistics";
$lang['admin_sitesenregistres'] = "Зачувани вебсајтови:";
$lang['admin_retour'] = "Назад";
$lang['admin_cookienavigateur'] = "Можете да го исклучите администраторот од статистиката. Овој метод е базиран на cookies и оваа опција ќе работи само со тековниот прелистувач. Можете да ја промените оваа опција во секое време.";
$lang['admin_prendreencompteadmin'] = "Вклучи го администраторот во статистиката (cookie-то ќе биде избришено)";
$lang['admin_nepasprendreencompteadmin'] = "Исклучи го администраторот од статистиката (ќе биде создаден cookie)";
$lang['admin_etatcookieoui'] = "Администраторот е вклучен во статистиката за овој вебсајт (Ова е почетната поставка, третирани сте како обичен посетител)";
$lang['admin_etatcookienon'] = "Не сте вклучени во статистиката за овој вебсајт (Вашите посети нема да бидат регистрирани)";
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
$lang['install_loginmysql'] = "Корисник на базата на податоци";
$lang['install_mdpmysql'] = "Лозинка";
$lang['install_serveurmysql'] = "Сервер на базата на податоци";
$lang['install_basemysql'] = "Име на базата на податоци";
$lang['install_prefixetable'] = "Префикс на табелата";
$lang['install_utilisateursavances'] = "Напредни корисници (опционално)";
$lang['install_oui'] = "Да";
$lang['install_non'] = "Не";
$lang['install_ok'] = "Во ред";
$lang['install_probleme'] = "Внимание: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Администратор:";
$lang['install_mdpadmin'] = "Лозинка:";
$lang['install_chemincomplet'] = "Полната патека до апликацијата phpMyVisites (на пример, http://www.mysite.com/rep1/rep3/phpmyvisites/). Патеката мора да завршува со симболот <strong>/</strong>.";
$lang['install_afficherlogo'] = "Прикажи го логото на вашите страници?<br />%s"; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Прикажи ги статистичките графови.";
$lang['install_valider'] = "Испрати"; //  during installation and for login
$lang['install_popup_logo'] = "Молам изберете лого";
$lang['install_logodispo'] = "Погледнете ги достапните различни логоа";
$lang['install_welcome'] = "Welcome!";
$lang['install_system_requirements'] = "System Requirements";
$lang['install_database_setup'] = "Database Setup";
$lang['install_create_tables'] = "Table creation";
$lang['install_general_setup'] = "General Setup";
$lang['install_create_config_file'] = "Create Config File";
$lang['install_first_website_setup'] = "Add First Website";
$lang['install_display_javascript_code'] = "Display Javascript code";
$lang['install_finish'] = "Finished!";
$lang['install_txt2'] = "По завршената инсталација, ќе биде испратено барање до официјалниот сајт за да ни помогне да го следиме бројот на луѓе кои користат phpMyVisites. Ви благодариме за вашето разбирање.";
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
$lang['update_jschange'] = "Внимание! <br /> Javascript кодот на phpMyVisites е изменет. МОРАТЕ да ги надградите вашите страници и да го копирате новиот phpMyVisites Javascript код на СИТЕ ваши конфигурирани страници. <br /> Промените на javascript кодот се ретки, се извинуваме за проблемите предизвикани од оваа измена.";

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
$lang['moistab']['01'] = "Јануари";
$lang['moistab']['02'] = "Февруари";
$lang['moistab']['03'] = "Март";
$lang['moistab']['04'] = "Април";
$lang['moistab']['05'] = "Мај";
$lang['moistab']['06'] = "Јуни";
$lang['moistab']['07'] = "Јули";
$lang['moistab']['08'] = "Август";
$lang['moistab']['09'] = "Септември";
$lang['moistab']['10'] = "Октомври";
$lang['moistab']['11'] = "Ноември";
$lang['moistab']['12'] = "Декември";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Јан";
$lang['moistab_graph']['02'] = "Фев";
$lang['moistab_graph']['03'] = "Мар";
$lang['moistab_graph']['04'] = "Апр";
$lang['moistab_graph']['05'] = "Мај";
$lang['moistab_graph']['06'] = "Јун";
$lang['moistab_graph']['07'] = "Јул";
$lang['moistab_graph']['08'] = "Авг";
$lang['moistab_graph']['09'] = "Сеп";
$lang['moistab_graph']['10'] = "Окт";
$lang['moistab_graph']['11'] = "Ное";
$lang['moistab_graph']['12'] = "Дек";

// Day of the week
$lang['jsemaine']['Mon'] = "Понеделник";
$lang['jsemaine']['Tue'] = "Вторник";
$lang['jsemaine']['Wed'] = "Среда";
$lang['jsemaine']['Thu'] = "Четврток";
$lang['jsemaine']['Fri'] = "Петок";
$lang['jsemaine']['Sat'] = "Сабота";
$lang['jsemaine']['Sun'] = "Недела";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Пон";
$lang['jsemaine_graph']['Tue'] = "Вто";
$lang['jsemaine_graph']['Wed'] = "Сре";
$lang['jsemaine_graph']['Thu'] = "Чет";
$lang['jsemaine_graph']['Fri'] = "Пет";
$lang['jsemaine_graph']['Sat'] = "Саб";
$lang['jsemaine_graph']['Sun'] = "Нед";

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
$lang['eur'] = "Европа";
$lang['afr'] = "Африка";
$lang['asi'] = "Азија";
$lang['ams'] = "Јужна и Централна Америка";
$lang['amn'] = "Северна Америка";
$lang['oce'] = "Океанија";

// Oceans
$lang['oc_pac'] = "Тихи Океан";
$lang['oc_atl'] = "Атлантски Океан";
$lang['oc_ind'] = "Индиски Океан";

// Countries
$lang['domaines'] = array(
    "xx" => "Непозната",
    "ac" => "Асенсонови О-и",
    "ad" => "Андора",
    "ae" => "ОАЕ",
    "af" => "Авганистан",
    "ag" => "Антигва и Барбуда",
    "ai" => "Ангвила",
    "al" => "Албанија",
    "am" => "Ерменија",
    "an" => "Антилски О-ви",
    "ao" => "Ангола",
    "aq" => "Антарктик",
    "ar" => "Аргентина",
    "as" => "Американска Самоа",
    "at" => "Австрија",
    "au" => "Австралија",
    "aw" => "Аруба",
    "az" => "Азербејџан",
    "ba" => "Босна и Херцеговина",
    "bb" => "Барбадос",
    "bd" => "Бангладеш",
    "be" => "Белгија",
    "bf" => "Буркина Фасо",
    "bg" => "Бугарија",
    "bh" => "Бахреин",
    "bi" => "Бурунди",
    "bj" => "Бенин",
    "bm" => "Бермудски О-ви",
    "bn" => "Брунеи",
    "bo" => "Боливија",
    "br" => "Бразил",
    "bs" => "Бахами",
    "bt" => "Бутан",
    "bv" => "О-в Буве",
    "bw" => "Боцвана",
    "by" => "Белорусија",
    "bz" => "Белиз",
    "ca" => "Канада",
    "cc" => "Кокосови (Килинг) О-ви",
    "cd" => "Конго, Демократска Република",
    "cf" => "Централна Африканска Република",
    "cg" => "Конго",
    "ch" => "Швајцарија",
    "ci" => "Брегот на Слонова Коска",
    "ck" => "Кукови О-ви",
    "cl" => "Чиле",
    "cm" => "Камерун",
    "cn" => "Кина",
    "co" => "Колумбија",
    "cr" => "Костарика",
	"cs" => "Serbia Montenegro",
    "cu" => "Куба",
    "cv" => "Капе Верде",
    "cx" => "Божиќен О-в",
    "cy" => "Кипар",
    "cz" => "Република Чешка",
    "de" => "Германија",
    "dj" => "Џибути",
    "dk" => "Данска",
    "dm" => "Доминика",
    "do" => "Доминиканска Република",
    "dz" => "Алжир",
    "ec" => "Еквадор",
    "ee" => "Естонија",
    "eg" => "Египет",
    "eh" => "Западна Сахара",
    "er" => "Еритреја",
    "es" => "Шпанија",
    "et" => "Етиопија",
    "fi" => "Финска",
    "fj" => "Фиџи",
    "fk" => "Фолкландски О-ви",
    "fm" => "Микронезија",
    "fo" => "Фарски О-ви",
    "fr" => "Франција",
    "ga" => "Габон",
    "gd" => "Гренада",
    "ge" => "Грузија",
    "gf" => "Француска Гијана",
    "gg" => "Џернси",
    "gh" => "Гана",
    "gi" => "Гибралтар",
    "gl" => "Гренланд",
    "gm" => "Гамбија",
    "gn" => "Гвинеја",
    "gp" => "Гвадалупе",
    "gq" => "Екваторијална Гвинеја",
    "gr" => "Грција",
    "gs" => "Јужна Џорџија и Јужни Сендвич О-ви",
    "gt" => "Гватемала",
    "gu" => "Гуам",
    "gw" => "Гвинеја-Бисао",
    "gy" => "Гијана",
    "hk" => "Хонк Конг",
    "hm" => "О-ви на Херд и Мекдоналд",
    "hn" => "Хондурас",
    "hr" => "Хрватска",
    "ht" => "Хаити",
    "hu" => "Унгарија",
    "id" => "Индонезија",
    "ie" => "Ирска",
    "il" => "Израел",
    "im" => "О-в Мен",
    "in" => "Индија",
    "io" => "Британска Територија во Индискиот Океан",
    "iq" => "Ирак",
    "ir" => "Иран",
    "is" => "Исланд",
    "it" => "Италија",
    "je" => "Џерси",
    "jm" => "Јамајка",
    "jo" => "Јордан",
    "jp" => "Јапонија",
    "ke" => "Кенија",
    "kg" => "Киргистан",
    "kh" => "Камбоџа",
    "ki" => "Кирибати",
    "km" => "Коморос",
    "kn" => "Св. Китс и Невис",
    "kp" => "Кореја, Демократска Народна Република",
    "kr" => "Кореја",
    "kw" => "Кувајт",
    "ky" => "Кајмански О-ви",
    "kz" => "Казахстан",
    "la" => "Лаос",
    "lb" => "Либан",
    "lc" => "Санта Луција",
    "li" => "Лихтенштајн",
    "lk" => "Шри Ланка",
    "lr" => "Либерија",
    "ls" => "Лесото",
    "lt" => "Литванија",
    "lu" => "Луксембург",
    "lv" => "Латвија",
    "ly" => "Либија",
    "ma" => "Мароко",
    "mc" => "Монако",
    "md" => "Република Молдавија",
    "mg" => "Мадагаскар",
    "mh" => "Маршалски О-ви",
    "mk" => "Македонија",
    "ml" => "Мали",
    "mm" => "Мјанмар",
    "mn" => "Монголија",
    "mo" => "Макао",
    "mp" => "Северни Маријански О-ва",
    "mq" => "Мартиник",
    "mr" => "Мавританија",
    "ms" => "Монсерат",
    "mt" => "Малта",
    "mu" => "Маурициус",
    "mv" => "Малдиви",
    "mw" => "Малави",
    "mx" => "Мексико",
    "my" => "Малезија",
    "mz" => "Мозамбик",
    "na" => "Намибија",
    "nc" => "Нова Каледонија",
    "ne" => "Нигер",
    "nf" => "Норфолкски О-ви",
    "ng" => "Нигерија",
    "ni" => "Никарагва",
    "nl" => "Холандија",
    "no" => "Норвешка",
    "np" => "Непал",
    "nr" => "Науру",
    "nu" => "Ние",
    "nz" => "Нов Зеланд",
    "om" => "Оман",
    "pa" => "Панама",
    "pe" => "Перу",
    "pf" => "Полинезија",
    "pg" => "Папуа Нова Гвинеја",
    "ph" => "Филипини",
    "pk" => "Пакистан",
    "pl" => "Полска",
    "pm" => "Сен-Пјер и Микелон",
    "pn" => "Питкерн",
    "pr" => "Порторико",
	"ps" => "Palestinian Territory",
    "pt" => "Португалија",
    "pw" => "Пало",
    "py" => "Парагвај",
    "qa" => "Катар",
    "re" => "О-ви Реунион",
    "ro" => "Романија",
    "ru" => "Руска Федерација",
    "rs" => "Русија",
    "rw" => "Руанда",
    "sa" => "Саудиска Арабија",
    "sb" => "Соломонови О-ви",
    "sc" => "Сејшели",
    "sd" => "Судан",
    "se" => "Шведска",
    "sg" => "Сингапур",
    "sh" => "Св. Елена",
    "si" => "Словенија",
    "sj" => "Сволбар",
    "sk" => "Словачка",
    "sl" => "Сиера Леоне",
    "sm" => "Сан Марино",
    "sn" => "Сенегал",
    "so" => "Сомалија",
    "sr" => "Суринам",
    "st" => "Сан Томе и Принсипе",
    "su" => "СССР (бивш)",
    "sv" => "Ел Салвадор",
    "sy" => "Сирија",
    "sz" => "Swaziland",
    "tc" => "Турски и Каикоски О-ви",
    "td" => "Чад",
    "tf" => "Јужни Француски Територии",
    "tg" => "Того",
    "th" => "Тајланд",
    "tj" => "Таџикистан",
    "tk" => "Токело",
    "tm" => "Туркменистан",
    "tn" => "Тунис",
    "to" => "Тонго",
    "tp" => "Источен Тимор",
    "tr" => "Турција",
    "tt" => "Тринидад и Тобаго",
    "tv" => "Тувалу",
    "tw" => "Тајван",
    "tz" => "Танзанија",
    "ua" => "Украина",
    "ug" => "Уганда",
    "uk" => "Обединето Кралство",
    "gb" => "Велика Британија",
    "um" => "О-ви на САД",
    "us" => "САД",
    "uy" => "Уругвај",
    "uz" => "Узбекистан",
    "va" => "Ватикан",
    "vc" => "Св. Винсент",
    "ve" => "Венецуэла",
    "vg" => "Девствени О-ви, Велика Британија",
    "vi" => "Девствени О-ви, САД",
    "vn" => "Виетнам",
    "vu" => "Вануату",
    "wf" => "Волис и Футуна",
    "ws" => "Самоа",
    "ye" => "Јемен",
    "yt" => "Мајота",
    "yu" => "Југославија",
    "za" => "Јужна Африка",
    "zm" => "Замбија",
    "zr" => "Заир",
    "zw" => "Зимбабве",
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
    "tv" => "Тувалу",
    "ws" => "Самоа",
);
?>