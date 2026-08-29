{{-- =====================================================
     MOBILE OVERLAY + DRAWER
     ===================================================== --}}
<div id="mobile-overlay"></div>

<div id="mobile-drawer" role="dialog" aria-label="Mobile navigation">
    <div class="mobile-drawer-header">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/img/arms-logo.png') }}" alt="{{ config('app.name') }}">
        </a>
        <button id="drawer-close" class="mobile-drawer-close" aria-label="Close menu">&times;</button>
    </div>

    <ul>
        {{-- Home --}}
        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}">Home</a>
        </li>

        {{-- About --}}
        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
            <a href="{{ route('about') }}">About</a>
        </li>

        {{-- Services --}}
        <li class="has-children {{ request()->routeIs('services*') ? 'active' : '' }}">
            <a href="{{ route('services.index') }}">Services</a>
            <ul class="sub-menu">
                @foreach(\App\Models\Service::active()->get() as $service)
                <li>
                    <a href="{{ route('services.show', $service->slug) }}">{{ $service->title }}</a>
                </li>
                @endforeach
            </ul>
        </li>

        {{-- Portfolio --}}
        <li class="has-children {{ request()->routeIs('portfolio*') ? 'active' : '' }}">
            <a href="{{ route('portfolio.index') }}">Portfolio</a>
            <ul class="sub-menu">
                <li><a href="{{ route('portfolio.index') }}">All Projects</a></li>
            </ul>
        </li>

        {{-- Pages --}}
        <li class="has-children {{ request()->routeIs('team') || request()->routeIs('faq') || request()->routeIs('pricing') ? 'active' : '' }}">
            <a href="#">Pages</a>
            <ul class="sub-menu">
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('team') }}">Team Members</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('pricing') }}">Pricing</a></li>
            </ul>
        </li>

        {{-- Blog --}}
        <li class="has-children {{ request()->routeIs('blog*') ? 'active' : '' }}">
            <a href="{{ route('blog.index') }}">Blog</a>
            <ul class="sub-menu">
                <li><a href="{{ route('blog.index') }}">All Posts</a></li>
            </ul>
        </li>

        {{-- Contact --}}
        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
            <a href="{{ route('contact') }}">Contact</a>
        </li>
    </ul>
</div>

{{-- =====================================================
     HEADER / DESKTOP NAVBAR
     ===================================================== --}}
<header id="main-navbar" role="banner">
    <div class="container">
        <div class="row" style="display:flex; align-items:center;">

            {{-- LOGO --}}
            <div class="col-xs-6 col-sm-6 col-xl-2">
                <h1 class="mb-0 site-logo" style="margin:0; line-height:1;">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/arms-logo.png') }}" alt="{{ config('app.name') }}">
                    </a>
                </h1>
            </div>

            {{-- DESKTOP NAVIGATION --}}
            <div class="col-xl-10 navbar-desktop-nav" style="text-align:right;">
                <nav role="navigation">
                    <ul class="site-menu" style="list-style:none; margin:0; padding:0; display:inline-flex; align-items:center; gap:4px;">

                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>

                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}" class="nav-link">About</a>
                        </li>

                        <li class="has-children {{ request()->routeIs('services*') ? 'active' : '' }}">
                            <a href="{{ route('services.index') }}" class="nav-link">Services</a>
                            <ul class="dropdown">
                                @foreach(\App\Models\Service::active()->get() as $service)
                                <li>
                                    <a href="{{ route('services.show', $service->slug) }}" class="nav-link">{{ $service->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="has-children {{ request()->routeIs('portfolio*') ? 'active' : '' }}">
                            <a href="{{ route('portfolio.index') }}" class="nav-link">Portfolio</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('portfolio.index') }}" class="nav-link">All Projects</a></li>
                            </ul>
                        </li>

                        <li class="has-children {{ request()->routeIs('team') || request()->routeIs('faq') || request()->routeIs('pricing') ? 'active' : '' }}">
                            <a href="#" class="nav-link">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('about') }}"   class="nav-link">About</a></li>
                                <li><a href="{{ route('team') }}"    class="nav-link">Team Members</a></li>
                                <li><a href="{{ route('faq') }}"     class="nav-link">FAQ</a></li>
                                <li><a href="{{ route('pricing') }}" class="nav-link">Pricing</a></li>
                            </ul>
                        </li>

                        <li class="has-children {{ request()->routeIs('blog*') ? 'active' : '' }}">
                            <a href="{{ route('blog.index') }}" class="nav-link">Blog</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('blog.index') }}" class="nav-link">All Posts</a></li>
                            </ul>
                        </li>

                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>

                    </ul>
                </nav>
            </div>

            {{-- HAMBURGER (mobile / tablet) --}}
            <div class="col-xs-6 col-sm-6" style="text-align:right; display:flex; align-items:center; justify-content:flex-end;">
                <button id="nav-burger" class="navbar-hamburger" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

        </div>{{-- END ROW --}}
    </div>{{-- END CONTAINER --}}
</header>