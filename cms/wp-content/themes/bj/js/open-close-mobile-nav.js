$(".hamburger").click(function(e){
	$(".nav-menu-mobile").toggle();
});

$(document).ready(function(){
	$(".ghost").click(function(e){
		e.preventDefault();
		$("html,body").animate({
			scrollTop:$(".promotion").offset().top
		},1000);
	});
})
