<section id="contact" class="contact">
    <div class="container">

      <div>
        <iframe style="border:0; width: 100%; height: 300px;" src="https://maps.google.com/maps?q=Osnabrueck&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
      </div>
      <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="290px" id="gmap_canvas" src="https://maps.google.com/maps?q=Osnabrueck&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://youtube-embed-code.com"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://google-map-generator.com">embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
   -->
      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>{{__('mainpage.location')}}:</h4>
              <p>Bremer Str 175, Osnabrück, 49086 </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>oleksii.pmarchenko@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>{{__('mainpage.call')}}:</h4>
              <p>+49 176 779 759 78</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form name="con-form" id="conform" action="https://fotomarko.de/forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="{{__('mainpage.yourname')}}" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="{{__('mainpage.yourmail') }}" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="{{__('mainpage.subject')}}" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" id="message" name="message" rows="5" placeholder="{{__('mainpage.message')}}" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">{{ __('mainpage.loading') }}</div>
              <div class="error-message"></div>
              <div class="sent-message">{{__('mainpage.messagesent')}}</div>
            </div>
            <div class="text-center">
              <div class="g-recaptcha" data-sitekey="6LdBac4cAAAAABO_nymVeYO_MBvj2HKzShpwC3fh"></div>
            </div>
            {{-- </div> --}}
            <div class="text-center"><button type="button" onclick="send2AjaxRequest()">{{ __('mainpage.sendmessage') }}</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
