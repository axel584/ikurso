<?php 
$titolo="Ekzameno A2";
$leciono = 26;
$section=isset($_GET["section"])?htmlspecialchars($_GET["section"]):"1";
if (!is_numeric($section)) {
	if ($persono_id=="") {header("Location:../../index.php?erarkodo=24");}
}
include "gerdakapo.inc.php";
?>
<div class="row">
	<article class="col s12 m10 l7 offset-m1 offset-l1">
		
		<section id="leciono-enhavo">
		<?php 
		getTitoloLecionero('GR',$leciono,$section);

		if ($section=="1") {
		?>

<table><thead><tr><th>Naturo de la ekzamen-partoj</th><th>Daŭro</th><th>Noto</th></tr></thead>
	<tbody>
		<tr><td><b>Aŭda komprenado</b>:<br/>Respondo al komprenado-demandaroj pri tri aŭ kvar mallongaj dokumentoj registritaj kiuj temas pri ĉiutagaj situacioj. (du aŭskultoj)<br/>Maksimuma daŭro de la aŭskultotaj dokumentoj: 5 minutoj</td>
		<td>Proksimume 25&nbsp;minutoj </td><td>/25</td></tr>
<tr><td><b>Skriba komprenado</b>:<br/>Respondo al komprenado-demandaroj pri tri aŭ kvar mallongaj dokumentoj skribitaj kiuj temas pri ĉiutagaj situacioj.</td>
		<td>30&nbsp;minutoj </td><td>/25</td></tr>
	<tr><td><b>Skriba produktado</b> :<br/>Redaktado de du skribaj produktadoj (amika letero aŭ mesaĝo) <br/>- Priskribu eventon aŭ personajn spertojn<br/>- Skribu por inviti, danki, pardonpeti, demandi, informi, gratuli…
</td>
		<td>45 minutoj </td><td>/25</td></tr>
	<tr><td><b>Sumo</b>:</td><td>1&nbsp;horo kaj 30&nbsp;minutoj </td><td>/75</td></tr>		
</tbody>
</table>

<p>Sukcesa sojlo por akiri diplomon: 37,5/75<br/>
Minimuma noto bezonata por ĉiu ekzamen-parto: 5/25<br/>
Daŭro de la tuta testo: 1&nbsp;horo kaj 40&nbsp;minutoj  </p>

		<?php 
		} // fin section 1
		if ($section=="2") {
		?>
		<h3>Unua ekzerco</h3>
		<p class="parto">Vi aŭdos dufoje dokumenton. Vi havos paŭzon de tridek sekundoj inter la du aŭskultoj kaj alian de tridek sekundoj por kontroli viajn respondojn. Unue legu la demandojn.</p>
					<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="<?=$vojo?>fr/cge/sonoj/A2-Final-1.mp3"/>
					</audio>
				</p>
			</fieldset>

		<?php	
			getEkzercon(296,$persono_id);
		?>
		<h3>Dua ekzerco</h3>
		<p class="parto">Vi aŭdos dufoje dokumenton. Vi havos paŭzon de tridek sekundoj inter la du aŭskultoj kaj alian de tridek sekundoj por kontroli viajn respondojn. Unue legu la demandojn.</p>
				<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="<?=$vojo?>fr/cge/sonoj/A2-Final-2.mp3"/>
					</audio>
				</p>
			</fieldset>		
		<?php 
			getEkzercon(297,$persono_id);
		?>
		<h3>Tria ekzerco</h3>
		<p class="parto">Vi aŭdos dufoje dokumenton. Vi havos paŭzon de tridek sekundoj inter la du aŭskultoj kaj alian de tridek sekundoj por kontroli viajn respondojn. Unue legu la demandojn.</p>
				<fieldset class="sono">
				<legend>Aŭskultu tiun rakonton:</legend>
				<p>
					<audio id="audioPlayer" controls="controls" type="audio/mpeg">
						<source type="audio/mp3" src="<?=$vojo?>fr/cge/sonoj/A2-Final-3.mp3"/>
					</audio>
				</p>
			</fieldset>		
		<?php 
			getEkzercon(298,$persono_id);		
		}
		if ($section=="3") {
		?>	
		<p>Maksimumo de akireblaj poentoj en tiu parto: 25 poentoj</p>
		<h3>Unua ekzerco</h3>
		<div class="row">
			<p class="col s4 m2 center-align"><img class="responsive-img" src="bildoj/icone-place-assise.jpg"/><br>-A-</p>
			<p class="col s4 m2 center-align"><img class="responsive-img" src="bildoj/icone-interdit-manger.jpg"/><br>-B-</p>
			<p class="col s4 m2 center-align"><img class="responsive-img" src="bildoj/icone-animaux-interdits.jpg"/><br>-C-</p>
			<p class="col s4 m2 center-align"><img class="responsive-img" src="bildoj/icone-telephone-ok.jpg"/><br>-D-</p>
			<p class="col s4 m2 center-align"><img class="responsive-img" src="bildoj/icone-musique-interdite.jpg"/><br>-E-</p>
			<p class="col s4 m2 center-align"><img class="responsive-img" src="bildoj/icone-interdit-parler.jpg"/><br>-F-</p>
		</div>
		<?php 
			getEkzercon(299,$persono_id);
		?>
		<h3>Dua ekzerco</h3>
		<div class="row">
			<p>Vi ricevas ĉi tion per via komputilo de via franca amikino.</p>
			<p class="col s12 center-align"><img class="responsive-img" src="bildoj/msg-sarah.jpg"/></p>
		</div>
		<?php 
			getEkzercon(300,$persono_id);
		?>
		<h3>Tria ekzerco</h3>
		<div class="row">
			<p class="col s12 center-align">
				<img class="responsive-img" src="bildoj/sms.jpg"/>
			</p>
		</div>
		<?php 
			getEkzercon(301,$persono_id);
		?>
		<h3>Kvara ekzerco</h3>
			<p>Viaj najbaroj invitas vin vespermanĝi. Vi iras al dolĉaĵvendejo, por aĉeti la deserton, kiun vi alportos. 
			Legu la enhavon de tiuj kukoj kaj skribu la numeron de la kuko, kiu taŭgas al ĉiu homo en la familio.</p>
			<p>La patro havas ovalergion. La patrino ŝategas ĉokoladon. La filino ŝatas fruktojn sed ne lakton. La filo ŝatas sukerkukojn. La avo ŝategas kafajn desertojn. La avino amas laktokukojn sen vanilo.</p>
		<div class="row">
			<p class="col s3"><img class="responsive-img" src="bildoj/tavolkuko.jpg"/></p>
			<p class="col s3">1<br>tavolkuko<br>(ovoj • sukero • faruno • butero)</p>
			<p class="col s3"><img class="responsive-img" src="bildoj/fragotorteto.jpg"/></p>
			<p class="col s3">2<br>fragotorteto<br>(ovoj • faruno • butero • fragoj)</p>
		</div>
		<div class="row">
			<p class="col s3"><img class="responsive-img" src="bildoj/shaumajho.jpg"/></p>
			<p class="col s3">3<br>ĉokolada ŝaŭmaĵo<br>(ovoj • butero • ĉokolado)</p>
			<p class="col s3"><img class="responsive-img" src="bildoj/kremkuketo.jpg"/></p>
			<p class="col s3">4<br>kafa kremkuketo<br>(ovoj • faruno • butero • kafo)</p>
		</div>
		<div class="row">
			<p class="col s3"><img class="responsive-img" src="bildoj/laktorizo.jpg"/></p>
			<p class="col s3">5<br>laktorizo<br>(rizo • lakto • sukero • vanilo)</p>
			<p class="col s3"><img class="responsive-img" src="bildoj/cherizflano.jpg"/></p>
			<p class="col s3">6<br>ĉerizflano<br>(ovoj • faruno • lakto • ĉerizoj)</p>
		</div>
		<?php 
			getEkzercon(304,$persono_id);
		}
		if ($section=="4") {
		?>	
		<p>Maksimumo de akireblaj poentoj en tiu parto: 25 poentoj</p>
		<h3>Unua ekzerco</h3>
		<?php 
			getEkzercon(302,$persono_id);
		?>
		<h3>Dua ekzerco</h3>
		<div class="row">
			<p class="col s12 center-align"><img class="responsive-img" src="bildoj/letero-Filipo.jpg"/></p>
		</div>
		<?php 
			getEkzercon(303,$persono_id);
		} // fin section 5
		if ($section=="6") {
			recapitulatif_lecon_avant_envoi('GR',$leciono,$persono_id);
		} // fin section 6
		?>

		</section>
		
		<section id="leciono-fino">
			<div id="marko" class="right-align">
				<?php getBoutonFinSection('GR',$leciono,$section,$persono_id); ?>
				<a id="farita" class="btn-floating btn-large light-blue darken-1 hide"><i class="material-icons">done_all</i></a>
			</div>
			<div class="ligoj">
				<?php getLecioneroAntauxa('GR',$leciono,$section); ?>
				<?php getLecioneroVenonta('GR',$leciono,$section); ?>
			</div>
		</section>
		
	</article>
	
	<?php include "gerdaflanko.inc.php"; ?>

</div>

<?php include "gerdapiedo.inc.php"; ?>		
