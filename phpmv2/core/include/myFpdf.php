<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: pmvfpdf.php,v 0.5 2006/08/15 10:01:22 cmil_ Exp $
require (INCLUDE_PATH."/libs/fpdf/fpdf.php");

// Extend fpdf fonctionality (type image pngpmv with is content)
class myFPDF extends FPDF {

	var $pmvPos = 0;

	// Same in fpdf with a parameter $fileContent
	function Image($file, $x, $y, $w = 0, $h = 0, $type = '', $link = '', $fileContent = '') {
			//Put an image on the page
				if (!isset ($this->images[$file])) {
			//First use of image, get info
			if ($type == '') {
				$pos = strrpos($file, '.');
				if (!$pos)
					$this->Error('Image file has no extension and no type was specified: '.$file);
				$type = substr($file, $pos +1);
			}
			$type = strtolower($type);
			$mqr = get_magic_quotes_runtime();
			set_magic_quotes_runtime(0);
			if ($type == 'jpg' || $type == 'jpeg')
				$info = $this->_parsejpg($file);
			elseif ($type == 'png') $info = $this->_parsepng($file);
			else {
				//Allow for additional formats
				$mtd = '_parse'.$type;
				if (!method_exists($this, $mtd))
					$this->Error('Unsupported image type: '.$type);
				// Send new parameter
				$info = $this-> $mtd ($file, $fileContent);
			}
			set_magic_quotes_runtime($mqr);
			$info['i'] = count($this->images) + 1;
			$this->images[$file] = $info;
		} else
			$info = $this->images[$file];
		//Automatic width and height calculation if needed
		if ($w == 0 && $h == 0) {
			//Put image at 72 dpi
			$w = $info['w'] / $this->k;
			$h = $info['h'] / $this->k;
		}
		if ($w == 0)
			$w = $h * $info['w'] / $info['h'];
		if ($h == 0)
			$h = $w * $info['h'] / $info['w'];
		$this->_out(sprintf('q %.2f 0 0 %.2f %.2f %.2f cm /I%d Do Q', $w * $this->k, $h * $this->k, $x * $this->k, ($this->h - ($y + $h)) * $this->k, $info['i']));
		if ($link)
			$this->Link($x, $y, $w, $h, $link);
	}

	// function like fread with a string (not a file)
	function mfread($str, $lg) {
		$ret = substr($str, $this->pmvPos, $lg);
		$this->pmvPos += $lg;
		return $ret;
	}
	// Same as _freadint with a string (not a file)
	function m_freadint($f) {
		//Read a 4-byte integer from file
		$a = unpack('Ni', $this->mfread($f, 4));
		return $a['i'];
	}
	
	// Parse png from a string $fileContent
	// write from _parsepng of fpdf
	function _parsepngpmv($fileName, $fileContent) {
		// Reset read position
		$this->pmvPos = 0;
		//Extract info from a PNG file
		$f = $fileContent;
		// 	$f=fopen($file,'rb');
		// 	if(!$f)
		if ($f == null)
			$this->Error('Can\'t open image file: '.$fileName);

		//Check signature
		if ($this->mfread($f, 8) != chr(137).'PNG'.chr(13).chr(10).chr(26).chr(10)) {
			$this->Error('Not a PNG file: '.$fileName);
		}
		//Read header chunk
		$this->mfread($f, 4);
		if ($this->mfread($f, 4) != 'IHDR') {
			$this->Error('Incorrect PNG file: '.$fileName);
		}
		$w = $this->m_freadint($f);
		$h = $this->m_freadint($f);
		$bpc = ord($this->mfread($f, 1));
		if ($bpc > 8) {
			$this->Error('16-bit depth not supported: '.$fileName);
		}
		$ct = ord($this->mfread($f, 1));
		if ($ct == 0)
			$colspace = 'DeviceGray';
		elseif ($ct == 2) $colspace = 'DeviceRGB';
		elseif ($ct == 3) $colspace = 'Indexed';
		else
			$this->Error('Alpha channel not supported: '.$fileName);
		if (ord($this->mfread($f, 1)) != 0)
			$this->Error('Unknown compression method: '.$fileName);
		if (ord($this->mfread($f, 1)) != 0)
			$this->Error('Unknown filter method: '.$fileName);
		if (ord($this->mfread($f, 1)) != 0)
			$this->Error('Interlacing not supported: '.$fileName);
		$this->mfread($f, 4);
		$parms = '/DecodeParms <</Predictor 15 /Colors '. ($ct == 2 ? 3 : 1).' /BitsPerComponent '.$bpc.' /Columns '.$w.'>>';
		//Scan chunks looking for palette, transparency and image data
		$pal = '';
		$trns = '';
		$data = '';
		do {
			$n = $this->m_freadint($f);
			$type = $this->mfread($f, 4);
			if ($type == 'PLTE') {
				//Read palette
				$pal = $this->mfread($f, $n);
				$this->mfread($f, 4);
			}
			elseif ($type == 'tRNS') {
				//Read transparency info
				$t = $this->mfread($f, $n);
				if ($ct == 0)
					$trns = array (ord(substr($t, 1, 1)));
				elseif ($ct == 2) $trns = array (ord(substr($t, 1, 1)), ord(substr($t, 3, 1)), ord(substr($t, 5, 1)));
				else {
					$pos = strpos($t, chr(0));
					if ($pos !== false)
						$trns = array ($pos);
				}
				$this->mfread($f, 4);
			}
			elseif ($type == 'IDAT') {
				//Read image data block
				$data .= $this->mfread($f, $n);
				$this->mfread($f, 4);
			}
			elseif ($type == 'IEND') break;
			else
				$this->mfread($f, $n +4);
		} while ($n);
		if ($colspace == 'Indexed' && empty ($pal))
			$this->Error('Missing palette in '.$fileName);
		//	fclose($f);
		return array ('w' => $w, 'h' => $h, 'cs' => $colspace, 'bpc' => $bpc, 'f' => 'FlateDecode', 'parms' => $parms, 'pal' => $pal, 'trns' => $trns, 'data' => $data);
	}

}
?>