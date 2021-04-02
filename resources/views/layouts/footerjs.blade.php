 <!-- Vendor JS Files -->
 <script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="{{asset('assets')}}/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="{{asset('assets')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="{{asset('assets')}}/vendor/php-email-form/validate.js"></script>
 <script src="{{asset('assets')}}/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="{{asset('assets')}}/vendor/waypoints/noframework.waypoints.js"></script>

 <!-- Template Main JS File -->
 <script src="{{asset('assets')}}/js/main.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
    $(document).ready(function() {

        window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#5868b5"
    },
    "button": {
      "background": "transparent",
      "text": "#f1d600",
      "border": "#f1d600"
    }
  },
  "position": "top",
  "static": true,
  "type": "opt-out",
  "content": {
    "message": "Мы используем куки!",
    "dismiss": "Отставить",
    "deny": "Не соглашусь-ка",
    "link": "Подробнее"
  }
});
console.log( "ready!" );
});
</script>
