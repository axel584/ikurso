<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: Index.class.php 29 2006-08-18 07:35:21Z matthieu_ $

class Index extends Module 
{
    var $defaultAction = 'display';
    
    var $viewTemplate  = 'common/index.tpl';
    
    
    function indexModule()
    {
        parent::Module();
    }
    
}

?>