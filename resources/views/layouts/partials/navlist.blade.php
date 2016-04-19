<ul>
    <li class="{{ navIsCurrent('/', 'active') }}"><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="{{ navIsCurrent('team', 'active') }}"><a href="{{ URL::to('team') }}">Our Team</a></li>
    <li class="{{ navIsCurrent('work', 'active') }}"><a href="{{ URL::to('work') }}">Our Work</a></li>
    <li class="{{ navIsCurrent('contact', 'active') }}"><a href="{{ URL::to('contact') }}">Contact Us</a></li>
</ul>