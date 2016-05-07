<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: common.functions.php 43 2006-08-21 05:55:50Z matthieu_ $

function getFilenameExtension( $name )
{
	$posDot = strrpos( $name, ".");
	if($posDot===false)
	{
		return $name;
	}
	
	return substr( $name, $posDot + 1);
}

function U2U($szstr)
{
	$matches = array();
	preg_match_all("/%u([0-9,A-F][0-9,A-F][0-9,A-F][0-9,A-F])/i", $szstr, $matches);

	$letters = 255;

	$found = count($matches[0]);
	
	while($found && $letters--)
	{
		$ustr = $matches[0][0];
		$ustrCode = str_replace("%u", "", $ustr);
		
		$astrCode = hexdec($ustrCode);
		$astr = sprintf("&#%d", $astrCode);
		
		$szstr = str_replace($ustr, $astr, $szstr);
		
		$matches = array();
		preg_match_all("/%u([0-9,A-F][0-9,A-F][0-9,A-F][0-9,A-F])/i", $szstr,
		$matches);
		
		$found = count($matches[0]);
	}
	
	return $szstr;
}

function databaseEscape($str)
{
	return mysql_real_escape_string($str);
}


function uncompress( $data, $compressed )
{
	if($compressed == 1)
	{
		//var_dump($data);
		
		// normal case
		if( $return = gzuncompress($data) )
		{
			return $return;
		}
		// case backward compatibility for cookie between 2.1 base64encode and between 2.2
		else
		{
			return base64_decode($data);
		}
	}
	return $data;
}
function compress( $data, $compressed )
{
	if($compressed == 1)
	{
		return gzcompress($data);
	}
	return $data;
}
/**
 * returns the SQL-format date of the timestamp $ts
 * 
 * @param timestamp $ts
 * 
 * @return string date
 */
function getDateFromTimestamp($ts)
{
	return date("Y-m-d", $ts);
}


/**
 * get a variable from the $_REQUEST superglobal
 * 
 * it tests the var type and exit if the variable doesn't have default value and
 * if the type doesn't match
 * 
 * @param string $varName name of the variable
 * @param string $varDefault default value. If '', and if the type doesn't match, exit() !
 * @param string $varType variable type
 */
function getRequestVar($varName, $varDefault=null, $varType="string")
{
	$varDefault = secureVar(stripslashesPmv($varDefault));
	
	if(!isset($_REQUEST[$varName]) || empty($_REQUEST[$varName]))
	{
		if($varDefault===null)
		{
			trigger_error("Error : \$varName '$varName' doesn't have value in \$_REQUEST and doesn't have a" .
					" \$varDefault value", E_USER_ERROR);
			exit();
			return;
		}
		else
		{
			if($varType=="numeric")
			{
				 $varType="string";
			}
			settype($varDefault, $varType);
			return $varDefault;
		}
	}
	else
	{
		$content = secureVar(stripslashesPmv($_REQUEST[$varName]));
		
		if($varType == 'string')
		{
			if(is_string($content)) $ok = true;
		}			
		elseif($varType == 'numeric' || $varType == 'int' || $varType == 'float')
		{
				if(is_numeric($content)) $ok = true;
		}
		elseif($varType == 'array')
		{
				if(is_array($content)) $ok = true;
		}
		else
		{
			$ok=true;
		}
		
		if(!isset($ok))
		{
			if($varDefault===null) 
			{	
				trigger_error("Error : \$varName '$varName' doesn't have a correct type in \$_REQUEST and doesn't " .
						"have a \$varDefault value", E_USER_ERROR);
				exit();
				return;
			}
			else
			{
				if($varType=="numeric")
				{
					 $varType="string";
				}
				settype($varDefault, $varType);
				return $varDefault;
			}
		}
		else
		{
			return $content;
		}
	}
}

/**
 * print message or array in debug mode
 * 
 * @param string $message
 */
function printDebug ($message) {
	if(DEBUG)
	{
		if(!is_scalar($message))
		{
			print("<pre>");
			var_dump($message);
			print("</pre>");
		}
		else
		{
			print($message);
		}
	}
}

/**
 * log page generation performances (queries number and time)
 * 
 * @param int $idSite
 * 
 * @param bool true
 */
function recordDbQueryCount($idSite)
{
	// records query count and time to compute this page
	$res = substr(getMicrotime()-$GLOBALS['time_start'], 0, 4);
	$r = query("INSERT INTO ".T_QUERY_LOG." (idsite, query, time, date, daytime)" .
		" VALUES ('$idSite', '".$GLOBALS['query_count']."', '$res', CURRENT_DATE(), CURRENT_TIME())");
		
	return true;
}



/**
 * operation called by secureVar
 * 
 * @param int|string $var
 * 
 * @return int|string
 */
function secureVarOperation($var)
{
	if(is_array( $var ))
	{
		foreach($var as $key => $value)
		{
			if(is_array($value))
			{
				$var[$key] = secureVarOperation($value);
			}
			else
			{
				$var[$key] = htmlspecialchars(trim($value));
			}
		}
	}
	else
	{
		$var = htmlspecialchars(trim($var));
	}
	
	return databaseSecure($var);
}

function databaseSecure($var)
{
	$db =& Db::getInstance();
	if($db->isReady())
	{
		if(is_array($var))
		{
			foreach($var as $key => $value)
			{
				if(is_array($value))
				{
					$var[$key] = databaseSecure($value);
				}
				else
				{
					$var[$key] = databaseEscape($value);
				}
			}
		}
		else
		{
			$var = databaseEscape($var);
		}
	}
	return $var;
}
/**
 * secures the variable from SQL injection and from cross site scripting
 * 
 * @param int|string|array $var
 * @param int|string|array var secured 
 */
function secureVar($var)
{
	if(is_scalar($var))
	{
		return secureVarOperation($var);
	}
	else if(is_array($var))
	{
		foreach($var as $key => $value)
		{
			$var[$key] = secureVarOperation($value);
		}
		return $var;
	}
	else
	{
		return $var;
	}
}

/**
 * special stripslashes managing fucking magic_quotes
 * 
 * @param string|array $str
 * 
 * @return string|array stripslashed, or not
 */
function stripslashesPmv($str)
{
	if (get_magic_quotes_gpc())
	{
		if(is_array($str))
		{
			foreach($str as $key => $value)
			{
				$str[$key] = stripslashes($value);
			}
			return $str;
		}
		else
		{
			return stripslashes($str);
		}
	}
	else
	{
		return $str;
	}
}


/**
 * set an int or string to a precise length, completing on the left with zero (O)
 * 
 * @param all $id
 * @param int $length
 * 
 * @return string string to length $length
 */
function setToLength($id, $length)
{
	settype($id, 'string');
	$l = strlen($id);
	for($i=0;$i<$length-$l;$i++)
	{
		$id='0'.$id;
	}
	return $id;
}


/**
 * returns seconds since midnight today
 * 
 * @return int seconds since midnight today
 */
function todayTime()
{
	return date("H") * 3600 + date("i") * 60 + date("s");
}
?>