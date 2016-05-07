<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewPdf.class.php 107 2006-10-02 09:40:54Z matthieu_ $
//define ("INCLUDE_PATH", "../..");
require_once INCLUDE_PATH."/core/include/ViewModule.class.php";
require_once INCLUDE_PATH."/core/include/myFpdf.php";

define("PDF_COEF_MM_PX", 72 / 25.4);
define("PDF_CHAPTER_LN_SPACE", 8);

define("PDF_DEFAULT_ROW_HEIGHT", 6);

define("PDF_DEFAULT_STYLE", "setStyleLinePage");
define("PDF_DEFAULT_MAX_Y", 270);

class TabCell {
	var $text = "";
	var $border = "";
	var $ln = 0;
	var $align = "C";
	var $fill = "";
	var $styleFct = PDF_DEFAULT_STYLE;
	var $url = "";
	
	
	function TabCell($p_text = "", $p_border = "", $p_ln = 0, $p_align = "C", $p_fill = "", $p_styleFct = PDF_DEFAULT_STYLE, $p_url = "") {
		$this->text = $p_text;
		$this->border = $p_border;
		$this->ln = $p_ln;
		$this->align = $p_align;
		$this->fill = $p_fill;
		$this->styleFct = $p_styleFct;
		$this->url = $p_url;
	}
}

class GenerePDF extends myFPDF {
	// Current col
	var $col = 0;
	//Ordonnee du debut des colonnes
	var $y0;
	// Current module
	var $currentModule;
	// Current site for heder of pdf
	var $currentSite;

	var $request;

	var $titrePage1;

	var $direction;

	var $phpmvFont = "Arial";

	var $period;
	var $literalDate;

	// Header of each page
	function Header() {
		// 	//En-tete
		//		$LeTitre = $this->pmvTranslate("visites_titre") . " - " . $this->currentSite->getName();
		if ($this->currentSite != null) {
			if ($this->direction == "rtl") {
				$LeTitre = $this->pmvTranslate($this->titrePage1." - ".$this->currentSite->getName());
			}
			else {
				$LeTitre = $this->currentSite->getName()." - ".$this->pmvTranslate($this->titrePage1);
			}
		}
		else {
			$LeTitre = $this->pmvTranslate($this->titrePage1);
		}

		//$this->Image(INCLUDE_PATH."/themes/default/images/phpmv.png", 10, 5, 50);

		$this->SetTextColor(0, 0, 139);
		$this->SetFillColor(255, 255, 255);
		$this->SetFont($this->phpmvFont, "B", 11);

		$w = $this->GetStringWidth($LeTitre) + 6;
		if ($w < $this->GetStringWidth($this->literalDate)) {
			$w = $this->GetStringWidth($this->literalDate);
		}

		$this->SetX((210 - $w) / 2);
		$this->SetDrawColor(0, 0, 139);
		$this->SetFillColor(255, 255, 255);

		$this->SetLineWidth(0.2);
		$this->Cell($w, 8, $LeTitre, "LTR", 0, "C", 0);
		$this->Ln();
		$this->SetFont($this->phpmvFont, "", 8);
		$this->SetX((210 - $w) / 2);
		$this->Cell($w, 6, $this->literalDate, "LBR", 1, "C", 0);
		$this->Ln(2);

		$txtBeta = "PDF generation is a Beta feature of phpMyVisites! It is not complete yet. Please submit your suggestions / bugs report to the forums";
		$this->SetTextColor(255, 0, 0);
		$this->SetFont($this->phpmvFont, "U", 8);
		$w = $this->GetStringWidth($txtBeta) + 6;
		$this->SetX((210 - $w) / 2);
		$this->Cell($w, 2, $txtBeta, 0, 0, "C", 0, "http://www.phpmyvisites.us/forums/index.php/m/13258/");
		$this->Ln(5);
		//Sauvegarde de l"ordonn�e
		$this->y0 = $this->GetY();

	}

	// Footer of each page
	function Footer() {
		//Pied de page
		$this->SetY(-15);
		$this->SetFont($this->phpmvFont, "I", 8);
		$this->SetTextColor(128);
		$this->Cell(40, 10, "Powered by phpMyVisites", 0, 0, "C", 0, "http://www.phpmyvisites.us/");
		$w = $this->GetStringWidth("Page ".$this->PageNo()) + 6;
		$this->SetX((210 - $w) / 2);
		$this->Cell($w, 10, "Page ".$this->PageNo(), 0, 0, "C");
	}
	
	// Rewrtie Cell for utf8
	function Cell($w, $h = 0, $txt = "", $border = 0, $ln = 0, $align = "", $fill = 0, $link = "") {
		FPDF :: Cell($w, $h, utf8_decode($txt), $border, $ln, $align, $fill, $link);
//		FPDF :: Cell($w, $h, $txt, $border, $ln, $align, $fill, $link);
//		UFPDF :: Cell($w, $h, $txt, $border, $ln, $align, $fill, $link);
	}


	function setStyleTitleTab() {
		$this->SetTextColor(255, 255, 255);
		$this->SetFillColor(96, 115, 165);
		$this->SetFont($this->phpmvFont, "B", 8);
	}

	function setStyleLinePage() {
		$this->SetTextColor(0, 0, 139);
		$this->SetFillColor(255, 255, 255);
		$this->SetFont($this->phpmvFont, "", 8);
	}
	function setStyleLinePageSmall() {
		$this->SetTextColor(0, 0, 139);
		$this->SetFillColor(255, 255, 255);
		$this->SetFont($this->phpmvFont, "", 6);
	}

	function setStyleLineCategory() {
		$this->SetTextColor(0, 0, 139);
		$this->SetFillColor(255, 255, 255);
		$this->SetFont($this->phpmvFont, "B", 8);
	}
	function setTitleChapter($keyChapter, $YJump = 40) {
		$this->SetTextColor(0, 0, 139);
		$this->SetFillColor(255, 255, 255);
		$this->SetFont($this->phpmvFont, "B", 9);
		if ($this->GetY() > (PDF_DEFAULT_MAX_Y - $YJump)) {
			$this->AddPage();
		}
		//		$this->Cell(80, PDF_DEFAULT_ROW_HEIGHT, $this->pmvTranslate($keyChapter), "0", "", "");
		if ($this->direction == "rtl") {
			$this->Cell(190, PDF_DEFAULT_ROW_HEIGHT, $this->pmvTranslate($keyChapter), "0", 0, "R");
		}
		else {
			$this->Cell(190, PDF_DEFAULT_ROW_HEIGHT, $this->pmvTranslate($keyChapter), "0", 0, "L");
//			$this->Write(PDF_DEFAULT_ROW_HEIGHT, $this->pmvTranslate($keyChapter));
		}
		$this->Ln(PDF_CHAPTER_LN_SPACE);
	}
	
	function setLineInfoText ($keyText, $nb = null, $YJump = 10) {
		$this->setStyleLinePage();
		if ($this->GetY() > (PDF_DEFAULT_MAX_Y - $YJump)) {
			$this->AddPage();
		}

		if (isset($nb)) {
			// Clean nb to pdf : <strong> 87 </strong> <small>(33%)</small>
			$src = array("<strong>", "</strong>", "<small>", "</small>");
			$dst = array("", "", "", "");
			$tmpNb = str_replace($src, $dst, $nb);
			
			$txtWrite = sprintf($this->pmvTranslate($keyText), $tmpNb);
			//$this->Write(PDF_DEFAULT_ROW_HEIGHT, sprintf($this->pmvTranslate($keyText), $tmpNb));
		}
		else {
			$txtWrite = $this->pmvTranslate($keyText);
			//$this->Write(PDF_DEFAULT_ROW_HEIGHT, $this->pmvTranslate($keyText));
		}
		if ($this->direction == "rtl") {
			//Cell($w, $h = 0, $txt = "", $border = 0, $ln = 0, $align = "", $fill = 0, $link = "")
			$this->Cell(190, PDF_DEFAULT_ROW_HEIGHT, $txtWrite, "0", 0, "R");
		}
		else {
			$this->Cell(190, PDF_DEFAULT_ROW_HEIGHT, $txtWrite, "0", 0, "L");
//			$this->Write(PDF_DEFAULT_ROW_HEIGHT, $this->pmvTranslate($keyChapter));
		}
		
		//		$this->Cell(80, PDF_DEFAULT_ROW_HEIGHT, $this->pmvTranslate($keyChapter), "0", "", "");
		$this->Ln();
	}
	function setStyleTitlePage() {
		$this->SetTextColor(0, 0, 139);
		$this->SetFillColor(255, 255, 255);
		$this->SetFont($this->phpmvFont, "B", 11);
	}
	function setStyleSummaryLink() {
		$this->SetTextColor(0, 0, 139);
		$this->SetFillColor(255, 255, 255);
		$this->SetFont($this->phpmvFont, "U", 9);
	}
	function setTitlePage($str) {
		$this->setStyleTitlePage();
		$w = $this->GetStringWidth($str) + 6;
		$this->SetX((210 - $w) / 2);
		$this->Cell($w, 10, $str, 0, 0, "C");
	}
	function setStatisticStyle1() {
		$this->SetTextColor(0, 0, 139);
		$this->SetFillColor(255, 255, 255);
		$this->SetFont($this->phpmvFont, "B", 11);
	}
	function setStatisticStyle2() {
		$this->SetTextColor(0, 0, 139);
		$this->SetFillColor(255, 255, 255);
		$this->SetFont($this->phpmvFont, "B", 11);
	}

	// Used to split page name
	function truncate($str, $lg, $sep) {
		$ret = "";
		if (strlen($str) > $lg) {
			$ret = substr($str, 0, $lg).$sep;
		} else {
			$ret = $str;
		}
		return $ret;
	}
	// Show time HH:MM:SS
	function show_time($ts) 
	{
		$h = floor($ts / 3600);
		$m = floor( ($ts  - $h*3600) / 60 );
		$s = floor( ($ts - $h*3600 - $m * 60) );
		return setToLength($h, 2) . ":" . setToLength($m,2) . ":" . setToLength($s,2);
	}
	
	// Show time HH:MM:SS
	function show_time_visit($ts) {
		$h = floor( $ts / 3600 );
		$m = floor( ($ts  - $h*3600) / 60 );
		$s = floor( ($ts - $h*3600 - $m * 60) );
	
		if($h != 0)
		{
			 $return[] = $h;
			 $return[] = $m;
		}
		elseif($m != 0) 
		{
			$return[] = $m;
		}
		$return[] = $s;
		
		// h + min + sec
		if(sizeof($return)===3)
		{
			return vsprintf(setToLength($h, 2) . ":" . setToLength($m,2) . ":" . setToLength($s,2), $return);
		}
		if (sizeof($return) == 2) {
			$ret = vsprintf($this->pmvTranslate("generique_tempsvisite"), $return);
		}
		// only sec
		else {
			$ret = vsprintf($this->pmvTranslate("visites_sec"), $return);
		}
		return $ret;
	}
	
	function setStylePercentPositif() {
		$this->SetTextColor(0, 128, 0);
		$this->SetFillColor(255, 255, 255);
		$this->SetFont($this->phpmvFont, "", 8);
	}
	function setStylePercentNegatif() {
		$this->SetTextColor(255, 0, 0);
		$this->SetFillColor(255, 255, 255);
		$this->SetFont($this->phpmvFont, "", 8);
	}

	function getStylePercent ($string) {
		if (substr($string, 0, 1) === "-") {
			$ret = "setStylePercentNegatif";
		} else {
			$ret = "setStylePercentPositif";
		}
		return $ret;
	}

	
	// Set red for negative and green for positive number
	function show_percent($string) {
		if (substr($string, 0, 1) === "-") {
			$span = "negatif";
			$this->SetTextColor(255, 0, 0);
		} else {
			$span = "positif";
			$this->SetTextColor(0, 128, 0);
		}
		return $string;
	}

	function pmvTranslate($str) {
		if (isset($GLOBALS["lang"][$str])) {
			$ret =  $GLOBALS["lang"][$str];
		}
		else {
			$ret = $str;
		}
		return $ret;
	}
	
	function getRowHeightFromMax ($maxHeight, $width, $txt) {
		// Compute nb of line to write txt
		$strWidth = $this->GetStringWidth($txt) + 3;
		$nbLg = floor($strWidth / $width);
		if (($strWidth % $width) > 0) {
			$nbLg++;
		}
		if ($nbLg <= 0) {
			$nbLg = 1;
		}
		return $maxHeight / $nbLg;
	}
	
	function GetTitleRowHeight($tabCell, $tabWidth) {
		$tabHeight = array ();
		// Get max
		$max = 0;
		//$this->setStyleLinePage();
		for ($i = 0; $i < count($tabCell); $i ++) {
			$strWidth = $this->GetStringWidth($tabCell[$i]->text) + 3;
			$tabHeight[$i] = floor($strWidth / $tabWidth[$i]);
			if (($strWidth % $tabWidth[$i]) > 0) {
				$tabHeight[$i]++;
			}
			if ($tabHeight[$i] <= 0) {
				$tabHeight[$i] = 1;
			}
			//$this->Cell($tabWidth[$i], PDF_DEFAULT_ROW_HEIGHT, $tabWidth[$i]. "  ". ($this->GetStringWidth($tabCell[$i]->text)) . "    " . $tabHeight[$i] . "    " . $tabCell[$i]->text);
			//$this->Ln();
			if ($tabHeight[$i] > $max) {
				$max = $tabHeight[$i];
			}
		}

		// compute height
		for ($i = 0; $i < count($tabHeight); $i ++) {
			$tabHeight[$i] = ($max / $tabHeight[$i]) * PDF_DEFAULT_ROW_HEIGHT;
		}

		return $tabHeight;
	}

	// Compute start x for table with array of width of each columns
	//
	// @param $w : array of width of each columns
	//
	// @return value to use to SetX to center a table
	function getXCenter($w) {
		$tot = 0;
		if (is_array($w)) {
			for ($i = 0; $i < count($w); $i ++) {
				$tot += $w[$i];
			}
		} else {
			$tot = $w;
		}
		$tmp = (210 - $tot) / 2;
		if ($tmp < $this->lMargin) {
			$tmp = $this->lMargin;
		}
		return $tmp;
	}

	// Write a line of table in pdf
	//
	// @param $tabCell : Each cell of the line
	// @param $xCenter : value return by getXCenter for $tabWidth
	// @param $tabWidth : array of width of each columns
	// @param $tabHeight : array of height of each columns (only for table title)
	function setTabLine($tabCell, $xCenter, $tabWidth, $tabHeight = null, $isSummPeriod = false) {
		if ($this->direction == "rtl") {
			$deb = count($tabWidth) - 1;
			$fin = -1;
			$inc = -1;
		} else {
			$deb = 0;
			$fin = count($tabWidth);
			$inc = 1;
		}
		// Test page position
		if (($this->GetY() + PDF_DEFAULT_ROW_HEIGHT) > PDF_DEFAULT_MAX_Y) {
			$this->AddPage();
		}

		//$this->Cell(10, PDF_DEFAULT_ROW_HEIGHT, "deb : $deb, fin : $fin, inc : $inc" );
		//$this->Ln();

		$oldStyle = "";
		$curY = $this->GetY();
		$curX = $xCenter;

		for ($i = $deb; $i != $fin; $i += $inc) {
			$align = $tabCell[$i]->align;
			if ($this->direction == "rtl") {
				if ($align == "L") {
					$align = "R";
				} else {
					if ($align == "R") {
						$align = "L";
					}
				}
			}

			if ($oldStyle != $tabCell[$i]->styleFct) {
				$oldStyle = $tabCell[$i]->styleFct;
				// Execute style fct
				//call_user_func(array ($this, $oldStyle));
				$this-> $oldStyle ();
			}

			$this->SetXY($curX, $curY);
			if ($tabHeight == null) {
				if (! $isSummPeriod) {
					$this->Cell($tabWidth[$i], PDF_DEFAULT_ROW_HEIGHT, $tabCell[$i]->text, $tabCell[$i]->border, 0, $align, $tabCell[$i]->fill, $tabCell[$i]->url);
				}
				else {
					$tabTxt = split ("xxx",  $tabCell[$i]->text);
					
					if (count($tabTxt) > 1) {
						$this->Cell($tabWidth[$i], PDF_DEFAULT_ROW_HEIGHT, $tabTxt[0], "RLT", 0, $align, $tabCell[$i]->fill, $tabCell[$i]->url);
						$this->SetXY($curX, $curY+PDF_DEFAULT_ROW_HEIGHT);
						$this->setStyleLinePageSmall();
						$oldStyle = "setStyleLinePageSmall";
						$this->Cell($tabWidth[$i], PDF_DEFAULT_ROW_HEIGHT-2, $tabTxt[1], "RLB", 0, $align, $tabCell[$i]->fill, $tabCell[$i]->url);
					}
					else {
						$rowHeight = $this->getRowHeightFromMax (2*PDF_DEFAULT_ROW_HEIGHT-2, $tabWidth[$i], $tabTxt[0]."  ");
						$this->MultiCell($tabWidth[$i], $rowHeight, $tabTxt[0], "RLTB", $align, $tabCell[$i]->fill);
					}
				}
			} else {
				$this->MultiCell($tabWidth[$i], $tabHeight[$i], $tabCell[$i]->text, $tabCell[$i]->border, $align, $tabCell[$i]->fill);
			}
			$curX = $curX + $tabWidth[$i];
		}
		if ($tabHeight == null) {
			$this->Ln();
		}
	}
	function setPmvGraph($GraphType, $GraphData, $chapterTitle = null) {
		ob_start();
		$moduleGR = Module :: factory("view_graph");
		$moduleGR->init($this->currentModule->request, null, null, $GraphType, $GraphData);
		$moduleGR->showAll();
		$out1 = ob_get_contents();
		ob_end_clean();

		// Parse to get info
		$infoPNG = $this->_parsepngpmv("getDataGraph".$GraphType.$GraphData.".pngpmv", $out1);
		$v_w = $infoPNG["w"];
		$v_h = $infoPNG["h"];

		// Verify if there is enough place to set image
		$heightImg = (($v_h * 0.7) / PDF_COEF_MM_PX);
		if ($chapterTitle != null) {
			$heightImg += (PDF_DEFAULT_ROW_HEIGHT + PDF_CHAPTER_LN_SPACE);
		}

		if (($this->GetY() + $heightImg) > PDF_DEFAULT_MAX_Y) {
			$this->AddPage();
		}

		if ($chapterTitle != null) {
			$this->setTitleChapter($chapterTitle);
		}

		$xCentre = $this->getXCenter(($v_w * 0.7) / PDF_COEF_MM_PX);

		$this->Image("graph".$GraphType.$GraphData.".pngpmv", $xCentre, $this->GetY(), 0, ($v_h * 0.7) / PDF_COEF_MM_PX, "pngpmv", "", $out1);
		$this->SetY($this->GetY() + (($v_h * 0.7) / PDF_COEF_MM_PX) + PDF_DEFAULT_ROW_HEIGHT);
	}

	function getDirById($id) {
		if ($id == "os") {
			$pathImg = DIR_IMG_OS;
		}
		elseif ($id == "browsers") {
			$pathImg = DIR_IMG_BROWSERS;
		}
		elseif ($id == "plugins") {
			//Waiting png conversion
			$pathImg = DIR_IMG_PLUGINS;
			//$pathImg = null;
		}
		elseif ($id == "screens") {
			//Waiting png conversion
			$pathImg = DIR_IMG_SCREENS;
			//$pathImg = null;
		}
		elseif ($id == "country") {
			$pathImg = DIR_IMG_COUNTRIES_FLAGS;
		}
		elseif ($id == "searchEngines") {
			$pathImg = DIR_IMG_SEARCH_ENGINES;
		} else {
			$pathImg = null;
		}
		return $pathImg;
	}

	function setDisplayDataArray($id, $headline, $data, $textNoRow = "", $text1 = "", $nb1 = null, $text2 = "", $nb2 = null) {
		$ret = 1;
		if ($id != "continent") {
			$this->setTitleChapter($headline);
		} else {
			$this->Ln();
			$this->Ln();
		}
		if ($data != null) {
			if ($text1 != "") {
				$this->setLineInfoText ($text1, $nb1);
			}
			if ($text2 != "") {
				$this->setLineInfoText ($text2, $nb2);
			}
			$w = array (70, 30);
			//MultiCell(float w, float h, string txt [, mixed border [, string align [, int fill]]]) 
			$this->setStyleTitleTab();
			$zz = 0;
			$tabCellHeader[$zz ++] = new TabCell($this->pmvTranslate($headline), "1", 0, "C", "1", "setStyleTitleTab");
			$tabCellHeader[$zz ++] = new TabCell($this->pmvTranslate("generique_nombre"), "1", 0, "C", "1", "setStyleTitleTab");

			$xCenter = $this->getXCenter($w);
			$tabHeight = $this->GetTitleRowHeight($tabCellHeader, $w);
			$this->setTabLine($tabCellHeader, $xCenter, $w, $tabHeight);
			$widthTotal = 0;
			for ($i = 0; $i < count($w); $i ++) {
				$widthTotal += $w[$i];
			}

			$this->setStyleLinePage();

			//			foreach ($data as $key => $info) {
			//				$this->Cell($w[0], PDF_DEFAULT_ROW_HEIGHT, "$key", "");
			//				$this->Ln();
			//				foreach ($info as $key2 => $info2) {
			//					$this->Cell($w[0], PDF_DEFAULT_ROW_HEIGHT, "  $key2 : $info2", "");
			//					$this->Ln();
			//				}
			//			}

			$pathImg = $this->getDirById($id);
			foreach ($data as $key => $info) {
				// Test page position
				if (($this->GetY() + PDF_DEFAULT_ROW_HEIGHT) > PDF_DEFAULT_MAX_Y) {
					$this->AddPage();
					$this->setStyleTitleTab();
					$this->setTabLine($tabCellHeader, $xCenter, $w, $tabHeight);
					$this->setStyleLinePage();
				}

				$this->SetX($xCenter);

				$spaceAfter = "";
				if ((isset ($info["img"])) && ($pathImg != null)) {
					if (getFilenameExtension($info["img"]) != 'gif') {
						if ($this->direction == "rtl") {
							$this->Image($pathImg."/".$info["img"], $xCenter + $widthTotal - (11 / PDF_COEF_MM_PX) - 1, $this->GetY() + 1, 11 / PDF_COEF_MM_PX);
						} else {
							$this->Image($pathImg."/".$info["img"], $this->GetX() + 1, $this->GetY() + 1, 11 / PDF_COEF_MM_PX);
						}
					}
					$spaceBefore = "          ";
				} else {
					if ($id = "provider") {
						$spaceBefore = "  ";
					} else {
						$spaceBefore = "          ";
					}
				}
				if ($this->direction == "rtl") {
					$spaceAfter = $spaceBefore;
					$spaceBefore = "";
				}
				if (isset($info["url"])) {
					$infoUrl = $info["url"];
				}
				else {
					$infoUrl = "";
				}

				$zz = 0;
				$tabCell[$zz ++] = new TabCell($spaceBefore.$this->truncate($info["data"], 50, "...").$spaceAfter, "LTBR", 0, "L", 0, "setStyleLineCategory", $infoUrl);
				$tabCell[$zz ++] = new TabCell($info["sum"]." (".sprintf("%.1f", $info["percent"])." %)", "LTBR", 0, "C", 0, "setStyleLinePage");
				$this->setTabLine($tabCell, $xCenter, $w);
			}
			$this->Ln();
		} else {
			$ret = 0;
			$this->setLineInfoText ($textNoRow);
			$this->Ln();
		}
		return $ret;
	}
	function setDisplayDataArrayInterest($id, $headline, $data) {
		
		$this->setLineInfoText ($headline, null, 30);
		/*
		$this->setStyleLinePage();
		$this->Cell(10, PDF_DEFAULT_ROW_HEIGHT, $this->pmvTranslate($headline), "0", "", "");
		$this->Ln();
		*/
		$this->setStyleLineCategory();
		$i = 0;
		$w = array (60, 15, 25, 25, 25, 25);
		$pathImg = $this->getDirById($id);
		$widthTotal = 0;
		for ($i = 0; $i < count($w); $i ++) {
			$widthTotal += $w[$i];
		}

		$this->setStyleTitleTab();
		//$tabCell = new aray();
		//$tabCell[0] = new TabCell("", "", 0, "C", "1", "setStyleTitleTab");
		$zz = 0;
		$tabCellHeader[$zz ++] = new TabCell($this->pmvTranslate($headline), "1", 0, "C", "1", "setStyleTitleTab");
		$tabCellHeader[$zz ++] = new TabCell($this->pmvTranslate("generique_nombre"), "1", 0, "C", "1", "setStyleTitleTab");
		$tabCellHeader[$zz ++] = new TabCell($this->pmvTranslate("visites_pagesvisites"), "1", 0, "C", "1", "setStyleTitleTab");
		$tabCellHeader[$zz ++] = new TabCell($this->pmvTranslate("visites_pagesvisitessign"), "1", 0, "C", "1", "setStyleTitleTab");
		$tabCellHeader[$zz ++] = new TabCell($this->pmvTranslate("visites_tauxvisite"), "1", 0, "C", "1", "setStyleTitleTab");
		$tabCellHeader[$zz ++] = new TabCell($this->pmvTranslate("visites_tempsmoyen"), "1", 0, "C", "1", "setStyleTitleTab");

		$xCenter = $this->getXCenter($w);
		$tabHeight = $this->GetTitleRowHeight($tabCellHeader, $w);
		$i = 0;
		foreach ($data as $key => $info) {
			// Test page position
			if (($this->GetY() + 4*PDF_DEFAULT_ROW_HEIGHT) > PDF_DEFAULT_MAX_Y) {
				$this->AddPage();
				$this->setStyleTitleTab();
				$this->setTabLine($tabCellHeader, $xCenter, $w, $tabHeight);
				$this->setStyleLinePage();
			}
			elseif ($i == 0) {
				// Table header
				$this->setTabLine($tabCellHeader, $xCenter, $w, $tabHeight);
			}
			$this->setStyleLinePage();
			$this->SetX($xCenter);

			$spaceAfter = "";
			if ((isset ($info["img"])) && ($pathImg != null)) {
				if (getFilenameExtension($info["img"]) != 'gif') {
					if ($this->direction == "rtl") {
						$this->Image($pathImg."/".$info["img"], $xCenter + $widthTotal - (11 / PDF_COEF_MM_PX) - 1, $this->GetY() + 1, 11 / PDF_COEF_MM_PX);
					} else {
						$this->Image($pathImg."/".$info["img"], $this->GetX() + 1, $this->GetY() + 1, 11 / PDF_COEF_MM_PX);
					}
				}
				$spaceBefore = "          ";
			} else {
				if ($id = "provider") {
					$spaceBefore = "  ";
				} else {
					$spaceBefore = "          ";
				}
			}
			if ($this->direction == "rtl") {
				$spaceAfter = $spaceBefore;
				$spaceBefore = "";
			}
			$zz = 0;
			$tabCell[$zz ++] = new TabCell($spaceBefore.$this->truncate($info["data"], 50, "...").$spaceAfter, "LTBR", 0, "L", 0, "setStyleLineCategory");
			$tabCell[$zz ++] = new TabCell($info["sum"], "LTBR", 0, "C", 0, "setStyleLinePage");
			$tabCell[$zz ++] = new TabCell(sprintf("%.1f", $info["page_per_visit"]), "LTBR", 0, "C", 0);
			$tabCell[$zz ++] = new TabCell(sprintf("%.1f", $info["page_per_visit_significant"]), "LTBR", 0, "C", 0);
			$tabCell[$zz ++] = new TabCell(sprintf("%.0f", $info["one_page_rate"])." %", "LTBR", 0, "C", 0);
			$tabCell[$zz ++] = new TabCell($info["time_per_visit"], "LTBR", 0, "C", 0);
			$this->setTabLine($tabCell, $xCenter, $w);

			$i ++;
		}
		$this->Ln();
	}

	//**********************************************************
	//
	//   TODO Provenance
	//
	//**********************************************************

	function setWorldMap() {
		$data = $this->currentModule->data->getSourceContinentCountries();
		$this->setTitleChapter("provenance_mappemonde");

		ob_start();
		$moduleGR = Module :: factory("view_world_map");
		$moduleGR->init($this->currentModule->request, null);
		$moduleGR->showAll();
		$out1 = ob_get_contents();
		ob_end_clean();

		$this->Image("ssgraphworldmap.pngpmv", 40, $this->GetY(), 0, 200 / PDF_COEF_MM_PX, "pngpmv", "", $out1);
		$this->SetY($this->GetY() + 73);

		$this->Image(DIR_IMG_MAPS."/scale.png", 60, $this->GetY(), 0, 7 / PDF_COEF_MM_PX);
		$this->SetY($this->GetY() + 10);

		$this->setDisplayDataArray("continent", "provenance_continent", $data);

	}

	function setSourceCountry($all = false) {
		$max = NB_ELEMENTS_TO_DISPLAY;
		if ($all == true) {
			$max = -1;
		}
		$data = $this->currentModule->data->getSourceCountries(0, $max);
		$dataInterest = $this->currentModule->data->getSourceCountriesInterest(0, $max);
		$countriesdistinct = $this->currentModule->data->getSourceCountriesDistinct();
		$this->setDisplayDataArray("country", "provenance_recappays", $data, "", "provenance_nbpays", $countriesdistinct);

		$this->setDisplayDataArrayInterest("country", "provenance_interetspays", $dataInterest);

		$this->setPmvGraph(3, "source_countries");
	}

	function setSourceProviders($all = false) {
		$max = NB_ELEMENTS_TO_DISPLAY;
		if ($all == true) {
			$max = -1;
		}
		$data = $this->currentModule->data->getSourceProviders(0, $max);
		$this->setDisplayDataArray("provider", "provenance_fai", $data);
	}

	//**********************************************************
	//
	//   TODO Settings
	//
	//**********************************************************

	function setSettingsConfig($all = false) {
		$max = NB_ELEMENTS_TO_DISPLAY;
		if ($all == true) {
			$max = -1;
		}
		$data = $this->currentModule->data->getSettingsConfig(0, $max);
		$this->setDisplayDataArray("configurations", "configurations_configurations", $data);
	}

	function setSettingsOs($all = false) {
		$max = NB_ELEMENTS_TO_DISPLAY;
		if ($all == true) {
			$max = -1;
		}
		$data = $this->currentModule->data->getSettingsOs(0, $max);
		$dataInterest = $this->currentModule->data->getSettingsOsInterest(0, $max);
		$this->setDisplayDataArray("os", "configurations_os", $data);

		$this->setDisplayDataArrayInterest("os", "configurations_os_interest", $dataInterest);

		$this->setPmvGraph(3, "settings_os");
	}

	function setSettingsBrowsersInterest($all = false) {
		$max = NB_ELEMENTS_TO_DISPLAY;
		if ($all == true) {
			$max = -1;
		}
		$data = $this->currentModule->data->getSettingsBrowsers(0, $max);
		$dataInterest = $this->currentModule->data->getSettingsBrowsersInterest(0, $max);
		$this->setDisplayDataArray("browsers", "configurations_navigateurs", $data);

		$this->setDisplayDataArrayInterest("browsers", "configurations_navigateurs_interest", $dataInterest);

		$this->setPmvGraph(3, "settings_browsers");
	}

	function setSettingsBrowsersType() {
		$data = $this->currentModule->data->getSettingsBrowsersType();
		$this->setDisplayDataArray("browsers", "configurations_navigateursbytype", $data);

		$this->setPmvGraph(3, "settings_browsers_type");
	}

	function setSettingsPlugins() {
		$data = $this->currentModule->data->getSettingsPlugins(); // NO ALL
		$this->setDisplayDataArray("plugins", "configurations_plugins", $data);

		$this->setPmvGraph(2, "settings_plugins");
	}

	function setSettingsResolutionsInterest($all = false) {
		$max = NB_ELEMENTS_TO_DISPLAY;
		if ($all == true) {
			$max = -1;
		}
		$data = $this->currentModule->data->getSettingsResolutions(0, $max);
		$dataInterest = $this->currentModule->data->getSettingsResolutionsInterest(0, $max);
		$this->setDisplayDataArray("screens", "configurations_resolutions", $data);

		$this->setDisplayDataArrayInterest("screens", "configurations_resolutions_interest", $dataInterest);

		$this->setPmvGraph(3, "settings_resolutions");
	}

	function setSettingsNormalWidescreen() {
		$data = $this->currentModule->data->getSettingsNormalWidescreen(); // NO ALL
		$this->setDisplayDataArray("screens", "configurations_rapport", $data);
	}

	//**********************************************************
	//
	//   TODO Referers
	//
	//**********************************************************
	function setReferersTypeInterest() {
		$dataInterest = $this->currentModule->data->getReferersTypeInterest();

		$this->setPmvGraph(4, "referers_summary", "affluents_recapimg");

		$this->setDisplayDataArrayInterest("referers", "affluents_interetstype", $dataInterest);
	}
	function setReferersSearchEnginesInterest($all = false) {
		$max = NB_ELEMENTS_TO_DISPLAY;
		if ($all == true) {
			$max = -1;
		}
		$data = $this->currentModule->data->getReferersSearchEngines(0, $max);
		$dataInterest = $this->currentModule->data->getReferersSearchEnginesInterest(0, $max);
		$numbers = $this->currentModule->data->getReferersNumbers();
		//$numbers.searchengines
		$ret = $this->setDisplayDataArray("searchEngines", "affluents_moteurs", $data,
		 "affluents_aucunmoteur", "affluents_nbparmoteur", $numbers["searchengines"]);
		if ($ret > 0) {
			$this->setDisplayDataArrayInterest("searchEngines", "affluents_interetsmoteurs", $dataInterest);
		}
	}

	function setReferersKeywordsInterest($all = false) {
		$max = NB_ELEMENTS_TO_DISPLAY;
		if ($all == true) {
			$max = -1;
		}
		$data = $this->currentModule->data->getReferersKeywords(0, $max);
		$dataInterest = $this->currentModule->data->getReferersKeywordsInterest(0, $max);
		$numbers = $this->currentModule->data->getReferersNumbers();
		//$numbers.keywords
		$ret = $this->setDisplayDataArray("keywords", "affluents_motscles", $data,
		 "affluents_aucunmoteur", "affluents_nbmotscles", $numbers["keywords"]);

		if ($ret > 0) {
			$this->setDisplayDataArrayInterest("keywords", "affluents_interetsmotscles", $dataInterest);
		}
	}

	function setReferersSitesInterest($all = false) {
		$max = NB_ELEMENTS_TO_DISPLAY;
		if ($all == true) {
			$max = -1;
		}
		$data = $this->currentModule->data->getReferersSites(0, $max);
		$dataInterest = $this->currentModule->data->getReferersSitesInterest(0, $max);
		$numbers = $this->currentModule->data->getReferersNumbers();
//		{assign var=strsites value='affluents_nbautressites'|translate:$numbers.sites}
//{assign var=strdistinctsites value='affluents_nbautressitesdiff'|translate:"<strong>`$numbers.distinctsites`</strong>"}

		$ret = $this->setDisplayDataArray("sitesinternet", "affluents_sitesinternet", $data,
		 "affluents_aucunautresite",
		 "affluents_nbautressites", $numbers["sites"],
		 "affluents_nbautressitesdiff", $numbers["distinctsites"]);

		if ($ret > 0) {
			$this->setDisplayDataArrayInterest("sitesinternet", "affluents_interetssitesinternet", $dataInterest);
		}
	}

	function setReferersPartnersInterest($all = false) {
		$max = NB_ELEMENTS_TO_DISPLAY;
		if ($all == true) {
			$max = -1;
		}
		$data = $this->currentModule->data->getReferersPartners(0, $max);
		$dataInterest = $this->currentModule->data->getReferersPartnersInterest(0, $max);
		$numbers = $this->currentModule->data->getReferersNumbers();
		//$numbers.partners
		$ret = $this->setDisplayDataArray("sitesinternet", "affluents_partenaires", $data,
		 "affluents_aucunpartenaire", "affluents_nbpartenaires", $numbers["partners"]);

		if ($ret > 0) {
			$this->setDisplayDataArrayInterest("sitesinternet", "affluents_interetspartenaires", $dataInterest);
		}
	}

	function setReferersNewslettersInterest($all = false) {
		$max = NB_ELEMENTS_TO_DISPLAY;
		if ($all == true) {
			$max = -1;
		}
		$data = $this->currentModule->data->getReferersNewsletters(0, $max);
		$dataInterest = $this->currentModule->data->getReferersNewslettersInterest(0, $max);
		$numbers = $this->currentModule->data->getReferersNumbers();
		//$numbers.newsletters
		$ret = $this->setDisplayDataArray("newsletters", "affluents_newsletters", $data,
		 "affluents_aucunnewsletter", "affluents_nbnewsletters", $numbers["newsletters"]);

		if ($ret > 0) {
			$this->setDisplayDataArrayInterest("newsletters", "affluents_interetsnewsletters", $dataInterest);
		}
	}
	
	function setReferersDirect () {
		$numbers = $this->currentModule->data->getReferersNumbers();
		$this->setTitleChapter("affluents_entreedirecte");
		$this->setLineInfoText ("affluents_nbentreedirecte", $numbers["direct"]);
		$this->Ln();
	}

	//**********************************************************
	//
	//   TODO Visitor movement
	//
	//**********************************************************

	function setVisitsTimeVisitsGraph() {
		$this->setPmvGraph(2, "visits_time", "visites_graphtempsvisites");
		$this->Ln();
	}

	function setVisitsPeriodSummariesGraph() {
		$this->setPmvGraph(1, "visits_period_summaries", "visites_grapghrecap");
		$this->Ln();
	}

	function setVisitsAllPeriodSummaryGraph() {
		$this->setPmvGraph(1, "visits_all_period_summary", "visites_grapghrecaplongterm");
		$this->Ln();
	}

	function setVisitsServerTimeGraph() {
		$this->setPmvGraph(2, "visits_server_time", "visites_graphheureserveur");
		$this->Ln();
	}

	function setVisitsLocalTimeGraph() {
		$this->setPmvGraph(2, "visits_local_time", "visites_graphheurevisiteur");
		$this->Ln();
	}

	
	function setVisitsPeriodSummaries() {
		$zoom = $this->currentModule->data->getVisitsPeriodSummaries();
		if ($this->period == 1) {
			$w = array (20, 20);
		}
		elseif ($this->period == 2) {
			$w = array (20, 20);
		}
		elseif ($this->period == 3) {
			$w = array (20, 18.5);
		}
		else {
			$w = array (20, 20);
		}

		$mod = "notrss";
		$this->setTitleChapter("visites_recapperiode");

		// Table header
		$this->setStyleTitleTab();
		$zz = 0;
		$tabCellHeader[$zz ++] = new TabCell(" ");
		foreach ($zoom as $key => $info) {
			$w[$zz] = $w[1];
			$tabCellHeader[$zz ++] = new TabCell($info["date"], "LTBR", "", "C", 1, "setStyleTitleTab");
		}

		$xCenter = $this->getXCenter($w);
		$tabHeight = $this->GetTitleRowHeight($tabCellHeader, $w);
		$this->setTabLine($tabCellHeader, $xCenter, $w, $tabHeight);

		$this->setStyleLineCategory();
		$zz = 0;
		//TabCell($p_text = "", $p_border = "", $p_ln = 0, $p_align = "C", $p_fill = "", $p_styleFct = PDF_DEFAULT_STYLE, $p_url = "")
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_nbvisites"), "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setStyleLinePage();
		foreach ($zoom as $key => $info) {
			if ($info["visits"] == 0) {
				$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_aucunevivisite"), "LTBR", "", "C", 1, "setStyleLinePage");
			} else {
				$tabCell[$zz ++] = new TabCell($info["visits_percent"]."xxx(".$info["visits"].")",
				 "LTBR", "", "C", 1, $this->getStylePercent($info["visits_percent"]));
			}

		}
		$this->setTabLine($tabCell, $xCenter, $w, null, true);

		$this->setStyleLineCategory();
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_pagesvues"), "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setStyleLinePage();
		foreach ($zoom as $key => $info) {
			if ($info["visits"] == 0) {
				$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_aucunevivisite"), "LTBR", "", "C", 1, "setStyleLinePage");
			} else {
				$tabCell[$zz ++] = new TabCell($info["pages_percent"]."xxx(".$info["pages"].")",
				 "LTBR", "", "C", 1, $this->getStylePercent($info["pages_percent"]));
			}

		}
		$this->setTabLine($tabCell, $xCenter, $w, null, true);
		$this->Ln();
	}

	function setVisitsStatistics() {
		$zoom = $this->currentModule->data->getVisitsStatistics();
		$w = array (45, 15);
		$mod = "notrss";
		$this->setTitleChapter("visites_statistiques");

		$xCenter = $this->getXCenter($w);

		// Table header
		$this->SetX($xCenter);
		$this->setStyleTitleTab();
		$this->Cell($w[0] + $w[1], PDF_DEFAULT_ROW_HEIGHT, $this->pmvTranslate("visites_periodesel"), "LTBR", "", "C", 1);
		$this->Ln();

		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_visites"), "LTBR", "", "C", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell($zoom["nb_vis"], "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_uniques"), "LTBR", "", "C", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell($zoom["nb_uniq_vis"], "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_pagesvues"), "LTBR", "", "C", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell($zoom["nb_pag"], "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_pagesvisiteurs"), "LTBR", "", "C", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell(sprintf("%.1f", $zoom["nb_pag_per_vis"]), "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_pagesvisitessign"), "LTBR", "", "C", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell(sprintf("%.1f", $zoom["nb_pag_per_vis_sig"]), "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_tempsmoyen"), "LTBR", "", "C", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell($this->show_time_visit($zoom["time_per_vis"]), "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_tempsmoyenpv"), "LTBR", "", "C", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell($this->show_time_visit($zoom["time_per_pag"]), "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_tauxvisite"), "LTBR", "", "C", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell(sprintf("%.0f", $zoom["one_page_rate"])."%", "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		if (isset ($zoom["average_visits_per_day"])) {
			$zz = 0;
			$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_average_visits_per_day"), "LTBR", "", "C", 1, "setStyleLinePage");
			$tabCell[$zz ++] = new TabCell(sprintf("%d", $zoom["average_visits_per_day"]), "LTBR", "", "C", 1, "setStyleLineCategory");
			$this->setTabLine($tabCell, $xCenter, $w);
		}
	
		$this->Ln();
	}

	function setFrequencyGraphNbVisitsPerVisitor() {
		$this->setPmvGraph(2, "visits_by_visitor", "pagesvues_vispervisgraph");
		$this->Ln();
	}

	function setFrequencyGraphNewReturnVisits() {
		$this->setPmvGraph(5, "frequency_new_vs_returning", "frequence_nouveauxconnusgraph");
		$this->Ln();
	}

	//**********************************************************
	//
	//   TODO Frequency
	//
	//**********************************************************
	

	function setFrequencyNewReturnVisits() {
		$zoom = $this->currentModule->data->getVisitsFrequencyStatistics();
		$w = array (40, 30, 30);
		$this->setTitleChapter("frequence_nouveauxconnus");

		$xCenter = $this->getXCenter($w);

		// Table header
		$zz = 0;
		$tabCell[$zz ++] = new TabCell(" ", "LTBR", "", "C", 1, "setStyleTitleTab");
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("frequence_visitesconnues"), "LTBR", "", "C", 1, "setStyleTitleTab");
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("frequence_nouvellesvisites"), "LTBR", "", "C", 1, "setStyleTitleTab");
		$this->setTabLine($tabCell, $xCenter, $w);

		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_visites"), "LTBR", "", "", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell($zoom["nb_vis_returning"]." (".sprintf("%.0f", $zoom["nb_vis_returning_percent"])."%)", "LTBR", "", "C", 1, "setStyleLineCategory");
		$tabCell[$zz ++] = new TabCell($zoom["nb_vis_new"]." (".sprintf("%.0f", $zoom["nb_vis_new_percent"])."%)", "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_pagesvues"), "LTBR", "", "", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell($zoom["nb_pag_returning"]." (".sprintf("%.0f", $zoom["nb_pag_returning_percent"])."%)", "LTBR", "", "C", 1, "setStyleLineCategory");
		$tabCell[$zz ++] = new TabCell($zoom["nb_pag_new"]." (".sprintf("%.0f", $zoom["nb_pag_new_percent"])."%)", "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_pagesvisiteurs"), "LTBR", "", "", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell(sprintf("%.1f", $zoom["nb_pag_per_vis_returning"]), "LTBR", "", "C", 1, "setStyleLineCategory");
		$tabCell[$zz ++] = new TabCell(sprintf("%.1f", $zoom["nb_pag_per_vis_new"]), "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_tempsmoyen"), "LTBR", "", "", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell($this->show_time_visit($zoom["time_per_vis_returning"]), "LTBR", "", "C", 1, "setStyleLineCategory");
		$tabCell[$zz ++] = new TabCell($this->show_time_visit($zoom["time_per_vis_new"]), "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_tempsmoyenpv"), "LTBR", "", "", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell($this->show_time_visit($zoom["time_per_pag_returning"]), "LTBR", "", "C", 1, "setStyleLineCategory");
		$tabCell[$zz ++] = new TabCell($this->show_time_visit($zoom["time_per_pag_new"]), "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("visites_tauxvisite"), "LTBR", "", "", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell(sprintf("%.0f", $zoom["one_page_rate_returning"])."%", "LTBR", "", "C", 1, "setStyleLineCategory");
		$tabCell[$zz ++] = new TabCell(sprintf("%.0f", $zoom["one_page_rate_new"])."%", "LTBR", "", "C", 1, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		$this->Ln();
	}

	function setFrequencyStatistics() {
		$zoom = $this->currentModule->data->getVisitsFrequencyStatistics();
		$w = array (45, 15);
		$this->setTitleChapter("visites_statistiques");

		$xCenter = $this->getXCenter($w);

		// Table header
		$this->SetX($xCenter);
		$this->setStyleTitleTab();
		$this->Cell($w[0] + $w[1], PDF_DEFAULT_ROW_HEIGHT, $this->pmvTranslate("visites_periodesel"), "LTBR", "", "C", 1, "setStyleTitleTab");
		$this->Ln();

		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("frequence_nouveauxvisiteurs"), "LTBR", "", "", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell($zoom["nb_uniq_vis_new"], "LTBR", "", "C", 1, "setStyleLinePage");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("frequence_visiteursconnus"), "LTBR", "", "", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell($zoom["nb_uniq_vis_returning"], "LTBR", "", "C", 1, "setStyleLinePage");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("frequence_returningrate"), "LTBR", "", "", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell(sprintf("%.0f", $zoom["returning_rate"])."%", "LTBR", "", "C", 1, "setStyleLinePage");
		$this->setTabLine($tabCell, $xCenter, $w);
		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("frequence_vispervis"), "LTBR", "", "", 1, "setStyleLinePage");
		$tabCell[$zz ++] = new TabCell(sprintf("%.1f", $zoom["nb_vis_per_uniq_vis"])." ".$this->pmvTranslate("frequence_vis"), "LTBR", "", "C", 1, "setStyleLinePage");
		$this->setTabLine($tabCell, $xCenter, $w);
		$this->Ln();

	}

	//**********************************************************
	//
	//   TODO FollowUp
	//
	//**********************************************************

	function setFollowUpSinglePages($all = true) {
		$zoom = $this->currentModule->data->getFollowUpZoom("");
		$w = array (140, 30);
		$this->setTitleChapter("suivi_singlepage");

		$xCenter = $this->getXCenter($w);

		// Table header
		$this->setStyleTitleTab();
		$zz = 0;
		$tabCell[$zz ++] = new TabCell(" ", "");
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("generique_hits"), "LTBR", "", "C", 1, "setStyleTitleTab");
		$this->setTabLine($tabCell, $xCenter, $w);

		if ($all == true) {
			$this->setPagesZoomDetail("singlepage", $zoom, $w, "getFollowUpZoom");
		}
		else {
			$this->setPagesZoomDetail("singlepage", $zoom, $w, "");
		}
		$this->Ln();
	}

	/**
	 * Set follow up exit page table
	 * 
	 * @param $period
	 * @param $idtouse
	 * @param $zoom
	 * @param $w
	 * @param $allPage
	 */
	function setFollowUpExitPages($all = true) {
		$zoom = $this->currentModule->data->getFollowUpZoom("");
		$w = array (110, 30, 30);
		$this->setTitleChapter("suivi_pagesortie");

		$xCenter = $this->getXCenter($w);

		// Table header
		$this->setStyleTitleTab();
		$zz = 0;
		$tabCell[$zz ++] = new TabCell(" ", "");
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("suivi_pagesortiehits"), "LTBR", "", "C", 1, "setStyleTitleTab");
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("suivi_tauxsortie"), "LTBR", "", "C", 1, "setStyleTitleTab");
		$this->setTabLine($tabCell, $xCenter, $w);

		if ($all) {
			$this->setPagesZoomDetail("exit", $zoom, $w, "getFollowUpZoom");
		}
		else {
			$this->setPagesZoomDetail("exit", $zoom, $w, "");
		}

		$this->Ln();
	}

	// Follow up entry pages
	function setFollowUpEntryPages($all = true) {
		$zoom = $this->currentModule->data->getFollowUpZoom("");
		$w = array (140, 30);
		$this->setTitleChapter("suivi_pageentree");

		$xCenter = $this->getXCenter($w);
		// Table header
		$this->setStyleTitleTab();
		$zz = 0;
		$tabCell[$zz ++] = new TabCell(" ", "");
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("suivi_pageentreehits"), "LTBR", "", "C", 1, "setStyleTitleTab");
		$this->setTabLine($tabCell, $xCenter, $w);

		if ($all) {
			$this->setPagesZoomDetail("entry", $zoom, $w, "getFollowUpZoom");
		}
		else {
			$this->setPagesZoomDetail("entry", $zoom, $w, "");
		}
		$this->Ln();
	}

	//**********************************************************
	//
	//   TODO Pages View
	//
	//**********************************************************

	function setPagesZoomTpsParPage($all = true) {
		$zoom = $this->currentModule->data->getPagesZoom("");
		$w = array (110, 30, 30);
		$this->setTitleChapter("pagesvues_tempsparpage");

		$xCenter = $this->getXCenter($w);

		// Header table
		$this->setStyleTitleTab();
		$zz = 0;
		$tabCell[$zz ++] = new TabCell(" ", "");
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("pagesvues_total_time"), "LTBR", "", "C", 1, "setStyleTitleTab");
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("pagesvues_avg_time"), "LTBR", "", "C", 1, "setStyleTitleTab");
		$this->setTabLine($tabCell, $xCenter, $w);
		if ($all) {
			$this->setPagesZoomDetail("sumtime", $zoom, $w, "getPagesZoom");
		}
		else {
			$this->setPagesZoomDetail("sumtime", $zoom, $w, "");
		}
		$this->Ln();
	}

	function setPagesZoomTab2($all = true) {
		$zoom = $this->currentModule->data->getPagesZoom("");
		$w = array (80, 30, 30, 30);
		$this->setTitleChapter("pagesvues_pagesvues");

		if ($all) {
			$this->setPagesZoomDetail("sum", $zoom, $w, "getPagesZoom");
		}
		else {
			$this->setPagesZoomDetail("sum", $zoom, $w, "");
		}
		$this->Ln();
	}

	function setPagesZoomDetail($idtouse, $zoom, $w, $allPage = "", $indent = 0) {
		$strIndent = "";
		for ($i = 0; $i < $indent; $i ++) {
			$strIndent .= "    ";
		}

		$xCenter = $this->getXCenter($w);

		foreach ($zoom[$idtouse][1] as $key => $info) {
			$zz = 0;
			// Test page position
			if (($this->GetY() + PDF_DEFAULT_ROW_HEIGHT) > PDF_DEFAULT_MAX_Y) {
				$this->AddPage();
			}
			if (!($info["type"] == "file" && $idtouse != "sum")) {
				if ($info["type"] == "category") {
					$styleTxt = "setStyleLineCategory";
					//class="cate" 
					//onclick="loadPagesDetails("{$url_pages_details}&amp;mod=view_pages_details&amp;idtouse={$idtouse}&amp;c_id_zoom={$info.id}", this);"
				}
				else {
					$styleTxt = "setStyleLinePage";
				}
				
				if (sizeof($info["vars"]) != 0 && $idtouse == "sum") {
					//Montrer les variables
					//onclick="displayVariables( findNextWithType( this.firstChild, "TD"));"

				}

				if ($info["type"] == "category") {
					//<img src="./themes/default/images/groupa.gif">
					//$this->Image("./themes/default/images/groupa.gif");
				}

				$infoData = str_replace("&amp;", "&", $info["data"]);
				if ($info["type"] == "category") {
					if ($this->direction == "rtl") {
						$infoData = $infoData." +";
					}
					else  {
						$infoData = "+ " . $infoData;
					}
				}
				
				//{$info.data|truncate:65:"..."}
				$tabCell[$zz ++] = new TabCell($this->truncate($strIndent.$infoData, 50, "..."), "LTBR", "", "L", 0, $styleTxt);

				if ($info["type"] == "file") {
					//<img src="./themes/default/images/download.png">
				}

				// 	{if sizeof($info.vars) != 0 && $idtouse == "sum"}
				// 		
				// 		<span style="cursor: pointer;color:red;font-size: x-small; vertical-align: 50%;" onmouseover="pointer(this)" 
				// 			{if $info.type == "category"}onclick="displayVariables( this.parentNode );"{/if}>
				// 		+
				// 		</span>
				// 		
				// 		<div style="display: none;">
				// 				<table cellspacing=0 align="right" id="variables">
				// 				<th colspan="2">
				// 				{"generique_variables"|pmvTranslate}
				// 				</th>
				// 				{foreach from=$info.vars key=var_name item=a_var}
				// 					<tr><td colspan="2" class="header">{$var_name}</td></tr>
				// 					{foreach from=$a_var key=var_value item=var_count}
				// 					<tr><td class="data">{$var_value}</td><td class="nb"> {$var_count}</td></tr>
				// 					{/foreach}
				// 				{/foreach}
				// 				</table>
				// 		</div>
				// 	{/if}

				//<td width="15%" class="acenter {if $idtouse == "sum" || $idtouse == "exit" || $idtouse == "sumtime"}wrb{/if} {if $cwtb==1}wtb{/if}" id="c{$idtouse}{$info.id}">
				if ($idtouse == "sumtime") {
					//{$info.$idtouse|time}
					$tabCell[$zz ++] = new TabCell($this->show_time($info[$idtouse]), "LTBR", "", "C", 0, $styleTxt);
				} else {
					//{$info.$idtouse}
					$tabCell[$zz ++] = new TabCell($info[$idtouse], "LTBR", "", "C", 0, $styleTxt);
				}

				if ($idtouse == "sum") {
					//<td width="15%" class="acenter {if $cwtb==1}wtb{/if} wrb" >{$info.percentn1|print_percent} <small>({$info.sumn1})</small></td>
					$tabCell[$zz ++] = new TabCell($this->show_percent($info["percentn1"])." (".$info["sumn1"].")", "LTBR", "", "C", 0, $styleTxt);
					//<td width="15%" class="acenter {if $cwtb==1}wtb{/if}">{$info.percentn2|print_percent} <small>({$info.sumn2})</small></td>
					$tabCell[$zz ++] = new TabCell($this->show_percent($info["percentn2"])." (".$info["sumn2"].")", "LTBR", "", "C", 0, $styleTxt);
				}
				if ($idtouse == "exit") {
					//<td width="15%" class="acenter {if $cwtb==1}wtb{/if}">{$info.exitrate|string_format:"%.2f"} %</td>
					$tabCell[$zz ++] = new TabCell(sprintf("%.2f", $info["exitrate"])." %", "LTBR", "", "C", 0, $styleTxt);
				}
				if ($idtouse == "sumtime") {
					//<td width="15%" class="acenter {if $cwtb==1}wtb{/if}">{$info.avgtime|time}</td>
					$tabCell[$zz ++] = new TabCell($this->show_time($info["avgtime"]), "LTBR", "", "C", 0, $styleTxt);
				}

				$this->setTabLine($tabCell, $xCenter, $w);

				if (($info["type"] == "category") && ($allPage != "")) {
					$zoomFils = call_user_func(array ($this->currentModule->data, $allPage), $info["id"]);
					//$zoomFils = $this->currentModule->data->getPagesZoom($info["id"]);
					$this->setPagesZoomDetail($idtouse, $zoomFils, $w, $allPage, $indent +1);
				}

			}
		} // end for
	}

	//setPagesVuesTab1
	function setPagesZoomTab1() {
		$zoom = $this->currentModule->data->getPagesZoom("");
		$w = array (80, 30, 30, 30);
		$idtouse = "sum";
		$period = $this->period;

		$xCenter = $this->getXCenter($w);

		$this->setStyleTitleTab();

		if ($period == 1) {
			$borderLine1 = "LTR";
			$borderLine2 = "LRB";
			//  Header table
			$zz = 0;
			$tabCell[$zz ++] = new TabCell(" ", "");
			$tabCell[$zz ++] = new TabCell($this->pmvTranslate("pagesvues_joursel"), $borderLine1, "", "C", 1, "setStyleTitleTab");
			$tabCell[$zz ++] = new TabCell($this->pmvTranslate("pagesvues_jmoins7"), $borderLine1, "", "C", 1, "setStyleTitleTab");
			$tabCell[$zz ++] = new TabCell($this->pmvTranslate("pagesvues_jmoins14"), $borderLine1, "", "C", 1, "setStyleTitleTab");
			$this->setTabLine($tabCell, $xCenter, $w);
			$this->SetFont($this->phpmvFont, "", 7);
			$txtBefore = "(";
			$txtAfter = ")";
		} else {
			$borderLine1 = "LTRB";
			$borderLine2 = "LTRB";
			$txtBefore = "";
			$txtAfter = "";
		}

		$zz = 0;
		$tabCell[$zz ++] = new TabCell(" ", "");
		$tabCell[$zz ++] = new TabCell($txtBefore.$zoom[$idtouse][0][0].$txtAfter, $borderLine2, "", "C", 1, "setStyleTitleTab");
		$tabCell[$zz ++] = new TabCell($txtBefore.$zoom[$idtouse][0][1].$txtAfter, $borderLine2, "", "C", 1, "setStyleTitleTab");
		$tabCell[$zz ++] = new TabCell($txtBefore.$zoom[$idtouse][0][2].$txtAfter, $borderLine2, "", "C", 1, "setStyleTitleTab");
		$this->setTabLine($tabCell, $xCenter, $w);

		// Lines
		$this->setStyleLinePage();

		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("pagesvues_pagesvues"), "LTRB", "", "C");
		$tabCell[$zz ++] = new TabCell($zoom[$idtouse][2][0]["nb_pag"], "LTRB", "", "C");
		$tabCell[$zz ++] = new TabCell($zoom[$idtouse][2][1]["nb_pag"], "LTRB", "", "C");
		$tabCell[$zz ++] = new TabCell($zoom[$idtouse][2][2]["nb_pag"], "LTRB", "", "C");
		$this->setTabLine($tabCell, $xCenter, $w);

		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("pagesvues_pagesvudiff"), "LTRB", "", "C");
		$tabCell[$zz ++] = new TabCell($zoom[$idtouse][2][0]["nb_uniq_pag"], "LTRB", "", "C");
		$tabCell[$zz ++] = new TabCell($zoom[$idtouse][2][1]["nb_uniq_pag"], "LTRB", "", "C");
		$tabCell[$zz ++] = new TabCell($zoom[$idtouse][2][2]["nb_uniq_pag"], "LTRB", "", "C");
		$this->setTabLine($tabCell, $xCenter, $w);

		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("pagesvues_recordpages"), "LTRB", "", "C");
		$tabCell[$zz ++] = new TabCell($zoom[$idtouse][2][0]["nb_max_pag"], "LTRB", "", "C");
		$tabCell[$zz ++] = new TabCell($zoom[$idtouse][2][1]["nb_max_pag"], "LTRB", "", "C");
		$tabCell[$zz ++] = new TabCell($zoom[$idtouse][2][2]["nb_max_pag"], "LTRB", "", "C");
		$this->setTabLine($tabCell, $xCenter, $w);
		$this->Ln();

	}
	// Show graph pages_by_visit
	function setPagesByVisitGraph() {
		$this->setPmvGraph(2, "pages_by_visit", "pagesvues_graphsnbpages");
		$this->Ln();
	}
	
	//**********************************************************
	//
	//   TODO Site summary
	//
	//**********************************************************


	function setSitesSummaryStatistics() {
		$data = $this->currentModule->data->getSitesSummaryStatistics();
		$w = array (50, 20, 20, 20, 25, 25);

		$this->Ln();
		// Table header
		$this->setStyleTitleTab();

		//$tabCell = new aray();
		//$tabCell[0] = new TabCell("", "", 0, "C", "1", "setStyleTitleTab");
		$zz = 0;
		$tabCellHead[$zz ++] = new TabCell($this->pmvTranslate("generique_site"), "1", 0, "C", "1", "setStyleTitleTab");
		$tabCellHead[$zz ++] = new TabCell($this->pmvTranslate("visites_visites"), "1", 0, "C", "1", "setStyleTitleTab");
		$tabCellHead[$zz ++] = new TabCell($this->pmvTranslate("visites_pagesvues"), "1", 0, "C", "1", "setStyleTitleTab");
		$tabCellHead[$zz ++] = new TabCell($this->pmvTranslate("visites_pagesvisiteurs"), "1", 0, "C", "1", "setStyleTitleTab");
		$tabCellHead[$zz ++] = new TabCell($this->pmvTranslate("visites_tempsmoyen"), "1", 0, "C", "1", "setStyleTitleTab");
		$tabCellHead[$zz ++] = new TabCell($this->pmvTranslate("visites_tauxvisite"), "1", 0, "C", "1", "setStyleTitleTab");

		$xCenter = $this->getXCenter($w);
		$tabHeight = $this->GetTitleRowHeight($tabCellHead, $w);
		$this->setTabLine($tabCellHead, $xCenter, $w, $tabHeight);

		$this->setStyleLinePage();
		foreach ($data["sites_info"] as $key => $info) {
			// Test page position
			if (($this->GetY() + PDF_DEFAULT_ROW_HEIGHT) > PDF_DEFAULT_MAX_Y) {
				$this->AddPage();
				$this->setTabLine($tabCellHead, $xCenter, $w, $tabHeight);
			}
			//$this->Cell($w[0], PDF_DEFAULT_ROW_HEIGHT, " ", "");
			$zz = 0;
			$tabCell[$zz ++] = new TabCell($info["site_name"], "LTBR", 0, "L", 0);
			$tabCell[$zz ++] = new TabCell($info["nb_vis"], "LTBR", 0, "C", 0);
			$tabCell[$zz ++] = new TabCell($info["nb_pag"], "LTBR", 0, "C", 0);
			$tabCell[$zz ++] = new TabCell(sprintf("%.1f", $info["nb_pag_per_vis"]), "LTBR", 0, "C", 0);
			$tabCell[$zz ++] = new TabCell($this->show_time_visit($info["time_per_vis"]), "LTBR", 0, "C", 0);
			$tabCell[$zz ++] = new TabCell(sprintf("%.0f", $info["one_page_rate"])." %", "LTBR", 0, "C", 0);
			$this->setTabLine($tabCell, $xCenter, $w);
		}
		$this->setStyleLineCategory();
		$info = $data["total"];
		// Test page position
		if (($this->GetY() + PDF_DEFAULT_ROW_HEIGHT) > PDF_DEFAULT_MAX_Y) {
			$this->AddPage();
		}

		$zz = 0;
		$tabCell[$zz ++] = new TabCell($this->pmvTranslate("generique_total"), "LTBR", 0, "L", 0, "setStyleLineCategory");
		$tabCell[$zz ++] = new TabCell($info["nb_vis"], "LTBR", 0, "C", 0, "setStyleLineCategory");
		$tabCell[$zz ++] = new TabCell($info["nb_pag"], "LTBR", 0, "C", 0, "setStyleLineCategory");
		$tabCell[$zz ++] = new TabCell(sprintf("%.1f", $info["nb_pag_per_vis"]), "LTBR", 0, "C", 0, "setStyleLineCategory");
		$tabCell[$zz ++] = new TabCell($this->show_time_visit($info["time_per_vis"]), "LTBR", 0, "C", 0, "setStyleLineCategory");
		$tabCell[$zz ++] = new TabCell(sprintf("%.0f", $info["one_page_rate"])." %", "LTBR", 0, "C", 0, "setStyleLineCategory");
		$this->setTabLine($tabCell, $xCenter, $w);
		//$this->Ln();
	}

} // end class GenerePDF

class ViewPdf extends ViewModule {

	function ViewPdf() {
		parent :: ViewModule("pdf");
	}

	function process() {

	}

	// FOR TEST ONY : Show all info in datamodel
	function afficheInfo($infoAff, $indentAff, $debCle, $curKey) {
		$ret = "";

		$indentStr = "    ";
		for ($i = 0; $i < $indentAff; $i += 1) {
			$indentStr = $indentStr."    ";
		}
		if (gettype($infoAff) == "array") {
			foreach ($infoAff as $key1 => $info1) {
				$ret .= $indentStr." cle : ".$key1."<br>";
				$ret .= $this->afficheInfo($info1, $indentAff +1, $debCle.".".$key1, $key1);
				if (($key1 == "type") && ($info1 == "category")) {
					//echo "xxxxx : " . $infoAff["id"];
					$zoom2 = $this->data->getPagesZoom($infoAff["id"]);
					$ret .= $this->afficheInfo($zoom2, $indentAff +3, $debCle.".[".$infoAff["id"]."]", "");
				}
			}
		} else {
			if ($curKey == "data") {
				$ret .= $indentStr.$debCle." : <b>".$infoAff."</b>";
			} else {
				$ret .= $indentStr.$debCle." : ".$infoAff;
			}

			$ret .= "<br>";
		}
		return $ret;
	}

	function display() {
		$viewAllDetail = false;
		$paramAll = getRequestVar( 'all', 0, 'int');
		if ($paramAll == 1) {
			$viewAllDetail = true;
		}
		
		$period = $this->request->getPeriod();
		$idSite = $this->request->getSiteId();
		$idSite = getRequestVar( 'site', -1, 'int');
		/*
				$rssHash = Request :: getRssHash();
				if ($rssHash == "xxx") {
					$urlStartGraph = "";
				} else {
					$urlStartGraph = PHPMV_URL; //Request::getCurrentCompletePath();
					$urlStartGraph .= "/index.php?site=".$idSite."&rss_hash=".$rssHash;
					$urlStartGraph .= "&date=".getRequestVar("date", date("Y-m-d"), "string")."&period=".$period."&mod=view_graph";
				}
		*/
		$pdf = new GenerePDF("P", "mm");
/*
		$pdf->AddFont("DejaVuSans", "", "DejaVuSans.php");
		$pdf->AddFont("DejaVuSans", "B", "DejaVuSans.php");
		$pdf->AddFont("DejaVuSans", "I", "DejaVuSans.php");
		$pdf->AddFont("DejaVuSans", "BI", "DejaVuSans.php");
		$pdf->phpmvFont = "DejaVuSans";
*/
/*		
		$pdf->AddFont("SILEOT", "", "SILEOT.php");
		$pdf->AddFont("SILEOT", "B", "SILEOT.php");
		$pdf->AddFont("SILEOT", "I", "SILEOT.php");
		$pdf->AddFont("SILEOT", "BI", "SILEOT.php");
		$pdf->phpmvFont = "SILEOT";
*/		
		$pdf->currentModule = $this;
		if ($idSite > 0) {
			$site = new Site($idSite);
			$pdf->currentSite = $site;
		}
		else {
			$pdf->currentSite = null;
		}
		$pdf->period = $period;
		$pdf->literalDate = getLiteralDate($period, $this->request->getDate());

		if (isset ($GLOBALS["lang"]["text_dir"])) {
			$pdf->direction = $GLOBALS["lang"]["text_dir"];
		} else {
			$pdf->direction = "ltr";
		}
		//$pdf->direction = "rtl";

		// Set PDF propertes data	
		if ($idSite != -1){	
			$titre = "Statistics of ".$site->getName();
		}
		else {
			$titre = $pdf->pmvTranslate("summary_title");
		}
		$pdf->SetTitle($titre);
		$pdf->SetAuthor("phpMyVisites");
		$pdf->SetCreator($pdf->pmvTranslate("head_titre"));
		$pdf->SetKeywords($pdf->pmvTranslate("head_keywords"));
		$pdf->SetSubject($pdf->pmvTranslate("logo_description"));

		$pdf->SetFont($pdf->phpmvFont, "", 8);
		$pdf->SetLineWidth(0.1);

		// *******************************************************
		// Sites Summary
		// *******************************************************
		$pdf->titrePage1 = "summary_title";
		$pdf->AddPage();

		$pdf->setSitesSummaryStatistics();


		if ($idSite > 0) {
		
			$zoom = $this->data->getVisitsStatistics();
			if (! isset($zoom["nb_vis"])) {
				$txtNoVisit = $pdf->pmvTranslate("aucunvisiteur_titre");

				$pdf->Ln();
				$pdf->Ln();
				$pdf->SetFont($pdf->phpmvFont, "", 14);
				$pdf->SetTextColor(255, 0, 0);
				$w = $pdf->GetStringWidth($txtNoVisit) + 6;

				$pdf->SetX((210 - $w) / 2);
				$pdf->Cell($w, 8, $txtNoVisit, "", 0, "C", 0);
			}
			else {
				// Summary Link
				$pdf->setStyleSummaryLink();
				
				$pdf->Ln();
				$linkP1 = $pdf->AddLink();
				$pdf->SetX(50);
				$pdf->Cell(80, PDF_DEFAULT_ROW_HEIGHT, $pdf->pmvTranslate("visites_titre"), "0", "", "L", 0, $linkP1);
				$pdf->Ln();
				$linkP2 = $pdf->AddLink();
				$pdf->SetX(50);
				$pdf->Cell(80, PDF_DEFAULT_ROW_HEIGHT, $pdf->pmvTranslate("frequence_titre"), "0", "", "L", 0, $linkP2);
				$pdf->Ln();
				$linkP3 = $pdf->AddLink();
				$pdf->SetX(50);
				$pdf->Cell(80, PDF_DEFAULT_ROW_HEIGHT, $pdf->pmvTranslate("pagesvues_titre"), "0", "", "L", 0, $linkP3);
				$pdf->Ln();
				$linkP4 = $pdf->AddLink();
				$pdf->SetX(50);
				$pdf->Cell(80, PDF_DEFAULT_ROW_HEIGHT, $pdf->pmvTranslate("suivi_titre"), "0", "", "L", 0, $linkP4);
				$pdf->Ln();
				$linkP5 = $pdf->AddLink();
				$pdf->SetX(50);
				$pdf->Cell(80, PDF_DEFAULT_ROW_HEIGHT, $pdf->pmvTranslate("provenance_titre"), "0", "", "L", 0, $linkP5);
				$pdf->Ln();
				$linkP6 = $pdf->AddLink();
				$pdf->SetX(50);
				$pdf->Cell(80, PDF_DEFAULT_ROW_HEIGHT, $pdf->pmvTranslate("configurations_titre"), "0", "", "L", 0, $linkP6);
				$pdf->Ln();
				$linkP7 = $pdf->AddLink();
				$pdf->SetX(50);
				$pdf->Cell(80, PDF_DEFAULT_ROW_HEIGHT, $pdf->pmvTranslate("affluents_titre"), "0", "", "L", 0, $linkP7);
				$pdf->Ln();

				// *******************************************************
				// Statistics
				// *******************************************************
				$pdf->titrePage1 = "visites_titre";
				$pdf->AddPage();
				$pdf->SetLink($linkP1);

				$pdf->setVisitsStatistics();

				$pdf->setVisitsPeriodSummaries();

				$pdf->setVisitsPeriodSummariesGraph();

				$pdf->setVisitsAllPeriodSummaryGraph();

				$pdf->setVisitsTimeVisitsGraph();

				$pdf->setVisitsServerTimeGraph();

				$pdf->setVisitsLocalTimeGraph();

				// *******************************************************
				// Frequency
				// *******************************************************
				$pdf->titrePage1 = "frequence_titre";
				$pdf->AddPage();
				$pdf->SetLink($linkP2);

				$pdf->setFrequencyStatistics();

				$pdf->setFrequencyNewReturnVisits();

				$pdf->setFrequencyGraphNewReturnVisits();

				$pdf->setFrequencyGraphNbVisitsPerVisitor();

				// *******************************************************
				//  Pages views Information
				// *******************************************************
				$pdf->titrePage1 = "pagesvues_titre";
				$pdf->AddPage();
				$pdf->SetLink($linkP3);

				$pdf->setPagesZoomTab1();

				$pdf->setPagesZoomTab2($viewAllDetail);

				$pdf->setPagesZoomTpsParPage($viewAllDetail);

				$pdf->setPagesByVisitGraph();

				// *******************************************************
				// Visitor movement
				// *******************************************************
				$pdf->titrePage1 = "suivi_titre";
				$pdf->AddPage();
				$pdf->SetLink($linkP4);

				// Get data
				$pdf->setFollowUpEntryPages($viewAllDetail);

				$pdf->setFollowUpExitPages($viewAllDetail);

				$pdf->setFollowUpSinglePages($viewAllDetail);

				// *******************************************************
				//  Provenance
				// *******************************************************
				$pdf->titrePage1 = "provenance_titre";
				$pdf->AddPage();
				$pdf->SetLink($linkP5);

				$pdf->setWorldMap();

				// setDisplayDataArray ($id, $headline, $data, $text)
				//{pmv_data_array	data=$continentcountries id=continent template="common/display_data_array.tpl"

				$pdf->setSourceCountry($viewAllDetail);

				$pdf->setSourceProviders($viewAllDetail);

				// *******************************************************
				// Settings
				// *******************************************************
				$pdf->titrePage1 = "configurations_titre";
				$pdf->AddPage();
				$pdf->SetLink($linkP6);

				$pdf->setSettingsConfig($viewAllDetail);

				$pdf->setSettingsOs($viewAllDetail);

				$pdf->setSettingsBrowsersType();

				$pdf->setSettingsBrowsersInterest($viewAllDetail);

				$pdf->setSettingsPlugins();

				$pdf->setSettingsResolutionsInterest($viewAllDetail);

				$pdf->setSettingsNormalWidescreen();

				// *******************************************************
				// Referers
				// *******************************************************
				$pdf->titrePage1 = "affluents_titre";
				$pdf->AddPage();
				$pdf->SetLink($linkP7);

				$pdf->setReferersTypeInterest();

				$pdf->setReferersSearchEnginesInterest($viewAllDetail);

				$pdf->setReferersKeywordsInterest($viewAllDetail);

				$pdf->setReferersSitesInterest($viewAllDetail);

				$pdf->setReferersPartnersInterest($viewAllDetail);

				$pdf->setReferersNewslettersInterest($viewAllDetail);
				
				$pdf->setReferersDirect ();
			}
		}
		$pdf->Ln(15);
		$pdf->SetFont($pdf->phpmvFont, "I", 6);
		$pdf->SetTextColor(128);
		$twtTime = sprintf($pdf->pmvTranslate("generique_timefooter"), getTimeElapsed());
		$w = $pdf->GetStringWidth($twtTime) + 6;
		$pdf->SetX((210 - $w) / 2);
		$pdf->Write(3, $twtTime);
		// *******************************************************
		// Output PDF
		// *******************************************************
		$pdf->Output("stats-site$idSite.pdf", "D");

	}
}
?>