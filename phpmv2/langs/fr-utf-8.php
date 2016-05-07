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
$lang['auteur_nom'] = "Matthieu Aubry"; // nom du traducteur
$lang['auteur_email'] = "contacts sur http://www.phpmyvisites.net/"; // email du traducteur
$lang['charset'] = "utf-8"; // charset du fichier de langue (utf-8 par défaut)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "fr"; // iso language code
$lang['lang_libelle_en'] = "French"; // le nom de la langue en anglais
$lang['lang_libelle_fr'] = "Français"; // le nom de la langue en français
$lang['unites_bytes'] = array('Octets', 'Ko', 'Mo', 'Go', 'To', 'Po', 'Eo');
$lang['separateur_milliers'] = ' '; //a trois cent mille s'écrit en français 300 000
$lang['separateur_decimaux'] = ','; // entre la partie entière d'un nombre et la partie décimale

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | Logiciel libre de statistiques et de mesure d'audience de sites internet"; // Titre des pages de stats dans le header html
$lang['head_keywords'] = "statistics, analytics, analysis, referals, stats, free, open source, visits, search engines, keywords, web, websites"; //Mots clé dans le header html
$lang['head_description'] = "phpMyVisites | An open source website statistics and analytics application distributed under the Gnu GPL"; //Description dans le header html
$lang['logo_description'] = "phpMyVisites | Open source web analytics"; // description pour le code JS : ne pas faire long

//
// Main menu & submenu
//
$lang['menu_visites'] = "Visites";
$lang['menu_pagesvues'] = "Pages vues";
$lang['menu_suivi'] = "Suivi";
$lang['menu_provenance'] = "Provenance";
$lang['menu_configurations'] = "Configurations";
$lang['menu_affluents'] = "Affluents";
$lang['menu_listesites'] = "Liste des sites";
$lang['menu_bilansites'] = "Résumé";
$lang['menu_jour'] = "Jour";
$lang['menu_semaine'] = "Semaine";
$lang['menu_mois'] = "Mois";
$lang['menu_annee'] = "Année";
$lang['menu_periode'] = "Période étudiée : %s"; // Période étudiée : Lundi 11 Novembre
$lang['liens_siteofficiel'] = "Site officiel";
$lang['liens_admin'] = "Administration";
$lang['liens_contacts'] = "Contacts";

//
// Divers
//
$lang['generique_nombre'] = "Nombre";
$lang['generique_tauxsortie'] = "Taux de sortie";
$lang['generique_ok'] = "ok";
$lang['generique_timefooter'] = "La génération de la page a durée %s secondes"; // temps en secondes
$lang['generique_divers'] = "Divers"; // (pour les graphs)
$lang['generique_inconnu'] = "Inconnu"; // (pour les graphs)
$lang['generique_vous'] = "... Vous ?";
$lang['generique_traducteur'] = "Traducteur";
$lang['generique_langue'] = "Langue"; 
$lang['generique_autrelangure'] = "Autre ?"; // Autre langue, appel à contribution
$lang['aucunvisiteur_titre'] = "Pas de visite sur cette période."; 
$lang['generique_aucune_visite_bdd'] = "<b>Attention ! </b> Vous n'avez aucune visite enregistrée dans la base de données. Assurez vous que le code javascript est bien installé sur vos pages, avec la bonne URL de phpMyVisites <u>DANS</u> le code Javascript. En cas de problème, regardez la documentation."; 
$lang['generique_aucune_site_bdd'] = "Aucun site enregistré dans la base de données ! Logguez vous en tant que super administrateur pour ajouter un nouveau site à phpMyVisites."; 
$lang['generique_retourhaut'] = "Haut";
$lang['generique_tempsvisite'] = "%1\$smin %2\$ss"; 
$lang['generique_tempsheure'] = "%sh"; // 4 h means 4 hours
$lang['generique_siteno'] = "Site %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Newsletter %s"; // Newsletter "version 2 announcement" 
$lang['generique_partnerno'] = "Partenaire %s"; // Newsletter "version 2 announcement"
$lang['generique_general'] = "Général"; 
$lang['generique_user'] = "Utilisateur %s"; // User "Admin"
$lang['generique_previous'] = "Précédent"; 
$lang['generique_next'] = "Suivant";
$lang['generique_lowpop'] = "Exclure les petites populations des statistiques";
$lang['generique_allpop'] = "Inclure toute la population dans les statistiques"; 
$lang['generique_to'] = "à"; // 4 'to' 8 
$lang['generique_total_on'] = "sur"; // 4 to 8 'on' 10 
$lang['generique_total'] = "TOTAL";
$lang['generique_information'] = "Informations"; 
$lang['generique_done'] = "Validé!"; 
$lang['generique_other'] = "Autre"; 
$lang['generique_description'] = "Description:"; 
$lang['generique_name'] = "Nom :"; 
$lang['generique_variables'] = "Variables";
$lang['generique_logout'] = "Déconnexion";
$lang['generique_login'] = "Connexion";
$lang['generique_hits'] = "Hits";
$lang['generique_errors'] = "Erreurs";
$lang['generique_site'] = "Site";
$lang['generique_help_novisits'] = "Astuce: Avez vous %s installé le tracker (code javascript) %s sur les pages du site à auditer ?";

//
// Authentication
//
$lang['login_password'] = "password :"; // en minuscule
$lang['login_login'] = "login :"; // en minuscule
$lang['login_error'] = "Erreur lors de la connexion. Mauvais login/mot de passe.";
$lang['login_error_nopermission'] = "L'utilisateur spécifié n'a pas de droit sur les sites Internet. Merci de contacter l'administrateur de votre phpMyVisites pour lui demander de vous donner les droits nécessaires.";
$lang['login_protected'] = "Vous souhaitez rentrer dans une zone protégée de  %sphpMyVisites%s.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Contacts";
$lang['contacts_langue'] = "Traductions";
$lang['contacts_merci'] = "Remerciements";
$lang['contacts_auteur'] = "L'auteur de l'application, de la documentation et créateur du projet phpMyVisites est <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "Pour toute <strong>question technique, rapport de bug, ou suggestion</strong>, veuillez s'il vous plaît <strong>utiliser les forums prévus à cet effet</strong> sur le site officiel %s. Pour les autres demandes, veuillez contactez l'auteur en utilisant le formulaire sur le site officiel."; // adresse du site
$lang['contacts_trad1'] = "Vous souhaiteriez utiliser phpMyVisites dans une autre langue ? N'hésitez pas à contribuer vous-même aux traductions de l'application, <strong>phpMyVisites a besoin de vous !</strong>";
$lang['contacts_trad2'] = "Traduire phpMyVisites est un travail qui demande un peu de temps (quelques heures) et qui nécessite une parfaite maîtrise de la langue dans laquelle la traduction est effectuée ; mais <strong>le travail réalisé sera utile à de très nombreux autres utilisateurs</strong>, lesquels pourront pleinement utiliser phpMyVisites. Si vous êtes intéressé pour traduire phpMyVisites, vous trouverez toutes les informations nécessaires dans %s la documentation officielle de phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "N'hésitez pas à consulter %s la documentation officielle de phpMyVisites %s qui vous donnera de très nombreuses informations sur l'installation, la configuration, les fonctionnalités de phpMyVisites, etc. Elle est disponible directement dans votre version de phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Un grand merci à <strong>%s</strong>, co-dévelopeurs de phpMyVisites, pour leur qualité de travail et leur intérêt sur le projet."; 
$lang['contacts_merci3'] = "N'hésitez pas à consulter la page remerciements sur le site officiel de phpMyVisites pour avoir une liste plus complète des amis de phpMyVisites.";
$lang['contacts_merci2'] = "Un grand merci également à tous ceux qui ont partagé leur culture en contribuant à la traduction de phpMyVisites :";

//
// Rss & Mails
//
$lang['rss_titre'] = "Site %1\$s le %2\$s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Aller aux statistiques détaillés";
$lang['mail_sender_name'] = "Statistiques web (Automatique)";

//
// Visits Part
//
$lang['visites_titre'] = "Informations visites";
$lang['visites_statistiques'] = "Statistiques";
$lang['visites_periodesel'] = "Pour la période sélectionnée";
$lang['visites_visites'] = "Visites";
$lang['visites_uniques'] = "Visiteurs uniques";
$lang['visites_pagesvues'] = "Pages vues";
$lang['visites_pagesvisiteurs'] = "Pages vues par visiteur";
$lang['visites_pagesvisites'] = "Pages par visite";  
$lang['visites_pagesvisitessign'] = "Pages par visite significative";
$lang['visites_tempsmoyen'] = "Temps moyen de visite";
$lang['visites_tempsmoyenpv'] = "Temps moyen par page vue";
$lang['visites_tauxvisite'] = "Taux de visites à une page";
$lang['visites_average_visits_per_day'] = "Visites par jour (moyenne)"; 
$lang['visites_recapperiode'] = "Récapitulatifs sur la période";
$lang['visites_nbvisites'] = "Visites";
$lang['visites_aucunevivisite'] = "Aucune visite"; // dans tableau, faire court
$lang['visites_recap'] = "Récapitulatif";
$lang['visites_unepage'] = "1 page"; // (graph)
$lang['visites_pages'] = "%s pages"; // 1-2 pages (graph)
$lang['visites_min'] = "%s min"; // 10-15 min (graph)
$lang['visites_sec'] = "%s s"; // 0-30 s (secondes, graph)
$lang['visites_grapghrecap'] = "Graphique récapitulatif des statistiques";
$lang['visites_grapghrecaplongterm'] = "Graphique de bilan à long terme"; 
$lang['visites_graphtempsvisites'] = "Graphique des durées des visites par visiteur";
$lang['visites_graphtempsvisitesimg'] = "Durée des visites par visiteur";
$lang['visites_graphheureserveur'] = "Graphique des visites par heure du serveur";
$lang['visites_graphheureserveurimg'] = "Visites heures serveur";
$lang['visites_graphheurevisiteur'] = "Graphique des visites par heure du visiteur";
$lang['visites_graphheurelocalimg'] = "Visites heures locales";
$lang['visites_longterm_statd'] = "Analyse à long terme (Jours de la période)";
$lang['visites_longterm_statm'] = "Analyse à long terme (Mois de la période)";  

//
// Sites Summary
//
$lang['summary_title'] = "Bilan multi-sites";
$lang['summary_stitle'] = "Résumé";

//
// Frequency Part
//
$lang['frequence_titre'] = "Fréquence des visites";
$lang['frequence_nouveauxconnusgraph'] = "Graphique des nouveaux visiteurs et visiteurs connus";
$lang['frequence_nouveauxconnus'] = "Nouveaux visiteurs et visiteurs connus";
$lang['frequence_titremenu'] = "Fréquence";
$lang['frequence_visitesconnues'] = "Visiteurs connus";
$lang['frequence_nouvellesvisites'] = "Nouvelles visites";
$lang['frequence_visiteursconnus'] = "Visiteurs connus";
$lang['frequence_nouveauxvisiteurs'] = "Nouveaux visiteurs";
$lang['frequence_returningrate'] = "Taux de retour";
$lang['pagesvues_vispervisgraph'] = "Graphique des visites par visiteur";
$lang['frequence_vispervis'] = "Nombre de visites par visiteur";
$lang['frequence_vis'] = "visite";
$lang['frequence_visit'] = "1 visite"; // (graph)
$lang['frequence_visits'] = "%s visites"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Informations pages vues";
$lang['pagesvues_joursel'] = "Jour sélectionné";
$lang['pagesvues_jmoins7'] = "Jour J-7";
$lang['pagesvues_jmoins14'] = "Jour J-14";
$lang['pagesvues_moyenne'] = "(moyenne)";
$lang['pagesvues_pagesvues'] = "Pages vues";
$lang['pagesvues_pagesvudiff'] = "Pages vues différentes";
$lang['pagesvues_recordpages'] = "Record de pages vues pour 1 visiteur";
$lang['pagesvues_tabdetails'] = "Tableau des détails des pages vues (de %s à %s)"; // (de 1 à 21)
$lang['pagesvues_graphsnbpages'] = "Graphique des visites par nombre de pages vues";
$lang['pagesvues_graphnbvisitespageimg'] = "Visites par nombre de pages vues";
$lang['pagesvues_graphheureserveur'] = "Graphique des pages vues par heure du serveur";
$lang['pagesvues_graphheureserveurimg'] = "Pages vues heures serveur";
$lang['pagesvues_graphheurevisiteur'] = "Graphique des pages vues par heure du visiteur";
$lang['pagesvues_graphpageslocalimg'] = "Pages vues heures locales";
$lang['pagesvues_tempsparpage'] = "Temps par page"; 
$lang['pagesvues_total_time'] = "Temps total";
$lang['pagesvues_avg_time'] = "Temps moyen";
$lang['pagesvues_help_pagename'] = "Saviez vous que vous pouvez donner un nom plus lisible aux pages dans les rapports ?";
$lang['pagesvues_help_track_dls'] = "Saviez vous qu'il est possible de comptabiliser les téléchargements de fichiers et les liens vers des URLs externes ?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Suivi du visiteur";
$lang['suivi_pageentree'] = "Pages d'entrées";
$lang['suivi_pagesortie'] = "Pages de sortie";
$lang['suivi_tauxsortie'] = "Taux de sortie";
$lang['suivi_pageentreehits'] = "Hits d'entrée"; 
$lang['suivi_pagesortiehits'] = "Hits de sortie"; 
$lang['suivi_singlepage'] = "Pages des visites à une page"; 

//
// Origin
//
$lang['provenance_titre'] = "Provenance";
$lang['provenance_recappays'] = "Récapitulatif des pays";
$lang['provenance_pays'] = "Pays";
$lang['provenance_paysimg'] = "Graphique des pays des visiteurs";
$lang['provenance_fai'] = "Fournisseurs d'accès";
$lang['provenance_nbpays'] = "Nombre de nationalités différentes : %s"; 
$lang['provenance_provider'] = "Providers"; // le même que $lang['provenance_fai'], sauf si $lang['provenance_fai'] est trop long
$lang['provenance_continent'] = "Continent";
$lang['provenance_mappemonde'] = "Mappemonde";
$lang['provenance_interetspays'] = "Intérêts par pays"; 

//
// Setup
//
$lang['configurations_titre'] = "Configurations visiteurs";
$lang['configurations_os'] = "Systèmes d'exploitation";
$lang['configurations_osimg'] = "Graphique des systèmes d'exploitation par visiteur";
$lang['configurations_navigateurs'] = "Navigateurs";
$lang['configurations_navigateursimg'] = "Graphique des navigateurs par visiteur";
$lang['configurations_resolutions'] = "Résolutions";
$lang['configurations_resolutionsimg'] = "Graphique des résolutions par visiteur";
$lang['configurations_couleurs'] = "Couleurs";
$lang['configurations_couleursimg'] = "Graphique des couleurs par visiteur";
$lang['configurations_rapport'] = "Ecran large/normal";
$lang['configurations_large'] = "Ecran large";
$lang['configurations_normal'] = "Ecran normal";
$lang['configurations_double'] = "Bi-écran"; 
$lang['configurations_plugins'] = "Plugins";
$lang['configurations_navigateursbytype'] = "Navigateurs (par famille)";
$lang['configurations_navigateursbytypeimg'] = "Graphiques des familles de navigateurs";
$lang['configurations_os_interest'] = "Intérêts par système d'exploitation"; 
$lang['configurations_navigateurs_interest'] = "Intérêts par navigateur"; 
$lang['configurations_resolutions_interest'] = "Intérêts par résolution"; 
$lang['configurations_couleurs_interest'] = "Intérêts par profondeur de couleurs"; 
$lang['configurations_configurations'] = "Configurations"; 

//
// Referers
//
$lang['affluents_titre'] = "Affluents";
$lang['affluents_recapimg'] = "Graphique récapitulatif des affluents";
$lang['affluents_directimg'] = "Direct";
$lang['affluents_sitesimg'] = "Sites";
$lang['affluents_moteursimg'] = "Moteurs"; 
$lang['affluents_referrersimg'] = "Affluents";
$lang['affluents_moteurs'] = "Moteurs de recherche";
$lang['affluents_nbparmoteur'] = "Nombre de visiteurs ayant accédé au site par des moteurs de recherche : %s";
$lang['affluents_aucunmoteur'] = "Aucun visiteur n'a accédé au site par des moteurs de recherche.";
$lang['affluents_motscles'] = "Mots clés";
$lang['affluents_nbmotscles'] = "Nombre de mots clés différents : %s";
$lang['affluents_aucunmotscles'] = "Aucun mot clé n'a été détecté.";
$lang['affluents_sitesinternet'] = "Sites internet";
$lang['affluents_nbautressites'] = "Nombre de visiteurs ayant accédé au site par des liens sur d'autres sites internet : %s";
$lang['affluents_nbautressitesdiff'] = "Nombre de sites différents : %s";
$lang['affluents_aucunautresite'] = "Aucun visiteur n'a accédé au site par d'autres sites internet.";
$lang['affluents_entreedirecte'] = "Entrées directes";
$lang['affluents_nbentreedirecte'] = "Nombre de visiteurs ayant accédé directement au site : %s";
$lang['affluents_nbpartenaires'] = "Nombre de visiteurs ayant accédé au site par des liens sur des sites partenaires : %s"; 
$lang['affluents_aucunpartenaire'] = "Aucun visiteur n'a accédé au site depuis un lien sur un site partenaire."; 
$lang['affluents_nbnewsletters'] = "Nombre de visiteurs ayant accédé au site par des liens dans des newsletters : %s"; 
$lang['affluents_aucunnewsletter'] = "Aucun visiteur n'a accédé au site depuis un lien dans une newsletter."; 
$lang['affluents_details'] = "Détails"; // dans le tableau sous résultats de sites referrers
$lang['affluents_interetsmoteurs'] = "Intérêts par moteurs de recherche"; 
$lang['affluents_interetsmotscles'] = "Intérêts par mots clés"; 
$lang['affluents_interetssitesinternet'] = "Intérêts par sites Internet"; 
$lang['affluents_partenairesimg'] = "Partenaires"; 
$lang['affluents_partenaires'] = "Partenaires"; 
$lang['affluents_interetspartenaires'] = "Intérêts par sites partenaires"; 
$lang['affluents_newslettersimg'] = "Newsletters"; 
$lang['affluents_newsletters'] = "Newsletters"; 
$lang['affluents_interetsnewsletters'] = "Intérêts par newsletter"; 
$lang['affluents_type'] = "Type d'affluent";
$lang['affluents_interetstype'] = "Intérêts par type d'accès";

//
// Summary
//
$lang['purge_titre'] = "Résumé des visites et affluents";
$lang['purge_intro'] = "Cette période a été purgée dans l'administration : seules les statistiques essentielles ont été sauvegardées.";
$lang['admin_purge'] = "Purge et optimisation de la base de données";
$lang['admin_purgeintro'] = "Cette rubrique vous permet de gérer les tables de phpMyVisites. Vous pouvez consulter la taille occupée par les tables, les optimiser (à conseiller sur les tables de taille importante), ou supprimer des enregistrements anciens. Cela vous permettra de limiter les tailles de vos tables dans la base de données.";
$lang['admin_optimisation'] = "Optimisation de [ %s ]..."; // nom des tables
$lang['admin_postopt'] = "La taille totale a diminuée de %chiffres% %unites%"; // Ex : 28 Ko
$lang['admin_purgeres'] = "Purge des périodes suivantes : %s";
$lang['admin_purge_fini'] = "Fin de l'opération de purge des tables...";
$lang['admin_bdd_nom'] = "Nom";
$lang['admin_bdd_enregistrements'] = "Enregistrements";
$lang['admin_bdd_taille'] = "Taille table";
$lang['admin_bdd_opt'] = "Optimiser";
$lang['admin_bdd_purge'] = "Purge des tables";
$lang['admin_bdd_optall'] = "Tout optimiser";
$lang['admin_purge_j'] = "Purge des éléments vieux de %s jours";
$lang['admin_purge_s'] = "Purge des éléments vieux de %s semaines";
$lang['admin_purge_m'] = "Purge des éléments vieux de %s mois";
$lang['admin_purge_y'] = "Purge des éléments vieux de %s années"; 
$lang['admin_purge_logs'] = "Purge des logs (Archiver tous les jours terminés)";
$lang['admin_purge_autres'] = "Purge commune à la table '%s'";
$lang['admin_purge_none'] = "Aucune action possible";
$lang['admin_purge_cal'] = "Calculer et purger (cela peut prendre quelques minutes)";
$lang['admin_alias_title'] = "Alias et URLs du site"; 
$lang['admin_partner_title'] = "Sites partenaires"; 
$lang['admin_newsletter_title'] = "Newsletters du site"; 
$lang['admin_ip_exclude_title'] = "Plage d'Ip à exclure des statistiques"; 
$lang['admin_name'] = "Nom:"; 
$lang['admin_error_ip'] = "L'Ip doit être dans un format correct: %s"; 
$lang['admin_site_name'] = "Nom du site"; 
$lang['admin_site_url'] = "URL principale du site"; 
$lang['admin_db_log'] = "Essayez de vous identifier en tant que Super Utilisateur de phpMyVisites pour changer les paramètres de configuration de l'accès à la base de données."; 
$lang['admin_error_critical'] = "Erreur, doit être réparé pour que phpMyVisites fonctionne correctement."; 
$lang['admin_warning'] = "Attention, phpMyVisites pourrait fonctionner correctement mais certaines fonctionnalités seront indisponibles."; 
$lang['admin_move_group'] = "Déplacer dans le groupe:";
$lang['admin_move_select'] = "Sélectionner un groupe";

//
// Setup
//
$lang['admin_intro'] = "Bienvenue dans la partie configuration de phpMyVisites. Vous pouvez modifier et paramétrer toutes les informations relatives à votre installation. Si vous avez des problèmes avec l'utilisation de certaines fonctionnalités, n'hésitez pas à consulter %s la documentation officielle de phpMyVisites %s."; // lien vers la documentation
$lang['admin_configetperso'] = "Configuration générale";
$lang['admin_afficherjavascript'] = "Afficher le code javascript à insérer sur les pages";
$lang['admin_cookieadmin'] = "Ne pas vous prendre en compte dans les statistiques";
$lang['admin_ip_ranges'] = "Exclure des IP/plages d'ips des statistiques";
$lang['admin_sitesenregistres'] = "Liste des sites enregistrés :";
$lang['admin_retour'] = "Retour";
$lang['admin_cookienavigateur'] = "Vous avez la possibilité de ne pas tenir compte de vos visites sur le site et de ne pas être totalisé par phpMyVisites. La méthode utilisée repose sur les cookies, cette option ne sera donc valable que pour le navigateur que vous utilisez au moment de la configuration. Vous pouvez bien sûr changer cette configuration ici à tout moment.";
$lang['admin_prendreencompteadmin'] = "Prendre en compte l'admin pour les statistiques (supprimer le cookie)";
$lang['admin_nepasprendreencompteadmin'] = "Ne pas prendre en compte l'admin pour les statistiques (mettre un cookie)";
$lang['admin_etatcookieoui'] = "Actuellement vous êtes pris en compte dans les statistiques pour ce site (ceci est la configuration par défaut, vous êtes considéré comme un visiteur normal).";
$lang['admin_etatcookienon'] = "Actuellement vous n'êtes pas pris en compte pour les statistiques pour ce site (Lorsque vous visitez le site ci-dessus, vous n'êtes pas comptabilisé par phpMyVisites).";
$lang['admin_deleteconfirm'] = "Veuillez confirmer que vous souhaitez effacer %s ?"; 
$lang['admin_sitedeletemessage'] = "<u>Faites très attention</u> : toutes les données associéees à ce site seront supprimées <br>et il n'y aura aucune moyen de récupérer cette perte de données !"; 
$lang['admin_confirmyes'] = "Oui, je souhaite le supprimer"; 
$lang['admin_confirmno'] = "Non, je ne souhaite pas le supprimer"; 
$lang['admin_nonewsletter'] = "Aucune newsletter trouvée pour ce site !"; 
$lang['admin_nopartner'] = "Aucun site partenaire trouvé pour ce site !"; 
$lang['admin_get_question'] = "Enregistrer les variables GET (dans l'URL) ?"; 
$lang['admin_get_a1'] = "Enregistrer toutes les variables"; 
$lang['admin_get_a2'] = "Ne pas enregistrer les variables"; 
$lang['admin_get_a3'] = "Enregistrer seulement les variables spécifiées"; 
$lang['admin_get_a4'] = "Enregistrer toutes les variables sauf celles spécifiées"; 
$lang['admin_get_list'] = "Noms des variables (séparées par des <b>;</b>) <br/>Exemple : %s"; 
$lang['admin_required'] = "%s est requis."; 
$lang['admin_title_required'] = "Requis"; 
$lang['admin_write_dir'] = "Répertoire avec droits d'écriture"; 
$lang['admin_chmod_howto'] = "Ces répertoires doivent autoriser l'écriture par le serveur web. Pour cela, vous devez faire un chmod 777 sur ces répertoires avec votre logiciel FTP (clic droit sur le répertoire > chmod (ou permissions))"; 
$lang['admin_optional'] = "Optionnel"; 
$lang['admin_memory_limit'] = "Limite de mémoire"; 
$lang['admin_allowed'] = "autorisé"; 
$lang['admin_webserver'] = "Serveur web"; 
$lang['admin_server_os'] = "Serveur OS"; 
$lang['admin_server_time'] = "Server time"; 
$lang['admin_legend'] = "Légende :"; 
$lang['admin_error_url'] = "L'URL doit être dans un format correct : %s (sans slash à la fin)"; 
$lang['admin_url_n'] = "Url %s:"; 
$lang['admin_url_aliases'] = "Alias d'URLs"; 
$lang['admin_logo_question'] = "Afficher le logo ?"; 
$lang['admin_type_again'] = "(recommencez)"; 
$lang['admin_admin_mail'] = "Email Super Administrateur"; 
$lang['admin_admin'] = "Super Utilisateur";
$lang['admin_phpmv_path'] = "Chemin complet d'accès à votre répertoire phpmyvisites"; 
$lang['admin_valid_email'] = "L'Email doit être un email valide."; 
$lang['admin_valid_pass'] = "Le mot de passe doit être plus complexe (6 caractères minimum, et doit contenir des chiffres)"; 
$lang['admin_match_pass'] = "Les mots de passe ne correspondent pas";
$lang['admin_no_user_group'] = "Aucun utilisateur dans ce groupe pour ce site"; 
$lang['admin_recorded_nl'] = "Newsletters enregistrées:"; 
$lang['admin_recorded_partners'] = "Partenaires enregistrés:"; 
$lang['admin_recorded_users'] = "Utilisateurs enregistrés:"; 
$lang['admin_select_site_title'] = "Veuillez sélectionner un site :"; 
$lang['admin_select_user_title'] = "Veuillez sélectionner un utilisateur"; 
$lang['admin_no_user_registered'] = "Aucun utilisateur enregistré"; 
$lang['admin_configuration'] = "Configuration"; 
$lang['admin_general_conf'] = "Configuration générale"; 
$lang['admin_group_title'] = "Gestion des groupes (permissions)"; 
$lang['admin_user_title'] = "Gestion des utilisateurs"; 
$lang['admin_user_add'] = "Ajouter un utilisateur"; 
$lang['admin_user_mod'] = "Modifier un utilisateur"; 
$lang['admin_user_del'] = "Supprimer un utilisateur"; 
$lang['admin_server_info'] = "Informations du serveur web"; 
$lang['admin_send_mail'] = "Envoyer les statistiques par email"; 
$lang['admin_rss_feed'] = "Statistiques dans un Fil RSS"; 
$lang['admin_site_admin'] = "Administration Site"; 
$lang['admin_site_add'] = "Ajouter un site"; 
$lang['admin_site_mod'] = "Modifier un site"; 
$lang['admin_site_del'] = "Supprimer un site"; 
$lang['admin_nl_add'] = "Ajouter une newsletter"; 
$lang['admin_nl_mod'] = "Modifier une newsletter"; 
$lang['admin_nl_del'] = "Supprimer une newsletter"; 
$lang['admin_partner_add'] = "Ajouter un partenaire"; 
$lang['admin_partner_mod'] = "Modifier le nom/url d'un partenaire"; 
$lang['admin_partner_del'] = "Supprimer un partenaire"; 
$lang['admin_url_alias'] = "Gestion des alias d'Urls"; 
$lang['admin_group_admin_n'] = "Voir statistiques + Droits administrateurs"; 
$lang['admin_group_admin_d'] = "Les utilisateurs peuvent voir les statistiques du site et éditer ses informations (nom, ajouter un cookie, exclure des IPs/plages d'ip, gérer les alias d'Urls, etc.)"; 
$lang['admin_group_view_n'] = "Voir statistiques"; 
$lang['admin_group_view_d'] = "Les utilisateurs peuvent seulement voir les statistiques. Aucun droit d'administration";
$lang['admin_group_noperm_n'] = "Aucune permission"; 
$lang['admin_group_noperm_d'] = "Les utilisateurs de ce groupe n'ont aucune permission de voir les statistiques ou d'éditer les informations de ce site."; 
$lang['admin_group_stitle'] = "Vous pouvez changer les groupes d'utilisateurs en sélectionnant des utilisateurs, puis en choisissant dans la liste déroulante le groupe dans lequel vous voulez les déplacer.";
$lang['admin_url_generate_download_link_example'] = "URL du Fichier à télécharger ou URL à comptabiliser";
$lang['admin_url_generate_title'] = "Téléchargement / Redirection Url : Générateur d'URLs";
$lang['admin_url_generate_intro'] = "phpMyVisites peut comptabiliser les téléchargements de fichiers, et peut tracker les clics sur les liens externes (URL sortantes). Les fichiers et URLs trackés de cette manière apparaissent dans la partie 'Pages vues' de l'interface.</p><p class='texte'> Pour comptabiliser les clics, il faut utiliser une URL spéciale qui pointe sur le fichier de phpMyVisites et qui redirigera le visiteur vers le fichier ou le site souhaité. Générer une telle URL n'est pas aisé, c'est pourquoi cet outil est à votre disposition (phpMyVisites doit être une expérience utilisateur parfaite !). Il vous suffit de remplir le formulaire, cliquer sur 'Générer l'URL', et vous pourrez comptabiliser le traffic sur vos fichiers en téléchargements ou vos liens partenaires !";
$lang['admin_url_generate_site_selection'] = "Sélectionnez le site pour lequel vous souhaitez tracker un fichier ou un lien vers une URL";
$lang['admin_url_generate_enter_url'] = "Saisissez l'adresse complète du fichier à télécharger, ou de l'URL que vous souhaitez tracker :";
$lang['admin_url_generate_help_enter_url'] = "Aide: Il doit être de la forme '<b>http://www.yoursite.com/file/brilliant-software.zip</b>' ou pour une redirection  d'URL '<b>http://www.the-site-to-redirect.com</b>'";
$lang['admin_url_generate_friendly_name'] = "Nom du fichier (alias) ou du site, qui sera utilisé pour désigner le clic dans le tableau des pages vues :"; 
$lang['admin_url_generate_help_friendly_name'] = "Aide: Vous pouvez classifier les fichiers et redirections d'URLs dans des catégories, pour un meilleur affichage dans la section 'Pages vues'. Pour cela, il suffit de séparer le nom de la catégorie et l'alias qui définit votre fichier / URL par le caractère '<b>/</b>'. Par exemple, le nom peut être '<b>Mes photos / Vacances en Inde</b>' ou '<b>Partenaires /PHP.net site</b>' : cela classifiera automatiquement les clics dans le répertoire '<b>Mes photos</b>' ou l'url dans le répertoire '<b>Partenaires</b>' ; vous pourrez alors visionner facilement et rapidement les résultats statistiques dans l'interface.";
$lang['admin_url_generate_result_url'] = "Voici l'URL générée que vous devez utiliser pour le tracking : ";
$lang['admin_url_generate_html_result'] = "Si cela vous est utile, voici le lien HTML qui utilise l'URL générée ci dessus :";
$lang['admin_url_generate_image_legend'] = "Exemple de l'interface une fois le tracking mis en place :";
$lang['admin_site_link_javascript'] = "%s Vous devez maintenant installer le tracker sur vos pages (copier coller le code javascript). Cliquer ici pour afficher le code Javascript. %s";
$lang['admin_last_version'] = "Avez vous la dernière version de phpMyVisites ? (recommandé !)";
$lang['admin_general_config_firstday'] = "Premier jour dans le calendrier ?";
$lang['admin_default_language'] = "Langue par défaut ? <br/>Ce sera également la langue utilisée pour les mails.";

//
// Pdf export
//
$lang['pdf_generate_link'] = "Générer un PDF présentant les statistiques du site %s";
$lang['pdf_summary_generate_link'] = "Générer un PDF présentant le résumé des sites";
$lang['pdf_free_page'] = "Nouvelle page libre";
$lang['pdf_free_chapter'] = "Titre de chapitre libre";
$lang['pdf_page_break'] = "Saut de page";
$lang['pdf_page_summary'] = "Sommaire";
$lang['generique_pdfno'] = "PDF %s"; // Newsletter "version 2 announcement" 
$lang['admin_pdf_title'] = "PDF du site"; 
$lang['admin_nopdf'] = "Aucun pdf trouvé pour ce site !"; 
$lang['admin_recorded_pdf'] = "PDFs enregistrés:"; 
$lang['admin_pdf_add'] = "Ajouter un PDF"; 
$lang['admin_pdf_mod'] = "Modifier un PDF"; 
$lang['admin_pdf_del'] = "Supprimer un PDF"; 
$lang['generique_pdf'] = "PDF";

//
// Installation Step
//
$lang['install_loginmysql'] = "Login MySQL";
$lang['install_mdpmysql'] = "Mot de passe MySQL";
$lang['install_serveurmysql'] = "Serveur MySQL";
$lang['install_basemysql'] = "Base MySQL";
$lang['install_prefixetable'] = "Préfixe des tables";
$lang['install_utilisateursavances'] = "Utilisateurs avancés (facultatif)";
$lang['install_oui'] = "Oui";
$lang['install_non'] = "Non";
$lang['install_ok'] = "ok";
$lang['install_probleme'] = "Problème : ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Login d'accès à l'administration :";
$lang['install_mdpadmin'] = "Mot de passe d'accès à l'administration :";
$lang['install_chemincomplet'] = "Chemin complet d'accès à phpMyVisites (de la forme 'http://www.monsite.com/rep1/rep3/phpmyvisites/'). Le chemin doit finir par un '<strong>/</strong>'.";
$lang['install_afficherlogo'] = "Afficher le logo %s sur les pages indexées ? <strong>Autoriser l'affichage du logo sur votre site permettra à phpMyVisites de mieux se faire connaître de tous et ainsi d'évoluer plus rapidement : c'est une manière de remercier l'équipe de développement</strong> qui a passé de très nombreuses heures à développer cette application libre et gratuite."; // %s remplacé par l'image du logo
$lang['install_affichergraphique'] = "Afficher les graphiques lors de la consultation des statistiques ?";
$lang['install_valider'] = "Valider"; // à l'install et au login
$lang['install_popup_logo'] = "Sélectionnez le logo désiré";
$lang['install_logodispo'] = "Voir les différents logos disponibles.";
$lang['install_welcome'] = "Bienvenue !"; 
$lang['install_system_requirements'] = "Configuration requise"; 
$lang['install_database_setup'] = "Configuration Base de données"; 
$lang['install_create_tables'] = "Création des tables"; 
$lang['install_general_setup'] = "Configuration générale"; 
$lang['install_create_config_file'] = "Création du fichier de configuration"; 
$lang['install_first_website_setup'] = "Ajout du site Internet"; 
$lang['install_display_javascript_code'] = "Affichage du code Javascript"; 
$lang['install_finish'] = "Fini !"; 
$lang['install_txt2'] = "A la fin de l'installation, une requête sera faite vers le site officiel, <strong>dans le seul but de comptabiliser le nombre d'utilisateurs de phpMyVisites</strong> (bien sûr, aucune information confidentielle ne sera transmise). Merci de votre compréhension.";
$lang['install_database_setup_txt'] = "Veuillez entrer les informations relatives à votre base de données."; 
$lang['install_general_config_text'] = "phpMyVisite n'aura qu'un seul et unique super administrateur. Il aura l'accès complet pour voir/éditer les sites et autres configurations. Veuillez choisir un login et un mot de passe pour ce compte. Vous pourrez ajouter des nouveaux utilisateurs plus tard."; 
$lang['install_config_file'] = " Les informations sur le super administrateur ont été enregistrées avec succès."; 
$lang['install_js_code_text'] = "<p>Pour prendre en compte les visites dans phpMyVisites, vous devez ajouter ce court code javascript sur toutes les pages de votre site Internet. </p><p> Vos pages ne doivent pas nécessairement être en PHP, <strong>phpMyVisites fonctionne très bien avec tous les formats (HTML, ASP, Perl ou autres).</strong> </p><p> Voici le code que vous devez insérer: (copiez collez le sur toutes les pages de votre site) </p>"; 
$lang['install_intro'] = "Bienvenue dans la phase d'installation de phpMyVisites.";  
$lang['install_intro2'] = "L'installation est séparée en %s phases simples et prendra environ 10 minutes."; 
$lang['install_next_step'] = "Aller à la phase suivante"; 
$lang['install_status'] = "Avancement de l'installation"; 
$lang['install_done'] = "Installation à %s%% complète"; // Install 25% complete 
$lang['install_site_success'] = "Site crée avec succès !"; 
$lang['install_site_info'] = "Veuillez entrer toutes les informations relatives au site Internet."; 
$lang['install_go_phpmv'] = "Aller sur phpMyVisites"; 
$lang['install_congratulation'] = "Félicitations ! Votre installation de phpMyVisites est terminée."; 
$lang['install_end_text'] = "Assurez vous d'avoir bien installé le code Javascript sur toutes vos pages Internet et vous n'avez plus qu'à attendre vos premiers visiteurs !"; 
$lang['install_db_ok'] = "Connexion à la base de données ok!"; 
$lang['install_table_exist'] = "Les tables de phpMyVisites existent déjà dans la base de données."; 
$lang['install_table_choice'] = "Vous avez le choix entre réutiliser les tables existantes de votre base de données, ou partir avec une installation propre en supprimant toutes les tables existantes."; 
$lang['install_table_erase'] = "Supprimer toutes les tables (Soyez prudents !)"; 
$lang['install_table_reuse'] = "Utiliser les tables existantes"; 
$lang['install_table_success'] = "Tables crées avec succès !"; 
$lang['install_send_mail'] = "Recevoir chaque jour par email, pour chaque site enregistré, un bilan des statistiques?";

//
// Update Step
//
$lang['update_title'] = "Mise à jour de phpMyVisites";
$lang['update_subtitle'] = "Nous détectons que vous avez mis à jour phpMyVisites.";
$lang['update_versions'] = "Votre version précédente était la version %s et vous souhaitez passer en version %s.";
$lang['update_db_updated'] = "Votre base de données a été mise à jour avec succès !";
$lang['update_continue'] = "Continuer sur phpMyVisites";
$lang['update_jschange'] = "Attention ! <br /> Le code Javascript de phpMyVisites a changé. Vous DEVEZ mettre à jour vos pages et copier/coller le nouveau code Javascript de phpMyVisites sur TOUS vos sites configurés. <br /> Le changement de code Javascript est très rare, nous sommes désolés des désagréments encourus.";

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
$lang['tdate1'] = "%daylong% %daynumeric% %monthlong% %yearlong%"; 

// Monday 10
$lang['tdate2'] = "%daylong% %daynumeric%"; 

// Week February 10 To February 17 2004
$lang['tdate3'] = "Semaine du %daynumeric% %monthlong% au %daynumeric2% %monthlong2% %yearlong%"; 

// February 2004 Month
$lang['tdate4'] = "Mois de %monthlong% %yearlong%";

// December 2003
$lang['tdate5'] = "%monthlong% %yearlong%";

// 10 Febuary week
$lang['tdate6'] = "Semaine du %daynumeric% %monthlong%";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%daynumeric%-%monthnumeric%-%yearlong%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = "%dayshort% %daynumeric%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9'] = " Sem %daynumeric% %monthshort%";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%monthshort% %yearlong%"; 

// Year 2004
$lang['tdate11'] = "Année %yearlong%"; 

// 2004
$lang['tdate12'] = "%yearlong%"; 

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "Janvier";
$lang['moistab']['02'] = "Février";
$lang['moistab']['03'] = "Mars";
$lang['moistab']['04'] = "Avril";
$lang['moistab']['05'] = "Mai";
$lang['moistab']['06'] = "Juin";
$lang['moistab']['07'] = "Juillet";
$lang['moistab']['08'] = "Août";
$lang['moistab']['09'] = "Septembre";
$lang['moistab']['10'] = "Octobre";
$lang['moistab']['11'] = "Novembre";
$lang['moistab']['12'] = "Décembre";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Janv";
$lang['moistab_graph']['02'] = "Fevr";
$lang['moistab_graph']['03'] = "Mars";
$lang['moistab_graph']['04'] = "Avril";
$lang['moistab_graph']['05'] = "Mai";
$lang['moistab_graph']['06'] = "Juin";
$lang['moistab_graph']['07'] = "Juil";
$lang['moistab_graph']['08'] = "Aout";
$lang['moistab_graph']['09'] = "Sept";
$lang['moistab_graph']['10'] = "Oct";
$lang['moistab_graph']['11'] = "Nov";
$lang['moistab_graph']['12'] = "Dec";

// Day of the week
$lang['jsemaine']['Mon'] = "Lundi";
$lang['jsemaine']['Tue'] = "Mardi";
$lang['jsemaine']['Wed'] = "Mercredi";
$lang['jsemaine']['Thu'] = "Jeudi";
$lang['jsemaine']['Fri'] = "Vendredi";
$lang['jsemaine']['Sat'] = "Samedi";
$lang['jsemaine']['Sun'] = "Dimanche";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Lun";
$lang['jsemaine_graph']['Tue'] = "Mar";
$lang['jsemaine_graph']['Wed'] = "Mer";
$lang['jsemaine_graph']['Thu'] = "Jeu";
$lang['jsemaine_graph']['Fri'] = "Ven";
$lang['jsemaine_graph']['Sat'] = "Sam";
$lang['jsemaine_graph']['Sun'] = "Dim";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "L";
$lang['calendrier_jours'][1] = "M";
$lang['calendrier_jours'][2] = "M";
$lang['calendrier_jours'][3] = "J";
$lang['calendrier_jours'][4] = "V";
$lang['calendrier_jours'][5] = "S";
$lang['calendrier_jours'][6] = "D";

// DO NOT ALTER!
$lang['weekdays']['Mon'] = '1';
$lang['weekdays']['Tue'] = '2';
$lang['weekdays']['Wed'] = '3';
$lang['weekdays']['Thu'] = '4';
$lang['weekdays']['Fri'] = '5';
$lang['weekdays']['Sat'] = '6';
$lang['weekdays']['Sun'] = '7';

// Continents
$lang['eur'] = "Europe";
$lang['afr'] = "Afrique";
$lang['asi'] = "Asie";
$lang['ams'] = "Amérique centrale/sud";
$lang['amn'] = "Amérique du nord";
$lang['oce'] = "Océanie";

// Oceans
$lang['oc_pac'] = "OCÉAN PACIFIQUE";
$lang['oc_atl'] = "OCÉAN ATLANTIQUE";
$lang['oc_ind'] = "OCÉAN INDIEN";

// Countries
$lang['domaines'] = array( 
	"xx" => "Inconnu",
	"ac" => "Ascension (île)",
	"ad" => "Andorre",
	"ae" => "Emirats Arabes Unis",
	"af" => "Afghanistan",
	"ag" => "Antigua et Barbuda",
	"ai" => "Anguilla",
	"al" => "Albanie",
	"am" => "Arménie",
	"an" => "Antilles Neerlandaises",
	"ao" => "Angola",
	"aq" => "Antarctique",
	"ar" => "Argentine",
	"as" => "American Samoa",
	"at" => "Autriche",
	"au" => "Australie",
	"aw" => "Aruba",
	"az" => "Azerbaidjan",
	"ba" => "Bosnie Herzégovine",
	"bb" => "Barbade",
	"bd" => "Bangladesh",
	"be" => "Belgique",
	"bf" => "Burkina Faso",
	"bg" => "Bulgarie",
	"bh" => "Bahrein",
	"bi" => "Burundi",
	"bj" => "Bénin",
	"bm" => "Bermudes",
	"bn" => "Brunei",
	"bo" => "Bolivie",
	"br" => "Brésil",
	"bs" => "Bahamas",
	"bt" => "Bhoutan",
	"bv" => "Bouvet (île)",
	"bw" => "Botswana",
	"by" => "Biélorussie",
	"bz" => "Bélize",
	"ca" => "Canada",
	"cc" => "Cocos (Keeling) îles",
	"cd" => "Rép. dém. du Congo",
	"cf" => "Rép Centrafricaine",
	"cg" => "Congo",
	"ch" => "Suisse",
	"ci" => "Côte d'Ivoire",
	"ck" => "Cook (îles)",
	"cl" => "Chili",
	"cm" => "Cameroun",
	"cn" => "Chine",
	"co" => "Colombie",
	"cr" => "Costa Rica",
	"cs" => "Serbie Montenegro", 
	"cu" => "Cuba",
	"cv" => "Cap Vert",
	"cx" => "Christmas (île)",
	"cy" => "Chypre",
	"cz" => "Tchéquie",
	"de" => "Allemagne",
	"dj" => "Djibouti",
	"dk" => "Danemark",
	"dm" => "Dominique",
	"do" => "Rép Dominicaine",
	"dz" => "Algérie",
	"ec" => "Equateur",
	"ee" => "Estonie",
	"eg" => "Egypte",
	"eh" => "Sahara Occidental",
	"er" => "Erythrée",
	"es" => "Espagne",
	"et" => "Ethiopie",
	"fi" => "Finlande",
	"fj" => "Fidji",
	"fk" => "Falkland (Malouines) îles",
	"fm" => "Micronésie",
	"fo" => "Faroe (îles)",
	"fr" => "France",
	"ga" => "Gabon",
	"gd" => "Grenade",
	"ge" => "Géorgie",
	"gf" => "Guyane Française",
	"gg" => "Guernsey",
	"gh" => "Ghana",
	"gi" => "Gibraltar",
	"gl" => "Groenland",
	"gm" => "Gambie",
	"gn" => "Guinée",
	"gp" => "Guadeloupe",
	"gq" => "Guinée Equatoriale",
	"gr" => "Grèce",
	"gs" => "Géorgie du sud",
	"gt" => "Guatemala",
	"gu" => "Guam",
	"gw" => "Guinée-Bissau",
	"gy" => "Guyana",
	"hk" => "Hong Kong",
	"hm" => "Heard et McDonald (îles)",
	"hn" => "Honduras",
	"hr" => "Croatie",
	"ht" => "Haiti",
	"hu" => "Hongrie",
	"id" => "Indonésie",
	"ie" => "Irlande",
	"il" => "Israël",
	"im" => "Ile de Man",
	"in" => "Inde",
	"io" => "Ter. Brit. Océan Indien",
	"iq" => "Iraq",
	"ir" => "Iran",
	"is" => "Islande",
	"it" => "Italie",
	"je" => "Jersey",
	"jm" => "Jamaïque",
	"jo" => "Jordanie",
	"jp" => "Japon",
	"ke" => "Kenya",
	"kg" => "Kirghizistan",
	"kh" => "Cambodge",
	"ki" => "Kiribati",
	"km" => "Comores",
	"kn" => "Saint Kitts et Nevis",
	"kp" => "Corée du nord",
	"kr" => "Corée du sud",
	"kw" => "Koweït",
	"ky" => "Caïmanes (îles)",
	"kz" => "Kazakhstan",
	"la" => "Laos",
	"lb" => "Liban",
	"lc" => "Sainte Lucie",
	"li" => "Liechtenstein",
	"lk" => "Sri Lanka",
	"lr" => "Liberia",
	"ls" => "Lesotho",
	"lt" => "Lituanie",
	"lu" => "Luxembourg",
	"lv" => "Lettonie",
	"ly" => "Libye",
	"ma" => "Maroc",
	"mc" => "Monaco",
	"md" => "Moldavie",
	"mg" => "Madagascar",
	"mh" => "Marshall (îles)",
	"mk" => "Macédoine",
	"ml" => "Mali",
	"mm" => "Myanmar",
	"mn" => "Mongolie",
	"mo" => "Macao",
	"mp" => "Mariannes du nord (îles)",
	"mq" => "Martinique",
	"mr" => "Mauritanie",
	"ms" => "Montserrat",
	"mt" => "Malte",
	"mu" => "Maurice (île)",
	"mv" => "Maldives",
	"mw" => "Malawi",
	"mx" => "Mexique",
	"my" => "Malaisie",
	"mz" => "Mozambique",
	"na" => "Namibie",
	"nc" => "Nouvelle Calédonie",
	"ne" => "Niger",
	"nf" => "Norfolk (île)",
	"ng" => "Nigéria",
	"ni" => "Nicaragua",
	"nl" => "Pays Bas",
	"no" => "Norvège",
	"np" => "Népal",
	"nr" => "Nauru",
	"nu" => "Niue",
	"nz" => "Nouvelle Zélande",
	"om" => "Oman",
	"pa" => "Panama",
	"pe" => "Pérou",
	"pf" => "Polynésie Française",
	"pg" => "Papouasie Nvelle Guinée",
	"ph" => "Philippines",
	"pk" => "Pakistan",
	"pl" => "Pologne",
	"pm" => "St. Pierre et Miquelon",
	"pn" => "Pitcairn (île)",
	"pr" => "Porto Rico",
	"ps" => "Palestine",
	"pt" => "Portugal",
	"pw" => "Palau",
	"py" => "Paraguay",
	"qa" => "Qatar",
	"re" => "Réunion (île de la)",
	"ro" => "Roumanie",
	"ru" => "Russie",
	"rs" => "Russie",
	"rw" => "Rwanda",
	"sa" => "Arabie Saoudite",
	"sb" => "Salomon (îles)",
	"sc" => "Seychelles",
	"sd" => "Soudan",
	"se" => "Suède",
	"sg" => "Singapour",
	"sh" => "St. Hélène",
	"si" => "Slovénie",
	"sj" => "Svalbard/Jan Mayen (îles)",
	"sk" => "Slovaquie",
	"sl" => "Sierra Leone",
	"sm" => "Saint-Marin",
	"sn" => "Sénégal",
	"so" => "Somalie",
	"sr" => "Suriname",
	"st" => "Sao Tome et Principe",
	"su" => "Ex U.R.S.S.",
	"sv" => "Salvador",
	"sy" => "Syrie",
	"sz" => "Swaziland",
	"tc" => "Turks et Caïques (îles)",
	"td" => "Tchad",
	"tf" => "Territoires Fr du sud",
	"tg" => "Togo",
	"th" => "Thailande",
	"tj" => "Tadjikistan",
	"tk" => "Tokelau",
	"tm" => "Turkménistan",
	"tn" => "Tunisie",
	"to" => "Tonga",
	"tp" => "Timor Oriental",
	"tr" => "Turquie",
	"tt" => "Trinité et Tobago",
	"tv" => "Tuvalu",
	"tw" => "Taiwan",
	"tz" => "Tanzanie",
	"ua" => "Ukraine",
	"ug" => "Ouganda",
	"uk" => "Royaume Uni",
	"gb" => "Grande Bretagne",
	"um" => "US Minor Outlying (îles)",
	"us" => "États-Unis",
	"uy" => "Uruguay",
	"uz" => "Ouzbékistan",
	"va" => "Vatican",
	"vc" => "St Vincent et les Grenadines",
	"ve" => "Venezuela",
	"vg" => "Vierges Brit. (îles)",
	"vi" => "Vierges USA (îles)",
	"vn" => "Viêt Nam",
	"vu" => "Vanuatu",
	"wf" => "Wallis et Futuna (îles)",
	"ws" => "Western Samoa",
	"ye" => "Yemen",
	"yt" => "Mayotte",
	"yu" => "Yugoslavie",
	"za" => "Afrique du Sud",
	"zm" => "Zambie",
	"zr" => "Rép. Dém. du Congo (ex Zaïre)",
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