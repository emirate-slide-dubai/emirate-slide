<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" href="/"><img id="main-logo" src="{{ asset('public/web_asset/logos/main_logo__.webp') }}" alt="emirate-slide-logo" style="width :90px" class="img-fluid"></a>
    <button class="navbar-toggler" style="font-size: 16px" type="button" id="openMenu" onclick="openMenu()" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a onclick="closeMenu()" id="closeMenu" style="padding: 15px;display:none">X</a>
    <div class="collapse navbar-collapse" style="justify-content: end;margin: 18px;" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item @yield('home-active')"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item @yield('aboutus-active')"><a class="nav-link" href="{{ url('/about-us') }}">About Us</a></li>
                <li class="nav-item @yield('category-active')"><a class="nav-link" href="{{ url('/categories') }}">Category</a></li>
                <li class="nav-item @yield('portfolio-active')"><a class="nav-link" href="{{ url('/portfolio') }}">Portfolio</a></li>
                {{-- <li class="nav-item @yield('blog-active')"><a class="nav-link" href="{{ url('/blogs') }}">Blog</a></li> --}}
                <li class="nav-item @yield('contact-active')"><a class="nav-link" href="{{ url('/contact-us') }}">Contact</a></li>
      </ul>
    </div>
  </nav>

  <script>
    function closeMenu(){
        $('#closeMenu').hide();
        $('#openMenu').show();
        $('#navbarSupportedContent').hide();
    }
    function openMenu(){
        $('#closeMenu').show();
        $('#openMenu').hide();
        $('#navbarSupportedContent').show();
    
    }
    // navbar-toggler
    
    </script>