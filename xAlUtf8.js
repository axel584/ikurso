function xAlUtf8(x) {
  console.log("xAlUtf8");
  positionCurseur = x.selectionStart;

	t=x.value;
    t = t.replace(/c[xX]/g, "\u0109");
    t = t.replace(/g[xX]/g, "\u011d");
    t = t.replace(/h[xX]/g, "\u0125");
    t = t.replace(/j[xX]/g, "\u0135");
    t = t.replace(/s[xX]/g, "\u015d");
    t = t.replace(/u[xX]|ù/g, "\u016d");
    t = t.replace(/C[xX]/g, "\u0108");
    t = t.replace(/G[xX]/g, "\u011c");
    t = t.replace(/H[xX]/g, "\u0124");
    t = t.replace(/J[xX]/g, "\u0134");
    t = t.replace(/S[xX]/g, "\u015c");
    t = t.replace(/U[xX]|Ù/g, "\u016c");
   
	t = t.replace(/�/g, "\u0109");
    t = t.replace(/�/g, "\u011d");
    t = t.replace(/�/g, "\u0125");
    t = t.replace(/�/g, "\u0135");
    t = t.replace(/�/g, "\u015d");
    t = t.replace(/�/g, "\u016d");
    t = t.replace(/�/g, "\u0108");
    t = t.replace(/�/g, "\u011c");
    t = t.replace(/�/g, "\u0124");
    t = t.replace(/�/g, "\u0134");
    t = t.replace(/�/g, "\u015c");
    t = t.replace(/�/g, "\u016c");

    if (t != x.value) {
      x.value = t;
      // si on a modifie le texte, c'est qu'on a transformé 2 caractères en 1, 
      // on va donc remettre le curseur un caractère à gauche
      x.setSelectionRange(positionCurseur-1, positionCurseur-1);
    }
    
}
