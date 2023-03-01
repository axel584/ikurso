  $(document).ready(function(){

    // méthode pour afficher la popup modale pour choisir un nouveau mot de passe si l'url contient novigiPasvorton
    $url = window.location.href;
    if ($url.indexOf("novigiPasvorton=")>-1) {
      $('#novigi_pasvorton').modal('open');
    }


    // méthode pour les selecteurs de date dans la partie administration
    //$('#debut_protokolo').pickadate({format: 'yyyy-mm-dd',format_submit: 'yyyy-mm-dd'});
    //$('#fin_protokolo').pickadate({format: 'yyyy-mm-dd',format_submit: 'yyyy-mm-dd'});

    $(document).ajaxStart(function() {
        $(document.body).css({'cursor' : 'progress'});
    }).ajaxStop(function() {
        $(document.body).css({'cursor' : 'default'});
    });



    // QCM
    $( ".qcm_ok" ).click(function() {
      var $lasta = $(this).data("lasta");
      if (!$lasta) {
        M.toast({html: 'Bravo !', classes: 'bravo'});
        $encours = $('.qcm_demando:visible');
        
        setTimeout(function(){
          $encours.next().removeClass("hide");
          $encours.addClass("hide");
         }, 1000);
      } else {
        M.toast({html: 'Bravo, vous avez trouvé toutes les bonnes réponses !', classes: 'bravo'});
        setTimeout(function(){
			$("#recapitulatif_qcm").removeClass("hide");
            $('.qcm_demando:visible').addClass("hide");
			$("#finiLecioneron_button").removeClass("hide");
       }, 1000);
        
      }
    });

    $( ".qcm_nok" ).click(function() {
       M.toast({html: 'Mauvaise réponse, essayez encore !'});
    });

  // exercice autocorrigé (qui ressemble du coup à un QCM)
    $( ".kontroliRespondon_button" ).click(function() {
      var $id = $(this).data("id");
      var $respondoLernanto = $("#"+$id).val();
      var $respondoKomputilo = $("#"+$id).data("reponse");
      var $lasta = $("#"+$id).data("lasta");

      if ($respondoLernanto!=$respondoKomputilo) {
        // Mauvaise réponse :
        M.toast({html: 'Mauvaise réponse, essayez encore !'});
      } else {
        // bonne réponse
      if (!$lasta) {
        // il reste d'autres questions, on passe à la suite;
        M.toast({html: 'Bravo !', classes: 'bravo'});

        $encours = $('.qcm_demando:visible');
        
        setTimeout(function(){
          $encours.next().removeClass("hide");
          $encours.addClass("hide");
         }, 1000);
      } else {
        // c'est la dernière question, on affiche le récapitulatif et le bouton "fini"
        M.toast({html: 'Bravo, vous avez trouvé toutes les bonnes réponses !', classes: 'bravo'});
        setTimeout(function(){
      $("#recapitulatif_qcm").removeClass("hide");
            $('.qcm_demando:visible').addClass("hide");
      $("#finiLecioneron_button").removeClass("hide");
       }, 1000);
        
      }
    }
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
	// permet de recliquer sur le bouton sauvegarder si on change la valeur d'un champ
  $("#registriEkzercaron_button").removeClass("disabled");
	
  var $id=$(this).attr('id');
  console.log($id);
  var $vortoj = $(this).data("vortoj");
  if ($vortoj) {
    console.log("vortoj");
    var skribitajVortoj = $(this).val().trim().split(' ').length;
    if (skribitajVortoj<$vortoj) {
      console.log($vortoj-skribitajVortoj);
      $("#vortojPorVerki_"+$id).html(($vortoj-skribitajVortoj)+"\xa0vortojn\xa0por\xa0verki");

    } else {
        console.log("2:"+$vortoj-skribitajVortoj);
        $("#vortojPorVerki_"+$id).html("");      
    }
  }
});

// permet de recliquer sur le bouton sauvegarder si on change la valeur d'un champ
$("input").on('change keyup paste', function () {
  $("#registriEkzercaron_button").removeClass("disabled");
});


$('#eniri_identigilo,#eniri_pasvorto').keyup(function(e) {    
   if(e.keyCode == 13) { // KeyCode de la touche entrée
          $( "#connection_button" ).click();
 }
});

// fonction pour les exercices dont la réponse est en base : on souligne en vert si on a la bonne réponse
$(".korektebla").focusout( function () {
  console.log("korektebla : ligne 155");
  $ekzercero = $(this).data('ekzercero');
  $studanto = $(this).data('studanto');
  $formulaire = $(this);
  $respondo=$formulaire.val();
  if ($respondo!="") {
          $.ajax({
          url : $cheminAbsolu+'ajax/memkorektado.php',
          type : 'GET',
          dataType : 'json',
          data : "ekzercero="+$ekzercero+"&studanto="+$studanto+"&respondo="+encodeURIComponent($respondo)+"&korekteblaEkzerco=true",
          success : function(reponse, statut){ 
              if (reponse.mesagxo=="ok") {
                $formulaire.addClass("valid");
                $formulaire.before( "<i class=\"material-icons prefix\" style=\"color:green;vertical-align:bottom\" >check</i>" );
              } else {
                $formulaire.removeClass("valid");
                $formulaire.prev('i').remove();
              }
          },
          error : function(request, error) {
            console.log("request : "+request+" / error : "+error);
            alert("Erreur interne, contactez les administrateurs");

          }
      });
  }
});

// fonction pour les exercices dont la réponse N'est PAS en base : on se contente de sauvegarder la réponse 
$(".nekorektebla").focusout( function () {
  console.log("nekorektebla : ligne 185");
  $ekzercero = $(this).data('ekzercero');
  $studanto = $(this).data('studanto');
  $formulaire = $(this);
  $respondo=$formulaire.val();
  if ($respondo!="") {
          $.ajax({
          url : $cheminAbsolu+'ajax/memkorektado.php',
          type : 'GET',
          dataType : 'json',
          data : "ekzercero="+$ekzercero+"&studanto="+$studanto+"&respondo="+encodeURIComponent($respondo)+"&korekteblaEkzerco=false",
          success : function(reponse, statut){ 
              console.log("sauvegarde OK");
          },
          error : function(request, error) {
            console.log("request : "+request+" / error : "+error);
            alert("Erreur interne, contactez les administrateurs");

          }
      });
  }
});

$(".qcm_ekzameno input[type='radio']").click( function () {
  console.log("radio : ligne 210");
  $ekzercero = $(this).data('ekzercero');
  $studanto = $(this).data('studanto');
  $respondo=$(this).val();
  console.log("response : "+$respondo);
  if ($respondo!="") {
          $.ajax({
          url : $cheminAbsolu+'ajax/memkorektado.php',
          type : 'GET',
          dataType : 'json',
          data : "ekzercero="+$ekzercero+"&studanto="+$studanto+"&respondo="+encodeURIComponent($respondo)+"&korekteblaEkzerco=false",
          success : function(reponse, statut){ 
              console.log("sauvegarde OK");
          },
          error : function(request, error) {
            console.log("request : "+request+" / error : "+error);
            alert("Erreur interne, contactez les administrateurs");

          }
      });
  }
});

function rechercherVorton($pattern,$kurso) {
        $.ajax({
          url : $cheminAbsolu+'ajax/rechercherVorton.php',
          type : 'GET',
          dataType : 'html',
          data : "pattern="+$pattern+"&kurso="+$kurso,
          success : function(reponse, statut){ 
              $("#vortlisto").replaceWith(reponse);
          },
          error : function(request, error) {
            console.log("request : "+request+" / error : "+error);
            alert("Erreur interne, contactez les administrateurs");

          }
      });
}

$("#pattern").on('keyup', function () {
  $pattern = $(this).val();
  $kurso = $(this).data("kurso");
  rechercherVorton($pattern,$kurso);
});

$("#button_rechercher").click(function() {
  $pattern = $("#pattern").val();
  $kurso = $("#pattern").data("kurso");
  console.log($kurso);
  rechercherVorton($pattern,$kurso);
});

$( "#serchi_protokolon_button").click(function() {
  if ($( "#debut_protokolo" ).val()!="") {
    var $debut = new Date($( "#debut_protokolo" ).val()).toISOString().substring(0, 10);
  } else {
    var $debut ="";
  }
  if ($( "#fin_protokolo" ).val()!="") {
    var $fin = new Date($( "#fin_protokolo" ).val()).toISOString().substring(0, 10);
} else {
  var $fin="";
}
    console.log($debut);
          $.ajax({
          url : $cheminAbsolu+'ajax/sercxiProtokolon.php',
          type : 'GET',
          dataType : 'html',
          data : 'debut='+$debut+"&fin="+$fin+"&persono="+$( "#persono_protokolo" ).val()+"&type="+$( "#type_protokolo" ).val(),
          success : function(reponse, statut){ 
                $("#resultat_recherche_protokolo").html(reponse);
          },
          error : function() {
            alert("Erreur interne, contactez les administrateurs");
          }
      });
});

  	$( "#connection_button" ).click(function() {
  		$("#connection_button").addClass("disabled");
  		$.ajax({
       		url : $cheminAbsolu+'ajax/eniri.php',
       		type : 'POST',
       		dataType : 'json',
       		data : 'identigilo='+$( "#eniri_identigilo" ).val()+"&pasvorto="+$( "#eniri_pasvorto" ).val(),
       		success : function(reponse, statut){ 
           		if (reponse.mesagxo!="ok") {
           			if (reponse.type=="identigilo") {
           				$("#eniri_identigilo_helper").attr('data-error',reponse.mesagxo);
           				$("#eniri_identigilo").addClass("invalid");
           			}
                // cas où la personne n'a pas activé son message
                if (reponse.type=="ne_aktivigita") {
                  $("#eniri_identigilo_helper").attr('data-error',reponse.mesagxo);
                  $("#eniri_identigilo").addClass("invalid"); 
                  $('#sendi_denove_aktivigilo_button').removeClass("hide");
                }
           			if (reponse.type=="pasvorto") {
           				$("#eniri_pasvorto_helper").attr('data-error',reponse.mesagxo);
           				$("#eniri_pasvorto").addClass("invalid");	
           			}
           			return false;
           		} else {
           			window.location = $urlracine+reponse.url;
           		}
       		},
       		error : function() {
       			alert("Erreur interne, contactez les administrateurs");
       		}
    	});
	});

  	$( "#inscription_button" ).click(function() {
  		$("#inscription_button").addClass("disabled");
		
  		$.ajax({
       		url : $cheminAbsolu+'ajax/aligxi.php',
       		type : 'POST',
       		dataType : 'json',
       		data : 'identigilo='+$( "#aligxi_identigilo" ).val()+"&pasvorto="+$( "#aligxi_pasvorto" ).val()+"&retadreso="+$("#aligxi_retadreso").val(),
       		success : function(reponse, statut){ 
           		if (reponse.mesagxo!="ok") {
           			if (reponse.type.startsWith("retadreso")) {
           				$("#aligxi_retadreso_helper").attr('data-error',reponse.mesagxo);
           				$("#aligxi_retadreso").addClass("invalid");	
           				$("#helpo-retadreso").hide();
           			}
           			if (reponse.type.startsWith("identigilo")) {

           				$("#aligxi_identigilo_helper").attr('data-error',reponse.mesagxo);
           				$("#aligxi_identigilo").addClass("invalid");
           				$("#helpo-identigilo").hide();
           			}
           			if (reponse.type=="pasvorto") {
           				$("#aligxi_pasvorto_helper").attr('data-error',reponse.mesagxo);
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
       			alert("Erreur interne, contactez les administrateurs");
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
                  $("#aligxi_kurso_retadreso_helper").attr('data-error',reponse.mesagxo);
                  $("#aligxi_kurso_retadreso").addClass("invalid"); 
                  $("#helpo-retadreso").hide();
                }
                if (reponse.type.startsWith("identigilo")) {

                  $("#aligxi_kurso_identigilo_helper").attr('data-error',reponse.mesagxo);
                  $("#aligxi_kurso_identigilo").addClass("invalid");
                  $("#helpo-identigilo").hide();
                }
                if (reponse.type=="pasvorto") {
                  $("#aligxi_kurso_pasvorto_helper").attr('data-error',reponse.mesagxo);
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
            alert("Erreur interne, contactez les administrateurs");
          }
      });
  });


    $("#aperigi_novigi_pasvorton_button").click(function () {
      $('#konektigxi').modal('close');
      $('#sendi_novan_pasvorton').modal('open');
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
                 $("#sendi_novan_pasvorton_retadreso_helper").attr('data-error',reponse.mesagxo);
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
            alert("Erreur interne, contactez les administrateurs");
          }
      });
    });

// si on retape quelque chose dans le champ de connection ou d'inscription, on retire le style disabled
$("#konektigxi_parto1 input").keypress(function() {
  $("#connection_button").removeClass("disabled");
});

$("#parto1 input").keypress(function() {
  $("#inscription_button").removeClass("disabled");
});

$("#sendi_novan_pasvorton_parto1 input").keypress(function() {
  $("#sendi_novan_pasvorton_button").removeClass("disabled");
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
                 $("#eniri_identigilo_helper").attr('data-error',reponse.mesagxo);
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
            alert("Erreur interne, contactez les administrateurs");
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
          data : 'pasvorto='+encodeURIComponent($("#novigi_pasvorton_pasvorto").val())+"&aktivigo="+$( "#novigi_pasvorton_aktivigo" ).val()+"&retadreso="+$( "#novigi_pasvorton_retadreso" ).val(),
          success : function(reponse, statut){ 
              // la clef d'activation est erronée
              if (reponse.mesagxo!="ok") {
                 $("#novigi_pasvorton_helper").attr('data-error',reponse.mesagxo);
                 $("#novigi_pasvorton_pasvorto").addClass("invalid"); 
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
            alert("Erreur interne, contactez les administrateurs");
          }
      });
    });

	$("#registriEkzercaron_button").click(function() {
		$("#registriEkzercaron_button").addClass("disabled");
		$.ajax({
       		url : $cheminAbsolu+'ajax/registriEkzercaron.php',
       		type : 'GET',
       		dataType : 'json',
       		data : $("#chefa_form").serialize()+"&lecionero_id="+$("#registriEkzercaron_button").data('lecionero_id')+"&leciono="+$("#registriEkzercaron_button").data('leciono')+"&kurso="+$("#registriEkzercaron_button").data('kurso')+"&ekdato="+$("#registriEkzercaron_button").data('ekdato'),
       		success : function(reponse, statut){ 
            if (reponse.type=="pas fini") {
                //Materialize.toast(reponse.mesagxo, 4000);
                console.log(reponse.gxustajRespondoj);
                // on passe en vert les réponses justes
                for (index = 0; index < reponse.gxustajRespondoj.length; ++index) {
                    $('#'+reponse.gxustajRespondoj[index]).addClass("valid");
                }
                console.log(reponse.malgxustajRespondoj);
                for (index = 0; index < reponse.malgxustajRespondoj.length; ++index) {
                    $('#'+reponse.malgxustajRespondoj[index]).removeClass("valid");
                }
                M.toast({html: reponse.mesagxo});
            }
       			if (reponse.mesagxo=="ok") {
                //on pourrait peut être factorisé avec les lignes précédentes ? Qu'on passe en vert que ce soit fini ou pas
                for (index = 0; index < reponse.gxustajRespondoj.length; ++index) {
                    $('#'+reponse.gxustajRespondoj[index]).addClass("valid");
                }
                console.log(reponse.malgxustajRespondoj);
                for (index = 0; index < reponse.malgxustajRespondoj.length; ++index) {
                    $('#'+reponse.malgxustajRespondoj[index]).removeClass("valid");
                }
              window.location = $urlracine+reponse.url;
       			}
       		},
       		error : function() {
       			alert("Erreur interne, contactez les administrateurs");
       		}
    	});
	});
	
	$("#registriKorektadon_button").click(function() {
		$("#registriKorektadon_button").addClass("disabled");
		$.ajax({
       		url : $cheminAbsolu+'ajax/registriKorektadon.php',
       		type : 'POST',
       		dataType : 'json',
       		data : $("#chefa_form").serialize()+"&leciono_id="+$("#registriKorektadon_button").data('leciono_id')+"&studanto_id="+$("#registriKorektadon_button").data('studanto')+"&leciono="+$("#registriKorektadon_button").data('leciono')+"&kurso="+$("#registriKorektadon_button").data('kurso'),
       		success : function(reponse, statut){ 
				window.location = $urlracine+reponse.url;
       		},
       		error : function(jqXHR, textStatus, errorThrown) {
				console.log(jqXHR.responseText);
				console.log("erreur : textStatus : "+textStatus);
				console.log("erreur : errorThrown : "+errorThrown);
       			alert("Erreur interne, contactez les administrateurs : "+textStatus);
       		}
    	});
	});

  // on voudrait que quand on coche la case verte, ca mette le maximum de points
  $('input[name^="bonaRespondo"]').change(function() {
    $name = $(this).attr('name');
    $id = $name.substring(12);
    console.log($id);
    if( $(this).is(':checked')){
      MaxOpt=$('#noto'+$id+' option').length-1;
      console.log(MaxOpt);
      $('#noto'+$id).prop('selectedIndex', MaxOpt );
    }
  });

	

	$("#finiLecioneron_button").click(function() {
		$("#finiLecioneron_button").addClass("disabled");
		$.ajax({
       		url : $cheminAbsolu+'ajax/finiLecioneron.php',
       		type : 'GET',
       		dataType : 'json',
       		data : "lecionero_id="+$("#finiLecioneron_button").data('lecionero_id')+"&leciono="+$("#finiLecioneron_button").data('leciono')+"&kurso="+$("#finiLecioneron_button").data('kurso')+"&ekdato="+$("#finiLecioneron_button").data('ekdato'),
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
       			alert("Erreur interne, contactez les administrateurs");
       		}
    	});
	});

	$("#kontroliQCM_button").click(function() {
		$.ajax({
       		url : $cheminAbsolu+'ajax/kontroliQCM.php',
       		type : 'GET',
       		dataType : 'json',
       		data : $("#chefa_form").serialize()+"&lecionero_id="+$("#kontroliQCM_button").data('lecionero_id')+"&leciono="+$("#kontroliQCM_button").data('leciono')+"&kurso="+$("#kontroliQCM_button").data('kurso')+"&ekdato="+$("#kontroliQCM_button").data('ekdato'),
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
       			alert("Erreur interne, contactez les administrateurs");
       		}
    	});
	});	


	$("#petiKorektanton_button").click(function() {
		$("#petiKorektanton_button").addClass("disabled");
		$.ajax({
       		url : $cheminAbsolu+'ajax/petiKorektanton.php',
       		type : 'GET',
       		dataType : 'json',
       		data : $("#chefa_form").serialize()+"&lecionero_id="+$("#petiKorektanton_button").data('lecionero_id')+"&leciono="+$("#petiKorektanton_button").data('leciono')+"&kurso="+$("#petiKorektanton_button").data('kurso')+"&ekdato="+$("#petiKorektanton_button").data('ekdato'),
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
       			alert("Erreur interne, contactez les administrateurs");
       		}
    	});
	});

	$("#sendiLecionon_button").click(function() {
		$("#sendiLecionon_button").addClass("disabled");
		$.ajax({
       		url : $cheminAbsolu+'ajax/sendiLecionon.php',
       		type : 'GET',
       		dataType : 'json',
       		data : $("#chefa_form").serialize()+"&lecionero_id="+$("#sendiLecionon_button").data('lecionero_id')+"&leciono="+$("#sendiLecionon_button").data('leciono')+"&kurso="+$("#sendiLecionon_button").data('kurso')+"&ekdato="+$("#sendiLecionon_button").data('ekdato'),
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
       			alert("Erreur interne, contactez les administrateurs");
       		}
    	});
	});

  $("#resendiLecionon_button").click(function() {
   $("#resendiLecionon_button").addClass("disabled");
    $.ajax({
          url : $cheminAbsolu+'ajax/resendiLecionon.php',
          type : 'GET',
          dataType : 'json',
          data : "leciono="+$("#resendiLecionon_button").data('leciono')+"&kurso="+$("#resendiLecionon_button").data('kurso')+"&studanto_id="+$("#resendiLecionon_button").data('studanto')+"&expediteur_ikurso="+$('#expediteur_ikurso').is(":checked"),
          success : function(reponse, statut){ 
            if (reponse.mesagxo=="ok") {
				M.toast({html: 'La leçon de votre élève a bien été renvoyée.'});              
			} else if (reponse.type=="NeniuRespondo") {	
				M.toast({html: 'Cette leçon est vide, aucun exercice à renvoyer.'});              
            } else {
              alert("mauvais message de retour, contactez les administrateurs : "+reponse)
              console.log(reponse);
            }
          },
          error : function() {
            alert("Erreur interne, contactez les administrateurs");
          }
      });
  });
  


// fonction spécifique au troisième niveau :

$("#kontroliRespondon_button").click(function() {
  $titolo = $(this).data("respondo");
  $("#respondo").html('<b>La lernanto respondis "'+$titolo+'"</b>');
  });


// fonction spécifique pour le "memorilo" (révision de vocabulaire)

function kontroliVorton(vorto_id,persono_id,respondo) {
      $.ajax({
          url : $cheminAbsolu+'ajax/kontroliVorton.php',
          type : 'GET',
          dataType : 'json',
          data : "vorto_id="+vorto_id+"&persono_id="+persono_id+"&respondo="+encodeURIComponent(respondo),
          success : function(reponse, statut){ 
            if (reponse.mesagxo=="ok") {
                M.toast({html: 'Bravo !', displayLength: 2000, classes: 'bravo'});
                 $encours = $('.memorilo_demando:visible');
                    setTimeout(function(){
                      $encours.next().removeClass("hide");
                      $encours.addClass("hide");
                      $('.memorilo_input:visible').focus(); // on met le focus sur le champ
                    }, 500);
            } else if (reponse.mesagxo=="ko") {
                M.toast({html: reponse.eraroj, displayLength: 5000});
                $encours = $('.memorilo_demando:visible');
                    setTimeout(function(){
                      $("#recapitulatif").removeClass("hide");
                      $("#malbonaj_respondoj").prepend("<li class='collection-item row'><span>"+reponse.recapitulatif+"</span></li>");
                      $encours.next().removeClass("hide");
                      $encours.addClass("hide");
                      $('.memorilo_input:visible').focus(); // on met le focus sur le champ
                    }, 2000);
            }
          },
          error : function() {
            alert("Erreur interne, contactez les administrateurs");
          }
      });
}

// classe carte : memorilo_demando
// si on tape sur entrée ou sur le bouton

$(".memorilo_button").click(function() {
    var $vorto_id=$(this).data('vorto_id');
    var $persono_id=$(this).data('persono_id');
    var $input=$(this).data('input');
    var $respondo=$("#"+$input).val();
    $(this).addClass("disabled");
    kontroliVorton($vorto_id,$persono_id,$respondo);
});

$('.memorilo_input').keypress(function(e){
    if( e.which == 13 ){
        var $vorto_id=$(this).data('vorto_id');
        var $persono_id=$(this).data('persono_id');
        var $respondo=$(this).val();
        if ($respondo!="") {
          $(this).next().addClass("disabled")
          kontroliVorton($vorto_id,$persono_id,$respondo);
        }
    }
});

// eventoj

$('input[type=radio][name=radioGeographique]').change(function() {
  if ($('input[name=radioGeographique]:checked').val()=="France") {
    $("#detail_geographique").html("<input id='departemento' type='text' class='validate'><label for='departemento'>Numéro de Département</label>");
  }
  if ($('input[name=radioGeographique]:checked').val()=="Europe") {
    $("#detail_geographique").html("Europe");
  }
  if ($('input[name=radioGeographique]:checked').val()=="Ailleurs") {
    $("#detail_geographique").html("Ailleurs");
  }
  if ($('input[name=radioGeographique]:checked').val()=="Mondiaux") {
    $("#detail_geographique").html("Mondiaux");
  }
});

$("#registri_eventon").click(function(){
  console.log("registri");
  if ($('input[name=radioGeographique]:checked').val()==undefined) {
    alert("Merci de choisir un type d'événement parmi : France / Europe / Ailleurs / Mondiaux");
  } else {
    var $geographique;
    var $type=$('input[name=radioGeographique]:checked').val();
    if ($type=="France") {
      $geographique = $("#departemento").val();
      console.log("departement : "+$geographique);
    }
    var $priskribo = $("#priskribo").val();
    var $komenco = $("#komenco").val();
    var $fino = $("#fino").val();
    var $url = $("#url").val();
    var $mail = $("#mail").val();
    var $ajaxParametres = "type="+$type+"&geographique="+$geographique+"&priskribo="+$priskribo+"&url="+$url+"&mail="+$mail+"&komenco="+$komenco+"&fino="+$fino;
    console.log($ajaxParametres);
      $.ajax({
          url : $cheminAbsolu+'ajax/registriEventon.php',
          type : 'GET',
          dataType : 'json',
          data : $ajaxParametres,
          success : function(reponse, statut){ 
            if (reponse.mesagxo=="ok") {
                M.toast({html: 'Merci beaucoup !', displayLength: 2000});
                // TODO : mettre à jour le tableau
            } else if (reponse.mesagxo=="ko") {
                M.toast({html: reponse.eraroj, displayLength: 2000});
            }
          },
          error : function() {
            alert("Erreur interne, contactez les administrateurs");
          }
      });
  }
});

$('.edit_evento').css( 'cursor', 'pointer' );
$('.delete_evento').css( 'cursor', 'pointer' );

$(".edit_evento").click(function(){
  var $id=$(this).data("evento");
  console.log("edit : "+$id);
});


$(".delete_evento").click(function(){
  var $id=$(this).data("evento");
  console.log("edit : "+$id);
  $.ajax({
          url : $cheminAbsolu+'ajax/deleteEventon.php',
          type : 'GET',
          dataType : 'json',
          data : "id="+$id,
          success : function(reponse, statut){ 
            if (reponse.mesagxo=="ok") {
                 $("#row-"+$id).hide(1000);
            } else if (reponse.mesagxo=="ko") {
                M.toast({html: reponse.eraroj, displayLength: 2000});
            }
          },
          error : function() {
            alert("Erreur interne, contactez les administrateurs");
          }
      });
});

});
