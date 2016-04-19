@extends('layouts.sub-page')

@section('content')
    <div class="page-header text-center">
        <div class="container">
            <h1>Our Work</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="container">
        @foreach($types as $type)
            <div class="sub-page-header">
                <h3>{{ outputProjectType($type->type) }}</h3>
            </div>
            <?php
                $typesProjects = \App\ProjectType::where('type', $type->type)->orderby('order', 'asc')->lists('project_id');
                $projects = \App\Project::wherein('id', $typesProjects)->where('draft', 0)->get();
            ?>
            @if(count($projects))
            <ul class="photo-sections">
                @foreach($projects as $project)
                    <?php
                        $listingImage = \App\ProjectImage::where('project_id', $project->id)->where('listing', 1)->first();
                    ?>
                    <li>
                        <a href="{{ URL::to('work/'.$project->url) }}" style="background:url({{ URL::asset('uploads/projects/'.$listingImage->image) }})">
                            <img src="{{ URL::asset('library/img/bg-gradient.png') }}" width="100%" height="100%" alt="" class="gradient">
                            <div class="title">
                                <h3>{{ $project->name }} <br><small>{{ $project->sub_line }}</small></h3>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
            @endif
            <hr class="divider">
        @endforeach
    </div>
@stop

@section('script')
    <script src="{{ URL::asset('library/js/parallax.min.js') }}"></script>
    <script>
        $(document).ready(function(){

        });
    </script>
@stop