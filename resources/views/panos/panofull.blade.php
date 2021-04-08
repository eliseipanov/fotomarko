<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Yurii Smola, Oleksii Marchenko">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="title" content="{{ $panoconfig[0]->panotitle ?? 'Panorama' }}">
    <meta property="og:title" content="{{ $panoconfig[0]->panodescription ?? ''  }}">
    <meta property="og:description" content="{{ $panoconfig[0]->panodescription ?? '' }}">
    <meta property="og:image" content="{{ $panoconfig[0]->panosmmimage ?? '' }}">
    <meta property="og:url" content="https://fotomarko.de/Dnipro-01/pano/index.html">
    <meta name="description" content="{{ $panoconfig[0]->panodescription ?? '' }}">
    <title>{{ $panoconfig->panotitle ?? 'Panorama' }}</title>


    <!-- Little styling -->
    <style type="text/css">
        @-ms-viewport { width: device-width; }
        @-o-viewport { width: device-width; zoom: 1.0; min-zoom: 1.0; max-zoom: 1.0; }
        @viewport { width: device-width; zoom: 1.0; min-zoom: 1.0; max-zoom: 1.0; }

        html, body
        {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        div#container
        {
            height: 100%;
            z-index: -1;
        }
        div#nanobar {
            min-height: 0.8em;
            z-index: 1;
        }
       /* Preloader CSS */
       .preloader {
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  /* фоновый цвет */
  background: #e0e0e0;
  z-index: 2;
}

.preloader__image {
  position: relative;
  top: 50%;
  left: 50%;
  width: 70px;
  height: 70px;
  margin-top: -35px;
  margin-left: -35px;
  text-align: center;
  animation: preloader-rotate 2s infinite linear;
}

@keyframes preloader-rotate {
  100% {
    transform: rotate(360deg);
  }
}

.loaded_hiding .preloader {
  transition: 0.3s opacity;
  opacity: 0;
}

.loaded .preloader {
  display: none;
}

    </style>
    <script>
  window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
  }
</script>
</head>

<body data-nanobar="radial-gradient(circle at 30% 107%,#fdf497 0%,#fdf497 5%,#fd5949 45%,#d6249f 60%,#285AEB 90%)">
    <script src="{{ asset('assets') }}/lib/nanobar.min.js"></script>

        <div class="preloader">
        <svg class="preloader__image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor"
        d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z">
        </path>
    </svg>
    </div>
    <div id="container"></div>

    <!-- Include the threejs custom build -->
    <script src="{{asset('assets')}}/lib/three.js/three.r86.custom.min.js"></script>

    <!-- Include the Hammer.js library -->
    <script src="{{asset('assets')}}/lib/hammer.js/hammer.min.js"></script>

    <!-- Include the ForgeJS library -->
    <script type="text/javascript" src="{{asset('assets')}}/lib/forge/forge.min.js" ></script>

    <!-- Start ForgeJS -->
    <script type="text/javascript">

        // Create a viewer
        var viewer = new FORGE.Viewer("container", "/config?id{{ $id ?? '' }}");

    </script>
</body>
</html>
