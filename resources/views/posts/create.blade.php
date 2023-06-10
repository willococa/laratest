@extends('layout')
@section('content')
        <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow">

        <div class="row">
            <div class="col-full s-content__main">
                <h3>Create Post</h3>

                <form name="cForm" id="cForm" method="post" action="/posts">
                    <fieldset>
                        @csrf
                        <div class="form-field">
                            <input
                            name="title"
                            type="text"
                            id="title"
                            class="full-width @error('title') is-danger @enderror"
                            placeholder="Type the post title"
                            value="{{old('title')}}">
                            @error('title')
                                <div class="alert-box alert-box--error hideit">
                                    <p>{{$errors->first('title')}}</p>
                                    <i class="fa fa-times alert-box__close"></i>
                                </div> <!-- end error -->
                            @enderror
                        </div>

                        <div class="form-field">
                            <textarea
                            name="excerpt"
                            id="excerpt"
                            class="full-width @error('excerpt') is-danger @enderror"
                            placeholder="Post excerpt">{{old('excerpt')}}</textarea>
                            @error('excerpt')
                                <div class="alert-box alert-box--error hideit">
                                    <p>{{$errors->first('excerpt')}}</p>
                                    <i class="fa fa-times alert-box__close"></i>
                                </div> <!-- end error -->
                            @enderror
                        </div>

                        <div class="form-field ">
                        <textarea
                        name="body"
                        id="body"
                        class="full-width @error('body') is-danger @enderror"
                        placeholder="Post body" >{{old('body')}}</textarea>
                            @error('body')
                                <div class="alert-box alert-box--error hideit">
                                    <p>{{$errors->first('body')}}</p>
                                    <i class="fa fa-times alert-box__close"></i>
                                </div> <!-- end error -->
                            @enderror
                        </div>

                        <button type="submit" class="submit btn btn--primary full-width">Submit</button>

                    </fieldset>
                </form> <!-- end form -->


            </div> <!-- end s-content__main -->

        </div> <!-- end row -->

    </section> <!-- s-content -->
@endsection
