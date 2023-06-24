<header >
    <nav class="navbar navbar-expand-lg" style="background-color: #176B87;">
        <div class="container-fluid">
            <a style="color: #DAFFFB" class="navbar-brand" href="{{route('welcome_page')}}">Transportation Platform</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        @if(Auth::check())
                            <div style="display: flex; align-items:center;"><p style="color: #DAFFFB; margin-right: 10px;">Logged in: {{ $fullName }}</p>
                            <form style="margin: 0;" method="POST" action="{{route('logout')}}">
                                @csrf
                                <button class="btn btn-primary" type="submit">Log out</button></a>
                            </form></div>
                        @else
                            <a class="nav-link" href="{{route('login')}}"><button class="btn btn-primary" type="button">Log in</button></a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
