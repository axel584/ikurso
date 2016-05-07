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
$lang['auteur_nom'] = "Vlatko Koudela"; // Translator's name
$lang['auteur_email'] = "vlatko.koudela<AT>vicevi.biz"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "hr"; // iso language code
$lang['lang_libelle_en'] = "Croatian"; // english language name
$lang['lang_libelle_fr'] = "Croate"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = ''; // three thousand spells 3,000 in english
$lang['separateur_decimaux'] = '.'; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | aplikacija za statistiku i analizu web prometa"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, script, application, software, statistics, referals, stats, free, open source, gpl, visits, visitors, mysql, viewed pages, pages, views, number of visits, graphs, Browsers, os, operating system, resolutions, day, week, month, records, country, host, service providors, search enginge, key words, referrers, graphs, entry pages, exit pages, pie charts"; // Header keywords
$lang['head_description'] = "phpMyVisites | Open source aplikacija za statistiku izrađena u PHP/MySQL tehnologiji i distribuirana pod Gnu GPL licencom."; // Header description
$lang['logo_description'] = "phpMyVisites : Open source aplikacija za statistiku izrađena u PHP/MySQL tehnologiji, distribuirano pod GPL licencom."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Posjete";
$lang['menu_pagesvues'] = "Učitane stranice";
$lang['menu_suivi'] = "Tijek surfanja";
$lang['menu_provenance'] = "Države dolazaka";
$lang['menu_configurations'] = "Postavke";
$lang['menu_affluents'] = "Izvori dolazaka";
$lang['menu_listesites'] = "Sajtovi";
$lang['menu_bilansites'] = "Sažetak";
$lang['menu_jour'] = "Dan";
$lang['menu_semaine'] = "Tjedan";
$lang['menu_mois'] = "Mjesec";
$lang['menu_annee'] = "Godina";
$lang['menu_periode'] = "Promatrani period: %s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "Službena stranica";
$lang['liens_admin'] = "Administracija";
$lang['liens_contacts'] = "Kontakti";

//
// Divers
//
$lang['generique_nombre'] = "Broj";
$lang['generique_tauxsortie'] = "Izlazni postotak";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Stranica je generirana za %s sekundi"; // Time in seconds
$lang['generique_divers'] = "Ostali"; // (for the graphs)
$lang['generique_inconnu'] = "Nepoznato"; // (for the graphs)
$lang['generique_vous'] = "... Vi ?";
$lang['generique_traducteur'] = "Prevoditelj";
$lang['generique_langue'] = "Jezik";
$lang['generique_autrelangure'] = "Ostali?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "Nema posjeta u ovom periodu."; 
$lang['generique_aucune_visite_bdd'] = "<b>Upozorenje ! </b> U bazi nema zabilježenih posjeta za ovaj sajt. Provjerite da li ste postavili svoj Javascript kod na svoje stranice s odgovarajućom putanjom do phpMyVisites aplikacije. Ili pretražite dokumentaciju za pomoć.";
$lang['generique_aucune_site_bdd'] = "Nema ni jednog zabilježenog sajta u bazi. Pokušajte se logirati kao phpMyVisites Super User da bi dodali novi sajt.";
$lang['generique_retourhaut'] = "Vrh";
$lang['generique_tempsvisite'] = "%smin %ss"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%sh"; // 4h means 4 hours
$lang['generique_siteno'] = "Sajt %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Newsletter %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "Partner %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "Općenito";
$lang['generique_user'] = "Korisnik %s"; // User "Admin"
$lang['generique_previous'] = "Nazad";
$lang['generique_next'] = "Dalje";
$lang['generique_lowpop'] = "Isključi 'slabe' posjete iz statistike";
$lang['generique_allpop'] = "Uključi sve posjete u statistiku";
$lang['generique_to'] = "do"; // 4 'to' 8
$lang['generique_total_on'] = "na"; // 4 to 8 'on' 10
$lang['generique_total'] = "Ukupno";
$lang['generique_information'] = "Informacije";
$lang['generique_done'] = "Gotovo!";
$lang['generique_other'] = "Ostalo";
$lang['generique_description'] = "Opis:";
$lang['generique_name'] = "Ime:";
$lang['generique_variables'] = "Varijable";
$lang['generique_logout'] = "Odjava";
$lang['generique_login'] = "Prijava";
$lang['generique_hits'] = "Klikovi";
$lang['generique_errors'] = "Greške";
$lang['generique_site'] = "Sajt";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "lozinka : "; // lowercase
$lang['login_login'] = "korisničko ime : "; // lowercase
$lang['login_error'] = "Prijava nije uspjela. Krivo korisničko ime ili lozinka.";
$lang['login_error_nopermission'] = "Navedeni korisnik nema nikakva prava. Pitajte Super User-a da Vam postavi odgovarajuće ovlasti u phpMyVisites aplikaciji.";
$lang['login_protected'] = "Pokušavate pristupiti u zaštićeno područje %sphpMyVisites-a%s.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Kontakti";
$lang['contacts_langue'] = "Prijevodi";
$lang['contacts_merci'] = "Hvala";
$lang['contacts_auteur'] = "Autor, dokumentator i kreator projekta phpMyVisites je <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "Za sva <strong>tehnička pitanja, prijave grešaka (bugova) ili prijedloge</strong> koristite službeni forum %s. Za sve ostalo, kontaktirajte autora koristeći obrazac na službenim web stranicama."; // adresse du site
$lang['contacts_trad1'] = "Želite li prevesti phpMyVisites na svoj jezik? Ne ustručavajte se jer <strong>Vas phpMyVisites treba!</strong>";
$lang['contacts_trad2'] = "Prijevod phpMyVisites će malo potrajati (par sati) i zahtjeva dobro znanje jezika na koji se prevodi; ali zapamtite da će <strong>bilo koji posao koji vi napravite koristiti veliki broj korisnika</strong>. Ako ste zainteresirani u prevođenju phpMyVisites aplikacije, možete pronaći sve potrebne informacije koje trebate u %s službenoj dokumentaciji phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "Ne ustručavajte se pogledati %s službenu dokumentaciju phpMyVisites-a %s koja će vam dati obilje informacija o instalaciji, konfiguraciji i funkcionalnosti phpMyVisites-a. Dostupno je i u vašoj verziji phpMyVisites-a."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Hvala <strong>%s</strong>, razvojnom timu phpMyVisites-a, za njihov visoko kvalitetni rad na ovom projektu.";
$lang['contacts_merci3'] = "Nemojte se ustručavati pogledati zahvalnu stranicu na službenim stranicama, za cijeli popis prijatelja phpMyVisites-a.";
$lang['contacts_merci2'] = "Veliko hvala svima koji su podijelili svoje znanje dok su doprinijeli prijevodu phpMyVisites-a:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Sajt %s na dan %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Idi na detaljnu statistiku";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Informacije o posjetitelju"; 
$lang['visites_statistiques'] = "Statistika";
$lang['visites_periodesel'] = "Za odabrani period";
$lang['visites_visites'] = "Posjete";
$lang['visites_uniques'] = "Jedinstvene posjete";
$lang['visites_pagesvues'] = "Učitanih stranica";
$lang['visites_pagesvisiteurs'] = "Stranica po posjetitelju"; 
$lang['visites_pagesvisites'] = "Stranica po posjeti"; 
$lang['visites_pagesvisitessign'] = "Stranica po jednoj posjeti"; 
$lang['visites_tempsmoyen'] = "Prosjek boravka posjetitelja";
$lang['visites_tempsmoyenpv'] = "Prosjek trajanja učitane stranice";
$lang['visites_tauxvisite'] = "Sažetak za odabrani period"; 
$lang['visites_average_visits_per_day'] = "Prosječna posjećenost po danu"; 
$lang['visites_recapperiode'] = "Sažeci";
$lang['visites_nbvisites'] = "Posjete";
$lang['visites_aucunevivisite'] = "Nema posjeta"; // in the table, must be short
$lang['visites_recap'] = "Sažetak";
$lang['visites_unepage'] = "1. stranica"; // (graph)
$lang['visites_pages'] = "%s str."; // 1-2 pages (graph)
$lang['visites_min'] = "%smin"; // 10-15 min (graph)
$lang['visites_sec'] = "%ssek"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Graf za prikaz sažete statistike";
$lang['visites_grapghrecaplongterm'] = "Graf za prikaz sažete statistike dužeg perioda";
$lang['visites_graphtempsvisites'] = "Graf za prikaz trajanja boravka posjetitelja";
$lang['visites_graphtempsvisitesimg'] = "Boravak posjetitelja";
$lang['visites_graphheureserveur'] = "Graf za prikaz broja posjeta po satu (vrijeme servera)"; 
$lang['visites_graphheureserveurimg'] = "Posjete po satu (vrijeme servera)"; 
$lang['visites_graphheurevisiteur'] = "Graf za prikaz broja posjeta po satu po lokalnom vremenu posjetitelja";
$lang['visites_graphheurelocalimg'] = "Posjete po satu po lokalnom vremenu"; 
$lang['visites_longterm_statd'] = "Analiza dužeg perioda (po danima)";
$lang['visites_longterm_statm'] = "Analiza dužeg perioda (po mjesecima)";

//
// Sites Summary
//
$lang['summary_title'] = "Sažetak sajta";
$lang['summary_stitle'] = "Sažetak";

//
// Frequency Part
//
$lang['frequence_titre'] = "Stare posjete";
$lang['frequence_nouveauxconnusgraph'] = "Graf za prikaz odnosa novih i starih posjeta";
$lang['frequence_nouveauxconnus'] = "Nove i stare posjete";
$lang['frequence_titremenu'] = "Učestalost";
$lang['frequence_visitesconnues'] = "Stare posjete";
$lang['frequence_nouvellesvisites'] = "Nove posjete";
$lang['frequence_visiteursconnus'] = "Stari posjetitelji";
$lang['frequence_nouveauxvisiteurs'] = "Novi posjetitelji";
$lang['frequence_returningrate'] = "Postotak vraćanja posjetitelja";
$lang['pagesvues_vispervisgraph'] = "Graf za prikaz broja posjeta po posjetitelju";
$lang['frequence_vispervis'] = "Broj posjeta po posjetitelju";
$lang['frequence_vis'] = "posjeta";
$lang['frequence_visit'] = "1 posjeta"; // (graph)
$lang['frequence_visits'] = "%s posjeta"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Informacije o učitavanju stranica";
$lang['pagesvues_joursel'] = "Odabrani dan";
$lang['pagesvues_jmoins7'] = "prije tjedan dana";
$lang['pagesvues_jmoins14'] = "prije 2 tjedna";
$lang['pagesvues_moyenne'] = "(prosjek)";
$lang['pagesvues_pagesvues'] = "Pregled stranica";
$lang['pagesvues_pagesvudiff'] = "Jedinstveni pregledi stranica";
$lang['pagesvues_recordpages'] = "Najveći broj pregledanih stranica za jednog posjetitelja";
$lang['pagesvues_tabdetails'] = "Pregledane stranice (od %s do %s)"; // (from 1 to 21)
$lang['pagesvues_graphsnbpages'] = "Graf za prikaz broja posjetitelja prema broju učitanih stranica";
$lang['pagesvues_graphnbvisitespageimg'] = "Broj posjeta prema učitavanjima stranica";
$lang['pagesvues_graphheureserveur'] = "Graf za prikaz broja učitavanja stranica po vremenu servera";
$lang['pagesvues_graphheureserveurimg'] = "Učitavanja po vremenu servera";
$lang['pagesvues_graphheurevisiteur'] = "Graf za prikaz broja učitavanja stranica po lokalnom vremenu posjetitelja";
$lang['pagesvues_graphpageslocalimg'] = "Učitavanja po lokalnom vremenu";
$lang['pagesvues_tempsparpage'] = "Vrijeme po stranici";
$lang['pagesvues_total_time'] = "Ukupno vrijeme";
$lang['pagesvues_avg_time'] = "Prosječno vrijeme";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Kretanje posjetitelja";
$lang['suivi_pageentree'] = "Ulazne stranice";
$lang['suivi_pagesortie'] = "Izlazne stranice";
$lang['suivi_tauxsortie'] = "Izlazni postotak";
$lang['suivi_pageentreehits'] = "Ulaznih klikova";
$lang['suivi_pagesortiehits'] = "Izlaznih klikova";
$lang['suivi_singlepage'] = "Posjetitelji s jednim učitavanjem";

//
// Origin
//
$lang['provenance_titre'] = "Porijeklo posjetitelja";
$lang['provenance_recappays'] = "Sažetak država";
$lang['provenance_pays'] = "Države";
$lang['provenance_paysimg'] = "Dijagram posjetitelja po državi";
$lang['provenance_fai'] = "Pružatelj internet usluga";
$lang['provenance_nbpays'] = "Broj različitih država : %s";
$lang['provenance_provider'] = "ISP"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "Kontinent";
$lang['provenance_mappemonde'] = "Karta svijeta";
$lang['provenance_interetspays'] = "Detalji o državama";

//
// Setup
//
$lang['configurations_titre'] = "Postavke posjetitelja";
$lang['configurations_os'] = "Operacijski sustav";
$lang['configurations_osimg'] = "Graf za prikaz posjetiteljevog operativnog sustava";
$lang['configurations_navigateurs'] = "Preglednici";
$lang['configurations_navigateursimg'] = "Graf za prikaz posjetiteljevih preglednika";
$lang['configurations_resolutions'] = "Rezolucije ekrana";
$lang['configurations_resolutionsimg'] = "Graf za prikaz posjetiteljevih rezolucija ekrana";
$lang['configurations_couleurs'] = "Dubina boja";
$lang['configurations_couleursimg'] = "Graf za prikaz posjetiteljevih \"dubina boja\"";
$lang['configurations_rapport'] = "Normalno/preko cijelog ekrana";
$lang['configurations_large'] = "Preko cijelog ekrana";
$lang['configurations_normal'] = "Normalno";
$lang['configurations_double'] = "Na dva ekrana";
$lang['configurations_plugins'] = "Dodaci u pregledniku";
$lang['configurations_navigateursbytype'] = "Preglednici (po tipu)"; // TODO : translate
$lang['configurations_navigateursbytypeimg'] = "Graf za prikaz preglednika po tipu"; // TODO : translate
$lang['configurations_os_interest'] = "Detalji o operacijskim sustavima";
$lang['configurations_navigateurs_interest'] = "Detalji o preglednicima";
$lang['configurations_resolutions_interest'] = "Detalji o rezolucijama";
$lang['configurations_couleurs_interest'] = "Detalji o dubinama boja";
$lang['configurations_configurations'] = "Osnovne postavke";

//
// Referers
//
$lang['affluents_titre'] = "Izvor posjeta";
$lang['affluents_recapimg'] = "Dijagram posjetitelja po izvorima posjeta";
$lang['affluents_directimg'] = "Direktno";
$lang['affluents_sitesimg'] = "Websajt";
$lang['affluents_moteursimg'] = "Tražilice";
$lang['affluents_referrersimg'] = "Izvori posjeta";
$lang['affluents_moteurs'] = "Tražilice";
$lang['affluents_nbparmoteur'] = "Posjete s tražilica : %s";
$lang['affluents_aucunmoteur'] = "Nema posjeta s tražilica.";
$lang['affluents_motscles'] = "Ključne riječi";
$lang['affluents_nbmotscles'] = "Različite ključne riječi : %s";
$lang['affluents_aucunmotscles'] = "Nema ključnih riječi.";
$lang['affluents_sitesinternet'] = "Web-sajtovi";
$lang['affluents_nbautressites'] = "Posjete s ostalih web sajtova : %s";
$lang['affluents_nbautressitesdiff'] = "Broj različitih web sajtova : %s";
$lang['affluents_aucunautresite'] = "Nema posjeta s ostalih web sajtova.";
$lang['affluents_entreedirecte'] = "Direktni zahtjev";
$lang['affluents_nbentreedirecte'] = "Posjete s direktnim zahtjevom : %s";
$lang['affluents_nbpartenaires'] = "Posjete od strane partnera : %s";
$lang['affluents_aucunpartenaire'] = "Nema posjeta od strane partnera.";
$lang['affluents_nbnewsletters'] = "Posjete ostvarene newsletterima : %s";
$lang['affluents_aucunnewsletter'] = "Nema ostvarenih posjeta newsletterima.";
$lang['affluents_details'] = "Detalji"; // In the results of the referers array
$lang['affluents_interetsmoteurs'] = "Detalji o tražilicama";
$lang['affluents_interetsmotscles'] = "Detalji o ključnim riječima";
$lang['affluents_interetssitesinternet'] = "Detalji o web-sajtovima";
$lang['affluents_partenairesimg'] = "Partneri";
$lang['affluents_partenaires'] = "Partneri";
$lang['affluents_interetspartenaires'] = "Detalji o partnerima";
$lang['affluents_newslettersimg'] = "Newsletteri";
$lang['affluents_newsletters'] = "Newsletteri";
$lang['affluents_interetsnewsletters'] = "Detalji o newsletterima";
$lang['affluents_type'] = "Detalji o izvorima dolazaka";
$lang['affluents_interetstype'] = "Detalji o pristupu";

//
// Summary
//
$lang['purge_titre'] = "Sažetak o posjetama i referalima";
$lang['purge_intro'] = "Ovaj period je uklonjen u administraciji, zadržana je samo osnovna statistika";
$lang['admin_purge'] = "Održavanje baze";
$lang['admin_purgeintro'] = "Ovaj dio vam omogućava upravljanje tablicama koje koristi phpMyVisites. Možete vidjeti koliko diskovnog prostora zauzimaju tablice, možete ih optimizirati ili ukloniti stare zapise. To će Vam omogućiti da ograničite veličinu tablica u vašoj bazi.";
$lang['admin_optimisation'] = "Optimizacija [ %s ]..."; // Tables names
$lang['admin_postopt'] = "Ukupna veličina je smanjena za %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Ukloni sljedeće periode: %s";
$lang['admin_purge_fini'] = "Brisanje tablica je završeno...";
$lang['admin_bdd_nom'] = "Ime";
$lang['admin_bdd_enregistrements'] = "Zapisa";
$lang['admin_bdd_taille'] = "Ukupna veličina";
$lang['admin_bdd_opt'] = "Optimiziraj";
$lang['admin_bdd_purge'] = "Pročisti kriterije";
$lang['admin_bdd_optall'] = "Optimiziraj sve";
$lang['admin_purge_j'] = "Ukloni zapise starije od %s dana";
$lang['admin_purge_s'] = "Ukloni zapise starije od %s tjedana";
$lang['admin_purge_m'] = "Ukloni zapise starije od %s mjeseci";
$lang['admin_purge_y'] = "Ukloni zapise starije od %s godina";
$lang['admin_purge_logs'] = "Ukloni sve bilješke";
$lang['admin_purge_autres'] = "Pročisti tablicu '%s'";
$lang['admin_purge_none'] = "Nema mogućih akcija";
$lang['admin_purge_cal'] = "Izračunaj i očisti (može potrajati par trenutaka)";
$lang['admin_alias_title'] = "Websajt aliasi i adrese";
$lang['admin_partner_title'] = "Websajt partneri";
$lang['admin_newsletter_title'] = "Websajt newsletteri";
$lang['admin_ip_exclude_title'] = "Intervali IP adresa za isključiti iz statistike";
$lang['admin_name'] = "Ime:";
$lang['admin_error_ip'] = "IP adresa mora biti u odgovarajućem obliku: %s";
$lang['admin_site_name'] = "Ime sajta";
$lang['admin_site_url'] = "Glavna adresa sajta";
$lang['admin_db_log'] = "Pokušajte se logirati kao phpMyVisites Super User da bi promjenili postavke baze.";
$lang['admin_error_critical'] = "Greška, mora biti popravljeno da bi phpMyVisites mogao raditi.";
$lang['admin_warning'] = "Upozorenje, phpMyVisites će raditi ispravno, ali možda neke dodatne opcije neće.";
$lang['admin_move_group'] = "Premjesti u grupu:";
$lang['admin_move_select'] = "Odaberi grupu";

//
// Setup
//
$lang['admin_intro'] = "Dobrodošli u phpMyVisites konfiguracijsko područje. Možete mijenjati sve informacije koje su vezane za instalaciju. Ako imate bilo kakvih problema, tada se ne ustručavajte pogledati %s službenu dokumentaciju phpMyVisites-a %s."; // link to the doc
$lang['admin_configetperso'] = "Općenite postavke";
$lang['admin_afficherjavascript'] = "Prikaži JavaScript kôd za statistiku";
$lang['admin_cookieadmin'] = "Ignoriraj administratora u statistici";
$lang['admin_ip_ranges'] = "Nemoj ubrojati sljedeću IP adresu/IP interval u statistiku";
$lang['admin_sitesenregistres'] = "Zapisani web sajtovi:";
$lang['admin_retour'] = "Nazad";
$lang['admin_cookienavigateur'] = "Možete ignorirati administratora u statistici. Ta metoda je bazirana na cookie-ima i ta opcija će raditi samo na trenutnom pregledniku. Ovu opciju možete promijeniti bilo kada.";
$lang['admin_prendreencompteadmin'] = "Ubroji i administratora u statistiku (obriši cookie)";
$lang['admin_nepasprendreencompteadmin'] = "Ignoriraj administratora u statistici (kreiraj cookie)";
$lang['admin_etatcookieoui'] = "Administrator će biti ubrojen u statistiku za ovaj sajt. (To je unaprijed određena postavka, smatrani ste kao običan posjetitelj)";
$lang['admin_etatcookienon'] = "Neće biti ubrojeni u statistiku za ovaj web sajt (Vaši posjeti neće biti ubrojeni u statistiku)";
$lang['admin_deleteconfirm'] = "Potvrdite da želite obrisati %s?";
$lang['admin_sitedeletemessage'] = "Molimo Vas da <u>budete vrlo pažljivi</u>: svi podaci vezani za ovaj sajt će biti obrisani i nakon toga više neće moći vratiti te podatke.";
$lang['admin_confirmyes'] = "Da, želim obrisati";
$lang['admin_confirmno'] = "Ne, ne želim obrisati";
$lang['admin_nonewsletter'] = "Nema pronađenih newslettera za ovaj sajt!";
$lang['admin_nopartner'] = "Nema pronađenih partnera za ovaj sajt!";
$lang['admin_get_question'] = "Zapisati GET varijable? (URL varijable)";
$lang['admin_get_a1'] = "Zapisati SVE URL varijable";
$lang['admin_get_a2'] = "Nemoj zapisati NI JEDNU varijablu";
$lang['admin_get_a3'] = "Zapiši samo određene varijable";
$lang['admin_get_a4'] = "Zapiši sve OSIM navedenih varijabli";
$lang['admin_get_list'] = "Imena varijabli (<b>;</b> za odvajanje imena) <br/>Primjer : %s";
$lang['admin_required'] = "%s je potrebno.";
$lang['admin_title_required'] = "Potrebno";
$lang['admin_write_dir'] = "Direktoriji u koje se može zapisivati";
$lang['admin_chmod_howto'] = "U ove direktorije server mora moći zapisivati. To znači da morate promijeniti nad njim chmod na 777 sa svojim FTP klijentom (desni klik na direktorji -> Permissions (ili chmod))";
$lang['admin_optional'] = "nije zahtjevano";
$lang['admin_memory_limit'] = "Memorijsko ograničenje";
$lang['admin_allowed'] = "dopušteno";
$lang['admin_webserver'] = "Web server";
$lang['admin_server_os'] = "OS servera";
$lang['admin_server_time'] = "Vrijeme na serveru";
$lang['admin_legend'] = "Legenda:";
$lang['admin_error_url'] = "URL mora biti u odgovarajućem obliku : %s (bez kose crte na kraju)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URL aliasi";
$lang['admin_logo_question'] = "Prikazati logo?";
$lang['admin_type_again'] = "(upiši ponovno)";
$lang['admin_admin_mail'] = "Super Administrator e-mail";
$lang['admin_admin'] = "Super Administrator";
$lang['admin_phpmv_path'] = "Cijela putanja do phpMyVisites aplikacije";
$lang['admin_valid_email'] = "E-mail adresa mora biti ispravna";
$lang['admin_valid_pass'] = "Lozinka mora biti kompliciranija (najmanje 6 znakova, mora sadržavati broj(eve))";
$lang['admin_match_pass'] = "Lozinke se ne podudaraju";
$lang['admin_no_user_group'] = "Nema korisnika u ovoj grupi za ovaj sajt";
$lang['admin_recorded_nl'] = "Zapisani newsletteri:";
$lang['admin_recorded_partners'] = "Zapisani partneri:";
$lang['admin_recorded_users'] = "Zapisani korisnici:";
$lang['admin_select_site_title'] = "Odaberite sajt";
$lang['admin_select_user_title'] = "Odaberite korisnika";
$lang['admin_no_user_registered'] = "Nema korisnika!";
$lang['admin_configuration'] = "Konfiguracija";
$lang['admin_general_conf'] = "Općenita konfiguracija";
$lang['admin_group_title'] = "Upravljanje grupama (dozvolama)";
$lang['admin_user_title'] = "Upravljanje korisnicima";
$lang['admin_user_add'] = "Dodaj korisnika";
$lang['admin_user_mod'] = "Modificiraj korisnika";
$lang['admin_user_del'] = "Izbriši korisnika";
$lang['admin_server_info'] = "Informacije o serveru";
$lang['admin_send_mail'] = "Pošalji statistiku mailom";
$lang['admin_rss_feed'] = "Statistika kroz RSS kanal";
$lang['admin_site_admin'] = "Administracija sajta";
$lang['admin_site_add'] = "Dodaj sajt";
$lang['admin_site_mod'] = "Modificiraj sajt";
$lang['admin_site_del'] = "Izbriši sajt";
$lang['admin_nl_add'] = "Dodaj newsletter";
$lang['admin_nl_mod'] = "Modificiraj newsletter";
$lang['admin_nl_del'] = "Izbriši newsletter";
$lang['admin_partner_add'] = "Dodaj partnera";
$lang['admin_partner_mod'] = "Modificiraj partnerovo ime i URL";
$lang['admin_partner_del'] = "Izbriši partnera";
$lang['admin_url_alias'] = "Upravljanje URL aliasima";
$lang['admin_group_admin_n'] = "Pregledaj statistiku + dozvole administratora";
$lang['admin_group_admin_d'] = "Korisnici mogu pregledati statistiku sajta i izmjeniti informacije o sajtu (ime, dodati cookie, isključiti opsege IP adresa, upravljati URLovima aliasima/partnera/newslettera, itd.)";
$lang['admin_group_view_n'] = "Pregledaj statistiku";
$lang['admin_group_view_d'] = "Korisnici mogu samo vidjeti statistiku sajta. Nema svih dozvola.";
$lang['admin_group_noperm_n'] = "Nema dozvola";
$lang['admin_group_noperm_d'] = "Korisnici u ovoj grupi nema nikakve dozvole za pregled statistike ili izmjenu podataka.";
$lang['admin_group_stitle'] = "Možete izmjeniti grupu u kojoj se korisnik nalazi tako što odaberete korisnika kojeg želite prebaciti i onda odaberete grupu u koju ga želite prebaciti";
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
$lang['install_loginmysql'] = "Korisničko ime za bazu";
$lang['install_mdpmysql'] = "Lozinka za bazu";
$lang['install_serveurmysql'] = "Server baze (obično 'localhost')";
$lang['install_basemysql'] = "Ime baze";
$lang['install_prefixetable'] = "Prefiks tablica";
$lang['install_utilisateursavances'] = "Napredni korisnici (nije obvezno)";
$lang['install_oui'] = "Da";
$lang['install_non'] = "Ne";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Problem: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Server ne može zapisivati u direktorije(s) %s Provjerite da li imate odgovarajuće dozvole za kreiranje datoteka na serveru (pokušajte na te direktorije postaviti CHMOD na 755 sa svojim FTP klijentom : desni klik na direktoriji -> Permissions (ili CHMOD). <br/><br/>Ako CHMOD ne radi s vašim FTP klijentom, tada pokušajte obrisati (ako postoje) te direktorije, i kreirati ih sa svojim FTP klijentom.";
$lang['install_loginadmin'] = "Korisničko ime administratora:";
$lang['install_mdpadmin'] = "Lozinka administratora:";
$lang['install_chemincomplet'] = "Cijela putanja do phpMyVisites aplikacije (npr. http://www.mysite.com/rep1/rep3/phpmyvisites/). Putanja mora završiti sa <strong>/</strong>.";
$lang['install_afficherlogo'] = "Prikaži logo na stranicama? %s <br />By allowing the display of the logo on your site, you will help publicize phpMyVisites and help it evolve more rapidly.  It is also a way to thank the author who has spent many hours developing this Open Source, free application."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Prikaži statističke grafove.";
$lang['install_valider'] = "Proslijedi"; //  during installation and for login
$lang['install_popup_logo'] = "Odaberite logo";
$lang['install_logodispo'] = "Pogledajte različite dostupne logo-e";
$lang['install_welcome'] = "Dobrodošli!";
$lang['install_system_requirements'] = "Zahtjevi sustava";
$lang['install_database_setup'] = "Postavke baze";
$lang['install_create_tables'] = "Kreiranje tablica";
$lang['install_general_setup'] = "Općenito";
$lang['install_create_config_file'] = "Kreiranje konfiguracijske datoteke";
$lang['install_first_website_setup'] = "Dodavanje prvog web-sajta";
$lang['install_display_javascript_code'] = "Prikaži Javascript kod";
$lang['install_finish'] = "Gotovo!";
$lang['install_txt2'] = "Na kraju instalacije, bit će napravljen zahtjev na službenom sajtu što nam pomaže da vidimo koliko ljudi koristi phpMyVisites. Hvala na razumjevanju.";
$lang['install_database_setup_txt'] = "Upišite postavke za vašu bazu.";
$lang['install_general_config_text'] = "phpMyVisites će imati samo jednog administratora koji će imati potpuni pristup pregledima i izmjenama podataka. Odaberite korisničko ime i lozinku za super administrator korisnički račun. Ostale korisnike možete kasnije ubaciti.";
$lang['install_config_file'] = " Podaci o Administratoru su uspješno ubačeni.";
$lang['install_js_code_text'] = "<p>Da bi ubrojali sve posjete, morate ubaciti javascript kod na sve svoje stranice. </p><p> Vaše stranice ne moraju biti napravljene u PHP-u, <strong>phpMyVisites će raditi na svim tipovima stranica (bilo da se radi o HTML-u, ASP-u, Perl-u ili bilo kojem drugom jeziku).</strong> </p><p> Ovdje je kod koji morate ubaciti: (copy/paste na sve svoje stranice) </p>";
$lang['install_intro'] = "Dobrodošli u phpMyVisites instalaciju."; 
$lang['install_intro2'] = "Ovaj proces je podjeljen u %s laganih koraka i trajat će oko 10 minuta.";
$lang['install_next_step'] = "Sljedeći korak";
$lang['install_status'] = "Status instalacije";
$lang['install_done'] = "Instalacija je %s%% gotova"; // Install 25% complete
$lang['install_site_success'] = "Web-sajt je uspješno kreiran!";
$lang['install_site_info'] = "Unesite sve informacije o vašem prvom sajtu.";
$lang['install_go_phpmv'] = "Idi na phpMyVisites!";
$lang['install_congratulation'] = "Čestitamo! Vaša instalacija phpMyVisites aplikacije je gotova.";
$lang['install_end_text'] = "Budite sigurni da se vaš javascript kod nalazi na svim stranicama i pričekajte vaše prve posjetitelje!";
$lang['install_db_ok'] = "Konektiranje na bazu je OK!";
$lang['install_table_exist'] = "phpMyVisites tablice već postoje u bazi.";
$lang['install_table_choice'] = "Odaberite da li želite koristiti već postojeće tablice ili odaberite čistu instalaciju koja će obrisati sve podatke u već postojećim tablicama.";
$lang['install_table_erase'] = "Obriši sve podatke u tablicama (budite pažljivi!)";
$lang['install_table_reuse'] = "Koristi već postojeće tablice";
$lang['install_table_success'] = "Tablice su uspješno kreirane!";
$lang['install_send_mail'] = "Svaki dan primaj e-mail sa sažetom statistikom prethodnog dana?";

//
// Update Step
//
$lang['update_title'] = "Nadogradi phpMyVisites";
$lang['update_subtitle'] = "Ustanovili smo da nadograđujete phpMyVisites.";
$lang['update_versions'] = "Vaša prijašnja verzija je %s i nadograđujemo ju na %s.";
$lang['update_db_updated'] = "Baza je uspješno nadograđena!";
$lang['update_continue'] = "Nastavi prema phpMyVisites aplikaciji";
$lang['update_jschange'] = "Upozorenje! <br /> phpMyVisites javascript kôd je promjenjen. MORATE zamijeniti stari kôd (napraviti copy/paste) sa novim phpMyVisites JavaScript-om na SVIM konfiguriranim sajtovima. <br /> Promjene u Javascript-u su znatne. Ispričavamo se što Vam pravimo probleme ovom izmjenom.";

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
$lang['tdate1'] = "%daylong%, %daynumeric%. %monthlong% %yearlong%.";

// Monday 10
$lang['tdate2'] = "%daylong%, %daynumeric%.";

// Week February 10 To February 17 2004
$lang['tdate3'] = "Tjedan %daynumeric%. %monthlong% do %daynumeric2%. %monthlong2% %yearlong%.";

// February 2004 Month
$lang['tdate4'] = "Mjesec %monthlong%, %yearlong%.";

// December 2003
$lang['tdate5'] = "%monthlong%, %yearlong%.";

// 10 Febuary week
$lang['tdate6'] = "Tjedan %daynumeric%. %monthlong%";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%daynumeric%.%monthnumeric%.%yearlong%.";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = "%dayshort% %daynumeric%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9'] = " Tjedan %daynumeric%.%monthshort%";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%monthshort%, '%yearshort%";

// Year 2004
$lang['tdate11'] = "Godina %yearlong%.";

// 2004
$lang['tdate12'] = "%yearlong%.";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "Siječanj";
$lang['moistab']['02'] = "Veljača";
$lang['moistab']['03'] = "Ožujak";
$lang['moistab']['04'] = "Travanj";
$lang['moistab']['05'] = "Svibanj";
$lang['moistab']['06'] = "Lipanj";
$lang['moistab']['07'] = "Srpanj";
$lang['moistab']['08'] = "Kolovoz";
$lang['moistab']['09'] = "Rujan";
$lang['moistab']['10'] = "Listopad";
$lang['moistab']['11'] = "Studeni";
$lang['moistab']['12'] = "Prosinac";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Sij";
$lang['moistab_graph']['02'] = "Velj";
$lang['moistab_graph']['03'] = "Ožu";
$lang['moistab_graph']['04'] = "Tra";
$lang['moistab_graph']['05'] = "Svi";
$lang['moistab_graph']['06'] = "Lip";
$lang['moistab_graph']['07'] = "Srp";
$lang['moistab_graph']['08'] = "Kol";
$lang['moistab_graph']['09'] = "Ruj";
$lang['moistab_graph']['10'] = "Lis";
$lang['moistab_graph']['11'] = "Stu";
$lang['moistab_graph']['12'] = "Pro";

// Day of the week
$lang['jsemaine']['Mon'] = "Ponedjeljak";
$lang['jsemaine']['Tue'] = "Utorak";
$lang['jsemaine']['Wed'] = "Srijeda";
$lang['jsemaine']['Thu'] = "Četvrtak";
$lang['jsemaine']['Fri'] = "Petak";
$lang['jsemaine']['Sat'] = "Subota";
$lang['jsemaine']['Sun'] = "Nedjelja";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Pon";
$lang['jsemaine_graph']['Tue'] = "Uto";
$lang['jsemaine_graph']['Wed'] = "Sri";
$lang['jsemaine_graph']['Thu'] = "Čet";
$lang['jsemaine_graph']['Fri'] = "Pet";
$lang['jsemaine_graph']['Sat'] = "Sub";
$lang['jsemaine_graph']['Sun'] = "Ned";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "P";
$lang['calendrier_jours'][1] = "U";
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
$lang['eur'] = "Europa";
$lang['afr'] = "Afrika";
$lang['asi'] = "Azija";
$lang['ams'] = "Južna Amerika";
$lang['amn'] = "Sjeverna i Centralna Amerika";
$lang['oce'] = "Oceanija";

// Oceans
$lang['oc_pac'] = "Tihi Ocean";
$lang['oc_atl'] = "Atlantski Ocean";
$lang['oc_ind'] = "Indijski Ocean";

// Countries
$lang['domaines'] = array(
    "xx" => "Nepoznato",
    "ac" => "Ascensionski Otoci",
    "ad" => "Andora",
    "ae" => "Ujedinjeni Arapski Emirati",
    "af" => "Afganistan",
    "ag" => "Antigva i Barbuda",
    "ai" => "Anguilla",
    "al" => "Albanija",
    "am" => "Armenija",
    "an" => "Nizozemski Antili",
    "ao" => "Angola",
    "aq" => "Antarktika",
    "ar" => "Argentina",
    "as" => "Američka Samoa",
    "at" => "Austrija",
    "au" => "Australija",
    "aw" => "Aruba",
    "az" => "Azerbeidžan",
    "ba" => "Bosna i Hercegovina",
    "bb" => "Barbados",
    "bd" => "Bangladeš",
    "be" => "Belgija",
    "bf" => "Burkina Faso",
    "bg" => "Bugarska",
    "bh" => "Bahrajn",
    "bi" => "Burundi",
    "bj" => "Benin",
    "bm" => "Bermuda",
    "bn" => "Bruneo",
    "bo" => "Bolivija",
    "br" => "Brazil",
    "bs" => "Bahami",
    "bt" => "Butan",
    "bv" => "Bouvet Island",
    "bw" => "Bocvana",
    "by" => "Bjelorusija",
    "bz" => "Belize",
    "ca" => "Kanada",
    "cc" => "Kokosovo otočje",
    "cd" => "Kongo, Demokratska Republika",
    "cf" => "Srednjeafrička Republika",
    "cg" => "Kongo",
    "ch" => "Švicarska",
    "ci" => "Obala Bjelokosti",
    "ck" => "Cookovo Otočje",
    "cl" => "Čile",
    "cm" => "Kamerun",
    "cn" => "Kina",
    "co" => "Kolumbija",
    "cr" => "Kosta Rika",
	"cs" => "Crna Gora",
    "cu" => "Kuba",
    "cv" => "Kape Verde",
    "cx" => "Božični Otok",
    "cy" => "Cipar",
    "cz" => "Češka Republika",
    "de" => "Njemačka",
    "dj" => "Džibuti",
    "dk" => "Danska",
    "dm" => "Dominika",
    "do" => "Dominikanska Republika",
    "dz" => "Alžir",
    "ec" => "Ekvador",
    "ee" => "Estonija",
    "eg" => "Egipat",
    "eh" => "Zapadna Sahara",
    "er" => "Eritreja",
    "es" => "Španjolska",
    "et" => "Etiopija",
    "fi" => "Finska",
    "fj" => "Fiži",
    "fk" => "Falklandsko Otočje (Maldivi)",
    "fm" => "Mikronezija",
    "fo" => "Otočje Faroe",
    "fr" => "Francuska",
    "ga" => "Gabon",
    "gd" => "Grenada",
    "ge" => "Gruzija",
    "gf" => "Francuska Gvajana",
    "gg" => "Guernsey",
    "gh" => "Gana",
    "gi" => "Gibraltar",
    "gl" => "Grenland",
    "gm" => "Gambija",
    "gn" => "Gvineja",
    "gp" => "Guadalupe",
    "gq" => "Ekvatorska Gvineja",
    "gr" => "Grčka",
    "gs" => "Južna Georgija i Južni Sandwichevi Otoci",
    "gt" => "Gvatemala",
    "gu" => "Guam",
    "gw" => "Guineja-Bisau",
    "gy" => "Gvajana",
    "hk" => "Hong Kong",
    "hm" => "Heardovo i McDonaldsovo Otočje",
    "hn" => "Honduras",
    "hr" => "Hrvatska",
    "ht" => "Haiti",
    "hu" => "Mažarska",
    "id" => "Indonesija",
    "ie" => "Irska",
    "il" => "Izrael",
    "im" => "Otok Man",
    "in" => "Indija",
    "io" => "Britanski teritorij u Indijskom oceanu",
    "iq" => "Irak",
    "ir" => "Iran, Islamska Republika",
    "is" => "Island",
    "it" => "Italija",
    "je" => "Jersey",
    "jm" => "Jamajka",
    "jo" => "Jordan",
    "jp" => "Japan",
    "ke" => "Kenija",
    "kg" => "Kirgistan",
    "kh" => "Kambodža",
    "ki" => "Kiribati",
    "km" => "Komori",
    "kn" => "Sveti Kitts i Nevis",
    "kp" => "Koreja, Demokratska Republika",
    "kr" => "Južna Korea",
    "kw" => "Kuvajt",
    "ky" => "Kajmansko Otočje",
    "kz" => "Kazahstan",
    "la" => "Laos",
    "lb" => "Libanon",
    "lc" => "Sveta Lucija",
    "li" => "Lihtenšajn",
    "lk" => "Šri Lanka",
    "lr" => "Liberija",
    "ls" => "Lesoto",
    "lt" => "Litva",
    "lu" => "Luksemburg",
    "lv" => "Latvija",
    "ly" => "Libija",
    "ma" => "Moroko",
    "mc" => "Monako",
    "md" => "Republika Moldavija",
    "mg" => "Madagaskar",
    "mh" => "Maršalovo Otočje",
    "mk" => "Makedonija",
    "ml" => "Mali",
    "mm" => "Mjanmar",
    "mn" => "Mongolija",
    "mo" => "Makao",
    "mp" => "Sjeverno Marijansko Otočje",
    "mq" => "Martinik",
    "mr" => "Mauritanija",
    "ms" => "Montserat",
    "mt" => "Malta",
    "mu" => "Mauritius",
    "mv" => "Maldivi",
    "mw" => "Malavi",
    "mx" => "Meksiko",
    "my" => "Malezija",
    "mz" => "Mozambik",
    "na" => "Namibija",
    "nc" => "Nova Kaledonija",
    "ne" => "Niger",
    "nf" => "Norfolški Otoci",
    "ng" => "Nigerija",
    "ni" => "Nikaragva",
    "nl" => "Nizozemska",
    "no" => "Norveška",
    "np" => "Nepal",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "Novi Zeland",
    "om" => "Oman",
    "pa" => "Panama",
    "pe" => "Peru",
    "pf" => "Francuska Polinesija",
    "pg" => "Papua Nova Gvineja",
    "ph" => "Filipini",
    "pk" => "Pakistan",
    "pl" => "Poljska",
    "pm" => "Sveti Pierre i Miquelon",
    "pn" => "Pitcairn",
    "pr" => "Portoriko",
	"ps" => "Palestinski Teritorij",
    "pt" => "Portugal",
    "pw" => "Palau",
    "py" => "Paragvaj",
    "qa" => "Katar",
    "re" => "Otok Reunion",
    "ro" => "Rumunjska",
    "ru" => "Ruska Federacija",
    "rs" => "Rusija",
    "rw" => "Ruanda",
    "sa" => "Saudijska Arabija",
    "sb" => "Solomonsko Otočje",
    "sc" => "Sejšeli",
    "sd" => "Sudan",
    "se" => "Švedska",
    "sg" => "Singapur",
    "sh" => "Sveta Helena",
    "si" => "Slovenija",
    "sj" => "Svalbard",
    "sk" => "Slovačka",
    "sl" => "Siera Leone",
    "sm" => "San Marino",
    "sn" => "Senegal",
    "so" => "Somalija",
    "sr" => "Suriname",
    "st" => "Sao Tome i Principe",
    "su" => "Stari SSSR",
    "sv" => "El Salvador",
    "sy" => "Sirija",
    "sz" => "Svaziland",
    "tc" => "Turks i Caicos Otočje",
    "td" => "Čad",
    "tf" => "Francuski Južni Teritorij",
    "tg" => "Togo",
    "th" => "Tajland",
    "tj" => "Tadžikistan",
    "tk" => "Tokelau",
    "tm" => "Turkmenistan",
    "tn" => "Tunisija",
    "to" => "Tonga",
    "tp" => "Istočni Timor",
    "tr" => "Turska",
    "tt" => "Trinidad i Tobago",
    "tv" => "Tuvalu",
    "tw" => "Tajvan, Kineska provincija",
    "tz" => "Tanzanija",
    "ua" => "Ukrajina",
    "ug" => "Uganda",
    "uk" => "Ujedinjeno Kraljevstvo",
    "gb" => "Velika Britanija",
    "um" => "United States Minor Outlying Islands",
    "us" => "Sjedinjene Američke Države",
    "uy" => "Urugvaj",
    "uz" => "Uzbekistan",
    "va" => "Vatican",
    "vc" => "Sveti Vincent i Grenadin",
    "ve" => "Venecuela",
    "vg" => "Britansko Djevičansko Otočje",
    "vi" => "Američko Djevičansko Otočje",
    "vn" => "Vijetnam",
    "vu" => "Vanuatu",
    "wf" => "Wallis i Futuna",
    "ws" => "Samoa",
    "ye" => "Jemen",
    "yt" => "Majote",
    "yu" => "Srbija",
    "za" => "Južnoafrička Republika",
    "zm" => "Zambija",
    "zr" => "Zair",
    "zw" => "Zimbabve",
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