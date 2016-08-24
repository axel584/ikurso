# -*- coding: utf-8 -*-

from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import Select
from selenium.common.exceptions import NoSuchElementException
from selenium.common.exceptions import NoAlertPresentException
import unittest, time, re
import SQLtest

class Inscription(unittest.TestCase):
    def setUp(self):
        self.driver = webdriver.Firefox()
        self.driver.implicitly_wait(30)
        self.base_url = "https://www.mailinator.com"
        self.verificationErrors = []
        self.accept_next_alert = True
	self.enirnomo = "novalernanto"
	SQLtest.initialisation_bases()

    def havigiRetadreson(self, driver, nomo):	# retourne l'adresse mail temporaoreent crée via "mailinator"
        driver.get("https://www.mailinator.com/")
        driver.find_element_by_id("inboxfield").clear()
        driver.find_element_by_id("inboxfield").send_keys(nomo)
        driver.find_element_by_css_selector("button.btn.btn-dark").click()
	retadreso = driver.find_element_by_xpath("//span[@title='This is an alternate address for this inbox']").get_attribute("innerHTML").strip()
	print "Retadreso de " + nomo + " : " + retadreso
	return retadreso

    def openMail_by_obj(self, driver, nomo, sercobj):  # ouvre le 1er mail dont l'objet match "sercobj"
        driver.get("https://www.mailinator.com/")
        driver.find_element_by_id("inboxfield").clear()
        driver.find_element_by_id("inboxfield").send_keys(nomo)
        driver.find_element_by_css_selector("button.btn.btn-dark").click()
	i = 1;
	obj = driver.find_element_by_xpath("//div[@class='someviewport']/div["+str(i)+"]/div[2]/div[5]/div").get_attribute("innerHTML").strip()
	while sercobj not in obj:
		i = i + 1
		obj = driver.find_element_by_xpath("//div[@class='someviewport']/div["+str(i)+"]/div[2]/div[5]/div").get_attribute("innerHTML").strip()
	driver.find_element_by_xpath("//div[@class='someviewport']/div["+str(i)+"]/div[2]/div[5]").click()
    
    def test_inscription(self):
        driver = self.driver
	retadreso = self.havigiRetadreson(driver, self.enirnomo)
	#driver.get("http://127.0.0.1//phpmail.php") # Envoi d'un mail générique (pour avoir un mail avant le mail d'activation)
	driver.get("http://127.0.0.1/ikurso")
	assert u"découvrir" in driver.page_source
	print "Page d'accueil d'Ikurso"
        driver.find_element_by_link_text(u"CRÉER UN COMPTE").click()
        driver.find_element_by_id("aligxi_retadreso").clear()
        driver.find_element_by_id("aligxi_retadreso").send_keys(retadreso)
        driver.find_element_by_id("aligxi_identigilo").clear()
        driver.find_element_by_id("aligxi_identigilo").send_keys(self.enirnomo)
        driver.find_element_by_id("aligxi_pasvorto").clear()
        driver.find_element_by_id("aligxi_pasvorto").send_keys("passwd")
        driver.find_element_by_id("inscription_button").click()
        driver.find_element_by_id("fermer_button").click()
	assert u"Pour activer votre compte, veuillez cliquer sur le lien" in driver.page_source
	print "Attente d'activation du compte nouvellement crée"
	# driver.get("http://127.0.0.1//phpmail.php") # Envoi d'un mail générique (pour avoir un mail APRÈS le mail d'activation)
	tsleep = 15
	print "sleep de " + str(tsleep) + "s (pour réception mail)"
	time.sleep(tsleep)
	print "fin de l'attente pour réception mail"
	self.openMail_by_obj(driver, self.enirnomo, "Activation de votre compte")
	driver.switch_to_frame(driver.find_element_by_tag_name("iframe")) # on rentre dans le frame du mail ouvert
	# récupération du lien d'activation, depuis le mail d'activation
        link = driver.find_element_by_link_text("lien d'activation de votre compte").get_attribute("href").strip()
	driver.switch_to.default_content() # on revient a la page HTML page défaut
	driver.get(link) # on suit le lien d'activation
	assert u"Votre compte est maintenant activé." in driver.page_source
	print "Activation du nouveau compte: OK"
        driver.find_element_by_link_text("MODIFIER").click()
        driver.find_element_by_id("personnomo").clear()
        driver.find_element_by_id("personnomo").send_keys("Nova")
        driver.find_element_by_id("familinomo").clear()
        driver.find_element_by_id("familinomo").send_keys("Lernanto")
        driver.find_element_by_name("Submit").click()
        driver.find_element_by_css_selector("i.large.material-icons").click()
        driver.find_element_by_link_text(u"Déconnexion").click()
	# vérification de la nouvelle entrée dans la base personoj
	where = dict(enirnomo="'"+self.enirnomo+"'")
	lfields = ['familinomo','personnomo','retadreso','rajtoj','aktivigita']
	res = SQLtest.select_base('personoj', lfields, where)
	assert len(res) == 1
	assert res[0][0] == "Lernanto"
	assert res[0][1] == "Nova"
	assert res[0][2] == retadreso
	assert res[0][3] == "P"
	assert res[0][4] == 1
	print "Nouvelle ligne dans la base 'personoj' : OK"
	# test refus e-mail déjà pris
	driver.get("http://127.0.0.1/ikurso")
        driver.find_element_by_link_text(u"CRÉER UN COMPTE").click()
        driver.find_element_by_id("aligxi_retadreso").clear()
        driver.find_element_by_id("aligxi_retadreso").send_keys(retadreso)
        driver.find_element_by_id("aligxi_identigilo").clear()
        driver.find_element_by_id("aligxi_identigilo").send_keys(self.enirnomo+"2")
        driver.find_element_by_id("aligxi_pasvorto").clear()
        driver.find_element_by_id("aligxi_pasvorto").send_keys("passwd")
        driver.find_element_by_id("inscription_button").click()
	assert u"Un compte existe déjà avec cette adresse e-mail" in driver.page_source
	print "Refus d'une adresse e-mail déjà existante: OK"
	# test refus Identifiantdéjà pris
	driver.get("http://127.0.0.1/ikurso")
        driver.find_element_by_link_text(u"CRÉER UN COMPTE").click()
        driver.find_element_by_id("aligxi_retadreso").clear()
        driver.find_element_by_id("aligxi_retadreso").send_keys("nova"+retadreso)
        driver.find_element_by_id("aligxi_identigilo").clear()
        driver.find_element_by_id("aligxi_identigilo").send_keys(self.enirnomo)
        driver.find_element_by_id("aligxi_pasvorto").clear()
        driver.find_element_by_id("aligxi_pasvorto").send_keys("passwd")
        driver.find_element_by_id("inscription_button").click()
	assert u"Un compte existe déjà avec cet identifiant" in driver.page_source
	print "Refus d'un identifiant déjà existant: OK"
    
    def is_element_present(self, how, what):
        try: self.driver.find_element(by=how, value=what)
        except NoSuchElementException as e: return False
        return True
    
    def is_alert_present(self):
        try: self.driver.switch_to_alert()
        except NoAlertPresentException as e: return False
        return True
    
    def close_alert_and_get_its_text(self):
        try:
            alert = self.driver.switch_to_alert()
            alert_text = alert.text
            if self.accept_next_alert:
                alert.accept()
            else:
                alert.dismiss()
            return alert_text
        finally: self.accept_next_alert = True
    
    def tearDown(self):
	SQLtest.clear_bases()   # RAZ des bases 'personoj' et 'nunu_kurso'
        self.driver.quit()
        self.assertEqual([], self.verificationErrors)

if __name__ == "__main__":
    unittest.main()
