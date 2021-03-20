$(document).ready(function(){

	// Navbar

	$(".icon").click(function(){

		$(this).toggleClass("mainColor");
	    $(".details").slideToggle(750);
	});

	// Check Icon (index page)

	$("label i").click(function(){
		$(this).toggleClass("choose");
	});

	// choose image (Category Page (Add))

	$('.image').change(function(){
		$(".fa-check").fadeIn(1000);
		$('.upload span').html("<b>تم اضافة صورة</b>");
	});
		


  });