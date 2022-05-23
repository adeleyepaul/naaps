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
                <li class="active"> Consultation</li>
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
                  <h3 class="text-theme-colored font-weight-700 mb-0">Consultation</h3>
                  <p>Involves gathering information from relevant sources such as parents/carers as well
                      as teachers and other professionals involved with the client.  Using coaching and
                      problem-solving techniques working with teachers and adults to devise more effective
                      ways of helping children and young people (CYP) / adults to develop and learn.
                  </p>
                </div>
              </div>
            </div>
        </div>
      </section>

  </div>

@endsection
