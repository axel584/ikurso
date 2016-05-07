<?php
/* 
 * phpMyVisites : website statistics and audience measurements
 * Copyright (C) 2002 - 2006
 * http://www.phpmyvisites.net/ 
 * phpMyVisites is free software (license GNU/GPL)
 * Authors : phpMyVisites team
*/

// $Id: SendMail.class.php 82 2006-09-14 17:40:31Z matthieu_ $

require_once INCLUDE_PATH."/core/include/ViewModule.class.php";
require_once INCLUDE_PATH."/core/include/PmvConfig.class.php";
require_once INCLUDE_PATH."/libs/Cache/Lite.php";
require_once INCLUDE_PATH."/core/views/ViewVisitsRss.class.php";		
require_once INCLUDE_PATH."/core/include/myMailer.class.php";	
require_once INCLUDE_PATH."/core/include/UserConfigDb.class.php";

class SendMail extends Module
{
	var $defaultAction = "showAll";
	
	function SendMail()
	{
		parent::Module();
	}
	
	function showAll()
	{	
		$this->tpl->setMainTemplate("structure_mail.tpl");
		
		
		$this->request->setModuleName( 'view_visits_rss');
		$allSiteArchive =  DataModel::getSites();
		
		/**
		 * Cache Lite
		 */
		$options = array(
		    'cacheDir' => DIR_CACHE_MAIL,
		    'lifeTime' => CACHE_MAIL_LIFETIME
		);
		$Cache_Lite = new Cache_Lite($options);
		
		
		$lang =& Lang::getInstance();
		
		// case update to 2.2RC1 without executing global info
		if(!defined('INTERFACE_DEFAULT_LANG')) define('INTERFACE_DEFAULT_LANG', 'en-utf-8.php');
		
		$lang->setNewLang( INTERFACE_DEFAULT_LANG );
		
		/**
		 * Compute mails
		 */				
		
		$o_config =& PmvConfig::getInstance();
		
		
		foreach($allSiteArchive as $infoSite) 
		{
			
			/**
			 * php Mailer
			 */
			$mail = new MyMailer();
			$mail->IsHTML(true);
		
			$imgUrl = INCLUDE_PATH . "/themes/default/images/phpmv.png";
			$mail->AddEmbeddedImage($imgUrl, "my-attach", $GLOBALS['lang']['logo_description'], "base64", "image/png");
			
			$uniqCacheId = md5(serialize($infoSite).date("Y-m-d")) . '.mail';
			
			// Test if thereis a valide cache for this id
			if (true)//!$allData = $Cache_Lite->get($uniqCacheId)) 
			{
				$o_mod = new ViewVisitsRss($infoSite);
				$this->request->date=getDateFromTimestamp(time()- 86400);
				$o_mod->init($this->request);
				
				$dateLiteral = $o_mod->data->archive->getLiteralDate();
						
				$body = '<html xml:lang="fr" >
						<head>
							<meta http-equiv="content-type" content="text/html; charset=utf-8" />
						</head>
						
						<body>
						';

				$body .= $o_mod->showAll( true, true);
				$body .= '</body></html>';
				$textBody = strip_tags($body);
				
				$subject = vsprintf($GLOBALS['lang']['rss_titre'], 
									array($infoSite->getName(), $dateLiteral));
				
				print("<br>Subject : $subject<hr>");
				print("<br>Content : $body<hr>");
				
				//$Cache_Lite->save($body);
			}
			
			$mail->Subject = $subject;
			$mail->Body    = $body;
			$mail->AltBody = $textBody;
			$mail->CharSet = $GLOBALS['lang']['charset'];	
			
				
			$user = new UserConfigDb();
			$groups = $user->getGroups();
			
			$users = array_merge(	
								array(
									0 => array( 'email' => SU_EMAIL, 
												'alias' => 'phpMyVisites Administrator',
												'send_mail' => (SEND_MAIL=="yes" ? 1 : 0)
											), 
								),
								$user->getUserByGroup( 1, $infoSite->getId() ),
								$user->getUserByGroup( 2, $infoSite->getId() )
						);
						
			// we send all emails once
			
			$emailsToSend_infos = array(
					'object' => $mail,
					'to' => array( 
							// email, alias 
							)
					);
					
			// add recipients for the mail
			foreach($users as $userInfo)
			{
				//print_r($userInfo);

				if(!empty($userInfo['email'])  && $userInfo['send_mail'] == 1)
				{
					$emailsToSend_infos['to'][] = array( $userInfo['email'], $userInfo['alias'] );
				}
			}
			
			$emailsToSend[] = $emailsToSend_infos;
		}
		
		// send all emails
		foreach($emailsToSend as $currMail)
		{
			$mail =& $currMail['object'];
			
			foreach($currMail['to'] as $recipient)
			{
				$mail->AddAddress($recipient[0], $recipient[1] );
				if(!@$mail->Send())
				{
				   echo "<u><b>There was an error sending the message to ".$userInfo['email']."</u></b><br>";
				}
				else
				{
					echo "<u><b>Message was sent successfully to ".$userInfo['email']."</u></b><br>";
				}
				$mail->ClearAddresses();
			}
		}
	}
}
?>