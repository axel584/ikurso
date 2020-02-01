# coding: utf-8
import MySQLdb
import codecs
import sys
import config
import re
from datetime import date, time, datetime

######################################################################
#
# TODO : Il faudrait ajouter le temps passé sur chacune 
# des premières pages, mais on n'a l'info qu'à partir de juillet 2019
#
######################################################################


resultat = codecs.open("randomForest.csv","w","utf-8")

connection = MySQLdb.connect (host = "127.0.0.1",user = config.user,passwd = config.passwd,db = config.db,charset = 'utf8',use_unicode=True)

def nbPoints(persono_id,ekzerco_id) :
    cursor = connection.cursor()
    cursor.execute("SELECT sum(gxusta) as points FROM respondoj join ekzerceroj on ekzerceroj.id=respondoj.ekzercero_id where persono_id='"+str(persono_id)+"' and ekzerco_id="+str(ekzerco_id))
    reponse = cursor.fetchone()
    if reponse==None :
        return '0'
    else :    
        return str(reponse[0])

def longueurExercice19(persono_id) :
    cursor = connection.cursor()
    cursor.execute("SELECT length(respondo) FROM respondoj where persono_id='"+str(persono_id)+"' and ekzercero_id=19")
    reponse = cursor.fetchone()
    if reponse==None :
        return '0'
    else :    
        return str(reponse[0])

def nbChampInscriptionNonNull(sekso,naskigxjaro,adreso1,adreso2,personnomo,familinomo,posxtkodo,lando) :
    nbChamp = 0
    if sekso!=None :
        nbChamp=nbChamp+1
    if naskigxjaro!=None :
        nbChamp=nbChamp+1
    if adreso1!=None :
        nbChamp=nbChamp+1    
    if adreso2!=None :
        nbChamp=nbChamp+1
    if personnomo!=None :
        nbChamp=nbChamp+1
    if familinomo!=None :
        nbChamp=nbChamp+1
    if posxtkodo!=None :
        nbChamp=nbChamp+1
    if lando!=None :
        nbChamp=nbChamp+1        
    return str(nbChamp)

def finPremiereLecon(persono_id) :
    cursor = connection.cursor()
    cursor.execute("SELECT dato FROM personoj_lecioneroj where persono_id="+str(persono_id)+" and lecionero_id=8")
    reponse = cursor.fetchone()
    if reponse==None :
        return ''
    else :    
        return str(reponse[0])

def nbMotsRevise(persono_id) :
    dateFinPremiereLecon = finPremiereLecon(persono_id)
    if dateFinPremiereLecon=='' :
        return '0'
    cursor = connection.cursor()
    cursor.execute("SELECT count(*) as combien FROM `personoj_vortoj_respondoj` where persono_id="+str(persono_id)+" and dato<'"+dateFinPremiereLecon+"'")
    return str(cursor.fetchone()[0])
    
cursor = connection.cursor()
cursor.execute("select personoj.id as persono_id,sekso,year(naskigxdato) as naskigxjaro,adreso1,adreso2,personnomo,familinomo,posxtkodo,lando,datediff(nuna_kurso.ekdato,personoj.ekdato) as tempsPremiereLecon,nuna_kurso.stato from personoj join nuna_kurso on nuna_kurso.studanto=personoj.id where nuna_kurso.kurso='CG' and nuna_kurso.ekdato>'2018-01-01' and nuna_kurso.ekdato<'2020-01-01' and (nuna_kurso.stato='F' or nuna_kurso.stato='H')")
resultat.write("P1;P2;P3;P4;P5;P6;P7;S1\n")
for persono_id,sekso,naskigxjaro,adreso1,adreso2,personnomo,familinomo,posxtkodo,lando,tempsPremiereLecon,stato in cursor.fetchall():
    #resultat.write(str(persono_id)+";") # pas besoin d'identifier les personnes pour faire le calcul
    if naskigxjaro==None :
        naskigxjaro=0
    resultat.write(str(naskigxjaro)+";") # P1
    resultat.write(nbPoints(persono_id,1)+";") # P2
    resultat.write(nbPoints(persono_id,2)+";") # P3
    resultat.write(longueurExercice19(persono_id)+";") # P4
    resultat.write(nbChampInscriptionNonNull(sekso,naskigxjaro,adreso1,adreso2,personnomo,familinomo,posxtkodo,lando)+";") # P5
    resultat.write(nbMotsRevise(persono_id)+";") # P6
    # TODO : ajouter le temps passé sur les premieres pages
    resultat.write(str(tempsPremiereLecon)+";") # P7
    resultat.write(str(stato)) # S1
    resultat.write("\n")