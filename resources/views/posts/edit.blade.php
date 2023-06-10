@extends('layout')
@section('content')
<!-- s-content
================================================== -->
<section class="s-content s-content--narrow">

<div class="row">
    <div class="col-full s-content__main">
        <h3>Edit Post</h3>

        <form name="cForm" id="cForm" method="post" action="/posts/{{$post->id}}">
            <fieldset>
                @csrf
                @method('put')
                <div class="form-field">
                    <input name="title" type="text" id="title" class="full-width" placeholder="Type the post title" value="{{$post->title}}">
                </div>

                <div class="form-field">
                    <textarea name="excerpt"  id="excerpt" class="full-width" placeholder="Post excerpt">{{$post->excerpt}}</textarea>
                </div>

                <div class="message form-field">
                <textarea name="body" id="body" class="full-width" placeholder="Post body" >{{$post->body}}</textarea>
                </div>

                <button type="submit" class="submit btn btn--primary full-width">Submit</button>

            </fieldset>
        </form> <!-- end form -->


    </div> <!-- end s-content__main -->

</div> <!-- end row -->

</section> <!-- s-content -->

@endsection
