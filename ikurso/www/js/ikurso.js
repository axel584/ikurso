$(document).ready(function() {

	// initialisation :
	charge("splashscreen");

	function charge(page) {
		console.log("charge : "+page);
		$( "#app" ).load( "html/"+page+".html",function () {
			$(".btn").click(function () {
			var target = $(this).data("target");
			charge(target);
			$("body").scrollTop(0); // sans animation
			//$("body").animate({scrollTop:0}, '500', 'swing'); // avec animation
			});
		});

	};





});