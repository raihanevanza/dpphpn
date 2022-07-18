<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ url('assets_user/img/logo.png') }}" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
          <li class="dropdown"><span>Berita</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
            <ul>
              <li><a href="{{ url('news/daerah') }}" class="active">Daerah</a></li>
              <li><a href="{{ url('news/nasional') }}">Nasional</a></li>
              <li><a href="{{ url('news/trending') }}">Trending</a></li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#">Program Kerja</a></li>
          <li><a class="nav-link scrollto" href="{{ url('catalog') }}">Katalog</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="#about">Get Started</a>

    </div>
  </header>