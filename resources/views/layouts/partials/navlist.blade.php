<ul>
    <li class="{{ navIsCurrent('/', 'active') }}"><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="{{ navIsCurrent('team', 'active') }} {{ navContains('team', 'active') }}"><a href="{{ URL::to('team') }}">Our Team</a></li>
    <li class="{{ navIsCurrent('work', 'active') }} {{ navContains('work', 'active') }}"><a href="{{ URL::to('work') }}">Our Work</a></li>
    <li class="{{ navIsCurrent('contact', 'active') }} {{ navContains('contact', 'active') }}"><a href="{{ URL::to('contact') }}">Contact Us</a></li>
</ul>