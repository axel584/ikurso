<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: MenuDefinition.php 29 2006-08-18 07:35:21Z matthieu_ $

$menu = array(
	array(
		'modname' => 		'view_visits',
		'lang' => 			'menu_visites',
		'submenus' => array(
							1 => 'visites_statistiques',
							'visites_recapperiode',
							'visites_grapghrecap',
							'visites_grapghrecaplongterm',
							'visites_graphtempsvisites',
							'visites_graphheureserveur',
							'visites_graphheurevisiteur'
							),
	),
	array(
		'modname' => 		'view_frequency',
		'lang' => 			'frequence_titremenu',
		'submenus' => array(
							1 => 'visites_statistiques',
							'frequence_nouveauxconnus',
							'frequence_nouveauxconnusgraph',
							'pagesvues_vispervisgraph'
							),
	),
	
	array(
		'modname' => 		'view_pages',
		'lang' => 			'menu_pagesvues',
		'submenus' => array(
							1 => 'pagesvues_pagesvues',
							'pagesvues_tempsparpage',
							'pagesvues_graphsnbpages'
							),
	),
	
	array(
		'modname' => 		'view_followup',
		'lang' => 			'menu_suivi',
		'submenus' => array(
							1 => 'suivi_pageentree',
							'suivi_pagesortie',
							'suivi_singlepage'
							),
	),
	
	array(
		'modname' => 		'view_source',
		'lang' => 			'menu_provenance',
		'submenus' => array(
							1 => 'provenance_mappemonde',
							'provenance_recappays',
							'provenance_fai'
							),
	),
	
	array(
		'modname' => 		'view_settings',
		'lang' => 			'menu_configurations',
		'submenus' => array(
							1 => 'configurations_configurations',
							'configurations_os',
							'configurations_navigateursbytype',
							'configurations_navigateurs',
							'configurations_plugins',
							'configurations_resolutions',
							'configurations_rapport'
							),
	),
	
	array(
		'modname' => 		'view_referers',
		'lang' => 			'menu_affluents',
		'submenus' => array(
							1 => 'affluents_recapimg',
							'affluents_moteurs',
							'affluents_motscles',
							'affluents_sitesinternet',
							'affluents_partenaires',
							'affluents_newsletters',
							'affluents_entreedirecte',
							),
	),
);
?>