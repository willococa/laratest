<x-layout>

  <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow">

        <div class="row">
            <h3>Create new user</h3>

            <form method="post" action="/register">
                @csrf
                <fieldset>

                    <div class="form-field">
                        <input name="name" type="text" id="name" class="full-width" placeholder="Your Name" value="{{old('name')}}">
                    </div>
                    @error('name')
                        <div class="alert-box alert-box--error hideit">
                            <p>{{$message}}</p>
                            <i class="fa fa-times alert-box__close"></i>
                        </div>
                    @enderror

                    <div class="form-field">
                        <input name="email" type="email" id="email" class="full-width" placeholder="Your Email" value="{{old('email')}}">
                    </div>

                    @error('email')
                        <div class="alert-box alert-box--error hideit">
                            <p>{{$message}}</p>
                            <i class="fa fa-times alert-box__close"></i>
                        </div>
                    @enderror

                    <div class="form-field">
                        <input name="password" type="password" id="password" class="full-width" placeholder="Password.."  value="">
                    </div>
                    <div class="form-field">
                        <input name="password_confirmation" type="password" id="password_confirmation" class="full-width" placeholder="Confirm Password.."  value="">
                    </div>

                    @error('password')
                        <div class="alert-box alert-box--error hideit">
                            <p>{{$message}}</p>
                            <i class="fa fa-times alert-box__close"></i>
                        </div>
                    @enderror
                    <button type="submit" class="submit btn btn--primary full-width">Submit</button>

                </fieldset>
            </form> <!-- end form -->
        </div>
    </section>
</x-layout>
