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
$lang['auteur_nom'] = "Wojtek Woźny"; // Translator's name
$lang['auteur_email'] = "wojtaco@poczta.onet.pl"; // Translator's email
$lang['charset'] = "UTF-8"; // language file charset (utf-8 by default) 
$lang['text_dir'] = "ltr"; // (('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "pl"; // iso language code
$lang['lang_libelle_en'] = "Polski"; // polish - (english) language name
$lang['lang_libelle_fr'] = "Polonais"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = ' '; // hree thousand spells 3,000 in english
$lang['separateur_decimaux'] = ','; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | statystyka i anliza odwiedzin | aplikacja open source"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, skrypt, aplikacja, software, statystyka, odnośniki, stats, free, open source, gpl, odwiedziny, goście, mysql, odwiedzone strony, strony, odsłony, liczba odsłon, wykresy, przeglądarki, os, system operacyjny, rozdzielczość, dzień, tydzień, miesiąc, rekordy, kraj, host, dostawca internetu, wyszukiwarka, słowa kluczowe, strony referujące, strony wejściowe, strony wyjściowe, tabele"; // Header keywords
$lang['head_description'] = "phpMyVisites | Aplikacja open source, anlizująca odwiedziny i generująca statystykę. Rozwijana w oparciu o PHP/MySQL udostępniana na zasadach licencji Gnu GPL."; //  Header description
$lang['logo_description'] = "phpMyVisites : aplikacja open source generująca statystykę w oparciu o PHP/MySQL, udostępniana na licencji GPL."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Odwiedziny";
$lang['menu_pagesvues'] = "Odwiedzone strony";
$lang['menu_suivi'] = "Przejścia";
$lang['menu_provenance'] = "Pochodzenie";
$lang['menu_configurations'] = "Parametry";
$lang['menu_affluents'] = "Strony odsyłające";
$lang['menu_listesites'] = "Lista stron";
$lang['menu_bilansites'] = "Summary";
$lang['menu_jour'] = "Dzień";
$lang['menu_semaine'] = "Tydzień";
$lang['menu_mois'] = "Miesiąc";
$lang['menu_annee'] = "Year";
$lang['menu_periode'] = "Badany okres: %s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "Oficjalna strona";
$lang['liens_admin'] = "Administracja";
$lang['liens_contacts'] = "Kontakt";

//
// Divers
//
$lang['generique_nombre'] = "Numer";
$lang['generique_tauxsortie'] = "Exit Rate";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Strona wygenerowana w ciągu %s sekund"; // Time in seconds
$lang['generique_divers'] = "Inny"; // for the graphs)
$lang['generique_inconnu'] = "Nieznany"; // for the graphs)
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
$lang['generique_total'] = "Ogółem";
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
$lang['login_password'] = "hasło : "; // lowercase
$lang['login_login'] = "użytkownik : "; // lowercase
$lang['login_error'] = "Błąd logowania. Niepoprawna nazwa użytkownika lub hasło.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "You wish to enter a %sphpMyVisites%s protected area.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Kontakt";
$lang['contacts_langue'] = "Tłumaczenia";
$lang['contacts_merci'] = "Podziękowania";
$lang['contacts_auteur'] = "Twórcą i koordynatorem projektu phpMyVisites jest <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "<strong>Pytania techniczne, informacje o błędach, sugestie</strong> prosimy kierować na oficjalnym forum %s. W innych sprawach można kontaktować się z autorem poprzez formularz na oficjalnej stronie."; // adresse du site
$lang['contacts_trad1'] = "Czy chcesz przetłumaczyć phpMyVisites? Nie wahaj się <strong>phpMyVisites potrzebuje cię!</strong>";
$lang['contacts_trad2'] = "Tłumaczenie phpMyVisites zajmie niezłą chwilę (kilka godzin) wymaga także dobrej znajomości języków; pamiętaj, że <strong>cokolwiek zrobisz, skorzysta z tego wielu ludzi</strong>.  Jeśli jesteś zainteresowany przetłumaczeniem phpMyVisites niezbędne informacje znajdziesz w %s oficjalnej dokumentacji phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "Nie wahaj się skorzystać z %s oficjalnej dokumentacji phpMyVisites %s, w której znajdziesz użyteczne informacje nt. instalacji, konfiguracji oraz działania phpMyVisites. Jest ona dostępna w Twojej wersji phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Thank you <strong>%s</strong>, co-developers of phpMyVisites, for their high quality work on the project.";
$lang['contacts_merci3'] = "Zapoznaj się z pełną listą przyjaciół phpMyVisites na oficjalnej stronie..";
$lang['contacts_merci2'] = "Wielkie podziękowania dla tych, którzy przyłozyli się do przetłumaczenia phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Site %s on %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Go to detailed statistics";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Informacje o gościach"; 
$lang['visites_statistiques'] = "Statystyka";
$lang['visites_periodesel'] = "Za wybrany okres";
$lang['visites_visites'] = "Odwiedziny";
$lang['visites_uniques'] = "Różni goście";
$lang['visites_pagesvues'] = "Odwiedzone strony";
$lang['visites_pagesvisiteurs'] = "Ilość stron na odwiedzającego"; 
$lang['visites_pagesvisites'] = "Pages per visit"; 
$lang['visites_pagesvisitessign'] = "Pages per significant visit"; 
$lang['visites_tempsmoyen'] = "Średni czas odwiedzin";
$lang['visites_tempsmoyenpv'] = "Średni czas oglądania strony";
$lang['visites_tauxvisite'] = "Procent pojedynczych odsłon"; 
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Podsumowanie dla wybranych okresów";
$lang['visites_nbvisites'] = "Odwiedziny";
$lang['visites_aucunevivisite'] = "Brak odwiedzin"; // in the table, must be short
$lang['visites_recap'] = "Podsumowanie";
$lang['visites_unepage'] = "1 strona"; // (graph)
$lang['visites_pages'] = "%s stron"; // 1-2 pages (graph)
$lang['visites_min'] = "%s min"; // 10-15 min (graph)
$lang['visites_sec'] = "%s s"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Wykres podsumowanie statystyki";
$lang['visites_grapghrecaplongterm'] = "Graph to show long term statistics summary";
$lang['visites_graphtempsvisites'] = "Wykres ukazujący czas trwania odwiedzin przypadający na odwiedzajacego";
$lang['visites_graphtempsvisitesimg'] = "Czas trwania odwiedzin";
$lang['visites_graphheureserveur'] = "Wykres ukazujący odwiedziny  przypadające na godzinę (wg czasu serwera)"; 
$lang['visites_graphheureserveurimg'] = "Odwiedziny wg czasu serwera"; 
$lang['visites_graphheurevisiteur'] = "Wykres ukazujący odwiedziny  przypadające na godzinę (wg czasu lokalnego)";
$lang['visites_graphheurelocalimg'] = "Odwiedziny wg czasu lokalnego"; 
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
$lang['pagesvues_titre'] = "Informacje o odwiedzonych stronach";
$lang['pagesvues_joursel'] = "Wybrany dzień";
$lang['pagesvues_jmoins7'] = "Dzień - 7";
$lang['pagesvues_jmoins14'] = "Dzień - 14";
$lang['pagesvues_moyenne'] = "(średnio)";
$lang['pagesvues_pagesvues'] = "Odsłony";
$lang['pagesvues_pagesvudiff'] = "Pojedyncze odsłony";
$lang['pagesvues_recordpages'] = "Najwięcej odsłon na jednego gościa";
$lang['pagesvues_tabdetails'] = "Odsłony (od %s do %s)"; // (from 1 to 21)
$lang['pagesvues_graphsnbpages'] = "Wykres ukazujący ilość odwiedzin o określonej ilości przeglądanych stron";
$lang['pagesvues_graphnbvisitespageimg'] = "Odwiedziny w stosunku do stron";
$lang['pagesvues_graphheureserveur'] = "Wykres ukazujący odwiedziny wg czasu serwera";
$lang['pagesvues_graphheureserveurimg'] = "Odwiedziny wg czasu serwera";
$lang['pagesvues_graphheurevisiteur'] = "Wykres ukazujący odwiedziny wg czasu lokalnego";
$lang['pagesvues_graphpageslocalimg'] = "Odwiedziny wg czasu lokalnego";
$lang['pagesvues_tempsparpage'] = "Time by page";
$lang['pagesvues_total_time'] = "Total time";
$lang['pagesvues_avg_time'] = "Average time";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Zachowanie odwiedzających";
$lang['suivi_pageentree'] = "Strony wejściowe";
$lang['suivi_pagesortie'] = "Strony wyjściowe";
$lang['suivi_tauxsortie'] = "Procent wyjść";
$lang['suivi_pageentreehits'] = "Entry hits";
$lang['suivi_pagesortiehits'] = "Exit hits";
$lang['suivi_singlepage'] = "Single Pages visits";

//
// Origin
//
$lang['provenance_titre'] = "Pochodzenie odwiedzających";
$lang['provenance_recappays'] = "Podsumowanie krajów";
$lang['provenance_pays'] = "Kraje";
$lang['provenance_paysimg'] = "Odwiedzający wg krajów";
$lang['provenance_fai'] = "Dostawcy internetowi";
$lang['provenance_nbpays'] = "Number of different countries : %s";
$lang['provenance_provider'] = "Dostawcy"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "Kontynent";
$lang['provenance_mappemonde'] = "Mapa świata";
$lang['provenance_interetspays'] = "Countries Interests";

//
// Setup
//
$lang['configurations_titre'] = "Parametry odwiedzających";
$lang['configurations_os'] = "Systemy operacyjne";
$lang['configurations_osimg'] = "Wykres ukazujący systemy operacyjne";
$lang['configurations_navigateurs'] = "Przeglądarki";
$lang['configurations_navigateursimg'] = "Wykres ukazujący przeglądarki";
$lang['configurations_resolutions'] = "Rodzielczość ekranu";
$lang['configurations_resolutionsimg'] = "Rozdzielczość";
$lang['configurations_couleurs'] = "Głębia kolorów";
$lang['configurations_couleursimg'] = "Głębia kolorów";
$lang['configurations_rapport'] = "Ekran";
$lang['configurations_large'] = "Szeroki";
$lang['configurations_normal'] = "Normalny";
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
$lang['affluents_titre'] = "Strony odsyłające";
$lang['affluents_recapimg'] = "Wykres odwiedzających według stron odsyłających";
$lang['affluents_directimg'] = "Bezpośrenio";
$lang['affluents_sitesimg'] = "Strony";
$lang['affluents_moteursimg'] = "Wyszukiwarki";
$lang['affluents_referrersimg'] = "Odsyłacze";
$lang['affluents_moteurs'] = "Wyszukiwarki";
$lang['affluents_nbparmoteur'] = "Odwiedziny za pośrednictwem wyszukiwarek: %s";
$lang['affluents_aucunmoteur'] = "Brak odwiedzin za pośrednictwem wyszukiwarek.";
$lang['affluents_motscles'] = "Słowa kluczowe";
$lang['affluents_nbmotscles'] = "Różne słowa kluczowe: %s";
$lang['affluents_aucunmotscles'] = "Nie naleziono słów kluczowych.";
$lang['affluents_sitesinternet'] = "Strony";
$lang['affluents_nbautressites'] = "Odwiedziny z innych stron : %s";
$lang['affluents_nbautressitesdiff'] = "Ilość różnych stron: %s";
$lang['affluents_aucunautresite'] = "Brak odwiedzin z innych stron.";
$lang['affluents_entreedirecte'] = "Bezpośrednie wejścia";
$lang['affluents_nbentreedirecte'] = "Odwiedziny bezpośrednie: %s";
$lang['affluents_nbpartenaires'] = "Visits provided by partners : %s";
$lang['affluents_aucunpartenaire'] = "No visits were provided by partners sites.";
$lang['affluents_nbnewsletters'] = "Visits provided by newsletters : %s";
$lang['affluents_aucunnewsletter'] = "No visits were provided by newsletters.";
$lang['affluents_details'] = "Szczegóły"; // In the results of the referers array
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
$lang['purge_titre'] = "Podsumowanie odwiedzin i odsyłączy";
$lang['purge_intro'] = "Ten okres został usunięty przez administratora, jedynie niezbędne dane zostały zachowane.";
$lang['admin_purge'] = "Utrzymanie bazy danych";
$lang['admin_purgeintro'] = "W tej części możesz zarządzać tabelamiwykorzystywanymi przez phpMyVisites. Możesz zobaczyć ile miejsca zajmują, optymalizować je oraz usuwać stare rekordy. To pozwoli Ci ograniczyć rozmiar bazy danych.";
$lang['admin_optimisation'] = "Optymalizacja tabeli [ %s ]..."; // Tables names
$lang['admin_postopt'] = "Całkowity rozmiar zmniejszony o %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Unuń następujące okresy: %s";
$lang['admin_purge_fini'] = "Skońcono usuwanie tabel...";
$lang['admin_bdd_nom'] = "Nazwa";
$lang['admin_bdd_enregistrements'] = "Rekordy";
$lang['admin_bdd_taille'] = "Rozmiar tabeli";
$lang['admin_bdd_opt'] = "Optymalizuj";
$lang['admin_bdd_purge'] = "Wyczyść kryteria";
$lang['admin_bdd_optall'] = "Optymalizuj wszystkie";
$lang['admin_purge_j'] = "Usuń rekordy starsze niż %s dni";
$lang['admin_purge_s'] = "Usuń rekordy starsze niż %s tygodni";
$lang['admin_purge_m'] = "Usuń rekordy starsze niż %s miesięcy";
$lang['admin_purge_y'] = "Remove records older than %s years";
$lang['admin_purge_logs'] = "Usuń wszystkie logi";
$lang['admin_purge_autres'] = "Purge common to the table '%s'";
$lang['admin_purge_none'] = "Brak możliwości działania";
$lang['admin_purge_cal'] = "Oblicz i wyczyść (może to zająć kilka chwil)";
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
$lang['admin_intro'] = "Wiataj w Centrum Sterowania phpMyVisites. Może zmieniać wszystkie informacje odnoszące się do instalacji. W razie problemów nie wahaj się skorzystać z %s oficjalnej dokumentacji phpMyVisites %s."; // doc
$lang['admin_configetperso'] = "Główne opcje";
$lang['admin_afficherjavascript'] = "Pokaż kod JavaScript dodający odwiedziy do bazy danych";
$lang['admin_cookieadmin'] = "Pomijaj administratora w zliczani odwiedzin";
$lang['admin_ip_ranges'] = "Don't count IP/IP ranges in the statistics";
$lang['admin_sitesenregistres'] = "Zapisane strony:";
$lang['admin_retour'] = "Wstecz";
$lang['admin_cookienavigateur'] = "Możesz wyłączyć Administratora ze statystyki. Ta metoda oparta jest na cookies i będzie działała właściwie w przeglądarce, z której właśnie korzystasz. Możesz zmienić tę opcję w każdym momencie.";
$lang['admin_prendreencompteadmin'] = "Zliczaj odwiedziny Administratora (usuń cookie)";
$lang['admin_nepasprendreencompteadmin'] = "Nie licz odwiedzin administratora  (zapisz cookie)";
$lang['admin_etatcookieoui'] = "Odwiedziny Administratora są dodawane do statystyki (jesteś liczony jak normalny odwiedzający)";
$lang['admin_etatcookienon'] = "Twoje odwiedziny nie są dodawane do statystyk.";
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
$lang['install_loginmysql'] = "Login do bazy danych";
$lang['install_mdpmysql'] = "Hasło do bazy danych";
$lang['install_serveurmysql'] = "Serwer bazy danych";
$lang['install_basemysql'] = "Nazwa bazy danych";
$lang['install_prefixetable'] = "Prefiks tabeli";
$lang['install_utilisateursavances'] = "Dla zaawansowanych użytkowników (dowolne)";
$lang['install_oui'] = "Tak";
$lang['install_non'] = "Nie";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Problem: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Login administratora:";
$lang['install_mdpadmin'] = "Hasło administratora:";
$lang['install_chemincomplet'] = "Pełna ścieżka do phpMyVisites (jak http://www.mysite.com/rep1/rep3/phpmyvisites/). Ścieżka musi kończyć się <strong>/</strong>.";
$lang['install_afficherlogo'] = "Czy pokazywać logo na Twoich stronach?<br /> %s <br />By allowing the display of the logo on your site, you will help publicize phpMyVisites and help it evolve more rapidly.  It is also a way to thank the author who has spent many hours developing this Open Source, free application."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Pokazuj wykresy.";
$lang['install_valider'] = "Wyślij"; //  during installation and for login
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
$lang['install_txt2'] = "Na zakończenie, zostanie wysłana informacja do oficjalnej strony projektu. Pomoże nam to zdawać sobie sprawę z ilości ludzi korzystających z phpMyVisites. Dziękujemy za zrozumienie.";
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
$lang['moistab']['01'] = "styczeń";
$lang['moistab']['02'] = "luty";
$lang['moistab']['03'] = "marzec";
$lang['moistab']['04'] = "kwiecień";
$lang['moistab']['05'] = "maj";
$lang['moistab']['06'] = "czerwiec";
$lang['moistab']['07'] = "lipiec";
$lang['moistab']['08'] = "sierpień";
$lang['moistab']['09'] = "wrzesień";
$lang['moistab']['10'] = "październik";
$lang['moistab']['11'] = "listopad";
$lang['moistab']['12'] = "grudzień";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "sty";
$lang['moistab_graph']['02'] = "lut";
$lang['moistab_graph']['03'] = "mar";
$lang['moistab_graph']['04'] = "kwi";
$lang['moistab_graph']['05'] = "maj";
$lang['moistab_graph']['06'] = "cze";
$lang['moistab_graph']['07'] = "lip";
$lang['moistab_graph']['08'] = "sier";
$lang['moistab_graph']['09'] = "wrz";
$lang['moistab_graph']['10'] = "paz";
$lang['moistab_graph']['11'] = "lis";
$lang['moistab_graph']['12'] = "gru";

// Day of the week
$lang['jsemaine']['Mon'] = "poniedziałek";
$lang['jsemaine']['Tue'] = "wtorek";
$lang['jsemaine']['Wed'] = "środa";
$lang['jsemaine']['Thu'] = "czwartek";
$lang['jsemaine']['Fri'] = "piątek";
$lang['jsemaine']['Sat'] = "sobota";
$lang['jsemaine']['Sun'] = "niedziela";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "pon";
$lang['jsemaine_graph']['Tue'] = "wt";
$lang['jsemaine_graph']['Wed'] = "śr";
$lang['jsemaine_graph']['Thu'] = "czw";
$lang['jsemaine_graph']['Fri'] = "pt";
$lang['jsemaine_graph']['Sat'] = "sob";
$lang['jsemaine_graph']['Sun'] = "nied";

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
$lang['afr'] = "Afryka";
$lang['asi'] = "Azja";
$lang['ams'] = "Ameryka Południowa i Środkowa";
$lang['amn'] = "Ameryka Północna";
$lang['oce'] = "Oceania";

// Oceans
$lang['oc_pac'] = "Pacific Ocean"; // TODO : translate
$lang['oc_atl'] = "Atlantic Ocean"; // TODO : translate
$lang['oc_ind'] = "Indian Ocean"; // TODO : translate

// Countries
$lang['domaines'] = array(
    "xx" => "Nieznany",
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
    "ar" => "Argentyna",
    "as" => "American Samoa",
    "at" => "Austria",
    "au" => "Australia",
    "aw" => "Aruba",
    "az" => "Azerbejdżan",
    "ba" => "Bośnia and Hercegowina",
    "bb" => "Barbados",
    "bd" => "Bangladesh",
    "be" => "Belgia",
    "bf" => "Burkina Faso",
    "bg" => "Bułgaria",
    "bh" => "Bahrain",
    "bi" => "Burundi",
    "bj" => "Benin",
    "bm" => "Bermuda",
    "bn" => "Bruneo",
    "bo" => "Boliwia",
    "br" => "Brazylia",
    "bs" => "Bahama",
    "bt" => "Bhutan",
    "bv" => "Bouvet Island",
    "bw" => "Botswana",
    "by" => "Białouś",
    "bz" => "Belize",
    "ca" => "Kanada",
    "cc" => "Cocos (Keeling) Islands",
    "cd" => "Congo, The Democratic Republic of the",
    "cf" => "Central African Republic",
    "cg" => "Congo",
    "ch" => "Szwajcaria",
    "ci" => "Wybrzerze Kości Słoniowej",
    "ck" => "Cook Islands",
    "cl" => "Chile",
    "cm" => "Kamerun",
    "cn" => "Chiny",
    "co" => "Kolumbia",
    "cr" => "Kostaryka",
	"cs" => "Serbia Montenegro",
    "cu" => "Kuba",
    "cv" => "Cape Verde",
    "cx" => "Christmas Island",
    "cy" => "Cypr",
    "cz" => "Czechy",
    "de" => "Niemcy",
    "dj" => "Djibouti",
    "dk" => "Dania",
    "dm" => "Dominica",
    "do" => "Dominican Republic",
    "dz" => "Algeria",
    "ec" => "Ekwador",
    "ee" => "Estonia",
    "eg" => "Egipt",
    "eh" => "Western Sahara",
    "er" => "Eritrea",
    "es" => "Hiszpania",
    "et" => "Ethiopia",
    "fi" => "Finlandia",
    "fj" => "Fidżi",
    "fk" => "Falkland Islands (Malvinas)",
    "fm" => "Micronesia, Federated States of",
    "fo" => "Faroe Islands",
    "fr" => "Francja",
    "ga" => "Gabon",
    "gd" => "Grenada",
    "ge" => "Gruzja",
    "gf" => "French Guyana",
    "gg" => "Guernsey",
    "gh" => "Ghana",
    "gi" => "Gibraltar",
    "gl" => "Grenlandia",
    "gm" => "Gambia",
    "gn" => "Guinea",
    "gp" => "Guadeloupe",
    "gq" => "Equatorial Guinea",
    "gr" => "Grecja",
    "gs" => "South Georgia and the South Sandwich Islands",
    "gt" => "Gwatemala",
    "gu" => "Guam",
    "gw" => "Guinea-Bissau",
    "gy" => "Guyana",
    "hk" => "Hong Kong",
    "hm" => "Heard Island and McDonald Islands",
    "hn" => "Honduras",
    "hr" => "Chorwacja",
    "ht" => "Haiti",
    "hu" => "Węgry",
    "id" => "Indonezja",
    "ie" => "Irlandia",
    "il" => "Izrael",
    "im" => "Man Island",
    "in" => "Indie",
    "io" => "British Indian Ocean Territory",
    "iq" => "Irak",
    "ir" => "Iran, Islamic Republic of",
    "is" => "Isladia",
    "it" => "Włochy",
    "je" => "Jersey",
    "jm" => "Jamaica",
    "jo" => "Jordan",
    "jp" => "Japonia",
    "ke" => "Kenia",
    "kg" => "Kirgistan",
    "kh" => "Cambodia",
    "ki" => "Kiribati",
    "km" => "Comoros",
    "kn" => "Saint Kitts and Nevis",
    "kp" => "Korea, Democratic People's Republic of",
    "kr" => "Korea, Republic of",
    "kw" => "Kuwejt",
    "ky" => "Cayman Islands",
    "kz" => "Kazahstan",
    "la" => "Laos",
    "lb" => "Lebanon",
    "lc" => "Saint Lucia",
    "li" => "Liechtenstein",
    "lk" => "Sri Lanka",
    "lr" => "Liberia",
    "ls" => "Lesotho",
    "lt" => "Litwa",
    "lu" => "Luksemburg",
    "lv" => "Łotwa",
    "ly" => "Libya",
    "ma" => "Maroko",
    "mc" => "Monako",
    "md" => "Mołdawia",
    "mg" => "Madagaskar",
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
    "mx" => "Meksyk",
    "my" => "Malezja",
    "mz" => "Mozambique",
    "na" => "Namibia",
    "nc" => "New Caledonia",
    "ne" => "Niger",
    "nf" => "Norfolk Island",
    "ng" => "Nigeria",
    "ni" => "Nicaragua",
    "nl" => "Holandia",
    "no" => "Norwegia",
    "np" => "Nepal",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "Nowa Zelandia",
    "om" => "Oman",
    "pa" => "Panama",
    "pe" => "Peru",
    "pf" => "French Polynesia",
    "pg" => "Papua New Guinea",
    "ph" => "Philippines",
    "pk" => "Pakistan",
    "pl" => "Polska",
    "pm" => "Saint Pierre and Miquelon",
    "pn" => "Pitcairn",
    "pr" => "Puerto Rico",
	"ps" => "Palestinian Territory",
    "pt" => "Portugalia",
    "pw" => "Palau",
    "py" => "Paragwaj",
    "qa" => "Katar",
    "re" => "Reunion Island",
    "ro" => "Rumunia",
    "ru" => "Rosja",
    "rs" => "Rosja",
    "rw" => "Rwanda",
    "sa" => "Arabia Saudyjska",
    "sb" => "Solomon Islands",
    "sc" => "Seychelles",
    "sd" => "Sudan",
    "se" => "Szwecja",
    "sg" => "Singapur",
    "sh" => "Saint Helena",
    "si" => "Słowenia",
    "sj" => "Svalbard",
    "sk" => "Słowacja",
    "sl" => "Sierra Leone",
    "sm" => "San Marino",
    "sn" => "Senegal",
    "so" => "Somalia",
    "sr" => "Suriname",
    "st" => "Sao Tome and Principe",
    "su" => "Dawny ZSRR",
    "sv" => "El Salvador",
    "sy" => "Syrian Arab Republic",
    "sz" => "Swaziland",
    "tc" => "Turks and Caicos Islands",
    "td" => "Czad",
    "tf" => "French Southern Territories",
    "tg" => "Togo",
    "th" => "Tajlandia",
    "tj" => "Tadżykistan",
    "tk" => "Tokelau",
    "tm" => "Turkmenistan",
    "tn" => "Tunezja",
    "to" => "Tonga",
    "tp" => "East Timor",
    "tr" => "Turcja",
    "tt" => "Trinidad and Tobago",
    "tv" => "Tuvalu",
    "tw" => "Taiwan, Province of China",
    "tz" => "Tanzania, United Republic of",
    "ua" => "Ukraina",
    "ug" => "Uganda",
    "uk" => "Wielka Brytania",
    "gb" => "Wielka Brytania",
    "um" => "United States Minor Outlying Islands",
    "us" => "USA",
    "uy" => "Urugwaj",
    "uz" => "Uzbekistan",
    "va" => "Watykan",
    "vc" => "Saint Vincent and the Grenadines",
    "ve" => "Wenezuela",
    "vg" => "Virgin Islands, British",
    "vi" => "Virgin Islands, U.S.",
    "vn" => "Wietnam",
    "vu" => "Vanuatu",
    "wf" => "Wallis and Futuna",
    "ws" => "Samoa",
    "ye" => "Yemen",
    "yt" => "Mayotte",
    "yu" => "Jugosławia",
    "za" => "RPA",
    "zm" => "Zambia",
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