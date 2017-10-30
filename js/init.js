(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();

    Materialize.updateTextFields();

    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();

	$('.slider').slider({
		full_width: true,
		height: 320,
	});

    $('select').material_select();

    $('.scrollspy').scrollSpy();
    
    $('select').material_select();
      
  	$( '.datepicker' ).pickadate({
		selectMonths: true, // Creates a dropdown to control month
		selectYears: 200, // Creates a dropdown of 100 years to control year
		dateFormat: 'dd-mm-yyyy',
	    formatSubmit: 'dd/mm/yyyy',
	    monthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ],
	    monthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],
	    weekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
	    weekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
	    today: '',
	    clear: 'effacer',
	    close: 'fermer'
	})

	$('.dropdown-button').dropdown({
		belowOrigin: true, // Displays dropdown below the button
		constrain_width: false, // Does not change width of dropdown to that of the activator
		alignment: 'right'
		}
	);

	//$('.collapsible').pushpin({ top: $('.collapsible').offset()  });
    // QCM
    $('.carousel').carousel({full_width: true});
    
    $('ul.tabs').tabs();

    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
    
	   $('.materialboxed').materialbox();

});