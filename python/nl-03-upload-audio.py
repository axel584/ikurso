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

    for chemin_fichier in glob.glob("../audio/*.mp3"):
        nom_fichier = os.path.basename(chemin_fichier)
        id_str, _ = os.path.splitext(nom_fichier)
        print(id_str)
        if id_str in tekstoj : # si l'id est dans la liste des fichiers, on le met a jour
            url_sono = "https://ikurso.esperanto-france.org/audio/"+id_str+".mp3"
            sql = "UPDATE tekstoj SET sono = %s WHERE id = %s"
            cursor.execute(sql, (url_sono, id_str))
    
    cursor.close()
    conn.commit()
    conn.close()

if __name__=="__main__":
    upload()