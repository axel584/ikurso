<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: Cookie.class.php 77 2006-09-14 10:31:19Z matthieu_ $


/**
 * Class that sets a cookie, read values, saves arrays in cookie, etc.
 */
class Cookie {

	/**
	 * @var string 
	 */
	var $name;
	
	/**
	 * @var array cookie content
	 */
	var $a_content = array();
	
	var $expire;
	
	/**
	 * Constructor
	 * 
	 * @param string $nameCookie
	 */
	function Cookie($nameCookie='pmv_cookie_default')
	{
		$this->expire = COOKIE_EXPIRE;
		
		$this->name=$nameCookie;
				
		if($this->isDefined())
		{
			$this->a_content = $this->get();
		}
		
		//print($this->toString());
		
	}
	
 	function setExpire( $ts )
	{
		$this->expire = $ts;
	}
	/**
	 * returns array contained in the cookie 
	 * 
	 * @return array
	 */
 	function getContent()
 	{
 		return $this->a_content;
 	}
	
	/**
	 * returns true if the cookie already exist, false else
	 * 
	 * @return bool
	 */
 	function isDefined()
 	{
 		return isset($_COOKIE[$this->name]);
 	}
	
	/**
	 * returns the size of the cookie content, in bytes
	 */
	function getSize()
	{
		return strlen($_COOKIE[$this->name]);
	}

	function toString()
	{
		return "Cookie ". $this->name. " : \n<br>Current: ".varToString( $this->get())." \n<br>Next: ".varToString( $this->getContent() );
	}
	
	/**
	 * returns the cookie's content array unserialized 
	 * 
	 * @return array 
	 */
	function get()
	{
		$return = @unserialize(base64_decode( $_COOKIE[$this->name]));
		if(is_array($return))
		{
			return $return;
		}
		else
		{
			return array();
		}
	}
	
	/**
	 * returns the $varName value from the array in the cookie
	 * 
	 * @param string $varName
	 * 
	 * @return string|false
	 */
	function getVar($varName)
	{
		if(is_array($this->a_content) && isset($this->a_content[$varName]))
		{
			return secureVar($this->a_content[$varName]);
		}
		else
		{
			return false;
		}
	}
	
	/**
	 * assigns a value to a variable in the cookie array
	 * 
	 * @param string $varName variable name
	 * @param all $varValue
	 */
	function setVar($varName, $varValue)
	{
		if(is_array($varValue))
		{
			$length = strlen(serialize($varValue));
		}
		else
		{
			$length = strlen($varValue);
		}
			
		if($length < MAX_LENGTH_ONE_VALUE_IN_COOKIE)
		{
			$this->a_content[$varName] = $varValue;
			return true;
		}
		else
		{
			printDebug("<br>Value '$varName' too big for the cookie, doesn't save...");
			return false;
		}
	}
	
	/**
	 * saves the cookie on visitor computer, called once at the end of the whole process
	 * 
	 * @return bool
	 */
	function save()
	{
		$this->p3p();
		$content = serialize($this->a_content);
		$content = base64_encode ($content);
		setcookie($this->name, $content, time()+ $this->expire);
		return true;
	}
	
	function delete()
	{
		$this->p3p();
		setcookie($this->name, false, time() - 3600);
		return true;
	}
	
	function p3p()
	{
		header("P3P: CP='OTI DSP COR NID STP UNI OTPa OUR'");
	}
	
	
	/**
	 * Init the phpmv cookie used in logging. Called when no previous phpmv cookie detected.
	 * 
	 * @param string $uniqId Old uniqId if exists
	 * 
	 * @return string uniqId assigned
	 */
	function put($uniqId='')
	{
		printDebug("<br>=>Cookie is init on visitor (idcookie and last_visit_time)<br>");
		if($uniqId=='')
		{
			$uniqId = md5(uniqid(rand()));
		}
		$this->setVar('idcookie', $uniqId);
		$this->setVar('last_visit_time', todayTime());
		return $uniqId;
	}
}
?>