<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: SitePdfDb.class.php 29 2006-08-18 07:35:21Z matthieu_ $

require_once INCLUDE_PATH."/core/include/PdfConfig.class.php";
require_once INCLUDE_PATH."/core/include/Cookie.class.php";

define("PDF_FIELD_NAME", "lstPdf");
define("PDF_COOKIE_NAME", "pmv_pdf_");

class PdfConfigDb {
	var $siteId;
	var $lstPdf;
	var $cookie;

	function PdfConfigDb($idSite) {
		$this->siteId = $idSite;
		$this->cookie = new Cookie(PDF_COOKIE_NAME.$idSite);
		//$this->cookie->delete();
		
		//$this->cookie->setExpire(2 * 3600);
		//		print("cookie ok : ".($this->cookie->getContent())[0]."<br>");
		//print ("cookie ok : ".$this->cookie->getContent()."<br>");
		if (count($this->cookie->getContent()) > 0) {
			$this->lstPdf = array ();
			$data = $this->cookie->getVar(PDF_FIELD_NAME);
			//print("data : $data<br>");
			$i = 1;
			$data = split("@@", $data);
			$listParam = split("#", $data[1]);
			$tabParam = array();
			
			foreach ($listParam as $key => $info) {
				$elem1 = substr($info, 0, 3);
				$elem2 = substr($info, 3, 1);
				if (($elem2 == "1") || ($elem2 == "3")) {
					$tmpInt = "true";
				}
				else {
					$tmpInt = "false";
				}
				if (($elem2 == "2") || ($elem2 == "3")) {
					$tmpAll = "true";
				}
				else {
					$tmpAll = "false";
				}
				$tabParam[$elem1] = array($tmpInt, $tmpAll);
				//print("elem1 : $elem1 - $elem2 - $elem3<br>");
			}
			$this->lstPdf[$i] = new PdfConfig($data[0], $tabParam);
			$i ++;
		}
		else {
			$this->lstPdf = array ();
		}
		
	}
	function addPdf($namePdf, $paramPdf) {
		$idPdf = count($this->lstPdf);
		$this->lstPdf[$idPdf] = new PdfConfig($namePdf, $paramPdf);
	}
	function updatePdf($idPdf, $namePdf, $paramPdf) {
		$this->lstPdf[$idPdf]->pdfName = $namePdf;
		$this->lstPdf[$idPdf]->pdfParam = $paramPdf;
	}
	function deletePdf($idPdf) {
		if (isset ($this->lstPdf[$idPdf])) {
			unset ($this->lstPdf[$idPdf]);
			$this->lstPdf = array_values($this->lstPdf);
		}
	}
	function getPdf($idPdf) {
		if (! isset ($this->lstPdf[$idPdf])) {
			$this->lstPdf[$idPdf] = new PdfConfig("Default PDF", $this->getDefaultPdf());
		}
		$ret = $this->lstPdf[$idPdf];
		return $ret;
	}

	function savePdf() {
		if (count($this->lstPdf) > 0) {
			// convert site to array
			$tmpPdf = "";
			foreach ($this->lstPdf as $key => $info) {
				$tmpPdf .= $info->pdfName . "@@";
				foreach ($info->pdfParam as $key => $info) {
					$tmpPdf .= $key;
					$tmpIntAll = 0;
					//$tmpPdf .= "#";
					if ($info[0] == "true") {
						$tmpIntAll +=  1;
					}
					//$tmpPdf .= "#";
					if ($info[1] == "true") {
						$tmpIntAll +=  2;
					}
					$tmpPdf .= $tmpIntAll . "#";
				}
				//print("(save) name: ".$tmpPdf[0].", param : ".$tmpPdf[1]."<br>");
				$tmpPdf .= "##";
			}

			//print ("cookie $tmpPdf : ".strlen($tmpPdf)."<br>");
			$this->cookie->setVar(PDF_FIELD_NAME, $tmpPdf);
			//print ("cookie save");
			$this->cookie->save();
			//print ("cookie is saved");
		} else {
			//print ("cookie is deleted");
			$this->cookie->delete();
		}
	}
	function getListPdf() {
		return $this->lstPdf;
	}
	
	
	function getChoixPdf() {
		return $this->listChapter;
	}
	
	function getDefaultPdf() {
		return $this->defaultSelectChapter;
	}

// TIT : Chapter title
// FCT : Function name
// INT : Has interest bloc
// ALL : Can show all data

var $listChapter = array (
		"PG0" => array (
			"TIT" => "summary_title",
			"PAG" => "true"),
		"PG1" => array (
			"TIT" => "visites_titre",
			"PAG" => "true"),
		"VS1" => array (
			"TIT"  => "visites_statistiques",
			"FCT" => "setVisitsStatistics",
			"INT"  => "false",
			"ALL"  => "false"),
		"VS2" => array (
			"TIT"  => "visites_recapperiode",
			"FCT" => "setVisitsPeriodSummaries",
			"INT"  => "false",
			"ALL"  => "false"),
		"VS3" => array (
			"TIT"  => "visites_grapghrecap",
			"FCT" => "setVisitsPeriodSummariesGraph",
			"INT"  => "false",
			"ALL"  => "false"),
		"VS4" => array (
			"TIT"  => "visites_grapghrecaplongterm",
			"FCT" => "setVisitsAllPeriodSummaryGraph",
			"INT"  => "false",
			"ALL"  => "false"),
		"VS5" => array (
			"TIT"  => "visites_graphtempsvisites",
			"FCT" => "setVisitsTimeVisitsGraph",
			"INT"  => "false",
			"ALL"  => "false"),
		"VS6" => array (
			"TIT"  => "visites_graphheureserveur",
			"FCT" => "setVisitsServerTimeGraph",
			"INT"  => "false",
			"ALL"  => "false"),
		"VS7" => array (
			"TIT"  => "visites_graphheurevisiteur",
			"FCT" => "setVisitsLocalTimeGraph",
			"INT"  => "false",
			"ALL"  => "false"),
		"PG2" => array (
			"TIT" => "frequence_titre",
			"PAG" => "true"),
		"FQ1" => array (
			"TIT"  => "visites_statistiques",
			"FCT" => "setFrequencyStatistics",
			"INT"  => "false",
			"ALL"  => "false"),
		"FQ2" => array (
			"TIT"  => "frequence_nouveauxconnus",
			"FCT" => "setFrequencyNewReturnVisits",
			"INT"  => "false",
			"ALL"  => "false"),
		"FQ3" => array (
			"TIT"  => "frequence_nouveauxconnusgraph",
			"FCT" => "setFrequencyGraphNewReturnVisits",
			"INT"  => "false",
			"ALL"  => "false"),
		"FQ4" => array (
			"TIT"  => "pagesvues_vispervisgraph",
			"FCT" => "setFrequencyGraphNbVisitsPerVisitor",
			"INT"  => "false",
			"ALL"  => "false"),
		"PG3" => array (
			"TIT" => "pagesvues_titre",
			"PAG" => "true"),
		"PZ1" => array (
			"TIT"  => "pagesvues_titre",
			"FCT" => "setPagesZoomTab1",
			"INT"  => "false",
			"ALL"  => "false"),
		"PZ2" => array (
			"TIT"  => "pagesvues_pagesvues",
			"FCT" => "setPagesZoomTab2",
			"INT"  => "false",
			"ALL"  => "true"),
		"PZ3" => array (
			"TIT"  => "pagesvues_tempsparpage",
			"FCT" => "setPagesZoomTpsParPage",
			"INT"  => "false",
			"ALL"  => "true"),
		"PZ4" => array (
			"TIT"  => "pagesvues_graphsnbpages",
			"FCT" => "setPagesByVisitGraph",
			"INT"  => "false",
			"ALL"  => "false"),
		"PG4" => array (
			"TIT" => "suivi_titre",
			"PAG" => "true"),
		"FW1" => array (
			"TIT"  => "suivi_pageentree",
			"FCT" => "setFollowUpEntryPages",
			"INT"  => "false",
			"ALL"  => "true"),
		"FW2" => array (
			"TIT"  => "suivi_pagesortie",
			"FCT" => "setFollowUpExitPages",
			"INT"  => "false",
			"ALL"  => "true"),
		"FW3" => array (
			"TIT"  => "suivi_singlepage",
			"FCT" => "setFollowUpSinglePages",
			"INT"  => "false",
			"ALL"  => "true"),
		"PG5" => array (
			"TIT" => "provenance_titre",
			"PAG" => "true"),
		"SR1" => array (
			"TIT" => "provenance_mappemonde",
			"FCT" => "setWorldMap",
			"INT" => "false",
			"ALL" => "false",
			"PAR1" => "cont"),
		"SR2" => array (
			"TIT" => "provenance_recappays",
			"FCT" => "setSourceCountry",
			"INT" => "false",
			"ALL" => "true"),
		"SR3" => array (
			"TIT" => "provenance_fai",
			"FCT" => "setSourceProviders",
			"INT" => "false",
			"ALL" => "true"),
		"PG6" => array (
			"TIT" => "configurations_titre",
			"PAG" => "true"),
		"ST1" => array (
			"TIT" => "configurations_configurations",
			"FCT" => "setSettingsConfig",
			"INT" => "false",
			"ALL" => "true"),
		"ST2" => array (
			"TIT" => "configurations_os",
			"FCT" => "setSettingsOs",
			"INT" => "false",
			"ALL" => "true"),
		"ST3" => array (
			"TIT" => "configurations_navigateursbytype",
			"FCT" => "setSettingsBrowsersType",
			"INT" => "false",
			"ALL" => "false"),
		"ST4" => array (
			"TIT" => "configurations_navigateurs",
			"FCT" => "setSettingsBrowsersInterest",
			"INT" => "false",
			"ALL" => "true"),
		"ST5" => array (
			"TIT" => "configurations_plugins",
			"FCT" => "setSettingsPlugins",
			"INT" => "false",
			"ALL" => "false"),
		"ST6" => array (
			"TIT" => "configurations_resolutions",
			"FCT" => "setSettingsResolutionsInterest",
			"INT" => "false",
			"ALL" => "true"),
		"ST7" => array (
			"TIT" => "configurations_rapport",
			"FCT" => "setSettingsNormalWidescreen",
			"INT" => "false",
			"ALL" => "false"),
		"PG7" => array (
			"TIT" => "affluents_titre",
			"PAG" => "true"),
		"RF1" => array (
			"TIT" => "affluents_recapimg",
			"FCT" => "setReferersTypeInterest",
			"INT" => "false",
			"ALL" => "false"),
		"RF2" => array (
			"TIT" => "affluents_moteurs",
			"FCT" => "setReferersSearchEnginesInterest",
			"INT" => "false",
			"ALL" => "true"),
		"RF3" => array (
			"TIT" => "affluents_motscles",
			"FCT" => "setReferersKeywordsInterest",
			"INT" => "false",
			"ALL" => "true"),
		"RF4" => array (
			"TIT" => "affluents_sitesinternet",
			"FCT" => "setReferersSitesInterest",
			"INT" => "false",
			"ALL" => "true"),
		"RF5" => array (
			"TIT" => "affluents_partenaires",
			"FCT" => "setReferersPartnersInterest",
			"INT" => "false",
			"ALL" => "true"),
		"RF6" => array (
			"TIT" => "affluents_newsletters",
			"FCT" => "setReferersNewslettersInterest",
			"INT" => "false",
			"ALL" => "true"),
		"RF7" => array (
			"TIT" => "affluents_entreedirecte",
			"FCT" => "setReferersDirect",
			"INT" => "false",
			"ALL" => "false"),
		"PG8" => array (
			"TIT" => "pdf_free_page",
			"PAG" => "true",
			"PAR1" => "txt"),
		"SP1" => array (
			"TIT" => "pdf_free_chapter",
			"FCT" => "setPersonalChapter",
			"INT" => "false",
			"ALL" => "false",
			"PAR1" => "txt"),
		"SP2" => array (
			"TIT" => "pdf_page_break",
			"FCT" => "setPageBreak",
			"INT" => "false",
			"ALL" => "false"),
		);

var $defaultSelectChapter = array (
		"PG0" => array ("false","false"),
		"PG1" => array ("false","false"),
		"VS1" => array ("false","false"),
		"VS2" => array ("false","false"),
		"VS3" => array ("false","false"),
		"VS4" => array ("false","false"),
		"VS5" => array ("false","false"),
		"VS6" => array ("false","false"),
		"VS7" => array ("false","false"),
		"PG2" => array ("false","false"),
		"FQ1" => array ("false","false"),
		"FQ2" => array ("false","false"),
		"FQ3" => array ("false","false"),
		"FQ4" => array ("false","false"),
		"PG3" => array ("false","false"),
		"PZ1" => array ("false","false"),
		"PZ2" => array ("false","false"),
		"PZ3" => array ("false","false"),
		"PZ4" => array ("false","false"),
		"PG4" => array ("false","false"),
		"FW1" => array ("false","false"),
		"FW2" => array ("false","false"),
		"FW3" => array ("false","false"),
		"PG5" => array ("false","false"),
		"SR1" => array ("false","false"),
		"SR2" => array ("false","false"),
		"SR3" => array ("false","false"),
		"PG6" => array ("false","false"),
		"ST1" => array ("false","false"),
		"ST2" => array ("false","false"),
		"ST3" => array ("false","false"),
		"ST4" => array ("false","false"),
		"ST5" => array ("false","false"),
		"ST6" => array ("false","false"),
		"ST7" => array ("false","false"),
		"PG7" => array ("false","false"),
		"RF1" => array ("false","false"),
		"RF2" => array ("false","false"),
		"RF3" => array ("false","false"),
		"RF4" => array ("false","false"),
		"RF5" => array ("false","false"),
		"RF6" => array ("false","false"),
		"RF7" => array ("false","false")
		);	

		
}
?>
