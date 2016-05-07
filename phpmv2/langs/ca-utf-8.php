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
$lang['auteur_nom'] = "Daniel Olivares Giménez";
$lang['auteur_email'] = "dani88elx@gmail.com";
$lang['charset'] = "utf-8"; // charset d'idioma (utf-8 predefinit) -- si es mostren errors canviar a iso-8859-1
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "ca"; // iso language code
$lang['lang_libelle_en'] = "Catalan"; // idioma en anglès
$lang['lang_libelle_fr'] = "Català"; // idioma en francès
$lang['unites_bytes'] = array('Octets', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb');
$lang['separateur_milliers'] = '.'; // tres cents mil s'escriu en català 300.000
$lang['separateur_decimaux'] = ','; // entre la part entera d'un nombre i la part decimal

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | Aplicació lliure i gratuïta de gestió d'estadístiques i de mesura d'audiència de llocs Internet"; // títol de les  pàgines d'estadístiques en l'header html
$lang['head_keywords'] = "phpmyvisites, php, script, aplicació, programa, estadístiques, mesura d'audiència, audiència, estatístiques, gratuït, open source, gpl, visites, visitants, mysql, pàgines vistes, pàgines, vistes, temps de visites, gràfics, navegadors, vos, sistemes d'explotació, resolucions, dia, setmana, mes, rècord, país, host, buscadors, paraules claus, seguiment, referències, gràfics, pàgines d'arribades, pàgines d'eixides, gràfics redons"; // Paraules claus de l'header html
$lang['head_description'] = "phpMyVisites | Aplicació d'estadístiques i de mesura d'audiència de llocs Internet | Programa gratuït i open source distribuït baix llicència GPL, desenvolupat en php/mysql"; // Descripció en l'header html 
$lang['logo_description'] = "phpMyVisites : programa gratuït de mesura d'estadístiques i d'audiència de llocs Internet (llicència lliure GPL, programa en php/mysql)"; // descripció per al codi JS : anar al gra

//
// Main menu & submenu
//
$lang['menu_visites'] = "Visites";
$lang['menu_pagesvues'] = "Pàgines vistes";
$lang['menu_suivi'] = "Seguiment";
$lang['menu_provenance'] = "Procedència";
$lang['menu_configurations'] = "Configuracions";
$lang['menu_affluents'] = "Referents";
$lang['menu_listesites'] = "Llista de llocs";
$lang['menu_bilansites'] = "Sumari";
$lang['menu_jour'] = "Dia";
$lang['menu_semaine'] = "Setmana";
$lang['menu_mois'] = "Mes";
$lang['menu_annee'] = "Any";
$lang['menu_periode'] = "Període estudiat : %s"; // Període estudiat : Dilluns 11 de novembre
$lang['liens_siteofficiel'] = "Lloc oficial";
$lang['liens_admin'] = "Instal·lació &amp; configuració de phpmyvisites";
$lang['liens_contacts'] = "Contactes";

//
// Divers
//
$lang['generique_nombre'] = "Nombre";
$lang['generique_tauxsortie'] = "Taxa d'eixides";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "La generació de la pàgina ha trigat %s segons"; // temps en segons
$lang['generique_divers'] = "Diversos"; // (per als gràfics)
$lang['generique_inconnu'] = "Desconegut"; // (per als gràfics)
$lang['generique_vous'] = "... Vosté ?";
$lang['generique_traducteur'] = "Traductor";
$lang['generique_langue'] = "Llengua";
$lang['generique_autrelangure'] = "Altra llengua?"; // Autre langue, Appel à contribution
$lang['aucunvisiteur_titre'] = "No n'hi ha cap visitant en aquest periode"; 
$lang['generique_aucune_visite_bdd'] = "<b>Atenció !</b> No n'hi ha cap visitant gravat en la base de dades. Assegura't que has instal·lat el codi Javascript i correctament. Obri documentació per rebre ajuda";
$lang['generique_aucune_site_bdd'] = "No n'hi ha cap lloc web registrat a la base de dades. Intenta accedir com SuperUsuari a phpMyVisites per afegir un altre lloc web.";
$lang['generique_retourhaut'] = "Capdamunt";
$lang['generique_tempsvisite'] = "%smin %ss"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%sh"; // 4h means 4 hours
$lang['generique_siteno'] = "Lloc %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Newsletter %s"; // Newsletter "versió 2 announcement"
$lang['generique_partnerno'] = "Partner %s"; // Partner "versió 2 announcement"
$lang['generique_general'] = "General";
$lang['generique_user'] = "Usuari %s"; // Usuari "Admin"
$lang['generique_previous'] = "Anterior";
$lang['generique_next'] = "Següent";
$lang['generique_lowpop'] = "Excloure els visitants poc rellevants"; // orig: Exclude low population from statistics
$lang['generique_allpop'] = "Incloure tots els visitants en les estatístiques"; // orig: Include all the population in statistics
$lang['generique_to'] = "a"; // 4 'to' 8
$lang['generique_total_on'] = "en"; // 4 to 8 'on' 10
$lang['generique_total'] = "TOTAL";
$lang['generique_information'] = "Informació";
$lang['generique_done'] = "Fet; correcte!";
$lang['generique_other'] = "Altres";
$lang['generique_description'] = "Descripció:";
$lang['generique_name'] = "Nom:";
$lang['generique_variables'] = "Variables";
$lang['generique_logout'] = "Sortir";
$lang['generique_login'] = "Accedir-hi";
$lang['generique_hits'] = "Hits";
$lang['generique_errors'] = "Errors";
$lang['generique_site'] = "Lloc";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "Contrasenya :"; 
$lang['login_login'] = "Usuari :"; 
$lang['login_error'] = "Error: usuari/contrasenya incorrectes.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "Has intentat accedir a una secció protegida de %sphpMyVisites%s .";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Contactes";
$lang['contacts_langue'] = "Traduccions";
$lang['contacts_merci'] = "Agraïments";
$lang['contacts_auteur'] = "L'autor de l'aplicació, de la documentació i creador del projecte phpMyVisites és <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "Per a tota <strong>pregunta tècnica, informe de bug, o suggestió</strong>, per favor <strong>utilitze els fòrums previstos a aquest efecte</strong> en la pàgina oficial %s. Per a les altres demandes, per favor contacte l'autor gràcies al formulari de la pàgina oficial."; // adreça del lloc
$lang['contacts_trad1'] = "Volguera vostè utilitzar phpMyVisites en un altre idioma? Pot contribuir a les traduccions de l'aplicació, <strong>phpMyVisites li necessita!</strong>";
$lang['contacts_trad2'] = "Traduir phpMyVisites és un treball que demana un poc de temps (algunes hores) i que necessita un perfecte domini d'ambdós idiomes; però <strong>el treball així realitzat serà útil a nombroses altres persones</strong>, els quals podran utilitzar plenament phpMyVisites. Si aquesta interessat a traduir phpMyVisites, trobara totes els informacions necessàries en %s la documentació oficial de phpMyVisites %s."; // vincle cap a la doc
$lang['contacts_doc'] = "No dubte a consultar %s la documentació oficial de phpMyVisites %s que li donarà moltes informacions sobre la instal·lació, la configuració, les funcionalitats de phpMyVisites, etc. Està disponible directament en la vostra versió de phpMyVisites."; // vincle cap a la doc
$lang['contacts_thanks_dev'] = "Gràcies <strong>%s</strong>, co-desenvolupadors de phpMyVisites, per la gran qualitat del seu treball per al projecte.";
$lang['contacts_merci3'] = "No dubte a consultar la pàgina d'agraïments al lloc oficial de phpMyVisites per a tenir una llista més completa dels amics de phpMyVisites.";
$lang['contacts_merci2'] = "Un gran agraïment també a tots els que han compartit la seua cultura en traduir phpMyVisites :";

//
// Rss & Mails
//
$lang['rss_titre'] = "Lloc %s' el %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Veure estatístiques amb detall";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Informació de les visites";
$lang['visites_statistiques'] = "Estadístiques";
$lang['visites_periodesel'] = "Per al període seleccionat";
$lang['visites_visites'] = "Visites";
$lang['visites_uniques'] = "Visitants únics";
$lang['visites_pagesvues'] = "Pàgines vistes";
$lang['visites_pagesvisiteurs'] = " Pàgines vistes per visitant";
$lang['visites_pagesvisites'] = "Pàgines per visita"; 
$lang['visites_pagesvisitessign'] = "Pàgines per senyal de visita"; 
$lang['visites_tempsmoyen'] = "Temps mitjà de visita";
$lang['visites_tempsmoyenpv'] = "Temps mitjà per pàgina vista";
$lang['visites_tauxvisite'] = "Taxa de visites d'una pàgina";
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Resum del període";
$lang['visites_nbvisites'] = "Visites";
$lang['visites_aucunevivisite'] = "Cap visita"; // en un quadre, anar al gra 
$lang['visites_recap'] = "Resum de les estatístiques";
$lang['visites_unepage'] = "1 pàgina"; // (gràfic)
$lang['visites_pages'] = "%s pàgines"; // 1-2 pàgines (gràfic)
$lang['visites_min'] = "%s min"; // 10-15 min (gràfic)
$lang['visites_sec'] = "%s s"; // 0-30 s (segons, gràfic)
$lang['visites_grapghrecap'] = "Gràfic recapitulatiu de les estadístiques";
$lang['visites_grapghrecaplongterm'] = "Gràfic que mostra les estadístiques a llarg termini";
$lang['visites_graphtempsvisites'] = "Gràfic de durades de visites per visitant";
$lang['visites_graphtempsvisitesimg'] = "Durada de visites per visitant";
$lang['visites_graphheureserveur'] = "Gràfic de visites per hora del servidor";
$lang['visites_graphheureserveurimg'] = "Visitants per hores del servidor";
$lang['visites_graphheurevisiteur'] = "Gràfic de visites per hora del visitant";
$lang['visites_graphheurelocalimg'] = "Visitants per hores locals";
$lang['visites_longterm_statd'] = "Estadístiques a llarg termini (Dies)";
$lang['visites_longterm_statm'] = "Estadístiques a llarg termini (Mesos)";

//
// Sites Summary
//
$lang['summary_title'] = "Sumari del lloc";
$lang['summary_stitle'] = "Sumari";

//
// Frequency Part
//
$lang['frequence_titre'] = "Visitants que tornen";
$lang['frequence_nouveauxconnusgraph'] = "Gràfica que mostra els nous visitants que tornen";
$lang['frequence_nouveauxconnus'] = "Nous visitants -- visitants que tornen";
$lang['frequence_titremenu'] = "Freqüència";
$lang['frequence_visitesconnues'] = "Visitants que tornen";
$lang['frequence_nouvellesvisites'] = "Nous visitants";
$lang['frequence_visiteursconnus'] = "Visitants que tornen";
$lang['frequence_nouveauxvisiteurs'] = "Nous visitants";
$lang['frequence_returningrate'] = "Taxa de visitants que tornen";
$lang['pagesvues_vispervisgraph'] = "Gràfica que mostra el nombre de visites per visitant";
$lang['frequence_vispervis'] = "Nombre de visites per visitant";
$lang['frequence_vis'] = "visita";
$lang['frequence_visit'] = "1 visita"; // (gràfica)
$lang['frequence_visits'] = "%s visites"; // (gràfica)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Informació sobre les pàgines vistes";
$lang['pagesvues_joursel'] = "Dia seleccionat";
$lang['pagesvues_jmoins7'] = "Setmana anterior";
$lang['pagesvues_jmoins14'] = "Fa dues setmanes";
$lang['pagesvues_moyenne'] = "(mitjana)";
$lang['pagesvues_pagesvues'] = "Pàgines vistes";
$lang['pagesvues_pagesvudiff'] = "Pàgines vistes diferents";
$lang['pagesvues_recordpages'] = "Rècord de pàgines vistes per un visitant";
$lang['pagesvues_tabdetails'] = "Quadre de detalls de les pàgines vistes (de %s'a %s)"; // (d'1 à 21)
$lang['pagesvues_graphsnbpages'] = "Gràfic de les visites per nombre de pàgines vistes";
$lang['pagesvues_graphnbvisitespageimg'] = "Visites per nombre de pàgines vistes";
$lang['pagesvues_graphheureserveur'] = "Gràfic de les pàgines vistes per hora del servidor";
$lang['pagesvues_graphheureserveurimg'] = "Pàgines vistes per hores del servidor";
$lang['pagesvues_graphheurevisiteur'] = "Gràfic de les pàgines vistes per hora del visitant";
$lang['pagesvues_graphpageslocalimg'] = "Pàgines vistes per hores locals";
$lang['pagesvues_tempsparpage'] = "Temps per pàgina";
$lang['pagesvues_total_time'] = "Temps total";
$lang['pagesvues_avg_time'] = "Temps mitjà";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Seguiment del visitant";
$lang['suivi_pageentree'] = "Pàgines d'entrada";
$lang['suivi_pagesortie'] = "Pàgines d'eixida";
$lang['suivi_tauxsortie'] = "Taxa d'eixida";
$lang['suivi_pageentreehits'] = "Cops d'entrada";
$lang['suivi_pagesortiehits'] = "Cops de sortida";
$lang['suivi_singlepage'] = "Visites úniques";

//
// Origin
//
$lang['provenance_titre'] = "Procedència dels visitants";
$lang['provenance_recappays'] = "Resum dels països";
$lang['provenance_pays'] = "País";
$lang['provenance_paysimg'] = "Gràfic dels països dels visitants";
$lang['provenance_fai'] = "Proveïdors d'accés";
$lang['provenance_nbpays'] = "Nombre de països diferents: %s";
$lang['provenance_provider'] = "Proveïdor"; // el mateix que $lang['provenance_fai'], excepte si $lang['provenance_fai'] = "massa llarg";
$lang['provenance_continent'] = "Continent";
$lang['provenance_mappemonde'] = "Mapamundi";
$lang['provenance_interetspays'] = "País amb més visites";

//
// Setup
//
$lang['configurations_titre'] = "Configuracions visitants";
$lang['configurations_os'] = "Sistema Operatiu";
$lang['configurations_osimg'] = "Gràfic del S.O. per visitant";
$lang['configurations_navigateurs'] = "Navegadors";
$lang['configurations_navigateursimg'] = "Gràfica dels navegadors per visitant";
$lang['configurations_resolutions'] = "Resolució de la pantalla";
$lang['configurations_resolutionsimg'] = "Gràfic de les resolucions per visitant";
$lang['configurations_couleurs'] = "Colors";
$lang['configurations_couleursimg'] = "Gràfic dels colors per visitant";
$lang['configurations_rapport'] = "Pantalla ampla/normal";
$lang['configurations_large'] = "Pantalla ampla";
$lang['configurations_normal'] = "Pantalla normal";
$lang['configurations_double'] = "Pantalla Dual";
$lang['configurations_plugins'] = "Agregats";
$lang['configurations_navigateursbytype'] = "Navegadors (per tipus)";
$lang['configurations_navigateursbytypeimg'] = "Gràfica per mostrar els tipus de navegadors";
$lang['configurations_os_interest'] = "Sistema Operatiu més emprat";
$lang['configurations_navigateurs_interest'] = "Navegador més emprat";
$lang['configurations_resolutions_interest'] = "Resolució de la pantalla més emprada";
$lang['configurations_couleurs_interest'] = "Profunditat del color més emprada";
$lang['configurations_configurations'] = "Configuracions més usuals";

//
// Referers
//
$lang['affluents_titre'] = "Referents";
$lang['affluents_recapimg'] = "Gràfic de resum dels referents";
$lang['affluents_directimg'] = "Directe";
$lang['affluents_sitesimg'] = "Llocs";
$lang['affluents_moteursimg'] = "Buscadors";
$lang['affluents_referrersimg'] = "Referents";
$lang['affluents_moteurs'] = "Buscadors";
$lang['affluents_nbparmoteur'] = "Nombre de visitants que han arribat al lloc gràcies a buscadors: %s";
$lang['affluents_aucunmoteur'] = "Cap visitant ha arribat al lloc gràcies a buscadors.";
$lang['affluents_motscles'] = "Paraules claus";
$lang['affluents_nbmotscles'] = "Nombre de distintes paraules claus: %s";
$lang['affluents_aucunmotscles'] = "Cap paraula clau ha sigut trobada.";
$lang['affluents_sitesinternet'] = "Llocs Internet";
$lang['affluents_nbautressites'] = "Nombre de visitants que han arribat al lloc gràcies a vincles en un altre lloc d'Internet: %s";
$lang['affluents_nbautressitesdiff'] = "Nombre de llocs diferents: %s";
$lang['affluents_aucunautresite'] = "Cap visitant ha arribat al lloc gràcies a un altre lloc d'Internet.";
$lang['affluents_entreedirecte'] = "Entrades directes";
$lang['affluents_nbentreedirecte'] = "Nombre de visitants que han arribat directament al lloc: %s";
$lang['affluents_nbpartenaires'] = "Visitants provinents d'afiliats: %s";
$lang['affluents_aucunpartenaire'] = "Cap visitant ha provingut d'una web afiliada.";
$lang['affluents_nbnewsletters'] = "Visitants provinents de grups de notícies: %s";
$lang['affluents_aucunnewsletter'] = "Cap visitant provinent de grups de notícies";
$lang['affluents_details'] = "Detalls"; // al quadre davall els resultats de llocs referrers
$lang['affluents_interetsmoteurs'] = "'Top' de motors de búsqueda";
$lang['affluents_interetsmotscles'] = "'Top' de paraules clau";
$lang['affluents_interetssitesinternet'] = "'Top' de pàgines web";
$lang['affluents_partenairesimg'] = "Afiliats";
$lang['affluents_partenaires'] = "Afiliats";
$lang['affluents_interetspartenaires'] = "'Top' d'afiliats";
$lang['affluents_newslettersimg'] = "Notícies";
$lang['affluents_newsletters'] = "Notícies";
$lang['affluents_interetsnewsletters'] = "'Top' de grups de notícies";
$lang['affluents_type'] = "Tipus de referent";
$lang['affluents_interetstype'] = "'Top' dels tipus d'accés";

//
// Summary
//
$lang['purge_titre'] = "Resum de les visites i dels referents";
$lang['purge_intro'] = "Aquest període ha sigut esborrat des de l'administració: només les estadístiques més rellevants han sigut guardades.";
$lang['admin_purge'] = "Esborrament i optimització de la base de dades";
$lang['admin_purgeintro'] = "Aquesta secció li permet gestionar les dades de phpMyVisites. Pot consultar l'espai ocupat per les dades, optimitzar-los (aconsellat per a les dades de grans mides), o purgar remotes dades. Açò li permetrà limitar la grandària de les dades el la base de dades.";
$lang['admin_optimisation'] = "Optimització de [ %s ]..."; // nom de les taules
$lang['admin_postopt'] = "La grandària total ha disminuït %chiffres% %unites%"; // Ex : 28 KO
$lang['admin_purgeres'] = "Eliminació de períodes següents: %s";
$lang['admin_purge_fini'] = "Final de l'operació d'eliminació de les taules...";
$lang['admin_bdd_nom'] = "Nom";
$lang['admin_bdd_enregistrements'] = "Gravacions";
$lang['admin_bdd_taille'] = "Grandària de la taula";
$lang['admin_bdd_opt'] = "Optimitzar";
$lang['admin_bdd_purge'] = "Purga de taules";
$lang['admin_bdd_optall'] = "Optimitzar-ho tot";
$lang['admin_purge_j'] = "Eliminació d'elements vells de %s dies";
$lang['admin_purge_s'] = "Eliminació d'elements vells de %s setmanes";
$lang['admin_purge_m'] = "Eliminació d'elements vells de %s mesos";
$lang['admin_purge_y'] = "Esborrar registres més vells de %s'anys";
$lang['admin_purge_logs'] = "Eliminació dels registres (Arxivar cada dia acabat)";
$lang['admin_purge_autres'] = "Eliminació comuna a la taula '%s'";
$lang['admin_purge_none'] = "Cap acció possible";
$lang['admin_purge_cal'] = "Calcular i eliminar (açò pot trigar alguns minuts)";
$lang['admin_alias_title'] = "Àlies de la web i adreces";
$lang['admin_partner_title'] = "Afiliats";
$lang['admin_newsletter_title'] = "Revistes de notícies de la web";
$lang['admin_ip_exclude_title'] = "Rang d'IP per excloure de les estatístiques";
$lang['admin_name'] = "Nom:";
$lang['admin_error_ip'] = "Format d'IP incorrecte: %s";
$lang['admin_site_name'] = "Nom del lloc";
$lang['admin_site_url'] = "Adreça del lloc web";
$lang['admin_db_log'] = "Prova de accedir a phpMyVisites com a SuperUsuari per canviar les propietats de la base de dades.";
$lang['admin_error_critical'] = "Error crític. És necessari reparar-lo per que funcioni phpMyVisites.";
$lang['admin_warning'] = "phpMyVisites funcionarà correctament; no obstant, algunes de les funcionalitats extra poden no fer-ho.";
$lang['admin_move_group'] = "Moure un grup:";
$lang['admin_move_select'] = "Seleccionar un grup";

//
// Setup
//
$lang['admin_intro'] = "Benvingut a la secció de configuració de phpMyVisites. Pot modificar i configurar totes les informacions relatives a la seua instal·lació. Si té problemes en utilitzar algunes funcionalitats, no dubte a visitar %s la documentació oficial de phpMyVisites %s."; // vincle cap a la documentació
$lang['admin_configetperso'] = "Configuració general";
$lang['admin_afficherjavascript'] = "Visualitzar el codi javascript a incloure en les pàgines";
$lang['admin_cookieadmin'] = "No prendre'm en compte en les estadístiques";
$lang['admin_ip_ranges'] = "No conta el rang d'IPIP a les estadístiques";
$lang['admin_sitesenregistres'] = "Llista dels llocs registrats:";
$lang['admin_retour'] = "Tornar";
$lang['admin_cookienavigateur'] = "Té la possibilitat de no ser pres en compte quan visita el lloc i de no ser comptat per phpMyVisites. El mètode utilitzat és el dels cookies, llavors aquesta opció només serà vàlida amb el navegador que usa en configurar phpMyVisites. Per descomptat pot canviar aquí aquesta configuració quan ho desitge.";
$lang['admin_prendreencompteadmin'] = "Tindre en compte a l'administrador en les estadístiques (esborrar el cookie)";
$lang['admin_nepasprendreencompteadmin'] = "No tindre en compte en administrador en les estadístiques (posar un cookie)";
$lang['admin_etatcookieoui'] = "Actualment vostè està pres en compte en les estadístiques d'aquest lloc (és la configuració de base, vostè està considerat com a visitant normal).";
$lang['admin_etatcookienon'] = "Actualment vostè no està pres en compte en les estadístiques d'aquest lloc (quan visita aquest lloc, vostè no està comptabilitzat per phpMyVisites).";
$lang['admin_deleteconfirm'] = "Per favor, confirme que desitja eliminar %s?";
$lang['admin_sitedeletemessage'] = "Per favor, siga <u>molt prudent</u>: totes les dades associades amb aquest lloc web seran esborrades permanentment i no es podran recuperar.";
$lang['admin_confirmyes'] = "Estic segur, vull esborrar-ho";
$lang['admin_confirmno'] = "No, no vull esborrar-ho";
$lang['admin_nonewsletter'] = "No s'ha trobat cap grup de notícies a aquesta web!";
$lang['admin_nopartner'] = "No s'ha trobat cap lloc afiliat a aquesta web!";
$lang['admin_get_question'] = "Desar la variable GET?";
$lang['admin_get_a1'] = "Desar totes les variables de la adreça?";
$lang['admin_get_a2'] = "No desar cap variable de l'adreça";
$lang['admin_get_a3'] = "Desar únicament les variables especificades";
$lang['admin_get_a4'] = "Desar totes excepte les variables especificades";
$lang['admin_get_list'] = "Noms de les variables (separador : <b>;</b>) <br/>Per exemple, : %s";
$lang['admin_required'] = "%s és requerit.";
$lang['admin_title_required'] = "Requerit";
$lang['admin_write_dir'] = "Directoris on es pot escriure";
$lang['admin_chmod_howto'] = "A aquestos directoris s'ha de poder escriure. Això significa que has d'activar el chmod 777 a aquestos directoris, amb el teu programa FTP (fes clic al directori amb el botó dret i selecciona -> Permisos (o chmod))";
$lang['admin_optional'] = "Opcional";
$lang['admin_memory_limit'] = "Límit de memòria";
$lang['admin_allowed'] = "Permès";
$lang['admin_webserver'] = "Servidor web";
$lang['admin_server_os'] = "Sistema operatiu del servidor";
$lang['admin_server_time'] = "Temps del servidor";
$lang['admin_legend'] = "Llegenda: ";
$lang['admin_error_url'] = "Format incorrecte de URL: %s (without slash drec the end)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URLs aliares";
$lang['admin_logo_question'] = "Mostrar logotip?";
$lang['admin_type_again'] = "(escriu un altre cop)";
$lang['admin_admin_mail'] = "Email de l'administrador";
$lang['admin_admin'] = "Administrador";
$lang['admin_phpmv_path'] = "Drecera completa a la carpeta de phpMyVisites";
$lang['admin_valid_email'] = "Format d'email invàlid.";
$lang['admin_valid_pass'] = "El mot d'accès (contrasenya) ha de tindre 6 lletres com a mínim i contindre nombres";
$lang['admin_match_pass'] = "Les contrasenyes no coincideixen";
$lang['admin_no_user_group'] = "No n'hi ha cap usuari en aquest grup per a aquesta web";
$lang['admin_recorded_nl'] = "Butlletins de notícies desats: ";
$lang['admin_recorded_partners'] = "Afiliats desats: ";
$lang['admin_recorded_users'] = "Usuaris desats: ";
$lang['admin_select_site_title'] = "Si us plau, seleccione un lloc web: ";
$lang['admin_select_user_title'] = "Si us plau, seleccione un usuari";
$lang['admin_no_user_registered'] = "No s'ha seleccionat cap usuari!";
$lang['admin_configuration'] = "Configuració";
$lang['admin_general_conf'] = "Configuració general";
$lang['admin_group_title'] = "mànager dels grups (permissos)";
$lang['admin_user_title'] = "Administració d'usuaris";
$lang['admin_user_add'] = "Afegir usuari";
$lang['admin_user_mod'] = "Modificar usuari";
$lang['admin_user_del'] = "Esborrar usuari";
$lang['admin_server_info'] = "Informació del servidor";
$lang['admin_send_mail'] = "Enviar estatístiques per correu electrònic";
$lang['admin_rss_feed'] = "Estatístiques en RSS";
$lang['admin_site_admin'] = "Administració del lloc web";
$lang['admin_site_add'] = "Afegir lloc";
$lang['admin_site_mod'] = "Modificar lloc";
$lang['admin_site_del'] = "Esborrar lloc";
$lang['admin_nl_add'] = "Afegir butlletí de noticies";
$lang['admin_nl_mod'] = "Modificar butlletí de noticies";
$lang['admin_nl_del'] = "Esborrar butlletí de noticies";
$lang['admin_partner_add'] = "Afegir afiliat";
$lang['admin_partner_mod'] = "Modificar adreça i nom d'afiliat";
$lang['admin_partner_del'] = "Esborrar afiliat";
$lang['admin_url_alias'] = "Àlies de la adreça URL del mànager";
$lang['admin_group_admin_n'] = "Permís d'usuari per veure estatístiques";
$lang['admin_group_admin_d'] = "Els usuaris poden veure les estadístiques i editar informació (nom, afegir cookie, excloure rangs d'IPs, ...)";
$lang['admin_group_view_n'] = "Veure estadístiques";
$lang['admin_group_view_d'] = "Els usuaris solament poden veure les estadístiques, i no modificarles (no ténen permissos d'administrador.";
$lang['admin_group_noperm_n'] = "Cap permís";
$lang['admin_group_noperm_d'] = "Els usuaris del grup no tenen cap permís per veure les estadístiques ni editar informació.";
$lang['admin_group_stitle'] = "Pots editar els grups d'usuari seleccionant els usuaris que vulgues canviar i després seleccionar un grup al qual vulguis que pertanyen.";
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
$lang['install_loginmysql'] = "Usuari MySQL";
$lang['install_mdpmysql'] = "Contrasenya MySQL";
$lang['install_serveurmysql'] = "Servidor MySQL (Quasi sempre és localhost )";
$lang['install_basemysql'] = "Base de dades MySQL";
$lang['install_prefixetable'] = "Prefix de les taules";
$lang['install_utilisateursavances'] = "Utilitzadors entesos (facultatiu)";
$lang['install_oui'] = "Sí";
$lang['install_non'] = "No";
$lang['install_ok'] = "ok";
$lang['install_probleme'] = "Problema: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Usuari d'accés a l'administració :";
$lang['install_mdpadmin'] = "Contrasenya d'accés a l'administració :";
$lang['install_chemincomplet'] = "Camí complet d'accés a phpMyVisites (de la forma 'http://www.lamevaweb.com/carp1/carp3/phpmyvisites/'). El camí ha d'acabar per '<strong>/</strong>'.";
$lang['install_afficherlogo'] = "Mostrar el logo %s en les pagines indexades? <strong>Autoritzar el logo al seu lloc Internet permetrà donar a conèixer phpMyVisites i així ajudar a que la seua evolució siga més ràpida: és una manera d'agrair l'equip qui el va programar</strong> , el qual va dedicar hores de treball a phpMyVisites."; // %s'imatge del logo
$lang['install_affichergraphique'] = "Visualitzar els gràfics quan es consulten les estadístiques?";
$lang['install_valider'] = "Validar";
$lang['install_popup_logo'] = "Seleccione un logotip"; 
$lang['install_logodispo'] = "Veure els logotips disponibles"; 
$lang['install_welcome'] = "Benvingut";
$lang['install_system_requirements'] = "Requirements del sistema";
$lang['install_database_setup'] = "Configuració de la base de dades";
$lang['install_create_tables'] = "Creació de taula de dades";
$lang['install_general_setup'] = "Configuració general";
$lang['install_create_config_file'] = "Crea arxiu de configuració";
$lang['install_first_website_setup'] = "Afegir primer lloc web";
$lang['install_display_javascript_code'] = "Visualitzar codi javascript";
$lang['install_finish'] = "Finalitzat!";
$lang['install_txt2'] = "Al final de la instal·lació, una informació serà enviada al lloc oficial, <strong>amb l'única finalitat de comptabilitzar el nombre d'utilitzadors de phpMyVisites</strong> (per descomptat, cap informació confidencial serà transmesa). Gràcies per la seua comprensió.";
$lang['install_database_setup_txt'] = "Per favor, afegeixi la seva configuració de la base de dades.";
$lang['install_general_config_text'] = "phpMyVisites necessita d'un usuari administrador que tingui accès complet per veure i modificar tot. Per favor, seleccione un nom i una contrasenya per aquest usuari administrador. Pot afegir altres usuaris més tard.";
$lang['install_config_file'] = "Usuari administrador afegit correctament.";
$lang['install_js_code_text'] = "<p>Per contabilitzar els visitants, has de instertar el codi javascript a totes les pàgines. </p><p> Les pàgines poden estar tant en PHP, HTML, PERL, ... i altres.</strong> </p><p> Ací està el codi el qual has d'inserir (copia i apega a totes les pàgines) </p>";
$lang['install_intro'] = "Benvingut/da a la instal·lació de phpMyVisites"; 
$lang['install_intro2'] = "Aquest procès està dividit en dos etapes i no trigarà més de 10 minuts";
$lang['install_next_step'] = "Endavant";
$lang['install_status'] = "Estat de la instal·lació";
$lang['install_done'] = "Completat el %s%% de la instal·lació"; // Install 25% complete
$lang['install_site_success'] = "La web ha sigut afegida amb èxit, Visca!";
$lang['install_site_info'] = "Per favor, escriga tota la informació adient al primer lloc web";
$lang['install_go_phpmv'] = "Anar a phpMyVisistes";
$lang['install_congratulation'] = "Felicitacions! La instal·lació de phpMyVisites ha sigut completada!.";
$lang['install_end_text'] = "Assegura't que el codi javascript està inserit a totes les pàgines, i espera als primers visitants! :)visitors";
$lang['install_db_ok'] = "Connexió a la base de dades OK";
$lang['install_table_exist'] = "Les taules de phpMyVisites ja existeixen a la base de dades.";
$lang['install_table_choice'] = "Pot seleccionar les taules existents o seleccionar una instal·lació nova la qual esborre totes les dades existents.";
$lang['install_table_erase'] = "Esborrar totes les taules (precaució!)";
$lang['install_table_reuse'] = "Reutilitzar taules existents";
$lang['install_table_success'] = "Taules creades amb èxit!";
$lang['install_send_mail'] = "Vols rebre un email cada dia amb un resum de les estatístiques?";

//
// Update Step
//
$lang['update_title'] = "Actualitzar phpMyVisites";
$lang['update_subtitle'] = "Actualitzant phpMyVisites.";
$lang['update_versions'] = "La versió prèvia era %s i s'ha actualitzat a %s.";
$lang['update_db_updated'] = "Base de dades satisfactoriament actualitzada";
$lang['update_continue'] = "Vull continuar a phpMyVisites";
$lang['update_jschange'] = "Atenció! El codi javascript  de phpMyVisites ha quedat modificat. Has d'actualitzar-lo a totes les pàgines";

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
$lang['tdate1'] = "%daylong% %daynumeric% de/d'  %monthlong%  de %yearlong%";

// Monday 10
$lang['tdate2'] = "%daylong% %daynumeric%";

// Week February 10 To February 17 2004
$lang['tdate3'] = "Setmana del %monthlong% %daynumeric% fins el %monthlong2% %daynumeric2% %yearlong%";

// February 2004 Month
$lang['tdate4'] = "%monthlong% %yearlong% Month";

// December 2003
$lang['tdate5'] = "%monthlong% de %yearlong%";

// 10 Febuary week
$lang['tdate6'] = "Setmana del %daynumeric% de/d' %monthlong%";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%daynumeric%-%monthnumeric%-%yearlong%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = "%dayshort% %daynumeric%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9'] = " Setm. %daynumeric% %monthshort%";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%monthshort% %yearshort%";

// Year 2004
$lang['tdate11'] = "Any %yearlong%";

// 2004
$lang['tdate12'] = "%yearlong%";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "Gener";
$lang['moistab']['02'] = "Febrer";
$lang['moistab']['03'] = "Març";
$lang['moistab']['04'] = "Abril";
$lang['moistab']['05'] = "Maig";
$lang['moistab']['06'] = "Juny";
$lang['moistab']['07'] = "Juliol";
$lang['moistab']['08'] = "Agost";
$lang['moistab']['09'] = "Setembre";
$lang['moistab']['10'] = "Octubre";
$lang['moistab']['11'] = "Novembre";
$lang['moistab']['12'] = "Desembre";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Gen";
$lang['moistab_graph']['02'] = "Feb";
$lang['moistab_graph']['03'] = "Març";
$lang['moistab_graph']['04'] = "Abr";
$lang['moistab_graph']['05'] = "May";
$lang['moistab_graph']['06'] = "Juny";
$lang['moistab_graph']['07'] = "Jul";
$lang['moistab_graph']['08'] = "Ago";
$lang['moistab_graph']['09'] = "Set";
$lang['moistab_graph']['10'] = "Oct";
$lang['moistab_graph']['11'] = "Nov";
$lang['moistab_graph']['12'] = "Des";

// Day of the week
$lang['jsemaine']['Mon'] = "Dilluns";
$lang['jsemaine']['Tue'] = "Dimarts";
$lang['jsemaine']['Wed'] = "Dimecres";
$lang['jsemaine']['Thu'] = "Dijous";
$lang['jsemaine']['Fri'] = "Divendres";
$lang['jsemaine']['Sat'] = "Dissabte";
$lang['jsemaine']['Sun'] = "Diumenge";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Dill";
$lang['jsemaine_graph']['Tue'] = "Dima";
$lang['jsemaine_graph']['Wed'] = "Dime";
$lang['jsemaine_graph']['Thu'] = "Dij";
$lang['jsemaine_graph']['Fri'] = "Div";
$lang['jsemaine_graph']['Sat'] = "Diss";
$lang['jsemaine_graph']['Sun'] = "Dium";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "M";
$lang['calendrier_jours'][1] = "T";
$lang['calendrier_jours'][2] = "W";
$lang['calendrier_jours'][3] = "T";
$lang['calendrier_jours'][4] = "F";
$lang['calendrier_jours'][5] = "Sa";
$lang['calendrier_jours'][6] = "Su";

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
$lang['afr'] = "Àfrica";
$lang['asi'] = "Asia";
$lang['ams'] = "Amèrica central/Sud";
$lang['amn'] = "Amèrica del Nord";
$lang['oce'] = "Oceania";

// Oceans
$lang['oc_pac'] = "Oceà pacífic"; 
$lang['oc_atl'] = "Ocreà atlàntic"; 
$lang['oc_ind'] = "Oceà indi"; 

// Countries
$lang['domaines'] = array(
    "xx" => "Desconegut",
    "ac" => "L'Ascensión (illa)",
    "ad" => "Andorra",
    "ae" => "Unió dels Emirats Àrabs",
    "af" => "Afganistan",
    "ag" => "Antigua i Barbuda",
    "ai" => "Anguilla",
    "al" => "Albània",
    "am" => "Armènia",
	"an" => "Netherlands Antilles",
    "ao" => "Angola",
    "aq" => "Antarctica",
	"ar" => "Argentina",
    "as" => "American Samoa",
	"at" => "Austria",
    "au" => "Austràlia",
    "aw" => "Aruba",
    "az" => "Azerbaidjan",
	"ba" => "Bosnia and Herzegovina",
    "bb" => "Barbada",
    "bd" => "Bangla Desh",
    "be" => "Bèlgica",
    "bf" => "Burkina Faso",
    "bg" => "Bulgària",
    "bh" => "Bahrain",
	"bi" => "Burundi",
    "bj" => "Benín",
    "bm" => "Bermudes",
    "bn" => "Brunei Darussalam",
    "bo" => "Bolívia",
    "br" => "Brasil",
    "bs" => "Bahames",
    "bt" => "Bhutan",
    "bv" => "Bouvet (illa)",
    "bw" => "Botswana",
    "by" => "Bielorússia",
    "bz" => "Belize",
    "ca" => "Canadà",
    "cc" => "Cocos (Keeling) illes",
    "cd" => "Rep. dem. Del Congo",
    "cf" => "Centreafricana (Rep)",
    "cg" => "Congo",
    "ch" => "Suïssa",
    "ci" => "Costa d'Ivori",
    "ck" => "Cook (illes)",
    "cl" => "Xile",
    "cm" => "Camerun",
    "cn" => "Xina",
    "co" => "Colòmbia",
    "cr" => "Costa Rica",
    "cs" => "Sèrbia Montenegro",
    "cu" => "Cuba",
    "cv" => "Cap Verd",
    "cx" => "Christmas (illa)",
    "cy" => "Xipre",
    "cz" => "Txèquia",
    "de" => "Alemanya",
    "dj" => "Djibouti",
    "dk" => "Dinamarca",
    "dm" => "Dominica",
    "do" => "Dominicana (Rep)",
    "dz" => "Algèria",
    "ec" => "Equador",
    "ee" => "Estònia",
    "eg" => "Egipte",
    "eh" => "Sàhara Occidental",
    "er" => "Eritreu",
	"es" => "Spain",
    "et" => "Etiòpia",
    "fi" => "Finlàndia",
    "fj" => "Fiji",
    "fk" => "Falkland (Malvines) illes",
    "fm" => "Micronèsia",
	"fo" => "Faroe Islands",
    "fr" => "França",
	"ga" => "Gabon",
    "gd" => "Grenada",
    "ge" => "Geòrgia",
    "gf" => "Guyana Francesa",
    "gg" => "Guernesey",
    "gh" => "Ghana",
    "gi" => "Gibraltar",
    "gl" => "Groenlàndia",
    "gm" => "Gàmbia",
    "gn" => "Guinea",
    "gp" => "Guadeloupe",
    "gq" => "Guinea Equatorial",
    "gr" => "Grècia",
    "gs" => "Geòrgia del Sud",
    "gt" => "Guatemala",
    "gu" => "Guam",
    "gw" => "Guinea-Bissau",
    "gy" => "Guyana",
    "hk" => "Hong Kong",
    "hm" => "Heard i McDonald (illes)",
    "hn" => "Hondures",
    "hr" => "Croàcia",
    "ht" => "Haití",
	"hu" => "Hungary",
	"id" => "Indonesia",
    "ie" => "Irlanda",
	"il" => "Israel",
    "im" => "Illa de Man",
    "in" => "Índia",
    "io" => "Ter. Brit. Oceà Indià",
    "iq" => "Iraq",
	"ir" => "Iran, Islamic Republic of",
	"is" => "Iceland",
    "it" => "Itàlia",
    "je" => "Yérsey",
    "jm" => "Jamaica",
	"jo" => "Jordan",
    "jp" => "Japó",
    "ke" => "Kenya",
    "kg" => "Kirgizstán",
    "kh" => "Cambotja",
	"ki" => "Kiribati",
    "km" => "Comores",
    "kn" => "Sant Kitts i Nevis",
    "kp" => "Corea del Nord",
    "kr" => "Corea del Sud",
    "kw" => "Kuwait",
    "ky" => "Caimans (illes)",
    "kz" => "Kazakhstan",
    "la" => "Laos",
    "lb" => "Líban",
    "lc" => "Santa Lucía",
    "li" => "Liechtenstein",
    "lk" => "Sri Lanka",
    "lr" => "Libèria",
    "ls" => "Lesotho",
    "lt" => "Lituània",
    "lu" => "Luxemburg",
    "lv" => "Letònia",
    "ly" => "Libyan Arab Jamahiriya",
    "ma" => "El Marroc",
    "mc" => "Mònaco",
    "md" => "Moldàvia",
    "mg" => "Madagascar",
    "mh" => "Marshall (illes)",
    "mk" => "Macedònia",
    "ml" => "Mali",
    "mm" => "Myanmar",
    "mn" => "Mongòlia",
    "mo" => "Macau",
    "mp" => "Mariannes del Nord (illes)",
    "mq" => "Martinica",
    "mr" => "Mauritània",
    "ms" => "Montserrat",
    "mt" => "Malta",
    "mu" => "Mauricio (illa)",
    "mv" => "Maldives",
    "mw" => "Malawi",
    "mx" => "Mèxic",
	"my" => "Malaysia",
    "mz" => "Moçambic",
    "na" => "Namíbia",
    "nc" => "Nova Caledònia",
    "ne" => "Níger",
    "nf" => "Norfolk (illa)",
    "ng" => "Nigèria",
    "ni" => "Nicaragua",
    "nl" => "Països Baixos",
    "no" => "Noruega",
    "np" => "Nepal",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "Nova Zelanda",
    "om" => "Oman",
    "pa" => "Panamà",
    "pe" => "Perú",
    "pf" => "Polinèsia Francesa",
    "pg" => "Papua Nova Guinea",
    "ph" => "Filipines",
    "pk" => "Pakistan",
    "pl" => "Polònia",
    "pm" => "St. Pierre i Miquelon",
    "pn" => "Pitcairn (illa)",
    "pr" => "Porte Rico",
	"ps" => "Palestinian Territory",
    "pt" => "Portugal",
    "pw" => "Palau",
    "py" => "Paraguai",
    "qa" => "Qatar",
    "re" => "Reunió (illa de la)",
    "ro" => "Romania",
    "ru" => "Rússia",
    "rs" => "Rússia",
    "rw" => "Rwanda",
    "sa" => "Aràbia Saudita",
    "sb" => "Salomó (illes)",
    "sc" => "Seychelles",
    "sd" => "Sudan",
    "se" => "Suècia",
    "sg" => "Singapur",
    "sh" => "Sta. Hel·lena",
    "si" => "Eslovènia",
    "sj" => "Svalbard/Jan Mayen (illes)",
    "sk" => "Eslovàquia",
    "sl" => "Sierra Leone",
    "sm" => "Saint Marín",
    "sn" => "Senegal",
	"so" => "Somalia",
    "sr" => "Surinam",
    "st" => "Sao Prenga i príncep",
	"su" => "Old U.S.S.R",
    "sv" => "Salvador",
	"sy" => "Syrian Arab Republic",
    "sz" => "Swazilàndia",
    "tc" => "Turks i Caïcs (illes)",
    "td" => "Txad",
    "tf" => "Territoris Fr. Del Sud",
    "tg" => "Togo",
    "th" => "Tailàndia",
    "tj" => "Tadjikistan",
    "tk" => "Tokelau",
    "tm" => "Turkmenistan",
    "tn" => "Tunis",
    "to" => "Tonga",
    "tp" => "Timor Oriental",
    "tr" => "Turquia",
    "tt" => "Trinitat i Tobago",
    "tv" => "Tuvalu",
    "tw" => "Taiwan",
    "tz" => "Tanzània",
    "ua" => "Ucraïna",
    "ug" => "Uganda",
    "uk" => "Regne Unit",
    "gb" => "Gran Bretanya",
    "um" => "US Minor Outlying (illes)",
    "us" => "Estats Units",
	"uy" => "Uruguay",
    "uz" => "Uzbekistan",
    "va" => "Vaticà",
    "vc" => "St. Vicente Granadines",
    "ve" => "Veneçuela",
    "vg" => "Verges Brit. (illes)",
	"vi" => "Virgin Islands, U.S.",
    "vn" => "Vietnam",
    "vu" => "Vanuatu",
    "wf" => "Wallis i Futuna (illes)",
    "ws" => "Western Samoa",
	"ye" => "Yemen",
    "yt" => "Miole't",
	"yu" => "Yugoslavia",
	"za" => "South Africa",
    "zm" => "Zàmbia",
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
    "ws" => "Western Samoa",
);
?>