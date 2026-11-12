-- Cours élémentaire, leçon 10, page 10.1 « Présentation » de l'examen : texte plus rassurant.
-- Un élève sur cinq arrivé à l'examen abandonne sur cette page ou juste avant (analyse des abandons page par page).
-- Trois parties, possible en plusieurs fois, plus facile que les leçons 8 et 9, et possibilité de passer
-- directement au cours Gerda malaperis sans passer l'examen.
-- Page 10.2 : durée totale corrigée (1 h 20).
SET NAMES utf8mb4;

UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = '<p>Vous voilà à la 10<sup>e</sup> et dernière leçon du cours&nbsp;: un petit examen de niveau&nbsp;A1. Votre correcteur le corrigera comme d’habitude et vous recevrez une attestation de réussite (<i>atestilo</i>).</p>
<p><b>Rassurez-vous&nbsp;: la plupart des élèves le trouvent beaucoup plus facile que les deux dernières leçons.</b> Il reprend le vocabulaire et la grammaire de tout le cours, sans rien de nouveau.</p>
<p>L’examen comprend <b>trois parties</b>, chacune sur sa page&nbsp;:</p>
<ul class="klarigo">
	<li>compréhension orale (<i>Aŭda komprenado</i>)&nbsp;: écouter de courts enregistrements et répondre à des questions, sur 25&nbsp;points&nbsp;;</li>
	<li>compréhension écrite (<i>Skriba komprenado</i>)&nbsp;: lire de courts textes et répondre à des questions, sur 25&nbsp;points&nbsp;;</li>
	<li>production écrite (<i>Skriba produktado</i>)&nbsp;: compléter un dialogue et écrire un petit texte, sur 25&nbsp;points.</li>
</ul>
<p><b>Vous pouvez le faire en plusieurs fois</b>, par exemple une partie par jour&nbsp;: vos réponses sont enregistrées à la fin de chaque partie. Comptez de 15 à 30&nbsp;minutes par partie.</p>
<p>Pour que l’attestation reflète bien votre niveau, faites-le sans dictionnaire et sans relire le cours. Il est normal de ne pas tout comprendre&nbsp;: passez les questions difficiles et revenez-y ensuite. Pour les enregistrements, lisez d’abord les questions, puis écoutez deux fois. Pour réussir, il faut la moitié des points (37,5 sur 75) et au moins 5&nbsp;points dans chaque partie.</p>
<div class=''card-panel blue-grey lighten-5 konsilo''><p><i class=''material-icons left''>school</i><strong>Vous ne souhaitez pas passer l’examen&nbsp;?</strong> Il n’est pas obligatoire. Vous pouvez passer directement au cours <a href=''fr/gerda/''>Gerda malaperis</a>, qui vous fait lire un roman policier en espéranto, chapitre après chapitre. Vous n’aurez simplement pas d’attestation pour le cours élémentaire.</p></div>'
WHERE l.kurso = 'CG' AND l.numero = 10 AND le.ordo = 1
  AND le.enhavo LIKE '%Nous vous déconseillons de le faire en plusieurs fois%';

-- 10.2 Klarigoj : total du tableau aligné sur la somme des parties (20 + 30 + 30 min) et sur la ligne
-- « Daŭro de la tuta testo: 1 horo kaj 20 minutoj » (le tableau indiquait 1 h 30).
UPDATE lecioneroj le JOIN lecionoj l ON l.id = le.leciono_id
SET le.enhavo = REPLACE(le.enhavo, '<td>1&nbsp;horo kaj 30&nbsp;minutoj </td>', '<td>1&nbsp;horo kaj 20&nbsp;minutoj </td>')
WHERE l.kurso = 'CG' AND l.numero = 10 AND le.ordo = 2;
