var detectMobile = function(){
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        return true;
    } else {
        return false;
    }
}

if(detectMobile()) {
    $('.banner.homepage').addClass('mobile');
} else {
    setTimeout(function(){
        $('.start-block').fadeOut(1000);
    }, 2000);
    setTimeout(function(){
        $('video')[0].play();
        setTimeout(function(){
            $('.banner.homepage').css('height', 'inherit');
            setTimeout(function(){
                $('.start-block h1').text('Let\'s Tell It Together');
                $('.start-block').fadeIn(1000);
                setTimeout(function(){
                    $('.start-block').fadeOut(1000);
                }, 5000);
            }, 5000);
        }, 100);
    }, 3000);
    $(document).ready(function(){
        setTimeout(function(){
            var currentPosition = $(window).scrollTop();
            var offset = parseInt($('section.banner').css('height')) -10;
            if(currentPosition == 0) {
                $('body, html').animate({
                    scrollTop: offset
                }, 2000);
            }
            $('.progress-bar').fadeOut();
        }, 48000);
        $('.progress-bar').animate({'width': '100%'}, 48000);
        setTimeout(function(){
            $('.progress-bar').animate({'height': '700px', 'opacity' : 0}, 1000);
        }, 47000);
    });
}