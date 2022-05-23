@extends('layouts.app')

@section('content')

    <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/naaps/contact.jpg">
      <div class="container pt-70 pb-50">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h4 class="title text-white">Our Service Model</h4>
              <ul class="breadcrumb white">
                <li><a class="text-white" href="/">Home</a></li>
                <li class="active">Intervention</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
    <section>
        <div class="container">

          {{-- @include('inc.services') --}}
            <div class="col-sm-5 col-md-7 col-lg-11">
                <div class="maxwidth500 mb-30">
                  <h3 class="text-theme-colored font-weight-700 mb-0"> Our Service Model</h3>
                  <img src="images/naaps/model.png" alt="">
                </div>
            <div class="col-sm-5 col-md-7 col-lg-11">
              <div class="campaign bg-silver-light maxwidth500 mb-30">
                <div class="campaign-details clearfix p-15 pt-10 pb-10">
                  {{-- <h4 class="font-weight-700 mt-0"><a href="#">Personal Development</a></h4> --}}
                  <h3 class="text-theme-colored font-weight-700 mb-0">INTERVENTION / THERAPEUTIC INTERVENTION</h3>
                  <p>This includes:
                      <ul>
                          <li>Group work with children and young people (CYP) / adults</li>
                          <li>Drop-in service</li>
                          <li>Virtual Support</li>
                          <li>Transition planning (migration and children who are internationally mobile)</li>
                          <li>Programmes to improve CYP / adults learning skills and attainments</li>
                          <ul>
                              <ol>Reading, Spelling, Comprehension</ol>
                              <ol>Handwriting</ol>
                              <ol>Literacy & Numeracy</ol>
                              <ol>Social skills, and social communication</ol>
                          </ul>
                      </ul>
                  </p>
                </div>
              </div>
            </div>
        </div>
            @include('inc.other-services')
      </section>



      <!-- Divider: Clients -->
    {{-- <section class="clients bg-theme-colored">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col clients-logo transparent text-center">
              <div class="item"> <a href="#"><img src="images/clients/w1.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w2.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

      {{-- <div class="col-sm-5 col-md-7 col-lg-11">
        <div class="maxwidth500 mb-30">
          <h3 class="text-theme-colored font-weight-700 mb-0" style="text-align: center;">Other Support</h3>
        </div>
      </div> --}}

  </div>

@endsection
