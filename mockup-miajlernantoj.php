<?php
include "util.php";
$pagxtitolo="Mes élèves";
$korpo="informoj";
$persono_id=$_SESSION["persono_id"];
if ($persono_id=="") {header("Location:index.php?erarkodo=8");}
$persono = apartigiPersonon($persono_id);
include "pagxkapo.inc.php";
?>

<div class="row">
	<article class="col s12 m10 l8 offset-m1 offset-l1">
		<h1>Mes élèves</h1>

		<ul class="collapsible popout" data-collapsible="accordion" id="eleves">
			<li>
				<div class="collapsible-header">
					<i class="material-icons">keyboard_arrow_down</i>
					<div class="row">
						<p class="col s6"><b>Sapristi45</b> (Paul Maréchal)<br>
							<a href="mailto:lct.etienne@gmail.com">lct.etienne@gmail.com</a>
						</p>
						<p class="col s1">Gerda</p>
						<p class="col s3">6: Sesa ĉapitro<br>le 20/08/2016</p>
						<p class="col s1 statut"><span class="badge green">0</span></p>
					</div>
				</div>
				<div class="collapsible-body blue lighten-5">
					<p>inscription le : 19/08/2016</p>
					<p><b>Commentaires de l'élève :</b></p>
					<p><b>Notes personnelles :</b></p>
					<p><a href="#"><i class="material-icons blue-text tiny">delete</i></a> <em>de Nicopipe le 07/05/2016</em> : envoi mot de bienvenue</p>
					<p><a href="#"><i class="material-icons blue-text tiny">delete</i></a> <em>de Nicopipe le 07/06/2016</em> : relance</p>
					<p><em>de Emma le 09/08/2016</em> : relance</p>
					<p><a class="btn-floating blue tooltipped" data-position="right" data-delay="50" data-tooltip="ajouter une note"><i class="material-icons">add</i></a></p>
					<div class="footer">
						<p class="right-align"><a class="btn waves-effect waves-light blue disabled">A FINI</a><a class="btn waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="vous libérez ainsi une place pour un nouvel élève">A ABANDONNÉ</a></p>
					</div>
				</div>
			</li>			 
			<li>
				<div class="collapsible-header">
					<i class="material-icons">keyboard_arrow_down</i>
					<div class="row">
						<p class="col s6"><b>Dreamer</b> (Gauthier )<br>
							<a href="mailto:dr.dreamer0@gmail.com">dr.dreamer0@gmail.com</a>
						</p>
						<p class="col s1">Kurso</p>
						<p class="col s3">Lec 12<br>le 18/08/2016</p>
						<p class="col s1 statut"><span class="badge green">0</span></p>
					</div>
				</div>
				<div class="collapsible-body blue lighten-5">
					<p>inscription le : 2/03/2016</p>
					<p><b>Commentaires de l'élève :</b></p>
					<p>J\'ai appris l'existence de votre cours, sur le net. Mes premiers contacts avec cette langue construite, m'ont donné envie de l'apprendre enfin réellement. Je parle aussi l'allemand, l'anglais et l'espagnol.</p>
					<p><b>Commentaires correcteur et admin :</b></p>
					<p><em>le 07/05/2016</em> : travaille lentement</p>
					<p><em>le 07/07/2016</em> : relance</p>
					<p class="input-field"><input placeholder="votre commentaire" id="note" type="text" class="validate tooltipped" data-position="top" data-delay="50" data-tooltip="Ce commentaire ne sera visible que de vous. Ne pas utiliser ceci pour contacter les administrateurs."></p>
					<p><a href="#" class="btn-flt blue-text">VALIDER</a></p> 
					<div class="footer">
						<p class="right-align"><a class="btn waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="l’élève recevra un message pour recevoir son attestation">A FINI</a><a class="btn waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="vous libérez ainsi une place pour un nouvel élève">A ABANDONNÉ</a></p>
					</div>
				</div>
			</li>			 
			<li>
				<div class="collapsible-header">
					<i class="material-icons">keyboard_arrow_down</i>
					<div class="row">
						<p class="col s6"><b>Arwing</b> ()<br>
							<a href="mailto:allcl@live.fr">allcl@live.fr</a>
						</p>
						<p class="col s1">Kurso</p>
						<p class="col s3">pas commencé</p>
						<p class="col s1 statut"><span class="badge orange">21</span></p>
					</div>
				</div>
				<div class="collapsible-body blue lighten-5">
					<p>inscription le : 07/05/2016</p>
					<p><b>Commentaires de l'élève :</b></p>
					<p><i>le 07/05/2016</i> : je veux connaître l'espéranto</p>
					<p><b>Vos notes :</b></p>
					<p><em>le 07/05/2016</em> : envoi mot de bienvenue</p>
					<p><em>le 07/07/2016</em> : relance</p>
					<p><a class="btn-floating blue tooltipped" data-position="right" data-delay="50" data-tooltip="ajouter une note"><i class="material-icons">add</i></a></p>
					<div class="footer">
						<p class="right-align"><a class="btn waves-effect waves-light blue disabled">A FINI</a><a class="btn waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="vous libérez ainsi une place pour un nouvel élève">A ABANDONNÉ</a></p>
					</div>
				</div>
			</li>			 
			<li>
				<div class="collapsible-header">
					<i class="material-icons">keyboard_arrow_down</i>
					<div class="row">
						<p class="col s6"><b>mamita</b> (Violette RICAUX)<br>
							<a href="mailto:vio.ricaux@orange.fr">vio.ricaux@orange.fr</a></p>
						<p class="col s1">Gerda</p>
						<p class="col s3">25a ĉapitro<br>le 02/05/2016</p>
						<p class="col s1 statut"><span class="badge green">FINI</span></p>
					</div>
				</div>
				<div class="collapsible-body blue lighten-5">
					<p>inscription le : 22/02/2016</p>
					<p><b>Commentaires de l'élève :</b></p>

					<p><b>Vos notes :</b></p>

					<p><a class="btn-floating blue tooltipped" data-position="right" data-delay="50" data-tooltip="ajouter une note"><i class="material-icons">add</i></a></p>
					<div class="footer">
						<p class="right-align"></p>
					</div>
				</div>
			</li>			 
			<li>
				<div class="collapsible-header">
					<i class="material-icons">keyboard_arrow_down</i>
					<div class="row">
						<p class="col s6"><b>Estéban</b> (Estéban Sanchez-Adaime)<br>
							<a href="mailto:Quanteban@gmail.com">Quanteban@gmail.com</a></p>
						<p class="col s1">DLEK</p>
						<p class="col s3">leçon 5<br>le 01/05/2016</p>
						<p class="col s1 statut"><span class="badge red">107</span></p>
					</div>
				</div>
				<div class="collapsible-body blue lighten-5">
					<p>inscription le : 13/03/2016</p>
					<p><b>Commentaire de l'élève :</b></p>
					<p>J'espère que se cours me permettrais passer un bon moment et de me réconcilier avec l'apprentissage des langues étrangères. Je l'ai découvert en cherchant une façon d'apprendre l'espéranto. J'ai de grand espoirs dans ces leçons.
					<p><b>Vos notes :</b></p>

					<p><a class="btn-floating blue tooltipped" data-position="right" data-delay="50" data-tooltip="ajouter une note"><i class="material-icons">add</i></a></p>
					<div class="footer">
						<p class="right-align"><a class="btn waves-effect waves-light blue disabled">A FINI</a><a class="btn waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="vous libérez ainsi une place pour un nouvel élève">A ABANDONNÉ</a></p>
					</div>
				</div>
			</li>			 
			<li>
				<div class="collapsible-header">
					<i class="material-icons">keyboard_arrow_down</i>
					<div class="row">
						<p class="col s6"><b>EtienneSteffen</b> (Etienne Schouleur)<br>
							<a href="mailto:etienne.schouleur@saintadrien.com">etienne.schouleur@saintadrien.com</a></p>
						<p class="col s1">Kurso</p>
						<p class="col s3">leciono 5 - Paĝo 13<br>le 24/03/2016</p>
						<p class="col s1 statut"><span class="badge red">149</span></p>
					</div>
				</div>
				<div class="collapsible-body blue lighten-5">
					<p>inscription le : 17/03/2016</p>
					<p><b>Commentaire de l'élève :</b></p>
					<p>Etant enseignant d'une langue étrangère (allemand) et ayant appris l'espéranto il y a quelques années, je souhaite rafraîchir mes connaissances dans cette langue, afin peut-être de la faire découvrir à mes élèves lors d'un atelier sur le temps du midi ou dans le cadre des enseignements pratiques interdisciplinaires qui seront mis en place avec la réforme du collège. Pouvez-vous me dire, s'il vous plaît, s'il est possible d'obtenir un certificat de réussite à l'issue du cours ? Je vous remercie par avance de votre réponse. Cordialement, Etienne Schouleur. </p>
					<p><b>Notes correcteur et admin :</b></p>

					<p><a class="btn-floating blue tooltipped" data-position="right" data-delay="50" data-tooltip="ajouter une note"><i class="material-icons">add</i></a></p>
					<div class="footer">
						<p class="right-align"><a class="btn waves-effect waves-light blue disabled">A FINI</a><a class="btn waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="vous libérez ainsi une place pour un nouvel élève">A ABANDONNÉ</a></p>
					</div>
				</div>
			</li>			 
			<li>
				<div class="collapsible-header">
					<i class="material-icons">keyboard_arrow_down</i>
					<div class="row">
						<p class="col s6"><b>LLB</b> (luc le berre)<br>
							<a href="mailto:luc.leberre@gmail.com">luc.leberre@gmail.com</a></p>
						<p class="col s1">DLEK</p>
						<p class="col s3">Sixième leçon<br>le 26/03/2016</p>
						<p class="col s1 statut"><span class="badge red">ABANDON</span></p>
					</div>
				</div>
				<div class="collapsible-body blue lighten-5">
					<p>inscription le : 26/03/2016</p>
					<p>abandon le : 12/08/2016</p>
					<p><b>Commentaire de l'élève :</b></p>
					<p>Merci. J'ai connu ce cours en cherchant sur l'Internet... Cordialement. LL</p>
					<p><b>Notes correcteur et admin :</b></p>

					<p><a class="btn-floating blue tooltipped" data-position="right" data-delay="50" data-tooltip="ajouter une note"><i class="material-icons">add</i></a></p>
					<div class="footer">
						<p class="right-align"><a class="btn waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="l’élève pourra reprendre le cours">RÉCUPÉRER L’ÉLÈVE</a></p>
					</div>
				</div>
			</li>			 
		</ul>
	</article>
	
	<aside class="col s12 m10 l3 offset-m1">
		<h2>Élèves en cours</h2>
		<p>Vous pouvez modifier le nombre d'élèves maximum souhaité en cliquant sur les boutons <i class="material-icons">remove_circle_outline</i> et <i class="material-icons">add_circle_outline</i> dans le tableau ci-dessous.</p>
		<table class="bordered">
        <thead>
          <tr>
              <th data-field="cours">Cours</th>
              <th data-field="nbeleves" class="center">En cours</th>
              <th data-field="nbmax" class="center">Nb maxi</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>DLEK</td>
            <td class="center">1</td>
            <td class="center"><a href="#"><i class="material-icons blue-text">remove_circle_outline</i></a> 3 <a href="#"><i class="material-icons blue-text">add_circle_outline</i></a></td>
          </tr>
          <tr>
            <td>iKurso</td>
            <td class="center">2</td>
            <td class="center"><a href="#" class="disabled"><i class="material-icons grey-text">remove_circle_outline</i></a> 2 <a href="#"><i class="material-icons blue-text">add_circle_outline</i></a></td>
          </tr>
          <tr>
            <td>Gerda</td>
            <td class="center">2</td>
            <td class="center"><a href="#"><i class="material-icons blue-text">remove_circle_outline</i></a> 3 <a href="#"><i class="material-icons blue-text">add_circle_outline</i></a></td>
          </tr>
        </tbody>
      </table>
	</aside>

</div>
	
<?php include "pagxpiedo.inc.php";?>
