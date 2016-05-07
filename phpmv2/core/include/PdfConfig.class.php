<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: SitePdf.class.php 29 2006-08-18 07:35:21Z matthieu_ $



class PdfConfig
{
	var $pdfName;
	var $pdfParam;
	
	function PdfConfig($namePdf, $paramPdf) {
		$this->pdfName = $namePdf;
		$this->pdfParam = $paramPdf;
	}
}

?>
