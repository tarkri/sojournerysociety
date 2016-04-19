@extends('layouts.sub-page')

@section('content')
    <div class="page-header {{ projectHasBannerImage($project) ? 'has-banner' : null }}" style="{{ projectHasBannerImage($project) ? 'background:url('.getProjectBannerImage($project).')' : null }}">
        @if(projectHasBannerImage($project))
            <img src="{{ URL::asset('library/img/bg-gradient-reverse.png') }}" width="100%" height="100%" alt="" class="gradient">
        @endif
        <div class="container">
                <h1>{{ $project->name }}</h1>
                <p class="lead">{{ $project->sub_line }}</p>
        </div>
    </div>

    <div class="photo-reel">
        <div class="container">
            @foreach($images as $image)
                <img data-src="{{ URL::asset('uploads/projects/'.$image->image) }}" class="project-photo {{ $image->float == 1 ? 'side-by-side' : null }}" style="width:100%;max-width:{{ $image->vertical == 1 ? '480px' : '960px' }};margin:25px auto;display:block;" alt="">
            @endforeach
            <div class="clearfix"></div>
            @if($project->pass_link)
                    <div class="pass-link">
                        <a href="{{ $project->pass_link }}" target="_blank">View More Photos</a>
                    </div>
            @endif
        </div>
    </div>
@stop

@section('script')
    <script src="{{ URL::asset('library/js/jquery.lazy.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.project-photo').lazy({
                effect: "fadeIn",
                effectTime: 500,
                threshold: 0
            });
        });
    </script>
@stop