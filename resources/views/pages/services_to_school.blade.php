@extends('layouts.app')

@section('content')
    <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/naaps/service.jpeg">
      <div class="container pt-70 pb-50">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <ul class="breadcrumb white">
                <li><a class="text-white" href="/">Home</a></li>
                <li class="active">Services Details</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
    <section>
      <div class="container">

        @include('inc.services')

          <div class="col-sm-5 col-md-7 col-lg-11">
            <div class="campaign bg-silver-light maxwidth500 mb-30">
              <div class="thumb">
                <img src="images/services/single-Service4.html" alt="" class="img-fullwidth">
                <div class="campaign-overlay"></div>
              </div>
              <div class="campaign-details clearfix p-15 pt-10 pb-10">
                <h4 class="text-theme-colored font-weight-700 mb-0">Services to School</h4>
                {{-- <h4 class="font-weight-700 mt-0"><a href="#">Personal Development</a></h4> --}}<br/>
                <img src="images/naaps/picture2.png" />
                <p></p>
                <img src="images/naaps/picture3.png" />
                <div class="campaign-bottom border-top clearfix mt-20">
                  <a class="btn btn-xs btn-theme-colored font-weight-600 font-11 pull-right flip mt-10" href="#">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection