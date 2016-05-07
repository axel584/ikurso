<?php
/*=======================================================================
// File: 	IMGDBSCHEMA.INC
// Description:	Classes to help drawing a DB schema semi-automtically
//              See dbschema_ddda.php for example of use.
// Created: 	2002-08-25
// Author:	Johan Persson (johanp@aditus.nu)
// Ver:		$Id: imgdbschema.inc,v 1.2 2002/08/29 10:11:22 aditus Exp $
//
// License:	This code is released under QPL
// Copyright (C) 2001,2002 Johan Persson
//========================================================================
*/


//===================================================
// CLASS ImgDBTable
// Description: Utility class for drawing an graphical
// illustration of a DB table
//===================================================
class ImgDBTable {
    var $ix,$iy;
    var $iheader_color='white',$iheader_fillcolor='navy';
    var $ibody_color='black', $ibody_fillcolor='lightyellow';
    var $iheader_txt,$ibody_txt;
    var $iw,$ih,$ihh=0;
    var $iheader_font=FF_FONT1,$iheader_style=FS_BOLD,$iheader_fontsize=14;
    var $ibody_font=FF_FONT1,$ibody_style=FS_NORMAL,$ibody_fontsize=12;

    function ImgDBTable($w=0,$h=0) {
	$this->iw = $w;
	$this->ih = $h;
    }

    function SetPos($x,$y) {
	$this->ix = $x;
	$this->iy = $y;
    }
    
    function HeaderColor($aFontColor,$aFillColor) {
	$this->iheader_color=$aFontColor;
	$this->iheader_fillcolor=$aFillColor;
    }

    function BodyColor($aFontColor,$aFillColor) {
	$this->ibody_color=$aFontColor;
	$this->ibody_fillcolor=$aFillColor;
    }

    function Set($aHeader,$aBody,$aWidth=0,$aHeadHeight=0,$aBodyHeight=0) {
	$this->iw = $aWidth;
	$this->ih = $aBodyHeight;
	$this->SetHeader($aHeader,$aHeadHeight);
	$this->SetBody($aBody);
    }

    function Setheader($aTxt,$aHeight=0) {
	$this->iheader_txt = $aTxt;
	$this->ihh = $aHeight;
    }

    function SetBody($aTxtArr) {
	$n = count($aTxtArr);
	$t = '';
	for( $i=0; $i < $n; ++$i ) {
	    if( $i > 0 ) $t .= "\n";
	    $t .= $aTxtArr[$i];
	}
	$this->ibody_txt = $t;
    }

    function SetHeaderFont($aFam,$aSty,$aSize) {
	$this->iheader_font = $aFam;
	$this->iheader_style = $aSty;
	$this->iheader_fontsize = $aSize;
    }

    function SetBodyFont($aFam,$aSty,$aSize) {
	$this->ibody_font = $aFam;
	$this->ibody_style = $aSty;
	$this->ibody_fontsize = $aSize;
    }

    function StrokeAll($aImg,$aScale,$aTables) {
	$n = count($aTables);
	for($i=0; $i < $n; ++$i) {
	    $this->Set($aTables[$i][3], $aTables[$i][4], $aTables[$i][2]);
	    $this->Stroke($aImg,$aScale,$aTables[$i][0], $aTables[$i][1]);
	}
    }

    function Stroke($aImg,$aScale,$ax=0,$ay=0) {
	if( $ax != 0 ) 
	    $this->ix = $ax;
	if( $ay != 0 ) 
	    $this->iy = $ay;

	$t = new CanvasRectangleText();
	$t->SetShadow();

	$t->SetFont($this->iheader_font,$this->iheader_style,$this->iheader_fontsize);
	$t->SetFillColor($this->iheader_fillcolor);
	$t->SetFontColor($this->iheader_color);
	$t->SetAutoMargin(7);
	$t->ParagraphAlign('center');
	$t->Set($this->iheader_txt,$this->ix,$this->iy,$this->iw,$this->ihh);

	// In case of "auto-heighting" we need to find out the actual height
	list($dummy,$this->ihh) = $t->Stroke($aImg,$aScale);
	$this->iy = $aScale->TranslateY($this->iy);

	// Use absolute coordinate (this is indicated by negative values)
	$this->iy = -( $this->iy + $this->ihh );

	$t->SetFont($this->ibody_font,$this->ibody_style,$this->ibody_fontsize);
	$t->SetFillColor($this->ibody_fillcolor);
	$t->SetFontColor($this->ibody_color);
	$t->SetAutoMargin(8);
	$t->ParagraphAlign('left');
	$t->Set($this->ibody_txt,$this->ix,$this->iy,$this->iw,$this->ih);
	$t->Stroke($aImg,$aScale);

    }
}



//============================================================================
// Class: ImgDBSchema
// Generate an image of all tables in a specific DB 
//============================================================================
class ImgDBSchema {
    var $iDBSrv;
    var $iTitle;
    var $iFormTblName = '';
    var $iFormFldName = '';
    var $iLeftMarg=2,$iTopMarg=4;
    var $iTableWidth=13,$iTableAutoHeight=20;
    

    // Initialize with DB name as well as possible callback methods for
    // formatting the table header and fields
    function ImgDBSchema($aDBName,$aTblNameFormat='',$aFldNameFormat='') {
	$this->iFormTblName = $aTblNameFormat;
	$this->iFormFldName = $aFldNameFormat;
	$this->iDBSrv = new DBServer('root','');
	$this->iTitle = new CanvasRectangleText();
	$this->iDBSrv->SetDB($aDBName);
    }
    
    function SetMargin($aLeft,$aTop) {
	$this->iLeftMarg = $aLeft;
	$this->iTopMarg = $aTop;
    }

    function SetTableWIdth($aWidth) {
	$this->iTableWidth=$aWidth;
    }

    // Stroke tables using a specific image context and scale.
    // It is possible to manually set the position of each table if
    // you specify the TblPos for each DB table.
    function Stroke($aImg,$aScale,$aTblPos=null) {

	$tables = $this->SetupFormatTables($aTblPos);

        // Setup the DB table raster class
	$dbi = new ImgDBTable();

        // Stroke all tables
	$dbi->StrokeAll($aImg,$aScale,$tables);

    }


    // Get the information from the Database and setup
    // the formatting array to help positioning and stroking the
    // tables  to the canvas
    function SetupFormatTables($aTblPos) {

	$tblflds = $this->iDBSrv->GetTablesFields();

	$nt = count($tblflds);
	$tables = array();

	$x = $this->iLeftMarg;
	$y = $this->iTopMarg;

	for( $i=0; $i < $nt; ++$i ) {
	    
	    if( !isset($aTblPos[2*$i]) ) $aTblPos[2*$i]=-1;
	    if( !isset($aTblPos[2*$i+1]) ) $aTblPos[2*$i+1]=-1;
		
	    if( $this->iFormTblName != '' ) {
		$f = $this->iFormTblName;
		$tn = $f($tblflds[$i][0]); 
	    }
	    else
		$tn = $tblflds[$i][0];
 
	    $flds = $tblflds[$i][1];
	    if( $this->iFormFldName != '' ) {
		$f = $this->iFormFldName;
		$n = count($flds);
		for( $j=0; $j< $n; ++$j ) {
		    $flds[$j] = $f($flds[$j],$tblflds[$i][0]);
		}
	    }
    
	    $tables[] = array($aTblPos[2*$i]   >= 0 ? $this->iLeftMarg+$aTblPos[2*$i]  : $x,
			      $aTblPos[2*$i+1] >= 0 ? $this->iTopMarg +$aTblPos[2*$i+1]: $y,
			      $this->iTableWidth,$tn,$flds);
	    $x += $this->iTableWidth + 1;
	    if( $x>35 ) {
		$x = $this->iLeftMarg;
		$y += $this->iTableAutoHeight;
	    }
	}
	return $tables;
    }
}

?>