<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: ViewModule.class.php 29 2006-08-18 07:35:21Z matthieu_ $


require_once INCLUDE_PATH."/core/include/DataModel.class.php";
require_once INCLUDE_PATH."/core/include/Site.class.php";
require_once INCLUDE_PATH."/core/include/Archive.class.php";



class ViewModule extends Module
{
	var $partName;
	
	//the datamodel
	var $data;
	
	
	/**
	 * ViewModule constructor
	 * @param $name string the partName
	 * @param $o_data object , datas to render
	 * 
	 * @return void
	 */
	function ViewModule($name = "", $o_data = null)
	{

		$this->partName = $name;
		$this->data = $o_data;
	
		parent::Module();
	}
	
	
	/**
	 * initialize module with request datas
	 * 
	 * @param object request
	 * @return void
	 */
	function init(&$request, $o_tpl = null, $o_archive = null)
	{
		if(!is_a($o_tpl, "TemplateEngine"))
	    {
			$o_tpl = null;
	    }
		parent::init($request, $o_tpl);

		$date = $this->request->getDate();
		
		if(is_null($this->data))
		{
			if(is_null($o_archive))
			{
				$o_archive = DataModel::getArchive($this->site, $date, $this->request->getPeriod() );
			}
			
			$this->data = new DataModel( $o_archive , $this->request);
		}
		
		$d = new Date( getDateFromTimestamp( time() ) );
		if(($this->data->archive->date->get() == $d->get() || isset($this->disableCache))
			&& is_a($this->tpl, "TemplateEngine"))
		{
			printDebug("Current date asked is today's date, cache not activated<br>");
			$this->tpl->caching = 0;
		}
	}


	function getDataMethod($methods, $returnPlease = false)
	{
		$return = array(); 

		// foreach method that we have to call for getting data
		foreach( $methods as $key => $methodsuffix )
		{
			// case we have parameters to pass to the method
			if(is_array($methodsuffix))
			{
				$method_name = "get".$this->partName.$key;
			
				// call the method on the object DataModel, with correct arguments
				$value = call_user_func_array(array(&$this->data , $method_name), $methodsuffix );

				if(!$returnPlease)	
				{
					$this->tpl->assign( $key, $value);
				}
				else
				{
					$return[$key] = $value;
				}
			}	
		}
		
		if($returnPlease)
		{
			return $return;
		}
		return true;
	}
	
	/**
	 * Main job method overided in each view plugin
	 * this method should take care of obtaining and processing datas
	 * 
	 * @return void
	 */
	function process()
	{
		echo('please override me...');
	}
	
	
	/**
	 * default display method for all views
	 * 
	 * @return void
	 */
	function showAll()
	{	
	    // set mod to view because of specific elements in this case (period_selection.tpl)
		$this->tpl->assign('mod', 'view');
		
		if (!$this->isCached())
		{
			$this->process();	
		}	
		
		$this->display();
	}

}
?>
