@if(session()->has('success'))
        <div class="flash-message-container alert-box alert-box--success hideit">
            <p>{{session('success')}}</p>
            <i class="fa fa-times alert-box__close"></i>
        </div>
    @endif
