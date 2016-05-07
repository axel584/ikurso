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
$lang['auteur_nom'] = "Anders Hjort Straarup"; // Translator's name
$lang['auteur_email'] = "mail@andershjort.dk"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "da"; // iso language code
$lang['lang_libelle_en'] = "Danish"; // english language name
$lang['lang_libelle_fr'] = "Danois"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = '.'; // Tre tusind staves 3.000,00 på dansk
$lang['separateur_decimaux'] = ','; // Decimalseperator

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | open source statistik og analyser af hjemmesidetrafik"; // Pages header's title
$lang['head_keywords'] = "statistik, analyse, henvisning, gratis, open source, besøgende, søgemaskiner, nøgleord, internet, hjemmesider"; // Header keywords
$lang['head_description'] = "phpMyVisites | An open source website statistics and web analytics application distributed under the GNU GPL."; // Header description
$lang['logo_description'] = "phpMyVisites | Open source web analytics"; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Besøg";
$lang['menu_pagesvues'] = "Viste sider";
$lang['menu_suivi'] = "Ind-/udgang";
$lang['menu_provenance'] = "Oprindelse";
$lang['menu_configurations'] = "Systeminfo";
$lang['menu_affluents'] = "Henvisninger";
$lang['menu_listesites'] = "Liste over hjemmesider";
$lang['menu_bilansites'] = "Oversigt";
$lang['menu_jour'] = "dag";
$lang['menu_semaine'] = "uge";
$lang['menu_mois'] = "måned";
$lang['menu_annee'] = "år";
$lang['menu_periode'] = "Analyseret tidsrum: %s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "phpMyVisites' hjemmeside";
$lang['liens_admin'] = "Administration";
$lang['liens_contacts'] = "Kontakt";

//
// Divers
//
$lang['generique_nombre'] = "Antal";
$lang['generique_tauxsortie'] = "Udgangsfrekvens";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Side genereret på %s sekunder"; // Time in seconds
$lang['generique_divers'] = "Andre"; // (for the graphs)
$lang['generique_inconnu'] = "Ukendt"; // (for the graphs)
$lang['generique_vous'] = "... Dig ?";
$lang['generique_traducteur'] = "Oversætter";
$lang['generique_langue'] = "Sprog";
$lang['generique_autrelangure'] = "Andet?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "Ingen besøg i denne periode."; 
$lang['generique_aucune_visite_bdd'] = "<b>Advarsel ! </b> Du har ingen besøg registreret i databasen for den aktuelle hjemmeside. Kontrollér venligst at du har installeret javascript-koden på dine sider, med den korrekte phpMyVisites URL <u>I</u> javascript-koden. Find hjælp i dokumentationen.";
$lang['generique_aucune_site_bdd'] = "Ingen hjemmeside registreret i databasen ! Prøv at logge ind som phpMyVisites superadministrator for at tilføje en ny hjemmeside.";
$lang['generique_retourhaut'] = "Til toppen";
$lang['generique_tempsvisite'] = "%smin %ss"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%st"; // 4h means 4 hours
$lang['generique_siteno'] = "Hjemmesiden %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Nyhedsbrev %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "Partner %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "Generelt";
$lang['generique_user'] = "Bruger %s"; // User "Admin"
$lang['generique_previous'] = "Forrige";
$lang['generique_next'] = "Næste";
$lang['generique_lowpop'] = "Ekskludér mindste poster";
$lang['generique_allpop'] = "Inkludér mindste poster";
$lang['generique_to'] = "til"; // 4 'to' 8
$lang['generique_total_on'] = "på"; // 4 to 8 'on' 10
$lang['generique_total'] = "I alt"; // 4 to 8 'on' 10
$lang['generique_information'] = "Information";
$lang['generique_done'] = "Udført!";
$lang['generique_other'] = "Andet";
$lang['generique_description'] = "Beskrivelse:";
$lang['generique_name'] = "Navn:";
$lang['generique_variables'] = "Variable";
$lang['generique_logout'] = "Log ud";
$lang['generique_login'] = "Log ind";
$lang['generique_hits'] = "Hits";
$lang['generique_errors'] = "Fejl";
$lang['generique_site'] = "Hjemmeside";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "password: "; // lowercase
$lang['login_login'] = "brugernavn: "; // lowercase
$lang['login_error'] = "Kan ikke logge ind. Forkert brugernavn eller password.";
$lang['login_error_nopermission'] = "Den angivne bruger har ingen rettigheder. Bed venligst superadministratoren om at opsætte rettigheder (kun se/admin) i phpMyVisites.";
$lang['login_protected'] = "Du ønsker at få adgang til %sphpMyVisites%s beskyttede område.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Kontakt";
$lang['contacts_langue'] = "Oversættelser";
$lang['contacts_merci'] = "Tak";
$lang['contacts_auteur'] = "phpMyVisites er udtænkt, skrevet og dokumenteret af <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "<strong>Tekniske spørgsmål, rapportering af fejl, forslag</strong> bedes henvendt til det officielle forum på phpMyVisites' hjemmeside %s. Andre forespørgsler bedes rettet til ophavsmanden via den officielle formular på hjemmesiden."; // adresse du site
$lang['contacts_trad1'] = "Vil du oversætte phpMyVisites til dit sprog? Tøv ikke for <strong>phpMyVisites behøver dig!</strong>";
$lang['contacts_trad2'] = "At oversætte phpMyVisites vil tage et stykke tid (nogle timer) og kræver et godt kendskab til de involverede sprog. Men husk at <strong>dit arbejde vil komme en stor mængde brugere til gode</strong>. Hvis du er interesseret i at oversætte phpMyVisites, kan du finde al nødvendig information i %s phpMyVisites' officielle dokumentation %s."; // Documentation link
$lang['contacts_doc'] = "Tøv ikke med at konsultere %sphpMyVisites officielle dokumentation%s. Den vil give dig rigeligt med information om installation, konfiguration og funktionaliteten i phpMyVisites. Den er tilgængelig i din version af phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Tak til phpMyVisites' med-udviklere <strong>%s</strong> for deres dygtige arbejde på projektet.";
$lang['contacts_merci3'] = "Tøv ikke med at besøge anerkendelsessiden på den officielle hjemmeside hvor du kan se en komplet liste over phpMyVisites' venner.";
$lang['contacts_merci2'] = "En stor tak til alle jer, der har delt jeres kultur med os ved at bidrage til oversættelsen af phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Hjemmesiden %s %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Gå til detaljeret statistik";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Besøg"; 
$lang['visites_statistiques'] = "Statistik";
$lang['visites_periodesel'] = "For den valgte periode";
$lang['visites_visites'] = "Besøg";
$lang['visites_uniques'] = "Unikke besøg";
$lang['visites_pagesvues'] = "Viste sider";
$lang['visites_pagesvisiteurs'] = "Sider pr. besøg"; 
$lang['visites_pagesvisites'] = "Sider pr. besøg"; 
$lang['visites_pagesvisitessign'] = "Sider pr. betydende besøg (mere end én sidevisning)"; 
$lang['visites_tempsmoyen'] = "Gennemsnitlig længde af besøg";
$lang['visites_tempsmoyenpv'] = "Gennemsnitlig tid pr. vist side";
$lang['visites_tauxvisite'] = "Hyppighed af 1-sides-besøg"; 
$lang['visites_average_visits_per_day'] = "Gennemsnitlig besøg pr. dag"; 
$lang['visites_recapperiode'] = "Variationer over en periode";
$lang['visites_nbvisites'] = "Besøg";
$lang['visites_aucunevivisite'] = "Ingen besøg"; // in the table, must be short
$lang['visites_recap'] = "Oversigt";
$lang['visites_unepage'] = "1 side"; // (graph)
$lang['visites_pages'] = "%s sider"; // 1-2 pages (graph)
$lang['visites_min'] = "%smin"; // 10-15 min (graph)
$lang['visites_sec'] = "%ss"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Diagram der viser oversigt over besøg";
$lang['visites_grapghrecaplongterm'] = "Diagram der viser oversigt over længere tid";
$lang['visites_graphtempsvisites'] = "Diagram der viser besøgslængden pr. besøgende";
$lang['visites_graphtempsvisitesimg'] = "Længde af besøg pr. besøgende";
$lang['visites_graphheureserveur'] = "Diagram der viser besøg pr. klokkeslæt (serverens tid)"; 
$lang['visites_graphheureserveurimg'] = "Besøg efter servertid"; 
$lang['visites_graphheurevisiteur'] = "Diagram der viser besøg pr. klokkeslæt (den besøgendes tid)";
$lang['visites_graphheurelocalimg'] = "Besøg efter lokal tid"; 
$lang['visites_longterm_statd'] = "Oversigt over længere tid (viser dage i perioden)";
$lang['visites_longterm_statm'] = "Oversigt over længere tid (viser måneder i perioden)";

//
// Sites Summary
//
$lang['summary_title'] = "Oversigt over hjemmesider";
$lang['summary_stitle'] = "Oversigt";

//
// Frequency Part
//
$lang['frequence_titre'] = "Tilbagevendende besøg";
$lang['frequence_nouveauxconnusgraph'] = "Diagram der viser nye/tilbagevendende besøg";
$lang['frequence_nouveauxconnus'] = "Nye/tilbagevendende besøg";
$lang['frequence_titremenu'] = "Hyppighed";
$lang['frequence_visitesconnues'] = "Tilbagevendende besøg";
$lang['frequence_nouvellesvisites'] = "Nye besøg";
$lang['frequence_visiteursconnus'] = "Tilbagevendende besøg";
$lang['frequence_nouveauxvisiteurs'] = "Nye besøg";
$lang['frequence_returningrate'] = "Tilbagevendende andel";
$lang['pagesvues_vispervisgraph'] = "Diagram der viser antal besøg pr. besøgende";
$lang['frequence_vispervis'] = "Antal besøg pr. besøgende";
$lang['frequence_vis'] = "besøg";
$lang['frequence_visit'] = "1 besøg"; // (graph)
$lang['frequence_visits'] = "%s besøg"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Viste sider";
$lang['pagesvues_joursel'] = "Valgte dag";
$lang['pagesvues_jmoins7'] = "7 dage tidligere";
$lang['pagesvues_jmoins14'] = "14 dage tidligere";
$lang['pagesvues_moyenne'] = "(gennemsnit)";
$lang['pagesvues_pagesvues'] = "Sidevisninger";
$lang['pagesvues_pagesvudiff'] = "Unikke sidevisninger";
$lang['pagesvues_recordpages'] = "Højeste antal sider for en besøgende";
$lang['pagesvues_tabdetails'] = "Viste sider og grupper";
$lang['pagesvues_graphsnbpages'] = "Diagram der viser besøg pr. antal viste sider";
$lang['pagesvues_graphnbvisitespageimg'] = "Besøg pr. antal viste sider";
$lang['pagesvues_graphheureserveur'] = "Diagram der viser antal besøg i forhold til serverens tid";
$lang['pagesvues_graphheureserveurimg'] = "Besøg i forhold til server-tid";
$lang['pagesvues_graphheurevisiteur'] = "Diagram der viser besøg i forhold til lokal tid";
$lang['pagesvues_graphpageslocalimg'] = "Besøg i forhold til lokal tid";
$lang['pagesvues_tempsparpage'] = "Tid pr. side";
$lang['pagesvues_total_time'] = "Tid i alt";
$lang['pagesvues_avg_time'] = "Gennemsnitlig tid";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "De besøgendes bevægelser";
$lang['suivi_pageentree'] = "Indgangssider";
$lang['suivi_pagesortie'] = "Udgangssider";
$lang['suivi_tauxsortie'] = "Udgangsrate";
$lang['suivi_pageentreehits'] = "Indgangs hits";
$lang['suivi_pagesortiehits'] = "Udgangs hits";
$lang['suivi_singlepage'] = "Enkeltsidebesøg";

//
// Origin
//
$lang['provenance_titre'] = "De besøgendes oprindelse";
$lang['provenance_recappays'] = "Lande";
$lang['provenance_pays'] = "Lande";
$lang['provenance_paysimg'] = "Diagram over besøgende pr. land";
$lang['provenance_fai'] = "Internetudbydere";
$lang['provenance_nbpays'] = "Antal forskellige lande : %s";
$lang['provenance_provider'] = "Udbydere"; // must be short
$lang['provenance_continent'] = "Kontinent";
$lang['provenance_mappemonde'] = "Verdenskort";
$lang['provenance_interetspays'] = "Lande - detaljer";

//
// Setup
//
$lang['configurations_titre'] = "De besøgendes indstillinger";
$lang['configurations_os'] = "Operativsystemer";
$lang['configurations_osimg'] = "Diagram der viser de besøgendes operativsystemer";
$lang['configurations_navigateurs'] = "Browsere";
$lang['configurations_navigateursimg'] = "Diagram der viser de besøgendes browsere";
$lang['configurations_resolutions'] = "Skærmopløsning";
$lang['configurations_resolutionsimg'] = "Diagram der viser de besøgendes skærmopløsning";
$lang['configurations_couleurs'] = "Farvekvalitet";
$lang['configurations_couleursimg'] = "Diagram der viser de besøgendes farvekvalitet";
$lang['configurations_rapport'] = "Almindelig/bredformat";
$lang['configurations_large'] = "Bredformat";
$lang['configurations_normal'] = "Almindelig";
$lang['configurations_double'] = "Dual Screen";
$lang['configurations_plugins'] = "Plugins";
$lang['configurations_navigateursbytype'] = "Browsere (efter type)";
$lang['configurations_navigateursbytypeimg'] = "Diagram der viser browsere efter type";
$lang['configurations_os_interest'] = "Operativsystemer - detaljer";
$lang['configurations_navigateurs_interest'] = "Browsere - detaljer";
$lang['configurations_resolutions_interest'] = "Skærmopløsning - detaljer";
$lang['configurations_couleurs_interest'] = "Farvekvalitet - detaljer";
$lang['configurations_configurations'] = "Mest almindelige indstillinger";

//
// Referers
//
$lang['affluents_titre'] = "Henvisninger";
$lang['affluents_recapimg'] = "Diagram over besøgende efter henvisning";
$lang['affluents_directimg'] = "Direkte adgang";
$lang['affluents_sitesimg'] = "Hjemmesider";
$lang['affluents_moteursimg'] = "Søgemaskiner";
$lang['affluents_referrersimg'] = "Henvisninger";
$lang['affluents_moteurs'] = "Søgemaskiner";
$lang['affluents_nbparmoteur'] = "Besøg der kom via søgemaskiner : %s";
$lang['affluents_aucunmoteur'] = "Ingen besøg via søgemaskiner.";
$lang['affluents_motscles'] = "Søgeord";
$lang['affluents_nbmotscles'] = "Antal benyttede søgeord : %s";
$lang['affluents_aucunmotscles'] = "Ingen søgeord fundet.";
$lang['affluents_sitesinternet'] = "Hjemmesider";
$lang['affluents_nbautressites'] = "Besøg der kom via andre hjemmesider : %s";
$lang['affluents_nbautressitesdiff'] = "Antal forskellige hjemmesider : %s";
$lang['affluents_aucunautresite'] = "Ingen besøg via andre hjemmesider.";
$lang['affluents_entreedirecte'] = "Direkte adgang";
$lang['affluents_nbentreedirecte'] = "Besøg der kom via direkte adgang : %s";
$lang['affluents_nbpartenaires'] = "Besøg der kom via partnere : %s";
$lang['affluents_aucunpartenaire'] = "Ingen besøg via partner-hjemmesider.";
$lang['affluents_nbnewsletters'] = "Besøg der via nyhedsbreve : %s";
$lang['affluents_aucunnewsletter'] = "Ingen besøg via nyhedsbreve.";
$lang['affluents_details'] = "Detaljer";
$lang['affluents_interetsmoteurs'] = "Søgemaskiner - detaljer";
$lang['affluents_interetsmotscles'] = "Søgeord - detaljer";
$lang['affluents_interetssitesinternet'] = "Hjemmesider - detaljer";
$lang['affluents_partenairesimg'] = "Partnere";
$lang['affluents_partenaires'] = "Partnere";
$lang['affluents_interetspartenaires'] = "Partnere - detaljer";
$lang['affluents_newslettersimg'] = "Nyhedsbreve";
$lang['affluents_newsletters'] = "Nyhedsbreve";
$lang['affluents_interetsnewsletters'] = "Nyhedsbreve - detaljer";
$lang['affluents_type'] = "Henvisningstype";
$lang['affluents_interetstype'] = "Henvisninger - detaljer";

//
// Summary
//
$lang['purge_titre'] = "Oversigt over besøg og henvisninger";
$lang['purge_intro'] = "Denne periode er blevet slettet i administrationen, kun de overordnede statistikker er gemt.";
$lang['admin_purge'] = "Database vedligeholdelse";
$lang['admin_purgeintro'] = "I denne sektion kan du bestyre de tabeller, phpMyVisites bruger. Du kan se hvor meget plads, tabellerne bruger, optimere dem eller fjerne gamle data. Dermed kan du begrænse størrelsen af tabellerne i databasen.";
$lang['admin_optimisation'] = "Optimering af [ %s ]..."; // Tables names
$lang['admin_postopt'] = "Den totale størrelse er blevet %chiffres% %unites% mindre"; // 28 Kb
$lang['admin_purgeres'] = "Fjern følgende perioder: %s";
$lang['admin_purge_fini'] = "Færdig med at slette tabeller...";
$lang['admin_bdd_nom'] = "Navn";
$lang['admin_bdd_enregistrements'] = "Data";
$lang['admin_bdd_taille'] = "Tabel størrelse";
$lang['admin_bdd_opt'] = "Optimér";
$lang['admin_bdd_purge'] = "Fjern kriterier";
$lang['admin_bdd_optall'] = "Optimér alt";
$lang['admin_purge_j'] = "Slet data der er ældre end %s dage";
$lang['admin_purge_s'] = "Slet data der er ældre end %s uger";
$lang['admin_purge_m'] = "Slet data der er ældre end %s måneder";
$lang['admin_purge_y'] = "Slet data der er ældre end %s år";
$lang['admin_purge_logs'] = "Slet alle logs";
$lang['admin_purge_autres'] = "Purge common to the table '%s'";
$lang['admin_purge_none'] = "Ingen mulig handling";
$lang['admin_purge_cal'] = "Beregn og fjern (dette kan tage nogle minutter)";
$lang['admin_alias_title'] = "Hjemmeside alias'er og URLs";
$lang['admin_partner_title'] = "Hjemmeside partnere";
$lang['admin_newsletter_title'] = "Hjemmeside nyhedsbreve";
$lang['admin_ip_exclude_title'] = "IP-addressesekvenser der ikke skal tælles med i statistikken";
$lang['admin_name'] = "Navn:";
$lang['admin_error_ip'] = "IP skal være i det korrekte format: %s";
$lang['admin_site_name'] = "Hjemmeside navn";
$lang['admin_site_url'] = "Hjemmesidens overordnede URL";
$lang['admin_db_log'] = "Prøv at logge ind som phpMyVisites superadministrator for at ændre database indstilinger.";
$lang['admin_error_critical'] = "Fejl, skal bringes i orden for at phpMyVisites kan virke.";
$lang['admin_warning'] = "Advarsel, phpMyVisites vil fungere korrekt, men måske vil nogle ekstra funktioner ikke virke";
$lang['admin_move_group'] = "Flyt til gruppe:";
$lang['admin_move_select'] = "Vælg en gruppe";

//
// Setup
//
$lang['admin_intro'] = "Velkommen til phpMyVisites administration. Her kan du styre alt vedrørende din installation. Har du problemer, så tøv ikke med at konsultere %s phpMyVisites officielle dokumentation%s.";
$lang['admin_configetperso'] = "Generelle indstillinger";
$lang['admin_afficherjavascript'] = "Vis javascript statstik-kode";
$lang['admin_cookieadmin'] = "Medregn ikke administratoren i statistikken (cookie)";
$lang['admin_ip_ranges'] = "Medtag ikke IP/IP-sekvenser i statistikken";
$lang['admin_sitesenregistres'] = "Registrerede hjemmesider:";
$lang['admin_retour'] = "Tilbage";
$lang['admin_cookienavigateur'] = "Du kan vælge ikke at medregne Adminstratoren i statistikken. Denne metode er cookie-baseret og valget vil kun have effekt med denne aktuelle browser. Du kan ændre dette valg til enhver tid.";
$lang['admin_prendreencompteadmin'] = "Medregn administratoren i statistikken (slet cookie)";
$lang['admin_nepasprendreencompteadmin'] = "Medregn IKKE administratoren i statistikken (opret en cookie)";
$lang['admin_etatcookieoui'] = "Administratoren tælles i øjeblikket med i statistikken for denne hjemmeside (Dette er standard-indstilingen, du betragtes som en normal besøgende.)";
$lang['admin_etatcookienon'] = "Du tælles i øjeblikket ikke med i statistikken for denne hjemmeside.";
$lang['admin_deleteconfirm'] = "Bekræft venligst at du vil slette %s?";
$lang['admin_sitedeletemessage'] = "Vær venligst <u>meget forsigtig</u>: alle data forbundet til denne hjemmeside vil blive slettet og der vil ikke være nogen måde at gendanne dem på.";
$lang['admin_confirmyes'] = "Ja, jeg vil slette den.";
$lang['admin_confirmno'] = "Nej, jeg vil ikke slette den";
$lang['admin_nonewsletter'] = "Ingen nyhedsbreve fundet for denne hjemmeside!";
$lang['admin_nopartner'] = "Ingen partner fundet for denne hjemmeside!";
$lang['admin_get_question'] = "Læs GET varabel? (URL variabler)";
$lang['admin_get_a1'] = "Læs ALLE URL variabler";
$lang['admin_get_a2'] = "Læs IKKE nogen URL variabler";
$lang['admin_get_a3'] = "Læs KUN de specificerede variabler";
$lang['admin_get_a4'] = "Læs alle UNDTAGEN de specificerede variabler";
$lang['admin_get_list'] = "Variabel navne (<b>;</b> separeret liste) <br/>Eksempel : %s";
$lang['admin_required'] = "%s er obligatorisk.";
$lang['admin_title_required'] = "Obligatorisk";
$lang['admin_write_dir'] = "Biblioteker, der kan skrives til";
$lang['admin_chmod_howto'] = "Disse biblioteker skal være mulige for serveren at skrive til. Det betyder at du skal chmod 777 dem, med din FTP software (højreklik på biblioteket -> Tilladelser (or chmod))";
$lang['admin_optional'] = "Valgfri";
$lang['admin_memory_limit'] = "Hukommelsesgrænse";
$lang['admin_allowed'] = "tiladt";
$lang['admin_webserver'] = "Web server";
$lang['admin_server_os'] = "Server OS";
$lang['admin_server_time'] = "Server tid";
$lang['admin_legend'] = "Forklaring:";
$lang['admin_error_url'] = "URL skal være i det korrekte format : %s (uden skråstreg i enden)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URLs alias'er";
$lang['admin_logo_question'] = "Vis logo?";
$lang['admin_type_again'] = "(skriv igen)";
$lang['admin_admin_mail'] = "Superadministrator email";
$lang['admin_admin'] = "Superadministrator";
$lang['admin_phpmv_path'] = "Komplet sti til phpMyVisites applikationen";
$lang['admin_valid_email'] = "Email skal være en gyldig email";
$lang['admin_valid_pass'] = "Password skal være mere komplekst (mindst 6 tegn, skal indeholde tal)";
$lang['admin_match_pass'] = "Passwords er forskellige";
$lang['admin_no_user_group'] = "Ingen bruger i denne gruppe for denne hjemmeside";
$lang['admin_recorded_nl'] = "Registrerede nyhedsbreve:";
$lang['admin_recorded_partners'] = "Registrerede partnere:";
$lang['admin_recorded_users'] = "Registrerede brugere:";
$lang['admin_select_site_title'] = "Vælg venligst en hjemmeside";
$lang['admin_select_user_title'] = "Vælg venligst en bruger";
$lang['admin_no_user_registered'] = "Ingen bruger registreret!";
$lang['admin_configuration'] = "Konfiguration";
$lang['admin_general_conf'] = "Generel konfiguration";
$lang['admin_group_title'] = "Håndtering af grupper (rettigheder)";
$lang['admin_user_title'] = "Håndtering af brugere";
$lang['admin_user_add'] = "Tilføj bruger";
$lang['admin_user_mod'] = "Redigér bruger";
$lang['admin_user_del'] = "Slet bruger";
$lang['admin_server_info'] = "Server Information";
$lang['admin_send_mail'] = "Send statistik pr. email";
$lang['admin_rss_feed'] = "Statistik i et RSS feed";
$lang['admin_site_admin'] = "Hjemmeside administration";
$lang['admin_site_add'] = "Tilføj hjemmeside";
$lang['admin_site_mod'] = "Redigér hjemmeside";
$lang['admin_site_del'] = "Slet hjemmeside";
$lang['admin_nl_add'] = "Tilføj nyhedsbrev";
$lang['admin_nl_mod'] = "Redigér nyhedsbrev";
$lang['admin_nl_del'] = "Slet nyhedsbrev";
$lang['admin_partner_add'] = "Tilføj partner";
$lang['admin_partner_mod'] = "Redigér partner's navn og URL";
$lang['admin_partner_del'] = "Slet partner";
$lang['admin_url_alias'] = "URL alias håndtering";
$lang['admin_group_admin_n'] = "Se statistik + Admin rettigheder";
$lang['admin_group_admin_d'] = "Brugere kan se hjemmeside-statistik OG redigere i hjemmeside-info (navn, tilføj cookie, medregn ikke IP områder, bestyr URLs alias'er/partnere/nyhedsbreve, etc.)";
$lang['admin_group_view_n'] = "Se statistik";
$lang['admin_group_view_d'] = "Bruger kan kun se hjemmeside-statistik. Ingen admin-rettigheder.";
$lang['admin_group_noperm_n'] = "Ingen rettigheder";
$lang['admin_group_noperm_d'] = "Brugere i denne gruppe har ingen rettigheder til at se statistik eller redigere information.";
$lang['admin_group_stitle'] = "Du kan redigere brugeres grupper ved at vælge de brugere, du vil ændre og derefter vælge en gruppe som du vil flytte de valgte brugere til.";
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
$lang['install_loginmysql'] = "Database brugernavn";
$lang['install_mdpmysql'] = "Database password";
$lang['install_serveurmysql'] = "Database server";
$lang['install_basemysql'] = "Database navn";
$lang['install_prefixetable'] = "Tabel præfix";
$lang['install_utilisateursavances'] = "Avancerede brugere (valgfri)";
$lang['install_oui'] = "Ja";
$lang['install_non'] = "Nej";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Problem: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Superadministrator brugernavn";
$lang['install_mdpadmin'] = "Superadministrator password";
$lang['install_chemincomplet'] = "Komplet sti til phpMyVisites applikationen (f.eks. http://www.mysite.com/rep1/rep3/phpmyvisites/). Stien skal ende med <strong>/</strong>.";
$lang['install_afficherlogo'] = "Vis logo'et på dine sider? %s <br />Ved at tillade at logoet vises på dine sider, vil du hjælpe til at publicere phpMyVisites og hjælpe det til at udvikle sig hurtigere. Det ville også være en pæn måde at takke ophavsmændene, der har brugt mange timer på at udvikle denne open source, gratis applikation."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Vis statistik-diagrammer.";
$lang['install_valider'] = "Send"; // during installation and for login
$lang['install_popup_logo'] = "Vælg venligst et logo";
$lang['install_logodispo'] = "Se de forskellige tilgængelige logoer";
$lang['install_welcome'] = "Velkommen!";
$lang['install_system_requirements'] = "Systemkrav";
$lang['install_database_setup'] = "Databaseopsætning";
$lang['install_create_tables'] = "Opret tabeller";
$lang['install_general_setup'] = "Generel opsætning";
$lang['install_create_config_file'] = "Opret konfigurationsfil";
$lang['install_first_website_setup'] = "Tilføj første hjemmeside";
$lang['install_display_javascript_code'] = "Vis javascript kode";
$lang['install_finish'] = "Færdig!";
$lang['install_txt2'] = "Ved slutningen af installationen vil der blive sendt en forespørgsel til den officielle hjemmeside for at hjælpe os til at holde styr på antallet af folk der bruger phpMyVisites. Tak for Deres forståelse.";
$lang['install_database_setup_txt'] = "Indtast venligst dine database-oplysninger.";
$lang['install_general_config_text'] = "phpMyVisites skal have en enkelt administrator-bruger, som har fuld adgang til at se/redigere alt. Vælg venligst et brugernavn og password for din superadministrator-konto. Du kan tilføje flere brugere senere.";
$lang['install_config_file'] = " Admin bruger-info indtastet korrekt.";
$lang['install_js_code_text'] = "<p>For at tælle alle besøgende skal du indsætte javascript koden på alle dine sider. </p><p> Dine sider behøver ikke være lavet i PHP, <strong>phpMyVisites fungerer på alle slags sider (hvad enten det er HTML, ASP, Perl eller et hvilken som helst andet sprog).</strong> </p><p> Her er den kode, du skal sætte ind: (kopier og sæt ind på alle dine sider) </p>";
$lang['install_intro'] = "Velkommen til phpMyVisites installation."; 
$lang['install_intro2'] = "Denne proces er delt op i %s enkle trin og vil tage omkring 10 minutter.";
$lang['install_next_step'] = "Gå til næste trin";
$lang['install_status'] = "Installations-status";
$lang['install_done'] = "Installationen er %s%% gennemført"; // Install 25% complete
$lang['install_site_success'] = "Hjemmeside oprettet korrekt!";
$lang['install_site_info'] = "Indtast venligst al information om den første hjemmeside.";
$lang['install_go_phpmv'] = "Gå til phpMyVisites!";
$lang['install_congratulation'] = "Tillykke! Din installation af phpMyVisites er færdig.";
$lang['install_end_text'] = "Kontrollér at din javascript kode er indskrevet på alle dine sider og vent på dine første besøgende!";
$lang['install_db_ok'] = "Forbindelse til database-server ok!";
$lang['install_table_exist'] = "phpMyVisites tabeller eksisterer allerede i databasen.";
$lang['install_table_choice'] = "Vælg enten at genbruge de eksisterende tabeller eller vælg en ren installation for at slette alle eksisterende tabeller i databasen.";
$lang['install_table_erase'] = "Slet alle tabeller (vær forsigtig!)";
$lang['install_table_reuse'] = "Genbrug eksisterende tabeller";
$lang['install_table_success'] = "Tabeller oprettet korrekt!";
$lang['install_send_mail'] = "Ønsker du at modtage en email hver dag indeholdende en statistik-oversigt??";

//
// Update Step
//
$lang['update_title'] = "Opdatér phpMyVisites";
$lang['update_subtitle'] = "Vi har registreret at du er ved at opdatere phpMyVisites.";
$lang['update_versions'] = "Din tidligere version var %s og vi har opdateret den til %s.";
$lang['update_db_updated'] = "Din database blev opdateret korrekt!";
$lang['update_continue'] = "Fortsæt til phpMyVisites";
$lang['update_jschange'] = "Advarsel! <br /> phpMyVisites' javascript-koden er blevet ændret. Du SKAL opdatere dine sider og kopiere/indsætte den nye phpMyVisites javascript-kode på alle dine tilknyttede hjemmesider. <br /> Det er sjældent der bliver ændret i javascript-koden. Vi beklager de besværligheder vi påfører dig med denne ændring.";

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
$lang['tdate1'] = "%daylong% d. %daynumeric%. %monthlong% %yearlong%";

// Monday 10
$lang['tdate2'] = "%daylong% d. %daynumeric%.";

// Week February 10 To February 17 2004
$lang['tdate3'] = "%daynumeric%. %monthlong% til %daynumeric2%. %monthlong2% %yearlong%";

// February 2004 Month
$lang['tdate4'] = "%monthlong% %yearlong%";

// December 2003
$lang['tdate5'] = "%monthlong% %yearlong%";

// 10 Febuary week
$lang['tdate6'] = "%daynumeric%. %monthlong% (uge)";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%daynumeric%-%monthnumeric%-%yearlong%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = "%dayshort% %daynumeric%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9'] = " Ugen %daynumeric%. %monthshort%";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%monthshort% %yearshort%";

// Year 2004
$lang['tdate11'] = "året %yearlong%";

// 2004
$lang['tdate12'] = "%yearlong%";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "januar";
$lang['moistab']['02'] = "februar";
$lang['moistab']['03'] = "marts";
$lang['moistab']['04'] = "april";
$lang['moistab']['05'] = "maj";
$lang['moistab']['06'] = "juni";
$lang['moistab']['07'] = "juli";
$lang['moistab']['08'] = "august";
$lang['moistab']['09'] = "september";
$lang['moistab']['10'] = "oktober";
$lang['moistab']['11'] = "november";
$lang['moistab']['12'] = "december";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "jan";
$lang['moistab_graph']['02'] = "feb";
$lang['moistab_graph']['03'] = "mar";
$lang['moistab_graph']['04'] = "apr";
$lang['moistab_graph']['05'] = "maj";
$lang['moistab_graph']['06'] = "jun";
$lang['moistab_graph']['07'] = "jul";
$lang['moistab_graph']['08'] = "aug";
$lang['moistab_graph']['09'] = "sep";
$lang['moistab_graph']['10'] = "okt";
$lang['moistab_graph']['11'] = "nov";
$lang['moistab_graph']['12'] = "dec";

// Day of the week
$lang['jsemaine']['Mon'] = "mandag";
$lang['jsemaine']['Tue'] = "tirsdag";
$lang['jsemaine']['Wed'] = "onsdag";
$lang['jsemaine']['Thu'] = "torsdag";
$lang['jsemaine']['Fri'] = "fredag";
$lang['jsemaine']['Sat'] = "lørdag";
$lang['jsemaine']['Sun'] = "søndag";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "man";
$lang['jsemaine_graph']['Tue'] = "tir";
$lang['jsemaine_graph']['Wed'] = "ons";
$lang['jsemaine_graph']['Thu'] = "tor";
$lang['jsemaine_graph']['Fri'] = "fre";
$lang['jsemaine_graph']['Sat'] = "lør";
$lang['jsemaine_graph']['Sun'] = "søn";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "M";
$lang['calendrier_jours'][1] = "T";
$lang['calendrier_jours'][2] = "O";
$lang['calendrier_jours'][3] = "T";
$lang['calendrier_jours'][4] = "F";
$lang['calendrier_jours'][5] = "L";
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
$lang['ams'] = "Syd- og Centralamerika";
$lang['amn'] = "Nordamerika";
$lang['oce'] = "Oceanien";

// Oceans
$lang['oc_pac'] = "Stillehavet";
$lang['oc_atl'] = "Atlanterhavet";
$lang['oc_ind'] = "Indiske Ocean";

// Countries
$lang['domaines'] = array(
	"xx" => "Ukendt",
	"ac" => "Ascension Islands",
	"ad" => "Andorra",
	"ae" => "Forenede Arabiske Emirater",
	"af" => "Afghanistan",
	"ag" => "Antigua og Barbuda",
	"ai" => "Anguilla",
	"al" => "Albanien",
	"am" => "Armenien",
	"an" => "Hollandske Antiller",
	"ao" => "Angola",
	"aq" => "Antarktis",
	"ar" => "Argentina",
	"as" => "Amerikansk Samoa",
	"at" => "Østrig",
	"au" => "Australien",
	"aw" => "Aruba",
	"az" => "Azerbaijan",
	"ba" => "Bosnien-Herzegovina",
	"bb" => "Barbados",
	"bd" => "Bangladesh",
	"be" => "Belgien",
	"bf" => "Burkina Faso",
	"bg" => "Bulgarien",
	"bh" => "Bahrain",
	"bi" => "Burundi",
	"bj" => "Benin",
	"bm" => "Bermuda",
	"bn" => "Bruneo",
	"bo" => "Bolivia",
	"br" => "Brazilien",
	"bs" => "Bahamas",
	"bt" => "Bhutan",
	"bv" => "Bouvet Island",
	"bw" => "Botswana",
	"by" => "Hviderusland",
	"bz" => "Belize",
	"ca" => "Canada",
	"cc" => "Cocos (Keeling) Islands",
	"cd" => "Congo, The Democratic Republic of the",
	"cf" => "Central African Republic",
	"cg" => "Congo",
	"ch" => "Schweiz",
	"ci" => "Elfenbenskysten",
	"ck" => "Cook Islands",
	"cl" => "Chile",
	"cm" => "Cameroon",
	"cn" => "Kina",
	"co" => "Columbia",
	"cr" => "Costa Rica",
	"cs" => "Serbien-Montenegro",
	"cu" => "Cuba",
	"cv" => "Cape Verde",
	"cx" => "Christmas Island",
	"cy" => "Cypern",
	"cz" => "Tjekkiet",
	"de" => "Tyskland",
	"dj" => "Djibouti",
	"dk" => "Danmark",
	"dm" => "Dominica",
	"do" => "Dominikanske Republik",
	"dz" => "Algeriet",
	"ec" => "Ecuador",
	"ee" => "Estland",
	"eg" => "Ægypten",
	"eh" => "Western Sahara",
	"er" => "Eritrea",
	"es" => "Spainen",
	"et" => "Etiopien",
	"fi" => "Finland",
	"fj" => "Fiji",
	"fk" => "Falkland Islands (Malvinas)",
	"fm" => "Micronesia, Federated States of",
	"fo" => "Færøerne",
	"fr" => "Frankrig",
	"ga" => "Gabon",
	"gd" => "Grenada",
	"ge" => "Georgien",
	"gf" => "Fransk Guyana",
	"gg" => "Guernsey",
	"gh" => "Ghana",
	"gi" => "Gibraltar",
	"gl" => "Grønland",
	"gm" => "Gambia",
	"gn" => "Guinea",
	"gp" => "Guadeloupe",
	"gq" => "Equatorial Guinea",
	"gr" => "Grækenland",
	"gs" => "South Georgia and the South Sandwich Islands",
	"gt" => "Guatemala",
	"gu" => "Guam",
	"gw" => "Guinea-Bissau",
	"gy" => "Guyana",
	"hk" => "Hong Kong",
	"hm" => "Heard Island and McDonald Islands",
	"hn" => "Honduras",
	"hr" => "Kroatien",
	"ht" => "Haiti",
	"hu" => "Ungarn",
	"id" => "Indonesien",
	"ie" => "Irland",
	"il" => "Israel",
	"im" => "Man Island",
	"in" => "Indien",
	"io" => "British Indian Ocean Territory",
	"iq" => "Irak",
	"ir" => "Iran, Den Islamiske Republik",
	"is" => "Island",
	"it" => "Italien",
	"je" => "Jersey",
	"jm" => "Jamaica",
	"jo" => "Jordan",
	"jp" => "Japan",
	"ke" => "Kenya",
	"kg" => "Kirgisistan",
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
	"lb" => "Libanon",
	"lc" => "Saint Lucia",
	"li" => "Lichtenstein",
	"lk" => "Sri Lanka",
	"lr" => "Liberia",
	"ls" => "Lesotho",
	"lt" => "Litauen",
	"lu" => "Luxembourg",
	"lv" => "Letland",
	"ly" => "Libyen",
	"ma" => "Marokko",
	"mc" => "Monaco",
	"md" => "Moldova, Republic of",
	"mg" => "Madagascar",
	"mh" => "Marshall Islands",
	"mk" => "Makedonien",
	"ml" => "Mali",
	"mm" => "Myanmar",
	"mn" => "Mongoliet",
	"mo" => "Macau",
	"mp" => "Northern Mariana Islands",
	"mq" => "Martinique",
	"mr" => "Mauritania",
	"ms" => "Montserrat",
	"mt" => "Malta",
	"mu" => "Mauritius",
	"mv" => "Maldiverne",
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
	"nl" => "Holland",
	"no" => "Norge",
	"np" => "Nepal",
	"nr" => "Nauru",
	"nu" => "Niue",
	"nz" => "New Zealand",
	"om" => "Oman",
	"pa" => "Panama",
	"pe" => "Peru",
	"pf" => "Fransk Polynesien",
	"pg" => "Papua New Guinea",
	"ph" => "Philippinerne",
	"pk" => "Pakistan",
	"pl" => "Polen",
	"pm" => "Saint Pierre and Miquelon",
	"pn" => "Pitcairn",
	"pr" => "Puerto Rico",
	"ps" => "Palestinian Territory",
	"pt" => "Portugal",
	"pw" => "Palau",
	"py" => "Paraguay",
	"qa" => "Qatar",
	"re" => "Reunion Island",
	"ro" => "Rumænien",
	"ru" => "Russiske Føderation",
	"rs" => "Rusland",
	"rw" => "Rwanda",
	"sa" => "Saudi-Arabien",
	"sb" => "Solomon Islands",
	"sc" => "Seychelles",
	"sd" => "Sudan",
	"se" => "Sverige",
	"sg" => "Singapore",
	"sh" => "Saint Helena",
	"si" => "Slovenien",
	"sj" => "Svalbard",
	"sk" => "Slovakiet",
	"sl" => "Sierra Leone",
	"sm" => "San Marino",
	"sn" => "Senegal",
	"so" => "Somalia",
	"sr" => "Surinam",
	"st" => "Sao Tome and Principe",
	"su" => "Tidligere U.S.S.R",
	"sv" => "El Salvador",
	"sy" => "Syrien, Arabiske Republik",
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
	"tp" => "Øst-Timor",
	"tr" => "Tyrkiet",
	"tt" => "Trinidad og Tobago",
	"tv" => "Tuvalu",
	"tw" => "Taiwan",
	"tz" => "Tanzania, United Republic of",
	"ua" => "Ukraine",
	"ug" => "Uganda",
	"uk" => "United Kingdom",
	"gb" => "Storbrittanien",
	"um" => "United States Minor Outlying Islands",
	"us" => "USA",
	"uy" => "Uruguay",
	"uz" => "Uzbekistan",
	"va" => "Vatikanet",
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