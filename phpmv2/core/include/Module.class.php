<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: Module.class.php 29 2006-08-18 07:35:21Z matthieu_ $

require_once INCLUDE_PATH . '/core/include/TemplateEngine.php';
require_once INCLUDE_PATH . '/core/include/functions.php';
require_once INCLUDE_PATH . '/core/include/Site.class.php';

class Module
{
    var $defaultAction = "showAll";
    
    var $actions;
    
    var $tpl;

    var $viewTemplate  = '';
    
    var $request;
    
    var $site;
    
    /**
     * Constructor
     */
    function Module()
    {
    }
    
    
    /**
     * factory method, take care of loading the appropriate module
     *
     * @param string $moduleName
     * @return object module
     */
    function factory($moduleName)
    {
        $className = camelize($moduleName);
        
        $modulePath = array(    'core/modules',
                                'core/views',
                                'core/admin',
								'core/install',
								'core/graphs',
                                'plugins/modules'
                           );

        foreach($modulePath as $path)
		{
            if (is_file(INCLUDE_PATH . '/' . $path . '/' . $className . '.class.php'))
			{
                require_once INCLUDE_PATH . '/' . $path . '/' . $className . '.class.php';
                break;
            }   
        }
     
         
        if(!class_exists($className))
		{
        	if (!defined('DEFAULT_MODULE_CLASS'))
			{
            	trigger_error('Unable to load class ' . $className . ' for module', E_USER_ERROR);
			}
			else 
			{
        		$className = camelize(DEFAULT_MODULE_CLASS);
        		require_once INCLUDE_PATH . '/core/modules/' . $className . '.class.php';
        	}
        }
        $module =& new $className;

        return $module;
    }
    
    /**
     * module initialization tasks
     *
     * @param object $request
     * @param object $tpl Template instance
     * 
     * @return void
     */
    function init(&$request, $tpl = null)
    {      
		$this->request =& $request;
		
		if(!Request::isCurrentModuleAGraphModule())
		{	
			if (!is_null($tpl))
			{
			    $this->tpl =& $tpl;
			}
			else
			{
				$this->tpl =& new TemplateEngine($this->viewTemplate);
			}
			
		}
		
		if (!isset($this->site) 
			&& !Request::isCurrentModuleAnInstallModule() )
		{ 
			//site could be setted if ViewRss is called for multiple sites
	        $site = $this->request->getSiteId();

			if ($site)
			{
				$this->site = new Site($site);
			}
        }
    }
    
    /**
     * Main job
     * parse the request, try to find a valid action param
     * if none found, load the defaultAction
     *
     * @return void
     */
    function doAction()
    {

        if (isset($this->request)){
            $actionName = $this->request->getActionName();

            if ($actionName 
                && isset($this->actions) 
                && is_array($this->actions) 
                && array_key_exists($actionName, $this->actions))
            {   
                $method = $this->actions[$actionName];
            } else {
                $method = $this->defaultAction;
            }
        } 
        if (method_exists($this, $method))
		{
            $this->$method();
        } else {
            trigger_error('Unable to find any valid action for module: ' . get_class($this));   
        }
    }
    
    /**
     * wrapper around template engine is cached method
     */
    function isCached()
    {
    	if ( !SMARTY_DEBUG
		&& $this->tpl->is_cached($this->tpl->mainTemplate, SMARTY_CACHE_ID, $this->tpl->compile_id))
		{
    		return true;
    	}
    	return false;
    }
    
    /**
     * Default display action
     *
     * @return void
     */
    function display()
    {
		// case it's a ViewModule and so there may be specific data to compute
		if(isset($this->data))
		{
			$this->tpl->render($this->site, $this->data);
		}
		// case it is a simple Module
		else
		{
			$this->tpl->render($this->site);
		}	
	}
    
    /**
     * fetch les donn�es du module
     *
     * @return string populated template
     */
    function fetch($contentPage, $request = null, $cacheDiscriminant = null)
	{	
		if( get_class($this) === 'ViewVisitsRss')
		{
			if($this->data->getContent('nb_vis') == 0)
			{
				$this->tpl->assign("mod", "rss");
				$contentPage = "common/error.tpl";
			}
		}
		
		return $this->tpl->processAndFetch($contentPage, $this->site, $this->data, $request, $cacheDiscriminant);
	}      
}
?>