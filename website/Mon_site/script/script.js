$(document).ready(function() {	

	$('a[href^="#"]').on('click', function(event) {
    
    var target = $(this.getAttribute('href'));
   
    if( target.length ) {
        
        event.preventDefault();
       
        $('html, body').stop().animate({
      
            scrollTop: target.offset().top
        
        }, 1000);
    }

 	});

 	$(window).bind('scroll', function () {
    
    if ($(window).scrollTop() > 50) {
        
        $('.nav').addClass('fixed');
    } 

    else {
       
        $('.nav').removeClass('fixed');
    }
	
	});

});

	