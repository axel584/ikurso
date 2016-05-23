<? include "gerdakapo.inc.php"; ?>
<table class="klarigo">
	<tr>
		<td>
			<h2>Indications pour les exercices :</h2>
			<b>Questionnaire "Demandoj" :</b>
			<p>
			Il s'agit de r&eacute;pondre en utilisant l'une des r&eacute;ponses
			sugg&eacute;r&eacute;es. Toutes les r&eacute;ponses sont grammaticalement correctes
			(quoique parfois loufoques) mais une seule correspond au r&eacute;cit.
			</p>
			
			<b>Questionnaire "Ekzercoj" :</b>
			<p>
			Il s'agit de r&eacute;assembler une phrase en utilisant les morcea&#365;
			de mot &eacute;pars qui vous sont propos&eacute;s. C'est plus facile que &ccedil;a
			n'en a l'air au premier abord. 
			</p>

			<h2>Demandoj (1)</h2>
<p>
<textarea NAME="012 &#265;ap01.1" ROWS=15 COLS=70>
<? if (isset($memorkurso["012_&#265;ap01_1"])){
		echo stripslashes($memorkurso["012_&#265;ap01_1"]);
	}else{
?>
-- Diru al mi:

Kiu sidas en la angulo?
 (Tom / Linda / blonda viro / juna knabino / maljuna viro)

Kiu iras al li?
 (Tom / Linda / blonda viro / juna knabino / maljuna viro)

Al kio iras Tom kaj Linda?
 (al la angulo / al granda spegulo / al la nova studento / al la
blonda viro)

Kiu estas (eble) la plej bela virino en la mondo?
 (Tom / Linda / blonda viro / bela knabino / maljuna viro)

Kiu estas (eble) la plej malserioza knabo en la universitato?
 (Tom / Linda / blonda viro / bela knabino / maljuna viro)



----- Fino de la ekzerco --------------------------------
<? } ?>
</textarea>
<h2>Ekzercoj (1)</h2>
			<p>
			Ekzerco: Formu frazojn.
			</p>
			<p>
			{ -a al -as grand- ir- mi -o spegul- }
			  ---> Mi iras al granda spegulo.
			</p>
			<p>
			{ -as -as est- kiu li mi ne sci- }
			  ---> Mi ne scias, kiu li estas.
			</p>
			<p>
<textarea NAME="012 &#265;ap01.2" ROWS=15 COLS=70>
<? if (isset($memorkurso["012_&#265;ap01_2"])){
		echo stripslashes($memorkurso["012_&#265;ap01_2"]);
	}else{
?>
-- Jen:

{ al rigard- mi -u }

{ -a -as est- grand- li -o vir- }

{ -a -as en est- li -o restoraci- student- }

{ -a jen labor- nov- -o }

{ -a -as nenio nun okaz- special- }

{ -as bel- est- kio -o ? }

{ al -as -in- ir- knab- li -o }

{ -a -as est- mal- serioz- vi }



----- Fino de la ekzerco --------------------------------
<? } ?>
</textarea>
<p>
Ekzerco: Modifu la frazojn.
</p>
<p>
Vi laboras malmulte ---> Laboru multe !
</p>
<p>
<textarea NAME="012 &#265;ap01.3" ROWS=15 COLS=70>
<? if (isset($memorkurso["012_&#265;ap01_3"])){
		echo stripslashes($memorkurso["012_&#265;ap01_3"]);
	}else{
?>
-- Jen:

Vi laboras multe ---> 

Vi rigardas al mi malsincere ---> 

Vi estas serioza --->

Vi laboras malserioze --->



----- Fino de la ekzerco --------------------------------
<? } ?>
</textarea>
</table>
			<div class="kurso">
			<a name="formularo"></a>
			<br><p>La correction des exercices est r&eacute;serv&eacute;e a&#365; personnes qui s'inscrivent officiellement. 
			Inversement l'inscription n'est indispensable que si vous d&eacute;sirez faire appel &agrave; un correcteur. 
			Une confirmation d'inscription vous parviendra par courrier &eacute;lectronique dans les prochains jours. 
			Attendez de la recevoir avant de commencer la de&#365;i&egrave;me le&ccedil;on. 
			</p>
			<p class="normala">
				<input type="radio" name="jamali&#285;i" value="jes"> 
				<input type="hidden" name="010_subjekto" value="&#265;ap01.php">
				Je suis d&eacute;j&agrave; inscrit(e), mon identifiant/mot de passe est :</p>
				<p>
				<table border="0">
					<tr>
						<td class="normala">Identifiant  :</td>
						<td><input type="text" name="ktrl_enirnomo" onFocus="document.mia_Formularo.jamali&#285;i[0].checked=true;"></td>
					</tr>
					<tr>
						<td class="normala">Mot de passe :</td>
						<td><input type="password" name="ktrl_pasvorto"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td align="center"><input type="submit" name="Submit" value="Envoyer"></td>
					</tr>
					<tr>
						<td colspan="2">
							<p class="artifiko"><a href="#formularo" onClick="window.open('../../pasvortoforgesita.php','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=400,height=150');" class="ligo">
							<i>Mot de passe oubli&eacute; ? : Cliquez ici</i></a></p>
						</td>
					</tr>
				</table>
			</p>
			
			<p class="normala">
				<input type="radio" name="jamali&#285;i" value="ne" checked>
				Je souhaite re&ccedil;evoir l'aide d'un correcteur pour suivre ce cours, 
				je m'engage &agrave; envoyer au moins une le&ccedil;on par semaine ou de 
				pr&eacute;venir mon correcteur de tout retard &eacute;ventuel.</p>
			<? include "../../ali&#285;i.inc.php"; ?>
			</form>
<center>
<table border="0" width="800" class="fajna">
<img height=5 width=800 src="../hr05.gif">
	<tr>
		<td width="20%" nowrap>
			<i>Laste reviziita je 2004-12-18</i><br>
			<a href="http://www.esperanto-jeunes.org">
				<Img alt="jefo-logeto" src="../jefo/jefo-pix/jefo-v.gif" border="0"></a><br>
			<i>&copy; Claude Piron</i>
		</td>
		<td class="normala" align="center">
			<form name="mesaxgo" action="../jefo/reago.php" method="POST">
			<input type="hidden" name="lastpa&#285;o" value="<? echo $url ?>">
			<div class="artifiko">Kontaktu nin:&nbsp;
			<input type="image" src="http://ikurso.esperanto-jeunes.org/bildoj/messagerie.gif" align="center" border="0" onClick="this.form.submit();">
			</div>
			</form>
		</td>
		<td align="right" width="20%" nowrap><i>Bildoj el : </i><a href="http://www.lernu.net/">
			<img src="bildoj/lernu120x60b.gif" alt="lernu" align="bottom" border="0"></a></td>
	</tr>
</table>

</center>
</div>
</body></html>


