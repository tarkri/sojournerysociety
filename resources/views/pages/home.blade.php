@extends('layouts.master')

@section('content')




    <section class="banner homepage" style="position: relative">
        <div style="position:absolute;width:100%;height: 100%;z-index:9999:top:0;">
            <div class="start-block text-center">
                <h1>You Have A <br>Story Worth Telling</h1>
            </div>
        </div>
            <div class="video-block" style="opacity:0"></div>
        <div class="progress-bar" style="background:#4d9d6f;height:10px;position: absolute;top:0;z-index:9999;display:block;left:0;"></div>
    </section>
    <section class="section intro">
        <div class="container text-center">
            <h1 class="underline">You Have A Story Worth Telling</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, animi aperiam consequatur corporis debitis delectus doloribus impedit in labore magni modi necessitatibus officia quas quo repellat similique temporibus vero vitae.</p>
        </div>
    </section>
    <section class="section photography">
        <div class="container">
            <ul class="photo-sections homepage">
                <li>
                    <a href="#" style="background:url({{ URL::asset('library/img/photography/couples/couples-home-listing.png') }})">
                        <img src="{{ URL::asset('library/img/bg-gradient.png') }}" width="100%" height="100%" alt="" class="gradient">
                        <div class="title">
                            <h3>Couples</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" style="background:url({{ URL::asset('library/img/photography/families/families-home-listing.png') }})">
                        <img src="{{ URL::asset('library/img/bg-gradient.png') }}" width="100%" height="100%" alt="" class="gradient">
                        <div class="title">
                            <h3>Families</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" style="background:url({{ URL::asset('library/img/photography/entrepreneur/entrepreneur-home-listing.png') }})">
                        <img src="{{ URL::asset('library/img/bg-gradient.png') }}" width="100%" height="100%" alt="" class="gradient">
                        <div class="title">
                            <h3>Entrepreneurs</h3>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="section parallax camera-parallax" style="background:url({{ URL::asset('library/img/parallax-1.jpg') }})">
        <div class="container">
            <img src="{{ URL::asset('library/img/ico-camera.png') }}" style="width:150px;" alt="">
            <div class="clearfix"></div>
            <br><br>
            <div class="clearfix"></div>
            <h1>Each of us has something that no one else has</h1>
            <div class="callout branding">
                <h1>Free Branding Guide</h1>
            </div>
        </div>
    </section>

    <section class="section about">
        <div class="container">
            <div class="text-center">
                <h1 class="underline">Our Team</h1>
            </div>
            <div class="clearfix"></div>
            <div class="team-block mini">
                <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/2/005/021/010/260ad65.jpg" alt="">
                <h2 class="text-center">Bethany Michaela Jones <br><small>Founder, Photographer, Videographer</small></h2>
            </div>
            <div class="team-block mini">
                <img src="{{ URL::asset('library/img/team-josiah.png') }}" alt="">
                <h2 class="text-center">Josiah Aaron Jones <br><small>Videographer, Editor</small></h2>
            </div>
            <div class="team-block mini">
                <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/5/005/075/25b/3382731.jpg" alt="">
                <h2 class="text-center">Tarun Krishnan <br><small>Design & Development</small></h2>
            </div>
            <link href='//www.weddingwire.com/assets/global/widget-4b21f9aafce4064bce2cba9215efe3e4.css' rel='stylesheet' type='text/css'>
            <div class='ww-bca-2016 ww-reset'>
                <a title="BETHANY MICHAELA PHOTO Reviews" class="ww-bca" href="https://www.weddingwire.com/reviews/bethany-michaela-photo-brooklyn/aeebd605bf646d3f.html"><img alt="BETHANY MICHAELA PHOTO Reviews" src="//www.weddingwire.com/assets/badges/BCA-2016/BCA2016-logo_2x-080980b7feff975291d1be9f26eaddfa.png" />
                </a><div class='ww-clear'>
                    &nbsp;
                    <img width="1" height="1" alt="" src="https://www.weddingwire.com/apis/v3/tracker?partner_key=163r5mm3&amp;target_id=aeebd605bf646d3f&amp;type=bca_2016" />
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="section featured">
        <div class="container">
            <h1 class="text-center underline">Featured In...</h1>
            <div class="logos">
                <img src="{{ URL::asset('library/img/logos/womens-health.jpg') }}" alt="">
                <img src="{{ URL::asset('library/img/logos/new-york-times.jpg') }}" alt="">
                <img src="{{ URL::asset('library/img/logos/h-and-h.jpg') }}" alt="">
                <img src="{{ URL::asset('library/img/logos/100-layer-cake.jpg') }}" alt="">
                <img src="{{ URL::asset('library/img/logos/bridal-musings.jpg') }}" alt="">
                <img src="{{ URL::asset('library/img/logos/frieda-theres.jpg') }}" alt="">
                <img src="{{ URL::asset('library/img/logos/career-contessa.jpg') }}" alt="">
                <img src="{{ URL::asset('library/img/logos/jet-fete.jpg') }}" alt="">
                <img src="{{ URL::asset('library/img/logos/tulip-louise.jpg') }}" alt="">
                <img src="{{ URL::asset('library/img/logos/dean-street-society.jpg') }}" alt="">
                <img src="{{ URL::asset('library/img/logos/feature-shoot.jpg') }}" alt="">
                <img src="{{ URL::asset('library/img/logos/sky-gallery.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <section class="section parallax" style="background:url({{ URL::asset('library/img/parallax-2.jpg') }})">
        <div class="container">
            <img src="{{ URL::asset('library/img/ico-mail.png') }}" style="width:100px" alt="">
            <div class="clearfix"></div>
            <br>
            <div class="clearfix"></div>
            <h1>
                Making people feel worthy and loved in front <br>
                of my camera brings me the ultimate joy
            </h1>
            <div class="callout contact-form" style="max-width:640px;margin-top:50px;">
                <h1>Contact Us</h1>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email">
                </div>
                <div class="form-group">
                    <label for="">Request/Comment</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
    </section>




@stop

@section('script')
    <script>
        setTimeout(function(){
            $('.start-block').fadeOut(1000);
        }, 2000);
        setTimeout(function(){
            var video = '<div class="video-frame" style="width:100%;height:100%;margin:0 auto;display:block;"> <div class="video-wrapper" style="height:0px;padding-bottom:56.24%;"> <img src="{{ URL::asset('library/img/video-gradient.png') }}" width="100%" style="position:absolute;top:0;" alt=""> <video width="100%" height="100%" autoplay loop> <source src="{{ URL::asset('library/video/video.mp4') }}" type="video/mp4"> <source src="{{ URL::asset('library/video/video.ogg') }}" type="video/ogg">Your browser does not support the video tag. </video> </div> </div>';
            $('.banner.homepage .video-block').html(video);
            setTimeout(function(){
                $('.banner.homepage .video-block').animate({
                    'opacity': 1
                }, 200);
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
           }, 40000);
            $('.progress-bar').animate({'width': '100%'}, 40000);
           setTimeout(function() {
               if($(window).width <= 1024) {
                   $('video').play();
               }
           }, 5000);
        });
    </script>
@stop