  $(document).ready(function(){


  	$( "#connection_button" ).click(function() {
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
       			alert("Erreur de connection, contactez les administrateurs");
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
       			alert("Erreur de connection, contactez les administrateurs");
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
       			alert("Erreur de connection, contactez les administrateurs");
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
       			alert("Erreur de connection, contactez les administrateurs");
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
       				for (erreur of reponse.eraroj) {
       					$("#demando_"+erreur).addClass("qcmerr");
       				}
       				alert("Relisez bien la leçon !");
       			} else if (reponse.mesagxo=="ok") {
       				window.location = $urlracine+reponse.url;
       			} else {
       				alert("mauvais message de retour, contactez les administrateurs")
       			}
       		},
       		error : function() {
       			alert("Erreur de connection, contactez les administrateurs");
       		}
    	});
	});	


	// TODO : peti korektanton
	// TODO : sendi Lecionon

  });