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
$lang['auteur_nom'] = "Original: Manuel Sammeth - Improvements: André Fliß"; // Translator's name
$lang['auteur_email'] = "brontalus@web.de"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "de"; // iso language code
$lang['lang_libelle_en'] = "German"; // english language name
$lang['lang_libelle_fr'] = "Allemand"; // french language name
$lang['unites_bytes'] = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
$lang['separateur_milliers'] = '.'; // three thousand spells 3,000 in english
$lang['separateur_decimaux'] = ','; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | open source Website-Statistik- und Traffic-Analyse-Programm"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, script, Application, software, Statistik, referals, stats, free, open source, gpl, volumen, Besucher, visits, visitors, mysql, viewed pages, pages, views, number of visits, graphs, Browsers, os, operating system, resolutions, day, week, month, records, country, host, service providors, search enginge, key words, referrers, graphs, entry pages, exit pages, pie charts"; // Header keywords
$lang['head_description'] = "phpMyVisites | Ein Open Source-Website-Statistikprogramm in PHP/MySQL veröffentlicht unter der GNU/GPL."; // Header description
$lang['logo_description'] = "phpMyVisites : Ein Open Source-Website-Statistikprogramm in PHP/MySQL veröffentlicht unter der GNU/GPL."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Besucher";
$lang['menu_pagesvues'] = "Besuchte Seiten";
$lang['menu_suivi'] = "Follow-Up";
$lang['menu_provenance'] = "Ursprung";
$lang['menu_configurations'] = "Konfigurationen der Besucher";
$lang['menu_affluents'] = "Verweise";
$lang['menu_listesites'] = "Seiten auflisten";
$lang['menu_bilansites'] = "Zusammenfassung";
$lang['menu_jour'] = "Tag";
$lang['menu_semaine'] = "Woche";
$lang['menu_mois'] = "Monat";
$lang['menu_annee'] = "Jahr";
$lang['menu_periode'] = "analysierter Zeitraum: %s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "Offizielle Website";
$lang['liens_admin'] = "Administration";
$lang['liens_contacts'] = "Kontakt";

//
// Divers
//
$lang['generique_nombre'] = "Anzahl";
$lang['generique_tauxsortie'] = "Ausstiegs-Rate";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Seite wurde in %s Sekunden generiert"; // Time in seconds
$lang['generique_divers'] = "Andere"; // (for the graphs)
$lang['generique_inconnu'] = "Unknown"; // (for the graphs)
$lang['generique_vous'] = "... Sie ?";
$lang['generique_traducteur'] = "Übersetzer";
$lang['generique_langue'] = "Sprache";
$lang['generique_autrelangure'] = "Andere?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "Keine Besucher in diesem Zeitraum."; 
$lang['generique_aucune_visite_bdd'] = "<b>Achtung! </b> Kein Besucher aufgezeichnet für diese Site. Stellen Sie sicher, dass Sie den Javascript-Code auf allen Ihren Seiten installiert haben - mit der korrekten phpMyVisites URL <u>IM</u> Javascript-Code. Sehen Sie für weitere Hilfe in der Dokumentation nach.";
$lang['generique_aucune_site_bdd'] = "Keine Site in der Datenbank registriert! Loggen Sie sich als phpMyVisites-Super User ein, um eine neue Website hinzuzufügen.";
$lang['generique_retourhaut'] = "Top";
$lang['generique_tempsvisite'] = "%smin %ss"; // 3min 25s bedeutet 3 Minuten und 25 Sekunden
$lang['generique_tempsheure'] = "%sh"; // 4h bedeutet 4 Stunden
$lang['generique_siteno'] = "Site %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Newsletter %s"; // Newsletter "version 2 Ankündigung"
$lang['generique_partnerno'] = "Partner %s"; // Partner "version 2 Ankündigung"
$lang['generique_general'] = "Allgemein";
$lang['generique_user'] = "User %s"; // User "Admin"
$lang['generique_previous'] = "Vorhergehende";
$lang['generique_next'] = "Nächste";
$lang['generique_lowpop'] = "Wenig besuchte Seiten ausschließen";
$lang['generique_allpop'] = "Wenig besuchte Seiten einschließen";
$lang['generique_to'] = "bis"; // 4 'to' 8
$lang['generique_total_on'] = "von"; // 4 to 8 'on' 10
$lang['generique_total'] = "Insgesamt";
$lang['generique_information'] = "Information";
$lang['generique_done'] = "Fertig!";
$lang['generique_other'] = "Andere";
$lang['generique_description'] = "Beschreibung:";
$lang['generique_name'] = "Name:";
$lang['generique_variables'] = "Variablen";
$lang['generique_logout'] = "Logout";
$lang['generique_login'] = "Login";
$lang['generique_hits'] = "Treffer";
$lang['generique_errors'] = "Fehler";
$lang['generique_site'] = "Site";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "Passwort: "; // lowercase
$lang['login_login'] = "Benutzername: "; // lowercase
$lang['login_error'] = "Einloggen nicht möglich: Passwort oder Login nicht gültig.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "Sie wollen einen %sphpMyVisites%s-geschützten Bereich betreten.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Kontakte";
$lang['contacts_langue'] = "Übersetzungen";
$lang['contacts_merci'] = "Danke!";
$lang['contacts_auteur'] = "Der Autor, Dokumentator, und Entwickler von phpMyVisites ist <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "Für <strong>technische Fragen, Bugs, Anmerkungen</strong> benutzen Sie bitte die offiziellen Website-Foren %s. Bei anderen Fragen nehmen Sie bitte über das offizielle Formular auf der Website mit dem Autor Kontakt auf."; // adresse du site
$lang['contacts_trad1'] = "Möchten Sie phpMyVisites in Ihre Sprache übersetzen? dann zögern Sie nicht, denn  <strong>phpMyVisites braucht Sie!</strong>";
$lang['contacts_trad2'] = "phpMyVisites benötigt ein paar Stunden zum Übersetzen und Sie sollten gute Sprachkenntnisse besitzen. Aber durch <strong>jede Hilfe profitieren sehr viele Anwender</strong>.  Wenn Sie Interesse daran haben, das Programm zu übersetzen, finden Sie alle Informationen in %s der offiziellen Dokumentation von phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "Zögern Sie nicht, %s die offizielle Dokumentation von phpMyVisites zu benutzen%s, weil Sie dort viele nützliche und wichtige Infomationen aus allen Bereichen von phpMyVisites finden können. Sie ist in Ihrer Version von phpMyVisites verfügbar."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Danke <strong>%s</strong>, Mitentwickler von phpMyVisites, für ihre Arbeit am Projekt.";
$lang['contacts_merci3'] = "Bitte besuchen Sie die Danksagungsseite, um alle Freunde von phpMyVisites kennen zu lernen.";
$lang['contacts_merci2'] = "Ein herzliches Danke an alle, die sich die Arbeit gemacht haben, und phpMyVisites übersetzt haben:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Site %s am %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Detaillierte Statistik aufrufen";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Besucher-Informationen";
$lang['visites_statistiques'] = "Statistiken";
$lang['visites_periodesel'] = "In der gewählten Zeit";
$lang['visites_visites'] = "Besuche";
$lang['visites_uniques'] = "Einmalige Besucher";
$lang['visites_pagesvues'] = "besuchte Seiten";
$lang['visites_pagesvisiteurs'] = "Seiten pro Besucher (Durchschnitt)";
$lang['visites_pagesvisites'] = "Seiten pro Besuch (Durchschnitt)"; 
$lang['visites_pagesvisitessign'] = "Seiten pro signifikantem Besuch (mehr als eine angesehene Seite)"; 
$lang['visites_tempsmoyen'] = "Durchschnittliche Verweildauer";
$lang['visites_tempsmoyenpv'] = "Durchschnittliche Betrachtungszeit der einzelnen Seiten";
$lang['visites_tauxvisite'] = "Besucher, die nur eine Seite angesehen haben";
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Besuche gesamt";
$lang['visites_nbvisites'] = "Besuche";
$lang['visites_aucunevivisite'] = "Nicht besucht"; // in the table, must be short
$lang['visites_recap'] = "Ergebnis";
$lang['visites_unepage'] = "1 Seite"; // (graph)
$lang['visites_pages'] = "%s Seiten"; // 1-2 pages (graph)
$lang['visites_min'] = "%s min"; // 10-15 min (graph)
$lang['visites_sec'] = "%s sek"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Besucher - Diagramm";
$lang['visites_grapghrecaplongterm'] = "Grafische Zusammenfassung Langzeitanalyse";
$lang['visites_graphtempsvisites'] = "Dauer der Besuche";
$lang['visites_graphtempsvisitesimg'] = "Dauer der Besuche je Besucher";
$lang['visites_graphheureserveur'] = "Aufrufe je Stunde";
$lang['visites_graphheureserveurimg'] = "Besuche in der Serverzeit";
$lang['visites_graphheurevisiteur'] = "Aufrufe je Besucher und Stunde";
$lang['visites_graphheurelocalimg'] = "Besuche nach Ortszeit";
$lang['visites_longterm_statd'] = "Langzeitanalyse (Tage des Zeitraums)";
$lang['visites_longterm_statm'] = "Langzeitanalyse (Monate des Zeitraums)";

//
// Sites Summary
//
$lang['summary_title'] = "Site Zusammenfassung";
$lang['summary_stitle'] = "Zusammenfassung";

//
// Frequency Part
//
$lang['frequence_titre'] = "Wiederkehrende Besucher";
$lang['frequence_nouveauxconnusgraph'] = "Grafik - neue vs. wiederkehrende Besuche";
$lang['frequence_nouveauxconnus'] = "Neue vs. wiederkehrende Besuche";
$lang['frequence_titremenu'] = "Frequenz";
$lang['frequence_visitesconnues'] = "Wiederkehrende Besuche";
$lang['frequence_nouvellesvisites'] = "Neue Besuche";
$lang['frequence_visiteursconnus'] = "Wiederkehrende Besucher";
$lang['frequence_nouveauxvisiteurs'] = "Neue Besucher";
$lang['frequence_returningrate'] = "Rate Wiederkehr";
$lang['pagesvues_vispervisgraph'] = "Grafik - Anzahl der Besuche pro Besucher";
$lang['frequence_vispervis'] = "Anzahl der Besuche pro Besucher";
$lang['frequence_vis'] = "Besuch";
$lang['frequence_visit'] = "1 Besuch"; // (graph)
$lang['frequence_visits'] = "%s Besuche"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Info besuchte Seiten";
$lang['pagesvues_joursel'] = "ausgewählter Tag:";
$lang['pagesvues_jmoins7'] = "Tag - 7";
$lang['pagesvues_jmoins14'] = "Tag - 14";
$lang['pagesvues_moyenne'] = "(durchschnittlich)";
$lang['pagesvues_pagesvues'] = "Seitenaufrufe";
$lang['pagesvues_pagesvudiff'] = "einmalige Seitenaufrufe";
$lang['pagesvues_recordpages'] = "Höchste Anzahl von Aufrufen von einem Benutzer";
$lang['pagesvues_tabdetails'] = "Seitenaufrufe (von %s bis %s)"; // (from 1 to 21)
$lang['pagesvues_graphsnbpages'] = "Grafik - Besuche nach Anzahl der Seite";
$lang['pagesvues_graphnbvisitespageimg'] = "Besuche nach Anzahl der Seite";
$lang['pagesvues_graphheureserveur'] = "Grafik - Besuche nach Serverzeit";
$lang['pagesvues_graphheureserveurimg'] = "Besuche nach Serverzeit";
$lang['pagesvues_graphheurevisiteur'] = "Grafik - Besuche nach Ortszeit";
$lang['pagesvues_graphpageslocalimg'] = "Besuche nach Ortszeit";
$lang['pagesvues_tempsparpage'] = "Zeit pro Seite";
$lang['pagesvues_total_time'] = "Gesamtzeit";
$lang['pagesvues_avg_time'] = "Durchschnittliche Zeit";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Navigation der Besucher";
$lang['suivi_pageentree'] = "kommend von";
$lang['suivi_pagesortie'] = "gehend nach";
$lang['suivi_tauxsortie'] = "Ausstiegsrate";
$lang['suivi_pageentreehits'] = "Einstiegstreffer";
$lang['suivi_pagesortiehits'] = "Ausstiegstreffer";
$lang['suivi_singlepage'] = "Besuche nur einer Seite";

//
// Origin
//
$lang['provenance_titre'] = "Herkunft der Besucher";
$lang['provenance_recappays'] = "Länderzusammenfassung";
$lang['provenance_pays'] = "Länder";
$lang['provenance_paysimg'] = "Besuchertabelle je Land";
$lang['provenance_fai'] = "Internet Service Provider";
$lang['provenance_nbpays'] = "Anzahl verschiedener Länder: %s";
$lang['provenance_provider'] = "Provider"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "Kontinent";
$lang['provenance_mappemonde'] = "Weltkarte";
$lang['provenance_interetspays'] = "Länder - Einzelheiten";

//
// Setup
//
$lang['configurations_titre'] = "Besuchereinstellungen";
$lang['configurations_os'] = "Betriebssysteme";
$lang['configurations_osimg'] = "Diagramm - benutzte Betriebssysteme";
$lang['configurations_navigateurs'] = "Browser";
$lang['configurations_navigateursimg'] = "Diagram für die benutzten Browser";
$lang['configurations_resolutions'] = "Bildschirmauflösung";
$lang['configurations_resolutionsimg'] = "Diagramm - Bildschirmauflösung";
$lang['configurations_couleurs'] = "Farbtiefe";
$lang['configurations_couleursimg'] = "Diagramm - Farbtiefe";
$lang['configurations_rapport'] = "Normal/widescreen";
$lang['configurations_large'] = "Widescreen";
$lang['configurations_normal'] = "Normal";
$lang['configurations_double'] = "Dual Screen";
$lang['configurations_plugins'] = "Plugins"; // TODO : translate
$lang['configurations_navigateursbytype'] = "Browser (nach Typ)"; // TODO : translate
$lang['configurations_navigateursbytypeimg'] = "Grafik - Browsertypen"; // TODO : translate
$lang['configurations_os_interest'] = "Betriebssysteme - Einzelheiten";
$lang['configurations_navigateurs_interest'] = "Browser - Einzelheiten";
$lang['configurations_resolutions_interest'] = "Bildschirmauflösung - Einzelheiten";
$lang['configurations_couleurs_interest'] = "Farbtiefe - Einzelheiten";
$lang['configurations_configurations'] = "Einstellungen Überblick";

//
// Referers
//
$lang['affluents_titre'] = "Verlinkung";
$lang['affluents_recapimg'] = "Besucheranzeige von Links";
$lang['affluents_directimg'] = "Direkt";
$lang['affluents_sitesimg'] = "Websites";
$lang['affluents_moteursimg'] = "Engines";
$lang['affluents_referrersimg'] = "Links";
$lang['affluents_moteurs'] = "Suchmaschinen";
$lang['affluents_nbparmoteur'] = "Besucher von Suchmaschinen: %s";
$lang['affluents_aucunmoteur'] = "Es wurden keine Besucher von Suchmaschinen weitergeleitet";
$lang['affluents_motscles'] = "Suchworte";
$lang['affluents_nbmotscles'] = "benutzte Suchworte : %s";
$lang['affluents_aucunmotscles'] = "Es wurden keine Suchworte gefunden.";
$lang['affluents_sitesinternet'] = "Websites";
$lang['affluents_nbautressites'] = "Besucher von anderen Websites : %s";
$lang['affluents_nbautressitesdiff'] = "Anzahl der Websites : %s";
$lang['affluents_aucunautresite'] = "Es kamen keine Besucher von anderen Websites.";
$lang['affluents_entreedirecte'] = "Direkte Anfragen";
$lang['affluents_nbentreedirecte'] = "Direkte Besucher: %s";
$lang['affluents_nbpartenaires'] = "Besuche von Partnern: %s";
$lang['affluents_aucunpartenaire'] = "Keine Besuche von Partnersites.";
$lang['affluents_nbnewsletters'] = "Besuche aus Newslettern: %s";
$lang['affluents_aucunnewsletter'] = "Keine Besuche aus Newslettern.";
$lang['affluents_details'] = "Details"; // In the results of the referers array
$lang['affluents_interetsmoteurs'] = "Suchmaschinen - Einzelheiten";
$lang['affluents_interetsmotscles'] = "Keywords - Einzelheiten";
$lang['affluents_interetssitesinternet'] = "Websites - Einzelheiten";
$lang['affluents_partenairesimg'] = "Partner";
$lang['affluents_partenaires'] = "Partner";
$lang['affluents_interetspartenaires'] = "Partner - Einzelheiten";
$lang['affluents_newslettersimg'] = "Newsletter";
$lang['affluents_newsletters'] = "Newsletter";
$lang['affluents_interetsnewsletters'] = "Newsletter - Einzelheiten";
$lang['affluents_type'] = "Referer Typ";
$lang['affluents_interetstype'] = "Zugangstyp - Einzelheiten";

//
// Summary
//
$lang['purge_titre'] = "Zusammenfassung der Besuche und Verlinkungen";
$lang['purge_intro'] = "Der Zeitraum wurde vom Administrator gelöscht, nur die notwendigen Statistiken wurden gespeichert.";
$lang['admin_purge'] = "Datenbankpflege";
$lang['admin_purgeintro'] = "Hier können Sie die Tabellen verwalten die von phpMyVisites benutzt werden. Hier können Sie den benötigten Speicheroplatz der Tabellen sehen, sie optimieren, oder alte Einträge löschen. Hier können Sie den benutzten Speicherplatz festlegen.";
$lang['admin_optimisation'] = "Optimierung von [ %s ]..."; // Tables names
$lang['admin_postopt'] = "die Gesamtgröße reduziert um %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Folgende Zeiträume löschen: %s";
$lang['admin_purge_fini'] = "Löschen beendet...";
$lang['admin_bdd_nom'] = "Name";
$lang['admin_bdd_enregistrements'] = "Einträge";
$lang['admin_bdd_taille'] = "Tabellengröße";
$lang['admin_bdd_opt'] = "Optimieren";
$lang['admin_bdd_purge'] = "Bereinigungs Kriterien";
$lang['admin_bdd_optall'] = "Alle optimieren";
$lang['admin_purge_j'] = "Einträge entfernen - älter als %s Tage";
$lang['admin_purge_s'] = "Einträge entfernen - älter als %s Wochen";
$lang['admin_purge_m'] = "Einträge entfernen - älter als %s Monate";
$lang['admin_purge_y'] = "Einträge entfernen - älter als %s Jahre";
$lang['admin_purge_logs'] = "Alle Logs entfernen";
$lang['admin_purge_autres'] = "Tabelle bereinigen '%s'";
$lang['admin_purge_none'] = "keine Änderungen möglich";
$lang['admin_purge_cal'] = "Kalkulieren und Bereinigen (dies kann einige Minuten dauern)";
$lang['admin_alias_title'] = "Website-Aliase und URLs";
$lang['admin_partner_title'] = "Website-Partner";
$lang['admin_newsletter_title'] = "Website-Newsletter";
$lang['admin_ip_exclude_title'] = "IP-Adress-Bereiche, die von der Statistik ausgeschlossen werden sollen:";
$lang['admin_name'] = "Name:";
$lang['admin_error_ip'] = "IP muß korrektes Format haben: %s";
$lang['admin_site_name'] = "Site Name";
$lang['admin_site_url'] = "Site Haupt-URL";
$lang['admin_db_log'] = "Loggen Sie sich als phpMyVisites Super-User ein, um die Datenbankeinstellungen zu ändern.";
$lang['admin_error_critical'] = "Fehler! Muß behoben werden, damit phpMyVisites funktioniert.";
$lang['admin_warning'] = "Achtung: phpMyVisites wird bis auf einige Extra-Features korrekt funktionieren.";
$lang['admin_move_group'] = "In folgende Gruppe verschieben:";
$lang['admin_move_select'] = "Wähle eine Gruppe";

//
// Setup
//
$lang['admin_intro'] = "Willkommen in der phpMyVisites Konfigurationsoberfläche. Hier können Sie alles anpassen, was mit Ihrer Installation zusammenhängt. Wenn Sie Probleme haben, benutzen Sie bitte die %s offizielle Dokumentation von phpMyVisites %s."; // link to the doc
$lang['admin_configetperso'] = "Allgemeine Einstellungen";
$lang['admin_afficherjavascript'] = "JavaScript Statistik-Code anzeigen";
$lang['admin_cookieadmin'] = "Administrator in den Statistiken ignorieren";
$lang['admin_ip_ranges'] = "Bestimmte IP-Bereiche nicht zählen";
$lang['admin_sitesenregistres'] = "Überwachte Seiten:";
$lang['admin_retour'] = "Zurück";
$lang['admin_cookienavigateur'] = "Sie können den Administrator aus der Statistik ausschließen. Dies basiert auf Cookies und wird nur mit demselben Browser weiter funktionieren. Diese Option kann jederzeit geändert werden.";
$lang['admin_prendreencompteadmin'] = "Den Administrator in die Statistik mit einbeziehen (Cookie löschen)";
$lang['admin_nepasprendreencompteadmin'] = "Den Administrator aus der Statistik ausschließen (Cookie anlegen)";
$lang['admin_etatcookieoui'] = "Der Administrator wird in der Statistik mit gewertet (dies ist die Standardeinstellung, Sie werden als normaler Besucher angesehen)";
$lang['admin_etatcookienon'] = "Sie werden in die Statistik nicht mit einbezogen (Ihre Besuche werden für diese Website nicht ausgewertet)";
$lang['admin_deleteconfirm'] = "Löschen bestätigen %s?";
$lang['admin_sitedeletemessage'] = "Bitte seien Sie <u>sehr vorsichtig</u>: ALLE Daten diese Site betreffend werden gelöscht<br>und werden nicht wiederherstellbar sein.";
$lang['admin_confirmyes'] = "Ja, löschen";
$lang['admin_confirmno'] = "Nein, nicht löschen";
$lang['admin_nonewsletter'] = "Kein Newsletter für diese Site gefunden!";
$lang['admin_nopartner'] = "Kein Partner für diese Site gefunden!";
$lang['admin_get_question'] = "GET-Variable aufzeichnen? (URL-Variablen)";
$lang['admin_get_a1'] = "ALLE URL-Variables aufzeichnen";
$lang['admin_get_a2'] = "KEINE URL-Variable aufzeichnen";
$lang['admin_get_a3'] = "Nur BESTIMMTE Variablen aufzeichnen";
$lang['admin_get_a4'] = "Alle AUSSER bestimmten Variablen aufzeichnen";
$lang['admin_get_list'] = "Namen der Variablen (<b>;</b> getrennte Liste) <br/>Beispiel: %s";
$lang['admin_required'] = "%s wird benötigt.";
$lang['admin_title_required'] = "Benötigt";
$lang['admin_write_dir'] = "Beschreibbare Verzeichnisse";
$lang['admin_chmod_howto'] = "Diese Verzeichnisse müssen vom Server beschreibbar sein. Das heißt, sie müssen mit einer FTP-Anwendung mit CHMOD 777 beschreibbar gemacht werden (Rechtsklick auf das Verzeichnis -> Permissions (or chmod))";
$lang['admin_optional'] = "Optional";
$lang['admin_memory_limit'] = "Speicherlimit";
$lang['admin_allowed'] = "erlaubt";
$lang['admin_webserver'] = "Webserver";
$lang['admin_server_os'] = "Server OS";
$lang['admin_server_time'] = "Server-Zeit";
$lang['admin_legend'] = "Legende:";
$lang['admin_error_url'] = "URL muß im korrekten Format sein : %s (ohne slash (/) am Ende)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URL-Aliase";
$lang['admin_logo_question'] = "Logo anzeigen?";
$lang['admin_type_again'] = "(noch einmal eingeben)";
$lang['admin_admin_mail'] = "Super-Administrator-eMail";
$lang['admin_admin'] = "Super-Administrator";
$lang['admin_phpmv_path'] = "Kompletter Pfad zur phpMyVisites-Anwendung";
$lang['admin_valid_email'] = "eMail muß gültig sein";
$lang['admin_valid_pass'] = "Passwort muß komplexer sein (6 Zeichen Minimum, muß Zahlen enthalten)";
$lang['admin_match_pass'] = "Passworte stimmen nicht überein";
$lang['admin_no_user_group'] = "Kein Benutzer in dieser Gruppe für diese Site";
$lang['admin_recorded_nl'] = "Eingetragene Newsletter:";
$lang['admin_recorded_partners'] = "Eingetragene Partner:";
$lang['admin_recorded_users'] = "Eingetragene Benutzer:";
$lang['admin_select_site_title'] = "Bitte wählen Sie eine Site";
$lang['admin_select_user_title'] = "Bitte wählen Sie einen Benutzer";
$lang['admin_no_user_registered'] = "Kein Benutzer registriert!";
$lang['admin_configuration'] = "Konfiguration";
$lang['admin_general_conf'] = "Allgemeine Konfiguration";
$lang['admin_group_title'] = "Gruppenmanager (Rechte)";
$lang['admin_user_title'] = "Benutzerverwaltung";
$lang['admin_user_add'] = "Benutzer hinzufügen";
$lang['admin_user_mod'] = "Benutzer ändern";
$lang['admin_user_del'] = "Benutzer löschen";
$lang['admin_server_info'] = "Server-Information";
$lang['admin_send_mail'] = "Statistik per email verschicken";
$lang['admin_rss_feed'] = "Statistik in einem RSS-Feed";
$lang['admin_site_admin'] = "Site-Administration";
$lang['admin_site_add'] = "Site hinzufügen";
$lang['admin_site_mod'] = "Site ändern";
$lang['admin_site_del'] = "Site löschen";
$lang['admin_nl_add'] = "Newsletter hinzufügen";
$lang['admin_nl_mod'] = "Newsletter ändern";
$lang['admin_nl_del'] = "Newsletter löschen";
$lang['admin_partner_add'] = "Partner hinzufügen";
$lang['admin_partner_mod'] = "Partner ändern";
$lang['admin_partner_del'] = "Partner löschen";
$lang['admin_url_alias'] = "URL-Alias-Manager";
$lang['admin_group_admin_n'] = "Statistik ansehen + Admin-Berechtigung";
$lang['admin_group_admin_d'] = "Kann Site-Statistik ansehen UND Site-Information ändern(Name, Cookies hinzufügen, IP-Bereiche ausschließen, URL-aliase, Partner, Newsletter editieren, etc.)";
$lang['admin_group_view_n'] = "Statistik ansehen";
$lang['admin_group_view_d'] = "Kann nur Statistik anshen. Keine Admin-Berechtigung.";
$lang['admin_group_noperm_n'] = "Keine Berechtigung";
$lang['admin_group_noperm_d'] = "Benutzer in dieser Gruppe haben keinerlei Berechtigung und können weder die Statistik ansehen, noch Daten editieren.";
$lang['admin_group_stitle'] = "Sie können die Benutzergruppen ändern, indem Sie den Benutzer auswählen und dann die Gruppe, in den der Benutzer verschoben werden soll.";
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
$lang['install_loginmysql'] = "Datenbank-Login";
$lang['install_mdpmysql'] = "Datenbank-Passwort";
$lang['install_serveurmysql'] = "Datenbank-Server";
$lang['install_basemysql'] = "Datenbank-Name";
$lang['install_prefixetable'] = "Tabelle (Präfix)";
$lang['install_utilisateursavances'] = "Fortgeschrittene Benutzer (optional)";
$lang['install_oui'] = "Ja";
$lang['install_non'] = "Nein";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Problem: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Administrator-Login:";
$lang['install_mdpadmin'] = "Administrator-Passwort:";
$lang['install_chemincomplet'] = "Bitte geben Sie den Pfad zu phpMyVisites an. (z.B. http://www.mysite.com/rep1/rep3/phpmyvisites/). Der Pfad muss mit einem <strong>/</strong> beendet werden.";
$lang['install_afficherlogo'] = "Logo auf Ihren Seiten anzeigen? %s <br />Durch das Anzeigen des Logos auf Ihren Seiten helfen Sie, phpMyVisites weiter zu verbreiten.  Außerdem ist es eine nette Art, dem Autor, der viele Stunden Arbeit in die Entwicklung dieses kostenfreien Open Source-Programms investiert hat, Tribut zu zollen."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Diagramme anzeigen.";
$lang['install_valider'] = "Bestätigen"; //  during installation and for login
$lang['install_popup_logo'] = "Bitte wählen Sie ein Logo"; // TODO : translate
$lang['install_logodispo'] = "Verfügbare Logos"; // TODO : translate
$lang['install_welcome'] = "Willkommen!";
$lang['install_system_requirements'] = "System-Voraussetzungen";
$lang['install_database_setup'] = "Datenbank-Setup";
$lang['install_create_tables'] = "Einrichtung Tabellen";
$lang['install_general_setup'] = "Allgemeines Setup";
$lang['install_create_config_file'] = "Konfigurationsdatei erstellen";
$lang['install_first_website_setup'] = "Erste Website hinzufügen";
$lang['install_display_javascript_code'] = "Javascript-Code anzeigen";
$lang['install_finish'] = "Fertig!";
$lang['install_txt2'] = "Am Ende der Installation werden Sie an die offizielle Seite von phpMyVisites verwiesen, um die Zahl der Installationen nachverfolgen zu können.";
$lang['install_database_setup_txt'] = "Bitte geben Sie die Zugangsdaten zu Ihrer Datenbank ein.";
$lang['install_general_config_text'] = "phpMyVisites wird nur einen Super-Administrator haben, mit der Berechtigung, alles anzuzeigen und zu ändern. Bitte wählen Sie hier den Usernamen und das Passwort für diesen Super-Administrator. Später können dann weitere Benutzer hinzugefügt werden.";
$lang['install_config_file'] = " Admin erfolgreich erstellt.";
$lang['install_js_code_text'] = "<p>Um alle Besucher zu zählen, müssen Sie den Javascript-Code auf allen Seiten einbauen. </p><p> Ihre Seiten müssen nicht aus PHP bestehen, <strong>phpMyVisites funktioniert auf allen Seiten (ob HTML, ASP, Perl oder andere Sprache).</strong> </p><p> Diesen Code bitte einfügen: (Copy und Paste auf allen Ihren Seiten) </p>";
$lang['install_intro'] = "Willkommen zur phpMyVisites-Installation."; 
$lang['install_intro2'] = "Dieser Prozeß ist aufgeteilt in %s einfache Schritte und wird rund 10 Minuten dauern.";
$lang['install_next_step'] = "Nächster Schritt";
$lang['install_status'] = "Installations-Status";
$lang['install_done'] = "Installation %s%% komplett"; // Install 25% complete
$lang['install_site_success'] = "Website mit Erfolg erstellt!";
$lang['install_site_info'] = "Bitte alle Informationen zur ersten Website eingeben.";
$lang['install_go_phpmv'] = "Zu phpMyVisites gehen!";
$lang['install_congratulation'] = "Glückwnsch! Ihre phpMyVisites-Installation ist erfolgreich beendet.";
$lang['install_end_text'] = "Stellen Sie sicher, dass der Javascript-Code auf allen Seiten eingebaut ist und erwarten Sie Ihren ersten Besucher!";
$lang['install_db_ok'] = "Verbindung zum Datenbankserver OK!";
$lang['install_table_exist'] = "phpMyVisites-Tabellen bereits in Datenbank vorhanden.";
$lang['install_table_choice'] = "Entweder die bestehenden Datenbank-Tabellen auswählen oder eine saubere Installation durchführen, um alle Daten in der Datenbank zu löschen.";
$lang['install_table_erase'] = "Alle Tabellen löschen (Vorsicht!)";
$lang['install_table_reuse'] = "Bestehende Tabellen benutzen";
$lang['install_table_success'] = "Tabellen mit Erfolg erstellt!";
$lang['install_send_mail'] = "Eine eMail mit einer zusammengefassten Statistik pro Tag erhalten?";

//
// Update Step
//
$lang['update_title'] = "Update phpMyVisites";
$lang['update_subtitle'] = "Wir stellen fest, dass Sie phpMyVisites updaten.";
$lang['update_versions'] = "Ihre vorherige Version war %s und wir haben sie upgedated auf %s.";
$lang['update_db_updated'] = "Ihre Datenbank wurde erfolgreich upgedated!";
$lang['update_continue'] = "Weiter zu phpMyVisites";
$lang['update_jschange'] = "Achtung! <br /> Der phpMyVisites-Javascript-Code wurde geändert. Sie MÜSSEN Ihre Seiten updaten und den neuen phpMyVisites-Javascript-Code mit Copy/Paste auf ALLEN Seiten einfügen/modifizieren. <br /> Änderungen am Javascript-Code sind selten und wir möchten uns für die Unannehmlichkeiten entschuldigen."; // TODO : translate

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
$lang['tdate3'] = "Woche %monthlong% %daynumeric% bis %monthlong2% %daynumeric2% %yearlong%";

// February 2004 Month
$lang['tdate4'] = "%monthlong% %yearlong% Monat";

// December 2003
$lang['tdate5'] = "%monthlong% %yearlong%";

// 10 Febuary week
$lang['tdate6'] = "%daynumeric% %monthlong% Woche";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%daynumeric%-%monthnumeric%-%yearlong%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = "%dayshort% %daynumeric%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9'] = " Woche %daynumeric% %monthshort%";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%monthshort% %yearshort%";

// Year 2004
$lang['tdate11'] = "Jahr %yearlong%";

// 2004
$lang['tdate12'] = "%yearlong%";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "Januar";
$lang['moistab']['02'] = "Februar";
$lang['moistab']['03'] = "März";
$lang['moistab']['04'] = "April";
$lang['moistab']['05'] = "Mai";
$lang['moistab']['06'] = "Juni";
$lang['moistab']['07'] = "Juli";
$lang['moistab']['08'] = "August";
$lang['moistab']['09'] = "September";
$lang['moistab']['10'] = "Oktober";
$lang['moistab']['11'] = "November";
$lang['moistab']['12'] = "Dezember";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Jan";
$lang['moistab_graph']['02'] = "Feb";
$lang['moistab_graph']['03'] = "Mär";
$lang['moistab_graph']['04'] = "Apr";
$lang['moistab_graph']['05'] = "Mai";
$lang['moistab_graph']['06'] = "Jun";
$lang['moistab_graph']['07'] = "Jul";
$lang['moistab_graph']['08'] = "Aug";
$lang['moistab_graph']['09'] = "Sep";
$lang['moistab_graph']['10'] = "Okt";
$lang['moistab_graph']['11'] = "Nov";
$lang['moistab_graph']['12'] = "Dez";

// Day of the week
$lang['jsemaine']['Mon'] = "Montag";
$lang['jsemaine']['Tue'] = "Dienstag";
$lang['jsemaine']['Wed'] = "Mittwoch";
$lang['jsemaine']['Thu'] = "Donnerstag";
$lang['jsemaine']['Fri'] = "Freitag";
$lang['jsemaine']['Sat'] = "Samstag";
$lang['jsemaine']['Sun'] = "Sonntag";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Mon";
$lang['jsemaine_graph']['Tue'] = "Die";
$lang['jsemaine_graph']['Wed'] = "Mit";
$lang['jsemaine_graph']['Thu'] = "Don";
$lang['jsemaine_graph']['Fri'] = "Fre";
$lang['jsemaine_graph']['Sat'] = "Sam";
$lang['jsemaine_graph']['Sun'] = "Son";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "M";
$lang['calendrier_jours'][1] = "D";
$lang['calendrier_jours'][2] = "M";
$lang['calendrier_jours'][3] = "D";
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
$lang['ams'] = "Süd- und Zentral-Amerika";
$lang['amn'] = "Nord-Amerika";
$lang['oce'] = "Ozeanien";

// Oceans
$lang['oc_pac'] = "Pazifischer Ozean"; // TODO : translate
$lang['oc_atl'] = "Atlantischer Ozean"; // TODO : translate
$lang['oc_ind'] = "Indischer Ozean"; // TODO : translate

// Countries
$lang['domaines'] = array(
    "xx" => "Unbekannt",
    "ac" => "Ascension Islands",
    "ad" => "Andorra",
    "ae" => "Vereinte Arabische Emirate",
    "af" => "Afghanistan",
    "ag" => "Antigua und Barbuda",
    "ai" => "Anguilla",
    "al" => "Albanien",
    "am" => "Armenien",
    "an" => "Niederländische Antilles",
    "ao" => "Angola",
    "aq" => "Antarctica",
    "ar" => "Argentinen",
    "as" => "Amerikanisch Samoa",
    "at" => "Österreich",
    "au" => "Australien",
    "aw" => "Aruba",
    "az" => "Aserbaijan",
    "ba" => "Bosnien und Herzegovina",
    "bb" => "Barbados",
    "bd" => "Bangladesch",
    "be" => "Belgien",
    "bf" => "Burkina Faso",
    "bg" => "Bulgarien",
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
    "ca" => "Kanada",
    "cc" => "Cocos (Keeling) Islands",
    "cd" => "Kongo, Demokratische Republik",
    "cf" => "Zentralafrikanische Republik",
    "cg" => "Kongo",
    "ch" => "Schweiz",
    "ci" => "Cote D'Ivoire",
    "ck" => "Cook Inseln",
    "cl" => "Chile",
    "cm" => "Kamerun",
    "cn" => "China",
    "co" => "Kolombien",
    "cr" => "Costa Rica",
	"cs" => "Serbien Montenegro",
    "cu" => "Kuba",
    "cv" => "Kap Verde",
    "cx" => "Weihnachtsinsel",
    "cy" => "Zypern",
    "cz" => "Tschechische Republik",
    "de" => "Deutschland",
    "dj" => "Djibouti",
    "dk" => "Dänemark",
    "dm" => "Dominica",
    "do" => "Dominikanische Republik",
    "dz" => "Algerien",
    "ec" => "Ecuador",
    "ee" => "Estland",
    "eg" => "Ägypten",
    "eh" => "Western Sahara",
    "er" => "Eritrea",
    "es" => "Spanien",
    "et" => "Äthiopien",
    "fi" => "Finnland",
    "fj" => "Fiji",
    "fk" => "Falkland Inseln (Malvinas)",
    "fm" => "Mikronesien, Vereinigte Staaten von",
    "fo" => "Faroer Inseln",
    "fr" => "Frankreich",
    "ga" => "Gabon",
    "gd" => "Grenada",
    "ge" => "Georgien",
    "gf" => "Französisch Guyana",
    "gg" => "Guernsey",
    "gh" => "Ghana",
    "gi" => "Gibraltar",
    "gl" => "Grönland",
    "gm" => "Gambia",
    "gn" => "Guinea",
    "gp" => "Guadeloupe",
    "gq" => "Äquatorial Guinea",
    "gr" => "Griechenland",
    "gs" => "Süd Georgien und die südlichen Sandwich Inseln",
    "gt" => "Guatemala",
    "gu" => "Guam",
    "gw" => "Guinea-Bissau",
    "gy" => "Guyana",
    "hk" => "Hong Kong",
    "hm" => "Heard Island und McDonald Islands",
    "hn" => "Honduras",
    "hr" => "Kroatien",
    "ht" => "Haiti",
    "hu" => "Ungarn",
    "id" => "Indonesien",
    "ie" => "Ireland",
    "il" => "Israel",
    "im" => "Man Island",
    "in" => "Indien",
    "io" => "British Indian Ocean Territory",
    "iq" => "Irak",
    "ir" => "Iran, Islamische Republik",
    "is" => "Island",
    "it" => "Italien",
    "je" => "Jersey",
    "jm" => "Jamaika",
    "jo" => "Jordan",
    "jp" => "Japan",
    "ke" => "Kenia",
    "kg" => "Kirgistan",
    "kh" => "Kambodscha",
    "ki" => "Kiribati",
    "km" => "Comoros",
    "kn" => "Saint Kitts und Nevis",
    "kp" => "Korea, Demokratische Volksrepublik von",
    "kr" => "Korea, Republik von",
    "kw" => "Kuwait",
    "ky" => "Cayman Inseln",
    "kz" => "Kasachstan",
    "la" => "Laos",
    "lb" => "Libanon",
    "lc" => "Saint Lucia",
    "li" => "Liechtenstein",
    "lk" => "Sri Lanka",
    "lr" => "Liberia",
    "ls" => "Lesotho",
    "lt" => "Lithauen",
    "lu" => "Luxemburg",
    "lv" => "Litauen",
    "ly" => "Libyen",
    "ma" => "Marokko",
    "mc" => "Monaco",
    "md" => "Moldova, Republik von",
    "mg" => "Madagaskar",
    "mh" => "Marshall Inseln",
    "mk" => "Mazedonien",
    "ml" => "Mali",
    "mm" => "Myanmar",
    "mn" => "Mongolien",
    "mo" => "Macau",
    "mp" => "Nördliche Mariana Inseln",
    "mq" => "Martinique",
    "mr" => "Mauretanien",
    "ms" => "Montserrat",
    "mt" => "Malta",
    "mu" => "Mauritius",
    "mv" => "Maldiven",
    "mw" => "Malawi",
    "mx" => "Mexiko",
    "my" => "Malaysia",
    "mz" => "Mosambique",
    "na" => "Namibia",
    "nc" => "Neu Kaledonien",
    "ne" => "Niger",
    "nf" => "Norfolk Inseln",
    "ng" => "Nigeria",
    "ni" => "Nicaragua",
    "nl" => "Niederlande",
    "no" => "Norwegen",
    "np" => "Nepal",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "Neuseeland",
    "om" => "Oman",
    "pa" => "Panama",
    "pe" => "Peru",
    "pf" => "Französisch Polynesien",
    "pg" => "Papua New Guinea",
    "ph" => "Philippinen",
    "pk" => "Pakistan",
    "pl" => "Polen",
    "pm" => "Saint Pierre und Miquelon",
    "pn" => "Pitcairn",
    "pr" => "Puerto Rico",
	"ps" => "Palestinian Territory",
    "pt" => "Portugal",
    "pw" => "Palau",
    "py" => "Paraguay",
    "qa" => "Qatar",
    "re" => "Reunion Island",
    "ro" => "Romania",
    "ru" => "Russische Föderation",
    "rs" => "Russland",
    "rw" => "Rwanda",
    "sa" => "Saudi Arabien",
    "sb" => "Solomon Inseln",
    "sc" => "Seychellen",
    "sd" => "Sudan",
    "se" => "Schweden",
    "sg" => "Singapore",
    "sh" => "Saint Helena",
    "si" => "Slovenien",
    "sj" => "Svalbard",
    "sk" => "Slovakei",
    "sl" => "Sierra Leone",
    "sm" => "San Marino",
    "sn" => "Senegal",
    "so" => "Somalien",
    "sr" => "Suriname",
    "st" => "Sao Tome und Principe",
    "su" => "Old U.R.S.S.",
    "sv" => "El Salvador",
    "sy" => "Syrische Arabisch Republik",
    "sz" => "Swaziland",
    "tc" => "Turks und Caicos Inseln",
    "td" => "Tschad",
    "tf" => "French Southern Territories",
    "tg" => "Togo",
    "th" => "Thailand",
    "tj" => "Tajikistan",
    "tk" => "Tokelau",
    "tm" => "Türkmenistan",
    "tn" => "Tunesien",
    "to" => "Tonga",
    "tp" => "Ost Timor",
    "tr" => "Türkei",
    "tt" => "Trinidad and Tobago",
    "tv" => "Tuvalu",
    "tw" => "Taiwan",
    "tz" => "Tansania, Vereinte Republik",
    "ua" => "Ukraine",
    "ug" => "Uganda",
    "uk" => "United Kingdom",
    "gb" => "Grossbritannien",
    "um" => "United States Minor Outlying Islands",
    "us" => "Vereinigte Staaten",
    "uy" => "Uruguay",
    "uz" => "Usbekistan",
    "va" => "Vatikanstadt",
    "vc" => "Saint Vincent and the Grenadines",
    "ve" => "Venezuela",
    "vg" => "Virgin Islands, Britisch",
    "vi" => "Virgin Islands, U.S.",
    "vn" => "Vietnam",
    "vu" => "Vanuatu",
    "wf" => "Wallis und Futuna",
    "ws" => "Samoa",
    "ye" => "Yemen",
    "yt" => "Mayotte",
    "yu" => "Jugoslawien",
    "za" => "Südafrika",
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