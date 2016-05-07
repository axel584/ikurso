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
$lang['auteur_nom'] = "Liuta Romulus Ovidiu"; // Translator's name
$lang['auteur_email'] = "admin@devplug.com"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "ro"; // iso language code
$lang['lang_libelle_en'] = "Romanian"; // english language name
$lang['lang_libelle_fr'] = "Roumain"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = ''; // three thousand spells 3,000 in english
$lang['separateur_decimaux'] = '.'; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | aplicatie open source pentru statistici web si analizator de traffic"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, script, aplicatie, software, statistici, referals, stats, gratis, open source, gpl, visite, vizitatori, mysql, pagini accesate, pagini, accesari, numarul de visite, grafice, Browsers, sisteme de operare, so, rezolutii, zi, saptamana, luna, inregistrari, tara, gazda, service providers, motor de cautare, cuvinte cheie, referrers, grafice, pagini de intrare, pagini de iesire, grafice complexe"; // Header keywords
$lang['head_description'] = "phpMyVisites | O aplicatie open source pentru statistici web dezvoltata in PHP/MySQL si distribuita sub licenta Gnu GPL."; // Header description
$lang['logo_description'] = "phpMyVisites : O aplicatie open source pentru statistici web dezvoltata in PHP/MySQL si distribuita sub licenta Gnu GPL."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Accesari";
$lang['menu_pagesvues'] = "Pagini Accesate";
$lang['menu_suivi'] = "Accesari";
$lang['menu_provenance'] = "Sursa";
$lang['menu_configurations'] = "Setari";
$lang['menu_affluents'] = "Referinte";
$lang['menu_listesites'] = "Site-uri Listate";
$lang['menu_bilansites'] = "Sumar";
$lang['menu_jour'] = "Zi";
$lang['menu_semaine'] = "Saptamana";
$lang['menu_mois'] = "Luna";
$lang['menu_annee'] = "An";
$lang['menu_periode'] = "Perioada Studiata: %s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "Site-ul Oficial";
$lang['liens_admin'] = "Administrator";
$lang['liens_contacts'] = "Contact";

//
// Divers
//
$lang['generique_nombre'] = "Numar";
$lang['generique_tauxsortie'] = "Rata de Iesire";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Pagina generata in %s secunde"; // Time in seconds
$lang['generique_divers'] = "Altele"; // (for the graphs)
$lang['generique_inconnu'] = "Necunoscut"; // (for the graphs)
$lang['generique_vous'] = "... Dumneavoastra ?";
$lang['generique_traducteur'] = "Traducator";
$lang['generique_langue'] = "Limba";
$lang['generique_autrelangure'] = "Altele?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "Nici un vizitator in aceasta perioada."; 
$lang['generique_aucune_visite_bdd'] = "<b>Atentie ! </b> Nu aveti nici un vizitator intergistrat in baza de date pentru site-ul curent. Asigurati-va ca ati instalat codul javascript corect in paginile site-ului, cu adresa corecta a phpMyVisites <u>IN</u> codul Javascript. Consultati documentatia pentru ajutor.";
$lang['generique_aucune_site_bdd'] = "Nici un site inregistrat in baza de date ! Incercati sa va logati ca si super-userul phpMyVisites pentru a adauga un nou site.";
$lang['generique_retourhaut'] = "Top";
$lang['generique_tempsvisite'] = "%smin %ss"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%sh"; // 4h means 4 hours
$lang['generique_siteno'] = "Site %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Newsletter %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "Partener %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "General";
$lang['generique_user'] = "Utilizator %s"; // User "Admin"
$lang['generique_previous'] = "Precedent";
$lang['generique_next'] = "Urmator";
$lang['generique_lowpop'] = "Exclude populatia putina din statistici";
$lang['generique_allpop'] = "Include toata populatia in statistici";
$lang['generique_to'] = "catre"; // 4 'to' 8
$lang['generique_total_on'] = "pe"; // 4 to 8 'on' 10
$lang['generique_total'] = "Total";
$lang['generique_information'] = "Informatie";
$lang['generique_done'] = "Gata!";
$lang['generique_other'] = "Altul";
$lang['generique_description'] = "Descriere:";
$lang['generique_name'] = "Nume:";
$lang['generique_variables'] = "Variabile";
$lang['generique_logout'] = "Logout";
$lang['generique_login'] = "Logare";
$lang['generique_hits'] = "Accesari";
$lang['generique_errors'] = "Erori";
$lang['generique_site'] = "Site";
$lang['generique_help_novisits'] = "Tip: A-ti instalat %s tracker-ul (codul javascript) %s in paginile site-ului?";

//
// Authentication
//
$lang['login_password'] = "parola : "; // lowercase
$lang['login_login'] = "login : "; // lowercase
$lang['login_error'] = "Nu putem realiza accesul. Login sau parola incorecta.";
$lang['login_error_nopermission'] = "User-ul specificat nu are destule permisiuni. Contactati Super User-ul pentru a va seta site-ul cu permisiuni de vizualizare/administrare in phpMyVisites.";
$lang['login_protected'] = "Doriti sa intrati in area protejata %sphpMyVisites%s.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Contacte";
$lang['contacts_langue'] = "Traduceri";
$lang['contacts_merci'] = "Multumiri";
$lang['contacts_auteur'] = "Autorul, cercetatorul, si creatorul proiectului phpMyVisites este <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "Pentru <strong>intrebari tehnice, probleme sau sugestii</strong> va rugam folositi forumurile site-ului oficial %s. Pentru alte cerinte, va rugam contactati autorul prin formularul de pe site-ul oficial."; // adresse du site
$lang['contacts_trad1'] = "Vrei sa traduci phpMyVisites in limba ta? Nu ezita pentru ca <strong>phpMyVisites are nevoie de TINE!</strong>";
$lang['contacts_trad2'] = "Traducerea phpMyVisites va lua ceva timp (cateva ore) si implica o buna cunoastere a limbajului in cauza; dar tine minte ca <strong>din munca ta vor beneficia multi utilizatori</strong>.  Daca esti interesat in traducere phpMyVisites poti sa gasesti toate informatiile necesare in %s documentatia oficial a phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "Nu ezita sa consulti %s documentatia oficiala a phpMyVisites %s care iti va oferi informatia necesara instalarii, configurarii, si functionalitatii phpMyVisites. Documentatia phpMyVisites este prezenta pentru toate versiunile."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Multumiri <strong>%s</strong>, co-dezvoltatorilor phpMyVisites, pentru inalta calitate a codului pentru acest proiect.";
$lang['contacts_merci3'] = "Nu ezita sa consulti pagina prietenilor phpMyVisites de pe site-ul oficial.";
$lang['contacts_merci2'] = "Un mare MULTUMESC pentru toti cei care au contribuit prin cultura limbajului lor la traducerea phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Site %s on %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Mergeti la statistici detaliate";
$lang['mail_sender_name'] = "Statistici Web (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Informatiile Vizitatorilor";
$lang['visites_statistiques'] = "Statistici";
$lang['visites_periodesel'] = "Pentru perioada selectata";
$lang['visites_visites'] = "Accesari";
$lang['visites_uniques'] = "Accesari Unice";
$lang['visites_pagesvues'] = "Pagini Accesate";
$lang['visites_pagesvisiteurs'] = "Pagini pe vizitator";
$lang['visites_pagesvisites'] = "Pagini pe vizita"; 
$lang['visites_pagesvisitessign'] = "Pagini pe vizite significante"; 
$lang['visites_tempsmoyen'] = "Durata medie de vizita";
$lang['visites_tempsmoyenpv'] = "Timpul mediu petrecut pe pagina";
$lang['visites_tauxvisite'] = "rata de visitare a primii pagini";
$lang['visites_average_visits_per_day'] = "Durata medie a vizitelor pe zi"; 
$lang['visites_recapperiode'] = "Sumarul Perioadei";
$lang['visites_nbvisites'] = "Accesari";
$lang['visites_aucunevivisite'] = "Nici o visita"; // in the table, must be short
$lang['visites_recap'] = "Sumar";
$lang['visites_unepage'] = "prima pagina"; // (graph)
$lang['visites_pages'] = "%s pagini"; // 1-2 pages (graph)
$lang['visites_min'] = "%s min"; // 10-15 min (graph)
$lang['visites_sec'] = "%s s"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Grafic pentru sumarul statisticilor";
$lang['visites_grapghrecaplongterm'] = "Grafic pentru a arata sumarul statisticilor pe termen lung";
$lang['visites_graphtempsvisites'] = "Grafic pentru durata vizitei fiecarui vizitator";
$lang['visites_graphtempsvisitesimg'] = "Durata vizitei fiecarui vizitator";
$lang['visites_graphheureserveur'] = "Grafic pentru numarul de accesari pe ora pentru server";
$lang['visites_graphheureserveurimg'] = "Vizite dupa timpul serverului";
$lang['visites_graphheurevisiteur'] = "Grafic pentru numarul de accesari pe ora pentru vizitator";
$lang['visites_graphheurelocalimg'] = "Accesari dupa timpul local";
$lang['visites_longterm_statd'] = "Analize pe termen lung (Zilele perioadei)";
$lang['visites_longterm_statm'] = "Analize pe termen lung (Lunile perioadei)";

//
// Sites Summary
//
$lang['summary_title'] = "Sumarul Site-ului";
$lang['summary_stitle'] = "Sumar";

//
// Frequency Part
//
$lang['frequence_titre'] = "Vizitatori precedenti";
$lang['frequence_nouveauxconnusgraph'] = "Grafic pentru a arata vizitele Noi vs Precedente";
$lang['frequence_nouveauxconnus'] = "Vizite Noi vs Precedente";
$lang['frequence_titremenu'] = "Frecventa";
$lang['frequence_visitesconnues'] = "Vizite Precedente";
$lang['frequence_nouvellesvisites'] = "Vizite Noi";
$lang['frequence_visiteursconnus'] = "Vizitatori precendeti";
$lang['frequence_nouveauxvisiteurs'] = "Vizitatori noi";
$lang['frequence_returningrate'] = "Rata de re-vizitare";
$lang['pagesvues_vispervisgraph'] = "Grafic pentru a arata numarul de vizite pe vizitator";
$lang['frequence_vispervis'] = "Numarul de vizite pe vizitator";
$lang['frequence_vis'] = "vizite";
$lang['frequence_visit'] = "1 vizita"; // (graph)
$lang['frequence_visits'] = "%s vizite"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Informatie accesari Pagini";
$lang['pagesvues_joursel'] = "Ziua Selectata";
$lang['pagesvues_jmoins7'] = "Ziua - 7";
$lang['pagesvues_jmoins14'] = "Ziua - 14";
$lang['pagesvues_moyenne'] = "(media)";
$lang['pagesvues_pagesvues'] = "Accesari Pagini";
$lang['pagesvues_pagesvudiff'] = "Accesari unice pe Pagini";
$lang['pagesvues_recordpages'] = "Cel mai mare numar de pagini accesate pe vizitator";
$lang['pagesvues_tabdetails'] = "Pagini accesate (de la %s la %s)"; // (from 1 to 21)
$lang['pagesvues_graphsnbpages'] = "Grafic pentru a arata numarul de vizite pe pagini accesate";
$lang['pagesvues_graphnbvisitespageimg'] = "Numarul de vizite pe pagini accesate";
$lang['pagesvues_graphheureserveur'] = "Grafic pentru a arata numarul de vizite in timpul serverului";
$lang['pagesvues_graphheureserveurimg'] = "Vizite in timpul serverului";
$lang['pagesvues_graphheurevisiteur'] = "Grafic pentru a arata numarul de vizite in timpul local";
$lang['pagesvues_graphpageslocalimg'] = "Vizite in timpul local";
$lang['pagesvues_tempsparpage'] = "Timpul pe pagina";
$lang['pagesvues_total_time'] = "Timpul total";
$lang['pagesvues_avg_time'] = "Timpul mediu";
$lang['pagesvues_help_pagename'] = "Stiati ca puteti atribui un nume familiar paginilor?";
$lang['pagesvues_help_track_dls'] = "Stiati ca puteti urmari Download-urile, si redirectarea catre Url-uri externe?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Accesarile Vizitatorilor";
$lang['suivi_pageentree'] = "Pagini de intrare";
$lang['suivi_pagesortie'] = "Pagini de iesire";
$lang['suivi_tauxsortie'] = "Rata de iesire";
$lang['suivi_pageentreehits'] = "Hit-uri de intrare";
$lang['suivi_pagesortiehits'] = "Hit-uri de iesire";
$lang['suivi_singlepage'] = "Vizite pe pagini unice";

//
// Origin
//
$lang['provenance_titre'] = "Originea Vizitatorilor";
$lang['provenance_recappays'] = "Sumarul Tarilor";
$lang['provenance_pays'] = "Tari";
$lang['provenance_paysimg'] = "Harta Vizitatorilor pe tari";
$lang['provenance_fai'] = "Provideri de Internet";
$lang['provenance_nbpays'] = "Numarul tarilor diferite : %s";
$lang['provenance_provider'] = "Provideri"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "Continent";
$lang['provenance_mappemonde'] = "Harta Pamantului";
$lang['provenance_interetspays'] = "Countries Interests";

//
// Setup
//
$lang['configurations_titre'] = "Setarile Vizitatorilor";
$lang['configurations_os'] = "Sistemul de Operare";
$lang['configurations_osimg'] = "Grafic pentru a arata sistemul de operare al vizitatorilor";
$lang['configurations_navigateurs'] = "Browsere";
$lang['configurations_navigateursimg'] = "Grafic pentru a arata browsere-le vizitatorilor";
$lang['configurations_resolutions'] = "Rezolutia ecranului";
$lang['configurations_resolutionsimg'] = "Grafic pentru a arata rezolutiile ecranelor";
$lang['configurations_couleurs'] = "Formatul Culorilor";
$lang['configurations_couleursimg'] = "Grafic pentru a arata formatul culorilor";
$lang['configurations_rapport'] = "Normal/Ecran alungit";
$lang['configurations_large'] = "Ecran Alungit";
$lang['configurations_normal'] = "Normal";
$lang['configurations_double'] = "Dual Screen";
$lang['configurations_plugins'] = "Plugin-uri";
$lang['configurations_navigateursbytype'] = "Browsere (dupa tip)";
$lang['configurations_navigateursbytypeimg'] = "Grafic pentru a arata tipul browsere-lor";
$lang['configurations_os_interest'] = "Operating Systems Interest";
$lang['configurations_navigateurs_interest'] = "Browsers Interest";
$lang['configurations_resolutions_interest'] = "Screen Resolutions Interest";
$lang['configurations_couleurs_interest'] = "Color Depth Interest";
$lang['configurations_configurations'] = "Setari Principale";

//
// Referers
//
$lang['affluents_titre'] = "Referals";
$lang['affluents_recapimg'] = "Harta vizitatorilor dupa referals";
$lang['affluents_directimg'] = "Direct";
$lang['affluents_sitesimg'] = "Website-uri";
$lang['affluents_moteursimg'] = "Motoare de Cautare";
$lang['affluents_referrersimg'] = "Referinte";
$lang['affluents_moteurs'] = "Motoare de cautare";
$lang['affluents_nbparmoteur'] = "Vizite provenite din motoare de cautare : %s";
$lang['affluents_aucunmoteur'] = "Nici o vizita provenita dintr-un motor de cautare.";
$lang['affluents_motscles'] = "Cuvinte Cheie";
$lang['affluents_nbmotscles'] = "Cuvinte distincte : %s";
$lang['affluents_aucunmotscles'] = "Nici un cuvant cheie gasit.";
$lang['affluents_sitesinternet'] = "Website-uri";
$lang['affluents_nbautressites'] = "Visite provenite de la alte website-uri : %s";
$lang['affluents_nbautressitesdiff'] = "Numarul de site-uri : %s";
$lang['affluents_aucunautresite'] = "Nici o vizita provenita din alte site-uri.";
$lang['affluents_entreedirecte'] = "Accesari Directe";
$lang['affluents_nbentreedirecte'] = "Vizite pentru accesari directe : %s";
$lang['affluents_nbpartenaires'] = "Vizite provenite de la partenteri : %s";
$lang['affluents_aucunpartenaire'] = "Nici o vizita provenita din site-urile partenere.";
$lang['affluents_nbnewsletters'] = "Vizite provenite din newsletters : %s";
$lang['affluents_aucunnewsletter'] = "Nici o vizita provenita din newsletters.";
$lang['affluents_details'] = "Detalii"; // In the results of the referers array
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
$lang['purge_titre'] = "Sumarul vizitelor si referintelor";
$lang['purge_intro'] = "Acesta perioada a fost stearsa de administrator, numai statisticile esentiale sunt tinute.";
$lang['admin_purge'] = "Intretinere Baza de Date";
$lang['admin_purgeintro'] = "Aceasta sectiune va permite modificarea tabelelor utilizate de phpMyVisites. Puteti vizualiza spatiul pe disk folosit de tabele, le puteti optimiza, sau sterge inregistrarile vechi. Acesta  va permite sa limitati spatiul de stocare al tabelelor in folosinta.";
$lang['admin_optimisation'] = "Optimizarea [ %s ]..."; // Tables names
$lang['admin_postopt'] = "Marimea totala s-a micsorat cu %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Sterge urmatoarele perioade: %s";
$lang['admin_purge_fini'] = "Am terminat stergerea tabelelor...";
$lang['admin_bdd_nom'] = "Numele";
$lang['admin_bdd_enregistrements'] = "Inregistrari";
$lang['admin_bdd_taille'] = "Marimea Tabelei";
$lang['admin_bdd_opt'] = "Optimizeaza";
$lang['admin_bdd_purge'] = "Criteriul de Stergere";
$lang['admin_bdd_optall'] = "Optimizare Totala";
$lang['admin_purge_j'] = "Sterge inregistrarile mai vechi de %s zile";
$lang['admin_purge_s'] = "Sterge inregistrarile mai vechi de %s saptamani";
$lang['admin_purge_m'] = "Sterge inregistrarile mai vechi de %s luni";
$lang['admin_purge_y'] = "Remove records older than %s years";
$lang['admin_purge_logs'] = "Sterge toate accesarile inregistrate";
$lang['admin_purge_autres'] = "Stergere normala pentru tabela '%s'";
$lang['admin_purge_none'] = "Nici o modificare posibile";
$lang['admin_purge_cal'] = "Calculeaza si sterge (poate dura cateva minute)";
$lang['admin_alias_title'] = "Website aliases and URLs";
$lang['admin_partner_title'] = "Partenerii site-ului";
$lang['admin_newsletter_title'] = "Website newsletters";
$lang['admin_ip_exclude_title'] = "Lista de IP pentru a exclude din statistici";
$lang['admin_name'] = "Nume:";
$lang['admin_error_ip'] = "IP-ul trebuie sa fie in formatul corect: %s";
$lang['admin_site_name'] = "Numele site-ului";
$lang['admin_site_url'] = "Adresa site-ului";
$lang['admin_db_log'] = "Incercati sa va logati ca si SuperUser-ul phpMyVisites pentru a schimba setarile bazei de date.";
$lang['admin_error_critical'] = "Eroare, trebuie reparata pentru ca phpMyVisites sa functioneze.";
$lang['admin_warning'] = "Atentie, phpMyVisites ar putea merge corect insa fara cateva utilititati.";
$lang['admin_move_group'] = "Muta catre grupul:";
$lang['admin_move_select'] = "Selecteaza un grup";

//
// Setup
//
$lang['admin_intro'] = "Bun venit in zona de configurare a phpMyVisites . Puteti modifica toata informatia in legatura cu instalarea. Daca aveti vreo problema nu ezitati sa contactati %s documentatia oficiala a phpMyVisites %s."; // link to the doc
$lang['admin_configetperso'] = "Setari Generale";
$lang['admin_afficherjavascript'] = "Arata codul JavaScript";
$lang['admin_cookieadmin'] = "Nu adauga administratorul in statistici";
$lang['admin_ip_ranges'] = "Don't count IP/IP ranges in the statistics";
$lang['admin_sitesenregistres'] = "Site-uri inregistrate:";
$lang['admin_retour'] = "Inapoi";
$lang['admin_cookienavigateur'] = "Puteti exclude Administratorul din statistici. Acesta metoda este bazata pe cookie-uri si aceasta optiune este valabila doar in browser-ul curent. Puteti schimba aceata optiune oricand.";
$lang['admin_prendreencompteadmin'] = "Adauga administratorul printre statistici (sterge cookie)";
$lang['admin_nepasprendreencompteadmin'] = "Nu adauga administratorul pentri statistici (creaza cookie)";
$lang['admin_etatcookieoui'] = "Administratorul este calculat pintre statisticile acestui site (Aceasta este configuratia normala si sunteti considerat un vizitator normal)";
$lang['admin_etatcookienon'] = "Nu sunteti calculat in statisticile acestui site(Vizitele dumneavoastra nu vor fi calculate in aceste statistici)";
$lang['admin_deleteconfirm'] = "Please confirm that you want to delete %s?";
$lang['admin_sitedeletemessage'] = "Please <u>be very careful</u>: all data associated to that Site will be deleted <br>and there won't be any way to recover the data loss.";
$lang['admin_confirmyes'] = "Da, vreau sa-l sterg";
$lang['admin_confirmno'] = "Nu, nu vreau sa-l sterg";
$lang['admin_nonewsletter'] = "No newsletter found for this site!";
$lang['admin_nopartner'] = "Nici un partener a fost gasit pentru site-ul acesta!";
$lang['admin_get_question'] = "Inregistrez variabila GET? (variabila URL )";
$lang['admin_get_a1'] = "Ingeristrez toate variabilele GET";
$lang['admin_get_a2'] = "Nu inregistra nici o variabila URL";
$lang['admin_get_a3'] = "Inregistreza numai variabile specifice";
$lang['admin_get_a4'] = "Inregistreaza toate excluzand variabilele specificate";
$lang['admin_get_list'] = "Numele variabilelor (separate de <b>;</b>) <br/>Exemplu : %s";
$lang['admin_required'] = "%s este necesar.";
$lang['admin_title_required'] = "Necesara";
$lang['admin_write_dir'] = "Scrie directorii";
$lang['admin_chmod_howto'] = "Acesti directori trebuie sa fie accesbili pentru scriere de catre server. Inseamna ca trebuie sa aplicati   chmod 777 pe ei, cu ajutorul clientului FTP (right-click on the directory -> Permissions (or chmod))";
$lang['admin_optional'] = "Optional";
$lang['admin_memory_limit'] = "Limita de memorie";
$lang['admin_allowed'] = "permisa";
$lang['admin_webserver'] = "Web server";
$lang['admin_server_os'] = "Server OS";
$lang['admin_server_time'] = "Timpul Server-ului";
$lang['admin_legend'] = "Legenda:";
$lang['admin_error_url'] = "URL-ul trebuie sa fie in format corect : %s (fara slashes la sfarsit)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URLs aliases";
$lang['admin_logo_question'] = "Arata logo?";
$lang['admin_type_again'] = "(scrie din nou)";
$lang['admin_admin_mail'] = "Super Administrator email";
$lang['admin_admin'] = "Super Administrator";
$lang['admin_phpmv_path'] = "Calea intreaga catre aplicatia phpMyVisites";
$lang['admin_valid_email'] = "Email-ul trebuie sa fie valid";
$lang['admin_valid_pass'] = "Parola trebuie sa fie mai complexa (6 caractere minim, trebuie sa contine numere de asemenea)";
$lang['admin_match_pass'] = "Parolele nu se potrivesc";
$lang['admin_no_user_group'] = "Nici un utilizator in grup-ul curent pentru site-ul acesta";
$lang['admin_recorded_nl'] = "Recorded newsletters:";
$lang['admin_recorded_partners'] = "Recorded partners:";
$lang['admin_recorded_users'] = "Recorded users:";
$lang['admin_select_site_title'] = "Selectati un site";
$lang['admin_select_user_title'] = "Selectati un user";
$lang['admin_no_user_registered'] = "Nicu un utilizator selectat!";
$lang['admin_configuration'] = "Setari";
$lang['admin_general_conf'] = "Setari Generale";
$lang['admin_group_title'] = "Manager de group (permissions)";
$lang['admin_user_title'] = "User manager";
$lang['admin_user_add'] = "Adauga user";
$lang['admin_user_mod'] = "Modifica user";
$lang['admin_user_del'] = "Sterge user";
$lang['admin_server_info'] = "Informatii despre server";
$lang['admin_send_mail'] = "Trimite statisticile prin email";
$lang['admin_rss_feed'] = "Statisticile intr-un camp RSS";
$lang['admin_site_admin'] = "Administratorul Site-ului";
$lang['admin_site_add'] = "Adauga site";
$lang['admin_site_mod'] = "Modifica site";
$lang['admin_site_del'] = "Sterge site";
$lang['admin_nl_add'] = "Adauga newsletter";
$lang['admin_nl_mod'] = "Modifica newsletter";
$lang['admin_nl_del'] = "Sterge newsletter";
$lang['admin_partner_add'] = "Adauga partener";
$lang['admin_partner_mod'] = "Modifica numele si adresa URL a partenerului";
$lang['admin_partner_del'] = "Sterge partener";
$lang['admin_url_alias'] = "URL alias Manager";
$lang['admin_group_admin_n'] = "Vizualizeaza statistici + Permisiunile Administratorului";
$lang['admin_group_admin_d'] = "Utilizatorii pot vizualiza statisticile site-ului SI pot edita aceasta informatie (nume, add cookie, exclude IP ranges, manage URLs alias/partners/newsletters, etc.)";
$lang['admin_group_view_n'] = "Vizualizare statistici";
$lang['admin_group_view_d'] = "Utilizatorii pot numai vizualiza statisticile. Nici o permisiune de administrare.";
$lang['admin_group_noperm_n'] = "Nici o permisiune";
$lang['admin_group_noperm_d'] = "Utilizatorii din acest grup nu au permisiuni pentru a vizualiza statisticile sau editarea informatiei.";
$lang['admin_group_stitle'] = "Puteti edita grupurile utilizatorilor prin selectarea celor pe care dorit sa-i schimbati, si apoi selectati grupul in care doriti sa-i mutati.";
$lang['admin_url_generate_download_link_example'] = "Download file adress Or URL redirection to an external website";
$lang['admin_url_generate_title'] = "Fisiere descarcate / Redirectari Url : Generator Url ";
$lang['admin_url_generate_intro'] = "phpMyVisites poate numara descarcarile de fisiere, poate de asemenea urmari accesarile din pagini externe si URL-uri. Descarcarile si URL-urile referinta vor aparea in sectiunea 'Vizualizare Pagini' a phpMyVisites.</p><p class='texte'> To achieve this, you have to use a URL that points to the phpmyvisites file, then it will redirect to the URL you need. Because it is not trivial to generate such a URL, here is a tool that will make it simple (because phpMyVisites must be a simple but powerful experience for all of us). Simply fill in the form, click the 'Generate URL' button, and you will count your file downloads or external URL redirections very easily!";
$lang['admin_url_generate_site_selection'] = "Selectati un site pentru care vreti sa numarati numarul de accesari sau redirectari";
$lang['admin_url_generate_enter_url'] = "Introduceti adresa completa a fisierului sau link extern pe care doriti sa le urmariti in statistici:";
$lang['admin_url_generate_help_enter_url'] = "Exemplu: Trebuie sa fie in format'<b>http://www.yoursite.com/file/brilliant-software.zip</b>' sau pentru URL '<b>http://www.the-site-to-redirect.com</b>'";
$lang['admin_url_generate_friendly_name'] = "Numele familiar al fisierului sau URL-ului care va fi aratat in sectiunea 
'Vizualizare Pagini':"; 
$lang['admin_url_generate_help_friendly_name'] = "Exemplu: Puteti clasifica 'fisierele / redirectarile de Url ' in categori pentru o mai buna afisate a  sectiunii 'Vizualizare Pagini' din phpMyVisites. Puteti separa categoriile si fisierele sau redirectarile cu caracterul '<b>/</b>'. De exemplu, Numele poate fi '<b>my photos download/Summer in France</b>' sau '<b>Partners/PHP.net website</b>' : le va clasifica in directorul '<b>my photos downloads</b>' sau directorul '<b>Partners</b>' : le veti putea vizualiza in sectiunea 'Vizualizare Pagini' in interfata phpMyVisites.";
$lang['admin_url_generate_result_url'] = "Un exemplu URL catre care puteti face referinta: ";
$lang['admin_url_generate_html_result'] = "Daca va este de ajutor, un cod HTML pe care il puteti folosi:";
$lang['admin_url_generate_image_legend'] = "Exemple de pagini vizualizate cu redirectare de URL sau descarcari de fisiere:";
$lang['admin_site_link_javascript'] = "%s Acum trebuie sa instalati codul de urmarire in paginile site-ului (copy paste codul Javascript). Apasati pentru a vizualiza codul Javascript. %s";
$lang['admin_last_version'] = "Aveti ultima versiune a phpMyVisites ? (Recomandata!)";
$lang['admin_general_config_firstday'] = "Prima zi a calendarului?";
$lang['admin_default_language'] = "Limba de baza? <br/>Va fi deasemenea limba de baza pentru emailuri.";

//
// Pdf export
//
$lang['pdf_generate_link'] = "Genereaza un PDF insemnand toate statisticile pentru site-ul %s";
$lang['pdf_summary_generate_link'] = "Genereaza un PDF prezentand sumarul statisticilor";

//
// Installation Step
//
$lang['install_loginmysql'] = "Utilizatorul bazei de date";
$lang['install_mdpmysql'] = "Parola bazei de date";
$lang['install_serveurmysql'] = "Severul bazei de date";
$lang['install_basemysql'] = "Numele bazei de date";
$lang['install_prefixetable'] = "Prefixul tabelelor";
$lang['install_utilisateursavances'] = "Useri avansati(optional)";
$lang['install_oui'] = "Da";
$lang['install_non'] = "Nu";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Problema: ";
$lang['install_DirectoriesWriteError'] = "<b>Problema! </b><br/>Nu putem scrie in directorul(s) %s Va rugam verificati ca aveti drepturile necesare pentru a crea fisiere peserver (incercati CHMOD 755 asupra directorului cu ajutorul clientului FTP : right click on the directory -> Permissions (or CHMOD). <br/><br/>Daca CHMOD nu merge cu clientul de FTP, incercati sa stergeti (daca exista) directoarele, si re-creatile cu ajutorul clientului de FTP.";
$lang['install_loginadmin'] = "Administrator nume utilizator :";
$lang['install_mdpadmin'] = "Administrator parola:";
$lang['install_chemincomplet'] = "Locatia completa pentru aplicatia phpMyVisites (exemplu: http://www.mysite.com/rep1/rep3/phpmyvisites/). Locatia trebuie sa se termine cu un <strong>/</strong>.";
$lang['install_afficherlogo'] = "Arata logo-ul pe toate paginile? %s <br />Permitandu-ne sa aratam logo-ul pe toate paginile, veti ajuta la popularizarea phpMyVisites si sa-l ajutati sa se dezvolte rapid.  Este de asemenea un mod de a multumi autorului care a petrecut multe ore in dezvoltarea acestei aplicatii gratis, Open Source."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Arata Graficele Statisticilor.";
$lang['install_valider'] = "Submit"; //  during installation and for login
$lang['install_popup_logo'] = "Va rugam selectati un Logo";
$lang['install_logodispo'] = "Vizionati diferitele logo-uri disponibile";
$lang['install_welcome'] = "Bine ati venit!";
$lang['install_system_requirements'] = "Necesitatile sistemului";
$lang['install_database_setup'] = "Setup baza de date";
$lang['install_create_tables'] = "Creare tabele";
$lang['install_general_setup'] = "Configurari Generale";
$lang['install_create_config_file'] = "Creaza fisiere de Configurare";
$lang['install_first_website_setup'] = "Adaugati primul website";
$lang['install_display_javascript_code'] = "Arata codul Javascript";
$lang['install_finish'] = "Ati terminat!";
$lang['install_txt2'] = "La sfarsitul instalarii, o interogare va fi facuta catre site-ul oficial pentru a tine cont de numarul de utilizatori ai sistemului phpMyVisites. Multumim pentru intelegere.";
$lang['install_database_setup_txt'] = "Introduceti setarile bazei de date.";
$lang['install_general_config_text'] = "phpMyVisites va avea doar un singur administrator cu permisiuni depline de vizualizare/modificare asupra intregului continut. Va rugam selectati un user si parola pentru contul dumneavoastra de administrator. Deasemenea puteti adauga alti useri mai tarziu.";
$lang['install_config_file'] = " Detaliile administratorului au fost introduse cu succes.";
$lang['install_js_code_text'] = "<p>Pentru a numara vizitatorii, trebuie sa introduceti codul javascript in toate paginile. </p><p> Paginile nu trebuie sa fie neaparat in PHP, <strong>phpMyVisites va merge cu toate tipurile de pagini (HTML, ASP, Perl sau oricare alt limbaj).</strong> </p><p> Aici aveti codul pe care trebuie sa-l introduceti: (copy and paste in toate paginile) </p>";
$lang['install_intro'] = "Bine ati venit la instalarea phpMyVisites."; 
$lang['install_intro2'] = "Acest proces este impartit in %s pasi usori si va dura in jur de 10 minute.";
$lang['install_next_step'] = "Mergeti la pasul urmator";
$lang['install_status'] = "Statutul installarii";
$lang['install_done'] = "Instalare %s%% completa"; // Install 25% complete
$lang['install_site_success'] = "Website creat cu succes!";
$lang['install_site_info'] = "Va rugam introduceti toate informatia despre primul website.";
$lang['install_go_phpmv'] = "Mergeti la phpMyVisites!";
$lang['install_congratulation'] = "Felicitari! Instalarea phpMyVisites este completa.";
$lang['install_end_text'] = "Asigurati-va ca aveti introdus codul Javascript in paginile site-ului, si asteptati pentru primii vizitatori!";
$lang['install_db_ok'] = "Conexiunea catre baza de date OK!";
$lang['install_table_exist'] = "Tabelele phpMyVisites exista deja in baza de date.";
$lang['install_table_choice'] = "Selectati daca doriti sa reutilizati tabele din baza de date sau selectati o instalare noua stergand toate tabelele.";
$lang['install_table_erase'] = "Stergeti toate tabelele (atentie!)";
$lang['install_table_reuse'] = "Reutilizati tabelele existente";
$lang['install_table_success'] = "Tabelele create cu succes!";
$lang['install_send_mail'] = "Doriti primirea unui email zilnic cu sumarul statisticilor site-ului?";

//
// Update Step
//
$lang['update_title'] = "Updatati phpMyVisites";
$lang['update_subtitle'] = "Am detectat ca updatati phpMyVisites.";
$lang['update_versions'] = "Versiunea precedenta a fost %s si am updatat-o la %s.";
$lang['update_db_updated'] = "Baza de date a fost updatata cu succes!";
$lang['update_continue'] = "Continuati catre phpMyVisites";
$lang['update_jschange'] = "Alerta! <br /> Codul javascript al phpMyVisites a fost modificat. Trebuie sa va copiati noul cod curent si sa-l  copiati pe toate site-urile in folosinta. <br /> Modificarile facute in codul Javascript sunt rare, ne cerem scuze pentru deranjul creat de aceasta modificare vitala.";

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
$lang['tdate3'] = "Saptamana %monthlong% %daynumeric% catre %monthlong2% %daynumeric2% %yearlong%";

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
$lang['tdate9'] = " Saptamana %daynumeric% %monthshort%";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%monthshort% %yearshort%";

// Year 2004
$lang['tdate11'] = "An %yearlong%";

// 2004
$lang['tdate12'] = "%yearlong%";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "Ianuarie";
$lang['moistab']['02'] = "Februarie";
$lang['moistab']['03'] = "Martie";
$lang['moistab']['04'] = "Aprilie";
$lang['moistab']['05'] = "Mai";
$lang['moistab']['06'] = "Iunie";
$lang['moistab']['07'] = "Iulie";
$lang['moistab']['08'] = "August";
$lang['moistab']['09'] = "Septembrie";
$lang['moistab']['10'] = "Octombrie";
$lang['moistab']['11'] = "Noiembrie";
$lang['moistab']['12'] = "Decembrie";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Ian";
$lang['moistab_graph']['02'] = "Feb";
$lang['moistab_graph']['03'] = "Mar";
$lang['moistab_graph']['04'] = "Apr";
$lang['moistab_graph']['05'] = "Mai";
$lang['moistab_graph']['06'] = "Iun";
$lang['moistab_graph']['07'] = "Iul";
$lang['moistab_graph']['08'] = "Aug";
$lang['moistab_graph']['09'] = "Sep";
$lang['moistab_graph']['10'] = "Oct";
$lang['moistab_graph']['11'] = "Nov";
$lang['moistab_graph']['12'] = "Dec";

// Day of the week
$lang['jsemaine']['Mon'] = "Luni";
$lang['jsemaine']['Tue'] = "Marti";
$lang['jsemaine']['Wed'] = "Miercuri";
$lang['jsemaine']['Thu'] = "Joi";
$lang['jsemaine']['Fri'] = "Vineri";
$lang['jsemaine']['Sat'] = "Sambata";
$lang['jsemaine']['Sun'] = "Duminica";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Lun";
$lang['jsemaine_graph']['Tue'] = "Mar";
$lang['jsemaine_graph']['Wed'] = "Mie";
$lang['jsemaine_graph']['Thu'] = "Joi";
$lang['jsemaine_graph']['Fri'] = "Vin";
$lang['jsemaine_graph']['Sat'] = "Sam";
$lang['jsemaine_graph']['Sun'] = "Dum";

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
$lang['afr'] = "Africa";
$lang['asi'] = "Asia";
$lang['ams'] = "America Centrala si de Sud";
$lang['amn'] = "America de Nord";
$lang['oce'] = "Oceania";

// Oceans
$lang['oc_pac'] = "Oceanul Pacific";
$lang['oc_atl'] = "Oceanul Atlantic";
$lang['oc_ind'] = "Oceanul  Indian";

// Countries
$lang['domaines'] = array(
    "xx" => "Necunoscut",
    "ac" => "Ascension Islands",
    "ad" => "Andorra",
    "ae" => "Emiratele Arabe Unite",
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
    "be" => "Belgia",
    "bf" => "Burkina Faso",
    "bg" => "Bulgaria",
    "bh" => "Bahrain",
    "bi" => "Burundi",
    "bj" => "Benin",
    "bm" => "Bermuda",
    "bn" => "Bruneo",
    "bo" => "Bolivia",
    "br" => "Brazilia",
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
    "co" => "Columbia",
    "cr" => "Costa Rica",
	"cs" => "Serbia Montenegro",
    "cu" => "Cuba",
    "cv" => "Cape Verde",
    "cx" => "Christmas Island",
    "cy" => "Cipru",
    "cz" => "Republica Ceha",
    "de" => "Germania",
    "dj" => "Djibouti",
    "dk" => "Danemarka",
    "dm" => "Dominica",
    "do" => "Republica Dominicana",
    "dz" => "Algeria",
    "ec" => "Ecuador",
    "ee" => "Estonia",
    "eg" => "Egipt",
    "eh" => "Western Sahara",
    "er" => "Eritrea",
    "es" => "Spania",
    "et" => "Ethiopia",
    "fi" => "Finlanda",
    "fj" => "Fiji",
    "fk" => "Falkland Islands (Malvinas)",
    "fm" => "Micronesia, Federated States of",
    "fo" => "Faroe Islands",
    "fr" => "Franta",
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
    "gr" => "Grecia",
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
    "hu" => "Ungaria",
    "id" => "Indonesia",
    "ie" => "Irlanda",
    "il" => "Israel",
    "im" => "Man Island",
    "in" => "India",
    "io" => "British Indian Ocean Territory",
    "iq" => "Iraq",
    "ir" => "Iran, Islamic Republic of",
    "is" => "Islanda",
    "it" => "Italia",
    "je" => "Jersey",
    "jm" => "Jamaica",
    "jo" => "Iordania",
    "jp" => "Japonia",
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
    "md" => "Republica Moldova",
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
    "my" => "Malaezia",
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
    "ph" => "Philippine",
    "pk" => "Pakistan",
    "pl" => "Polonia",
    "pm" => "Saint Pierre and Miquelon",
    "pn" => "Pitcairn",
    "pr" => "Puerto Rico",
	"ps" => "Palestinian Territory",
    "pt" => "Portugalia",
    "pw" => "Palau",
    "py" => "Paraguay",
    "qa" => "Qatar",
    "re" => "Reunion Island",
    "ro" => "Romania",
    "ru" => "Federatia Rusa",
    "rs" => "Rusia",
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
    "su" => "Old U.R.S.S.",
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
    "tw" => "Taiwan, Province of China",
    "tz" => "Tanzania, United Republic of",
    "ua" => "Ukraine",
    "ug" => "Uganda",
    "uk" => "United Kingdom",
    "gb" => "Marea Britanie",
    "um" => "United States Minor Outlying Islands",
    "us" => "Statele Unite",
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
    "za" => "Africa de Sud",
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