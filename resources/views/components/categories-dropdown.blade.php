<li {{$attributes}}>
    <a href="#0" title="">Categories</a>
    <ul class="sub-menu">
    @foreach($categories as $category)
        <li><a href="{{route('category.posts', $category->slug)}}">{{$category->name}}</a></li>
    @endforeach
    </ul>
</li>