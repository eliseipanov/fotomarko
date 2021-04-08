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

       /* Preloader CSS */
       .preloader {
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        background: #fff;
        z-index: 3;
        }

        .preloader__image {
        position: relative;
        top: 50%;
        left: 50%;
        width: 64px;
        height: 64px;
        margin-top: -32px;
        margin-left: -32px;
        background: url('https://fotomarko.de/assets/images/spinner2.gif') no-repeat 50% 50%; /*расположение (url) изображения gif и др. параметры*/
        z-index: 9999;
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

<body>
    <!-- Прелоадер -->
    <div class="preloader">
    <div class="preloader__image"></div>
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
