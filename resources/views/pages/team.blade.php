@extends('layouts.sub-page')

@section('content')
    <div class="page-header text-center">
        <div class="container">
            <h1>Our Team</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="container">
        <div class="team-block mini">
            <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/2/005/021/010/260ad65.jpg" alt="">
            <h2 class="text-center">Bethany Michaela Jones <br><small>Founder, Photographer, Videographer</small></h2>
            <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem facere id recusandae totam? Aperiam aspernatur earum ex hic id inventore iste magni maiores mollitia nostrum pariatur quis reiciendis, sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequatur cum delectus, illo laudantium mollitia placeat quidem quos repellendus sapiente? Atque dignissimos eum exercitationem fugit incidunt pariatur quam sapiente velit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut ea non quia. Beatae consequatur, doloribus earum enim ex fugiat iure labore laboriosam libero natus non, quam qui quis reiciendis, sapiente.</p>
        </div>
        <div class="team-block mini">
            <img src="{{ URL::asset('library/img/team-josiah.png') }}" alt="">
            <h2 class="text-center">Josiah Aaron Jones <br><small>Videographer, Editor</small></h2>
        </div>
        <div class="team-block mini">
            <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/5/005/075/25b/3382731.jpg" alt="">
            <h2 class="text-center">Tarun Krishnan <br><small>Design & Development</small></h2>
        </div>
        <div class="clearfix"></div>
    </div>
@stop

@section('script')
@stop