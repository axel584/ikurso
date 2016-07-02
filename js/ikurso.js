  $(document).ready(function(){


  	$( "#connection_button" ).click(function() {
  		$.ajax({
       		url : $urlracine+'ajax/eniri.php',
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
  		$("body").css("cursor", "progress");
  		$.ajax({
       		url : $urlracine+'ajax/aligxi.php',
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
           			$("body").css("cursor", "default");
           			return false;
           		} else {
           			// On affiche un message qui indique qu'il faut valider le mail
           			//$('#aligxi').closeModal();
           			$('#parto1').addClass("hide");
           			$('#parto2').removeClass("hide");
           			$('#footer-creer-compte').addClass("hide");
           			$('#footer-renvoyer-activation').removeClass("hide");
           		}
           		$("body").css("cursor", "default");
       		},
       		error : function() {
       			alert("Erreur de connection, contactez les administrateurs");
       			$("body").css("cursor", "default");
       		}
    	});
	});

  });