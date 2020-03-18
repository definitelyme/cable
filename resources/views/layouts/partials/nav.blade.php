<div class="navbar-area">
    <div class="spacle-responsive-nav">
        <div class="container">
            <div class="spacle-responsive-menu">
                <div class="logo">
                    <a href="{{ route('/') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="spacle-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('/') }}" class="nav-link active">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="pricing.html" class="nav-link">Support</a>
                        </li>

                        <li class="nav-item">
                            <a href="about.html" class="nav-link">Events</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a href="about.html" class="nav-link">About</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>

                    <div class="others-options">
                        <a id="get--started" href="{{ route('contact') }}" class="default-btn">
                            <i class="bx bxs-hot"></i>Get Started<span></span>
                        </a>
                        @guest
                        <a href="{{ route('login') }}" class="optional-btn">
                            <i class="bx bx-log-in"></i>Log In<span></span>
                        </a>
                        @else
                        <div class="dropdown">
                            <div class="user-account ripple" data-ripple-color="#bababa">
                                <img id="my--avatar" src="{{ asset('img/team-image/4.jpg') }}" class="img-fluid img-thumbnail rounded-circle" alt="{{ auth()->user()->name }}">
                                <i class="bx bx-chevron-down text-white"></i>
                            </div>

                            <ul class="dropdown-content dropdown-menu">
                                <a href="javascript:;"><i class="bx bx-user-circle"></i>Profile</a>
                                <a href="javascript:;"><i class="bx bx-calendar-event"></i>Upcoming Events <span class="app-badge app-badge-warning">2</span></a>
                                <a href="javascript:;"><i class="bx bx-bell"></i>Notifications <span class="app-badge app-badge-primary">15</span></a>
                                <a href="javascript:;"><i class="bx bx-cog"></i>Settings</a>
                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <i class="bx bx-exit"></i>
                                    Sign Out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                        @endguest
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
