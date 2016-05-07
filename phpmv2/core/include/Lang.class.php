<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: Lang.class.php 86 2006-09-15 12:20:08Z matthieu_ $



require_once INCLUDE_PATH . "/core/include/Cookie.class.php";
require_once INCLUDE_PATH . "/core/include/Request.class.php";
require_once INCLUDE_PATH . "/core/include/commonDB.php";
require_once INCLUDE_PATH . "/core/include/Logs.functions.php";

class Lang
{
	// content of the config file
	var $langAvailable;
	
	// lang file 
	var $file;
	
	// config file
	var $fileAdress;
	
	function Lang( )
	{
		$c = new Cookie(COOKIE_NAME_VIEW);
		
		// look if reload lang file
		$this->fileAdress = INCLUDE_PATH . "/config/lang_available.php";
		if(!file_exists( $this->fileAdress ))
		{
			$this->reloadLangFile();
		}
		else
		{
			require $this->fileAdress;
			
			if(!isset($langAvailable))
			{
				print("There is a problem with the /config/lang_available.php file.");
				$langAvailableFile = INCLUDE_PATH . "/config/lang_available.php";
				if(!unlink($langAvailableFile))
				{
					print("Error when trying to delete $langAvailableFile. You have to delete the file $langAvailableFile manually.");
				}
				print("<br>Please refresh this page");
				exit;
			}
			
			$this->langAvailable = $langAvailable;
		}
		
		$langRequest = Request::getLang();
		if(!file_exists( LANGS_PATH . "/". $langRequest))
		{
			// cookie ?
			if(($langRequest = $c->getVar('lang'))
				&& file_exists(LANGS_PATH . "/" . $langRequest))
			{
				$this->file = $langRequest;
			}
			else
			{
				// default lang?
				if( defined('INTERFACE_DEFAULT_LANG')
					&& file_exists(LANGS_PATH . "/" . INTERFACE_DEFAULT_LANG))
				{
					$this->file = INTERFACE_DEFAULT_LANG;
				}
			}
			
		}
		else
		{
			$this->file = $langRequest;
		}
				
		// if lang not found in REQUEST + COOKIE + not set with INTERFACE_DEFAULT_LANG
		// then we try to choose the better lang
		if( !isset($this->file)
			|| !strpos( $this->file, 'utf-8.php')
			|| strpos( $this->file, '..') !== FALSE
			)
		{
			$this->file = $this->getNearestLang();
		}
		
		$this->setLang();
		
		// cookie
		$c->setVar('lang', $this->file);
		$c->save();
		
		//print($c->toString());
		//print($this->file);
	}
	
	function setLangFile( $newFile )
	{
		$this->file = $newFile;
	}
	
    /**
     * Singleton
     */
    function &getInstance()
    {
        static $instance;
        
        if (!isset($instance)){
            $c = __CLASS__;
            $instance = new $c;
        }
        return $instance;
    }
    
	function setLang()
	{
		require LANGS_PATH . "/" . $this->file;

		if(!is_array($lang) 
			|| sizeof($lang) == 0 )
		{
			print("<b>Error! </b> The lang file ".LANGS_PATH . "/" . $this->file." may be corrupted (incorrect structure). Please reupload a new version of this file, then refresh this page.");
			exit;
		}
		$GLOBALS['lang'] = $lang;
	}
	
	function getFileName()
	{
		return $this->file;
	}
	
	function setNewLang( $file )
	{
		$this->setLangFile($file);
		$this->setLang();
	}
	
	function setRandomLang()
	{
		$keys = array_keys($this->langAvailable);	
		$randomKey = rand( 0, sizeof($this->langAvailable) - 2 ); // -1 because of the key default lang at the end
		$this->setNewLang( $keys[$randomKey] );
	}
	
	/**
	 * useless from now on? 2.2RC1
	 */
	function getNearestLang()
	{		
		$country = getCountry( 
						getHostnameExt(
								getHost(
									getIp()
										)
									), 
						secureVar(@$_SERVER['HTTP_ACCEPT_LANGUAGE'])
			);
		
		foreach($this->langAvailable as $key => $langInfo)
		{
			if($langInfo[3] == $country)
			{
				return $key;
			}
		}
		return $this->langAvailable['default_lang'];
	}
	
	/**
	 * Returns array key => value
	 * key = fileName
	 * value = Lang name in english (or french if french langage is used)
	 * Note: an element with the key "other" is added, containing the string "Other?" translated.
	 * 
	 * @return array 
	 */
	function getArrayLangs()
	{
		$return = array();
		
		// french, print languages in french
		if(substr($this->getFileName(), 0, 2) === 'fr')
		{
			$key = 0;
		}
		else
		{
			$key = 1;
		}
		
		foreach($this->langAvailable as $file => $a_info)
		{
			if(is_array($a_info))
			{
				$return[$file] = $a_info[$key];
			}
		}
		ksort($return);
		$return['other'] = $GLOBALS['lang']['generique_autrelangure'];
		
		return $return;
	}
	
	function getArrayTranslators()
	{
		$return = array();
		
		// french, print languages in french
		if(substr($this->getFileName(), 0, 2) === 'fr')
		{
			$key = 0;
		}
		else
		{
			$key = 1;
		}
		
		foreach($this->langAvailable as $file => $a_info)
		{
			if(is_array($a_info))
			{
				$return[] = array(
					'lang_name' => $a_info[$key],
					'lang_file' => $file,
					'translator_name' => $a_info[4],
					'translator_email' => $a_info[5]
					);
			}
		}
		
		$return[] = array(
			'lang_name' => $GLOBALS['lang']['generique_autrelangure'],
			'translator_name' => $GLOBALS['lang']['generique_vous'],
			'lang_file' => 'other',
			'translator_email' => 'matthieu.aubry@gmail.com?subject=I Want To Become A Powerfull Translator'
			);
		return $return;
	}
	
	function reloadLangFile()
	{		
		$handle=opendir(LANGS_PATH );
		while ($file = readdir($handle)) 
		{
			if (strpos($file, '-utf-8.php'))
			
			{
				unset($lang);
				require LANGS_PATH . "/". $file;
				
				if(!isset($lang))
				{
					trigger_error( "Problems while loading Lang file. Try to upload the /langs/ directory", E_USER_ERROR );
				}
				
				$langAvailable[$file] = array(
					$lang['lang_libelle_fr'],
					$lang['lang_libelle_en'],
					$lang['charset'],
					$lang['lang_iso'],
					$lang['auteur_nom'],
					$lang['auteur_email']
				);
			}
		}
		closedir($handle);
		
		ksort($langAvailable);
		
		// used in getNearestLang but it seems useless since the introduction of
		// interface_default_lang
		// in 2.2RC1
		$langAvailable['default_lang'] = defined('INTERFACE_DEFAULT_LANG') ? INTERFACE_DEFAULT_LANG : 'en-utf-8.php';
		
		saveConfigFile($this->fileAdress, $langAvailable, 'langAvailable');
		
		$this->langAvailable = $langAvailable;
	}
	
	function getFontName()
	{
		if(isset($GLOBALS['languageFonts'][$GLOBALS['lang']['lang_iso']]))
		{
			return $GLOBALS['languageFonts'][$GLOBALS['lang']['lang_iso']];
		}
		else
		{
			return $GLOBALS['defaultFont'];
		}
	}
}
?>