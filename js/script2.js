(function() {

$(window).resize(function() {
            var sH = $(window).height();
            $('.masthead').css('height', (sH - $('header').outerHeight()) + 'px');
           // $('section:not(.header-10-sub):not(.content-11)').css('height', sH + 'px');
        });  
    
})();