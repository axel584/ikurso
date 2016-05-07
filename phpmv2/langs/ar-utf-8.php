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
$lang['auteur_nom'] = "من تعريب دليل عز"; // Translator's name
$lang['auteur_email'] = "info(@)3z.cc"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "rtl"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "ar"; // iso language code
$lang['lang_libelle_en'] = "Arabic"; // arabic language name
$lang['lang_libelle_fr'] = "Arabe"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = ''; // three thousand spells 3,000 in english
$lang['separateur_decimaux'] = '.'; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "إحصائيات تفصيلية"; // Pages header's title
$lang['head_keywords'] = ""; // Header keywords
$lang['head_description'] = ""; // Header description
$lang['logo_description'] = ""; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "الزيارات";
$lang['menu_pagesvues'] = "الصفحات";
$lang['menu_suivi'] = "المتابعة";
$lang['menu_provenance'] = "معلومات الزوار";
$lang['menu_configurations'] = "الإعدادات";
$lang['menu_affluents'] = "التحويلات";
$lang['menu_listesites'] = "قائمة المواقع";
$lang['menu_bilansites'] = "الخلاصة";
$lang['menu_jour'] = "اليوم";
$lang['menu_semaine'] = "الاسبوع";
$lang['menu_mois'] = "الشهر";
$lang['menu_annee'] = "السنة";
$lang['menu_periode'] = "توقيت الاحصائية: %s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "الموقع الرسمي";
$lang['liens_admin'] = "الإدارة";
$lang['liens_contacts'] = "إتصل بنا";

//
// Divers
//
$lang['generique_nombre'] = "العدد";
$lang['generique_tauxsortie'] = "نسبة الخروج";
$lang['generique_ok'] = "حسناً";
$lang['generique_timefooter'] = "مدة تحميل الصفحة هي %s ثواني"; // Time in seconds
$lang['generique_divers'] = "الآخرون"; // (for the graphs)
$lang['generique_inconnu'] = "غير معروف"; // (for the graphs)
$lang['generique_vous'] = "... أنت ?";
$lang['generique_traducteur'] = "المترجم";
$lang['generique_langue'] = "اللغة";
$lang['generique_autrelangure'] = "آخر?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "لايوجد زوار في هذهِ الفترة.";
$lang['generique_aucune_visite_bdd'] = "<b>خطر ! </b> لايوجد لديك اي سجل للزوار في قاعدة البيانات لذلك يرجى منك التأكد من طريقة التركيب.";
$lang['generique_aucune_site_bdd'] = "لايوجد اي موقع مسجل في القاعدة لذلك يرجى منك الدخول كا مستخدم للسكربت واضافة رابط موقع.";
$lang['generique_retourhaut'] = "للأعلى";
$lang['generique_tempsvisite'] = "%smin %ss"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%sh"; // 4h means 4 hours
$lang['generique_siteno'] = "موقع %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "نشرة الأخبار %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "موقع شريك %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "عام";
$lang['generique_user'] = "مستخدم %s"; // User "Admin"
$lang['generique_previous'] = "السابق";
$lang['generique_next'] = "التالي";
$lang['generique_lowpop'] = "استثن سكان احصائياتهم قليلة";
$lang['generique_allpop'] = "تضمن كل السكان في الأحصائيات";
$lang['generique_to'] = "الى"; // 4 'to' 8
$lang['generique_total_on'] = "على"; // 4 to 8 'on' 10
$lang['generique_total'] = "المجموع"; // 4 to 8 'on' 10
$lang['generique_information'] = "المعلومات";
$lang['generique_done'] = "تم!";
$lang['generique_other'] = "آخر";
$lang['generique_description'] = "الوصف:";
$lang['generique_name'] = "الأسم:";
$lang['generique_variables'] = "المتغيرات";
$lang['generique_logout'] = "خروج";
$lang['generique_login'] = "دخول";
$lang['generique_hits'] = "الزيارات";
$lang['generique_errors'] = "الأخطاء";
$lang['generique_site'] = "الموقع";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "الرقم السري: "; // lowercase
$lang['login_login'] = "دخول: "; // lowercase
$lang['login_error'] = "فضلاً المستخدم او الرقم السري خاطئ يرجى اعادة المحاولة.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "يرجى ادخال بيانات الدخول %sphpMyVisites%s فضلاً المنطقة محمية.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "اتصال";
$lang['contacts_langue'] = "قسم الترجمة";
$lang['contacts_merci'] = "شكراً";
$lang['contacts_auteur'] = "المبرمج, وثيقة, وخالق مشروع phpMyVisites <strong>سعود soud www.3z.cc </strong>.";
$lang['contacts_questions'] = "لـ <strong>اسألة تقنية, يبلغ عن bugs, إقتراحات</strong> الرجال استخدام منتديات الموقع الرسمي %s. للطلبات الاخرى, الرجاء الاتصال بالمبرمج وهو الموقع الرسمي."; // adresse du site
$lang['contacts_trad1'] = "هل تريد ترجمة لـphpMyVisites الى لغتك? لاتتردد <strong>phpMyVisites تحتاجك الآن!</strong>";
$lang['contacts_trad2'] = "ترجمة phpMyVisites تحتاج الى خبرة ومعرفة قوية في اللغة (وتأخذ من وقتك مجرد ساعات بسيطة)  <strong>اذ كنت تريد الترجمة يمكنك ان تجد كل ماتحتاجة في</strong>. phpMyVisites %s."; // Documentation link
$lang['contacts_doc'] = "Don't hesitate to consult %s the official documentation of phpMyVisites %s which will give you plenty of information on installation, configuration, and the functionality of phpMyVisites. It is available in your version of phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Thank you <strong>%s</strong>, co-developers of phpMyVisites, for their high quality work on the project.";
$lang['contacts_merci3'] = "Don't hesitate to consult the acknowledgments page on the official website to get a complete list of phpMyVisites friends.";
$lang['contacts_merci2'] = "A big thank you to all those who shared their culture while contributing to the translation of phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "موقع %s الى %s"; // Site MyHomePage on Sunday 29
$lang['rss_go'] = "إذهب الى الاحصائيات المفصلة";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "معلومات الزائر";
$lang['visites_statistiques'] = "الإحصائيات";
$lang['visites_periodesel'] = "لـ الفترة المختارة";
$lang['visites_visites'] = "الزيارات";
$lang['visites_uniques'] = "الزوار";
$lang['visites_pagesvues'] = "الصفحات المشاهدة";
$lang['visites_pagesvisiteurs'] = "صفحات لكل زائر";
$lang['visites_pagesvisites'] = "صفحات لكل زيارة";
$lang['visites_pagesvisitessign'] = "صفحات لكل زيارة هامة";
$lang['visites_tempsmoyen'] = "مدة الزيارات المتوسطة";
$lang['visites_tempsmoyenpv'] = "مدة التواجد في الصفحة";
$lang['visites_tauxvisite'] = "1 نسبة زيارة صفحة ";
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "خلاصات الفترة";
$lang['visites_nbvisites'] = "الزيارات";
$lang['visites_aucunevivisite'] = "لا زيارة"; // in the table, must be short
$lang['visites_recap'] = "الخلاصة";
$lang['visites_unepage'] = "1 صفحة"; // (graph)
$lang['visites_pages'] = "%s صفحات"; // 1-2 pages (graph)
$lang['visites_min'] = "%smin"; // 10-15 min (graph)
$lang['visites_sec'] = "%ss"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "خلاصة الاحصائيات";
$lang['visites_grapghrecaplongterm'] = "مثّل برسم بياني عرض الإحصائيات على مدى البعيد";
$lang['visites_graphtempsvisites'] = "مثّل برسم بياني عرض مدد الزيارات بواسطة زائر";
$lang['visites_graphtempsvisitesimg'] = "مدة الزيارات من قبل الزائر";
$lang['visites_graphheureserveur'] = "مثّل برسم بياني عرض زيارات بالساعة";
$lang['visites_graphheureserveurimg'] = "زيارات بالساعات على حسب الخادم";
$lang['visites_graphheurevisiteur'] = "مثّل برسم بياني عرض زيارات بالساعة للزائر";
$lang['visites_graphheurelocalimg'] = "زيارات بالوقت المحلي";
$lang['visites_longterm_statd'] = "تحليل كامل على المدى البعيد";
$lang['visites_longterm_statm'] = "تحليل كامل شهري وعلى المدى البعيد";

//
// Sites Summary
//
$lang['summary_title'] = "خلاصة الموقع";
$lang['summary_stitle'] = "الخلاصة";

//
// Frequency Part
//
$lang['frequence_titre'] = "زيارات متكررة";
$lang['frequence_nouveauxconnusgraph'] = "مثّل برسم بياني إظهار زيارات جديدة";
$lang['frequence_nouveauxconnus'] = "زيارات جديدة";
$lang['frequence_titremenu'] = "التردد";
$lang['frequence_visitesconnues'] = "عودة الزيارات";
$lang['frequence_nouvellesvisites'] = "الزيارات الجديدة";
$lang['frequence_visiteursconnus'] = "عودة الزوار";
$lang['frequence_nouveauxvisiteurs'] = "الزوار الجدد";
$lang['frequence_returningrate'] = "عودة النسبة";
$lang['pagesvues_vispervisgraph'] = "مثّل برسم بياني عرض عدد الزيارات بزائر";
$lang['frequence_vispervis'] = "عدد الزيارات لكل زائر";
$lang['frequence_vis'] = "الزيارة";
$lang['frequence_visit'] = "زيارة 1"; // (graph)
$lang['frequence_visits'] = "%s الزيارات"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "معلومات مشاهدة الصفحات";
$lang['pagesvues_joursel'] = "يوم مختار";
$lang['pagesvues_jmoins7'] = "يوم - 7";
$lang['pagesvues_jmoins14'] = "يوم - 14";
$lang['pagesvues_moyenne'] = "(المعدل)";
$lang['pagesvues_pagesvues'] = "مشاهدات الصفحة";
$lang['pagesvues_pagesvudiff'] = "مشاهدة صفحة وحيدة";
$lang['pagesvues_recordpages'] = "العدد الاعلى للصفحات للزائر الواحد";
$lang['pagesvues_tabdetails'] = "الصفحات والمجموعات المشاهدة";
$lang['pagesvues_graphsnbpages'] = "رسم بياني يظهر عدد الزوار لكل صفحة في الموقع";
$lang['pagesvues_graphnbvisitespageimg'] = "زيارات لكل صفحة من قبل الزوار";
$lang['pagesvues_graphheureserveur'] = "مثّل برسم بياني عرض زيارات بواسطةالوقت";
$lang['pagesvues_graphheureserveurimg'] = "زيارات بوقت الخادم";
$lang['pagesvues_graphheurevisiteur'] = "مثّل برسم بياني عرض زيارات بواسطة توقيت محلّي";
$lang['pagesvues_graphpageslocalimg'] = "زيارات بالوقت المحلي";
$lang['pagesvues_tempsparpage'] = "مدة البقاء في الصفحة";
$lang['pagesvues_total_time'] = "مجموع الوقت";
$lang['pagesvues_avg_time'] = "الوقت المتوسط";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "حركة الزائر";
$lang['suivi_pageentree'] = "دخول الصفحات";
$lang['suivi_pagesortie'] = "الخروج من الصفحات";
$lang['suivi_tauxsortie'] = "نسبة الخروج";
$lang['suivi_pageentreehits'] = "دخول الزيارات";
$lang['suivi_pagesortiehits'] = "خروج الزيارات";
$lang['suivi_singlepage'] = "زيارات صفحات منفردة";

//
// Origin
//
$lang['provenance_titre'] = "دول الزوار";
$lang['provenance_recappays'] = "خلاصة الدول";
$lang['provenance_pays'] = "الدول";
$lang['provenance_paysimg'] = "خارطة الزوار بواسطة الدول";
$lang['provenance_fai'] = "مزودو خدمات الانترنت";
$lang['provenance_nbpays'] = "عدد الدول المختلفة : %s";
$lang['provenance_provider'] = "مستخدمون"; // must be short
$lang['provenance_continent'] = "القارة";
$lang['provenance_mappemonde'] = "خريطة العالم";
$lang['provenance_interetspays'] = "احصائيات افضل الدول زيارة";

//
// Setup
//
$lang['configurations_titre'] = "أماكن الزوار";
$lang['configurations_os'] = "أنظمة التشغيل";
$lang['configurations_osimg'] = "مثّل برسم بياني إظهار أنظمة التشغيل زوّار";
$lang['configurations_navigateurs'] = "المتصفحات";
$lang['configurations_navigateursimg'] = "مثّل برسم بياني إظهار متصفحات الزوار";
$lang['configurations_resolutions'] = "دقة الشاشة";
$lang['configurations_resolutionsimg'] = "مثّل برسم بياني إظهار دقة الشاشة لدى الزوار";
$lang['configurations_couleurs'] = "الوان الشاشة";
$lang['configurations_couleursimg'] = "مثّل برسم بياني إظهار الوان الشاشة لدى الزوار";
$lang['configurations_rapport'] = "اوضاع الشاشة لدة الزوار";
$lang['configurations_large'] = "الشاشة العريضة";
$lang['configurations_normal'] = "الوضع الطبيعي";
$lang['configurations_double'] = "الشاشة الثنائية";
$lang['configurations_plugins'] = "الإضافات";
$lang['configurations_navigateursbytype'] = "أنواع المتصفحات";
$lang['configurations_navigateursbytypeimg'] = "مثّل برسم بياني إظهار انواع المتصفحات";
$lang['configurations_os_interest'] = "أنواع انظمة التشغيل";
$lang['configurations_navigateurs_interest'] = "أنواع المتصفحات";
$lang['configurations_resolutions_interest'] = "أنواع دقة الشاشة";
$lang['configurations_couleurs_interest'] = "الوان شاشة الزوار";
$lang['configurations_configurations'] = "أفضل اعدادات الزوار";

//
// Referers
//
$lang['affluents_titre'] = "التحويلات";
$lang['affluents_recapimg'] = "أنواع تحويلات الزوار";
$lang['affluents_directimg'] = "مباشرة";
$lang['affluents_sitesimg'] = "من مواقع اخرى";
$lang['affluents_moteursimg'] = "محركات بحث";
$lang['affluents_referrersimg'] = "التحويلات";
$lang['affluents_moteurs'] = "محركات البحث";
$lang['affluents_nbparmoteur'] = "عدد الزوار من محركات البحث : %s";
$lang['affluents_aucunmoteur'] = " لا زيارات من محركات البحث.";
$lang['affluents_motscles'] = "كلمات مفتاحية";
$lang['affluents_nbmotscles'] = "أفضل الكلمات المفتاحية : %s";
$lang['affluents_aucunmotscles'] = "لايوجد كلمات مفتاحية.";
$lang['affluents_sitesinternet'] = "تحويلات المواقع";
$lang['affluents_nbautressites'] = "عدد الزيارات من مواقع اخرى : %s";
$lang['affluents_nbautressitesdiff'] = "عدد المواقع التي دخل الزوار منها : %s";
$lang['affluents_aucunautresite'] = "لا زيارات من مواقع اخرى.";
$lang['affluents_entreedirecte'] = "الدخول المباشر";
$lang['affluents_nbentreedirecte'] = "زيارات الدخول المباشر : %s";
$lang['affluents_nbpartenaires'] = "زيارات اتت من قبل مواقع شريكة : %s";
$lang['affluents_aucunpartenaire'] = "لايوجد زيارات من مواقع شريكة.";
$lang['affluents_nbnewsletters'] = "زيارات من قبل نشرات أخبار : %s";
$lang['affluents_aucunnewsletter'] = "لازيارات من قبل نشرات أخبار.";
$lang['affluents_details'] = "التفاصيل";
$lang['affluents_interetsmoteurs'] = "أفضل محركات البحث التي يأتي منها الزوار";
$lang['affluents_interetsmotscles'] = "أفضل الكلمات المفتاحية";
$lang['affluents_interetssitesinternet'] = "أفضل المواقع التي يأتي منها الزوار";
$lang['affluents_partenairesimg'] = "شركاء";
$lang['affluents_partenaires'] = "شركاء";
$lang['affluents_interetspartenaires'] = "أفضل الشركاء";
$lang['affluents_newslettersimg'] = "نشرات أخبار";
$lang['affluents_newsletters'] = "نشرات أخبار";
$lang['affluents_interetsnewsletters'] = "أفضل الزيارات التي تأتي من الشركاء";
$lang['affluents_type'] = "أنواع التحويلات";
$lang['affluents_interetstype'] = "أفضل أنواع الزيارات التحويلية";

//
// Summary
//
$lang['purge_titre'] = "خلاصة الزيارات والتحويلات";
$lang['purge_intro'] = "بهذي الفترة ازيلة من الادارة , فقط الإحصائيات الضرورية أبقت.";
$lang['admin_purge'] = "صيانة قاعدة البيانات";
$lang['admin_purgeintro'] = "هذا القسمِ يَتْركُك تُديرُ المناضدَ مستعملة من قبل phpMyVisites. أنت يُمْكِنُ أَنْ تَرى سعةَ القرص مستعملة من قبل المناضدِ، يُحسّنُهم، أَو يُزيلونَ سجلاتَ قديمةَ. هذا سَيُمكّنُك لتَحديد حجمِ المناضدِ في قاعدةِ بياناتكَ.";
$lang['admin_optimisation'] = "تحقيق أمثلية للـ [ %s ]..."; // Tables names
$lang['admin_postopt'] = "الحجم الكلي نقص من قبل %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "خطوة بعد فترات: %s";
$lang['admin_purge_fini'] = "مناضد الحَذْف المُنهيةِ...";
$lang['admin_bdd_nom'] = "الإسم";
$lang['admin_bdd_enregistrements'] = "السجلات";
$lang['admin_bdd_taille'] = "حجم منضدةِ";
$lang['admin_bdd_opt'] = "حَسّنْ";
$lang['admin_bdd_purge'] = "معايير حملةِ تطهير";
$lang['admin_bdd_optall'] = "حَسّنْ كُلّ";
$lang['admin_purge_j'] = "تُسجّلُ الخطوةُ أقدمُ مِنْ %s أيام";
$lang['admin_purge_s'] = "تُسجّلُ الخطوةُ أقدمُ مِنْ %s أسابيع";
$lang['admin_purge_m'] = "تُسجّلُ الخطوةُ أقدمُ مِنْ %s شهور";
$lang['admin_purge_y'] = "تُسجّلُ الخطوةُ أقدمُ مِنْ %s سنين";
$lang['admin_purge_logs'] = "أزلْ كُلّ السجلات";
$lang['admin_purge_autres'] = "طهّرْ شائع عند المنضدة '%s'";
$lang['admin_purge_none'] = "لا عملَ محتملَ";
$lang['admin_purge_cal'] = "إحسبْ وطهّرْ (هذه يُمْكِنُ أَنْ تَأْخذَ بضعة دقائق)";
$lang['admin_alias_title'] = "أسماء شهرة موقعِ ويب وروابط";
$lang['admin_partner_title'] = "مواقع شركاء";
$lang['admin_newsletter_title'] = "مواقع نشرات أخبار";
$lang['admin_ip_exclude_title'] = "يَتراوحُ عنوان آي بي للإسْتِثْناء مِنْ الإحصائياتِ";
$lang['admin_name'] = "الإسم:";
$lang['admin_error_ip'] = "آي بي يَجِبُ أَنْ يَكُونَ في الصيغةِ الصحيحةِ: %s";
$lang['admin_site_name'] = "إسم الموقع";
$lang['admin_site_url'] = "حدّدْ رابط موقع الرئيسي";
$lang['admin_db_log'] = "حاولْ الإتِّصال كمستعمل phpMyVisites الممتاز لتَغيير أماكنِ قاعدةِ البيانات.";
$lang['admin_error_critical'] = "خطأ, مَنْ الضَّرُوري أَنْ يُصلّحَ لphpMyVisites للعَمَل.";
$lang['admin_warning'] = "خطر, phpMyVisites سَيَعْملُ بشكل صحيح لكن لَرُبَّمَا بَعْض الميزّاتِ الإضافيةِ لَنْ تعمل.";
$lang['admin_move_group'] = "حرك هذي المجموعة:";
$lang['admin_move_select'] = "أخد هذي المجموعة";

//
// Setup
//
$lang['admin_intro'] = "مرحباً بكم في منطقةِ ترتيبِ phpMyVisites. أنت يُمْكِنُ أَنْ تُعدّلَ كُلّ المعلومات التي تَتعلّقُ بتركيبِكِ. إذا عِنْدَكَ أيّ مشاكل ثمّ لا تَتردّدُ في إسْتِشارة %s التوثيق الرسمي لphpMyVisites"; // link to the doc
$lang['admin_configetperso'] = "إعدادات عامة";
$lang['admin_afficherjavascript'] = "شاهد كود جافا الاحصائيات";
$lang['admin_cookieadmin'] = "لا تَحْسبْ المديرَ ضمن إحصائياتِ (كوكي)";
$lang['admin_ip_ranges'] = "لا تَحْسبْ آي بي / يَتراوحُ آي بي في الإحصائياتِ";
$lang['admin_sitesenregistres'] = "مواقع الويب المسجّلة:";
$lang['admin_retour'] = "الرجوع";
$lang['admin_cookienavigateur'] = "أنت قَدْ تَستثنى Adminstrator مِنْ الإحصائياتِ. هذه الطريقةِ كوكيز إستندتْ وهذا الخيارِ سَيَعْملُ فقط بهذا المتصفّحِ الحاليِ. أنت يُمْكِنُ أَنْ تُغيّرَ هذا الخيارِ في أي وقت كان.";
$lang['admin_prendreencompteadmin'] = "إحسبْ المديرَ ضمن إحصائياتِ (يَحْذفُ الكوكي)";
$lang['admin_nepasprendreencompteadmin'] = "لا تَحْسبْ في المديرِ ضمن إحصائياتِ (يَخْلقُ a كوكي)";
$lang['admin_etatcookieoui'] = "إنّ المديرَ مَحْسُوبُ ضمن إحصائياتِ لهذا موقعِ الويب (هذا الترتيبُ الأصليُ، أنت مُعتَبَر كa زائر طبيعي)";
$lang['admin_etatcookienon'] = "أنت لَمْ تُحْسَبْ ضمن إحصائياتِ لهذا موقعِ الويب (زياراتكَ لَنْ تُحْسَبُ لهذا موقعِ الويب)";
$lang['admin_deleteconfirm'] = "رجاءً أَكّدْ بأنّك تُريدُ الحَذْف %s?";
$lang['admin_sitedeletemessage'] = "رجاءً <u>كن حذراً جداً</u>: كُلّ البيانات إرتبطتْ بذلك الموقعِ سَيَحْذفُ <br> وهناك لَنْ يكون على أية حال تَعويض خسارةِ البياناتَ.";
$lang['admin_confirmyes'] = "نعم, أريد حذفة";
$lang['admin_confirmno'] = "لا,لا اريد حذفة";
$lang['admin_nonewsletter'] = "لا نشرةَ أخبار وَجدتْ لهذا الموقعِ!";
$lang['admin_nopartner'] = "لا شريكَ وَجدَ لهذا الموقعِ!";
$lang['admin_get_question'] = "يَحْصلُ السجلُ على متغيّرِ؟ (متغيّرات رابط موقع)";
$lang['admin_get_a1'] = "سجّلْ كُلّ متغيّرات الروابط";
$lang['admin_get_a2'] = "لا تُسجّلْ أيّ متغيّر رابط";
$lang['admin_get_a3'] = "حدّدَ السجلُ المتغيّراتَ فقط";
$lang['admin_get_a4'] = "سجّلْ كُلّ ماعدا متغيّراتِ محدّدةِ";
$lang['admin_get_list'] = "الأسماء المتغيّرة (<b>؛ </b> فَصلَ قائمةً) <br /> مثال : %s";
$lang['admin_required'] = "%s مطلوبُ.";
$lang['admin_title_required'] = "مطلوب";
$lang['admin_write_dir'] = "أدلة Writable";
$lang['admin_chmod_howto'] = "هذه الأدلةِ مِنْ الضروري أَنْ تَكُونَ جداول بالخادمِ. هذا يَعْني بأنّك يَجِبُ أَنْ ترخيص 777 هم، ببرامجِ إف تي بي كَ (نقرة صحيحة على الدليلِ -> رُخص (أَو ترخيص))";
$lang['admin_optional'] = "إختياري";
$lang['admin_memory_limit'] = "حدّ الذاكرةِ";
$lang['admin_allowed'] = "مَسْمُوح";
$lang['admin_webserver'] = "خادم الموقع";
$lang['admin_server_os'] = "خادم OS";
$lang['admin_server_time'] = "قت الخادم";
$lang['admin_legend'] = "الاسطورة:";
$lang['admin_error_url'] = "الرابط يَجِبُ أَنْ يَكُونَ في الصيغةِ الصحيحةِ: %s (بدون / في النهايةِ)";
$lang['admin_url_n'] = "الرابط %s:";
$lang['admin_url_aliases'] = "URLs aliases";
$lang['admin_logo_question'] = "Display logo?";
$lang['admin_type_again'] = "(type again)";
$lang['admin_admin_mail'] = "بريد المدير اللكتروني";
$lang['admin_admin'] = "المدير";
$lang['admin_phpmv_path'] = "أكملْ الطريقَ إلى تطبيقِ phpMyVisites";
$lang['admin_valid_email'] = "البريد الإلكتروني يَجِبُ أَنْ يَكُونَ بريد إلكتروني صحيحَ";
$lang['admin_valid_pass'] = "كلمة السر يَجِبُ أَنْ تَكُونَ أكثر تعقيداً (6 أحرف أدنى حد )، يجب ان تحتوي على ارقام";
$lang['admin_match_pass'] = "الرقم السري غير مطابق";
$lang['admin_no_user_group'] = "لا مستعملَ في هذه المجموعةِ لهذا الموقعِ";
$lang['admin_recorded_nl'] = "نشرات الأخبار المسجّلة:";
$lang['admin_recorded_partners'] = "الشركاء المسجلين:";
$lang['admin_recorded_users'] = "المستخدمون المسجلون:";
$lang['admin_select_site_title'] = "رجاءً اختر الموقع";
$lang['admin_select_user_title'] = "رجاءً أختر مستخدم";
$lang['admin_no_user_registered'] = "لايوجد مستخدمون مسجلون!";
$lang['admin_configuration'] = "الترتيب";
$lang['admin_general_conf'] = "الترتيب العام";
$lang['admin_group_title'] = "مجموعات المدير ( رخص )";
$lang['admin_user_title'] = "إدارة المستخدم";
$lang['admin_user_add'] = "إضافة مستخدم";
$lang['admin_user_mod'] = "تعديل مستخدم";
$lang['admin_user_del'] = "حذف مستخدم";
$lang['admin_server_info'] = "معلومات الخادم";
$lang['admin_send_mail'] = "أرسلْ الإحصائياتَ بالبريد الإلكتروني";
$lang['admin_rss_feed'] = "إحصائيات في آر إس إس";
$lang['admin_site_admin'] = "موقع الإدارة";
$lang['admin_site_add'] = "إضافة موقع";
$lang['admin_site_mod'] = "تعديل موقع";
$lang['admin_site_del'] = "حذف موقع";
$lang['admin_nl_add'] = "إضافة أخبار جديدة";
$lang['admin_nl_mod'] = "تعديل الأخبار الجديدة";
$lang['admin_nl_del'] = "حذف الأخبار الجديدة";
$lang['admin_partner_add'] = "إضافة شريك";
$lang['admin_partner_mod'] = "عدل إسم الشريك والرابط";
$lang['admin_partner_del'] = "حذف شريك";
$lang['admin_url_alias'] = "مدير رابط مشهور";
$lang['admin_group_admin_n'] = "مشاهدة الإحصائيات + ترخيص الإدارة";
$lang['admin_group_admin_d'] = "المستعملون يُمْكِنُ أَنْ يشاهدوا إحصائياتَ الموقعِ ويُحرّرونَ معلوماتَ موقعِ (اسم، يُضيفُ كوكي، يَستثنى آي بي جماعي، يُديرُ أسمَ رابط مشهور URLs alias/partners/newsletters, الخ.)";
$lang['admin_group_view_n'] = "مشاهدة الإحصائيات";
$lang['admin_group_view_d'] = "المستخدم يُمْكِنُ فقط أَنْ يشاهد إحصائياتَ الموقعِ. وليس دخول الادارة.";
$lang['admin_group_noperm_n'] = "لا ترخيص";
$lang['admin_group_noperm_d'] = "المستخدمون في هذه المجموعةِ ما عِنْدَها أيّ رخصة لمشاهدة الإحصائياتِ أَو تُحرّرُ معلومات.";
$lang['admin_group_stitle'] = "أنت يُمْكِنُ أَنْ تُحرّرَ مجموعاتَ المستخدمون بإخْتياَر المستخدمون الذي تُريدُ تَغْييرهم، وبعد ذلك يَختارُ مجموعة التي تُريدُ تَحريك المستخدمون المختارينِ.";
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
$lang['install_loginmysql'] = "إتَّصال قاعدةِ بيانات";
$lang['install_mdpmysql'] = "كلمة سر قاعدةِ بيانات";
$lang['install_serveurmysql'] = "خادم قاعدة البيانات";
$lang['install_basemysql'] = "إسم قاعدة البيانات";
$lang['install_prefixetable'] = "بداية إسم جداول القاعدة";
$lang['install_utilisateursavances'] = "المستخدمون المتقدّمون (إختياريون)";
$lang['install_oui'] = "نعم";
$lang['install_non'] = "لا";
$lang['install_ok'] = "حسناً";
$lang['install_probleme'] = "مشكلة: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "مستخدم المدير";
$lang['install_mdpadmin'] = "الرقم السري للمدير";
$lang['install_chemincomplet'] = "أكملْ الطريقَ إلى تطبيقِ phpMyVisites (مثل http://www.mysite.com/rep1/rep3/phpmyvisites/).. الطريق يَجِبُ أَنْ يَنتهي بـ <strong>/</strong>.";
$lang['install_afficherlogo'] = "أجعل صورة او شعار يظهر في الموقع لكي تساعدنا على الانتشار أكثر خاصتاً وان السكربت أخذ منا الوقت الكبير ليظهر بهذا الشكل %s <br />."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "رسوم إحصائياتِ معرضِ البياني.";
$lang['install_valider'] = "قدّمْ"; // during installation and for login
$lang['install_popup_logo'] = "رجاءً أختر شعار";
$lang['install_logodispo'] = "شاهدْ الشعاراتَ المُخْتَلِفةَ متوفرةَ";
$lang['install_welcome'] = "مرحباً!";
$lang['install_system_requirements'] = "متطلبات نظامِ";
$lang['install_database_setup'] = "إعداد قاعدةِ بيانات";
$lang['install_create_tables'] = "خلق جدول";
$lang['install_general_setup'] = "إعدادات عامة";
$lang['install_create_config_file'] = "أنشأْ ملفَ Config";
$lang['install_first_website_setup'] = "أضفْ موقعَ ويب أولَ";
$lang['install_display_javascript_code'] = "عرض Javascript";
$lang['install_finish'] = "إنتهى!";
$lang['install_txt2'] = "في نهايةِ التركيبِ ,  طلب إلى الموقعِ الرسميِ لمُسَاعَدَتنا لنُتابعُ عددَ المستحدمون الذين يَستعملونَ phpMyVisites. شكراً لفَهْمكَ.";
$lang['install_database_setup_txt'] = "رجاءً إدخلْ أماكنَ قاعدةِ بياناتكِ.";
$lang['install_general_config_text'] = "فضلاً سوف يكون مدير واحد للبرنامج وهو يتحكم بشكل كامل لذلك انت يمكنك إضافة مستخدمون اضافيون لاحقاً.";
$lang['install_config_file'] = " أدخلت المعلومات للمستخدم بنجاح.";
$lang['install_js_code_text'] = "<p>To count all visitors, you must insert the javascript code on all of your pages. </p><p> Your pages do not have to be made with PHP, <strong>phpMyVisites will work on all kinds of pages (whether it is HTML, ASP, Perl or any other languages).</strong> </p><p> Here is the code you have to insert: (copy and paste on all your pages) </p>";
$lang['install_intro'] = "مرحباً بك في تثبيت البرنامج.";
$lang['install_intro2'] = "هذي الخطوة سهلة سوف تأخذ منك فقط 10 دقائق %s ";
$lang['install_next_step'] = "إذهب الى الخطة القادمة";
$lang['install_status'] = "مكان التركيب";
$lang['install_done'] = "التركيب %s%% كامل"; // Install 25% complete
$lang['install_site_success'] = "موقع الويب خَلقَ بالنجاحِ!";
$lang['install_site_info'] = "رجاءً إطبعْ كُلّ المعلومات حول موقعِ الويب الأولِ.";
$lang['install_go_phpmv'] = "phpMyVisites! إذهب الى";
$lang['install_congratulation'] = "مبروك نجح تركيب البرنامج بنجاح كامل";
$lang['install_end_text'] = "إضف كود الجافا في صفحاتك في منطقة الجسم وانتظر زوارك الاوائل";
$lang['install_db_ok'] = "الإتّصال إلى خادمِ قاعدةِ البيانات ممتاز!";
$lang['install_table_exist'] = "تَجِدُ الجداول في قاعدةِ البيانات phpMyVisites.";
$lang['install_table_choice'] = "أمّا تختارُ إسْتِعْمال جداول قاعدةِ البيانات الحاليةِ  او تحديث كُلّ البيانات الحالية في قاعدةِ البيانات.";
$lang['install_table_erase'] = "إمسحُ كُلّ الجداول (كُنْ حذراً! )";
$lang['install_table_reuse'] = "إستعملْ ثانية الجداول الحاليةَ";
$lang['install_table_success'] = "الجداول خَلقتْ بالنجاحِ!";
$lang['install_send_mail'] = "إستلمْ بريد إلكتروني كُلّ يوم لكلّ موقعِ ويب يَحتوي خلاصةَ الإحصائياتَ؟";

//
// Update Step
//
$lang['update_title'] = "phpMyVisites تحديث";
$lang['update_subtitle'] = "نَكتشفُ بأنّك تحدث phpMyVisites.";
$lang['update_versions'] = " %s ونحن حدثناها الى %s نسختك السابقة كانت .";
$lang['update_db_updated'] = "قاعدة بياناتكَ جُدّدتْ بنجاح!";
$lang['update_continue'] = "phpMyVisites إستمر الى";
$lang['update_jschange'] = "تحذير! <br /> كود الجافا التابع للبرنامج لإحصاء زوار موقعك تغير لذلك نتمنى منك تغييرة . <br />.";

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
$lang['moistab']['01'] = "يناير";
$lang['moistab']['02'] = "فبراير";
$lang['moistab']['03'] = "مارس";
$lang['moistab']['04'] = "ابريل";
$lang['moistab']['05'] = "مايو";
$lang['moistab']['06'] = "يونيو";
$lang['moistab']['07'] = "يوليو";
$lang['moistab']['08'] = "اغسطس";
$lang['moistab']['09'] = "سبتمبر";
$lang['moistab']['10'] = "اكتوبر";
$lang['moistab']['11'] = "نوفمبر";
$lang['moistab']['12'] = "ديسمبر";

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
$lang['jsemaine']['Mon'] = "الاثنين";
$lang['jsemaine']['Tue'] = "الثلاثاء";
$lang['jsemaine']['Wed'] = "الاربعاء";
$lang['jsemaine']['Thu'] = "الخميس";
$lang['jsemaine']['Fri'] = "الجمعة";
$lang['jsemaine']['Sat'] = "السبت";
$lang['jsemaine']['Sun'] = "الاحد";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Mon";
$lang['jsemaine_graph']['Tue'] = "Tue";
$lang['jsemaine_graph']['Wed'] = "Wed";
$lang['jsemaine_graph']['Thu'] = "Thu";
$lang['jsemaine_graph']['Fri'] = "Fri";
$lang['jsemaine_graph']['Sat'] = "Sat";
$lang['jsemaine_graph']['Sun'] = "Sun";

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
$lang['eur'] = "اوروبا";
$lang['afr'] = "أفريقيا";
$lang['asi'] = "آسيا";
$lang['ams'] = "جنوب ووسط امريكا";
$lang['amn'] = "امريكا الشمالية";
$lang['oce'] = "Oceania";

// Oceans
$lang['oc_pac'] = "Pacific Ocean";
$lang['oc_atl'] = "Atlantic Ocean";
$lang['oc_ind'] = "Indian Ocean";

// Countries
$lang['domaines'] = array(
	"xx" => "غير معروف",
	"ac" => "Ascension Islands",
	"ad" => "أندورا",
	"ae" => "الأمارات العربية المتحدة",
	"af" => "أفقانستان",
	"ag" => "Antigua and Barbuda",
	"ai" => "أنغوليا",
	"al" => "البانيا",
	"am" => "أرمينيا",
	"an" => "Netherlands Antilles",
	"ao" => "أنغولا",
	"aq" => "Antarctica",
	"ar" => "ارجنتين",
	"as" => "American Samoa",
	"at" => "Austria",
	"au" => "استراليا",
	"aw" => "اروبا",
	"az" => "اذربيجان",
	"ba" => "البوسنه والهرسك",
	"bb" => "Barbados",
	"bd" => "بنغلاديش",
	"be" => "Belgium",
	"bf" => "بركينا فاسو",
	"bg" => "بلغاريا",
	"bh" => "مملكة البحرين",
	"bi" => "بوراندي",
	"bj" => "بينين",
	"bm" => "بيرمودا",
	"bn" => "بورونيو",
	"bo" => "بوليفيا",
	"br" => "برازيل",
	"bs" => "بهامس",
	"bt" => "بوتان",
	"bv" => "Bouvet Island",
	"bw" => "باتسوانا",
	"by" => "بلاروسيا",
	"bz" => "Belize",
	"ca" => "كندا",
	"cc" => "Cocos (Keeling) Islands",
	"cd" => "كونغو , الديمقراطية",
	"cf" => "جمهورية افريقيا الوسطى",
	"cg" => "كونغو",
	"ch" => "سويسرا",
	"ci" => "Cote D'Ivoire",
	"ck" => "Cook Islands",
	"cl" => "تشيلي",
	"cm" => "كاميرون",
	"cn" => "الصين",
	"co" => "كولومبيا",
	"cr" => "كوستاريكا",
	"cs" => "صربيا",
	"cu" => "كوبا",
	"cv" => "Cape Verde",
	"cx" => "Christmas Island",
	"cy" => "قبرص",
	"cz" => "التشيك",
	"de" => "المانيا",
	"dj" => "جيبوتي",
	"dk" => "دنمارك",
	"dm" => "الدومنيكا",
	"do" => "الدومنيكان",
	"dz" => "الجزائر",
	"ec" => "الأكوادور",
	"ee" => "أستونيا",
	"eg" => "مصر",
	"eh" => "الصحراء الغربية",
	"er" => "اريتريا",
	"es" => "اسبانيا",
	"et" => "اثيوبيا",
	"fi" => "فنلندا",
	"fj" => "فيجي",
	"fk" => "Falkland Islands (Malvinas)",
	"fm" => "Micronesia, Federated States of",
	"fo" => "Faroe Islands",
	"fr" => "فرنيا",
	"ga" => "القابون",
	"gd" => "غرينادا",
	"ge" => "جورجيا",
	"gf" => "غويانا الفرنسية",
	"gg" => "Guernsey",
	"gh" => "غانا",
	"gi" => "جبل طارق",
	"gl" => "جرينلاند",
	"gm" => "غامبيا",
	"gn" => "غينيا",
	"gp" => "غواديلوب",
	"gq" => "غينيا الاستوائية",
	"gr" => "اليونان",
	"gs" => "جنوب جورجيا والجُزُر الجنوبية",
	"gt" => "غواتيمالا",
	"gu" => "Guam",
	"gw" => "غينيا-بيساو",
	"gy" => "غويانا",
	"hk" => "هونق كونق",
	"hm" => "Heard Island and McDonald Islands",
	"hn" => "هندوراس",
	"hr" => "كرواتيا",
	"ht" => "هيتي",
	"hu" => "هنقاريا",
	"id" => "اندونيسيا",
	"ie" => "ايرلاند",
	"il" => "فلسطين المحتلة",
	"im" => "Man Island",
	"in" => "الهند",
	"io" => "أرض المحيط الهندي البريطانيةِ",
	"iq" => "العراق",
	"ir" => "ايران",
	"is" => "اسلاند",
	"it" => "ايطاليا",
	"je" => "Jersey",
	"jm" => "جامايكا",
	"jo" => "الاردن",
	"jp" => "اليابان",
	"ke" => "كينيا",
	"kg" => "قرغيزستان",
	"kh" => "كمبوديا",
	"ki" => "Kiribati",
	"km" => "Comoros",
	"kn" => "Saint Kitts and Nevis",
	"kp" => "كوريا الجنوبية",
	"kr" => "كوريا الشمالية",
	"kw" => "الكويت",
	"ky" => "Cayman Islands",
	"kz" => "كازخستان",
	"la" => "Laos",
	"lb" => "لبنان",
	"lc" => "Saint Lucia",
	"li" => "Liechtenstein",
	"lk" => "سيريلانكا",
	"lr" => "ليبيريا",
	"ls" => "Lesotho",
	"lt" => "Lithuania",
	"lu" => "لكسمبورغ",
	"lv" => "لاتيفيا",
	"ly" => "ليبيا",
	"ma" => "المغرب",
	"mc" => "موناكو",
	"md" => "Moldova, Republic of",
	"mg" => "مدقشقر",
	"mh" => "Marshall Islands",
	"mk" => "Macedonia",
	"ml" => "مالي",
	"mm" => "ميانمار",
	"mn" => "منغوليا",
	"mo" => "مكاو",
	"mp" => "Northern Mariana Islands",
	"mq" => "Martinique",
	"mr" => "موريتانيا",
	"ms" => "Montserrat",
	"mt" => "مالطا",
	"mu" => "موريتيوس",
	"mv" => "Maldives",
	"mw" => "مالاوي",
	"mx" => "المكسيك",
	"my" => "ماليزيا",
	"mz" => "موزمبيق",
	"na" => "ناميبيا",
	"nc" => "New Caledonia",
	"ne" => "النيجر",
	"nf" => "Norfolk Island",
	"ng" => "نيجيريا",
	"ni" => "ناكراغوا",
	"nl" => "Netherlands",
	"no" => "النرويج",
	"np" => "نيبال",
	"nr" => "Nauru",
	"nu" => "Niue",
	"nz" => "New Zealand",
	"om" => "عُمان",
	"pa" => "بانما",
	"pe" => "بيرو",
	"pf" => "French Polynesia",
	"pg" => "Papua New Guinea",
	"ph" => "الفلبين",
	"pk" => "باكستان",
	"pl" => "بولاند",
	"pm" => "Saint Pierre and Miquelon",
	"pn" => "Pitcairn",
	"pr" => "Puerto Rico",
	"ps" => "Palestinian Territory",
	"pt" => "البرتغال",
	"pw" => "Palau",
	"py" => "Paraguay",
	"qa" => "قطر",
	"re" => "Reunion Island",
	"ro" => "رومانيا",
	"ru" => "الأتحاد الروسي",
	"rs" => "روسيا",
	"rw" => "راوندا",
	"sa" => "السعودية",
	"sb" => "Solomon Islands",
	"sc" => "Seychelles",
	"sd" => "السودان",
	"se" => "السويد",
	"sg" => "سنغافورا",
	"sh" => "Saint Helena",
	"si" => "سولفانيا",
	"sj" => "Svalbard",
	"sk" => "سولفاكيا",
	"sl" => "Sierra Leone",
	"sm" => "San Marino",
	"sn" => "السنغال",
	"so" => "الصومال",
	"sr" => "Suriname",
	"st" => "Sao Tome and Principe",
	"su" => "Old U.S.S.R",
	"sv" => "السلفادور",
	"sy" => "سوريا",
	"sz" => "Swaziland",
	"tc" => "تركيا",
	"td" => "تشاد",
	"tf" => "French Southern Territories",
	"tg" => "Togo",
	"th" => "تايلاند",
	"tj" => "طاجكستان",
	"tk" => "Tokelau",
	"tm" => "تركمانستان",
	"tn" => "تونس",
	"to" => "Tonga",
	"tp" => "East Timor",
	"tr" => "تركيا",
	"tt" => "ترينداد وتوباقو",
	"tv" => "Tuvalu",
	"tw" => "تايوان",
	"tz" => "تنزانيا",
	"ua" => "يكرانيا",
	"ug" => "اوغاندا",
	"uk" => "بريطانيا",
	"gb" => "Great Britain",
	"um" => "United States Minor Outlying Islands",
	"us" => "United States",
	"uy" => "يرغواي",
	"uz" => "اوزبكستان",
	"va" => "الفاتيكان",
	"vc" => "Saint Vincent and the Grenadines",
	"ve" => "فنزويلا",
	"vg" => "Virgin Islands, British",
	"vi" => "Virgin Islands, U.S.",
	"vn" => "فيتنام",
	"vu" => "Vanuatu",
	"wf" => "Wallis and Futuna",
	"ws" => "Samoa",
	"ye" => "اليمن",
	"yt" => "Mayotte",
	"yu" => "يوغسلافيا",
	"za" => "جنوب افريقيا",
	"zm" => "زامبيا",
	"zr" => "Zaire",
	"zw" => "زنبمبابوي",
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