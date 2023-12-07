<header class="main_menu_area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"><img src="{{ asset('web_asset/logos/emirate-logoo.webp') }}" alt="emirate-slide-logo" style="width :200px" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item @yield('home-active')"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item @yield('aboutus-active')"><a class="nav-link" href="{{ url('/about-us') }}">About Us</a></li>
                <li class="nav-item @yield('service-active')"><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
                <li class="nav-item @yield('portfolio-active')"><a class="nav-link" href="{{ url('/portfolio') }}">Portfolio</a></li>
                <li class="nav-item @yield('blog-active')"><a class="nav-link" href="{{ url('/blogs') }}">Blog</a></li>
                <li class="nav-item @yield('contact-active')"><a class="nav-link" href="{{ url('/contact-us') }}">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>