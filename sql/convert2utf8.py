# coding: utf-8
import MySQLdb
import codecs

sortie = codecs.open('res-convert.txt','w','utf8')

def convert2utf(texte) :
	if texte==None :
		return texte
	#texte = texte.replace(u'Ã©',u'é')
	texte = texte.replace(u'Ã©',u'')
	#texte = texte.replace(u'Ãª',u'ê')
	texte = texte.replace(u'Ãª',u'')
	#texte = texte.replace(u'Ã ',u'à')
	texte = texte.replace(u'Ã ',u'')
	#texte = texte.replace(u'Ã¨',u'è')
	texte = texte.replace(u'Ã¨',u'è')
	#texte = texte.replace(u'Ã¢',u'â')
	texte = texte.replace(u'Ã¢',u'')
	#texte = texte.replace(u'Ã§',u'ç')
	texte = texte.replace(u'Ã§',u'')
	#texte = texte.replace(u'Ã´',u'ô')
	texte = texte.replace(u'Ã´',u'')
	
	for car in texte :
		if ord(car)>125 :
			print car
			print texte
	return texte

def convert2utf8(texte) :
	if texte==None :
		return texte
	if type(texte)==long:
		return texte	
	texte = texte.replace(u'\u0080\u0098',u'\'')	
	texte = texte.replace(u'\u00C2\u00B4',u'\'')	
	texte = texte.replace(u'\u00C3\u0089',u'É')	
	texte = texte.replace(u'\u00C3\u00A0',u'à')
	texte = texte.replace(u'\u00C3\u0020',u'à')
	texte = texte.replace(u'\u00C3\u0080',u'À')
	texte = texte.replace(u'\u00C3\u00A1',u'á')
	texte = texte.replace(u'\u00C3\u00A2',u'â')
	texte = texte.replace(u'\u00C3\u00A7',u'ç')	
	texte = texte.replace(u'\u00C3\u0087',u'Ç')
	texte = texte.replace(u'\u00C3\u00A8',u'è')
	texte = texte.replace(u'\u00C3\u00A9',u'é')
	texte = texte.replace(u'\u00EF\u00BF\u00BD',u'é')
	texte = texte.replace(u'\u00C3\u00AA',u'ê')
	texte = texte.replace(u'\u00C3\u00AB',u'ë')
	texte = texte.replace(u'\u00C3\u00AE',u'î')
	texte = texte.replace(u'\u00C3\u00af',u'oe')
	texte = texte.replace(u'\u00C3\u00B4',u'ô')
	texte = texte.replace(u'\u00C3\u00B9',u'ù')
	texte = texte.replace(u'\u00C3\u00BB',u'û')

	texte = texte.replace(u'\u00C4\u006f',u'ĝ')
	texte = texte.replace(u'\u00C4\u009D',u'ĝ')
	texte = texte.replace(u'\u00C4\u009D',u'Ĝ')
	texte = texte.replace(u'\u00C4\u0089',u'ĉ')
	texte = texte.replace(u'\u00C5\u009D',u'ŝ')
	texte = texte.replace(u'\u00C5\u00ad',u'ŭ')
	texte = texte.replace(u'\u00C5\u0093',u'oe')
	texte = texte.replace(u'\u00e2\u0080\u0099',u'\'')
	i=0
	for car in texte :
		if ord(car)>125 and ord(car)<220 :
			if i!=0 :
				 sortie.write(unicode(i-1)+":"+texte[i-1]+":"+hex(ord(texte[i-1]))+"\n")
			sortie.write(unicode(i)+":"+car+texte[i]+":"+hex(ord(car))+"\n")
			if len(texte)>i+1 :
				sortie.write(unicode(i+1)+":"+texte[i+1]+":"+hex(ord(texte[i+1]))+"\n")
			sortie.write(texte)
		i=i+1	
	return texte

	#return texte.decode('utf8')

connection = MySQLdb.connect (host = "127.0.0.1",user = "jefo",passwd = "polavuk",db = "ikurso",use_unicode=True)
cursor = connection.cursor()
cursor2 = connection.cursor()
cursor.execute("select id,urbo,kialo from personoj")
for row in cursor.fetchall():
	row = [convert2utf8(elem) for elem in row]
	id,urbo,kialo = row
	sortie.write(unicode(id)+"\n")
	#print kialo,urbo
	#cursor2.execute("update personoj set urbo='"+urbo.replace("'","''")+"' where id=12")
	
sortie.close()

def convertTable(table,clef,colonnes) :
	print "coucou"	
