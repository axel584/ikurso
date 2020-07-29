# coding: utf-8
import MySQLdb
import codecs
import sys
import config
import re
from datetime import date, time, datetime

resultat = codecs.open("updateDauxro.sql","w","utf-8")

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
    indice_median = int(round(len(tableau)/2))
    if indice_median==0 :
        return
    tableau.sort()    
    #print(tableau)
    #print(indice_median)
    return tableau[indice_median-1]        

cursorKurso.execute("SELECT id,kodo FROM kursoj")
for id_kurso,kodo_kurso in cursorKurso.fetchall() :
    print("kurso : "+kodo_kurso)
    cursorLeciono.execute("select id,numero,titolo from lecionoj where kurso='"+kodo_kurso+"' order by numero")
    for id_leciono,numero,titolo in cursorLeciono.fetchall() :
        #print ("leciono : "+str(numero))
        cursorLecionero.execute("SELECT id,titolo,dauxro FROM lecioneroj WHERE leciono_id="+str(id_leciono)+" order by ordo")
        for id_lecionero,titolo_lecionero,dauxro_lecionero in cursorLecionero.fetchall() :
            #print("id_lecionero : "+str(id_lecionero)+" / lecionero : "+titolo_lecionero.encode('utf-8').decode('ascii','ignore'))
            cursorTempo.execute("SELECT dato-ekdato as dauxro FROM personoj_lecioneroj WHERE lecionero_id="+str(id_lecionero)+" and ekdato is not null")
            dauxroj = []
            for dauxro, in cursorTempo.fetchall():
                dauxroj.append(dauxro)
            if len(dauxroj)<2 :
                continue
            valeur_mediane = mediane(dauxroj)
            if valeur_mediane==None :
                continue
            nova_dauxro = arrondi(valeur_mediane)
            if (nova_dauxro!=dauxro_lecionero and nova_dauxro!=0):
                print("ancien :"+str(dauxro_lecionero)+"/nouvelle : "+str(nova_dauxro))
                resultat.write("-- "+titolo_lecionero+" ("+str(dauxro_lecionero)+")\n")
                resultat.write("update lecioneroj set dauxro="+str(nova_dauxro)+" where id="+str(id_lecionero)+";\n")
            
            
