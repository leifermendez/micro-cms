$( document ).ready(function() {
    
    "use strict";
    
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);
        var scrollTo = $target.offset().top - 20

        $('html, body').stop().animate({
            'scrollTop': scrollTo
        }, 1000);
    });
    $('pre').addClass('prettyprint');
    prettyPrint();
});
