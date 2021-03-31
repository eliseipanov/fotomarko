 <!-- ======= About Section ======= -->
 <section id="about" class="about">
    <div class="container">

      <div class="row content">
        <div class="col-lg-6">
          <h2>{{ $blockabout[0]->getTranslatedAttribute('title') }}</h2>
          <h3>{!! $blockabout[0]->getTranslatedAttribute('subtitle') !!}</h3>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          {!! $blockabout[0]->getTranslatedAttribute('text') !!}
          <p class="font-italic">
            Oleksii Marchenko
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->
