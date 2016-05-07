<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: TemplateEngine.php 78 2006-09-14 13:09:59Z matthieu_ $

require_once INCLUDE_PATH."/libs/smarty/Smarty.class.php";

class TemplateEngine extends Smarty
{
	/**
	 * central zone template name
	 * 
	 * @var string template
	 */
    var $template;
    
    /**
     * main template name
     * 
     * @var string mainTemplate
     */
    var $mainTemplate = 'common/structure.tpl';
    
    
    
    /**
     * Constructor
     * initialize the smarty template engine
     * 
     * @param string template
     */
    function TemplateEngine($template)
    {
        if( !defined('THEME') )
		{
			define('THEME', THEME_DEFAULT);
		}
	    $templateSet = THEME;
	    
        parent::Smarty();
		
        $this->template_dir = INCLUDE_PATH .'/themes/' . $templateSet .'/';
        $this->compile_dir = INCLUDE_PATH .'/datas/tpl_compiled/';
        $this->cache_dir = INCLUDE_PATH .'/datas/cache_smarty/';
        $this->config_dir =INCLUDE_PATH .'/themes/' . $templateSet .'/smarty_config/';
		$this->plugins_dir = array( INCLUDE_PATH . '/libs/smarty/plugins', INCLUDE_PATH . '/core/include/smarty_plugins');
        $this->cache_lifetime = CACHE_SMARTY;
        $this->compile_id = $templateSet . PHPMV_VERSION . INTERNAL_STATS;
		
		if (defined('SMARTY_DEBUG') && SMARTY_DEBUG) 
		{ 
			$this->caching = 0;
			$this->force_compile = 1; 
			$this->compile_check = 1; 
		}
		else 
		{
			$this->caching = 1;
            $this->force_compile = 0; 
            $this->compile_check = 0; 
			$this->load_filter('output','trimwhitespace');
        } 
		
		$this->clear_all_cache( CACHE_SMARTY );
		
		if(mt_rand(0, 5000) ===  0)
		{
			$this->clear_all_cache();
		}
		
        $this->setTemplate($template);
    }
    
    /**
     * define the central zone template name
     * 
     * @param string templatename
     * 
     * @return void
     */
    function setTemplate($templateName)
    {
        $this->template = $templateName;
    }
    
    /**
     * Define main template name
     * 
     * @param string mainTplName
     * @return void
     */
    function setMainTemplate($mainTplName)
    {
   		$this->mainTemplate = $mainTplName;
    }
    
    /**
     * Big job, assign all vars... 
     * Too much vars, those tasks should be splitted into more atomic methods
     * 
     * @param object o_site
     * @param object o_data
     * @param object request
     * 
     * @return void
     */
    function processDatas( &$o_site, &$o_data, $request = null)
	{
	    $ctrl =& ApplicationController::getInstance();

		if (is_null($request))
		{
	    	$o_request =& $ctrl->getRequest();
		}
		else
    	{
			$o_request =& $request;
    	}
		
	    $o_lang =& $ctrl->getLang();

		if(!is_a($o_data, "DataModel"))
		{
			//trigger_error("\$o_data is not an object DataModel! Maybe its because this is not a 
			//ViewModule and so you don't really need DataModel, you have to do without it...");
		}
	    printTime('Begin Smarty display');
	    
	    /*
	     * @todo , extact this from method!!
	     */
	    $ajax_views = array(
	       "common/data_array_details.tpl",
	       "common/data_array_interest.tpl",
	       "common/data_array.tpl"
	       );
	       
	    // case we load a subtemplate with AJAX
    	if(in_array($this->template, $ajax_views))
    	{
    		$this->mainTemplate = $this->template;
    	}
		// case we load a pages zoomed group with AJAX
		elseif($o_request->isCategoryZoom())
    	{
    		$this->mainTemplate = "common/viewpages_details.tpl";
    		//	printDebug($this->get_template_vars( "zoom"));
    		$t = $this->get_template_vars( "zoomsorted");
    		//printDebug($t);
    		$this->assign("zoom", $t);
    	}
    	else
    	{
			// case there are no visit for this period
			if(is_a($o_data, "DataModel") 
				&& $o_request->getModuleName() !== 'view_sites_summary'  
				&& $o_data->getContent('nb_vis') == 0)
			{
				$this->setTemplate("common/error.tpl");
				if($o_request->getModuleName() !== 'view_visits_rss' )
				{ 	
					$this->assign("error_message_bis",
						 sprintf($GLOBALS['lang']['generique_help_novisits'], "<a href='index.php?mod=admin_site_javascript_code'>","</a>")
						 );
				}
			}
			
			// assign period, used in pages table to print the period text
			$this->assign("period", $o_request->getPeriod());
			
			if(is_a( $o_site, 'Site'))
			{
				// compute and assign calendar
				$o_dasked = new Date($o_request->getDate());
				$o_minDay = $o_site->getMinDay();
				if($o_dasked->getTimestamp() < $o_minDay->getTimestamp())
				{
					$s_dateAsked = $o_minDay->get();
				}
				else
				{
					$s_dateAsked = $o_dasked->get();
				}
				$a_calendar = getTemplateArrayCalendar(
												$o_minDay, 
												$s_dateAsked, 
												$o_request->getPeriod());
				$this->assign("calendar", $a_calendar);
				
				// first day letters for calendar first line
				if (!defined('MONDAY_FIRST') || MONDAY_FIRST == 'yes' )
				{
					$dayFirstLetter = $GLOBALS['lang']['calendrier_jours'];
				}
				else
				{
					for($i = 0; $i < 7; $i++)
					{
						$dayFirstLetter[$i == 6 ? 0 : $i + 1] = $GLOBALS['lang']['calendrier_jours'][$i];
					}
					ksort($dayFirstLetter);
				}
				$this->assign("day_first_letter", $dayFirstLetter);
				
				// litteral date for display below the menu
				$this->assign("date_litteral", getLiteralDate($o_request->getPeriod(), $s_dateAsked));
				
				// months info for SELECT months generation
				$months_info = getTemplateArrayMonth($o_site->getMinDay(), $o_request);
				$this->assign("months_available", $months_info[0]);
				$this->assign("month_selected", $months_info[1]);
					
				// sites info for SELECT sites generation
				$this->assign("sites_view_available", $o_site->getAllowedSites( 'view' ) );
				$this->assign("sites_admin_available", $o_site->getAllowedSites( 'admin' ) );
				$this->assign("site_selected", $o_request->getSiteId( false ) );
				
			}
			
			// langs info for SELECT langs generation
			$this->assign("langs_available", $o_lang->getArrayLangs());
			$this->assign("lang_selected", $o_lang->getFileName());
			
			// require menu definition and assign for menu display
			require INCLUDE_PATH . "/core/include/MenuDefinition.php";
			$this->assign("menu", $menu);
    	}
			
			
		// interest sorting info
		if(is_a($o_data, "DataModel"))
		{
			//printDebug($o_request->getArrayInfoSort( $o_data->arraySumInfo));
			$this->assign("info_sort", $o_request->getArrayInfoSort( $o_data->arraySumInfo ));
		}

    		
    	/**
    	 * display a previous assigned template variable
    	 */
    	//printDebug($this->get_template_vars( "countries"));

		// url with main variables	
		$this->assign("url", $o_request->getUrl());
		
		// current exact url
		$this->assign("url_current", $o_request->getCurrentUrl() );
		
		// url without offset info
		$this->assign("url_offset", $o_request->getUrl('offset'));
		
		// url without interest info
		$this->assign("url_a_int_sort", $o_request->getUrl('a_int_sort'));
		$this->assign("url_a_exit_sort", $o_request->getUrl('a_exit_sort'));
		$this->assign("url_a_entry_sort", $o_request->getUrl('a_entry_sort'));
		
		// url without module
		$this->assign("url_mod", $o_request->getUrl(array('mod', 'a_int_sort')));
		
		// url without site
		$this->assign("url_site", $o_request->getUrl('site'));
		
		// url without date
		$this->assign("url_date", $o_request->getUrl('date'));
		
		// url without period
		$this->assign("url_period", $o_request->getUrl('period'));
		
		// url without lang
		$this->assign("url_lang", Request::getCurrentCompleteUrl());
		
		// url without mod & site, used for summary SELECT choice (because we change mod=viewsummary and site=-1)
		$this->assign("url_mod_site", $o_request->getUrl(array('mod', 'a_int_sort', 'site')));
		    	
	
    	$this->assign("url_pages_details",$o_request->getUrl('mod_sort_means_details'));
    	
		// if there is an "error" message to print in red
		if(isset($GLOBALS['content_message_tpl']))
		{
			// assign the message
			$this->assign("content_message", $GLOBALS['content_message_tpl']);
			
			// and the content template, error.tpl which will print in red the message
			$this->setTemplate('common/error.tpl');
		}
		
		// assign an header message (archive ok, archive temp, etc.)
		$this->assign("header_message", $GLOBALS['header_message_tpl']);
		// assign an error header message 
		$this->assign("header_error_message", $GLOBALS['header_error_message_tpl']);
		
		// assign text direction info (rtl, ltr)
		$this->assign("dir", $GLOBALS['lang']['text_dir']);
	
		// assign footer info
		//$time =  getMicrotime()-$GLOBALS['time_start'];
		//$this->assign("generation_time", $time);
		//$this->assign("query_count", $GLOBALS['query_count']);
		
		// image dir
		$this->assign("img_dir", DIR_IMG_THEMES);
		
		// links for the documentation
		$this->assign("link_doc", array( HREF_DOC_OPEN, HREF_DOC_CLOSE));
			
		// phpmyvisites version to print in meta and footer
		$this->assign("PHPMV_VERSION", PHPMV_VERSION);
		$this->assign("PHP_VERSION_NEEDED", PHP_VERSION_NEEDED);
		
		//should we include internal stats in the application footer
		if (defined('INTERNAL_STATS') && INTERNAL_STATS == 1)
		{
			$this->assign('internal_stats', true);	
		}
		
		$user =& User::getInstance();
		
		$this->assign('user_alias', $user->getAlias());
		$this->assign('user_login', $user->getLogin());
		$this->assign("rss_hash", $user->getRssHash());
		
		$this->assign('a_link_phpmv', array('<a class="bleu" link="web statistics" href="http://www.phpmyvisites.us/">','</a>'));
		
		$this->assign("contentpage", $this->template);
		
    	printTime('After Smarty pre computing');
	}
	
	
	/**
	 * Render method
	 * called if a template have to be displayed
	 * 
	 * @param object o_site
     * @param object o_data
     * 
     * @return void
	 */
    function render($o_site = null, $o_data = null)
	{
	    if (!$this->is_cached($this->mainTemplate, SMARTY_CACHE_ID, $this->compile_id))
	    {
	       $this->processDatas($o_site, $o_data);
			if(DEBUG) 
				echo 'Template is NOT cached';
	    } 
		else 
		{
			if(DEBUG) 
				echo 'Template is cached';   
	    }
		header('Content-Type: text/html; charset=utf-8');
		if(	!empty($GLOBALS['header_message_tpl'])
			&& Request::moduleIsNotAStrangeModule())
		{
			//Message à passer en variable dans le template header.tpl
			print("<p class='archive'>".$GLOBALS['header_message_tpl']."</p>");
		}
	    $this->display($this->mainTemplate, SMARTY_CACHE_ID, $this->compile_id);
	}
	
	/**
	 * Fetch method
	 * called if a template have to be fetched and include in an other template
	 * 
	 * @param string template
	 * @param object o_site
     * @param object o_data
     * @param object request
     * 
     * @return void
	 */
	function processAndFetch($template, &$o_site, &$o_data, $request = null, $cacheDiscriminant = null)
	{
		$this->setTemplate($template);
		$cache_id = (!is_null($cacheDiscriminant)) 
			? md5(SMARTY_CACHE_ID . $cacheDiscriminant) 
			: SMARTY_CACHE_ID;

	    if (!$this->is_cached($template, $cache_id, $this->compile_id))
		{
			$this->processDatas($o_site, $o_data, $request);
	    }

	    return $this->fetch($this->template, $cache_id, $this->compile_id);
	}
	
}
?>