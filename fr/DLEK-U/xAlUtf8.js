function xAlUtf8(x) {
	t=x.value;
    t = t.replace(/c[xX]/g, "\u0109");
    t = t.replace(/g[xX]/g, "\u011d");
    t = t.replace(/h[xX]/g, "\u0125");
    t = t.replace(/j[xX]/g, "\u0135");
    t = t.replace(/s[xX]/g, "\u015d");
    t = t.replace(/u[xX]/g, "\u016d");
    t = t.replace(/C[xX]/g, "\u0108");
    t = t.replace(/G[xX]/g, "\u011c");
    t = t.replace(/H[xX]/g, "\u0124");
    t = t.replace(/J[xX]/g, "\u0134");
    t = t.replace(/S[xX]/g, "\u015c");
    t = t.replace(/U[xX]/g, "\u016c");
    if (t != x.value) {
      x.value = t;
    }
}
