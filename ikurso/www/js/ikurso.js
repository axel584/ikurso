$(document).ready(function() {

	// initialisation :
	charge("splashscreen");

	function charge(page) {
		console.log("charge : "+page);
		$( "#app" ).load( "html/"+page+".html",function () {
			$(".btn").click(function () {
			var target = $(this).data("target");
			charge(target);
			});
		});
	};




});