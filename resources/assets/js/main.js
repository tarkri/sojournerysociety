$(document).ready(function(){
    $('.section.parallax .container').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
        var that = $(this);

        if (isInView) {
            // element is now visible in the viewport
            if (visiblePartY == 'top') {
                // top part of element is visible
            } else if (visiblePartY == 'bottom') {
                // bottom part of element is visible
            } else {
                // whole part of element is visible
                that.addClass('in-view');
            }
        } else {
            // element has gone out of viewport
            //that.removeClass('in-view');
        }
    });
});