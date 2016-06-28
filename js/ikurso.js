  $(document).ready(function(){
  	
  	$( "#connection_button" ).click(function() {
  		$.ajax({
       		url : 'ajax/eniri.php',
       		type : 'GET',
       		dataType : 'json',
       		data : 'identigilo='+$( "#identigilo" ).val()+"&pasvorto="+$( "#pasvorto" ).val(),
       		success : function(reponse, statut){ 
           		if (reponse.mesagxo!="ok") {
           			if (reponse.type=="identigilo") {
           				$("label[for='identigilo']").attr('data-error',reponse.mesagxo);
           				$("#identigilo").addClass("invalid");
           			}
           			if (reponse.type=="pasvorto") {
           				$("label[for='pasvorto']").attr('data-error',reponse.mesagxo);
           				$("#pasvorto").addClass("invalid");	
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
  });