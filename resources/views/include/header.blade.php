<div class="header">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #176B87;">
            <div class="container-fluid">
                <a style="color: #DAFFFB" class="navbar-brand" href="{{route('welcome_page')}}">Transportation Platform</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        @if(Auth::check())
                            <li>
                                <p style="color: #DAFFFB; margin-right: 10px;">Logged in: {{ $fullName }}</p>
                            </li>
                            <li class="nav-item">
                                @if(Auth::user()->type_id == '1')
                                    <a href="{{ route('admin_view') }}" class="btn btn-primary">Menu</a>
                                @elseif(Auth::user()->type_id == '2')
                                    <a href="{{ route('forwarder_view') }}" class="btn btn-primary">Menu</a>
                                @elseif(Auth::user()->type_id == '3')
                                    <a href="{{ route('driver_view') }}" class="btn btn-primary">Menu</a>
                                @endif
                            </li>
                        @endif
                        <li class="nav-item">
                            @if(Auth::check())
                                <div style="display: flex; align-items:center;">
                                    <form style="margin: 0;" method="POST" action="{{route('logout')}}">
                                        @csrf
                                        <button class="btn btn-primary" type="submit">Log out</button>
                                    </form>
                                </div>
                            @else
                                <a class="nav-link" href="{{route('login')}}">
                                    <button class="btn btn-primary" type="button">Log in</button>
                                </a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>
