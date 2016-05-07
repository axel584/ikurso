<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: functions.php 102 2006-10-01 16:28:30Z matthieu_ $


function setIncludePath()
{
	$path = array(
					'.',
					'./',
					'./libs/',
					'/usr/lib/php/',
					@realpath(@dirname('__FILE__')),
					'libs',
					@get_include_path(),
		);

	$patht = implode( PATH_SEPARATOR, $path);
	
	if(!set_include_path( $patht ))
	{
		//print("The function 'set_include_path' must be allowed!");
	}
}
function setMemoryLimit()
{
	$valueInit = getMemoryValue();
	if( ($valueInit === false
		|| $valueInit < MEMORY_LIMIT )
		&& @ini_set('memory_limit', MEMORY_LIMIT.'M'))
	{
		return true;
	}
	return false;
}

function rmrdir( $dir )
{
	if(is_dir($dir))
	{
		$handle = @opendir($dir);
		if($handle)
		{
			for(;(false !== ($readdir = @readdir($handle)));)
			{		
				$path = $dir.'/'.$readdir;
				if(is_dir($path)) 
					$output[$readdir] = rmrdir($path);
				
				if(is_file($path)) 
				{
					unlink($path);
				}
			}
			closedir($handle);
		}
	}
}

function getMysqlVersion()
{
    $r = query('SELECT version()');
	if($r)
	{
		$l = mysql_fetch_row($r);
		return $l[0];
	}
	return false;
}

function getMemoryValue()
{
	if($memory = ini_get('memory_limit'))
	{
		return substr($memory, 0, strlen($memory) - 1);
	}
	return false;
}
function getSystemInformation( &$tpl )
{
	$infos = array();
	
	// directory to write
	$infos['dirs'] = checkDirWritable( );
	
	// php version
	$infos['php_version'] = phpversion();
	$infos['php_ok'] = version_compare( PHP_VERSION_NEEDED, $infos['php_version']) === -1;
	
	$extensions = @get_loaded_extensions();
	
	// Gd version
	if (in_array('gd', $extensions)) 
	{
	    $gdInfo = gd_info();
	
		$infos['gd_version'] = $gdInfo['GD Version'];
		
	    ereg ("([0-9]{1})", $gdInfo['GD Version'], $gdVersion);
	    ($gdVersion[0] >= 2) 
					? $infos['gd_ok'] = true 
					: $infos['gd_ok'] = false;
	
	    // Freetype
	    ($gdInfo['FreeType Support'] === true && function_exists('imagettfbbox')) 
					? $infos['freetype_ok'] = true 
					: $infos['freetype_ok'] = false;
	}
	
	// Mysql + version
	if (in_array('mysql', $extensions))  
	{
	    $infos['mysql_ok'] = true;
		$infos['mysql_version'] = getMysqlVersion();
	}
	
	// server version
	$infos['server_version'] = addslashes($_SERVER['SERVER_SOFTWARE']);

	// server os (linux)
	$infos['server_os'] = @php_uname();
	
	// servert time
	$infos['server_time'] = date('H:i:s');
	
	/*
	//Tous ce qui est relatif a XML
	if (in_array('xml', $extensions) 
		&& function_exists('utf8_decode') 
		&& function_exists('utf8_encode') )
	{
		$infos['xml_ok'] = true;
	}
	*/
	
	if(function_exists( 'set_time_limit'))
	{
		$infos['set_time_limit_ok'] = true;
	}

	if(function_exists( 'utf8_encode') && function_exists( 'utf8_decode'))
	{
		$infos['php_xml'] = true;
	}
	
	if(function_exists('mail'))
	{
		$infos['mail_ok'] = true;
	}
	
	//Registre global
	$infos['register_globals'] = ini_get('register_globals') != 0;
	
	if(	$memoryValue = getMemoryValue() )
	{
		$infos['memory'] = $memoryValue."M";
		if( $memoryValue < MEMORY_LIMIT)
		{
			$tpl->assign("memory_limit", 
					"PHP's memory_limit is ".$infos['memory'].". If this is too low, phpMyVisites may not work correctly on high traffic websites! Attempting to raise limit to ". MEMORY_LIMIT ."M..."
					);
			if( setMemoryLimit() )
			{
				$tpl->assign("memory_limit_ok",
					"Memory set to ".MEMORY_LIMIT."M!");
				$infos['memory_ok'] = true;
			}
			else
			{
				
				$tpl->assign("memory_limit",
					"Failed to set memory_limit to 20M. If phpMyVisites doesn't work correctly, try to raise this limit to at least 20M, look in the php.ini file or ask your server administrator."
					);
			}
			
			$infos['memory'] =  @ini_get('memory_limit');
		}
		else
		{
			$infos['memory_ok'] = true;
		}
	}
			
	// server uptime from mysql uptime
	$res = query('SHOW STATUS');
	if($res)
	{
		while ($row = mysql_fetch_array($res)) 
		{
		   $serverStatus[$row[0]] = $row[1];
		}

		$infos['server_uptime'] = date("r",time() - $serverStatus['Uptime']); 		
	}
	
	return $infos;
}

function checkDirWritable()
{
	$dir = array(
		'/config',
		'/datas',
		'/datas/archives',
		'/datas/cache_artichow',
		'/datas/cache_lite',
		'/datas/cache_smarty',
		'/datas/tpl_compiled',
	); 
	
	$dirProb = array();
	
	foreach($dir as $name)
	{
		$u = INCLUDE_PATH . $name;
		
		$dir2[$name] = false;
		
		if(!is_writable($u))
		{			
			if(!is_dir($u) 
				&& function_exists('mkdir')
				)
			{
				mkdir($u, 0755);
				
				if($name == '/config')
				{
					saveFile( $u . "/.htaccess", "Deny from all");
				}
			}
			
			if(function_exists('chmod'))
			{
				chmod( $u, 0755);
			}
		}
		
		if(is_writable($u))
		{
			$dir2[$name] = true;
		}
		else
		{
			$dirProb[] = $name;
		}
	}
	
	if(sizeof($dirProb) !== 0)
	{
		$strError = "<ul>";
		foreach($dirProb as $dir)
		{
			$strError .= "<li>$dir</li>";
		}
		$strError .= "<li>Try to chmod the phpMyVisites root directory also</li></ul>";
		
		printf($GLOBALS['lang']['install_DirectoriesWriteError'], 
				"<font color=\"red\"><b>$strError</b></font>");
		exit;
	}	
	

	return $dir2;
}

function getJavascriptCode( $i_site)
{
	return nl2br(
				str_replace(array('[b]', '[/b]'), 
							array('<b>', '</b>'),
							str_replace( array('<', '>'), 
										array('&lt;', '&gt;'), 
										'<!-- phpmyvisites -->
				<a href="http://www.phpmyvisites.net/" title="'.
				addslashes( $GLOBALS['lang']['logo_description'] ).'" 
				onclick="window.open(this.href);return(false);"><script type="text/javascript">
				<!--
				var a_vars = Array();
				var pagename=\'\';
				
				var phpmyvisitesSite = [b]'.$i_site.'[/b];
				var phpmyvisitesURL = [b]"'.PHPMV_URL.'/phpmyvisites.php"[/b];
				//-->
				</script>
				<script language="javascript" src=[b]"'.PHPMV_URL.'/phpmyvisites.js"[/b] type="text/javascript"></script>
				<noscript><p>'.addslashes( $GLOBALS['lang']['logo_description'] ).'
				<img src=[b]"'.PHPMV_URL.'/phpmyvisites.php"[/b] alt="Statistics" style="border:0" />
				</p></noscript></a>
				<!-- /phpmyvisites --> 
				')));
}


function getDisplayLogosListing()
{
	$toDisplay = "<h3>".$GLOBALS['lang']['install_popup_logo']."</h3>";
	$toDisplay .= "<form method=\"post\" action=\"#\">
		<table cellpadding=\"5\" align=\"center\" valign=\"center\" cellspacing=\"0\" border=\"0\">";
	
	$dir = DIR_IMG_LOGOS;
	// on parcourt $dir et on stocke les noms dans le tableau $list_logos
	if ($handle = opendir($dir)) 
	{
	   while (false !== ($file = readdir($handle))) 
	   {
	       if ($file != "." && $file != ".." && !is_dir($file) && $file != "index.php" && @$file[strlen($file)-4]  == '.' ) {
				$list_logos[]=$file;
	       }
	   }
	   closedir($handle);
	   
	   // logos à afficher en préférence, par ordre d'affichage
	   $list_logos_prio = array(
	   
	   '37.png',
	   '40.png',
	   '41.png',
	   '50.png',
	   '49.png',
	   '48.png',
	   '47.png',
	   '46.png',
	   '45.gif',
	   '44.gif',
	   '51.png',
	   '28.png',
	   '4.png',
	   '5.png',
	   '6.png',
	   '7.png',
	   '3.png',
	   '8.png',
	   '9.png',
	   '32.png',
	   '43.png',
	   '1.png'
	   );
	   
	   // on recrée le tableau des logos $list_logos en prenant en comptes les logos prioritaires
	   $i=0;
	   foreach($list_logos as $key => $file)
	   {
			$j=0;
			$trouve=false;
			while(!$trouve && $j != sizeof($list_logos_prio))
			{
				if($list_logos_prio[$j] == $file)
				{
					$trouve = true;
					$cle_prio = $j;
					
					// inversion prio <-> autre
					if( isset( $list_logos[$cle_prio] )) // due to bug in forum http://www.phpmyvisites.net/forums/index.php/t/2543/4/
					{
						$list_logos[$key] = $list_logos[$cle_prio];
						$list_logos[$cle_prio] = $file;
					}
				}
				$j++;
			}
	   }
	   // logos par colonne
	   $logo_per_line = 3;
	   
	   $i=0;
	   // on affiche le tableau avec $logo_per_line logos par ligne
	   foreach($list_logos as $key => $file)
	   {
		   	$i++;
	   		
			if(($i-1) % $logo_per_line == 0) $toDisplay .= "<tr>";
			$toDisplay .= "<td align=center>";
			$toDisplay .= 
			'<input type="image" onclick="
			window.opener.document.forms[\'form_phpmv\'].form_logo_no.value=\''.$file.'\';
			window.opener.document.images[\'logo_phpmv\'].src=\''.$dir.'/'.$file.'\';window.close();" 
			name="logo_num" value="'.$file.'" src="'.$dir.'/'.$file.'" />';
			$toDisplay .= "</td>";
			if($i % $logo_per_line == 0) $toDisplay .= "</tr>\n";
	   }
	}
	
	$toDisplay .= "
	</table>
	</form>
	</div>
	</body>
	</html>
	";
	
	return $toDisplay;
}
/**
 *  QF rules
 */
function checkCorrectIp( $element, $value )
{
	return long2ip(ip2long($value)) === $value;
}

function compareField($element, $value, $arg) 
{
	$value2 = getRequestVar( $arg, '', 'string');
	if ($value === $value2) 
	{
		return true;
	} 
	else 
	{
		return false;
	}
}
function checkPasswordComplexity( $element, $value)
{
	$isNumeric=false;
	
	$l = strlen($value);
	if( $l < 6)
	{
		return false;
	}
	
	for($i = 0; $i < $l ; $i++)
	{
		if(is_numeric($value[$i]))
			$isNumeric=true;
	}
	
	if($isNumeric)
		return true;
	else
		return false;
}
function checkCorrectUrl( $element, $value)
{
	if($value[strlen($value)-1]=='/' || !ereg('^http[s]?://[A-Za-z0-9\/_.-]', $value))
		return false;
		
	return true;
}	
/**
 *  end QF rules
 */

function getTemplateArrayMonth($o_minDay, $o_request)
{
	$dateAsked = new Date($o_request->getDate());
	$todayDate = getDateFromTimestamp(time());

	if($o_request->getPeriod() == DB_ARCHIVES_PERIOD_YEAR)
	{
		$minYear = $o_minDay->getYear();
		while($minYear <= date("Y"))
		{
			$return[$minYear."-07-14"] = $minYear++; // french 14 juillet ! :)
		}
		$selected = $dateAsked->getYear()."-07-14";
	}
	else
	{
		$a_months = getDayOfMonthBetween($o_minDay->get(), $todayDate);
		
		$selected = $todayDate;
		foreach($a_months as $date)
		{
			$o_date = new Date($date);
			
			if($o_date->getMonth() == $dateAsked->getMonth() 
			&& $o_date->getYear() == $dateAsked->getYear())
			{
				$selected = $date;
			}
			$return[$date] = getDateDisplay(5, $o_date);
		}
	}
	
	return array(	
		$return,
		$selected
		);
}

/**
 * returns an array containing all day each of them belonging to a unique month, 
 * between the 2 dates
 * 
 * @param string $s_date1 min
 * @param string $s_date2 max
 * 
 * @return array
 */
function getDayOfMonthBetween($s_date1, $s_date2)
{
	$date1 = new Date($s_date1);
	$date2 = new Date($s_date2);
	
	$ts1 = $date1->getTimestamp();
	$ts2 = $date2->getTimestamp();
	
	while(date("m", $ts1) != date("m", $ts2) 
		|| date("Y", $ts1) != date("Y", $ts2))
	{
		$return[] = getDateFromTimestamp($ts1);
		$ts1 = mktime(23, 59, 59, date("m", $ts1) + 1, 15, date("Y", $ts1));
	}
	
	$return[] = getDateFromTimestamp($ts1);

	return $return;
}

function getTemplateArrayCalendar($o_minDay, $s_date, $period)
{	
	// today
	$today = new Date(getDateFromTimestamp(time()));
	$tsToday = $today->getTimestamp();
	
	// date asked for statistics
	$dateAsked = new Date($s_date);
	
	// used for going througt the month
	$date = new Date($s_date);
	$month = $date->getMonth();
	$year = $date->getYear();
	$prefixDay = $year."-".$month."-";
	
	$date->setDate($prefixDay.'01');
	$week = $date->getWeek();
	$day = 1;
	$ts = $date->getTimestamp();
	
	while($date->getMonth() == $month)
	{		
		// day exists in stats, isn't it too old or in the future ?
		if($date->getTimestamp() >= $o_minDay->getTimestamp()
			&& $date->getTimestamp() <= $tsToday)
		{
			$exists = 1;
		}
		else
		{
			$exists = 0;
		}
		
		// day selected for stats view ?
		if( ($period == DB_ARCHIVES_PERIOD_DAY && $date->getDay() == $dateAsked->getDay())
		|| ($period == DB_ARCHIVES_PERIOD_WEEK && $date->getWeek() == $dateAsked->getWeek())
		|| ($period == DB_ARCHIVES_PERIOD_MONTH)
		|| ($period == DB_ARCHIVES_PERIOD_YEAR)
		)
		{
			$selected = 1;
		}
		else
		{
			$selected = 0;
		}
		
		$weekNo = $date->getWeek() - $week;
		if ( defined('MONDAY_FIRST') && MONDAY_FIRST == 'no' && (date("w", $ts) == 0)) 
		{
			$weekNo += 1;
		}

		$dayOfWeek = (int)(!defined('MONDAY_FIRST') || MONDAY_FIRST == 'yes' ? ((date("w", $ts) == 0) 
												? 6 
												: date("w", $ts) - 1
											) 
										: date("w", $ts)
									);
		$return[$weekNo][$dayOfWeek] = array(
										'day' => (substr($date->getDay(),0,1) === '0') ? 
																substr($date->getDay(),1,2) :
																	$date->getDay(),
										'date' => $date->get(),
										'exists' => $exists,
										'selected' => $selected
										);
		
		$date->addDays(1);
		
		//these 2 lines useless? to check 
		$ts=$date->getTimeStamp();
		$date->setTimestamp( $ts );
		
	}
	
	foreach($return as $key => $r)
	{
		$row =& $return[$key];
		for($i = 0; $i < 7; $i++)
		{
			if(!isset($row[$i]))
			{
				$row[$i] = "-";
			}
		}
		ksort($row);		
	}	
	return $return;
		
}

/**
 * dump a var and exit...
 */
function dump_exit($var, $dump = false)
{
 echo '<pre>';
 if ($dump)
  var_dump($var);
 else 
  print_r($var);
 echo "</pre>";
 exit;
}

function varToString(&$var)
{
	ob_start();
	print("<pre>");
	var_export($var);
	print("</pre>");
	$var_export = ob_get_contents();
	ob_clean();
	return $var_export;
}

function camelize($string)
{
 $arrString = explode('_', $string);
 $ret = '';
 foreach ($arrString as $terme)
  $ret .= ucfirst($terme);
  
 return $ret;
}


function getFirstDayOfWeek($o_date)
{
	return getDateFromTimestamp(
				mktime(
						0,
						0,
						0, 
						$o_date->getMonth(), 
						$o_date->getDay() - ($o_date->getWeekDayNumber() + 6 ) % 7,
						$o_date->getYear()
						)
					);
}

function sortingDataInfo($a1,$a2)
{
	@$elt1 = $a1[$GLOBALS['sorting_index']];
	@$elt2 = $a2[$GLOBALS['sorting_index']];
	
	if($GLOBALS['sorting_order'] === 'asc')
	{
		return ($elt1 < $elt2) ? -1 : 1;
	}
	else
	{
		return ($elt1 > $elt2) ? -1 : 1;
	}
}

/**
 * returns the literal date 
 * Ex : if period = DB_ARCHIVES_PERIOD_WEEK and $s_date = "2006-08-14"
 * Returned string will be "Week August 14 To August 20 2006"
 * 
 * @param int period 
 * @param string s_date 
 */
function getLiteralDate($period, $s_date)
{
	
	switch($period) 
	{
		case DB_ARCHIVES_PERIOD_DAY:
			return getDateDisplay(1, new Date($s_date));
		break;
		
		case DB_ARCHIVES_PERIOD_WEEK:
				
		case DB_ARCHIVES_PERIOD_WEEK:
			$date = new Date($s_date);
			$mon = getFirstDayOfWeek($date);
			$sun = getDateFromTimestamp( mktime( 0, 0, 0, $date->getMonth(), $date->getDay() - ($date->getWeekDayNumber() + 6) % 7 + 6, $date->getYear()));
			return getDateDisplay(3, new Date($mon), new Date($sun));
		
		break;
		
		case DB_ARCHIVES_PERIOD_MONTH:
			return getDateDisplay(4, new Date($s_date));
		break;
		
		case DB_ARCHIVES_PERIOD_YEAR:			
			return getDateDisplay(11, new Date($s_date));
		break;
		
		default:
			trigger_error("Period unknown !", E_USER_ERROR);
		break;
	}
	return;
}

/**
 * 
 * @param int $type suffix of TDATE type found in language file, looks like "%monthshort% %yearshort%"
 * @param object $date1
 * @param object $date2
 * 
 * @return string date formated
 */
function getDateDisplay($type, $date1,  $date2 = null)
{
	$return = $GLOBALS['lang']['tdate'.$type];
	
	$return = @str_replace('%daylong%', 
				$GLOBALS['lang']['jsemaine'][date("D", $date1->getTimestamp())], $return);
	$return = @str_replace('%monthlong%', $GLOBALS['lang']['moistab'][$date1->getMonth()], $return);

	$return = @str_replace('%dayshort%', $GLOBALS['lang']['jsemaine_graph'][date("D",$date1->getTimestamp())], $return);
	$return = @str_replace('%monthshort%', $GLOBALS['lang']['moistab_graph'][$date1->getMonth()], $return);
	$return = @str_replace('%yearshort%', substr($date1->getYear(), 2,2), $return);

	$return = str_replace('%daynumeric%', $date1->getDay(), $return);
	
	// when we display week label, the year is associated to the more recent date
	if($type == 3)
	{
		$return = str_replace('%yearlong%', $date2->getYear(), $return);
	}
	else
	{
		$return = str_replace('%yearlong%', $date1->getYear(), $return);
	}
	
	if (isset($date2))
	{
		$return = str_replace('%daynumeric2%', $date2->getDay(), $return);
		$return = str_replace('%monthlong2%', $GLOBALS['lang']['moistab'][$date2->getMonth()], $return);
	}
	$return = str_replace('%monthnumeric%', $date1->getMonth(), $return);
	
	return $return;
}

/**
 * saves a configuration file, containing php readable variable value
 * 
 * @param string $fileAdress
 * @param all $variable
 */
function saveConfigFile($fileAdress, $variable, $name)
{
		ob_start();
		print("\n\$".$name." = ");
		var_export($variable);
		print(";\n");
		$var_export = ob_get_contents();
		ob_clean();
		
		saveFile( $fileAdress, "<?php ".$var_export."?>");
}

function saveFile( $fileAdress, $content )
{
	$file = @fopen($fileAdress, "w");
	if($file)
	{
		if(!fwrite($file, $content))
		{
			print("Can't write file $fileAdress please chmod this file (create if it doesn't exist).");
			exit;
		}
		else
		{
			fclose($file); 
		}
	}
}
function getCountImgHtml( $url, $name )
{
	return "<img src='http://www.phpmyvisites.net/count.php?version=".PHPMV_VERSION."&phpmv_url=".PHPMV_URL."&site_url=".$url."&site_name=".$name."&mail=".SU_EMAIL."'/>";
}

/**
 * Returns time elapsed in seconds since the beginning of the execution
 */
function getTimeElapsed()
{
	$res = getMicrotime()-$GLOBALS['time_start'];
	$res = substr($res, 0, 4);
	return $res;
}
/**
 * display time since the beginning of the script
 */
function printTime($detail = '', $force = false)
{
	if(PRINT_TIME || !empty($force))
	{
		//Message à passer en variable dans le template footer.tpl
		if($detail == 'EOF') print('<font color="white" size="2">');
		else print("<br><b>$detail</b>");
		
		print(" Time : <b>".getTimeElapsed()."</b> sec");
		if($detail == 'EOF') print('</font>');	
	}
}

/**
 * display number of queries since the beginning of the script
 */
function printQueryCount()
{
	if(PRINT_QUERY_COUNT)
	{
		print("<br>Queries: <b>".$GLOBALS['query_count']."</b>");
	}
}

function getArrayOffsetLimit(&$a, $offset, $limit, $name='', $indexUsed = null, $allInfo=null)
{
	//global $o_request;
	$o_request =& Request::getInstance();
	
	$return = array();
	if(is_array($a))
	{
		if($limit == -1)
		{
			$limit = sizeof($a);
		}
		
		$dataLimited = 0;
		$dataLimitedPercent = 0;
		
		if(!is_null($allInfo))
		{
			if(substr($name, 0, 4) === 'int_')
			{
				if($name == 'int_keyword')
				{
					$name = 'a_keyword_sort';
				}
				else if($name == 'int_search_engine')
				{
					 $name = 'a_searchengine_sort';
				}
				else if($name == 'int_site')
				{
					 $name = 'a_site_sort';
				}
				else if($name == 'int_partner')
				{
					 $name = 'a_partner_sort';
				}
				else if($name == 'int_newsletter')
				{
					 $name = 'a_newsletter_sort';
				}
				else
				{
					$name = 'a_int_sort';
				}
			}
			
			if( $name == 'a_int_sort'
				|| $name == 'a_pag_sort'
				|| $name == 'a_entry_sort'
				|| $name == 'a_exit_sort'
				|| $name == 'a_singlepage_sort'
				|| $name == 'a_sumtime_sort'
				|| $name == 'a_keyword_sort'
				|| $name == 'a_searchengine_sort'
				|| $name == 'a_site_sort'
				|| $name == 'a_partner_sort'
				|| $name == 'a_newsletter_sort'
	
				)
			{
				$sorted = $o_request->getArrayInfoSort($allInfo);
				$sort = $sorted[$o_request->sorting_percent_limit_and_population_index[$name][1]];
				$GLOBALS['sorting_index'] = $sort[1];
				$GLOBALS['sorting_order'] = $sort[2];
				$dataLimited = $sort[5];
				$dataLimitedPercent = $sort[6];
				
				// printTime('before sort', true);
				uasort($a, "sortingDataInfo");

				// printTime('after sort',true);
				// case undefined (keyword because of very automatic fucking call)
				if(is_null($indexUsed)) $indexUsed = 'sum';
			}
		}
		//print($indexUsed);
		//printTime('after sort compute');
		$i = 0;	
		foreach($a as $key => $value)
		{
			//printDebug($value[$indexUsed] . ", ");
			if( is_null($indexUsed)
				|| ($value[$indexUsed] > $dataLimitedPercent * $dataLimited / 100 / 100)
			)
			{
				//print("i:$i off:$offset lim:$limit <br>");
				if($i >= $offset + $limit) 
				{
					continue;
				}
				if($i >= $offset)
				{
					$return[$key] = $value;
				}
				
				$i++;
			}
		}
	}
	return $return;
}

/**
 * returns a formated time HH:MM:SS
 * 
 * @param int $time timestamp second since midnight today
 * 
 * @return string time at format HH:MM:SS
 */
function getTimeForDisplay($time)
{
	$h = floor($time / 3600);
	$m = floor(( $time % 3600 ) / 60);
	$s = $time - $h * 3600 - $m * 60;
	return $h.':'.$m.':'.$s;
}

?>