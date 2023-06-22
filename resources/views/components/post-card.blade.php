
<article class="masonry__brick entry format-standard" data-aos="fade-up">

<div class="entry__thumb">
    <a href="single-standard.html" class="entry__thumb-link">
        <img src="/images/thumbs/masonry/lamp-400.jpg"
                srcset="/images/thumbs/masonry/lamp-400.jpg 1x, /images/thumbs/masonry/lamp-800.jpg 2x" alt="">
    </a>
</div>

<div class="entry__text">
    <div class="entry__header">

        <div class="entry__date">
            <a href="single-standard.html">December 15, 2017</a>
        </div>
        <h1 class="entry__title"><a href="{{route('posts.show', $post)}}">{{$post->title}}</a></h1>

    </div>
    <div class="entry__excerpt">
        <p>
            {{$post->excerpt}}
        </p>
    </div>
    <div class="entry__meta">
        <span class="entry__meta-links">
            @foreach ($post->tags as $tag)
                <a href="/tags/{{$tag->id}}">{{$tag->name}}</a>
            @endforeach
        </span>
    </div>
</div>

</article> <!-- end article -->