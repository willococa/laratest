<x-layout>

    <!-- s-content
      ================================================== -->
      <section class="s-content s-content--narrow">

          <div class="row">
              <h3>Login</h3>

              <form method="post" action="/login">
                  @csrf
                  <fieldset>

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

                      @error('password')
                          <div class="alert-box alert-box--error hideit">
                              <p>{{$message}}</p>
                              <i class="fa fa-times alert-box__close"></i>
                          </div>
                      @enderror
                      <button type="submit" class="submit btn btn--primary full-width">Login</button>

                  </fieldset>
              </form> <!-- end form -->
          </div>
      </section>
  </x-layout>
