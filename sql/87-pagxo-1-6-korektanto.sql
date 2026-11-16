-- Page 1.6 (lecioneroj.id = 6) : dire dès le premier exercice ce que deviennent les réponses.
-- À ce stade personne n'a encore de correcteur : réponses vérifiées automatiquement, correcteur
-- à demander à la fin de la leçon (avec un compte). Rejouable : les REPLACE ne trouvent plus rien la 2e fois.
SET NAMES utf8mb4;

UPDATE lecioneroj SET enhavo = REPLACE(enhavo,
  '<p>Vous pouvez faire les exercices dès maintenant, sans compte&nbsp;: vos réponses sont corrigées automatiquement quand c’est possible et gardées dans ce navigateur.</p>',
  '<p>Vos réponses sont vérifiées automatiquement au fur et à mesure&nbsp;: une réponse reconnue comme juste s’affiche en vert. À la fin de la leçon, vous pourrez demander un correcteur bénévole&nbsp;: il recevra ces réponses et vous suivra pendant tout le cours. Pour cela, il faut un compte (gratuit)&nbsp;: ce que vous avez fait sans compte y sera repris.</p>')
WHERE id = 6;

UPDATE lecioneroj SET enhavo = REPLACE(enhavo,
  '<p>Pour bénéficier de notre service de correction, il vous suffit de compléter les exercices. Cliquez ensuite sur le bouton <b>ENREGISTRER MES RÉPONSES</b>.</p>',
  '<p>Vos réponses sont vérifiées automatiquement au fur et à mesure&nbsp;: une réponse reconnue comme juste s’affiche en vert. À la fin de la leçon (page <b>Épilogue et envoi des exercices</b>), vous pourrez demander un correcteur bénévole&nbsp;: il recevra ces réponses, vous enverra ses remarques et vous suivra pendant tout le cours.</p>')
WHERE id = 6;

UPDATE lecioneroj SET enhavo = REPLACE(enhavo,
  '<p>Lorsque vous aurez terminé la leçon, vous pourrez demander l’aide d’un correcteur à la fin de la section <b>Épilogue et envoi des exercices</b>. Les exercices seront automatiquement envoyés à votre correcteur quand les administrateurs du cours vous en auront attribué un.</p>',
  '')
WHERE id = 6;
