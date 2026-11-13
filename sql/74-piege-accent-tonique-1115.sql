-- #1115 : cours élémentaire, page 4.4 (diphtongues) : encadré « Piège pour les francophones » sur l'accent tonique :
-- toujours sur l'avant-dernière syllabe ; dans les mots en -io, le i compte pour une syllabe (fa-mi-li-o) ; une diphtongue
-- ne compte que pour une (ho-di-aŭ). Cinq mots déjà enregistrés (fr/son/vortoj). Ajouté à la fin de la page.
SET NAMES utf8mb4;

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = CONCAT(le.enhavo, '
<div class="card-panel orange lighten-5 konsilo">
<p><i class="material-icons left">warning</i><strong>Piège pour les francophones&nbsp;:</strong> en français, on appuie sur la dernière syllabe du mot&nbsp;; en espéranto, c’est <b>toujours sur l’avant-dernière</b>. Attention aux mots en <span class="eo">-io</span>&nbsp;: le <span class="eo">i</span> forme une syllabe à lui seul, on dit donc <span class="eo">fa-mi-<u>li</u>-o</span> et non «&nbsp;fa-mi-lyo&nbsp;». Une diphtongue, elle, ne compte que pour une syllabe&nbsp;: <span class="eo">ho-<u>di</u>-aŭ</span>, <span class="eo">Eŭ-<u>ro</u>-po</span>. Écoutez&nbsp;:</p>
<div class="vortlisto row">
<p class="col s12 m6"><a href="fr/son/vortoj/familio.mp3" class="sm2_button"></a> <span class="eo">fa-mi-<u>li</u>-o</span> (famille)</p>
<p class="col s12 m6"><a href="fr/son/vortoj/radio.mp3" class="sm2_button"></a> <span class="eo">ra-<u>di</u>-o</span> (radio)</p>
<p class="col s12 m6"><a href="fr/son/vortoj/historio.mp3" class="sm2_button"></a> <span class="eo">his-to-<u>ri</u>-o</span> (histoire)</p>
<p class="col s12 m6"><a href="fr/son/vortoj/hodiaux.mp3" class="sm2_button"></a> <span class="eo">ho-<u>di</u>-aŭ</span> (aujourd’hui)</p>
<p class="col s12 m6"><a href="fr/son/vortoj/euxropo.mp3" class="sm2_button"></a> <span class="eo">Eŭ-<u>ro</u>-po</span> (Europe)</p>
</div>
</div>')
WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 4
  AND le.enhavo NOT LIKE '%Piège pour les francophones%';
