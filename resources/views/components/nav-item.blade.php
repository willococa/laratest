<li
class="{{Request::is($route) ? 'current' : ''}}">
    <a href="{{route($route)}}" title="{{$route}}">
        {{ucfirst($route)}}
    </a>
</li>