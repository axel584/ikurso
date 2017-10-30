//	TTT-KLAVARO POR ESPERANTO
//	por MSIE kaj Firefox.
//	Vi povas uzi sen permeso.
//	(de A. Irvine 2005)
//
//	<script language="JavaScript" src="http://lingvo.org/klavaro/eotajpu.js"></script>
//	<input onkeyup="eotajpu(this,event);">
//	Tajpu x por aldoni supersignon.

var EOTAJPU = true;
var tajplingvo = "eo";

function legu_tajppozicion(elemento)
{
var i=-1, I=i, j=-1, J=j;
try
{
   if(typeof elemento.selectionStart=="number") {
     i=elemento.selectionStart;
     j=elemento.selectionEnd;
     I=i;
     J=j;
       //alert("FO "+i+" "+j);
   } else if(document.selection && elemento.createTextRange) {
	var sel, rngi, rngj, r2;
     // http://msdn.microsoft.com/library/default.asp?url=/workshop/browser/mshtml/reference/ifaces/txtrange/txtrange.asp
     sel=document.selection;
     if(sel){
       try
       {
       r2=sel.createRange();
       rngi=elemento.createTextRange();
       rngi.setEndPoint("EndToStart", r2);
       i=rngi.text.length;
       rngj=elemento.createTextRange();
       rngj.setEndPoint("EndToEnd", r2);
       j=rngj.text.length;
       //alert("MS (input) "+i+" "+j);
       }
       catch(e)
       {
        r2=sel.createRange();
	var r3= r2.duplicate();
	r3.moveToElementText(elemento); // select all text in the duplicate range
	r3.setEndPoint('EndToEnd',r2);
	var x2=r2.text;
	var x3=r3.text; 
	i = x3.length - x2.length;
	j = i + x2.length;

	x2 = x2.replace(/\r?\n/g,"\n"); // \r\n -> longeco 1 ne 2!
	x3 = x3.replace(/\r?\n/g,"\n"); // \r\n -> longeco 1 ne 2!
	//alert("MS (linifinoj) x3+" "+x3.length);
	I = x3.length - x2.length;
	J = I + x2.length;

        //alert("MS (textarea) "+i+" "+j+"("+I+" "+J+")");
       }
     }
   } else {
	   //alert("ER");
	   i=-1;
	   I=i;
	   j=-1;
	   J-j;
   }
}
catch (e)
{
	//alert(e);
}

if (i < 0 || i != j)
{
	i=-1;
	I=i;
	j=-1;
	J=j;
}
var a = new Array();
a[0] = i;
a[1] = j;
a[2] = I;
a[3] = J;
return a; 
} 


function skribu_tajppozicion(elemento, kie)
{
try
{
   if(typeof elemento.selectionStart=="number") {
   	//alert("FO relokigu al "+kie);
	elemento.selectionStart = kie; elemento.selectionEnd = kie; // <-- erareto en Opera 8.5, bug-182864 CHE bugs.opera.com
   } else if(elemento.createTextRange) {
   	//alert("MS relokigu al "+kie);
	var r = elemento.createTextRange(); r.move('character', kie); r.select(); 
   } 
}
catch (e)
{
	alert(e);
}
}


function eotajpu
(
	elemento, // ENA, DEVIGA, FIKSITA "this"
	ev, // ENA, DEVIGA, FIKSITA "event"
	maksimuma_longeco, // ENA, FAKULTATIVA, ENTJERO >= 0
	komencaj_spacoj, // ENA, FAKULTATIVA, true/false
	modelo, // ENA, REGEXP
	alvoko // ENA, KODO ALVOKENDA KIAM ERARO
)
{
	if (!EOTAJPU)
	{
		return;
	}

	var klavo = -1;
	if (ev && ev.which)
	{
	    klavo = ev.which; // NS4 & NS6
	}
	else if (window.event && window.event.keyCode)
	{
	   klavo = window.event.keyCode; // IE
	}
	//alert("Vi premis "+klavo+" "+String.fromCharCode(klavo));
	if (
		klavo != -1
		&& klavo != 0  // mus
		&& klavo != 16 // mal-maj!
		&& klavo != 33 // ^^
		&& klavo != 34 // vv
		&& klavo != 35 // fin
		&& klavo != 36 // hejm
		&& klavo != 37 // <-
		&& klavo != 38 // ^
		&& klavo != 39 // ->
		&& klavo != 40 // v
	)
	{
		try
		{
			var metu = false;
			var a = legu_tajppozicion(elemento);
			var i = a[0];
			var I = a[2];
			var M = -1;
			if (i < 0)
			{
				return;
			}
			var k = elemento.value.substr(0,i);
			var f = elemento.value.substr(i);
			//alert(i+" | "+'"'+k+'"'+" | "+'"'+f+'"');

			var k0 = k;
			var f0 = f;
			if (tajplingvo == "eo")
			{
				k = k.replace(/c[Xx^]$/g,"\u0109");
				k = k.replace(/g[Xx^]$/g,"\u011D");
				k = k.replace(/h[Xx^]$/g,"\u0125");
				k = k.replace(/j[Xx^]$/g,"\u0135");
				k = k.replace(/s[Xx^]$/g,"\u015D");
				k = k.replace(/u[Xx~]$/g,"\u016D");
				k = k.replace(/C[Xx^]$/g,"\u0108");
				k = k.replace(/G[Xx^]$/g,"\u011C");
				k = k.replace(/H[Xx^]$/g,"\u0124");
				k = k.replace(/J[Xx^]$/g,"\u0134");
				k = k.replace(/S[Xx^]$/g,"\u015C");
				k = k.replace(/U[Xx~]$/g,"\u016C");
				if (k.length != k0.length)
				{
					metu = true;
					M=I-1;
				}
				else
				{
					k = k.replace(/\u0109x$/g,"cx");
					k = k.replace(/\u0109X$/g,"cX");
					k = k.replace(/\u011Dx$/g,"gx");
					k = k.replace(/\u011DX$/g,"gX");
					k = k.replace(/\u0125x$/g,"hx");
					k = k.replace(/\u0125X$/g,"hX");
					k = k.replace(/\u0135x$/g,"jx");
					k = k.replace(/\u0135X$/g,"jX");
					k = k.replace(/\u015Dx$/g,"sx");
					k = k.replace(/\u015DX$/g,"sX");
					k = k.replace(/\u016Dx$/g,"ux");
					k = k.replace(/\u016DX$/g,"uX");

					k = k.replace(/\u0108x$/g,"Cx");
					k = k.replace(/\u0108X$/g,"CX");
					k = k.replace(/\u011Cx$/g,"Gx");
					k = k.replace(/\u011CX$/g,"GX");
					k = k.replace(/\u0124x$/g,"Hx");
					k = k.replace(/\u0124X$/g,"HX");
					k = k.replace(/\u0134x$/g,"Jx");
					k = k.replace(/\u0134X$/g,"JX");
					k = k.replace(/\u015Cx$/g,"Sx");
					k = k.replace(/\u015CX$/g,"SX");
					k = k.replace(/\u016Cx$/g,"Ux");
					k = k.replace(/\u016CX$/g,"UX");

					if (k != k0)
					{
						metu = true;
						M=I;
					}
				}
			}

			if (metu)
			{
				elemento.value = k+f;
				skribu_tajppozicion(elemento, M);
				//alert(k0+" => "+k);
			}

			var eraro= false;
			var K=k; K = K.replace(/\r?\n/g,"\n"); // \r\n -> longeco 1 ne 2!
			var F=f; F = F.replace(/\r?\n/g,"\n"); // \r\n -> longeco 1 ne 2!
			M=I;
			if (typeof(maksimuma_longeco) != "undefined" && (K+F).length>maksimuma_longeco)
			{
				eraro = true;
				while (k.length > 0 && (K+F).length>maksimuma_longeco)
				{
					k = k.replace(/\r?.$/, "");
					K = K.replace(/.$/g,"");
					M--;
				}
			}
			if (typeof(komencaj_spacoj) != "undefined" && !komencaj_spacoj && (K+F).match(/^\s+/))
			{
				var re = RegExp("^\\s+");
				while ((K+F).match(re))
				{
					eraro = true;
					while ((K+F).match(re))
					{
						k = k.replace(/^./, "");
						K = K.replace(/^./g,"");
						M--;
					}
				}
			}
			if (typeof(modelo) != "undefined" && modelo.length>0)
			{
				var re = RegExp(modelo);
				while (!(K+F).match(re))
				{
					eraro = true;
					while (!(K+F).match(re))
					{
						k = k.replace(/\r?.$/, "");
						K = K.replace(/.$/g,"");
						M--;
					}
				}
			}
			if (eraro)
			{
				elemento.value = k+f;
				skribu_tajppozicion(elemento, M);
				if (typeof(alvoko) != "undefined" && alvoko.length>0)
				{
					setTimeout(alvoko,0);
				}
			}
			//alert(elemento.value);
		}
		catch (e)
		{
			alert(e);
		}
	}
}

