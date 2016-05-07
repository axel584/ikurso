<?
# **************************************************************
# make htaccess !
#
# 1. set all rights (chmod 777)
# 2. place this file into the directory you want to protect
# 3. start the script (http://..../make_htaccess.php
# 4. enter login and password
# 5. press the button 'make'
# 6. ready
#
# Lars Brinkmann
# email: lars@webtac.de
#
# Modified by Julien Ducros from Lost Oasis
#
# **************************************************************


if (($user) && ($passwort))
{
    # get url

    $url = $DOCUMENT_ROOT . dirname($PHP_SELF) . "/.htpasswd";
    
    #     make .htaccess and .htpasswd
    
    $htaccess_txt  = "AuthType Basic" . "\n";
    $htaccess_txt .= "AuthName \"protected area\"" . "\n";
    $htaccess_txt .= "AuthUserFile $url" . "\n";
    $htaccess_txt .= "require valid-user" . "\n";

    $htpasswd_txt .= "$user:".crypt($passwort,CRYPT_STD_DES)."\n"; 

    # save files
    
    $htaccess= fopen(".htaccess", "w");
    $htpasswd= fopen(".htpasswd", "a+");

    fputs($htaccess, $htaccess_txt);
    fputs($htpasswd, $htpasswd_txt);
    fclose($htaccess);
    fclose($htpasswd);

    # output
    
    die ("OK!<HR>" . nl2br($htaccess_txt) . "<HR>" . nl2br($htpasswd_txt));

}      

?>
<HTML><HEAD><TITLE> MAKE .htaccess + .htpasswd </TITLE></HEAD>
<BODY>
<FORM METHOD="POST" ACTION="<? echo $PHP_SELF; ?>">
<p>Username: <INPUT TYPE="TEXT" NAME="user"></p>
<p>Passwort: <INPUT TYPE="TEXT" NAME="passwort"></p>
<p><INPUT TYPE="submit" VALUE="make"></p>
</FORM>
</BODY></HTML>


