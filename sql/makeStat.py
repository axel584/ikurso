# coding: utf-8
import MySQLdb
import codecs
import sys
import config
from datetime import date, time, datetime

sortie = codecs.open('statistique-par-statut.txt','w','utf8')

connection = MySQLdb.connect (host = "127.0.0.1",user = config.user,passwd = config.passwd,db = config.db,charset = 'utf8',use_unicode=True)
cursor = connection.cursor()
cursor2 = connection.cursor()


persono={} # persono[12]=F veut dire que l'élève 12 a terminé son cours
lastleciono={} # lastleciono[12]='12 janvier 2010' veut dire qu'au moment où l'on est dans le programme, l'élève a envoyé une leçon le 12 janvier
nombreDeJours={} # nombreDeJours[5]=45 veut dire qu'il y a 45 élèves qui ont envoyé leur leçon suivante au bout de 5 jours

# cursor.execute("select id from personoj")
# for id, in cursor.fetchall():
# 	cursor2.execute("select stato from nuna_kurso where studanto="+str(id))
# 	for stato, in cursor2.fetchall():
# 		persono[id]=stato

cursor.execute("select horo, persono_id from protokolo where kategorio='TASKO SENDITA' and teksto like 'gerda%' order by horo")
for horo,persono_id in cursor.fetchall():
	# if (not persono.has_key(persono_id) or persono[persono_id]!='K') :
	# 	continue
	if lastleciono.has_key(persono_id) :
		print "on a deja une valeur pour ",persono_id
		diffJour = horo-lastleciono[persono_id]
		print lastleciono[persono_id],horo
		print "diff ",diffJour,diffJour.days
		lastleciono[persono_id]=horo
		if (nombreDeJours.has_key(diffJour.days)) :
			nombreDeJours[diffJour.days]=nombreDeJours[diffJour.days]+1
		else :
			nombreDeJours[diffJour.days]=1
	else :	
		# c'est la première fois, on ne fait que stocker
		print "premiere fois pour ",persono_id
		lastleciono[persono_id]=horo

for nbJours in range(50) :
	if (nombreDeJours.has_key(nbJours)) :
		sortie.write(str(nbJours)+"\t"+str(nombreDeJours[nbJours])+"\n")
	else :	
		sortie.write(str(nbJours)+"\t0\n")

sortie.close()	
