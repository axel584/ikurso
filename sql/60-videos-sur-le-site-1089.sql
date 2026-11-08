-- Vidéos des leçons hébergées sur le site (dossier videos/) et lues par la balise <video>, à la place des lecteurs
-- YouTube : dans l'application sur téléphone, le lecteur YouTube intégré refuse de se charger (« Erreur 153 », #1089).
-- Sections 1.8, 4.13 et 9.10 du Cours en 10 leçons. Rejouable : ne touche que le contenu qui a encore le lecteur YouTube.
SET NAMES utf8mb4;
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(le.enhavo, '<iframe width="560" height="315" src="https://www.youtube.com/embed/pTQEn0-fuQc" frameborder="0" allowfullscreen></iframe>', '<video class="vidbendo" controls preload="metadata" playsinline crossorigin="anonymous" poster="videos/cge-1-8-ekzerco-1.jpg"><source src="videos/cge-1-8-ekzerco-1.mp4" type="video/mp4"></video>')
WHERE l.kurso = 'CG' AND l.numero = 1 AND le.ordo = 8 AND le.enhavo LIKE '%youtube.com/embed/%';
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(le.enhavo, '<div class="video-container">\n\t\t\t\t<iframe width="560" height="315" src="https://www.youtube.com/embed/shNsmyrNN2g" frameborder="0" allowfullscreen></iframe>\n\t\t\t\t</div>', '<video class="vidbendo" controls preload="metadata" playsinline crossorigin="anonymous" poster="videos/cge-4-13-himno-la-espero.jpg"><source src="videos/cge-4-13-himno-la-espero.mp4" type="video/mp4"></video>')
WHERE l.kurso = 'CG' AND l.numero = 4 AND le.ordo = 13 AND le.enhavo LIKE '%youtube.com/embed/%';
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(le.enhavo, '<iframe width="560" height="315" src="https://www.youtube.com/embed/yVjtft16rNo?rel=0"\nframeborder="0" allowfullscreen></iframe>', '<video class="vidbendo" controls preload="metadata" playsinline crossorigin="anonymous" poster="videos/cge-9-10-gazetoj-tra-la-mondo.jpg"><source src="videos/cge-9-10-gazetoj-tra-la-mondo.mp4" type="video/mp4"><track kind="subtitles" srclang="fr" label="Français" src="videos/cge-9-10-gazetoj-tra-la-mondo.fr.vtt"><track kind="subtitles" srclang="eo" label="Esperanto" src="videos/cge-9-10-gazetoj-tra-la-mondo.eo.vtt"></video>')
WHERE l.kurso = 'CG' AND l.numero = 9 AND le.ordo = 10 AND le.enhavo LIKE '%youtube.com/embed/%';
