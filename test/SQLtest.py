# -*- coding: utf-8 -*-

import config #fichier perso contenant non de la base, non user, password
#import mysql.connector
import mysql.connector

# liste d'utilisateurs (identifiant et adresse e-mail)
# La première lettre de l'identifiant désigne les droits de l'utilisateur
# l'identifaiant est celui utilisé dans www.mailinator.com pour accéder à la boite mails
# l'adresse e-mail est celle donnée par mailinator, elle permet l'envoi de mails
lpersonoj = ['P_persono',\
             'S_persono',\
             'S1_Persono',\
             'S2_persono',\
             'S3_persono',\
             'S4_persono',\
             'S5_persono',\
             'S6_persono',\
             'S7_persono',\
             'S8_persono',\
             'S9_persono',\
             'S10_persono',\
             'K1_persono',\
             'K2_persono',\
             'K3_persono',\
             'K4_persono',\
             'A_persono']


def initialisation_bases():
        # connexion à la base de données
        connection = mysql.connector.connect(host="127.0.0.1",user=config.user,passwd=config.passwd,db=config.db,charset='utf8',use_unicode=True)
        cursor = connection.cursor()
        cursor2 = connection.cursor()
 
        # RAZ des bases "personoj" et "nuna_kurso" et "korektebla_kurso"
        cursor.execute("delete from personoj")
        cursor.execute("delete from nuna_kurso")
        cursor.execute("delete from korektebla_kurso")

        for pers in lpersonoj:   # insertion, un à un, des users dans la base 'personoj'
                enirnomo = pers
                retadreso = pers + "@mailinator.com"
                familinomo = enirnomo.split("_")[1]
                personnomo = enirnomo.split("_")[0]
                pasvorto = "passwd"
                cursor.execute("INSERT INTO `personoj` (`id`, `ekdato`, `lasteniro`, `sekso`, `familinomo`, `personnomo`, `enirnomo`, `pasvorto`, `adreso1`, `adreso2`,\
                 `posxtkodo`, `urbo`, `lando`, `latitudo`, `longitudo`, `retadreso`, `naskigxdato`, `rajtoj`, `kialo`, `noto`,\
                 `maksimumo`, `kurso`, `videbla`, `stop_info`, `stop_rappel`, `aktivigo`, `aktivigita`, `pasvorto_md5`)\
                 VALUES (NULL, '2016-08-23', CURRENT_TIMESTAMP, NULL,'"+familinomo+"','"+personnomo+"','"+enirnomo+"','"+pasvorto+"', NULL, NULL,\
                 NULL, NULL, NULL, NULL, NULL, '"+retadreso+"', NULL, '"+enirnomo[0]+"', NULL, NULL,\
                 '3', 'CG', 'J', 'N', 'N', NULL, '1', MD5('"+pasvorto+"'))")

        lk = []  # file d'attente pour les correcteurs
        cursor.execute("SELECT id, enirnomo FROM `personoj` WHERE `rajtoj` = 'K' ")
        print("Correcteurs:")
        for kid, nomo in cursor.fetchall():
                print(str(kid) + " -> " + nomo)
                lk += [kid]
                cursor2.execute("INSERT INTO `korektebla_kurso` (`korektanto`, `kurso`, `kiom_lernantoj`) VALUES ('"+str(kid)+"', 'CG', '3');")
                cursor2.execute("INSERT INTO `korektebla_kurso` (`korektanto`, `kurso`, `kiom_lernantoj`) VALUES ('"+str(kid)+"', 'GR', '3');")

        print(u"Élèves:")
        cursor.execute("SELECT id, enirnomo FROM `personoj` WHERE `rajtoj` = 'S' ")
        for sid, nomo in cursor.fetchall():
                print(str(sid) + " -> " + nomo)
                if "S_" in nomo:
                        cursor2.execute("INSERT INTO `nuna_kurso` (`id`, `ekdato`, `findato`, `stato`, `lastdato`, \
                        `korektanto`, `pasintakorektanto`, `studanto`, `nunleciono`, `kurso`)\
                         VALUES (NULL, '2016-08-01', NULL, 'H', '2016-08-02', '"+str(lk[0])+"', NULL, '"+str(sid)+"', '1', 'CG')")
                else:
                        if "S1" in nomo:
                                if "S10_" in nomo:  # élève S10
                                        cursor2.execute("INSERT INTO `nuna_kurso` (`id`, `ekdato`, `findato`, `stato`, `lastdato`, \
                                        `korektanto`, `pasintakorektanto`, `studanto`, `nunleciono`, `kurso`)\
                                         VALUES (NULL, '2016-08-01', NULL, 'F', '2016-08-02', '"+str(lk[0])+"', NULL, '"+str(sid)+"', '10', 'CG')")
                                else:  # &lèves S1
                                        cursor2.execute("INSERT INTO `nuna_kurso` (`id`, `ekdato`, `findato`, `stato`, `lastdato`, \
                                        `korektanto`, `pasintakorektanto`, `studanto`, `nunleciono`, `kurso`)\
                                         VALUES (NULL, '2016-08-01', NULL, 'N', '2016-08-02', '0', NULL, '"+str(sid)+"', '1', 'CG')")
                        else:
                                cursor2.execute("INSERT INTO `nuna_kurso` (`id`, `ekdato`, `findato`, `stato`, `lastdato`, \
                                `korektanto`, `pasintakorektanto`, `studanto`, `nunleciono`, `kurso`)\
                                 VALUES (NULL, '2016-08-01', NULL, 'K', '2016-08-02', '"+str(lk[0])+"', NULL, '"+str(sid)+"', '"+nomo[1]+"', 'CG')")
                lk = lk[1:] +  [lk[0]]  # rotation des correcteurs dans la file
                
        connection.close()



def clear_bases():
        # connexion à la base de données
        connection = mysql.connector.connect(host="127.0.0.1",user=config.user,passwd=config.passwd,db=config.db,charset='utf8',use_unicode=True)
        cursor = connection.cursor()
        # RAZ des bases "personoj" et "nuna_kurso" et "korektebla_kurso"
        cursor.execute("delete from personoj")
        cursor.execute("delete from nuna_kurso")
        cursor.execute("delete from korektebla_kurso")
        # fermeture de la connexion SQL
        connection.close()
        

def select_base(base, lfields, where):
        # connexion à la base de données
        connection = mysql.connector.connect(host="127.0.0.1",user=config.user,passwd=config.passwd,db=config.db,charset='utf8',use_unicode=True)
        cursor = connection.cursor()
        # construction de la requete SQL
        req = "SELECT "
        for key in lfields:
                req += key + ","
        req = req[:-1]
        req += " FROM `" + base + "` WHERE "
        for key in where.keys():
                req += "`"+key+"`=" + where[key] + "  AND "
        req = req[:-6]
        # print(req)
        # execution de la requete
        cursor.execute(req)
        # enregistrement des résultats
        res = []
        for line in cursor.fetchall():
                res += [line]
        # fermeture de la connexion SQL
        connection.close()
        return res

