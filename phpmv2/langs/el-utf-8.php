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
$lang['auteur_nom'] = "Vasilis Spathis"; // Translator's name
$lang['auteur_email'] = "vspathis@gmail.com"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "el"; // iso language code
$lang['lang_libelle_en'] = "Greek"; // english language name
$lang['lang_libelle_fr'] = "Grece"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = ''; // three thousand spells 3,000 in english
$lang['separateur_decimaux'] = '.'; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | Πρόγραμμα ανοικτού κώδικα για στατιστική ανάλυση ιστοσελίδων"; // Pages header's title
$lang['head_keywords'] = "statistics, analytics, analysis, referrer, stats, free, open source, visits, search engines, keywords, web, websites"; // Header keywords
$lang['head_description'] = "phpMyVisites | Πρόγραμμα ανοικτού κώδικα, για στατιστική ανάλυση κίνησης website, που διανέμεται υπό την GNU GPL."; // Header description
$lang['logo_description'] = "Free web analytics, website statistics"; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Επισκεψεις";
$lang['menu_pagesvues'] = "Σελιδες";
$lang['menu_suivi'] = "Follow-up";
$lang['menu_provenance'] = "Προελευση";
$lang['menu_configurations'] = "Ρυθμισεις";
$lang['menu_affluents'] = "Παραπομπες";
$lang['menu_listesites'] = "Λίστα ιστοχώρων";
$lang['menu_bilansites'] = "Συγκεντρωτικά";
$lang['menu_jour'] = "Ημέρα";
$lang['menu_semaine'] = "Εβδομάδα";
$lang['menu_mois'] = "Μήνας";
$lang['menu_annee'] = "Έτος";
$lang['menu_periode'] = "Περίοδος ανάλυσης: %s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "Επίσημο website";
$lang['liens_admin'] = "Διαχείριση";
$lang['liens_contacts'] = "Επικοινωνία";

//
// Divers
//
$lang['generique_nombre'] = "Αριθμός";
$lang['generique_tauxsortie'] = "Ρυθμός εξόδου";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Η σελίδα δημιουργήθηκε σε %s δευτερόλεπτα"; // Time in seconds
$lang['generique_divers'] = "Άλλοι"; // (for the graphs)
$lang['generique_inconnu'] = "Άγνωστο"; // (for the graphs)
$lang['generique_vous'] = "... Εσύ ?";
$lang['generique_traducteur'] = "Μετάφραση";
$lang['generique_langue'] = "Γλώσσα";
$lang['generique_autrelangure'] = "Άλλη?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "Κανένας επισκέπτης σε αυτή την περίοδο."; 
$lang['generique_aucune_visite_bdd'] = "<b>Προειδοποίηση ! </b> Δεν έχει καταγραφή κανένας επισκέπτης στην βάση μας για αυτό τον ιστοχώρο. Επιβεβαιώστε την σωστή εγκατάσταση του κώδικα javascript που να περιέχει την σωστή  phpMyVisites URL <u>ΜΕΣΑ</u> στο κώδικα. Για περισσότερες πληροφορίες δοκιμάστε την Βοήθεια.";
$lang['generique_aucune_site_bdd'] = "Δεν έχει οριστεί κανένα Website στην βάση δεδομένων. Δοκιμάστε να ορίσετε ένα αφού κάνετε είσοδο ώς Διαχειριστής.";
$lang['generique_retourhaut'] = "Πάνω";
$lang['generique_tempsvisite'] = "%sλ %sδ"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%sΩ"; // 4h means 4 hours
$lang['generique_siteno'] = "Website %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Ενημερωτικό mail %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = " %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "Γενικά";
$lang['generique_user'] = "Χρήστης %s"; // User "Admin"
$lang['generique_previous'] = "Προηγούμενο";
$lang['generique_next'] = "επόμενο";
$lang['generique_lowpop'] = "Στατιστικά χωρίς τις σελίδες χαμηλής κίνησης";
$lang['generique_allpop'] = "Στατιστικά με όλη την κίνηση";
$lang['generique_to'] = "ως"; // 4 'to' 8
$lang['generique_total_on'] = "on"; // 4 to 8 'on' 10
$lang['generique_total'] = "Σύνολο"; // 4 to 8 'on' 10
$lang['generique_information'] = "Πληροφορίες";
$lang['generique_done'] = "Ολοκληρώθηκε!";
$lang['generique_other'] = "Άλλα";
$lang['generique_description'] = "Περιγραφή:";
$lang['generique_name'] = "Όνομα:";
$lang['generique_variables'] = "Μεταβλητές";
$lang['generique_logout'] = "Έξοδος";
$lang['generique_login'] = "Είσοδος";
$lang['generique_hits'] = "Hits";
$lang['generique_errors'] = "Λάθη";
$lang['generique_site'] = "Website";
$lang['generique_help_novisits'] = "Σημείωση: Έχεις %s προσθέσει τον πηγαίο κώδικα javascript (javascript code) %s στις σελίδες σου;";

//
// Authentication
//
$lang['login_password'] = "κωδικός: "; // lowercase
$lang['login_login'] = "όνομα χρήστη: "; // lowercase
$lang['login_error'] = "Δεν είναι δυνατή η είσοδος. Λάθος όνομα χρήστη ή κωδικός.";
$lang['login_error_nopermission'] = "Ο χρήστης δεν έχει την απαιτούμενη άδεια. Παρακαλώ επικοινωνήστε με τον Διαχειριστή για να διορθώσει το πρόβλημα.";
$lang['login_protected'] = "Προσπαθείτε να εισέλθετε σε σελίδες του %sphpMyVisites%s που προστατεύονται.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Επικοινωνία";
$lang['contacts_langue'] = "Μεταφράσεις";
$lang['contacts_merci'] = "Ευχαριστούμε";
$lang['contacts_auteur'] = "Ο σχεδιαστής, δημιουργός και τεκμηριωτής του phpMyVisites project είναι ο <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "Σχετικά με <strong>τεχνικές ερωτήσεις, αναφορά σφαλμάτων και προτάσεις</strong> παρακαλώ χρησιμοποιήστε τα forum του επίσημου ιστοχώρου %s. Για οποιαδήποτε άλλη αιτία, παρακαλώ επικοινωνήστε με τον δημιουργό χρησιμοποιώντας την ειδική φόρμα επικοινωνίας."; // adresse du site
$lang['contacts_trad1'] = "Θέλετε να μεταφράστετε το phpMyVisites στην γλώσσα σας; Μην διστάζετε,  <strong>το phpMyVisites σας χρειάζεται!</strong>";
$lang['contacts_trad2'] = "Η μετάφραση του phpMyVisites θα σας πάρει κάποιο χρόνο (λίγες ώρες) και απαιτεί καλή γνώση τουλάχιστον δύο γλωσσών, όμως θυμηθείτε πως <strong>η εργασία αυτή θα βοηθήσει αναρίθμητους άλλους χρήστες</strong>. Εάν ενδιαφέρεστε να βοηθήσετε στην μετάφραση του phpMyVisites θα βρείτε όλες τις πληροφορίες που χρειάζεστε  %s στον επίσημο ιστοχώρο του phpMyVisites %s."; // Documentation link
$lang['contacts_doc'] = "Μην διστάσετε να συμβουλευτείτε %s το επίσημο υλικό τεκμηρίωσης (βοήθεια) του phpMyVisites %s από το οποίο θα βρείτε πολλές χρήσιμες πληροφορίες σε σχέση με την εγκατάσταση, τις ρυθμίσεις αλλά και την χρήση και τις δυνατότητες του phpMyVisites. Είναι διαθέσιμο για την δικιά σας έκδοση του phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Πολλές ευχαριστίες σε εσάς <strong>%s</strong>, συνεργάτες του phpMyVisites, για την υψηλού επιπέδου εργασίας σας σε αυτό το project.";
$lang['contacts_merci3'] = "Συμβουλευτείτε την σελίδα ευχαριστιών (acknowledgments page) στον επίσημο ιστοχώρο για μια πλήρη λίστα των φίλων του phpMyVisites.";
$lang['contacts_merci2'] = "Ένα μεγάλο ευχαριστώ σε όλους αυτούς που μοιράστηκαν την κουλτούρα του πολιτισμού τους καθόλη την διάρκεια μετάφρασης του phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Website %s την %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Λεπτομερή στατιστικά";
$lang['mail_sender_name'] = "Στατιστικά κίνησης web (Αυτόματα)";

//
// Visits Part
//
$lang['visites_titre'] = "Πληροφορίες επισκέπτη"; 
$lang['visites_statistiques'] = "Στατιστικά";
$lang['visites_periodesel'] = "Για την συγκεκριμένη περίοδο";
$lang['visites_visites'] = "Επισκέψεις";
$lang['visites_uniques'] = "Μοναδικοί επισκέπτες";
$lang['visites_pagesvues'] = "Σελίδες";
$lang['visites_pagesvisiteurs'] = "Σελίδες ανά επισκέπτη"; 
$lang['visites_pagesvisites'] = "Σελίδες ανά επίσκεψη"; 
$lang['visites_pagesvisitessign'] = "Σελίδες ανά μοναδική επίσκεψη"; 
$lang['visites_tempsmoyen'] = "Μέση διάρκεια επίσκεψης";
$lang['visites_tempsmoyenpv'] = "Μέσος χρόνος ανά σελίδα που προβλήθηκε";
$lang['visites_tauxvisite'] = "Ποσοστό επισκέψεων σε 1 σελίδα"; 
$lang['visites_average_visits_per_day'] = "Μέση τιμή επισκέψεων ανά ημέρα"; 
$lang['visites_recapperiode'] = "Συγκεντρωτικά";
$lang['visites_nbvisites'] = "Επισκέψεις";
$lang['visites_aucunevivisite'] = "Καμία επίσκεψη"; // in the table, must be short
$lang['visites_recap'] = "Συγκεντρωτικά";
$lang['visites_unepage'] = "1 σελίδα"; // (graph)
$lang['visites_pages'] = "%s σελίδες"; // 1-2 pages (graph)
$lang['visites_min'] = "%sλ"; // 10-15 min (graph)
$lang['visites_sec'] = "%sδ"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Συγκεντρωτικό γράφημα";
$lang['visites_grapghrecaplongterm'] = "Γράφημα με στατιστικά στοιχεία των τελευταίων ημερών";
$lang['visites_graphtempsvisites'] = "Γράφημα για την διάρκεια των επισκέψεων ανά επισκέπτη";
$lang['visites_graphtempsvisitesimg'] = "Διάρκεια των επισκέψεων ανά επισκέπτη";
$lang['visites_graphheureserveur'] = "Γράφημα για τις επισκέψεις ανά ώρα (server)"; 
$lang['visites_graphheureserveurimg'] = "Επισκέψεις ανά ώρα server"; 
$lang['visites_graphheurevisiteur'] = "Γράφημα για τις επισκέψεις ανά ώρα (τοπική)";
$lang['visites_graphheurelocalimg'] = "Επισκέψεις ανά τοπική ώρα"; 
$lang['visites_longterm_statd'] = "Ανάλυση τελευταίων ημερών";
$lang['visites_longterm_statm'] = "Ανάλυση τελευταίων μηνών";

//
// Sites Summary
//
$lang['summary_title'] = "Συγκεντρωτικά για το website";
$lang['summary_stitle'] = "Συγκεντρωτικά";

//
// Frequency Part
//
$lang['frequence_titre'] = "Επισκέπτες που επιστρέφουν";
$lang['frequence_nouveauxconnusgraph'] = "Γράφημα σύγκρισης Νέων και Παλαιών επισκεπτών";
$lang['frequence_nouveauxconnus'] = "Νέοι και Παλιοί επισκέπτες";
$lang['frequence_titremenu'] = "Συχνοτητα";
$lang['frequence_visitesconnues'] = "Παλιοί επισκέπτες";
$lang['frequence_nouvellesvisites'] = "Νέοι επισκέπτες";
$lang['frequence_visiteursconnus'] = "Παλιοί επισκέπτες";
$lang['frequence_nouveauxvisiteurs'] = "Νέοι επισκέπτες";
$lang['frequence_returningrate'] = "Ρυθμός επιστροφής";
$lang['pagesvues_vispervisgraph'] = "Γράφημα κατανομής αριθμού επισκέψεων ανά επισκέπτη";
$lang['frequence_vispervis'] = "Συχνότητα επισκέψεων";
$lang['frequence_vis'] = "επίσκεψη";
$lang['frequence_visit'] = "1 επίσκεψη"; // (graph)
$lang['frequence_visits'] = "%s επισκέψεις"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Προβολές Σελίδων";
$lang['pagesvues_joursel'] = "Επιλεγμένη μέρα";
$lang['pagesvues_jmoins7'] = "Ημέρα - 7";
$lang['pagesvues_jmoins14'] = "Ημέρα - 14";
$lang['pagesvues_moyenne'] = "(μέσος όρος)";
$lang['pagesvues_pagesvues'] = "Σελίδες";
$lang['pagesvues_pagesvudiff'] = "Μοναδικές Σελίδες";
$lang['pagesvues_recordpages'] = "Μέγιστος αριθμός σελίδων για έναν επισκέπτη";
$lang['pagesvues_tabdetails'] = "Σελίδες και γκρούπ";
$lang['pagesvues_graphsnbpages'] = "Γράφημα κατανομής αριθμου επισκέψεων ανά σελίδα";
$lang['pagesvues_graphnbvisitespageimg'] = "Επισκέψεις ανά προβολή σελίδων";
$lang['pagesvues_graphheureserveur'] = "Γράφημα επισκέψεων ωριαίο (χρόνος server)";
$lang['pagesvues_graphheureserveurimg'] = "Επισκέψεις ανά ώρα (server)";
$lang['pagesvues_graphheurevisiteur'] = "Γράφημα επισκέψεων ωριαίο (τοπικός χρόνος)";
$lang['pagesvues_graphpageslocalimg'] = "Επισκέψεις ανά ώρα (τοπική)";
$lang['pagesvues_tempsparpage'] = "Χρόνος ανά σελίδα";
$lang['pagesvues_total_time'] = "Συνολικός χρόνος";
$lang['pagesvues_avg_time'] = "Μέσος χρόνος";
$lang['pagesvues_help_pagename'] = "Γνωρίζεις ότι μπορείς να ορίσεις ένα φιλικό όνομα για κάθε σελίδα σου;";
$lang['pagesvues_help_track_dls'] = "Γνωρίζεις ότι μπορείς να παρακολουθήσεις downloads αλλά και external Urls redirection;";

//
// Follows-Up
//
$lang['suivi_titre'] = "Κίνηση επισκέψεων";
$lang['suivi_pageentree'] = "Σελίδες εισόδου";
$lang['suivi_pagesortie'] = "Σελίδες εξόδου";
$lang['suivi_tauxsortie'] = "Ρυθμός εξόδου";
$lang['suivi_pageentreehits'] = "Entry hits";
$lang['suivi_pagesortiehits'] = "Exit hits";
$lang['suivi_singlepage'] = "Επισκέψεις μίας σελίδας";

//
// Origin
//
$lang['provenance_titre'] = "Προέλευση Επισκέπτη";
$lang['provenance_recappays'] = "Συγκεντρωτικά ανά χώρα";
$lang['provenance_pays'] = "Χώρες";
$lang['provenance_paysimg'] = "Γράφημα επισκεπτών ανά χώρα";
$lang['provenance_fai'] = "Internet Service Providers";
$lang['provenance_nbpays'] = "Αριθμός διαφορετικών χωρών: %s";
$lang['provenance_provider'] = "Providers"; // must be short
$lang['provenance_continent'] = "Ήπειροι";
$lang['provenance_mappemonde'] = "Παγκόσμιος Χάρτης";
$lang['provenance_interetspays'] = "Χώρες ενδιαφέροντος";

//
// Setup
//
$lang['configurations_titre'] = "Ρυθμίσεις επισκέπτη";
$lang['configurations_os'] = "Λειτουργικά συστήματα";
$lang['configurations_osimg'] = "Γράφημα λειτουργικών συστημάτων";
$lang['configurations_navigateurs'] = "Φυλλομετρητές (Browsers)";
$lang['configurations_navigateursimg'] = "Γράφημα φυλλομετρητών";
$lang['configurations_resolutions'] = "Ανάλυση οθόνης";
$lang['configurations_resolutionsimg'] = "Γράφημα αναλύσεων οθονών";
$lang['configurations_couleurs'] = "Βάθος χρώματος";
$lang['configurations_couleursimg'] = "Γράφημα βάθους χρωμάτων";
$lang['configurations_rapport'] = "Κανονική/16:9";
$lang['configurations_large'] = "16:9";
$lang['configurations_normal'] = "κανονική";
$lang['configurations_double'] = "Δύο οθόνες";
$lang['configurations_plugins'] = "Plugins";
$lang['configurations_navigateursbytype'] = "Φυλλομετρητές (ανά τύπο)";
$lang['configurations_navigateursbytypeimg'] = "Τύποι φυλλομετρητών";
$lang['configurations_os_interest'] = "Λειοτυργικά συστήματα Interest";
$lang['configurations_navigateurs_interest'] = "Φυλλομετρητές Interest";
$lang['configurations_resolutions_interest'] = "Ανάλυση οθονών Interest";
$lang['configurations_couleurs_interest'] = "Βάθος χρώματος Interest";
$lang['configurations_configurations'] = "Συγκεντρωτικά";

//
// Referers
//
$lang['affluents_titre'] = "Παραπομπές";
$lang['affluents_recapimg'] = "Επισκέπτες ανά παραπομπή";
$lang['affluents_directimg'] = "Κατευθείαν";
$lang['affluents_sitesimg'] = "Websites";
$lang['affluents_moteursimg'] = "Μηχανές";
$lang['affluents_referrersimg'] = "Πηγές Παραπομπών";
$lang['affluents_moteurs'] = "Μηχανές Αναζήτησης";
$lang['affluents_nbparmoteur'] = "Επισκέψεις μέσω Μηχανών Αναζήτησης: %s";
$lang['affluents_aucunmoteur'] = "Δεν υπάρχουν επισκέψεις μέσω μηχανών αναζήτησης.";
$lang['affluents_motscles'] = "Λέξεις-κλειδιά";
$lang['affluents_nbmotscles'] = "Διαφορετικά κλειδιά : %s";
$lang['affluents_aucunmotscles'] = "Δεν υπάρχουν κλειδιά.";
$lang['affluents_sitesinternet'] = "Websites";
$lang['affluents_nbautressites'] = "Επισκέψεις μέσω άλλων websites : %s";
$lang['affluents_nbautressitesdiff'] = "Αριθμός διαφορετικών websites : %s";
$lang['affluents_aucunautresite'] = "Δεν υπάρχουν επισκέψεις μέσω άλλων websites.";
$lang['affluents_entreedirecte'] = "Κατευθείαν παραπομπή";
$lang['affluents_nbentreedirecte'] = "Επισκέψεις από κατευθείαν παραπομπή : %s";
$lang['affluents_nbpartenaires'] = "Επισκέψεις μέσω συνεργατών : %s";
$lang['affluents_aucunpartenaire'] = "Δεν υπάρχουν επισκέψεις μέσω συνεργατών.";
$lang['affluents_nbnewsletters'] = "Επισκέψεις από newsletters : %s";
$lang['affluents_aucunnewsletter'] = "Δεν υπάρχουν επισκέψεις από newsletters.";
$lang['affluents_details'] = "Λεπτομέρειες";
$lang['affluents_interetsmoteurs'] = "Search Engines Interests";
$lang['affluents_interetsmotscles'] = "Keywords Interests";
$lang['affluents_interetssitesinternet'] = "Websites Interests";
$lang['affluents_partenairesimg'] = "Partners";
$lang['affluents_partenaires'] = "Partners";
$lang['affluents_interetspartenaires'] = "Partners Interests";
$lang['affluents_newslettersimg'] = "Newsletters";
$lang['affluents_newsletters'] = "Newsletters";
$lang['affluents_interetsnewsletters'] = "Newsletters Interests";
$lang['affluents_type'] = "Τύπος Παραπομπής";
$lang['affluents_interetstype'] = "Access type Interests";

//
// Summary
//
$lang['purge_titre'] = "Συγκεντρωτικά επισκέψεων και παραπομπών";
$lang['purge_intro'] = "Αυτή η περίοδος έχει αφαιρεθεί από την Διαχείρηση και έχουν κρατηθεί μόνο τα συγκεντρωτικά στοιχεία.";
$lang['admin_purge'] = "Διαχείριση Βάσης Δεδομένων";
$lang['admin_purgeintro'] = "Εδώ μπορείτε να διαχειριστείτε τους πίνακες που χρησιμοποιεί το phpMyVisites. Μπορείτε να δείτε πόσο χώρο χρησιμοποιείται στο δίσκο για την αποθήκευση δεδομένων, να τον βελτιστοποιήσετε ή αν διαγράψετε παλιά στοιχεία. Με αυτό τον τρόπο θα μειώσετε και το μέγεθος των πινάκων που αποτελούν την βάση δεδομένων σας.";
$lang['admin_optimisation'] = "Βελτιστοποίηση του [ %s ]..."; // Tables names
$lang['admin_postopt'] = "Το συνολικό μέγεθος μειώθηκε κατά %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Αφαίρεση των εξής περιόδων: %s";
$lang['admin_purge_fini'] = "Οι πίνακες έχουν διαγραφεί επιτυχώς...";
$lang['admin_bdd_nom'] = "Όνομα";
$lang['admin_bdd_enregistrements'] = "Εγγραφή";
$lang['admin_bdd_taille'] = "Μέγεθος Πίνακα";
$lang['admin_bdd_opt'] = "Βελτιστοποίηση";
$lang['admin_bdd_purge'] = "Κριτήρια εκκαθάρισης";
$lang['admin_bdd_optall'] = "Βελτιστοποίηση όλων";
$lang['admin_purge_j'] = "Αφαίρεση εγγραφών παλαιότερες των %s ημερών";
$lang['admin_purge_s'] = "Αφαίρεση εγγραφών παλαιότερες των %s εβδομάδων";
$lang['admin_purge_m'] = "Αφαίρεση εγγραφών παλαιότερες των %s μηνών";
$lang['admin_purge_y'] = "Αφαίρεση εγγραφών παλαιότερες των %s ετών";
$lang['admin_purge_logs'] = "Αφαίρεση όλων των logs";
$lang['admin_purge_autres'] = "Purge common to the table '%s'";
$lang['admin_purge_none'] = "Καμιά δυνατή ενέργεια";
$lang['admin_purge_cal'] = "Υπολογισμός και εκκαθάριση (ίσως πάρει μερικά λεπτά)";
$lang['admin_alias_title'] = "Website aliases και URLs";
$lang['admin_partner_title'] = "Website συνεργάτες";
$lang['admin_newsletter_title'] = "Website newsletters";
$lang['admin_ip_exclude_title'] = "IP διευθύνσεις που να αποκλειστούν από τα στατιστικά";
$lang['admin_name'] = "Όνομα:";
$lang['admin_error_ip'] = "Η IP πρέπει να έχιε την σωστή σύνταξη: %s";
$lang['admin_site_name'] = "Όνομα Site";
$lang['admin_site_url'] = "Κεντρική διεύθυνση (URL) Site";
$lang['admin_db_log'] = "Κάντε είσοδο ώς Διαχειριστής για να έχετε την δυατότητα τροποποιήσεων στις ρυθμίσεις της Βάσης Δεδομένων.";
$lang['admin_error_critical'] = "Σφάλμα, πρέπει να διορθωθεί ώστε να λειτουργήσει επιτυχώς το phpMyVisites.";
$lang['admin_warning'] = "Προειδοποίηση, το phpMyVisites θα δουλέψει σωστά αλλά ίσως κάποιες δυνατότητες του να μην λειτουργούν.";
$lang['admin_move_group'] = "Μεταφορά σε γκρουπ:";
$lang['admin_move_select'] = "Επιλογή γκρουπ";

//
// Setup
//
$lang['admin_intro'] = "Καλωσορίσατε στις σελίδες Διαχείρισης του phpMyVisites. Εδώ μπορείτε να αλλάξετε τις ρυθμίσεις του phpMyVisites. Αν υπάρχουν προβλήματα μην διστάσετε να συμβουλευτείτε το %s  την επίσημη τεκμηρίωση του %s."; // link to the doc
$lang['admin_configetperso'] = "Γενικές ρυθμίσεις";
$lang['admin_afficherjavascript'] = "Προβολή του πηγαίου κώδικα JavaScript";
$lang['admin_cookieadmin'] = "Μη καταμέτρηση του διαχειριστή στα στατιστικά (cookie)";
$lang['admin_ip_ranges'] = "Μη καταμέτρηση συγκεκριμένων IP στα στατιστικά";
$lang['admin_sitesenregistres'] = "Website που παρακολουθούνται:";
$lang['admin_retour'] = "Πίσω";
$lang['admin_cookienavigateur'] = "Μπορείτε να εξαιρέσετε τις επισκέψεις του Διαχειριστή από τα στατιστικά. Η ρύθμιση όμως αυτή στηρίζετε σε χρήση cookies και θα δουλέψει μόνο με τον συγκεκριμένο Φυλλομετρητή (browser). Μπορείτε να αλλάξετε αυτή τη ρύθμιση όποτε θέλετε.";
$lang['admin_prendreencompteadmin'] = "Προσμέτρηση των επισκέψεων του Διαχειριστή στα στατιστικά  (διαγραφή του cookie)";
$lang['admin_nepasprendreencompteadmin'] = "Μην προσμετράτε την κίνηση του Διαχειριστή στα στατιστικά (δημιουργία cookie)";
$lang['admin_etatcookieoui'] = "Η κίνηση του Διαχειριστή προσμετράτε στα στατιστικά. Αυτή είναι και η προκαθορισμένη ρύθμιση)";
$lang['admin_etatcookienon'] = "Η κίνηση του Δαιχειριστή ΔΕΝ προσμετράται στα στατιστικά";
$lang['admin_deleteconfirm'] = "Επιβαβαίωση διαγραφής %s?";
$lang['admin_sitedeletemessage'] = "Παρακαλώ <u>προσοχή</u>: όλα τα δεδομένα για τις κινήσεις στο  Site θα διαγραφούν. Η διαγραφή <u>δεν</u> είναι αναστρέψιμη.";
$lang['admin_confirmyes'] = "Ναι, θέλω να γίνει η διαγραφή";
$lang['admin_confirmno'] = "Όχι, δεν θέλω να γίνει η διαγραφή";
$lang['admin_nonewsletter'] = "Δεν υπάρχουν newsletter για αυτό το site!";
$lang['admin_nopartner'] = "Δεν υπάρχουν συνεργάτες για αυτό το site!";
$lang['admin_get_question'] = "Καταγραφή μεταβητών GET? (μεταβλητές του URL)";
$lang['admin_get_a1'] = "Καταγραφή όλων των URL μεταβλητών";
$lang['admin_get_a2'] = "Μην καταγράφη καμίας μεταβλητής URL";
$lang['admin_get_a3'] = "Καταγραφή συγκεκριμένων μόνο μεταβλητών";
$lang['admin_get_a4'] = "Καταγραφή όλων των μεταβλητών εκτός των εξαιρέσεων";
$lang['admin_get_list'] = "Όνομα μεταβλητής (λίστα με <b>;</b> ανάμεσα) <br/>Παράδειγμα : %s";
$lang['admin_required'] = "%s απαιτείται.";
$lang['admin_title_required'] = "Απαιτέιται";
$lang['admin_write_dir'] = "Φάκελοι προσβάσιμοι και για εγγραφή";
$lang['admin_chmod_howto'] = "Αυτοί οι φάκελοι πρ΄πει να είναι προσβάσιμοι και για εγγραφή από τον server. Αυτό γίνεται αν θέσετε chmod 777 χρησιμοποιώντας τον πρόγραμμα FTP (Δεξί κλικ στον φάκελο , αλλαγή ιδιοτήτων -> chmod)";
$lang['admin_optional'] = "Optional";
$lang['admin_memory_limit'] = "Όριο μνήμης";
$lang['admin_allowed'] = "επιτρέπεται";
$lang['admin_webserver'] = "Web server";
$lang['admin_server_os'] = "Server OS";
$lang['admin_server_time'] = "Ώρα Server";
$lang['admin_legend'] = "Λεζάντα:";
$lang['admin_error_url'] = "Η URL πρέπει να έχιε την σωστή σύνταξη : %s (χωρίς κάθετο στο τέλος)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URLs aliases";
$lang['admin_logo_question'] = "Εμφάνιση του logo?";
$lang['admin_type_again'] = "(πληκτρολογείστε ξανά)";
$lang['admin_admin_mail'] = "email Διαχειριστή";
$lang['admin_admin'] = "Διαχειριστής";
$lang['admin_phpmv_path'] = "Πλήρης διαδρομή για τον φάκελο του phpMyVisites";
$lang['admin_valid_email'] = "Το Email πρέπει να είνια έγκυρο";
$lang['admin_valid_pass'] = "Ο κωδικός πρέπει να είναι πιο περίπλοκος (6 τουλάχιστον χαρακτήρες , πρέπει να περιέχονται και αριθμοί)";
$lang['admin_match_pass'] = "Οι κωδικοί δεν είναι ίδιοι";
$lang['admin_no_user_group'] = "Κανένας χρήστης για αυτό το γκρουπ σε αυτό το site";
$lang['admin_recorded_nl'] = "Καταγεγραμένα newsletters:";
$lang['admin_recorded_partners'] = "Καταγεγραμένοι συνεργάτες:";
$lang['admin_recorded_users'] = "Καταγεγραμένοι χρήστες:";
$lang['admin_select_site_title'] = "Παρακαλώ επιλέξτε site";
$lang['admin_select_user_title'] = "Παρακαλώ επιλέξτε χρήστη";
$lang['admin_no_user_registered'] = "Κανένας εγγεγραμμένος χρήστης!";
$lang['admin_configuration'] = "Ρυθμίσεις";
$lang['admin_general_conf'] = "Γενικές ρυθμίσεις";
$lang['admin_group_title'] = "Διαχείριση των γκρουπ (permissions)";
$lang['admin_user_title'] = "Διαχείριση χρηστών";
$lang['admin_user_add'] = "Νέος χρήστης";
$lang['admin_user_mod'] = "Αλλαγή χρήστη";
$lang['admin_user_del'] = "Διαγραφή χρήστη";
$lang['admin_server_info'] = "Πληροφορίες Server";
$lang['admin_send_mail'] = "Αποστολή στατιστικών με email";
$lang['admin_rss_feed'] = "Διάθεση στατιστικών με RSS";
$lang['admin_site_admin'] = "Διαχείριση Site";
$lang['admin_site_add'] = "Προσθήκη site";
$lang['admin_site_mod'] = "Αλλαγή site";
$lang['admin_site_del'] = "Διαγραφή site";
$lang['admin_nl_add'] = "Προσθήκη newsletter";
$lang['admin_nl_mod'] = "Αλλαγή newsletter";
$lang['admin_nl_del'] = "Διαγραφή newsletter";
$lang['admin_partner_add'] = "Προσθήκη συνεργάτη";
$lang['admin_partner_mod'] = "Αλλαγή ονόματος και URL συνεργάτη";
$lang['admin_partner_del'] = "Διαγραφή συνεργάτη";
$lang['admin_url_alias'] = "Διαχείριση URL alias";
$lang['admin_group_admin_n'] = "Προβολή Στατιστικών + Δικαιώματα Διαχειριστή";
$lang['admin_group_admin_d'] = "Οι χρήστες μπορούν να δούν τα στατιστικά και να τροποποιήσεουν πληροφορίες σχετικά με το site (όνομα, προσθήκη cookie, εξαίρεση IP, Διαχείριση URLs alias/συνεργατών/newsletters, κλπ.)";
$lang['admin_group_view_n'] = "Προβολή Στατιστικών";
$lang['admin_group_view_d'] = "Ο χρήστης μπορεί να δει μόνο στατιστικά. Δεν έχει δικαιώματα Διαχειριστή.";
$lang['admin_group_noperm_n'] = "Δεν επιτρέπεται";
$lang['admin_group_noperm_d'] = "Ο χρήστης αυτού του γκρουπ δεν έχει δικαίωμα να δει στατιστικά ή να αλλάξει ρυθμίσεις.";
$lang['admin_group_stitle'] = "Μπορείτε να αλλάξετε τα γκρουπ που ανοίκει ο χρήστης επιλέγοντας για τον κάθε χρήστη σε πιο γκρουπ θέλετε να ανοίκει.";
$lang['admin_url_generate_download_link_example'] = "Download file adress Or URL redirection to an external website";
$lang['admin_url_generate_title'] = "File download / Url redirection : Url generator";
$lang['admin_url_generate_intro'] = "Το phpMyVisites μπορεί να καταμετρήσει τα downloads αρχείων, και μπορεί να καταμετρήσει και εξωτερικά κλικ σε URLs. Τα Downloads και τα  URLs κλικ θα εμφανιστούν στο τμήμα 'Σελίδες' του phpMyVisites.</p><p class='texte'> Για να επιτευχθεί αυτό πρέπει να χρησιμοποιηθεί URL που να δείχνει στο phpmyvisites αρχείο, που με την σειρά του θα δείχνει στο URL στόχο. Επειδή η δημουργία αυτού του URL δεν είναι εύκολη, αυτό το εργαλείο θα σας βοηθείσει να την φτιάξετε (το phpMyVisites προσπαθεί να παραμένει απλό αλλά και συνάμα εξαιρετικά δυνατό στις δυνατότητές του). Απλά συμπληρώστε την φόρμα που ακολουθεί και πατήστε στην 'Δημιουργία URL', και θα μπορείτε να καταμετράτε τα downloads αρχείων ή τα κλικ σε εξωτερικά URL!";
$lang['admin_url_generate_site_selection'] = "Επιλέξτε το site για το οποίο θέλετε να μετράτε τα downloads ή τα κλικ σε εξωτερικά URL";
$lang['admin_url_generate_enter_url'] = "Συμπληρώστε την διεύθυνση του αρχείου η το πλήρες εξωτερικό Url που θέλετε να καταγράφεται:";
$lang['admin_url_generate_help_enter_url'] = "Βοήθεια: Πρέπει να είναι όπως:  '<b>http://www.yoursite.com/file/brilliant-software.zip</b>' ή αν είναι εξωτερική URL '<b>http://www.the-site-to-redirect.com</b>'";
$lang['admin_url_generate_friendly_name'] = "Ονομα που θα χρησιμοποιηθεί για την προβολή των στατιστικών για αυτό το αρχείο / URL στην αντίστοιχη σελίδα αποτελεσμάτων:"; 
$lang['admin_url_generate_help_friendly_name'] = "Βοήθεια: Μπορείτε να ταξινομήσετε τα 'Αρχεία / Urls' σε κατηγορίες για καλύτερη παρουσίαση. Αυτό γίνετε με την προσθήκη του ονόματος της κατηγορίας πριν από το όνομα του αρχείου / URL με τον χαρακτήρα '<b>/</b>' ανάμεσα. Για παράδειγμα '<b>my photos download/Summer in France</b>' ή '<b>Partners/PHP.net website</b>' : η ταξινόμηση θα γίνει έτσι ώστε στην κατηγορία '<b>my photos downloads</b>' ή στην κατηγορία '<b>Partners</b>' : θα δείτε τα στατιστικά των αντίστοιχων αρχείων / συνδέσεων.";
$lang['admin_url_generate_result_url'] = "Αυτή είναι η URL που πρέπει να χρησιμοποιήσετε: ";
$lang['admin_url_generate_html_result'] = "Εάν σας είναι χρήσιμο, εδώ είναι και ο HTML σύνδεσμος:";
$lang['admin_url_generate_image_legend'] = "Παράδειγμα προβολής στατιστικών με καταγραφή εξωτερικών κλικ σε URL και download αρχείων:";
$lang['admin_site_link_javascript'] = "%s Τώρα πρέπει να εγκαταστήσετε τον κώδικα καταγραφής στις σελίδες σας. (αντιγράψτε και επικολλήστε τον πηγαίο κώδικα Javascript). Πατήστε εδώ για να προβληθεί ο κώδικας. %s";
$lang['admin_last_version'] = "Έχετε την τελευταία έκδοση του phpMyVisites; (Προτείνεται!)";
$lang['admin_general_config_firstday'] = "Πρώτη μέρα της εβδομάδας;";
$lang['admin_default_language'] = "Προεπιλεγμένη Γλώσσα; <br/> Θα έιναι και η προεπιλεγμένη γλώσσα για τα emails.";

//
// Pdf export
//
$lang['pdf_generate_link'] = "Εξαγωγή στατιστικών σε PDF (πρόβλημα στα Ελληνικά, χρησιμοποιήστε άλλη γλώσσα)%s";
$lang['pdf_summary_generate_link'] = "Εξαγωγή στατιστικών σε PDF (πρόβλημα στα Ελληνικά, χρησιμοποιήστε άλλη γλώσσα)";

//
// Installation Step
//
$lang['install_loginmysql'] = "Όνομα χρήστη Βάσης Δεδομένων (Database login)";
$lang['install_mdpmysql'] = "Κωδικός χρήστη (Database password)";
$lang['install_serveurmysql'] = "Server Βάσης Δεδομένων";
$lang['install_basemysql'] = "Όνομα Βάσης";
$lang['install_prefixetable'] = "Αρχικά Πινάκων";
$lang['install_utilisateursavances'] = "Για προχωρημένους";
$lang['install_oui'] = "Ναι";
$lang['install_non'] = "Όχι";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Πρόβλημα: ";
$lang['install_DirectoriesWriteError'] = "<b>Πρόβλημα! </b><br/>Δεν έιναι δυνατή η εγγραφή στον φάκελο %s Παρακαλώ επιβεβαιώστε ότι είναι επιτρεπτή από τον server η εγγραφή σε αυτόν τον φάκελο (δοκιμάστε να θέσετε CHMOD 755 στον φάκελο με χρήση ενός προγράμματος FTP). <br/><br/>Εαν δεν είναι δυνατή η αλλαγή με το CHMOD δοκιμάστε να σβήσετε τον φάκελο και να τον ξαναδημιουργήσετε με το FTP πρόγραμμα.";
$lang['install_loginadmin'] = "Είσοδος Διαχειριστή";
$lang['install_mdpadmin'] = "Κωδικός Διαχειριστή";
$lang['install_chemincomplet'] = "Πλήρες διεύθυνση που βρίσκετε το phpMyVisites ( παράδειγμα http://www.mysite.com/rep1/rep3/phpmyvisites/). Η διεύθυνση πρέπει να τελειώνει με <strong>/</strong>.";
$lang['install_afficherlogo'] = "Προβολή του logo στις σελίδες σας; %s <br />Εαν επιτρέψετε την προβολή του logo στις σελίδες σας βοηθάτε για την πιο γρήγορη δημοσιοποίηση του εργαλείου phpMyVisites. Αυτός θα ήταν επίσης και ένας ωραίος τρόπος να ευχαριστήσετε τους δημιουργούς του που έχουν ξοδέψει αρκετές ώρες αναπτύσοντας αυτό το εργαλείο ανοικτού κώδικα και ελεύθερης χρήσης."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Προβολή στατιστικών γραφημάτων.";
$lang['install_valider'] = "Υποβολή"; // during installation and for login
$lang['install_popup_logo'] = "Παρακαλώ επιλέξτε logo";
$lang['install_logodispo'] = "Προβολή όλων των διαθέσιμων logos";
$lang['install_welcome'] = "Καλωσορίσατε!";
$lang['install_system_requirements'] = "Προδιαγραφές συστήματος";
$lang['install_database_setup'] = "Εγκατάσταση Βάσης Δεδομένων";
$lang['install_create_tables'] = "Δημιουργία Πινάκων Βάσης Δεδομένων";
$lang['install_general_setup'] = "Γενική Εγκατάσταση";
$lang['install_create_config_file'] = "Δημιουργία αρχείου ρυθμίσεων (Config File)";
$lang['install_first_website_setup'] = "Προσθήκη του πρώτου Website";
$lang['install_display_javascript_code'] = "Προβολή πηγαίου κώδικα Javascript";
$lang['install_finish'] = "Ολοκληρώθηκε!";
$lang['install_txt2'] = "Στο τέλος της εγκατάστασης θα γίνει επικοινωνία με το επίσημο site για να είναι δυνατή η αριθμητική καταγραφή των ανθρώπων που χρησιμοποιούν το phpMyVisites. Ευχαριστούμε για την κατανόησή σας.";
$lang['install_database_setup_txt'] = "Παρακαλώ εισάγετε τις ρυθμίσεις για την Βάση Δεδομένων.";
$lang['install_general_config_text'] = "Το phpMyVisites υποστηρίζει την ύπαρξη μόνο ενός Διαχειριστή που θα έχει τον πλήρη έλεγχο της εφαρμογής. Παρακαλώ επιλέξτε ένα όνομα χρήστη και έναν κωδικό για τον Διαχειριστή. Μπορείτε να προσθέσετε επιπλέον χρήστες αργότερα.";
$lang['install_config_file'] = " Οι πληροφορίες για οτν Διαχειριστή εισήχθησαν με επιτυχία.";
$lang['install_js_code_text'] = "<p>Για να μετράτε τους επισκέπτες των σελίδων σας πρέπει να εισάγετε τον πηγαίο κώδικα javascript σε όλες τις σελίδες σας.</p><p> Οι σελίδες σας δεν απαιτείται να  είναι γραμμένες σε PHP,  <strong>το phpMyVisites θα δουλέψει με όλους τους διαφορετικούς τύπους των website (ανεξάρτητα αν είναι HTML, ASP, Perl ή οιαδήποτε άλλη γλώσσα).</strong> </p><p> Παρακάτω ακολουθεί ο κώδικα javascript που πρέπει να προστεθεί στις σελίδες σας. </p>";
$lang['install_intro'] = "Καλωσορήσατε στην εγκατάσταση του phpMyVisites."; 
$lang['install_intro2'] = "Η διαδικασία αυτή είανι χωρισμένη σε %s απλά βήματα και διαρκεί περίπου 10 λεπτά.";
$lang['install_next_step'] = "Επόμενο βήμα";
$lang['install_status'] = "Κατάσταση Εγκατάστασης";
$lang['install_done'] = "Ολοκληρώθηκε %s%% εγκατάστασης"; // Install 25% complete
$lang['install_site_success'] = "Το Website δημιουργήθηκε με επιτυχία!";
$lang['install_site_info'] = "Παρακαλώ συμπληρώστε όλες τις πληροφορίες για το πρώτο website.";
$lang['install_go_phpmv'] = "Πηγαίνετε στο phpMyVisites!";
$lang['install_congratulation'] = "Συγχαρητήρια! Η εγκατάσταση του phpMyVisites ολοκληρώθηκε.";
$lang['install_end_text'] = "Επιβεβαιώστε ότι ο πηγαίος κώδικας javascript έχει εισαχθεί σε όλες τις σελίδες του site σας και περιμέντε τους πρώτους σας επισκέπτες!";
$lang['install_db_ok'] = "Σύνδεση με την βάση δεδομένων επιτυχής!";
$lang['install_table_exist'] = "Οι πίνακες του phpMyVisites υπάρχουν ήδη στην βάση δεδομένων.";
$lang['install_table_choice'] = "Επιλέξτε είτε την επαναχρησιμοποίηση της υπάρχουσας Βάσης, είτε μία φρέσκια εγκατάσταση ώστε να σβηστούν όλες οι παλιές εγγραφές και να αναδημιουργηθεί η Βάση.";
$lang['install_table_erase'] = "Διαγραφή όλων των πινάκων (προσοχή!)";
$lang['install_table_reuse'] = "Επαναχρησιμοποίηση της υπάρχουσας Βάσης";
$lang['install_table_success'] = "Οι πίνακες δημιουργήθηκαν με επιτυχία!";
$lang['install_send_mail'] = "Αποστολή ενός email καθημερινά με συγκεντρωτικές καταστάσεις στατιστικών;";

//
// Update Step
//
$lang['update_title'] = "Αναβάθμιση phpMyVisites";
$lang['update_subtitle'] = "Ανιχνεύτηκε η αναβάθμιση του phpMyVisites.";
$lang['update_versions'] = "Η προηγούμενη έκδοση ήταν η %s η οποία αναβαθμίστηκε στην %s.";
$lang['update_db_updated'] = "Η Βάση Δεδομένων ενημερώθηκε με επιτυχία!";
$lang['update_continue'] = "Συνεχήστε για το phpMyVisites";
$lang['update_jschange'] = "Προσοχή! <br /> Ο πηγαίος κώδικας javascript έχει τροποποιηθεί. ΠΡΕΠΕΙ να αντικατασταθεί ο πηγαίος κώδικας που έχετε προσθέσει σε όλα σας τα site, με τον καινούριο. <br /> Αλλαγές στον πηγαίο κώδικα είναι εξαιρετικά σπάνιες και προκαταβολικά ζητάμε συγνώμη για την αναστάτωση που θα προκαλέσει αυτή η αλλαγή.";

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
$lang['tdate1'] = "%daylong% %daynumeric% %monthshort% %yearlong%";

// Monday 10
$lang['tdate2'] = "%daylong% %daynumeric%";

// Week February 10 To February 17 2004
$lang['tdate3'] = "Εβδομάδα %monthlong% %daynumeric% έως %monthlong2% %daynumeric2% %yearlong%";

// February 2004 Month
$lang['tdate4'] = "%monthlong% %yearlong% Μήνας";

// December 2003
$lang['tdate5'] = "%monthlong% %yearlong%";

// 10 Febuary week
$lang['tdate6'] = "%daynumeric% %monthlong% εβδομάδα";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%daynumeric%-%monthnumeric%-%yearlong%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = "%dayshort% %daynumeric%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9'] = " Εβδομάδα %daynumeric% %monthshort%";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%monthshort% %yearshort%";

// Year 2004
$lang['tdate11'] = "Έτος %yearlong%";

// 2004
$lang['tdate12'] = "%yearlong%";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "Ιανουάριος";
$lang['moistab']['02'] = "Φεβρουάριος";
$lang['moistab']['03'] = "Μάρτιος";
$lang['moistab']['04'] = "Απρίλιος";
$lang['moistab']['05'] = "Μάιος";
$lang['moistab']['06'] = "Ιούνιος";
$lang['moistab']['07'] = "Ιούλιος";
$lang['moistab']['08'] = "Αύγουστος";
$lang['moistab']['09'] = "Σεπτέμβριος";
$lang['moistab']['10'] = "Οκτώβριος";
$lang['moistab']['11'] = "Νοέμβριος";
$lang['moistab']['12'] = "Δεκέμβριος";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Ιαν";
$lang['moistab_graph']['02'] = "Φεβ";
$lang['moistab_graph']['03'] = "Μαρ";
$lang['moistab_graph']['04'] = "Απρ";
$lang['moistab_graph']['05'] = "Μαι";
$lang['moistab_graph']['06'] = "Ιουν";
$lang['moistab_graph']['07'] = "Ιουλ";
$lang['moistab_graph']['08'] = "Αυγ";
$lang['moistab_graph']['09'] = "Σεπ";
$lang['moistab_graph']['10'] = "Οκτ";
$lang['moistab_graph']['11'] = "Νοε";
$lang['moistab_graph']['12'] = "Δεκ";

// Day of the week
$lang['jsemaine']['Mon'] = "Δευτέρα";
$lang['jsemaine']['Tue'] = "Τρίτη";
$lang['jsemaine']['Wed'] = "Τετάρτη";
$lang['jsemaine']['Thu'] = "Πέμπτη";
$lang['jsemaine']['Fri'] = "Παρασκευή";
$lang['jsemaine']['Sat'] = "Σάββατο";
$lang['jsemaine']['Sun'] = "Κυριακή";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Δευ";
$lang['jsemaine_graph']['Tue'] = "Τρι";
$lang['jsemaine_graph']['Wed'] = "Τετ";
$lang['jsemaine_graph']['Thu'] = "Πεμ";
$lang['jsemaine_graph']['Fri'] = "Παρ";
$lang['jsemaine_graph']['Sat'] = "Σαβ";
$lang['jsemaine_graph']['Sun'] = "Κυρ";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "Δ";
$lang['calendrier_jours'][1] = "Τ";
$lang['calendrier_jours'][2] = "Τ";
$lang['calendrier_jours'][3] = "Π";
$lang['calendrier_jours'][4] = "Π";
$lang['calendrier_jours'][5] = "Σ";
$lang['calendrier_jours'][6] = "Κ";

// DO NOT ALTER!
$lang['weekdays']['Mon'] = '1';
$lang['weekdays']['Tue'] = '2';
$lang['weekdays']['Wed'] = '3';
$lang['weekdays']['Thu'] = '4';
$lang['weekdays']['Fri'] = '5';
$lang['weekdays']['Sat'] = '6';
$lang['weekdays']['Sun'] = '7';

// Continents
$lang['eur'] = "Ευρώπη";
$lang['afr'] = "Αφρική";
$lang['asi'] = "Ασία";
$lang['ams'] = "Νότια και Κεντρική Αμερική";
$lang['amn'] = "Βόρια Αμερική";
$lang['oce'] = "Ωκεανία";

// Oceans
$lang['oc_pac'] = "Ειρηνικός Ωκεανός";
$lang['oc_atl'] = "Ατλαντικός Ωκεανός";
$lang['oc_ind'] = "Ινδικός Ωκεανός";

// Countries
$lang['domaines'] = array(
	"xx" => "Άγνωστη",
	"ac" => "Νησιά Ασέσιον",
	"ad" => "Ανδόρα",
	"ae" => "Ηνωμένα Αραβικά Εμιράτα",
	"af" => "Αφγανιστάν",
	"ag" => "Αντίγκουα και Μπαρμπούντα",
	"ai" => "Αγκουίλα",
	"al" => "Αλβανία",
	"am" => "Αρμενία",
	"an" => "ΟλΛανδικές Αντίλες",
	"ao" => "Ανγκόλα",
	"aq" => "Ανταρκτική",
	"ar" => "Αργεντινή",
	"as" => "Αμερικανικά Σαμόα",
	"at" => "Αυστρία",
	"au" => "Αυστραλία",
	"aw" => "Αρούμπα",
	"az" => "Αζερμπαϊτζάν",
	"ba" => "Βοσνία Ερζεγοβίνη",
	"bb" => "Μπαρμέιντος",
	"bd" => "Μπαγκλαντές",
	"be" => "Βέλγιο",
	"bf" => "Μπουρκίνα Φάσο",
	"bg" => "Βουλγαρία",
	"bh" => "Μπαχραίιν",
	"bi" => "Μπρουρούντι",
	"bj" => "Μπενίν",
	"bm" => "Βερμούδες",
	"bn" => "Μπρούνεο",
	"bo" => "Βολιβία",
	"br" => "Βραζιλία",
	"bs" => "Μπαχάμες",
	"bt" => "Μπουτάν",
	"bv" => "Μπουβέτ Νήσος",
	"bw" => "Μποουτσβάνα",
	"by" => "Λευκορωσία",
	"bz" => "Μπελίζε",
	"ca" => "Καναδάς",
	"cc" => "Νησιά Κόκο",
	"cd" => "Κονγκό, Δημοκρατία του",
	"cf" => "Δημοκρατία Κεντρικής Αφρικής",
	"cg" => "Κονγκό",
	"ch" => "Ελβετία",
	"ci" => "Κοτ Ντ' Αϊβόρ",
	"ck" => "Νησιά Κουκ",
	"cl" => "Χιλή",
	"cm" => "Καμερούν",
	"cn" => "Κίνα, Λαϊκη Δημοκρατία της",
	"co" => "Κολομβία",
	"cr" => "Κόστα Ρίκα",
	"cs" => "Σερβία Μοντενέγκρο",
	"cu" => "Κούβα",
	"cv" => "Ακρωτήρι Βέρντε",
	"cx" => "Νησιά Χριστουγέννων",
	"cy" => "Κύπρος",
	"cz" => "Τσεχία",
	"de" => "Γερμανία",
	"dj" => "Τζιμπουτί",
	"dk" => "Δανία",
	"dm" => "Ντομίνικα",
	"do" => "Δημοκρατία Ντομίνικα",
	"dz" => "Αλγερία",
	"ec" => "Εκουαδόρ",
	"ee" => "Εσθονία",
	"eg" => "Αίγυπτος",
	"eh" => "Δυτική Σαχάρα",
	"er" => "Εριθραία",
	"es" => "Ισπανία",
	"et" => "Αιθιοπία",
	"fi" => "Φιλανδία",
	"fj" => "Φίτζι",
	"fk" => "Μαλβίδες",
	"fm" => "Μικρονησία, Ομόσπονδα κράτη της",
	"fo" => "Φαρόε Νήσοι",
	"fr" => "Γαλία",
	"ga" => "Γκαμπόν",
	"gd" => "Γρενάδα",
	"ge" => "Γεωργία",
	"gf" => "Γαλλική Γουινέα",
	"gg" => "Γκιουρσνει",
	"gh" => "Γκάνα",
	"gi" => "Γιβραλτάρ",
	"gl" => "Γροιλανδία",
	"gm" => "Γκάμπια",
	"gn" => "Γουινέα",
	"gp" => "Γουαδελούπη",
	"gq" => "Γουινέα Ισημερηνού",
	"gr" => "Ελλάδα",
	"gs" => "Νότια Γεωργία και Νότιοι Νήσοι Σαντουιτς",
	"gt" => "Γουατεμάλα",
	"gu" => "Γκουάμ",
	"gw" => "Γουινέα-Μπισο",
	"gy" => "Γουιάνα",
	"hk" => "Χονγκ Κονγκ",
	"hm" => "Νήσοι Χερντη και Μακντοναλντ",
	"hn" => "Ονδούρα",
	"hr" => "Κροατία",
	"ht" => "Αϊτή",
	"hu" => "Ουγγαρία",
	"id" => "Ινδονησία",
	"ie" => "Ιρλανδία",
	"il" => "Ισραήλ",
	"im" => "Νήσος Μαν",
	"in" => "Ινδία",
	"io" => "Βρετανική Ινδικού Ωκεανού Περιοχή",
	"iq" => "Ιρακ",
	"ir" => "Ιραν",
	"is" => "Ισλανδία",
	"it" => "Ιταλία",
	"je" => "Τζέρσει",
	"jm" => "Τζαμάϊκα",
	"jo" => "Ιορδανία",
	"jp" => "Ιαπωνία",
	"ke" => "Κένυα",
	"kg" => "Κιργκιστάν",
	"kh" => "Καμπόντια",
	"ki" => "Κιριμπάτι",
	"km" => "Κομόρος",
	"kn" => "Άγιος Κιτς και Νέβις",
	"kp" => "Νότια Κορέα",
	"kr" => "Βόρια Κορέα",
	"kw" => "Κουβέιτ",
	"ky" => "Νήσοι Καϊμάν",
	"kz" => "Καζακστάν",
	"la" => "Λάος",
	"lb" => "Λίβανο",
	"lc" => "Αγία Λουκία",
	"li" => "Λίχνεστάιν",
	"lk" => "Σρι Λάνκα",
	"lr" => "Λιβηρία",
	"ls" => "Λεσόθο",
	"lt" => "Λιθουανία",
	"lu" => "Λουξεμβούργο",
	"lv" => "Λάτβια",
	"ly" => "Λιβύη",
	"ma" => "Μαρόκο",
	"mc" => "Μονακό",
	"md" => "Μολδαβία",
	"mg" => "Μαδαγασκάρη",
	"mh" => "Νήσοι Μάρσαλ",
	"mk" => "Πρώην Γιουγκοσλαβική Δημοκρατία της Μακεδονίας",
	"ml" => "Μαλί",
	"mm" => "Μαϊανμαρ",
	"mn" => "Μογγολία",
	"mo" => "Μακάου",
	"mp" => "Βόριοι Νήσοι Μαριάνα",
	"mq" => "Μαρτινίγη",
	"mr" => "Μαυριτανία",
	"ms" => "Μοντσεράτ",
	"mt" => "Μάλτα",
	"mu" => "Μαυριτανία",
	"mv" => "Μαλδίβες",
	"mw" => "Μαλάουι",
	"mx" => "Μεξικό",
	"my" => "Μαλαισία",
	"mz" => "Μοζαμβίκη",
	"na" => "Ναμίμπια",
	"nc" => "Νέα Καλχηδόνα",
	"ne" => "Νιγκερ",
	"nf" => "Δήσοι Νορφολκ",
	"ng" => "Νιγηρία",
	"ni" => "Νικαράγουα",
	"nl" => "Ολλανδία",
	"no" => "Νορβηγία",
	"np" => "Νεπάλ",
	"nr" => "Ναουρού",
	"nu" => "Νιού",
	"nz" => "Νέα Ζηλανδία",
	"om" => "Ομάν",
	"pa" => "Παναμάς",
	"pe" => "Περού",
	"pf" => "Γαλλική Πολυνησία",
	"pg" => "Παπούα Νέα Γουινέα",
	"ph" => "Φιλλιπίνες",
	"pk" => "Πακιστάν",
	"pl" => "Πολωνία",
	"pm" => "SΆγιος Πιέρε και Μιγκουέλον",
	"pn" => "Πιτκάιρν",
	"pr" => "Πουέρτο Ρίκο",
	"ps" => "Παλαιστίνη",
	"pt" => "Πορτογαλία",
	"pw" => "Παλάου",
	"py" => "Παραγουάη",
	"qa" => "Κατάρ",
	"re" => "Νήσοι ριγιούνιον",
	"ro" => "Ρουμανία",
	"ru" => "Ομοσπονδία Ρωσίας",
	"rs" => "Ρωσία",
	"rw" => "Ρουάντα",
	"sa" => "Σαουδική Αραβία",
	"sb" => "Νήσοι Σολωμόντα Islands",
	"sc" => "Σευχέλες",
	"sd" => "Σουδάν",
	"se" => "Σουηδία",
	"sg" => "Σινγκαπούρη",
	"sh" => "Αγία Ελένη",
	"si" => "Σλοβενία",
	"sj" => "Σβάλμπαρντ",
	"sk" => "Σλοβακία",
	"sl" => "Σιέρρα Λεόνε",
	"sm" => "Σαν Μαρίνο",
	"sn" => "Σενεγάλη",
	"so" => "Σομαλία",
	"sr" => "Σουρινάμ",
	"st" => "Σάο Τομ και Πρινσίπε",
	"su" => "Παλιά Σοβιετική Ένωση ",
	"sv" => "Ελ Σαλβαντόρ",
	"sy" => "Συρία",
	"sz" => "Ζουαζιλάνδη",
	"tc" => "Νήσοι Τερκ και Κάϊκος",
	"td" => "Τσάντ",
	"tf" => "Γαλλικές Νότιες επαρχίες",
	"tg" => "Τόγκο",
	"th" => "Ταυλάνδυ",
	"tj" => "Τατζικιστάν",
	"tk" => "Τοκελάου",
	"tm" => "Τουρκμενιστάν",
	"tn" => "Τυνησία",
	"to" => "Τόνγκα",
	"tp" => "Ανατολικό Τιμόρ",
	"tr" => "Τουρκία",
	"tt" => "Τρινιντάντ και Τομπάγκο",
	"tv" => "Τουβαλού",
	"tw" => "Ταϊβάν",
	"tz" => "Τανζανία",
	"ua" => "Ουκρανία",
	"ug" => "Ουγκάντα",
	"uk" => "Ηνωμένο Βασίλειο",
	"gb" => "Μεγάλη Βρετανία",
	"um" => "Ηνωμένα Πολιτείες Ελαχίστον Νήσων",
	"us" => "Ηνωμένες Πωλητείες",
	"uy" => "Ουρουγουάη",
	"uz" => "Ουζμπεκιστάν",
	"va" => "Πολή Βατικανού",
	"vc" => "Άγιος Βίνσεντ και οι Γρεναδίνες",
	"ve" => "Βενεζουέλα",
	"vg" => "Βρετανική Παρθένοι Νήσοι",
	"vi" => "Αμερικάνικοι Παρθένοι Νήσοι",
	"vn" => "Βιετνάμ",
	"vu" => "Βανουάτου",
	"wf" => "Γουάλις και Φουτούνα",
	"ws" => "Σαμόα",
	"ye" => "Υεμένη",
	"yt" => "Μαγιότε",
	"yu" => "Γιουγκουσλαβία",
	"za" => "Νότια Αφρική",
	"zm" => "Ζάμπια",
	"zr" => "Ζαΐρ",
	"zw" => "Ζιμπάμπουε",
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
	"tv" => "Τουβαλού",
	"ws" => "Σαμόα",
);
?>