<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Yurii Smola, Oleksii Marchenko">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="title" content="{{ $panoconfig->panotitle ?? 'Panorama' }}">
    <meta property="og:title" content="{{ $panoconfig->panodescription ?? ''  }}">
    <meta property="og:description" content="{{ $panoconfig->panodescription }}">
    <meta property="og:image" content="{{ $panoconfig->panosmmimage ?? '' }}">
    <meta property="og:url" content="https://fotomarko.de/Dnipro-01/pano/index.html">
    <meta name="description" content="{{ $panoconfig->panodescription ?? ''}}">
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
        }
    </style>
</head>

<body>
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
        var viewer = new FORGE.Viewer("container", "/configpano");

    </script>
</body>
</html>
