function loadUrl( url )
{
	window.location = url;
}
function hideIt(current)
{
	inverseDisplay(current);
}
function displayVariables( cur )
{
	hideIt( findFirstChildWithType( cur, 'DIV') );
	
	spanToInverse = findFirstChildWithType( cur, 'SPAN');
	inverseSpan( spanToInverse );
	
}
function displayInterest( cur , link )
{
	hideIt( findNextWithType( cur, 'DIV') );
	
	spanToInverse = findFirstChildWithType( cur, 'SPAN');
	inverseSpan( spanToInverse );
	
	if(spanToInverse.innerHTML == '-')
		pointerUrl( link );
}
function pointerUrl( link )
{
	url = new String(window.location); 

	if(url.lastIndexOf('#') == -1) 
		end = url.length;
	else 
		end = url.lastIndexOf('#');
 	window.location = url.substr(0, end) + '#i' + link;
}
function pointer( current )
{
	current.style.cursor = 'pointer';
}
function colorow(vars, category, color)
{
	if(category != null)
		pointer(vars);

	if(color)
    vars.style.backgroundColor = color;
}

function uncolorow(vars)
{
    vars.style.backgroundColor = "";
}

var vars;
var url;
var tab = Array();
var lastvars='';
var parent = Array();
var axml = Array();
var saxml = 0;

function in_array(tab, element)
{
    for (var i=0; i<=tab.length; i++)
    {
        if (tab[i] == element)
        {
            return true;
        }
    }
    return false;
}

function inverseSpan( cur )
{
	if(cur.innerHTML == '-')
		cur.innerHTML = '+';
	else
		cur.innerHTML = '-';
}
function getDisplay( i )
{
	d = i.style.display;
	if(d == 'none') return 'none';
	else return '';
}
function inverseDisplay( i )
{
	if(getDisplay(i)=='')
	{
		newD = 'none';
		returned = false;
	}
	else
	{
		newD = '';
		returned = true;
	}
	setDisplay(i, newD);
	return returned;
}
function setDisplay(i, d)
{
	i.style.display = d;
}

var loadedTR = Array();

function loadPagesDetails(url, current)
{
	// data loaded
	if(newTR = loadDataAfterThis(url, current, false))
	{
		loadedTR[current] = newTR;
	}

	inverseImg( current.childNodes[1] );
	inverseCategoryDisplay( current );
	
}

function inverseRefererDisplay( i )
{
	inverseClass( i.previousSibling, "bold" );
	inverseDisplay( i );
}
function inverseCategory( myTR )
{
	inverseClass( myTR, "rouge" );
}

function unColorCategory( myTR )
{
	setClass( myTR, "cate");
}

function inverseCategoryDisplay( current )
{
	unColorAllCategory( current );
	unColorAllCategory( current.parentNode.parentNode.parentNode.parentNode );

	if(lastColored)
	{
		unColorCategory( lastColored );
	}

	// case it appears
	if(inverseDisplay( current.nextSibling ))
	{
		inverseCategory( current );
		lastColored = current;

	}
	else
	{
		parentTR = current.parentNode.parentNode.parentNode.parentNode.previousSibling;
		if(parentTR)
		{
			inverseCategory( parentTR );
		}
		lastColored = parentTR;
	}
}

function findRecursiveFirstChildWithType( targetNode, type )
{
	  for(var i = 0; i < targetNode.childNodes.length; i++)
        {
            var child = findRecursiveFirstChildWithType(targetNode.childNodes[i], type);
            if (child.nodeName == type )
                return child;
        }
      return targetNode;
}


function findNextWithType( i , type )
{
	go = i;//.nextSibling;
	while( go.nodeName != type)
	{
		go = go.nextSibling;
	}
	return go;
}

function findFirstChildWithType( targetNode, type )
{
	  for(var i = 0; i < targetNode.childNodes.length; i++)
        {
            var child = targetNode.childNodes[i];
            if (child.nodeName == type )
                return child;
        }
      return false;
}
function findLastChildWithType( targetNode, type )
{
	  for(var i = targetNode.childNodes.length - 1; i >= 0; i--)
        {
            var child = targetNode.childNodes[i];
            if (child.nodeName == type )
                return child;
        }
      return false;
}

function displayRefererKnownDetail( where , what )
{
	where.innerHTML = what.innerHTML;
}

function loadReferersDetails(url, current, currentIsTheTarget, loadStrIsInFirstDiv)
{
//alert(current);
	if( typeof loadStrIsInFirstDiv == 'undefined') loadStrIsInFirstDiv = true;
	
	newTR = loadDataAfterThis(url, current, currentIsTheTarget, loadStrIsInFirstDiv)
	setClass(newTR, 'detail');

	// case new details asked
	if(!currentIsTheTarget)
	{
		inverseImg( current );
		inverseRefererDisplay( current.nextSibling );
	}
}

function loadDataAfterThis(url, current, currentIsTheTarget, loadStrIsInFirstDiv)
{
	var myNewTD;

    // if not previously loaded
    if(!in_array(tab,url) || currentIsTheTarget)
    {
    	var localsaxml = saxml++;

		// var current is before the row we need to create
		if(!currentIsTheTarget)
		{
			myTR = document.createElement("TR");

			setDisplay(myTR, 'none');
			myTD = document.createElement("TD");

			myTD.colSpan = 4;
			myTD.className = 'tc';


			// add td
			myTR.appendChild(myTD);

			// tbody
			tb = current.parentNode;

			// add tr
			myNewTR = tb.insertBefore(myTR, current.nextSibling);
		}
		else
		{
			myNewTR = current;
		}

		myNewTD = findFirstChildWithType( myNewTR, 'TD');

        // code for Mozilla, etc.
        if (window.XMLHttpRequest)
        {
	        axml[localsaxml] = new XMLHttpRequest()
        }
        // code for IE
        else if (window.ActiveXObject)
        {
        	axml[localsaxml] = new ActiveXObject("Microsoft.XMLHTTP");
        }

		strLoad = 'Loading...';
		if(!currentIsTheTarget)
		{
			myNewTD.innerHTML = strLoad;
		}
		else
		{
			if(loadStrIsInFirstDiv)
			{
				whereTo = findFirstChildWithType(myNewTD, "DIV");
			}
			else
			{
				whereTo = findLastChildWithType(myNewTD, "DIV");
			}
			if(!whereTo) alert("not found!");
			whereTo.innerHTML = strLoad;
		}
        axml[localsaxml].onreadystatechange =  function() {
        	if (axml[localsaxml].readyState == 4)
	        {
	            // if "OK"
	            if (axml[localsaxml].status==200)
	            {
	               myNewTD.innerHTML = axml[localsaxml].responseText;
	            }
	        }
	    }
        axml[localsaxml].open("GET",url,true);
        axml[localsaxml].send( null );

		tab[tab.length] = url;

		myNewTD.style.display='';

		return myNewTD.parentNode;
	}
    else
    {
    	return false;
    }
}
function inverseImg( i )
{
	imgObject = findRecursiveFirstChildWithType(i, 'IMG');
	if(imgObject.src)
	{
		imgSrc = imgObject.src;
		var imgInversed = Array(	
			 Array('groupa.gif', 'groupb.gif'),
			 Array('f5a.png', 'f5b.png')
			);
	
		end = imgSrc.length;
	
		for(i = 0; i < imgInversed.length; i++)
		{
			if(imgSrc.substr( end-imgInversed[i][0].length, end) == imgInversed[i][0])
			{
				imgSrc = "./themes/default/images/"+imgInversed[i][1];
			}
			else if(imgSrc.substr( end-imgInversed[i][0].length, end) == imgInversed[i][1])
			{
				imgSrc = "./themes/default/images/"+imgInversed[i][0];
			}
		}
	
		imgObject.src = imgSrc;
	}
}
function unColorAllCategory( current )
{
	pNode = current.parentNode.childNodes;
	for(i = 0; i < pNode.length; i++)
	{
		if(getClassName(pNode[i]) == 'rouge')
		{
			unColorCategory( pNode[i] );
		}
	}

}

var lastColored;

function setClass( i, c )
{
	i.className = c;
}

function getClassName( i )
{
	return i.className;
}

var oldClass = Array(); // old class to restore
function inverseClass( i, c )
{
	if( getClassName(i) == c)
	{
		newClass = oldClass[i];
	}
	else
	{
		oldClass[i] = getClassName(i);
		newClass = c;
	}
	setClass(i, newClass);
}
