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
$lang['auteur_nom'] = "freedanload.com"; // Translator's name
$lang['auteur_email'] = "mohamadynasab@gmail.com"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "fa"; // iso language code
$lang['lang_libelle_en'] = "Persian"; // english language name
$lang['lang_libelle_fr'] = "Perse"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = ''; // three thousand spells 3,000 in english
$lang['separateur_decimaux'] = '.'; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites persian | برنامه ای کد باز برای تجزیه و تحلیل ترافیک سایت"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, script, application, software, statistics, referals, stats, free, open source, gpl, visits, visitors, mysql, viewed pages, pages, views, number of visits, graphs, Browsers, os, operating system, resolutions, day, week, month, records, country, host, service providors, search enginge, key words, referrers, graphs, entry pages, exit pages, pie charts,freedanload.com,amnhak,freedanload"; // Header keywords
$lang['head_description'] = "phpMyVisites | برنامه ای که توسط php /My SQL نوشته شده و تحت قانون GPL قرار دارد.."; // Header description
$lang['logo_description'] = "phpMyVisites : برنامه ای که توسط php /My SQL نوشته شده و تحت قانون GPL قرار دارد."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "بازدید کنندگان";
$lang['menu_pagesvues'] = "صفحات بازدید شده";
$lang['menu_suivi'] = "پی گیری کردن";
$lang['menu_provenance'] = "منبع";
$lang['menu_configurations'] = "تنظیمات";
$lang['menu_affluents'] = "مراجعه کنندگان";
$lang['menu_listesites'] = "لیست سایتها";
$lang['menu_bilansites'] = "خلاصه";
$lang['menu_jour'] = "روز";
$lang['menu_semaine'] = "هفته";
$lang['menu_mois'] = "ماه";
$lang['menu_annee'] = "سال";
$lang['menu_periode'] = "دوره مطالعاتی: %s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "سایت برنامه";
$lang['liens_admin'] = "کنترل پانل برنامه";
$lang['liens_contacts'] = "ارتباطات";

//
// Divers
//
$lang['generique_nombre'] = "شماره";
$lang['generique_tauxsortie'] = "زمان خروج";
$lang['generique_ok'] = "قبول";
$lang['generique_timefooter'] = "مدت زمان ایجاد صفحه در %s ثانیه"; // Time in seconds
$lang['generique_divers'] = "سایر"; // (for the graphs)
$lang['generique_inconnu'] = "ناشناخته"; // (for the graphs)
$lang['generique_vous'] = "... شما ?";
$lang['generique_traducteur'] = "مترجم";
$lang['generique_langue'] = "زبان آمارگیر";
$lang['generique_autrelangure'] = "سایر زبان ها؟"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "هیچ بازدید کننده ای در این دوره موجود نمی باشد."; 
$lang['generique_aucune_visite_bdd'] = "<b>هشدار ! </b> هیچ بازدید کننده ای برای سایت شما در بانک اطلاعاتی ثبت نشده است. مطمئن شوید که کد جاوای برنامه را در صفحات خود قرار داده اید., ضمنا توجه کنید که آدرس به سایت phpmyvisites در این کد جاوا درست وارد شده باشد. میتوانید به راهنمای برنامه مراجعه نمایید.";
$lang['generique_aucune_site_bdd'] = "هیچ سایتی در بانک اطلاعاتی ثبت نشده است ! با نام و رمز عبور مدیریت کل وارد شده و یک سایت را اضافه نمایید.";
$lang['generique_retourhaut'] = "بالا";
$lang['generique_tempsvisite'] = "%s دقیقه %s ثانیه"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%s ساعت"; // 4h means 4 hours
$lang['generique_siteno'] = "سایت %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "خبرنامه %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "شریک %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "کلی";
$lang['generique_user'] = "کاربر %s"; // User "Admin"
$lang['generique_previous'] = "قبلی";
$lang['generique_next'] = "بعدی";
$lang['generique_lowpop'] = "عدم  شمارش افراد زیر در آمارها";
$lang['generique_allpop'] = "شامل همه افراد در آمارها";
$lang['generique_to'] = "به"; // 4 'to' 8
$lang['generique_total_on'] = "تا"; // 4 to 8 'on' 10
$lang['generique_total'] = "کل";
$lang['generique_information'] = "اطلاعات";
$lang['generique_done'] = "انجام شد!";
$lang['generique_other'] = "سایر";
$lang['generique_description'] = "توضیح:";
$lang['generique_name'] = "نام:";
$lang['generique_variables'] = "متغیر ها";
$lang['generique_logout'] = "خروج";
$lang['generique_login'] = "ورود";
$lang['generique_hits'] = "تعداد";
$lang['generique_errors'] = "خطاها";
$lang['generique_site'] = "سایت";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "رمز ورود : "; // lowercase
$lang['login_login'] = "نام کاربری : "; // lowercase
$lang['login_error'] = "قادر به ورود نمی باشد. رمز ورود اشتباه است.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "شما دوست دارید که یک حوزه امنیتی برای %sphpMyVisites%s ایجاد نمایید.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "ارتباطات";
$lang['contacts_langue'] = "ترجمه";
$lang['contacts_merci'] = "تشکر";
$lang['contacts_auteur'] = "نویسنده و مستند ساز و ایجاد کننده برنامه  <strong>Matthieu Aubry</strong> می باشد .";
$lang['contacts_questions'] = "برای<strong> پرسش سوالات, گزارش اشکالات, پیشنهادات</strong> از تالارهای گفتگوی سایت دیدن کنید %s. برای سایر درخواست ها, با نویسنده برنامه از طریق لینک سایت اصلی برنامه ارتباط برقرار کنید.<br>ضمنا با مترجم برنامه می توانید از طریق جدول زیر و انتخاب نام مترجم ارتباط برقرار کنید."; // adresse du site
$lang['contacts_trad1'] = "آیا می خواهید برنامه را به زبان خود ترجمه کنید.در این کار تامل نکنید. زیرا phpmyvisit به این کار شما نیاز فراوان دارد.";
$lang['contacts_trad2'] = "اگر شما علاقمن به ترجمه برنامه دارید اطلاعاتی را می توانید از طریق این لینک کسب کنید<br> %s مستندات phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "به آدرس %s مستندات phpMyVisites %s مراجعه کنید تا اطلاعاتی را در مورد نصب و پیکر بندی و یا هر سوال دیگری و همچنین در مورد نسخه برنامه کسب کنید."; // lien vers la doc
$lang['contacts_thanks_dev'] = "تشکر ویژه از <strong>%s</strong>که همکاران وِیژه ما در phpMyVisites هستند.با کمک این دوستان برنامه با بهترین کیفیت به شما عرضه شده است.";
$lang['contacts_merci3'] = "در کمک و همفکری با سایت phpmyvisit تامل نکنید. لیستی از دوستان همکار ما را در زیر مشاهده می کنید.";
$lang['contacts_merci2'] = "یک تشکر ویژه از کلیه کسانی که برنامه را به زبان های زیر ترجمه کرده اند:";

//
// Rss & Mails
//
$lang['rss_titre'] = "سایت %s در %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "برو به جزئیات آمارها";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "اطلاعات بازدید کنندگان"; 
$lang['visites_statistiques'] = "آمار ها";
$lang['visites_periodesel'] = "برای دوره زمانی انتخاب شده";
$lang['visites_visites'] = "بازدید کنندگان";
$lang['visites_uniques'] = "بازدید کنندگان منحصر بفرد";
$lang['visites_pagesvues'] = "صفحات دیده شده";
$lang['visites_pagesvisiteurs'] = "درصد صفحات بازدید شده"; 
$lang['visites_pagesvisites'] = "صفحات در هر بازدید"; 
$lang['visites_pagesvisitessign'] = "صفحات در بازدید های مهم"; 
$lang['visites_tempsmoyen'] = "میانگین دوره بازدید";
$lang['visites_tempsmoyenpv'] = "مینگین زمان برای صفحه دیده شده";
$lang['visites_tauxvisite'] = "1 نرخ بازدید صفحه"; 
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "خلاصه دوره";
$lang['visites_nbvisites'] = "بازدید کنندگان";
$lang['visites_aucunevivisite'] = "بدون بازدید کننده"; // in the table, must be short
$lang['visites_recap'] = "خلاصه";
$lang['visites_unepage'] = "1 صفحه"; // (graph)
$lang['visites_pages'] = "%s صفحات"; // 1-2 pages (graph)
$lang['visites_min'] = "%s دقیقه"; // 10-15 min (graph)
$lang['visites_sec'] = "%s ثانیه"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "نمودار برای نمایش خلاصه آمارها";
$lang['visites_grapghrecaplongterm'] = "گراف خلاصه آمارها";
$lang['visites_graphtempsvisites'] = "نمودار برای نمایش مدت زمانی که توسط بازدید کننده بازدید شده";
$lang['visites_graphtempsvisitesimg'] = "مدت زمان ملاقات ها توسط بازدید کننده";
$lang['visites_graphheureserveur'] = "نمودار برای نمایش درصد ساعات بازدید در این سرور"; 
$lang['visites_graphheureserveurimg'] = "بازدیدها توسط زمان سرور"; 
$lang['visites_graphheurevisiteur'] = "نمودار برای نمایش درصد ساعات بازدید برای این بازدید کننده";
$lang['visites_graphheurelocalimg'] = "بازدید ها توسط زمان محلی"; 
$lang['visites_longterm_statd'] = "تجزیه و تحلیل دراز مدت (روزهای دوره)";
$lang['visites_longterm_statm'] = "تجزیه و تحلیل دراز مدت (ماه های دوره)";

//
// Sites Summary
//
$lang['summary_title'] = "خلاصه سایت";
$lang['summary_stitle'] = "خلاصه";

//
// Frequency Part
//
$lang['frequence_titre'] = "کاربران بازگشتی";
$lang['frequence_nouveauxconnusgraph'] = "گراف برای کاربرانی که دوباره به سایت مراجعه نموده اند";
$lang['frequence_nouveauxconnus'] = "مشاهدات بازگشتی جدید";
$lang['frequence_titremenu'] = "فراوانی";
$lang['frequence_visitesconnues'] = "مشاهدات بازگشتی";
$lang['frequence_nouvellesvisites'] = "سایت های جدید";
$lang['frequence_visiteursconnus'] = "بازدید کنندگان بازگشتی";
$lang['frequence_nouveauxvisiteurs'] = "بازدید کنندگان جدید";
$lang['frequence_returningrate'] = "نرخ بازگشتی ها";
$lang['pagesvues_vispervisgraph'] = "گراف برای نمایش تعداد بازدید هر بازدید کننده";
$lang['frequence_vispervis'] = "تعداد بازدید هر بازدید کننده";
$lang['frequence_vis'] = "بازدید";
$lang['frequence_visit'] = "1 بازدید"; // (graph)
$lang['frequence_visits'] = "%s بازدید"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "اطلاعات صفحات بازدید شده";
$lang['pagesvues_joursel'] = "روز انتخاب شده";
$lang['pagesvues_jmoins7'] = "روز - 7";
$lang['pagesvues_jmoins14'] = "روز - 14";
$lang['pagesvues_moyenne'] = "(میانگین)";
$lang['pagesvues_pagesvues'] = "بازدید های صفحه";
$lang['pagesvues_pagesvudiff'] = "بازدید های منحصر بفرد صفحه";
$lang['pagesvues_recordpages'] = "بالاترین تعداد صفحات برای یک بازدید کننده";
$lang['pagesvues_tabdetails'] = "صفحه بازدید شده %s به %s"; // (from 1 to 21)
$lang['pagesvues_graphsnbpages'] = "نمودار برای نمایش تعداد درصد صفحات بازدید شده";
$lang['pagesvues_graphnbvisitespageimg'] = "بازدید توسط تعداد صفحات بازدید شده";
$lang['pagesvues_graphheureserveur'] = "نمایش نمودار برای بازدیدها توسط زمان سرور";
$lang['pagesvues_graphheureserveurimg'] = "بازدیدها بوسیله زمان محلی";
$lang['pagesvues_graphheurevisiteur'] = "نمودار برای نمایش بازدیدها توسط زمان محلی";
$lang['pagesvues_graphpageslocalimg'] = "بازدید ها توسط زمان محلی";
$lang['pagesvues_tempsparpage'] = "زمان هر صفحه";
$lang['pagesvues_total_time'] = "کل زمان";
$lang['pagesvues_avg_time'] = "میانگین زمانe";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "حرکات بازدید کنندگان";
$lang['suivi_pageentree'] = "ورودی صفحات";
$lang['suivi_pagesortie'] = "خروج صفحات";
$lang['suivi_tauxsortie'] = "زمان خروج";
$lang['suivi_pageentreehits'] = "تعداد ورودی ها";
$lang['suivi_pagesortiehits'] = "تعداد خروجی ها";
$lang['suivi_singlepage'] = "بازدید صفحات تنها";

//
// Origin
//
$lang['provenance_titre'] = "منشاء بازدید کنندگان";
$lang['provenance_recappays'] = "وضعیت کشورها";
$lang['provenance_pays'] = "کشور ها";
$lang['provenance_paysimg'] = "نمودار بازدید کنندگان بر اساس کشور";
$lang['provenance_fai'] = "سرویس دهنده اینترنت";
$lang['provenance_nbpays'] = "تعداد کشورهای متفاوت : %s";
$lang['provenance_provider'] = "ارائه دهنده خدمات اینترنتی"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "قاره";
$lang['provenance_mappemonde'] = "نقشه جهان";
$lang['provenance_interetspays'] = "کشورهای مورد علاقه";

//
// Setup
//
$lang['configurations_titre'] = "تنظیمات بازدید کننده";
$lang['configurations_os'] = "سیستم عامل ها";
$lang['configurations_osimg'] = "نمودار برای نمایش سیستم عامل بازدید کنندگان";
$lang['configurations_navigateurs'] = "مرورگرها";
$lang['configurations_navigateursimg'] = "نمودار برای نمایش مرورگر بازدید کنندگان";
$lang['configurations_resolutions'] = "وضوح دید مانیتور بازدید کنندگان";
$lang['configurations_resolutionsimg'] = "نمودار برای نمایش وضوح دید مانیتور بازدید کنندگان";
$lang['configurations_couleurs'] = "عمق رنگ مانیتور";
$lang['configurations_couleursimg'] = "نمودار برای نمایش عمق رنگ مانیتور کاربر";
$lang['configurations_rapport'] = "نرمال / پهن";
$lang['configurations_large'] = "پهن";
$lang['configurations_normal'] = "نرمال";
$lang['configurations_double'] = "دو پرده ای";
$lang['configurations_plugins'] = "پلاگین";
$lang['configurations_navigateursbytype'] = "مرورگرها براساس نوع";
$lang['configurations_navigateursbytypeimg'] = "نمودار برای نمایش نوع مرورگرها";
$lang['configurations_os_interest'] = "میل به سیستم عامل ها";
$lang['configurations_navigateurs_interest'] = "میل به مرورگرها";
$lang['configurations_resolutions_interest'] = "میل به وضوح دید مانیتور";
$lang['configurations_couleurs_interest'] = "میل به وضوح رنگ";
$lang['configurations_configurations'] = "تنظیمات عالی";

//
// Referers
//
$lang['affluents_titre'] = "مراحعه کنندگان";
$lang['affluents_recapimg'] = "نمودار بازدید کنندگان بر اساس مراجعه";
$lang['affluents_directimg'] = "مستقیم";
$lang['affluents_sitesimg'] = "سایت ها";
$lang['affluents_moteursimg'] = "موتور جستجو ها";
$lang['affluents_referrersimg'] = "مراجعه کنندگان";
$lang['affluents_moteurs'] = "موتورهای حرفه ای جستجو";
$lang['affluents_nbparmoteur'] = "مدت زمان بازدید ها توسط موتور جستجو : %s";
$lang['affluents_aucunmoteur'] = "هیچ بهبودی توسط موتور جستجو داده نشده.";
$lang['affluents_motscles'] = "کلمات کلیدی";
$lang['affluents_nbmotscles'] = "کلملت کلیدی مشخص : %s";
$lang['affluents_aucunmotscles'] = "کلمه کلیدی پیدا نشد.";
$lang['affluents_sitesinternet'] = "سایت ها";
$lang['affluents_nbautressites'] = "بهبود بازدید ها توسط سایر سایت ها : %s";
$lang['affluents_nbautressitesdiff'] = "تعداد سایت های متفاوت : %s";
$lang['affluents_aucunautresite'] = "هیچ بهبودی توسط سایت ها داده نشده.";
$lang['affluents_entreedirecte'] = "درخواست مستقیم";
$lang['affluents_nbentreedirecte'] = "بازدید های درخواست مستقیم : %s";
$lang['affluents_nbpartenaires'] = "بازدید های انجام شده توسط شرکا : %s";
$lang['affluents_aucunpartenaire'] = "هیچ بازدید توسط شرکا انجام نشده است.";
$lang['affluents_nbnewsletters'] = "بازدید های انجام شده توسط خبرنامه ها: %s";
$lang['affluents_aucunnewsletter'] = "هیچ بازدیدی توسط خبرنامه ها انجام نشده است.";
$lang['affluents_details'] = "جزئیات"; // In the results of the referers array
$lang['affluents_interetsmoteurs'] = "میل به موتورهای جستجو";
$lang['affluents_interetsmotscles'] = "کلمات کلیدی مورد علاقه";
$lang['affluents_interetssitesinternet'] = "سایت های مورد علاقه";
$lang['affluents_partenairesimg'] = "شرکاء";
$lang['affluents_partenaires'] = "شرکاء";
$lang['affluents_interetspartenaires'] = "علایق شرکاء";
$lang['affluents_newslettersimg'] = "خبرنامه ها";
$lang['affluents_newsletters'] = "خبرنامه ها";
$lang['affluents_interetsnewsletters'] = "علایق خبرنامه ها";
$lang['affluents_type'] = "نوع مراجعه";
$lang['affluents_interetstype'] = "علایق نوع دسترسی";

//
// Summary
//
$lang['purge_titre'] = "خلاصه بازدید ها و ارجاعات";
$lang['purge_intro'] = "این دوره از طریق مدیریت حذف شده. فقط آمار ضروری نگه داشته شده است.";
$lang['admin_purge'] = "نگهداری بانک اطلاعاتی";
$lang['admin_purgeintro'] = "این بخش این اجازه را به شما می دهد که جدول های مورد استفاده توسط برنامه را مدیریت کنید. شما می توانید جدول ها را حذف و یا بهینه و یا فضای مورد استفاده توسط آنها را تعیین کنید. همچنین می توانید یادداشت های قدیمی را حذف کنید.";
$lang['admin_optimisation'] = "بهینه کردن [ %s ]..."; // Tables names
$lang['admin_postopt'] = "کل فضا کاهش داده شده بوسیله %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "حذف دوره های زیر: %s";
$lang['admin_purge_fini'] = "حذف جدول ها پایان یافت...";
$lang['admin_bdd_nom'] = "نام";
$lang['admin_bdd_enregistrements'] = "ثبت شده ها";
$lang['admin_bdd_taille'] = "اندازه جدول";
$lang['admin_bdd_opt'] = "بهینه سازی";
$lang['admin_bdd_purge'] = "پاک کردن محتوی";
$lang['admin_bdd_optall'] = "بهینه سازی همه";
$lang['admin_purge_j'] = "حذف  محتوی جدول ها از %s روز";
$lang['admin_purge_s'] = "حذف محتوی جدول ها از %s هفته";
$lang['admin_purge_m'] = "حذف مختوی جدول ها از %s ماه";
$lang['admin_purge_y'] = "حذف ثبت های قدیمی تا %s سال پیش";
$lang['admin_purge_logs'] = "حذف تمام گزارشات";
$lang['admin_purge_autres'] = "پاک کردن معمولی  جدول '%s'";
$lang['admin_purge_none'] = "انجام عمل امکان ندارد";
$lang['admin_purge_cal'] = "محاسبه و پاک کردن (چند دقیقه می تواند طول بکشد)";
$lang['admin_alias_title'] = "نام مستعار وب سایتها و آدرس ها";
$lang['admin_partner_title'] = "وب سایتهای شریک";
$lang['admin_newsletter_title'] = "خبرنامه های وب سایت";
$lang['admin_ip_exclude_title'] = "محدوده آدرسهای آی پی های برای عدم شمارش";
$lang['admin_name'] = "نام:";
$lang['admin_error_ip'] = "این آی پی های در فرمت معتبر وارد نشده است: %s";
$lang['admin_site_name'] = "نام سایت";
$lang['admin_site_url'] = "آدرس اصلی سایت";
$lang['admin_db_log'] = "با شناسه کاربری مدیرت کل برای تنظیم بانک اطلاعاتی وارد شوید.";
$lang['admin_error_critical'] = "خطا, برای خوب کار کردن برنامه باید درست شود.";
$lang['admin_warning'] = "هشدار, برنامه کار میکند.اما ممکن است برخی از خصیصه ها بدرستی عمل ننماید.";
$lang['admin_move_group'] = "انتقال به گروه:";
$lang['admin_move_select'] = "انتخاب گروه";

//
// Setup
//
$lang['admin_intro'] = "به حوزه پیکر بندی برنامه phpmyvisit خوش آمدید . شما می توانید تنظیمات مربوط به نصب و غیره را در این بخش انجام دهیدو در صورت داشتن هر گونه مشکلی به این لینک مراجعه کنید. %s مستندات phpMyVisites %s."; // link to the doc
$lang['admin_configetperso'] = "تنظیمات کلی";
$lang['admin_afficherjavascript'] = "نمایش کد آمار با جاوا اسکریپت";
$lang['admin_cookieadmin'] = "بازدید مدیریت از این صفحات در شمارش به حساب نمی آید.";
$lang['admin_ip_ranges'] = "عدم شمارش این دامنه آی پی هایدر آمارها";
$lang['admin_sitesenregistres'] = "سایت های ثبت شده:";
$lang['admin_retour'] = "بازگشت";
$lang['admin_cookienavigateur'] = "شما ممکن است که مدیریت را نخواهید در شمارش ها به حساب آورید. از طریق این گزینه می توانید آن را تنظیم کنید. این کار توسط کوکی ها و از طریق محتوای مرورگر تشخیص داده می شود و شما هر زمان که بخواهید می توانید آن را حذف کنید.";
$lang['admin_prendreencompteadmin'] = "به حساب آوردن مدیریت در شمارش ها (حذف کوکی ها)";
$lang['admin_nepasprendreencompteadmin'] = "عدم شمارش بازدید مدیریت (ایجاد یک کوکی)";
$lang['admin_etatcookieoui'] = "در حال حاضر بازدید مدیریت در شمارش ها به حساب می آید. شما می توانید برای جلوگیری از این کار از طریق لینک زیر عمل کنید.";
$lang['admin_etatcookienon'] = "در حال حاضر بازدید مدیریت در شمارش ها به حساب نمی آید. برای جلوگیری از این کار می توانید از طریق لینک زیر عمل کنید.";
$lang['admin_deleteconfirm'] = "آیا شما میخواهید  %s را حذف نمایید؟";
$lang['admin_sitedeletemessage'] = "<u>دقت کنید</u>: همه اطلاعات مربوط به این سایت حذف خواهد شد <br>این کار شما برگشت ناپذیر می باشد.";
$lang['admin_confirmyes'] = "بله, من میخوام آن را حذف نمایم";
$lang['admin_confirmno'] = "نه, من نمی خواهم آن را حذف نمایم";
$lang['admin_nonewsletter'] = "هیچ خبرنام ای برای این سایت پیدا نشد!";
$lang['admin_nopartner'] = "هیچ شریکی برای این سایت پیدا نشد!";
$lang['admin_get_question'] = "متغیر GET ثبت شود (متغیر آدرس ها)";
$lang['admin_get_a1'] = "ثبت متغیر همه آدرس ها";
$lang['admin_get_a2'] = "عدم ثبت متغیر هر آدرسی";
$lang['admin_get_a3'] = "ثبت فقط متغیر های مشخص شده";
$lang['admin_get_a4'] = "ثبت همه بجز متغیرهای مشخص شده";
$lang['admin_get_list'] = "نام متغیر ها (<b>;</b> جدا کننده لیست) <br/>مثال : %s";
$lang['admin_required'] = "%s مورد نیاز است.";
$lang['admin_title_required'] = "مورد نیاز است";
$lang['admin_write_dir'] = "دایرکتوری های قابل نوشتن";
$lang['admin_chmod_howto'] = "سطح دسترسی این دایرکتوری ها باید بر روی 777 تنظیم شود";
$lang['admin_optional'] = "اختیاری";
$lang['admin_memory_limit'] = "محدودیت حافظه";
$lang['admin_allowed'] = "اجازه داده شده";
$lang['admin_webserver'] = "وب سرور";
$lang['admin_server_os'] = "سیستم عامل سرور";
$lang['admin_server_time'] = "زمان سرور";
$lang['admin_legend'] = "فهرست راهنمای علامت ها:";
$lang['admin_error_url'] = "قالب آدرس باید صحیح وارد شود : %s (بدون اسلش در پایان)";
$lang['admin_url_n'] = "آدرس %s:";
$lang['admin_url_aliases'] = "آدرس های مستعار";
$lang['admin_logo_question'] = "لوگو نمایش داده شود؟";
$lang['admin_type_again'] = "(تایپ مجدد رمز ورود)";
$lang['admin_admin_mail'] = "ایمیل مدیریت کل";
$lang['admin_admin'] = "مدیریت کل";
$lang['admin_phpmv_path'] = "مسیر کامل به نصب برنامه";
$lang['admin_valid_email'] = "یک ایمیل معتبر را باید وارد نمایید";
$lang['admin_valid_pass'] = "رمز ورود باید حداقل 6 کاراکتر و ترکیبی از حرف و عدد باشد";
$lang['admin_match_pass'] = "رمز های ورود با هم تطبیق نمی کند";
$lang['admin_no_user_group'] = "هیچ کاربری در این گروه برای این سایت موجود نمی باشد";
$lang['admin_recorded_nl'] = "خبرنامه های ثبت شده:";
$lang['admin_recorded_partners'] = "شرکای ثبت شده:";
$lang['admin_recorded_users'] = "کاربران ثبت شده:";
$lang['admin_select_site_title'] = "یک سایت را انتخاب نمایید";
$lang['admin_select_user_title'] = "یک کاربر را وارد نمایید";
$lang['admin_no_user_registered'] = "هیچ کاربری ثبت نام نشده است!";
$lang['admin_configuration'] = "پیکربندی";
$lang['admin_general_conf'] = "پیکربندی کلی";
$lang['admin_group_title'] = "مدیرت گروهها";
$lang['admin_user_title'] = "مدیریت کاربر";
$lang['admin_user_add'] = "اضافه کردن کاربر";
$lang['admin_user_mod'] = "ویرایش کاربر";
$lang['admin_user_del'] = "حذف کاربر";
$lang['admin_server_info'] = "اطلاعات سرور";
$lang['admin_send_mail'] = "ارسال آمار توسط ایمیل";
$lang['admin_rss_feed'] = "آمار ها در قالب RSS feed";
$lang['admin_site_admin'] = "مدیریت سایت";
$lang['admin_site_add'] = "اضافه کردن سایت";
$lang['admin_site_mod'] = "ویرایش سایت";
$lang['admin_site_del'] = "حذف سایت";
$lang['admin_nl_add'] = "اضافه کردن خبرنامه";
$lang['admin_nl_mod'] = "ویرایش خبرنامه";
$lang['admin_nl_del'] = "حذف خبرنامه";
$lang['admin_partner_add'] = "اضافه کردن شریک";
$lang['admin_partner_mod'] = "ویرایش نام و آدرس شریک";
$lang['admin_partner_del'] = "حذف شریک";
$lang['admin_url_alias'] = "مدیریت آدرس های مستعار";
$lang['admin_group_admin_n'] = "مشاهده آمارها + سطح دسترسی مدیر";
$lang['admin_group_admin_d'] = "کاربران می توانند آمار سایت را ببیند و اطلاعات سایت را ویرایش کنند (نام, اضافه کردن کوکی ها, محروم کردن دامنه آی پی های , مدیریت آدرس های مستعار/شرکا/خبرنامه ها و ....)";
$lang['admin_group_view_n'] = "مشاهده آمارها";
$lang['admin_group_view_d'] = "کاربران فقط می تواننند آمار سایت را ببیننند.";
$lang['admin_group_noperm_n'] = "بدون دسترسی";
$lang['admin_group_noperm_d'] = "Users in this group don't have any permission to view statistics or edit information.";
$lang['admin_group_stitle'] = "You can edit user's groups by selecting the users you want to change, and then select a group in which you want to move the selected users.";
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
$lang['install_loginmysql'] = "نام کاربر بانک اطلاعاتی";
$lang['install_mdpmysql'] = "رمز ورود بانک اطلاعاتی";
$lang['install_serveurmysql'] = "سرور بانک اطلاعاتی";
$lang['install_basemysql'] = "نام بانک اطلاعاتی";
$lang['install_prefixetable'] = "پیشوند جدول ها";
$lang['install_utilisateursavances'] = "(کاربر پیشرفته اختیارات )";
$lang['install_oui'] = "بله";
$lang['install_non'] = "خیر";
$lang['install_ok'] = "قبول";
$lang['install_probleme'] = "مشکل: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "نام کاربری:";
$lang['install_mdpadmin'] = "رمز ورود:";
$lang['install_chemincomplet'] = "مسیر برنامه را مشخص کنید http://www.freedanload.com/rep1/rep3/phpmyvisites/  مثال <br>در پایان آن علامت / را قرار دهید";
$lang['install_afficherlogo'] = "این لوگو در صفحات شما نشان داده می شود %s <br />"; // %s replaced by the logo image
$lang['install_affichergraphique'] = "نمایش نمودارهای آماری";
$lang['install_valider'] = "قبول"; //  during installation and for login
$lang['install_popup_logo'] = "انتخاب یک لوگو";
$lang['install_logodispo'] = "....لوگوهای بیشتر ";
$lang['install_welcome'] = "خوش آمدید!";
$lang['install_system_requirements'] = "نیازمندی های سیستم";
$lang['install_database_setup'] = "نصب بانک اطلاعاتی";
$lang['install_create_tables'] = "ایجاد جدول";
$lang['install_general_setup'] = "نصب کلی";
$lang['install_create_config_file'] = "ایجاد فایل پیکربندی";
$lang['install_first_website_setup'] = "اضافه کردن وب سایت اول";
$lang['install_display_javascript_code'] = "نمایش کد جاوا";
$lang['install_finish'] = "پایان یافت!";
$lang['install_txt2'] = "در پایان نصب درخواستی مبنی بر کمک به  ما در ارائه بهتر برنامه برای استفاده کننگان فرستاده می شود.";
$lang['install_database_setup_txt'] = "اطلاعات بانک اطلاعاتی خود را در زیر واارد نمایید.";
$lang['install_general_config_text'] = "برنامه فقط یک مدیر می تواند داشته باشد که به تمام قسمت ها دسترسی کامل دارد. اطلاعات مربوط به مدیرت کل را وارد نمایید. سایر کاربران را می توانید بعدا اضافه نمایید.";
$lang['install_config_file'] = " اطلاعات مدیریت کل با موفقیت ثبت شد.";
$lang['install_js_code_text'] = "<p>برای شمارش بازدید کنندگان خود , شما باید کد جاوا را در همه یا یکی از صفحات خود وارد نمایید. </p><p> لزومی ندارد که صفحات سایت شما حتما با  PHP نوشته شده باشد, <strong>این برنامه با تمام زبان های برنامه نویسی تحت وب کار میکند.</strong> </p><p> کد مورد نظر در اینجا قرار دارد: </p>";
$lang['install_intro'] = "به نصب برنامه آمارگیر phpMyVisites فارسی خوش آمدید."; 
$lang['install_intro2'] = "فرایند نصب در  %s مرحله و به سادگی در 10 دقیقه انجام میگیرد.";
$lang['install_next_step'] = "رفتن به مرحله بعدی";
$lang['install_status'] = "وضعیت نصب";
$lang['install_done'] = "نصب %s%% پایان یافت"; // Install 25% complete
$lang['install_site_success'] = "سایت با موفقیت ایجاد شد!";
$lang['install_site_info'] = "اطلاعات مربوط به اولین سایتی که میخواهید از آن آ»رگیری انجام شود را وارد نمایید.";
$lang['install_go_phpmv'] = "برو به phpMyVisites!";
$lang['install_congratulation'] = "تبریک میگم! برنامه با موفقیت نصب شد.";
$lang['install_end_text'] = "مطمئن شوید که کد جاوا را در صفحات خود قرار داده اید و منتظر اولین بازدید کننده از سایت خود باشید!";
$lang['install_db_ok'] = "اتصال به بانک اطلاعاتی انجام شد!";
$lang['install_table_exist'] = "جداول بانک اطلاعاتی قبلا ایجاد شده اند.";
$lang['install_table_choice'] = "Either choose to reuse the existing database tables or select a clean install to erase all existing data in the database.";
$lang['install_table_erase'] = "پاک کردن همه جدول ها (مواظب باشید!)";
$lang['install_table_reuse'] = "استفاده مجدد از جدول ها";
$lang['install_table_success'] = "جدول ها با موفقیت ایجاد شدند!";
$lang['install_send_mail'] = "آیا میخواهید در پایان هر روز اطلاعات آماری سایت شما برایتان ایمیل شود؟";

//
// Update Step
//
$lang['update_title'] = "به روزرسانی";
$lang['update_subtitle'] = "نسخه جدیدی از برنامه پیدا شده است.";
$lang['update_versions'] = "نسخه جاری شما %s می باشد و ما آن رابه نسخه  %s ارتقاء می دهیم.";
$lang['update_db_updated'] = "بانک اطلاعاتی شما با موفقیت بروزرسانی شد!";
$lang['update_continue'] = "ادامه";
$lang['update_jschange'] = "خطر! <br /> کد جاوا اسکریپت phpMyVisites ویرایش شده است. شما باید صفحاتتان را بروزرسانی کنید و کد جاوا اسکریپت جدید را برای تمام سایت های پیکربندی شده copy/paste نمایید. <br />";

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
$lang['moistab']['01'] = "ژانویه";
$lang['moistab']['02'] = "فوریه";
$lang['moistab']['03'] = "مارس";
$lang['moistab']['04'] = "آوریل";
$lang['moistab']['05'] = "می";
$lang['moistab']['06'] = "ژوئن";
$lang['moistab']['07'] = "جولای";
$lang['moistab']['08'] = "آگوست";
$lang['moistab']['09'] = "سپتامبر";
$lang['moistab']['10'] = "اکتبر";
$lang['moistab']['11'] = "نوامبر";
$lang['moistab']['12'] = "دسامبر";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "ژانویه";
$lang['moistab_graph']['02'] = "فوریه";
$lang['moistab_graph']['03'] = "مارس";
$lang['moistab_graph']['04'] = "آوریل";
$lang['moistab_graph']['05'] = "می";
$lang['moistab_graph']['06'] = "ژوئن";
$lang['moistab_graph']['07'] = "جولای";
$lang['moistab_graph']['08'] = "آگوست";
$lang['moistab_graph']['09'] = "سپتامبر";
$lang['moistab_graph']['10'] = "اکتبر";
$lang['moistab_graph']['11'] = "نوامبر";
$lang['moistab_graph']['12'] = "دسامبر";

// Day of the week
$lang['jsemaine']['Mon'] = "دوشنبه";
$lang['jsemaine']['Tue'] = "سه شنبه";
$lang['jsemaine']['Wed'] = "چهارشنبه";
$lang['jsemaine']['Thu'] = "پنجشنبه";
$lang['jsemaine']['Fri'] = "جمعه";
$lang['jsemaine']['Sat'] = "شنبه";
$lang['jsemaine']['Sun'] = "یکشنبه";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "دوشنبه";
$lang['jsemaine_graph']['Tue'] = "سه شنبه";
$lang['jsemaine_graph']['Wed'] = "چهارشنبه";
$lang['jsemaine_graph']['Thu'] = "پنجشنبه";
$lang['jsemaine_graph']['Fri'] = "جمعه";
$lang['jsemaine_graph']['Sat'] = "شنبه";
$lang['jsemaine_graph']['Sun'] = "یکشنبه";

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
$lang['eur'] = "اروپا";
$lang['afr'] = "آفریقا";
$lang['asi'] = "آسیا";
$lang['ams'] = "امریکای مرکزی و جنوبی";
$lang['amn'] = "امریکای شمالی";
$lang['oce'] = "اقیانوسیه";

// Oceans
$lang['oc_pac'] = "اقیانوس آرام";
$lang['oc_atl'] = "اقیانوس اطلس";
$lang['oc_ind'] = "اقیانوس هند";

// Countries
$lang['domaines'] = array(
    "xx" => "ناشناخته",
    "ac" => "جزیره عیسی",
    "ad" => "آندورا",
    "ae" => "امارات متحده عربی",
    "af" => "افغانستان",
    "ag" => "Antigua and Barbuda",
    "ai" => "Anguilla",
    "al" => "آلبانی",
    "am" => "ارمنستان",
    "an" => "هلند",
    "ao" => "آنگولا",
    "aq" => "Antarctica",
    "ar" => "آرژانتین",
    "as" => "آمریکا",
    "at" => "اطریش",
    "au" => "استرالیا",
    "aw" => "Aruba",
    "az" => "آذزبایجان",
    "ba" => "بوسنی و هرزگوین",
    "bb" => "باربادوس",
    "bd" => "بنگلادش",
    "be" => "بلژیک",
    "bf" => "بورکینا فاسو",
    "bg" => "بلغارستان",
    "bh" => "بحرین",
    "bi" => "بروندی",
    "bj" => "Benin",
    "bm" => "برمودا",
    "bn" => "Bruneo",
    "bo" => "بولیوی",
    "br" => "برزیل",
    "bs" => "باهاماس",
    "bt" => "Bhutan",
    "bv" => "Bouvet Island",
    "bw" => "یوتسوانا",
    "by" => "روسیه سفید",
    "bz" => "Belize",
    "ca" => "کانادا",
    "cc" => "کاکاس",
    "cd" => "کنگو",
    "cf" => "جمهوری افریقای مرکزی",
    "cg" => "کنگو",
    "ch" => "سوئیس",
    "ci" => "Cote D'Ivoire",
    "ck" => "جزایر کوک",
    "cl" => "شیبی",
    "cm" => "کامرون",
    "cn" => "چین",
    "co" => "کلمبیا",
    "cr" => "کاستاریکا",
	"cs" => "Serbia Montenegro",
    "cu" => "کوبا",
    "cv" => "دماغه وردا",
    "cx" => "جزایر عید نوروز",
    "cy" => "قبرس",
    "cz" => "چکسلواکی",
    "de" => "آلمان",
    "dj" => "دیجیبوتی",
    "dk" => "دانمارک",
    "dm" => "دومینیک",
    "do" => "جمهوری دومینیک",
    "dz" => "الجزایر",
    "ec" => "اکوادور",
    "ee" => "استونی",
    "eg" => "مصر",
    "eh" => "صحرای غربی",
    "er" => "ادیتره",
    "es" => "اسپانیا",
    "et" => "اتیوپی",
    "fi" => "فنلاند",
    "fj" => "فیجی",
    "fk" => "Falkland Islands (Malvinas)",
    "fm" => "Micronesia, Federated States of",
    "fo" => "جزیره فارائو",
    "fr" => "فرانسه",
    "ga" => "گابن",
    "gd" => "Grenada",
    "ge" => "گرجستان",
    "gf" => "گوین",
    "gg" => "Guernsey",
    "gh" => "غنا",
    "gi" => "جبل طارق",
    "gl" => "گرینلند",
    "gm" => "گامبیا",
    "gn" => "گینه",
    "gp" => "گوادلوپ",
    "gq" => "گینه استوایی",
    "gr" => "یونان",
    "gs" => "گرجستان جنوبی",
    "gt" => "گواتمالا",
    "gu" => "گوام",
    "gw" => "Guinea-Bissau",
    "gy" => "گویانا",
    "hk" => "هنگ کنگ",
    "hm" => "جزیره مک دونالد",
    "hn" => "هندوراس",
    "hr" => "کرواسی",
    "ht" => "هاییتی",
    "hu" => "هنگاری",
    "id" => "اندونزی",
    "ie" => "ایرلند",
    "il" => "اسرائیل",
    "im" => "Man Island",
    "in" => "هند",
    "io" => "سرزمین اقیاونسی هند",
    "iq" => "عراق",
    "ir" => "جمهوری اسلامی ایران",
    "is" => "ایسلند",
    "it" => "ایتالیا",
    "je" => "جرسی",
    "jm" => "جامائیکا",
    "jo" => "اردن",
    "jp" => "ژاپن",
    "ke" => "کنیا",
    "kg" => "قرقیزستان",
    "kh" => "کامبودیا",
    "ki" => "کیریباتی",
    "km" => "کامرون",
    "kn" => "Saint Kitts and Nevis",
    "kp" => "جمهوری دموکراتیک کره",
    "kr" => "جمهوری کره",
    "kw" => "کویت",
    "ky" => "جزیره سوسمار",
    "kz" => "قزاقستان",
    "la" => "لائوس",
    "lb" => "لبنان",
    "lc" => "Saint Lucia",
    "li" => "Liechtenstein",
    "lk" => "سریلانکا",
    "lr" => "لیبری",
    "ls" => "لوسوتو",
    "lt" => "لیتوانی",
    "lu" => "لوکزامبورگ",
    "lv" => "لتویا",
    "ly" => "لیبی",
    "ma" => "مراکش",
    "mc" => "موناکو",
    "md" => "مولدوا",
    "mg" => "مادگاسکار",
    "mh" => "جزایر مارشال",
    "mk" => "مقدونیه",
    "ml" => "مالی",
    "mm" => "میانمار",
    "mn" => "مغولستان",
    "mo" => "ماکائو",
    "mp" => "جزایر مارینای شمالی",
    "mq" => "Martinique",
    "mr" => "موریتانی",
    "ms" => "مونتسرات",
    "mt" => "مالت",
    "mu" => "ماریتائوس",
    "mv" => "مالدیو",
    "mw" => "مالاوی",
    "mx" => "مکزیک",
    "my" => "مالزی",
    "mz" => "موزامبک",
    "na" => "نامیبیا",
    "nc" => "New Caledonia",
    "ne" => "نیچریه",
    "nf" => "Norfolk Island",
    "ng" => "نیجریه",
    "ni" => "نیکاراگوئه",
    "nl" => "هلند",
    "no" => "نروژ",
    "np" => "نپال",
    "nr" => "نائورا",
    "nu" => "Niue",
    "nz" => "نیوزیلند",
    "om" => "عمان",
    "pa" => "پاناما",
    "pe" => "پرو",
    "pf" => "French Polynesia",
    "pg" => "گینه جدید",
    "ph" => "Philippines",
    "pk" => "پاکستان",
    "pl" => "لهستان",
    "pm" => "Saint Pierre and Miquelon",
    "pn" => "Pitcairn",
    "pr" => "پرو",
	"ps" => "Palestinian Territory",
    "pt" => "پرتغال",
    "pw" => "پالائو",
    "py" => "پاراگوئه",
    "qa" => "قطر",
    "re" => "Reunion Island",
    "ro" => "رومانی",
    "ru" => "روسیه فدرال",
    "rs" => "روسیه",
    "rw" => "روندا",
    "sa" => "عربستان سعودی",
    "sb" => "Solomon Islands",
    "sc" => "Seychelles",
    "sd" => "سودان",
    "se" => "سودان",
    "sg" => "سنگاپور",
    "sh" => "Saint Helena",
    "si" => "اسلوونی",
    "sj" => "Svalbard",
    "sk" => "اسلواکی",
    "sl" => "Sierra Leone",
    "sm" => "سن مارینو",
    "sn" => "سنگال",
    "so" => "سومالی",
    "sr" => "سورینام",
    "st" => "Sao Tome and Principe",
    "su" => "Old U.R.S.S.",
    "sv" => "السالوادور",
    "sy" => "جمهوری سوریه",
    "sz" => "سوئیس",
    "tc" => "Turks and Caicos Islands",
    "td" => "چاد",
    "tf" => "French Southern Territories",
    "tg" => "توگو",
    "th" => "تایلند",
    "tj" => "تاجیکستان",
    "tk" => "Tokelau",
    "tm" => "ترکمنستان",
    "tn" => "تونس",
    "to" => "Tonga",
    "tp" => "تیمور شرقی",
    "tr" => "ترکیه",
    "tt" => "ترینیداد",
    "tv" => "تاوالو",
    "tw" => "تایوان",
    "tz" => "جمهوری تانزانیا",
    "ua" => "اوکراین",
    "ug" => "اوگاندا",
    "uk" => "انگلیس",
    "gb" => "بریتانیای کبیر",
    "um" => "جزایر دور افتاده ایالات متحده امریکا",
    "us" => "ایالات متحده امریکا",
    "uy" => "اروگوئهُ",
    "uz" => "ازبکستان",
    "va" => "واتیکان",
    "vc" => "Saint Vincent and the Grenadines",
    "ve" => "ونزوئلا",
    "vg" => "جزیره ویرجینای انگلیس",
    "vi" => "جزیره ویرجینای آمریکا",
    "vn" => "ویتنام",
    "vu" => "Vanuatu",
    "wf" => "والیس و فوتونا",
    "ws" => "ساموا",
    "ye" => "یمن",
    "yt" => "مایوتا",
    "yu" => "یوگسلاوی",
    "za" => "افریقای جنوبی",
    "zm" => "زامبیا",
    "zr" => "زئیر",
    "zw" => "زیمباوه",
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
    "tv" => "تاوالو",
    "ws" => "ساموا",
);
?>