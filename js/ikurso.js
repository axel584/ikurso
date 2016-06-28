  $(document).ready(function(){
  	
  	$( "#connection_button" ).click(function() {
  		$.ajax({
       		url : 'ajax/eniri.php',
       		type : 'GET',
       		dataType : 'json',
       		data : 'identigilo='+$( "#identigilo" ).val()+"&pasvorto="+$( "#pasvorto" ).val(),
       		success : function(reponse, statut){ 
           		if (reponse.mesagxo!="ok") {
           			$("#identigilo").attr('data-error',reponse.mesagxo);
           			$("#pasvorto").attr('data-error',reponse.mesagxo);
           			$("#pasvorto").addClass("invalid");

           		}
       		},
       		error : function() {
       			alert("Erreur de connection, contactez les administrateurs");
       		}
    	});
	});
  });