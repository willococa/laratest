<div class="session-links-section">
    @guest
        <a href="/register">Register</a>
        <a href="/login">Login</a>
    @else
    <span>Wellcome Back! {{auth()->user()->name}}</span>
        <form action="/logout" method="post">
            @csrf
            <button>Logout</button>
        </form>
    @endguest
</div>
