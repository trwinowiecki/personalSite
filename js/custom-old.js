$( document ).ready(function() {
    $('.nav-side-collapse').on('click', function () {
       $('.nav-left-side').toggleClass('active');
       $('.content-wrapper').toggleClass('active');
    });
    
    $('.nav-side-items ul a').on('click', function () {
        $('.nav-side-items ul li').each(function() {
           if ($(this).hasClass('active')) {
               $(this).toggleClass('active');
           }
        });
        
        $('.nav-side-expanded ' + this.hash + '-nav').toggleClass('active');
        $('.nav-side-icons ' + this.hash + '-nav').toggleClass('active');
    });
    
    $('.nav-side-items ul a').hover(
        function () {
            $('.nav-side-expanded ' + this.hash + '-nav').addClass('nav-side-hover');
            $('.nav-side-icons ' + this.hash + '-nav').addClass('nav-side-hover');
        }, function () {
            $('.nav-side-expanded ' + this.hash + '-nav').removeClass('nav-side-hover');
            $('.nav-side-icons ' + this.hash + '-nav').removeClass('nav-side-hover');
        }
    );
    
    $('.nav-side-expanded ul li').on('click', function () {
        $('.nav-left-side').toggleClass('active');
        $('.content-wrapper').toggleClass('active');
    });
    
    
    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '#navbar'
    });
});