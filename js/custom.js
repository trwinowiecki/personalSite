$( document ).ready(function() {
    
    $("body").scrollspy({
        target: "#navbar",
        offset: 75
    });
    
    $('.nav-side-items li').each(function() {
        if ($('#' + this.id + ':has(a.active)').length) {
            $('#' + this.id + ':has(a.active)').addClass('active');
        } else {
            $('#' + this.id).removeClass('active');
        }
    });
    
    $(window).on('activate.bs.scrollspy', function () {
        $('.nav-side-items li').each(function() {
            if ($('#' + this.id + ':has(a.active)').length) {
                $('#' + this.id + ':has(a.active)').addClass('active');
            } else {
                $('#' + this.id).removeClass('active');
            }
        });
    });
    
    $('.nav-side-collapse').on('click', function () {
       $('.nav-left-side').toggleClass('expanded');
       $('.content-wrapper').toggleClass('expanded');
    });
    
    
    $('.nav-side-items ul a').hover(
        function () {
            $(this.hash + '-nav-text a').addClass('nav-side-hover');
            $(this.hash + '-nav-icon a').addClass('nav-side-hover');
        }, function () {
            $(this.hash + '-nav-text a').removeClass('nav-side-hover');
            $(this.hash + '-nav-icon a').removeClass('nav-side-hover');
        }
    );
    
});