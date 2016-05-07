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
$lang['auteur_nom'] = "Tadashi Jokagi"; // Translator's name
$lang['auteur_email'] = "elf2000@users.sourceforge.net"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "ja"; // iso language code
$lang['lang_libelle_en'] = "Japanese"; // english language name
$lang['lang_libelle_fr'] = "Japanese"; // french language name
$lang['unites_bytes'] = array('バイト', 'キロバイト', 'メガバイト', 'ギガバイト', 'テラバイト', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = ','; // three thousand spells 3,000 in english
$lang['separateur_decimaux'] = '.'; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | オープンソースのウェブ解析とウェブサイト統計"; // Pages header's title
$lang['head_keywords'] = "statistics, analytics, analysis, referals, stats, free, open source, visits, search engines, keywords, web, websites"; // Header keywords
$lang['head_description'] = "phpMyVisites | GNU GPL の元で配布されたオープンソースのウェブサイト統計と解析をするアプリケーションです。"; // Header description
$lang['logo_description'] = "phpMyVisites | Open source web analytics"; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "訪問数";
$lang['menu_pagesvues'] = "ページビュー";
$lang['menu_suivi'] = "追跡";
$lang['menu_provenance'] = "ソース";
$lang['menu_configurations'] = "設定";
$lang['menu_affluents'] = "検索";
$lang['menu_listesites'] = "サイト一覧";
$lang['menu_bilansites'] = "要約";
$lang['menu_jour'] = "日間";
$lang['menu_semaine'] = "週間";
$lang['menu_mois'] = "月間";
$lang['menu_annee'] = "年間";
$lang['menu_periode'] = "調査する期間: %s"; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "オフィシャルウェブサイト";
$lang['liens_admin'] = "管理";
$lang['liens_contacts'] = "連絡先";

//
// Divers
//
$lang['generique_nombre'] = "数";
$lang['generique_tauxsortie'] = "退出率";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "ページは %s 秒で生成しました"; // Time in seconds
$lang['generique_divers'] = "その他"; // (for the graphs)
$lang['generique_inconnu'] = "不明"; // (for the graphs)
$lang['generique_vous'] = "... You ?";
$lang['generique_traducteur'] = "翻訳者";
$lang['generique_langue'] = "言語";
$lang['generique_autrelangure'] = "その他?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "この期間の訪問者は居ません。"; 
$lang['generique_aucune_visite_bdd'] = "<b>警告 ! </b> 現在のサイトのデータベースに記録された訪問者は居ません。Please be sure you've installed your javascript code on your pages, with the correct phpMyVisites URL <u>IN</u> the Javascript code. Try documentation for help.";
$lang['generique_aucune_site_bdd'] = "データベースにサイトが登録されていません ! phpMyVisites スーパーユーザーとしてログインし、新規サイトの追加を試みてください。";
$lang['generique_retourhaut'] = "トップ";
$lang['generique_tempsvisite'] = "%1\$s 分 %2\$s 秒";
$lang['generique_tempsheure'] = "%s 時間"; // 4 h means 4 hours
$lang['generique_siteno'] = "サイト「%s」"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "ニュースレター「%s」"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "パートナー「%s」"; // Newsletter "version 2 announcement"
$lang['generique_general'] = "一般";
$lang['generique_user'] = "ユーザー %s"; // User "Admin"
$lang['generique_previous'] = "前へ";
$lang['generique_next'] = "次へ";
$lang['generique_lowpop'] = "統計から低い個体数を除外する";
$lang['generique_allpop'] = "統計にすべての個体数を含む";
$lang['generique_to'] = "から"; // 4 'to' 8
$lang['generique_total_on'] = "on"; // 4 to 8 'on' 10
$lang['generique_total'] = "合計"; // 4 to 8 'on' 10
$lang['generique_information'] = "情報";
$lang['generique_done'] = "終了!";
$lang['generique_other'] = "その他";
$lang['generique_description'] = "説明:";
$lang['generique_name'] = "名前:";
$lang['generique_variables'] = "変数";
$lang['generique_logout'] = "ログアウト";
$lang['generique_login'] = "ログイン";
$lang['generique_hits'] = "ヒット数";
$lang['generique_errors'] = "エラー数";
$lang['generique_site'] = "サイト";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "パスワード: "; // lowercase
$lang['login_login'] = "ログイン: "; // lowercase
$lang['login_error'] = "ログインできません。ログイン名かパスワードが間違っています。";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "%sphpMyVisites%s の保護エリアに入ろうとしています。";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "連絡";
$lang['contacts_langue'] = "翻訳一覧";
$lang['contacts_merci'] = "ありがとう";
$lang['contacts_auteur'] = "phpMyVisites プロジェクトの作成と著作、ドキュメントは <strong>Matthieu Aubry</strong> です。";
$lang['contacts_questions'] = "<strong>テクニカルな質問、バグ報告、提案</strong>については、公式ウェブサイトのフォーラム「%s」を使用してください。その他の要望については、公式ウェブサイトのフォームを使用して、開発者と連絡をとってください。"; // adresse du site
$lang['contacts_trad1'] = "phpMyVisites をあなたの言語の翻訳に翻訳したいですか? <strong>phpMyVisites はあなたを必要とします</strong>ので躊躇しません!";
$lang['contacts_trad2'] = "Translatating phpMyVisites will take quite a while (a few hours) and requires a good knowledge of the languages involved; but remember that <strong>any work you do will benefit a large number of users</strong>.  If you are interested in translatating phpMyVisites you can find all the information you need in %s the official documentation of phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "Don't hesitate to consult %s the official documentation of phpMyVisites %s which will give you plenty of information on installation, configuration, and the functionality of phpMyVisites. それは phpMyVisites のあなたのバージョンにおいて利用可能です。"; // lien vers la doc
$lang['contacts_thanks_dev'] = "Thank you <strong>%s</strong>, co-developers of phpMyVisites, for their high quality work on the project.";
$lang['contacts_merci3'] = "Don't hesitate to consult the acknowledgments page on the official website to get a complete list of phpMyVisites friends.";
$lang['contacts_merci2'] = "A big thank you to all those who shared their culture while contributing to the translation of phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "サイト名:%1\$s 日付:%2\$s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "詳細な統計に移動する";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "訪問者情報"; 
$lang['visites_statistiques'] = "統計";
$lang['visites_periodesel'] = "選択された期間";
$lang['visites_visites'] = "訪問者数";
$lang['visites_uniques'] = "一意的な訪問者数";
$lang['visites_pagesvues'] = "ページビュー数";
$lang['visites_pagesvisiteurs'] = "ページ当りの訪問者"; 
$lang['visites_pagesvisites'] = "ページ当りの訪問数"; 
$lang['visites_pagesvisitessign'] = "ページ当りの重要な訪問数"; 
$lang['visites_tempsmoyen'] = "訪問者の平均時間";
$lang['visites_tempsmoyenpv'] = "ページを見ている平均時間";
$lang['visites_tauxvisite'] = "1 ページ辺りの訪問率"; 
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "期間の要約";
$lang['visites_nbvisites'] = "訪問者数";
$lang['visites_aucunevivisite'] = "訪問者なし"; // in the table, must be short
$lang['visites_recap'] = "要約";
$lang['visites_unepage'] = "1 ページ"; // (graph)
$lang['visites_pages'] = "%s ページ"; // 1-2 pages (graph)
$lang['visites_min'] = "%s 分"; // 10-15 min (graph)
$lang['visites_sec'] = "%s 秒"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "統計の要約を表示するグラフ";
$lang['visites_grapghrecaplongterm'] = "長期的な統計の要約を表示するグラフ";
$lang['visites_graphtempsvisites'] = "訪問者での訪問数の期間を表示するグラフ";
$lang['visites_graphtempsvisitesimg'] = "訪問者での訪問数の期間";
$lang['visites_graphheureserveur'] = "サーバーの毎時訪問を表示するグラフ"; 
$lang['visites_graphheureserveurimg'] = "サーバー時間での接続数"; 
$lang['visites_graphheurevisiteur'] = "訪問者の毎時訪問を表示するグラフ";
$lang['visites_graphheurelocalimg'] = "地域時間での訪問者数"; 
$lang['visites_longterm_statd'] = "長期的な解析 (数日間の期間)";
$lang['visites_longterm_statm'] = "長期的な解析 (数ヶ月の期間)";

//
// Sites Summary
//
$lang['summary_title'] = "サイトの要約";
$lang['summary_stitle'] = "要約";

//
// Frequency Part
//
$lang['frequence_titre'] = "帰還訪問者数";
$lang['frequence_nouveauxconnusgraph'] = "新規訪問者期間訪問者を表示するグラフ";
$lang['frequence_nouveauxconnus'] = "新規と帰還訪問者の数";
$lang['frequence_titremenu'] = "周期";
$lang['frequence_visitesconnues'] = "帰還訪問者数";
$lang['frequence_nouvellesvisites'] = "新規訪問者";
$lang['frequence_visiteursconnus'] = "戻ってきた訪問者数";
$lang['frequence_nouveauxvisiteurs'] = "新規訪問者数";
$lang['frequence_returningrate'] = "帰還率";
$lang['pagesvues_vispervisgraph'] = "訪問者が訪問した数を表示するグラフ";
$lang['frequence_vispervis'] = "訪問者当たりの訪問数";
$lang['frequence_vis'] = "訪問";
$lang['frequence_visit'] = "1 訪問"; // (graph)
$lang['frequence_visits'] = "%s 訪問"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "ページビュー情報";
$lang['pagesvues_joursel'] = "指定日";
$lang['pagesvues_jmoins7'] = "指定日から 1 週間";
$lang['pagesvues_jmoins14'] = "指定日から 2 週間";
$lang['pagesvues_moyenne'] = "(平均)";
$lang['pagesvues_pagesvues'] = "ページビュー";
$lang['pagesvues_pagesvudiff'] = "一意的ページビュー";
$lang['pagesvues_recordpages'] = "ひとりの訪問者が最も高いページ数";
$lang['pagesvues_tabdetails'] = "ページビュー (%s 位から %s 位)"; // (from 1 to 21)
$lang['pagesvues_graphsnbpages'] = "ページ毎の訪問者数を表示するグラフ";
$lang['pagesvues_graphnbvisitespageimg'] = "ページビュー数での訪問数";
$lang['pagesvues_graphheureserveur'] = "サーバー時間での訪問数を表示するグラフ";
$lang['pagesvues_graphheureserveurimg'] = "サーバー時間での訪問数";
$lang['pagesvues_graphheurevisiteur'] = "地域時間での訪問数を表示するグラフ";
$lang['pagesvues_graphpageslocalimg'] = "地域時間での訪問数";
$lang['pagesvues_tempsparpage'] = "ページでの時間";
$lang['pagesvues_total_time'] = "総時間";
$lang['pagesvues_avg_time'] = "平均時間";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "訪問者の行動";
$lang['suivi_pageentree'] = "入口ページ";
$lang['suivi_pagesortie'] = "退出ページ";
$lang['suivi_tauxsortie'] = "退出率";
$lang['suivi_pageentreehits'] = "エントリヒット数";
$lang['suivi_pagesortiehits'] = "退出ヒット数";
$lang['suivi_singlepage'] = "単一ページの訪問数";

//
// Origin
//
$lang['provenance_titre'] = "訪問者のアクセス元";
$lang['provenance_recappays'] = "国別の要約";
$lang['provenance_pays'] = "国一覧";
$lang['provenance_paysimg'] = "国別の訪問者図";
$lang['provenance_fai'] = "インターネットサービスプロバイダー";
$lang['provenance_nbpays'] = "異なる国籍の数 : %s";
$lang['provenance_provider'] = "プロバイダー一覧"; // must be short
$lang['provenance_continent'] = "大陸";
$lang['provenance_mappemonde'] = "世界地図";
$lang['provenance_interetspays'] = "国の関係";

//
// Setup
//
$lang['configurations_titre'] = "訪問者設定";
$lang['configurations_os'] = "オペレーションシステム";
$lang['configurations_osimg'] = "訪問者のオペレーションシステムを表示するグラフ";
$lang['configurations_navigateurs'] = "ブラウザー";
$lang['configurations_navigateursimg'] = "訪問者のブラウザを表示するグラフ";
$lang['configurations_resolutions'] = "画面解像度";
$lang['configurations_resolutionsimg'] = "訪問者の画面解像度を表示するグラフ";
$lang['configurations_couleurs'] = "色深度";
$lang['configurations_couleursimg'] = "訪問者の色深度を表示するグラフ";
$lang['configurations_rapport'] = "通常/ワイドスクリーン";
$lang['configurations_large'] = "ワイドスクリーン";
$lang['configurations_normal'] = "通常";
$lang['configurations_double'] = "デュアル画面";
$lang['configurations_plugins'] = "プラグイン";
$lang['configurations_navigateursbytype'] = "ブラウザー (種類別)";
$lang['configurations_navigateursbytypeimg'] = "ブラウザーの種類を表示するグラフ";
$lang['configurations_os_interest'] = "オペレーションシステムの関係";
$lang['configurations_navigateurs_interest'] = "ブラウザーの関係";
$lang['configurations_resolutions_interest'] = "画面解像度の関係";
$lang['configurations_couleurs_interest'] = "色深度の関係";
$lang['configurations_configurations'] = "トップ設定";

//
// Referers
//
$lang['affluents_titre'] = "検索";
$lang['affluents_recapimg'] = "検索での訪問図";
$lang['affluents_directimg'] = "ダイレクト";
$lang['affluents_sitesimg'] = "ウェブサイト";
$lang['affluents_moteursimg'] = "エンジン";
$lang['affluents_referrersimg'] = "リファラー一覧";
$lang['affluents_moteurs'] = "検索エンジン一覧";
$lang['affluents_nbparmoteur'] = "検索エンジンにより提供された訪問数 : %s";
$lang['affluents_aucunmoteur'] = "検索エンジンにより提供された訪問はありません。";
$lang['affluents_motscles'] = "キーワード一覧";
$lang['affluents_nbmotscles'] = "個別キーワード数 : %s";
$lang['affluents_aucunmotscles'] = "キーワードが見つかりません。";
$lang['affluents_sitesinternet'] = "ウェブサイト一覧";
$lang['affluents_nbautressites'] = "他のウェブサイトからの訪問数 : %s";
$lang['affluents_nbautressitesdiff'] = "異なるウェブサイトの数 : %s";
$lang['affluents_aucunautresite'] = "ウェブサイトからの訪問はありません。";
$lang['affluents_entreedirecte'] = "直接の訪問";
$lang['affluents_nbentreedirecte'] = "直接の訪問数 : %s";
$lang['affluents_nbpartenaires'] = "パートナーにより提供された訪問数 : %s";
$lang['affluents_aucunpartenaire'] = "パートナーサイトにより提供された訪問数はありません。";
$lang['affluents_nbnewsletters'] = "ニュースレターにより提供された訪問数 : %s";
$lang['affluents_aucunnewsletter'] = "ニュースレターにより提供された訪問数はありません。";
$lang['affluents_details'] = "詳細一覧"; // In the results of the referers array
$lang['affluents_interetsmoteurs'] = "検索エンジンの関係";
$lang['affluents_interetsmotscles'] = "キーワードの関係";
$lang['affluents_interetssitesinternet'] = "ウェブサイトの関係";
$lang['affluents_partenairesimg'] = "パートナー一覧";
$lang['affluents_partenaires'] = "パートナー一覧";
$lang['affluents_interetspartenaires'] = "パートナーの関係";
$lang['affluents_newslettersimg'] = "ニュースレター一覧";
$lang['affluents_newsletters'] = "ニュースレター一覧";
$lang['affluents_interetsnewsletters'] = "ニュースレターの関係";
$lang['affluents_type'] = "理ファラーの種類";
$lang['affluents_interetstype'] = "アクセスの種類の関係";

//
// Summary
//
$lang['purge_titre'] = "訪問数と検索の要約";
$lang['purge_intro'] = "この期間は管理に削除されました、本質的な統計だけが保存されました。";
$lang['admin_purge'] = "データベースメンテナナス";
$lang['admin_purgeintro'] = "このセクションは phpMyVisites により使用されるテーブルを管理します。テーブルによって使用されるディスク容量を参照したり、それらを最適化したり、古いレコードを削除することができます。これにより、データベース中のテーブルのサイズを制限することができるでしょう。";
$lang['admin_optimisation'] = "[ %s ]の最適化中..."; // Tables names
$lang['admin_postopt'] = "合計サイズは %chiffres% %unites% 減少しました。"; // 28 Kb
$lang['admin_purgeres'] = "次の期間を削除します: %s";
$lang['admin_purge_fini'] = "テーブルの削除を終了しました...";
$lang['admin_bdd_nom'] = "名前";
$lang['admin_bdd_enregistrements'] = "レコード数";
$lang['admin_bdd_taille'] = "テーブル容量";
$lang['admin_bdd_opt'] = "最適化";
$lang['admin_bdd_purge'] = "Purge Criteria";
$lang['admin_bdd_optall'] = "すべて最適化";
$lang['admin_purge_j'] = "%s 日より古い記録を削除する";
$lang['admin_purge_s'] = "%s 週より古い記録を削除する";
$lang['admin_purge_m'] = "%s ヶ月より古い記録を削除する";
$lang['admin_purge_y'] = "%s 年より古い記録を削除する";
$lang['admin_purge_logs'] = "すべてのログを削除する";
$lang['admin_purge_autres'] = "テーブル「%s」への共通項目を削除する";
$lang['admin_purge_none'] = "できる操作はありません";
$lang['admin_purge_cal'] = "演算と除去 (これには数分かかる場合があります)";
$lang['admin_alias_title'] = "ウェブサイトの別名と URL一覧";
$lang['admin_partner_title'] = "ウェブサイトパートナー一覧";
$lang['admin_newsletter_title'] = "ウェブサイトニュースレター一覧";
$lang['admin_ip_exclude_title'] = "統計から除外するべき IP アドレスの範囲";
$lang['admin_name'] = "名前:";
$lang['admin_error_ip'] = "IP アドレスは、正確な書式でなければなりません。";
$lang['admin_site_name'] = "サイト名";
$lang['admin_site_url'] = "サイトのメイン URL";
$lang['admin_db_log'] = "データベース設定を変更するために phpMyVisites スーパーユーザーとしてログインします。";
$lang['admin_error_critical'] = "エラーです。phpMyVisites が処理をするために修復が必要です。";
$lang['admin_warning'] = "警告です。phpMyVisites はおそらくいくつかの特殊機能が正常に処理されないでしょう。";
$lang['admin_move_group'] = "グループを移動する:";
$lang['admin_move_select'] = "グループを選択してください";

//
// Setup
//
$lang['admin_intro'] = "ようこそ phpMyVisites の設定へ。インストールに関係する、すべての情報を修正することができます。もし問題を持っているならば、躊躇無く「%sthe official documentation of phpMyVisites%s」で調べてください。"; // link to the doc
$lang['admin_configetperso'] = "一般設定";
$lang['admin_afficherjavascript'] = "JavaScript の統計コードを表示する";
$lang['admin_cookieadmin'] = "統計の集計管理をしない";
$lang['admin_ip_ranges'] = "統計でIP アドレス/IP アドレスの範囲をカウントしない";
$lang['admin_sitesenregistres'] = "記録済ウェブサイト一覧:";
$lang['admin_retour'] = "戻る";
$lang['admin_cookienavigateur'] = "統計から管理を除外してもいいでしょう。この方法は cookie を用います。また、このオプションは現在のブラウザーでのみ処理されます。いつでもこのオプションは変更できます。";
$lang['admin_prendreencompteadmin'] = "統計を集計管理する (cookie を削除します)";
$lang['admin_nepasprendreencompteadmin'] = "統計を集計管理しない  (cookie を作成します)";
$lang['admin_etatcookieoui'] = "管理者はこのウェブサイト用統計値に数えます (これはデフォルト設定で、通常の訪問者と見なされます)";
$lang['admin_etatcookienon'] = "あなたをこのウェブサイトの統計値に数えません (あなたの訪問は、このウェブサイトで数えられないでしょう)";
$lang['admin_deleteconfirm'] = "「%s」を削除していいか確認しましたか?";
$lang['admin_sitedeletemessage'] = "Please <u>be very careful</u>: all datas associated to that Site will be deleted <br>and there won't be any way to recover the data loss.";
$lang['admin_confirmyes'] = "はい、削除を希望します";
$lang['admin_confirmno'] = "いいえ、削除を希望しません";
$lang['admin_nonewsletter'] = "このサイトのニュースレターが見つかりません!";
$lang['admin_nopartner'] = "このサイトのパートナーが見つかりません!";
$lang['admin_get_question'] = "GET 変数(URL 変数)を記録しますか?";
$lang['admin_get_a1'] = "全ての URL 変数を記録する";
$lang['admin_get_a2'] = "いくつかの URL 変数を記録しない";
$lang['admin_get_a3'] = "指定の変数のみ記録する";
$lang['admin_get_a4'] = "すべての指定された変数を除外して記録する";
$lang['admin_get_list'] = "変数名 (<b>;</b> で分割された一覧 list) <br/>例 : %s";
$lang['admin_required'] = "%s は必須です。";
$lang['admin_title_required'] = "要求";
$lang['admin_write_dir'] = "書き込み可能なディレクトリ一覧";
$lang['admin_chmod_howto'] = "これらのディレクトリはサーバーにより書き込み可能である必要があります。これは、あなたがFTPソフトウェアで、それらに対して chmod 777 を行うことを意味します。 (ディレクトリで右クリックからパーミッション(もしくは chmod))";
$lang['admin_optional'] = "オプション";
$lang['admin_memory_limit'] = "メモリ制限";
$lang['admin_allowed'] = "allowed";
$lang['admin_webserver'] = "ウェブサーバー";
$lang['admin_server_os'] = "サーバー OS";
$lang['admin_server_time'] = "サーバー時間";
$lang['admin_legend'] = "凡例:";
$lang['admin_error_url'] = "URLは正確なフォーマットでなければなりません : %s (最後のスラッシュ(「/」)は外します)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URL 別名一覧";
$lang['admin_logo_question'] = "ロゴを表示しますか?";
$lang['admin_type_again'] = "(再度入力)";
$lang['admin_admin_mail'] = "特別な管理者の電子メール";
$lang['admin_admin'] = "特別な管理者";
$lang['admin_phpmv_path'] = "アプリケーションへの完全なパス";
$lang['admin_valid_email'] = "電子メールは有効な電子メールでなければなりません。";
$lang['admin_valid_pass'] = "パスワードはより複雑でなければいけません (最低 6 文字で、数字を含まなければなりません)";
$lang['admin_match_pass'] = "パスワードが一致しません";
$lang['admin_no_user_group'] = "このサイトのこのグループにユーザーが居ません。";
$lang['admin_recorded_nl'] = "記録済ニュースレター:";
$lang['admin_recorded_partners'] = "記録済パートナー:";
$lang['admin_recorded_users'] = "記録済ユーザー:";
$lang['admin_select_site_title'] = "サイトを選択してください。";
$lang['admin_select_user_title'] = "ユーザーを選択してください。";
$lang['admin_no_user_registered'] = "登録されたユーザーは居ません!";
$lang['admin_configuration'] = "設定";
$lang['admin_general_conf'] = "一般設定";
$lang['admin_group_title'] = "グループ管理 (権限)";
$lang['admin_user_title'] = "ユーザー管理";
$lang['admin_user_add'] = "ユーザーを追加する";
$lang['admin_user_mod'] = "ユーザーを修正する";
$lang['admin_user_del'] = "ユーザーを削除する";
$lang['admin_server_info'] = "サーバー情報";
$lang['admin_send_mail'] = "電子メールで統計を送信する";
$lang['admin_rss_feed'] = "RSS フィードの統計";
$lang['admin_site_admin'] = "サイト管理";
$lang['admin_site_add'] = "サイトを追加する";
$lang['admin_site_mod'] = "サイトを修正する";
$lang['admin_site_del'] = "サイトを削除する";
$lang['admin_nl_add'] = "ニュースレターを追加する";
$lang['admin_nl_mod'] = "ニュースレターを修正する";
$lang['admin_nl_del'] = "ニュースレターを削除する";
$lang['admin_partner_add'] = "パートナーを追加する";
$lang['admin_partner_mod'] = "パートナー名と URL を修正する";
$lang['admin_partner_del'] = "パートナーを削除する";
$lang['admin_url_alias'] = "別名 URL 管理";
$lang['admin_group_admin_n'] = "統計閲覧と管理権限";
$lang['admin_group_admin_d'] = "ユーザーはサイト統計の閲覧とサイト情報の編集ができます";
$lang['admin_group_view_n'] = "統計を閲覧する";
$lang['admin_group_view_d'] = "ユーザーはサイト統計の閲覧のみできます。管理権限はありません。";
$lang['admin_group_noperm_n'] = "権限がありません";
$lang['admin_group_noperm_d'] = "このグループのユーザーは、閲覧統計または情報の編集の許可を持っていません。";
$lang['admin_group_stitle'] = "変更したいユーザーの選択、また選択済ユーザーの移動をしたいグループを選択することでユーザーを編集できます。";
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
$lang['install_loginmysql'] = "データベースログイン名";
$lang['install_mdpmysql'] = "データベースパスワード";
$lang['install_serveurmysql'] = "データベースサーバー";
$lang['install_basemysql'] = "データベース名";
$lang['install_prefixetable'] = "テーブル接頭語";
$lang['install_utilisateursavances'] = "高度なユーザー (オプション)";
$lang['install_oui'] = "はい";
$lang['install_non'] = "いいえ";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "問題: ";
$lang['install_DirectoriesWriteError'] = "<b>問題! </b><br/>次のフォルダーに書き込みできません。%s ";
$lang['install_loginadmin'] = "特別な管理者ログイン名";
$lang['install_mdpadmin'] = "特別な管理者のパスワード";
$lang['install_chemincomplet'] = "phpMyVisites アプリケーションへの完全パス (http://www.mysite.com/rep1/rep3/phpmyvisites/ のように)パスは「<strong>/</strong>」で終わらなければなりません。";
$lang['install_afficherlogo'] = "ロゴをページに表示しますか? %s <br />サイト上にロゴの表示を許可することによって、phpMyVisites の宣伝を支援し、さらにそれがより急速に発展すること援助するでしょう。さらにそれは、このオープンソースなフリーアプリケーションの開発に長時間を費やした開発者に感謝する方法です。"; // %s replaced by the logo image
$lang['install_affichergraphique'] = "統計グラフを表示します。";
$lang['install_valider'] = "送信する"; // during installation and for login
$lang['install_popup_logo'] = "ロゴを選択してください";
$lang['install_logodispo'] = "利用可能な様々なロゴを参照する";
$lang['install_welcome'] = "ようこそ!";
$lang['install_system_requirements'] = "システム要求";
$lang['install_database_setup'] = "データベース設定";
$lang['install_create_tables'] = "テーブル作成";
$lang['install_general_setup'] = "一般設定";
$lang['install_create_config_file'] = "設定ファイルの作成";
$lang['install_first_website_setup'] = "初めてのウェブサイトの追加";
$lang['install_display_javascript_code'] = "Javascript コードの表示";
$lang['install_finish'] = "終了しました!";
$lang['install_txt2'] = "At the end of installation, a request will be made to the official site to help us keep track of the number of people using phpMyVisites. ご理解ありがとうございます。";
$lang['install_database_setup_txt'] = "データベース設定を入力してください。";
$lang['install_general_config_text'] = "";
$lang['install_config_file'] = " 管理者ユーザー情報の入力に成功しました。";
$lang['install_js_code_text'] = "<p>訪問毎にカウントするには、すべてのページに JavaScript を挿入しなければなりません。</p><p> Your pages do not have to be made with PHP, <strong>phpMyVisites will work on all kinds of pages (whether it is HTML, ASP, Perl or any other languages).</strong> </p><p>ここに、挿入しなければならないコードがあります: (すべてのページにコピーと貼り付けをしてください)</p>";
$lang['install_intro'] = "ようこそ phpMyVisites のインストールへ。"; 
$lang['install_intro2'] = "この手続きは、簡単な %s ステップに分割され、10 分ぐらいかかるでしょう。";
$lang['install_next_step'] = "次のステップに移動する";
$lang['install_status'] = "インストールの状態";
$lang['install_done'] = "インストール %s%% 完了"; // Install 25% complete
$lang['install_site_success'] = "ウェブサイトの作成に成功しました!";
$lang['install_site_info'] = "初めてのウェブサイトのすべての情報を入力してください。";
$lang['install_go_phpmv'] = "phpMyVisites に移動します!";
$lang['install_congratulation'] = "おめでとうございます! phpMyVisites のインストールは完了ました。";
$lang['install_end_text'] = "JavaScript のコードがページにうまく設定されることを確認し、最初の訪問者を待ってください!!";
$lang['install_db_ok'] = "データベースサーバーへの接続は OK です!";
$lang['install_table_exist'] = "データベース上に 既に phpMyVisites テーブルが存在します。";
$lang['install_table_choice'] = "既存のデータベーステーブルを再利用するか、既存のデータベースのデータを全て削除し、クリーンインストールするか、どちらかを選んでください。";
$lang['install_table_erase'] = "すべてのテーブルを消去する (注意深く!)";
$lang['install_table_reuse'] = "既に存在するテーブルを再利用する";
$lang['install_table_success'] = "テーブルの作成に成功しました!";
$lang['install_send_mail'] = "ウェブの統計情報の要約を含む電子メールを毎日受信しますか?";

//
// Update Step
//
$lang['update_title'] = "phpMyVisites の更新";
$lang['update_subtitle'] = "phpMyVisites の更新を検知しました。";
$lang['update_versions'] = "前のバージョン %s でしたが、%s に更新しました。";
$lang['update_db_updated'] = "データベースの更新に成功しました!";
$lang['update_continue'] = "phpMyVisites を続ける";
$lang['update_jschange'] = "警告! <br /> phpMyVisites JavaScript コードは修正されました。";

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
$lang['tdate1'] = "%yearlong% 年 %monthlong% %daynumeric% 日(%daylong%)";

// Monday 10
$lang['tdate2'] = "%daylong% %daynumeric%";

// Week February 10 To February 17 2004
$lang['tdate3'] = "%yearlong% 年 %monthlong% %daynumeric% 日から %monthlong2% %daynumeric2% の週";

// February 2004 Month
$lang['tdate4'] = "%yearlong% 年 %monthlong% の月";

// December 2003
$lang['tdate5'] = "%yearlong% 年 %monthlong%";

// 10 Febuary week
$lang['tdate6'] = "%monthlong% %daynumeric% の週";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%yearlong% 年 %monthnumeric% %daynumeric%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = "%daynumeric%(%dayshort%)";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9']  = " %daynumeric% %monthshort% の週";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%yearshort%-%monthshort%";

// Year 2004
$lang['tdate11'] = "%yearlong% 年";

// 2004
$lang['tdate12'] = "%yearlong% 年";

// 31
$lang['tdate13'] = "%daynumeric% ";

// Months
$lang['moistab']['01'] = "1 月";
$lang['moistab']['02'] = "2 月";
$lang['moistab']['03'] = "3 月";
$lang['moistab']['04'] = "4 月";
$lang['moistab']['05'] = "5 月";
$lang['moistab']['06'] = "6 月";
$lang['moistab']['07'] = "7 月";
$lang['moistab']['08'] = "8 月";
$lang['moistab']['09'] = "9 月";
$lang['moistab']['10'] = "10 月";
$lang['moistab']['11'] = "11 月";
$lang['moistab']['12'] = "12 月";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "1";
$lang['moistab_graph']['02'] = "2";
$lang['moistab_graph']['03'] = "3";
$lang['moistab_graph']['04'] = "4";
$lang['moistab_graph']['05'] = "5";
$lang['moistab_graph']['06'] = "6";
$lang['moistab_graph']['07'] = "7";
$lang['moistab_graph']['08'] = "8";
$lang['moistab_graph']['09'] = "9";
$lang['moistab_graph']['10'] = "10";
$lang['moistab_graph']['11'] = "11";
$lang['moistab_graph']['12'] = "12";

// Day of the week
$lang['jsemaine']['Mon'] = "月曜日";
$lang['jsemaine']['Tue'] = "火曜日";
$lang['jsemaine']['Wed'] = "水曜日";
$lang['jsemaine']['Thu'] = "木曜日";
$lang['jsemaine']['Fri'] = "金曜日";
$lang['jsemaine']['Sat'] = "土曜日";
$lang['jsemaine']['Sun'] = "日曜日";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "月";
$lang['jsemaine_graph']['Tue'] = "火";
$lang['jsemaine_graph']['Wed'] = "水";
$lang['jsemaine_graph']['Thu'] = "木";
$lang['jsemaine_graph']['Fri'] = "金";
$lang['jsemaine_graph']['Sat'] = "土";
$lang['jsemaine_graph']['Sun'] = "日";

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
$lang['eur'] = "ヨーロッパ";
$lang['afr'] = "アフリカ";
$lang['asi'] = "アジア";
$lang['ams'] = "南と中央アメリカ";
$lang['amn'] = "北アメリカ";
$lang['oce'] = "オセアニア";

// Oceans
$lang['oc_pac'] = "太平洋";
$lang['oc_atl'] = "大西洋";
$lang['oc_ind'] = "インド洋";

// Countries
$lang['domaines'] = array(
    "xx" => "不明",
    "ac" => "Ascension Islands",
    "ad" => "アンドラ",
    "ae" => "アラブ首長国連邦",
    "af" => "アフガニスタン",
    "ag" => "アンティグア・バーブーダ",
    "ai" => "アングイラ",
    "al" => "アルバニア",
    "am" => "アルメニア",
    "an" => "オランダ領アンティル",
    "ao" => "アンゴラ",
    "aq" => "南極大陸",
    "ar" => "アルゼンチン",
    "as" => "アメリカ領サモア",
    "at" => "オーストリア",
    "au" => "オーストラリア",
    "aw" => "アルーバ",
    "az" => "アゼルバイジャン",
    "ba" => "ボスニア-ヘルツェゴヴィナ",
    "bb" => "バルバドス",
    "bd" => "バングラデッシュ",
    "be" => "ベルギー",
    "bf" => "ブルキナファソ",
    "bg" => "ブルガリア",
    "bh" => "バーレーン",
    "bi" => "ブルンディ",
    "bj" => "ベニン",
    "bm" => "バーミューダ",
    "bn" => "Bruneo",
    "bo" => "ボリビア",
    "br" => "ブラジル",
    "bs" => "バハマ",
    "bt" => "ブータン",
    "bv" => "ブーヴェ島",
    "bw" => "ボツワナ",
    "by" => "ベラルーシ",
    "bz" => "ベリーズ",
    "ca" => "カナダ",
    "cc" => "ココヤシ(Keeling)島",
    "cd" => "コンゴ民主主義共和国",
    "cf" => "中央アフリカ共和国",
    "cg" => "コンゴ人民共和国",
    "ch" => "スイス",
    "ci" => "コートディボワール",
    "ck" => "クック諸島",
    "cl" => "チリ共和国",
    "cm" => "カメルーン共和国",
    "cn" => "中国",
    "co" => "コロンビア",
    "cr" => "コスタリカ共和国",
	"cs" => "セルビア・モンテネグロ",
    "cu" => "キューバ",
    "cv" => "Cape Verde",
    "cx" => "クリスマス島",
    "cy" => "キプロス",
    "cz" => "チェコ共和国",
    "de" => "ドイツ",
    "dj" => "ジブチ共和国",
    "dk" => "デンマーク",
    "dm" => "ドミニカ国",
    "do" => "ドミニカ共和国",
    "dz" => "アルジェリア民主人民共和国",
    "ec" => "エクアドル共和国",
    "ee" => "エストニア共和国",
    "eg" => "エジプト",
    "eh" => "西サハラ",
    "er" => "エリトリア",
    "es" => "スペイン",
    "et" => "エチオピア人民民主共和国",
    "fi" => "フィンランド共和国",
    "fj" => "フィジー共和国",
    "fk" => "フォークランド諸島 (Malvinas)",
    "fm" => "Micronesia, Federated States of",
    "fo" => "フェロー諸島",
    "fr" => "フランス",
    "ga" => "ガボン",
    "gd" => "グレナダ",
    "ge" => "ジョージア",
    "gf" => "フランスガイアナ協同共和国",
    "gg" => "ガーンジー島",
    "gh" => "ガーナ",
    "gi" => "ジブラルタル",
    "gl" => "グリーンランド",
    "gm" => "ガンビア共和国",
    "gn" => "ギニア共和国",
    "gp" => "グアドループ",
    "gq" => "赤道ギニア共和国",
    "gr" => "Greece",
    "gs" => "サウスジョージアとサウスサンドイッチ諸島",
    "gt" => "Guatemala",
    "gu" => "グアム",
    "gw" => "ギニアビサウ共和国",
    "gy" => "ガイアナ協同共和国",
    "hk" => "香港",
    "hm" => "ハード島とマクドナルド島",
    "hn" => "ホンジュラス共和国",
    "hr" => "クロアチア",
    "ht" => "ハイチ",
    "hu" => "ハンガリー",
    "id" => "インドネシア",
    "ie" => "アイルランド",
    "il" => "イスラエル",
    "im" => "Man Island",
    "in" => "インディア",
    "io" => "英国のインド洋領域",
    "iq" => "イラク",
    "ir" => "イラン、イスラム共和国",
    "is" => "アイスランド",
    "it" => "イタリア",
    "je" => "Jersey",
    "jm" => "ジャマイカ",
    "jo" => "ヨルダン共和国",
    "jp" => "日本",
    "ke" => "ケニア",
    "kg" => "キルギスタン共和国",
    "kh" => "カンボジア国",
    "ki" => "キリバス共和国",
    "km" => "コモロ・イスラム連邦共和国",
    "kn" => "セントキッツとネヴィス",
    "kp" => "Korea, Democratic People's Republic of",
    "kr" => "Korea, Republic of",
    "kw" => "クゥェート",
    "ky" => "ケイマン諸島",
    "kz" => "カザフスタン",
    "la" => "ラオ人民民主共和国",
    "lb" => "レバノン共和国",
    "lc" => "セントルシア",
    "li" => "リヒテンシュタイン公国",
    "lk" => "スリランカ民主社会主義共和国",
    "lr" => "リベリア共和国",
    "ls" => "レソト王国",
    "lt" => "リトアニア",
    "lu" => "ルクセンブルク大公国",
    "lv" => "ラトビア共和国",
    "ly" => "リビア",
    "ma" => "モロッコ",
    "mc" => "モナコ",
    "md" => "Moldova, Republic of",
    "mg" => "マダガスカル",
    "mh" => "マーシャル諸島",
    "mk" => "マケドニア",
    "ml" => "マリ",
    "mm" => "ミャンマー",
    "mn" => "モンゴル",
    "mo" => "マカオ",
    "mp" => "北マリアナ諸島",
    "mq" => "マルティニーク島",
    "mr" => "モーリタニア・イスラム共和国",
    "ms" => "モントセラト",
    "mt" => "マルタ共和国",
    "mu" => "モーリシャス共和国",
    "mv" => "モルディブ共和国",
    "mw" => "マラウイ共和国",
    "mx" => "メキシコ",
    "my" => "マレーシア連邦",
    "mz" => "モザンビーク人民共和国",
    "na" => "ナミビア共和国",
    "nc" => "ニューカレドニア",
    "ne" => "ニジェール共和国",
    "nf" => "ノーフォーク島",
    "ng" => "ナイジェリア連邦共和国",
    "ni" => "ニカラグア共和国",
    "nl" => "オランダ王国",
    "no" => "ノルウェイ",
    "np" => "ネパール",
    "nr" => "ナウル共和国",
    "nu" => "ニウエ",
    "nz" => "ニュージーランド",
    "om" => "オマン",
    "pa" => "パナマ",
    "pe" => "ペルー",
    "pf" => "仏領ポリネシア",
    "pg" => "パプアニューギニア",
    "ph" => "フィリピン",
    "pk" => "パキスタン",
    "pl" => "ポーランド",
    "pm" => "サンピエール・エ・ミクロン",
    "pn" => "ピトケアン",
    "pr" => "プエルトリコ",
	"ps" => "Palestinian Territory",
    "pt" => "ポルトガル",
    "pw" => "パラオ",
    "py" => "パラグアイ",
    "qa" => "カタール",
    "re" => "Reunion Island",
    "ro" => "ルーマニア",
    "ru" => "ロシア連邦",
    "rs" => "ロシア",
    "rw" => "ルワンダ",
    "sa" => "サウジアラビア",
    "sb" => "ソロモン諸島",
    "sc" => "セーシェル共和国",
    "sd" => "スーダン",
    "se" => "スウェーデン",
    "sg" => "シンガポール",
    "sh" => "セントヘレナ",
    "si" => "スロベニア共和国",
    "sj" => "スバールバル諸島",
    "sk" => "スロヴァキア",
    "sl" => "シエラレオネ共和国",
    "sm" => "サンマリノ共和国",
    "sn" => "セネガル共和国",
    "so" => "ソマリア民主共和国",
    "sr" => "スリナム共和国",
    "st" => "サントメプリンシペ共和国",
    "su" => "Old U.R.S.S.",
    "sv" => "エルサルバドル",
    "sy" => "シリアアラブ共和国",
    "sz" => "スイス",
    "tc" => "タークスアンドカイコス諸島",
    "td" => "チャド",
    "tf" => "フランスの南部テリトリ",
    "tg" => "トーゴ共和国",
    "th" => "タイ王国",
    "tj" => "タジキスタン共和国",
    "tk" => "Tokelau",
    "tm" => "トルクメニスタン",
    "tn" => "チュニジア共和国",
    "to" => "トンガ",
    "tp" => "東ティモール",
    "tr" => "トルコ共和国",
    "tt" => "トリニダード・トバゴ共和国",
    "tv" => "ツバル",
    "tw" => "中国の台湾および州",
    "tz" => "Tanzania, United Republic of",
    "ua" => "ウクライナ",
    "ug" => "ウガンダ",
    "uk" => "イギリス",
    "gb" => "グレートブリテン",
    "um" => "United States Minor Outlying Islands",
    "us" => "アメリカ合衆国",
    "uy" => "ウルグアイ東方共和国",
    "uz" => "ウズベキスタン共和国",
    "va" => "バチカン市国",
    "vc" => "セントヴィンセント・グレナディン",
    "ve" => "ベネズエラ",
    "vg" => "バージン群島、英国",
    "vi" => "バージン群島、米国",
    "vn" => "ベトナム社会主義共和国",
    "vu" => "バヌアツ共和国",
    "wf" => "ヴァリスとフトゥナ",
    "ws" => "サモア",
    "ye" => "イエメン",
    "yt" => "マヨット",
    "yu" => "ユーゴスラビア",
    "za" => "南アフリカ",
    "zm" => "ザンビア",
    "zr" => "ザイール",
    "zw" => "ジンバブエ",
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
    "tv" => "ツバル",
    "ws" => "サモア",
);
?>