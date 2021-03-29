<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">M A R K O</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>

              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="/services">Services</a></li>
          <li><a href="/portfolio">Portfolio</a></li>
          <li><a href="/pricing">Pricing</a></li>
          <li><a href="/blog">Blog</a></li>

          <!-- <li><a href="contact.html">Contact</a></li> -->
          <li><a href="#contact" class="getstarted">Get in Touch</a></li>
          <li class="dropdown"><a href="#"><span>Language </span> <i class="bi bi-chevron-right"></i></a>
            <ul>
                @php
                if (Request::is('en/*')) {
                    $en = '';
                }
                else {$en = "/en";}
                if (Request::is('de/*')) {
                    $de = '';
                }
                else {$de = "/de"}
                @endphp
              <li><a href="{{ $en }}/{{ Request::path() }}"><span class="flag-icon flag-icon-us"> </span> English</a></li>
              <li><a href="{{ $de }}/{{ Request::path() }}"><span class="flag-icon flag-icon-de"> </span> Deutsch</a></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
