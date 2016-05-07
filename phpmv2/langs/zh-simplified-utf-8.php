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
$lang['auteur_nom'] = "蔡勇(Mark Cai)"; // Translator's name
$lang['auteur_email'] = "yongcai@163.net"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "zh"; // iso language code
$lang['lang_libelle_en'] = "Simplified Chinese"; // english language name
$lang['lang_libelle_fr'] = "Chinois simplifié"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = ''; // three thousands spells 300,000 in english
$lang['separateur_decimaux'] = '.'; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | 用于统计分析网站访问量的开源软件"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, script, application, software, statistics, referals, stats, free, open source, gpl, visits, visitors, mysql, viewed pages, pages, views, number of visits, graphs, Browsers, os, operating system, resolutions, day, week, month, records, country, host, service providors, search enginge, key words, referrers, graphs, entry pages, exit pages, pie charts"; // Header keywords
$lang['head_description'] = "phpMyVisites | 一个用PHP/MySQL技术开发，采用Gnu GPL.方式发布的关于网站访问量统计的开源软件"; // Header description
$lang['logo_description'] = "phpMyVisites : 一个用PHP/MySQL技术开发，采用Gnu GPL.方式发布的关于网站访问量统计的开源软件"; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "访问情况";
$lang['menu_pagesvues'] = "浏览页";
$lang['menu_suivi'] = "访问轨迹";
$lang['menu_provenance'] = "访问来源";
$lang['menu_configurations'] = "设置";
$lang['menu_affluents'] = "参考";
$lang['menu_listesites'] = "显示站点";
$lang['menu_bilansites'] = "Summary";
$lang['menu_jour'] = "天";
$lang['menu_semaine'] = "星期";
$lang['menu_mois'] = "月";
$lang['menu_annee'] = "Year";
$lang['menu_periode'] = "计划周期: %s"; // Text formated (e.g.: Studied period: Thuesday, september the 11th)
$lang['liens_siteofficiel'] = "官方站点";
$lang['liens_admin'] = "管理者";
$lang['liens_contacts'] = "联系人";

//
// Divers
//
$lang['generique_nombre'] = "数字";
$lang['generique_tauxsortie'] = "退出速度";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "页面在 %s 秒中内生成"; // Time in seconds
$lang['generique_divers'] = "其它"; // (for the graphs)
$lang['generique_inconnu'] = "未知"; // (for the graphs)
$lang['generique_vous'] = "... You ?";
$lang['generique_traducteur'] = "Translator";
$lang['generique_langue'] = "Language";
$lang['generique_autrelangure'] = "其它?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "No visitor in this period."; 
$lang['generique_aucune_visite_bdd'] = "<b>Warning ! </b> You have no visitor recorded in the database for the current site. Please be sure you've installed your javascript code on your pages, with the correct phpMyVisites URL <u>IN</u> the Javascript code. Try documentation for help.";
$lang['generique_aucune_site_bdd'] = "No site registered in the database ! Try to Try to login as phpMyVisites Super User to add a new site.";
$lang['generique_retourhaut'] = "Top";
$lang['generique_tempsvisite'] = "%smin %ss"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%sh"; // 4h means 4 hours
$lang['generique_siteno'] = "Site %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Newsletter %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "Partner %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "General";
$lang['generique_user'] = "User %s"; // User "Admin"
$lang['generique_previous'] = "Previous";
$lang['generique_next'] = "Next";
$lang['generique_lowpop'] = "Exclude low population from statistics";
$lang['generique_allpop'] = "Include all the population in statistics";
$lang['generique_to'] = "to"; // 4 'to' 8
$lang['generique_total_on'] = "on"; // 4 to 8 'on' 10
$lang['generique_total'] = "汇总";
$lang['generique_information'] = "Information";
$lang['generique_done'] = "Done!";
$lang['generique_other'] = "Other";
$lang['generique_description'] = "Description:";
$lang['generique_name'] = "Name:";
$lang['generique_variables'] = "Variables";
$lang['generique_logout'] = "Logout";
$lang['generique_login'] = "Login";
$lang['generique_hits'] = "Hits";
$lang['generique_errors'] = "Errors";
$lang['generique_site'] = "Site";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "密码 : "; // lowercase
$lang['login_login'] = "登陆账号 : "; // lowercase
$lang['login_error'] = "不能登陆，错误的登陆账号或密码不对.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "You wish to enter a %sphpMyVisites%s protected area.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "联系人";
$lang['contacts_langue'] = "译文";
$lang['contacts_merci'] = "谢谢";
$lang['contacts_auteur'] = "作者, 文档编辑, phpMyVisites项目发起人均为<strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "关于 <strong>技术问题, 程序缺陷, 各类建议</strong> 请参考官方论坛 %s. 其它问题, 请直接通过提交站点表单（form）与作者联系."; // adresse du site
$lang['contacts_trad1'] = "如果你想将phpMyVisites翻译成你们自己的语言，请不要迟疑，<strong>phpMyVisites 需要你!</strong>";
$lang['contacts_trad2'] = "翻译 phpMyVisites 将会花费一些时间(几个小时),需要有好的语言基础; 但请记住 <strong>我们所做的工作将是许多人受益</strong>.  如果你对翻译 phpMyVisites 有兴趣，你能够在官方文档 %s 找到所有需要的信息%s."; // lien vers la doc
$lang['contacts_doc'] = "请参考 %s 这个关于 phpMyVisites %s 文档，它将提供给你大量关于如何安装，配置，了解phpMyVisites的功能方面的信息. "; // lien vers la doc
$lang['contacts_thanks_dev'] = "Thank you <strong>%s</strong>, co-developers of phpMyVisites, for their high quality work on the project.";
$lang['contacts_merci3'] = "在感激页面上，你会发现还有许多值得我们感激的朋友，他们参与phpMyVisites的工作.";
$lang['contacts_merci2'] = "非常感谢所有参与翻译phpMyVisites的朋友:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Site %s on %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Go to detailed statistics";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "访问者信息"; 
$lang['visites_statistiques'] = "统计";
$lang['visites_periodesel'] = "给定时间段";
$lang['visites_visites'] = "访问量";
$lang['visites_uniques'] = "单独访问者";
$lang['visites_pagesvues'] = "浏览过页面的访问者";
$lang['visites_pagesvisiteurs'] = "每个访问者访问页面数"; 
$lang['visites_pagesvisites'] = "Pages per visit"; 
$lang['visites_pagesvisitessign'] = "Pages per significant visit"; 
$lang['visites_tempsmoyen'] = "平均访问时间";
$lang['visites_tempsmoyenpv'] = "平均每个页面访问时间";
$lang['visites_tauxvisite'] = "一个页面的访问速率"; 
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "时间段汇总";
$lang['visites_nbvisites'] = "访问量";
$lang['visites_aucunevivisite'] = "未访问"; // in the table, must be short
$lang['visites_recap'] = "汇总";
$lang['visites_unepage'] = "一页"; // (graph)
$lang['visites_pages'] = "%s 页"; // 1-2 pages (graph)
$lang['visites_min'] = "%s 分钟"; // 10-15 min (graph)
$lang['visites_sec'] = "%s 秒"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "图示统计汇总";
$lang['visites_grapghrecaplongterm'] = "Graph to show long term statistics summary";
$lang['visites_graphtempsvisites'] = "图示某时间段内访问者的访问量";
$lang['visites_graphtempsvisitesimg'] = "某时间段内访问者的访问量";
$lang['visites_graphheureserveur'] = "图示每小时服务器访问量"; 
$lang['visites_graphheureserveurimg'] = "服务器时间的访问量"; 
$lang['visites_graphheurevisiteur'] = "图示每小时访问者访问量";
$lang['visites_graphheurelocalimg'] = "当地时间的访问量"; 
$lang['visites_longterm_statd'] = "Long term Analysis (Days of the Period)";
$lang['visites_longterm_statm'] = "Long term Analysis (Months in the Period)";

//
// Sites Summary
//
$lang['summary_title'] = "Site Summary";
$lang['summary_stitle'] = "Summary";

//
// Frequency Part
//
$lang['frequence_titre'] = "Returning visitors";
$lang['frequence_nouveauxconnusgraph'] = "Graph to show New vs Returning visits";
$lang['frequence_nouveauxconnus'] = "New vs Returning visits";
$lang['frequence_titremenu'] = "Frequency";
$lang['frequence_visitesconnues'] = "Returning visits";
$lang['frequence_nouvellesvisites'] = "New visits";
$lang['frequence_visiteursconnus'] = "Returning visitors";
$lang['frequence_nouveauxvisiteurs'] = "New visitors";
$lang['frequence_returningrate'] = "Returning rate";
$lang['pagesvues_vispervisgraph'] = "Graph to show number of visits per visitor";
$lang['frequence_vispervis'] = "Number of visits per visitor";
$lang['frequence_vis'] = "visit";
$lang['frequence_visit'] = "1 visit"; // (graph)
$lang['frequence_visits'] = "%s visits"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "页浏览信息";
$lang['pagesvues_joursel'] = "选择天";
$lang['pagesvues_jmoins7'] = "天 - 7";
$lang['pagesvues_jmoins14'] = "天 - 14";
$lang['pagesvues_moyenne'] = "(平均)";
$lang['pagesvues_pagesvues'] = "页浏览";
$lang['pagesvues_pagesvudiff'] = "单独页浏览";
$lang['pagesvues_recordpages'] = "访问最多访问的页";
$lang['pagesvues_tabdetails'] = "浏览页 (从 %s 到 %s)"; // (de 1   21)
$lang['pagesvues_graphsnbpages'] = "图示每页访问量";
$lang['pagesvues_graphnbvisitespageimg'] = "每页访问量";
$lang['pagesvues_graphheureserveur'] = "图示服务器时间内的访问量";
$lang['pagesvues_graphheureserveurimg'] = "服务器时间内的访问量";
$lang['pagesvues_graphheurevisiteur'] = "图示当地时间的访问量";
$lang['pagesvues_graphpageslocalimg'] = "当地时间的访问量";
$lang['pagesvues_tempsparpage'] = "Time by page";
$lang['pagesvues_total_time'] = "Total time";
$lang['pagesvues_avg_time'] = "Average time";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "访问者的变动";
$lang['suivi_pageentree'] = "入口页";
$lang['suivi_pagesortie'] = "退出页";
$lang['suivi_tauxsortie'] = "退出速率";
$lang['suivi_pageentreehits'] = "Entry hits";
$lang['suivi_pagesortiehits'] = "Exit hits";
$lang['suivi_singlepage'] = "Single Pages visits";

//
// Origin
//
$lang['provenance_titre'] = "访问者来源";
$lang['provenance_recappays'] = "访问国家汇总";
$lang['provenance_pays'] = "国家";
$lang['provenance_paysimg'] = "图示访问国家";
$lang['provenance_fai'] = "Internet服务提供商";
$lang['provenance_nbpays'] = "Number of different countries : %s";
$lang['provenance_provider'] = "提供商"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "大陆";
$lang['provenance_mappemonde'] = "世界地图";
$lang['provenance_interetspays'] = "Countries Interests";

//
// Setup
//
$lang['configurations_titre'] = "访问者设定";
$lang['configurations_os'] = "操作系统";
$lang['configurations_osimg'] = "图示访问者操作系统";
$lang['configurations_navigateurs'] = "浏览器";
$lang['configurations_navigateursimg'] = "图示访问者浏览器类型";
$lang['configurations_resolutions'] = "屏幕分辨率";
$lang['configurations_resolutionsimg'] = "图示访问者屏幕分辨率";
$lang['configurations_couleurs'] = "颜色深度";
$lang['configurations_couleursimg'] = "图示访问者颜色深度";
$lang['configurations_rapport'] = "正常/宽屏";
$lang['configurations_large'] = "宽屏";
$lang['configurations_normal'] = "正常";
$lang['configurations_double'] = "Dual Screen";
$lang['configurations_plugins'] = "Plugins"; // TODO : translate
$lang['configurations_navigateursbytype'] = "Browsers (by type)"; // TODO : translate
$lang['configurations_navigateursbytypeimg'] = "Graph to show browsers types"; // TODO : translate
$lang['configurations_os_interest'] = "Operating Systems Interest";
$lang['configurations_navigateurs_interest'] = "Browsers Interest";
$lang['configurations_resolutions_interest'] = "Screen Resolutions Interest";
$lang['configurations_couleurs_interest'] = "Color Depth Interest";
$lang['configurations_configurations'] = "Top settings";

//
// Referers
//
$lang['affluents_titre'] = "查阅";
$lang['affluents_recapimg'] = "图示访问者查阅情况";
$lang['affluents_directimg'] = "直接";
$lang['affluents_sitesimg'] = "站点";
$lang['affluents_moteursimg'] = "引擎";
$lang['affluents_referrersimg'] = "查阅";
$lang['affluents_moteurs'] = "搜索引擎";
$lang['affluents_nbparmoteur'] = "通过搜索引擎得到的访问量 : %s";
$lang['affluents_aucunmoteur'] = "搜索引擎没有提供访问量.";
$lang['affluents_motscles'] = "关键词";
$lang['affluents_nbmotscles'] = "独特的关键词 : %s";
$lang['affluents_aucunmotscles'] = "没有找到关键词.";
$lang['affluents_sitesinternet'] = "站点";
$lang['affluents_nbautressites'] = "其它站点提供的访问量 : %s";
$lang['affluents_nbautressitesdiff'] = "不同站点的数量 : %s";
$lang['affluents_aucunautresite'] = "站点没有提供访问量.";
$lang['affluents_entreedirecte'] = "直接请求";
$lang['affluents_nbentreedirecte'] = "直接请求量 : %s";
$lang['affluents_nbpartenaires'] = "Visits provided by partners : %s";
$lang['affluents_aucunpartenaire'] = "No visits were provided by partners sites.";
$lang['affluents_nbnewsletters'] = "Visits provided by newsletters : %s";
$lang['affluents_aucunnewsletter'] = "No visits were provided by newsletters.";
$lang['affluents_details'] = "详细情况"; // In the results of the referers array
$lang['affluents_interetsmoteurs'] = "Search Engines Interests";
$lang['affluents_interetsmotscles'] = "Keywords Interests";
$lang['affluents_interetssitesinternet'] = "Websites Interests";
$lang['affluents_partenairesimg'] = "Partners";
$lang['affluents_partenaires'] = "Partners";
$lang['affluents_interetspartenaires'] = "Partners Interests";
$lang['affluents_newslettersimg'] = "Newsletters";
$lang['affluents_newsletters'] = "Newsletters";
$lang['affluents_interetsnewsletters'] = "Newsletters Interests";
$lang['affluents_type'] = "Referer type";
$lang['affluents_interetstype'] = "Access type Interests";

//
// Summary
//
$lang['purge_titre'] = "汇总访问量和参考量";
$lang['purge_intro'] = "除了重要的统计量被保存外，其它时间段的资料已被移走.";
$lang['admin_purge'] = "数据库维护";
$lang['admin_purgeintro'] = "这个部分用来管理phpMyVisites所使用的数据表. 你能看到表所占用的磁盘空间,你可以优化，删除它们,或者移走老的纪录. 这将有利于你限制在数据库中表的大小.";
$lang['admin_optimisation'] = "优化 [ %s ]..."; // Tables names
$lang['admin_postopt'] = "总共空间大小减少至 %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "移走以下时间段: %s";
$lang['admin_purge_fini'] = "完成删除数据表...";
$lang['admin_bdd_nom'] = "名字";
$lang['admin_bdd_enregistrements'] = "纪录";
$lang['admin_bdd_taille'] = "表大小";
$lang['admin_bdd_opt'] = "优化";
$lang['admin_bdd_purge'] = "清出条件";
$lang['admin_bdd_optall'] = "全部优化";
$lang['admin_purge_j'] = "删除大于 %s 天的纪录";
$lang['admin_purge_s'] = "删除大于 %s 星期的纪录";
$lang['admin_purge_m'] = "删除大于 %s 月的纪录";
$lang['admin_purge_y'] = "Remove records older than %s years";
$lang['admin_purge_logs'] = "删除所有的日志";
$lang['admin_purge_autres'] = "对表 '%s'内容进行清理";
$lang['admin_purge_none'] = "无可能的动作";
$lang['admin_purge_cal'] = "计算清理中 (需要花费几分钟的时间)";
$lang['admin_alias_title'] = "Website aliases and URLs";
$lang['admin_partner_title'] = "Website partners";
$lang['admin_newsletter_title'] = "Website newsletters";
$lang['admin_ip_exclude_title'] = "IP address ranges to exclude from the statistics";
$lang['admin_name'] = "Name:";
$lang['admin_error_ip'] = "IP has to be in correct format: %s";
$lang['admin_site_name'] = "Site Name";
$lang['admin_site_url'] = "Site main URL";
$lang['admin_db_log'] = "Try to login as phpMyVisites Super User to change database settings.";
$lang['admin_error_critical'] = "Error, needs to be repaired for phpMyVisites to work.";
$lang['admin_warning'] = "Warning, phpMyVisites will work correctly but maybe some extra features won't.";
$lang['admin_move_group'] = "Move to group:";
$lang['admin_move_select'] = "Select a group";

//
// Setup
//
$lang['admin_intro'] = "欢迎来到phpMyVisites配置区. 你能够修改相关你安装的信息. 如果你有任何问题请参考 %s 官方文档资料 %s."; // link to the doc
$lang['admin_configetperso'] = "通用设定";
$lang['admin_afficherjavascript'] = "显示JavaScript统计代码";
$lang['admin_cookieadmin'] = "不要将管理者加入到统计量中";
$lang['admin_ip_ranges'] = "Don't count IP/IP ranges in the statistics";
$lang['admin_sitesenregistres'] = "被纪录的站点:";
$lang['admin_retour'] = "后退";
$lang['admin_cookienavigateur'] = "你可以将管理者排除在统计量外. 需要cookies支持，而且这个选项只针对当前的浏览器有用，不过你可以随时修改这个选项.";
$lang['admin_prendreencompteadmin'] = "将管理者信息统计在内(删除 cookie)";
$lang['admin_nepasprendreencompteadmin'] = "不将管理者信息统计在内 (创建一个cookie)";
$lang['admin_etatcookieoui'] = "这个站点管理者信息统计在内(这是缺省设置, 被认为是一个普通的访问者)";
$lang['admin_etatcookienon'] = "你未被这个站点统计在内(你的访问量不被这个站点所统计)";
$lang['admin_deleteconfirm'] = "Please confirm that you want to delete %s?";
$lang['admin_sitedeletemessage'] = "Please <u>be very careful</u>: all data associated to that Site will be deleted <br>and there won't be any way to recover the data loss.";
$lang['admin_confirmyes'] = "Yes, I want to delete it";
$lang['admin_confirmno'] = "No, I don't want to delete it";
$lang['admin_nonewsletter'] = "No newsletter found for this site!";
$lang['admin_nopartner'] = "No Partner found for this site!";
$lang['admin_get_question'] = "Record GET variable? (URL variables)";
$lang['admin_get_a1'] = "Record ALL URL variables";
$lang['admin_get_a2'] = "Do NOT record any URL variable";
$lang['admin_get_a3'] = "Record ONLY specified variables";
$lang['admin_get_a4'] = "Record all EXCEPT specified variables";
$lang['admin_get_list'] = "Variable names (<b>;</b> separated list) <br/>Example : %s";
$lang['admin_required'] = "%s is required.";
$lang['admin_title_required'] = "Required";
$lang['admin_write_dir'] = "Writable directories";
$lang['admin_chmod_howto'] = "These directories need to be writable by the server. This means you have to chmod 777 them, with your FTP software (right-click on the directory -> Permissions (or chmod))";
$lang['admin_optional'] = "Optional";
$lang['admin_memory_limit'] = "Memory limit";
$lang['admin_allowed'] = "allowed";
$lang['admin_webserver'] = "Web server";
$lang['admin_server_os'] = "Server OS";
$lang['admin_server_time'] = "Server time";
$lang['admin_legend'] = "Legend:";
$lang['admin_error_url'] = "URL has to be in a correct format : %s (without slash at the end)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URLs aliases";
$lang['admin_logo_question'] = "Display logo?";
$lang['admin_type_again'] = "(type again)";
$lang['admin_admin_mail'] = "Super Administrator email";
$lang['admin_admin'] = "Super Administrator";
$lang['admin_phpmv_path'] = "Complete path to the phpMyVisites application";
$lang['admin_valid_email'] = "Email has to be a valid email";
$lang['admin_valid_pass'] = "Password must be more complex (6 characters minimum, must contain numbers)";
$lang['admin_match_pass'] = "Passwords do not match";
$lang['admin_no_user_group'] = "No user in this group for this site";
$lang['admin_recorded_nl'] = "Recorded newsletters:";
$lang['admin_recorded_partners'] = "Recorded partners:";
$lang['admin_recorded_users'] = "Recorded users:";
$lang['admin_select_site_title'] = "Please select a site";
$lang['admin_select_user_title'] = "Please select a user";
$lang['admin_no_user_registered'] = "No user registered!";
$lang['admin_configuration'] = "Configuration";
$lang['admin_general_conf'] = "General configuration";
$lang['admin_group_title'] = "Groups manager (permissions)";
$lang['admin_user_title'] = "User management";
$lang['admin_user_add'] = "Add user";
$lang['admin_user_mod'] = "Modify user";
$lang['admin_user_del'] = "Delete user";
$lang['admin_server_info'] = "Server Information";
$lang['admin_send_mail'] = "Send statistics by email";
$lang['admin_rss_feed'] = "Statistics in a RSS feed";
$lang['admin_site_admin'] = "Site Administration";
$lang['admin_site_add'] = "Add site";
$lang['admin_site_mod'] = "Modify site";
$lang['admin_site_del'] = "Delete site";
$lang['admin_nl_add'] = "Add newsletter";
$lang['admin_nl_mod'] = "Modify newsletter";
$lang['admin_nl_del'] = "Delete newsletter";
$lang['admin_partner_add'] = "Add partner";
$lang['admin_partner_mod'] = "Modify partner's name and URL";
$lang['admin_partner_del'] = "Delete partner";
$lang['admin_url_alias'] = "URL alias Manager";
$lang['admin_group_admin_n'] = "View statistics + Admin permission";
$lang['admin_group_admin_d'] = "Users can view site statistics AND edit site information (name, add cookie, exclude IP ranges, manage URLs alias/partners/newsletters, etc.)";
$lang['admin_group_view_n'] = "View statistics";
$lang['admin_group_view_d'] = "User can only view site statistics. No admin permission.";
$lang['admin_group_noperm_n'] = "No permission";
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
$lang['install_loginmysql'] = "登陆数据库账号";
$lang['install_mdpmysql'] = "登陆数据库密码";
$lang['install_serveurmysql'] = "数据库服务器";
$lang['install_basemysql'] = "数据库名";
$lang['install_prefixetable'] = "数据表前缀";
$lang['install_utilisateursavances'] = "高级用户(可选的)";
$lang['install_oui'] = "Yes";
$lang['install_non'] = "No";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "问题: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "管理员登陆:";
$lang['install_mdpadmin'] = "管理员密码:";
$lang['install_chemincomplet'] = "phpMyVisites应用程序完成的路径(如http://www.mysite.com/rep1/rep3/phpmyvisites/). 路径必须以<strong>/</strong>结尾.";
$lang['install_afficherlogo'] = "需要在你的页面上显示logo吗? %s <br />By allowing the display of the logo on your site, you will help publicize phpMyVisites and help it evolve more rapidly.  It is also a way to thank the author who has spent many hours developing this Open Source, free application."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "显示统计图片.";
$lang['install_valider'] = "提交"; //  during installation and for login
$lang['install_popup_logo'] = "Please select a logo"; // TODO : translate
$lang['install_logodispo'] = "See the various logos available"; // TODO : translate
$lang['install_welcome'] = "Welcome!";
$lang['install_system_requirements'] = "System Requirements";
$lang['install_database_setup'] = "Database Setup";
$lang['install_create_tables'] = "Table creation";
$lang['install_general_setup'] = "General Setup";
$lang['install_create_config_file'] = "Create Config File";
$lang['install_first_website_setup'] = "Add First Website";
$lang['install_display_javascript_code'] = "Display Javascript code";
$lang['install_finish'] = "Finished!";
$lang['install_txt2'] = "安装完毕后,为了让我们能够更好的跟踪人们使用phpMyVisites情况，我们将给官方站点回馈一些信息，谢谢您的理解.";
$lang['install_database_setup_txt'] = "Please enter your Database settings.";
$lang['install_general_config_text'] = "phpMyVisites will have only one administrator user who has full access to view/modify everything. Please choose a username and password for your super administrator account. You can add additional users later.";
$lang['install_config_file'] = " Admin user info entered successfully.";
$lang['install_js_code_text'] = "<p>To count all visitors, you must insert the javascript code on all of your pages. </p><p> Your pages do not have to be made with PHP, <strong>phpMyVisites will work on all kinds of pages (whether it is HTML, ASP, Perl or any other languages).</strong> </p><p> Here is the code you have to insert: (copy and paste on all your pages) </p>";
$lang['install_intro'] = "Welcome to the phpMyVisites installation."; 
$lang['install_intro2'] = "This process is split up into %s easy steps and will take around 10 minutes.";
$lang['install_next_step'] = "Go to next step";
$lang['install_status'] = "Installation Status";
$lang['install_done'] = "Installation %s%% complete"; // Install 25% complete
$lang['install_site_success'] = "Website created with success!";
$lang['install_site_info'] = "Please type in all information about the first website.";
$lang['install_go_phpmv'] = "Go to phpMyVisites!";
$lang['install_congratulation'] = "Congratulations! Your phpMyVisites installation is complete.";
$lang['install_end_text'] = "Make sure your javascript code is entered on your pages, and wait for your first visitors!";
$lang['install_db_ok'] = "Connection to database server ok!";
$lang['install_table_exist'] = "phpMyVisites tables already exist in the database.";
$lang['install_table_choice'] = "Either choose to reuse the existing database tables or select a clean install to erase all existing data in the database.";
$lang['install_table_erase'] = "Erase all tables (be careful!)";
$lang['install_table_reuse'] = "Reuse existing tables";
$lang['install_table_success'] = "Tables created with success!";
$lang['install_send_mail'] = "Receive an email each day per website containing statistics summary?";

//
// Update Step
//
$lang['update_title'] = "Update phpMyVisites";
$lang['update_subtitle'] = "We detect that you are updating phpMyVisites.";
$lang['update_versions'] = "Your previous version was %s and we have updated it to %s.";
$lang['update_db_updated'] = "Your database was successfully updated!";
$lang['update_continue'] = "Continue to phpMyVisites";
$lang['update_jschange'] = "Warning! <br /> The phpMyVisites javascript code has been modified. You MUST update your pages and copy/paste the new phpMyVisites Javascript on ALL your configured sites. <br /> The changes made to javascript code are rare, we apologies for the trouble we are taking you through with this change."; // TODO : translate

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
$lang['moistab']['01'] = "一月";
$lang['moistab']['02'] = "二月";
$lang['moistab']['03'] = "三月";
$lang['moistab']['04'] = "四月";
$lang['moistab']['05'] = "五月";
$lang['moistab']['06'] = "六月";
$lang['moistab']['07'] = "七月";
$lang['moistab']['08'] = "八月";
$lang['moistab']['09'] = "九月";
$lang['moistab']['10'] = "十月";
$lang['moistab']['11'] = "十一月";
$lang['moistab']['12'] = "十二月";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "一月";
$lang['moistab_graph']['02'] = "二月";
$lang['moistab_graph']['03'] = "三月";
$lang['moistab_graph']['04'] = "四月";
$lang['moistab_graph']['05'] = "五月";
$lang['moistab_graph']['06'] = "六月";
$lang['moistab_graph']['07'] = "七月";
$lang['moistab_graph']['08'] = "八月";
$lang['moistab_graph']['09'] = "九月";
$lang['moistab_graph']['10'] = "十月";
$lang['moistab_graph']['11'] = "十一月";
$lang['moistab_graph']['12'] = "十二月";

// Day of the week
$lang['jsemaine']['Mon'] = "星期一";
$lang['jsemaine']['Tue'] = "星期二";
$lang['jsemaine']['Wed'] = "星期三";
$lang['jsemaine']['Thu'] = "星期四";
$lang['jsemaine']['Fri'] = "星期五";
$lang['jsemaine']['Sat'] = "星期六";
$lang['jsemaine']['Sun'] = "星期日";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "星期一";
$lang['jsemaine_graph']['Tue'] = "星期二";
$lang['jsemaine_graph']['Wed'] = "星期三";
$lang['jsemaine_graph']['Thu'] = "星期四";
$lang['jsemaine_graph']['Fri'] = "星期五";
$lang['jsemaine_graph']['Sat'] = "星期六";
$lang['jsemaine_graph']['Sun'] = "星期日";

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
$lang['eur'] = "欧洲";
$lang['afr'] = "非洲";
$lang['asi'] = "亚洲";
$lang['ams'] = "南美洲和中美洲";
$lang['amn'] = "北美洲";
$lang['oce'] = "大洋洲";

// Oceans
$lang['oc_pac'] = "Pacific Ocean"; // TODO : translate
$lang['oc_atl'] = "Atlantic Ocean"; // TODO : translate
$lang['oc_ind'] = "Indian Ocean"; // TODO : translate

// Countries
$lang['domaines'] = array(
    "xx" => "未知",
    "ac" => "阿森松岛屿",
    "ad" => "安道尔共和国",
    "ae" => "阿拉伯联合酋长国",
    "af" => "阿富汗",
    "ag" => "安提瓜岛和巴布达岛",
    "ai" => "安圭拉岛",
    "al" => "阿尔巴尼亚",
    "am" => "亚美尼亚",
    "an" => "印度尼西亚",
    "ao" => "安哥拉",
    "aq" => "南极洲",
    "ar" => "阿根廷",
    "as" => "萨摩亚群岛",
    "at" => "奥地利",
    "au" => " 澳大利亚",
    "aw" => "阿鲁巴岛",
    "az" => "阿塞拜疆",
    "ba" => "波斯尼亚",
    "bb" => "巴巴多斯岛",
    "bd" => "孟加拉国",
    "be" => "比利时",
    "bf" => "布基纳法索",
    "bg" => "保加利亚",
    "bh" => "巴林群岛",
    "bi" => "布隆迪",
    "bj" => "贝宁",
    "bm" => "百慕大",
    "bn" => "布鲁力",
    "bo" => "玻利维亚",
    "br" => "巴西",
    "bs" => "巴哈马群岛",
    "bt" => "不丹",
    "bv" => " 布维岛",
    "bw" => "博茨瓦纳",
    "by" => "贝拉鲁斯",
    "bz" => "伯利兹城",
    "ca" => "加拿大",
    "cc" => "苏格兰岛",
    "cd" => "刚果民主共和国",
    "cf" => "中非共和国",
    "cg" => "刚果",
    "ch" => "瑞士",
    "ci" => "Cote D'Ivoire",
    "ck" => "Cook Islands",
    "cl" => "智利",
    "cm" => "喀麦隆",
    "cn" => "中国",
    "co" => "哥伦比亚",
    "cr" => "哥斯达黎加",
	"cs" => "Serbia Montenegro",
    "cu" => "古巴",
    "cv" => " 佛得角",
    "cx" => "圣诞岛",
    "cy" => "塞浦路斯",
    "cz" => "捷克",
    "de" => "德国",
    "dj" => "吉布提",
    "dk" => "丹麦",
    "dm" => "多米尼加",
    "do" => "多米尼加共和国",
    "dz" => "阿尔及利亚",
    "ec" => "厄瓜多尔",
    "ee" => "爱沙尼亚",
    "eg" => "埃及",
    "eh" => "西萨摩亚",
    "er" => "厄立特里亚",
    "es" => "西班牙",
    "et" => "埃塞俄比亚",
    "fi" => "芬兰",
    "fj" => "斐济",
    "fk" => "福克兰群岛",
    "fm" => "密克罗尼西亚",
    "fo" => "法罗群岛",
    "fr" => "法国",
    "ga" => "加蓬",
    "gd" => "格林纳达",
    "ge" => "乔治亚州",
    "gf" => "圭亚那",
    "gg" => "格恩西",
    "gh" => "加纳",
    "gi" => "直布罗陀",
    "gl" => "格陵兰",
    "gm" => "冈比亚",
    "gn" => "几内亚",
    "gp" => "瓜德罗普岛",
    "gq" => "赤道几内亚",
    "gr" => "希腊",
    "gs" => "三维治岛",
    "gt" => "危地马拉",
    "gu" => "关岛",
    "gw" => "几内亚比绍共和国",
    "gy" => "圭亚那",
    "hk" => "中国香港",
    "hm" => "Heard Island and McDonald Islands",
    "hn" => "洪都拉斯",
    "hr" => "克罗地亚",
    "ht" => "海地",
    "hu" => "匈牙利",
    "id" => "印尼",
    "ie" => "爱尔兰",
    "il" => "以色列",
    "im" => "Man Island",
    "in" => "印度",
    "io" => "不列颠群岛",
    "iq" => "伊拉克",
    "ir" => "伊朗",
    "is" => "冰岛",
    "it" => "意大利",
    "je" => "泽西",
    "jm" => "牙买加",
    "jo" => "约旦",
    "jp" => "日本",
    "ke" => "肯尼亚",
    "kg" => "Kyrgyzstan",
    "kh" => "柬埔寨",
    "ki" => "基里巴斯",
    "km" => "科摩罗",
    "kn" => "圣路易",
    "kp" => "北朝鲜",
    "kr" => "南韩",
    "kw" => "科威特",
    "ky" => "Cayman Islands",
    "kz" => "哈萨克",
    "la" => "老挝",
    "lb" => "黎巴嫩",
    "lc" => "圣卢西亚岛",
    "li" => "列支敦士登",
    "lk" => "斯里兰卡",
    "lr" => "利比里亚",
    "ls" => "莱索托",
    "lt" => "立陶宛",
    "lu" => "卢森堡",
    "lv" => "拉脱维亚",
    "ly" => "利比亚",
    "ma" => "摩洛哥",
    "mc" => "摩纳哥",
    "md" => "摩尔多瓦",
    "mg" => "马达加斯加岛",
    "mh" => "马绍尔群岛",
    "mk" => "马其顿",
    "ml" => "马里",
    "mm" => "缅甸",
    "mn" => "蒙古",
    "mo" => "澳门",
    "mp" => "北马里亚纳群岛",
    "mq" => "马提尼克岛",
    "mr" => "毛利塔尼亚",
    "ms" => "蒙特塞拉特岛",
    "mt" => "马耳他",
    "mu" => "毛里求斯",
    "mv" => "马尔代夫",
    "mw" => "马拉维",
    "mx" => "墨西哥",
    "my" => "马来西亚",
    "mz" => "莫桑比克",
    "na" => "纳米比亚",
    "nc" => "新喀里多尼亚",
    "ne" => "尼日尔",
    "nf" => "诺福克岛",
    "ng" => "尼日利亚",
    "ni" => "尼加拉瓜",
    "nl" => "荷兰",
    "no" => "挪威",
    "np" => "尼泊尔",
    "nr" => "瑙鲁",
    "nu" => "纽埃",
    "nz" => "新西兰",
    "om" => "阿曼",
    "pa" => "巴拿马",
    "pe" => "秘鲁",
    "pf" => "玻利尼西亚",
    "pg" => "巴布亚新几内亚",
    "ph" => "菲律宾",
    "pk" => "巴基斯坦",
    "pl" => "波兰",
    "pm" => "Saint Pierre and Miquelon",
    "pn" => "皮特克恩岛",
    "pr" => "波多黎各",
	"ps" => "Palestinian Territory",
    "pt" => "葡萄牙",
    "pw" => "帕劳群岛",
    "py" => "巴拉圭",
    "qa" => "卡塔尔",
    "re" => "Reunion Island",
    "ro" => "罗马尼亚",
    "ru" => "俄罗斯联盟",
    "rs" => "俄国",
    "rw" => "卢旺达",
    "sa" => "沙特阿拉伯",
    "sb" => "所罗门",
    "sc" => "塞舌尔",
    "sd" => "苏丹",
    "se" => "瑞典",
    "sg" => "新加坡",
    "sh" => "圣路易",
    "si" => "斯洛文尼亚",
    "sj" => "斯瓦尔巴特群岛",
    "sk" => "斯洛伐克",
    "sl" => "塞拉利昂",
    "sm" => "圣马力诺",
    "sn" => "塞内加尔",
    "so" => "索马里",
    "sr" => "苏里南",
    "st" => "爱尔兰自由邦",
    "su" => "Old U.R.S.S.",
    "sv" => "萨尔瓦多",
    "sy" => "叙利亚",
    "sz" => "Swaziland",
    "tc" => "Turks and Caicos Islands",
    "td" => "乍得",
    "tf" => "French Southern Territories",
    "tg" => "多哥",
    "th" => "泰国",
    "tj" => "塔吉克斯坦",
    "tk" => "托克劳群岛",
    "tm" => "土库曼斯坦",
    "tn" => "突尼斯",
    "to" => "汤加",
    "tp" => "东帝汶",
    "tr" => "土耳其",
    "tt" => "特立尼达和多巴哥",
    "tv" => "图瓦卢",
    "tw" => "台湾",
    "tz" => "坦桑尼亚",
    "ua" => "乌克兰",
    "ug" => "乌干达",
    "uk" => "(大不列颠)联合王国",
    "gb" => "英国",
    "um" => "United States Minor Outlying Islands",
    "us" => "美国",
    "uy" => "乌拉圭",
    "uz" => "乌兹别克斯坦",
    "va" => "梵蒂冈",
    "vc" => "圣文森特岛",
    "ve" => "委内瑞拉",
    "vg" => "大不列颠处女岛",
    "vi" => "美国处女岛",
    "vn" => "越南",
    "vu" => "瓦努阿图",
    "wf" => "沃利斯群岛",
    "ws" => "萨摩亚群岛",
    "ye" => "也门",
    "yt" => "马约特岛",
    "yu" => "南斯拉夫",
    "za" => "南非",
    "zm" => "赞比亚",
    "zr" => "扎伊尔",
    "zw" => "津巴布韦",
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
    "tv" => "图瓦卢",
    "ws" => "萨摩亚群岛",
);
?>