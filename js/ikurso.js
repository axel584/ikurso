  $(document).ready(function(){
  	$( "#connection_button" ).click(function() {
  		$.ajax({
       		url : 'ajax/eniri.php',
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
           			window.location = reponse.url;
           		}
       		},
       		error : function() {
       			alert("Erreur de connection, contactez les administrateurs");
       		}
    	});
	});

  	$( "#inscription_button" ).click(function() {
  		$.ajax({
       		url : 'ajax/aligxi.php',
       		type : 'GET',
       		dataType : 'json',
       		data : 'identigilo='+$( "#aligxi_identigilo" ).val()+"&pasvorto="+$( "#aligxi_pasvorto" ).val()+"&retadreso="+$("#aligxi_retadreso").val(),
       		success : function(reponse, statut){ 
           		if (reponse.mesagxo!="ok") {
           			if (reponse.type=="identigilo") {
           				$("label[for='aligxi_identigilo']").attr('data-error',reponse.mesagxo);
           				$("#aligxi_identigilo").addClass("invalid");
           			}
           			if (reponse.type=="aligxi_pasvorto") {
           				$("label[for='aligxi_pasvorto']").attr('data-error',reponse.mesagxo);
           				$("#aligxi_pasvorto").addClass("invalid");	
           			}
           			return false;
           		} else {
           			// On affiche un message qui indique qu'il faut valider le mail
           			$('#aligxi').closeModal();
           		}
       		},
       		error : function() {
       			alert("Erreur de connection, contactez les administrateurs");
       		}
    	});
	});

  });