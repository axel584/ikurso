# coding: utf-8
import MySQLdb
import codecs
import sys
import config
from datetime import date, time, datetime

connection = MySQLdb.connect (host = "127.0.0.1",user = config.user,passwd = config.passwd,db = config.db,charset = 'utf8',use_unicode=True)
cursor = connection.cursor()
cursor2 = connection.cursor()
cursor3 = connection.cursor()
cursor4 = connection.cursor()


cursor.execute("select horo,persono_id,teksto from protokolo where kategorio='TASKO SENDITA'")
for horo,persono_id,teksto in cursor.fetchall():
	if (teksto.startswith("lec")) :
		kurso = "CG"
		leciono = teksto[3:5].strip("0")
	elif (teksto.startswith("gerda")) :
		kurso = "GR"
		leciono = teksto[10:12].strip("0")
	else :
		print teksto	
	print kurso,leciono,persono_id,horo	
	cursor2.execute("select id from lecionoj where numero='"+leciono+"' and kurso='"+kurso+"'")
	leciono_id = cursor2.fetchone()[0]
	print leciono_id
	cursor3.execute("select count(*) as combien from personoj_lecionoj where persono_id='"+str(persono_id)+"' and leciono_id='"+str(leciono_id)+"'")
	combien = cursor3.fetchone()[0]
	print combien
	if (combien==0) :
		print "zero"
		cursor4.execute("insert into personoj_lecionoj (dato, persono_id,leciono_id) values ('"+str(horo)+"',"+str(persono_id)+","+str(leciono_id)+")")
	


connection.commit()
