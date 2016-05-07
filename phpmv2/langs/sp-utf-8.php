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
$lang['auteur_nom'] = "David Vidal Serra"; // nombre del traductor
$lang['auteur_email'] = "davidvs@gmail.com"; // mail del traductor
$lang['charset'] = "utf-8"; // charset del archivo de idioma (utf-8 predefinido)
$lang['text_dir'] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$lang['lang_iso'] = "sp"; // iso language code
$lang['lang_libelle_en'] = "Spanish"; // nombre del idioma en inglés
$lang['lang_libelle_fr'] = "Espagnol"; // nombre del idioma en francés
$lang['unites_bytes'] = array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb');
$lang['separateur_milliers'] = '.'; // tres cientos mil se escribe en español 300.000
$lang['separateur_decimaux'] = ','; // entre la parte entera de un número y la parte decimal

//
// HTML Markups
//
$lang['head_titre'] = "phpMyVisites | Aplicación libre y gratuita de gestión, estadísticas y contador de audiencia de sitios web"; // Título de las  páginas de estadísticas en el header html
$lang['head_keywords'] = "phpmyvisites, php, script, aplicación, software, estadísticas, contador de audiencia, audiencia, contador web, estadísticas web, gratuito, open source, gpl, visitas, visitantes, mysql, páginas vistas, páginas, vistas, tiempo de visitas, gráficos, navegadores, os, sistemas operativos, resoluciones, día, semana, mes, récord, país, host, proveedor, buscadores, palabras claves, seguimiento, referencias, gráficos, páginas de llegadas, páginas de salidas, gráficos circulares"; // Palabras claves del header html
$lang['head_description'] = "phpMyVisites | Aplicación estadística y contador de audiencia para sitios web | Software gratuito y open source distribuido bajo licencia GPL, desarrollado en php/MySQL"; // Descripción en el header html 
$lang['logo_description'] = "phpMyVisites : Software GPL de estadísticas web"; // descripción para el código JS : ir al grano

//
// Main menu & submenu
//
$lang['menu_visites'] = "Visitas";
$lang['menu_pagesvues'] = "Págs. vistas";
$lang['menu_suivi'] = "Seguimiento";
$lang['menu_provenance'] = "Procedencia";
$lang['menu_configurations'] = "Configuración";
$lang['menu_affluents'] = "Afluencia";
$lang['menu_listesites'] = "Lista de sitios";
$lang['menu_bilansites'] = "Resumen";
$lang['menu_jour'] = "Día";
$lang['menu_semaine'] = "Semana";
$lang['menu_mois'] = "Mes";
$lang['menu_annee'] = "Año";
$lang['menu_periode'] = "Período estudiado: %s"; // Período estudiado : Lunes 11 de Noviembre
$lang['liens_siteofficiel'] = "Sitio oficial";
$lang['liens_admin'] = "Administración";
$lang['liens_contacts'] = "Contactos";

//
// Divers
//
$lang['generique_nombre'] = "Número";
$lang['generique_tauxsortie'] = "Tasa de salidas";
$lang['generique_ok'] = "OK";
$lang['generique_timefooter'] = "Página generada en %s segundos"; // tiempo en segundos
$lang['generique_divers'] = "Otros"; // (para los gráficos)
$lang['generique_inconnu'] = "Desconocido"; // (para los gráficos)
$lang['generique_vous'] = "... Usted?";
$lang['generique_traducteur'] = "Traductor";
$lang['generique_langue'] = "Idioma";
$lang['generique_autrelangure'] = "¿Otro?"; // Autre langue, appel à contribution
$lang['aucunvisiteur_titre'] = "Ningún visitante en éste período."; 
$lang['generique_aucune_visite_bdd'] = "<b>¡Atención! </b> No hay ningún visitante grabado en la base de datos para éste sitio. Por favor asegurese de haber instalado la herramienta de javascript en sus páginas con la URL phpMyVisites correcta <u>EN</u> el código Javascript. Lea la ayuda para más información.";
$lang['generique_aucune_site_bdd'] = "¡Ningún sitio grabado en la base de datos! Intente registrarse como Super Usuario de phpMyVisites para añadir un sitio nuevo.";
$lang['generique_retourhaut'] = "Arriba";
$lang['generique_tempsvisite'] = "%smin %sseg"; // 3min 25s means 3 minutes and 25 seconds
$lang['generique_tempsheure'] = "%shrs"; // 4h means 4 hours
$lang['generique_siteno'] = "Sitio %s"; // Site "phpmyvisites"
$lang['generique_newsletterno'] = "Newsletter %s"; // Newsletter "version 2 announcement"
$lang['generique_partnerno'] = "Partner %s"; // Partner "version 2 announcement"
$lang['generique_general'] = "General";
$lang['generique_user'] = "Usuario %s"; // User "Admin"
$lang['generique_previous'] = "Anterior";
$lang['generique_next'] = "Siguiente";
$lang['generique_lowpop'] = "Excluir pequeñas poblaciones de las estadísticas";
$lang['generique_allpop'] = "Incluir todas las poblaciones en las estadísticas";
$lang['generique_to'] = "a"; // 4 'to' 8
$lang['generique_total_on'] = "de"; // 4 to 8 'on' 10
$lang['generique_total'] = "TOTAL";
$lang['generique_information'] = "Información";
$lang['generique_done'] = "¡Hecho!";
$lang['generique_other'] = "Otros";
$lang['generique_description'] = "Descripción:";
$lang['generique_name'] = "Nombre:";
$lang['generique_variables'] = "Variables";
$lang['generique_logout'] = "Desconexión";
$lang['generique_login'] = "Conexión";
$lang['generique_hits'] = "Contactos";
$lang['generique_errors'] = "Errores";
$lang['generique_site'] = "Sitio";
$lang['generique_help_novisits'] = "Tip: Have you %s installed the tracker (javascript code) %s on your pages?";

//
// Authentication
//
$lang['login_password'] = "contraseña :"; // en minúsculas
$lang['login_login'] = "usuario :"; // en minúsculas
$lang['login_error'] = "Error de conexión. Usario/contraseña erróneos.";
$lang['login_error_nopermission'] = "The user specified doesn't have any permission. Please ask the Super User to set up your website view/admin permissions in phpMyVisites.";
$lang['login_protected'] = "Usted quiere entrar en un área de %sphpMyVisites%s protegida.";

//
// Contacts & "Others ?"
//
$lang['contacts_titre'] = "Contactos";
$lang['contacts_langue'] = "Traducciones";
$lang['contacts_merci'] = "Agradecimientos";
$lang['contacts_auteur'] = "El autor de la aplicación, de la documentación y creador del proyecto phpMyVisites es <strong>Matthieu Aubry</strong>.";
$lang['contacts_questions'] = "Para toda <strong>pregunta técnica, informe de bug, o sugestión</strong>, por favor <strong>utilice los foros previstos a este efecto</strong> en la página oficial %s. Para las demás demandas, por favor contacte el autor gracias al formulario de la página oficial."; // dirección del sitio
$lang['contacts_trad1'] = "¿Quisiera usted utilizar phpMyVisites en otro idioma? Puede contribuir a las traducciones de la aplicación, <strong>¡phpMyVisites le necesita!</strong>";
$lang['contacts_trad2'] = "Traducir phpMyVisites es un trabajo que requiere un poco de tiempo (algunas horas) y que necesita un perfecto dominio de ambos idiomas; pero <strong>el trabajo realizado será útil a otros numerosos usuarios</strong>, los cuales podrán utilizar plenamente phpMyVisites. Si está interesado en traducir phpMyVisites, encontrará toda la información necesaria en %s la documentación oficial de phpMyVisites %s."; // vínculo hacia la doc
$lang['contacts_doc'] = "No dude en consultar %s la documentación oficial de phpMyVisites %s, le dará mucha información sobre la instalación, configuración, funcionalidades de phpMyVisites, etc. Está disponible directamente en su versión de phpMyVisites."; // vínculo hacia la doc
$lang['contacts_thanks_dev'] = "Gracias <strong>%s</strong>, co-desarrolladores de phpMyVisites, por su gran calidad de trabajo en el proyecto.";
$lang['contacts_merci3'] = "No dude en consultar la página de agradecimientos en el sitio oficial de phpMyVisites para tener una lista más completa de los amigos de phpMyVisites.";
$lang['contacts_merci2'] = "Un gran agradecimiento también a todos los que han compartido sus conocimientos para traducir phpMyVisites :";

//
// Rss & Mails
//
$lang['rss_titre'] = "Sitio %s día %s"; // Site MyHomePage on Sunday 29 
$lang['rss_go'] = "Ir a estadísticas detalladas";
$lang['mail_sender_name'] = "Web statistics (Automatic)";

//
// Visits Part
//
$lang['visites_titre'] = "Información de los visitantes";
$lang['visites_statistiques'] = "Estadísticas";
$lang['visites_periodesel'] = "Para el período seleccionado";
$lang['visites_visites'] = "Visitas";
$lang['visites_uniques'] = "Visitantes únicos";
$lang['visites_pagesvues'] = "Páginas vistas";
$lang['visites_pagesvisiteurs'] = "Páginas vistas por visitante";
$lang['visites_pagesvisites'] = "Páginas por visita"; 
$lang['visites_pagesvisitessign'] = "Páginas por visita significante"; 
$lang['visites_tempsmoyen'] = "Tiempo medio de visita";
$lang['visites_tempsmoyenpv'] = "Tiempo medio por página vista";
$lang['visites_tauxvisite'] = "Tasa de visitas de una página";
$lang['visites_average_visits_per_day'] = "Average visits per day"; 
$lang['visites_recapperiode'] = "Resumen del período";
$lang['visites_nbvisites'] = "Visitas";
$lang['visites_aucunevivisite'] = "Sin visitas"; // en un cuadro, ir al grano 
$lang['visites_recap'] = "Resumen";
$lang['visites_unepage'] = "1 pág."; // (gráfico)
$lang['visites_pages'] = "%s págs."; // 1-2 páginas (gráfico)
$lang['visites_min'] = "%s min"; // 10-15 min (gráfico)
$lang['visites_sec'] = "%s seg"; // 0-30 s (segundos, gráfico)
$lang['visites_grapghrecap'] = "Gráfico de resumen estadístico";
$lang['visites_grapghrecaplongterm'] = "Gráfico de resumen estadístico de largo plazo";
$lang['visites_graphtempsvisites'] = "Gráfico de duración de visitas por visitante";
$lang['visites_graphtempsvisitesimg'] = "Duración de visitas por visitante";
$lang['visites_graphheureserveur'] = "Gráfico de visitas por hora del servidor";
$lang['visites_graphheureserveurimg'] = "Visitas por horas del servidor";
$lang['visites_graphheurevisiteur'] = "Gráfico de visitas por hora del visitante";
$lang['visites_graphheurelocalimg'] = "Visitas por horas locales";
$lang['visites_longterm_statd'] = "Análisis de largo plazo (Dias)";
$lang['visites_longterm_statm'] = "Análisis de largo plazo (Meses)";

//
// Sites Summary
//
$lang['summary_title'] = "Resumen del Sitio";
$lang['summary_stitle'] = "Resumen";

//
// Frequency Part
//
$lang['frequence_titre'] = "Visitantes Asiduos";
$lang['frequence_nouveauxconnusgraph'] = "Gráfico de visitantes Nuevos contra Asiduos";
$lang['frequence_nouveauxconnus'] = "Visitantes Nuevos contra Asiduos";
$lang['frequence_titremenu'] = "Freqüencia";
$lang['frequence_visitesconnues'] = "Visitas Asíduas";
$lang['frequence_nouvellesvisites'] = "Visitas Nuevas";
$lang['frequence_visiteursconnus'] = "Visitantes Asiduos";
$lang['frequence_nouveauxvisiteurs'] = "Visitantes Nuevos";
$lang['frequence_returningrate'] = "Tasa de Retorno";
$lang['pagesvues_vispervisgraph'] = "Gráfico de visitas por visitante";
$lang['frequence_vispervis'] = "Número de visitas por visitante";
$lang['frequence_vis'] = "visita";
$lang['frequence_visit'] = "1 visita"; // (graph)
$lang['frequence_visits'] = "%s visitas"; // (graph)

//
// Seen Pages
//
$lang['pagesvues_titre'] = "Información de páginas vistas";
$lang['pagesvues_joursel'] = "Día seleccionado";
$lang['pagesvues_jmoins7'] = "7 dias antes";
$lang['pagesvues_jmoins14'] = "14 dias antes";
$lang['pagesvues_moyenne'] = "(media)";
$lang['pagesvues_pagesvues'] = "Páginas vistas";
$lang['pagesvues_pagesvudiff'] = "Páginas vistas diferentes";
$lang['pagesvues_recordpages'] = "Récord de páginas vistas por 1 visitante";
$lang['pagesvues_tabdetails'] = "Tabla de detalles de páginas vistas (de %s a %s)"; // (de 1 à 21)
$lang['pagesvues_graphsnbpages'] = "Gráfico de visitas por número de páginas vistas";
$lang['pagesvues_graphnbvisitespageimg'] = "Visitas por número de páginas vistas";
$lang['pagesvues_graphheureserveur'] = "Gráfico de páginas vistas por hora del servidor";
$lang['pagesvues_graphheureserveurimg'] = "Páginas vistas por hora del servidor";
$lang['pagesvues_graphheurevisiteur'] = "Gráfico de páginas vistas por hora local";
$lang['pagesvues_graphpageslocalimg'] = "Páginas vistas por horas locales";
$lang['pagesvues_tempsparpage'] = "Tiempo por página";
$lang['pagesvues_total_time'] = "Tiempo total";
$lang['pagesvues_avg_time'] = "Tiempo medio";
$lang['pagesvues_help_pagename'] = "Did you know that you can give a friendly name to your pages?";
$lang['pagesvues_help_track_dls'] = "Did you know that you can track Downloads, and external Urls redirection?";

//
// Follows-Up
//
$lang['suivi_titre'] = "Tránsito de visitantes";
$lang['suivi_pageentree'] = "Páginas de entrada";
$lang['suivi_pagesortie'] = "Páginas de salida";
$lang['suivi_tauxsortie'] = "Tasa de salidas";
$lang['suivi_pageentreehits'] = "Contactos de entrada";
$lang['suivi_pagesortiehits'] = "Contactos de salida";
$lang['suivi_singlepage'] = "Visitas de una sola página";

//
// Origin
//
$lang['provenance_titre'] = "Países de procedencia";
$lang['provenance_recappays'] = "Resumen de países";
$lang['provenance_pays'] = "País";
$lang['provenance_paysimg'] = "Gráfico de países de los visitantes";
$lang['provenance_fai'] = "Proveedores de Internet";
$lang['provenance_nbpays'] = "Número de países distintos : %s";
$lang['provenance_provider'] = "Proveedores"; // el mismo que $lang['provenance_fai'], excepto si $lang['provenance_fai'] demasiado largo
$lang['provenance_continent'] = "Continente";
$lang['provenance_mappemonde'] = "Mapamundi";
$lang['provenance_interetspays'] = "Procedencia por país";

//
// Setup
//
$lang['configurations_titre'] = "Configuraciones de visitantes";
$lang['configurations_os'] = "Sistemas Operativos (SO)";
$lang['configurations_osimg'] = "Gráfico de SO por visitante";
$lang['configurations_navigateurs'] = "Navegadores";
$lang['configurations_navigateursimg'] = "Gráfico de navegadores por visitante";
$lang['configurations_resolutions'] = "Resolución de pantalla";
$lang['configurations_resolutionsimg'] = "Gráfico de resoluciones por visitante";
$lang['configurations_couleurs'] = "Colores";
$lang['configurations_couleursimg'] = "Gráfico de colores por visitante";
$lang['configurations_rapport'] = "Pantalla ancha/normal";
$lang['configurations_large'] = "Pantalla ancha";
$lang['configurations_normal'] = "Pantalla normal";
$lang['configurations_double'] = "Pantalla Dual";
$lang['configurations_plugins'] = "Plugins"; // TODO : translate
$lang['configurations_navigateursbytype'] = "Navegadores (por tipo)"; // TODO : translate
$lang['configurations_navigateursbytypeimg'] = "Gráficos de tipos de navegador"; // TODO : translate
$lang['configurations_os_interest'] = "Estadísticas por Sistema Operativo";
$lang['configurations_navigateurs_interest'] = "Estadísticas por Navegador";
$lang['configurations_resolutions_interest'] = "Estadísticas por Resolución de Pantalla";
$lang['configurations_couleurs_interest'] = "Estadísticas por Profundidad de Color";
$lang['configurations_configurations'] = "Configuración mas común";

//
// Referers
//
$lang['affluents_titre'] = "Afluencia";
$lang['affluents_recapimg'] = "Gráfico de resumen de afluencia";
$lang['affluents_directimg'] = "Directa";
$lang['affluents_sitesimg'] =   "Otras Webs";
$lang['affluents_moteursimg'] = "Buscadores";
$lang['affluents_referrersimg'] = "Afluencia al Sitio";
$lang['affluents_moteurs'] = "Por Buscadores";
$lang['affluents_nbparmoteur'] = "Número de visitantes llegados a través de buscadores: %s";
$lang['affluents_aucunmoteur'] = "Ningún visitante llegó a través de un buscador.";
$lang['affluents_motscles'] = "Palabras claves";
$lang['affluents_nbmotscles'] = "Número de distintas palabras clave: %s";
$lang['affluents_aucunmotscles'] = "Ninguna palabra clave ha sido encontrada.";
$lang['affluents_sitesinternet'] = "Por Sitios Web";
$lang['affluents_nbautressites'] = "Número de visitantes llegados a través de vínculos en otros sitios web: %s";
$lang['affluents_nbautressitesdiff'] = "Número de sitios diferentes: %s";
$lang['affluents_aucunautresite'] = "Ningún visitante llegó a través de otros sitios web.";
$lang['affluents_entreedirecte'] = "Entradas directas";
$lang['affluents_nbentreedirecte'] = "Número de visitantes que llegaron directamente al sitio: %s";
$lang['affluents_nbpartenaires'] = "Visitas llegadas por sitios partners : %s";
$lang['affluents_aucunpartenaire'] = "Ninguna visita llegó a traves de un sitio partner.";
$lang['affluents_nbnewsletters'] = "Visitas llegadas por newsletters : %s";
$lang['affluents_aucunnewsletter'] = "Ninguna visita llegó a traves de un newsletter.";
$lang['affluents_details'] = "Detalles"; // en el cuadro bajo los resultados de sitios referrers
$lang['affluents_interetsmoteurs'] = "Estadísticas por Buscadores";
$lang['affluents_interetsmotscles'] = "Estadísticas por Palabras Clave";
$lang['affluents_interetssitesinternet'] = "Estadísticas por sitios web";
$lang['affluents_partenairesimg'] = "Partners";
$lang['affluents_partenaires'] = "Partners";
$lang['affluents_interetspartenaires'] = "Estadísticas por Partners";
$lang['affluents_newslettersimg'] = "Newsletters";
$lang['affluents_newsletters'] = "Newsletters";
$lang['affluents_interetsnewsletters'] = "Estadísticas por Newsletters";
$lang['affluents_type'] = "Tipo de Redireccion";
$lang['affluents_interetstype'] = "Estadísticas por tipo de Acceso";

//
// Summary
//
$lang['purge_titre'] = "Resumen de visitas y afluentes";
$lang['purge_intro'] = "Este período a sido purgado en la administración: sólo las estadísticas más relevantes han sido guardadas.";
$lang['admin_purge'] = "Purga y optimización de la base de datos";
$lang['admin_purgeintro'] = "Esta sección le permite gestionar los datos de phpMyVisites. Puede ver el espacio ocupado por las tablas, optimizarlas (recomendado para tablas grandes), o purgar los datos obsoletos. Esto le permitirá reducir el tamaño de las tablas en la base de datos.";
$lang['admin_optimisation'] = "Optimización de [ %s ]..."; // nombre de las tablas
$lang['admin_postopt'] = "El tamaño total ha disminuido %chiffres% %unites%"; // Ex : 28 Kb
$lang['admin_purgeres'] = "Purga de los siguientes períodos: %s";
$lang['admin_purge_fini'] = "Final de la purga de las tablas...";
$lang['admin_bdd_nom'] = "Nombre";
$lang['admin_bdd_enregistrements'] = "Registros";
$lang['admin_bdd_taille'] = "Tamaño tabla";
$lang['admin_bdd_opt'] = "Optimizar";
$lang['admin_bdd_purge'] = "Purga de tablas";
$lang['admin_bdd_optall'] = "Optimizarlo todo";
$lang['admin_purge_j'] = "Purga de datos anteriores a %s días";
$lang['admin_purge_s'] = "Purga de datos anteriores a %s semanas";
$lang['admin_purge_m'] = "Purga de datos anteriores a %s meses";
$lang['admin_purge_y'] = "Purga de datos anteriores a %s años";
$lang['admin_purge_logs'] = "Purga de los logs (Archivar cada día terminado)";
$lang['admin_purge_autres'] = "Purga común de la tabla '%s'";
$lang['admin_purge_none'] = "Ninguna acción posible";
$lang['admin_purge_cal'] = "Calcular y purgar (esto puede tomar algunos minutos)";
$lang['admin_alias_title'] = "Alias y URL del sitio";
$lang['admin_partner_title'] = "Partners del sitio";
$lang['admin_newsletter_title'] = "Newsletters del sitio";
$lang['admin_ip_exclude_title'] = "Rangos de IP a excluir de las estadísticas";
$lang['admin_name'] = "Nombre:";
$lang['admin_error_ip'] = "El IP debe tener un formato correcto: %s";
$lang['admin_site_name'] = "Nombre del Sitio";
$lang['admin_site_url'] = "URL principal del Sitio";
$lang['admin_db_log'] = "Intente entrar como Super Usuario de phpMyVisites para cambiar la configuración de la base de datos.";
$lang['admin_error_critical'] = "Error, se necesita reparar para que phpMyVisites funcione.";
$lang['admin_warning'] = "Atención, phpMyVisites funcionará correctamente pero puede que algunas utilidades no lo hagan.";
$lang['admin_move_group'] = "Mover a grupo:";
$lang['admin_move_select'] = "Seleccionar un grupo";

//
// Setup
//
$lang['admin_intro'] = "Bienvenido a la sección de configuración de phpMyVisites. Puede configurar y modificar toda la información relativa a su instalación. Si tiene problemas al utilizar algunas utilidades, no dude en visitar %s la documentación oficial de phpMyVisites %s."; // vínculo hacia la documentación
$lang['admin_configetperso'] = "Configuración general";
$lang['admin_afficherjavascript'] = "Visualizar el código javascript a incluir en las páginas";
$lang['admin_cookieadmin'] = "No tener en cuenta al administrador en las estadísticas";
$lang['admin_ip_ranges'] = "No contar los rangos IP/IP en las estadísticas";
$lang['admin_sitesenregistres'] = "Lista de los sitios registrados:";
$lang['admin_retour'] = "Volver";
$lang['admin_cookienavigateur'] = "Tiene la posibilidad de no ser tomado en cuenta cuando visita el sitio y de no ser contado por phpMyVisites. El método utilizado se basa en cookies, y esta opción sólo funcionará con el navegador que use para configurar phpMyVisites. Por supuesto aquí podrá cambiar esta configuración cuando lo desee.";
$lang['admin_prendreencompteadmin'] = "Tomar en cuenta al administrador en las estadísticas (borrar la cookie)";
$lang['admin_nepasprendreencompteadmin'] = "No tomar en cuenta el administrador en las estadísticas (poner una cookie)";
$lang['admin_etatcookieoui'] = "Actualmente usted está tomado en cuenta en las estadísticas de este sitio (es la configuración de base, usted está considerado como visitante normal).";
$lang['admin_etatcookienon'] = "Actualmente usted no está tomado en cuenta en las estadísticas de este sitio (cuando visita este sitio, usted no está contabilizado por phpMyVisites).";
$lang['admin_deleteconfirm'] = "Por favor, confime que desea borrar %s";
$lang['admin_sitedeletemessage'] = "Por favor <u>vaya con cuidado</u>: todos los datos asociados al Sitio serán borrados <br>y no va a haber manera de recuperarlos.";
$lang['admin_confirmyes'] = "Sí, quiero borrarlo";
$lang['admin_confirmno'] = "No, no deseo borrarlo";
$lang['admin_nonewsletter'] = "¡Ningún newsletter encontrado para este sitio!";
$lang['admin_nopartner'] = "¡Ningún Partner encontrado para este sitio!";
$lang['admin_get_question'] = "¿Guardar variables GET? (variables URL)";
$lang['admin_get_a1'] = "Guardar TODAS las variables URL";
$lang['admin_get_a2'] = "NO guardar ninguna variable URL";
$lang['admin_get_a3'] = "Guardar SÓLO variables especificadas";
$lang['admin_get_a4'] = "Guarda todo EXCEPTO variables especificadas";
$lang['admin_get_list'] = "Nombres de variables (<b>;</b> lista separada) <br/>Ejemplo : %s";
$lang['admin_required'] = "%s es requerido.";
$lang['admin_title_required'] = "Requerido";
$lang['admin_write_dir'] = "Directorios escribibles";
$lang['admin_chmod_howto'] = "Estos directorios necesitan permisos de escritura para el servidor. Significa que deben tener chmod 777 , con su cliente FTP (click-derecho sobre el directorio -> Permisos (o chmod))";
$lang['admin_optional'] = "Opcional";
$lang['admin_memory_limit'] = "Límite de Memoria";
$lang['admin_allowed'] = "permitido";
$lang['admin_webserver'] = "Servidor web";
$lang['admin_server_os'] = "SO del servidor";
$lang['admin_server_time'] = "Hora del servidor";
$lang['admin_legend'] = "Leyenda:";
$lang['admin_error_url'] = "La URL debe tener un formato correcto : %s (sin barra al final)";
$lang['admin_url_n'] = "URL %s:";
$lang['admin_url_aliases'] = "Alias de las URLs";
$lang['admin_logo_question'] = "¿Mostrar el logo?";
$lang['admin_type_again'] = "(escriba de nuevo)";
$lang['admin_admin_mail'] = "email del Super Administrador";
$lang['admin_admin'] = "Super Administrador";
$lang['admin_phpmv_path'] = "Complete la ruta hasta la aplicación phpMyVisites";
$lang['admin_valid_email'] = "El email debe ser válido";
$lang['admin_valid_pass'] = "La contraseña debe ser mas compleja (6 carácteres mínimo, tiene que contener números)";
$lang['admin_match_pass'] = "Las contraseñas no coinciden";
$lang['admin_no_user_group'] = "Ningún usuario en este grupo para este sitio";
$lang['admin_recorded_nl'] = "Newsletters grabadas:";
$lang['admin_recorded_partners'] = "Partners grabados:";
$lang['admin_recorded_users'] = "Usuarios grabados:";
$lang['admin_select_site_title'] = "Por favor seleccione un sitio";
$lang['admin_select_user_title'] = "Por favor seleccione un usuario";
$lang['admin_no_user_registered'] = "¡Ningún usuario registrado!";
$lang['admin_configuration'] = "Configuración";
$lang['admin_general_conf'] = "Configuración general";
$lang['admin_group_title'] = "Gestión de grupos (permisos)";
$lang['admin_user_title'] = "Gestión de usuarios";
$lang['admin_user_add'] = "Añadir usuario";
$lang['admin_user_mod'] = "Modificar usuario";
$lang['admin_user_del'] = "Borrar usuario";
$lang['admin_server_info'] = "Información del servidor";
$lang['admin_send_mail'] = "Mandar estadísticas por email";
$lang['admin_rss_feed'] = "Estadísticas por hilo RSS";
$lang['admin_site_admin'] = "Administración del sitio";
$lang['admin_site_add'] = "Añadir sitio";
$lang['admin_site_mod'] = "Modificar sitio";
$lang['admin_site_del'] = "Borrar sitio";
$lang['admin_nl_add'] = "Añadir newsletter";
$lang['admin_nl_mod'] = "Modificar newsletter";
$lang['admin_nl_del'] = "Borrar newsletter";
$lang['admin_partner_add'] = "Añadir partner";
$lang['admin_partner_mod'] = "Modificar el nombre y la URL de un partner";
$lang['admin_partner_del'] = "Borrar partner";
$lang['admin_url_alias'] = "Gestión de alias de URLs";
$lang['admin_group_admin_n'] = "Ver estadísticas + Derechos Admin";
$lang['admin_group_admin_d'] = "Los usuarios pueden ver las estadísticas del sitio Y editar la información del sitio (nombre, añadir cookie, excluir rangos de IPs, gestionar alias/partners/newsletters de URLs, etc.)";
$lang['admin_group_view_n'] = "Ver estadísticas";
$lang['admin_group_view_d'] = "Los usuarios solo pueden ver las estadísticas. Sin derechos de administración.";
$lang['admin_group_noperm_n'] = "Sin permisos";
$lang['admin_group_noperm_d'] = "Los usuarios de este grupo no tienen permiso para ver las estadísticas o editar la información del sitio.";
$lang['admin_group_stitle'] = "Puede editar los grupos de usuarios seleccionando los usuarios que desee cambiar, y luego seleccione el grupo en el que quiera moverlos.";
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
$lang['install_loginmysql'] = "Usuario MySQL";
$lang['install_mdpmysql'] = "Contraseña MySQL";
$lang['install_serveurmysql'] = "Servidor MySQL";
$lang['install_basemysql'] = "Base de datos MySQL";
$lang['install_prefixetable'] = "Prefijo de las tablas";
$lang['install_utilisateursavances'] = "Usuarios avanzados (opcional)";
$lang['install_oui'] = "Sí";
$lang['install_non'] = "No";
$lang['install_ok'] = "OK";
$lang['install_probleme'] = "Problema: ";
$lang['install_DirectoriesWriteError'] = "<b>Problem! </b><br/>Cannot write in the folder(s) %s Please verify that you have the rights necessary to create files on the server (try to CHMOD 755 the folder with your FTP software : right click on the directory -> Permissions (or CHMOD). <br/><br/>If the CHMOD doesn't work with your FTP software, try to delete (if it exists) the directories, and create them with your FTP software.";
$lang['install_loginadmin'] = "Usuario de acceso a la administración :";
$lang['install_mdpadmin'] = "Contraseña de acceso a la administración :";
$lang['install_chemincomplet'] = "Ruta completa a phpMyVisites (en formato 'http://www.misitio.com/carp1/carp3/phpmyvisites/'). La ruta debe terminar con '<strong>/</strong>'.";
$lang['install_afficherlogo'] = "¿Mostrar el logo %s en las páginas indexadas? <strong>Mostrar el logo en su sitio web permitirá que phpMyVisites sea más conocido y así que su evolución sea más rápida: es una manera de agradecer al equipo quien lo programó</strong> que ha dado horas de trabajo para concebir una aplicación libre y gratuita de semejante nivel."; // %s imagen del logo
$lang['install_affichergraphique'] = "¿Visualizar gráficos cuando se consulten las estadísticas?";
$lang['install_valider'] = "Enviar"; // a la instalación y al login
$lang['install_popup_logo'] = "Por favor seleccione un logo"; // TODO : translate
$lang['install_logodispo'] = "Ver los logos disponibles"; // TODO : translate
$lang['install_welcome'] = "¡Bienvenido!";
$lang['install_system_requirements'] = "Requisitos de sistema";
$lang['install_database_setup'] = "Configuración de la Base de datos";
$lang['install_create_tables'] = "Creación de tablas";
$lang['install_general_setup'] = "Configuración general";
$lang['install_create_config_file'] = "Crear archivo de configuración";
$lang['install_first_website_setup'] = "Añadir el primer sitio web";
$lang['install_display_javascript_code'] = "Mostrar el código Javascript";
$lang['install_finish'] = "¡Terminado!";
$lang['install_txt2'] = "Al final de la instalación se mandará un informe al sitio oficial <strong>con el único propósito de contabilizar el número de usuarios de phpMyVisites</strong> (por supuesto, ninguna información confidencial será transmitida). Gracias por su comprensión.";
$lang['install_database_setup_txt'] = "Por favor introduzca la configuracion de su Base de datos.";
$lang['install_general_config_text'] = "phpMyVisites tendrá solamente un administrador quien tendrá acceso total para ver/modificar cualquier dato. Por favor elija un nombre de Usuario y una Contraseña para su cuenta de super administrador. Puede añadir usuarios adicionales después.";
$lang['install_config_file'] = " Información de Administrador guardada correctamente.";
$lang['install_js_code_text'] = "<p>Para contabilizar todos los visitantes en cada una de las páginas tiene que insertar el código Javascript en todas sus páginas. </p><p> No es necesario que sus páginas sean hechas con PHP, <strong>phpMyVisites funciona con todo tipo de páginas (HTML, ASP, Perl o cualquier otro lenguaje).</strong> </p><p> Aquí está el código a instertar: (cópielo y péguelo en todas sus páginas) </p>";
$lang['install_intro'] = "Bienvenido a la instalación de phpMyVisites."; 
$lang['install_intro2'] = "Este proceso se divide en %s sencillos pasos y le va a tomar unos 10 minutos.";
$lang['install_next_step'] = "Ir al siguiente paso";
$lang['install_status'] = "Estado de la instalación";
$lang['install_done'] = "Instalación completada un %s%%"; // Install 25% complete
$lang['install_site_success'] = "¡Sitio creado con éxito!";
$lang['install_site_info'] = "Por favor escriba toda la información sobre el primer sitio web.";
$lang['install_go_phpmv'] = "Ir a phpMyVisites!";
$lang['install_congratulation'] = "¡Felicidades! La instalación de su phpMyVisites se ha completado.";
$lang['install_end_text'] = "¡Asegúrese de que el código javascript está en todas las páginas y espere sus primeros visitantes!";
$lang['install_db_ok'] = "¡Conexión con éxito con la base de datos del servidor!";
$lang['install_table_exist'] = "La tabla phpMyVisites ya existia en la base de datos con anterioridad.";
$lang['install_table_choice'] = "Escoja entre reutilizar las tablas existentes o comenzar una nueva instalación para borrar los datos existentes.";
$lang['install_table_erase'] = "Borrar todas las tablas (¡vaya con cuidado!)";
$lang['install_table_reuse'] = "Reutilizar tablas existentes";
$lang['install_table_success'] = "¡Tablas creadas con éxito!";
$lang['install_send_mail'] = "¿Desea recibir un email diario con el resumen estadístico de cada sitio?";

//
// Update Step
//
$lang['update_title'] = "Actualizar phpMyVisites";
$lang['update_subtitle'] = "Se ha detectado que está actualizando phpMyVisites.";
$lang['update_versions'] = "Su versión anterior era %s y ha sido actualizada a %s.";
$lang['update_db_updated'] = "¡Su base de datos fue actualizada con éxito!";
$lang['update_continue'] = "Volver a phpMyVisites";
$lang['update_jschange'] = "¡Atención! <br /> El código javascript ha sido modificado. TIENE QUE actualizar todas sus páginas sustituyendo el viejo código javascript por el nuevo. <br /> Los cambios hechos en el código javascript son muy poco usuales, por favor perdone las molestias que dicho cambio le haya ocasionado."; // TODO : translate

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
$lang['tdate1'] = "%daylong% %daynumeric% de %monthlong% de %yearlong%";

// Monday 10
$lang['tdate2'] = "%daylong% %daynumeric%";

// Week February 10 To February 17 2004
$lang['tdate3'] = "Semana del %daynumeric% de %monthlong% al %daynumeric2% de %monthlong2% de %yearlong%";

// February 2004 Month
$lang['tdate4'] = "Mes de %monthlong% de %yearlong%";

// December 2003
$lang['tdate5'] = "%monthlong% de %yearlong%";

// 10 Febuary week
$lang['tdate6'] = "Semana del %daynumeric% de %monthlong%";

// 10-02-2003 // February 2 2003
$lang['tdate7'] = "%daynumeric%-%monthnumeric%-%yearlong%";

// Mon 10 (Only for Graphs purpose)
$lang['tdate8'] = "%dayshort% %daynumeric%";

// Week 10 Feb (Only for Graphs purpose)
$lang['tdate9'] = " Semana %daynumeric% %monthshort%";

// Dec 04 (Only for Graphs purpose)
$lang['tdate10'] = "%monthshort% %yearshort%";

// Year 2004
$lang['tdate11'] = "Año %yearlong%";

// 2004
$lang['tdate12'] = "%yearlong%";

// 31
$lang['tdate13'] = "%daynumeric%";

// Months
$lang['moistab']['01'] = "Enero";
$lang['moistab']['02'] = "Febrero";
$lang['moistab']['03'] = "Marzo";
$lang['moistab']['04'] = "Abril";
$lang['moistab']['05'] = "Mayo";
$lang['moistab']['06'] = "Junio";
$lang['moistab']['07'] = "Julio";
$lang['moistab']['08'] = "Agosto";
$lang['moistab']['09'] = "Septiembre";
$lang['moistab']['10'] = "Octubre";
$lang['moistab']['11'] = "Noviembre";
$lang['moistab']['12'] = "Diciembre";

// Months (Graph purpose, 4 chars max)
$lang['moistab_graph']['01'] = "Ene";
$lang['moistab_graph']['02'] = "Feb";
$lang['moistab_graph']['03'] = "Mar";
$lang['moistab_graph']['04'] = "Abr";
$lang['moistab_graph']['05'] = "May";
$lang['moistab_graph']['06'] = "Jun";
$lang['moistab_graph']['07'] = "Jul";
$lang['moistab_graph']['08'] = "Ago";
$lang['moistab_graph']['09'] = "Sep";
$lang['moistab_graph']['10'] = "Oct";
$lang['moistab_graph']['11'] = "Nov";
$lang['moistab_graph']['12'] = "Dic";

// Day of the week
$lang['jsemaine']['Mon'] = "Lunes";
$lang['jsemaine']['Tue'] = "Martes";
$lang['jsemaine']['Wed'] = "Miércoles";
$lang['jsemaine']['Thu'] = "Jueves";
$lang['jsemaine']['Fri'] = "Viernes";
$lang['jsemaine']['Sat'] = "Sábado";
$lang['jsemaine']['Sun'] = "Domingo";

// Day of the week (Graph purpose, 4 chars max)
$lang['jsemaine_graph']['Mon'] = "Lun";
$lang['jsemaine_graph']['Tue'] = "Mar";
$lang['jsemaine_graph']['Wed'] = "Mie";
$lang['jsemaine_graph']['Thu'] = "Jue";
$lang['jsemaine_graph']['Fri'] = "Vie";
$lang['jsemaine_graph']['Sat'] = "Sáb";
$lang['jsemaine_graph']['Sun'] = "Dom";

// First letter of each day, weekdays ordered
$lang['calendrier_jours'][0] = "L";
$lang['calendrier_jours'][1] = "M";
$lang['calendrier_jours'][2] = "M";
$lang['calendrier_jours'][3] = "J";
$lang['calendrier_jours'][4] = "V";
$lang['calendrier_jours'][5] = "S";
$lang['calendrier_jours'][6] = "D";

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
$lang['ams'] = "América Central/Sur";
$lang['amn'] = "América del Norte";
$lang['oce'] = "Oceanía";

// Oceans
$lang['oc_pac'] = "Océano Pacífico"; // TODO : translate
$lang['oc_atl'] = "Océano Atlántico"; // TODO : translate
$lang['oc_ind'] = "Océano Índico"; // TODO : translate

// Countries
$lang['domaines'] = array(
    "xx" => "Desconocido",
    "ac" => "Isla La Ascensión",
    "ad" => "Andorra",
    "ae" => "Emiratos Árabes Unidos",
    "af" => "Afganistán",
    "ag" => "Antigua y Barbuda",
    "ai" => "Anguilla",
    "al" => "Albania",
    "am" => "Armenia",
    "an" => "Antillas Neerlandeses",
    "ao" => "Angola",
    "aq" => "Antártica",
    "ar" => "Argentina",
    "as" => "American Samoa",
    "at" => "Austria",
    "au" => "Australia",
    "aw" => "Aruba",
    "az" => "Azerbaiján",
    "ba" => "Bosnia Herzegovina",
    "bb" => "Barbada",
    "bd" => "Bangladesh",
    "be" => "Bélgica",
    "bf" => "Burkina Faso",
    "bg" => "Bulgaria",
    "bh" => "Bahrain",
    "bi" => "Burundi",
    "bj" => "Benin",
    "bm" => "Bermudas",
    "bn" => "Brunei Darussalam",
    "bo" => "Bolivia",
    "br" => "Brasil",
    "bs" => "Bahamas",
    "bt" => "Bhután",
    "bv" => "Isla Bouvet",
    "bw" => "Botswana",
    "by" => "Bielorrusia",
    "bz" => "Belice",
    "ca" => "Canadá",
    "cc" => "Islas Cocos (Keeling)",
    "cd" => "Rep. dem. del Congo",
    "cf" => "Rep. Centroafricana",
    "cg" => "Congo",
    "ch" => "Suiza",
    "ci" => "Costa de Marfil",
    "ck" => "Islas Cook",
    "cl" => "Chili",
    "cm" => "Camerún",
    "cn" => "China",
    "co" => "Colombia",
    "cr" => "Costa Rica",
	"cs" => "Serbia Montenegro",
    "cu" => "Cuba",
    "cv" => "Cabo Verde",
    "cx" => "Isla Christmas",
    "cy" => "Chipre",
    "cz" => "Chequia",
    "de" => "Alemania",
    "dj" => "Yibuti",
    "dk" => "Dinamarca",
    "dm" => "Dominica",
    "do" => "Rep. Dominicana",
    "dz" => "Argelia",
    "ec" => "Ecuador",
    "ee" => "Estonia",
    "eg" => "Egipto",
    "eh" => "Sahara Occidental",
    "er" => "Eritrea",
    "es" => "España",
    "et" => "Etiopia",
    "fi" => "Finlandia",
    "fj" => "Fiji",
    "fk" => "Islas Falkland (Malvinas)",
    "fm" => "Micronesia",
    "fo" => "Islas Feroe",
    "fr" => "Francia",
    "ga" => "Gabón",
    "gd" => "Grenada",
    "ge" => "Georgia",
    "gf" => "Guyana Francesa",
    "gg" => "Guernesey",
    "gh" => "Ghana",
    "gi" => "Gibraltar",
    "gl" => "Groenlandia",
    "gm" => "Gambia",
    "gn" => "Guinea",
    "gp" => "Guadalupe",
    "gq" => "Guinea Ecuatorial",
    "gr" => "Grecia",
    "gs" => "Georgia del Sur",
    "gt" => "Guatemala",
    "gu" => "Guam",
    "gw" => "Guinea-Bissau",
    "gy" => "Guyana",
    "hk" => "Hong Kong",
    "hm" => "Islas Heard y McDonald",
    "hn" => "Honduras",
    "hr" => "Croacia",
    "ht" => "Haití",
    "hu" => "Hungría",
    "id" => "Indonesia",
    "ie" => "Irlanda",
    "il" => "Israel",
    "im" => "Isla de Man",
    "in" => "India",
    "io" => "Ter. Brit. Océano Índico",
    "iq" => "Irak",
    "ir" => "Irán",
    "is" => "Islandia",
    "it" => "Italia",
    "je" => "Yérsey",
    "jm" => "Jamaica",
    "jo" => "Jordania",
    "jp" => "Japón",
    "ke" => "Kenya",
    "kg" => "Kirgizstán",
    "kh" => "Camboya",
    "ki" => "Kiribati",
    "km" => "Comores",
    "kn" => "Santo Kitts y Nevis",
    "kp" => "Corea del Norte",
    "kr" => "Corea del Sur",
    "kw" => "Kuwait",
    "ky" => "Islas Caimán",
    "kz" => "Kazajstán",
    "la" => "Laos",
    "lb" => "Líbano",
    "lc" => "Santa Lucia",
    "li" => "Liechtenstein",
    "lk" => "Sri Lanka",
    "lr" => "Liberia",
    "ls" => "Lesotho",
    "lt" => "Lituania",
    "lu" => "Luxemburgo",
    "lv" => "Letonia",
    "ly" => "Libyan Arab Jamahiriya",
    "ma" => "Marruecos",
    "mc" => "Mónaco",
    "md" => "Moldavia",
    "mg" => "Madagascar",
    "mh" => "Islas Marshall",
    "mk" => "Macedonia",
    "ml" => "Malí",
    "mm" => "Myanmar",
    "mn" => "Mongolia",
    "mo" => "Macao",
    "mp" => "Islas Marianas del Norte",
    "mq" => "Martinica",
    "mr" => "Mauritania",
    "ms" => "Montserrat",
    "mt" => "Malta",
    "mu" => "Isla Mauricio",
    "mv" => "Maldivas",
    "mw" => "Malawi",
    "mx" => "México",
    "my" => "Malasia",
    "mz" => "Mozambique",
    "na" => "Namibia",
    "nc" => "Nueva Caledonia",
    "ne" => "Níger",
    "nf" => "Isla Norfolk",
    "ng" => "Nigeria",
    "ni" => "Nicaragua",
    "nl" => "Países Bajos",
    "no" => "Noruega",
    "np" => "Nepal",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "Nueva Zelanda",
    "om" => "Omán",
    "pa" => "Panamá",
    "pe" => "Perú",
    "pf" => "Polinesia Francesa",
    "pg" => "Papúa Nueva Guinea",
    "ph" => "Filipinas",
    "pk" => "Pakistán",
    "pl" => "Polonia",
    "pm" => "Sto. Pierre y Miquelon",
    "pn" => "Isla Pitcairn",
    "pr" => "Puerto Rico",
	"ps" => "Palestinian Territory",
    "pt" => "Portugal",
    "pw" => "Palau",
    "py" => "Paraguay",
    "qa" => "Qatar",
    "re" => "Isla de la Reunión",
    "ro" => "Rumania",
    "ru" => "Rusia",
    "rs" => "Rusia",
    "rw" => "Rwanda",
    "sa" => "Arabia Saudí",
    "sb" => "Islas Salomón",
    "sc" => "Seychelles",
    "sd" => "Sudán",
    "se" => "Suecia",
    "sg" => "Singapur",
    "sh" => "Sta. Helena",
    "si" => "Eslovenia",
    "sj" => "Islas Svalbard/Jan Mayen",
    "sk" => "Eslovaquia",
    "sl" => "Sierra Leona",
    "sm" => "San Marino",
    "sn" => "Senegal",
    "so" => "Somalia",
    "sr" => "Surinam",
    "st" => "Sao Tome y Príncipe",
    "su" => "Ex URSS",
    "sv" => "Salvador",
    "sy" => "Siria",
    "sz" => "Swazilandia",
    "tc" => "Islas Turks y Caiques",
    "td" => "Chad",
    "tf" => "Territorios Fr. del Sur",
    "tg" => "Togo",
    "th" => "Tailandia",
    "tj" => "Tayikistán",
    "tk" => "Tokelau",
    "tm" => "Turkmenistán",
    "tn" => "Túnez",
    "to" => "Tonga",
    "tp" => "Timor Oriental",
    "tr" => "Turquía",
    "tt" => "Trinidad y Tobago",
    "tv" => "Tuvalu",
    "tw" => "Taiwán",
    "tz" => "Tanzania",
    "ua" => "Ucrania",
    "ug" => "Uganda",
    "uk" => "Reino Unido",
    "gb" => "Gran Bretaña",
    "um" => "Islas Menores Periféricas de los EEUU",
    "us" => "Estados Unidos",
    "uy" => "Uruguay",
    "uz" => "Uzbekistán",
    "va" => "Vaticano",
    "vc" => "Sto. Vicente Granadinas",
    "ve" => "Venezuela",
    "vg" => "Islas Vírgenes Brit.",
    "vi" => "Islas Vírgenes EEUU",
    "vn" => "Vietnam",
    "vu" => "Vanuatu",
    "wf" => "Islas Wallis y Futuna",
    "ws" => "Estado Independiente de Samoa",
    "ye" => "Yemen",
    "yt" => "Mayote",
    "yu" => "Yugoslavia",
    "za" => "Sudáfrica",
    "zm" => "Zambia",
    "zr" => "Zaire",
    "zw" => "Rep. de Zimbabwe",
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
    "ws" => "Estado Independiente de Samoa",
);
?>