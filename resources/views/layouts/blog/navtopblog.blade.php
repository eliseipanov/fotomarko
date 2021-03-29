<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">M A R K O</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">{{ __('mainpage.home')}}</a></li>

          <li class="dropdown"><a href="#"><span>{{ __('mainpage.about') }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/{{ str_replace('_', '-', app()->getLocale()) }}/about">{{ __('mainpage.about') }}</a></li>
              <li><a href="/{{ str_replace('_', '-', app()->getLocale()) }}/team">{{ __('mainpage.team') }}</a></li>
              <li><a href="/{{ str_replace('_', '-', app()->getLocale()) }}/testimonials">{{ __('mainpage.testimonials') }}</a></li>
            </ul>
          </li>
          <li><a href="/services">{{ __('mainpage.services') }}</a></li>
          <li>
              {{-- <a href="/portfolio">Portfolio</a> --}}
            <li class="dropdown">
                <a href="#"><span>Portfolio</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/{{ str_replace('_', '-', app()->getLocale()) }}/tags/people">{{ __('mainpage.people') }}</a></li>
                  <li><a href="/{{ str_replace('_', '-', app()->getLocale()) }}/tags/nature">{{ __('mainpage.nature') }}</a></li>
                  <li><a href="/{{ str_replace('_', '-', app()->getLocale()) }}/tags/subject">{{ __('mainpage.subject') }}</a></li>
                  <li><a href="/{{ str_replace('_', '-', app()->getLocale()) }}/tags/panorama">{{ __('mainpage.panorama') }}</a></li>
                  <li><a href="/{{ str_replace('_', '-', app()->getLocale()) }}/tags/retouche">{{ __('mainpage.retouche') }}</a></li>
                </ul>
              </li>
            </li>
          <li><a href="/{{ str_replace('_', '-', app()->getLocale()) }}/pricing">{{ __('mainpage.pricing') }}</a></li>
          <li><a href="/{{ str_replace('_', '-', app()->getLocale()) }}/blog">{{ __('mainpage.blog') }}</a></li>

          <li><a href="/{{ str_replace('_', '-', app()->getLocale()) }}/contact">{{ __('mainpage.contact') }}</a></li>
          <li><a href="#contact" class="getstarted">{{ __('mainpage.getintouch') }}</a></li>
          <li class="dropdown"><a href="#"><span>{{ __('mainpage.language') }} </span> <i class="bi bi-chevron-right"></i></a>
            <ul>
                @php
                if (Request::is('en/*')) {
                    $en = '';
                }
                else {
                    $en = "/en";
                }
                if (Request::is('de/*')) {
                    $de = '';
                }
                else {
                    $de = "/de";
                }
                @endphp
              <li><a href="{{ $en ?? '' }}/{{ Request::path() }}"><span class="flag-icon flag-icon-us"> </span> English</a></li>
              <li><a href="{{ $de ?? '' }}/{{ Request::path() }}"><span class="flag-icon flag-icon-de"> </span> Deutsch</a></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
