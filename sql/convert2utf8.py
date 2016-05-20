# coding: utf-8
import MySQLdb
import codecs

sortie = codecs.open('res-convert.txt','w','utf8')
sortieSql = codecs.open('convert.sql','w','utf8')

def convert2utf8(texte) :
	if texte==None :
		return texte
	if type(texte)==long:
		return texte	
	texte = texte.replace(u'\u0080\u0098',u'\'')	
	texte = texte.replace(u'\u00C2\u0082',u'\uC282')
	texte = texte.replace(u'\u00C2\u0083',u'\uC283')
	texte = texte.replace(u'\u00C2\u0084',u'\uC284')
	texte = texte.replace(u'\u00C2\u0085',u'\uC285')
	texte = texte.replace(u'\u00C2\u00B4',u'\'')	
	texte = texte.replace(u'\u00C2\u00A0',u' ')	
	texte = texte.replace(u'\u00C2\u00A1',u'\uC2A1')	
	texte = texte.replace(u'\u00C2\u00A2',u'\uC2A2')	
	texte = texte.replace(u'\u00C2\u00A3',u'\uC2A3')	
	texte = texte.replace(u'\u00C2\u00A4',u'\uC2A4')	
	texte = texte.replace(u'\u00C2\u00A5',u'\uC2A5')	
	texte = texte.replace(u'\u00C2\u00A6',u'\uC2A6')	
	texte = texte.replace(u'\u00C2\u00A7',u'\uC2A7')	
	texte = texte.replace(u'\u00C2\u00A8',u'\uC2A8')	
	texte = texte.replace(u'\u00C2\u00A9',u'\uC2A9')	
	texte = texte.replace(u'\u00C2\u00AA',u'\uC2AA')
	texte = texte.replace(u'\u00C2\u00AB',u'\uC2AB')
	texte = texte.replace(u'\u00C2\u00AC',u'\uC2AC')
	texte = texte.replace(u'\u00C2\u00AD',u'\uC2AD')
	texte = texte.replace(u'\u00C2\u00AE',u'\uC2AE')
	texte = texte.replace(u'\u00C2\u00AF',u'\uC2AF')
	texte = texte.replace(u'\u00C2\u00B0',u'\uC2B0')
	texte = texte.replace(u'\u00C2\u00BA',u'\uC2BA')
	texte = texte.replace(u'\u00C2\u00BB',u'\uC2BB')
	texte = texte.replace(u'\u00C3\u0089',u'É')	
	texte = texte.replace(u'\u00C3\u00A0',u'à')
	texte = texte.replace(u'\u00C3\u0020',u'à')
	texte = texte.replace(u'\u00C3\u0080',u'À')
	texte = texte.replace(u'\u00C3\u0081',u'\uC381')
	texte = texte.replace(u'\u00C3\u0082',u'\uC382')
	texte = texte.replace(u'\u00C3\u0083',u'\uC383')
	texte = texte.replace(u'\u00C3\u0084',u'\uC384')
	texte = texte.replace(u'\u00C3\u0085',u'\uC385')
	texte = texte.replace(u'\u00C3\u0088',u'\uC388')
	texte = texte.replace(u'\u00C3\u0089',u'\uC389')
	texte = texte.replace(u'\u00C3\u008A',u'\uC38A')
	texte = texte.replace(u'\u00C3\u00A1',u'á')
	texte = texte.replace(u'\u00C3\u00A2',u'â')
	texte = texte.replace(u'\u00C3\u00A7',u'ç')	
	texte = texte.replace(u'\u00C3\u0087',u'Ç')
	texte = texte.replace(u'\u00C3\u008E',u'\uC38E')
	texte = texte.replace(u'\u00C3\u008F',u'\uC38F')
	texte = texte.replace(u'\u00C3\u0094',u'\uC394')
	texte = texte.replace(u'\u00C3\u009C',u'\uC39C')
	texte = texte.replace(u'\u00C3\u009D',u'\uC39D')
	texte = texte.replace(u'\u00C3\u009E',u'\uC39E')
	texte = texte.replace(u'\u00C3\u009F',u'\uC39F')
	texte = texte.replace(u'\u00C3\u00A2',u'\uC3A2')
	texte = texte.replace(u'\u00C3\u00A3',u'\uC3A3')
	texte = texte.replace(u'\u00C3\u00A4',u'\uC3A4')
	texte = texte.replace(u'\u00C3\u00A8',u'è')
	texte = texte.replace(u'\u00C3\u00A9',u'é')
	texte = texte.replace(u'\u00EF\u00BF\u00BD',u'é')
	texte = texte.replace(u'\u00C3\u00AA',u'ê')
	texte = texte.replace(u'\u00C3\u00AB',u'ë')
	texte = texte.replace(u'\u00C3\u00AC',u'\uC3AC')
	texte = texte.replace(u'\u00C3\u00AD',u'\uC3AD')
	texte = texte.replace(u'\u00C3\u00AE',u'î')
	texte = texte.replace(u'\u00C3\u00AF',u'\uC3AF')
	texte = texte.replace(u'\u00C3\u00B0',u'\uC3B0')
	texte = texte.replace(u'\u00C3\u00B1',u'\uC3B1')
	texte = texte.replace(u'\u00C3\u00B3',u'\uC3B3')
	texte = texte.replace(u'\u00C3\u00B4',u'ô')
	texte = texte.replace(u'\u00C3\u00B5',u'\uC3B5')
	texte = texte.replace(u'\u00C3\u00B6',u'\uC3B6')
	texte = texte.replace(u'\u00C3\u00B9',u'ù')
	texte = texte.replace(u'\u00C3\u00BA',u'ú')
	texte = texte.replace(u'\u00C3\u00BB',u'û')
	texte = texte.replace(u'\u00C3\u00BC',u'\uC3BC')
	texte = texte.replace(u'\u00C4\u006f',u'ĝ')
	texte = texte.replace(u'\u00C4\u009D',u'ĝ')
	texte = texte.replace(u'\u00C4\u009C',u'Ĝ')
	texte = texte.replace(u'\u00C4\u0089',u'ĉ')
	texte = texte.replace(u'\u00C4\u00B0',u'\uC4B0')
	texte = texte.replace(u'\u00C4\u00B4',u'\uC4B4')
	texte = texte.replace(u'\u00C4\u00B5',u'\uC4B5')
	texte = texte.replace(u'\u00C4\u00B6',u'\uC4B6')
	texte = texte.replace(u'\u00C5\u009D',u'ŝ')
	texte = texte.replace(u'\u00C5\u00ad',u'ŭ')
	texte = texte.replace(u'\u00C5\u00BA',u'\uC5BA')
	texte = texte.replace(u'\u00C5\u0093',u'oe')
	texte = texte.replace(u'\u00C5\u009C',u'\uC59C')
	texte = texte.replace(u'\u00C5\u009F',u'\uC59F')
	texte = texte.replace(u'\u00C9\u00B4',u'\uC9B4')
	texte = texte.replace(u'\u00e2\u0080\u0099',u'\'')
	i=0
	for car in texte :
		#if ord(car)>125 and ord(car)<220 and ord(car)!=201 :
		if ord(car)>192 and ord(car)<202 and len(texte)>i+1 and ord(texte[i+1])>128 :
			sortie.write(hex(ord(texte[i])*256+ord(texte[i+1]))+"\n")
			sortie.write(texte+"\n")
		i=i+1	
	#sortie.write(texte+"\n")	
	return texte

	#return texte.decode('utf8')

connection = MySQLdb.connect (host = "127.0.0.1",user = "jefo",passwd = "***REMOVED***",db = "ikurso",use_unicode=True)
cursor = connection.cursor()
cursor2 = connection.cursor()



def convertTable(table,clef,colonnes) :
	if clef in colonnes :
		print("ne pas indiquer la clef parmis les colonnes")
		return
	print("select "+clef+","+",".join(colonnes)+" from "+table)
	cursor.execute("select "+clef+","+",".join(colonnes)+" from "+table)
	for row in cursor.fetchall():
		row = [convert2utf8(elem) for elem in row]
		requete = u"update "+table+" set "
		numeroDeColonne = 0
		for element in colonnes :
			if row[numeroDeColonne+1] :
				contenuDeColonne = "'"+row[numeroDeColonne+1].replace("\\","\\\\").replace("'","\\'").replace('\"','\\"')+"'"
			else :
				contenuDeColonne="NULL"	
			requete = requete + element+"="+contenuDeColonne+","
			numeroDeColonne=numeroDeColonne+1
		requete = requete[:-1]
		requete = requete + " where "+clef+"="+str(row[0])
		sortieSql.write(requete+";\n")
		try :
			cursor2.execute(requete)
		except :
			print "requete impossible pour la clef "+clef

convertTable("personoj","id",['enirnomo','pasvorto','personnomo','familinomo','adreso1','adreso2','urbo','kialo'])

sortie.close()