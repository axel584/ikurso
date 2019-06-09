$(document).ready(function(){

    $('.sidenav').sidenav();

	$('.slider').slider({
		full_width: true,
		height: 320,
	});

    $('select').formSelect();

    $('.scrollspy').scrollSpy();
    
  	/* $('.datepicker').datepicker({
		yearRange: [1920, new Date().getFullYear()],
		format: 'dd-mm-yyyy',
	    autoClose: false, 
	    showDaysInNextAndPreviousMonths: true,
	    showMonthAfterYear: true,
	    showClearBtn: true,
	    i18n: {
		    months: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ],
			monthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],
			weekdays: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
			weekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
			weekdaysAbbrev: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
			cancel: 'annuler',	    
			clear: 'effacer',
		    close: 'Ok'
		}
	}); */

	$('.dropdown-trigger').dropdown({
		coverTrigger: false, // Displays dropdown below the button
		constrainWidth: false, // Does not change width of dropdown to that of the activator
		alignment: 'right'
		}
	);

    // QCM
    $('.carousel').carousel({fullWidth: true});
    
    $('.tabs').tabs();

    $('.collapsible').collapsible({
        accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
    
	$('.materialboxed').materialbox();
	
	$('.modal').modal();
	
	$('.tooltipped').tooltip();

});