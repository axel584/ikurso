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
$lang['auteur_nom'] = "Eros"; // Translator's name
$lang['auteur_email'] = "php.twn@gmail.com"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "zh-tw"; // iso language code
$lang['lang_libelle_en'] = "Taiwanese"; // english language name
$lang['lang_libelle_fr'] = "Taïwanais"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = ''; // three thousand spells 3,000 in english
$lang['separateur_decimaux'] = '.'; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | 開放原始碼的網站流量分析統計軟體套件"; // Pages header's title
$lang['head_keywords'] = "網站訪客人數, 網站流量分析, 網站流量統計, 免費流量分析, 免費流量統計, php流量分析, php流量統計, 統計, 解析, 分析, 參照, 開放原始碼, 參訪, 搜尋引擎, 關鍵字, 網頁, 網站, statistics, analytics, analysis, referrer, stats, free, open source, visits, search engines, keywords, web, websites"; // Header keywords
$lang['head_description'] = "phpMyVisites | 一個以 GNU GPL 開放原始碼方式散佈的 php 網站流量分析統計免費應用套件"; // Header description
$lang['logo_description'] = "phpMyVisites | 開放原始碼的網站流量分析軟體套件"; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "&nbsp;<b>參訪統計</b>&nbsp;";
$lang['menu_pagesvues'] = "&nbsp;<b>頁面瀏覽</b>&nbsp;";
$lang['menu_suivi'] = "&nbsp;<b>行為追蹤</b>&nbsp;";
$lang['menu_provenance'] = "&nbsp;<b>訪客來源</b>&nbsp;";
$lang['menu_configurations'] = "&nbsp;<b>客端設定</b>&nbsp;";
$lang['menu_affluents'] = "&nbsp;<b>參照資訊</b>&nbsp;";
$lang['menu_listesites'] = "表列站台";
$lang['menu_bilansites'] = "統計彙總";
$lang['menu_jour'] = "<b>日統計</b>";
$lang['menu_semaine'] = "<b>週統計</b>";
$lang['menu_mois'] = "<b>月統計</b>";
$lang['menu_annee'] = "<b>年統計</b>";
$lang['menu_periode'] = "<b>統計作業的調查期間：</b>　%s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "<b>參觀官方網站</b>";
$lang['liens_admin'] = "<b>系統管理</b>";
$lang['liens_contacts'] = "<b>洽詢聯繫</b>";

//
// Divers
//
$lang['generique_nombre'] = "&nbsp;<b>數目</b>&nbsp;";
$lang['generique_tauxsortie'] = "<b>離站率</b>";
$lang['generique_ok'] = "<b>正確！</b>";
$lang['generique_timefooter'] = "<b>頁面生成時間：%s 秒</b>"; // Time in seconds
$lang['generique_divers'] = "其他的"; // (for the graphs)
$lang['generique_inconnu'] = "不明的"; // (for the graphs)
$lang['generique_vous'] = "... 您？";
$lang['generique_traducteur'] = "<b>翻譯者</b>";
$lang['generique_langue'] = "<b>使用語系</b>";
$lang['generique_autrelangure'] = "其他的語系？"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "於此時間區段內無訪客"; 
$lang['generique_aucune_visite_bdd'] = "<b>警告！在您的資料庫中目前站台並沒有訪客記錄！請確您已將您的 javascript 碼安裝於您的網頁中了！(包含了正確的 phpMyVisites URL 位址 <u>所在</u> 的 Javascript 碼！查看官方文件以取得幫助。</b>";
$lang['generique_aucune_site_bdd'] = "<b>在資料庫中無已註冊的站台！嘗試著以    phpMyVisites 超級使用者登入以增加一個新站台。</b>";
$lang['generique_retourhaut'] = "<b>回頁頂</b>";
$lang['generique_tempsvisite'] = "%s分 %s秒"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%s時"; // 4h means 4 hours
$lang['generique_siteno'] = "站台 %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "新聞傳報 %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "友站 %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "一般";
$lang['generique_user'] = "使用者 %s"; // User "Admin"
$lang['generique_previous'] = "上一頁";
$lang['generique_next'] = "下一頁";
$lang['generique_lowpop'] = "<b>不顯示較少人數部份的統計資料</b>";
$lang['generique_allpop'] = "<b>顯示包含所有人數的統計資料</b>";
$lang['generique_to'] = "至"; // 4 'to' 8
$lang['generique_total_on'] = "現為"; // 4 to 8 'on' 10
$lang['generique_total'] = "&nbsp;<b>總計</b>&nbsp;"; // 4 to 8 'on' 10
$lang['generique_information'] = "<b>資訊</b>";
$lang['generique_done'] = "完成！";
$lang['generique_other'] = "其他";
$lang['generique_description'] = "<b>描述：</b>";
$lang['generique_name'] = "<b>名稱：</b>";
$lang['generique_variables'] = "變數";
$lang['generique_logout'] = "<b>登出</b>";
$lang['generique_login'] = "<b>登入</b>";
$lang['generique_hits'] = "點閱次數";
$lang['generique_errors'] = "錯誤";
$lang['generique_site'] = "&nbsp;<b>站台</b>&nbsp;";
$lang['generique_help_novisits'] = "<b>提示：您有%s安裝追蹤器 (javascript 碼)%s 在您的網頁上了嗎？</b>";

//
// Authentication
//
$lang['login_password'] = "<b>密碼：</b>"; // lowercase
$lang['login_login'] = "<b>登入帳號：</b>"; // lowercase
$lang['login_error'] = "<b>無法登入！錯誤的登入帳號或密碼！</b>";
$lang['login_error_nopermission'] = "此特定的使用者無任何權限！請詢問超級使用者來設定您在 phpMyVisites 網站的檢視或管理權限。";
$lang['login_protected'] = "<b>您想要進入一個　%sphpMyVisites%s　的被保護區！</b>";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "<b>洽詢聯繫</b>";
$lang['contacts_langue'] = "<b>翻譯者</b>";
$lang['contacts_merci'] = "<b>特別感謝</b>";
$lang['contacts_auteur'] = "<b>撰寫文件、程式，並建立此　phpMyVisites　專案的作者是　<strong>Matthieu Aubry</strong>　先生！</b>";
$lang['contacts_questions'] = "<b> <strong>《技術性問題、回報程式臭蟲、建議事項》等問題，</strong>請直接使用官網論壇： %s ，而有其他的請求，請使用官方網站的平台洽詢作者！</b>"; // adresse du site
$lang['contacts_trad1'] = "<b>您想翻譯 phpMyVisites 成您的語言嗎？別猶豫！因為 <strong>phpMyVisites 需要您！</strong></b>";
$lang['contacts_trad2'] = "<b>翻譯 phpMyVisites 只花一點時間 (幾個鐘頭) 而且需要複雜語言的良好知識；但請記得 <strong>您所有的工作都將讓大量的使用者獲益！</strong> 假如您有興趣翻譯 phpMyVisites 您可以在 %s 找到您所需要的所有資訊，以及 phpMyVisites 官方文件 %s。</b>"; // Documentation link
$lang['contacts_doc'] = "<b>別遲疑！請馬上連結至 %sphpMyVisites 官方文件%s 您將可以由此獲得大量關於　phpMyVisites　的安裝、設定及功能說明文件！現已有符合您的　phpMyVisites　版本！</b>"; // lien vers la doc
$lang['contacts_thanks_dev'] = "<b>特別要感謝　<strong>%s</strong>　等　phpMyVisites　核心開發者，此專案就是由於他們的高優質工作而完成！</b>";
$lang['contacts_merci3'] = "<b>別遲疑！請馬上連結至我們官方網站的　acknowledgments　(知識庫）頁面，在那兒您可以取得　phpMyVisites　的完整朋友清單！</b>";
$lang['contacts_merci2'] = "<b>當然也要大大地感謝為　phpMyVisites　翻譯而分享了他們文化的這些朋友：</b>";

//
// Rss & Mails
//
$lang['rss_titre'] = "站台 %s 於 %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "看詳細的統計資料";
$lang['mail_sender_name'] = "網站統計資料 (自動產生)";

//
// Visits Part
//
$lang['visites_titre'] = "訪客的統計資訊"; 
$lang['visites_statistiques'] = "統計報告";
$lang['visites_periodesel'] = "於所選擇的統計時間區段內";
$lang['visites_visites'] = "參訪次數";
$lang['visites_uniques'] = "獨立訪客";
$lang['visites_pagesvues'] = "所瀏覽的頁面總數";
$lang['visites_pagesvisiteurs'] = "每位訪客平均瀏覽的頁面數"; 
$lang['visites_pagesvisites'] = "每次參訪瀏覽的頁面數"; 
$lang['visites_pagesvisitessign'] = "每個有效參訪的平均瀏覽頁面數"; 
$lang['visites_tempsmoyen'] = "參訪的平均停留時間";
$lang['visites_tempsmoyenpv'] = "頁面的平均觀看時間";
$lang['visites_tauxvisite'] = "單頁參訪率"; 
$lang['visites_average_visits_per_day'] = "每日平均參訪率"; 
$lang['visites_recapperiode'] = "統計的彙總期間";
$lang['visites_nbvisites'] = "參訪次數";
$lang['visites_aucunevivisite'] = "無訪客"; // in the table, must be short
$lang['visites_recap'] = "統計彙總";
$lang['visites_unepage'] = "1 頁"; // (graph)
$lang['visites_pages'] = "%s 頁"; // 1-2 pages (graph)
$lang['visites_min'] = "%s分"; // 10-15 min (graph)
$lang['visites_sec'] = "%s秒"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "統計彙總圖表";
$lang['visites_grapghrecaplongterm'] = "長期統計彙總圖表";
$lang['visites_graphtempsvisites'] = "訪客參訪的停留時間圖表";
$lang['visites_graphtempsvisitesimg'] = "訪客參訪的停留時間";
$lang['visites_graphheureserveur'] = "此伺服器每個鐘頭的參訪次數圖表"; 
$lang['visites_graphheureserveurimg'] = "依伺服器時間記錄的參訪次數"; 
$lang['visites_graphheurevisiteur'] = "訪客每個鐘頭的參訪次數圖表";
$lang['visites_graphheurelocalimg'] = "依訪客主機時間記錄的參訪次數"; 
$lang['visites_longterm_statd'] = "長期走勢分析 ( 於統計期間之各日 )";
$lang['visites_longterm_statm'] = "長期走勢分析 ( 於統計期間之各月 )";

//
// Sites Summary
//
$lang['summary_title'] = "<b>網站的統計彙總</b>";
$lang['summary_stitle'] = "<b>統計彙總</b>";

//
// Frequency Part
//
$lang['frequence_titre'] = "訪客重返網站的頻率";
$lang['frequence_nouveauxconnusgraph'] = "新舊訪客的參訪次數比較圖表";
$lang['frequence_nouveauxconnus'] = "新舊訪客的參訪次數比較";
$lang['frequence_titremenu'] = "&nbsp;<b>重返頻率</b>&nbsp;";
$lang['frequence_visitesconnues'] = "重返訪客";
$lang['frequence_nouvellesvisites'] = "新到訪客";
$lang['frequence_visiteursconnus'] = "舊訪客";
$lang['frequence_nouveauxvisiteurs'] = "新訪客";
$lang['frequence_returningrate'] = "重返率";
$lang['pagesvues_vispervisgraph'] = "每個訪客的參訪次數統計圖表";
$lang['frequence_vispervis'] = "每個訪客的參訪次數";
$lang['frequence_vis'] = "次參訪";
$lang['frequence_visit'] = "　參訪 1 次"; // (graph)
$lang['frequence_visits'] = "　參訪 %s 次"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "頁面瀏覽統計資訊";
$lang['pagesvues_joursel'] = "指定的<br>統計日期";
$lang['pagesvues_jmoins7'] = "至指定日的<br>過去一週內";
$lang['pagesvues_jmoins14'] = "至指定日的<br>過去兩週內";
$lang['pagesvues_moyenne'] = "(平均)";
$lang['pagesvues_pagesvues'] = "頁面瀏覽次數";
$lang['pagesvues_pagesvudiff'] = "單頁瀏覽次數";
$lang['pagesvues_recordpages'] = "個別訪客的最高瀏覽頁數記錄";
$lang['pagesvues_tabdetails'] = "網頁及群組瀏覽";
$lang['pagesvues_graphsnbpages'] = "依所瀏覽頁數統計的圖表";
$lang['pagesvues_graphnbvisitespageimg'] = "依瀏覽頁數統計";
$lang['pagesvues_graphheureserveur'] = "依伺服器時間記錄的參訪次數圖表";
$lang['pagesvues_graphheureserveurimg'] = "依伺服器時間記錄的參訪次數";
$lang['pagesvues_graphheurevisiteur'] = "依訪客主機時間記錄的參訪次數圖表";
$lang['pagesvues_graphpageslocalimg'] = "依訪客主機時間記錄的參訪次數";
$lang['pagesvues_tempsparpage'] = "依頁面瀏覽的時間統計";
$lang['pagesvues_total_time'] = "總時間";
$lang['pagesvues_avg_time'] = "平均時間";
$lang['pagesvues_help_pagename'] = "您知道您可以為此統計頁面賦予您的網頁一個較親和的名稱嗎？";
$lang['pagesvues_help_track_dls'] = "您知道您可以追蹤下載次數及外部的 Url 位址連結的點擊次數嗎？";

//
// Follows-Up
//
$lang['suivi_titre'] = "訪客於站內的活動";
$lang['suivi_pageentree'] = "進站頁面";
$lang['suivi_pagesortie'] = "離站頁面";
$lang['suivi_tauxsortie'] = "各頁面離站率";
$lang['suivi_pageentreehits'] = "進站頁面點閱次數";
$lang['suivi_pagesortiehits'] = "離站頁面點閱次數";
$lang['suivi_singlepage'] = "僅作單頁參訪的次數";

//
// Origin
//
$lang['provenance_titre'] = "訪客的來源位置";
$lang['provenance_recappays'] = "訪客的來源國家彙總";
$lang['provenance_pays'] = "國家";
$lang['provenance_paysimg'] = "依國家繪製的訪客來源圖表";
$lang['provenance_fai'] = "網際網路服務供應商";
$lang['provenance_nbpays'] = "<b>不同國家的數量共有： %s 個</b>";
$lang['provenance_provider'] = "網路服務供應商"; // must be short
$lang['provenance_continent'] = "世界大陸洲";
$lang['provenance_mappemonde'] = "訪客來源的世界分佈圖";
$lang['provenance_interetspays'] = "<b>客源國家的比例分析</b>";

//
// Setup
//
$lang['configurations_titre'] = "訪客端的設定";
$lang['configurations_os'] = "作業系統";
$lang['configurations_osimg'] = "訪客使用的作業系統圖表";
$lang['configurations_navigateurs'] = "瀏覽器";
$lang['configurations_navigateursimg'] = "訪客所使用的瀏覽器統計圖表";
$lang['configurations_resolutions'] = "畫面解析度";
$lang['configurations_resolutionsimg'] = "畫面解析度統計圖表";
$lang['configurations_couleurs'] = "色彩濃度";
$lang['configurations_couleursimg'] = "訪客端所使用的色彩濃度統計圖表";
$lang['configurations_rapport'] = "傳統 / 寬螢幕";
$lang['configurations_large'] = "寬螢幕";
$lang['configurations_normal'] = "傳統螢幕";
$lang['configurations_double'] = "雙螢幕";
$lang['configurations_plugins'] = "瀏覽器外掛";
$lang['configurations_navigateursbytype'] = "瀏覽器 (依類型)";
$lang['configurations_navigateursbytypeimg'] = "訪客所使用的瀏覽器類型圖表";
$lang['configurations_os_interest'] = "<b>作業系統的使用比例</b>";
$lang['configurations_navigateurs_interest'] = "<b>瀏覽器的使用比例</b>";
$lang['configurations_resolutions_interest'] = "<b>畫面解析度的使用比例</b>";
$lang['configurations_couleurs_interest'] = "<b>色彩濃度的喜好趨向</b>";
$lang['configurations_configurations'] = "最佳使用設定";

//
// Referers
//
$lang['affluents_titre'] = "由客端瀏覽器發送的參照資訊";
$lang['affluents_recapimg'] = "依參照資訊所繪製的訪客參照來源比例圖表";
$lang['affluents_directimg'] = "直接連結";
$lang['affluents_sitesimg'] = "由網站連結";
$lang['affluents_moteursimg'] = "從搜尋引擎連結";
$lang['affluents_referrersimg'] = "訪客連結到站的參照來源";
$lang['affluents_moteurs'] = "使用的搜尋引擎";
$lang['affluents_nbparmoteur'] = "<b>由搜尋引擎提供的到站參訪數： %s</b>";
$lang['affluents_aucunmoteur'] = "<b>無來自搜尋引擎所提供的參訪</b>";
$lang['affluents_motscles'] = "於搜尋引擎中輸入的關鍵字";
$lang['affluents_nbmotscles'] = "<b>區別搜尋的關鍵字： %s</b>";
$lang['affluents_aucunmotscles'] = "<b>沒有發現搜尋關鍵字</b>";
$lang['affluents_sitesinternet'] = "從其他網站連結";
$lang['affluents_nbautressites'] = "<b>由其他網站提供的到站參訪數： %s</b>";
$lang['affluents_nbautressitesdiff'] = "<b>其他不同網站的數目： %s</b>";
$lang['affluents_aucunautresite'] = "<b>無來自其他網站所提供的參訪</b>";
$lang['affluents_entreedirecte'] = "直接輸入網址的連結請求";
$lang['affluents_nbentreedirecte'] = "<b>直接請求的到站參訪數： %s</b>";
$lang['affluents_nbpartenaires'] = "<b>由友站提供的到站參訪數： %s</b>";
$lang['affluents_aucunpartenaire'] = "<b>無來自友站所提供的參訪</b>";
$lang['affluents_nbnewsletters'] = "<b>由新聞傳報提供的到站參訪數： %s</b>";
$lang['affluents_aucunnewsletter'] = "<b>無來自新聞傳報所提供的參訪</b>";
$lang['affluents_details'] = "細節項目";
$lang['affluents_interetsmoteurs'] = "<b>搜尋引擎的喜好趨向</b>";
$lang['affluents_interetsmotscles'] = "<b>搜尋的關鍵字喜好趨向</b>";
$lang['affluents_interetssitesinternet'] = "<b>其他參照網站的喜好趨向</b>";
$lang['affluents_partenairesimg'] = "友站";
$lang['affluents_partenaires'] = "從友站連結";
$lang['affluents_interetspartenaires'] = "<b>友站喜好趨向</b>";
$lang['affluents_newslettersimg'] = "來自新聞傳報";
$lang['affluents_newsletters'] = "從新聞傳報連結";
$lang['affluents_interetsnewsletters'] = "<b>新聞傳報喜好趨向</b>";
$lang['affluents_type'] = "<b>參照的類型</b>";
$lang['affluents_interetstype'] = "<b>到站存取的連結類型比例</b>";

//
// Summary
//
$lang['purge_titre'] = "參訪次數及參照來源的彙總";
$lang['purge_intro'] = "此時間區段已被使用系統管理功能移除，只有必要的統計資料被保留！";
$lang['admin_purge'] = "資料庫維護";
$lang['admin_purgeintro'] = "這個部份是讓您管理 phpMyVisites 資料表的使用！您可以檢視被資料表使用掉的磁碟空間大小、最佳化它們，或者移除舊記錄！這將讓您能有效限制資料庫中資料表的容量大小！";
$lang['admin_optimisation'] = "最佳化 [ %s ]中..."; // Tables names
$lang['admin_postopt'] = "總大小共縮減了 %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "移除以下時間區段： %s";
$lang['admin_purge_fini'] = "完成刪除資料表...";
$lang['admin_bdd_nom'] = "名稱";
$lang['admin_bdd_enregistrements'] = "記錄";
$lang['admin_bdd_taille'] = "資料表大小";
$lang['admin_bdd_opt'] = "最佳化";
$lang['admin_bdd_purge'] = "重整的標準";
$lang['admin_bdd_optall'] = "全部最佳化";
$lang['admin_purge_j'] = "移除 %s 天之前的記錄";
$lang['admin_purge_s'] = "移除 %s 週之前的記錄";
$lang['admin_purge_m'] = "移除 %s 個月之前的記錄";
$lang['admin_purge_y'] = "移除 %s 年之前的記錄";
$lang['admin_purge_logs'] = "移除所有日誌記錄";
$lang['admin_purge_autres'] = "重整公用資料表 '%s'";
$lang['admin_purge_none'] = "無可能的活動";
$lang['admin_purge_cal'] = "計算與重整 (這可能花費數分鐘)";
$lang['admin_alias_title'] = "網站別名與 URL 位址";
$lang['admin_partner_title'] = "網站的友站";
$lang['admin_newsletter_title'] = "網站的新聞傳報";
$lang['admin_ip_exclude_title'] = "排除統計的 IP 位址範圍";
$lang['admin_name'] = "名稱：";
$lang['admin_error_ip'] = "IP 位址的格式錯誤： %s";
$lang['admin_site_name'] = "<b>站台名稱：</b><br/>(如 www.phpmyvisites.net )";
$lang['admin_site_url'] = "<b>站台主要 URL 名稱位址：</b><br/>(如 http://www.phpmyvisites.net )";
$lang['admin_db_log'] = "嘗試以 phpMyVisites 超級使用者登入去變更資料庫設定！";
$lang['admin_error_critical'] = "<b>錯誤！請修正以使 phpMyVisites 能正常工作！</b>";
$lang['admin_warning'] = "<b>警告！phpMyVisites 將能正常工作，但可能有些附加的功能無法正常使用！</b>";
$lang['admin_move_group'] = "<b>轉移至群組：</b>";
$lang['admin_move_select'] = "請選擇一個群組";

//
// Setup
//
$lang['admin_intro'] = "<b>歡迎來到　phpMyVisites　設定園地！您可以變更所有跟您的安裝有關的資訊。倘若您有任何問題，千萬別猶豫！請馬上直接連結至：%s phpMyVisites 官方文件%s</b>"; // link to the doc
$lang['admin_configetperso'] = "一般設定";
$lang['admin_afficherjavascript'] = "<b>顯示 JavaScript 統計碼</b>";
$lang['admin_cookieadmin'] = "<b>將管理員排除統計 (使用 cookie)</b>";
$lang['admin_ip_ranges'] = "<b>於統計時不予計數的 IP 或 IP 範圍</b>";
$lang['admin_sitesenregistres'] = "<b>已記載的網站：</b>";
$lang['admin_retour'] = "返回";
$lang['admin_cookienavigateur'] = "<b>您可以將管理員排除統計！這個方法是基於使用 cookies ，而且此設定將只對目前的瀏覽器有效！您可以在任何時侯變更這個設定！</b>";
$lang['admin_prendreencompteadmin'] = "將管理員包含計數在統計之中 (刪除 cookie)";
$lang['admin_nepasprendreencompteadmin'] = "將管理員排除統計 (建立一個 cookie)";
$lang['admin_etatcookieoui'] = "<b>於此網站，管理員目前被包含計數在統計之中 (這是預設設定，您被視為一個一般訪客)</b>";
$lang['admin_etatcookienon'] = "<b>您目前不被包含計數於此網站的統計之中！ (您的參訪次數在此網站將不被計算)</b>";
$lang['admin_deleteconfirm'] = "請確認您想刪除 %s 嗎？";
$lang['admin_sitedeletemessage'] = "<b>請 <u>千萬要非常小心</u>： 所有關於此站台的資料將被刪除<br>並且沒有任何方法可以再復原資料！</b>";
$lang['admin_confirmyes'] = "<b>是的！我要刪除它！</b>";
$lang['admin_confirmno'] = "<b>不！我不想刪除它！</b>";
$lang['admin_nonewsletter'] = "於此站台無新聞傳報設定記錄！";
$lang['admin_nopartner'] = "於此站台無友站設定記錄！";
$lang['admin_get_question'] = "<b>要記錄 GET 變數資料嗎？ (URL 位址變數)：</b>";
$lang['admin_get_a1'] = "<b>記錄所有的 URL 位址變數</b>";
$lang['admin_get_a2'] = "<b>不記錄任何的 URL 位址變數</b>";
$lang['admin_get_a3'] = "<b>只記錄特殊的變數</b>";
$lang['admin_get_a4'] = "<b>記錄所有非特殊的變數</b>";
$lang['admin_get_list'] = "<b>變數的名稱 (請以 ; 分號分隔項目) <br/>例如： %s</b>";
$lang['admin_required'] = "<b>%s 是必要的！</b>";
$lang['admin_title_required'] = "<b>需求</b>";
$lang['admin_write_dir'] = "<b>可寫入的資料夾</b>";
$lang['admin_chmod_howto'] = "<b>於此伺服器的這些目錄必須是可寫入的！這表示您必須 chmod 777 它們，以您的 FTP 軟體 (於目錄上按右鍵 -> 權限 (或 chmod))！</b>";
$lang['admin_optional'] = "<b>選項</b>";
$lang['admin_memory_limit'] = "<b>記憶體限制</b>";
$lang['admin_allowed'] = "允許";
$lang['admin_webserver'] = "<b>網頁伺服器</b>";
$lang['admin_server_os'] = "<b>伺服器作業系統</b>";
$lang['admin_server_time'] = "<b>服務時間</b>";
$lang['admin_legend'] = "<b>註：</b>";
$lang['admin_error_url'] = "URL 位址格式必須作修正： %s (後面不可有斜線)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URL 位址別名";
$lang['admin_logo_question'] = "要顯示 logo 嗎？";
$lang['admin_type_again'] = "<b>(再輸入一次確認)：</b>";
$lang['admin_admin_mail'] = "<b>超級管理員電子郵件位址：</b>";
$lang['admin_admin'] = "<b>超級管理員</b>";
$lang['admin_phpmv_path'] = "<b>phpMyVisites 應用套件的完整路徑(注意：此路徑關係到追蹤器的反饋位址！)，例如：</b><br/>“http://您的網址/phpmv2”<br/>(正式使用)<br/>“http://localhost/phpmv2”<br/>(本機測試用)";
$lang['admin_valid_email'] = "<b>電子郵件位址必須是一個有效的電子郵件</b>";
$lang['admin_valid_pass'] = "<b>密碼必須更為複雜 (至少要 6 個字元並且須包含數字)！</b>";
$lang['admin_match_pass'] = "<b>密碼不相符</b>";
$lang['admin_no_user_group'] = "<b>此站台的這個群組沒有使用者！</b>";
$lang['admin_recorded_nl'] = "<b>已記錄的新聞傳報：</b>";
$lang['admin_recorded_partners'] = "<b>已記錄的友站：</b>";
$lang['admin_recorded_users'] = "<b>已記載的使用者：</b>";
$lang['admin_select_site_title'] = "請選擇一個站台";
$lang['admin_select_user_title'] = "請選擇一位使用者";
$lang['admin_no_user_registered'] = "無已註冊的使用者！";
$lang['admin_configuration'] = "設定";
$lang['admin_general_conf'] = "<b>一般設定</b>";
$lang['admin_group_title'] = "<b>群組管理 (權限)</b>";
$lang['admin_user_title'] = "使用者管理";
$lang['admin_user_add'] = "<b>增加使用者</b>";
$lang['admin_user_mod'] = "<b>變更使用者</b>";
$lang['admin_user_del'] = "<b>刪除使用者</b>";
$lang['admin_server_info'] = "<b>伺服器資訊</b>";
$lang['admin_send_mail'] = "<b>立即使用電子郵件系統傳送統計資料</b>";
$lang['admin_rss_feed'] = "<b>將統計資料製作成 RSS feed 格式</b>";
$lang['admin_site_admin'] = "站台管理員";
$lang['admin_site_add'] = "<b>增加站台</b>";
$lang['admin_site_mod'] = "<b>變更站台</b>";
$lang['admin_site_del'] = "<b>刪除站台</b>";
$lang['admin_nl_add'] = "<b>增加新聞傳報</b>";
$lang['admin_nl_mod'] = "<b>變更新聞傳報</b>";
$lang['admin_nl_del'] = "<b>刪除新聞傳報</b>";
$lang['admin_partner_add'] = "<b>增加友站</b>";
$lang['admin_partner_mod'] = "<b>變更友站的名稱及 URL 位置</b>";
$lang['admin_partner_del'] = "<b>刪除友站</b>";
$lang['admin_url_alias'] = "<b>URL 位址別名管理</b>";
$lang['admin_group_admin_n'] = "<b>檢視統計資料 + 管理員權限</b>";
$lang['admin_group_admin_d'] = "<b>使用者可以檢視站台的統計資料並且編輯站台的資訊 (諸如：名稱、增加 cookie、排除 IP 範圍、管理 URL 位址　別名 / 友站 / 新聞傳報 等設定！)</b>";
$lang['admin_group_view_n'] = "<b>檢視統計資料</b>";
$lang['admin_group_view_d'] = "<b>使用者僅能檢視站台的統計資料，無管理員權限！</b>";
$lang['admin_group_noperm_n'] = "<b>沒有權限</b>";
$lang['admin_group_noperm_d'] = "<b>在此群組的使用者沒有任何檢視統計資料或編輯資訊的權限！</b>";
$lang['admin_group_stitle'] = "<b>您可以編輯您所想變更的使用者之群組，然後選擇一個您想要將使用者轉移過去的群組！</b>";
$lang['admin_url_generate_download_link_example'] = "<b>下載檔案之位址或 URL 位址重新導向至一個外部網站</b>";
$lang['admin_url_generate_title'] = "<b>檔案下載或是外部 Url 位址重導向連結之 Url 產生器</b>";
$lang['admin_url_generate_intro'] = "phpMyVisites 能計數您的檔案下載次數，並且也可以追蹤外部 URL 位址重導向連結的點擊次數。下載次數及 URL 位址重導向連結追蹤將出現在 phpMyVisites“頁面瀏覽”的統計頁面中。 </p><p class='texte'> 為完成這個工作，您必須使用一個 URL 來指向 phpmyvisites 套件之檔案，然後它將被重新導向至您需要的 URL 位址。由於並非如此容易地來產生這樣一個 URL，這裏提供了一個工具可以使這個工作變得輕而易舉 (因為使用 phpMyVisites 對我們來說必須是一個簡單而又強有力的體驗)。簡單地填入表格中，點擊“Generate URL”(產生 URL) 鈕，然後您將可以非常容易地計數您的檔案下載次數或外部的 URL 位址重導向連結！";
$lang['admin_url_generate_site_selection'] = "<b>選擇您想計數檔案下載次數或 URL 位址重導向連結點擊次數的站台</b>";
$lang['admin_url_generate_enter_url'] = "<b>輸入您的檔案之完整位址或者您想在統計資料中追蹤的外部 Url 位址連結：</b>";
$lang['admin_url_generate_help_enter_url'] = "說明：它必須類似於 '<b>http://www.yoursite.com/file/brilliant-software.zip</b>' 亦或是提供任何的 URL 位址重導向連結，如 '<b>http://www.the-site-to-redirect.com</b>'";
$lang['admin_url_generate_friendly_name'] = "<b>較親和的檔案或 URL 位址名稱顯示將被使用於頁面瀏覽統計頁中：</b>"; 
$lang['admin_url_generate_help_friendly_name'] = "說明：您可以在 phpMyVisites 的頁面瀏覽統計頁中將“檔案或 Url 位址重導向連結”作個分類以提供一個最佳的顯示。您可以以'<b>/</b>'符號來分隔其分類及其檔案或 Url 位址重新導向。舉例來說：其名稱可以像 '<b>my photos download/Summer in France</b>' 或 '<b>Partners/PHP.net website</b>' ：它將各別地分類在資料夾 '<b>my photos downloads</b>' 或在資料夾 '<b>Partners</b>' ：您將會在您的 phpMyVisites 介面的 '頁面瀏覽' 統計頁中看見它們在資料夾中。";
$lang['admin_url_generate_result_url'] = "<b>以下是您可連結使用的 URL ：</b>";
$lang['admin_url_generate_html_result'] = "<b>以下是您可用的 HTML 連結，對您來說或許有用：</b>";
$lang['admin_url_generate_image_legend'] = "<b>包含了 URL 位址連結及檔案下載追蹤的頁面瀏覽統計範例：</b>";
$lang['admin_site_link_javascript'] = "%s現在您必須把此追蹤器安裝於您的網頁上 (複製貼上此 Javascript 碼)。點這兒來顯示此 javascript 碼！%s";
$lang['admin_last_version'] = "<b>您已經擁有 phpMyVisites 的最新版了嗎？ (極力推薦！)</b>";
$lang['admin_general_config_firstday'] = "<b>將日曆中一週的開始定義為？</b>";
$lang['admin_default_language'] = "<b>預設語系為何？</b><br/>它也將是電子郵件的預設語系。";

//
// Pdf export
//
$lang['pdf_generate_link'] = "<b>為站台 %s 產生一份 PDF 來呈現所有<br/>統計資料</b><br/>(請先將語系切換至 English 再操作)";
$lang['pdf_summary_generate_link'] = "<b>產生一份 PDF 來呈現統計彙總</b><br/>(請先將語系切換至 English 再操作)";
$lang['pdf_free_page'] = "釋放新頁面";
$lang['pdf_free_chapter'] = "釋放標題篇";
$lang['pdf_page_break'] = "頁面中斷";
$lang['pdf_page_summary'] = "PDF 彙總";
$lang['generique_pdfno'] = "PDF %s"; // Newsletter "version 2 announcement" 
$lang['admin_pdf_title'] = "網站 PDF"; 
$lang['admin_nopdf'] = "此站台沒有發現 pdf！";
$lang['admin_recorded_pdf'] = "已記錄的 PDF 檔案：";
$lang['admin_pdf_add'] = "增加 PDF"; 
$lang['admin_pdf_mod'] = "變更 PDF"; 
$lang['admin_pdf_del'] = "刪除 PDF"; 
$lang['generique_pdf'] = "PDF";

//
// Installation Step
//
$lang['install_loginmysql'] = "<b>資料庫登入帳號：</b>";
$lang['install_mdpmysql'] = "<b>資料庫登入密碼：</b>";
$lang['install_serveurmysql'] = "<b>資料庫伺服主機名稱：</b><br/>如：localhost";
$lang['install_basemysql'] = "<b>資料庫名稱：</b><br/>如：phpmv";
$lang['install_prefixetable'] = "<b>資料表前綴：</b><br/>如：phpmv_";
$lang['install_utilisateursavances'] = "<b>進階使用者 (非必要設定)</b>";
$lang['install_oui'] = "<b>是</b>";
$lang['install_non'] = "<b>否</b>";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "<b>問題：</b>";
$lang['install_DirectoriesWriteError'] = "<b>發生問題！</b><br/>無法寫入 %s 資料夾！請驗證您在此伺服器上有必要的建立檔案權限 (試著以您的 FTP 軟體 CHMOD 755 此資料夾：在此目錄上按右鍵 -> 權限 (或 CHMOD)。<br/><br/>假如 CHMOD 無法在您的 FTP 軟體上工作，試著刪除 (假如它存在) 此目錄，並用您的 FTP 軟體建立它們。";
$lang['install_loginadmin'] = "<b>超級管理員登入帳號：</b>";
$lang['install_mdpadmin'] = "<b>超級管理員密碼：</b><br/>(至少６碼且須包含數字）";
$lang['install_chemincomplet'] = "<b>phpMyVisites 應月套件的完整路徑 (如 http://www.mysite.com/rep1/rep3/phpmyvisites/) 路徑必須以一個 <strong>/</strong> 作為結束！</b>";
$lang['install_afficherlogo'] = "<b>要在您的網頁上展示 logo 嗎？ %s <br />藉由允許在您的站台顯示此 logo，您將幫助宣傳 phpMyVisites 並且能幫助她快速地成長！這也是一種感謝花費了許多時間來開發此開放原始碼、自由（免費）軟體作者的好辦法！</b>"; // %s replaced by the logo image
$lang['install_affichergraphique'] = "顯示統計圖表";
$lang['install_valider'] = "送出"; // during installation and for login
$lang['install_popup_logo'] = "<b>請選擇一個 logo！</b>";
$lang['install_logodispo'] = "<b>看看有哪些可用的 logo！</b>";
$lang['install_welcome'] = "<b>歡迎！</b>";
$lang['install_system_requirements'] = "<b>系統需求</b>";
$lang['install_database_setup'] = "<b>資料庫設定</b>";
$lang['install_create_tables'] = "<b>建立資料表</b>";
$lang['install_general_setup'] = "<b>一般設定</b>";
$lang['install_create_config_file'] = "<b>建立設定檔</b>";
$lang['install_first_website_setup'] = "<b>加入第一個網站</b>";
$lang['install_display_javascript_code'] = "<b>顯示 Javascript 碼</b>";
$lang['install_finish'] = "<b>安裝完成！</b>";
$lang['install_txt2'] = "<b>當完成安裝之後，一個請求將被送至官方站台來幫助我們記錄人們使用 phpMyVisites的 數量！感謝您的體諒！</b>";
$lang['install_database_setup_txt'] = "<b>請輸入您的資料庫設定！<br/>◎若為首次使用者，在繼續以下操作前請記得先用 phpMyAdmin 於 MySQL 伺服器建立一個以 utf8_unicode_ci 為對應編碼的資料庫，資料庫參考名稱如：phpmv</b>";
$lang['install_general_config_text'] = "<b>phpMyVisites 將僅有一個唯一具有完全存取權限可供檢視或變更所有一切的管理員使用者！請為您的超級管理員帳號設定一個使用者名稱及密碼！您可以在稍後增加其他的使用者！</b>";
$lang['install_config_file'] = "<b>管理級使用者資料輸入成功！</b>";
$lang['install_js_code_text'] = "<p><b>要能計數所有的訪客量，您必須插入這些 javascript 碼在您所有的網頁中！</b></p><p><b>您的網頁並不一定要製作成 PHP， </b><strong>phpMyVisites 將可工作於所有種類的網頁 (像是 HTML, ASP, Perl 或是任何其他語言的網頁)。</strong> </p><p><b>以下就是您必須插入的 javascript 碼：(複製並貼在您所有的網頁中)</b></p>";
$lang['install_intro'] = "<b>歡迎您安裝 phpMyVisites！</b>"; 
$lang['install_intro2'] = "<b>此設定過程分為 %s 個簡單的步驟，且只花大約 10 分鐘的時間！</b>";
$lang['install_next_step'] = "下一步";
$lang['install_status'] = "<b>安裝狀態</b>";
$lang['install_done'] = "<b>安裝完成 %s%% ！</b>"; // Install 25% complete
$lang['install_site_success'] = "<b>網站已成功地被建立！</b>";
$lang['install_site_info'] = "<b>請輸入關於第一個網站的所有資訊！</b>";
$lang['install_go_phpmv'] = "<b>進入 phpMyVisites！</b>";
$lang['install_congratulation'] = "<b>恭喜！ 您的 phpMyVisites 安裝設定已經完成！<br/>◎為使繪圖字型能正常顯示，請記得下載字型檔 simsun.ttc：<br/>http://www.phpmyvisites.net/fichiers/simsun.ttc<br/>並將之置於 phpmv2/libs/artichow/font/ 目錄中！</b>";
$lang['install_end_text'] = "<b>請確定您的 javascript 碼已被插入至您的網頁之中，然後就可以坐著等您的第一位訪客來囉！</b>";
$lang['install_db_ok'] = "<b>成功連接至資料庫伺服器！</b>";
$lang['install_table_exist'] = "<b>phpMyVisites 資料表已存在於資料庫中！</b>";
$lang['install_table_choice'] = "<b>請選擇繼續使用現存的資料表(保留舊資料)或是直接清除所有資料表！</b>";
$lang['install_table_erase'] = "<b>清除所有資料表 (請特別注意！)</b>";
$lang['install_table_reuse'] = "<b>繼續使用現存的資料表</b>";
$lang['install_table_success'] = "<b>資料表已成功地被建立！</b>";
$lang['install_send_mail'] = "<b>要每天接收一封包含每個站台統計資料彙總的郵件嗎？</b>";

//
// Update Step
//
$lang['update_title'] = "<b>更新 phpMyVisites</b>";
$lang['update_subtitle'] = "<b>我們檢測到您正在更新 phpMyVisites 中！</b>";
$lang['update_versions'] = "<b>您先前的版本是 %s 而現在我們必須將她更新至 %s！</b>";
$lang['update_db_updated'] = "<b>您的資料庫已經被成功地更新了！</b>";
$lang['update_continue'] = "<b>繼續執行 phpMyVisites ！</b>";
$lang['update_jschange'] = "<b>警告！<br /> 此 phpMyVisites javascript 碼已經變更！您“必須”更新您的網頁並且 複製 / 貼上 此一新的 phpMyVisites Javascript 在“所有”您所配置的站台！<br />此變更 javascript 碼的動作並不會經常發生，我們為提醒您做此變更對您所產生的困擾感到抱歉！</b>";

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
$lang['tdate1'] = "%yearlong%年 %monthlong% %daynumeric%日　%daylong%";

// Monday 10
$lang['tdate2'] = "%daynumeric%日 %daylong%";

// Week February 10 To February 17 2004
$lang['tdate3'] = "從 %yearlong%年　%monthlong% %daynumeric%日 至 %monthlong2% %daynumeric2%日 整週";

// February 2004 Month
$lang['tdate4'] = "%yearlong%年 %monthlong% 全月";

// December 2003
$lang['tdate5'] = "%yearlong%年 %monthlong%";

// 10 Febuary week
$lang['tdate6'] = "%monthshort%%daynumeric% 整週";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%yearlong%-%monthnumeric%-%daynumeric%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = "%daynumeric%%dayshort%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9'] = "Week %daynumeric% %monthshort%";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%yearshort%年%monthshort%";

// Year 2004
$lang['tdate11'] = "%yearlong%年 全年";

// 2004
$lang['tdate12'] = "%yearlong%";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "1月";
$lang['moistab']['02'] = "2月";
$lang['moistab']['03'] = "3月";
$lang['moistab']['04'] = "4月";
$lang['moistab']['05'] = "5月";
$lang['moistab']['06'] = "6月";
$lang['moistab']['07'] = "7月";
$lang['moistab']['08'] = "8月";
$lang['moistab']['09'] = "9月";
$lang['moistab']['10'] = "10月";
$lang['moistab']['11'] = "11月";
$lang['moistab']['12'] = "12月";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "1月";
$lang['moistab_graph']['02'] = "2月";
$lang['moistab_graph']['03'] = "3月";
$lang['moistab_graph']['04'] = "4月";
$lang['moistab_graph']['05'] = "5月";
$lang['moistab_graph']['06'] = "6月";
$lang['moistab_graph']['07'] = "7月";
$lang['moistab_graph']['08'] = "8月";
$lang['moistab_graph']['09'] = "9月";
$lang['moistab_graph']['10'] = "10月";
$lang['moistab_graph']['11'] = "11月";
$lang['moistab_graph']['12'] = "12月";

// Day of the week
$lang['jsemaine']['Mon'] = "星期一";
$lang['jsemaine']['Tue'] = "星期二";
$lang['jsemaine']['Wed'] = "星期三";
$lang['jsemaine']['Thu'] = "星期四";
$lang['jsemaine']['Fri'] = "星期五";
$lang['jsemaine']['Sat'] = "星期六";
$lang['jsemaine']['Sun'] = "星期日";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "週一";
$lang['jsemaine_graph']['Tue'] = "週二";
$lang['jsemaine_graph']['Wed'] = "週三";
$lang['jsemaine_graph']['Thu'] = "週四";
$lang['jsemaine_graph']['Fri'] = "週五";
$lang['jsemaine_graph']['Sat'] = "週六";
$lang['jsemaine_graph']['Sun'] = "週日";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "一";
$lang['calendrier_jours'][1] = "二";
$lang['calendrier_jours'][2] = "三";
$lang['calendrier_jours'][3] = "四";
$lang['calendrier_jours'][4] = "五";
$lang['calendrier_jours'][5] = "六";
$lang['calendrier_jours'][6] = "日";

// DO NOT ALTER!
$lang['weekdays']['Mon'] = '1';
$lang['weekdays']['Tue'] = '2';
$lang['weekdays']['Wed'] = '3';
$lang['weekdays']['Thu'] = '4';
$lang['weekdays']['Fri'] = '5';
$lang['weekdays']['Sat'] = '6';
$lang['weekdays']['Sun'] = '7';

// Continents
$lang['eur'] = "歐洲";
$lang['afr'] = "非洲";
$lang['asi'] = "亞洲";
$lang['ams'] = "中南美洲";
$lang['amn'] = "北美洲";
$lang['oce'] = "大洋洲";

// Oceans
$lang['oc_pac'] = "  太平洋";
$lang['oc_atl'] = "  大西洋";
$lang['oc_ind'] = "  印度洋";

// Countries
$lang['domaines'] = array(
	"xx" => "不明地區",
	"ac" => "英屬亞森松島",
	"ad" => "安道爾",
	"ae" => "阿拉伯聯合大公國",
	"af" => "阿富汗",
	"ag" => "安提瓜和巴布達",
	"ai" => "安圭拉島",
	"al" => "阿爾巴尼亞",
	"am" => "亞美尼亞",
	"an" => "荷屬安第列斯",
	"ao" => "安哥拉",
	"aq" => "南極洲",
	"ar" => "阿根廷",
	"as" => "美屬薩摩亞群島",
	"at" => "奧地利",
	"au" => "澳洲",
	"aw" => "阿魯巴島",
	"az" => "亞塞拜然",
	"ba" => "波士尼亞和赫塞哥維那",
	"bb" => "巴貝多",
	"bd" => "孟加拉",
	"be" => "比利時",
	"bf" => "布吉納法索",
	"bg" => "保加利亞",
	"bh" => "巴林",
	"bi" => "蒲隆地",
	"bj" => "貝南",
	"bm" => "百慕達群島",
	"bn" => "汶萊",
	"bo" => "波利維亞",
	"br" => "巴西",
	"bs" => "巴哈馬",
	"bt" => "不丹",
	"bv" => "布維島",
	"bw" => "波札那",
	"by" => "白俄羅斯",
	"bz" => "貝里斯",
	"ca" => "加拿大",
	"cc" => "科科斯群島",
	"cd" => "剛果民主主義共和國",
	"cf" => "中非共和國",
	"cg" => "剛果",
	"ch" => "瑞士",
	"ci" => "象牙海岸",
	"ck" => "庫克群島",
	"cl" => "智利 ",
	"cm" => "喀麥隆",
	"cn" => "中國",
	"co" => "哥倫比亞",
	"cr" => "哥斯大黎加",
	"cs" => "塞爾維亞與蒙特內哥羅",
	"cu" => "古巴",
	"cv" => "維德角共和國",
	"cx" => "聖誕島",
	"cy" => "賽普勒斯",
	"cz" => "捷克共和國",
	"de" => "德國",
	"dj" => "吉布地",
	"dk" => "丹麥",
	"dm" => "多明尼克",
	"do" => "多明尼加共和國",
	"dz" => "阿爾及利亞",
	"ec" => "厄瓜多",
	"ee" => "愛沙尼亞",
	"eg" => "埃及",
	"eh" => "西撒哈拉",
	"er" => "厄立特里亞",
	"es" => "西班牙",
	"et" => "衣索比亞",
	"fi" => "芬蘭",
	"fj" => "斐濟",
	"fk" => "福克蘭群島 (馬爾維納斯群島)",
	"fm" => "密克羅尼西亞聯邦",
	"fo" => "法羅群島",
	"fr" => "法國",
	"ga" => "加彭",
	"gd" => "格瑞納達",
	"ge" => "喬治亞",
	"gf" => "法屬圭亞那",
	"gg" => "根息島(根息乳牛島)",
	"gh" => "迦納",
	"gi" => "直布羅陀",
	"gl" => "格陵蘭",
	"gm" => "甘比亞",
	"gn" => "幾內亞",
	"gp" => "瓜達羅普",
	"gq" => "赤道幾內亞",
	"gr" => "希臘",
	"gs" => "南喬治亞和南桑威奇群島",
	"gt" => "瓜地馬拉",
	"gu" => "關島",
	"gw" => "幾內亞比索",
	"gy" => "圭亞那",
	"hk" => "香港",
	"hm" => "赫德-麥克唐納群島",
	"hn" => "宏都拉斯",
	"hr" => "克羅埃西亞",
	"ht" => "海地",
	"hu" => "匈牙利",
	"id" => "印尼",
	"ie" => "愛爾蘭",
	"il" => "以色列",
	"im" => "曼島",
	"in" => "印度",
	"io" => "英屬印度洋領地(不列顛群島)",
	"iq" => "伊拉克",
	"ir" => "伊朗",
	"is" => "冰島",
	"it" => "義大利",
	"je" => "澤西島",
	"jm" => "牙買加",
	"jo" => "約旦",
	"jp" => "日本",
	"ke" => "肯亞",
	"kg" => "吉爾吉斯",
	"kh" => "柬埔寨",
	"ki" => "吉里巴斯",
	"km" => "科摩洛",
	"kn" => "聖基茨和尼維斯群島",
	"kp" => "北韓",
	"kr" => "南韓",
	"kw" => "科威特",
	"ky" => "開曼群島",
	"kz" => "哈薩克",
	"la" => "寮國",
	"lb" => "黎巴嫩",
	"lc" => "聖路西亞島",
	"li" => "列支敦斯登",
	"lk" => "斯里蘭卡",
	"lr" => "賴比瑞亞",
	"ls" => "賴索托",
	"lt" => "立陶宛",
	"lu" => "盧森堡",
	"lv" => "拉脫維亞",
	"ly" => "利比亞",
	"ma" => "摩洛哥",
	"mc" => "摩納哥",
	"md" => "摩爾多瓦共和國",
	"mg" => "馬達加斯加",
	"mh" => "馬紹爾群島",
	"mk" => "馬其頓",
	"ml" => "馬利",
	"mm" => "緬甸",
	"mn" => "蒙古共和國",
	"mo" => "澳門",
	"mp" => "北馬里亞納群島",
	"mq" => "馬丁尼克島",
	"mr" => "茅利塔尼亞伊斯蘭共和國",
	"ms" => "蒙特色納島",
	"mt" => "馬爾他",
	"mu" => "模里西斯",
	"mv" => "馬爾地夫",
	"mw" => "馬拉威",
	"mx" => "墨西哥",
	"my" => "馬來西亞",
	"mz" => "莫三比克",
	"na" => "納米比亞",
	"nc" => "新喀里多尼亞",
	"ne" => "尼日",
	"nf" => "諾福克島",
	"ng" => "奈及利亞",
	"ni" => "尼加拉瓜",
	"nl" => "荷蘭",
	"no" => "挪威",
	"np" => "尼泊爾",
	"nr" => "諾魯",
	"nu" => "紐埃島",
	"nz" => "紐西蘭",
	"om" => "阿曼",
	"pa" => "巴拿馬",
	"pe" => "秘魯",
	"pf" => "法屬玻里尼西亞",
	"pg" => "巴布亞紐幾內亞",
	"ph" => "菲律賓",
	"pk" => "巴基斯坦",
	"pl" => "波蘭",
	"pm" => "法屬聖皮埃爾和密克隆群島",
	"pn" => "英屬匹特開恩島",
	"pr" => "波多黎各",
	"ps" => "巴勒斯坦",
	"pt" => "葡萄牙",
	"pw" => "帛琉",
	"py" => "巴拉圭",
	"qa" => "卡達",
	"re" => "法屬留尼旺島",
	"ro" => "羅馬尼亞",
	"ru" => "俄羅斯聯邦",
	"rs" => "俄羅斯",
	"rw" => "盧安達",
	"sa" => "沙烏地阿拉伯",
	"sb" => "所羅門群島",
	"sc" => "塞席爾群島",
	"sd" => "蘇丹",
	"se" => "瑞典",
	"sg" => "新加坡",
	"sh" => "英屬聖赫拿勒島",
	"si" => "斯洛維尼亞",
	"sj" => "冷岸群島(斯瓦爾巴和揚馬延群島)",
	"sk" => "斯洛伐克",
	"sl" => "獅子山共和國",
	"sm" => "聖馬利諾",
	"sn" => "塞內加爾",
	"so" => "索馬利亞",
	"sr" => "蘇利南",
	"st" => "聖多美與普林希比共和國",
	"su" => "舊蘇聯",
	"sv" => "薩爾瓦多",
	"sy" => "敍利亞",
	"sz" => "史瓦濟蘭",
	"tc" => "特克斯和凱科斯群島",
	"td" => "查德",
	"tf" => "法屬南方領地",
	"tg" => "多哥",
	"th" => "泰國",
	"tj" => "塔吉克",
	"tk" => "托克勞群島",
	"tm" => "土庫曼",
	"tn" => "突尼西亞",
	"to" => "東加王國",
	"tp" => "東帝汶",
	"tr" => "土耳其",
	"tt" => "千里達托貝哥",
	"tv" => "吐瓦魯",
	"tw" => "台灣共和國",
	"tz" => "坦尚尼亞",
	"ua" => "烏克蘭",
	"ug" => "烏干達",
	"uk" => "英國",
	"gb" => "大不列顛",
	"um" => "美屬澳特蘭群島",
	"us" => "美國",
	"uy" => "烏拉圭",
	"uz" => "烏茲別克斯坦",
	"va" => "梵諦岡",
	"vc" => "聖文森",
	"ve" => "委內瑞拉",
	"vg" => "英屬維京群島",
	"vi" => "美屬維京群島",
	"vn" => "越南",
	"vu" => "萬那杜",
	"wf" => "瓦利斯和富圖納群島",
	"ws" => "西薩摩亞",
	"ye" => "葉門",
	"yt" => "馬約特島",
	"yu" => "南斯拉夫",
	"za" => "南非",
	"zm" => "尚比亞",
	"zr" => "薩伊",
	"zw" => "辛巴威",
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
	"tv" => "吐瓦魯",
	"ws" => "西薩摩亞",
);
?>