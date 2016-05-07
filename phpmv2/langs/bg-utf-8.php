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
$lang['auteur_nom'] = "Петър и Руми Чилев - Pierre et Romy Tchilev"; // Translator's name
$lang['auteur_email'] = "promy.club@noyon.com"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "bg"; // iso language code
$lang['lang_libelle_en'] = "Bulgarian"; // english language name
$lang['lang_libelle_fr'] = "Bulgare"; // french language name
$lang['unites_bytes'] = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
$lang['separateur_milliers'] = ' '; // three thousands spells 300 000 in bulgarian
$lang['separateur_decimaux'] = ','; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | апликация с отворен код за статистика на уебсайтове и анализатор на уеб посещаемост"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, скрипт, апликация, софтуер, статистика, безплатен, open source, gpl, посещения, посетители, mysql, посетени страници, страници, посетители, брой на посетителите, графики, прелистувачи, ОС, оперативни системи, резолюции, ден, седмица, месец, данни, страни, гост, доставчик на услуга, търсачки, ключови думи, препорачители, графики, входни страници, изходни страници, кръгови диаграми"; // Header keywords
$lang['head_description'] = "phpMyVisites | Апликация с отворен код за статистика на уебсайтове, развита в PHP/MySQL и разпространявана под GNU GPL."; // Header description
$lang['logo_description'] = "phpMyVisites : апликация с отворен код за статистика на уебсайтове, развита в PHP/MySQL и разпространявана под GPL."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Посещения";
$lang['menu_pagesvues'] = "Посетени страници";
$lang['menu_suivi'] = "Следене";
$lang['menu_provenance'] = "Произход";
$lang['menu_configurations'] = "Конфигурации";
$lang['menu_affluents'] = "Приток";
$lang['menu_listesites'] = "Листа на сайтовете";
$lang['menu_bilansites'] = "Резюме";
$lang['menu_jour'] = "Ден";
$lang['menu_semaine'] = "Седмица";
$lang['menu_mois'] = "Месец";
$lang['menu_annee'] = "Година";
$lang['menu_periode'] = "Анализиран период: %s"; // Text formated (e.g.: Studied period: Thuesday, september the 11th)
$lang['liens_siteofficiel'] = "Официален уебсайт";
$lang['liens_admin'] = "Администрация";
$lang['liens_contacts'] = "Контакти";

//
// Divers
//
$lang['generique_nombre'] = "Брой";
$lang['generique_tauxsortie'] = "Изходящ процент";
$lang['generique_ok'] = "ОК";
$lang['generique_timefooter'] = "Страницата е генерирана за %s секунди"; // Time in seconds
$lang['generique_divers'] = "Други"; // (for the graphs)
$lang['generique_inconnu'] = "Неизвестно."; // (for the graphs)
$lang['generique_vous'] = "... Вие ?";
$lang['generique_traducteur'] = "Преводач";
$lang['generique_langue'] = "Език";
$lang['generique_autrelangure'] = "Други?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "Няма посещения през този период."; 
$lang['generique_aucune_visite_bdd'] = "<b>Внимание ! </b> Вие нямате никакво посещение, регистрирано в базата данни. Уверете се, че кодът Javascript наистина е записан във вашите страници с точния URL на phpMyVisites <u>В</u> кода Javascript. В случай на нужда потърсете помощ в приложената документация.";
$lang['generique_aucune_site_bdd'] = "Няма сайт регистриран в базата данни ! Използвайте вашия login на Супер Администратор на phpMyVisites за да добавите нов сайт.";
$lang['generique_retourhaut'] = "Горе";
$lang['generique_tempsvisite'] = "%smin %ss"; // 3min 25s means 3 минути и 25 секунди
$lang['generique_tempsheure'] = "%sh"; // 4h means 4 часа
$lang['generique_siteno'] = "Site %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Newsletter %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "Partner %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "General";
$lang['generique_user'] = "User %s"; // User "Admin"
$lang['generique_previous'] = "Предишен";
$lang['generique_next'] = "Следващ";
$lang['generique_lowpop'] = "Изключи малките популации от статистиките";
$lang['generique_allpop'] = "Включи цялата популация в статистиките";
$lang['generique_to'] = "to"; // 4 'до' 8
$lang['generique_total_on'] = "on"; // 4 to 8 'върху' 10
$lang['generique_total'] = "Сума";
$lang['generique_information'] = "Информации";
$lang['generique_done'] = "Потвърди!";
$lang['generique_other'] = "Друг";
$lang['generique_description'] = "Описание:";
$lang['generique_name'] = "Име:";
$lang['generique_variables'] = "Променливи";
$lang['generique_logout'] = "Излез";
$lang['generique_login'] = "Влез";
$lang['generique_hits'] = "Hits";
$lang['generique_errors'] = "Errors";
$lang['generique_site'] = "Site";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "парола : "; // lowercase
$lang['login_login'] = "потребител : "; // lowercase
$lang['login_error'] = "Достъпът не е позволен. Погрешно потребителско име или парола";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "Вие искате да влезете в протекционната зона на %sphpMyVisites%s .";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Контакти";
$lang['contacts_langue'] = "Преводи";
$lang['contacts_merci'] = "Благодарности";
$lang['contacts_auteur'] = "Автор на програмата, документацията и проекта phpMyVisites е <strong>Матийо Обри (Matthieu Aubry)</strong>.";
$lang['contacts_questions'] = "За всички<strong>технически въпроси, съобщения за грешки или предложения</strong>, посетете форумите, създадени за целта в официалния уебсайт %s. За други искания, моля свържете се с автора чрез формуляра в официалния уебсайт"; // adresse du site
$lang['contacts_trad1'] = "Вие искате да използвате phpMyVisites на вашия език? Не се колебайте да допринесете вие самия за превода на апликацията, <strong>phpMyVisites има нужда от Вас!</strong>";
$lang['contacts_trad2'] = "Преводът на phpMyVisites е дейност, която може да отнеме малко време (няколко часа) и за която е нужно добро познавање на езика; но помнете, че <strong>всяка работа която свършите, ще бъде от полза на твърде много други потребители</strong>, които ще могат пълноценно да използват phpMyVisites. Ако сте заинтересувани от превода на phpMyVisites, вие ще намерите всички потребни информации в %s официалната документация на phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "Не се колебайте да прегледате %s официалната документация на phpMyVisites %s, която съдържа много информации за инсталирането, конфигурацията и функционирането на phpMyVisites. Документацията е достапна директно във вашата версия на phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Благодарим много на <strong>%s</strong>, сътрудници в развитието на phpMyVisites, за качеството на тяхната работа и интереса им към този проект.";
$lang['contacts_merci3'] = "Посетете страницата с благодарности на официалния уебсайт за да видите пълната листа на приятелите на phpMyVisites.";
$lang['contacts_merci2'] = "Голяма благодарност също и на всички онези, които споделиха тяхната култура за превеждането на phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Site %s on %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Към подробните статистики";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Информации за посещенията"; 
$lang['visites_statistiques'] = "Статистика";
$lang['visites_periodesel'] = "За избрания период";
$lang['visites_visites'] = "Посещения";
$lang['visites_uniques'] = "Единствени посетители";
$lang['visites_pagesvues'] = "Посетени страници";
$lang['visites_pagesvisiteurs'] = "Страници на посетител"; 
$lang['visites_pagesvisites'] = "Страници на посещение"; 
$lang['visites_pagesvisitessign'] = "Страници на значително посещение"; 
$lang['visites_tempsmoyen'] = "Средно времетраене на посещението";
$lang['visites_tempsmoyenpv'] = "Средно време на посетена страница";
$lang['visites_tauxvisite'] = "Посетеност на 1 страница"; 
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Общо за периода";
$lang['visites_nbvisites'] = "Посещения";
$lang['visites_aucunevivisite'] = "Няма посещ."; // in the table, must be short
$lang['visites_recap'] = "Общо";
$lang['visites_unepage'] = "1 страница"; // (graph)
$lang['visites_pages'] = "%s страници"; // 1-2 pages (graph)
$lang['visites_min'] = "%s мин"; // 10-15 min (graph)
$lang['visites_sec'] = "%s сек"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Обобщена графика на статистиките";
$lang['visites_grapghrecaplongterm'] = "Графика на дългосрочния отчет";
$lang['visites_graphtempsvisites'] = "Графика за времетраене на посещенията на посетител";
$lang['visites_graphtempsvisitesimg'] = "Времетраене на посещенията на посетител";
$lang['visites_graphheureserveur'] = "Графика на посщенията на час на сървъра"; 
$lang['visites_graphheureserveurimg'] = "Посещения според времето на сървъра "; 
$lang['visites_graphheurevisiteur'] = "Графика на посещения на час за посетител";
$lang['visites_graphheurelocalimg'] = "Посещения според локалното време"; 
$lang['visites_longterm_statd'] = "Дългосрочен анализ (Дни от периода)";
$lang['visites_longterm_statm'] = " Дългосрочен анализ (Месеци от периода)";

//
// Sites Summary
//
$lang['summary_title'] = "Отчет за сайтовете";
$lang['summary_stitle'] = "Резюме";

//
// Frequency Part
//
$lang['frequence_titre'] = "Честота на посещенията";
$lang['frequence_nouveauxconnusgraph'] = "Графика на новите и познати посетители";
$lang['frequence_nouveauxconnus'] = "Нови и познати посетители";
$lang['frequence_titremenu'] = "Честота";
$lang['frequence_visitesconnues'] = "Познати посещения";
$lang['frequence_nouvellesvisites'] = "Нови посещения";
$lang['frequence_visiteursconnus'] = " Познати посетители ";
$lang['frequence_nouveauxvisiteurs'] = " Нови посетители ";
$lang['frequence_returningrate'] = "Процент завръщания";
$lang['pagesvues_vispervisgraph'] = "Графика на посещенията на посетител";
$lang['frequence_vispervis'] = " Брой на посещенията на посетител ";
$lang['frequence_vis'] = "посещение";
$lang['frequence_visit'] = "1 посещение "; // (graph)
$lang['frequence_visits'] = "%s посещения "; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Информация за посетени страници";
$lang['pagesvues_joursel'] = "Избран ден";
$lang['pagesvues_jmoins7'] = "Ден - 7";
$lang['pagesvues_jmoins14'] = "Ден - 14";
$lang['pagesvues_moyenne'] = "(средно)";
$lang['pagesvues_pagesvues'] = "Посетени страници";
$lang['pagesvues_pagesvudiff'] = "Посещения на различни страници";
$lang['pagesvues_recordpages'] = "Макс. брой страници на 1 посетител";
$lang['pagesvues_tabdetails'] = "Посетени страници (от %s до %s)"; // (de 1   21)
$lang['pagesvues_graphsnbpages'] = "Графика на посещенията по брой посетени страници";
$lang['pagesvues_graphnbvisitespageimg'] = "Посещения по брой на посетени страници";
$lang['pagesvues_graphheureserveur'] = "График на посещения според времето на сървъра";
$lang['pagesvues_graphheureserveurimg'] = "Посещения според времето на сървъра";
$lang['pagesvues_graphheurevisiteur'] = "График на посещенията според локалното време";
$lang['pagesvues_graphpageslocalimg'] = "Посещения според локалното време";
$lang['pagesvues_tempsparpage'] = "Време на страница";
$lang['pagesvues_total_time'] = "Общо време";
$lang['pagesvues_avg_time'] = "Средно време";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Движение на посетителя";
$lang['suivi_pageentree'] = "Входни страници";
$lang['suivi_pagesortie'] = "Изходни страници";
$lang['suivi_tauxsortie'] = "Процент на излизания";
$lang['suivi_pageentreehits'] = "Входни хитове";
$lang['suivi_pagesortiehits'] = "Изходни хитове";
$lang['suivi_singlepage'] = "Посещения само на 1 страница";

//
// Origin
//
$lang['provenance_titre'] = "Произход на посетителите";
$lang['provenance_recappays'] = "Преглед на страните";
$lang['provenance_pays'] = "Страни";
$lang['provenance_paysimg'] = "Диаграма на посетителите по страни";
$lang['provenance_fai'] = "Интернет доставчици";
$lang['provenance_nbpays'] = "Брой различни националности : %s";
$lang['provenance_provider'] = "Доставчици"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "Континент";
$lang['provenance_mappemonde'] = "Карта на света";
$lang['provenance_interetspays'] = "Интерес по страни";

//
// Setup
//
$lang['configurations_titre'] = "Настройки на посетителите";
$lang['configurations_os'] = "Оперативна система";
$lang['configurations_osimg'] = "Графика на оперативните системи";
$lang['configurations_navigateurs'] = "Търсачки";
$lang['configurations_navigateursimg'] = "Графика на търсачките";
$lang['configurations_resolutions'] = "Резолюция на екрана";
$lang['configurations_resolutionsimg'] = "Графика на резолюциите на екрана";
$lang['configurations_couleurs'] = "Качество на цветовете";
$lang['configurations_couleursimg'] = "Графика на качеството на цветовете";
$lang['configurations_rapport'] = "Нормален/широк екран";
$lang['configurations_large'] = "Широк екран";
$lang['configurations_normal'] = "Нормален";
$lang['configurations_double'] = "Dual Screen";
$lang['configurations_plugins'] = "Плугинз";
$lang['configurations_navigateursbytype'] = "Броузери (по типове)"; 
$lang['configurations_navigateursbytypeimg'] = "Графика на типовете броузери"; 
$lang['configurations_os_interest'] = "Интерес по оперативни системи";
$lang['configurations_navigateurs_interest'] = "Интерес по броузери";
$lang['configurations_resolutions_interest'] = "Интерес по резолюция на екрана";
$lang['configurations_couleurs_interest'] = "Интерес по дълбочина на цветовете";
$lang['configurations_configurations'] = "Конфигурации";

//
// Referers
//
$lang['affluents_titre'] = "Препоръчители";
$lang['affluents_recapimg'] = "График на посетители по препоръчители";
$lang['affluents_directimg'] = "Директно";
$lang['affluents_sitesimg'] = "Уеб сайтове";
$lang['affluents_moteursimg'] = "Търсачки";
$lang['affluents_referrersimg'] = "Препоръчители";
$lang['affluents_moteurs'] = "Търсачки";
$lang['affluents_nbparmoteur'] = "Брой посетители стигнали до сайта през мотори за търсене : %s";
$lang['affluents_aucunmoteur'] = "Няма посетители стигнали до сайта през мотори за търсене.";
$lang['affluents_motscles'] = "Ключови думи";
$lang['affluents_nbmotscles'] = "Брой различни ключови думи : %s";
$lang['affluents_aucunmotscles'] = "Нито една ключова дума не е открита.";
$lang['affluents_sitesinternet'] = "Уеб сайтове";
$lang['affluents_nbautressites'] = "Посещения през други уеб сайтове : %s";
$lang['affluents_nbautressitesdiff'] = "Брой на различни уеб сайтове : %s";
$lang['affluents_aucunautresite'] = "Няма посетители през други уеб сайтове.";
$lang['affluents_entreedirecte'] = "Директно търсене";
$lang['affluents_nbentreedirecte'] = "Брой директни търсачи : %s";
$lang['affluents_nbpartenaires'] = "Посещения идващи през партньори : %s";
$lang['affluents_aucunpartenaire'] = "Няма посещения идващи от партньори.";
$lang['affluents_nbnewsletters'] = "Посещения идващи от newsletters : %s";
$lang['affluents_aucunnewsletter'] = "Няма посещения идващи от newsletters.";
$lang['affluents_details'] = "Детайли"; // In the results of the referers array
$lang['affluents_interetsmoteurs'] = "Интереси по търсачки";
$lang['affluents_interetsmotscles'] = "Интереси по ключови думи";
$lang['affluents_interetssitesinternet'] = "Интереси по уеб сайтове";
$lang['affluents_partenairesimg'] = "Партньори";
$lang['affluents_partenaires'] = "Партньори";
$lang['affluents_interetspartenaires'] = "Интереси по сайтове партньори";
$lang['affluents_newslettersimg'] = "Newsletters";
$lang['affluents_newsletters'] = "Newsletters";
$lang['affluents_interetsnewsletters'] = " Интереси по Newsletters";
$lang['affluents_type'] = "Referer type";
$lang['affluents_interetstype'] = "Интереси по типове достъп";

//
// Summary
//
$lang['purge_titre'] = "Преглед на посещенията и потоците";
$lang['purge_intro'] = "Този период е отстранен от администрацията, запазена е само основната статистика.";
$lang['admin_purge'] = "Почистване и оптимизация на базата данни";
$lang['admin_purgeintro'] = "Този отдел ви позволява да работите с таблиците на phpMyVisites. Можете да видите използването на диска от страна на таблиците, да ги оптимизирате или да отстраните стари записи. Това ще ви помогне да ограничите големината на таблиците във вашата база данни.";
$lang['admin_optimisation'] = "Оптимизиране на [ %s ]..."; // Tables names
$lang['admin_postopt'] = "Общата големина е намалена с %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Почистване на следните периоди: %s";
$lang['admin_purge_fini'] = "Изтриването на таблиците е завършено...";
$lang['admin_bdd_nom'] = "Име";
$lang['admin_bdd_enregistrements'] = "Записи";
$lang['admin_bdd_taille'] = "Големина на таблицата";
$lang['admin_bdd_opt'] = "Оптимизирай";
$lang['admin_bdd_purge'] = "Почистване на таблиците";
$lang['admin_bdd_optall'] = "Оптимизирай всичко";
$lang['admin_purge_j'] = "Отстрани записите по-стари от %s дни";
$lang['admin_purge_s'] = "Отстрани записите по-стари от %s седмици";
$lang['admin_purge_m'] = "Отстрани записите по-стари от %s месеца";
$lang['admin_purge_y'] = " Отстрани записите по-стари от %s години ";
$lang['admin_purge_logs'] = "Отстрани всички logs";
$lang['admin_purge_autres'] = "Общо почистване на таблица '%s'";
$lang['admin_purge_none'] = "Няма позволено действие";
$lang['admin_purge_cal'] = "Пресметни и отстрани (това може да трае няколко минути)";
$lang['admin_alias_title'] = "Аliases and URLs на уеб сайта";
$lang['admin_partner_title'] = "Уеб сайтове партньори";
$lang['admin_newsletter_title'] = "Newsletters на сайта";
$lang['admin_ip_exclude_title'] = "IP адреси, които трябва да се изключат от статистиките";
$lang['admin_name'] = "Име:";
$lang['admin_error_ip'] = "IP трябва да бъде в корентен формат : %s";
$lang['admin_site_name'] = "Име на сайта";
$lang['admin_site_url'] = "Основен URL на сайта";
$lang['admin_db_log'] = "Опитайте да се представите като Супер Потребител на phpMyVisites за да смените параметрите на конфигурацията на достъпа до базата данни.";
$lang['admin_error_critical'] = "Грешка, трябва да се поправи, за да може phpMyVisites да работи коректно.";
$lang['admin_warning'] = "Внимание, phpMyVisites би могла да работи коректно, но някои функции ще бъдат недостъпни.";
$lang['admin_move_group'] = "Премести в група :";
$lang['admin_move_select'] = "Избери група";

//
// Setup
//
$lang['admin_intro'] = "Добре дошли в раздела за конфигурация на phpMyVisites. Можете да промените и параметрирате всички информации във връзка с вашата инсталация. Ако имате някакви проблеми свободно консултирайте %s официалната документация на phpMyVisites %s."; // link to the doc
$lang['admin_configetperso'] = "Общи настройки";
$lang['admin_afficherjavascript'] = "Покажи JavaScript кода за статистика";
$lang['admin_cookieadmin'] = "Не включвай администратора в статистиката";
$lang['admin_ip_ranges'] = "Не включвай реда IP/IP в статистиката";
$lang['admin_sitesenregistres'] = "Листа на записаните уеб сайтове:";
$lang['admin_retour'] = "Назад";
$lang['admin_cookienavigateur'] = "Можете да го исклучите администратора от статистиката. Този метод е базиран на cookies и тази опция ще работи само с конкретния броузер с който работите в момента на конфигурирането. Разбира се, можете да промените тази опция по всяко време.";
$lang['admin_prendreencompteadmin'] = "Включи администратора в статистиката (cookie-то ще бъде изтрито)";
$lang['admin_nepasprendreencompteadmin'] = "Изключи администратора от статистиката (ще бъде създадено cookie)";
$lang['admin_etatcookieoui'] = "Администраторът е включен в статистиката за този уеб сайт (Това е основната настройка, третирани сте като обикновен посетител)";
$lang['admin_etatcookienon'] = "Не сте включени в статистиката за този уеб сайт (Вашите посещения няма да бъдат регистрирани)";
$lang['admin_deleteconfirm'] = "Моля потвърдете че искате да изтриете %s?";
$lang['admin_sitedeletemessage'] = "Моля <u>бъдете много предпазлив</u>: всички данни, свързани с този сайт, ще бъдат унищожени<br>и няма никакъв начин да бъде възстановена тази загуба на данни.";
$lang['admin_confirmyes'] = "Да, искам да ги унищожа";
$lang['admin_confirmno'] = "Не, не искам да ги унищожа";
$lang['admin_nonewsletter'] = "Няма намерен newsletter за този сайт!";
$lang['admin_nopartner'] = "Няма намерен сайт партньор на този сайт!";
$lang['admin_get_question'] = "Запис на променливата GET ? (в URL)";
$lang['admin_get_a1'] = "Запис на всички променливи";
$lang['admin_get_a2'] = "Не записвай променливите";
$lang['admin_get_a3'] = "Запиши само споменатите променливи";
$lang['admin_get_a4'] = "Запиши всички освен споменатите променливи";
$lang['admin_get_list'] = "Имена на променливите (разделени с<b>;</b>) <br/>Пример : %s";
$lang['admin_required'] = "%s изисква се.";
$lang['admin_title_required'] = "Изисква";
$lang['admin_write_dir'] = "Директория с право на запис";
$lang['admin_chmod_howto'] = "Тази директория трябва да има осигурено право на запис от сървъра. За това трябва да направите chmod 777, с вашия FTP софтуер (десен клик върху директорията -> Permissions (or chmod))";
$lang['admin_optional'] = "По желание";
$lang['admin_memory_limit'] = "Ограничена памет";
$lang['admin_allowed'] = "позволено";
$lang['admin_webserver'] = "Уеб сървър";
$lang['admin_server_os'] = "Сървър OS";
$lang['admin_server_time'] = "Server time";
$lang['admin_legend'] = "Легенда :";
$lang['admin_error_url'] = "URL трябва да има коректен формат : %s (без slash в края)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URLs aliases";
$lang['admin_logo_question'] = "Покажи логото?";
$lang['admin_type_again'] = "(напиши отново)";
$lang['admin_admin_mail'] = "Еmail на Супер Администратора";
$lang['admin_admin'] = "Супер Администратор";
$lang['admin_phpmv_path'] = "Пълен път за достъп до вашата phpMyVisites апликация";
$lang['admin_valid_email'] = "Email трябва да бъде валиден email";
$lang['admin_valid_pass'] = "Паролата трябва да бъде по-сложна (6 знака минимум, но трябва да има и цифри)";
$lang['admin_match_pass'] = "Паролите не си съответстват";
$lang['admin_no_user_group'] = "Няма потребител в тази група за този сайт";
$lang['admin_recorded_nl'] = "Записани newsletters:";
$lang['admin_recorded_partners'] = "Записани партньори:";
$lang['admin_recorded_users'] = "Записани потребители:";
$lang['admin_select_site_title'] = "Моля, изберете сайт";
$lang['admin_select_user_title'] = "Моля, изберете потребител";
$lang['admin_no_user_registered'] = "Няма записан потребител!";
$lang['admin_configuration'] = "Настройка";
$lang['admin_general_conf'] = "Обща настройка";
$lang['admin_group_title'] = "Управление на групите (permissions)";
$lang['admin_user_title'] = "Управление на потребителите";
$lang['admin_user_add'] = "Добави потребител";
$lang['admin_user_mod'] = "Промени потребител";
$lang['admin_user_del'] = "Изтрий потребител";
$lang['admin_server_info'] = "Информация за сървъра";
$lang['admin_send_mail'] = "Изпрати статистиките с email";
$lang['admin_rss_feed'] = "Статистиките в един RSS feed";
$lang['admin_site_admin'] = "Администрация на сайта";
$lang['admin_site_add'] = "Добави сайт";
$lang['admin_site_mod'] = "Промени сайт";
$lang['admin_site_del'] = "Изтрий сайт";
$lang['admin_nl_add'] = "Добави newsletter";
$lang['admin_nl_mod'] = "Промени newsletter";
$lang['admin_nl_del'] = " Изтрий newsletter";
$lang['admin_partner_add'] = "Добави партньор";
$lang['admin_partner_mod'] = " Промени име и URL на партньор ";
$lang['admin_partner_del'] = " Изтрий партньор ";
$lang['admin_url_alias'] = "Управление на URL alias";
$lang['admin_group_admin_n'] = "Виж статистиките + Права на Администратора";
$lang['admin_group_admin_d'] = "Потребителите могат да видят статистиките И да имат достъп до информацията за сайта (име, добави cookie, да изключват IP редове, да управляват URLs alias/партньори/newsletters, и т.н.)";
$lang['admin_group_view_n'] = "Виж статистиките";
$lang['admin_group_view_d'] = "Потребителите могат само да гледат статистиките. Нямат права на Администратори.";
$lang['admin_group_noperm_n'] = "Няма никакви права";
$lang['admin_group_noperm_d'] = "Потребителите от тази група нямат право да гредат или променят статистиките на този сайт.";
$lang['admin_group_stitle'] = "Вие можете да променяте групите потребители, избирайки потребители ипосле избирайки в разгъващата се листа групата в която искате да ги преместите.";
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
$lang['install_loginmysql'] = "Логин на базата данни";
$lang['install_mdpmysql'] = "Парола";
$lang['install_serveurmysql'] = "Сървър на базата данни";
$lang['install_basemysql'] = "Име на базата данни";
$lang['install_prefixetable'] = "Префикс на таблицата";
$lang['install_utilisateursavances'] = "Напреднали потребители (факултативно)";
$lang['install_oui'] = "Да";
$lang['install_non'] = "Не";
$lang['install_ok'] = "ОК";
$lang['install_probleme'] = "Внимание: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Администратор:";
$lang['install_mdpadmin'] = "Парола:";
$lang['install_chemincomplet'] = "Пълният път до апликацията phpMyVisites (например, http://www.mysite.com/rep1/rep3/phpmyvisites/). Пътят може да завършва със символа <strong>/</strong>.";
$lang['install_afficherlogo'] = "Покажете логото на вашите страници?<br />%s"; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Покажи статистическите графики.";
$lang['install_valider'] = "Изпрати"; //  during installation and for login
$lang['install_popup_logo'] = "Моля, изберете лого";
$lang['install_logodispo'] = "Погледнете достапните различни лого";
$lang['install_welcome'] = "Добре дошли!";
$lang['install_system_requirements'] = "Изисквания към системата";
$lang['install_database_setup'] = "Настройка на базата данни";
$lang['install_create_tables'] = "Създаване на таблиците";
$lang['install_general_setup'] = "Обща настройка";
$lang['install_create_config_file'] = "Създай Config File";
$lang['install_first_website_setup'] = "Добави Първи уеб сайт";
$lang['install_display_javascript_code'] = "Покажи кода Javascript";
$lang['install_finish'] = "Край!";
$lang['install_txt2'] = "След приключване на инсталацията ще бъде изпратено съобщение до официялния сайт за да ни помогне да следим броя на хората които използват phpMyVisites. Благодарим за вашето разбиране.";
$lang['install_database_setup_txt'] = "Моля, въведете информацията за вашата база данни.";
$lang['install_general_config_text'] = "phpMyVisites може да има само един единствен Супер Администратор. Моля, изберете потребителско име и парола за този account. Вие можете да въведете останалите потребители впоследствие.";
$lang['install_config_file'] = " Информацията за Администратора е въведена успешно.";
$lang['install_js_code_text'] = "<p>За да отчитате посетителите, вие трябва да вкарате кода javascript във всички ваши страници. </p><p> Не е задължително вашите страници да са създадени в PHP, <strong>phpMyVisites може да работи с всякакъв вид страници (HTML, ASP, Perl или друг език).</strong> </p><p> Ето кодът който трябва да въведете във вашите страници: (copy и paste във всички ваши страници) </p>";
$lang['install_intro'] = "Добре дошли във фазата на инсталиране на phpMyVisites."; 
$lang['install_intro2'] = "Инсталацията е разделена на %s лесни етапи и отнема около 10 минути.";
$lang['install_next_step'] = "Отидете на следващия етап";
$lang['install_status'] = "Напредване на инсталацията";
$lang['install_done'] = "Инсталацията е %s%% завършена"; // Install 25% complete
$lang['install_site_success'] = "Уеб сайтът е създаден успешно!";
$lang['install_site_info'] = "Моля, въведете всички данни относно Интернет сайта.";
$lang['install_go_phpmv'] = "Отиди в phpMyVisites!";
$lang['install_congratulation'] = "Поздравления! Вашата инсталация на phpMyVisites е пълна.";
$lang['install_end_text'] = "Проверете дали сте въвели кода във всички ваши страници и после ви остава само да чакате първите си посетители!";
$lang['install_db_ok'] = "Конекция със сървъра на базата данни ОК!";
$lang['install_table_exist'] = "Таблиците на phpMyVisites съществуват вече в базата данни.";
$lang['install_table_choice'] = "Вие имате избор да използвате отново съществуващите таблици на вашата база данни или да започнете с една инсталация на чисто, като унищожите досегашните таблици.";
$lang['install_table_erase'] = "Изтрий всички таблици (бъди предпазлив!)";
$lang['install_table_reuse'] = "Използвай отново съществуващите таблици";
$lang['install_table_success'] = "Таблиците са създадени успешно!";
$lang['install_send_mail'] = "Искате ли да получавате ежедневно с Еmail за всеки записан сайт отчета на статистиките?";

//
// Update Step
//
$lang['update_title'] = "Актуализация на phpMyVisites";
$lang['update_subtitle'] = "Установихме, че сте актуализирали phpMyVisites.";
$lang['update_versions'] = "Вашата предишна версия беше %s вие искате да преминете към %s.";
$lang['update_db_updated'] = "Вашата база данни беше актуализирана успешно!";
$lang['update_continue'] = "Продължете в phpMyVisites";
$lang['update_jschange'] = "Внимание! <br /> Javascript кодът на phpMyVisites е изменен. ТРЯБВА да актуализирате вашите страници и да копирате новия phpMyVisites Javascript код на ВСИЧКИТЕ ваши конфигурирани страници. <br /> Промените на javascript кода са много редки и ние се извиняваме за проблемите, предизвикани от тази промяна.";

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
$lang['moistab']['01'] = "Януари";
$lang['moistab']['02'] = "Февруари";
$lang['moistab']['03'] = "Март";
$lang['moistab']['04'] = "Април";
$lang['moistab']['05'] = "Май";
$lang['moistab']['06'] = "Юни";
$lang['moistab']['07'] = "Юли";
$lang['moistab']['08'] = "Август";
$lang['moistab']['09'] = "Септември";
$lang['moistab']['10'] = "Октомври";
$lang['moistab']['11'] = "Ноември";
$lang['moistab']['12'] = "Декември";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Яну";
$lang['moistab_graph']['02'] = "Фев";
$lang['moistab_graph']['03'] = "Мар";
$lang['moistab_graph']['04'] = "Апр";
$lang['moistab_graph']['05'] = "Май";
$lang['moistab_graph']['06'] = "Юни";
$lang['moistab_graph']['07'] = "Юли";
$lang['moistab_graph']['08'] = "Авг";
$lang['moistab_graph']['09'] = "Сеп";
$lang['moistab_graph']['10'] = "Окт";
$lang['moistab_graph']['11'] = "Ное";
$lang['moistab_graph']['12'] = "Дек";

// Day of the week
$lang['jsemaine']['Mon'] = "Понеделник";
$lang['jsemaine']['Tue'] = "Вторник";
$lang['jsemaine']['Wed'] = "Сряда";
$lang['jsemaine']['Thu'] = "Четвъртък";
$lang['jsemaine']['Fri'] = "Петък";
$lang['jsemaine']['Sat'] = "Събота";
$lang['jsemaine']['Sun'] = "Неделя";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Пон";
$lang['jsemaine_graph']['Tue'] = "Вто";
$lang['jsemaine_graph']['Wed'] = "Сря";
$lang['jsemaine_graph']['Thu'] = "Чет";
$lang['jsemaine_graph']['Fri'] = "Пет";
$lang['jsemaine_graph']['Sat'] = "Съб";
$lang['jsemaine_graph']['Sun'] = "Нед";

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
$lang['eur'] = "Европа";
$lang['afr'] = "Африка";
$lang['asi'] = "Азия";
$lang['ams'] = "Южна и Централна Америка";
$lang['amn'] = "Северна Америка";
$lang['oce'] = "Океания";

// Oceans
$lang['oc_pac'] = "Тихи Океан";
$lang['oc_atl'] = "Атлантически Океан";
$lang['oc_ind'] = "Индийски Океан";

// Countries
$lang['domaines'] = array(
    "xx" => "Непозната",
    "ac" => "Асенсионови Острови",
    "ad" => "Андора",
    "ae" => "ОАЕ",
    "af" => "Афганистан",
    "ag" => "Антигуа и Барбуда",
    "ai" => "Ангвила",
    "al" => "Албания",
    "am" => "Армения",
    "an" => "Антилски О-ви",
    "ao" => "Ангола",
    "aq" => "Антарктик",
    "ar" => "Аржентина",
    "as" => "Американска Самоа",
    "at" => "Австрия",
    "au" => "Австралия",
    "aw" => "Аруба",
    "az" => "Азербайджан",
    "ba" => "Босна и Херцеговина",
    "bb" => "Барбадос",
    "bd" => "Бангладеш",
    "be" => "Белгия",
    "bf" => "Буркина Фасо",
    "bg" => "България",
    "bh" => "Бахрейн",
    "bi" => "Бурунди",
    "bj" => "Бенин",
    "bm" => "Бермудски О-ви",
    "bn" => "Бруней",
    "bo" => "Боливия",
    "br" => "Бразилия",
    "bs" => "Бахамски О-ви",
    "bt" => "Бутан",
    "bv" => "О-в Буве",
    "bw" => "Ботсуана",
    "by" => "Белорусия",
    "bz" => "Белиз",
    "ca" => "Канада",
    "cc" => "Кокосови (Килинг) О-ви",
    "cd" => "Конго, Демократична Република",
    "cf" => "Централно Африканска Република",
    "cg" => "Конго",
    "ch" => "Швейцария",
    "ci" => "Бряг на Слоновата Кост",
    "ck" => "Кукови О-ви",
    "cl" => "Чили",
    "cm" => "Камерун",
    "cn" => "Кина",
    "co" => "Колумбия",
    "cr" => "Коста Рика",
    "cs" => "Сърбия - Черна Гора",
    "cu" => "Куба",
    "cv" => "Кап Вер",
    "cx" => "Рождество О-в",
    "cy" => "Кипър",
    "cz" => "Чешка Република",
    "de" => "Германия",
    "dj" => "Джибути",
    "dk" => "Данска",
    "dm" => "Доминика",
    "do" => "Доминиканска Република",
    "dz" => "Алжир",
    "ec" => "Еквадор",
    "ee" => "Естония",
    "eg" => "Египет",
    "eh" => "Западна Сахара",
    "er" => "Еритрея",
    "es" => "Испания",
    "et" => "Етиопия",
    "fi" => "Финландия",
    "fj" => "Фиджи",
    "fk" => "Фолкландски О-ви",
    "fm" => "Микронезия",
    "fo" => "Фарое О-ви",
    "fr" => "Франция",
    "ga" => "Габон",
    "gd" => "Гренада",
    "ge" => "Грузия",
    "gf" => "Франенска Гвияна",
    "gg" => "Гернси",
    "gh" => "Гана",
    "gi" => "Гибралтар",
    "gl" => "Гренландия",
    "gm" => "Гамбия",
    "gn" => "Гвинея",
    "gp" => "Гвадалупа",
    "gq" => "Екваториална Гвинея",
    "gr" => "Гърция",
    "gs" => "Южна Джорджия и Южен Сендвич О-ви",
    "gt" => "Гватемала",
    "gu" => "Гуам",
    "gw" => "Гвинея-Бисао",
    "gy" => "Гвияна",
    "hk" => "Хонг Конг",
    "hm" => "О-ви на Херд и Мекдоналд",
    "hn" => "Хондурас",
    "hr" => "Хърватска",
    "ht" => "Хаити",
    "hu" => "Унгария",
    "id" => "Индонезия",
    "ie" => "Ирландия",
    "il" => "Израел",
    "im" => "О-в Мен",
    "in" => "Индия",
    "io" => "Британска Територия в Индиския Океан",
    "iq" => "Ирак",
    "ir" => "Иран",
    "is" => "Исландия",
    "it" => "Италия",
    "je" => "Джерзи",
    "jm" => "Ямайка",
    "jo" => "Йордания",
    "jp" => "Япония",
    "ke" => "Кения",
    "kg" => "Киргизстан",
    "kh" => "Камбоджа",
    "ki" => "Кирибати",
    "km" => "Комори",
    "kn" => "Св. Кийтс и Невис",
    "kp" => "Корея, Демократична Народна Република",
    "kr" => "Корея",
    "kw" => "Кувейт",
    "ky" => "Каймански О-ви",
    "kz" => "Казахстан",
    "la" => "Лаос",
    "lb" => "Ливан",
    "lc" => "Санта Лучия",
    "li" => "Лихтенштайн",
    "lk" => "Шри Ланка",
    "lr" => "Либерия",
    "ls" => "Лесото",
    "lt" => "Литва",
    "lu" => "Люксембург",
    "lv" => "Латвия",
    "ly" => "Либия",
    "ma" => "Мароко",
    "mc" => "Монако",
    "md" => "Република Молдавия",
    "mg" => "Мадагаскар",
    "mh" => "Маршалски О-ви",
    "mk" => "Македония",
    "ml" => "Мали",
    "mm" => "Мианмар",
    "mn" => "Монголия",
    "mo" => "Макао",
    "mp" => "Северни Мариянски О-ви",
    "mq" => "Мартиника",
    "mr" => "Мавритания",
    "ms" => "Монсерат",
    "mt" => "Малта",
    "mu" => "Мавриций",
    "mv" => "Малдиви",
    "mw" => "Малави",
    "mx" => "Мексико",
    "my" => "Малайзия",
    "mz" => "Мозамбик",
    "na" => "Намибия",
    "nc" => "Нова Каледония",
    "ne" => "Нигер",
    "nf" => "Норфолкски О-ви",
    "ng" => "Нигерия",
    "ni" => "Никарагуа",
    "nl" => "Холандия",
    "no" => "Норвегия",
    "np" => "Непал",
    "nr" => "Науру",
    "nu" => "Ние",
    "nz" => "Нова Зеландия",
    "om" => "Оман",
    "pa" => "Панама",
    "pe" => "Перу",
    "pf" => "Полинезия",
    "pg" => "Папуа Нова Гвинея",
    "ph" => "Филипини",
    "pk" => "Пакистан",
    "pl" => "Полша",
    "pm" => "Сен-Пиер и Микелон",
    "pn" => "Питкерн",
    "pr" => "Порто Рико",
	"ps" => "Palestinian Territory",
    "pt" => "Португалия",
    "pw" => "Пало",
    "py" => "Парагвай",
    "qa" => "Катар",
    "re" => "О-ви Реюнион",
    "ro" => "Румъния",
    "ru" => "Руска Федерация",
    "rs" => "Русия",
    "rw" => "Руанда",
    "sa" => "Саудитска Арабия",
    "sb" => "Соломонови О-ви",
    "sc" => "Сейшели",
    "sd" => "Судан",
    "se" => "Швеция",
    "sg" => "Сингапур",
    "sh" => "Св. Елена",
    "si" => "Словения",
    "sj" => "Сволбар/Ян Майен О-ви",
    "sk" => "Словакия",
    "sl" => "Сиера Леоне",
    "sm" => "Сан Марино",
    "sn" => "Сенегал",
    "so" => "Сомалия",
    "sr" => "Суринам",
    "st" => "Сан Томе и Принсипе",
    "su" => "СССР (бивш)",
    "sv" => "Ел Салвадор",
    "sy" => "Сирия",
    "sz" => "Swaziland",
    "tc" => "Турски и Кайкоски О-ви",
    "td" => "Чад",
    "tf" => "Южни Френски Територии",
    "tg" => "Того",
    "th" => "Тайланд",
    "tj" => "Таджикистан",
    "tk" => "Токело",
    "tm" => "Туркменистан",
    "tn" => "Тунис",
    "to" => "Тонго",
    "tp" => "Източен Тимор",
    "tr" => "Турция",
    "tt" => "Тринидад и Тобаго",
    "tv" => "Тувалу",
    "tw" => "Тайван",
    "tz" => "Танзания",
    "ua" => "Украйна",
    "ug" => "Уганда",
    "uk" => "Обединено Кралство",
    "gb" => "Великобритания",
    "um" => "О-ви на САД",
    "us" => "САД",
    "uy" => "Уругвай",
    "uz" => "Узбекистан",
    "va" => "Ватикана",
    "vc" => "Св. Винсент",
    "ve" => "Венецуела",
    "vg" => "Девствени О-ви, Великобритания",
    "vi" => "Девствени О-ви, САД",
    "vn" => "Виетнам",
    "vu" => "Вануату",
    "wf" => "Волис и Футуна",
    "ws" => "Самоа",
    "ye" => "Йемен",
    "yt" => "Майота",
    "yu" => "Югославия",
    "za" => "Южна Африка",
    "zm" => "Замбия",
    "zr" => "Заир",
    "zw" => "Зимбабве",
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
    "tv" => "Тувалу",
    "ws" => "Самоа",
);
?>