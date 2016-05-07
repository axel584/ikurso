<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: Archive.functions.php 107 2006-10-02 09:40:54Z matthieu_ $



/**
 * Sums values in the pages/groups/files two arrays of N dimensions that can be very different
 * 
 * @param array $a1
 * @param array $a2
 * 
 * @return array
 */
function getPagGrpArrayMultiDimSum($a1, $a2)
{
	if(!empty($a2) && is_array($a2))
	{
		foreach($a2 as $key=>$value)
		{
			if(!isset($a1[$key]))
			{
				$a1[$key] = $value;
			}
			else
			{
				if(substr($key, 0, 1) === 'c')
				{
					$a1[$key] = getPagGrpArrayMultiDimSum($value, $a1[$key]);
				}
				else
				{
					$a1[$key] =  sumArray($value, $a1[$key], true);
				}
			}
		}
	}
	return $a1;
}

/**
 * Sum 2 arrays
 * 
 * @param array $a1
 * @param array $a2
 * 
 * @return array
 */
function sumArray($a1, $a2, $specialCasePageExcludeSum = false)
{
	return getArrayOneDimVeryVeryVerySpecialSum($a1, $a2, "sum", $specialCasePageExcludeSum);
}

/**
 * Performs a complete sum
 * 
 * @param int $a
 * @param int $b
 * 
 * @return int a+b
 */
function sum($a, $b)
{
	if(is_numeric($a) && is_numeric($b))
	{
		return $a + $b;
	}
	else
	{
		return $b;
	}
}

/**
 * Sums with a VeryVeryVery special arithmetic 
 * (!)
 * 
 * @param array $a1
 * @param array $a2
 * @param string VeryVeryVery special name of the VeryVeryVery special function to call for the sum
 * 
 * @return array The VeryVeryVery special array resulting from all the VeryVeryVery special process
 */
function getArrayOneDimVeryVeryVerySpecialSum($a1, $a2, $veryVeryVerySpecialSumOperation, $specialCasePageExcludeSum = false)
{
	if(!empty($a2) && is_array($a2))
	{
		foreach($a2 as $key=>$value)
		{
			if(
			$specialCasePageExcludeSum === false 
			||
				($key != ARRAY_INDEX_IDPAGE
				&& $key != ARRAY_INDEX_IDCATEGORY)
			)
			{
				if(!isset($a1[$key]))
				{
					$a1[$key] = $value;
				}
				else
				{
					$a1[$key] = call_user_func_array($veryVeryVerySpecialSumOperation, array($value, $a1[$key]));
				}
			}
		}
	}
	return $a1;
}

function getNumberOfDaysBetween( $s_date1, $s_date2)
{
	return sizeof(getDaysBetween($s_date1, $s_date2));
}
/**
 * returns an array containing the days between the 2 days
 * 
 * @param string $s_date1
 * @param string $s_date2
 * 
 * @return array 
 */
function getDaysBetween($s_date1, $s_date2)
{
	$date1 = new Date($s_date1);	
	$date2 = new Date($s_date2);
	
	$ts1 = $date1->getTimestamp();
	$ts2 = $date2->getTimestamp();
	
	//print("(".$date1->get()." > ".$date2->get().")");

	if($ts1 > $ts2)
	{		
		trigger_error("For the period statistic, Day 1 is AFTER Day 2 (".$date1->get()." > ".$date2->get()."). It's impossible, sorry.", E_USER_ERROR);
	}
	
	$return = array();
	while($ts1 <= $ts2)
	{
		$return[] = getDateFromTimestamp($ts1);
		
		$ts1 = mktime(23, 59, 59, date("m", $ts1), date("d", $ts1) + 1, date("Y", $ts1));
	}
	return $return;
}


/**
* returns the value of a GET parameter $param in an URL query $urlQuery
* 
* @param string $urlQuery result of parse_url()['query'] and htmlentitied (& is &amp;)
* @param string $param
* 
* @return string|bool param value (ex : keyword in google url) if found, false else
*/
function getUrlParamValue($urlQuery, $param)
{
	$refererQuery = '&amp;'.databaseEscape(trim(str_replace(array('%20'), ' ', '&amp;'.$urlQuery)));
	$word = '&amp;'.$param.'=';
	
//	print($urlQuery." param=".$param);
	
	if( $off = strpos($refererQuery, $word))
	{
		$off += strlen($word); // &amp;q=
		$str = substr($refererQuery, $off);
		$len = strpos($str, '&amp;');
		if($len === false)
		{
			$len = strlen($str);
		}
		$toReturn = substr($refererQuery, $off, $len);
		return $toReturn;
	}
	else
	{
		return false;
	}
}

/**
 * Used in the sort function for N-dimensionnal arrays
 */
function sortingAllPageInfo($a_id1,$a_id2)
{
	@$elt1 = $a_id1[ARRAY_INDEX_LEVEL];
	@$elt2 = $a_id2[ARRAY_INDEX_LEVEL];
	return ($elt1 > $elt2) ? -1 : 1;
}

function sortingInterest($a_id1,$a_id2)
{
	@$elt1 = $a_id1[0];
	@$elt2 = $a_id2[0];
	return ($elt1 > $elt2) ? -1 : 1;
}

function sortingPmv($a1,$a2)
{
	@$elt1 = $a1['pmv_sum'];
	@$elt2 = $a2['pmv_sum'];
	return ($elt1 > $elt2) ? -1 : 1;
}
?>