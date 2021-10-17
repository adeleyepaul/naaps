@extends('layouts.app')

@section('content')
    <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/naaps/about.jpeg">
      <div class="container pt-70 pb-50">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-12">
              <h4 class="title text-white">About</h4>
              <ul class="breadcrumb white">
                <li><a class="text-white" href="./">Home</a></li>
                <li class="active">About</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-uppercase mt-0">Welcome To <span class="text-theme-colored">New Analysis Associates Psychology Service </span> </h2>
              <p>New Analysis Associates Psychological Service (NAAPS) is a registered Liability Company in Nigeria, based in Lagos. It offers a range of services for 
                  children and young people (CYP) / adults, parents and professionals alike ranging from consultancy, assessment, selection and recruitment, research, 
                  psychological support, and therapeutic intervention.
                </p> 
              <p>NAAPS has a team of registered practitioners with established career in Clinical / Educational Psychology, Speech and 
                  Language, and Occupational Therapies. The Team is skilled in diagnostic assessments and working with individuals/ 
                  groups with varied needs. We are well networked professionally, with medical, legal, and teaching specialists. </p>
            </div>
            <div class="col-md-6">
              <div class="row mb-10">
                <div class="col-sm-6 col-md-6 pl-5 pl-sm-15">
                  <img class="img-fullwidth" src="images/naaps/about1.jpeg" alt="">
                </div>
                <div class="col-sm-6 col-md-6 pr-5 pr-sm-15 mb-sm-10">
                  <img class="img-fullwidth" src="images/naaps/gallery2.jpeg" alt="">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-6 pr-5 pr-sm-15 mb-sm-10">
                  <img class="img-fullwidth" src="images/naaps/about2.jpeg" alt="">
                </div>
                <div class="col-sm-6 col-md-6 pl-5 pl-sm-15">
                  <img class="img-fullwidth" src="images/naaps/gallery9.jpeg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 <!-- Section: About  -->
 <section class="">
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-md-6">
          <img class="img-fullwidth" src="images/naaps/unnamed1.jpg" alt="">
          <h3 class="line-bottom-double-line">Dr. Funmilola Omotayo</h3>
        </div>
        <div class="col-md-6">
          <h3 class=" mt-0 mt-sm-30">New Analysis Associates – Psychological Service (NAAPS)</h3>
          <p class="mb-30">NAAPS works in consultation with parents and professionals to: </p>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="icon-box p-0 mb-30">
                {{-- <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#"> --}}
                  {{-- <i class="fa fa-comments-o text-white font-36"></i> --}}
                {{-- </a> --}}
                <h5 class="icon-box-title m-0 mb-5"><li style="align:justify;">Provide assessment in understanding child development and how it affects learning and behaviour.</li></h5>
                {{-- <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni temporibus voluptates adipisicing..</p>
               <a href="#" class="text-theme-colored font-13">Read More →</a> --}}
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="icon-box p-0 mb-30">
                {{-- <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                  <i class="fa fa-recycle text-white font-36"></i>
                </a>
                <h4 class="icon-box-title m-0 mb-5">Remove Depression</h4> --}}
                <h5 class="icon-box-title m-0 mb-5"><li style="align:justify">Administer appropriate psychometric, behavioural and attitudinal profiling tools, to get the absolute best from each individual’s potential.</li></h5>
               {{-- <a href="#" class="text-theme-colored font-13">Read More →</a> --}}
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="icon-box p-0 mb-sm-30">
                {{-- <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                  <i class="fa fa-certificate text-white font-36"></i>
                </a> --}}
                <h5 class="icon-box-title m-0 mb-5"><li style="align:justify">Identify profile of learning preferences and help plan individual learning programs to promote inclusion.</li></h5>
                {{-- <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni temporibus voluptates adipisicing..</p>
               <a href="#" class="text-theme-colored font-13">Read More →</a> --}}
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="icon-box p-0">
                {{-- <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                  <i class="fa fa-stethoscope text-white font-36"></i>
                </a> --}}
                <h5 class="icon-box-title m-0 mb-5"><li style="align:justify">Undertake research to establish a norm standardised on the representative of the Nigerian child.</li></h5>
                {{-- <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni temporibus voluptates adipisicing..</p>
               <a href="#" class="text-theme-colored font-13">Read More →</a> --}}
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="icon-box p-0">
                {{-- <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                  <i class="fa fa-stethoscope text-white font-36"></i>
                </a> --}}
                <h5 class="icon-box-title m-0 mb-5"><li style="align:justify">Offer training for staff development and parent body.</li></h5>
                {{-- <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni temporibus voluptates adipisicing..</p>
               <a href="#" class="text-theme-colored font-13">Read More →</a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
@endsection