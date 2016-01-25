@extends('layouts.master')

@section('content')


    <nav class="home">
        <div class="container">
            <div class="navigation">
                <a href="{{ URL::to('/') }}" class="pull-left"><img src="{{ URL::asset('library/img/logo-color.png') }}"
                                                                    width="221" alt=""></a>

                <div class="clearfix"></div>
            </div>
        </div>
    </nav>

    <section class="banner homepage">
        <div class="icon">

        </div>
        <div class="pulldown">
            <h1>You Have <br> A Story <br>Worth Telling</h1>
        </div>
    </section>

    <section class="section photography">
        <div class="container">
            <ul class="photo-sections homepage">
                <li>
                    <a href="#">
                        <div class="thumbnail"
                             style="background:url({{ URL::asset('library/img/photography/photo-head-weddings.jpg') }}) no-repeat center center;background-size:cover;">
                            <img src="{{ URL::asset('library/img/spacer-square.png') }}" alt="" class="spacer">

                            <div class="overlay weddings"></div>
                            <div class="overlay-text">
                                <h1>Weddings <br><small>and</small>
                                    <br> Engagements</h1>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ URL::asset('library/img/spacer-square.png') }}" alt="" class="spacer">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="thumbnail"
                             style="background:url({{ URL::asset('library/img/photography/photo-head-family.jpg') }}) no-repeat center center;background-size:cover;">
                            <img src="{{ URL::asset('library/img/spacer-square.png') }}" alt="" class="spacer">

                            <div class="overlay family"></div>
                            <div class="overlay-text">
                                <h1>Family <br>Sessions</h1>
                            </div>
                        </div>
                        <div class="description">
                            <img src="{{ URL::asset('library/img/spacer-square.png') }}" alt="" class="spacer">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="thumbnail"
                             style="background:url({{ URL::asset('library/img/photography/photo-head-portrait.jpg') }}) no-repeat center center;background-size:cover;">
                            <img src="{{ URL::asset('library/img/spacer-square.png') }}" alt="" class="spacer">

                            <div class="overlay portrait"></div>
                           <div class="overlay-text">
                               <h1>Portraits</h1>
                           </div>
                        </div>
                        <div class="description">
                            <img src="{{ URL::asset('library/img/spacer-square.png') }}" alt="" class="spacer">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="section parallax camera-parallax" style="background:url({{ URL::asset('library/img/parallax-1.jpg') }})">
        <div class="container">
            <img src="{{ URL::asset('library/img/ico-camera.png') }}" style="width:258px;" alt="">
            <div class="clearfix"></div>
            <br><br>
            <div class="clearfix"></div>
            <h1>Each of us has something that no one else has</h1>
        </div>
    </section>

    <section class="section about">
        <div class="container">
            <div class="profile bethany">
                <img src="{{ URL::asset('library/img/spacer-square.png') }}" alt="" class="spacer">
            </div>
            <div class="bio"></div>
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

    <section class="section instagram">
        <div class="container">
            <h1 class="text-center">Grammin at...</h1>
        </div>
    </section>

    <section class="section parallax" style="background:url({{ URL::asset('library/img/parallax-2.jpg') }})">
        <div class="container">
            <img src="{{ URL::asset('library/img/ico-mail.png') }}" style="width:192px" alt="">
            <div class="clearfix"></div>
            <br>
            <div class="clearfix"></div>
            <h1>
                Making people feel worthy and loved in front <br>
                of my camera brings me the ultimate joy
            </h1>
        </div>
    </section>

    <section class="section contact"></section>

    <footer class="footer">
        <div class="container">

        </div>
    </footer>

@stop

@section('scripts')
@stop