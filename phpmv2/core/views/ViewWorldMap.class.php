<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewWorldMap.class.php 95 2006-09-29 06:25:31Z cmil $

require_once INCLUDE_PATH."/core/include/ViewModule.class.php";
require_once INCLUDE_PATH."/core/datas/countryMap.php";

class ViewWorldMap extends ViewModule
{
	var $m_idDetailsCont = "";
	
	function ViewWorldMap( $o_data = null )
	{
		parent::ViewModule("source", $o_data );
	}
	

	function showAll()
	{
		$this->_initDatas();
		
		//dump_exit($this->request->getContinentZoom());
		if ($this->m_idDetailsCont != "") {
			$idDetailsContinent = $this->m_idDetailsCont;
		}
		else {
			$idDetailsContinent = $this->request->getContinentZoom();
		}
		
		if($idDetailsContinent != "")
		{
			$sumContinent = $this->getDataMethod(
					array(
						"continentcountries" => array( $idDetailsContinent ),
						),
					true
				);
			$sumContinent = $sumContinent['continentcountries'];
			$this->tpl->assign("continent_asked", $idDetailsContinent);
		}
		else
		{
			$sumWorld = $this->getDataMethod(
					array(
							"continentcountries" => array()
							),
					true
				);
			$sumWorld = $sumWorld['continentcountries'];
			//$this->tpl->assign('map',true);
		}
		
		if(isset($sumWorld))
		{
			$image = $this->_computeWorldImage($sumWorld);
		}
		else
		{
			//print("<hr>");printDebug($sumContinent);print("<hr>");
			$image = $this->_computeContinentImage($sumContinent, $idDetailsContinent, $this->urlMaps[$idDetailsContinent]);
		}

		header('Content-type: image/png');
		imagepng($image);
	}
	
	
	/*****************************************************************
	 * Private computing methods
	 */
	function _initDatas()
	{
		$this->urlScale = DIR_IMG_MAPS . "/scale.png";
		$this->urlWorldMap = DIR_IMG_MAPS . "/worldmap.png";
		
		$this->colorNb = 20;
		$this->countriesLocation = $GLOBALS['countryList'];
		$this->continentLocation = array(
			"eur" => array(296,137,279,107,278,157,287,163,234,95),
			"amn" => array(73,114,162,81,178,32,215,55),
			"ams" => array(144,225,137,199,126,196,169,341),
			"afr" => array(300,219,348,270),
			"asi" => array(425,147,504,160,478,190,481,204,470,235,511,243),
			"oce" => array(499,289,522,246,513,330,564,326),
			"generique_inconnu" => array()
		);
		
		// cartes vierges
		$this->urlMaps = array(
		'eur' => DIR_IMG_MAPS . "/europe.png",
		'afr' => DIR_IMG_MAPS . "/africa.png",
		'amn' => DIR_IMG_MAPS . "/north_america.png",
		'ams' => DIR_IMG_MAPS . "/south_and_central_america.png",
		'asi' => DIR_IMG_MAPS . "/asia.png",
		'oce' => DIR_IMG_MAPS . "/oceania.png"
		);
		
		// continents
		$this->continent = array('eur','afr','asi','oce','ams','amn');


		$this->oceansLocation = array(
				array($GLOBALS['lang']['oc_pac'], 18, 272),
				array($GLOBALS['lang']['oc_atl'], 154, 164),
				array($GLOBALS['lang']['oc_ind'], 386, 284)
			);	
		
		// Donn?s encadr?blanc labels
		$tb_bgtxt = array(
			array("-1","-1"),
			array("+1","-1"),
			array("+1","+1"),
			array("-1","+1")
		);
		
		// Coordonn?s listes pays/continent
		$this->textLegendLocation = array(
											"amn" => array(10,225),
											"ams" => array(10,120),
											"eur" => array(10,100),
											"afr" => array(10,255,115,388,16),
											"oce" => array(10,295),
											"asi" => array(100,244,475,155,11),
				);

		$this->labelsCountriesLocation = $GLOBALS['labelsCountriesLocation'];
		$fontSet = Lang::getFontName();
		
		$this->fontType = INCLUDE_PATH . "/libs/artichow/font/".$fontSet;
		$this->_initColors();
	}
	
	
	function _initColors()
	{
		$im = imagecreatefrompng( $this->urlScale);
		$size = getimagesize( $this->urlScale );
		$width=$size[0];
		$height=$size[1];
		
		$go=1;

		//print("$height et $width");
		$step=(int) (($width - $this->colorNb) / $this->colorNb);
		
		while($go < $width)
		{
			$rgb = ImageColorAt($im, $go, $height-3);
			$go += $step;
			$rgb=imagecolorsforindex($im, $rgb); // RGB
			
			$tcomposantes[] = array(
						$rgb['red'],
						$rgb['green'],
						$rgb['blue']
						);
		}
		
		$this->colorScaleInfo = $tcomposantes;
		$this->fontSize = 8;
	}
	
	
	function _computeContinentImage($sumContinent, $idContinent, $urlImage)
	{
		$image = imagecreatefrompng($urlImage);
		
		$image = $this->_colourInBorder($sumContinent, $image, false);
	
	
		// Labels Pays - 20050111
		$this->fontSize = 8;
		//$bg_color= imageColorAllocate($image, 254, 254, 254);
		$txt_color= imageColorAllocate($image, 0,0,0);
	
		$X_list = $this->textLegendLocation[$idContinent][0];
		$Y_list = $this->textLegendLocation[$idContinent][1];
		foreach( $GLOBALS['lang']['domaines'] as $iso_p => $value)
		{
			
			if(		isset($this->countriesLocation[$iso_p][0])
			     && $this->countriesLocation[$iso_p][0] == $idContinent
				 )
			{
				
				if(	isset($this->labelsCountriesLocation[$iso_p][1]) 
				&& 	is_numeric($this->labelsCountriesLocation[$iso_p][1])) 
				{
	
					$label =  trim($GLOBALS['lang']['domaines'][$iso_p]);
					$tbtmp = explode(" ",$label);
					$X = $this->labelsCountriesLocation[$iso_p][1];
					$Y =  $this->labelsCountriesLocation[$iso_p][2];
					
					// countries with several words
					if(	isset($tbtmp[0]) 
					&& isset($tbtmp[1]) 
					&& strlen($label)>8
					) 
					{
						$space = strpos($label," ");
						$long = strlen($label);
						
						$diff=imagettfbbox($this->fontSize, 0, $this->fontType, substr($label,0,$space));
						$long1 = (($diff[4] + $diff[2]) / 2) - (($diff[6] + $diff[0]) / 2);
						
						$diff=imagettfbbox($this->fontSize, 0, $this->fontType, substr($label,$space+1,$long));
						$long2 = (($diff[4] + $diff[2]) / 2) - (($diff[6] + $diff[0]) / 2);
						
						if($long1 - $long2 > 0)
						{
							$d1 = 0;
							$d2 = abs(floor(($long1 - $long2)/2));
							$max = $long1/2;
						} 
						elseif($long1 - $long2 < 0)
						{
							$d1 = abs(floor(($long1 - $long2)/2));
							$d2 = 0;
							$max = $long2/2;
						} 
						else
						{
							$d1=0;
							$d2 = 0;
							$max = $long2/2;
						}
						
						imagettftext($image, $this->fontSize, 0, $X+$d1-$max, $Y, $txt_color, $this->fontType, substr($label,0,$space));
						imagettftext($image, $this->fontSize, 0, $X+$d2-$max, $Y+$this->fontSize+4, $txt_color, $this->fontType, substr($label,$space+1,$long));
					}
					// countries in one word
					else
					{
						$diff=imagettfbbox($this->fontSize, 0, $this->fontType, $label);
						$long = (($diff[4] + $diff[2]) / 2) - (($diff[6] + $diff[0]) / 2);
						imagettftext($image, $this->fontSize, 0, $X-$long/2, $Y, $txt_color, $this->fontType, $label);
					}
				} 
				else if(	isset($this->labelsCountriesLocation[$iso_p][1]) 
						&& 	$this->labelsCountriesLocation[$iso_p][1] == "l"
						)
				{
					$tb_liste[$this->labelsCountriesLocation[$iso_p][2]] = $GLOBALS['lang']['domaines'][$iso_p];
					imagettftext($image, $this->fontSize, 0, $this->labelsCountriesLocation[$iso_p][3], $this->labelsCountriesLocation[$iso_p][4], $txt_color, $this->fontType, $this->labelsCountriesLocation[$iso_p][2]);
				}
			}
			
		}
		
		// Cr?tion de la liste des pays ?gauche
		if(isset($tb_liste) && is_array($tb_liste))
		{
			ksort($tb_liste);
			$h = 1;
			for($i=1;$i<count($tb_liste)+1;$i++)
			{
				$label =  trim($tb_liste[$i]);
				$tbtmp = explode(" ",$label);
				if(isset($this->textLegendLocation[$idContinent][2]) && isset($this->textLegendLocation[$idContinent][3]) && $i<$this->textLegendLocation[$idContinent][4]) 
				{
					$Y = $Y_list+$h*($this->fontSize+4);
					$X = $X_list;
				} elseif(isset($this->textLegendLocation[$idContinent][2]) && isset($this->textLegendLocation[$idContinent][3]) && $i>=$this->textLegendLocation[$idContinent][4]) 
				{
					if($i==$this->textLegendLocation[$idContinent][4]) $h = 1;
					$Y = $this->textLegendLocation[$idContinent][3]+$h*($this->fontSize+4);
					$X = $this->textLegendLocation[$idContinent][2];
				} else
				{
					$Y = $Y_list+$h*($this->fontSize+4);
					$X = $X_list;
				}
				
				
				if(isset($tbtmp[0]) && isset($tbtmp[1]) && strlen($tbtmp[0])>8) 
				{
					$space = strpos($label," ");
					$long = strlen($label);
					imagettftext($image, $this->fontSize, 0, $X, $Y, $txt_color, $this->fontType, $i." : ".substr($label,0,$space));
					$diff=imagettfbbox($this->fontSize, 0, $this->fontType, $i." : ");
					$long = (($diff[4] + $diff[2]) / 2) - (($diff[6] + $diff[0]) / 2);
					imagettftext($image, $this->fontSize, 0, $X+$long, $Y+$this->fontSize+4, $txt_color, $this->fontType, substr($label,$space+1,$long));
					$h += 2;
				}else
				{
					imagettftext($image, $this->fontSize, 0, $X, $Y, $txt_color, $this->fontType, $i." : ".$label);
					$h++;
				}
			}
		}
		return $image;
	}
	
	function _colourInBorder( $sum, $image, $worldMapOrContinent)
	{
		$tcomposantes = $this->colorScaleInfo;
		
		// liste des couleurs
		for($i=0;$i<sizeof($tcomposantes);$i++)
		{
			$tcouleur[] = imagecolorallocate($image, $tcomposantes[$i][0], $tcomposantes[$i][1], $tcomposantes[$i][2]);
		}
		
		$t = $this->data->getContent('nb_vis');
		
		foreach($sum as $id => $info)
		{
//			printDebug($info);exit;

			if(!empty($worldMapOrContinent))
			{
				$nom = $info['continent'];
				$allLocation = $this->continentLocation;
				$u = 0;
			}
			else
			{
				$nom = substr($info['img'], 0, strpos($info['img'], '.'));
				$allLocation = $this->countriesLocation;
				$u = 1;
			}
			$hits = $info['sum'];
			
			$couleur= (integer) (( $hits / $t ) * $this->colorNb);
			
			//print("$nom couleur : ".$hits/$t." $couleur<br>");
			
			$height = count( $allLocation[$nom]);
			//print("$nom : nb loc = $height<br>");
	
			// offset
			if ($couleur>=$this->colorNb)
			{
				$couleur=$this->colorNb;
			}
			
			// colour in each portion
			
			while ($u<$height)
			{
				//printDebug($allLocation[$nom]);
				imagefill(
						$image,
						$allLocation[$nom][$u],
						$allLocation[$nom][$u+1],
						$tcouleur[$couleur]
					);
					
				$u+=2;
			}
		}	
		return $image;
	}
	
	function _computeWorldImage($sumWorld)
	{
		$image = imagecreatefrompng( $this->urlWorldMap );
		
		$image = $this->_colourInBorder($sumWorld, $image, true);
		
		$text_color= imageColorAllocate($image,42,102,145);
		$endGo = count($this->oceansLocation);
		

		for($oc=0; $oc < $endGo; $oc++)
		{
			// Centrage des 2 lignes
			$tb_label = explode(" ",trim(strtoupper($this->oceansLocation[$oc][0])));
			
			if(isset($tb_label[0]) && isset($tb_label[1]))
			{
				$mes1=imagettfbbox($this->fontSize, 0, $this->fontType, $tb_label[0]);
				$mes2=imagettfbbox($this->fontSize, 0, $this->fontType, $tb_label[1]);
	            
				$long1 = (($mes1[4] + $mes1[2]) / 2) - (($mes1[6] + $mes1[0]) / 2);  
				$long2 = (($mes2[4] + $mes2[2]) / 2) - (($mes2[6] + $mes2[0]) / 2);  
				
				$diff = $long1 - $long2;
				$d1 = 0; $d2 = 0;
				
				if($diff>0) 
				{
					$d2 = floor(abs($diff/2));
				} 
				elseif($diff<0) 
				{
					$d1 = floor(abs($diff/2));
				}
				
				imagettftext($image, $this->fontSize, 0, $this->oceansLocation[$oc][1]+$d1, $this->oceansLocation[$oc][2], $text_color, $this->fontType, $tb_label[0]);
				imagettftext($image, $this->fontSize, 0, $this->oceansLocation[$oc][1]+$d2, $this->oceansLocation[$oc][2]+$this->fontSize+3, $text_color, $this->fontType, $tb_label[1]);
			} 
			else 
			{
				imagettftext($image, $this->fontSize, 0, $this->oceansLocation[$oc][1], $this->oceansLocation[$oc][2], $text_color, $this->fontType, trim(strtoupper($this->oceansLocation[$oc][0])));
			}
		}
		return $image;
	}
}
?>