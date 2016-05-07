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
$lang['auteur_nom'] = "Ariënne de Pree"; // naam van de vertaler
$lang['auteur_email'] = "contact via http://www.depree.nl"; // e-mailadres van de vertaler
$lang['charset'] = "utf-8"; // charset bestandsnaam (default utf-8)
$lang['text_dir'] = "ltr"; // ('ltr' van links naar rechts, 'rtl' van rechts naar links)
$lang['lang_iso'] = "nl"; // iso taal code
$lang['lang_libelle_en'] = "Dutch"; // de naam van de taal in het Engels
$lang['lang_libelle_fr'] = "Néerlandais"; // de naam van de taal in het Frans
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb');
$lang['separateur_milliers'] = ' '; // driehonderdduizend schrijft men in het Nederlands als 300 000
$lang['separateur_decimaux'] = ','; // scheidingsteken tussen de eenheden en de decimalen

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | Een open source webapplicatie voor het bijhouden van webstatistieken en het uitvoeren van verkeeranalyse"; // Titel van de pagina in de header html
$lang['head_keywords'] = "phpmyvisites, php, script, applicatie, programma, statistieken, publiek, stats, gratis, open source, gpl, bezoeken, bezoekers, mysql, bezochte pagina's, pagina's, weergaves, aantal bezoeken, grafisch, browsers, os, besturingssystemen, resolutie, dag, week, maand, records, landen, host, service providers, zoekrobot, sleutelwoorden, opvolging, herkomst, grafieken, eerste pagina's, laatste pagina's, taartdiagram"; // Sleutelwoorden voor de html-header
$lang['head_description'] = "phpMyVisites | Een open source applicatie voor het bijhouden van webstatistieken ontworpen in PHP/MYSQL en verspreid onder de GNU GPL licentie."; // Header description
$lang['logo_description'] = "phpMyVisites : Een open source applicatie voor het bijhouden van webstatistieken ontworpen in PHP/MYSQL en verspreid onder de GNU GPL licentie."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Bezoekers";
$lang['menu_pagesvues'] = "Pagina's";
$lang['menu_suivi'] = "Surfgedrag";
$lang['menu_provenance'] = "Bron";
$lang['menu_configurations'] = "Instellingen";
$lang['menu_affluents'] = "Herkomst";
$lang['menu_listesites'] = "Lijst sites";
$lang['menu_bilansites'] = "Samenvatting";
$lang['menu_jour'] = "Dag";
$lang['menu_semaine'] = "Week";
$lang['menu_mois'] = "Maand";
$lang['menu_annee'] = "Jaar";
$lang['menu_periode'] = "Bestudeerde periode : %s"; // Bestudeerde periode bv.: maandag 11 november
$lang['liens_siteofficiel'] = "Officiële site";
$lang['liens_admin'] = "Installatie &amp; configuratie";
$lang['liens_contacts'] = "Contacten";

//
// Divers
//
$lang['generique_nombre'] = "Aantal";
$lang['generique_tauxsortie'] = "Slechts 1 pagina bekeken";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Pagina werd gegenereerd in %s seconden"; // tijd in seconden
$lang['generique_divers'] = "Volgende"; // (voor de grafieken)
$lang['generique_inconnu'] = "Onbekend"; // (voor de grafieken)
$lang['generique_vous'] = "... You ?";
$lang['generique_traducteur'] = "Vertaler";
$lang['generique_langue'] = "Taal";
$lang['generique_autrelangure'] = "Andere ?"; // Andere taal, vertalers gezocht
$lang['aucunvisiteur_titre'] = "Geen bezoeker in deze periode."; 
$lang['generique_aucune_visite_bdd'] = "<b>Waarschuwing ! </b> Er worden geen bezoekers geregistreerd in de database voor deze site. Controleer of u de javascript code heeft geinstalleerd in uw pagina`s, met de juiste phpMyVisites URL <u>IN</u> de Javascript code. Raadpleeg documentatie voor hulp.";
$lang['generique_aucune_site_bdd'] = "Er wordt geen site geregistreerd in de database ! Probeer in te loggen als phpMyVisites Super User om een nieuwe site toe te voegen.";
$lang['generique_retourhaut'] = "Top";
$lang['generique_tempsvisite'] = "%smin %ss"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%sh"; // 4h means 4 hours
$lang['generique_siteno'] = "Site %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Newsletter %s"; // Newsletter "versie 2 announcement"
$lang['generique_partnerno'] = "Partner %s"; // Partner "versie 2 announcement"
$lang['generique_general'] = "Algemeen";
$lang['generique_user'] = "User %s"; // User "Admin"
$lang['generique_previous'] = "Vorige";
$lang['generique_next'] = "Volgende";
$lang['generique_lowpop'] = "Kleine dataverzamelingen niet laten zien";
$lang['generique_allpop'] = "Bekijk alle gegevens";
$lang['generique_to'] = "to"; // 4 'to' 8
$lang['generique_total_on'] = "on"; // 4 to 8 'on' 10
$lang['generique_total'] = "TOTAAL";
$lang['generique_information'] = "Informatie";
$lang['generique_done'] = "Gereed!";
$lang['generique_other'] = "Ander";
$lang['generique_description'] = "Beschrijving:";
$lang['generique_name'] = "Naam:";
$lang['generique_variables'] = "Variabelen";
$lang['generique_logout'] = "Logout";
$lang['generique_login'] = "Login";
$lang['generique_hits'] = "Hits";
$lang['generique_errors'] = "Fouten";
$lang['generique_site'] = "Site";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "wachtwoord :"; // kleine letters
$lang['login_login'] = "gebruikersnaam:"; // kleine letters
$lang['login_error'] = "Kan niet inloggen : verkeerde login/wachtwoord.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "U wilt de beveiligde zone met bezoekersstatistieken bezoeken.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Contacten";
$lang['contacts_langue'] = "Vertalingen";
$lang['contacts_merci'] = "Met dank aan:";
$lang['contacts_auteur'] = "De auteur en ontwerper van het phpMyVisites project is <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "Voor <strong>technische vragen, het melden van fouten en eventuele suggesties</strong> gelieve het forum van de officiële website te raadplegen %s . Voor andere vragen, gelieve de auteur te contacteren aan de hand van de officiële website."; // adres van de website
$lang['contacts_trad1'] = "Wil je phpMyVisites vertalen naar je eigen taal? Aarzal ons dan niet te contacteren want <strong>phpMyVisites heeft je nodig!</strong>";
$lang['contacts_trad2'] = "PhpMyVisites vertalen duurt slechts enkele uurtjes en een goede beheersing van de betrokken talen; maar houd in gedachte dat <strong>elk werk dat je verricht, vele gebruikers ten goede komt</strong>.  Meer informatie omtrent het vertalen van phpMyVisites kun je vinden in de %s officiële documentatie van phpMyVisites %s."; // link naar de documentatie
$lang['contacts_doc'] = "Aarzel niet om de %s officiële documentatie van phpMyVisites %s te raadplegen. Het geeft je een compleet overzicht van het installatieproces, de configuratie en de functionaliteit van phpMyVisites. Het is beschikbaar voor jouw versie van phpMyVisites."; // link naar de documentatie
$lang['contacts_thanks_dev'] = "Thank you <strong>%s</strong>, co-developers of phpMyVisites, for their high quality work on the project.";
$lang['contacts_merci3'] = "Aarzel niet om de gebruikerspagina van de officiële website te raadplegen. Je krijgt er een volldige lijst van alle phpMyVisites medewerkers.";
$lang['contacts_merci2'] = "Een welgemeende dank aan allen die hun kennis hebben gedeeld bij het vertalen van phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Site %s on %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Ga naar gedetailleerde statistieken";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Bezoekersinformatie";
$lang['visites_statistiques'] = "Statistieken";
$lang['visites_periodesel'] = "Voor de geselecteerde periode";
$lang['visites_visites'] = "Aantal bezoekers";
$lang['visites_uniques'] = "Unieke bezoekers";
$lang['visites_pagesvues'] = "Bezochte pagina's";
$lang['visites_pagesvisiteurs'] = "Pagina's per bezoeker";
$lang['visites_pagesvisites'] = "Pagina`s per bezoek"; 
$lang['visites_pagesvisitessign'] = "Pagina`s per significant bezoek"; 
$lang['visites_tempsmoyen'] = "Gemiddelde duur bezoek";
$lang['visites_tempsmoyenpv'] = "Gemiddelde duur bezochte pagina";
$lang['visites_tauxvisite'] = "Slechts 1 pagina bekeken";
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Tabel: Trendanalyse";
$lang['visites_nbvisites'] = "Aantal bezoekers";
$lang['visites_aucunevivisite'] = "Geen bezoekers"; // in een tabel, moet kort zijn
$lang['visites_recap'] = "Samenvatting";
$lang['visites_unepage'] = "1 pag"; // (graph)
$lang['visites_pages'] = "%s pag"; // 1-2 pages (graph)
$lang['visites_min'] = "%s min"; // 10-15 min (graph)
$lang['visites_sec'] = "%s sec"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Grafiek: Trendanalyse lange termijn";
$lang['visites_grapghrecaplongterm'] = "Grafiek: Trendanalyse korte termijn";
$lang['visites_graphtempsvisites'] = "Grafiek: Gemiddelde duur van een bezoek";
$lang['visites_graphtempsvisitesimg'] = "Gemiddelde duur van een bezoek";
$lang['visites_graphheureserveur'] = "Grafiek: Aantal bezoekers per uur volgens servertijd";
$lang['visites_graphheureserveurimg'] = "Aantal bezoekers per uur volgens servertijd";
$lang['visites_graphheurevisiteur'] = "Grafiek: Aantal bezoekers per uur volgens lokale tijd";
$lang['visites_graphheurelocalimg'] = "Aantal bezoekers per uur volgens lokale tijd";
$lang['visites_longterm_statd'] = "Kortetermijnanalyse (Dagen van de periode)";
$lang['visites_longterm_statm'] = "Langetermijnanalyse (Maanden in de periode)";

//
// Sites Summary
//
$lang['summary_title'] = "Samenvatting alle sites";
$lang['summary_stitle'] = "Samenvatting";

//
// Frequency Part
//
$lang['frequence_titre'] = "Terugkerende bezoekers";
$lang['frequence_nouveauxconnusgraph'] = "Grafiek die de nieuwe bezoeken vergelijkt met de terugkerende";
$lang['frequence_nouveauxconnus'] = "Nieuw tegenover terugkerende bezoeken";
$lang['frequence_titremenu'] = "Frequentie";
$lang['frequence_visitesconnues'] = "Terugkerende bezoeken";
$lang['frequence_nouvellesvisites'] = "Nieuwe bezoeken";
$lang['frequence_visiteursconnus'] = "Terugkerende bezoekers";
$lang['frequence_nouveauxvisiteurs'] = "Nieuwe bezoekers";
$lang['frequence_returningrate'] = "Terugkeerpercentage";
$lang['pagesvues_vispervisgraph'] = "Grafiek die het aantal hits per bezoeker laat zien";
$lang['frequence_vispervis'] = "Aantal bezoeken per bezoeker";
$lang['frequence_vis'] = "bezoek";
$lang['frequence_visit'] = "1 bezoek"; // (graph)
$lang['frequence_visits'] = "%s bezoeken"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Informatie bezochte pagina's";
$lang['pagesvues_joursel'] = "Geselecteerde dag";
$lang['pagesvues_jmoins7'] = "Dag - 7";
$lang['pagesvues_jmoins14'] = "Dag - 14";
$lang['pagesvues_moyenne'] = "(gemiddeld)";
$lang['pagesvues_pagesvues'] = "Aantal bezochte pagina's";
$lang['pagesvues_pagesvudiff'] = "Aantal uniek bezochte pagina's";
$lang['pagesvues_recordpages'] = "Hoogste aantal pagina's bezocht door 1 bezoeker";
$lang['pagesvues_tabdetails'] = "Bezochte pagina's (van %s tot %s)"; // (from 1 to 21)
$lang['pagesvues_graphsnbpages'] = "Grafiek : Aantal pagina's per bezoeker";
$lang['pagesvues_graphnbvisitespageimg'] = "Aantal pagina's per bezoeker";
$lang['pagesvues_graphheureserveur'] = "Grafiek : Aantal bezoekers per uur volgens servertijd";
$lang['pagesvues_graphheureserveurimg'] = "Aantal bezoekers per uur volgens servertijd";
$lang['pagesvues_graphheurevisiteur'] = "Grafiek : Aantal bezoekers per uur volgens lokale tijd";
$lang['pagesvues_graphpageslocalimg'] = "Aantal bezoekers per uur volgens lokale tijd";
$lang['pagesvues_tempsparpage'] = "Tijd per pagina";
$lang['pagesvues_total_time'] = "Totale tijd";
$lang['pagesvues_avg_time'] = "Gemiddelde tijd";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Surfgedrag bezoekers";
$lang['suivi_pageentree'] = "Eerste pagina's";
$lang['suivi_pagesortie'] = "Laatste pagina's";
$lang['suivi_tauxsortie'] = "Slechts 1 pagina bekeken";
$lang['suivi_pageentreehits'] = "Hits binnenkomst";
$lang['suivi_pagesortiehits'] = "Hits uitgaand";
$lang['suivi_singlepage'] = "1-pagina bezoeken";

//
// Origin
//
$lang['provenance_titre'] = "Herkomst bezoekers";
$lang['provenance_recappays'] = "Samenvatting landen";
$lang['provenance_pays'] = "Landen";
$lang['provenance_paysimg'] = "Bezoekers op landenkaart";
$lang['provenance_fai'] = "Internet Service Providers";
$lang['provenance_nbpays'] = "Aantal verschillende landen : %s";
$lang['provenance_provider'] = "Providers"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "Continent";
$lang['provenance_mappemonde'] = "Wereldkaart";
$lang['provenance_interetspays'] = "Herkomst Landen Analyse";

//
// Setup
//
$lang['configurations_titre'] = "Instellingen bezoekers";
$lang['configurations_os'] = "Besturingssystemen";
$lang['configurations_osimg'] = "Grafiek : Aantal bezoekers volgens hun besturingssysteem";
$lang['configurations_navigateurs'] = "Browsers";
$lang['configurations_navigateursimg'] = "Grafiek : Aantal bezoekers volgens hun brower";
$lang['configurations_resolutions'] = "Schermresolutie";
$lang['configurations_resolutionsimg'] = "Grafiek : Aantal bezoekers volgens hun schermresolutie";
$lang['configurations_couleurs'] = "Kleurendiepte";
$lang['configurations_couleursimg'] = "Grafiek : Aantal bezoekers volgens hun kleurendiepte";
$lang['configurations_rapport'] = "Normaal/breedbeeld";
$lang['configurations_large'] = "Breedbeeld";
$lang['configurations_normal'] = "Normaal";
$lang['configurations_double'] = "Dual Screen";
$lang['configurations_plugins'] = "Plugins";
$lang['configurations_navigateursbytype'] = "Browsers (type)";
$lang['configurations_navigateursbytypeimg'] = "Grafiek die browsertypes laat zien";
$lang['configurations_os_interest'] = "Besturingssysteem Analyse";
$lang['configurations_navigateurs_interest'] = "Browsers Analyse";
$lang['configurations_resolutions_interest'] = "Schermresolutie Analyse";
$lang['configurations_couleurs_interest'] = "Kleurendiepte Analyse";
$lang['configurations_configurations'] = "Belangrijkste combinaties";

//
// Referers
//
$lang['affluents_titre'] = "Bezoekers volgens hun herkomst";
$lang['affluents_recapimg'] = "Verdeling volgens herkomst";
$lang['affluents_directimg'] = "Direct";
$lang['affluents_sitesimg'] = "Websites";
$lang['affluents_moteursimg'] = "Zoekrobots";
$lang['affluents_referrersimg'] = "Herkomst";
$lang['affluents_moteurs'] = "Zoekrobots";
$lang['affluents_nbparmoteur'] = "Aantal bezoeken via zoekrobots : %s";
$lang['affluents_aucunmoteur'] = "Er werden geen bezoekers geregistreerd afkomstig van zoekrobots.";
$lang['affluents_motscles'] = "Sleutelwoorden";
$lang['affluents_nbmotscles'] = "Verschillende sleutelwoorden : %s";
$lang['affluents_aucunmotscles'] = "Geen sleutelwoorden gevonden.";
$lang['affluents_sitesinternet'] = "Websites";
$lang['affluents_nbautressites'] = "Bezoeken via andere websites : %s";
$lang['affluents_nbautressitesdiff'] = "Aantal verschillende websites : %s";
$lang['affluents_aucunautresite'] = "Er werden geen bezoekers geregistreerd afkomstig van andere websites.";
$lang['affluents_entreedirecte'] = "Directe toegang";
$lang['affluents_nbentreedirecte'] = "Aantal bezoekers door directe toegang : %s";
$lang['affluents_nbpartenaires'] = "Bezoeken afkomstig van partners : %s";
$lang['affluents_aucunpartenaire'] = "Er waren geen bezoeken afkomstig van sites van partners.";
$lang['affluents_nbnewsletters'] = "Bezoeken afkomstig van nieuwsbrieven : %s";
$lang['affluents_aucunnewsletter'] = "Er waren geen bezoeken afkomstig van nieuwsbrieven.";
$lang['affluents_details'] = "Details"; // In the results of the referers array
$lang['affluents_interetsmoteurs'] = "Zoekrobots Analyse";
$lang['affluents_interetsmotscles'] = "Sleutelwoorden Analyse";
$lang['affluents_interetssitesinternet'] = "Websites Analyse";
$lang['affluents_partenairesimg'] = "Partners";
$lang['affluents_partenaires'] = "Partners";
$lang['affluents_interetspartenaires'] = "Partners Analyse";
$lang['affluents_newslettersimg'] = "Nieuwsbrieven";
$lang['affluents_newsletters'] = "Nieuwsbrieven";
$lang['affluents_interetsnewsletters'] = "Nieuwsbrieven Analyse";
$lang['affluents_type'] = "Referer type";
$lang['affluents_interetstype'] = "Toegangstype Analyse";

//
// Summary
//
$lang['purge_titre'] = "Samenvatting van de bezoekers en hun afkomst";
$lang['purge_intro'] = "Deze periode werd verwijderd door de administratie, enkel de essentiële statistieken werden behouden.";
$lang['admin_purge'] = "Onderhoud database";
$lang['admin_purgeintro'] = "In dit onderdeel kun je de tabellen, die gebruikt worden door phpMyVisites, beheren. Je kunt de grootte zien van elke tabel, elke tabel optimaliseren of oude records zuiveren. Dit heeft als doel de grootte van de tabellen in de database te optimaliseren.";
$lang['admin_optimisation'] = "Optimalisatie van [ %s ]..."; // Tables names
$lang['admin_postopt'] = "De totale afgenomen grootte: %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Volgende periode verwijderd: %s";
$lang['admin_purge_fini'] = "Operatie zuiveren van tabellen beëindigd...";
$lang['admin_bdd_nom'] = "Naam";
$lang['admin_bdd_enregistrements'] = "Records";
$lang['admin_bdd_taille'] = "Grootte tabel";
$lang['admin_bdd_opt'] = "Optimaliseer";
$lang['admin_bdd_purge'] = "Zuiveringscriteria";
$lang['admin_bdd_optall'] = "Alles geoptimaliseerd";
$lang['admin_purge_j'] = "Verwijder records ouder dan %s dagen";
$lang['admin_purge_s'] = "Verwijder records ouder dan %s weken";
$lang['admin_purge_m'] = "Verwijder records ouder dan %s maanden";
$lang['admin_purge_y'] = "Verwijder records ouder dan %s jaar";
$lang['admin_purge_logs'] = "Verwijder alle logs.";
$lang['admin_purge_autres'] = "Algemene zuivering op de tabel '%s'";
$lang['admin_purge_none'] = "Geen actie mogelijk";
$lang['admin_purge_cal'] = "Bereken en zuiver (dit kan enkele minuten duren).";
$lang['admin_alias_title'] = "Website aliases and URLs";
$lang['admin_partner_title'] = "Website partners";
$lang['admin_newsletter_title'] = "Website nieuwsbrieven";
$lang['admin_ip_exclude_title'] = "Reeksen IP-adressen die uitgesloten moeten worden van de statistieken";
$lang['admin_name'] = "Naam:";
$lang['admin_error_ip'] = "IP moet in het juiste formaat zijn: %s";
$lang['admin_site_name'] = "Naam van de site";
$lang['admin_site_url'] = "Hoofd-URL van de site";
$lang['admin_db_log'] = "Probeer in te loggen als phpMyVisites Super User om de database-instellingen te veranderen.";
$lang['admin_error_critical'] = "Foutmelding, moet geschikt gemaakt worden voor phpMyVisites om te werken.";
$lang['admin_warning'] = "Waarschuwing, phpMyVisites zal goed werken maar sommige extra zaken niet.";
$lang['admin_move_group'] = "Ga naar groep:";
$lang['admin_move_select'] = "Selecteer een groep";

//
// Setup
//
$lang['admin_intro'] = "Welkom bij het configuratiegedeelte van phpMyVisites. Hier kunt u alle informatie wijzigen inzake uw installatie. Wanneer u problemen hebt, aarzel dan niet de %s officiële documentatie van phpMyVisites %s te raadplegen"; // lien vers la documentation
$lang['admin_configetperso'] = "Algemene configuratie";
$lang['admin_afficherjavascript'] = "Javascriptcode tonen";
$lang['admin_cookieadmin'] = "Administrator uitsluiten bij de telling";
$lang['admin_ip_ranges'] = "Tel geen IP/IP-reeksen mee in de statistieken";
$lang['admin_sitesenregistres'] = "Lijst van de geregistreerde websites :";
$lang['admin_retour'] = "Terug";
$lang['admin_cookienavigateur'] = "Je kunt de Administrator uitsluiten van de statistieken. Deze methode is gebaseerd op cookies en deze optie zal enkel werken met de huidige browser. Je kunt deze optie op elk moment wijzigen.";
$lang['admin_prendreencompteadmin'] = "Tel de administrator mee in de statistieken (verwijder de cookie).";
$lang['admin_nepasprendreencompteadmin'] = "Tel de administrator niet mee in de statistieken (maak een cookie aan).";
$lang['admin_etatcookieoui'] = "De administrator wordt meegeteld in de statistieken voor deze website (dit is de standaard configuratie, je wordt beschouwd als een normale bezoeker).";
$lang['admin_etatcookienon'] = "Je wordt niet bij de statistieken voor deze website geteld (Je bezoeken zullen niet bijgeteld worden bij deze website).";
$lang['admin_deleteconfirm'] = "Bevestig dat je dit wilt wissen %s?";
$lang['admin_sitedeletemessage'] = "<u>Let op</u>: alle gegevens die met die site samenhangen zullen worden gewist <br>en er is geen manier om de verloren gegevens terug te halen.";
$lang['admin_confirmyes'] = "Ja, ik wil dit wissen";
$lang['admin_confirmno'] = "Nee, ik wil dit niet wissen";
$lang['admin_nonewsletter'] = "Geen nieuwsletter gevonden wat betreft deze site!";
$lang['admin_nopartner'] = "Geen partner gevonden wat betreft deze site!";
$lang['admin_get_question'] = "GET-variabele opnemen? (URL variables)";
$lang['admin_get_a1'] = "ALLE URL-variabelen opnemen";
$lang['admin_get_a2'] = "Geen enkele URL-variabele opnemen";
$lang['admin_get_a3'] = "ALLEEN specifieke variabelen opnemen";
$lang['admin_get_a4'] = "Alles opnemen BEHALVE specifieke variabelen";
$lang['admin_get_list'] = "Variabele namen (<b>;</b> aparte lijst) <br/>Voorbeeld : %s";
$lang['admin_required'] = "%s is vereist.";
$lang['admin_title_required'] = "vereist";
$lang['admin_write_dir'] = "Beschrijfbare directories";
$lang['admin_chmod_howto'] = "Deze directories moeten beschrijfbaar zijn voor de server. Dit betekent dat chmod 777 geactiveerd moet zijn, met uw FTP software (rechtsklikken op de directory -> Permissions (of chmod))";
$lang['admin_optional'] = "Optioneel";
$lang['admin_memory_limit'] = "Geheugenlimiet";
$lang['admin_allowed'] = "toegestaan";
$lang['admin_webserver'] = "Webserver";
$lang['admin_server_os'] = "Server OS";
$lang['admin_server_time'] = "Servertijd";
$lang['admin_legend'] = "Legend:";
$lang['admin_error_url'] = "URL moet in de juiste vorm staan : %s (zonder slash aan het eind)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URL`s aliases";
$lang['admin_logo_question'] = "Toon logo?";
$lang['admin_type_again'] = "(typ opnieuw)";
$lang['admin_admin_mail'] = "Super Administrator e-mail";
$lang['admin_admin'] = "Super Administrator";
$lang['admin_phpmv_path'] = "Complete path naar de phpMyVisites applicatie";
$lang['admin_valid_email'] = "E-mail moet geldig zijn";
$lang['admin_valid_pass'] = "Wachtwoord mag niet te eenvoudig zijn (minimaal 6 tekens, moet cijfers bevatten)";
$lang['admin_match_pass'] = "Wachtwoorden kloppen niet";
$lang['admin_no_user_group'] = "Geen gebruiker in deze groep gevonden voor deze site";
$lang['admin_recorded_nl'] = "Nieuwsbrieven opnemen:";
$lang['admin_recorded_partners'] = "Opgenomen partners:";
$lang['admin_recorded_users'] = "Opgenomen users:";
$lang['admin_select_site_title'] = "Selecteer een site a.u.b.";
$lang['admin_select_user_title'] = "Selecteer een gebruiker a.u.b.";
$lang['admin_no_user_registered'] = "Geen gebruiker geregistreerd!";
$lang['admin_configuration'] = "Configuratie";
$lang['admin_general_conf'] = "Algemene configuratie";
$lang['admin_group_title'] = "Groepsmanager (rechten)";
$lang['admin_user_title'] = "Gebruikersmanagement";
$lang['admin_user_add'] = "Voeg gebruiker toe";
$lang['admin_user_mod'] = "Wijzig gebruiker";
$lang['admin_user_del'] = "Wis gebruiker";
$lang['admin_server_info'] = "Server Informatie";
$lang['admin_send_mail'] = "Stuur statistieken per e-mail";
$lang['admin_rss_feed'] = "Statistieken in RSS feed";
$lang['admin_site_admin'] = "Site Administratie";
$lang['admin_site_add'] = "Voeg site toe";
$lang['admin_site_mod'] = "Wijzig site";
$lang['admin_site_del'] = "Wis site";
$lang['admin_nl_add'] = "Voeg nieuwsbrief toe";
$lang['admin_nl_mod'] = "Wijzig nieuwsbrief";
$lang['admin_nl_del'] = "Wis nieuwsbrief";
$lang['admin_partner_add'] = "Voeg partner toe";
$lang['admin_partner_mod'] = "Wijzig naam en URL partner";
$lang['admin_partner_del'] = "Wis partner";
$lang['admin_url_alias'] = "URL alias Manager";
$lang['admin_group_admin_n'] = "Bekijk statistieken + Adminrechten";
$lang['admin_group_admin_d'] = "Gebruikers kunnen de sitestatistieken bekijken EN site-informatie bewerken (naam, cookie toevoegen, IP-reeksen uitsluiten, manage URL`s alias/partners/nieuwsbrieven, etc.)";
$lang['admin_group_view_n'] = "Bekijk statistieken";
$lang['admin_group_view_d'] = "Gebruiker kan alleen sitestatistieken zien. Geen adminrechten.";
$lang['admin_group_noperm_n'] = "Geen toegang";
$lang['admin_group_noperm_d'] = "Gebruikers in deze groep hebben niet het recht om statistieken te bekijken of informatie te bewerken.";
$lang['admin_group_stitle'] = "U kunt gebruikersgroepen bewerken door de gebruikers te selecteren die u wilt wijzigen en vervolgens een groep te selecteren waarnaar u de geselecteerde gebruikers wilt verplaatsen.";
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
$lang['install_loginmysql'] = "Login Database";
$lang['install_mdpmysql'] = "Wachtwoord Database";
$lang['install_serveurmysql'] = "Server Database";
$lang['install_basemysql'] = "Naam Database";
$lang['install_prefixetable'] = "Voorzetsel tabel";
$lang['install_utilisateursavances'] = "Gevorderde gebruikers (optioneel)";
$lang['install_oui'] = "Ja";
$lang['install_non'] = "Neen";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Probleem: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Login Administrator:";
$lang['install_mdpadmin'] = "Wachtwoord Administrator:";
$lang['install_chemincomplet'] = "Vervolledig het pad van de phpMyVisites applicatie (bijvoorbeeld http://www.mysite.com/rep1/rep3/phpmyvisites/). Het pad moet eindigen met een <strong>/</strong>.";
$lang['install_afficherlogo'] = "Het logo tonen op je pagina's? %s <br />Als je het logo toont op je site, dan adverteer je voor phpMyVisites en help je het sneller ontwikkelen.  Het is ook een manier om de schrijver te bedanken die vele uurtjes gespendeerd heeft aan het ontwikkelen van deze gratis Open Source applicatie."; // %s toont je het logo
$lang['install_affichergraphique'] = "Toon de statistieken in de vorm van grafieken ?";
$lang['install_valider'] = "Ok"; //  tijdens de installatie en voor de login
$lang['install_popup_logo'] = "Selecteer a.u.b. een logo"; // TODO : translate
$lang['install_logodispo'] = "Kijk welke verschillende logo`s beschikbaar zijn"; // TODO : translate
$lang['install_welcome'] = "Welkom!";
$lang['install_system_requirements'] = "Vereist Systeem";
$lang['install_database_setup'] = "Database Setup";
$lang['install_create_tables'] = "Maak een tabel";
$lang['install_general_setup'] = "Algemene Setup";
$lang['install_create_config_file'] = "Maak Config File aan";
$lang['install_first_website_setup'] = "Voeg eerste Website toe";
$lang['install_display_javascript_code'] = "Laat Javascript code zien";
$lang['install_finish'] = "Gereed!";
$lang['install_txt2'] = "Aan het einde van de installatie vragen wij u de officiële website te raadplegen, zo hebben wij een idee van het aantal gebruikers van phpMyVisites. Alvast bedankt voor uw begrip.";
$lang['install_database_setup_txt'] = "Ga naar uw Databasesettings.";
$lang['install_general_config_text'] = "phpMyVisites heeft slechts een administrator die alle rechten heeft om alles te bekijken/veranderen. Kies een gebruikersnaam en wachtwoord voor uw super administrator account. U kunt later andere gebruikers toevoegen.";
$lang['install_config_file'] = " Admin info is opgeslagen.";
$lang['install_js_code_text'] = "<p>Om alle bezoekers te tellen, moet u de javascript code op alle bladzijdes invoegen. </p><p> Uw pagina`s hoeven niet gemaakt te zijn met PHP, <strong>phpMyVisites zal op alle mogelijke bladzijdes werken (of het nu HTML, ASP, Perl of iedere andere taal is).</strong> </p><p> Hier is de code die u moet invoegen: (kopieer en plak in al uw pagina`s) </p>";
$lang['install_intro'] = "Welkom bij de phpMyVisites installatie."; 
$lang['install_intro2'] = "Dit proces wordt verdeeld in %s makkelijke stappen en zal ongeveer 10 minuten in beslag nemen.";
$lang['install_next_step'] = "Ga naar de volgende stap";
$lang['install_status'] = "Voortgang installatie";
$lang['install_done'] = "Installatie %s%% voltooid"; // Install 25% complete
$lang['install_site_success'] = "Website met succes voltooid!";
$lang['install_site_info'] = "Type alle informatie over de eerste website.";
$lang['install_go_phpmv'] = "Ga naar phpMyVisites!";
$lang['install_congratulation'] = "Gefeliciteerd! Uw phpMyVisites-installatie is compleet.";
$lang['install_end_text'] = "Check of de javascript code op alle bladzijdes is gezet en wacht op uw eerste bezoeker!";
$lang['install_db_ok'] = "Verbinding met de databaseserver is ok!";
$lang['install_table_exist'] = "phpMyVisites` tabellen bestaan al in de database.";
$lang['install_table_choice'] = "Kies ervoor om de bestaande databasetabellen te gebruiken of selecteer een nieuwe installatie waarmee alle bestaande gegevens in de database worden verwijderd.";
$lang['install_table_erase'] = "Verwijder alle tabellen (Let op!)";
$lang['install_table_reuse'] = "Gebruik bestaande tabellen";
$lang['install_table_success'] = "Tabellen zijn gereed!";
$lang['install_send_mail'] = "Ontvang een e-mail per dag per website met een beknopt statistiekenoverzicht?";

//
// Update Step
//
$lang['update_title'] = "Update phpMyVisites";
$lang['update_subtitle'] = "We bespeuren dat u phpMyVisites aan het bijwerken bent.";
$lang['update_versions'] = "Your previous version was %s and we have updated it to %s.";
$lang['update_db_updated'] = "Uw database werd succesvol bijgewerkt!";
$lang['update_continue'] = "Vervolg met phpMyVisites";
$lang['update_jschange'] = "Waarschuwing! <br /> De phpMyVisites javascript code is gewijzigd. U MOET uw pagina`s bijwerken en het nieuwe phpMyVisites Javascript in AL uw geconfigureerde sites kopiëren/plakken. <br /> De veranderingen in de javascript code zijn ongebruikelijk, we verontschuldigen ons voor het ongemak dat we veroorzaken met deze wijzigingen."; // TODO : translate

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
$lang['tdate4'] = "Maand %monthlong% %yearlong%";

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
$lang['tdate11'] = "Jaar %yearlong%";

// 2004
$lang['tdate12'] = "%yearlong%";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "Januari";
$lang['moistab']['02'] = "Februari";
$lang['moistab']['03'] = "Maart";
$lang['moistab']['04'] = "April";
$lang['moistab']['05'] = "Mei";
$lang['moistab']['06'] = "Juni";
$lang['moistab']['07'] = "Juli";
$lang['moistab']['08'] = "Augustus";
$lang['moistab']['09'] = "September";
$lang['moistab']['10'] = "Oktober";
$lang['moistab']['11'] = "November";
$lang['moistab']['12'] = "December";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Jan";
$lang['moistab_graph']['02'] = "Feb";
$lang['moistab_graph']['03'] = "Maart";
$lang['moistab_graph']['04'] = "April";
$lang['moistab_graph']['05'] = "Mei";
$lang['moistab_graph']['06'] = "Juni";
$lang['moistab_graph']['07'] = "Juli";
$lang['moistab_graph']['08'] = "Aug";
$lang['moistab_graph']['09'] = "Sept";
$lang['moistab_graph']['10'] = "Okt";
$lang['moistab_graph']['11'] = "Nov";
$lang['moistab_graph']['12'] = "Dec";

// Day of the week
$lang['jsemaine']['Mon'] = "Maandag";
$lang['jsemaine']['Tue'] = "Dinsdag";
$lang['jsemaine']['Wed'] = "Woensdag";
$lang['jsemaine']['Thu'] = "Donderdag";
$lang['jsemaine']['Fri'] = "Vrijdag";
$lang['jsemaine']['Sat'] = "Zaterdag";
$lang['jsemaine']['Sun'] = "Zondag";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Ma";
$lang['jsemaine_graph']['Tue'] = "Di";
$lang['jsemaine_graph']['Wed'] = "Wo";
$lang['jsemaine_graph']['Thu'] = "Do";
$lang['jsemaine_graph']['Fri'] = "Vr";
$lang['jsemaine_graph']['Sat'] = "Za";
$lang['jsemaine_graph']['Sun'] = "Zo";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "M";
$lang['calendrier_jours'][1] = "D";
$lang['calendrier_jours'][2] = "W";
$lang['calendrier_jours'][3] = "D";
$lang['calendrier_jours'][4] = "V";
$lang['calendrier_jours'][5] = "Z";
$lang['calendrier_jours'][6] = "Z";

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
$lang['asi'] = "Azië";
$lang['ams'] = "Centraal/Zuid-Amerika";
$lang['amn'] = "Noord-Amerika";
$lang['oce'] = "Oceanië";

// Oceans
$lang['oc_pac'] = "Pacifische Oceaan"; // TODO : translate
$lang['oc_atl'] = "Atlantische Oceaan"; // TODO : translate
$lang['oc_ind'] = "Indische Oceaan"; // TODO : translate

// Countries
$lang['domaines'] = array(
    "xx" => "Onbekend",
    "ac" => "Ascension Eilanden",
    "ad" => "Andorra",
    "ae" => "Verenigd Arabische Emiraten",
    "af" => "Afghanistan",
    "ag" => "Antigua en Barbuda",
    "ai" => "Anguilla",
    "al" => "Albanië",
    "am" => "Armenië",
    "an" => "Nederlandse Antillen",
    "ao" => "Angola",
    "aq" => "Antarctica",
    "ar" => "Argentinië�",
    "as" => "Amerikaans Samoa",
    "at" => "Oostenrijk",
    "au" => "Australië�",
    "aw" => "Aruba",
    "az" => "Azerbaijan",
    "ba" => "Bosnië en Herzegowina",
    "bb" => "Barbados",
    "bd" => "Bangladesh",
    "be" => "België",
    "bf" => "Burkina Faso",
    "bg" => "Bulgarije",
    "bh" => "Bahrein",
    "bi" => "Burundi",
    "bj" => "Benin",
    "bm" => "Bermuda",
    "bn" => "Brunei Darussalam",
    "bo" => "Bolivia",
    "br" => "Brazilië",
    "bs" => "Bahamas",
    "bt" => "Bhutan",
    "bv" => "Bouvet Eiland",
    "bw" => "Botswana",
    "by" => "Belarus",
    "bz" => "Belize",
    "ca" => "Canada",
    "cc" => "Cocos Eilanden",
    "cd" => "Congo, Democratische Republiek",
    "cf" => "Centraal Afrikaanse Republiek",
    "cg" => "Congo",
    "ch" => "Zwitserland",
    "ci" => "Ivoorkust",
    "ck" => "Cook Eilanden",
    "cl" => "Chili",
    "cm" => "Kameroen",
    "cn" => "China",
    "co" => "Colombia",
    "cr" => "Costa Rica",
	"cs" => "Servië Montenegro",
    "cu" => "Cuba",
    "cv" => "Kaap Verdië",
    "cx" => "Christmas Eilanden",
    "cy" => "Cyprus",
    "cz" => "Tjechische Republiek",
    "de" => "Duitsland",
    "dj" => "Djibouti",
    "dk" => "Denemarken",
    "dm" => "Dominica",
    "do" => "Dominicaanse Republiek",
    "dz" => "Algerije",
    "ec" => "Equador",
    "ee" => "Estland",
    "eg" => "Egypte",
    "eh" => "West Sahara",
    "er" => "Eritrea",
    "es" => "Spanje",
    "et" => "Ethiopië",
    "fi" => "Finland",
    "fj" => "Fiji",
    "fk" => "Falkland Eilanden",
    "fm" => "Micronesia, Federale Staten van",
    "fo" => "Farao Eilanden",
    "fr" => "Frankrijk",
    "ga" => "Gabon",
    "gd" => "Grenada",
    "ge" => "Georgië",
    "gf" => "Frans Guyana",
    "gg" => "Guernsey",
    "gh" => "Ghana",
    "gi" => "Gibraltar",
    "gl" => "Groenland",
    "gm" => "Gambia",
    "gn" => "Guinea",
    "gp" => "Guadeloupe",
    "gq" => "Equatoriaal Guinea",
    "gr" => "Griekenland",
    "gs" => "Zuid Georgië",
    "gt" => "Guatemala",
    "gu" => "Guam",
    "gw" => "Guinea-Bissau",
    "gy" => "Guyana",
    "hk" => "Hong Kong",
    "hm" => "Heard en McDonald Eilanden",
    "hn" => "Honduras",
    "hr" => "Kroatië",
    "ht" => "Haiti",
    "hu" => "Hungarije",
    "id" => "Indonesië",
    "ie" => "Ierland",
    "il" => "Israel",
    "im" => "Eiland van Man",
    "in" => "India",
    "io" => "Brits-Indische Oceaan Territorium",
    "iq" => "Irak",
    "ir" => "Iran, Islamitische republiek van",
    "is" => "Ijsland",
    "it" => "Italië",
    "je" => "Jersey",
    "jm" => "Jamaica",
    "jo" => "Jordanië",
    "jp" => "Japan",
    "ke" => "Kenya",
    "kg" => "Kyrgystan",
    "kh" => "Cambodia",
    "ki" => "Kiribati",
    "km" => "Comoros",
    "kn" => "St. Kitts en Nevis",
    "kp" => "Korea, Democratische Volksrepubliek",
    "kr" => "Korea, Republiek",
    "kw" => "Koeweit",
    "ky" => "Kaaiman Eilanden",
    "kz" => "Kazachstan",
    "la" => "Laos",
    "lb" => "Libanon",
    "lc" => "Sint Lucia",
    "li" => "Liechtenstein",
    "lk" => "Sri Lanka",
    "lr" => "Liberië",
    "ls" => "Lesotho",
    "lt" => "Lithouwen",
    "lu" => "Luxembourg",
    "lv" => "Letland",
    "ly" => "Libië",
    "ma" => "Marokko",
    "mc" => "Monaco",
    "md" => "Moldova, Republiek",
    "mg" => "Madagascar",
    "mh" => "Marshall Eilanden",
    "mk" => "Macedonië",
    "ml" => "Mali",
    "mm" => "Myanmar",
    "mn" => "Mongolië",
    "mo" => "Macau",
    "mp" => "Noordelijke Mariana Eilanden",
    "mq" => "Martinique",
    "mr" => "Mauritanië",
    "ms" => "Montserrat",
    "mt" => "Malta",
    "mu" => "Mauritius",
    "mv" => "Maldiven",
    "mw" => "Malawi",
    "mx" => "Mexico",
    "my" => "Maleisië",
    "mz" => "Mozambique",
    "na" => "Namibië",
    "nc" => "Nieuw Caledonië",
    "ne" => "Niger",
    "nf" => "Norfolk Eilanden",
    "ng" => "Nigeria",
    "ni" => "Nicaragua",
    "nl" => "Nederland",
    "no" => "Noorwegen",
    "np" => "Nepal",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "Nieuw Zeeland",
    "om" => "Oman",
    "pa" => "Panama",
    "pe" => "Peru",
    "pf" => "Frans Polynesië",
    "pg" => "Papua Nieuw Guinea",
    "ph" => "Philipijnen",
    "pk" => "Pakistan",
    "pl" => "Polen",
    "pm" => "St. Pierre en Miquelon",
    "pn" => "Pitcairn",
    "pr" => "Puerto Rico",
	"ps" => "Palestinian Territory",
    "pt" => "Portugal",
    "pw" => "Palau",
    "py" => "Paraguay",
    "qa" => "Qatar",
    "re" => "Reunion Eilanden",
    "ro" => "Romenië",
    "ru" => "Russische Federatie",
    "rs" => "Rusland",
    "rw" => "Rwanda",
    "sa" => "Saudi Arabië",
    "sb" => "Solomon Eilanden",
    "sc" => "Seychellen",
    "sd" => "Soedan",
    "se" => "Zweden",
    "sg" => "Singapore",
    "sh" => "Sint Helena",
    "si" => "Slovenië",
    "sj" => "Spitsbergen en Jan Mayen Eilanden",
    "sk" => "Slowakije",
    "sl" => "Sierra Leone",
    "sm" => "San Marino",
    "sn" => "Senegal",
    "so" => "Somalië",
    "sr" => "Suriname",
    "st" => "Sao Tome en Principe",
    "su" => "U.R.S.S.",
    "sv" => "El Salvador",
    "sy" => "Arabische Rebupliek Syrië",
    "sz" => "Zwitserland",
    "tc" => "De Turkse en Caicos Eilanden",
    "td" => "Chad",
    "tf" => "De Franse Zuidelijke Territoria",
    "tg" => "Togo",
    "th" => "Thailand",
    "tj" => "Tajikistan",
    "tk" => "Tokelau",
    "tm" => "Turkmenistan",
    "tn" => "Tunesië",
    "to" => "Tonga",
    "tp" => "Oost Timor",
    "tr" => "Turkije",
    "tt" => "Trinidad en Tobago",
    "tv" => "Tuvalu",
    "tw" => "Taiwan",
    "tz" => "Tanzania, Verenigd Republiek",
    "ua" => "Oekraine",
    "ug" => "Oeganda",
    "uk" => "Verenigd Koninkrijk",
    "gb" => "Groot Brittannië",
    "um" => "Verenigde Staten (Eilanden)",
    "us" => "Verenigde Staten",
    "uy" => "Uruguay",
    "uz" => "Uzbekistan",
    "va" => "Vaticaanstad",
    "vc" => "St. Vincent en de Grenadinen",
    "ve" => "Venezuela",
    "vg" => "Virgin Eilanden, Brits",
    "vi" => "Virgin Eilanden, U.S.",
    "vn" => "Vietnam",
    "vu" => "Vanuatu",
    "wf" => "Wallis en Futuna Eilanden",
    "ws" => "Samoa",
    "ye" => "Jemen",
    "yt" => "Mayotte",
    "yu" => "Joegoslavië",
    "za" => "Zuid Afrika",
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