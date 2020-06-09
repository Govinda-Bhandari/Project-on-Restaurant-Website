$(document).ready(function(){

	//fancybox.js init
	$('.fancybox').fancybox({
		openEffect : 'none',
		closeEffect : 'none',
		prevEffect : 'none',
		nextEffect : 'none',

		arrows : false,
		helpers : {
			media : {},
			buttons : {}
		}
	});



	//wow.js init
	wow = new WOW(
	    {
		  animateClass: 'animated',
		  mobile: false,
		  offset: 100
		}
	);
	wow.init();

	// using turn.js for the menu.html
	$("#menu_book").turn({
			width: 800,
			height: 1000,
			autoCenter: true
		});
		function slideshow(){
			var x = document.getElementById('check-class');
			if(x.style.display === "none"){
				x.style.display="flex";
			}else{
				x.style.display="none";
			}	

		}
	
});

					
