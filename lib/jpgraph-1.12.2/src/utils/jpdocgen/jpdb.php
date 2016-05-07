<?php
//==============================================================================
// Name:        JPDB.PHP
// Description:	OO DB interface. Currently geared towards mysql
// Created: 	2002-03-17
// Author:	johanp@aditus.nu
// Version: 	$Id: jpdb.php,v 1.3 2002/08/25 22:03:51 aditus Exp $
//
// License:	QPL 1.0
// Copyright (C) 2001,2002 Johan Persson
//==============================================================================


// SQL Result object. Returned after a query.
class DBResult {
    var $iDB;
    var $iRes;
    var $iDBRow,$iDBObj;
    var $iNumRows = -1;
    var $iNumFields = -1;

    function DBResult($aDB,$aRes) {
	$this->iDB = $aDB;
	$this->iRes = $aRes;
    }

    function Fetch() {
	$this->iDBRow = mysql_fetch_array($this->iRes);
	return $this->iDBRow;
    }

    function FetchObj() {
	$this->iDBObj = mysql_fetch_object($this->iRes);
	return $this->iDBObj;
    }

    function NumRows() {
	if( $this->iNumRows == -1 )
	    $this->iNumRows = mysql_num_rows($this->iRes);
	return $this->iNumRows;
    }

    function NumFields() {
	if( $this->iNumFields == -1 )
	    $this->iNumFields = mysql_num_fields($this->iRes);
	return $this->iNumFields;
    }

    function GetFieldNames() {
	$nbr = $this->NumFields();
	$flds = array();
	while( $nbr > 0 ) {
	    $meta = mysql_fetch_field($this->iRes);
	    $flds[] = $meta->name;
	    --$nbr;
	}
    }
}


// Abstraction for a DB server
class DBServer {

    var $iDBName;
    var $iLastErr;

    var $iUserID ;
    var $iUserPWD ;
    var $iServer ;
    var $iLink;
    var $iDie = true;

    // If DryRun then no action on DB will be taken and all
    // DB calls will succeed
    var $iDryRun = false ;
 
    function DBServer($aUser,$aPWD,$aServer="localhost") {
 	if( $this->iDryRun ) {
	    $this->iUserID = "DryRunUser";
	    $this->iUserPWD = "DryRunPWD";
	    $this->iServer = "DryRunServer";
	    return true;
	}
	$this->iLink = @mysql_connect($aServer,$aUser,$aPWD);
	if( $this->iLink == false ) {
	    $this->SetError("Can't connect to server $aServer as $aUser");
	    return false;
	}
	$this->iUserID = $aUser;
	$this->iUserPWD = $aPWD;
	$this->iServer = $aServer;
	return true;
    }

    function SetDB($aDBName,$aIgnoreError=false) {
	if( $this->iDryRun ) {
	    $this->iDBName = "DryRunDBName";
	    return true;
	}
	$this->iDBName = $aDBName;
	if( @mysql_select_db($aDBName) )
	    return true;
	else {
	    if( !$aIgnoreError ) 
	    	$this->SetError("Can't select database $aDBName.");
	    return false;
	}
    }

    function SetDryRun($aFlg=true) {
	$this->iDryRun = $aFlg;
    }

    function SetError($aMsg) {
	if( $this->iDryRun ) {
	    return;
	}
	if( $this->iLink )
	    $err = mysql_error($this->iLink);
	else 
	    $err="";
	$this->iLastErr = "<b>DB ERROR:</b>".$aMsg."<br>MySQL Error:".$err;
	if( $this->iDie ) 
	    die($this->iLastErr);
    }


    function Query($aQuery,$aIgnoreError=false) {
	if( $this->iDryRun ) {
	    return true;
	}
	$res=@mysql_query($aQuery,$this->iLink);
	if( !$res && !$aIgnoreError ) {
	    $this->SetError("Error in query:<br> $aQuery<P>");
	    return false;
	}
	if( $res > 0 )
		return new DBResult($this,$res);
	return false;
    }

    function LastIdx() {
	if( $this->iDryRun ) {
	    return 0;
	}
	return mysql_insert_id($this->iLink);
    }

    function Create($aDBName) {
	mysql_create_db($aDBName,$this->iLink);
    }
    
    function Close() {
	if( $this->iDryRun ) {
	    return;
	}
	mysql_close($this->iLink);
    }

    function GetTables() {
	$r = mysql_list_tables($this->iDBName,$this->iLink);
	$n = mysql_num_rows($r);
	$tn = array();
	for( $i=0; $i < $n; ++$i ) {
	    $tn[$i] = mysql_tablename($r,$i);
	}
	return $tn;
    }

    function GetFields($aTbl) {
	$r = mysql_list_fields($this->iDBName,$aTbl,$this->iLink);
	$n = mysql_num_fields($r);
	$fn = array();
	for( $i=0; $i < $n; ++$i ) {
	    $fn[$i] = mysql_field_name($r,$i).' : '. mysql_field_type($r,$i); 
	}
	return $fn;
    }

    function GetTablesFields($aFlgPrint=false) {
	$tblnames = $this->GetTables();
	$n = count($tblnames);
	$res = array();
	for( $i=0; $i < $n; ++$i ) {
	    $fn = $this->GetFields($tblnames[$i]);
	    if( $aFlgPrint ) {
		echo '<b>'.$tblnames[$i].'</b><br>';
		$nn = count($fn);
		for( $j=0; $j < $nn; ++$j ) {
		    echo $fn[$j]; //[0]. ': <font color=blue>' . $fn[$j][1].'</font><br>';
		}
		echo '<p>';
	    }
	    $res[$i] = array($tblnames[$i],$fn);
	}
	return $res;
    }
}      

?>