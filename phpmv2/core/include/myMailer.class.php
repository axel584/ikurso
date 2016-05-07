<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: myMailer.class.php 82 2006-09-14 17:40:31Z matthieu_ $


require_once INCLUDE_PATH . "/libs/phpmailer/class.phpmailer.php";

class MyMailer extends PHPMailer {

	var $From     = ADMINISTRATOR_MAIL;
    var $FromName;
    var $CharSet  = "UTF-8";
	var $Mailer   = "smtp";
    var $WordWrap = 75;

	function MyMailer()
	{
		$this->FromName = $GLOBALS['lang']['mail_sender_name'];
	}
    // Replace the default error_handler
    function error_handler($msg) {
        print("My Site Error");
        print("Description:");
        printf("%s", $msg);
        exit;
    }
}
?>