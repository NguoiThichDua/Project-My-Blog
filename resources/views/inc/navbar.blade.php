<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm sticky-top shadow rounded">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
        </a> --}}
        <img width="50px" height="40px" alt="No Image" src="{{asset('img/blog.png')}}" class="mr-3"/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="/MyBlog/public/" tabindex="1">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/MyBlog/public/news" tabindex="2">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/MyBlog/public/coding" tabindex="3" >Coding</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/MyBlog/public/forum" tabindex="4" >Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/MyBlog/public/about" tabindex="5" >About</a>
                        </li>
                    </ul>
                </div>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <form class="form-inline my-2 my-lg-0 mr-3">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary  my-2 my-sm-0" type="submit">Search</button>
                </form>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle border border-secondary rounded-lg" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/MyBlog/public/profile" tabindex="5" >Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>