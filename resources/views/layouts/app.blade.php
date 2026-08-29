<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="@yield('meta_description', 'Professional IT solutions — Software Development, AI Automations, Digital Marketing, SEO, Shopify & Mobile Apps.')">
    <meta name="keywords"    content="@yield('meta_keywords', 'software development, AI automation, digital marketing, SEO, Shopify, mobile apps')">
    <link rel="canonical"   href="{{ url()->current() }}">

    <meta property="og:title"       content="@yield('title', config('app.name'))">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta property="og:image"       content="@yield('og_image', asset('assets/img/og-default.jpg'))">

    <title>@yield('title', config('app.name')) | IT Solutions</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

    {{-- Bootstrap 3 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    {{-- Google Fonts --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600">
    {{-- Font Awesome 4.7 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- Themify Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@master/css/themify-icons.css">
        {{-- Owl Carousel 2 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    {{-- Animate CSS 3.x --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    {{-- Venobox --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.css">
    {{-- Magnific Popup --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    {{-- Local Monoline CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    {{-- custom.css LAST — overrides everything above --}}
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    {{-- Navbar responsive + transparent styles --}}
    <style>
        /* ── Reset body top padding for fixed navbar ── */
        body { padding-top: 0; }

        /* ─────────────────────────────────────────────
           NAVBAR BASE
        ───────────────────────────────────────────── */
        #main-navbar {
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            z-index: 9990;
            transition: background 0.35s ease, box-shadow 0.35s ease, padding 0.35s ease;
            background: transparent !important;
            box-shadow: none;
            padding: 18px 0;
        }

        /* Scrolled — solid white */
        #main-navbar.navbar-scrolled {
            background: #fff !important;
            box-shadow: 0 2px 24px rgba(0,0,0,0.10);
            padding: 10px 0;
        }

        /* Logo — white on transparent, original when scrolled */
        #main-navbar .site-logo img {
            max-height: 42px;
            width: auto;
            transition: filter 0.3s ease, max-height 0.3s ease;
            /* filter: brightness(0) invert(1); */
        }
        #main-navbar.navbar-scrolled .site-logo img { filter: none; }

        /* Nav links */
        #main-navbar .site-menu > li > .nav-link {
            color: rgba(255,255,255,0.92) !important;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.3px;
            padding: 8px 14px;
            transition: color 0.25s ease;
        }
        #main-navbar.navbar-scrolled .site-menu > li > .nav-link { color: #333 !important; }
        #main-navbar .site-menu > li > .nav-link:hover,
        #main-navbar .site-menu > li.active > .nav-link            { color: #fff !important; opacity: 0.75; }
        #main-navbar.navbar-scrolled .site-menu > li > .nav-link:hover,
        #main-navbar.navbar-scrolled .site-menu > li.active > .nav-link {
            color: var(--accent, #f76c2f) !important;
            opacity: 1;
        }

        /* ─────────────────────────────────────────────
           DROPDOWN
        ───────────────────────────────────────────── */
        #main-navbar li.has-children { position: relative; }
        #main-navbar .dropdown {
            position: absolute;
            top: calc(100% + 6px);
            left: 0;
            min-width: 210px;
            background: #fff;
            border-radius: 6px;
            box-shadow: 0 10px 36px rgba(0,0,0,0.13);
            padding: 8px 0;
            list-style: none;
            margin: 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: opacity 0.25s ease, transform 0.25s ease, visibility 0.25s;
            z-index: 9999;
        }
        #main-navbar li.has-children:hover > .dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        #main-navbar .dropdown li a {
            display: block;
            padding: 9px 20px;
            color: #444 !important;
            font-size: 13.5px;
            white-space: nowrap;
            transition: background 0.18s, color 0.18s;
            text-decoration: none;
        }
        #main-navbar .dropdown li a:hover {
            background: #f7f7f7;
            color: var(--accent, #f76c2f) !important;
        }

        /* ─────────────────────────────────────────────
           HAMBURGER
        ───────────────────────────────────────────── */
        .navbar-hamburger {
            display: none;
            background: none;
            border: none;
            padding: 4px 0;
            cursor: pointer;
            float: right;
        }
        .navbar-hamburger span {
            display: block;
            width: 26px;
            height: 2px;
            background: #fff;
            margin: 5px 0;
            border-radius: 2px;
            transition: background 0.3s ease, transform 0.35s ease, opacity 0.3s ease;
        }
        #main-navbar.navbar-scrolled .navbar-hamburger span { background: #333; }
        .navbar-hamburger.is-open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        .navbar-hamburger.is-open span:nth-child(2) { opacity: 0; }
        .navbar-hamburger.is-open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

        /* ─────────────────────────────────────────────
           MOBILE DRAWER
        ───────────────────────────────────────────── */
        #mobile-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.48);
            z-index: 9991;
        }
        #mobile-overlay.active { display: block; }

        #mobile-drawer {
            position: fixed;
            top: 0; right: -310px;
            width: 290px;
            height: 100vh;
            background: #fff;
            z-index: 9992;
            box-shadow: -4px 0 32px rgba(0,0,0,0.16);
            transition: right 0.36s cubic-bezier(0.4,0,0.2,1);
            overflow-y: auto;
            padding: 0;
        }
        #mobile-drawer.is-open { right: 0; }

        .mobile-drawer-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 20px 14px;
            border-bottom: 1px solid #eee;
        }
        .mobile-drawer-header img { max-height: 34px; }
        .mobile-drawer-close {
            background: none;
            border: none;
            font-size: 24px;
            line-height: 1;
            cursor: pointer;
            color: #555;
            padding: 0 4px;
        }

        #mobile-drawer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        #mobile-drawer > ul { padding: 8px 0 24px; }
        #mobile-drawer li { border-bottom: 1px solid #f2f2f2; }
        #mobile-drawer li:last-child { border-bottom: none; }
        #mobile-drawer li > a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 13px 20px;
            font-size: 14.5px;
            font-weight: 500;
            color: #333;
            text-decoration: none;
            transition: color 0.2s, background 0.2s;
        }
        #mobile-drawer li > a:hover { color: var(--accent, #f76c2f); background: #fafafa; }
        #mobile-drawer li.active > a { color: var(--accent, #f76c2f); }

        /* Arrow for parent items */
        #mobile-drawer li.has-children > a::after {
            content: '›';
            font-size: 18px;
            line-height: 1;
            transition: transform 0.25s ease;
            color: #aaa;
        }
        #mobile-drawer li.has-children.sub-open > a::after { transform: rotate(90deg); color: var(--accent, #f76c2f); }

        /* Sub-menu */
        #mobile-drawer .sub-menu {
            display: none;
            background: #f9f9f9;
            border-top: 1px solid #eee;
        }
        #mobile-drawer .sub-menu.open { display: block; }
        #mobile-drawer .sub-menu li { border-bottom: 1px solid #eee; }
        #mobile-drawer .sub-menu li:last-child { border-bottom: none; }
        #mobile-drawer .sub-menu li a {
            padding: 11px 20px 11px 34px;
            font-size: 13.5px;
            font-weight: 400;
            color: #555;
        }
        #mobile-drawer .sub-menu li a:hover { color: var(--accent, #f76c2f); background: #f2f2f2; }

        /* ─────────────────────────────────────────────
           RESPONSIVE BREAKPOINTS
        ───────────────────────────────────────────── */
        @media (max-width: 1199px) {
            .navbar-hamburger { display: block; }
            .navbar-desktop-nav { display: none !important; }
        }
        @media (min-width: 1200px) {
            .navbar-hamburger { display: none !important; }
            #mobile-drawer, #mobile-overlay { display: none !important; }
        }
        @media (max-width: 767px) {
            #main-navbar { padding: 12px 0; }
            #main-navbar .site-logo img { max-height: 34px; }
        }
        @media (max-width: 480px) {
            #main-navbar .site-logo img { max-height: 30px; }
            #mobile-drawer { width: 270px; }
        }

        /* ─────────────────────────────────────────────
           PRELOADER
        ───────────────────────────────────────────── */
        .preloader {
            position: fixed;
            inset: 0;
            background: #fff;
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .preloader.hidden { display: none; }

        /* Scroll-to-top */
        #scrollUp {
            bottom: 24px;
            right: 24px;
            z-index: 9000;
        }
    </style>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @stack('styles')
</head>

<body data-spy="scroll" data-offset="80">

    {{-- PRELOADER --}}
    <div class="preloader" id="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    {{-- jQuery 1.12.4 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    {{-- Bootstrap 3 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>
    {{-- Modernizr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    {{-- Owl Carousel 2 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    {{-- Magnific Popup --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    {{-- MixItUp 2.x --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
    {{-- jQuery Appear --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-appear/1.0.0/jquery.appear.min.js"></script>
    {{-- jQuery inView --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inview/1.0.0/jquery.inview.min.js"></script>
    {{-- jQuery Stellar --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-stellar/0.6.2/jquery.stellar.min.js"></script>
    {{-- WOW.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    {{-- jQuery Sticky --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
    {{-- Venobox --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.js"></script>

    {{-- Local Monoline JS --}}
    <script src="{{ asset('assets/js/menu.js') }}"></script>
    <script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    <script>
    (function () {

        // ── Preloader ──
        window.addEventListener('load', function () {
            var p = document.getElementById('preloader');
            if (p) {
                p.style.opacity = '0';
                p.style.transition = 'opacity 0.5s ease';
                setTimeout(function () { p.style.display = 'none'; }, 500);
            }
        });

        // ── WOW.js ──
        new WOW().init();

        // ── Navbar transparent / solid on scroll ──
        var navbar = document.getElementById('main-navbar');
        function onScroll() {
            if (window.scrollY > 60) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        }
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();

        // ── Mobile drawer ──
        var drawer  = document.getElementById('mobile-drawer');
        var overlay = document.getElementById('mobile-overlay');
        var burger  = document.getElementById('nav-burger');

        function openDrawer() {
            drawer.classList.add('is-open');
            overlay.classList.add('active');
            burger.classList.add('is-open');
            document.body.style.overflow = 'hidden';
        }
        function closeDrawer() {
            drawer.classList.remove('is-open');
            overlay.classList.remove('active');
            burger.classList.remove('is-open');
            document.body.style.overflow = '';
        }

        if (burger)  burger.addEventListener('click', function (e) { e.preventDefault(); drawer.classList.contains('is-open') ? closeDrawer() : openDrawer(); });
        if (overlay) overlay.addEventListener('click', closeDrawer);
        var closeBtn = document.getElementById('drawer-close');
        if (closeBtn) closeBtn.addEventListener('click', closeDrawer);

        // ── Mobile sub-menu accordion ──
        document.querySelectorAll('#mobile-drawer li.has-children > a').forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                var li  = this.parentElement;
                var sub = li.querySelector('.sub-menu');
                var isOpen = li.classList.contains('sub-open');
                // Close all
                document.querySelectorAll('#mobile-drawer li.has-children').forEach(function (x) {
                    x.classList.remove('sub-open');
                    var s = x.querySelector('.sub-menu');
                    if (s) s.classList.remove('open');
                });
                // Toggle clicked
                if (!isOpen) {
                    li.classList.add('sub-open');
                    if (sub) sub.classList.add('open');
                }
            });
        });

    })();
    </script>

    @stack('scripts')
</body>
</html>