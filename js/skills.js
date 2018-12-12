$(document).ready(function(){
    
    if ($('#about').is(':visible')) {
        $('.skillbar').each(function(){
    		$(this).find('.skillbar-bar').animate({
    			width:$(this).attr('data-percent')
    		},3000);
    	});
    }
    
    $(window).scroll(function() {
        if ($('#about').is(':visible')) {
            $('.skillbar').each(function(){
        		$(this).find('.skillbar-bar').animate({
        			width:$(this).attr('data-percent')
        		},3000);
        	});
        }
    });
	
});