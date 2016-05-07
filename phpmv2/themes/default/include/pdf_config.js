var cleFldSrc = "src";
var cleFldDst = "dst";
var classSelected = "pdfTrSelected";
var classNotSelected = "";

var selSrcPos = -1; // Selected line in src tab
var selDstPos = -1; // Selected line in dst tab
var tabOpenPage = new Array();
tabOpenPage[cleFldSrc] = new Array();
tabOpenPage[cleFldDst] = new Array();

function toStringChapter() {
  return this.keyParent + "#" + this.key + "#" + this.all + "#" + this.interest;
}

function ChoixChapter(keyParent, key, lib, all, interest, isPage, param) {
	this.key = key;
	this.lib = lib;
	this.all = all;
	this.interest = interest;
    this.keyParent = keyParent;
	this.isPage = isPage;
	if (param) {
		this.param = param;
	}
	else {
		this.param = "";
	}
	
	this.toString = toStringChapter;
}

function openClosePage(p_obj, p_cleFld) {
	if (p_cleFld == cleFldSrc) {
		p_tab = tabSrc;
		p_selPos = p_obj.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.id.substr(p_cleFld.length);
	}
	else {
		p_tab = tabDst;
		p_selPos = p_obj.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.id.substr(p_cleFld.length);
	}
	if (p_selPos >= 0) {
		if (p_tab[p_selPos].isPage) {
			if (tabOpenPage[p_cleFld][p_tab[p_selPos].key]) {
				txt = "none";
				p_obj.value = "+";
			}
			else {
				txt = "";
				p_obj.value = "-";
			}
			tabOpenPage[p_cleFld][p_tab[p_selPos].key] = (! tabOpenPage[p_cleFld][p_tab[p_selPos].key]);
			showHidePageElem (p_tab, p_cleFld, p_tab[p_selPos].keyParent, txt);
		}
	}
}

function srcSelect(p_obj) {
	var p_num = -1;
	/*
	if (p_obj) {
		p_num = p_obj.id.substr(cleFldSrc.length);
	}
	else {
	*/
		p_num = this.id.substr(cleFldSrc.length);
	//}

	if (selSrcPos >= 0) {
		elem = document.getElementById(cleFldSrc+selSrcPos);
		elem.className = classNotSelected;
	}
  
	selSrcPos = p_num;
	elem = document.getElementById(cleFldSrc+selSrcPos);
	elem.className = classSelected;
	/*
	if (tabSrc[selSrcPos].isPage) {
		if (tabOpenPage[cleFldSrc][tabSrc[selSrcPos].key]) {
			showHidePageElem (tabSrc, cleFldSrc, tabSrc[selSrcPos].keyParent, "none");
		}
		else {
			showHidePageElem (tabSrc, cleFldSrc, tabSrc[selSrcPos].keyParent, "");
		}
		tabOpenPage[cleFldSrc][tabSrc[selSrcPos].key] = (! tabOpenPage[cleFldSrc][tabSrc[selSrcPos].key]);
	}
	*/
}

function showHidePageElem (p_tab, p_cleFld, p_keyPage, p_val) {
//alert(p_cleFld+" - " + p_keyPage + " - " + p_val);
	for (i=0; i < p_tab.length; i ++) {
		elem = document.getElementById(p_cleFld+i);
//alert(p_keyPage +" = " +p_tab[i].keyParent+" - " +p_tab[i].key + " - " + p_tab[i].isPage + " - "+elem);
		if ((! p_tab[i].isPage) && (p_tab[i].keyParent == p_keyPage)) {
			elem.style.display = p_val;
		}
	}
}

function dstSelect(p_obj) {
	var p_num = -1;
	/*
	if (p_obj) {
		p_num = p_obj.id.substr(cleFldDst.length);
	}
	else {
	*/
		p_num = this.id.substr(cleFldDst.length);
	//}
	//alert(p_num);
	if (selDstPos >= 0) {
		elem = document.getElementById(cleFldDst+selDstPos);
		elem.className = classNotSelected;
	}
  
	selDstPos = p_num;
	elem = document.getElementById(cleFldDst+selDstPos);
	elem.className = classSelected;
	/*
	if (tabDst[selDstPos].isPage) {
		if (tabOpenPage[cleFldDst][tabDst[selDstPos].keyParent]) {
			showHidePageElem (tabDst, cleFldDst, tabDst[selDstPos].keyParent, "none");
		}
		else {
			showHidePageElem (tabDst, cleFldDst, tabDst[selDstPos].keyParent, "");
		}
		tabOpenPage[cleFldDst][tabDst[selDstPos].keyParent] = (! tabOpenPage[cleFldDst][tabDst[selDstPos].keyParent]);
	}
	*/
	
}

function writeTab (p_tabBody, p_tab, p_cleFld) {
	var ch = "";
	// tbody
	var tb =  document.getElementById(p_tabBody);
	
	for (i=0; i < p_tab.length; i ++) {
	
		myTR = document.createElement("TR");
		myTR.id = p_cleFld + i;
		//setDisplay(myTR, 'none');
		myTD = document.createElement("TD");
		myTD.className = "align";
		//myTD.colSpan = 4;
		//myTD.className = 'tc';
		
		// Set content and event if it is a page
		if (p_cleFld == cleFldSrc) {
			myTD.innerHTML = writeSrcLine(i);
			myTR.onclick = srcSelect;	
		}
		else {
			if (p_tab[i].isPage) {
				nbPageSelected ++;
			}
			myTD.innerHTML = writeDstLine (i);
			myTR.onclick = dstSelect;
		}
		// add td
		myTR.appendChild(myTD);

		tb.appendChild(myTR);
	}
}

function searchLastPage () {
	var ret = -1;
	for (i=0; i < tabDst.length; i++) {
		if (tabDst[i].isPage) {
			elem = document.getElementById(cleFldDst+i);
			if (elem.style.display == "") { // Show
				ret = tabDst[i].keyParent;
			}
		}
	}
	return ret;
}

function addOneElement (p_elem) {
	tabDst[tabDst.length] = p_elem;

	myTR = document.createElement("TR");
	//setDisplay(myTR, 'none');
	myTD = document.createElement("TD");
	//myTD.colSpan = 4;
	//myTD.className = 'tc';
	myTD.innerHTML = writeDstLine (tabDst.length-1);
	myTD.className = "align";
	// add td
	myTR.appendChild(myTD);
	// tbody
	myCurrent =  document.getElementById("dstTabBody");

	//tb = myCurrent.parentNode;
	// add tr
	//myNewTR = tb.insertBefore(myTR, myCurrent.nextSibling);
	myCurrent.appendChild(myTR);
	
	myTR.id = cleFldDst + (tabDst.length -1);
	myTR.onclick = dstSelect;

}

function addLine (p_obj, p_allSection) {
    if (typeof p_obj != "undefined") {
		p_selPos = p_obj.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.id.substr(cleFldSrc.length);
	}
	else {
		p_selPos  = selSrcPos;
	}
	if (p_selPos >= 0) {
		var srcElem = tabSrc[p_selPos];
		if ((nbPageSelected < 0) && (! srcElem.isPage)) {
			alert("Select a page to start");
		}
		else {
			var allSection = false;
			if (srcElem.isPage) {
				var allSection = false;
				if (typeof p_allSection == 'undefined') {
					allSection = confirm("Do you want to select this pages and its content ?");
				}
				else {
					allSection = p_allSection;
				}
				nbPageSelected ++;
				nbPageDstKey ++;
				clePage = cleDstPage+nbPageDstKey;
				tabOpenPage[cleFldDst][clePage] = true;
			}
			else {
				clePage = searchLastPage ();
			}
			//alert(clePage);
			var newElem = new ChoixChapter(	clePage, srcElem.key, srcElem.lib, "false", "false", srcElem.isPage);
			addOneElement (newElem);
			if (allSection) {
				// Copy all elem of the page
				var i = (p_selPos*1)+1;
				while ((i < tabSrc.length) && (tabSrc[i].keyParent == srcElem.key)) {
					tmpElem = tabSrc[i];
					newElem = new ChoixChapter(	clePage, tmpElem.key, tmpElem.lib, "false", "false", tmpElem.isPage);
					addOneElement (newElem);
					i++;
				}
			}
		}
	}
}

function removeLine (p_obj) {
    if (typeof p_obj != "undefined") {
		p_selPos = p_obj.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.id.substr(cleFldDst.length);
	}
	else {
		p_selPos  = selDstPos;
	}
	if (p_selPos >= 0) {
		tb = document.getElementById("dstTabBody");
		var dstElem = tabDst[p_selPos];
		var allRemove = true;
		if (dstElem.isPage) {
			if (confirm("Do you confirm to unselect page and all its content ?")) {
				var i = (p_selPos*1);
				var clePage = dstElem.keyParent;
				tabOpenPage[cleFldDst][clePage] = false;
				nbPageSelected --;
				var nbRemove = 0;
				while ((i < tabDst.length) && (tabDst[i].keyParent == clePage)) {
					//Remove graphical elem
					elem = document.getElementById(cleFldDst+(i+ nbRemove));
					tb.removeChild(elem);
					//Remove data elem
					tabDst.splice(i, 1);
					nbRemove++;
				}
				
			}			
		}
		else {
			//Remove graphical elem
			elem = document.getElementById(cleFldDst+p_selPos);
			tb.removeChild(elem);
			//Remove data elem
			tabDst.splice(p_selPos, 1);
		}
		//Reset all
		selDstPos = -1;
		resetTRId ();
	}
}

function resetTRId () {
	tb = document.getElementById("dstTabBody");
	i = 0;
	elem = tb.firstChild;
	while (elem != null) {
		elem.id = cleFldDst + i;
		//alert(elem.innerHTML+"\n"+tabDst[i].lib);
		if (i < tabDst.length) {
			if (tabDst[i].isPage) {
				elem.onclick = dstSelect;
			}
		}
		else {
			alert("object en dehors du tableau : "+i);
		}
		elem = elem.nextSibling;
		i ++;
	}
}

function writeSrcLine (p_num) {
	newElem = tabSrc[p_num];
	
	ret = "<table class='pdfTableLine' cellpadding=0 cellspacing=0 width='100%'><tr><td class='align' width='100%'>";
	if (tabSrc[i].isPage) {
		if (tabOpenPage[cleFldSrc][tabSrc[p_num].key]) {
			txt = "-";
		}
		else {
			txt = "+";
		}
		ret += ("&nbsp;&nbsp;<input class=\"pdfPlusMoins\" type=\"button\" value=\""+txt+"\" onclick=\"openClosePage(this,'"+cleFldSrc+"')\">&nbsp;&nbsp;");
		ret += ("<b>"+tabSrc[i].lib+"</b>");
		ret += "</td><td>&nbsp;<input type='button' value='>>>' onclick='addLine (this, true)'>&nbsp;"
	}
	else {
		ret += (tabSrc[i].lib);
	}
	ret += "</td><td>&nbsp;<input type='button' value='>>' onclick='addLine (this, false)'>&nbsp;"
	ret += "</td></tr></table>";
	return ret;
}

function writeDstLine (p_num) {
		newElem = tabDst[p_num];
		refElem = tabSrcByKey[newElem.key];
		
		ret = "<table class='pdfTableLine' cellpadding=0 cellspacing=0 width='100%'><tr>";
		ret += "</td><td>&nbsp;<input type='button' value='<<' onclick='removeLine (this)'>&nbsp;</td>"

		ret += "<td class='align' width='100%'>";
		if ((refElem.param == "txt") && (newElem.param != "")) {
			lib = newElem.param;
		}
		else if (refElem.param == "cont") {
			lib = newElem.lib +" ("+langContinent[newElem.param]+")";
		}
		else {
			lib = newElem.lib;
		}
		if (newElem.isPage) {
			if (tabOpenPage[cleFldDst][newElem.key]) {
				txt = "-";
			}
			else {
				txt = "+";
			}
			ret += ("&nbsp;&nbsp;<input class=\"pdfPlusMoins\" type=\"button\" value=\""+txt+"\" onclick=\"openClosePage(this,'"+cleFldDst+"')\">&nbsp;&nbsp;");
			ret += "<b>" + lib + "</b>";
		}
		else {
			ret += lib;
		}
		if ((refElem.interest == "true") || (refElem.all == "true") || (refElem.param != "")) {
			ret += "<br><div align='right'>&nbsp;";
			if (refElem.interest == "true") {
				if (newElem.interest == "true") {
					ret += "<a href=\"javascript:changeInterest(this, 'false')\">Hide interest</a>";
				}
				else {
					ret += "<a href=\"javascript:changeInterest(this, 'true')\">Show interest</a>";
				}
				ret += "&nbsp;&nbsp;&nbsp;";
			}
			if (refElem.all == "true") {
				if (newElem.all == "true") {
					ret += "<a href=\"javascript:changeAll(this, 'false')\">Hide all</a>";
				}
				else {
					ret += "<a href=\"javascript:changeAll(this, 'true')\">Show all</a>";
				}
			}
			if (refElem.param == "txt") {
				ret += "<a href=\"javascript:changeTxt(this)\">Change text</a>";
				ret += "&nbsp;&nbsp;&nbsp;";
			}
			if (refElem.param == "cont") {
				ret += "<a href=\"javascript:changeContinent(this)\">Change continent</a>";
				ret += "&nbsp;&nbsp;&nbsp;";
			}
			
			ret += "</div>";
		}
		ret += "</td></tr></table>";
		return ret;
}

function changeAll (p_obj, p_val) {
	//p_num = p_obj.id.substr(cleFldSrc.length);
	p_num = selDstPos;
	elem = document.getElementById(cleFldDst+p_num); // TR
	elem = elem.firstChild; // TD
	tabDst[p_num].all = p_val;
	elem.innerHTML = writeDstLine (p_num);
}

function changeInterest (p_obj, p_val) {
	//p_num = p_obj.id.substr(cleFldSrc.length);
	p_num = selDstPos;
	elem = document.getElementById(cleFldDst+p_num); // TR
	elem = elem.firstChild; // TD
	tabDst[p_num].interest = p_val;
	elem.innerHTML = writeDstLine (p_num);
}

function changeTxt (p_obj) {
	//p_num = p_obj.id.substr(cleFldSrc.length);
	p_num = selDstPos;
	elem = document.getElementById(cleFldDst+p_num); // TR
	elem = elem.firstChild; // TD
	if (tabDst[p_num].param == "") {
		defTxt = tabDst[p_num].lib;
	}
	else {
		defTxt = tabDst[p_num].param;
	}
	txt = prompt("Text to display in PDF :", defTxt);
	if ((txt) && (txt != "")) {
		tabDst[p_num].param = txt;
	}
	elem.innerHTML = writeDstLine (p_num);
}

function changeContinent (p_obj) {
	//p_num = p_obj.id.substr(cleFldSrc.length);
	p_num = selDstPos;
	elem = document.getElementById(cleFldDst+p_num); // TR
	elem = elem.firstChild; // TD
	do {
		txt = prompt("Input continent key : "+msgContinent, tabDst[p_num].param);
	} while ((txt != null) && (! langContinent[txt]));
	if (txt != null) {
		tabDst[p_num].param = txt;
	}
	elem.innerHTML = writeDstLine (p_num);
}

function moveUpPage (p_keyParent, p_idTopElem, p_idBottomElem) {
	prevElem = document.getElementById(cleFldDst+p_idTopElem);
	tb = prevElem.parentNode;
	// Move data elem
	k = (p_idBottomElem*1);
	nbmove = 0;
	while ((k < tabDst.length) && (p_keyParent == tabDst[k].keyParent)) {
		tmpElem = tabDst[k];
		for (j=k; j > (p_idTopElem + nbmove); j--) {
			tabDst[j] = tabDst[j-1];
		}
		tabDst[p_idTopElem+nbmove] = tmpElem;
		// Move UI
		elem = document.getElementById(cleFldDst+k);
		myNewTR = tb.insertBefore(elem, prevElem);
		k++;
		nbmove++;
	}
	return nbmove;
}

function upLine() {
	if (selDstPos > 0) {
		dstElem = tabDst[selDstPos];
		if (dstElem.isPage) {
			// update all page and is content
			// Search previous page
			i = selDstPos - 1;
			while ((i >= 0) && (! tabDst[i].isPage)) {
				i--;
			}
			if (i >= 0) {
				// Reset selected color
				elem = document.getElementById(cleFldDst+selDstPos);
				elem.className = classNotSelected;
				// Move page
				moveUpPage (dstElem.keyParent, i, selDstPos);
				selDstPos = i;
				resetTRId ();
				// Set selected color
				elem = document.getElementById(cleFldDst+selDstPos);
				elem.className = classSelected;
			}
		}
		else {
			// Update only one chapter
			
			// Verify if there is page
			if (selDstPos <= 1) {
				alert("Can't set element before a page !");
			}
			else {
				// Previous elem
				futurPrevDstElem = tabDst[selDstPos-2];
				if (futurPrevDstElem.keyParent != dstElem.keyParent) {
					dstElem.keyParent = futurPrevDstElem.keyParent;
				}
				// Move  data elem
				tmpElem = tabDst[selDstPos-1];
				tabDst[selDstPos-1] = dstElem;
				tabDst[selDstPos] = tmpElem;
				// Move UI
				elem = document.getElementById(cleFldDst+selDstPos);
				tb = elem.parentNode;
				myNewTR = tb.insertBefore(elem, elem.previousSibling);
				selDstPos--;
				resetTRId ();
			}
		}
	}
}

function downLine() {
	if (selDstPos < (tabDst.length -1)) {
		dstElem = tabDst[selDstPos];
		if (dstElem.isPage) {
			// update all page and is content
			// Search next page
			i = (selDstPos*1) + 1;
			while ((i < tabDst.length) && (! tabDst[i].isPage)) {
				i++;
			}
			if (i < tabDst.length) {
				// Reset selected color
				elem = document.getElementById(cleFldDst+selDstPos);
				elem.className = classNotSelected;
				// Move page
				nbmove = moveUpPage (tabDst[i].keyParent, (selDstPos*1), i);
				selDstPos = (selDstPos*1) + nbmove;
				resetTRId ();
				// Set selected color
				elem = document.getElementById(cleFldDst+selDstPos);
				elem.className = classSelected;
			}
		}
		else {
			// Update only one chapter
			
			// Next  elem
			futurNextDstElem = tabDst[(selDstPos*1)+1];
			if (futurNextDstElem.keyParent != dstElem.keyParent) {
				dstElem.keyParent = futurNextDstElem.keyParent;
			}
			// Deplace data elem
			tmpElem = tabDst[(selDstPos*1)+1];
			tabDst[(selDstPos*1)+1] = dstElem;
			tabDst[selDstPos] = tmpElem;
			// Deplace UI
			elem = document.getElementById(cleFldDst+selDstPos);
			tb = elem.parentNode;
			myNewTR = tb.insertBefore(elem, elem.nextSibling.nextSibling);
			selDstPos++;
			resetTRId ();
		}
	}
}

function unselectSrc () {
	if (selSrcPos >= 0) {
		elem = document.getElementById(cleFldSrc+selSrcPos);
		elem.className = classNotSelected;
		selSrcPos = -1;
	}
}

function closeAll(p_tab, p_cleFld) {
	for (i=0; i < p_tab.length; i ++) {
		elem = document.getElementById(p_cleFld+i);
		if (p_tab[i].isPage) {
			elem.style.display="";
			tabOpenPage[p_cleFld][p_tab[i].keyParent] = false;
		}
		else {
			elem.style.display="none";
		}
	}
}

function writeResult() {
	var elem = document.getElementById("Result");
	var ch = "";
	for (i=0; i < tabDst.length; i ++) {
		if (i > 0) {
			ch += "\n";
		}
		ch += i+"#"+tabDst[i].keyParent + "#key:" + tabDst[i].key + "#lib:" + tabDst[i].lib + "#all:" + tabDst[i].all + "#interest:" + tabDst[i].interest + "#isPage:" + tabDst[i].isPage;
		if (tabDst[i].param != "") {
			ch += "#param:"+tabDst[i].param;
		}
	}
	elem.value = ch;
}
