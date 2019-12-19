# coding: utf-8
import MySQLdb
import codecs
import sys
import config
import re
from datetime import date, time, datetime

resultat = codecs.open("nbJoursParEleve.csv","w","utf-8")

connection = MySQLdb.connect (host = "127.0.0.1",user = config.user,passwd = config.passwd,db = config.db,charset = 'utf8',use_unicode=True)

cursor = connection.cursor()
cursor2 = connection.cursor()

cursor.execute("SELECT distinct personoj.id,enirnomo FROM personoj join nuna_kurso on nuna_kurso.studanto=personoj.id and nuna_kurso.stato='F' and nuna_kurso.kurso='CG'")
for id_persono,enirnomo in cursor.fetchall() :
    cursor2.execute("SELECT count(distinct(DAYOFYEAR(dato))) as nbjours FROM personoj_lecioneroj WHERE lecionero_id<91 and persono_id="+str(id_persono))
    nbjours, = cursor2.fetchone()
    if nbjours!=0 :
        resultat.write(str(id_persono)+";"+enirnomo+";"+str(nbjours)+"\n")
    
resultat.close()    