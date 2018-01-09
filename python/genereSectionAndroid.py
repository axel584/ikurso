# coding: utf-8
import MySQLdb
import codecs
import sys
import config
import re
from datetime import date, time, datetime

dictSectionsSuivantes = {}

cours = 'CG'

connection = MySQLdb.connect (host = "127.0.0.1",user = config.user,passwd = config.passwd,db = config.db,charset = 'utf8',use_unicode=True)
cursor = connection.cursor()
cursorEkzerco = connection.cursor()
cursorEkzercero = connection.cursor()
cursorQcmDemando = connection.cursor()
cursorQcmPropono = connection.cursor()


# on fait une premiere passe pour mémoriser les sections suivantes
cursor.execute("SELECT lecioneroj.id as id,lecioneroj.titolo as titolo,enhavo,numero,ordo FROM `lecioneroj` join lecionoj on lecionoj.id=lecioneroj.leciono_id WHERE enhavo is not null and kurso='"+cours+"' order by numero,ordo")

sectionPrecedente = 0
for id,titolo,enhavo,numero,ordo in cursor.fetchall():
	if sectionPrecedente!=0 :
		dictSectionsSuivantes[sectionPrecedente] = id
	sectionPrecedente = id	


# on fait une deuxième passe pour générer les pages

cursor.execute("SELECT lecioneroj.id as id,lecioneroj.titolo as titolo,enhavo,numero,ordo,dauxro FROM `lecioneroj` join lecionoj on lecionoj.id=lecioneroj.leciono_id WHERE enhavo is not null and kurso='"+cours+"' order by numero,ordo")

def replaceEkzercoj(matchobj) :
	id_ekzerco = matchobj.group(1)
	print "id_ekzerco : "+str(id_ekzerco)
	cursorEkzerco.execute("SELECT komando,komando_detalo,ekzemplo,typo,x2u,korektebla FROM `ekzercoj` where id="+id_ekzerco)
	komando,komando_detalo,ekzemplo,typo,x2u,korektebla = cursorEkzerco.fetchone()
	resultat = u"<fieldset class='ekzerco'>"
	resultat += "<legend><strong>EXERCICE</strong> : "+komando+"</legend>"
	if komando_detalo!="" :
		resultat += "<p>"+komando_detalo+"</p>"
	resultat += u"<p class='eo eta'>Pour remplir les exercices et les soumettre à un correcteur, rendez vous sur le site internet du cours : <a href='https://ikurso.esperanto-france.org'>ikurso.esperanto-france.org</a>.</p>\n"

	# on affiche l'exemple s'il y en a un
	if 	ekzemplo!="" :
		resultat += "<div class='ekzemplo row'>"
		resultat += "<p><em>Exemples :</em></p>"
		resultat += ekzemplo
		resultat += "</div>"

	resultat += "<div class='tasko'>"
	resultat += "<div class='row'>"	

	cursorEkzercero.execute("SELECT id,numero,demando,korektebla,bildo FROM `ekzerceroj` where ekzerco_id="+str(id_ekzerco)+" and forigita=0 order by numero")
	for id_ekzercero,numero,demando,korektebla,bildo in cursorEkzercero.fetchall() :
		resultat +=  "<p class='col s12 demando'>"+str(numero)+". "+demando+"</p>\n"



	resultat +=  "</div>"
	resultat +=  "</div>"
	resultat +=  "</fieldset>"
	return resultat

def replaceQcm(matchobj) :
	id_qcm = matchobj.group(1)
	print id_qcm
	cursorKiomDemandoj = connection.cursor()
	cursorKiomDemandoj.execute("select count(*) as kiom from qcm_demando where qcm_id="+id_qcm)
	kiomDemando = cursorKiomDemandoj.fetchone()[0]
	print str(kiomDemando)+" questions en base"
	resultat = u"<div class='qcm' id='carousel_qcm'>"
	indiceQuestion= 1
	cursorQcmDemando.execute("SELECT id,ordo,bildo,url,auxtoro,demando,respondo  FROM `qcm_demando` WHERE `qcm_id` = "+id_qcm+" order by ordo")
	for id_demando,ordo,bildo,url,auxtoro,demando,respondo in cursorQcmDemando.fetchall() :
		if (indiceQuestion==1) :
			resultat +="<div class='qcm_demando row'>"
		else :
			resultat +="<div class='qcm_demando row hide'>"
		resultat += "<h3>Question "+str(indiceQuestion)+"/"+str(kiomDemando)+" :</h3>"

		if demando!=None :
			resultat +="<p>"+demando+"</p>"
		if bildo!=None :
			resultat += "<p class='col s12 m6 l5'>"
			resultat += "<img src='"+bildo+"' class='responsive-img'><br>"
			if auxtoro!=None :
				resultat += "<legend>photo : <a href='"+url+"'>"+auxtoro+"</a></legend>"
			resultat += "</p>"
			resultat += "<p class='col s12 m6 l7'>"
			resultat += "</p>";
		indiceProposition= 1;
		cursorQcmPropono.execute("SELECT id,propono,indikilo  FROM `qcm_propono` WHERE `qcm_demando_id` = "+str(id_demando)+" order by ordo")	
		for id_propono,propono,indikilo in cursorQcmPropono.fetchall() :
			if indiceProposition==respondo :
				style = "qcm_ok"
			else :
				style = "qcm_nok"
			if indiceQuestion==kiomDemando :
				lasta = "data-lasta='true'"
			else :
				lasta = ""
			resultat +="<input type='radio' name='qcm"+str(indiceQuestion)+"' value='"+str(indiceProposition)+"' id='00"+str(indiceQuestion)+"-0"+str(indiceProposition)+"' class='"+style+"' "+lasta+"/><label for='00"+str(indiceQuestion)+"-0"+str(indiceProposition)+"'>"+propono+"</label><br>"
			indiceProposition += 1
		resultat +="</div>\n"
		indiceQuestion += 1
	resultat += "</div>"	
	# TODO : ajouter le récapitulatif
	return resultat

for id,titolo,enhavo,numero,ordo,dauxro in cursor.fetchall():
	# traitement pour le contenu (QCM, exercice etc.)
	enhavo = re.sub("##EKZERCO:(\d+)##",replaceEkzercoj,enhavo)
	enhavo = re.sub("##QCM:(\d+)##",replaceQcm,enhavo)

	# mis en place des éléments dans le template
	template = codecs.open('templates/lecionero.html','r','utf-8').read()
	template = template.replace("##LECIONO_NUMERO##",str(numero))
	template = template.replace("##LECIONERO_NUMERO##",str(ordo))
	template = template.replace("##DAUXRO##",str(dauxro))
	template = template.replace("##TITOLO##",titolo)
	template = template.replace("##ENHAVO##",enhavo)
	if (dictSectionsSuivantes.has_key(id)) :
		template = template.replace("##VENONTA_LECIONERO_ID##",str(dictSectionsSuivantes[id]))
	else :
		template = template.replace("##VENONTA_LECIONERO_ID##","splashscreen")	# si on n'a pas de section suivante, on renvoie sur le splashscreen
	resultat = codecs.open("../ikurso/www/html/"+str(id)+".html","w","utf-8")
	resultat.write(template)
	resultat.close()

