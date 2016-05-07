<? 
$titolo="1 (unu)";
include "gerdakapo.inc.php"; 
?>
		<div class="klarigo">
			<h2>Indications pour les exercices :</h2>
			<p><b>Questionnaire (Demandoj) :</b> 
			Il s'agit de répondre en utilisant l'une des réponses
			suggérées. Toutes les réponses sont grammaticalement correctes
			(quoique parfois loufoques) mais une seule correspond au récit.
			La réponse doit consistee en une (ou plusieurs!) phrase(s) complète(s).
			</p>
			
			<p><b>Exercices (Ekzercoj) :</b>
			Il s'agit de réassembler une phrase en utilisant les morceaux
			de mot épars qui vous sont proposés. C'est plus facile que ça
			n'en a l'air au premier abord. 
			</p>

			<h3>Demandoj</h3>
			<input type="hidden" name="013_cxap01.0" value="Demandoj">

			<p>-- Diru al mi :</p>
			<div class="tasko">
			<? $demandoj=array (
				1 => "Kiu sidas en la angulo? (Tom / Linda / blonda viro / juna knabino / maljuna viro)",
				2 => "Kiu iras al li? (Tom / Linda / blonda viro / juna knabino / maljuna viro)",
				3 => "Al kio iras Tom kaj Linda? (al la angulo / al granda spegulo / al la nova studento / al la blonda viro)",
				4 => "Kiu estas (eble) la plej bela virino en la mondo? (Tom / Linda / blonda viro / bela knabino / maljuna viro)",
				5 => "Kiu estas (eble) la plej malserioza knabo en la universitato? (Tom / Linda / blonda viro / bela knabino / maljuna viro)"
				);
				ekzerco("U", 1);
			?>
			</div>

			<h3>Ekzerco</h3>
			<p>Formu frazojn.<br>
			<input type="hidden" name="013_cxap01.1" value="1. Formu frazojn.">
			<em>
			{ -a al -as grand- ir- mi -o spegul- } ---> Mi iras al granda spegulo.<br>
			{ -as -as est- kiu li mi ne sci- } ---> Mi ne scias, kiu li estas.</em><br>
			-- Jen:</p>
			<div class="tasko">
			<? $demandoj=array (
				6 => "{ al rigard- mi -u }",
				7 => "{ -a -as est- grand- li -o vir- }",
				8 => "{ -a -as en est- li -o restoraci- student- }",
				9 => "{ -a jen labor- nov- -o }",
				10 => "{ -a -as nenio nun okaz- special- }",
				11 => "{ -as bel- est- kio -o ? }",
				12 => "{ al -as -in- ir- knab- li -o }",
				13 => "{ -a -as est- mal- serioz- vi }"
				);
				ekzerco("U", 1);
			?>
			</div>

			<p>Modifu la frazojn.<br>
			<input type="hidden" name="013_cxap01.2" value="2. Modifu la frazojn.">
			<em>Vi laboras malmulte ---> Laboru multe !</em></p>
			<div class="tasko">
			<? $demandoj=array (
				14 => "Vi laboras multe",
				15 => "Vi rigardas al mi malsincere", 
				16 => "Vi estas serioza",
				17 => "Vi laboras malserioze"
				);
				ekzerco("U", 1);
			?>
			</div>

				<p id="formularo">La correction des exercices est r&eacute;serv&eacute;e aux personnes qui 
				s'inscrivent officiellement. 
				Inversement l'inscription n'est indispensable que si vous d&eacute;sirez faire 
				appel &agrave; un correcteur. Une confirmation d'inscription vous parviendra par 
				courrier &eacute;lectronique dans les prochains jours. 
				Attendez de la recevoir avant de commencer la deuxi&egrave;me le&ccedil;on. 
				</p>
				<p class="important">
				Important : si vous avez déjà suivi le "Cours en dix leçons" ou le "Kurso de Esperanto" et que
				vous êtes donc déjà inscrit sur ce site, merci d'utiliser l'identifiant que vous avez déjà et 
				ne pas vous réinscrire sous un nouveau nom. Si vous avez oublié votre mot de passe, vous pouvez
				le retrouver en cliquant sur le lien "mot de passe oublié" ci-dessous.
				</p>
			<div class="aligxilo">
				<p>
				<input type="radio" name="jamaligxi" value="jes" checked> 
				<input type="hidden" name="010_subjekto" value="cxap01.php">
				J'ai déjà suivi un cours sur ce site. Mon identifiant/mot de passe est :</p>
				<p style="font-size:80%">(si vous souhaitez continuer avec le même correcteur, veuillez l'indiquer dans la zone de commentaires («Autres précisions»), au bas de cette page).</p>

				<table>
					<tr>
						<td>Identifiant  :</td>
						<td><input type="text" name="ktrl_enirnomo" onFocus="this.value='';document.mia_Formularo.jamaligxi[0].checked=true;"></td>
					</tr>
					<tr>
						<td>Mot de passe :</td>
						<td><input type="password" name="ktrl_pasvorto" value=""></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td align="center"><input class="bouton" type="submit" name="Submit" value="<? echo $lgv_sendu; ?>"></td>
					</tr>
					<tr>
						<td colspan="2">
							<p><a href="#formularo" onClick="window.open('../../pasvortoforgesita.php','','resizable=no,scrollbars=no,location=no,top=100,left=100,width=400,height=150');">
							<i><? echo $lgv_pasvortoForgesita; ?> ? : <? echo $lgv_alklaku; ?></i></a></p>
						</td>
					</tr>
				</table>

				<p>
					<input type="radio" name="jamaligxi" value="ne">
					Je ne suis pas encore inscrit sur ce site et je souhaite re&ccedil;evoir l'aide d'un correcteur pour suivre ce cours, 
					je m'engage &agrave; envoyer au moins une le&ccedil;on par semaine ou de 
					pr&eacute;venir mon correcteur de tout retard &eacute;ventuel.
				</p>
				<? include "../../aligxi.inc.php"; ?>
			</div> <!-- aligxilo -->
		</div> <!-- klarigo -->
<? include "gerdapiedo.inc.php"; ?>