
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
 <meta charset="utf-8">
 <meta content="width=device-width, initial-scale=1.0" name="viewport">

 <title>{{ __('blog.title')}}</title>
 <meta content="{{ __('blog.description')}} +49 176 77975978" name="description">
 <meta content="{{ __('blog.keywords')}}" name="keywords">

 <!-- Favicons -->
  {{-- Favicon Set --}}
  <!--[if IE]><link rel="shortcut icon" href="{{asset('assets')}}/img/favicon.ico"><![endif]-->
<link rel="icon" type="image/png" href="{{asset('assets')}}/img/favicon.png">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets')}}/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets')}}/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/img/favicon-16x16.png">
<link rel="manifest" href="{{asset('assets')}}/img/site.webmanifest">
<link rel="mask-icon" href="{{asset('assets')}}/img/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="{{asset('assets')}}/vendor/animate.css/animate.min.css" rel="stylesheet">
 <link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="{{asset('assets')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <link href="{{asset('assets')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
 <link href="{{asset('assets')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
 <link href="{{asset('assets')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
 <link href="{{asset('assets')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 <link href="{{asset('assets')}}/css/flag-icon.min.css" rel="stylesheet">

 <!-- Template Main CSS File -->
 <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

 <!-- FLIPBOOK -->
 <link href="{{asset('assets')}}/css/flipbook.style.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/font-awesome.css">

 {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script> --}}
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
 {{-- <script src="{{ asset('assets') }}/js/custom.js"></script> --}}


 <!-- =======================================================
 * Template Name: Sailor - v4.0.1
 * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 ======================================================== -->
</head>
