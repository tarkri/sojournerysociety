@include('layouts.partials.header')


<nav class="page">
    <div class="container">
        <div class="navigation">
            <a href="{{ URL::to('/') }}" class=""><img src="{{ URL::asset('library/img/logo-color.png') }}"
                                                       width="221"  style="z-index:9999;" alt=""></a>

            <div class="clearfix"></div>
            @include('layouts.partials.navlist')
        </div>
    </div>
</nav>

<!-- Add your site or application content here -->
<div class="wrapper">
    @yield('content')
</div>


@include('layouts.partials.foot')
