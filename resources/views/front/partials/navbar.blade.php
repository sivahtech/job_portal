<header>
    <div class="container flex">
        <div class="col">
            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo.png') }}" class="logo"></a>
        </div>
        <div class="col">
            <ul class="menu">
                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                @guest
                <li><a href="{{ route('find.jobs') }}">Find a job</a></li>
                @endguest
                @auth
                @if(Auth::user()->role === 'employee')
                <li><a href="{{ route('find.jobs') }}">Find a job</a></li>
                @endif
                @if(Auth::user()->role === 'company')
                <li class=""><a href="{{ route('find.candidates') }}">Find Candidate</a></li>
                <li><a href="{{ route('post.job') }}">Post a job</a></li>
                @endif
                @endauth
                <li><a href="#">contact</a></li>
            </ul>
        </div>

        <div class="col">
            @guest
            <a href="{{ route('login') }}" class="button-alt">Log In</a>
            <a href="{{ route('register') }}" class="button">Register</a>
            @endguest
            @auth
            <a href="{{ route('logout') }}" class="button">Logout</a>
            @endauth
        </div>
    </div>
</header>
