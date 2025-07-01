# coding: utf-8
import os
import MySQLdb
import config
import glob

def upload():
    tekstoj = {}
    conn = MySQLdb.connect(host=config.host,user=config.user,passwd=config.passwd,db=config.db,use_unicode=True,charset='utf8mb4')
    # charge tous les mots déjà connu
    cursor = conn.cursor()
    cursor.execute("SELECT id,enhavo FROM tekstoj")
    for (id,enhavo) in cursor.fetchall():
        tekstoj[id]=True

    for chemin_fichier in glob.glob("nilegu/json/*.json"):
        nom_fichier = os.path.basename(chemin_fichier)
        id_str, _ = os.path.splitext(nom_fichier)
        print(id_str)
        with open(chemin_fichier,"r", encoding="utf-8") as f:
            contenu_json = f.read()
            #print(contenu_json)
            if id_str in tekstoj : # si l'id est dans la liste des fichiers, on le met a jour
                sql = "UPDATE tekstoj SET enhavo = %s WHERE id = %s"
                cursor.execute(sql, (contenu_json, id_str))



    
    cursor.close()
    conn.commit()
    conn.close()

if __name__=="__main__":
    upload()