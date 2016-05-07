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
$lang['auteur_nom'] = "Leandro Batista Lameiro"; // Translator's name
$lang['auteur_email'] = "lameiro@gmail.com"; // Translator's email
$lang['charset'] = "utf-8"; // language file charset (utf-8 by default)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "pt-br"; // iso language code
$lang['lang_libelle_en'] = "Portuguese"; // english language name
$lang['lang_libelle_fr'] = "Portugais"; // french language name
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
$lang['separateur_milliers'] = '.'; // three thousands spells 300,000 in english
$lang['separateur_decimaux'] = ','; // Separator for the float part of a number

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | analisador de tráfico e estatísticas open source"; // Pages header's title
$lang['head_keywords'] = "phpmyvisites, php, script, programa, software, estatísticas, indicação, livre, open source, gpl, visitas, visitantes, mysql, páginas vistas, páginas, vistas, número de visitas, gráficos, Browsers, so, sistema operacional, resoluções, dia, semana, mês, registros, país, host, provedor, site de busca, palavras-chave, referrers, gráficos, páginas de entrada, páginas de saída, gráficos em pizza"; // Header keywords
$lang['head_description'] = "phpMyVisites | Um programa de estatísticas de web open source desenvolvido em PHP/MySQL e distribuído sob a GNU/GPL."; // Header description
$lang['logo_description'] = "phpMyVisites : um programa de estatísticas de web open source em PHP/MySQL, distribuído sob a GPL."; // This is the JS code description. Has to be short.

//
// Main menu & submenu
//
$lang['menu_visites'] = "Visitas";
$lang['menu_pagesvues'] = "Páginas Vistas";
$lang['menu_suivi'] = "Rastreamento";
$lang['menu_provenance'] = "Origem";
$lang['menu_configurations'] = "Configurações";
$lang['menu_affluents'] = "Indicações";
$lang['menu_listesites'] = "Lista de Sites";
$lang['menu_bilansites'] = "Summary";
$lang['menu_jour'] = "Dia";
$lang['menu_semaine'] = "Semana";
$lang['menu_mois'] = "Mês";
$lang['menu_annee'] = "Year";
$lang['menu_periode'] = "Período Analisado: %s"; // Text formated (e.g.: Studied period: Thuesday, september the 11th)
$lang['liens_siteofficiel'] = "Site oficial";
$lang['liens_admin'] = "Administração";
$lang['liens_contacts'] = "Contatos";

//
// Divers
//
$lang['generique_nombre'] = "Número";
$lang['generique_tauxsortie'] = "Taxa de Saída";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Página gerada em %s segundos"; // Time in seconds
$lang['generique_divers'] = "Outros"; // (for the graphs)
$lang['generique_inconnu'] = "Desconhecido"; // (for the graphs)
$lang['generique_vous'] = "... You ?";
$lang['generique_traducteur'] = "Translator";
$lang['generique_langue'] = "Language";
$lang['generique_autrelangure'] = "Outras?"; // Other language, translations wanted
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
$lang['generique_total'] = "Total";
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
$lang['login_password'] = "senha : "; // lowercase
$lang['login_login'] = "login : "; // lowercase
$lang['login_error'] = "Impossível entrar. Login ou senha errados.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "You wish to enter a %sphpMyVisites%s protected area.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Contatos";
$lang['contacts_langue'] = "Traduções";
$lang['contacts_merci'] = "Agradecimentos";
$lang['contacts_auteur'] = "O autor, documentador, e criados do projeto phpMyVisites é <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "Para <strong>dúvidas técnicas, avisos de bugs, sugestões</strong> por favor use os fóruns do website oficial %s. Para outros pedidos, por favor contate o autor usando o website oficial."; // adresse du site
$lang['contacts_trad1'] = "Você quer traduzir o phpMyVisites para sua língua? Não hesite, porque o  <strong>phpMyVisites precisa de você!</strong>";
$lang['contacts_trad2'] = "Traduzir o phpMyVisites vai tomar um pouco de seu tempo(algumas horas) e requer um bom conhecimento das línguas envolvidas; mas lembre-se que <strong>qualquer trabalho que você fizer vai beneficiar um grande número de usuários</strong>.  Se você estiver interessado em traduzir o phpMyVisites você pode encontrar toda a informação que você precisa no %s a documentação oficial do phpMyVisites %s."; // lien vers la doc
$lang['contacts_doc'] = "Não hesite consultar %s a documentação oficial do phpMyVisites %s que lhe dará muitas informações sobre instalação, configuração e a funcionalidade do phpMyVisites. Esta está disponível na sua versão do phpMyVisites."; // lien vers la doc
$lang['contacts_thanks_dev'] = "Thank you <strong>%s</strong>, co-developers of phpMyVisites, for their high quality work on the project.";
$lang['contacts_merci3'] = "Não hesite consultar a página de agradecimentos no site oficial para ter uma lista completa dos amigos do phpMyVisites.";
$lang['contacts_merci2'] = "Um grande obrigado a todos que compartilharam sua cultura contribuindo com a tradução do phpMyVisites:";

//
// Rss & Mails
//
$lang['rss_titre'] = "Site %s on %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Go to detailed statistics";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Informações dos visitantes"; 
$lang['visites_statistiques'] = "Estatísticas";
$lang['visites_periodesel'] = "Para o período selecionado";
$lang['visites_visites'] = "Visitas";
$lang['visites_uniques'] = "Visitantes únicos";
$lang['visites_pagesvues'] = "Páginas vistas";
$lang['visites_pagesvisiteurs'] = "Páginas por visitante"; 
$lang['visites_pagesvisites'] = "Pages per visit"; 
$lang['visites_pagesvisitessign'] = "Pages per significant visit"; 
$lang['visites_tempsmoyen'] = "Duração média de visita";
$lang['visites_tempsmoyenpv'] = "Tempo médio por página vista";
$lang['visites_tauxvisite'] = "Taxa de visitas de uma página"; 
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Resumo do período";
$lang['visites_nbvisites'] = "Visitas";
$lang['visites_aucunevivisite'] = "Sem visitas"; // in the table, must be short
$lang['visites_recap'] = "Resumo";
$lang['visites_unepage'] = "1 página"; // (graph)
$lang['visites_pages'] = "%s páginas"; // 1-2 pages (graph)
$lang['visites_min'] = "%s min"; // 10-15 min (graph)
$lang['visites_sec'] = "%s s"; // 0-30 s (seconds, graph)
$lang['visites_grapghrecap'] = "Gráfico do resumo das estatísticas";
$lang['visites_grapghrecaplongterm'] = "Graph to show long term statistics summary";
$lang['visites_graphtempsvisites'] = "Gráfico da duração das visitas por visitante";
$lang['visites_graphtempsvisitesimg'] = "Duração das visitas por visitante";
$lang['visites_graphheureserveur'] = "Gráfico das visitas por hora do servidor"; 
$lang['visites_graphheureserveurimg'] = "Visitas por hora do servidor"; 
$lang['visites_graphheurevisiteur'] = "Gráfico das visitas por hora do visitante";
$lang['visites_graphheurelocalimg'] = "Visitas em tempo local"; 
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
$lang['pagesvues_titre'] = "Informação de páginas vistas";
$lang['pagesvues_joursel'] = "Dia Selecionado";
$lang['pagesvues_jmoins7'] = "Dia - 7";
$lang['pagesvues_jmoins14'] = "Dia - 14";
$lang['pagesvues_moyenne'] = "(média)";
$lang['pagesvues_pagesvues'] = "Páginas vistas";
$lang['pagesvues_pagesvudiff'] = "Páginas vistas únicas";
$lang['pagesvues_recordpages'] = "Maior número de paginas do visitante";
$lang['pagesvues_tabdetails'] = "Páginas vistas (de %s à %s)"; // (de 1   21)
$lang['pagesvues_graphsnbpages'] = "Gráfico do numero de visitas por páginas vistas";
$lang['pagesvues_graphnbvisitespageimg'] = "Visitas por número de páginas vistas";
$lang['pagesvues_graphheureserveur'] = "Gráfico das visitas pelo tempo no servidor";
$lang['pagesvues_graphheureserveurimg'] = "Visitas por tempo no servidor";
$lang['pagesvues_graphheurevisiteur'] = "Gráfico das visitas por tempo local";
$lang['pagesvues_graphpageslocalimg'] = "Visitas por tempo local";
$lang['pagesvues_tempsparpage'] = "Time by page";
$lang['pagesvues_total_time'] = "Total time";
$lang['pagesvues_avg_time'] = "Average time";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Movimentação dos visitantes";
$lang['suivi_pageentree'] = "Páginas de Entrada";
$lang['suivi_pagesortie'] = "Páginas de Saída";
$lang['suivi_tauxsortie'] = "Taxa de saída";
$lang['suivi_pageentreehits'] = "Entry hits";
$lang['suivi_pagesortiehits'] = "Exit hits";
$lang['suivi_singlepage'] = "Single Pages visits";

//
// Origin
//
$lang['provenance_titre'] = "Origem dos visitantes";
$lang['provenance_recappays'] = "Resumo dos países";
$lang['provenance_pays'] = "Países";
$lang['provenance_paysimg'] = "Gráfico de visitantes por país";
$lang['provenance_fai'] = "Provedor";
$lang['provenance_nbpays'] = "Number of different countries : %s";
$lang['provenance_provider'] = "Provedor"; // same as $lang['provenance_fai'], but not if $lang['provenance_fai'] is too long
$lang['provenance_continent'] = "Continente";
$lang['provenance_mappemonde'] = "Mapa Mundi";
$lang['provenance_interetspays'] = "Countries Interests";

//
// Setup
//
$lang['configurations_titre'] = "Configurações dos Visitantes";
$lang['configurations_os'] = "Sistemas Operacionais";
$lang['configurations_osimg'] = "Gráficos mostrando o sistema operacional dos visitantes";
$lang['configurations_navigateurs'] = "Browsers";
$lang['configurations_navigateursimg'] = "Gráfico mostrando os browsers dos vistantes";
$lang['configurations_resolutions'] = "Resolução de tela";
$lang['configurations_resolutionsimg'] = "Gráfico mostrando a resolução de tela dos visitantes";
$lang['configurations_couleurs'] = "Qualidade de cor";
$lang['configurations_couleursimg'] = "Gráfico mostrando a qualidade de cor dos visitantes";
$lang['configurations_rapport'] = "Normal/widescreen";
$lang['configurations_large'] = "Widescreen";
$lang['configurations_normal'] = "Normal";
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
$lang['affluents_titre'] = "Indicações";
$lang['affluents_recapimg'] = "Gráfico de visitantes por indicação";
$lang['affluents_directimg'] = "Direta";
$lang['affluents_sitesimg'] = "Sites";
$lang['affluents_moteursimg'] = "Mecanismos";
$lang['affluents_referrersimg'] = "Indicações";
$lang['affluents_moteurs'] = "Mecanismos de Busca";
$lang['affluents_nbparmoteur'] = "Visitas vindas de mecanismos de busca: %s";
$lang['affluents_aucunmoteur'] = "Nenhuma visita veio de mecanismos de busca.";
$lang['affluents_motscles'] = "Palavras Chave";
$lang['affluents_nbmotscles'] = "Palavras-Chave distintas: %s";
$lang['affluents_aucunmotscles'] = "Nenhuma palavra-chave encontrada.";
$lang['affluents_sitesinternet'] = "Sites";
$lang['affluents_nbautressites'] = "Visitas vindas de outros sites : %s";
$lang['affluents_nbautressitesdiff'] = "Número de sites diferentes: %s";
$lang['affluents_aucunautresite'] = "Nenhuma visita vinda de outros sites.";
$lang['affluents_entreedirecte'] = "Requisição direta";
$lang['affluents_nbentreedirecte'] = "Visitas por requisição direta: %s";
$lang['affluents_nbpartenaires'] = "Visits provided by partners : %s";
$lang['affluents_aucunpartenaire'] = "No visits were provided by partners sites.";
$lang['affluents_nbnewsletters'] = "Visits provided by newsletters : %s";
$lang['affluents_aucunnewsletter'] = "No visits were provided by newsletters.";
$lang['affluents_details'] = "Detalhes"; // In the results of the referers array
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
$lang['purge_titre'] = "Resumo das visitas e indicações";
$lang['purge_intro'] = "Este período foi removido na administração, apenas as estatísticas essenciais foram mantidas.";
$lang['admin_purge'] = "Manutenção do banco de dados";
$lang['admin_purgeintro'] = "Esta seção permite que você administre as tabelas usadas pelo phpMyVisites. Você pode ver o espaço em disco usado pelas tabelas, otimizá-las ou remover registros antigos. Voce também poderá limitar o espaço das suas tabelas no banco de dados.";
$lang['admin_optimisation'] = "Otimização de [ %s ]..."; // Tables names
$lang['admin_postopt'] = "O tamanho total foi diminuído de %chiffres% %unites%"; // 28 Kb
$lang['admin_purgeres'] = "Remover os seguintes períodos: %s";
$lang['admin_purge_fini'] = "Terminou de deletar as tabelas...";
$lang['admin_bdd_nom'] = "Nome";
$lang['admin_bdd_enregistrements'] = "Registros";
$lang['admin_bdd_taille'] = "Tamanho da tabela";
$lang['admin_bdd_opt'] = "Otimizar";
$lang['admin_bdd_purge'] = "Critério de Remoção";
$lang['admin_bdd_optall'] = "Otimizar Todas";
$lang['admin_purge_j'] = "Remover registros com mais de %s dias";
$lang['admin_purge_s'] = "Remover registros com mais de %s semanas";
$lang['admin_purge_m'] = "Remover registros com mais de %s meses";
$lang['admin_purge_y'] = "Remove records older than %s years";
$lang['admin_purge_logs'] = "Remover todos os logs";
$lang['admin_purge_autres'] = "Remover comuns à tabela '%s'";
$lang['admin_purge_none'] = "Nenhuma ação possível";
$lang['admin_purge_cal'] = "Calcular e remover (isto pode levar alguns minutos)";
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
$lang['admin_intro'] = "Bemvindo à area de configuração do phpMyVisites. Você pode modificar todas as informações relacionadas à sua instalação. Se você tiver não hesite consultar consultar %s a documentação oficial do phpMyVisites %s."; // link to the doc
$lang['admin_configetperso'] = "Configurações Gerais";
$lang['admin_afficherjavascript'] = "Mostrar código JavaScript de estatísticas";
$lang['admin_cookieadmin'] = "Não contar o administrador nas estatísticas";
$lang['admin_ip_ranges'] = "Don't count IP/IP ranges in the statistics";
$lang['admin_sitesenregistres'] = "Sites registrados:";
$lang['admin_retour'] = "Voltar";
$lang['admin_cookienavigateur'] = "Você pode excluir o Administrador das estatísticas. Este método é baseado em cookies e esta opção só vai funcionar com este browser. Você pode mudar essa opção à qualquer hora.";
$lang['admin_prendreencompteadmin'] = "Contar o administrador nas estatísticas (deletar o cookie)";
$lang['admin_nepasprendreencompteadmin'] = "Não contar o administrador nas estatísticas (criar o cookie)";
$lang['admin_etatcookieoui'] = "O Administrador é contado nas estatísticas para este site (Esta é a configuração padrão, você é contado como um visitante normal)";
$lang['admin_etatcookienon'] = "Você não é contado nas estatísticas para este site (Suas visitas não serão contadas neste site)";
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
$lang['install_loginmysql'] = "Login do banco de dados";
$lang['install_mdpmysql'] = "Senha do banco de dados";
$lang['install_serveurmysql'] = "Servidor de banco de dados";
$lang['install_basemysql'] = "Nome do banco de dados";
$lang['install_prefixetable'] = "Prefixo da tabela";
$lang['install_utilisateursavances'] = "Usuários Avançados (Opcional)";
$lang['install_oui'] = "Sim";
$lang['install_non'] = "Não";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Problema: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Login do Administrador:";
$lang['install_mdpadmin'] = "Senha do Administrador:";
$lang['install_chemincomplet'] = "Caminho completo para o phpMyVisites (como http://www.mysite.com/rep1/rep3/phpmyvisites/). O caminho precisa terminar com uma <strong>/</strong>.";
$lang['install_afficherlogo'] = "Mostrar o logo em suas páginas? %s <br />By allowing the display of the logo on your site, you will help publicize phpMyVisites and help it evolve more rapidly.  It is also a way to thank the author who has spent many hours developing this Open Source, free application."; // %s replaced by the logo image
$lang['install_affichergraphique'] = "Mostrar gráficos de estatísticas";
$lang['install_valider'] = "Validar"; //  during installation and for login
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
$lang['install_txt2'] = "No final da instalação, um pedido será feito ao site oficial para nos ajudar a ter idéia do número de pessoas usando phpMyVisites. Obrigado pela compreensão.";
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
$lang['moistab']['01'] = "Janeiro";
$lang['moistab']['02'] = "Fevereiro";
$lang['moistab']['03'] = "Março";
$lang['moistab']['04'] = "Abril";
$lang['moistab']['05'] = "Maio";
$lang['moistab']['06'] = "Junho";
$lang['moistab']['07'] = "Julho";
$lang['moistab']['08'] = "Agosto";
$lang['moistab']['09'] = "Setembro";
$lang['moistab']['10'] = "Outubro";
$lang['moistab']['11'] = "Novembro";
$lang['moistab']['12'] = "Dezembro";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Jan";
$lang['moistab_graph']['02'] = "Fev";
$lang['moistab_graph']['03'] = "Mar";
$lang['moistab_graph']['04'] = "Abr";
$lang['moistab_graph']['05'] = "Mai";
$lang['moistab_graph']['06'] = "Jun";
$lang['moistab_graph']['07'] = "Jul";
$lang['moistab_graph']['08'] = "Ago";
$lang['moistab_graph']['09'] = "Set";
$lang['moistab_graph']['10'] = "Out";
$lang['moistab_graph']['11'] = "Nov";
$lang['moistab_graph']['12'] = "Dez";

// Day of the week
$lang['jsemaine']['Mon'] = "Segunda-Feira";
$lang['jsemaine']['Tue'] = "Terça-Feira";
$lang['jsemaine']['Wed'] = "Quarta-Feira";
$lang['jsemaine']['Thu'] = "Quinta-Feira";
$lang['jsemaine']['Fri'] = "Sexta-Feira";
$lang['jsemaine']['Sat'] = "Sábado";
$lang['jsemaine']['Sun'] = "Domingo";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Seg";
$lang['jsemaine_graph']['Tue'] = "Ter";
$lang['jsemaine_graph']['Wed'] = "Qua";
$lang['jsemaine_graph']['Thu'] = "Qui";
$lang['jsemaine_graph']['Fri'] = "Sex";
$lang['jsemaine_graph']['Sat'] = "Sab";
$lang['jsemaine_graph']['Sun'] = "Dom";

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
$lang['eur'] = "Europa";
$lang['afr'] = "África";
$lang['asi'] = "Asia";
$lang['ams'] = "América do Sul e Central";
$lang['amn'] = "América do Norte";
$lang['oce'] = "Oceania";

// Oceans
$lang['oc_pac'] = "Pacific Ocean"; // TODO : translate
$lang['oc_atl'] = "Atlantic Ocean"; // TODO : translate
$lang['oc_ind'] = "Indian Ocean"; // TODO : translate

// Countries
$lang['domaines'] = array(
    "xx" => "Unknown",
    "ac" => "Ascension Islands",
    "ad" => "Andorra",
    "ae" => "United Arab Emirates",
    "af" => "Afghanistan",
    "ag" => "Antigua and Barbuda",
    "ai" => "Anguilla",
    "al" => "Albania",
    "am" => "Armenia",
    "an" => "Netherlands Antilles",
    "ao" => "Angola",
    "aq" => "Antarctica",
    "ar" => "Argentina",
    "as" => "American Samoa",
    "at" => "Austria",
    "au" => "Australia",
    "aw" => "Aruba",
    "az" => "Azerbaijan",
    "ba" => "Bosnia and Herzegovina",
    "bb" => "Barbados",
    "bd" => "Bangladesh",
    "be" => "Belgium",
    "bf" => "Burkina Faso",
    "bg" => "Bulgaria",
    "bh" => "Bahrain",
    "bi" => "Burundi",
    "bj" => "Benin",
    "bm" => "Bermuda",
    "bn" => "Bruneo",
    "bo" => "Bolivia",
    "br" => "Brazil",
    "bs" => "Bahamas",
    "bt" => "Bhutan",
    "bv" => "Bouvet Island",
    "bw" => "Botswana",
    "by" => "Belarus",
    "bz" => "Belize",
    "ca" => "Canada",
    "cc" => "Cocos (Keeling) Islands",
    "cd" => "Congo, The Democratic Republic of the",
    "cf" => "Central African Republic",
    "cg" => "Congo",
    "ch" => "Switzerland",
    "ci" => "Cote D'Ivoire",
    "ck" => "Cook Islands",
    "cl" => "Chile",
    "cm" => "Cameroon",
    "cn" => "China",
    "co" => "Colombia",
    "cr" => "Costa Rica",
	"cs" => "Serbia Montenegro",
    "cu" => "Cuba",
    "cv" => "Cape Verde",
    "cx" => "Christmas Island",
    "cy" => "Cyprus",
    "cz" => "Czech Republic",
    "de" => "Germany",
    "dj" => "Djibouti",
    "dk" => "Denmark",
    "dm" => "Dominica",
    "do" => "Dominican Republic",
    "dz" => "Algeria",
    "ec" => "Ecuador",
    "ee" => "Estonia",
    "eg" => "Egypt",
    "eh" => "Western Sahara",
    "er" => "Eritrea",
    "es" => "Spain",
    "et" => "Ethiopia",
    "fi" => "Finland",
    "fj" => "Fiji",
    "fk" => "Falkland Islands (Malvinas)",
    "fm" => "Micronesia, Federated States of",
    "fo" => "Faroe Islands",
    "fr" => "France",
    "ga" => "Gabon",
    "gd" => "Grenada",
    "ge" => "Georgia",
    "gf" => "French Guyana",
    "gg" => "Guernsey",
    "gh" => "Ghana",
    "gi" => "Gibraltar",
    "gl" => "Greenland",
    "gm" => "Gambia",
    "gn" => "Guinea",
    "gp" => "Guadeloupe",
    "gq" => "Equatorial Guinea",
    "gr" => "Greece",
    "gs" => "South Georgia and the South Sandwich Islands",
    "gt" => "Guatemala",
    "gu" => "Guam",
    "gw" => "Guinea-Bissau",
    "gy" => "Guyana",
    "hk" => "Hong Kong",
    "hm" => "Heard Island and McDonald Islands",
    "hn" => "Honduras",
    "hr" => "Croatia",
    "ht" => "Haiti",
    "hu" => "Hungary",
    "id" => "Indonesia",
    "ie" => "Ireland",
    "il" => "Israel",
    "im" => "Man Island",
    "in" => "India",
    "io" => "British Indian Ocean Territory",
    "iq" => "Iraq",
    "ir" => "Iran, Islamic Republic of",
    "is" => "Iceland",
    "it" => "Italy",
    "je" => "Jersey",
    "jm" => "Jamaica",
    "jo" => "Jordan",
    "jp" => "Japan",
    "ke" => "Kenya",
    "kg" => "Kyrgyzstan",
    "kh" => "Cambodia",
    "ki" => "Kiribati",
    "km" => "Comoros",
    "kn" => "Saint Kitts and Nevis",
    "kp" => "Korea, Democratic People's Republic of",
    "kr" => "Korea, Republic of",
    "kw" => "Kuwait",
    "ky" => "Cayman Islands",
    "kz" => "Kazakhstan",
    "la" => "Laos",
    "lb" => "Lebanon",
    "lc" => "Saint Lucia",
    "li" => "Liechtenstein",
    "lk" => "Sri Lanka",
    "lr" => "Liberia",
    "ls" => "Lesotho",
    "lt" => "Lithuania",
    "lu" => "Luxembourg",
    "lv" => "Latvia",
    "ly" => "Libya",
    "ma" => "Morocco",
    "mc" => "Monaco",
    "md" => "Moldova, Republic of",
    "mg" => "Madagascar",
    "mh" => "Marshall Islands",
    "mk" => "Macedonia",
    "ml" => "Mali",
    "mm" => "Myanmar",
    "mn" => "Mongolia",
    "mo" => "Macau",
    "mp" => "Northern Mariana Islands",
    "mq" => "Martinique",
    "mr" => "Mauritania",
    "ms" => "Montserrat",
    "mt" => "Malta",
    "mu" => "Mauritius",
    "mv" => "Maldives",
    "mw" => "Malawi",
    "mx" => "Mexico",
    "my" => "Malaysia",
    "mz" => "Mozambique",
    "na" => "Namibia",
    "nc" => "New Caledonia",
    "ne" => "Niger",
    "nf" => "Norfolk Island",
    "ng" => "Nigeria",
    "ni" => "Nicaragua",
    "nl" => "Netherlands",
    "no" => "Norway",
    "np" => "Nepal",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "New Zealand",
    "om" => "Oman",
    "pa" => "Panama",
    "pe" => "Peru",
    "pf" => "French Polynesia",
    "pg" => "Papua New Guinea",
    "ph" => "Philippines",
    "pk" => "Pakistan",
    "pl" => "Poland",
    "pm" => "Saint Pierre and Miquelon",
    "pn" => "Pitcairn",
    "pr" => "Puerto Rico",
	"ps" => "Palestinian Territory",
    "pt" => "Portugal",
    "pw" => "Palau",
    "py" => "Paraguay",
    "qa" => "Qatar",
    "re" => "Reunion Island",
    "ro" => "Romania",
    "ru" => "Russian Federation",
    "rs" => "Russia",
    "rw" => "Rwanda",
    "sa" => "Saudi Arabia",
    "sb" => "Solomon Islands",
    "sc" => "Seychelles",
    "sd" => "Sudan",
    "se" => "Sweden",
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
    "st" => "Sao Tome and Principe",
    "su" => "Old U.R.S.S.",
    "sv" => "El Salvador",
    "sy" => "Syrian Arab Republic",
    "sz" => "Swaziland",
    "tc" => "Turks and Caicos Islands",
    "td" => "Chad",
    "tf" => "French Southern Territories",
    "tg" => "Togo",
    "th" => "Thailand",
    "tj" => "Tajikistan",
    "tk" => "Tokelau",
    "tm" => "Turkmenistan",
    "tn" => "Tunisia",
    "to" => "Tonga",
    "tp" => "East Timor",
    "tr" => "Turkey",
    "tt" => "Trinidad and Tobago",
    "tv" => "Tuvalu",
    "tw" => "Taiwan, Province of China",
    "tz" => "Tanzania, United Republic of",
    "ua" => "Ukraine",
    "ug" => "Uganda",
    "uk" => "United Kingdom",
    "gb" => "Great Britain",
    "um" => "United States Minor Outlying Islands",
    "us" => "United States",
    "uy" => "Uruguay",
    "uz" => "Uzbekistan",
    "va" => "Vatican City",
    "vc" => "Saint Vincent and the Grenadines",
    "ve" => "Venezuela",
    "vg" => "Virgin Islands, British",
    "vi" => "Virgin Islands, U.S.",
    "vn" => "Vietnam",
    "vu" => "Vanuatu",
    "wf" => "Wallis and Futuna",
    "ws" => "Samoa",
    "ye" => "Yemen",
    "yt" => "Mayotte",
    "yu" => "Yugoslavia",
    "za" => "South Africa",
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