$(document).ready(function(){
    $('.banner.homepage').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
        var that = $(this);

        if (isInView) {
            // element is now visible in the viewport

            if (visiblePartY == 'top') {
                // top part of element is visible
                $('nav.home').removeClass('fixed');
            } else if (visiblePartY == 'bottom') {
                // bottom part of element is visible
                //$('nav.home').addClass('fixed');
            } else {
                // whole part of element is visible
                //$('nav.home').removeClass('fixed');
            }
        } else {
            // element has gone out of viewport
            $('nav.home').addClass('fixed');
        }
    });

    $('.photo-sections a').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
        var that = $(this);

        if (isInView) {
            // element is now visible in the viewport
            if (visiblePartY == 'top') {
                // top part of element is visible
            } else if (visiblePartY == 'bottom') {
                // bottom part of element is visible
                that.removeClass('active');
            } else {
                // whole part of element is visible
                that.addClass('active');
            }
        } else {
            // element has gone out of viewport
            that.removeClass('active');
        }
    });

    setInterval(function(){
        var scrolltop = $(window).scrollTop();
        if(scrolltop > 700) {
            if(!$('nav.home').hasClass('.fixed')) {
                $('nav.home').addClass('fixed');
            }
        }
    }, 500);
});