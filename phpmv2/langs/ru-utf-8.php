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
$lang['auteur_nom'] = "Иван Коваленко & Локтионов Алексей"; // Translator's name
$lang['auteur_email'] = "tronic@php.net & error at pochta ru"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "ru"; // iso language code
$lang['lang_libelle_en'] = "Russian"; // english language name
$lang['lang_libelle_fr'] = "Russe"; // french language name
$lang['unites_bytes'] = array('б', 'Кб', 'Мб', 'Гб', 'Тб', 'Пб', 'Эб', 'Зб', 'Йб');
$lang['separateur_milliers'] = ' '; // three thousands spells 300,000 in english
$lang['separateur_decimaux'] = ','; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | приложение с открытым исходным кодом для ведения статистики и анализа траффика на веб-сайтах"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, скрипт, приложение, программа, статистика, реферралы, статистика, бесплатный, open source, gpl, визиты, посетители, mysql, просмотр страниц, страницы, просмотры, количество посещений, графики, браузеры, ОС, операционная система, разрешения, день, неделя, месяц, записи, страна, хост, сервис-провайдеры, поисковая машина, ключевые слова, ссылки, графики, страницы входа, страницы выхода, круговые диаграммы"; // Header keywords
$lang['head_description'] = "phpMyVisites | Приложение с открытым исходным кодом для ведения статистики по веб-сайтам, использующее PHP/MySQL и распространяемое на условиях лицензии GNU GPL."; // Header description
$lang['logo_description'] = "phpMyVisites : приложение с открытым исходным кодом для ведения статистики по веб-сайтам, использующее PHP/MySQL и распространяемое на условиях лицензии GPL."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Визиты";
$lang['menu_pagesvues'] = "Страницы";
$lang['menu_suivi'] = "Пути";
$lang['menu_provenance'] = "Локации";
$lang['menu_configurations'] = "Инфо визитеров";
$lang['menu_affluents'] = "Реферралы";
$lang['menu_listesites'] = "Список сайтов";
$lang['menu_bilansites'] = "Всего";
$lang['menu_jour'] = "День";
$lang['menu_semaine'] = "Неделя";
$lang['menu_mois'] = "Месяц";
$lang['menu_annee'] = "Год";
$lang['menu_periode'] = "Анализируемый период: %s"; // Text formated (e.g.: Studied period: Thuesday, september the 11th)
$lang['liens_siteofficiel'] = "Официальный веб-сайт";
$lang['liens_admin'] = "Администрирование";
$lang['liens_contacts'] = "Контакты";

//
// Divers
//
$lang['generique_nombre'] = "Кол-во";
$lang['generique_tauxsortie'] = "Процент ухода";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Страница сгенерирована за %s секунд(ы)"; // Time in seconds
$lang['generique_divers'] = "Другие"; // (for the graphs)
$lang['generique_inconnu'] = "Неизв."; // (for the graphs)
$lang['generique_vous'] = "... Вы ?";
$lang['generique_traducteur'] = "Переводчик";
$lang['generique_langue'] = "Язык";
$lang['generique_autrelangure'] = "Другие?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "Нет посетителей за этот период."; 
$lang['generique_aucune_visite_bdd'] = "<b>Внимание ! </b> У вас нет посетителей в БД для этого сайта. Пожалуйста убедитесь, что вы вставили в ваши страницы код счётчика с правильным URL к phpMyVisites <u>В</u> Javascript коде. Прочтите документацию.";
$lang['generique_aucune_site_bdd'] = "Ни одного сайта не зарегистрировано в БД ! Попробуйте зайти как суперпользователь phpMyVisites создать новый сайт.";
$lang['generique_retourhaut'] = "Наверх";
$lang['generique_tempsvisite'] = "%sмин %sсек"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%s"; // 4h means 4 hours
$lang['generique_siteno'] = "Сайт %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Новостная лента %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "Партнёр %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "Главное";
$lang['generique_user'] = "Пользователь %s"; // User "Admin"
$lang['generique_previous'] = "Назад";
$lang['generique_next'] = "Далее";
$lang['generique_lowpop'] = "Исключить низкие показатели из статистики";
$lang['generique_allpop'] = "Включить все показатели в статистику";
$lang['generique_to'] = "из"; // 4 'to' 8
$lang['generique_total_on'] = "всего"; // 4 to 8 'on' 10
$lang['generique_total'] = "Всего";
$lang['generique_information'] = "Информация";
$lang['generique_done'] = "Изменения записаны";
$lang['generique_other'] = "Разное";
$lang['generique_description'] = "Описание:";
$lang['generique_name'] = "Имя:";
$lang['generique_variables'] = "Переменные";
$lang['generique_logout'] = "Выйти";
$lang['generique_login'] = "Войти";
$lang['generique_hits'] = "Хиты";
$lang['generique_errors'] = "Ошибки";
$lang['generique_site'] = "Сайт";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "пароль : "; // lowercase
$lang['login_login'] = "логин : "; // lowercase
$lang['login_error'] = "Неверный логин или пароль.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "Вы хотите попасть в закрытую часть %sphpMyVisites%s.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Контакты";
$lang['contacts_langue'] = "Переводы";
$lang['contacts_merci'] = "Благодарности";
$lang['contacts_auteur'] = "Автором программы, документации и проекта phpMyVisites является <strong>Матье Обри (Matthieu Aubry)</strong>.";
$lang['contacts_questions'] = "Чтобы <strong>задать вопрос технического характера, сообщить об ошибке, внести предложения</strong>, посетите форум на официальном веб-сайте %s. Информацию другого рода вы можете получить, отправив запрос с помощью специальной формы на официальном веб-сайте"; // adresse du site
$lang['contacts_trad1'] = "Вы хотите перевести phpMyVisites на ваш язык? Пожалуйста, потому что <strong>вы нужны phpMyVisites!</strong>";
$lang['contacts_trad2'] = "Локализация phpMyVisites может занять некоторое время (возможно, несколько часов) и требует хорошего знания языков; помните, что <strong>любая проделанная вами работа будет служить многим пользователям</strong>. Если вы заинтересованы в локализации phpMyVisites, все необходимые сведения вы сможете почерпнуть из %s официальной документации к phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "Обратитесь к %s официальной документации к phpMyVisites %s, которая содержит сведения по установке, настройке и функционированию phpMyVisites. Документация находится в полученном вами дистрибутиве phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Thank you <strong>%s</strong>, co-developers of phpMyVisites, for their high quality work on the project.";
$lang['contacts_merci3'] = "Посетите благодарственную страницу на официальном сайте, чтобы ознакомиться с полным списком принимавших участие в разработке или сопровождении phpMyVisites.";
$lang['contacts_merci2'] = "Большое спасибо всем принимавшим участие в локализации phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Сайт %s в %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Перейти к детализированной статистике";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Сведения о посетителях"; 
$lang['visites_statistiques'] = "Статистика";
$lang['visites_periodesel'] = "За выбранный период";
$lang['visites_visites'] = "Визитов";
$lang['visites_uniques'] = "Уникальных посетителей";
$lang['visites_pagesvues'] = "Просмотров страниц";
$lang['visites_pagesvisiteurs'] = "Просмотров на посетителя"; 
$lang['visites_pagesvisites'] = "Страниц за посещение"; 
$lang['visites_pagesvisitessign'] = "Страниц за существенное посещение"; 
$lang['visites_tempsmoyen'] = "Средняя продолжительность визитов";
$lang['visites_tempsmoyenpv'] = "Средняя продолжительность просмотров";
$lang['visites_tauxvisite'] = "Визитов на страницу"; 
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Отчёты за период";
$lang['visites_nbvisites'] = "Визиты";
$lang['visites_aucunevivisite'] = "Нет данных"; // in the table, must be short
$lang['visites_recap'] = "Отчёт";
$lang['visites_unepage'] = "1 стр."; // (graph)
$lang['visites_pages'] = "%s стр."; // 1-2 pages (graph)
$lang['visites_min'] = "%s мин"; // 10-15 min (graph)
$lang['visites_sec'] = "%s сек"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Отчётный график";
$lang['visites_grapghrecaplongterm'] = "Суммарный график продолжительности посещений";
$lang['visites_graphtempsvisites'] = "График продолжительности посещений";
$lang['visites_graphtempsvisitesimg'] = "Продолжительность посещений";
$lang['visites_graphheureserveur'] = "График посещений сервера по времени"; 
$lang['visites_graphheureserveurimg'] = "Посещения сервера по времени"; 
$lang['visites_graphheurevisiteur'] = "График визитов посетителей по времени";
$lang['visites_graphheurelocalimg'] = "Визиты посетителей по времени"; 
$lang['visites_longterm_statd'] = "Долгосрочный анализ (Дней в периоде)";
$lang['visites_longterm_statm'] = "Долгосрочный анализ (Месяцев в периоде)";

//
// Sites Summary
//
$lang['summary_title'] = "Всего сайтов";
$lang['summary_stitle'] = "Всего";

//
// Frequency Part
//
$lang['frequence_titre'] = "Вернувшиеся посетители";
$lang['frequence_nouveauxconnusgraph'] = "График сравнения новых и повторных посещений";
$lang['frequence_nouveauxconnus'] = "Новые посещения относительно повторных";
$lang['frequence_titremenu'] = "Частота";
$lang['frequence_visitesconnues'] = "Повторные посещения";
$lang['frequence_nouvellesvisites'] = "Новые посещения";
$lang['frequence_visiteursconnus'] = "Повторные посетители";
$lang['frequence_nouveauxvisiteurs'] = "Новые посетители";
$lang['frequence_returningrate'] = "Процент повторных";
$lang['pagesvues_vispervisgraph'] = "График количества посещений на посетителя";
$lang['frequence_vispervis'] = "Количество посещений на посетителя";
$lang['frequence_vis'] = "посещение";
$lang['frequence_visit'] = "1 визит"; // (graph)
$lang['frequence_visits'] = "%s визитов"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Сведения о просмотрах страниц";
$lang['pagesvues_joursel'] = "Выбранный день";
$lang['pagesvues_jmoins7'] = "День - 7";
$lang['pagesvues_jmoins14'] = "День - 14";
$lang['pagesvues_moyenne'] = "(сред.)";
$lang['pagesvues_pagesvues'] = "Просмотров страниц";
$lang['pagesvues_pagesvudiff'] = "Уникальных просмотров";
$lang['pagesvues_recordpages'] = "Макс.кол-во просмотров на посетителя";
$lang['pagesvues_tabdetails'] = "Страницы (%s - %s)"; // (de 1   21)
$lang['pagesvues_graphsnbpages'] = "График визитов по кол-ву просмотренных страниц";
$lang['pagesvues_graphnbvisitespageimg'] = "Визиты по кол-ву просмотренных страниц";
$lang['pagesvues_graphheureserveur'] = "График визитов по времени сервера";
$lang['pagesvues_graphheureserveurimg'] = "Визиты по времени сервера";
$lang['pagesvues_graphheurevisiteur'] = "График визитов по времени посетителей";
$lang['pagesvues_graphpageslocalimg'] = "Визиты по времени посетителей";
$lang['pagesvues_tempsparpage'] = "Время на страницу";
$lang['pagesvues_total_time'] = "Суммарное время";
$lang['pagesvues_avg_time'] = "Среднее время";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Пути посетителей";
$lang['suivi_pageentree'] = "Страницы входа";
$lang['suivi_pagesortie'] = "Страницы выхода";
$lang['suivi_tauxsortie'] = "Процент ухода";
$lang['suivi_pageentreehits'] = "Входные хиты";
$lang['suivi_pagesortiehits'] = "Выходные хиты";
$lang['suivi_singlepage'] = "Посещения одиночных страниц";

//
// Origin
//
$lang['provenance_titre'] = "Локации посетителей";
$lang['provenance_recappays'] = "Отчёт по странам";
$lang['provenance_pays'] = "Страны";
$lang['provenance_paysimg'] = "Диаграмма стран посетителей";
$lang['provenance_fai'] = "Интернет-провайдеры";
$lang['provenance_nbpays'] = "Количество разных стран : %s";
$lang['provenance_provider'] = "Провайдеры"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "Континент";
$lang['provenance_mappemonde'] = "Карта мира";
$lang['provenance_interetspays'] = "По странам";

//
// Setup
//
$lang['configurations_titre'] = "Настройки посетителей";
$lang['configurations_os'] = "Операционные системы";
$lang['configurations_osimg'] = "График по операционным системам";
$lang['configurations_navigateurs'] = "Браузеры";
$lang['configurations_navigateursimg'] = "График по браузерам";
$lang['configurations_resolutions'] = "Разрешение экрана";
$lang['configurations_resolutionsimg'] = "График по разрешению экрана";
$lang['configurations_couleurs'] = "Глубина цвета";
$lang['configurations_couleursimg'] = "График по глубине цвета";
$lang['configurations_rapport'] = "Нормальный/широкоэкранный";
$lang['configurations_large'] = "Широкоэкранный";
$lang['configurations_normal'] = "Нормальный";
$lang['configurations_double'] = "Двойной экран";
$lang['configurations_plugins'] = "Плагины"; // TODO : translate
$lang['configurations_navigateursbytype'] = "Браузеры (по типу)"; // TODO : translate
$lang['configurations_navigateursbytypeimg'] = "График версий браузеров"; // TODO : translate
$lang['configurations_os_interest'] = "По операционным системам";
$lang['configurations_navigateurs_interest'] = "По браузерам";
$lang['configurations_resolutions_interest'] = "По разрешению экрана";
$lang['configurations_couleurs_interest'] = "По глубине цветов";
$lang['configurations_configurations'] = "Суммарные наибольшие показатели";

//
// Referers
//
$lang['affluents_titre'] = "Реферралы";
$lang['affluents_recapimg'] = "График визитов по реферралам";
$lang['affluents_directimg'] = "Прямые";
$lang['affluents_sitesimg'] = "С веб-сайтов";
$lang['affluents_moteursimg'] = "С поиск.машин";
$lang['affluents_referrersimg'] = "Реферралы";
$lang['affluents_moteurs'] = "Поисковые машины";
$lang['affluents_nbparmoteur'] = "Заходов с поисковых машин : %s";
$lang['affluents_aucunmoteur'] = "Заходов с поисковых машин не было.";
$lang['affluents_motscles'] = "Ключевые слова";
$lang['affluents_nbmotscles'] = "Уникальные ключевые слова : %s";
$lang['affluents_aucunmotscles'] = "Ключевые слова отсутствуют.";
$lang['affluents_sitesinternet'] = "Веб-сайты";
$lang['affluents_nbautressites'] = "Заходов с других веб-сайтов : %s";
$lang['affluents_nbautressitesdiff'] = "Количество веб-сайтов : %s";
$lang['affluents_aucunautresite'] = "Заходов с веб-сайтов не было.";
$lang['affluents_entreedirecte'] = "Прямые заходы";
$lang['affluents_nbentreedirecte'] = "Прямых заходов : %s";
$lang['affluents_nbpartenaires'] = "Посетители от партнеров : %s";
$lang['affluents_aucunpartenaire'] = "Нет посещений с сайтов партнеров.";
$lang['affluents_nbnewsletters'] = "Посещения с новостных лент : %s";
$lang['affluents_aucunnewsletter'] = "Нет посещений с новостных лент.";
$lang['affluents_details'] = "Подробно"; // In the results of the referers array
$lang['affluents_interetsmoteurs'] = "Поисковые системы";
$lang['affluents_interetsmotscles'] = "Ключевые слова";
$lang['affluents_interetssitesinternet'] = "Веб-сайты";
$lang['affluents_partenairesimg'] = "Партнеры";
$lang['affluents_partenaires'] = "Партнеры";
$lang['affluents_interetspartenaires'] = "Партнеры";
$lang['affluents_newslettersimg'] = "Новостные ленты";
$lang['affluents_newsletters'] = "Новостные ленты";
$lang['affluents_interetsnewsletters'] = "Новостные ленты";
$lang['affluents_type'] = "Тип реферрала";
$lang['affluents_interetstype'] = "Тип доступа";

//
// Summary
//
$lang['purge_titre'] = "Отчёт по визитам и реферралам";
$lang['purge_intro'] = "Все данные, кроме существенных, за этот период были удалены.";
$lang['admin_purge'] = "Обслуживание базы данных";
$lang['admin_purgeintro'] = "Этот раздел предназначен для управления таблицами, используемыми в phpMyVisites. Вы можете контролировать объём дискового пространства, используемого таблицами, оптимизировать их или удалить старые данные, что позволит вам ограничить размер таблиц в вашей БД.";
$lang['admin_optimisation'] = "Оптимизируется [ %s ]..."; // Tables names
$lang['admin_postopt'] = "Общий объем уменьшился на %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Удалить следующие периоды: %s";
$lang['admin_purge_fini'] = "Удаление таблиц завершено...";
$lang['admin_bdd_nom'] = "Имя";
$lang['admin_bdd_enregistrements'] = "Записей";
$lang['admin_bdd_taille'] = "Размер таблицы";
$lang['admin_bdd_opt'] = "Оптимизировать";
$lang['admin_bdd_purge'] = "Критерий очистки";
$lang['admin_bdd_optall'] = "Оптимизировать все";
$lang['admin_purge_j'] = "Удалить записи старше %s дней";
$lang['admin_purge_s'] = "Удалить записи старше %s недель";
$lang['admin_purge_m'] = "Удалить записи старше %s месяцев";
$lang['admin_purge_y'] = "Удалить записи старше %s лет";
$lang['admin_purge_logs'] = "Удалить все журналы";
$lang['admin_purge_autres'] = "Удалить связи в таблице '%s'";
$lang['admin_purge_none'] = "Доступных действий нет";
$lang['admin_purge_cal'] = "Удалить (может занять неск.минут)";
$lang['admin_alias_title'] = "Алиасы веб-сайтов и URL";
$lang['admin_partner_title'] = "Партнёры веб-сайтов";
$lang['admin_newsletter_title'] = "Новостные ленты веб-сайтов";
$lang['admin_ip_exclude_title'] = "Диапазоны IP адресов для исключения из статистики.";
$lang['admin_name'] = "Название:";
$lang['admin_error_ip'] = "IP должен быть корректного формата: %s";
$lang['admin_site_name'] = "Название сайта";
$lang['admin_site_url'] = "Главная страница сайта";
$lang['admin_db_log'] = "Залогиньтесь как суперпользователь phpMyVisites для изменения настроек БД.";
$lang['admin_error_critical'] = "Ошибка, необходимо исправить для работы phpMyVisites.";
$lang['admin_warning'] = "Внимание! phpMyVisites работает нормально, но некоторые возможности могут быть недоступны.";
$lang['admin_move_group'] = "Переместить в группу:";
$lang['admin_move_select'] = "Выбрать группу";

//
// Setup
//
$lang['admin_intro'] = "Добро пожаловать в область настроек phpMyVisites. Вы можете изменить любую информацию, относящуюся к установке. Если у вас появятся вопросы, обратитесь к %s официальной документации к phpMyVisites %s."; // link to the doc
$lang['admin_configetperso'] = "Общие сведения";
$lang['admin_afficherjavascript'] = "Получить код JavaScript";
$lang['admin_cookieadmin'] = "Учёт заходов администратора";
$lang['admin_ip_ranges'] = "Не учитывать IP/IP диапазоны в статистике";
$lang['admin_sitesenregistres'] = "Ранее добавленные сайты:";
$lang['admin_retour'] = "Назад";
$lang['admin_cookienavigateur'] = "Вы можете исключить заходы администратора из статистики. Этот метод базируется на cookies. Вы сможете изменить эту настройку в любое время.";
$lang['admin_prendreencompteadmin'] = "Учитывать заходы администратора (cookie будет удален)";
$lang['admin_nepasprendreencompteadmin'] = "Не учитывать заходы администратора (будет создан cookie)";
$lang['admin_etatcookieoui'] = "Для этого веб-сайта ведётся учёт заходов администратора (как для любого другого посетителя - настройка по умолчанию)";
$lang['admin_etatcookienon'] = "Для этого веб-сайта заходы администратора не учитываются (Ваши заходы не будут учтены)";
$lang['admin_deleteconfirm'] = "Подтвердите удаление %s?";
$lang['admin_sitedeletemessage'] = "Пожалуйста, <u>будьте очень внимательны</u>: все данные, относящиеся к этому сайту, будут утеряны<br>без возможности восстановления.";
$lang['admin_confirmyes'] = "Да, удалить";
$lang['admin_confirmno'] = "Нет, не удалять";
$lang['admin_nonewsletter'] = "Нет новостных лент для этого сайта!";
$lang['admin_nopartner'] = "нет партнёров для этого сайта!";
$lang['admin_get_question'] = "Сохранять значения GET? (переменных в URL)";
$lang['admin_get_a1'] = "Сохранять ВСЕ переменные URL";
$lang['admin_get_a2'] = "НЕ сохранять переменные URL";
$lang['admin_get_a3'] = "Сохранять ТОЛЬКО указанные переменные";
$lang['admin_get_a4'] = "Сохранять все, ИСКЛЮЧАЯ указанные переменные";
$lang['admin_get_list'] = "Имена переменных (разделитель списка - <b>;</b>) <br/>Пример : %s";
$lang['admin_required'] = "%s необходим.";
$lang['admin_title_required'] = "Необходим";
$lang['admin_write_dir'] = "Директории с доступом на запись";
$lang['admin_chmod_howto'] = "Эти директории должны быть доступны для записи. Это значит, что вы должны выставить на них права доступа 777";
$lang['admin_optional'] = "Необязательные";
$lang['admin_memory_limit'] = "Ограничение памяти";
$lang['admin_allowed'] = "разрешенные";
$lang['admin_webserver'] = "Веб-сервер";
$lang['admin_server_os'] = "Серверная OS";
$lang['admin_server_time'] = "Время сервера";
$lang['admin_legend'] = "Легенда:";
$lang['admin_error_url'] = "URL должен быть правильного формата: %s (без слэша на конце)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "Алиасы URL";
$lang['admin_logo_question'] = "Показывать логотип?";
$lang['admin_type_again'] = "(набрать снова)";
$lang['admin_admin_mail'] = "Email суперпользователя";
$lang['admin_admin'] = "Суперпользователь";
$lang['admin_phpmv_path'] = "Полный путь до phpMyVisites";
$lang['admin_valid_email'] = "Указан неправильный Email";
$lang['admin_valid_pass'] = "Пароль должен быть более сложным (минимум 6 символов, должен содержать цифры)";
$lang['admin_match_pass'] = "Пароли не совпадают";
$lang['admin_no_user_group'] = "Нет пользователей в этой группе для этого сайта";
$lang['admin_recorded_nl'] = "Сохраненные новостные ленты:";
$lang['admin_recorded_partners'] = "Сохраненные партнёры:";
$lang['admin_recorded_users'] = "Сохраненные пользователи:";
$lang['admin_select_site_title'] = "Пожалуйста, выберите сайт";
$lang['admin_select_user_title'] = "Пожалуйста, выберите пользователя";
$lang['admin_no_user_registered'] = "Нет зарегистрированных пользователей!";
$lang['admin_configuration'] = "Настройки";
$lang['admin_general_conf'] = "Настройки системы";
$lang['admin_group_title'] = "Менеджер групп (прав доступа)";
$lang['admin_user_title'] = "Менеджер пользователей";
$lang['admin_user_add'] = "Добавить пользователя";
$lang['admin_user_mod'] = "Модифицировать пользователя";
$lang['admin_user_del'] = "Удалить пользователя";
$lang['admin_server_info'] = "Информация о сервере";
$lang['admin_send_mail'] = "Отправить статистику на Email";
$lang['admin_rss_feed'] = "Статистика в формате RSS";
$lang['admin_site_admin'] = "Администрирование сайтов";
$lang['admin_site_add'] = "Добавить сайт";
$lang['admin_site_mod'] = "Модифицировать сайт";
$lang['admin_site_del'] = "Удалить сайт";
$lang['admin_nl_add'] = "Добавить новостную ленту";
$lang['admin_nl_mod'] = "Модифицировать новостную ленту";
$lang['admin_nl_del'] = "Удалить новостную ленту";
$lang['admin_partner_add'] = "Добавить партнёра";
$lang['admin_partner_mod'] = "Модифицировать партнёра";
$lang['admin_partner_del'] = "Удалить партнёра";
$lang['admin_url_alias'] = "Менеджер алиасов URL";
$lang['admin_group_admin_n'] = "Просмотр статистики + права доступа админа";
$lang['admin_group_admin_d'] = "Пользователи могут видеть статистику и модифицировать информацию о сайте (название, добавить cookie, исключить IP адреса, модифицировать URL алиасов/партнеров/новостных лент, и т.д.)";
$lang['admin_group_view_n'] = "Просмотр статистики";
$lang['admin_group_view_d'] = "Пользователи могут смотреть статистику. Прав админа нет.";
$lang['admin_group_noperm_n'] = "Нет доступа";
$lang['admin_group_noperm_d'] = "Пользователи из этой группы не имеют никаких прав.";
$lang['admin_group_stitle'] = "Вы можете модифицировать права доступа пользователя, выбрав его, а затем выбрав группу, куда вы хотите переместить его.";
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
$lang['install_loginmysql'] = "Пользователь базы данных";
$lang['install_mdpmysql'] = "Пароль";
$lang['install_serveurmysql'] = "Сервер баз данных";
$lang['install_basemysql'] = "Имя базы данных";
$lang['install_prefixetable'] = "Префикс имён таблиц";
$lang['install_utilisateursavances'] = "Для опытных пользователей (необязательные параметры)";
$lang['install_oui'] = "Да";
$lang['install_non'] = "Нет";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Внимание: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Логин администратора:";
$lang['install_mdpadmin'] = "Пароль администратора:";
$lang['install_chemincomplet'] = "Полный путь к приложению phpMyVisites (например, http://www.mysite.com/rep1/rep3/phpmyvisites/). Путь должен оканчиваться символом <strong>/</strong>.";
$lang['install_afficherlogo'] = "Показывать логотип phpMyVisites на ваших страницах? %s "; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Показывать статистические графики.";
$lang['install_valider'] = "Продолжить"; //  during installation and for login
$lang['install_popup_logo'] = "Выберите логотип"; // TODO : translate
$lang['install_logodispo'] = "Список различных логотипов"; // TODO : translate
$lang['install_welcome'] = "Добро пожаловать!";
$lang['install_system_requirements'] = "Системные требования";
$lang['install_database_setup'] = "Настройка БД";
$lang['install_create_tables'] = "Создание таблиц";
$lang['install_general_setup'] = "Настройка системы";
$lang['install_create_config_file'] = "Создание конфигурационного файла";
$lang['install_first_website_setup'] = "Создание первого веб-сайта";
$lang['install_display_javascript_code'] = "Генерация Javascript-кода счётчика";
$lang['install_finish'] = "Установка закончена!";
$lang['install_txt2'] = "После завершения установки будет передан запрос на официальный веб-сайт с тем, чтобы мы могли узнать, сколько пользователей установили phpMyVisites. Надеемся, вы отнесётесь к этому с пониманием.";
$lang['install_database_setup_txt'] = "Пожалуйста, введите настройки вашей БД.";
$lang['install_general_config_text'] = "phpMyVisites может иметь только одного суперпользователя, которому доступны все настройки системы. Укажите имя и пароль суперпользователя. Вы сможете добавить других пользователей позже.";
$lang['install_config_file'] = " Admin user info entered successfully.";
$lang['install_js_code_text'] = "<p>Для подсчёта ваших посетителей вы должны вставить Javascript код счётчика во все ваши страницы. </p><p> Ваши страницы не обязательно должны быть на PHP, <strong>phpMyVisites работает с любыми типами страниц (HTML, ASP, Perl или любой другой язык).</strong> </p><p> Ниже приведен код счётчика: (скопируйте и вставьте его во все ваши страницы) </p>";
$lang['install_intro'] = "Добро пожаловать в установщик phpMyVisites."; 
$lang['install_intro2'] = "Этот процесс разбит на %s простых частей и займёт не более 10 минут.";
$lang['install_next_step'] = "Проследовать к следующему шагу";
$lang['install_status'] = "Прогресс установки";
$lang['install_done'] = "Установка на %s%% закончена"; // Install 25% complete
$lang['install_site_success'] = "Веб-сайт успешно создан!";
$lang['install_site_info'] = "Пожалуйста укажите всю информацию о первом сайте.";
$lang['install_go_phpmv'] = "Перейти к phpMyVisites!";
$lang['install_congratulation'] = "Поздравляем! Установка phpMyVisites закончена.";
$lang['install_end_text'] = "Убедитесь, что javascript код размещен на всех страницах вашего сайта, и ждите первого посетителя!";
$lang['install_db_ok'] = "Успешное подключение к БД!";
$lang['install_table_exist'] = "Таблицы phpMyVisites уже существуют в БД.";
$lang['install_table_choice'] = "Выберите повторное использование таблиц или установку с нуля, чтобы очистить содержимое таблиц.";
$lang['install_table_erase'] = "Удалить все таблицы (будьте осторожны!)";
$lang['install_table_reuse'] = "Повторное использование таблиц";
$lang['install_table_success'] = "Таблицы успешно созданы!";
$lang['install_send_mail'] = "Получать ежедневно email с суммарной дневной статистикой по веб-сайту?";

//
// Update Step
//
$lang['update_title'] = "Обновление phpMyVisites";
$lang['update_subtitle'] = "Мы обнаружили, что вы хотите обновить phpMyVisites.";
$lang['update_versions'] = "Предыдущая версия была %s и мы обновим её до %s.";
$lang['update_db_updated'] = "Ваша база данных успешно обновлена!";
$lang['update_continue'] = "Перейти к phpMyVisites";
$lang['update_jschange'] = "Внимание! <br /> phpMyVisites javascript код для страниц изменился. Вы должны обновить его на ВСЕХ ваши страницах.<br /> Изменения в коде были необходимы, мы приносим свои извинения за неудобство."; // TODO : translate

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
$lang['tdate3'] = "Неделя с %monthlong% %daynumeric% по %monthlong2% %daynumeric2% %yearlong%";

// February 2004 Month
$lang['tdate4'] = "Месяц %monthlong% %yearlong%";

// December 2003
$lang['tdate5'] = "%monthlong% %yearlong%";

// 10 Febuary week
$lang['tdate6'] = "%daynumeric% %monthlong% week";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%daynumeric%-%monthnumeric%-%yearlong%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = "%dayshort% %daynumeric%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9'] = " Неделя %daynumeric% %monthshort%";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%monthshort% %yearshort%";

// Year 2004
$lang['tdate11'] = "Год %yearlong%";

// 2004
$lang['tdate12'] = "%yearlong%";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "January";
$lang['moistab']['02'] = "February";
$lang['moistab']['03'] = "March";
$lang['moistab']['04'] = "April";
$lang['moistab']['05'] = "May";
$lang['moistab']['06'] = "June";
$lang['moistab']['07'] = "July";
$lang['moistab']['08'] = "August";
$lang['moistab']['09'] = "September";
$lang['moistab']['10'] = "October";
$lang['moistab']['11'] = "November";
$lang['moistab']['12'] = "December";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Jan";
$lang['moistab_graph']['02'] = "Feb";
$lang['moistab_graph']['03'] = "Mar";
$lang['moistab_graph']['04'] = "Apr";
$lang['moistab_graph']['05'] = "May";
$lang['moistab_graph']['06'] = "Jun";
$lang['moistab_graph']['07'] = "Jul";
$lang['moistab_graph']['08'] = "Aug";
$lang['moistab_graph']['09'] = "Sep";
$lang['moistab_graph']['10'] = "Oct";
$lang['moistab_graph']['11'] = "Nov";
$lang['moistab_graph']['12'] = "Dec";

// Day of the week
$lang['jsemaine']['Mon'] = "Понедельник";
$lang['jsemaine']['Tue'] = "Вторник";
$lang['jsemaine']['Wed'] = "Среда";
$lang['jsemaine']['Thu'] = "Четверг";
$lang['jsemaine']['Fri'] = "Пятница";
$lang['jsemaine']['Sat'] = "Суббота";
$lang['jsemaine']['Sun'] = "Воскресенье";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Mon";
$lang['jsemaine_graph']['Tue'] = "Tue";
$lang['jsemaine_graph']['Wed'] = "Wed";
$lang['jsemaine_graph']['Thu'] = "Thu";
$lang['jsemaine_graph']['Fri'] = "Fri";
$lang['jsemaine_graph']['Sat'] = "Sat";
$lang['jsemaine_graph']['Sun'] = "Sun";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "Пн";
$lang['calendrier_jours'][1] = "Вт";
$lang['calendrier_jours'][2] = "Ср";
$lang['calendrier_jours'][3] = "Чт";
$lang['calendrier_jours'][4] = "Пт";
$lang['calendrier_jours'][5] = "Сб";
$lang['calendrier_jours'][6] = "Вс";

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
$lang['ams'] = "Южная и Центральная Америки";
$lang['amn'] = "Северная Америка";
$lang['oce'] = "Океания";

// Oceans
$lang['oc_pac'] = "Тихий океан"; // TODO : translate
$lang['oc_atl'] = "Атлантический океан"; // TODO : translate
$lang['oc_ind'] = "Индийский океан"; // TODO : translate

// Countries
$lang['domaines'] = array(
    "xx" => "Неизв.",
    "ac" => "О-ва Асенсьон",
    "ad" => "Андора",
    "ae" => "ОАЭ",
    "af" => "Афганистан",
    "ag" => "Антигуа и Барбуда",
    "ai" => "Ангвила",
    "al" => "Албания",
    "am" => "Армения",
    "an" => "Антильские о-ва",
    "ao" => "Ангола",
    "aq" => "Антарктика",
    "ar" => "Аргентина",
    "as" => "Американское Самоа",
    "at" => "Австрия",
    "au" => "Австралия",
    "aw" => "Аруба",
    "az" => "Азербайджан",
    "ba" => "Босния и Герцеговина",
    "bb" => "Барбадос",
    "bd" => "Бангладеш",
    "be" => "Бельгия",
    "bf" => "Буркина Фасо",
    "bg" => "Болгария",
    "bh" => "Бахрейн",
    "bi" => "Бурунди",
    "bj" => "Бенин",
    "bm" => "Бермудские о-ва",
    "bn" => "Бруней",
    "bo" => "Боливия",
    "br" => "Бразилия",
    "bs" => "Багамы",
    "bt" => "Бутан",
    "bv" => "О-в Буве",
    "bw" => "Бодсвана",
    "by" => "Беларусь",
    "bz" => "Белиз",
    "ca" => "Канада",
    "cc" => "Кокосовые (Килинга) о-ва",
    "cd" => "Конго, демократическая республика",
    "cf" => "Центральная Африканская республика",
    "cg" => "Конго",
    "ch" => "Швейцария",
    "ci" => "Кот Д'ивуар",
    "ck" => "О-ва Кука",
    "cl" => "Чили",
    "cm" => "Камерун",
    "cn" => "Китай",
    "co" => "Колумбия",
    "cr" => "Коста Рика",
	"cs" => "Serbia Montenegro",
    "cu" => "Куба",
    "cv" => "Капе Верде",
    "cx" => "О-в Рождества",
    "cy" => "Кипр",
    "cz" => "Чешская республика",
    "de" => "Германия",
    "dj" => "джибути",
    "dk" => "Дания",
    "dm" => "Доминик",
    "do" => "Доминиканская республика",
    "dz" => "Алжир",
    "ec" => "Эквадор",
    "ee" => "Эстония",
    "eg" => "Египет",
    "eh" => "Западная Сахара",
    "er" => "Эритрея",
    "es" => "Испания",
    "et" => "Эфиопия",
    "fi" => "Финляндия",
    "fj" => "Фиджи",
    "fk" => "Фольклендские о-ва",
    "fm" => "Микронезия",
    "fo" => "О-ва Фаро",
    "fr" => "Франция",
    "ga" => "Габон",
    "gd" => "Гренада",
    "ge" => "Грузия",
    "gf" => "Гуана",
    "gg" => "Джернси",
    "gh" => "Гана",
    "gi" => "Гибралтар",
    "gl" => "Гренладния",
    "gm" => "Гамбия",
    "gn" => "Гвинея",
    "gp" => "Гваделупа",
    "gq" => "Экваториальная Гвинея",
    "gr" => "Греция",
    "gs" => "Южная Грузия",
    "gt" => "Гватемала",
    "gu" => "Гуам",
    "gw" => "Гвинея-Диссо",
    "gy" => "Гуйана",
    "hk" => "Гонконг",
    "hm" => "О-ва Херда и Макдональда",
    "hn" => "Гондурас",
    "hr" => "Хорватия",
    "ht" => "Гаити",
    "hu" => "Венгрия",
    "id" => "Индонезия",
    "ie" => "Ирландия",
    "il" => "Израиль",
    "im" => "О-в Мэн",
    "in" => "Индия",
    "io" => "Британская территория Индийского океана",
    "iq" => "Ирак",
    "ir" => "Иран",
    "is" => "исландия",
    "it" => "Италия",
    "je" => "Джерси",
    "jm" => "Ямайка",
    "jo" => "Иордания",
    "jp" => "Япония",
    "ke" => "Кения",
    "kg" => "Кыргызстан",
    "kh" => "Камбоджа",
    "ki" => "Кирибати",
    "km" => "Коморос",
    "kn" => "Св.Киттс и Невис",
    "kp" => "КНДР",
    "kr" => "Корея",
    "kw" => "Кувейт",
    "ky" => "Каймановы о-ва",
    "kz" => "Казахстан",
    "la" => "Лаос",
    "lb" => "Ливан",
    "lc" => "Санталючия",
    "li" => "Лихтенштейн",
    "lk" => "Шри Ланка",
    "lr" => "Либерия",
    "ls" => "Лесото",
    "lt" => "Литва",
    "lu" => "люксембург",
    "lv" => "Латвия",
    "ly" => "Ливия",
    "ma" => "Марокко",
    "mc" => "Монако",
    "md" => "Молдова",
    "mg" => "Мадагаскар",
    "mh" => "Маршалловы о-ва",
    "mk" => "Македония",
    "ml" => "Мали",
    "mm" => "Мьянма",
    "mn" => "Монголия",
    "mo" => "Макау",
    "mp" => "Северные о-ва Марьяна",
    "mq" => "Мартиник",
    "mr" => "Мавритания",
    "ms" => "Монсеррат",
    "mt" => "Мальта",
    "mu" => "Маврикий",
    "mv" => "Мальдивы",
    "mw" => "Малави",
    "mx" => "Мексика",
    "my" => "Малайзия",
    "mz" => "Мозамбик",
    "na" => "Намибия",
    "nc" => "Новая Каледония",
    "ne" => "Нигер",
    "nf" => "Норфолкские о-ва",
    "ng" => "Нигерия",
    "ni" => "Никарагуа",
    "nl" => "Нидерланды",
    "no" => "Норвегия",
    "np" => "Непал",
    "nr" => "науру",
    "nu" => "Ние",
    "nz" => "Ноавя Зеландия",
    "om" => "Оман",
    "pa" => "Панама",
    "pe" => "Перу",
    "pf" => "Полинезия",
    "pg" => "Папуа Новая Гвинея",
    "ph" => "Филиппины",
    "pk" => "Пакистан",
    "pl" => "Польша",
    "pm" => "Сен-Пьер и Микелон",
    "pn" => "Питкерн",
    "pr" => "Пуэрто-Рико",
	"ps" => "Palestinian Territory",
    "pt" => "Португалия",
    "pw" => "Пало",
    "py" => "Парагвай",
    "qa" => "Катар",
    "re" => "О-ва Реюнион",
    "ro" => "Румыния",
    "ru" => "Российская Федерация",
    "rs" => "Россия",
    "rw" => "Руанда",
    "sa" => "Саудовская Аравия",
    "sb" => "Соломоновы о-ва",
    "sc" => "Сейшелы",
    "sd" => "Судан",
    "se" => "Швеция",
    "sg" => "Сингапур",
    "sh" => "О-в св.Елены",
    "si" => "Словения",
    "sj" => "Свольбар",
    "sk" => "Словакия",
    "sl" => "Сиерра Леоне",
    "sm" => "Сан Марино",
    "sn" => "Сенегал",
    "so" => "Сомали",
    "sr" => "Суринам",
    "st" => "Сан Томе и Принсип",
    "su" => "СССР (бывш.)",
    "sv" => "Эль Сальвадор",
    "sy" => "Сирия",
    "sz" => "швейцария",
    "tc" => "О-ва Турции и Каикоса",
    "td" => "Чад",
    "tf" => "Южные территории Франции",
    "tg" => "Того",
    "th" => "Таиланд",
    "tj" => "Таджикистан",
    "tk" => "Токело",
    "tm" => "Туркменистан",
    "tn" => "Тунис",
    "to" => "Тонго",
    "tp" => "Вост.Тимор",
    "tr" => "Турция",
    "tt" => "Тринидад и Тобаго",
    "tv" => "Тувалу",
    "tw" => "Тайвань",
    "tz" => "Танзания",
    "ua" => "Украина",
    "ug" => "Уганда",
    "uk" => "Соединённое Королевство",
    "gb" => "Великобритания",
    "um" => "О-ва США",
    "us" => "США",
    "uy" => "Уругвай",
    "uz" => "Узбекистан",
    "va" => "Ватикан",
    "vc" => "Вне Винсент",
    "ve" => "Венесуэла",
    "vg" => "Виржинские о-ва, Великобритания",
    "vi" => "Виржинские о-ва, США",
    "vn" => "Вьетнам",
    "vu" => "Вануату",
    "wf" => "Уоллис и Футуна",
    "ws" => "Самоа",
    "ye" => "Йемен",
    "yt" => "Майотта",
    "yu" => "Югославия",
    "za" => "Южная Африка",
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