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
$lang['auteur_nom'] = "Migel Mehlmauer"; // Translator's name
$lang['auteur_email'] = "sstonchy ((att)) gmail ((doot)) com"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "si"; // iso language code
$lang['lang_libelle_en'] = "Slovenian"; // english language name
$lang['lang_libelle_fr'] = "Slovène"; // french language name
$lang['unites_bytes'] = array('Bajtov', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = '.'; // three thousand spells 3,000 in english
$lang['separateur_decimaux'] = ','; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | odprtokodna aplikacija za statistiko ter analizo prometa na spletni strani"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, skripta, aplikacija, software, statistika, napotitve, statistika, zastojn, odprtokodni, gpl, obiskov, obiskovalcev, mysql, obiskane strani, strani, ogledov, število obiskov, grafi, Brskalniki, OS, operacijski sistem, resolucije, dan, teden, mesec, rekordi, država, gostitelj, internetni ponudniki, iskalnik, ključne besede, napotitve, grafi, vhodne strani, izhodne strani, kolači"; // Header keywords
$lang['head_description'] = "phpMyVisites | Odprtokodna aplikacija za statistiko spletnih strani razvita v PHP/MySQL ter distribuirana pod Gnu GPL."; // Header description
$lang['logo_description'] = "phpMyVisites : Odprtokodna aplikacija za statistiko spletne strani razvita v PHP/MySQL ter distribuirana pod GPL."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Obisk";
$lang['menu_pagesvues'] = "Ogledi strani";
$lang['menu_suivi'] = "Sledenje";
$lang['menu_provenance'] = "Izvor";
$lang['menu_configurations'] = "Nastavitve";
$lang['menu_affluents'] = "Napotitve";
$lang['menu_listesites'] = "Seznam strani";
$lang['menu_bilansites'] = "Skupno";
$lang['menu_jour'] = "Dan";
$lang['menu_semaine'] = "Teden";
$lang['menu_mois'] = "Mesec";
$lang['menu_annee'] = "Leto";
$lang['menu_periode'] = "Obdobje: %s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "Uradna stran";
$lang['liens_admin'] = "Nastavitve";
$lang['liens_contacts'] = "Kontakt";

//
// Divers
//
$lang['generique_nombre'] = "Število";
$lang['generique_tauxsortie'] = "Izhodno razmerje";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Stran ustvarjena v %s sekundah"; // Time in seconds
$lang['generique_divers'] = "Drugi"; // (for the graphs)
$lang['generique_inconnu'] = "Neznano"; // (for the graphs)
$lang['generique_vous'] = "... Ti ?";
$lang['generique_traducteur'] = "Prevajalec";
$lang['generique_langue'] = "Jezik";
$lang['generique_autrelangure'] = "Drugi prevodi?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "Ni obiskovalcev."; 
$lang['generique_aucune_visite_bdd'] = "<b>Pozor ! </b> Za vašo stran nimate zapisanih uporabnikov v vaši podatkovni bazi. Prepričajte se ali ste dodali javascript kodo na željene strani, ter da ste pravilni phpMyVisites URL <u>V</u> javascript kodo.  Za pomoč preglejte dokumentacijo.";
$lang['generique_aucune_site_bdd'] = "V podatkovni bazi ni nobene strani. Poskusite se v phpMyVisites prijaviti kot Super User ter dodajte novo stran.";
$lang['generique_retourhaut'] = "Vrh";
$lang['generique_tempsvisite'] = "%smin %ss"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%sh"; // 4h means 4 hours
$lang['generique_siteno'] = "Stran %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Newsletter %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "Partner %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "General";
$lang['generique_user'] = "Uporabnik %s"; // User "Admin"
$lang['generique_previous'] = "Nazaj";
$lang['generique_next'] = "Naprej";
$lang['generique_lowpop'] = "Iz statistike izključi nižjo populacijo";
$lang['generique_allpop'] = "V statistiko vključi vso populacijo";
$lang['generique_to'] = "do"; // 4 'to' 8
$lang['generique_total_on'] = "na"; // 4 to 8 'on' 10
$lang['generique_total'] = "Skupno";
$lang['generique_information'] = "Informacije";
$lang['generique_done'] = "Done!";
$lang['generique_other'] = "Drugo";
$lang['generique_description'] = "Opis:";
$lang['generique_name'] = "Ime:";
$lang['generique_variables'] = "Spremenljivke";
$lang['generique_logout'] = "Odjava";
$lang['generique_login'] = "Prijava";
$lang['generique_hits'] = "Zadetki";
$lang['generique_errors'] = "Napake";
$lang['generique_site'] = "Stran";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "geslo : "; // lowercase
$lang['login_login'] = "uporabniško ime : "; // lowercase
$lang['login_error'] = "Neuspešna prijava. Napačno uporabniško ime ali geslo.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "Vstopiti želite v %sphpMyVisites%s, ki je zaščitena.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Kontakt";
$lang['contacts_langue'] = "Prevodi";
$lang['contacts_merci'] = "Zahvala";
$lang['contacts_auteur'] = "Avtor, dokumentator in stvarnik projekta phpMyVisites je <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "Za <strong>tehnična vprašanja, prijavo hroščev, predloge</strong> uporabite uradne forume %s. Za druge prošnje, prosimo kontaktirajte avtorja s pomočno obrazca na uradni strani."; // adresse du site
$lang['contacts_trad1'] = "Bi radi prevedli phpMyVisites v vaš jezik. Ne odlašajte, zato ker vas <strong>phpMyVisites potrebuje!</strong>";
$lang['contacts_trad2'] = "Prevajanje phpMyVisites vam vzame kar nekaj časa (nekjaj ur) in zahteva dobro znanje jezika iz katerega prevajate ter jezika v katerega prevajate; vendar  zapomnite si <strong>vsako delo, ki ga opravite bo v dobro veliko ljudem</strong>.  če ste zainteresirani za prevod phpMyVisites lahko najdete vse potrebne podatke v %s uradni dokumentaciji phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "Preglejte %s uradno dokumentacijo phpMyVisites %s katera vam bo dala veliko informacij o namestitvi, nastavljanju in uporabi phpMyVisites. Na voljo je v vaši verziji phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Hvala <strong>%s</strong>, sorazvijalcem phpMyVisites, za njihovo visoko kvalitetno delo na projektu.";
$lang['contacts_merci3'] = "Ne odlašajte ogleda na potrdilno stran uradne strani kjer lahko vidite celotni spisek phpMyVisites prijateljev.";
$lang['contacts_merci2'] = "Velika zahvala tistim, ki so prevedli phpMyVisites v svoj jezik:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Stran %s na %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Pojdi na podrobno statistiko";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Informacije o obisku"; 
$lang['visites_statistiques'] = "Statistika";
$lang['visites_periodesel'] = "Za izbrano obdobje";
$lang['visites_visites'] = "Obiskovalcev";
$lang['visites_uniques'] = "Edinstvenih obiskovalcev";
$lang['visites_pagesvues'] = "Obiskane strani";
$lang['visites_pagesvisiteurs'] = "Strani na obiskovalca"; 
$lang['visites_pagesvisites'] = "Strani na obisk"; 
$lang['visites_pagesvisitessign'] = "Strani na značilen obisk"; 
$lang['visites_tempsmoyen'] = "Povprečno trajanje obiska";
$lang['visites_tempsmoyenpv'] = "Povprečen čas na eno stran";
$lang['visites_tauxvisite'] = "Razmerje ogleda ene strani"; 
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Povzetek";
$lang['visites_nbvisites'] = "Obisk";
$lang['visites_aucunevivisite'] = "Ni obiskov"; // in the table, must be short
$lang['visites_recap'] = "Povzetek";
$lang['visites_unepage'] = "1 stran"; // (graph)
$lang['visites_pages'] = "%s strani"; // 1-2 pages (graph)
$lang['visites_min'] = "%s min"; // 10-15 min (graph)
$lang['visites_sec'] = "%s s"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Tabela povzetka statistike";
$lang['visites_grapghrecaplongterm'] = "Graf za prikaz povzetka dolgoročne statistike";
$lang['visites_graphtempsvisites'] = "Graf trajanja ogledov";
$lang['visites_graphtempsvisitesimg'] = "Trajanje ogledov";
$lang['visites_graphheureserveur'] = "Graf števila obiskov po strežniškem času"; 
$lang['visites_graphheureserveurimg'] = "Število obiskov po strežniškem času"; 
$lang['visites_graphheurevisiteur'] = "Graf števila obiskov po lokalnem času";
$lang['visites_graphheurelocalimg'] = "Število obiskov po lokalnem času"; 
$lang['visites_longterm_statd'] = "Dolgoročna analiza (Dnevi)";
$lang['visites_longterm_statm'] = "Dolgoročna analiza (Meseci)";

//
// Sites Summary
//
$lang['summary_title'] = "Povzetek strani";
$lang['summary_stitle'] = "Povzetek";

//
// Frequency Part
//
$lang['frequence_titre'] = "Ponavljajoči obiskovalci";
$lang['frequence_nouveauxconnusgraph'] = "Graf novih ter ponavljajočih se obiskovalcev";
$lang['frequence_nouveauxconnus'] = "Novi ter ponavljajoči obiski";
$lang['frequence_titremenu'] = "Pogostost";
$lang['frequence_visitesconnues'] = "Ponavljajoči obiski";
$lang['frequence_nouvellesvisites'] = "Novi obiski";
$lang['frequence_visiteursconnus'] = "Ponavljajoči obiskovalci";
$lang['frequence_nouveauxvisiteurs'] = "Novi obiskovalci";
$lang['frequence_returningrate'] = "Razmerje";
$lang['pagesvues_vispervisgraph'] = "Graf števila obiskov na obiskovalca";
$lang['frequence_vispervis'] = "Število obiskov na obiskovalca";
$lang['frequence_vis'] = "obisk";
$lang['frequence_visit'] = "1 obisk"; // (graph)
$lang['frequence_visits'] = "%s obiskov"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Informacije o ogledu";
$lang['pagesvues_joursel'] = "Izbrani dan";
$lang['pagesvues_jmoins7'] = "Dan - 7";
$lang['pagesvues_jmoins14'] = "Dan - 14";
$lang['pagesvues_moyenne'] = "(povprečje)";
$lang['pagesvues_pagesvues'] = "Ogledanih strani";
$lang['pagesvues_pagesvudiff'] = "Edinstvenih ogledov strani";
$lang['pagesvues_recordpages'] = "Število strani na obiskovalca";
$lang['pagesvues_tabdetails'] = "Ogledane strani strani (od %s do %s)"; // (from 1 to 21)
$lang['pagesvues_graphsnbpages'] = "Graf obiskov glede na število ogledanih strani";
$lang['pagesvues_graphnbvisitespageimg'] = "Obiski glede na število ogledanih strani";
$lang['pagesvues_graphheureserveur'] = "Graf števila obiskov po strežniškem času";
$lang['pagesvues_graphheureserveurimg'] = "Število obiskov po strežniškem času";
$lang['pagesvues_graphheurevisiteur'] = "Graf števila obiskov po lokalnem času";
$lang['pagesvues_graphpageslocalimg'] = "Število obiskov po lokalnem času";
$lang['pagesvues_tempsparpage'] = "Čas na stran";
$lang['pagesvues_total_time'] = "Celoten čas";
$lang['pagesvues_avg_time'] = "Povprečen čas";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Sledenje obiskovalcev";
$lang['suivi_pageentree'] = "Vhodne strani";
$lang['suivi_pagesortie'] = "Izhodne strani";
$lang['suivi_tauxsortie'] = "Izhodno razmerje";
$lang['suivi_pageentreehits'] = "Prihodi";
$lang['suivi_pagesortiehits'] = "Odhodi";
$lang['suivi_singlepage'] = "Obiski ene strani";

//
// Origin
//
$lang['provenance_titre'] = "Izvor obiskovalcev";
$lang['provenance_recappays'] = "Države";
$lang['provenance_pays'] = "Države";
$lang['provenance_paysimg'] = "Grafikon držav";
$lang['provenance_fai'] = "Internetni ponudniki";
$lang['provenance_nbpays'] = "Število različnih držav : %s";
$lang['provenance_provider'] = "Internetni ponudniki"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "Kontinent";
$lang['provenance_mappemonde'] = "Karta sveta";
$lang['provenance_interetspays'] = "Države(podrobno)";

//
// Setup
//
$lang['configurations_titre'] = "Ogledovalčeve nastavitve";
$lang['configurations_os'] = "Operacijski sistemi";
$lang['configurations_osimg'] = "Graf operacijskih sistemov";
$lang['configurations_navigateurs'] = "Brskalniki";
$lang['configurations_navigateursimg'] = "Graf brskalnikov";
$lang['configurations_resolutions'] = "Ločljivost zaslona";
$lang['configurations_resolutionsimg'] = "Graf ločljivosti zaslonov";
$lang['configurations_couleurs'] = "Globina barv";
$lang['configurations_couleursimg'] = "Graf globine barv";
$lang['configurations_rapport'] = "Normalno/širokozaslonsko";
$lang['configurations_large'] = "Sirokozaslonsko";
$lang['configurations_normal'] = "Normalno";
$lang['configurations_double'] = "Dual Screen";
$lang['configurations_plugins'] = "Vključki"; // TODO : translate
$lang['configurations_navigateursbytype'] = "Brskalniki (po tipu)"; // TODO : translate
$lang['configurations_navigateursbytypeimg'] = "Graf tipov brskalnikov"; // TODO : translate
$lang['configurations_os_interest'] = "Operacijski sistemi";
$lang['configurations_navigateurs_interest'] = "Brskalniki";
$lang['configurations_resolutions_interest'] = "Ločljivost zaslona";
$lang['configurations_couleurs_interest'] = "Globina barve";
$lang['configurations_configurations'] = "Splošne nastavitve";

//
// Referers
//
$lang['affluents_titre'] = "Napotitve";
$lang['affluents_recapimg'] = "Grafikon napotitev";
$lang['affluents_directimg'] = "Neposredno";
$lang['affluents_sitesimg'] = "Spletne strani";
$lang['affluents_moteursimg'] = "Iskalniki";
$lang['affluents_referrersimg'] = "Napotitve";
$lang['affluents_moteurs'] = "Iskalniki";
$lang['affluents_nbparmoteur'] = "Napotitve z iskalnikov : %s";
$lang['affluents_aucunmoteur'] = "Ni napotitev z iskalnikov.";
$lang['affluents_motscles'] = "Ključne besede";
$lang['affluents_nbmotscles'] = "Ključne besede : %s";
$lang['affluents_aucunmotscles'] = "Ni ključnih besed.";
$lang['affluents_sitesinternet'] = "Spletne strani";
$lang['affluents_nbautressites'] = "Napotitve z drugih spletnih strani : %s";
$lang['affluents_nbautressitesdiff'] = "Število različnih spletnih strani : %s";
$lang['affluents_aucunautresite'] = "Ni napotitev z drugih strani.";
$lang['affluents_entreedirecte'] = "Neposredni obiski";
$lang['affluents_nbentreedirecte'] = "Neposrednih obiskov : %s";
$lang['affluents_nbpartenaires'] = "Ni obiskov ponujenih s strani partnerjev : %s";
$lang['affluents_aucunpartenaire'] = "Noben obisk ni bil ponujen s strani partnerjev.";
$lang['affluents_nbnewsletters'] = "Obiski ponujeni s strani okrožnic : %s";
$lang['affluents_aucunnewsletter'] = "Noben obisk ni bil ponujen z okrožnico(Newsletter).";
$lang['affluents_details'] = "Podrobnosti"; // In the results of the referers array
$lang['affluents_interetsmoteurs'] = "Iskalniki(podrobno)";
$lang['affluents_interetsmotscles'] = "Ključne besede(podrobno)";
$lang['affluents_interetssitesinternet'] = "Internetne strani(podrobno)";
$lang['affluents_partenairesimg'] = "Partnerji";
$lang['affluents_partenaires'] = "Partnerji";
$lang['affluents_interetspartenaires'] = "Partnerji(podrobno)";
$lang['affluents_newslettersimg'] = "Okrožnice";
$lang['affluents_newsletters'] = "Okrožnice";
$lang['affluents_interetsnewsletters'] = "Okrožnice(podrobno)";
$lang['affluents_type'] = "Tip napotitve";
$lang['affluents_interetstype'] = "Tip napotitve(podrobno)";

//
// Summary
//
$lang['purge_titre'] = "Povzetek obiskov in napotitev";
$lang['purge_intro'] = "Obdobje je bilo odstranjeno v administraciji, obdržana je le osnovns statistika.";
$lang['admin_purge'] = "Vzdrževanje podatkovne baze";
$lang['admin_purgeintro'] = "Tukaj lahko urejate podatkovne tabele, ki jih uporablja phpMyVisites. Lahko vidite koliko prostora vam vzame posamezna tabela, tabele lahko optimizirate, ali odstranite stare vnose. To vam omogoča nadzor velikosti tabel v vaši podatkovni bazi.";
$lang['admin_optimisation'] = "Optimization of [ %s ]..."; // Tables names
$lang['admin_postopt'] = "Skupno se je velikost zmanjšala za: %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Odstranite sledeča obdobja: %s";
$lang['admin_purge_fini'] = "Končano brisanje tabel...";
$lang['admin_bdd_nom'] = "Ime";
$lang['admin_bdd_enregistrements'] = "Zapisov";
$lang['admin_bdd_taille'] = "Velikost tabele";
$lang['admin_bdd_opt'] = "Optimiziraj";
$lang['admin_bdd_purge'] = "Očisti";
$lang['admin_bdd_optall'] = "Optimiziraj vse";
$lang['admin_purge_j'] = "Odstrani zapise starejše od %s dni";
$lang['admin_purge_s'] = "Odstrani zapise starejše od %s tednov";
$lang['admin_purge_m'] = "Odstrani zapise starejše od %s mesecev";
$lang['admin_purge_y'] = "Odstrani vnose starejše od %s let";
$lang['admin_purge_logs'] = "Odstrani vse beležke";
$lang['admin_purge_autres'] = "Očisti skupne vnose s tabelo '%s'";
$lang['admin_purge_none'] = "Nobenega dejanja";
$lang['admin_purge_cal'] = "Izračunaj in očisti (lahko traja nekaj minut)";
$lang['admin_alias_title'] = "Vzdevki strani ter URLjev";
$lang['admin_partner_title'] = "Partnerji";
$lang['admin_newsletter_title'] = "Okrožnice";
$lang['admin_ip_exclude_title'] = "IP rangi, ki naj bodo izključeni iz statistike";
$lang['admin_name'] = "Ime:";
$lang['admin_error_ip'] = "IP more biti v pravilnem formatu: %s";
$lang['admin_site_name'] = "Ime strani";
$lang['admin_site_url'] = "Glavni URL";
$lang['admin_db_log'] = "Poskusi se prijaviti kot SUper User za nastavitve phpMyVisites podatkovne baze.";
$lang['admin_error_critical'] = "Napaka, potrebna so popravila za delovenje phpMyVisites.";
$lang['admin_warning'] = "Pozor, phpMyVisites bo deloval vredu, vendar mogoče nekatere dodatne možnosti ne bodo.";
$lang['admin_move_group'] = "Premakni v skupino:";
$lang['admin_move_select'] = "Izberi skupino";

//
// Setup
//
$lang['admin_intro'] = "Dobrodošli na phpMyVisites nastavitveno stran. Tukaj lahko urejate vse informacije, ki se nanašajo na vašo namestitev. če imate probleme, ne odlašajte ogleda v %suradno dokumentacijo phpmyvisites%s."; // link to the doc
$lang['admin_configetperso'] = "Nastavitve";
$lang['admin_afficherjavascript'] = "Prikaži JavaScript statistično kodo";
$lang['admin_cookieadmin'] = "Administratorja ne štej v statistiko";
$lang['admin_ip_ranges'] = "Ne štej IP/IP rangov v statistiko";
$lang['admin_sitesenregistres'] = "Zapisane strani:";
$lang['admin_retour'] = "Nazaj";
$lang['admin_cookienavigateur'] = "Administratorja lahko izključite iz statistike. Ta metoda bazira na piškotkih in bo delovala le s sedanjim brskalnikom. To lahko spremenite kadarkoli.";
$lang['admin_prendreencompteadmin'] = "Prištevaj administratorjeve obiske v statistiko (zbriši piškotek)";
$lang['admin_nepasprendreencompteadmin'] = "Ne prištevaj administratorjevih obiskov v statistiko (ustvari piškotek)";
$lang['admin_etatcookieoui'] = "Administrator je prištet v statistiko te strani (To je privzeta nastavitev, upoštevani ste kot navadni obiskovalec)";
$lang['admin_etatcookienon'] = "Niste prišteti v statistiko (Vaš obisk ne bo prištet v statistiko)";
$lang['admin_deleteconfirm'] = "Prosimo potrdite, da hočete izbrisati %s?";
$lang['admin_sitedeletemessage'] = "Prosim bodite <u>previdni</u>: vsi podatki v zvezi s to stranjo bodo izbrisani <br>po tem ne boste imeli nobene možnosti za obnovitev podatkov.";
$lang['admin_confirmyes'] = "Da, hočem izbrisati";
$lang['admin_confirmno'] = "Ne, nočem izbrisati";
$lang['admin_nonewsletter'] = "Nobena okrožnica ni najdena!";
$lang['admin_nopartner'] = "Ni partnerjev!";
$lang['admin_get_question'] = "Zapiši GET spremelnjivko? (URL spremenljivke)";
$lang['admin_get_a1'] = "Zapiši VSE URL spremenljivke";
$lang['admin_get_a2'] = "NE zapiši nobene URL spremenljivke";
$lang['admin_get_a3'] = "Zapiši SAMO podane spremenljivke";
$lang['admin_get_a4'] = "Zapiši vse RAZEN podanih spremenljivk";
$lang['admin_get_list'] = "Spremenljivke (<b>;</b> za ločevanje) <br/>Primer : %s";
$lang['admin_required'] = "%s je obvezno.";
$lang['admin_title_required'] = "Obvezno";
$lang['admin_write_dir'] = "Zapisljivi direktoriji";
$lang['admin_chmod_howto'] = "Ti direktoriji morajo biti pisljivi s strani strežnika. To pomeni, da jim morate spremeniti dovoljenja z ukazom chmod 777, z vašim FTP klientom(desni klik na direktorij -> Privilegij(Dovoljenja, chmod))";
$lang['admin_optional'] = "Izbirno";
$lang['admin_memory_limit'] = "Omejitev spomina";
$lang['admin_allowed'] = "dovoljeno";
$lang['admin_webserver'] = "Spletni strežnik";
$lang['admin_server_os'] = "Stržnikov OS";
$lang['admin_server_time'] = "Strežnišči čas";
$lang['admin_legend'] = "Legenda:";
$lang['admin_error_url'] = "URL mora biti v pravilnem formatu : %s (brez poševnice na koncu)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URL vzdevki";
$lang['admin_logo_question'] = "Prikaži logotip?";
$lang['admin_type_again'] = "(vpiši ponovno)";
$lang['admin_admin_mail'] = "Super Administrator email";
$lang['admin_admin'] = "Super Administrator";
$lang['admin_phpmv_path'] = "Celotna pot do aplikacije phpMyVisites";
$lang['admin_valid_email'] = "Email mora biti veljaven";
$lang['admin_valid_pass'] = "Geslo mora biti bolj kompleksno (6 znakov minimalno, mora vsebovati števila)";
$lang['admin_match_pass'] = "Gesla se ne ujemata";
$lang['admin_no_user_group'] = "Ni uporabnikov v tej skupini za to stran";
$lang['admin_recorded_nl'] = "Zapisane okrožnice:";
$lang['admin_recorded_partners'] = "Zapisani parterji:";
$lang['admin_recorded_users'] = "Zapisani uporabniki:";
$lang['admin_select_site_title'] = "Prosim izberite stran";
$lang['admin_select_user_title'] = "Prosim izberite uporabnika";
$lang['admin_no_user_registered'] = "Ni registriranih uporabnikov!";
$lang['admin_configuration'] = "Nastavitve";
$lang['admin_general_conf'] = "Splošne nastavitve";
$lang['admin_group_title'] = "Groups manager (permissions)";
$lang['admin_user_title'] = "User management";
$lang['admin_user_add'] = "Dodaj uporabnika";
$lang['admin_user_mod'] = "Uredi uporabnika";
$lang['admin_user_del'] = "Izbriši uporabnika";
$lang['admin_server_info'] = "Informacije o strežniku";
$lang['admin_send_mail'] = "Pošlji statistiko po spletni pošti";
$lang['admin_rss_feed'] = "Statistika v RSS viru";
$lang['admin_site_admin'] = "Administracija strani";
$lang['admin_site_add'] = "Dodaj stran";
$lang['admin_site_mod'] = "Uredi stran";
$lang['admin_site_del'] = "Izbriši stran";
$lang['admin_nl_add'] = "Dodaj okrožnico";
$lang['admin_nl_mod'] = "Uredi okrožnico";
$lang['admin_nl_del'] = "Izbriši okrožnico";
$lang['admin_partner_add'] = "Dodaj partnerja";
$lang['admin_partner_mod'] = "Uredi partnerjevo ime ter URL";
$lang['admin_partner_del'] = "Izbriši partnerja";
$lang['admin_url_alias'] = "Upravljalec URL vzdevkov";
$lang['admin_group_admin_n'] = "Prikaži statistiko + Administratorsko dovoljenje";
$lang['admin_group_admin_d'] = "Uporabniki lahko statistiko pregledujejo ter urejajo informacije o strani (ime, dodaj piškotek, izključi IP rang, upravljajo URL vzdevke/pertnerje/okrožnice, itd.)";
$lang['admin_group_view_n'] = "Poglej statistiko";
$lang['admin_group_view_d'] = "Uporabniki lahko statistiko samo pregledujejo, brez administratorskih dovoljenj.";
$lang['admin_group_noperm_n'] = "Ni dovoljenj";
$lang['admin_group_noperm_d'] = "Uporabniki v tej skupini nimajo pravice za ogled statistike ali spreminjanje informacij.";
$lang['admin_group_stitle'] = "Skupino uporabnika lahko menjate tako, da izberete uporabnika, ki mu hočete menjati skupino ter izberete skupino v katero naj bo uporabnik prestavljen.";
$lang['admin_url_generate_download_link_example'] = "Download file Or URL redirection to an external website";
$lang['admin_url_generate_title'] = "File download adress / Url redirection : Url generator";
$lang['admin_url_generate_intro'] = "phpMyVisites can count your file downloads, and can also track external clicks to URLs. Downloads and URLs tracked will appear in the 'Pages views' section of phpMyVisites.</p><p class='texte'> To achieve this, you have to use a URL that points to the phpmyvisites file, then it will redirect to the URL you need. Because it is not trivial to generate such a URL, here is a tool that will make it simple (because phpMyVisites must be a simple but powerful experience for all of us). Simply fill in the form, click the 'Generate URL' button, and you will count your file downloads or external URL redirections very easily!";
$lang['admin_url_generate_site_selection'] = "Select the site for which you want to count a file download or a URL redirection";
$lang['admin_url_generate_enter_url'] = "Enter your file / Url to count in the statistics:";
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
$lang['install_loginmysql'] = "Uporabniško ime podatkovne baze";
$lang['install_mdpmysql'] = "Geslo podatkovne baze";
$lang['install_serveurmysql'] = "Mysql strežnik";
$lang['install_basemysql'] = "Ime podatkovne baze";
$lang['install_prefixetable'] = "Predpona tabele";
$lang['install_utilisateursavances'] = "Napredni uporabniki (izbirno)";
$lang['install_oui'] = "Da";
$lang['install_non'] = "Ne";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Problem: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Administratorjevo uporabniško ime:";
$lang['install_mdpadmin'] = "Administratorjevo geslo:";
$lang['install_chemincomplet'] = "Celotna pot do phpMyVisites (npr. http://www.stran.com/rep1/rep3/phpmyvisites/). Pot se mora končati s <strong>/</strong>.";
$lang['install_afficherlogo'] = "Dodaj logo na vašo stran? %s <br />Z prikazovanjem logotipa boste pomagali razširiti phpMyVisites ter s tem pomagalu hitrejši razvoj. To je tudi način kako se zahvaliti avtorju, ki je veliko ur porabil to Odptokodno, zastonjsko aplikacijo."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Prikazuj grafe.";
$lang['install_valider'] = "Pošlji"; //  during installation and for login
$lang['install_popup_logo'] = "Prosim izberite logotip"; // TODO : translate
$lang['install_logodispo'] = "Preglejte različne logotipe"; // TODO : translate
$lang['install_welcome'] = "Dobrodošli!";
$lang['install_system_requirements'] = "Sistemske zahteve";
$lang['install_database_setup'] = "Nastavitev podatkovne baze";
$lang['install_create_tables'] = "Izdelovanje tabel";
$lang['install_general_setup'] = "Splošne nastavitve";
$lang['install_create_config_file'] = "Izdelava konfiguracijske datoteke";
$lang['install_first_website_setup'] = "Dodaj prvo internetno stran";
$lang['install_display_javascript_code'] = "Prikaži Javascript kodo";
$lang['install_finish'] = "Končano!";
$lang['install_txt2'] = "Na koncu namestitve, bo na uradno stran poslano sporočilo, da bi olajšalo nadzor števila uporabnikov phpMyVisites. Hvala za razumevanje.";
$lang['install_database_setup_txt'] = "Prosim vnesite nastavitve podatkovne baze.";
$lang['install_general_config_text'] = "phpMyVisites bo imel le enega administratorskega uporabnika, ki bo imel celoten dostop za urejanje/spreminjanje vsega. Prosimo izberite uporabniško ime ter geslo ua super administratorja. Dodatne uporabnike lahko dodajate kasneje.";
$lang['install_config_file'] = " Admin user info entered successfully.";
$lang['install_js_code_text'] = "<p>Za statistiko vseh obiskovalcev je potrebno dodati javascript kodo na vse strani. </p><p> Ni potrebno, da so strani narejene v PHPju, <strong>phpMyVisites deluje na vseh vrstah strani (bodisi HTML, ASP, Perl ali katerikoli drugi jezik).</strong> </p><p> Tukaj je koda, ki jo je potrebno vnesti: (kopirajte ter prilepite na vse vaše strani) </p>";
$lang['install_intro'] = "Dobrodošli v inštalacijo phpMyVisites."; 
$lang['install_intro2'] = "Ta proces je razdeljen na %s enostavnih korakov ter vas mo vzel približno 10 minut.";
$lang['install_next_step'] = "Naslednji korak";
$lang['install_status'] = "Status inštalacije";
$lang['install_done'] = "Inštalacija %s%% končana"; // Install 25% complete
$lang['install_site_success'] = "Spletna stran uspešno narejena!";
$lang['install_site_info'] = "Prosim vnesite vse podatke o vaši spletni strani.";
$lang['install_go_phpmv'] = "Pojdite na phpMyVisites!";
$lang['install_congratulation'] = "Čestitamo! Vaša inštalacija phpMyVisites je končana.";
$lang['install_end_text'] = "Prepričajte se, da je javascript koda vnešena na vse strani, ter počakajte na prve uporabnike!";
$lang['install_db_ok'] = "Priključitev na podatkovni strežnik uspešna!";
$lang['install_table_exist'] = "phpMyVisites tabele že obstajajo.";
$lang['install_table_choice'] = "Izberete lahko uporabo obstoječih tabel ali pa namestitev v izbrišete obstoječe tabele.";
$lang['install_table_erase'] = "Izbriši vse tabele (bodite pazljivi!)";
$lang['install_table_reuse'] = "Uporabi obstoječe tabele";
$lang['install_table_success'] = "Tabele uspešno ustvarjene!";
$lang['install_send_mail'] = "Vsak dan pošlji email z statistiko?";

//
// Update Step
//
$lang['update_title'] = "Posodobite phpMyVisites";
$lang['update_subtitle'] = "We detect that you are updating phpMyVisites.";
$lang['update_versions'] = "Vaša prejšnja verzija je bila %s posodobili smo jo na %s.";
$lang['update_db_updated'] = "Vaša podatkovna baza je bila uspešno posodobljena!";
$lang['update_continue'] = "Nadaljujte na phpMyVisites";
$lang['update_jschange'] = "Warning! <br /> phpMyVisites javascript koda je bila posodobljenac. MORATE posodobiti vaše strani s tem da kopirate ter prilepite novo phpMyVisites Javascript na VSE nastavljene strani. <br /> Posodobitve javascript kode so redke, opravičujemo se za nevšečnosti."; // TODO : translate

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
$lang['moistab']['01'] = "Januar";
$lang['moistab']['02'] = "Februar";
$lang['moistab']['03'] = "Marec";
$lang['moistab']['04'] = "April";
$lang['moistab']['05'] = "Maj";
$lang['moistab']['06'] = "Junij";
$lang['moistab']['07'] = "Julij";
$lang['moistab']['08'] = "Avgust";
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
$lang['jsemaine']['Mon'] = "Ponedeljek";
$lang['jsemaine']['Tue'] = "Torek";
$lang['jsemaine']['Wed'] = "Sreda";
$lang['jsemaine']['Thu'] = "Četrtek";
$lang['jsemaine']['Fri'] = "Petek";
$lang['jsemaine']['Sat'] = "Sobota";
$lang['jsemaine']['Sun'] = "Nedelja";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Pon";
$lang['jsemaine_graph']['Tue'] = "Tor";
$lang['jsemaine_graph']['Wed'] = "Sre";
$lang['jsemaine_graph']['Thu'] = "Čet";
$lang['jsemaine_graph']['Fri'] = "Pet";
$lang['jsemaine_graph']['Sat'] = "Sob";
$lang['jsemaine_graph']['Sun'] = "Ned";

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
$lang['eur'] = "Evropa";
$lang['afr'] = "Afrika";
$lang['asi'] = "Azija";
$lang['ams'] = "Južna in Srednja Amerika";
$lang['amn'] = "Severna Amerika";
$lang['oce'] = "Oceanija";

// Oceans
$lang['oc_pac'] = "Pacific Ocean"; // TODO : translate
$lang['oc_atl'] = "Atlantic Ocean"; // TODO : translate
$lang['oc_ind'] = "Indian Ocean"; // TODO : translate

// Countries
$lang['domaines'] = array(
    "xx" => "Neznano",
    "ac" => "Ascension",
    "ad" => "Andora",
    "ae" => "Združeni Arabski Emirati",
    "af" => "Afganistan",
    "ag" => "Antigva in Barbuda",
    "ai" => "Anguilla",
    "al" => "Albanija",
    "am" => "Armenija",
    "an" => "Nizozemski Antili",
    "ao" => "Angola",
    "aq" => "Antarktika",
    "ar" => "Argentina",
    "as" => "Ameriška Samoa",
    "at" => "Avstrija",
    "au" => "Avstralija",
    "aw" => "Aruba",
    "az" => "Azerbajdžan",
    "ba" => "Bosna in Hercegovina",
    "bb" => "Barbados",
    "bd" => "Bangladeš",
    "be" => "Belgija",
    "bf" => "Burkina Faso",
    "bg" => "Bolgarija",
    "bh" => "Bahrajn",
    "bi" => "Burundi",
    "bj" => "Benin",
    "bm" => "Bermuda",
    "bn" => "Brunej",
    "bo" => "Bolivija",
    "br" => "Brazilija",
    "bs" => "Bahami",
    "bt" => "Butan",
    "bv" => "Bouvet Island",
    "bw" => "Bocvana",
    "by" => "Belorusija",
    "bz" => "Belize",
    "ca" => "Kanada",
    "cc" => "Kokosovo otočje",
    "cd" => "Kongo, Demokratična republika",
    "cf" => "Srednjeafriška republika",
    "cg" => "Kongo",
    "ch" => "Švica",
    "ci" => "Slonokoščena obala",
    "ck" => "Cookovo otočje",
    "cl" => "Čile",
    "cm" => "Kamerun",
    "cn" => "kitajska",
    "co" => "kolumbija",
    "cr" => "Kostarika",
    "cs" => "Serbia Montenegro",
    "cu" => "Kuba",
    "cv" => "Kapverdsko otočje",
    "cx" => "Božični otok",
    "cy" => "Ciper",
    "cz" => "Češka",
    "de" => "Nemčija",
    "dj" => "Džibuti",
    "dk" => "Danska",
    "dm" => "Dominika",
    "do" => "Dominikanska republika",
    "dz" => "Alžirija",
    "ec" => "Ekvador",
    "ee" => "Estonija",
    "eg" => "Egipt",
    "eh" => "Zahodna Sahara",
    "er" => "Eritreja",
    "es" => "Španija",
    "et" => "Etiopija",
    "fi" => "Finska",
    "fj" => "Fidži",
    "fk" => "Falklandsko otočje (Maldivi)",
    "fm" => "Mikronezija",
    "fo" => "Otočje Faroe",
    "fr" => "Francija",
    "ga" => "Gabon",
    "gd" => "Grenada",
    "ge" => "Gruzija",
    "gf" => "Francoska Gvajana",
    "gg" => "Guernsey",
    "gh" => "Gana",
    "gi" => "Gibraltar",
    "gl" => "Grenlandija",
    "gm" => "Gambija",
    "gn" => "Gvineja",
    "gp" => "Gvadalupe",
    "gq" => "Ekvatorijalna Gvineja",
    "gr" => "Grčija",
    "gs" => "Južna Georgija in Južno Sandwichevo otočje",
    "gt" => "Gvatemala",
    "gu" => "Guam",
    "gw" => "Gvineja-Bisau",
    "gy" => "Gvajana",
    "hk" => "Hong Kong",
    "hm" => "Heardovo in Mcdonaldovo otočje",
    "hn" => "Honduras",
    "hr" => "Hrvaška",
    "ht" => "Haiti",
    "hu" => "Madžarska",
    "id" => "Indonezija",
    "ie" => "Irska",
    "il" => "Izrael",
    "im" => "Otok Man",
    "in" => "Indija",
    "io" => "Britanski teritorij v Indijskem oceanu",
    "iq" => "Irak",
    "ir" => "Iran, Islamska republika",
    "is" => "Islandija",
    "it" => "Italija",
    "je" => "Jersey",
    "jm" => "Jamajka",
    "jo" => "Jordanija",
    "jp" => "Japonska",
    "ke" => "Kenija",
    "kg" => "Kirgizistan",
    "kh" => "Kambodža",
    "ki" => "Kiribati",
    "km" => "komori",
    "kn" => "Saint Kitts and Nevis",
    "kp" => "Koreja, Demokratična Ljudska Republika(Severna)",
    "kr" => "Koreja, Republika(Južna)",
    "kw" => "Kuvajt",
    "ky" => "Kajmansko otočje",
    "kz" => "Kazahstan",
    "la" => "Laos",
    "lb" => "Libanon",
    "lc" => "Sveta Lucija",
    "li" => "Lihtenštajn",
    "lk" => "Šri Lanka",
    "lr" => "Liberija",
    "ls" => "Lesoto",
    "lt" => "Litva",
    "lu" => "Luksemburg",
    "lv" => "Latvija",
    "ly" => "Libja",
    "ma" => "Maroko",
    "mc" => "Monako",
    "md" => "Moldavija, Republika",
    "mg" => "Madagaskar",
    "mh" => "Maršalovo otočje",
    "mk" => "Makedonija",
    "ml" => "Mali",
    "mm" => "Mjanmar",
    "mn" => "Mongolija",
    "mo" => "Makao",
    "mp" => "Severno Marijansko otočje",
    "mq" => "Martinik",
    "mr" => "Mavretanija",
    "ms" => "Montserat",
    "mt" => "Malta",
    "mu" => "Mauritius",
    "mv" => "Maldivi",
    "mw" => "Malavi",
    "mx" => "Mehika",
    "my" => "Malezija",
    "mz" => "Mozambik",
    "na" => "Namibija",
    "nc" => "Nova Kaledonija",
    "ne" => "Niger",
    "nf" => "Norfolški otok",
    "ng" => "Nigerija",
    "ni" => "Nikaragva",
    "nl" => "Nizozemska",
    "no" => "Norveška",
    "np" => "Nepal",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "Nova Zelandija",
    "om" => "Oman",
    "pa" => "Panama",
    "pe" => "Peru",
    "pf" => "Francoska Polinezija",
    "pg" => "Papua nova Guineja",
    "ph" => "Filipini",
    "pk" => "Pakistan",
    "pl" => "Poljska",
    "pm" => "Saint Pierre ter Miquelon",
    "pn" => "Pitcairn",
    "pr" => "Portoriko",
	"ps" => "Palestinian Territory",
    "pt" => "Portugalska",
    "pw" => "Palau",
    "py" => "Paragvaj",
    "qa" => "Katar",
    "re" => "Reunion Island",
    "ro" => "Romunija",
    "ru" => "Ruska Federacija",
    "rs" => "Rusija",
    "rw" => "Ruanda",
    "sa" => "Savdska Arabija",
    "sb" => "Salomonovo otočje",
    "sc" => "Sejšeli",
    "sd" => "Sudan",
    "se" => "Švedska",
    "sg" => "Singapur",
    "sh" => "Sveta Helena",
    "si" => "Slovenija",
    "sj" => "Svalbard",
    "sk" => "Slovaška",
    "sl" => "Siera Leone",
    "sm" => "San Marino",
    "sn" => "Senegal",
    "so" => "Somalija",
    "sr" => "Surinam",
    "st" => "Sao Tome in Principe",
    "su" => "Stara Z.S.S.R.",
    "sv" => "Salvador",
    "sy" => "Sirija",
    "sz" => "Swaziland",
    "tc" => "Turks in Caicos Islands",
    "td" => "Čad",
    "tf" => "Francoski južni teritoriji",
    "tg" => "Togo",
    "th" => "Tajska",
    "tj" => "Tadžikistan",
    "tk" => "Tokelau",
    "tm" => "Turkmenistan",
    "tn" => "Tunizija",
    "to" => "Tonga",
    "tp" => "Vzhodni Timor",
    "tr" => "Turčija",
    "tt" => "Trinidad in Tobago",
    "tv" => "Tuvalu",
    "tw" => "Tajvan, Kitajska provinca",
    "tz" => "Tanzanija, Združena republika",
    "ua" => "Ukraina",
    "ug" => "Uganda",
    "uk" => "Združeno kraljestvo",
    "gb" => "Velika Britanija",
    "um" => "United States Minor Outlying Islands",
    "us" => "Združene Države",
    "uy" => "Urugvaj",
    "uz" => "Uzbekistan",
    "va" => "Vatikan",
    "vc" => "Sveti Vincenc in Grenadine",
    "ve" => "Venezuela",
    "vg" => "Deviško otočje, Britansko",
    "vi" => "Deviško otočje, Z.D.A.",
    "vn" => "Vietnam",
    "vu" => "Vanuatu",
    "wf" => "Wallis ter Futuna",
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