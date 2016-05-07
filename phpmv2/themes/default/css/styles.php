<?php
header('Content-type: text/css');
$theme_path = "";
$direction = $_GET['dir'];

if ($direction == "rtl")
{
	$rightouleft = "right";
	$leftouright = "left";
}
else
{
	$rightouleft = "left";
	$leftouright = "right";
}

print "
/* styles par defaut pour tous les elements */
* {
font-family: verdana, tahoma, Trebuchet MS,arial, sans-serif;
}

/* style de la page */
BODY {
background: #FFFFFF;
margin: 0;
}
/* Gros titres */
H1 {
padding-top:10px;
padding-bottom:10px;
direction: $direction;
font-size: 150%;
text-align: center;
color: #00008B;
}
/* Gros titres rouges */
H2 {
direction: $direction;
font-size: large;
text-align: center;
line-height:1.5em;
color: #FF0000;
}
/* titres moyens (rubriques par exemple) */
H3 {
direction: $direction;
text-align: $rightouleft;
background-image: url('../images/f1ltr.png');
background-repeat: no-repeat;
padding-left:20px;
font-size: medium;
background-position: 0%;
color: #00008B;
margin-top: 2em;
margin-left: 2em;
margin-bottom: 2em;
}
/* green big messages */
H4 {
direction: $direction;
font-size: large;
text-align: center;
line-height:1.5em;
color: #1bbd1b;
}
/* small titles */
H5 {
direction: $direction;
text-align: $rightouleft;
font-size: 95%;
color: #000000;
margin-top: 1.5em;
margin-left: 2em;
margin-bottom: 0.3em;
}
/* Cadre general */
#main {
margin: 5px;
margin-top:20px;
text-align: center;
background: #FFFFFF;
}

/* cadre dans lequel se trouve les donnees */

#contenu {
font-size: 90%;
line-height: 1.4em;
width: 860px;
border: 1px solid #00008B;
text-align: $rightouleft;
margin: auto;
padding: 0.5em;
}
#login, #loginTable{ 
margin:auto;
font-size: 90%;
}
#login{
margin-top: 100px;
margin-bottom: 100px;
}
#interest{
margin-top:10px;
margin-left:70px;
font-size:100%;
border-bottom: 2px dotted #F0F0F0;
color:#696a6c;
}
#interestcontent {
margin-top:20px;
}
A.help_pagename {

	margin-left:70px;
	font-size:80%;
	color:#B9BBBE;
	font-decoration:italic;
	border-bottom: 1px dotted #E3E3E3;
}
#includepopulationtop, A.includepopulation  {
	margin-left:470px;
	margin-top:30px;
	font-size:100%;
	color:#696a6c;
}
#includepopulation, A.includepopulation {
	border-bottom: 2px dotted #F0F0F0;
}

/* menu haut */
#menu {
margin: 0;
padding: 0;
text-align: center;
}
#menu LI {
display: inline;
margin: 0;
padding: 0;
margin-top:8px;
float: left;
text-align: center;
voice-family: \"\\\"}\\\"\";
voice-family:inherit;
width: 108px;
}
html>body #menu LI {
width: 122px;
}
#menu LI UL { /* listes de deuxieme niveau */
padding: 0;
position: absolute;
background: #ffffff;
border: 1px solid #00008B;
left: -999em; /* on met left plutot que display pour cacher les menus parce que display: none n'est pas lu par les lecteurs d'ecran */
}
#menu LI UL LI { /* sous-listes */
float: none;
width: auto;
}
#menu LI UL LI A { /* sous-listes */
border-width: 0;
border-top: 1px solid #ffffff;
border-bottom: 1px solid #ffffff;
font-variant: normal;
font-weight: normal;
text-align: left;
}
#menu LI UL LI A:hover { /* sous-listes */
border-top: 1px solid #00008B;
border-bottom: 1px solid #00008B;
}
#menu LI:hover UL { /* listes imbriquees sous les items de listes survoles */
left: auto;
}
#menu LI.sfhover UL { /* listes imbriquees sous les items de listes survoles */
left: auto;
margin-left: -54px;
}
#menu A {
display: block;
padding: 0.2em;
color: #00008B;
border: 1px solid #00008B;
font-size: 92%;
font-variant: 10pt-caps;
font-variant: small-caps;
font-weight: bolder;
text-decoration: none;
}
#menu A:hover {
background-color: #f0f7ff;
}


/* Comportement des liens par defaut */
A {
color: #00008B;
text-decoration: none;
}

/* TOP Link */
A.movetop {
display: block;
margin-top: 2em;
}

/* Comportement par defaut de la balise <SMALL> */
SMALL {
font-size:0.8em;
}
/* Comportement par defaut de la balise <FORM> */
FORM {
margin: 0;
padding: 0;
}
/* Comportement par defaut des listes deroulantes */
SELECT {
font-size:0.8em;
direction: $direction;
}
SELECT > OPTION {
background-color: #F8FBFF;
}
/* DIV generique permettant de remettre les position a zero (notament apres des float) */
DIV.both {
clear: both;
}
IMG.generic {
display: block;
margin-left: auto;
margin-right: auto;
 }
/* DIV generique permettant de faire un centrage de contenu */
DIV.centrer {
text-align: center;
}
/* pour install & contacts */
P.texte {
direction: $direction;
text-align: justify;
margin-left: 100px;
margin-right: 100px;
}
P.texte:first-letter {
margin-left: 3em;
}
/* Paragraphe generique avec texte centre */
P.centrer {
text-align: center;
}
/* Affichage de code (javascript par ex) */
CODE {
direction: $direction;
text-align: left;
display: block;
font-size: 90%;
border-style: dashed dashed dashed solid;
border-color: rgb(0, 0, 139);
border-width: 1px 1px 1px 5px;
margin: 2px;
margin-bottom: 20px;
padding: 4px;
background-color: rgb(240, 247, 255);
}
CODE STRONG {
font-size: 100%;
font-weight: bold;
}
/* style par defaut de toutes les images */
IMG {
border: 0;
}
/* champs de formulaire */
input, textarea {
background: #FBFBFF;
border: #b3b3b3 1px solid;
color: #0c183a;
}

/* boutons radio dans config */
input.bouton {
background: #FFFFFF;
border: #FFFFFF 1px solid;
}

#install_steps {

float:left;
text-align:left;
padding-right:30;
margin-left:50;
}

/* liste des liens vers les contacts, site et admin */
#admin {
width: 100%;
padding: 0;
padding-top: 50px;
margin: 0;
text-align: center;
}
#admin LI {
display: inline;
margin: 0;
padding: 0;
float: left;
text-align: center;
}
#admin LI.site {
width: 25%;
}
#admin LI.install {
width: 49%;
}
#admin LI.contacts {
width: 25%;
}
#admin LI A {
padding-top: 0.5em;
font-size: 100%;
}
#admin LI.site  A {
border-top: 1px dashed #00008B;
}
#admin LI.install A {
border-top: 1px dashed #00008B;
border-right: 1px dashed #00008B;
border-left: 1px dashed #00008B;
}
#admin LI.contacts A {
border-top: 1px dashed #00008B;
}
#admin A {
display: block;
padding: 0.2em;
color: #00008B;
text-decoration: none;
}
/* DIV contenant le logo + le choix des sites + le calendrier */
#logo {
width: 100%;
}
/* Choix des sites */
#sites {
bottom:0;
float: right;
padding-right: 15px;
height: 130px;
}
#sites SELECT {
border: #000000 1px solid;
margin: auto;
margin-top: 110px;
}
#sites P {
margin: 0;
}
#sites OPTGROUP {
padding-left: 3px;
}
/* Calendrier */
#calendrier {
float: right;
text-align: $rightouleft;
}
#calendrier P {
margin: 0;
}
#calendrier TABLE {
direction: $direction;
border: 1px solid rgb(80, 100, 133);
border-bottom: 1px solid #506485;
border-left: 1px solid #506485;
border-collapse: collapse;
line-height: 100%;
margin-top:6px;
}
#calendrier A.selection {
color: red;
}
#calendrier TH {
border-top: 1px solid rgb(80, 100, 133);
border-right: 1px solid rgb(80, 100, 133);
font-weight: bold;
text-align: center;
background-color: #f0f7ff;
width: 16px;
padding: 0.1em;
margin: 0;
font-size: x-small;
}
#calendrier TD {
border-top: 1px solid rgb(80, 100, 133);
border-right: 1px solid rgb(80, 100, 133);
text-align: center;
color: #c0c0c0;
padding: 0.2em;
margin: 0;
font-size: x-small;
}
#calendrier A.selection {
color: red;
}
#calendrier SELECT {
border: #000000 1px solid;
}
/* Choix de la langue */
#choixlangue {
float: $leftouright;
margin: auto;
text-align: center;
}
#choixlangue FIELDSET {
width: 130px;
padding: 5px;
}
#choixlangue LEGEND {
color: rgb(0, 0, 139);
font-weight: bold;
font-size:90%;
}
#choixlangue P {
margin: 0;
}
/* styles pour les infos techniques */
P.gristrans {
color: #cdcaca;
}
P.archivefait {
font-size: 10pt;
color: #ffffff;
}
P.gristrans A {
color: #cdcaca;
}
P.gristrans EM A{
font-style: italic;
}
P.archive {
font-size: 70%;
color: #bcbcbc;
margin: 0;
text-align: center;
}
P.archive EM {
font-size: 100%;
font-style: italic;
}
P.gristrans STRONG {
font-weight: bold;
}
P.archive STRONG {
font-weight: bold;
}
SPAN.oktrans {
color: #9ec2a7;
}
SPAN.errortrans {
color: red;
}
/* Information de la periode visualisee */
P.periodevisu {
margin: 0;
font-size:90%;
}
P.choixperiode {
margin: 0;
margin-right: 2em;
color: #818181;
}
P.choixperiode A {
font-style: italic;
color: #818181;
font-size:90%;
}
/* Tableau de saisie de donnee dans l'admin */
TABLE.centrer {
margin: auto;
}

#error{
color:red;
font-size:100%;
font-weight:bold;
}
TABLE TD.error {
font-size:150%;
color:red;
}

/* Tous les tableaux de resultats */
TABLE.resultats, TABLE.interest  {
font-size:90%;
direction: $direction;
margin: auto;
empty-cells: hide;
font-size: 90%;
border:0
}
TABLE.interest {
width:75%;
empty-cells: hide;
}
TABLE.resultats TH, TABLE.interest TH{
font-size:90%;
border-top: 1px solid rgb(80, 100, 133);
border-right: 1px solid rgb(80, 100, 133);
font-weight: bold;
text-align: center;
background-color: rgb(96, 115, 165);
color: #ffffff;
padding:7px;
padding-right:4px;
padding-left:4px;
empty-cells: hide;
}
TABLE.resultats TD, TABLE.interest TD {
font-size:90%;
border: 1px solid rgb(226, 227, 228);
text-align: center;
color: #00008B;
padding-top:3px;
padding-bottom:3px;
}
TABLE.resultats TD.damier, TABLE.interest TD.damier  {
background-color: rgb(241, 242, 243);
}
TABLE.resultats TD.damierlight  {
background-color: #f6f6f6;
}
TABLE.resultats TD.damieralign, TABLE.interest TD.damieralign {
background-color: rgb(241, 242, 243);
text-align: $rightouleft;
padding:6;
}
TABLE.resultats TD.align, TABLE.interest TD.align {
text-align: $rightouleft;
padding:6;
}
TABLE.resultats TD.vide, TABLE.resultats TH.vide, TABLE.interest TD.vide, TABLE.interest TH.vide {
border-width: 0;
background-color: #ffffff;
}
TABLE.resultats TD.sansbordure, TABLE.interest TD.sansbordure {
border-width: 0;
text-align: $rightouleft;
}
TABLE.resultats TD STRONG, TABLE.interest TD STRONG {
font-weight: bold;
}

TABLE TD.details {
padding:0;
margin:0;
}

/* Tous les tableaux de sous-resultats */
TABLE.sresultats {
margin: auto;
empty-cells: hide;
}
TABLE.sresultats TH {
border-top: 1px solid rgb(80, 100, 133);
border-right: 1px solid rgb(80, 100, 133);
font-weight: bold;
text-align: center;
background-color: rgb(96, 115, 165);
color: #ffffff;
font-size: 100%;
}

/* Affichage des resultats positifs (vert en general) */
SPAN.positif {
direction: $direction;
color: #008000;
font-weight: bold;
}
/* Affichage des resultats negatifs (rouge en general) */
SPAN.negatif {
direction: $direction;
color: red;
font-weight: bold;
}
/* Menu d'administration */
#menuadmin {
width: 400px;
margin: auto;
text-align: center;
}
#menuadmin UL {
direction: $direction;
text-align: $rightouleft;
list-style-image: url(\"./themes/default/images/f3$direction.png\");
}
#menuadmin LI {
padding: 0.5em;
}
/* Informations lors de modification dans la partie admin */
P.admininfos {
color: #000000;
font-weight: bold;
text-align: center;
}
P.admininfos positif {
color: #00FF00;
}
P.admininfos negatif {
color: #FF0000;
}

/* link Next / Previous */
#next {
margin-bottom:10px;
font-size:85%;
margin-top:5px;
}
/* Details pour les moteurs, mots cle et sites internet */
#detail{
width: 98%;
padding-top:10px;
padding-bottom:10px;
padding-right:5px;
padding-left:5px;
}
/*
.detail #next A {
color:#c47105;
}
*/
#detail TH {
border: 1px solid #fbc074;
background-color: #fbc074;
margin: 1px;
padding: 2px;
font-size:90%;
text-align: $rightouleft;
padding-$rightouleft: 20px;
color: #6f522d;
}
#detail TD {
white-space: nowrap;
border: 1px solid #fbc074;
margin: 1px;
padding: 3px;
font-size:80%;
color: #6073a5;
text-align: $rightouleft;
margin-left:10px;
}
#detail TD.nb {
text-align: center;
width: 20%;
}
#detail TD.data {
padding-left:10px;
}
#detail TD.data IMG{
padding-right:10px;
}
#detail A {
color: #6073a5;
}

/*VARIABLES */
#variables{
width: 200px;
border: 1px solid #FB6666;
border-top:0;
margin-right:50px;
}
#variables TD {
white-space: nowrap;
margin: 0px;
padding: 1px;
font-size:95%;
color: #E17445;
text-align: $rightouleft;
margin-left:10px;
border-top: 1px solid #FB6666;
}
#variables TD.header{
color:#CD3131;
font-weight:bold;
padding:5;
}
#variables TD.nb {
text-align: center;
width: 20%;
padding:3;
border-left: 1px solid #FB6666;
}
#variables TD.data {
padding-left:10px;
border-right: 0;
}
#variables TH{
background-color: #FB6666;
margin: 1px;
padding: 2px;
text-align: $rightouleft;
padding-$rightouleft: 20px;
color: white;
border:0;
}

/* PAGES VIEWS (AJAX TREE) */

TABLE tr.root{
color:blue;
background-color: #eefbff;
font-weight:bold;
}

TABLE tr.rouge{
color:red;
background-color: #deefff;
font-weight:bold;
}

TABLE td.rouge{
color:red;
background-color: #deefff;
}

TABLE.sub0, TABLE.sub1, TABLE.sub2, TABLE.sub3, TABLE.sub4, TABLE.sub5, TABLE.sub6 {
direction: $direction;
border:0;
margin: auto;
empty-cells: hide;
font-size:100%;
}

TABLE.sub TD,
TABLE.sub0 TD,
TABLE.sub1 TD,
TABLE.sub2 TD,
TABLE.sub3 TD,
TABLE.sub4 TD,
TABLE.sub5 TD,
TABLE.sub6 TD
{
border:0;
font-size:100%;
border-top: 1px solid #e2e3e4;
text-align: left;
color: #00008B;
padding-top:5px;
padding-bottom:5px;
}

/* contains a subtable */
TABLE TD.tc{
padding:0;
}

/* without top border */
TABLE TD.wtb{
border-top:0;
padding-top:0;
}
/* with right border */
TABLE TD.wrb{
border-right: 1px solid #e2e3e4;
}

TABLE TD.acenter{
text-align: center;
color: #00008B;
}

TABLE.sub0 TD.data{
padding-left:5px;
}
TABLE.sub1 TD.data{
padding-left:45px;
}
TABLE.sub2 TD.data{
padding-left:75px;
}
TABLE.sub3 TD.data{
padding-left:110px;
}
TABLE.sub4 TD.data{
padding-left:140px;
}
TABLE.sub5 TD.data{
padding-left:150px;
}
TABLE.sub6 TD.data{
padding-left:160px;
}

TABLE TR.cate, TABLE TR.rouge{
height:28px;
font-weight: bold;
}

/* ADMINISTRATION */

#urlGeneration UL {
align:center;
list-style-type: decimal;
direction: $direction;
text-align: justify;
margin-left: 100px;
margin-right: 100px;
}

#generalAdmin {
width: 50%;
float: left;
}
#detailAdmin {
width: 50%;
float: right;
}
#detailInstall {
width: 60%;
float: right;
}
#detailAdmin UL {
padding: 0;
}
#generalAdmin UL, #detailAdmin UL {
list-style-type: georgian;
}
#adminSiteSelection P {
text-align:center;
}
#adminSiteSelection UL {
margin-left:40%;
list-style-type: none;
}

/* BUTTONS */
.boutonsAction {
text-align: center;
}
.boutonsAction INPUT {
	border: 3px double #999;
	border-left-color: #ccc;
	border-top-color: #ccc;
	color: #333;
	padding: 0.25em;
	font-size: 1.2em;
	text-align: center;
}

.boutonsAction INPUT:active {
	background: #f4f4f4;
	border: 3px double #ccc;
	border-left-color: #999;
	border-top-color: #999;
}

input.bouton {
background: #FFFFFF;
border: #FFFFFF 1px solid;
}


/* Tableau d'infos dans l'admin */
TABLE.infos {
font-size:90%;
direction: $direction;
margin: auto;
empty-cells: hide;
font-size: 90%;
cellspacing:0;
border:0;
width:95%;
empty-cells: hide;
}
TABLE.infos TD {
font-size:90%;
border: 1px solid rgb(226, 227, 228);
color: #00008B;
padding-top:3px;
padding-bottom:3px;
}
TABLE.infos TD.libelle {
width: 250px;
}
TABLE.infos UL {
direction: $direction;
text-align: $rightouleft;
list-style-type: none;
margin: 0;
padding: 0;
}


/* errors in admin */
#errorsForm {
color: orange;
}
";
 ?>
