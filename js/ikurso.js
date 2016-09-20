  $(document).ready(function(){

    // méthode pour afficher la popup modale pour choisir un nouveau mot de passe si l'url contient novigiPasvorton
    $url = window.location.href;
    if ($url.indexOf("novigiPasvorton=")>-1) {
      $('#novigi_pasvorton').openModal();
    }

    $(document).ajaxStart(function() {
        $(document.body).css({'cursor' : 'progress'});
    }).ajaxStop(function() {
        $(document.body).css({'cursor' : 'default'});
    });


    // QCM
    $( ".qcm_ok" ).click(function() {
      var $lasta = $(this).data("lasta");
      if (!$lasta) {
        Materialize.toast('Bravo !', 4000);
        $encours = $('.qcm_demando:visible');
        
        setTimeout(function(){
          $encours.next().removeClass("hide");
          $encours.addClass("hide");
         }, 1000);
      } else {
        Materialize.toast('Bravo, vous avez trouvé toutes les bonnes réponses !', 4000);
        setTimeout(function(){
			$("#recapitulatif_qcm").removeClass("hide");
            $('.qcm_demando:visible').addClass("hide");
			$("#finiLecioneron_button").removeClass("hide");
       }, 1000);
        
      }
    });

    $( ".qcm_nok" ).click(function() {
      Materialize.toast('Mauvaise réponse, essaye encore !', 4000);
    });

// outil pour évaluer la leçon, on met des phrases plus lisibles
$('#range_intereso').on("change mousemove", function() {
    if ($(this).val()==1) {
      $("#libelle_intereso").html("1. Trop barbant");
    }
    if ($(this).val()==2) {
      $("#libelle_intereso").html("2. Plutôt ennuyeux.");
    }
    if ($(this).val()==3) {
      $("#libelle_intereso").html("3. Moyen");
    }
    if ($(this).val()==4) {
      $("#libelle_intereso").html("4. Assez intéressant");
    }
    if ($(this).val()==5) {
      $("#libelle_intereso").html("5. Génial ! J'ai adoré !");
    }
});

$('#range_malfacileco').on("change mousemove", function() {
    if ($(this).val()==1) {
      $("#libelle_malfacileco").html("1. Les doigts dans le nez !");
    }
    if ($(this).val()==2) {
      $("#libelle_malfacileco").html("2. Assez facile.");
    }
    if ($(this).val()==3) {
      $("#libelle_malfacileco").html("3. Quelques difficultés mais dans l'ensemble je m'en suis sorti.");
    }
    if ($(this).val()==4) {
      $("#libelle_malfacileco").html("4. Assez difficile.");
    }
    if ($(this).val()==5) {
      $("#libelle_malfacileco").html("5. Trop compliqué. Je m'en suis arraché les cheveux !");
    }
});

$("textarea").on('change keyup paste', function() {
  var $id=$(this).attr('id');
  console.log($id);
  var $vortoj = $(this).data("vortoj");
  if ($vortoj) {
    var skribitajVortoj = $(this).val().trim().split(' ').length;
    if (skribitajVortoj<$vortoj) {
      $("#"+$id).addClass("invalid");
      $("label[for='"+$id+"']").attr('data-error',$vortoj-skribitajVortoj);
    } else {
      $("#"+$id).removeClass("invalid");
      $("label[for='"+$id+"']").attr('data-error',"");
    }
  }
 // 
});

$('#eniri_identigilo,#eniri_pasvorto').keyup(function(e) {    
   if(e.keyCode == 13) { // KeyCode de la touche entrée
          $( "#connection_button" ).click();
 }
});


  	$( "#connection_button" ).click(function() {
  		$("#connection_button").addClass("disabled");
  		$.ajax({
       		url : $cheminAbsolu+'ajax/eniri.php',
       		type : 'GET',
       		dataType : 'json',
       		data : 'identigilo='+$( "#eniri_identigilo" ).val()+"&pasvorto="+$( "#eniri_pasvorto" ).val(),
       		success : function(reponse, statut){ 
           		if (reponse.mesagxo!="ok") {
           			if (reponse.type=="identigilo") {
           				$("label[for='eniri_identigilo']").attr('data-error',reponse.mesagxo);
           				$("#eniri_identigilo").addClass("invalid");
           			}
                // cas où la personne n'a pas activé son message
                if (reponse.type=="ne_aktivigita") {
                 $("label[for='eniri_identigilo']").attr('data-error',reponse.mesagxo);
                  $("#eniri_identigilo").addClass("invalid"); 
                  $('#sendi_denove_aktivigilo_button').removeClass("hide");
                }
           			if (reponse.type=="pasvorto") {
           				$("label[for='eniri_pasvorto']").attr('data-error',reponse.mesagxo);
           				$("#eniri_pasvorto").addClass("invalid");	
           			}
           			return false;
           		} else {
           			window.location = $urlracine+reponse.url;
           		}
       		},
       		error : function() {
       			alert("Erreur de connexion, contactez les administrateurs");
       		}
    	});
	});

  	$( "#inscription_button" ).click(function() {
  		$("#inscription_button").addClass("disabled");
  		$.ajax({
       		url : $cheminAbsolu+'ajax/aligxi.php',
       		type : 'GET',
       		dataType : 'json',
       		data : 'identigilo='+$( "#aligxi_identigilo" ).val()+"&pasvorto="+$( "#aligxi_pasvorto" ).val()+"&retadreso="+$("#aligxi_retadreso").val(),
       		success : function(reponse, statut){ 
           		if (reponse.mesagxo!="ok") {
           			if (reponse.type.startsWith("retadreso")) {
           				$("label[for='aligxi_retadreso']").attr('data-error',reponse.mesagxo);
           				$("#aligxi_retadreso").addClass("invalid");	
           				$("#helpo-retadreso").hide();
           			}
           			if (reponse.type.startsWith("identigilo")) {

           				$("label[for='aligxi_identigilo']").attr('data-error',reponse.mesagxo);
           				$("#aligxi_identigilo").addClass("invalid");
           				$("#helpo-identigilo").hide();
           			}
           			if (reponse.type=="pasvorto") {
           				$("label[for='aligxi_pasvorto']").attr('data-error',reponse.mesagxo);
           				$("#aligxi_pasvorto").addClass("invalid");	
           			}
           			return false;
           		} else {
           			// On affiche un message qui indique qu'il faut valider le mail
           			//$('#aligxi').closeModal();
           			$('#parto1').addClass("hide");
           			$('#parto2').removeClass("hide");
           			$('#footer-creer-compte').addClass("hide");
           			$('#footer-renvoyer-activation').removeClass("hide");
           		}
       		},
       		error : function() {
       			alert("Erreur de connexion, contactez les administrateurs");
       		}
    	});
	});

    // Inscription avec le "kurso de esperanto"
  $( "#inscription_kurso_button" ).click(function() {
      $.ajax({
          url : $cheminAbsolu+'ajax/aligxi_kurso.php',
          type : 'GET',
          dataType : 'json',
          data : 'identigilo='+$( "#aligxi_kurso_identigilo" ).val()+"&pasvorto="+$( "#aligxi_kurso_pasvorto" ).val()+"&retadreso="+$("#aligxi_kurso_retadreso").val(),
          success : function(reponse, statut){ 
              if (reponse.mesagxo!="ok") {
                if (reponse.type.startsWith("retadreso")) {
                  $("label[for='aligxi_kurso_retadreso']").attr('data-error',reponse.mesagxo);
                  $("#aligxi_kurso_retadreso").addClass("invalid"); 
                  $("#helpo-retadreso").hide();
                }
                if (reponse.type.startsWith("identigilo")) {

                  $("label[for='aligxi_kurso_identigilo']").attr('data-error',reponse.mesagxo);
                  $("#aligxi_kurso_identigilo").addClass("invalid");
                  $("#helpo-identigilo").hide();
                }
                if (reponse.type=="pasvorto") {
                  $("label[for='aligxi_kurso_pasvorto']").attr('data-error',reponse.mesagxo);
                  $("#aligxi_kurso_pasvorto").addClass("invalid");  
                }
                return false;
              } else {
                // On affiche un message qui indique qu'il faut valider le mail
                //$('#aligxi').closeModal();
                $('#parto1_kurso').addClass("hide");
                $('#parto2_kurso').removeClass("hide");
              }
          },
          error : function() {
            alert("Erreur de connexion, contactez les administrateurs");
          }
      });
  });


    $("#aperigi_novigi_pasvorton_button").click(function () {
      $('#konektigxi').closeModal();
      $('#sendi_novan_pasvorton').openModal();
    });

$("#sendi_novan_pasvorton_button").click(function () {
      $('#sendi_novan_pasvorton_button').addClass("disabled");
            $.ajax({
          url : $cheminAbsolu+'ajax/sendiNovanPasvorton.php',
          type : 'GET',
          dataType : 'json',
          data : 'retadreso='+$("#sendi_novan_pasvorton_retadreso").val(),
          success : function(reponse, statut){ 
              if (reponse.mesagxo!="ok") {
                 $("label[for='sendi_novan_pasvorton_retadreso']").attr('data-error',reponse.mesagxo);
                 $("#sendi_novan_pasvorton_retadreso").addClass("invalid"); 
                 //$("#helpo-retadreso").hide(); // pas besoin de placeholder ?
                return false;
              } else {
                // On affiche un message qui indique qu'il faut cliquer sur le mail
                //$('#aligxi').closeModal();
                $('#sendi_novan_pasvorton_parto1').addClass("hide");
                $('#sendi_novan_pasvorton_parto2').removeClass("hide");
                $('#sendi_novan_pasvorton_footer1').addClass("hide");
                $('#sendi_novan_pasvorton_footer2').removeClass("hide");
              }
          },
          error : function() {
            alert("Erreur de connexion, contactez les administrateurs");
          }
      });
    });

$("#sendi_denove_aktivigilo_button").click(function () {
      $('#sendi_denove_aktivigilo_button').addClass("disabled");
            $.ajax({
          url : $cheminAbsolu+'ajax/sendiDenoveAktivigilon.php',
          type : 'GET',
          dataType : 'json',
          data : 'identigilo='+$( "#eniri_identigilo" ).val(),
          success : function(reponse, statut){ 
              if (reponse.mesagxo!="ok") {
                 $("label[for='eniri_identigilo']").attr('data-error',reponse.mesagxo);
                 $("#eniri_identigilo").addClass("invalid"); 
                return false;
              } else {
                  $("#konektigxi_parto1").addClass("hide");
                  $("#konektigxi_parto2").removeClass("hide");
                  $("#footer-konektigxi1").addClass("hide");
                  $("#footer-konektigxi2").removeClass("hide");
              }
          },
          error : function() {
            alert("Erreur de connexion, contactez les administrateurs");
          }
      });
    });

$("#fermi_konektigxi_button").click(function () {
   $("#konektigxi_parto1").removeClass("hide");
   $("#konektigxi_parto2").addClass("hide");
   $("#footer-konektigxi1").removeClass("hide");
   $("#footer-konektigxi2").addClass("hide");
});

$("#novigi_pasvorton_sendi_button").click(function () {
      $('#novigi_pasvorton_sendi_button').addClass("disabled");
            $.ajax({
          url : $cheminAbsolu+'ajax/novigiPasvorton.php',
          type : 'GET',
          dataType : 'json',
          data : 'pasvorto='+$("#novigi_pasvorton_pasvorto").val()+"&aktivigo="+$( "#novigi_pasvorton_aktivigo" ).val()+"&retadreso="+$( "#novigi_pasvorton_retadreso" ).val(),
          success : function(reponse, statut){ 
              // la clef d'activation est erronée
              if (reponse.mesagxo!="ok") {
                 $("label[for='aligxi_retadreso']").attr('data-error',reponse.mesagxo);
                 $("#aligxi_retadreso").addClass("invalid"); 
                 $("#helpo-retadreso").hide();
                return false;
              } else {
                // On affiche un message qui indique qu'il faut valider le mail
                //$('#aligxi').closeModal();
                $('#novigi_pasvorton_parto1').addClass("hide");
                $('#novigi_pasvorton_parto2').removeClass("hide");
                $('#novigi_pasvorton_footer1').addClass("hide");
                $('#novigi_pasvorton_footer2').removeClass("hide");
              }
          },
          error : function() {
            alert("Erreur de connexion, contactez les administrateurs");
          }
      });
    });

	$("#registriEkzercaron_button").click(function() {
		$("#registriEkzercaron_button").addClass("disabled");
		$.ajax({
       		url : $cheminAbsolu+'ajax/registriEkzercaron.php',
       		type : 'GET',
       		dataType : 'json',
       		data : $("#chefa_form").serialize()+"&lecionero_id="+$("#registriEkzercaron_button").data('lecionero_id')+"&leciono="+$("#registriEkzercaron_button").data('leciono')+"&kurso="+$("#registriEkzercaron_button").data('kurso'),
       		success : function(reponse, statut){ 
       			if (reponse.mesagxo=="ok") {
       				window.location = $urlracine+reponse.url;
       			}
       		},
       		error : function() {
       			alert("Erreur de connexion, contactez les administrateurs");
       		}
    	});
	});

	$("#finiLecioneron_button").click(function() {
		$("#finiLecioneron_button").addClass("disabled");
		$.ajax({
       		url : $cheminAbsolu+'ajax/finiLecioneron.php',
       		type : 'GET',
       		dataType : 'json',
       		data : "lecionero_id="+$("#finiLecioneron_button").data('lecionero_id')+"&leciono="+$("#finiLecioneron_button").data('leciono')+"&kurso="+$("#finiLecioneron_button").data('kurso'),
       		success : function(reponse, statut){ 
       			if (reponse.mesagxo=="aucune url suivante") {
       				alert("leçon suivante inconnu, contactez les administrateurs");
       			} else if (reponse.mesagxo=="ok") {
       				window.location = $urlracine+reponse.url;
       			} else {
       				alert("mauvais message de retour, contactez les administrateurs")
       			}
       		},
       		error : function() {
       			alert("Erreur de connexion, contactez les administrateurs");
       		}
    	});
	});

	$("#kontroliQCM_button").click(function() {
		$.ajax({
       		url : $cheminAbsolu+'ajax/kontroliQCM.php',
       		type : 'GET',
       		dataType : 'json',
       		data : $("#chefa_form").serialize()+"&lecionero_id="+$("#kontroliQCM_button").data('lecionero_id')+"&leciono="+$("#kontroliQCM_button").data('leciono')+"&kurso="+$("#kontroliQCM_button").data('kurso'),
       		success : function(reponse, statut){ 
       			if (reponse.mesagxo=="ko") {
       				// il y a des erreurs, on va les afficher
       				// for (erreur of reponse.eraroj) {
       				// 	$("#demando_"+erreur).addClass("qcmerr");
       				// }
       				alert("Relisez bien la leçon !");
       			} else if (reponse.mesagxo=="ok") {
       				window.location = $urlracine+reponse.url;
       			} else {
       				alert("mauvais message de retour, contactez les administrateurs")
       			}
       		},
       		error : function() {
       			alert("Erreur de connexion, contactez les administrateurs");
       		}
    	});
	});	


	$("#petiKorektanton_button").click(function() {
		$("#petiKorektanton_button").addClass("disabled");
		$.ajax({
       		url : $cheminAbsolu+'ajax/petiKorektanton.php',
       		type : 'GET',
       		dataType : 'json',
       		data : "lecionero_id="+$("#petiKorektanton_button").data('lecionero_id')+"&leciono="+$("#petiKorektanton_button").data('leciono')+"&kurso="+$("#petiKorektanton_button").data('kurso'),
       		success : function(reponse, statut){ 
       			if (reponse.mesagxo=="compteNonActif") {
       				alert("Votre compte n'a pas été activé, vous ne pouvez pas demander un correcteur. Vérifier dans vos e-mails et cliquez sur le lien d'activation");
       			} else if (reponse.mesagxo=="aucunExercice") {
					alert("Vous devez d'abord répondre aux exercices avant de demander un correcteur");
       			} else if (reponse.mesagxo=="ok") {
       				window.location = $urlracine+reponse.url;
       			} else {
       				alert("mauvais message de retour, contactez les administrateurs")
       			}
       		},
       		error : function() {
       			alert("Erreur de connexion, contactez les administrateurs");
       		}
    	});
	});

	// TODO : sendi Lecionon sendiLecionon_button
	$("#sendiLecionon_button").click(function() {
		$("#sendiLecionon_button").addClass("disabled");
		$.ajax({
       		url : $cheminAbsolu+'ajax/sendiLecionon.php',
       		type : 'GET',
       		dataType : 'json',
       		data : $("#chefa_form").serialize()+"&lecionero_id="+$("#sendiLecionon_button").data('lecionero_id')+"&leciono="+$("#sendiLecionon_button").data('leciono')+"&kurso="+$("#sendiLecionon_button").data('kurso'),
       		success : function(reponse, statut){ 
       			if (reponse.type=="korektanto") {
       				alert("Vous n'avez pas de correcteur d'attribué, veuillez contacter les administrateurs.");
       			} else if (reponse.type=="NeniuRespondo") {
					alert("Vous devez d'abord répondre aux exercices avant d'envoyer votre leçon à votre correcteur'");
       			} else if (reponse.mesagxo=="ok") {
       				window.location = $urlracine+reponse.url;
       			} else {
       				alert("mauvais message de retour, contactez les administrateurs : "+reponse)
       				console.log(reponse);
       			}
       		},
       		error : function() {
       			alert("Erreur de connexion, contactez les administrateurs");
       		}
    	});
	});


$(".player-audio a").click(function() {
  aler("coucou");
});

  });