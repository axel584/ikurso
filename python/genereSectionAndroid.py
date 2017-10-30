# coding: utf-8
import MySQLdb
import codecs
import sys
import config
from datetime import date, time, datetime

dictSectionsSuivantes = {}

cours = 'CG'

connection = MySQLdb.connect (host = "127.0.0.1",user = config.user,passwd = config.passwd,db = config.db,charset = 'utf8',use_unicode=True)
cursor = connection.cursor()


# on fait une premiere passe pour mémoriser les sections suivantes
cursor.execute("SELECT lecioneroj.id as id,lecioneroj.titolo as titolo,enhavo,numero,ordo FROM `lecioneroj` join lecionoj on lecionoj.id=lecioneroj.leciono_id WHERE enhavo is not null and kurso='"+cours+"' order by numero,ordo")

sectionPrecedente = 0
for id,titolo,enhavo,numero,ordo in cursor.fetchall():
	if sectionPrecedente!=0 :
		dictSectionsSuivantes[sectionPrecedente] = id
	sectionPrecedente = id	


# on fait une deuxième passe pour générer les pages

cursor.execute("SELECT lecioneroj.id as id,lecioneroj.titolo as titolo,enhavo,numero,ordo,dauxro FROM `lecioneroj` join lecionoj on lecionoj.id=lecioneroj.leciono_id WHERE enhavo is not null and kurso='"+cours+"' order by numero,ordo")

for id,titolo,enhavo,numero,ordo,dauxro in cursor.fetchall():
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

