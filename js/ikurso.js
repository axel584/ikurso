  $(document).ready(function(){
  	
  	$( "#connection_button" ).click(function() {
  		$.ajax({
       		url : 'ajax/eniri.php',
       		type : 'GET',
       		dataType : 'json',
       		data : 'identigilo='+$( "#identigilo" ).val()+"&pasvorto="+$( "#pasvorto" ).val(),
       		success : function(reponse, statut){ 
           		if (reponse!="ok") {
           			alert("problème");
           		}
       		},
       		error : function() {
       			alert("Erreur de connection, contactez les administrateurs");
       		}
    	});
	});
  });