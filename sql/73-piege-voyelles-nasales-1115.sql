-- #1115 : cours élémentaire, page 1.1 : premier encadré « Piège pour les francophones » (proposé par un relecteur) :
-- les voyelles nasales du français (an, en, in, on, un) n'existent pas en espéranto. Cinq mots déjà enregistrés
-- (fr/son/vortoj) pour les écouter. Placé juste avant le paragraphe sur les syllabes.
SET NAMES utf8mb4;

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(le.enhavo, '<p>Chaque voyelle, <span class="eo">a</span>',
'<div class="card-panel orange lighten-5 konsilo">
<p><i class="material-icons left">warning</i><strong>Piège pour les francophones&nbsp;:</strong> les sons «&nbsp;an&nbsp;», «&nbsp;en&nbsp;», «&nbsp;in&nbsp;», «&nbsp;on&nbsp;», «&nbsp;un&nbsp;» du français n’existent pas en espéranto. On prononce la voyelle comme d’habitude, puis on fait bien entendre le <span class="eo">n</span>&nbsp;: <span class="eo">kanti</span> se dit «&nbsp;kann-ti&nbsp;», et non comme dans «&nbsp;chanter&nbsp;». Écoutez&nbsp;:</p>
<div class="vortlisto row">
<p class="col s12 m6"><a href="fr/son/vortoj/kanti.mp3" class="sm2_button"></a> <span class="eo">kanti</span> (chanter)&nbsp;: «&nbsp;kann-ti&nbsp;»</p>
<p class="col s12 m6"><a href="fr/son/vortoj/vento.mp3" class="sm2_button"></a> <span class="eo">vento</span> (vent)&nbsp;: «&nbsp;vènn-to&nbsp;»</p>
<p class="col s12 m6"><a href="fr/son/vortoj/infano.mp3" class="sm2_button"></a> <span class="eo">infano</span> (enfant)&nbsp;: «&nbsp;inn-fa-no&nbsp;»</p>
<p class="col s12 m6"><a href="fr/son/vortoj/dankon.mp3" class="sm2_button"></a> <span class="eo">dankon</span> (merci)&nbsp;: «&nbsp;dann-konn&nbsp;»</p>
<p class="col s12 m6"><a href="fr/son/vortoj/hundo.mp3" class="sm2_button"></a> <span class="eo">hundo</span> (chien)&nbsp;: «&nbsp;houn-do&nbsp;»</p>
</div>
</div>
<p>Chaque voyelle, <span class="eo">a</span>')
WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 1
  AND le.enhavo NOT LIKE '%Piège pour les francophones%';
