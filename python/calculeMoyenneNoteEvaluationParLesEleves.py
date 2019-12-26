# coding: utf-8
import MySQLdb
import codecs
import sys
import config
import re
from datetime import date, time, datetime

resultat = codecs.open("EvaluationLecon.csv","w","utf-8")

connection = MySQLdb.connect (host = "127.0.0.1",user = config.user,passwd = config.passwd,db = config.db,charset = 'utf8',use_unicode=True)

cursorKurso = connection.cursor()
cursorLeciono = connection.cursor()
cursorLecionero = connection.cursor()
cursorTempo = connection.cursor()

def arrondi(secondes) :
    if secondes==None :
        return
    else :    
        minutes = round(secondes/60)
        if minutes>10 :
            paquet5 = round(minutes/5)
            minutes=paquet5*5
        return minutes
    

def mediane(tableau) :
    if len(tableau)==0 :
        return
    indice_median = round(len(tableau)/2)
    if indice_median==0 :
        return
    tableau.sort()    
    #print(tableau)
    return tableau[indice_median-1]    

resultat.write("leçon;interret;difficultés\n")

cursorKurso.execute("SELECT id,kodo FROM kursoj where kodo='CG' or kodo='GR'")
for id_kurso,kodo_kurso in cursorKurso.fetchall() :
    print("kurso : "+kodo_kurso)
    cursorLeciono.execute("select id,numero,titolo from lecionoj where kurso='"+kodo_kurso+"' order by numero")
    for id_leciono,numero,titolo in cursorLeciono.fetchall() :
        titolo = titolo.replace(';','')
        print ("leciono : "+str(numero))
        cursorLecionero.execute("SELECT intereso,malfacileco FROM takso_leciono WHERE leciono_id="+str(id_leciono))
        sommeIntereso = 0
        sommeMalfacileco = 0
        nbNotes = 0
        for intereso,malfacileco in cursorLecionero.fetchall() :
            sommeIntereso = sommeIntereso + intereso
            sommeMalfacileco = sommeMalfacileco + malfacileco
            nbNotes=nbNotes+1
        if nbNotes == 0 :
            resultat.write(titolo+";NA;NA\n")
        else :
            resultat.write(titolo+";"+str(sommeIntereso/nbNotes)+";"+str(sommeMalfacileco/nbNotes)+"\n")

            
            
