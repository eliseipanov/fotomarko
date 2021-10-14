<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Oleksii Marchenko - Fotografer in Osnabrück</title>
  <meta content="FOTOGRAF UND FOTODESIGNER -  OSNABRÜCK!" name="title">
  <meta content="Osnabrück! Braucht Ihr Unternehmen einen Fotografen? Rufen Sie +49 176 779 759 78 an!" name="description">
  <meta content="Fotograf, russischer Fotograf in Osnabrück, russischsprachiger Fotograf, ukrainischer Fotograf in Osnabrück" name="keywords">
      <meta name="author" content="Oleksii Piliuhin-Marchenko">
      <meta property="og:title" content="FOTOGRAF UND FOTODESIGNER -  OSNABRÜCK!">
      <meta property="og:type" content="website" />
      <meta property="og:description" content="Osnabrück! Braucht Ihr Unternehmen einen Fotografen? Rufen Sie +49 176 779 759 78 an!">
      <meta property="og:url" content="https://fotomarko.de/de/" />
      <meta property="og:image" content="{{asset('assets/img/portfolio')}}/portfolio-lesha.jpg">
                  {{-- <meta property="fb:app_id" content="876589453292840" /> --}}
      <meta name="robots" content="index, follow">
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
  <link href="{{asset('assets')}}/css/flag-icon.min.css" rel="stylesheet">

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

  <!-- Template Main CSS File -->
  <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

  <!-- FLIPBOOK -->
  <link href="{{asset('assets')}}/css/flipbook.style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/font-awesome.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!-- Cookie Consent by https://www.FreePrivacyPolicy.com -->
<script type="text/javascript" src="//www.freeprivacypolicy.com/public/cookie-consent/3.1.0/cookie-consent.js"></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
cookieconsent.run({"notice_banner_type":"headline","consent_type":"express","palette":"light","language":"de","website_name":"FOTOMARKO","cookies_policy_url":"https://fotomarko.de/privacypolicy"});
});
</script>

<!-- Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script type="text/plain" cookie-consent="tracking" async src="https://www.googletagmanager.com/gtag/js?id=G-K86JV841PK"></script>
<script type="text/plain" cookie-consent="tracking">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K86JV841PK');
</script>
<!-- end of Google Analytics-->

<noscript>Cookie Consent by <a href="https://www.FreePrivacyPolicy.com/free-cookie-consent/" rel="nofollow noopener">FreePrivacyPolicy.com</a></noscript>
<!-- End Cookie Consent -->

  <script src="{{ asset('assets')}}/js/flipbook.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
    $("#container").flipBook({
        pages:[
            {src:"https://fotomarko.de/assets/images/book2/page1.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumbs1.jpg", title:"fotomarko.de Book First Page"},
            {src:"https://fotomarko.de/assets/images/book2/page9.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumbs9.jpg", title:"Page two - Girl's portrait"},
            {src:"https://fotomarko.de/assets/images/book2/page8.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumbs8.jpg", title:"Page three - Georg's Portrait"},
            {src:"https://fotomarko.de/assets/images/book2/page7.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumbs7.jpg", title:"Page four - little girl with Glockhen"},
            {src:"https://fotomarko.de/assets/images/book2/page3.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumbs3.jpg", title:"Page five - My friend Ihor"},
            {src:"https://fotomarko.de/assets/images/book2/page5.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumbs5.jpg", title:"Page six - Sample of Subject photography"},
            {src:"https://fotomarko.de/assets/images/book2/page6.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumbs6.jpg", title:"Page seven - One more Subject"},
            {src:"https://fotomarko.de/assets/images/book2/page4.jpg", thumb:"https://fotomarko.de/assets/images/book2/thumbs4.jpg", title:"Page eight - Black and white photo of city"}
        ],zoomLevels:[0.9,3], deeplinking:{enabled:true, prefix:"",autoplayOnStart:true, autoplayInterval:3000,backgroundColor:"#FFF"}
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
