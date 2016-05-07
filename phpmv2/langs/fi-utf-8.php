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
$lang['auteur_nom'] = "Mika Salo"; // Kääntäjän nimi
$lang['auteur_email'] = "ms.kiinteistopalvelut@gmail.com"; // Kääntäjän email
$lang['charset'] = "utf-8"; // Kielitiedoston merkkikoodaus (Oletuksenautf-8)
$lang['text_dir'] = "ltr"; // ('ltr' vasemalta oikealle, 'rtl' oikealta vasemmalle)
$lang['lang_iso'] = "fi"; // ISO-kielikoodi
$lang['lang_libelle_en'] = "Finnish"; // Englanninkielinen kielen nimi
$lang['lang_libelle_fr'] = "Finnois"; // Ranskankielinen kielen nimi
$lang['unites_bytes'] = array('Tavua', 'Kt', 'Mt', 'Gt', 'Tt', 'Pt', 'Et', 'Zt', 'Yt');
$lang['separateur_milliers'] = ''; // Tuhansien erotinmerkki (kolme tuhatta sanotaan englanniksi 3,000)
$lang['separateur_decimaux'] = ','; // Desimaalierotin

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisities | Avoimen lähdekoodin internet-sivujen statistiikka- sekä liikennemääräanalysaattori"; // Sivujen otsake
$lang['head_keywords'] = "phpmyvisites, php, skripti, sovellus, ohjelmisto, statistiikka, suosittaja, avoin lähdekoodi, ilmainen, vapaa, gpl, vierailijaa, vierailuja, mysql, näytetyt sivut, sivut, näyttö�, näyttöjen määrä� tilastot, Selaimet, käyttöjärjestelmä, os, resoluutiot, näyttötarkkuus, päivä, viikko, kuukausi, tallennetta, maa, isäntä, palveluntarjoajat, hakukone, avainsanat, viittaajat, tilastot, avaussivut, poistumissivut, piirakkakaavio, kaavio"; // Otsakkeen avainsanat
$lang['head_description'] = "phpMyVisites | Avoimen lähdekoodin tilasto-ohjelma, joka on kehitetty PHP/MySQL:llä ja jaetaan Gnu GPL:n alaisuudessa."; // Otsakkeen kuvaus
$lang['logo_description'] = "phpMyVisites : avoimen lähdekoodin nettisivujen statistiikkaohjelmisto, joka on kehitetty PHP/MySQL:llä ja jota jaetaan GPL:n alaisena."; // Javascriptin kuvaus, pitää olla lyhyt

//
// Main menu & submenu
//
$lang['menu_visites'] = "Sivuvierailut";
$lang['menu_pagesvues'] = "Sivuavaukset";
$lang['menu_suivi'] = "Lisätietoja";
$lang['menu_provenance'] = "Lähde";
$lang['menu_configurations'] = "Asetukset";
$lang['menu_affluents'] = "Viittaukset";
$lang['menu_listesites'] = "Sivustolistaus";
$lang['menu_bilansites'] = "Yhteenveto";
$lang['menu_jour'] = "Päivä";
$lang['menu_semaine'] = "Viikko";
$lang['menu_mois'] = "Kuukausi";
$lang['menu_annee'] = "Vuosi";
$lang['menu_periode'] = "Listaus päivälle: %s"; // Formatoitu teksti (esim. : Tutkittu ajanjakso: Sunnuntai, Heinäkuun 14.)
$lang['liens_siteofficiel'] = "phpVisites kotisivu";
$lang['liens_admin'] = "Käyttäjän Asetukset";
$lang['liens_contacts'] = "Yhteystiedot";

//
// Divers
//
$lang['generique_nombre'] = "Tulos";
$lang['generique_tauxsortie'] = "Poistumistiheys";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Sivu luotu %s sekunnissa"; // Aika sekunneissa
$lang['generique_divers'] = "Muut"; // (kaavioita varten)
$lang['generique_inconnu'] = "Tuntematon"; // (kaavioita varten)
$lang['generique_vous'] = "... Sinä ?";
$lang['generique_traducteur'] = "Kääntäjä";
$lang['generique_langue'] = "Kieli";
$lang['generique_autrelangure'] = "Muu?"; // Muu kieli, käännös tarvitaan
$lang['aucunvisiteur_titre'] = "Ei vierailijoita tässä jaksossa."; 
$lang['generique_aucune_visite_bdd'] = "<b>Varoitus ! </b> Sinulla ei ole vierailijoita rekisteröity tietokantaan tältä sivustolta. Varmista, että olet kopioinut javascript koodin sivullesi oikean phpMyVisites URL <u>IN</u>  Javascript koodin. Kokeile etsiä dokumenteista apua.";
$lang['generique_aucune_site_bdd'] = "Ei sivuja rekisteröity tietokantaan ! Kirjaudu phpMyVisites Super Käyttäjänä lisätäksesi uuden sivun.";
$lang['generique_retourhaut'] = "Ylös";
$lang['generique_tempsvisite'] = "%smin %ss"; // 3min 25s tarkoittaa 3 minuuttia ja 25 sekuntia
$lang['generique_tempsheure'] = "%sh"; // 4h tarkoittaa 4 tuntia
$lang['generique_siteno'] = "Sivu %s"; // Sivu "phpmyvisites"
$lang['generique_newsletterno'] = "Uutiskirje %s"; // Uutiskirje "versio 2 tiedotus"
$lang['generique_partnerno'] = "Kumppani %s"; // Kumppani "versio 2 tiedotus"
$lang['generique_general'] = "Yleinen";
$lang['generique_user'] = "Käyttäjä %s"; // User "Admin"
$lang['generique_previous'] = "Edellinen";
$lang['generique_next'] = "Seuraava";
$lang['generique_lowpop'] = "Jätä pois alhaiset käynnit listauksesta";
$lang['generique_allpop'] = "Sisällytä kaikki käynnit listaukseen";
$lang['generique_to'] = "-"; // 4 '-' 8
$lang['generique_total_on'] = "-"; // 4 - 8 'on' 10
$lang['generique_total'] = "Yhteensä";
$lang['generique_information'] = "Tiedot";
$lang['generique_done'] = "Valmis!";
$lang['generique_other'] = "Muu";
$lang['generique_description'] = "Kuvaus:";
$lang['generique_name'] = "Nimi:";
$lang['generique_variables'] = "Muuttujat";
$lang['generique_logout'] = "Kirjaudu ulos";
$lang['generique_login'] = "Kirjaudu sisään";
$lang['generique_hits'] = "Klikkaukset";
$lang['generique_errors'] = "Virheet";
$lang['generique_site'] = "Sivu";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "Salasana : "; // pienet kirjaimet
$lang['login_login'] = "Käyttäjätunnus : "; // pienet kirjaimet
$lang['login_error'] = "Kirjautuminen epäonnistui. Virheellinen käyttäjätunnus tai salasana.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "Tervetuloa %sphpMyVisites%s Hallintasivustoon<br>Anna käyttäjätunnus ja salasana.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Yhteystiedot";
$lang['contacts_langue'] = "Käännökset";
$lang['contacts_merci'] = "Kiitokset";
$lang['contacts_auteur'] = "PhpMyVisitesin alkuunpanija, dokumentoija sekä luoja on <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "<strong>Teknisiä kysymyksiä, virheraportteja sekä ehdotuksia varten</strong> olkaa hyvä ja käytä phpVisitesin keskustelufoorumia %s. Muita pyyntöjä varten, ota yhteyttä alkuperäiseen kehittäjään käyttäen kaavaketta joka löytyy ohjelman kotisivulta."; // Sivun osoite
$lang['contacts_trad1'] = "Haluatko kääntää phpMyVisitesin omalle kielellesi ? Älä epäröi, sillä <strong>phpMyVisites</strong> tarvitsee sinua !";
$lang['contacts_trad2'] = "phpMyVisitesin kääntäminen vie jonkin aikaa (muutaman tunnin) ja vaatii hyvän kielitaidon käännettävistä kielistä, mutta muista, että <strong>mitä tahansa työtä teetkin, moni muu käyttäjä hyötyy siitä todella paljon</strong>. Jos olet kiinnostunut kääntämään phpMyVisitesiä, löydät sitä varten tarvittavan tiedon %s phpMyVisitesin virallisesta dokumentaatiosta %s."; // linkki dokumentaatioon
$lang['contacts_doc'] = "Turvaudu ongelmatilanteissa %s phpMyVisitesin viralliseen dokumentaatioon %s, sillä se antaa sinulle laajalti tietoa asennuksesta, asetuksista sekä phpMyVisitesin toiminnasta. Dokumentaatio on saatavilla omassa phpMyVisitesin versiossasi."; // linkki dokumentaatioon
$lang['contacts_thanks_dev'] = "Kiitos <strong>%s</strong>, phpMyVisites apukehittäjille, heidän arvokkaasta työstä tässä projektissa.";
$lang['contacts_merci3'] = "Käy katsomassa phpVisitesin kiitossivua nähdäksesi täydellisen listan phpMyVisitesin ystävistä.";
$lang['contacts_merci2'] = "Suuri kiitos kaikille niille, jotka ovat jakaneet kulttuuriaan lahjoittaessaan käännöksiä phpMyVisitesiin:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Sivu %s  %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Avaa tarkennetut tietodot";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Kävijätiedot"; 
$lang['visites_statistiques'] = "Tilastot";
$lang['visites_periodesel'] = "Valitulle ajanjaksolle";
$lang['visites_visites'] = "Käyntejä";
$lang['visites_uniques'] = "Uusia kävijöitä";
$lang['visites_pagesvues'] = "Sivuavauksia";
$lang['visites_pagesvisiteurs'] = "Sivuja kävijää kohden"; 
$lang['visites_pagesvisites'] = "Sivut kävijää kohden"; 
$lang['visites_pagesvisitessign'] = "Sivulta kirjatut käyttäjät"; 
$lang['visites_tempsmoyen'] = "Käynnin keskimääräinen kesto";
$lang['visites_tempsmoyenpv'] = "Keskimääräinen kesto sivua kohden";
$lang['visites_tauxvisite'] = "Yhden sivun käynnin suhde"; 
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Aikajakson yhteenveto";
$lang['visites_nbvisites'] = "Käyntejä";
$lang['visites_aucunevivisite'] = "Ei käyntejä"; // taulukossa, pitää olla lyhyt
$lang['visites_recap'] = "Yhteenveto";
$lang['visites_unepage'] = "Yksi sivu"; // kaavio
$lang['visites_pages'] = "%s sivua"; // 1-2 sivua (kaavio)
$lang['visites_min'] = "%s min"; // 10-15 min (kaavio)
$lang['visites_sec'] = "%s s"; // 0-30 s (sekuntia,kaavio)
$lang['visites_grapghrecap'] = "Tilastojen yhteenvedon kaavio";
$lang['visites_grapghrecaplongterm'] = "Kaavio pitkänaikavälin listauksen yhteenveto";
$lang['visites_graphtempsvisites'] = "Kaavio käynnin kestosta kävijää kohden";
$lang['visites_graphtempsvisitesimg'] = "Käynnin kesto kävijää kohden";
$lang['visites_graphheureserveur'] = "Käyntejä tuntia kohden palvelimen aikaan"; 
$lang['visites_graphheureserveurimg'] = "Käyntejä palvelimen aikaan"; 
$lang['visites_graphheurevisiteur'] = "Käyntejä tuntia kohden kävijän aikaan";
$lang['visites_graphheurelocalimg'] = "Käyntejä paikalliseen aikaan"; 
$lang['visites_longterm_statd'] = "Pitkän ajanjakson analyysi (Päivät)";
$lang['visites_longterm_statm'] = "Pitkän ajanjakson analyysi (Kuukaudet)";

//
// Sites Summary
//
$lang['summary_title'] = "Sivun yhteenveto";
$lang['summary_stitle'] = "Yhteenveto";

//
// Frequency Part
//
$lang['frequence_titre'] = "Sivulle palanneet käyttäjät";
$lang['frequence_nouveauxconnusgraph'] = "Kaavio Uudet kävijät vs Palanneet kävijät";
$lang['frequence_nouveauxconnus'] = "Uudet vs Palanneet kävijät";
$lang['frequence_titremenu'] = "Käyntitiheys";
$lang['frequence_visitesconnues'] = "Palanneet kävijät";
$lang['frequence_nouvellesvisites'] = "Uudet kävijät";
$lang['frequence_visiteursconnus'] = "Palanneet kävijät";
$lang['frequence_nouveauxvisiteurs'] = "Uudet kävijät";
$lang['frequence_returningrate'] = "Palanneiden arvio";
$lang['pagesvues_vispervisgraph'] = "Kaavio näyttää käynnit";
$lang['frequence_vispervis'] = "Kävijän käynnit";
$lang['frequence_vis'] = "käynt.";
$lang['frequence_visit'] = "1 käynti"; // (graph)
$lang['frequence_visits'] = "%s käyntiä"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Tietoa sivuavauksista";
$lang['pagesvues_joursel'] = "Valittu päivä";
$lang['pagesvues_jmoins7'] = "Päivä - 7";
$lang['pagesvues_jmoins14'] = "Päivä - 14";
$lang['pagesvues_moyenne'] = "(keskiarvo)";
$lang['pagesvues_pagesvues'] = "Sivuavauksia";
$lang['pagesvues_pagesvudiff'] = "Yksittäisiä sivuavauksia";
$lang['pagesvues_recordpages'] = "Eniten sivuja yksittäistä kävijää kohden";
$lang['pagesvues_tabdetails'] = "Sivuavauksia (%s - %s)"; // (yhdestä kahteen)
$lang['pagesvues_graphsnbpages'] = "Kaavio käynneistä sivuavausta kohden";
$lang['pagesvues_graphnbvisitespageimg'] = "Käyntejä sivuavausta kohden";
$lang['pagesvues_graphheureserveur'] = "Kaavio käynneistä palvelimen aikaan";
$lang['pagesvues_graphheureserveurimg'] = "Käyntejä palvelimen aikaan";
$lang['pagesvues_graphheurevisiteur'] = "Kaavio käynneistä kävijän aikaan";
$lang['pagesvues_graphpageslocalimg'] = "Käyntejä paikalliseen aikaan";
$lang['pagesvues_tempsparpage'] = "Aika sivulla";
$lang['pagesvues_total_time'] = "Aika yhteensä";
$lang['pagesvues_avg_time'] = "Keskiarvoaika";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Kävijän liikkuminen";
$lang['suivi_pageentree'] = "Saapumissivut";
$lang['suivi_pagesortie'] = "Poistumissivut";
$lang['suivi_tauxsortie'] = "Poistumissuhde";
$lang['suivi_pageentreehits'] = "Tuloklikkaukset";
$lang['suivi_pagesortiehits'] = "Poistumisklikkaukset";
$lang['suivi_singlepage'] = "Yksittäisen sivun kävijät";

//
// Origin
//
$lang['provenance_titre'] = "Kävijöiden alkuperä";
$lang['provenance_recappays'] = "Maiden yhteenveto";
$lang['provenance_pays'] = "Maat";
$lang['provenance_paysimg'] = "Kävijät maan mukaan";
$lang['provenance_fai'] = "Palveluntarjoajat";
$lang['provenance_nbpays'] = "Maiden lukumäärä : %s";
$lang['provenance_provider'] = "Palveluntarjoajat"; // Sama kuin $lang['provenance_fai'], paitsi jos $lang['provenance_fai'] on liian pitkä
$lang['provenance_continent'] = "Manner";
$lang['provenance_mappemonde'] = "Maailmankartta";
$lang['provenance_interetspays'] = "Maiden kaavio";

//
// Setup
//
$lang['configurations_titre'] = "Kävijöiden laitteisto tietoja";
$lang['configurations_os'] = "Käyttöjärjestelmät";
$lang['configurations_osimg'] = "Kaaviokuva kävijöiden käyttöjärjestelmistä";
$lang['configurations_navigateurs'] = "Selaimet";
$lang['configurations_navigateursimg'] = "Kaaviokuva kävijöiden selaimista";
$lang['configurations_resolutions'] = "Resoluutiot";
$lang['configurations_resolutionsimg'] = "Kaaviokuva kävijöiden resoluutioista";
$lang['configurations_couleurs'] = "Näytön värit";
$lang['configurations_couleursimg'] = "Kaavio kävijöiden näytönväreistä";
$lang['configurations_rapport'] = "Normaali/laajakuva";
$lang['configurations_large'] = "Laajakuva";
$lang['configurations_normal'] = "Normaali";
$lang['configurations_double'] = "Kaksoisnäyttö";
$lang['configurations_plugins'] = "Liitännäiset"; // TODO : translate
$lang['configurations_navigateursbytype'] = "Selaimet (tyypeittäin)"; // TODO : translate
$lang['configurations_navigateursbytypeimg'] = "Kaavio selaintyypeistä"; // TODO : translate
$lang['configurations_os_interest'] = "Käyttöjärjestelmän kaavio";
$lang['configurations_navigateurs_interest'] = "Selaimien kaavio";
$lang['configurations_resolutions_interest'] = "Resoluution kaavio";
$lang['configurations_couleurs_interest'] = "Näytönväri kaavio";
$lang['configurations_configurations'] = "Asetukset";

//
// Referers
//
$lang['affluents_titre'] = "Viitteet";
$lang['affluents_recapimg'] = "Kaavio kävijöistä viitteiden mukaan";
$lang['affluents_directimg'] = "Suorat pyynnöt";
$lang['affluents_sitesimg'] = "Sivustot";
$lang['affluents_moteursimg'] = "Hakukoneet";
$lang['affluents_referrersimg'] = "Viitteet";
$lang['affluents_moteurs'] = "Hakukoneet";
$lang['affluents_nbparmoteur'] = "Hakukoneiden käynnit : %s";
$lang['affluents_aucunmoteur'] = "Käyntejä ei ole kertynyt hakukoneista.";
$lang['affluents_motscles'] = "Avainsanat";
$lang['affluents_nbmotscles'] = "Eritellyt avainsanat : %s";
$lang['affluents_aucunmotscles'] = "Avainsanoja ei löytynyt.";
$lang['affluents_sitesinternet'] = "Sivustot";
$lang['affluents_nbautressites'] = "Muilta sivuilta koostuneet käynnit : %s";
$lang['affluents_nbautressitesdiff'] = "Muiden sivustojen lukumäärä : %s";
$lang['affluents_aucunautresite'] = "Käyntejä ei ole kertynyt muilta sivustoilta.";
$lang['affluents_entreedirecte'] = "Suorat pyynnöt";
$lang['affluents_nbentreedirecte'] = "Suorista pyynnöistä koostuvat käynnit : %s";
$lang['affluents_nbpartenaires'] = "Kumppaneiden kautta tulleet kävijät : %s";
$lang['affluents_aucunpartenaire'] = "Ei kävijöitä kumppaneiden kautta.";
$lang['affluents_nbnewsletters'] = "Uutiskirjeen kautta tulleet kävijät : %s";
$lang['affluents_aucunnewsletter'] = "Ei kävijöitä uutiskirjeen kautta.";
$lang['affluents_details'] = "Yksityiskohdat"; // Viittaajataulukon tuloksissa
$lang['affluents_interetsmoteurs'] = "Hakukoneiden kaavio";
$lang['affluents_interetsmotscles'] = "Avinsanojen kaavoi";
$lang['affluents_interetssitesinternet'] = "Websivujen kaavio";
$lang['affluents_partenairesimg'] = "Kumppanit";
$lang['affluents_partenaires'] = "Kumppanit";
$lang['affluents_interetspartenaires'] = "Kumppanien kaavio";
$lang['affluents_newslettersimg'] = "Uutiskirjeet";
$lang['affluents_newsletters'] = "Uutiskirjeet";
$lang['affluents_interetsnewsletters'] = "Uutiskirjeiden kaavio";
$lang['affluents_type'] = "Viittausten tyyppi";
$lang['affluents_interetstype'] = "Pääsytyypin kaavio";

//
// Summary
//
$lang['purge_titre'] = "Käyntien ja viitteiden yhteenveto";
$lang['purge_intro'] = "Pyydetty ajanjakso on poistettu ylläpidosta. Vain oleelliset tiedot on säilytetty.";
$lang['admin_purge'] = "Tietokannan hallinta";
$lang['admin_purgeintro'] = "Tämä osio antaa sinun hallita phpMyVisitesin käyttämiä taulukoita. Voit nähdä niiden viemän kiintolevytilan, optimoida niitä tai poistaa vanhoja tallenteita. Tämä antaa sinulle mahdollisuuden rajoittaa tietokannan taulukoiden kokoa.";
$lang['admin_optimisation'] = "Taulukon [ %s ] optimointi ..."; // Taulukon nimet
$lang['admin_postopt'] = "Koko pienentyi %chiffres% %unites%"; // 28 Kt
$lang['admin_purgeres'] = "Poista seuraavat ajanjaksot: %s";
$lang['admin_purge_fini'] = "Taulukoiden poisto suoritettu...";
$lang['admin_bdd_nom'] = "Nimi";
$lang['admin_bdd_enregistrements'] = "Tallenteet";
$lang['admin_bdd_taille'] = "Taulukon koko";
$lang['admin_bdd_opt'] = "Optimoi";
$lang['admin_bdd_purge'] = "Puhdistuksen kriteria";
$lang['admin_bdd_optall'] = "Optimoi kaikki";
$lang['admin_purge_j'] = "Poista %s päivää vanhemmat tallenteet";
$lang['admin_purge_s'] = "Poista %s viikkoa vanhemmat tallenteet";
$lang['admin_purge_m'] = "Poista %s kuukautta vanhemmat tallenteet";
$lang['admin_purge_y'] = "Poista %s vuotta vanhemmat tallenteet";
$lang['admin_purge_logs'] = "Poista kaikki lokitiedostot";
$lang['admin_purge_autres'] = "Puhdistus yleistä taululle '%s'";
$lang['admin_purge_none'] = "Toiminta ei mahdollinen";
$lang['admin_purge_cal'] = "Arvioi ja puhdista (tämä voi kestää useita minuutteja)";
$lang['admin_alias_title'] = "Website aliakset ja URL:t";
$lang['admin_partner_title'] = "Websivu kumppanit";
$lang['admin_newsletter_title'] = "Websivu uutiskirjeet";
$lang['admin_ip_exclude_title'] = "IP osoitteiden tilat pois listauksesta";
$lang['admin_name'] = "Nimi:";
$lang['admin_error_ip'] = "IP pitää olla oikeassa muodossa: %s";
$lang['admin_site_name'] = "Sivun nimi";
$lang['admin_site_url'] = "Sivun URL osoite";
$lang['admin_db_log'] = "Kirjaudu phpMyVisiteen Super Käyttäjänä muuttaaksesi tietokannan asetuksia.";
$lang['admin_error_critical'] = "Virhe, tarvitsee korjata phpMyVisitesissä toimiakseen.";
$lang['admin_warning'] = "Varoitus, phpMyVisites toimii oikein mutta jotkut lisäosat eivät.";
$lang['admin_move_group'] = "Siirrä ryhmään:";
$lang['admin_move_select'] = "Valitse ryhmä";

//
// Setup
//
$lang['admin_intro'] = "Tervetuloa phpMyVisitesin asetuksiin. Täällä voit  muokata kaikkia asennukseesi liittyviä tietoja. Jos ongelmia ilmenee niin katso neuvoa %s phpMyVisitesin dokumentaatiosta %s."; // linkki dokumentaatioon
$lang['admin_configetperso'] = "Käyttäjän asetukset";
$lang['admin_afficherjavascript'] = "Näytä sivulle liitettävä Javascript koodi";
$lang['admin_cookieadmin'] = "Älä laske ylläpitäjää listauksiin";
$lang['admin_ip_ranges'] = "Älä laske IP/IP alueita listauksiin";
$lang['admin_sitesenregistres'] = "Tallennettuja sivustoja:";
$lang['admin_retour'] = "Takaisin";
$lang['admin_cookienavigateur'] = "Voit jättää ylläpitäjän pois tilastojen laskennasta. Menetelmä on evästepohjainen ja toimii vain sillä selaimella jota tällä hetkellä käytät. Voit muokata tätä valintaa milloin vain.";
$lang['admin_prendreencompteadmin'] = "Laske ylläpitäjä mukaan tilastoihin (poista eväste)";
$lang['admin_nepasprendreencompteadmin'] = "Älä laske ylläpitäjää mukaan tilastoihin (luo eväste)";
$lang['admin_etatcookieoui'] = "Ylläpitäjä lasketaan tämän sivuston tilastoihin (Tämä on vakioasetus, sinua käsitellään normaalina kävijänä)";
$lang['admin_etatcookienon'] = "Sinua ei lasketa mukaan tämän sivuston tilastoihin (Käyntejäsi ei lasketa tälle sivustolle)";
$lang['admin_deleteconfirm'] = "Vahvista poistaminen %s?";
$lang['admin_sitedeletemessage'] = "<u>Ole varovainen</u>: kaikki tieto yhdistettynä tähän sivuun poistetaan <br>et voi palauttaa tietoja enää!.";
$lang['admin_confirmyes'] = "Kyllä, poistetaan";
$lang['admin_confirmno'] = "Ei, ei poisteta ";
$lang['admin_nonewsletter'] = "Uutiskirjettä tälle sivulle ei löytynyt!";
$lang['admin_nopartner'] = "Kumppania tälle sivulle ei löytynyt!";
$lang['admin_get_question'] = "Listaus tallentaa muuttujat? (URL muuttujat)";+
$lang['admin_get_a1'] = "Tallenna KAIKKI URL muuttujat";
$lang['admin_get_a2'] = "ÄLÄ tallenna URL muuttujia";
$lang['admin_get_a3'] = "Tallenna VAIN määrätyt muuttujat";
$lang['admin_get_a4'] = "Tallenna kaikki PAITSI määrätyt muuttujat";
$lang['admin_get_list'] = "Muuttujien nimet (<b>;</b> eroittelu lista) <br/>Esimerkiksi : %s";
$lang['admin_required'] = "%s on vaadittu.";
$lang['admin_title_required'] = "Vaaditut";
$lang['admin_write_dir'] = "Kirjoitettavat hakemistot";
$lang['admin_chmod_howto'] = "Nämä hakemistot pitää olla kirjoitettavissa serverillä. Tämä tarkoittaa että käyttöoikeudet pitää muuttaa arvoon 777, FTP ohjelmassa (klikkaa oikeaa hiiren painiketta -> Muuta käyttöoikeuksia (tai chmod))";
$lang['admin_optional'] = "Valinnainen";
$lang['admin_memory_limit'] = "Muisti rajoitus";
$lang['admin_allowed'] = "hyväksytty";
$lang['admin_webserver'] = "Web serveri";
$lang['admin_server_os'] = "Serverin Käyttöjärjestelmä";
$lang['admin_server_time'] = "Serverin kellonaika";
$lang['admin_legend'] = "Merkkien selitykset:";
$lang['admin_error_url'] = "URL pitää olla oikeassa muodossa : %s (ilman / lopussa)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URLs aliakset";
$lang['admin_logo_question'] = "Näytä logo?";
$lang['admin_type_again'] = "(kirjoita uudelleen)";
$lang['admin_admin_mail'] = "Super Käyttäjän sähköposti";
$lang['admin_admin'] = "Super Käyttäjä";
$lang['admin_phpmv_path'] = "Täydellinen hakemisto-osoite phpMyVisitesin tiedostoihin";
$lang['admin_valid_email'] = "Sähköpostiosoitteesi pitää olla oikeassa muodossa";
$lang['admin_valid_pass'] = "Salasanan pitää olla monimutkaisempi (6 merkkiä vähintään ja pitää sisältää numeroita)";
$lang['admin_match_pass'] = "Salasana ei täsmää";
$lang['admin_no_user_group'] = "Ei käyttäjiä tässä ryhmässä tälle sivulle";
$lang['admin_recorded_nl'] = "Tallennetut uutiskirjeet:";
$lang['admin_recorded_partners'] = "Tallennetut kumppanit:";
$lang['admin_recorded_users'] = "Tallennetut kävijät:";
$lang['admin_select_site_title'] = "Valitse sivu";
$lang['admin_select_user_title'] = "Valitse käyttäjä";
$lang['admin_no_user_registered'] = "Ei käyttäjiä rekisteröity!";
$lang['admin_configuration'] = "Asetukset";
$lang['admin_general_conf'] = "Yleisasetukset";
$lang['admin_group_title'] = "Ryhmän muokkain (käyttöoikeudet)";
$lang['admin_user_title'] = "Käyttäjä muokkain";
$lang['admin_user_add'] = "Lisää käyttäjä";
$lang['admin_user_mod'] = "Muokkaa käyttäjää";
$lang['admin_user_del'] = "Poista käyttäjä";
$lang['admin_server_info'] = "Serverin tiedot";
$lang['admin_send_mail'] = "Lähetä listaus sähköpostina";
$lang['admin_rss_feed'] = "Listaus RSS tietona";
$lang['admin_site_admin'] = "Sivun Pääkäyttäjä";
$lang['admin_site_add'] = "Lisää valvottava sivu";
$lang['admin_site_mod'] = "Muokkaa valvottavaa sivua";
$lang['admin_site_del'] = "Poista valvottava sivu";
$lang['admin_nl_add'] = "Lisää uutiskirje";
$lang['admin_nl_mod'] = "Muokkaa uutiskirjettä";
$lang['admin_nl_del'] = "Poista uutiskirje";
$lang['admin_partner_add'] = "Lisää kumppani";
$lang['admin_partner_mod'] = "Muokkaa kumppanin nimeä ja URL";
$lang['admin_partner_del'] = "Poista kumppani";
$lang['admin_url_alias'] = "URL aliaksien hallinta";
$lang['admin_group_admin_n'] = "Näytä listaukset + Pääkäyttäjän oikeudet";
$lang['admin_group_admin_d'] = "Käyttäjät voivat katsoa listauksia JA muokata sivun tietoja (nimi, lisää eväste, IP aluiden poisjäänti, hallinnoi URL aliaksia/kumppaneita/uutiskirjeitä, yms.)";
$lang['admin_group_view_n'] = "Näytä listaukset";
$lang['admin_group_view_d'] = "Käyttäjät voivat vain nähdä listaukset. Ei pääkäyttäjän oikeuksia.";
$lang['admin_group_noperm_n'] = "Ei oikeuksia";
$lang['admin_group_noperm_d'] = "Tämän ryhmän käyttäjäjillä ei ole oikeuksia nähdä listauksia tai muokata tietoja.";
$lang['admin_group_stitle'] = "Voit muokata käyttäjiä ryhmässä valitsemalla käyttäjät jotka haluat muokata, sitten valitse ryhmä mihin haluat siirtää valitut käyttäjät.";
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
$lang['install_loginmysql'] = "Tietokannan käyttäjätunnus";
$lang['install_mdpmysql'] = "Tietokannan salasana";
$lang['install_serveurmysql'] = "Tietokantapalvelin";
$lang['install_basemysql'] = "Tietokannan nimi";
$lang['install_prefixetable'] = "Taulukoiden etuliite";
$lang['install_utilisateursavances'] = "Edistyneet käyttäjät (Valinnainen)";
$lang['install_oui'] = "Kyllä";
$lang['install_non'] = "Ei";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Ongelma: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Super Käyttäjän käyttäjätunnus:";
$lang['install_mdpadmin'] = "Super Käyttäjän salasana:";
$lang['install_chemincomplet'] = "Täydellinen polku phpMyVisitesin sovellukseen (kuten http://www.minunsivu.com/hakemisto1/hakemisto2/phpmyvisites/). Hakemistopolun tulee päättyä <strong>/</strong>-merkkiin.";
$lang['install_afficherlogo'] = "Näytä logo sivostolla ? %s <br />Hyväksymällä Näytä logo , autat mainostamaan phpMyVisiteä voidaksemme tehdä siitä vielä tehokkaamman työkalun. Se on myös kiitos tekijöille jotka ovat viettäneet monia tunteja kehittäessään tätä Avoimen lähdekoodin (GPL) ilmaista ohjelmistoa ."; // %s korvattu logokuvalle
$lang['install_affichergraphique'] = "Näytä kaaviokuvat tilastoissa.";
$lang['install_valider'] = "Lähetä"; //  asennuksen aikana ja loginiin
$lang['install_popup_logo'] = "Valitse logo"; // TODO : translate
$lang['install_logodispo'] = "Tarjolla olevat logo vaihtoehdot"; // TODO : translate
$lang['install_welcome'] = "Tervetuloa!";
$lang['install_system_requirements'] = "Järjestelmän vaatimukset";
$lang['install_database_setup'] = "Tietokannan asennus";
$lang['install_create_tables'] = "Pöytien (table) luonti";
$lang['install_general_setup'] = "Asennus";
$lang['install_create_config_file'] = "Luo Config Tiedosto";
$lang['install_first_website_setup'] = "Lisää Ensimmäinen Websivu";
$lang['install_display_javascript_code'] = "Näytä Javascript koodi";
$lang['install_finish'] = "Valmis!";
$lang['install_txt2'] = "Asennuksen lopussa tullaan lähettämään pyyntö viralliselle kotisivulle, joka helpottaa meitä pitämään yllä phpMyVisitesin käyttäjien lukumäärää. Kiitos ymmärtämyksestänne.";
$lang['install_database_setup_txt'] = "Anna tietokannan asetukset.";
$lang['install_general_config_text'] = "phpMyVisites voi olla vain yksi Super Käyttäjä kenellä on oikeudet kaikkeen toimintaan. Valitse käyttäjätunnus ja salasana Super Käyttäjän tiliin. Voit lisätä muita käyttäjiä myöhemmin.";
$lang['install_config_file'] = " Super Käyttäjän tiedot annettu onnistuneesti.";
$lang['install_js_code_text'] = "<p>Laskeaksesi kaikki kävijät, sinun on lisättävä javascript koodi kaikille sivuillesi. </p><p> Sivujesi ei tarvitse olla tehty PHP scriptillä, <strong>phpMyVisites toimii kaikenlaisilla alustoilla (esim HTML, ASP, Perl tai muulla scriptikielellä).</strong> </p><p> Tässä on koodi jonka laitat: (kopioi ja liitä kaikille sivuillesi) </p>";
$lang['install_intro'] = "Tervetuloa phpMyVisites asennukseen."; 
$lang['install_intro2'] = "Asennus on jaettu %s osioon ja vie noin 10 minuuttia.";
$lang['install_next_step'] = "Siirry seuraavaan osioon";
$lang['install_status'] = "Asennuksen tila";
$lang['install_done'] = "Asennuksesta on %s%% valmiina"; // Install 25% complete
$lang['install_site_success'] = "Websivu luotiin onnistuneesti!";
$lang['install_site_info'] = "Anna tiedot ensimmäiselle Websivulle.";
$lang['install_go_phpmv'] = "Siirry phpMyVisitesiin!";
$lang['install_congratulation'] = "Onnittelut! phpMyVisites asennus on valmis.";
$lang['install_end_text'] = "Varmista että javascript koodi on lisätty sivuillesi, ja odota ensimmäistä kävijää!";
$lang['install_db_ok'] = "Yhteys tietokantapalvelimeen ok!";
$lang['install_table_exist'] = "phpMyVisites pöydät(tables) on jo tietokannassa.";
$lang['install_table_choice'] = "Valitse olemassaolevan tietokannan pöytien (tables) uudelleenkäyttö tai valitse uusiasennus tyhjentääksesi vanhat tiedot tietokannasta .";
$lang['install_table_erase'] = "Tyhjennä kaikki pöydät(tables) (ole varovainen!)";
$lang['install_table_reuse'] = "Käytä uudelleen olemassaolevat pöydät(tables)";
$lang['install_table_success'] = "Pöydät(tables)luotu onnistuneesti!";
$lang['install_send_mail'] = "Vastaanota sähköpostilla joka päivä sivuston kävijälistauksen yhteenveto?";

//
// Update Step
//
$lang['update_title'] = "Päivitä phpMyVisites";
$lang['update_subtitle'] = "Huomasimme että olet päivittämässä phpMyVisitesiä.";
$lang['update_versions'] = "Versiosi on %s Päivitämme sen versioon %s.";
$lang['update_db_updated'] = "Tietokanta päivitetty onnistuneesti!";
$lang['update_continue'] = "Siirry phpMyVisitesiin";
$lang['update_jschange'] = "Varoitus! <br /> phpMyVisites javascript koodia on muokattu. Sinun TÄYTYY päivittää sivustosi uudella scriptillä. Pahoittelemme että sinun täytyy tehdä tämä manuaalisesti!!!"; // TODO : translate

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
$lang['tdate3'] = "Viikko %monthlong% %daynumeric% - %monthlong2% %daynumeric2% %yearlong%";

// February 2004 Month
$lang['tdate4'] = "%monthlong% %yearlong% Kuukausi";

// December 2003
$lang['tdate5'] = "%monthlong% %yearlong%";

// 10 Febuary week
$lang['tdate6'] = "%daynumeric% %monthlong% viikko";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%daynumeric%-%monthnumeric%-%yearlong%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = "%dayshort% %daynumeric%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9'] = " Viikko %daynumeric% %monthshort%";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%monthshort% %yearshort%";

// Year 2004
$lang['tdate11'] = "Vuosi %yearlong%";

// 2004
$lang['tdate12'] = "%yearlong%";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "Tammikuu";
$lang['moistab']['02'] = "Helmikuu";
$lang['moistab']['03'] = "Maaliskuu";
$lang['moistab']['04'] = "Huhtikuu";
$lang['moistab']['05'] = "Toukokuu";
$lang['moistab']['06'] = "Kesäkuu";
$lang['moistab']['07'] = "Heinäkuu";
$lang['moistab']['08'] = "Elokuu";
$lang['moistab']['09'] = "Syyskuu";
$lang['moistab']['10'] = "Lokakuu";
$lang['moistab']['11'] = "Marraskuu";
$lang['moistab']['12'] = "Joulukuu";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Tam";
$lang['moistab_graph']['02'] = "Hel";
$lang['moistab_graph']['03'] = "Maa";
$lang['moistab_graph']['04'] = "Huh";
$lang['moistab_graph']['05'] = "Tou";
$lang['moistab_graph']['06'] = "Kes";
$lang['moistab_graph']['07'] = "Hei";
$lang['moistab_graph']['08'] = "Elo";
$lang['moistab_graph']['09'] = "Syy";
$lang['moistab_graph']['10'] = "Lok";
$lang['moistab_graph']['11'] = "Mar";
$lang['moistab_graph']['12'] = "Jou";

// Day of the week
$lang['jsemaine']['Mon'] = "Maanantai";
$lang['jsemaine']['Tue'] = "Tiistai";
$lang['jsemaine']['Wed'] = "Keskiviikko";
$lang['jsemaine']['Thu'] = "Torstai";
$lang['jsemaine']['Fri'] = "Perjantai";
$lang['jsemaine']['Sat'] = "Lauantai";
$lang['jsemaine']['Sun'] = "Sunnuntai";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Ma";
$lang['jsemaine_graph']['Tue'] = "Ti";
$lang['jsemaine_graph']['Wed'] = "Ke";
$lang['jsemaine_graph']['Thu'] = "To";
$lang['jsemaine_graph']['Fri'] = "Pe";
$lang['jsemaine_graph']['Sat'] = "La";
$lang['jsemaine_graph']['Sun'] = "Su";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "M";
$lang['calendrier_jours'][1] = "T";
$lang['calendrier_jours'][2] = "K";
$lang['calendrier_jours'][3] = "T";
$lang['calendrier_jours'][4] = "P";
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
$lang['eur'] = "Eurooppa";
$lang['afr'] = "Afrikka";
$lang['asi'] = "Aasia";
$lang['ams'] = "Pohjois- ja Keski-Amerikka";
$lang['amn'] = "Pohjois-Amerikka";
$lang['oce'] = "Oseania";

// Oceans
$lang['oc_pac'] = "Tyynivaltameri"; // TODO : translate
$lang['oc_atl'] = "Atlantin Valtameri"; // TODO : translate
$lang['oc_ind'] = "Intian Valtameri"; // TODO : translate

// Countries
$lang['domaines'] = array(
    "xx" => "Tuntematon",
    "ac" => "Ascension Saaret",
    "ad" => "Andorra",
    "ae" => "Yhdistyneet Arabiemiirikunnat",
    "af" => "Afganistan",
    "ag" => "Antigua ja Barbuda",
    "ai" => "Anguilla",
    "al" => "Albania",
    "am" => "Armenia",
    "an" => "Alankomaat",
    "ao" => "Angola",
    "aq" => "Pohjoisnapa",
    "ar" => "Argentiina",
    "as" => "Samoa",
    "at" => "Itävalta",
    "au" => "Australia",
    "aw" => "Aruba",
    "az" => "Azerbaijan",
    "ba" => "Bosnia ja Herzegovina",
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
    "br" => "Brasilia",
    "bs" => "Bahama",
    "bt" => "Bhutan",
    "bv" => "Bouvet Saari",
    "bw" => "Botswana",
    "by" => "Belarus",
    "bz" => "Belize",
    "ca" => "Kanada",
    "cc" => "Kookos (Keeling) Saaret",
    "cd" => "Kongon demokraattinen tasavalta",
    "cf" => "Keski-Afrikan tasavalta",
    "cg" => "Kongo",
    "ch" => "Sveitsi",
    "ci" => "Cote D'Ivoire",
    "ck" => "Cook Saaret",
    "cl" => "Chile",
    "cm" => "Kameron",
    "cn" => "Kiina",
    "co" => "Kolumbia",
    "cr" => "Costa Rica",
	"cs" => "Serbia Montenegro",
    "cu" => "Kuuba",
    "cv" => "Cape Verde",
    "cx" => "Christmas saaret",
    "cy" => "Kypros",
    "cz" => "Tsekkien tasavalta",
    "de" => "Saksa",
    "dj" => "Djibouti",
    "dk" => "Tanska",
    "dm" => "Dominica",
    "do" => "Dominikaaninen tasavalta",
    "dz" => "Algeria",
    "ec" => "Ecuador",
    "ee" => "Viro",
    "eg" => "Egypti",
    "eh" => "Läntinen sahrara",
    "er" => "Eritrea",
    "es" => "Espanja",
    "et" => "Etiopia",
    "fi" => "Suomi",
    "fj" => "Fiji",
    "fk" => "Falkland Saaret (Malvinas)",
    "fm" => "Micronesian yhtyneet osavaltiot",
    "fo" => "Faroe Saaret",
    "fr" => "Ranska",
    "ga" => "Gabon",
    "gd" => "Grenada",
    "ge" => "Georgia",
    "gf" => "Ranskan Guyana",
    "gg" => "Guernsey",
    "gh" => "Ghana",
    "gi" => "Gibraltar",
    "gl" => "Gröönlanti",
    "gm" => "Gambia",
    "gn" => "Guinea",
    "gp" => "Guadeloupe",
    "gq" => "Equatorial Guinea",
    "gr" => "Kreikka",
    "gs" => "Pohjois Georgia and the Pohjoiset Sandwich Islands",
    "gt" => "Guatemala",
    "gu" => "Guam",
    "gw" => "Guinea-Bissau",
    "gy" => "Guyana",
    "hk" => "Hong Kong",
    "hm" => "Heard Saari and McDonald Saari",
    "hn" => "Honduras",
    "hr" => "Kroatia",
    "ht" => "Haiti",
    "hu" => "Unkari",
    "id" => "Indonesia",
    "ie" => "Irlanti",
    "il" => "Israel",
    "im" => "Man Saari",
    "in" => "Intia",
    "io" => "Britannian Intian Valtameren Alue",
    "iq" => "Irak",
    "ir" => "Iranin Islamilainen tasavalta",
    "is" => "Islanti",
    "it" => "Italia",
    "je" => "Jersey",
    "jm" => "Jamaica",
    "jo" => "Jordan",
    "jp" => "Japani",
    "ke" => "Kenia",
    "kg" => "Kyrgyzstan",
    "kh" => "Cambodza",
    "ki" => "Kiribati",
    "km" => "Comoros",
    "kn" => "Saint Kitts ja Nevis",
    "kp" => "Korea kansandemokraattinen tasavalta",
    "kr" => "Korea tasavalta",
    "kw" => "Kuwait",
    "ky" => "Cayman Saaret",
    "kz" => "Kazakhstan",
    "la" => "Laos",
    "lb" => "Libanon",
    "lc" => "Saint Lucia",
    "li" => "Liechtenstein",
    "lk" => "Sri Lanka",
    "lr" => "Liberia",
    "ls" => "Lesotho",
    "lt" => "Liettua",
    "lu" => "Luxemburg",
    "lv" => "Latvia",
    "ly" => "Libya",
    "ma" => "Marokko",
    "mc" => "Monaco",
    "md" => "Moldovan tasavalta",
    "mg" => "Madagaskar",
    "mh" => "Marshall Saaret",
    "mk" => "Makedonia",
    "ml" => "Mali",
    "mm" => "Myanmar",
    "mn" => "Mongolia",
    "mo" => "Macau",
    "mp" => "Pohjoiset Mariaanien saaret",
    "mq" => "Martinique",
    "mr" => "Mauritania",
    "ms" => "Montserrat",
    "mt" => "Malta",
    "mu" => "Mauritius",
    "mv" => "Maldives",
    "mw" => "Malawi",
    "mx" => "Mexico",
    "my" => "Malesia",
    "mz" => "Mosambik",
    "na" => "Namibia",
    "nc" => "Uusi Kaledonia",
    "ne" => "Nigeria",
    "nf" => "Norfolk Saari",
    "ng" => "Nigeria",
    "ni" => "Nicaragua",
    "nl" => "Alankomaat",
    "no" => "Norja",
    "np" => "Nepal",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "Uusi Seelanti",
    "om" => "Oman",
    "pa" => "Panama",
    "pe" => "Peru",
    "pf" => "Ranskan Polynesia",
    "pg" => "Papua Uusi Guinea",
    "ph" => "Filippiinit",
    "pk" => "Pakistan",
    "pl" => "Puola",
    "pm" => "Saint Pierre ja Miquelon",
    "pn" => "Pitcairn",
    "pr" => "Puerto Rico",
	"ps" => "Palestinian Territory",
    "pt" => "Portugal",
    "pw" => "Palau",
    "py" => "Paraguay",
    "qa" => "Qatar",
    "re" => "Reunion Saari",
    "ro" => "Romania",
    "ru" => "Venäjän Liittovalta",
    "rs" => "Venäjä",
    "rw" => "Ruanda",
    "sa" => "Saudi Arabia",
    "sb" => "Solomon saaret",
    "sc" => "Seychellit",
    "sd" => "Sudan",
    "se" => "Ruotsi",
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
    "st" => "Sao Tome ja Principe",
    "su" => "Vanha U.R.S.S.",
    "sv" => "El Salvador",
    "sy" => "Syyrian Arabitasavalta",
    "sz" => "Sveitsi",
    "tc" => "Turks ja Caicos saaret",
    "td" => "Chad",
    "tf" => "Ranskan pohjoisalueet",
    "tg" => "Togo",
    "th" => "Thaimaa",
    "tj" => "Tajikistan",
    "tk" => "Tokelau",
    "tm" => "Turkmenistan",
    "tn" => "Tunisia",
    "to" => "Tonga",
    "tp" => "Itä-Timor",
    "tr" => "Turkki",
    "tt" => "Trinidad ja Tobago",
    "tv" => "Tuvalu",
    "tw" => "Taiwan Kiinan provinssi",
    "tz" => "Tansanian yhdistynyt tasavalta",
    "ua" => "Ukraina",
    "ug" => "Uganda",
    "uk" => "Yhdistyneet kuningaskunnat",
    "gb" => "Iso-Britannia",
    "um" => "Yhdysvaltojen ulkoiset pienet saaret",
    "us" => "Yhdysvallat",
    "uy" => "Uruguay",
    "uz" => "Uzbekistan",
    "va" => "Vatikaanivaltio",
    "vc" => "Saint Vincent ja Grendiinit",
    "ve" => "Venezuela",
    "vg" => "Neitsytsaaret, Brittien",
    "vi" => "Neitsytsaaret, Yhdysvaltojen",
    "vn" => "Vietnam",
    "vu" => "Vanuatu",
    "wf" => "Wallis ja Futuna",
    "ws" => "Samoa",
    "ye" => "Jemen",
    "yt" => "Mayotte",
    "yu" => "Jugoslavia",
    "za" => "Pohjois Afrikka",
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