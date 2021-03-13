<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Oleksii Marchenko - Forografer im Osnabrück</title>
  <meta content="Нужен фотограф для компании? Альбом с воспоминаниями вместо мыльных фоток в Фейсбуке? НОМЕР ТЕЛЕФОНА" name="description">
  <meta content="фотограф, русский фотограф в оснабрюке, русскогвоорящий фотограф, украинцы в Оснабрюке" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets')}}/img/favicon.png" rel="icon">
  <link href="{{asset('assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <!-- Template Main CSS File -->
  <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

  <!-- FLIPBOOK -->
  <link href="{{asset('assets')}}/css/flipbook.style.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

  <script src="{{ asset('assets')}}/js/flipbook.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
    $("#container").flipBook({
        pages:[
            {src:"https://fotomarko.de/assets/images/book2/page1.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumb1.jpg", title:"fotomarko.de Book"},
            {src:"https://fotomarko.de/assets/images/book2/page9.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumb2.jpg", title:"Page two"},
            {src:"https://fotomarko.de/assets/images/book2/page8.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumb3.jpg", title:"Page three"},
            {src:"https://fotomarko.de/assets/images/book2/page7.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumb4.jpg", title:""},
            {src:"https://fotomarko.de/assets/images/book2/page3.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumb5.jpg", title:"Page five"},
            {src:"https://fotomarko.de/assets/images/book2/page5.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumb6.jpg", title:"Page six"},
            {src:"https://fotomarko.de/assets/images/book2/page6.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumb7.jpg", title:"Page seven"},
            {src:"https://fotomarko.de/assets/images/book2/page4.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumb8.jpg", title:"Last"}
        ],zoomLevels:[0.9,3], deeplinking:{enabled:true, prefix:"",autoplayOnStart:true, autoplayInterval:3000,backgroundColor:"#FFFFFF"}
    });

})
</script>

  <!-- =======================================================
  * Template Name: Sailor - v4.0.1
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
