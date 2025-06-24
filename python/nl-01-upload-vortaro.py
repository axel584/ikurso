import os
import MySQLdb
import config

def upload():
    dictionnaire = {}
    conn = MySQLdb.connect(host=config.host,user=config.user,passwd=config.passwd,db=config.db,use_unicode=True)
    # charge tous les mots déjà connu
    cursor = conn.cursor()
    cursor.execute("SELECT eo,fr FROM vortoj")
    for (eo,fr) in cursor.fetchall():
        dictionnaire[eo]=fr

    with open("nilegu/vortaro.csv",encoding='UTF-8') as f:
        for line in f.readlines():
            eo,fr = line.strip().split('\t')
            eo = eo.strip(',').replace('\'','\'\'')
            fr = fr.replace('\'','\'\'')
            print("eo",eo,"fr",fr)
            if not eo in dictionnaire:
                cursor.execute("INSERT INTO vortoj (eo, fr) VALUES ( '"+eo+"', '"+fr+"')")
                dictionnaire[eo]=fr

    
    cursor.close()
    conn.close()

if __name__=="__main__":
    upload()
