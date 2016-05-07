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
$lang['auteur_nom'] = "Uğur Çetin"; // Translator's name
$lang['auteur_email'] = "ugur.jnmbk@gmail.com"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "tr"; // iso language code
$lang['lang_libelle_en'] = "Turkish"; // english language name
$lang['lang_libelle_fr'] = "Turque"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = '.'; // three thousand spells 3,000 in english
$lang['separateur_decimaux'] = ','; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | açık kaynak ağ sayfası istatistikleri ve ağ trafiği analizi uygulaması"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, script, application, software, statistics, referals, stats, free, open source, gpl, visits, visitors, mysql, viewed pages, pages, views, number of visits, graphs, Browsers, os, operating system, resolutions, day, week, month, records, country, host, service providors, search enginge, key words, referrers, graphs, entry pages, exit pages, pie charts"; // Header keywords
$lang['head_description'] = "phpMyVisites | PHP/MySQL ile geliştirilmiş Gnu GPL lisansı ile dağıtılan, açık kaynaklı bir ağ sayfası istatistik uygulamasıdır."; // Header description
$lang['logo_description'] = "phpMyVisites : PHP/MySQL ile geliştirilmiş, GPL ile dağıtılan, açık kaynaklı ağ sayfası istatistik uygulamasıdır."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "ZİYARETLER";
$lang['menu_pagesvues'] = "SAYFALAR";
$lang['menu_suivi'] = "TAKİP";
$lang['menu_provenance'] = "KAYNAK";
$lang['menu_configurations'] = "AYARLAR";
$lang['menu_affluents'] = "BAŞVURULAR";
$lang['menu_listesites'] = "Siteleri Listele";
$lang['menu_bilansites'] = "Özet";
$lang['menu_jour'] = "Gün";
$lang['menu_semaine'] = "Hafta";
$lang['menu_mois'] = "Ay";
$lang['menu_annee'] = "Yıl";
$lang['menu_periode'] = "Şu an görüntülenen: %s "; // Text formatted (e.g.: Studied period: Sunday, July the 14th)
$lang['liens_siteofficiel'] = "Resmi ağ sayfası";
$lang['liens_admin'] = "Yönetim";
$lang['liens_contacts'] = "İletişim";

//
// Divers
//
$lang['generique_nombre'] = "Sayı";
$lang['generique_tauxsortie'] = "Çıkış Sıklığı";
$lang['generique_ok'] = "Tamam";
$lang['generique_timefooter'] = "Sayfa %s saniyede oluşturuldu"; // Time in seconds
$lang['generique_divers'] = "Diğerleri"; // (for the graphs)
$lang['generique_inconnu'] = "Bilinmeyen"; // (for the graphs)
$lang['generique_vous'] = "... Sen ?";
$lang['generique_traducteur'] = "Çeviren";
$lang['generique_langue'] = "Dil";
$lang['generique_autrelangure'] = "Diğer?"; // Other language, translations wanted
$lang['aucunvisiteur_titre'] = "Bu zaman aralığında hiç ziyaretçi yok."; 
$lang['generique_aucune_visite_bdd'] = "<b>Uyarı ! </b> Şu an seçili olan sitenin hiç ziyaretçisi yok. Lütfen sayfalarınıza eklediğiniz javascript kodunu kontrol edin, doğru phpMyVisites bağlantısını yazdığınızdan emin olun. Yardım için belgelere bakabilirsiniz.";
$lang['generique_aucune_site_bdd'] = "Veritabanında kayıtlı hiçbir site yok ! Süper kullanıcı olarak giriş yapın ve bir site ekleyin.";
$lang['generique_retourhaut'] = "Yukarı Git";
$lang['generique_tempsvisite'] = "%sdk %ssn"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%ssa"; // 4h means 4 hours
$lang['generique_siteno'] = "Site %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Haberler %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "Ortak %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "Genel";
$lang['generique_user'] = "Kullanıcı %s"; // User "Admin"
$lang['generique_previous'] = "Önceki";
$lang['generique_next'] = "Sonraki";
$lang['generique_lowpop'] = "Düşük nüfusu istatistiklere katma";
$lang['generique_allpop'] = "Bütün nüfusu istatistiklere kat";
$lang['generique_to'] = "-"; // 4 'to' 8
$lang['generique_total_on'] = "arası"; // 4 to 8 'on' 10
$lang['generique_total'] = "Toplam";
$lang['generique_information'] = "Bilgi";
$lang['generique_done'] = "Tamamlandı!";
$lang['generique_other'] = "Diğer";
$lang['generique_description'] = "Tanımlama:";
$lang['generique_name'] = "İsim:";
$lang['generique_variables'] = "Değişkenler";
$lang['generique_logout'] = "Çıkış";
$lang['generique_login'] = "Giriş";
$lang['generique_hits'] = "Tıklamalar";
$lang['generique_errors'] = "Hatalar";
$lang['generique_site'] = "Site";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "parola : "; // lowercase
$lang['login_login'] = "giriş : "; // lowercase
$lang['login_error'] = "Giriş yapılamadı. Kullanıcı adı veya parola yanlış.";
$lang['login_error_nopermission'] = "Bu kullanıcının hiçbir izni yok. Lütfen süper kullanıcıyla irtibata geçin ve gerekli izinleri vermesini isteyin.";
$lang['login_protected'] = "Bu alan %sphpMyVisites%s tarafından korunuyor.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Kişiler";
$lang['contacts_langue'] = "Çeviriler";
$lang['contacts_merci'] = "Teşekkürler";
$lang['contacts_auteur'] = "phpMyVisites projesinin yazarı, belgeleyicisi, ve yaratıcısı <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "<strong>Teknik sorular, hata bildirimi ve öneriler</strong> için lütfen resmi ağ sayfası forumlarını kullanın %s. Diğer istekler için, lütfen resmi ağ sayfasındaki formu kullanarak yazarla görüşün."; // adresse du site
$lang['contacts_trad1'] = "phpMyVisites kendi dilinize çevirmek mi istiyorsunuz? Hiç tereddüt etmeyin çünkü <strong>phpMyVisites'in size ihtiyacı var!</strong>";
$lang['contacts_trad2'] = "phpMyVisites'i çevirmek epey zamanınızı alır (birkaç saat) ve içerilen diller hakkında iyi bir bilgi birikimi gerektirir; şunu unutmayın ki <strong>yaptığınız işten birçok kişi faydalanacaktır</strong>.  phpMyVisites'i kendi dilinize çevirmeyle ilgilenecekseniz ihtiyacınız olan tüm bilgiyi %s phpMyVisites resmi belgelerinde %sbulabilirsiniz."; // lien vers la doc
$lang['contacts_doc'] = "Size phpMyVisites'in kurulumu, yapılandırması ve işlevselliği hakkında birçok bilgi verecek %s phpMyVisites'in resmi belgelerine %s başvurmaktan çekinmeyin. Kullandığınız phpMySites sürümü için belgeler bulunmaktadır."; // lien vers la doc
$lang['contacts_thanks_dev'] = "phpMyVisites'in yardımcı geliştiricilerine projedeki kaliteli çalışmalarınızdan dolayı teşekkür ederiz. (<strong>%s</strong>)";
$lang['contacts_merci3'] = "phpMyVisites yapımcılarının tam listesi için resmi ağ sayfasındaki teşekkürler bölümünü ziyaret edebilirsiniz.";
$lang['contacts_merci2'] = "phpMyVisites'i kendi dillerine çevirerek kültürünü bizimle paylaşan herkese çok teşekkür ederiz:";

//
// Rss & Mails
//
$lang['rss_titre'] = "%s - %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Ayrıntılı istatistiklere git";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Ziyaretçi bilgisi"; 
$lang['visites_statistiques'] = "İstatistikler";
$lang['visites_periodesel'] = "Seçili zaman aralığı için";
$lang['visites_visites'] = "Ziyaretler";
$lang['visites_uniques'] = "Tekil ziyaretçiler";
$lang['visites_pagesvues'] = "Sayfalar";
$lang['visites_pagesvisiteurs'] = "Ziyaretçi başına düşen sayfa"; 
$lang['visites_pagesvisites'] = "Ziyaret başına düşen sayfa"; 
$lang['visites_pagesvisitessign'] = "Büyük ziyaret başına düşen sayfa"; 
$lang['visites_tempsmoyen'] = "Ortalama ziyaret süresi";
$lang['visites_tempsmoyenpv'] = "Bir sayfaya düşen görüntüleme süresi";
$lang['visites_tauxvisite'] = "Bir sayfanın ziyaret artışı"; 
$lang['visites_average_visits_per_day'] = "Gün başına düşen ortalama ziyaret"; 
$lang['visites_recapperiode'] = "Haftalık özet";
$lang['visites_nbvisites'] = "Ziyaretler";
$lang['visites_aucunevivisite'] = "Ziyaret yok"; // in the table, must be short
$lang['visites_recap'] = "Özet";
$lang['visites_unepage'] = "1 sayfa"; // (graph)
$lang['visites_pages'] = "%s sayfa"; // 1-2 pages (graph)
$lang['visites_min'] = "%s dak"; // 10-15 min (graph)
$lang['visites_sec'] = "%s sn"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "İstatistik özeti grafiği";
$lang['visites_grapghrecaplongterm'] = "Uzun dönem istitistik özetini gösteren grafik";
$lang['visites_graphtempsvisites'] = "Ziyaret süresi grafiği";
$lang['visites_graphtempsvisitesimg'] = "Ziyaret süreleri";
$lang['visites_graphheureserveur'] = "Sunucu için saatlik ziyaret grafiği"; 
$lang['visites_graphheureserveurimg'] = "Sunucu saatine göre ziyaretler"; 
$lang['visites_graphheurevisiteur'] = "Ziyaretçi için saatlik ziyaret grafiği";
$lang['visites_graphheurelocalimg'] = "Yerel zamana göre ziyaretler"; 
$lang['visites_longterm_statd'] = "Uzun dönem Analizi (Günlere göre)";
$lang['visites_longterm_statm'] = "Uzun dönem Analizi (Aylara göre)";

//
// Sites Summary
//
$lang['summary_title'] = "Site Özeti";
$lang['summary_stitle'] = "Özet";

//
// Frequency Part
//
$lang['frequence_titre'] = "Geri dönen ziyaretçiler";
$lang['frequence_nouveauxconnusgraph'] = "Yeni ziyaretçilerle geri dönenleri karşılaştıran grafik";
$lang['frequence_nouveauxconnus'] = "Yeniler ve Geri dönenler";
$lang['frequence_titremenu'] = "Sıklık";
$lang['frequence_visitesconnues'] = "Geri dönen ziyaretçiler";
$lang['frequence_nouvellesvisites'] = "Yeni ziyaretçiler";
$lang['frequence_visiteursconnus'] = "Geri dönen ziyaretçiler";
$lang['frequence_nouveauxvisiteurs'] = "Yeni ziyaretçiler";
$lang['frequence_returningrate'] = "Geri dönme artışı";
$lang['pagesvues_vispervisgraph'] = "Ziyaretçi başına düşen ziyaret grafiği";
$lang['frequence_vispervis'] = "Ziyaretçilerin yaptığı ziyaret sayısı";
$lang['frequence_vis'] = "ziyaret";
$lang['frequence_visit'] = "1 ziyaret"; // (graph)
$lang['frequence_visits'] = "%s ziyaret"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Sayfa ziyaretleri";
$lang['pagesvues_joursel'] = "Seçilen günler";
$lang['pagesvues_jmoins7'] = "Gün - 7";
$lang['pagesvues_jmoins14'] = "Gün - 14";
$lang['pagesvues_moyenne'] = "(ortalama)";
$lang['pagesvues_pagesvues'] = "Sayfa ziyareti";
$lang['pagesvues_pagesvudiff'] = "Tekil sayfa ziyareti";
$lang['pagesvues_recordpages'] = "Bir ziyaretçinin ziyaret ettiği en fazla sayfa";
$lang['pagesvues_tabdetails'] = "Görüntülenen sayfalar (%s - %s aralığı)"; // (from 1 to 21)
$lang['pagesvues_graphsnbpages'] = "Görüntülenen sayfalara göre ziyaretler grafiği";
$lang['pagesvues_graphnbvisitespageimg'] = "Görüntülenen sayfalara göre ziyaretler";
$lang['pagesvues_graphheureserveur'] = "Sunucu saatine göre ziyaret grafiği";
$lang['pagesvues_graphheureserveurimg'] = "Sunucu saatine göre ziyaretler";
$lang['pagesvues_graphheurevisiteur'] = "Yerel saate göre ziyaret grafiği";
$lang['pagesvues_graphpageslocalimg'] = "Yerel saate göre ziyaretler";
$lang['pagesvues_tempsparpage'] = "Sayfaya göre süre";
$lang['pagesvues_total_time'] = "Toplam süre";
$lang['pagesvues_avg_time'] = "Ortalama süre";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Ziyaretçi hareketi";
$lang['suivi_pageentree'] = "Giriş sayfaları";
$lang['suivi_pagesortie'] = "Çıkış sayfaları";
$lang['suivi_tauxsortie'] = "Çıkış sıklığı";
$lang['suivi_pageentreehits'] = "Girişler";
$lang['suivi_pagesortiehits'] = "Çıkışlar";
$lang['suivi_singlepage'] = "Tekil Sayfa Ziyaretleri";

//
// Origin
//
$lang['provenance_titre'] = "Ziyaretçi Kaynağı";
$lang['provenance_recappays'] = "Ülke Özetleri";
$lang['provenance_pays'] = "Ülkeler";
$lang['provenance_paysimg'] = "Ülkeye Göre Ziyaretçiler";
$lang['provenance_fai'] = "İnternet Servis Sağlayıcıları";
$lang['provenance_nbpays'] = "Farklı ülke sayısı : %s";
$lang['provenance_provider'] = "Sağlayıcılar"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "Kıta";
$lang['provenance_mappemonde'] = "Dünya haritası";
$lang['provenance_interetspays'] = "Ülkedekilerin tercihleri";

//
// Setup
//
$lang['configurations_titre'] = "Ziyaretçi Ayarları";
$lang['configurations_os'] = "İşletim Sistemleri";
$lang['configurations_osimg'] = "Ziyaretçilerin işletim sistemleri grafiği";
$lang['configurations_navigateurs'] = "Tarayıcılar";
$lang['configurations_navigateursimg'] = "Ziyaretçilerin tarayıcıları grafiği";
$lang['configurations_resolutions'] = "Ekran Çözünürlükleri";
$lang['configurations_resolutionsimg'] = "Ziyaretçilerin ekran çözünürlükleri grafiği";
$lang['configurations_couleurs'] = "Renk Derinliği";
$lang['configurations_couleursimg'] = "Ziyaretçilerin renk derinliği grafiği";
$lang['configurations_rapport'] = "Normal/Geniş ekran";
$lang['configurations_large'] = "Genis ekran";
$lang['configurations_normal'] = "Normal";
$lang['configurations_double'] = "Çift Ekran";
$lang['configurations_plugins'] = "Eklentiler";
$lang['configurations_navigateursbytype'] = "Tarayıcılar (türe göre)"; // TODO : translate
$lang['configurations_navigateursbytypeimg'] = "Tarayıcı türlerini gösteren grafik"; // TODO : translate
$lang['configurations_os_interest'] = "İşletim sistemi tercihleri";
$lang['configurations_navigateurs_interest'] = "Tarayıcı Tercihleri";
$lang['configurations_resolutions_interest'] = "Ekran çözünürlüğü tercihleri";
$lang['configurations_couleurs_interest'] = "Renk Derinliği Tercihleri";
$lang['configurations_configurations'] = "En genel tercihler";

//
// Referers
//
$lang['affluents_titre'] = "Yönlendiriciler";
$lang['affluents_recapimg'] = "Yönlendiricilere Göre Ziyaretçiler";
$lang['affluents_directimg'] = "Doğrudan";
$lang['affluents_sitesimg'] = "Ağ Sayfaları";
$lang['affluents_moteursimg'] = "Motorlar";
$lang['affluents_referrersimg'] = "Yönlendiriciler";
$lang['affluents_moteurs'] = "Arama Motorları";
$lang['affluents_nbparmoteur'] = "Arama motorundan sağlanan ziyaretler : %s";
$lang['affluents_aucunmoteur'] = "Arama motorlarından ziyaret sağlanmadı.";
$lang['affluents_motscles'] = "Anahtar sözcükler";
$lang['affluents_nbmotscles'] = "Farklı anahtar sözcükler : %s";
$lang['affluents_aucunmotscles'] = "Anahtar sözcük bulunamadı.";
$lang['affluents_sitesinternet'] = "Ağ sayfaları";
$lang['affluents_nbautressites'] = "Diğer ağ sayfalarından gelen ziyaretler : %s";
$lang['affluents_nbautressitesdiff'] = "Farklı ağ sayfası sayısı : %s";
$lang['affluents_aucunautresite'] = "Ağ sayfalarından gelen ziyaret yok.";
$lang['affluents_entreedirecte'] = "Doğrudan İstek";
$lang['affluents_nbentreedirecte'] = "Doğrudan yapılan ziyaretler : %s";
$lang['affluents_nbpartenaires'] = "Ortaklardan gelen ziyaretçiler : %s";
$lang['affluents_aucunpartenaire'] = "Ortak sitelerden gelen ziyaretçi yok.";
$lang['affluents_nbnewsletters'] = "Haber gruplarından gelen ziyaretçiler : %s";
$lang['affluents_aucunnewsletter'] = "Haber gruplarından gelen ziyaretçi yok.";
$lang['affluents_details'] = "Ayrıntılar"; // In the results of the referers array
$lang['affluents_interetsmoteurs'] = "Arama Motoru Tercihleri";
$lang['affluents_interetsmotscles'] = "Anahtar Kelime Tercihleri";
$lang['affluents_interetssitesinternet'] = "Web Sitesi Tercihleri";
$lang['affluents_partenairesimg'] = "Ortaklar";
$lang['affluents_partenaires'] = "Ortaklar";
$lang['affluents_interetspartenaires'] = "Ortak Tercihleri";
$lang['affluents_newslettersimg'] = "Haber Grupları";
$lang['affluents_newsletters'] = "Haber Grupları";
$lang['affluents_interetsnewsletters'] = "Haber Grupları Tercihleri";
$lang['affluents_type'] = "Referans Türü";
$lang['affluents_interetstype'] = "Erişim Türü Tercihleri";

//
// Summary
//
$lang['purge_titre'] = "Ziyaret ve yönlendirici özetleri";
$lang['purge_intro'] = "Bu zaman aralığı yönetim içinden kaldırıldı, yalnızca önemli istatistikler kaldı.";
$lang['admin_purge'] = "Veritabanı bakımı";
$lang['admin_purgeintro'] = "Bu bölüm phpMyVisites'in kullandığı tabloları yönetmenizi sağlar. Tabloların kullandığı disk alanını görebilir, en iyi hale getirebilir ya da eski kayıtları silebilirsiniz. Bu işlem veritabanınızdaki tabloların kapladığı yeri sınırlamanıza izin verir.";
$lang['admin_optimisation'] = "[ %s ] en iyi hale getiriliyor..."; // Tables names
$lang['admin_postopt'] = "Toplam boyut %chiffres% %unites% azaltıldı"; // 28 Kb
$lang['admin_purgeres'] = "Şu aralığı sil: %s";
$lang['admin_purge_fini'] = "Tabloların silinmesi bitti...";
$lang['admin_bdd_nom'] = "İsim";
$lang['admin_bdd_enregistrements'] = "Kayıt";
$lang['admin_bdd_taille'] = "Tablo Boyutu";
$lang['admin_bdd_opt'] = "En İyi Hale Getir";
$lang['admin_bdd_purge'] = "Temizleme Ölçütü";
$lang['admin_bdd_optall'] = "Tümünü En İyi Hale Getir";
$lang['admin_purge_j'] = "%s günden eski olan kayıtları sil";
$lang['admin_purge_s'] = "%s haftadan eski olan kayıtları sil";
$lang['admin_purge_m'] = "%s aydan eski olan kayıtları sil";
$lang['admin_purge_y'] = "%s yıldan eski kaytıları sil";
$lang['admin_purge_logs'] = "Tüm kayıtları sil";
$lang['admin_purge_autres'] = "Genel olarak '%s' tablosuna temizle";
$lang['admin_purge_none'] = "Yapılabilecek işlem yok";
$lang['admin_purge_cal'] = "Hesapla ve temizle (birkaç dakika sürebilir)";
$lang['admin_alias_title'] = "Web Site adları ve adresleri";
$lang['admin_partner_title'] = "Web Site ortakları";
$lang['admin_newsletter_title'] = "Haber Grupları";
$lang['admin_ip_exclude_title'] = "İstatistiklere katılmayacak IP aralığı";
$lang['admin_name'] = "İsim:";
$lang['admin_error_ip'] = "IP düzgün biçimde olmalı: %s";
$lang['admin_site_name'] = "Site Adı";
$lang['admin_site_url'] = "Sitenin Ana Adresi";
$lang['admin_db_log'] = "Veritabanı ayarlarını değiştirmek için phpMyVisites Süper Kullanıcısı olarak giriş yapın.";
$lang['admin_error_critical'] = "Hata, phpMyVisites'in çalışması için düzeltilmesi lazım.";
$lang['admin_warning'] = "Uyarı, phpMyVisites çalışacak ama bazı gelişmiş özellikler devre dışı kalacak.";
$lang['admin_move_group'] = "Gruba taşı:";
$lang['admin_move_select'] = "Grup seç";

//
// Setup
//
$lang['admin_intro'] = "phpMyVisites yapılandırma alanına hoş geldiniz. Kurulum ile ilgili tüm bilgilerinizi değiştirebilirsiniz. Herhangi bir sorunla karşılaşırsanız %s resmi phpMyVisites belgelerine %s başvurmaktan çekinmeyin."; // link to the doc
$lang['admin_configetperso'] = "Genel ayarlar";
$lang['admin_afficherjavascript'] = "JavaScript istatistik kodunu göster";
$lang['admin_cookieadmin'] = "Yönetici istatistiklere katılmasın";
$lang['admin_ip_ranges'] = "IP/IP aralıklarını istatistiklere katma";
$lang['admin_sitesenregistres'] = "Kayıtlı ağ sayfaları:";
$lang['admin_retour'] = "Geri";
$lang['admin_cookienavigateur'] = "Yöneticiyi istatistiklere katmayabilirsiniz. Bu yöntem çerez tabanlıdır ve bu seçenek sadece şu an kullandığınız tarayıcı için çalışacaktır. Bu seçeneği istediğiniz zaman değiştirebilirsiniz.";
$lang['admin_prendreencompteadmin'] = "Yöneticiyi istatistiklere kat (çerezi sil)";
$lang['admin_nepasprendreencompteadmin'] = "Yöneticiyi istatistiklere katma (çerez oluştur)";
$lang['admin_etatcookieoui'] = "Bu ağ sayfası için yönetici istatistiklere katılıyor (Bu varsayılan yapılandırmadır, normal bir ziyaretçi gibi hesaba katılırsınız)";
$lang['admin_etatcookienon'] = "Bu ağ sayfası için istatistiklere katılmıyorsunuz (Ziyaretleriniz bu ağ sayfası için sayılmayacak)";
$lang['admin_deleteconfirm'] = "%s silinsin mi?";
$lang['admin_sitedeletemessage'] = "<u>Lütfen dikkat</u>: Bu siteyle ilgili herşey silinecek<br>Kaybolan verileri kurtarma şansınız yok.";
$lang['admin_confirmyes'] = "Evet, silmek istiyorum";
$lang['admin_confirmno'] = "Hayır, vazgeçtim";
$lang['admin_nonewsletter'] = "Bu sitenin haber grubu yok!";
$lang['admin_nopartner'] = "Bu sitenin ortağı yok!";
$lang['admin_get_question'] = "GET değişkenlerini kaydedilsin mi? (URL değişkenleri)";
$lang['admin_get_a1'] = "TÜM URL değişkenlerini kaydet";
$lang['admin_get_a2'] = "HİÇBİR URL değişkenini KAYDETME";
$lang['admin_get_a3'] = "SADECE belirlenmiş deişkenleri kaydet";
$lang['admin_get_a4'] = "Sadece belirlenmiş değişken DIŞINDAkileri kaydet";
$lang['admin_get_list'] = "Değişken isimleri (<b>;</b> ile ayrılmış liste) <br/>Örnek : %s";
$lang['admin_required'] = "%s gerekli.";
$lang['admin_title_required'] = "Gerekli";
$lang['admin_write_dir'] = "Yazılabilir dizinler";
$lang['admin_chmod_howto'] = "Bu dizinlerin yazılabilir olması gerekiyor. FTP yazılımınızla chmod 777 yapın (dizine sağ tıklayın -> İzinler (veya chmod))";
$lang['admin_optional'] = "Zorunlu Değil";
$lang['admin_memory_limit'] = "Bellek sınırı";
$lang['admin_allowed'] = "izinli";
$lang['admin_webserver'] = "Web sunucusu";
$lang['admin_server_os'] = "Sunucunun İşletim Sistemi";
$lang['admin_server_time'] = "Sunucu saati";
$lang['admin_legend'] = "Lejant:";
$lang['admin_error_url'] = "URL düzgün biçimde olmalı : %s (sonunda bölü işareti olmayacak)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "URL isimleri";
$lang['admin_logo_question'] = "Logo göster?";
$lang['admin_type_again'] = "(tekrar yazın)";
$lang['admin_admin_mail'] = "Süper Yönetici e-postası";
$lang['admin_admin'] = "Süper Yönetici";
$lang['admin_phpmv_path'] = "phpMyVisites uygulamasının tam yolu";
$lang['admin_valid_email'] = "E-posta adresi geçerli olmalıdır";
$lang['admin_valid_pass'] = "Parola daha karmaşık olmalıdır(en az altı karakterden oluşmalı ve sayı içermeli)";
$lang['admin_match_pass'] = "Parolalar uyuşmadı";
$lang['admin_no_user_group'] = "Bu sitenin bu grubunda hiç kullanıcı yok";
$lang['admin_recorded_nl'] = "Kayıtlı heber listeleri:";
$lang['admin_recorded_partners'] = "Kayıtlı ortaklar:";
$lang['admin_recorded_users'] = "Kayıtlı kullanıcılar:";
$lang['admin_select_site_title'] = "Lütfen bir site seçin";
$lang['admin_select_user_title'] = "Lütfen bir kullanıcı seçin";
$lang['admin_no_user_registered'] = "Kayıtlı kullanıcı yok!";
$lang['admin_configuration'] = "Ayarlar";
$lang['admin_general_conf'] = "Genel ayarlar";
$lang['admin_group_title'] = "Grup yönetimi (izinler)";
$lang['admin_user_title'] = "Kullanıcı yönetimi";
$lang['admin_user_add'] = "Kullanıcı ekle";
$lang['admin_user_mod'] = "Kullanıcı düzenle";
$lang['admin_user_del'] = "Kullanıcı sil";
$lang['admin_server_info'] = "Sunucu Bilgisi";
$lang['admin_send_mail'] = "İstatistikleri e-postayla gönder";
$lang['admin_rss_feed'] = "İstatistikler için RSS oluştur";
$lang['admin_site_admin'] = "Site Yönetimi";
$lang['admin_site_add'] = "Site ekle";
$lang['admin_site_mod'] = "Site düzenle";
$lang['admin_site_del'] = "Site sil";
$lang['admin_nl_add'] = "Haber grubu ekle";
$lang['admin_nl_mod'] = "Haber grubu düzenle";
$lang['admin_nl_del'] = "Haber grubu sil";
$lang['admin_partner_add'] = "Ortak ekle";
$lang['admin_partner_mod'] = "Ortak adını ve adresini düzenle";
$lang['admin_partner_del'] = "Ortağı sil";
$lang['admin_url_alias'] = "URL ismi Yönetimi";
$lang['admin_group_admin_n'] = "İstetistikleri görüntüle + Yönetim izni";
$lang['admin_group_admin_d'] = "Kullanıcılar site istatistiklerine bakabilir VE ayarlarını değiştirebilir (isim, çerez ekleme, IP aralıkları, vs.)";
$lang['admin_group_view_n'] = "İstatistikleri görüntüle";
$lang['admin_group_view_d'] = "Sadece istatistikleri görüntüleyebilir. Yönetim izni yok.";
$lang['admin_group_noperm_n'] = "İzin yok";
$lang['admin_group_noperm_d'] = "Bu gruptakiler istatistiklere bakamaz ve ayarları değiştiremez.";
$lang['admin_group_stitle'] = "Değiştirmek istediğiniz kullanıcıları seçerek grupları düzenleyebilirsiniz, Sonra seçili kullanıcıları taşıyacağınız grubu seçin.";
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
$lang['install_loginmysql'] = "Veritabanı girişi";
$lang['install_mdpmysql'] = "Veritabanı şifresi";
$lang['install_serveurmysql'] = "Veritabanı sunucusu";
$lang['install_basemysql'] = "Veritabanı adı";
$lang['install_prefixetable'] = "Tablo öneki";
$lang['install_utilisateursavances'] = "Uzman kullanıcılar (isteğe bağlı)";
$lang['install_oui'] = "Evet";
$lang['install_non'] = "Hayır";
$lang['install_ok'] = "Tamam";
$lang['install_probleme'] = "Sorun: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Yönetici girişi:";
$lang['install_mdpadmin'] = "Yönetici parolası:";
$lang['install_chemincomplet'] = "phpMyVisites uygulamasının tam yolu (http://www.sayfam.com/rep1/rep3/phpmyvisites/ gibi). Yol mutlaka <strong>/</strong> işareti ile bitmelidir.";
$lang['install_afficherlogo'] = "Sayfalarınızda logo görünsün %s <br />Logoyu sitenize koyarsanız phpMyVisites'in gelişimine ve tanıtımına katkıda bulunmuş olursunuz.  Ayrıca saatlerce bilgisayar başında bu programı yapmayla uğraşan kişilere teşekkür etmiş olursunuz."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "İstatistik grafiklerini göster.";
$lang['install_valider'] = "Gönder"; //  during installation and for login
$lang['install_popup_logo'] = "Lütfen bir logo seçin";
$lang['install_logodispo'] = "Mümkün olan çeşitli logoları gör";
$lang['install_welcome'] = "Hoş Geldiniz!";
$lang['install_system_requirements'] = "Sistem Gereksinimleri";
$lang['install_database_setup'] = "Veritabanı Ayarları";
$lang['install_create_tables'] = "Tablo oluşturulması";
$lang['install_general_setup'] = "Genel Ayarlar";
$lang['install_create_config_file'] = "Ayar Dosyası Oluştur";
$lang['install_first_website_setup'] = "İlk Web Sitesini Ekle";
$lang['install_display_javascript_code'] = "Javascript kodunu göster";
$lang['install_finish'] = "Tamamlandı!";
$lang['install_txt2'] = "Kurulumun sonunda, phpMyVisites kullanıcılarının sayısını tutmamıza yardım etmek için bir istek gönderilecektir. Anlayışlı olduğunuz için teşekkür ederiz.";
$lang['install_database_setup_txt'] = "Veritabanı ayarlarınızı giriniz.";
$lang['install_general_config_text'] = "phpMyVisites tüm yetkilere sahip (silme/oluşturma) tek bir kullanıcı oluşturur. Lütfen yönetici hesabınız için bir kullanıcı adı ve parola belirleyin. Daha sonra başka kullanıcılar da ekleyebilirsiniz.";
$lang['install_config_file'] = " Yönetici bilgileri başarılı bir şekilde girildi.";
$lang['install_js_code_text'] = "<p>Tüm ziyaretçileri saymak için javascript kodunu her sayfanıza koymalısınız. </p><p> Sayfalarınızın PHP ile yapılmış olması zorunlu değildir, <strong>phpMyVisites her tür sayfada çalışabilir (0HTML, ASP, Perl veya başka bir dil de farketmez).</strong> </p><p> Eklemeniz gereken kod budur: (kopyalayıp her sayfanıza yapıştırın) </p>";
$lang['install_intro'] = "phpMyVisites kurulumuna hoş geldiniz."; 
$lang['install_intro2'] = "Kurulum %s kolay adımdan sonra tamamlanacak ve yaklaşık 10 dakikanızı alacaktır.";
$lang['install_next_step'] = "Sonraki adıma geç";
$lang['install_status'] = "Kurulum durumu";
$lang['install_done'] = "Kurulum %%%s tamamlandı"; // Install 25% complete
$lang['install_site_success'] = "Web sitesi oluşturuldu!";
$lang['install_site_info'] = "Lütfen ilk site hakkındaki tüm bilgileri doldurun.";
$lang['install_go_phpmv'] = "phpMyVisites'e git!";
$lang['install_congratulation'] = "Tebrikler! phpMyVisites kurulumu tamamlandı.";
$lang['install_end_text'] = "javascript kodunu sayfalarınıza ekleyin ve ziyaretçilerin gelmesini bekleyin!";
$lang['install_db_ok'] = "Veritabanı sunucusuyla bağlantı kuruldu!";
$lang['install_table_exist'] = "Veritabanında phpMyVisites tabloları bulundu.";
$lang['install_table_choice'] = "İsterseniz hepsini silip temiz kurulum yapabilir ya da varolan tabloları kullanarak devam edebilirsiniz, böylece eski verileriniz kaybolmaz.";
$lang['install_table_erase'] = "Tüm tabloları sil (dikkatli kullanın!)";
$lang['install_table_reuse'] = "Varolan tabloları kullan";
$lang['install_table_success'] = "Tablolar oluşturuldu!";
$lang['install_send_mail'] = "İstatistik özetlerini e-postayla almak ister misiniz?";

//
// Update Step
//
$lang['update_title'] = "phpMyVisites Güncelleştirmesi";
$lang['update_subtitle'] = "phpMyVisites'i güncelleştirdiğinizi belirledik.";
$lang['update_versions'] = "Eski sürümünüz %s güncellemeden sonra %s olacaktır.";
$lang['update_db_updated'] = "Veritabanı başarılı bir şekilde güncelleştirildi!";
$lang['update_continue'] = "phpMyVisites'e devam et";
$lang['update_jschange'] = "Uyarı! <br /> phpMyVisites javascript kodu değiştiirldi. Tüm ağ sayfalarınızı MUTLAKA yeni phpMyVisites Javascript kodunu kopyalayıp yapıştırarak güncellemelisiniz. <br /> javascript kodunda nadiren değişiklik yapılır, verdiğimiz rahatsılıktan dolayı özür dileriz.";

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
$lang['tdate3'] = "Hafta %monthlong% %daynumeric% - %monthlong2% %daynumeric2% %yearlong%";

// February 2004 Month
$lang['tdate4'] = "%monthlong% %yearlong% Month";

// December 2003
$lang['tdate5'] = "%monthlong% %yearlong%";

// 10 Febuary week
$lang['tdate6'] = "%daynumeric% %monthlong% haftası";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%daynumeric%-%monthnumeric%-%yearlong%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = "%dayshort% %daynumeric%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9'] = "%daynumeric% %monthshort% haftası";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%monthshort% %yearshort%";

// Year 2004
$lang['tdate11'] = "Yıl %yearlong%";

// 2004
$lang['tdate12'] = "%yearlong%";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "Ocak";
$lang['moistab']['02'] = "Şubat";
$lang['moistab']['03'] = "Mart";
$lang['moistab']['04'] = "Nisan";
$lang['moistab']['05'] = "Mayıs";
$lang['moistab']['06'] = "Haziran";
$lang['moistab']['07'] = "Temmuz";
$lang['moistab']['08'] = "Ağustos";
$lang['moistab']['09'] = "Eylül";
$lang['moistab']['10'] = "Ekim";
$lang['moistab']['11'] = "Kasım";
$lang['moistab']['12'] = "Aralık";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Oca";
$lang['moistab_graph']['02'] = "Şub";
$lang['moistab_graph']['03'] = "Mar";
$lang['moistab_graph']['04'] = "Nis";
$lang['moistab_graph']['05'] = "May";
$lang['moistab_graph']['06'] = "Haz";
$lang['moistab_graph']['07'] = "Tem";
$lang['moistab_graph']['08'] = "Ağu";
$lang['moistab_graph']['09'] = "Eyl";
$lang['moistab_graph']['10'] = "Eki";
$lang['moistab_graph']['11'] = "Kas";
$lang['moistab_graph']['12'] = "Ara";

// Day of the week
$lang['jsemaine']['Mon'] = "Pazartesi";
$lang['jsemaine']['Tue'] = "Salı";
$lang['jsemaine']['Wed'] = "Çarşamba";
$lang['jsemaine']['Thu'] = "Perşembe";
$lang['jsemaine']['Fri'] = "Cuma";
$lang['jsemaine']['Sat'] = "Cumartesi";
$lang['jsemaine']['Sun'] = "Pazar";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Pzt";
$lang['jsemaine_graph']['Tue'] = "Sal";
$lang['jsemaine_graph']['Wed'] = "Car";
$lang['jsemaine_graph']['Thu'] = "Per";
$lang['jsemaine_graph']['Fri'] = "Cum";
$lang['jsemaine_graph']['Sat'] = "Cmt";
$lang['jsemaine_graph']['Sun'] = "Paz";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "P";
$lang['calendrier_jours'][1] = "S";
$lang['calendrier_jours'][2] = "Ç";
$lang['calendrier_jours'][3] = "P";
$lang['calendrier_jours'][4] = "C";
$lang['calendrier_jours'][5] = "C";
$lang['calendrier_jours'][6] = "P";

// DO NOT ALTER!
$lang['weekdays']['Mon'] = '1';
$lang['weekdays']['Tue'] = '2';
$lang['weekdays']['Wed'] = '3';
$lang['weekdays']['Thu'] = '4';
$lang['weekdays']['Fri'] = '5';
$lang['weekdays']['Sat'] = '6';
$lang['weekdays']['Sun'] = '7';

// Continents
$lang['eur'] = "Avrupa";
$lang['afr'] = "Afrika";
$lang['asi'] = "Asya";
$lang['ams'] = "Güney ve Orta Amerika";
$lang['amn'] = "Kuzey America";
$lang['oce'] = "Avustralya";

// Oceans
$lang['oc_pac'] = "Büyük Okyanus";
$lang['oc_atl'] = "Atlas Okyanusu";
$lang['oc_ind'] = "Hint Okyanusu";

// Countries
$lang['domaines'] = array(
    "xx" => "Bilinmeyen",
    "ac" => "Ascension Adaları",
    "ad" => "Andora",
    "ae" => "Birleşik Arap Emirlikleri",
    "af" => "Afganistan",
    "ag" => "Antigua ve Barbuda",
    "ai" => "Anguilla",
    "al" => "Albania",
    "am" => "Ermenistan",
    "an" => "Hollanda Antilleri",
    "ao" => "Angola",
    "aq" => "Antartika",
    "ar" => "Arjantin",
    "as" => "Amerikan Samoa",
    "at" => "Avusturya",
    "au" => "Avustralya",
    "aw" => "Aruba",
    "az" => "Azerbaycan",
    "ba" => "Bosna-Hersek",
    "bb" => "Barbados",
    "bd" => "Bangladeş",
    "be" => "Belçika",
    "bf" => "Burkina Faso",
    "bg" => "Bulgaristan",
    "bh" => "Bahreyn",
    "bi" => "Burundi",
    "bj" => "Benin",
    "bm" => "Bermuda",
    "bn" => "Bruneo",
    "bo" => "Bolivya",
    "br" => "Brezilya",
    "bs" => "Bahamalar",
    "bt" => "Bhutan",
    "bv" => "Bouvet Adası",
    "bw" => "Botsvana",
    "by" => "Belçika",
    "bz" => "Belize",
    "ca" => "Kanada",
    "cc" => "Cocos Adaları",
    "cd" => "Kongo Demokratik Cumhuriyeti",
    "cf" => "Orta Afrika Cumhuriyeti",
    "cg" => "Kongo",
    "ch" => "İsviçre",
    "ci" => "Cote D'Ivoire",
    "ck" => "Cook Adaları",
    "cl" => "Şili",
    "cm" => "Kamerun",
    "cn" => "Çin",
    "co" => "Kolombiya",
    "cr" => "Kosta Rika",
	"cs" => "Serbia Montenegro",
    "cu" => "Küba",
    "cv" => "Cape Verde",
    "cx" => "Christmas Adaları",
    "cy" => "Kıbrıs",
    "cz" => "Çek Cumhuriyeti",
    "de" => "Almanya",
    "dj" => "Cibuti",
    "dk" => "Danimarka",
    "dm" => "Dominik",
    "do" => "Dominik Cumhuriyeti",
    "dz" => "Algerya",
    "ec" => "Ekvador",
    "ee" => "Estonya",
    "eg" => "Mısır",
    "eh" => "Batı Sahra",
    "er" => "Eritre",
    "es" => "İspanya",
    "et" => "Etiyopya",
    "fi" => "Finlandiya",
    "fj" => "Fiji",
    "fk" => "Falkland Adaları (Malvinas)",
    "fm" => "Micronesia, Federal Devletleri",
    "fo" => "Faroe Adaları",
    "fr" => "Fransa",
    "ga" => "Gabon",
    "gd" => "Grenada",
    "ge" => "Corciya",
    "gf" => "Fransız Guyanası",
    "gg" => "Guernsey",
    "gh" => "Gana",
    "gi" => "Cebelitarık",
    "gl" => "Grönland",
    "gm" => "Gambiya",
    "gn" => "Gine",
    "gp" => "Guadeloupe",
    "gq" => "Ekvador Ginesi",
    "gr" => "Yunanistan",
    "gs" => "Güney Corciya ve Güney Sandwich adaları",
    "gt" => "Guetemala",
    "gu" => "Guam",
    "gw" => "Guinea-Bissau",
    "gy" => "Guyana",
    "hk" => "Hong Kong",
    "hm" => "Heard and McDonald Adaları",
    "hn" => "Honduras",
    "hr" => "Croatia",
    "ht" => "Haiti",
    "hu" => "Macaristan",
    "id" => "Endonezya",
    "ie" => "Irlanda",
    "il" => "Israil",
    "im" => "Man Adası",
    "in" => "Hindistan",
    "io" => "İngiliz Hint Okyanusu Bölgesi",
    "iq" => "Irak",
    "ir" => "İran",
    "is" => "Iceland",
    "it" => "İtalya",
    "je" => "Jersey",
    "jm" => "Jamaika",
    "jo" => "Jordan",
    "jp" => "Japonya",
    "ke" => "Kenya",
    "kg" => "Kırgızistan",
    "kh" => "Kamboçya",
    "ki" => "Kiribati",
    "km" => "Komoros",
    "kn" => "Saint Kitts ve Nevis",
    "kp" => "Kore, Demokratik Halk Cumhuriyeti",
    "kr" => "Kore, Cumhuriyeti",
    "kw" => "Küveyt",
    "ky" => "Kayman Adaları",
    "kz" => "Kazakistan",
    "la" => "Laos",
    "lb" => "Lebanon",
    "lc" => "Saint Lucia",
    "li" => "Liechtenstein",
    "lk" => "Sri Lanka",
    "lr" => "Liberya",
    "ls" => "Lesotho",
    "lt" => "Litvanya",
    "lu" => "Lüksemburg",
    "lv" => "Litvanya",
    "ly" => "Libya",
    "ma" => "Moroko",
    "mc" => "Monako",
    "md" => "Moldova Cumhuriyeti",
    "mg" => "Madagaskar",
    "mh" => "Marshall Adaları",
    "mk" => "Makedonia",
    "ml" => "Mali",
    "mm" => "Myanmar",
    "mn" => "Moğolistan",
    "mo" => "Macau",
    "mp" => "Kuzey Mariana Adaları",
    "mq" => "Martinik",
    "mr" => "Moritanya",
    "ms" => "Montserrat",
    "mt" => "Malta",
    "mu" => "Mauritius",
    "mv" => "Maldivler",
    "mw" => "Malavi",
    "mx" => "Meksika",
    "my" => "Malezya",
    "mz" => "Mozambik",
    "na" => "Namibya",
    "nc" => "Yeni Kaledonya",
    "ne" => "Nijer",
    "nf" => "Norfolk Adası",
    "ng" => "Nijerya",
    "ni" => "Nikaragua",
    "nl" => "Hollanda",
    "no" => "Norveç",
    "np" => "Nepal",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "Yeni Zelanda",
    "om" => "Oman",
    "pa" => "Panama",
    "pe" => "Peru",
    "pf" => "Fransız Polinezyası",
    "pg" => "Papua Yeni Gine",
    "ph" => "Filipinler",
    "pk" => "Pakistan",
    "pl" => "Polonya",
    "pm" => "Saint Pierre ve Miquelon",
    "pn" => "Pitcairn Adaları",
    "pr" => "Porto Riko",
	"ps" => "Palestinian Territory",
    "pt" => "Portekiz",
    "pw" => "Palau",
    "py" => "Paraguay",
    "qa" => "Katar",
    "re" => "Reunion",
    "ro" => "Romanya",
    "ru" => "Beyaz Rusya",
    "rs" => "Rusya",
    "rw" => "Ruanda",
    "sa" => "Suudi Arabistan",
    "sb" => "Solomon Adaları",
    "sc" => "Seyşel",
    "sd" => "Sudan",
    "se" => "İsveç",
    "sg" => "Singapur",
    "sh" => "Saint Helena",
    "si" => "Slovenya",
    "sj" => "Svalbard",
    "sk" => "Slovakya",
    "sl" => "Sierra Leone",
    "sm" => "San Marino",
    "sn" => "Senegal",
    "so" => "Somali",
    "sr" => "Surinam",
    "st" => "Sao Tome ve Principe",
    "su" => "Eski S.S.C.B",
    "sv" => "El Salvador",
    "sy" => "Suriye",
    "sz" => "Swaziland",
    "tc" => "Turks and Caicos Adaları",
    "td" => "Çat",
    "tf" => "Fransız Güney Bölgeleri",
    "tg" => "Togo",
    "th" => "Tayland",
    "tj" => "Tacikistan",
    "tk" => "Tokelau",
    "tm" => "Türkmenistan",
    "tn" => "Tunus",
    "to" => "Tonga",
    "tp" => "Doğu Timor",
    "tr" => "Türkiye",
    "tt" => "Trinidad ve Tobago",
    "tv" => "Tuvalu",
    "tw" => "Tayvan",
    "tz" => "Tanzanya, Birleşik Cumhuriyet",
    "ua" => "Ukrayna",
    "ug" => "Uganda",
    "uk" => "Birleşik Krallık",
    "gb" => "Büyük Britanya",
    "um" => "Birleşik Devletler Minor Outlying Adaları",
    "us" => "Birleşik Devletler",
    "uy" => "Uruguay",
    "uz" => "Özbekistan",
    "va" => "Vatikan",
    "vc" => "Saint Vincent ve Grenadinler",
    "ve" => "Venezuella",
    "vg" => "Virgin Adaları, İngiliz",
    "vi" => "Virgin Islands, A.B.D.",
    "vn" => "Vietnam",
    "vu" => "Vanuatu",
    "wf" => "Vallis ve Futuna",
    "ws" => "Samoa",
    "ye" => "Yemen",
    "yt" => "Mayotte",
    "yu" => "Yugoslavya",
    "za" => "Güney Afrika",
    "zm" => "Zambiya",
    "zr" => "Zaire",
    "zw" => "Zimbabve",
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